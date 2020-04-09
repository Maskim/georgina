<?php

//include all necessary files
include_once ELATED_CPT_MODULES_PATH . '/shortcodes/shortcodes.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/eltd-cpt.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/portfolio/eltd.portfolio.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/eltd-slider/shortcodes/eltd.slidersc.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/eltd-slider/eltd-slider-settings.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/testimonials/shortcodes/eltd.testimonialssc.php';
require_once ELATED_CPT_MODULES_PATH . '/cpt/carousels/shortcodes/eltd.carouselsc.php';
include_once ELATED_CPT_MODULES_PATH . '/eltd-like.php';
include_once ELATED_CPT_MODULES_PATH . '/eltd-seo.php';
include_once ELATED_CPT_MODULES_PATH . '/widgets/helper.php';

add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'call_to_action_widget', 'do_shortcode' );

/* Function for adding custom meta boxes hooked to default action */
if ( ! function_exists( 'borderland_elated_include_meta_boxes' ) ) {
	function borderland_elated_include_meta_boxes() {
		if ( class_exists( 'WP_Block_Type' ) && defined( 'BORDERLAND_ROOT' )  ) {
			add_action( 'admin_head', 'borderland_elated_meta_box_add' );
		} else {
			add_action( 'add_meta_boxes', 'borderland_elated_meta_box_add' );
		}
	}
	
	add_action( 'after_setup_theme', 'borderland_elated_include_meta_boxes' );
}

if ( ! function_exists( 'borderland_elated_create_meta_box_handler' ) ) {
	function borderland_elated_create_meta_box_handler( $box, $key ) {
		
		add_meta_box(
			'eltdf-meta-box-' . $key,
			$box->title,
			'borderland_elated_render_meta_box',
			$box->scope,
			'advanced',
			'high',
			array( 'box' => $box )
		);
	}
}

if ( ! function_exists( 'borderland_elated_cpt_get_carousel_slider_array' ) ) {
	/**
	 * Function that returns associative array of carousels,
	 * where key is term slug and value is term name
	 * @return array
	 */
	function borderland_elated_cpt_get_carousel_slider_array() {
		$carousels_array = array();
		$terms           = get_terms( 'carousels_category' );
		
		if ( is_array( $terms ) && count( $terms ) ) {
			$carousels_array[''] = '';
			foreach ( $terms as $term ) {
				$carousels_array[ $term->slug ] = $term->name;
			}
		}
		
		return $carousels_array;
	}
}

if ( ! function_exists( 'borderland_elated_cpt_get_carousel_slider_array_vc' ) ) {
	/**
	 * Function that returns array of carousels formatted for Visual Composer
	 *
	 * @return array array of carousels where key is term title and value is term slug
	 *
	 * @see borderland_elated_cpt_get_carousel_slider_array
	 */
	function borderland_elated_cpt_get_carousel_slider_array_vc() {
		return array_flip( borderland_elated_cpt_get_carousel_slider_array() );
	}
}

if ( ! function_exists( 'borderland_elated_maintenance_mode' ) ) {
	/**
	 * Function that redirects user to desired landing page if maintenance mode is turned on in options
	 */
	function borderland_elated_maintenance_mode() {
		$global_options = borderland_elated_return_global_options();
		
		$protocol = is_ssl() ? "https://" : "http://";
		if ( isset( $global_options['eltd_maintenance_mode'] ) && $global_options['eltd_maintenance_mode'] == 'yes' && isset( $global_options['eltd_maintenance_page'] ) && $global_options['eltd_maintenance_page'] != "" && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) && ! is_admin() && ! is_user_logged_in() && $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] != get_permalink( $global_options['eltd_maintenance_page'] ) ) {
			wp_redirect( get_permalink( esc_url( $global_options['eltd_maintenance_page'] ) ) );
			exit;
		}
	}
}

if ( ! function_exists( 'borderland_elated_initial_maintenance' ) ) {
	/**
	 * Function that initalize maintenance function
	 */
	function borderland_elated_initial_maintenance() {
		$global_options = borderland_elated_return_global_options();
		
		if ( isset( $global_options['eltd_maintenance_mode'] ) && $global_options['eltd_maintenance_mode'] == 'yes' ) {
			add_action( 'init', 'borderland_elated_maintenance_mode', 2 );
		}
	}
	
	add_action( 'init', 'borderland_elated_initial_maintenance', 1 );
}