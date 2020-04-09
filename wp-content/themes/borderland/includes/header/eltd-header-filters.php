<?php

if(!function_exists('borderland_elated_header_classes')) {
	/**
	 * Function that acts like filter for header classes based on theme settings
	 * @param array array of classes to add to header tag
	 *
	 * @see apply_filters()
	 */
	function borderland_elated_header_classes($classes = array()) {
		$classes = array('page_header');
		$classes = apply_filters('borderland_elated_filter_header_classes', $classes);

		if(is_array($classes) && count($classes)) {
			echo implode(' ', $classes);
		}
	}
}

if(!function_exists('borderland_elated_transparent_header_class')) {
	/**
	 * Function that adds transparency class to header based on page or theme options
	 * @param array array of classes from main filter
	 * @return array array of classes with added transparent class
	 *
	 * @see borderland_elated_is_archive_page()
	 */
	function borderland_elated_transparent_header_class($classes) {
		$id = borderland_elated_get_page_id();

		$is_header_transparent  	= false;
		$transparent_header         = '1';
		$transparent_values_array 	= array('0.00', '0');
		$is_archive 				= borderland_elated_is_archive_page();

		//is header transparent set on current page?
		if(!$is_archive && get_post_meta($id, "eltd_header_color_transparency_per_page", true) !== "") {
			//take value set for current page
			$transparent_header = esc_attr(get_post_meta($id, "eltd_header_color_transparency_per_page", true));
		} elseif(borderland_elated_options()->getOptionValue( 'header_background_transparency_initial' )) {
			//take value set in global options
			$transparent_header = borderland_elated_options()->getOptionValue( 'header_background_transparency_initial' );
		}

		//is header completely transparent?
		$is_header_transparent 	= in_array($transparent_header, $transparent_values_array);
		if($is_header_transparent) {
			$classes[]= 'transparent';
		}
		
		//is header transparent on scrolled window?
		if(borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) !== 'regular' && !in_array(borderland_elated_options()->getOptionValue( 'header_background_transparency_sticky' ), $transparent_values_array) || !in_array(borderland_elated_options()->getOptionValue( 'header_background_transparency_scroll' ), $transparent_values_array)) {
			$classes[] = 'scrolled_not_transparent';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_transparent_header_class');
}

if(!function_exists('borderland_elated_with_border_header_class')) {
	/**
	 * Function that adds border class on header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added border class
	 */
	function borderland_elated_with_border_header_class($classes) {
		$header_with_border = borderland_elated_options()->getOptionValue( 'header_bottom_border_color' ) != '';
		if($header_with_border) {
			$classes[]= 'with_border';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_with_border_header_class');
}

if(!function_exists('borderland_elated_wide_first_level_menu_bkg_header_class')) {
	/**
	 * Function that shows wide background in 1st level menu 
	 * @param array array of classes from main filter
	 * @return array array of classes with added wide background class
	 */
	function borderland_elated_wide_first_level_menu_bkg_header_class($classes) {
		$eltd_wide_first_level_menu_bkg_header_class = ((borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding") || (borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == "stick menu_bottom") ) && borderland_elated_options()->getOptionValue( 'enable_menu_wide_background' ) == 'yes';
		if($eltd_wide_first_level_menu_bkg_header_class) {
			$classes[]= 'first_level_menu_wide_bkg';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_wide_first_level_menu_bkg_header_class');
}

if(!function_exists('borderland_elated_top_header_class')) {
	/**
	 * Function that adds top header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header class
	 */
	function borderland_elated_top_header_class($classes) {
		$display_header_top = "yes";
		if(borderland_elated_options()->getOptionValue( 'header_top_area' )){
			$display_header_top = borderland_elated_options()->getOptionValue( 'header_top_area' );
		}
		if (!empty($_SESSION['eltd_borderland_header_top'])){
			$display_header_top = $_SESSION['eltd_borderland_header_top'];
		}

		if($display_header_top == 'yes') {
			$classes[] = 'has_top';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_top_header_class');
}

if(!function_exists('borderland_elated_has_woocommerce_dropdown_class')) {
	/**
	 * Function that adds woocommerce dropdown class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added woocommerce dropdown class
	 *
	 * @see borderland_elated_is_woocommerce_installed()
	 */
	function borderland_elated_has_woocommerce_dropdown_class($classes) {
		if(is_active_sidebar('woocommerce_dropdown') && borderland_elated_is_woocommerce_installed()) {
			$classes[]= 'has_woocommerce_dropdown ';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_has_woocommerce_dropdown_class');
}

if(!function_exists('borderland_elated_scroll_top_header_class')) {
	/**
	 * Function that adds top header scroll class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added top header scroll class
	 */
	function borderland_elated_scroll_top_header_class($classes) {
		$header_top_area_scroll = "no";
		if(borderland_elated_options()->getOptionValue( 'header_top_area_scroll' )){
			$header_top_area_scroll = borderland_elated_options()->getOptionValue( 'header_top_area_scroll' );
        }

		if($header_top_area_scroll == 'yes') {
			$classes[] = 'scroll_top';
		}

		if(borderland_elated_options()->getOptionValue( 'header_top_area_scroll' ) == 'no' && borderland_elated_options()->getOptionValue( 'header_top_area' ) == 'yes') {
			$classes[]= 'scroll_header_top_area';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes' ,'borderland_elated_scroll_top_header_class');
}

if(!function_exists('borderland_elated_center_logo_class')) {
	/**
	 * Function that adds center logo class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added center logo class
	 */
	function borderland_elated_center_logo_class($classes) {
		if((borderland_elated_options()->getOptionValue( 'center_logo_image' ) == 'yes' && borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) !== "stick_with_left_right_menu") || (borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding")) {
			$classes[] = 'centered_logo';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_center_logo_class');
}

if(!function_exists('borderland_elated_header_fixed_right_class')) {
	/**
	 * Function that adds fixed header class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added fixed header class
	 */
	function borderland_elated_header_fixed_right_class($classes) {
		if(is_active_sidebar('header_fixed_right')) {
			$classes[]= 'has_header_fixed_right';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_fixed_right_class');
}

if(!function_exists('borderland_elated_header_style_class')) {
	/**
	 * Function that adds header style class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added header style class
	 */
	function borderland_elated_header_style_class($classes) {
		$id = borderland_elated_get_page_id();

		if(get_post_meta($id, "eltd_header-style", true) != ""){
			$classes[]= get_post_meta($id, "eltd_header-style", true);
		} else if(borderland_elated_options()->getOptionValue( 'header_style' )){
			$classes[]= borderland_elated_options()->getOptionValue( 'header_style' );
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_style_class');
}

if(!function_exists('borderland_elated_header_style_on_scroll_class')) {
    /**
     * Function that adds header style class to header tag
     * @param array array of classes from main filter
     * @return array array of classes with added header style class
     */
    function borderland_elated_header_style_on_scroll_class($classes) {
	    $id = borderland_elated_get_page_id();

        if(get_post_meta($id, "eltd_header-style-on-scroll", true) != ""){
            if(get_post_meta($id, "eltd_header-style-on-scroll", true) == "yes") {
                $classes[] = 'header_style_on_scroll';
            }
        } else if(borderland_elated_options()->getOptionValue( 'enable_header_style_on_scroll' ) == 'yes'){
            $classes[]= 'header_style_on_scroll';
        }

        return $classes;
    }

    add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_style_on_scroll_class');
}

if(!function_exists('borderland_elated_header_class_first_level_bg_color')) {
	/**
	 * Function that adds first level menu background color class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added first level menu background color class
	 */
	function borderland_elated_header_class_first_level_bg_color($classes) {
		//check if first level hover background color is set
		$has_first_lvl_bg_color = borderland_elated_options()->getOptionValue( 'menu_hover_background_color' ) !== '';

		if($has_first_lvl_bg_color) {
			$classes[]= 'with_hover_bg_color';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_class_first_level_bg_color');
}

if(!function_exists('borderland_elated_header_bottom_appearance_class')) {
	/**
	 * Function that adds bottom header appearance class to header tag
	 * @param array array of classes from main filter
	 * @return array array of classes with added bottom header appearance class
	 */
	function borderland_elated_header_bottom_appearance_class($classes) {
        if (isset($_SESSION['eltd_borderland_header_type']) && $_SESSION['eltd_borderland_header_type'] == "big") {
            borderland_elated_options()->addOption( "header_bottom_appearance", "stick menu_bottom" );
        }

        if(borderland_elated_options()->getOptionValue( 'header_bottom_appearance' )){
			$classes[]= borderland_elated_options()->getOptionValue( 'header_bottom_appearance' );
		} else {
			$classes[]= 'fixed';
		}

		return $classes;
	}

	add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_bottom_appearance_class');
}

if(!function_exists('borderland_elated_header_menu_items_position_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function borderland_elated_header_menu_items_position_class($classes) {
        if(borderland_elated_options()->getOptionValue( 'header_bottom_appearance' ) == 'stick_with_left_right_menu' && borderland_elated_options()->getOptionValue( 'menu_items_position' )){
            $classes[]= borderland_elated_options()->getOptionValue( 'menu_items_position' );
        }

        return $classes;
    }

    add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_menu_items_position_class');
}

if(!function_exists('borderland_elated_header_paspartu_alignment_class')) {
    /**
     * Function that adds paspartu alignment class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added paspartu alignment class
     */
    function borderland_elated_header_paspartu_alignment_class($classes) {
        if(borderland_elated_options()->getOptionValue( 'paspartu_header_alignment' ) == 'yes' && borderland_elated_options()->getOptionValue( 'paspartu' ) == 'yes'){
            $classes[]= 'paspartu_header_alignment';
        }
		
		if(borderland_elated_options()->getOptionValue( 'paspartu_header_inside' ) == 'yes' && borderland_elated_options()->getOptionValue( 'paspartu' ) == 'yes'){
            $classes[]= 'paspartu_header_inside';
        }

        return $classes;
    }

    add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_paspartu_alignment_class');
}

if(!function_exists('borderland_elated_header_ajax_header_animation_class')) {
    /**
     * Function that ajax header animation class to header tag
     * @param array array of classes from main filter
     * @return array of classes with added ajax header animation class
     */
    function borderland_elated_header_ajax_header_animation_class($classes) {

        if(borderland_elated_is_ajax_header_animation_enabled()){
            $classes[]= 'ajax_header_animation';
        }

        return $classes;
    }

    add_filter('borderland_elated_filter_header_classes', 'borderland_elated_header_ajax_header_animation_class');
}