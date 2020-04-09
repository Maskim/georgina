<?php

if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

class BorderlandElatedImport {
	public $message = "";
	public $attachments = false;
	
	function __construct() {
		add_action( 'admin_menu', array( &$this, 'add_submenu_page' ) );
		add_action( 'admin_init', array( &$this, 'register_theme_settings' ) );
	}
	
	function register_theme_settings() {
		register_setting( 'eltd_options_import_page', 'eltd_options_import' );
	}
	
	public function import_content( $file ) {
		ob_start();
		$class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
		require_once( $class_wp_importer );
		require_once ELATED_CPT_MODULES_PATH . '/import/class.wordpress-importer.php';
		$eltd_import = new WP_Import();
		set_time_limit( 0 );
		
		$eltd_import->fetch_attachments = $this->attachments;
		$returned_value                 = $eltd_import->import( $file );
		if ( is_wp_error( $returned_value ) ) {
			$this->message = esc_html__( "An Error Occurred During Import", "eltd-cpt" );
		} else {
			$this->message = esc_html__( "Content imported successfully", "eltd-cpt" );
		}
		ob_get_clean();
	}
	
	public function import_widgets( $file, $file2 ) {
		$this->import_custom_sidebars( $file2 );
		$options = $this->file_options( $file );
		foreach ( (array) $options['widgets'] as $eltd_widget_id => $eltd_widget_data ) {
			update_option( 'widget_' . $eltd_widget_id, $eltd_widget_data );
		}
		$this->import_sidebars_widgets( $file );
		$this->message = esc_html__( "Widgets imported successfully", "eltd-cpt" );
	}
	
	public function import_sidebars_widgets( $file ) {
		$eltd_sidebars = get_option( "sidebars_widgets" );
		unset( $eltd_sidebars['array_version'] );
		$data = $this->file_options( $file );
		if ( is_array( $data['sidebars'] ) ) {
			$eltd_sidebars = array_merge( (array) $eltd_sidebars, (array) $data['sidebars'] );
			unset( $eltd_sidebars['wp_inactive_widgets'] );
			$eltd_sidebars                  = array_merge( array( 'wp_inactive_widgets' => array() ), $eltd_sidebars );
			$eltd_sidebars['array_version'] = 2;
			wp_set_sidebars_widgets( $eltd_sidebars );
		}
	}
	
	public function import_custom_sidebars( $file ) {
		$options = $this->file_options( $file );
		update_option( 'eltd_sidebars', $options );
		$this->message = esc_html__( "Custom sidebars imported successfully", "eltd-cpt" );
	}
	
	public function import_options( $file ) {
		$options = $this->file_options( $file );
		update_option( 'eltd_options_borderland', $options );
		$this->message = esc_html__( "Options imported successfully", "eltd-cpt" );
	}
	
	public function import_menus( $file ) {
		global $wpdb;
		$eltd_terms_table = $wpdb->prefix . "terms";
		$this->menus_data = $this->file_options( $file );
		$menu_array       = array();
		foreach ( $this->menus_data as $registered_menu => $menu_slug ) {
			$term_rows = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $eltd_terms_table where slug=%s", $menu_slug ), ARRAY_A );
			if ( isset( $term_rows[0]['term_id'] ) ) {
				$term_id_by_slug = $term_rows[0]['term_id'];
			} else {
				$term_id_by_slug = null;
			}
			$menu_array[ $registered_menu ] = $term_id_by_slug;
		}
		set_theme_mod( 'nav_menu_locations', array_map( 'absint', $menu_array ) );
		
	}
	
	public function import_settings_pages( $file ) {
		$pages = $this->file_options( $file );
		foreach ( $pages as $eltd_page_option => $eltd_page_id ) {
			update_option( $eltd_page_option, $eltd_page_id );
		}
	}
	
