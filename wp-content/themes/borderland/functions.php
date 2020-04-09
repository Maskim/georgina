<?php

include_once get_template_directory() . '/theme-includes.php';

if ( ! function_exists( 'borderland_elated_rewrite_rules_on_theme_activation' ) ) {
	function borderland_elated_rewrite_rules_on_theme_activation() {
		flush_rewrite_rules();
	}
	
	add_action( 'after_switch_theme', 'borderland_elated_rewrite_rules_on_theme_activation' );
}

if ( ! function_exists( 'borderland_elated_add_theme_support' ) ) {
	function borderland_elated_add_theme_support() {
		
		//add support for feed links
		add_theme_support( 'automatic-feed-links' );
		
		//add support for post formats
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );
		
		//add theme support for post thumbnails
		add_theme_support( 'post-thumbnails' );
		
		//add theme support for title tag
		add_theme_support( 'title-tag' );
		
		//defined content width variable
		$GLOBALS['content_width'] = 1060;
		
		load_theme_textdomain( 'borderland', get_template_directory() . '/languages' );
		
		//add theme support for editor style
		add_editor_style( BORDERLAND_FRAMEWORK_ROOT . '/admin/assets/css/editor-style.css' );
		
		add_image_size( 'portfolio-square', 550, 550, true );
		add_image_size( 'portfolio-landscape', 800, 600, true );
		add_image_size( 'portfolio-portrait', 600, 800, true );
		add_image_size( 'portfolio_masonry_wide', 1000, 500, true );
		add_image_size( 'portfolio_masonry_tall', 500, 1000, true );
		add_image_size( 'portfolio_masonry_large', 1000, 1000, true );
		add_image_size( 'portfolio_masonry_with_space', 700 );
		add_image_size( 'blog_image_format_link_quote', 1100, 500, true );
		
		if ( borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) !== "stick_with_left_right_menu" || borderland_elated_options()->getOptionValue( 'vertical_area' ) === "yes" ) {
			//header and left menu location
			register_nav_menus(
				array(
					'top-navigation' => esc_html__( 'Top Navigation', 'borderland' )
				)
			);
		}
		
		//popup menu location
		register_nav_menus(
			array(
				'popup-navigation' => esc_html__( 'Fullscreen Navigation', 'borderland' )
			)
		);
		
		if ( borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) === "stick_with_left_right_menu" && borderland_elated_options()->getOptionValue( 'vertical_area' ) === "no" ) {
			//header left menu location
			register_nav_menus(
				array(
					'left-top-navigation' => esc_html__( 'Left Top Navigation', 'borderland' )
				)
			);
			
			//header right menu location
			register_nav_menus(
				array(
					'right-top-navigation' => esc_html__( 'Right Top Navigation', 'borderland' )
				)
			);
		}
	}
	
	add_action( 'after_setup_theme', 'borderland_elated_add_theme_support' );
}

