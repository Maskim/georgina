<?php

require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/lib/eltd.layout.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/lib/google-fonts.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/lib/eltd.framework.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/lib/eltd.functions.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/lib/eltd.icons/eltd.icons.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/eltd-options-setup.php" );
require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/eltd-meta-boxes-setup.php" );

if ( ! function_exists( 'borderland_elated_framework' ) ) {
	/**
	 * Function that returns instance of BorderlandElatedFramework class
	 *
	 * @return BorderlandElatedFramework
	 */
	function borderland_elated_framework() {
		return BorderlandElatedFramework::get_instance();
	}
}

if ( ! function_exists( 'borderland_elated_options' ) ) {
	/**
	 * Returns instance of BorderlandElatedOptions class
	 *
	 * @return BorderlandElatedOptions
	 */
	function borderland_elated_options() {
		return borderland_elated_framework()->eltdOptions;
	}
}

if ( ! function_exists( 'borderland_elated_icon_collections' ) ) {
	/**
	 * @return BorderlandElatedIconCollections
	 */
	function borderland_elated_icon_collections() {
		return BorderlandElatedIconCollections::get_instance();
	}
}

if ( ! function_exists( 'borderland_elated_get_icon_collections' ) ) {
	function borderland_elated_get_icon_collections( $type = '' ) {
		$icons = borderland_elated_icon_collections();
		
		if ( ! empty( $icons ) ) {
			switch ( $type ) {
				case 'empty':
					return $icons->getIconCollectionsEmpty();
					break;
				default:
					return $icons->getIconCollections();
			}
		} else {
			return array();
		}
	}
}

if ( ! function_exists( 'borderland_elated_admin_scripts_init' ) ) {
	/**
	 * Function that registers all scripts that are necessary for our back-end
	 */
	function borderland_elated_admin_scripts_init() {
		wp_register_style( 'borderland-admin-ui', get_template_directory_uri() . '/framework/admin/assets/css/jquery-ui/jquery-ui.css' );
		wp_register_script( 'borderland-admin-dependence', get_template_directory_uri() . '/framework/admin/assets/js/eltdf-ui/eltdf-dependence.js' );
		
		/**
		 * @see BorderlandElatedSkinAbstract::registerScripts - hooked with 10
		 * @see BorderlandElatedSkinAbstract::registerStyles - hooked with 10
		 */
		do_action( 'borderland_elated_action_admin_scripts' );
	}
	
	add_action( 'admin_init', 'borderland_elated_admin_scripts_init' );
}

if ( ! function_exists( 'borderland_elated_enqueue_admin_styles' ) ) {
	/**
	 * Function that enqueues styles for options page
	 */
	function borderland_elated_enqueue_admin_styles() {
		wp_enqueue_style( 'wp-color-picker' );
		
		/**
		 * @see BorderlandElatedSkinAbstract::enqueueStyles - hooked with 10
		 */
		do_action( 'borderland_elated_action_enqueue_admin_styles' );
	}
}

if ( ! function_exists( 'borderland_elated_enqueue_admin_scripts' ) ) {
	/**
	 * Function that enqueues styles for options page
	 */
	function borderland_elated_enqueue_admin_scripts() {
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'common' );
		wp_enqueue_script( 'wp-lists' );
		wp_enqueue_script( 'postbox' );
		wp_enqueue_media();
		wp_enqueue_script( 'borderland-admin-dependence' );
		
		/**
		 * @see BorderlandElatedSkinAbstract::enqueueScripts - hooked with 10
		 */
		do_action( 'borderland_elated_action_enqueue_admin_scripts' );
	}
}

if ( ! function_exists( 'borderland_elated_enqueue_meta_box_styles' ) ) {
	/**
	 * Function that enqueues styles for meta boxes
	 */
	function borderland_elated_enqueue_meta_box_styles() {
		wp_enqueue_style( 'wp-color-picker' );
		
		/**
		 * @see BorderlandElatedSkinAbstract::enqueueStyles - hooked with 10
		 */
		do_action( 'borderland_elated_action_meta_box_styles' );
	}
}