	function update_meta_fields_after_import( $folder ) {
		global $wpdb;
		
		$url       = home_url( '/' );
		$demo_urls = $this->import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$sql_query   = "SELECT meta_id, meta_value FROM {$wpdb->postmeta} WHERE meta_key LIKE 'eltd%' AND meta_value LIKE '" . esc_url( $demo_url ) . "%';";
			$meta_values = $wpdb->get_results( $sql_query );
			
			if ( ! empty( $meta_values ) ) {
				foreach ( $meta_values as $meta_value ) {
					$new_value = $this->recalc_serialized_lengths( str_replace( $demo_url, $url, $meta_value->meta_value ) );
					
					$wpdb->update( $wpdb->postmeta,	array( 'meta_value' => $new_value ), array( 'meta_id' => $meta_value->meta_id )	);
				}
			}
		}
	}
	
	function update_options_after_import( $folder ) {
		$url       = home_url( '/' );
		$demo_urls = $this->import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$global_options    = get_option( 'eltd_options_borderland' );
			$new_global_values = str_replace( $demo_url, $url, $global_options );
			
			update_option( 'eltd_options_borderland', $new_global_values );
		}
	}
	
	function import_get_demo_urls( $folder ) {
		$demo_urls  = array();
		$domain_url = 'demo.elated-themes.com/' . $folder;
		
		$demo_urls[] = ! empty( $domain_url ) ? 'http://' . $domain_url : '';
		$demo_urls[] = ! empty( $domain_url ) ? 'https://' . $domain_url : '';
		
		return $demo_urls;
	}
	
	function recalc_serialized_lengths( $sObject ) {
		$ret = preg_replace_callback( '!s:(\d+):"(.*?)";!', 'recalc_serialized_lengths_callback', $sObject );
		
		return $ret;
	}
	
	function recalc_serialized_lengths_callback( $matches ) {
		return "s:" . strlen( $matches[2] ) . ":\"$matches[2]\";";
	}
	
	public function file_options( $file ) {
		$file_content = $this->main_file_contents( $file );
		if ( $file_content ) {
			$unserialized_content = unserialize( base64_decode( $file_content ) );
			if ( $unserialized_content ) {
				return $unserialized_content;
			}
		}
		
		return false;
	}
	
	function main_file_contents( $path ) {
		$url      = "http://export.elated-themes.com/" . $path;
		$response = wp_remote_get( $url );
		$body     = wp_remote_retrieve_body( $response );
		
		return $body;
	}
	
	function add_submenu_page() {
		global $borderland_elated_framework;
		
		$slug           = "_tabimport";
		$this->pagehook = add_submenu_page(
			'eltd_theme_menu',
			esc_html__( 'Elated Options - Elated Import', 'eltd-cpt' ),                   // The value used to populate the browser's title bar when the menu page is active
			esc_html__( 'Import', 'eltd-cpt' ),                   // The text of the menu in the administrator's sidebar
			'administrator',                  // What roles are able to access the menu
			'eltd_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
			array( $borderland_elated_framework->getSkin(), 'renderImport' )
		);
		
		add_action( 'admin_print_scripts-' . $this->pagehook, 'borderland_elated_enqueue_admin_scripts' );
		add_action( 'admin_print_styles-' . $this->pagehook, 'borderland_elated_enqueue_admin_styles' );
	}
	
}

if ( ! function_exists( 'borderland_elated_initialize_import_object' ) ) {
	function borderland_elated_initialize_import_object() {
		$borderland_elated_import_object = borderland_elated_get_import_object();
	}
	
	add_action( 'init', 'borderland_elated_initialize_import_object' );
}

if ( ! function_exists( 'borderland_elated_get_import_object' ) ) {
	function borderland_elated_get_import_object() {
		$import_object = new BorderlandElatedImport();
		
		return $import_object;
	}
}

if ( ! function_exists( 'borderland_elated_data_import' ) ) {
	function borderland_elated_data_import() {
		$borderland_elated_import = borderland_elated_get_import_object();
		
		if ( $_POST['import_attachments'] == 1 ) {
			$borderland_elated_import->attachments = true;
		} else {
			$borderland_elated_import->attachments = false;
		}
		
		$folder = "borderland1/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$borderland_elated_import->import_content( $folder . $_POST['xml'] );
		$borderland_elated_import->update_meta_fields_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_borderland_elated_action_data_import', 'borderland_elated_data_import' );
}

if ( ! function_exists( 'borderland_elated_widgets_import' ) ) {
	function borderland_elated_widgets_import() {
		$borderland_elated_import = borderland_elated_get_import_object();
		
		$folder = "borderland1/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$borderland_elated_import->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		
		die();
	}
	
	add_action( 'wp_ajax_borderland_elated_action_widgets_import', 'borderland_elated_widgets_import' );
}

if ( ! function_exists( 'borderland_elated_options_import' ) ) {
	function borderland_elated_options_import() {
		$borderland_elated_import = borderland_elated_get_import_object();
		
		$folder = "borderland1/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$borderland_elated_import->import_options( $folder . 'options.txt' );
		$borderland_elated_import->update_options_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_borderland_elated_action_options_import', 'borderland_elated_options_import' );
}

if ( ! function_exists( 'borderland_elated_other_import' ) ) {
	function borderland_elated_other_import() {
		$borderland_elated_import = borderland_elated_get_import_object();
		
		$folder = "borderland1/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$borderland_elated_import->import_options( $folder . 'options.txt' );
		$borderland_elated_import->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		$borderland_elated_import->import_menus( $folder . 'menus.txt' );
		$borderland_elated_import->import_settings_pages( $folder . 'settingpages.txt' );
		
		$borderland_elated_import->update_meta_fields_after_import( $folder );
		$borderland_elated_import->update_options_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_borderland_elated_action_other_import', 'borderland_elated_other_import' );
}