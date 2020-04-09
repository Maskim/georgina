<?php

if ( ! function_exists( 'borderland_elated_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function borderland_elated_register_sidebars() {
		$centered_logo = false;
		if ( borderland_elated_options()->getOptionValue( 'center_logo_image' ) == "yes" ) {
			$centered_logo = true;
		}
		
		if ( borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding" ) {
			$centered_logo = true;
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'borderland' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Default Sidebar area. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Page', 'borderland' ),
			'id'            => 'sidebar_page',
			'description'   => esc_html__( 'Default Sidebar area for Pages. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Left', 'borderland' ),
			'id'            => 'header_left',
			'description'   => esc_html__( 'Widgets added here will appear on the left side in top header area', 'borderland' ),
			'before_widget' => '<div class="header-widget %2$s header-left-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Right', 'borderland' ),
			'id'            => 'header_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in top header area', 'borderland' ),
			'before_widget' => '<div class="header-widget %2$s header-right-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		if ( $centered_logo ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Left From Logo', 'borderland' ),
				'id'            => 'header_left_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the left side of logo area', 'borderland' ),
				'before_widget' => '<div class="header-widget %2$s header-left-from-logo-widget"><div class="header-left-from-logo-widget-inner"><div class="header-left-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
			
			register_sidebar( array(
				'name'          => esc_html__( 'Header Right From Logo', 'borderland' ),
				'id'            => 'header_right_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the right side of logo area', 'borderland' ),
				'before_widget' => '<div class="header-widget %2$s header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		if ( borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == "stick_with_left_right_menu" ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Bottom Left', 'borderland' ),
				'id'            => 'header_bottom_left',
				'description'   => esc_html__( 'Widgets added here will appear on the left side in menu header area', 'borderland' ),
				'before_widget' => '<div class="header_bottom_widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Right', 'borderland' ),
			'id'            => 'header_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in menu header area', 'borderland' ),
			'before_widget' => '<div class="header_bottom_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Center', 'borderland' ),
			'id'            => 'header_bottom_center',
			'description'   => esc_html__( 'This widget area is used only for content of Header Bottom when header type is set to Fixed Header Top', 'borderland' ),
			'before_widget' => '<div class="header_bottom_center_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Fixed Right', 'borderland' ),
			'id'            => 'header_fixed_right',
			'description'   => esc_html__( 'This widget area is used only with "sticky with menu on bottom" menu type', 'borderland' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Left Menu Area', 'borderland' ),
			'id'            => 'vertical_menu_area',
			'description'   => esc_html__( 'Widgets added here will appear inside Left Menu Area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Side Area', 'borderland' ),
			'id'            => 'sidearea',
			'description'   => esc_html__( 'Widgets added here will appear inside Side Area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Bottom', 'borderland' ),
			'id'            => 'fullscreen_menu',
			'description'   => esc_html__( 'This widget area is rendered below fullscreen menu', 'borderland' ),
			'before_widget' => '<div class="header-widget %2$s fullscreen-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Top', 'borderland' ),
			'id'            => 'fullscreen_above_menu',
			'description'   => esc_html__( 'This widget area is rendered above fullscreen menu', 'borderland' ),
			'before_widget' => '<div class="header-above-menu-widget %2$s fullscreen-above-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 1', 'borderland' ),
			'id'            => 'footer_column_1',
			'description'   => esc_html__( 'Widgets added here will appear in the first column of top footer area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 2', 'borderland' ),
			'id'            => 'footer_column_2',
			'description'   => esc_html__( 'Widgets added here will appear in the second column of top footer area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 3', 'borderland' ),
			'id'            => 'footer_column_3',
			'description'   => esc_html__( 'Widgets added here will appear in the third column of top footer area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', 'borderland' ),
			'id'            => 'footer_column_4',
			'description'   => esc_html__( 'Widgets added here will appear in the fourth column of top footer area', 'borderland' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Text', 'borderland' ),
			'id'            => 'footer_text',
			'description'   => esc_html__( 'Widgets added here will appear in the footer bottom text area', 'borderland' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Left', 'borderland' ),
			'id'            => 'footer_bottom_left',
			'description'   => esc_html__( 'Widgets added here will appear in the left side of footer bottom area', 'borderland' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Right', 'borderland' ),
			'id'            => 'footer_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear in the right side of footer bottom area', 'borderland' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		if ( borderland_elated_is_woocommerce_installed() ) {
			register_sidebar( array(
				'name'          => esc_html__( 'WooCommerce Dropdown Widget Area', 'borderland' ),
				'id'            => 'woocommerce_dropdown',
				'description'   => esc_html__( 'This widget area should be used only for WooCommerce dropdown cart widget', 'borderland' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
	}
	
	add_action( 'widgets_init', 'borderland_elated_register_sidebars' );
}

if ( ! function_exists( 'borderland_elated_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars.
	 */
	function borderland_elated_add_support_custom_sidebar() {
		add_theme_support( 'BorderlandElatedCustomSidebar' );
		
		if ( get_theme_support( 'BorderlandElatedCustomSidebar' ) ) {
			new BorderlandElatedCustomSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'borderland_elated_add_support_custom_sidebar' );
}