if ( ! function_exists( 'borderland_elated_enqueue_meta_box_scripts' ) ) {
	/**
	 * Function that enqueues scripts for meta boxes
	 */
	function borderland_elated_enqueue_meta_box_scripts() {
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'common' );
		wp_enqueue_script( 'wp-lists' );
		wp_enqueue_script( 'postbox' );
		wp_enqueue_media();
		wp_enqueue_script( 'borderland-admin-dependence' );
		
		/**
		 * @see BorderlandElatedSkinAbstract::enqueueScripts - hooked with 10
		 */
		do_action( 'borderland_elated_action_meta_box_scripts' );
	}
}

if ( ! function_exists( 'borderland_elated_enqueue_nav_menu_script' ) ) {
	/**
	 * Function that enqueues styles and scripts necessary for menu administration page.
	 * It checks $hook variable
	 *
	 * @param $hook string current page hook to check
	 */
	function borderland_elated_enqueue_nav_menu_script( $hook ) {
		if ( $hook == 'nav-menus.php' ) {
			wp_enqueue_script( 'borderland-admin-nav-menu', get_template_directory_uri() . '/framework/admin/assets/js/eltdf-nav-menu.js' );
			wp_enqueue_style( 'borderland-admin-nav-menu', get_template_directory_uri() . '/framework/admin/assets/css/eltdf-nav-menu.css' );
		}
	}
	
	add_action( 'admin_enqueue_scripts', 'borderland_elated_enqueue_nav_menu_script' );
}

if ( ! function_exists( 'borderland_elated_enqueue_widgets_admin_script' ) ) {
	/**
	 * Function that enqueues styles and scripts for admin widgets page.
	 *
	 * @param $hook string current page hook to check
	 */
	function borderland_elated_enqueue_widgets_admin_script( $hook ) {
		if ( $hook == 'widgets.php' ) {
			wp_enqueue_script( 'borderland-admin-dependence' );
		}
	}
	
	add_action( 'admin_enqueue_scripts', 'borderland_elated_enqueue_widgets_admin_script' );
}

if ( ! function_exists( 'borderland_elated_enqueue_styles_slider_taxonomy' ) ) {
	/**
	 * Enqueue styles when on slider taxonomy page in admin
	 */
	function borderland_elated_enqueue_styles_slider_taxonomy() {
		if ( isset( $_GET['taxonomy'] ) && $_GET['taxonomy'] == 'slides_category' ) {
			borderland_elated_enqueue_admin_styles();
		}
	}
	
	add_action( 'admin_print_scripts-edit-tags.php', 'borderland_elated_enqueue_styles_slider_taxonomy' );
}

if ( ! function_exists( 'borderland_elated_init_theme_options_array' ) ) {
	/**
	 * Function that merges $borderland_elated_options and default options array into one array.
	 *
	 * @see array_merge()
	 */
	function borderland_elated_init_theme_options_array() {
		global $borderland_elated_options, $borderland_elated_framework;
		
		$db_options = get_option( 'eltd_options_borderland' );
		
		//does eltd_options exists in db?
		if ( is_array( $db_options ) ) {
			//merge with default options
			$borderland_elated_options = array_merge( $borderland_elated_framework->eltdOptions->options, get_option( 'eltd_options_borderland' ) );
		} else {
			//options don't exists in db, take default ones
			$borderland_elated_options = $borderland_elated_framework->eltdOptions->options;
		}
	}
	
	//priority needs to be greater than 0, because theme options are initialized on after_setup_theme 0
	add_action( 'after_setup_theme', 'borderland_elated_init_theme_options_array', 2 );
}

if ( ! function_exists( 'borderland_elated_init_theme_options' ) ) {
	/**
	 * Function that sets $borderland_elated_options variable if it does'nt exists
	 */
	function borderland_elated_init_theme_options() {
		global $borderland_elated_options;
		global $borderland_elated_framework;
		
		if ( isset( $borderland_elated_options['reset_to_defaults'] ) && $borderland_elated_options['reset_to_defaults'] == 'yes' ) {
			delete_option( "eltd_options_borderland" );
		}
		
		if ( ! get_option( "eltd_options_borderland" ) ) {
			add_option( "eltd_options_borderland", $borderland_elated_framework->eltdOptions->options );
			
			$borderland_elated_options = $borderland_elated_framework->eltdOptions->options;
		}
	}
}

