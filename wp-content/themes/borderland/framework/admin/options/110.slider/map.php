<?php

$sliderPage = new BorderlandElatedAdminPage(
	"10",
	esc_html__( "Elated Slider", 'borderland' ),
	"fa fa-arrows-h"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"slider",
	$sliderPage
);

// General Style

$panel3 = new BorderlandElatedPanel(
	esc_html__( "General Style", 'borderland' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel3",
	$panel3
);

$qs_slider_height_mobile = new BorderlandElatedField(
	"text",
	"qs_slider_height_mobile",
	"",
	esc_html__( "Slider Height For Mobile Devices (px)", 'borderland' ),
	esc_html__( "Define slider height for mobile devices", 'borderland' )
);
$panel3->addChild(
	"qs_slider_height_mobile",
	$qs_slider_height_mobile
);

$qs_slider_preloader_background = new BorderlandElatedField(
	"color",
	"qs_slider_preloader_background",
	"",
	esc_html__( "Slider Preloader Background Color", 'borderland' ),
	esc_html__( "Define background color for slider preloader", 'borderland' )
);
$panel3->addChild(
	"qs_slider_preloader_background",
	$qs_slider_preloader_background
);

// Navigation Control Style

$panel2 = new BorderlandElatedPanel(
	esc_html__( "Navigation Bullets Style", 'borderland' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel2",
	$panel2
);

$qs_navigation_control_color = new BorderlandElatedField(
	"color",
	"qs_navigation_control_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for navigation bullets controls", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_color",
	$qs_navigation_control_color
);

$qs_navigation_control_size = new BorderlandElatedField(
	"text",
	"qs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'borderland' ),
	esc_html__( "Define size for navigation bullets controls (w=h in px)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_size",
	$qs_navigation_control_size
);

$qs_navigation_control_border_radius = new BorderlandElatedField(
	"text",
	"qs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' ),
	esc_html__( "Define border radius for navigation bullets controls", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"qs_navigation_control_border_radius",
	$qs_navigation_control_border_radius
);

// Custom cursor navigation style

$panel4 = new BorderlandElatedPanel(
	esc_html__( "Custom Cursor Navigation Style", 'borderland' ),
	"navigation_custom_cursor_style"
);
$sliderPage->addChild(
	"panel4",
	$panel4
);

$qs_enable_navigation_custom_cursor = new BorderlandElatedField(
	"yesno",
	"qs_enable_navigation_custom_cursor",
	"no",
	esc_html__( "Enable Custom Cursor for Navigation", 'borderland' ),
	esc_html__( "Enabling this option will display custom cursors for slider navigation", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_qs_enable_navigation_custom_cursor_container"
	)
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor",
	$qs_enable_navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor_container = new BorderlandElatedContainer(
	"qs_enable_navigation_custom_cursor_container",
	"qs_enable_navigation_custom_cursor",
	"no"
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor_container",
	$qs_enable_navigation_custom_cursor_container
);

$cursor_image_left_right_area_size = new BorderlandElatedField(
	"text",
	"cursor_image_left_right_area_size",
	"",
	esc_html__( "Clickable Left/Right Area Size (%)", 'borderland' ),
	esc_html__( "Define size of clickable left/right slider area in relation to slider width (default value is 8%)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_right_area_size",
	$cursor_image_left_right_area_size
);

$cursor_image_left_normal = new BorderlandElatedField(
	"image",
	"cursor_image_left_normal",
	"",
	esc_html__( "Cursor Image 'Left' - Normal", 'borderland' ),
	esc_html__( "Choose a default cursor 'Left' image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_normal",
	$cursor_image_left_normal
);

$cursor_image_right_normal = new BorderlandElatedField(
	"image",
	"cursor_image_right_normal",
	"",
	esc_html__( "Cursor Image 'Right' - Normal", 'borderland' ),
	esc_html__( "Choose a default cursor 'Right' image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_normal",
	$cursor_image_right_normal
);

$cursor_image_left_light = new BorderlandElatedField(
	"image",
	"cursor_image_left_light",
	"",
	esc_html__( "Cursor Image 'Left' - Light", 'borderland' ),
	esc_html__( "Choose a cursor 'Left' light image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_light",
	$cursor_image_left_light
);

$cursor_image_right_light = new BorderlandElatedField(
	"image",
	"cursor_image_right_light",
	"",
	esc_html__( "Cursor Image 'Right' - Light", 'borderland' ),
	esc_html__( "Choose a cursor 'Right' light image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_light",
	$cursor_image_right_light
);

$cursor_image_left_dark = new BorderlandElatedField(
	"image",
	"cursor_image_left_dark",
	"",
	esc_html__( "Cursor Image 'Left' - Dark", 'borderland' ),
	esc_html__( "Choose a cursor 'Left' dark image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_dark",
	$cursor_image_left_dark
);

$cursor_image_right_dark = new BorderlandElatedField(
	"image",
	"cursor_image_right_dark",
	"",
	esc_html__( "Cursor Image 'Right' - Dark", 'borderland' ),
	esc_html__( "Choose a cursor 'Right' dark image to display ", 'borderland' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_dark",
	$cursor_image_right_dark
);

$qs_enable_navigation_custom_cursor_grab = new BorderlandElatedField(
	"yesno",
	"qs_enable_navigation_custom_cursor_grab",
	"no",
	esc_html__( "Enable Custom Cursor for 'Grab' Arrow", 'borderland' ),
	esc_html__( "Enabling this option will display custom cursor for slider 'Grab' arrow", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_qs_enable_navigation_custom_cursor_grab_container"
	)
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab",
	$qs_enable_navigation_custom_cursor_grab
);

$qs_enable_navigation_custom_cursor_grab_container = new BorderlandElatedContainer(
	"qs_enable_navigation_custom_cursor_grab_container",
	"qs_enable_navigation_custom_cursor_grab",
	"no"
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab_container",
	$qs_enable_navigation_custom_cursor_grab_container
);

$cursor_image_grab_normal = new BorderlandElatedField(
	"image",
	"cursor_image_grab_normal",
	"",
	esc_html__( "Cursor Image 'Grab' - Normal", 'borderland' ),
	esc_html__( "Choose a default cursor 'Grab' image to display", 'borderland' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_normal",
	$cursor_image_grab_normal
);

$cursor_image_grab_light = new BorderlandElatedField(
	"image",
	"cursor_image_grab_light",
	"",
	esc_html__( "Cursor Image 'Grab' - Light", 'borderland' ),
	esc_html__( "Choose a cursor 'Grab' light image to display", 'borderland' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_light",
	$cursor_image_grab_light
);

$cursor_image_grab_dark = new BorderlandElatedField(
	"image",
	"cursor_image_grab_dark",
	"",
	esc_html__( "Cursor Image 'Grab' - Dark", 'borderland' ),
	esc_html__( "Choose a cursor 'Grab' dark image to display", 'borderland' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_dark",
	$cursor_image_grab_dark
);
				
				
				
				
				
	