if ( ! function_exists( 'borderland_elated_styles' ) ) {
	function borderland_elated_styles() {
		global $wp_styles;
		global $is_chrome;
		global $is_safari;
		
		$icon_collections = borderland_elated_icon_collections();
		
		wp_enqueue_style( 'wp-mediaelement' );
		
		wp_enqueue_style( "borderland-default-style", BORDERLAND_ROOT . "/style.css" );
		
		do_action( 'borderland_elated_action_enqueue_before_main_css' );
		
		wp_enqueue_style( "borderland-stylesheet", BORDERLAND_CSS_ROOT . "/stylesheet.min.css" );
		
		wp_enqueue_style( 'borderland-ie9-style', BORDERLAND_CSS_ROOT . '/ie9_stylesheet.css' );
		$wp_styles->add_data( 'borderland-ie9-style', 'conditional', 'IE 9' );
		
		//is Chrome on Mac
		if ( $is_chrome && strpos( getenv( 'HTTP_USER_AGENT' ), "Macintosh; Intel Mac OS X" ) !== false ) {
			wp_enqueue_style( "borderland-mac-style", BORDERLAND_CSS_ROOT . "/mac_stylesheet.css" );
		}
		
		//is Chrome or Safari?
		if ( $is_chrome || $is_safari ) {
			//include style for webkit browsers only
			wp_enqueue_style( "borderland-webkit-style", BORDERLAND_CSS_ROOT . "/webkit_stylesheet.css" );
		}
		
		$responsiveness = "yes";
		if ( borderland_elated_options()->getOptionValue( 'responsiveness' ) ) {
			$responsiveness = borderland_elated_options()->getOptionValue( 'responsiveness' );
		}
		
		if ( $responsiveness != "no" ) {
			wp_enqueue_style( "borderland-responsive", BORDERLAND_CSS_ROOT . "/responsive.min.css" );
		}
		
		if ( borderland_elated_is_woocommerce_installed() && borderland_elated_load_woo_assets() ) {
			wp_enqueue_style( "borderland-woocommerce", BORDERLAND_CSS_ROOT . "/woocommerce.min.css" );
			
			if ( $responsiveness != "no" ) {
				wp_enqueue_style( "borderland-woocommerce_responsive", BORDERLAND_CSS_ROOT . "/woocommerce_responsive.min.css" );
			}
		}
		
		//include icon collections styles
		if ( is_array( $icon_collections->iconCollections ) && count( $icon_collections->iconCollections ) ) {
			foreach ( $icon_collections->iconCollections as $collection_key => $collection_obj ) {
				wp_enqueue_style( 'borderland-' . $collection_key, $collection_obj->styleUrl );
			}
		}
		
		if ( file_exists( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic.css' ) && borderland_elated_is_css_folder_writable() && ! is_multisite() ) {
			wp_enqueue_style( 'borderland-style-dynamic', BORDERLAND_CSS_ROOT . '/style_dynamic.css', array(), filemtime( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic.css' ) );
		} else if ( file_exists( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css' ) && borderland_elated_is_css_folder_writable() && is_multisite() ) {
			wp_enqueue_style( 'borderland-style-dynamic', BORDERLAND_CSS_ROOT . '/style_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css', array(), filemtime( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css' ) );
		} else {
			wp_enqueue_style( 'borderland-style-dynamic', BORDERLAND_CSS_ROOT . '/style_dynamic_callback.php' ); // Temporary case for Major update
		}
		
		if ( $responsiveness != "no" ):
			//include proper styles
			if ( file_exists( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_responsive.css' ) && borderland_elated_is_css_folder_writable() && ! is_multisite() ) {
				wp_enqueue_style( 'borderland-style-dynamic-responsive', BORDERLAND_CSS_ROOT . '/style_dynamic_responsive.css', array(), filemtime( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_responsive.css' ) );
			} else if ( file_exists( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css' ) && borderland_elated_is_css_folder_writable() && is_multisite() ) {
				wp_enqueue_style( 'borderland-style-dynamic-responsive', BORDERLAND_CSS_ROOT . '/style_dynamic_responsive_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css', array(), filemtime( BORDERLAND_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . borderland_elated_get_multisite_blog_id() . '.css' ) );
			} else {
				wp_enqueue_style( 'borderland-style-dynamic-responsive', BORDERLAND_CSS_ROOT . '/style_dynamic_responsive_callback.php' ); // Temporary case for Major update
			}
		endif;
		
		//is left menu activated and is responsive turned on?
		if ( borderland_elated_options()->getOptionValue( 'vertical_area' ) === 'yes' && $responsiveness != "no" && borderland_elated_options()->getOptionValue( 'vertical_area_type' ) != 'hidden' ) {
			wp_enqueue_style( "borderland-vertical-responsive", BORDERLAND_CSS_ROOT . "/vertical_responsive.min.css" );
		}
		
		if ( borderland_elated_return_landing_variable() ) {
			wp_enqueue_style( "borderland-landing-fancybox", get_home_url() . "/demo-files/landing/css/jquery.fancybox.css" );
			wp_enqueue_style( "borderland-landing", get_home_url() . "/demo-files/landing/css/landing_stylesheet.css" );
		}
		
		if ( borderland_elated_visual_composer_installed() ) {
			wp_enqueue_style( 'js_composer_front' );
		}
		
		$custom_css = borderland_elated_options()->getOptionValue( 'custom_css' );
		if ( ! empty( $custom_css ) ) {
			if ( $responsiveness != "no" ) {
				wp_add_inline_style( 'borderland-style-dynamic-responsive', $custom_css );
			} else {
				wp_add_inline_style( 'borderland-style-dynamic', $custom_css );
			}
		}
		
		$custom_svg_css = borderland_elated_options()->getOptionValue( 'custom_svg_css' );
		if ( ! empty( $custom_svg_css ) ) {
			if ( $responsiveness != "no" ) {
				wp_add_inline_style( 'borderland-style-dynamic-responsive', $custom_svg_css );
			} else {
				wp_add_inline_style( 'borderland-style-dynamic', $custom_svg_css );
			}
		}
		
		$font_weight_str = '100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
		$font_subset_str = 'latin,latin-ext';
		
		//default fonts
		$default_font_family = array(
			'Open Sans',
			'Raleway',
			'Dancing Script',
			'Lato'
		);
		
		$modified_default_font_family = array();
		foreach ( $default_font_family as $default_font ) {
			$modified_default_font_family[] = $default_font . ':' . str_replace( ' ', '', $font_weight_str );
		}
		
		$default_font_string = implode( '|', $modified_default_font_family );
		
		$available_font_options = array_filter( array(
			borderland_elated_options()->getOptionValue( 'google_fonts' ),
			borderland_elated_options()->getOptionValue( 'menu_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'dropdown_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'dropdown_wide_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'dropdown_google_fonts_thirdlvl' ),
			borderland_elated_options()->getOptionValue( 'fixed_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'sticky_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'mobile_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h1_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h2_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h3_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h4_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h5_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'h6_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'text_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blockquote_font_family' ),
			borderland_elated_options()->getOptionValue( 'page_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'page_subtitle_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'page_breadcrumb_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'contact_form_heading_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'contact_form_section_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'contact_form_section_subtitle_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_active_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_period_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_price_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_currency_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_button_font_family' ),
			borderland_elated_options()->getOptionValue( 'pricing_tables_content_font_family' ),
			borderland_elated_options()->getOptionValue( 'service_tables_active_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'service_tables_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'service_tables_content_font_family' ),
			borderland_elated_options()->getOptionValue( 'separators_with_text_text_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'message_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'counters_font_family' ),
			borderland_elated_options()->getOptionValue( 'counters_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'progress_bar_horizontal_font_family' ),
			borderland_elated_options()->getOptionValue( 'progress_bar_horizontal_percentage_font_family' ),
			borderland_elated_options()->getOptionValue( 'progress_bar_vertical_font_family' ),
			borderland_elated_options()->getOptionValue( 'progress_bar_vertical_percentage_font_family' ),
			borderland_elated_options()->getOptionValue( 'list_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'list_ordered_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'pagination_font_family' ),
			borderland_elated_options()->getOptionValue( 'button_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'testimonials_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'testimonials_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'testimonials_author_font_family' ),
			borderland_elated_options()->getOptionValue( 'testimonials_author_job_position_font_family' ),
			borderland_elated_options()->getOptionValue( 'back_to_top_text_fontfamily' ),
			borderland_elated_options()->getOptionValue( 'tabs_nav_font_family' ),
			borderland_elated_options()->getOptionValue( 'tags_font_family' ),
			borderland_elated_options()->getOptionValue( 'team_font_family' ),
			borderland_elated_options()->getOptionValue( 'footer_top_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'footer_top_link_font_family' ),
			borderland_elated_options()->getOptionValue( 'footer_bottom_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'footer_bottom_link_font_family' ),
			borderland_elated_options()->getOptionValue( 'footer_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'sidebar_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'sidebar_link_font_family' ),
			borderland_elated_options()->getOptionValue( 'sidebar_product_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'side_area_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'sidearea_link_font_family' ),
			borderland_elated_options()->getOptionValue( 'sidebar_search_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'vertical_menu_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vertical_dropdown_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vertical_dropdown_google_fonts_thirdlvl' ),
			borderland_elated_options()->getOptionValue( 'popup_menu_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'popup_menu_google_fonts_2nd' ),
			borderland_elated_options()->getOptionValue( 'popup_menu_3rd_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vertical_transparent_menu_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vertical_transparent_dropdown_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vertical_transparent_dropdown_google_fonts_thirdlvl' ),
			borderland_elated_options()->getOptionValue( 'popup_menu_3rd_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_single_big_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_single_small_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_single_meta_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'top_header_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_filter_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_filter_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_title_standard_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_title_hover_box_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_category_standard_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_category_hover_box_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_title_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'portfolio_category_list_font_family' ),
			borderland_elated_options()->getOptionValue( 'expandable_label_font_family' ),
			borderland_elated_options()->getOptionValue( '404_title_font_family' ),
			borderland_elated_options()->getOptionValue( '404_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_category_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_price_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_sale_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_out_of_stock_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_sorting_result_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_list_add_to_cart_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_meta_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_meta_info_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_single_add_to_cart_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_price_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_related_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_product_single_tabs_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'woo_products_price_font_family' ),
			borderland_elated_options()->getOptionValue( 'drop_down_cart_button_font_family' ),
			borderland_elated_options()->getOptionValue( 'content_menu_text_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_date_in_title_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_date_in_title_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_date_in_title_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_date_in_title_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_date_in_title_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_category_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_ql_title_fontfamily' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_cat_title_cen_ql_author_fontfamily' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_title_author_centered_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_filter_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_filter_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_masonry_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_standard_type_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_standard_type_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_standard_type_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_standard_type_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_standard_type_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_pih_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_pih_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_pih_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_pih_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_pih_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_wrm_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_wrm_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_wrm_ql_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_wrm_ql_info_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_mifos_wrm_ql_author_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'blog_single_post_author_info_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_single_post_author_info_text_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_list_sections_title_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_list_sections_post_info_font_family' ),
			borderland_elated_options()->getOptionValue( 'blog_list_sections_date_font_family' ),
			borderland_elated_options()->getOptionValue( 'search_text_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'side_area_text_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_1_element_font_family' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_1_button_font_family' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_2_element_font_family' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_2_button_font_family' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_3_element_font_family' ),
			borderland_elated_options()->getOptionValue( 'cf7_custom_style_3_button_font_family' ),
			borderland_elated_options()->getOptionValue( 'vc_grid_button_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vc_grid_load_more_button_title_google_fonts' ),
			borderland_elated_options()->getOptionValue( 'vc_grid_portfolio_filter_font_family' ),
			borderland_elated_options()->getOptionValue( 'navigation_number_font_font_family' )
		) );
		
		$additional_fonts_args  = array( 'post_status' => 'publish', 'post_type' => 'slides', 'posts_per_page' => - 1 );
		$additional_fonts_query = new WP_Query( $additional_fonts_args );
		
		if ( $additional_fonts_query->have_posts() ):
			while ( $additional_fonts_query->have_posts() ) : $additional_fonts_query->the_post();
				$post_id = get_the_ID();
				
				if ( get_post_meta( $post_id, "eltd_slide-title-font-family", true ) != "" ) {
					array_push( $available_font_options, get_post_meta( $post_id, "eltd_slide-title-font-family", true ) );
				}
				if ( get_post_meta( $post_id, "eltd_slide-text-font-family", true ) != "" ) {
					array_push( $available_font_options, get_post_meta( $post_id, "eltd_slide-text-font-family", true ) );
				}
				if ( get_post_meta( $post_id, "eltd_slide-subtitle-font-family", true ) != "" ) {
					array_push( $available_font_options, get_post_meta( $post_id, "eltd_slide-subtitle-font-family", true ) );
				}
			endwhile;
		endif;
		
		wp_reset_postdata();
		
		if ( borderland_elated_options()->getOptionValue( 'additional_google_fonts' ) === 'yes' ) {
			
			if ( borderland_elated_options()->getOptionValue( 'additional_google_font1' ) !== '-1' ) {
				array_push( $available_font_options, borderland_elated_options()->getOptionValue( 'additional_google_font1' ) );
			}
			if ( borderland_elated_options()->getOptionValue( 'additional_google_font2' ) !== '-1' ) {
				array_push( $available_font_options, borderland_elated_options()->getOptionValue( 'additional_google_font2' ) );
			}
			if ( borderland_elated_options()->getOptionValue( 'additional_google_font3' ) !== '-1' ) {
				array_push( $available_font_options, borderland_elated_options()->getOptionValue( 'additional_google_font3' ) );
			}
			if ( borderland_elated_options()->getOptionValue( 'additional_google_font4' ) !== '-1' ) {
				array_push( $available_font_options, borderland_elated_options()->getOptionValue( 'additional_google_font4' ) );
			}
			if ( borderland_elated_options()->getOptionValue( 'additional_google_font5' ) !== '-1' ) {
				array_push( $available_font_options, borderland_elated_options()->getOptionValue( 'additional_google_font5' ) );
			}
		}
		
		//define available font options array
		$fonts_array = array();
		if ( ! empty( $available_font_options ) ) {
			foreach ( $available_font_options as $font_option_value ) {
				$font_option_string = $font_option_value . ':' . $font_weight_str;
				
				if ( ! in_array( str_replace( '+', ' ', $font_option_value ), $default_font_family ) && ! in_array( $font_option_string, $fonts_array ) ) {
					$fonts_array[] = $font_option_string;
				}
			}
			
			$fonts_array = array_diff( $fonts_array, array( '-1:' . $font_weight_str ) );
		}
		
		$google_fonts_string = implode( '|', $fonts_array );
		
		$protocol = is_ssl() ? 'https:' : 'http:';
		
		//is google font option checked anywhere in theme?
		if ( is_array( $fonts_array ) && count( $fonts_array ) > 0 ) {
			
			//include all checked fonts
			$fonts_full_list      = $default_font_string . '|' . str_replace( '+', ' ', $google_fonts_string );
			$fonts_full_list_args = array(
				'family' => urlencode( $fonts_full_list ),
				'subset' => urlencode( $font_subset_str ),
			);
			
			$borderland_global_fonts = add_query_arg( $fonts_full_list_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'borderland-google-fonts', esc_url_raw( $borderland_global_fonts ), array(), '1.0.0' );
			
		} else {
			//include default google font that theme is using
			$default_fonts_args          = array(
				'family' => urlencode( $default_font_string ),
				'subset' => urlencode( $font_subset_str ),
			);
			$borderland_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'borderland-google-fonts', esc_url_raw( $borderland_global_fonts ), array(), '1.0.0' );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'borderland_elated_styles' );
}

if ( ! function_exists( 'borderland_elated_scripts' ) ) {
	function borderland_elated_scripts() {
		global $is_IE;
		
		//init theme core scripts
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-widget' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-effects-core' );
		wp_enqueue_script( 'jquery-effects-fade' );
		wp_enqueue_script( 'jquery-effects-scale' );
		wp_enqueue_script( 'jquery-effects-slide' );
		wp_enqueue_script( 'jquery-ui-position' );
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script( 'jquery-ui-tabs' );
		wp_enqueue_script( 'jquery-form' );
		wp_enqueue_script( 'wp-mediaelement' );
		
		// 3rd party JavaScripts that we used in our theme
		wp_enqueue_script( 'doubletaptogo', BORDERLAND_JS_ROOT . '/plugins/doubletaptogo.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'modernizr', BORDERLAND_JS_ROOT . '/plugins/modernizr.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'appear', BORDERLAND_JS_ROOT . '/plugins/jquery.appear.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'hoverIntent' );
		wp_enqueue_script( 'absoluteCounter', BORDERLAND_JS_ROOT . '/plugins/absoluteCounter.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'easypiechart', BORDERLAND_JS_ROOT . '/plugins/easypiechart.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'mixitup', BORDERLAND_JS_ROOT . '/plugins/jquery.mixitup.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'nicescroll', BORDERLAND_JS_ROOT . '/plugins/jquery.nicescroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'prettyphoto', BORDERLAND_JS_ROOT . '/plugins/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'fitvids', BORDERLAND_JS_ROOT . '/plugins/jquery.fitvids.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'flexslider', BORDERLAND_JS_ROOT . '/plugins/jquery.flexslider-min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'infinitescroll', BORDERLAND_JS_ROOT . '/plugins/infinitescroll.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waitforimages', BORDERLAND_JS_ROOT . '/plugins/jquery.waitforimages.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waypoints', BORDERLAND_JS_ROOT . '/plugins/waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jplayer', BORDERLAND_JS_ROOT . '/plugins/jplayer.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'bootstrap-carousel', BORDERLAND_JS_ROOT . '/plugins/bootstrap.carousel.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'skrollr', BORDERLAND_JS_ROOT . '/plugins/skrollr.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Chart', BORDERLAND_JS_ROOT . '/plugins/Chart.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-easing-1.3', BORDERLAND_JS_ROOT . '/plugins/jquery.easing.1.3.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-plugin', BORDERLAND_JS_ROOT . '/plugins/jquery.plugin.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'countdown', BORDERLAND_JS_ROOT . '/plugins/jquery.countdown.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'multiscroll', BORDERLAND_JS_ROOT . '/plugins/jquery.multiscroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( "carouFredSel", BORDERLAND_JS_ROOT . "/plugins/jquery.carouFredSel-6.2.1.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "fullPage", BORDERLAND_JS_ROOT . "/plugins/jquery.fullPage.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "lemmonSlider", BORDERLAND_JS_ROOT . "/plugins/lemmon-slider.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "mousewheel", BORDERLAND_JS_ROOT . "/plugins/jquery.mousewheel.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "touchSwipe", BORDERLAND_JS_ROOT . "/plugins/jquery.touchSwipe.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "isotope", BORDERLAND_JS_ROOT . "/plugins/jquery.isotope.min.js", array( 'jquery' ), false, true );
		
		do_action( 'borderland_elated_action_enqueue_additional_scripts' );
		
		if ( $is_IE ) {
			wp_enqueue_script( "html5", BORDERLAND_JS_ROOT . "/plugins/html5.js", array( 'jquery' ), false, false );
		}
		if ( borderland_elated_options()->getOptionValue( 'google_maps_api_key' ) !== "" ) :
			$google_maps_api_key = borderland_elated_options()->getOptionValue( 'google_maps_api_key' );
			
			if ( ! empty( $google_maps_api_key ) ) {
				wp_enqueue_script( "borderland-google-map-api", "https://maps.googleapis.com/maps/api/js?key=" . esc_attr( $google_maps_api_key ), array( 'jquery' ), false, true );
			}
		endif;
		
		if ( file_exists( BORDERLAND_JS_ROOT_DIR . '/default_dynamic.js' ) && borderland_elated_is_js_folder_writable() && ! is_multisite() ) {
			wp_enqueue_script( 'borderland-default-dynamic', BORDERLAND_JS_ROOT . '/default_dynamic.js', array( 'jquery' ), filemtime( BORDERLAND_JS_ROOT_DIR . '/default_dynamic.js' ), true );
		} else if ( file_exists( BORDERLAND_JS_ROOT_DIR . '/default_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.js' ) && borderland_elated_is_js_folder_writable() && is_multisite() ) {
			wp_enqueue_script( 'borderland-default-dynamic', BORDERLAND_JS_ROOT . '/default_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.js', array( 'jquery' ), filemtime( BORDERLAND_JS_ROOT_DIR . '/default_dynamic_ms_id_' . borderland_elated_get_multisite_blog_id() . '.js' ), true );
		} else {
			wp_enqueue_script( 'borderland-default-dynamic', BORDERLAND_JS_ROOT . '/default_dynamic_callback.php', array( 'jquery' ), false, true ); // Temporary case for Major update 4.0
		}
		
		wp_enqueue_script( "borderland-default", BORDERLAND_JS_ROOT . "/default.min.js", array( 'jquery' ), false, true );
		
		if ( borderland_elated_load_blog_assets() ) {
			wp_enqueue_script( 'borderland-blog', BORDERLAND_JS_ROOT . "/blog.min.js", array( 'jquery' ), false, true );
		}
		
		$custom_js = borderland_elated_options()->getOptionValue( 'custom_js' );
		if ( ! empty( $custom_js ) ) {
			wp_add_inline_script( 'borderland-default', $custom_js );
		}
		
		//is smooth scroll enabled enabled and not Mac device?
		if ( borderland_elated_options()->getOptionValue( 'smooth_scroll' ) === 'yes' && strpos( getenv( 'HTTP_USER_AGENT' ), "Macintosh; Intel Mac OS X" ) == false ) {
			wp_enqueue_script( "TweenLite", BORDERLAND_JS_ROOT . "/plugins/TweenLite.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "ScrollToPlugin", BORDERLAND_JS_ROOT . "/plugins/ScrollToPlugin.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "smoothPageScroll", BORDERLAND_JS_ROOT . "/plugins/smoothPageScroll.js", array( 'jquery' ), false, true );
		}
		
		global $wp_scripts;
		$wp_scripts->add_data( 'comment-reply', 'group', 1 );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( "comment-reply" );
		}
		
		if ( borderland_elated_is_woocommerce_installed() && borderland_elated_load_woo_assets() ) {
			wp_enqueue_script( "borderland-woocommerce", BORDERLAND_JS_ROOT . "/woocommerce.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "select-2", BORDERLAND_JS_ROOT . "/plugins/select2.min.js", array( 'jquery' ), false, true );
		}
		
		$has_ajax       = false;
		$eltd_animation = "";
		if ( isset( $_SESSION['eltd_borderland_page_transitions'] ) ) {
			$eltd_animation = $_SESSION['eltd_borderland_page_transitions'];
		}
		if ( borderland_elated_options()->getOptionValue( 'page_transitions' ) !== "0"  && ( empty( $eltd_animation ) || ( $eltd_animation != "no" ) ) ) {
			$has_ajax = true;
		} elseif ( ! empty( $eltd_animation ) && ( $eltd_animation != "no" ) ) {
			$has_ajax = true;
		}
		
		if ( $has_ajax ) :
			wp_enqueue_script( "borderland-ajax", BORDERLAND_JS_ROOT . "/ajax.min.js", array( 'jquery' ), false, true );
		endif;
		
		if ( borderland_elated_return_landing_variable() ) {
			wp_enqueue_script( "fancybox", get_home_url() . "/demo-files/landing/js/jquery.fancybox.js", array(), false, true );
			wp_enqueue_script( "mixitup", get_home_url() . "/demo-files/landing/js/jquery.mixitup.min.js", array(), false, true );
			wp_enqueue_script( "borderland-landing", get_home_url() . "/demo-files/landing/js/landing_default.js", array(), false, true );
		}
		
		if ( borderland_elated_visual_composer_installed() ) {
			wp_enqueue_script( 'wpb_composer_front_js' );
		}
	}
	
	add_action('wp_enqueue_scripts', 'borderland_elated_scripts');
}

if ( ! function_exists( 'borderland_elated_set_global_variables' ) ) {
	function borderland_elated_set_global_variables() {
		$sticky_scroll_amount = get_post_meta( borderland_elated_get_page_id(), "eltd_page_scroll_amount_for_sticky", true );
		
		if ( $sticky_scroll_amount !== '' ) {
			wp_localize_script( 'borderland-default', 'page_scroll_amount_for_sticky', $sticky_scroll_amount );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'borderland_elated_set_global_variables' );
}

if ( ! function_exists( 'borderland_elated_enqueue_editor_customizer_styles' ) ) {
	/**
	 * Enqueue supplemental block editor styles
	 */
	function borderland_elated_enqueue_editor_customizer_styles() {
		$protocol = is_ssl() ? 'https:' : 'http:';
		//include default google font that theme is using
		$default_fonts_args          = array(
			'family' => urlencode( 'Open Sans:300,400,600,700' ),
			'subset' => urlencode( 'latin-ext' ),
		);
		$borderland_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
		wp_enqueue_style( 'borderland-editor-google-fonts', esc_url_raw( $borderland_global_fonts ) );
		
		wp_enqueue_style( 'borderland-editor-customizer-style', BORDERLAND_CSS_ROOT . '/admin/editor-customizer-style.css' );
		wp_enqueue_style( 'borderland-editor-blocks-style', BORDERLAND_CSS_ROOT . '/admin/editor-blocks-style.css' );
	}
	
	add_action( 'enqueue_block_editor_assets', 'borderland_elated_enqueue_editor_customizer_styles' );
}

if ( ! function_exists( 'borderland_elated_user_scalable_meta' ) ) {
	/**
	 * Function that outputs user scalable meta if responsiveness is turned on
	 * Hooked to borderland_elated_action_header_meta action
	 */
	function borderland_elated_user_scalable_meta() {
		//is responsiveness option is chosen?
		if ( borderland_elated_options()->getOptionValue( 'responsiveness' ) !== 'no' ) { ?>
			<meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">
		<?php } else { ?>
			<meta name=viewport content="width=1200,user-scalable=no">
		<?php }
	}
	
	add_action( 'borderland_elated_action_header_meta', 'borderland_elated_user_scalable_meta' );
}

if ( ! function_exists( 'borderland_elated_rgba_color' ) ) {
	/**
	 * Function that generates rgba part of css color property
	 *
	 * @param $color string hex color
	 * @param $transparency float transparency value between 0 and 1
	 *
	 * @return string generated rgba string
	 */
	function borderland_elated_rgba_color( $color, $transparency ) {
		if ( $color !== '' && $transparency !== '' ) {
			$rgba_color = '';
			
			$rgb_color_array = borderland_elated_hex2rgb( $color );
			$rgba_color      .= 'rgba(' . implode( ', ', $rgb_color_array ) . ', ' . $transparency . ')';
			
			return $rgba_color;
		}
	}
}

if ( ! function_exists( 'borderland_elated_set_logo_sizes' ) ) {
	/**
	 * Function that sets logo image dimensions to global eltd options array so it can be used in the theme
	 */
	function borderland_elated_set_logo_sizes() {
		
		if ( borderland_elated_options()->getOptionValue( 'logo_image' ) ) {
			borderland_elated_options()->addOption( 'logo_width', 280 );
			borderland_elated_options()->addOption( 'logo_height', 130 );
			
			//get logo image size
			$logo_image_sizes = borderland_elated_get_image_dimensions( borderland_elated_options()->getOptionValue( 'logo_image' ) );
			
			if ( isset( $logo_image_sizes['width'] ) && isset( $logo_image_sizes['height'] ) ) {
				borderland_elated_options()->addOption( 'logo_width', intval( $logo_image_sizes['width'] ) );
				borderland_elated_options()->addOption( 'logo_height', intval( $logo_image_sizes['height'] ) );
			}
		}
	}
	
	add_action( 'init', 'borderland_elated_set_logo_sizes', 0 );
}

if ( ! function_exists( 'borderland_elated_is_main_menu_set' ) ) {
	/**
	 * Function that checks if any of main menu locations are set.
	 * Checks whether top-navigation location is set, or left-top-navigation and right-top-navigation is set
	 * @return bool
	 *
	 * @version 0.1
	 */
	function borderland_elated_is_main_menu_set() {
		$has_top_nav     = has_nav_menu( 'top-navigation' );
		$has_divided_nav = has_nav_menu( 'left-top-navigation' ) && has_nav_menu( 'right-top-navigation' );
		
		return $has_top_nav || $has_divided_nav;
	}
}

if ( ! function_exists( 'borderland_elated_has_shortcode' ) ) {
	/**
	 * Function that checks whether shortcode exists on current page / post
	 *
	 * @param string shortcode to find
	 * @param string content to check. If isn't passed current post content will be used
	 *
	 * @return bool whether content has shortcode or not
	 */
	function borderland_elated_has_shortcode( $shortcode, $content = '' ) {
		$has_shortcode = false;
		
		if ( $shortcode ) {
			//if content variable isn't past
			if ( $content == '' ) {
				//take content from current post
				$page_id = borderland_elated_get_page_id();
				if ( ! empty( $page_id ) ) {
					$current_post = get_post( $page_id );
					
					if ( is_object( $current_post ) && property_exists( $current_post, 'post_content' ) ) {
						$content = $current_post->post_content;
					}
				}
			}
			
			//does content has shortcode added?
			if ( stripos( $content, '[' . $shortcode ) !== false ) {
				$has_shortcode = true;
			}
		}
		
		return $has_shortcode;
	}
}

if ( ! function_exists( 'borderland_elated_horizontal_slider_icon_classes' ) ) {
	/**
	 * Returns classes for left and right arrow for sliders
	 *
	 * @param $icon_class
	 *
	 * @return array
	 */
	function borderland_elated_horizontal_slider_icon_classes( $icon_class ) {
		
		switch ( $icon_class ) {
			case 'arrow_carrot-left_alt2':
				$left_icon_class  = 'arrow_carrot-left_alt2';
				$right_icon_class = 'arrow_carrot-right_alt2';
				break;
			case 'arrow_carrot-2left_alt2':
				$left_icon_class  = 'arrow_carrot-2left_alt2';
				$right_icon_class = 'arrow_carrot-2right_alt2';
				break;
			case 'arrow_triangle-left_alt2':
				$left_icon_class  = 'arrow_triangle-left_alt2';
				$right_icon_class = 'arrow_triangle-right_alt2';
				break;
			case 'icon-arrows-drag-left-dashed':
				$left_icon_class  = 'icon-arrows-drag-left-dashed';
				$right_icon_class = 'icon-arrows-drag-right-dashed';
				break;
			case 'icon-arrows-left-double-32':
				$left_icon_class  = 'icon-arrows-left-double-32';
				$right_icon_class = 'icon-arrows-right-double';
				break;
			case 'icon-arrows-slide-left1':
				$left_icon_class  = 'icon-arrows-slide-left1';
				$right_icon_class = 'icon-arrows-slide-right1';
				break;
			case 'icon-arrows-slide-left2':
				$left_icon_class  = 'icon-arrows-slide-left2';
				$right_icon_class = 'icon-arrows-slide-right2';
				break;
			case 'icon-arrows-slim-left-dashed':
				$left_icon_class  = 'icon-arrows-slim-left-dashed';
				$right_icon_class = 'icon-arrows-slim-right-dashed';
				break;
			case 'ion-arrow-left-a':
				$left_icon_class  = 'ion-arrow-left-a';
				$right_icon_class = 'ion-arrow-right-a';
				break;
			case 'ion-arrow-left-b':
				$left_icon_class  = 'ion-arrow-left-b';
				$right_icon_class = 'ion-arrow-right-b';
				break;
			case 'ion-arrow-left-c':
				$left_icon_class  = 'ion-arrow-left-c';
				$right_icon_class = 'ion-arrow-right-c';
				break;
			case 'ion-ios-arrow-':
				$left_icon_class  = $icon_class . 'back';
				$right_icon_class = $icon_class . 'forward';
				break;
			case 'ion-ios-fastforward':
				$left_icon_class  = 'ion-ios-rewind';
				$right_icon_class = 'ion-ios-fastforward';
				break;
			case 'ion-ios-fastforward-outline':
				$left_icon_class  = 'ion-ios-rewind-outline';
				$right_icon_class = 'ion-ios-fastforward-outline';
				break;
			case 'ion-ios-skipbackward':
				$left_icon_class  = 'ion-ios-skipbackward';
				$right_icon_class = 'ion-ios-skipforward';
				break;
			case 'ion-ios-skipbackward-outline':
				$left_icon_class  = 'ion-ios-skipbackward-outline';
				$right_icon_class = 'ion-ios-skipforward-outline';
				break;
			case 'ion-android-arrow-':
				$left_icon_class  = $icon_class . 'back';
				$right_icon_class = $icon_class . 'forward';
				break;
			case 'ion-android-arrow-dropleft-circle':
				$left_icon_class  = 'ion-android-arrow-dropleft-circle';
				$right_icon_class = 'ion-android-arrow-dropright-circle';
				break;
			default:
				$left_icon_class  = $icon_class . 'left';
				$right_icon_class = $icon_class . 'right';
		}
		
		$icon_classes = array(
			'left_icon_class'  => $left_icon_class,
			'right_icon_class' => $right_icon_class
		);
		
		return $icon_classes;
	}
}

if ( ! function_exists( 'borderland_elated_get_side_menu_icon_html' ) ) {
	/**
	 * Function that outputs html for side area icon opener.
	 * @return string generated html
	 */
	function borderland_elated_get_side_menu_icon_html() {
		$icon_html = '';
		$icon_pack = borderland_elated_options()->getOptionValue( 'side_area_button_icon_pack' );
		
		if ( ! empty( $icon_pack ) ) {
			$icon_collection_obj = borderland_elated_icon_collections()->getIconCollection( $icon_pack );
			$icon_field_name     = 'side_area_icon_' . $icon_collection_obj->param;
			$icon_single         = borderland_elated_options()->getOptionValue( $icon_field_name );
			
			if ( ! empty( $icon_single ) && method_exists( $icon_collection_obj, 'render' ) ) {
				$icon_html = $icon_collection_obj->render( $icon_single );
			}
		}
		
		return $icon_html;
	}
}

if ( ! function_exists( 'borderland_elated_comment' ) ) {
	function borderland_elated_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		
		global $post;
		$title_tag = "h5";
		
		if ( borderland_elated_options()->getOptionValue( 'blog_single_title_tags' ) ) {
			$title_tag = borderland_elated_options()->getOptionValue( 'blog_single_title_tags' );
		}
		
		$headings_array = array( 'h2', 'h3', 'h4', 'h5', 'h6' );
		//get correct heading value
		$title_tag = ( in_array( $title_tag, $headings_array ) ) ? $title_tag : 'h5';
		
		$is_pingback_comment = $comment->comment_type == 'pingback';
		$is_author_comment   = $post->post_author == $comment->user_id;
		
		$comment_class = 'comment clearfix';
		
		if ( $is_author_comment ) {
			$comment_class .= ' post_author_comment';
		}
		
		if ( $is_pingback_comment ) {
			$comment_class .= ' pingback-comment';
		}
		
		$opening_comment_tag = '<li>';
		
		echo wp_kses_post( $opening_comment_tag );
		?>
		<div class="<?php echo esc_attr( $comment_class ); ?>">
			<?php if ( ! $is_pingback_comment ) { ?>
				<div class="image"> <?php echo get_avatar( $comment, 102 ); ?> </div>
			<?php } ?>
			<div class="text">
				<div class="comment_info">
					<<?php echo esc_attr( $title_tag ); ?> class="name"><?php if ( $is_pingback_comment ) { esc_html_e( 'Pingback:', 'borderland' ); } ?><?php echo wp_kses_post( get_comment_author_link() ); ?><?php if ( $is_author_comment ) { ?><i class="fa fa-user post-author-comment-icon"></i><?php } ?></<?php echo esc_attr( $title_tag ); ?>>
				<?php
				comment_reply_link( array_merge( $args, array(
					'depth'     => $depth,
					'max_depth' => $args['max_depth']
				) ) );
				edit_comment_link();
				?>
			</div>
			<?php if ( ! $is_pingback_comment ) { ?>
				<div class="text_holder" id="comment-<?php echo comment_ID(); ?>">
					<?php comment_text(); ?>
				</div>
				<span class="comment_date"><?php comment_time( get_option( 'date_format' ) ); ?><?php esc_html_e( 'at', 'borderland' ); ?><?php comment_time( get_option( 'time_format' ) ); ?></span>
			<?php } ?>
		</div>
		</div>
		<?php
		// tag will be closed by WordPress after looping through child elements ?>
		<?php
	}
}

if ( ! function_exists( 'borderland_elated_get_dynamic_sidebar_content' ) ) {
	/**
	 * Return Custom Widget Area content
	 *
	 * @return string
	 */
	function borderland_elated_get_dynamic_sidebar_content( $index = 1 ) {
		ob_start();
		dynamic_sidebar( $index );
		$sidebar_contents = ob_get_clean();
		
		return $sidebar_contents;
	}
}

if ( ! function_exists( 'borderland_elated_is_gutenberg_installed' ) ) {
	/**
	 * Function that checks if Gutenberg plugin installed
	 * @return bool
	 */
	function borderland_elated_is_gutenberg_installed() {
		return function_exists( 'is_gutenberg_page' ) && is_gutenberg_page();
	}
}

if ( ! function_exists( 'borderland_elated_is_wp_gutenberg_installed' ) ) {
	/**
	 * Function that checks if WordPress 5.x with Gutenberg editor installed
	 * @return bool
	 */
	function borderland_elated_is_wp_gutenberg_installed() {
		return class_exists( 'WP_Block_Type' );
	}
}