if ( ! function_exists( 'borderland_elated_theme_menu' ) ) {
	/**
	 * Function that generates admin menu for options page.
	 * It generates one admin page per options page.
	 */
	function borderland_elated_theme_menu() {
		global $borderland_elated_framework;
		borderland_elated_init_theme_options();
		
		$page_hook_suffix = add_menu_page(
			esc_html__( 'Elated Options', 'borderland' ),                  // The value used to populate the browser's title bar when the menu page is active
			esc_html__( 'Elated Options', 'borderland' ),                   // The text of the menu in the administrator's sidebar
			'administrator',                  // What roles are able to access the menu
			'eltd_theme_menu',                // The ID used to bind submenu items to this menu
			array( $borderland_elated_framework->getSkin(), 'renderOptions' ), // The callback function used to render this menu
			$borderland_elated_framework->getSkin()->getMenuIcon( 'options' ),             // Icon For menu Item
			$borderland_elated_framework->getSkin()->getMenuItemPosition( 'options' )            // Position
		);
		
		foreach ( $borderland_elated_framework->eltdOptions->adminPages as $key => $value ) {
			$slug = "";
			
			if ( ! empty( $value->slug ) ) {
				$slug = "_tab" . $value->slug;
			}
			
			$subpage_hook_suffix = add_submenu_page(
				'eltd_theme_menu',
				esc_html__( 'Elated Options - ', 'borderland' ) . $value->title,                   // The value used to populate the browser's title bar when the menu page is active
				$value->title,                   // The text of the menu in the administrator's sidebar
				'administrator',                  // What roles are able to access the menu
				'eltd_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
				array( $borderland_elated_framework->getSkin(), 'renderOptions' )
			);
			
			add_action( 'admin_print_scripts-' . $subpage_hook_suffix, 'borderland_elated_enqueue_admin_scripts' );
			add_action( 'admin_print_styles-' . $subpage_hook_suffix, 'borderland_elated_enqueue_admin_styles' );
		};
		
		add_action( 'admin_print_scripts-' . $page_hook_suffix, 'borderland_elated_enqueue_admin_scripts' );
		add_action( 'admin_print_styles-' . $page_hook_suffix, 'borderland_elated_enqueue_admin_styles' );
	}
	
	add_action( 'admin_menu', 'borderland_elated_theme_menu' );
}

if ( ! function_exists( 'borderland_elated_register_theme_settings' ) ) {
	/**
	 * Function that registers setting that will be used to store theme options
	 */
	function borderland_elated_register_theme_settings() {
		register_setting( 'eltd_theme_menu', 'eltd_options' );
	}
	
	add_action( 'admin_init', 'borderland_elated_register_theme_settings' );
}

if ( ! function_exists( 'borderland_elated_get_admin_tab' ) ) {
	/**
	 * Helper function that returns current tab from url.
	 * @return null
	 */
	function borderland_elated_get_admin_tab() {
		return isset( $_GET['page'] ) ? borderland_elated_strafter( $_GET['page'], 'tab' ) : null;
	}
}

if ( ! function_exists( 'borderland_elated_strafter' ) ) {
	/**
	 * Function that returns string that comes after found string
	 *
	 * @param $string string where to search
	 * @param $substring string what to search for
	 *
	 * @return null|string string that comes after found string
	 */
	function borderland_elated_strafter( $string, $substring ) {
		$pos = strpos( $string, $substring );
		if ( $pos === false ) {
			return null;
		}
		
		return ( substr( $string, $pos + strlen( $substring ) ) );
	}
}

