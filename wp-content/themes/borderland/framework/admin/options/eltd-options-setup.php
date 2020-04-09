<?php

function borderland_elated_admin_map_init() {
	global $borderland_elated_framework;
	
	do_action( 'borderland_elated_action_before_options_map' );
	
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/10.general/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/20.logo/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/30.header/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/40.title/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/50.content/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/60.footer/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/70.fonts/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/80.elements/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/90.blog/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/100.portfolio/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/110.slider/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/120.social/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/130.error404/map.php" );
	
	if ( borderland_elated_visual_composer_installed() && version_compare( borderland_elated_get_vc_version(), '4.4.2' ) >= 0 ) {
		require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/140.visualcomposer/map.php" );
	} else {
		$borderland_elated_framework->eltdOptions->addOption( "enable_grid_elements", "no" );
	}
	
	if ( borderland_elated_contact_form_7_installed() ) {
		require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/150.contactform7/map.php" );
	}
	
	if ( borderland_elated_is_woocommerce_installed() ) {
		require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/160.woocommerce/map.php" );
	}
	
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/options/170.reset/map.php" );
	
	do_action( 'borderland_elated_action_options_map' );
	
	do_action( 'borderland_elated_action_after_options_map' );
}

add_action( 'after_setup_theme', 'borderland_elated_admin_map_init', 0 );