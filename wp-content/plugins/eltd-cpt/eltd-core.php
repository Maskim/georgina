<?php
/*
Plugin Name: Elated CPT
Description: Plugin that adds all custom post types that are needed by Elated theme
Author: Elated Themes
Version: 1.1.3
*/
if ( ! class_exists( 'ElatedCPT' ) ) {
	class ElatedCPT {
		private static $instance;
		
		public function __construct() {
			require_once 'constants.php';
			require_once 'helpers/helper.php';
			
			// Make plugin available for translation
			add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
			
			// Add plugin's body classes
			add_filter( 'body_class', array( $this, 'add_body_classes' ) );
			
			add_action( 'after_setup_theme', array( $this, 'init' ), 5 );
		}
		
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			
			return self::$instance;
		}
		
		function load_plugin_textdomain() {
			load_plugin_textdomain( 'eltd-cpt', false, ELATED_CPT_REL_PATH . '/languages' );
		}
		
		function add_body_classes( $classes ) {
			$classes[] = 'eltd-core-' . ELATED_CPT_VERSION;
			
			return $classes;
		}
		
		function init() {
			
			if ( borderland_elated_cpt_is_installed( 'theme' ) ) {
				include_once ELATED_CPT_MODULES_PATH . '/helper.php';
				include_once ELATED_CPT_MODULES_PATH . '/import/eltd-import.php';
				
				add_action( 'init', array( $this, 'cpt_activation' ), 0 );
			}
		}
		
		function cpt_activation() {
			EltdCPT::getInstance()->registerCPT();
			
			flush_rewrite_rules();
		}
	}
	
	ElatedCPT::get_instance();
}