if ( ! function_exists( 'borderland_elated_save_options' ) ) {
	/**
	 * Function that saves theme options to db.
	 * It hooks to ajax wp_ajax_eltdf_save_options action.
	 */
	function borderland_elated_save_options() {
		global $borderland_elated_options;
		global $borderland_elated_framework;
		
		if ( current_user_can( 'administrator' ) ) {
			$_REQUEST = stripslashes_deep( $_REQUEST );
			
			check_ajax_referer( 'eltd_ajax_save_nonce', 'eltd_ajax_save_nonce' );
			
			foreach ( $borderland_elated_framework->eltdOptions->options as $key => $value ) {
				if ( isset( $_REQUEST[ $key ] ) ) {
					$borderland_elated_options[ $key ] = $_REQUEST[ $key ];
				}
			}
			
			update_option( 'eltd_options_borderland', $borderland_elated_options );
			
			do_action( 'borderland_elated_action_after_theme_option_save' );
			echo esc_html__( "Saved", 'borderland' );
			
			die();
		}
	}
	
	add_action( 'wp_ajax_eltdf_save_options', 'borderland_elated_save_options' );
}

if ( ! function_exists( 'borderland_elated_meta_box_add' ) ) {
	/**
	 * Function that adds all defined meta boxes.
	 * It loops through array of created meta boxes and adds them
	 */
	function borderland_elated_meta_box_add() {
		global $borderland_elated_framework;
		
		foreach ( $borderland_elated_framework->eltdMetaBoxes->metaBoxes as $key => $box ) {
			$hidden = false;
			if ( ! empty( $box->hidden_property ) ) {
				foreach ( $box->hidden_values as $value ) {
					if ( borderland_elated_option_get_value( $box->hidden_property ) == $value ) {
						$hidden = true;
					}
				}
			}
			
			borderland_elated_create_meta_box_handler($box, $key);
			
			if ( $hidden ) {
				add_filter( 'postbox_classes_' . $box->scope . '_eltdf-meta-box-' . $key, 'borderland_elated_meta_box_add_hidden_class' );
			}
		}
		
		if ( borderland_elated_is_gutenberg_installed() || borderland_elated_is_wp_gutenberg_installed() ) {
			borderland_elated_enqueue_meta_box_styles();
			borderland_elated_enqueue_meta_box_scripts();
		} else {
			add_action( 'admin_enqueue_scripts', 'borderland_elated_enqueue_meta_box_styles' );
			add_action( 'admin_enqueue_scripts', 'borderland_elated_enqueue_meta_box_scripts' );
		}
	}
}

