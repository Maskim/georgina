<?php

function borderland_elated_meta_boxes_map_init() {
	global $borderland_elated_framework;
	
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/page/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/portfolio/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/slides/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/post/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/testimonials/map.php" );
	require_once( BORDERLAND_FRAMEWORK_ROOT_DIR . "/admin/meta-boxes/carousels/map.php" );
}

add_action( 'after_setup_theme', 'borderland_elated_meta_boxes_map_init', 1 );