if ( ! function_exists( 'borderland_elated_meta_box_save' ) ) {
	/**
	 * Function that saves meta box to postmeta table
	 *
	 * @param $post_id int id of post that meta box is being saved
	 * @param $post WP_Post current post object
	 */
	function borderland_elated_meta_box_save( $post_id, $post ) {
		global $borderland_elated_framework;
		
		$postTypes = array(
			"page",
			"post",
			"portfolio_page",
			"testimonials",
			"slides",
			"carousels",
			"masonry_gallery"
		);
		
		if ( ! isset( $_POST['_wpnonce'] ) ) {
			return;
		}
		
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		
		if ( ! in_array( $post->post_type, $postTypes ) ) {
			return;
		}
		
		foreach ( $borderland_elated_framework->eltdMetaBoxes->options as $key => $box ) {
			
			if ( isset( $_POST[ $key ] ) && trim( $_POST[ $key ] !== '' ) ) {
				$value = $_POST[ $key ];
				
				update_post_meta( $post_id, $key, $value );
			} else {
				delete_post_meta( $post_id, $key );
			}
		}
		
		$portfolios = false;
		if ( isset( $_POST['optionLabel'] ) && ! empty( $_POST['optionLabel'] ) ) {
			foreach ( $_POST['optionLabel'] as $key => $value ) {
				$portfolios_val[ $key ] = array(
					'optionLabel'            => $value,
					'optionValue'            => $_POST['optionValue'][ $key ],
					'optionUrl'              => $_POST['optionUrl'][ $key ],
					'optionlabelordernumber' => $_POST['optionlabelordernumber'][ $key ]
				);
				
				$portfolios = true;
			}
		}
		
		if ( $portfolios ) {
			update_post_meta( $post_id, 'eltd_portfolios', $portfolios_val );
		} else {
			delete_post_meta( $post_id, 'eltd_portfolios' );
		}
		
		$portfolio_images = false;
		if ( isset( $_POST['portfolioimg'] ) ) {
			foreach ( $_POST['portfolioimg'] as $key => $value ) {
				$portfolio_images_val[ $key ] = array(
					'portfolioimg'            => $_POST['portfolioimg'][ $key ],
					'portfoliotitle'          => $_POST['portfoliotitle'][ $key ],
					'portfolioimgordernumber' => $_POST['portfolioimgordernumber'][ $key ],
					'portfoliovideotype'      => $_POST['portfoliovideotype'][ $key ],
					'portfoliovideoid'        => $_POST['portfoliovideoid'][ $key ],
					'portfoliovideoimage'     => $_POST['portfoliovideoimage'][ $key ],
					'portfoliovideowebm'      => $_POST['portfoliovideowebm'][ $key ],
					'portfoliovideomp4'       => $_POST['portfoliovideomp4'][ $key ],
					'portfoliovideoogv'       => $_POST['portfoliovideoogv'][ $key ],
					'portfolioimgtype'        => $_POST['portfolioimgtype'][ $key ]
				);
				
				$portfolio_images = true;
			}
		}
		
		if ( $portfolio_images ) {
			update_post_meta( $post_id, 'eltd_portfolio_images', $portfolio_images_val );
		} else {
			delete_post_meta( $post_id, 'eltd_portfolio_images' );
		}
	}
	
	add_action( 'save_post', 'borderland_elated_meta_box_save', 1, 2 );
}

if ( ! function_exists( 'borderland_elated_render_meta_box' ) ) {
	/**
	 * Function that renders meta box
	 *
	 * @param $post WP_Post post object
	 * @param $metabox array array of current meta box parameters
	 */
	function borderland_elated_render_meta_box( $post, $metabox ) { ?>
		<div class="eltdf-meta-box eltdf-page">
			<div class="eltdf-meta-box-holder">
				<?php $metabox["args"]["box"]->render(); ?>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'borderland_elated_meta_box_add_hidden_class' ) ) {
	/**
	 * Function that adds class that will initially hide meta box
	 *
	 * @param array $classes array of classes
	 *
	 * @return array modified array of classes
	 */
	function borderland_elated_meta_box_add_hidden_class( $classes = array() ) {
		if ( ! in_array( 'eltdf-meta-box-hidden', $classes ) ) {
			$classes[] = 'eltdf-meta-box-hidden';
		}
		
		return $classes;
	}
	
}

if ( ! function_exists( 'borderland_elated_remove_default_custom_fields' ) ) {
	/**
	 * Function that removes default WordPress custom fields interface
	 */
	function borderland_elated_remove_default_custom_fields() {
		foreach ( array( 'normal', 'advanced', 'side' ) as $context ) {
			foreach ( array( "page", "post", "portfolio_page", "testimonials", "slides", "carousels" ) as $postType ) {
				remove_meta_box( 'postcustom', $postType, $context );
			}
		}
	}
	
	add_action( 'do_meta_boxes', 'borderland_elated_remove_default_custom_fields' );
}

if ( ! function_exists( 'borderland_elated_get_custom_sidebars' ) ) {
	/**
	 * Function that returns all custom made sidebars.
	 *
	 * @uses get_option()
	 * @return array array of custom made sidebars where key and value are sidebar name
	 */
	function borderland_elated_get_custom_sidebars() {
		$custom_sidebars = get_option( 'eltd_sidebars' );
		$formatted_array = array();
		
		if ( is_array( $custom_sidebars ) && count( $custom_sidebars ) ) {
			foreach ( $custom_sidebars as $custom_sidebar ) {
				$formatted_array[ $custom_sidebar ] = $custom_sidebar;
			}
		}
		
		return $formatted_array;
	}
}