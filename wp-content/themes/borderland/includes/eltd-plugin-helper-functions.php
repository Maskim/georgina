<?php

if ( ! function_exists( 'borderland_elated_return_toolbar_variable' ) ) {
	function borderland_elated_return_toolbar_variable() {
		global $eltd_toolbar;
		
		return $eltd_toolbar;
	}
}

if ( ! function_exists( 'borderland_elated_return_landing_variable' ) ) {
	function borderland_elated_return_landing_variable() {
		global $eltd_landing;
		
		return $eltd_landing;
	}
}

if ( ! function_exists( 'borderland_elated_return_global_options' ) ) {
	function borderland_elated_return_global_options() {
		global $borderland_elated_options;
		
		return $borderland_elated_options;
	}
}

if ( ! function_exists( 'borderland_elated_return_global_wp_query' ) ) {
	function borderland_elated_return_global_wp_query() {
		global $wp_query;
		
		return $wp_query;
	}
}

if ( ! function_exists( 'borderland_elated_get_module_part' ) ) {
	function borderland_elated_get_module_part( $module ) {
		return $module;
	}
}

if ( ! function_exists( 'borderland_elated_is_core_installed' ) ) {
	/**
	 * Function that checks if Core plugin is installed
	 * @return bool
	 */
	function borderland_elated_is_core_installed() {
		return class_exists( 'ElatedCPT' );
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

if ( ! function_exists( 'borderland_elated_contact_form_7_installed' ) ) {
	/**
	 * Function that checks if contact form 7 installed
	 * @return bool
	 */
	function borderland_elated_contact_form_7_installed() {
		return defined( 'WPCF7_VERSION' );
	}
}

if ( ! function_exists( 'borderland_elated_layer_slider_installed' ) ) {
	/**
	 * Function that checks if layer slider installed
	 * @return bool
	 */
	function borderland_elated_layer_slider_installed() {
		return defined( 'LS_PLUGIN_VERSION' );
	}
}

if ( ! function_exists( 'borderland_elated_is_wpml_installed' ) ) {
	/**
	 * Function that checks if WPML plugin is installed
	 * @return bool
	 *
	 * @version 0.1
	 */
	function borderland_elated_is_wpml_installed() {
		return defined( 'ICL_SITEPRESS_VERSION' );
	}
}

if ( ! function_exists( 'borderland_elated_visual_composer_installed' ) ) {
	/**
	 * Function that checks if visual composer installed
	 * @return bool
	 */
	function borderland_elated_visual_composer_installed() {
		return class_exists( 'WPBakeryVisualComposerAbstract' );
	}
}

if ( ! function_exists( 'borderland_elated_get_vc_version' ) ) {
	/**
	 * Return Visual Composer version string
	 *
	 * @return bool|string
	 */
	function borderland_elated_get_vc_version() {
		if ( borderland_elated_visual_composer_installed() ) {
			return WPB_VC_VERSION;
		}
		
		return false;
	}
}

if ( ! function_exists( 'borderland_elated_get_page_id' ) ) {
	/**
	 * Function that returns current page / post id.
	 * Checks if current page is woocommerce page and returns that id if it is.
	 * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
	 * page that is created in WP admin.
	 *
	 * @return int
	 *
	 * @version 0.1
	 *
	 * @see borderland_elated_is_woocommerce_installed()
	 * @see borderland_elated_is_woocommerce_shop()
	 */
	function borderland_elated_get_page_id() {
		if ( borderland_elated_is_woocommerce_installed() && borderland_elated_is_woocommerce_shop() ) {
			return borderland_elated_get_woo_shop_page_id();
		}
		
		if ( borderland_elated_is_archive_page() ) {
			return - 1;
		}
		
		return get_queried_object_id();
	}
}

if ( ! function_exists( 'borderland_elated_is_archive_page' ) ) {
	/**
	 * Function that checks if current page archive page, search, 404 or default home blog page
	 * @return bool
	 *
	 * @see is_archive()
	 * @see is_search()
	 * @see is_404()
	 * @see is_front_page()
	 * @see is_home()
	 */
	function borderland_elated_is_archive_page() {
		return is_archive() || is_search() || is_404() || ( is_front_page() && is_home() );
	}
}

if ( ! function_exists( 'borderland_elated_is_ajax_enabled' ) ) {
	/**
	 * Function that checks if ajax is enabled.
	 * @return bool
	 *
	 * @version 0.1
	 */
	function borderland_elated_is_ajax_enabled() {
		return borderland_elated_options()->getOptionValue( 'page_transitions' ) != '0';
	}
}

if ( ! function_exists( 'borderland_elated_is_ajax_header_animation_enabled' ) ) {
	/**
	 * Function that checks if header animation with ajax is enabled.
	 * @return boolean
	 *
	 * @version 0.1
	 */
	function borderland_elated_is_ajax_header_animation_enabled() {
		$is_enabled = false;
		
		if ( borderland_elated_is_ajax_enabled() && borderland_elated_options()->getOptionValue( 'ajax_animate_header' ) == 'yes' ) {
			$is_enabled = true;
		}
		
		return $is_enabled;
	}
}

if ( ! function_exists( 'borderland_elated_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if woocommerce is installed
	 * @return bool
	 */
	function borderland_elated_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'borderland_elated_is_woocommerce_shop' ) ) {
	/**
	 * Function that checks if current page is shop or product page
	 * @return bool
	 *
	 * @see is_shop()
	 */
	function borderland_elated_is_woocommerce_shop() {
		return function_exists( 'is_shop' ) && ( is_shop() || is_product() );
	}
}

if ( ! function_exists( 'borderland_elated_is_woocommerce_page' ) ) {
	/**
	 * Function that checks if current page is woocommerce shop, product or product taxonomy
	 * @return bool
	 *
	 * @see is_woocommerce()
	 */
	function borderland_elated_is_woocommerce_page() {
		return function_exists( 'is_woocommerce' ) && is_woocommerce();
	}
}

if ( ! function_exists( 'borderland_elated_is_product_category' ) ) {
	function borderland_elated_is_product_category() {
		return function_exists( 'is_product_category' ) && is_product_category();
	}
}

if ( ! function_exists( 'borderland_elated_is_product_tag' ) ) {
	function borderland_elated_is_product_tag() {
		return function_exists( 'is_product_tag' ) && is_product_tag();
	}
}

if ( ! function_exists( 'borderland_elated_get_woo_shop_page_id' ) ) {
	/**
	 * Function that returns shop page id that is set in WooCommerce settings page
	 * @return int id of shop page
	 */
	function borderland_elated_get_woo_shop_page_id() {
		if ( borderland_elated_is_woocommerce_installed() ) {
			return get_option( 'woocommerce_shop_page_id' );
		}
		
		return 0;
	}
}

if ( ! function_exists( 'borderland_elated_load_woo_assets' ) ) {
	/**
	 * Function that checks whether WooCommerce assets needs to be loaded.
	 *
	 * @see borderland_elated_is_ajax_enabled()
	 * @see borderland_elated_is_woocommerce_page()
	 * @see borderland_elated_has_woocommerce_shortcode()
	 * @see borderland_elated_has_woocommerce_widgets()
	 * @return bool
	 */
	
	function borderland_elated_load_woo_assets() {
		return borderland_elated_is_woocommerce_installed() && ( borderland_elated_is_ajax_enabled() || borderland_elated_is_woocommerce_page() || borderland_elated_has_woocommerce_shortcode() || borderland_elated_has_woocommerce_widgets() );
	}
}

if ( ! function_exists( 'borderland_elated_has_woocommerce_shortcode' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function borderland_elated_has_woocommerce_shortcode() {
		$woocommerce_shortcodes = array(
			'woocommerce_order_tracking',
			'add_to_cart',
			'product',
			'products',
			'product_categories',
			'product_category',
			'recent_products',
			'featured_products',
			'woocommerce_messages',
			'woocommerce_cart',
			'woocommerce_checkout',
			'woocommerce_my_account',
			'woocommerce_edit_address',
			'woocommerce_change_password',
			'woocommerce_view_order',
			'woocommerce_pay',
			'woocommerce_thankyou'
		);
		
		foreach ( $woocommerce_shortcodes as $woocommerce_shortcode ) {
			$has_shortcode = borderland_elated_has_shortcode( $woocommerce_shortcode );
			
			if ( $has_shortcode ) {
				return true;
			}
		}
		
		return false;
	}
}

if ( ! function_exists( 'borderland_elated_has_woocommerce_widgets' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function borderland_elated_has_woocommerce_widgets() {
		$widgets_array = array(
			'eltd-woocommerce-dropdown-cart',
			'woocommerce_widget_cart',
			'woocommerce_layered_nav',
			'woocommerce_layered_nav_filters',
			'woocommerce_price_filter',
			'woocommerce_product_categories',
			'woocommerce_product_search',
			'woocommerce_product_tag_cloud',
			'woocommerce_products',
			'woocommerce_recent_reviews',
			'woocommerce_recently_viewed_products',
			'woocommerce_top_rated_products'
		);
		
		foreach ( $widgets_array as $widget ) {
			$active_widget = is_active_widget( false, false, $widget );
			
			if ( $active_widget ) {
				return true;
			}
		}
		
		return false;
	}
}

if ( ! function_exists( 'borderland_elated_get_animation_name' ) ) {
	function borderland_elated_get_animation_name() {
		$page_id   = borderland_elated_get_page_id();
		$animation = get_post_meta( $page_id, "eltd_show-animation", true );
		
		if ( ! empty( $_SESSION['eltd_animation'] ) && $animation == "" ) {
			$animation = $_SESSION['eltd_animation'];
		}
		
		return $animation;
	}
}

if ( ! function_exists( 'borderland_elated_add_content_inner_classes' ) ) {
	function borderland_elated_add_content_inner_classes( $classes ) {
		$animation = borderland_elated_get_animation_name();
		
		if ( ! empty( $animation ) ) {
			$classes .= ' ' . $animation;
		}
		
		return $classes;
	}
	
	add_filter( 'borderland_elated_filter_content_inner_classes', 'borderland_elated_add_content_inner_classes' );
}

if ( ! function_exists( 'borderland_elated_add_inline_html_after_content' ) ) {
	function borderland_elated_add_inline_html_after_content() {
		$animation = borderland_elated_get_animation_name();
		
		if ( borderland_elated_options()->getOptionValue( 'page_transitions' ) !== '0' || $animation == "updown" || $animation == "fade" || $animation == "updown_fade" || $animation == "leftright" ) { ?>
			<div class="meta">
				<?php do_action( 'borderland_elated_action_ajax_meta' ); ?>
				
				<span id="eltd_page_id"><?php echo esc_attr( borderland_elated_get_page_id() ); ?></span>
				<div class="body_classes"><?php echo esc_html( implode( ',', get_body_class() ) ); ?></div>
			</div>
		<?php }
	}
	
	add_action( 'borderland_elated_action_after_content', 'borderland_elated_add_inline_html_after_content' );
}

if ( ! function_exists( 'borderland_elated_add_visual_composer_custom_css' ) ) {
	/**
	 * Function that adds Visual composer's custom css to our action. Needed for ajax page transitions
	 */
	function borderland_elated_add_visual_composer_custom_css() {
		$animation = borderland_elated_get_animation_name();
		
		if( borderland_elated_options()->getOptionValue( 'page_transitions' ) !== '0' || $animation == "updown" || $animation == "fade" || $animation == "updown_fade" || $animation == "leftright" ) {
			$page_id = borderland_elated_get_page_id();
			
			if ( borderland_elated_visual_composer_installed() && ( is_page() || is_single() || is_singular( 'portfolio_page' ) ) ) {
				$shortcodes_custom_css = get_post_meta( $page_id, '_wpb_shortcodes_custom_css', true );
				if ( ! empty( $shortcodes_custom_css ) ) {
					echo '<style type="text/css" data-type="vc_shortcodes-custom-css-' . esc_attr( $page_id ) . '">';
					echo get_post_meta( $page_id, '_wpb_shortcodes_custom_css', true );
					echo '</style>';
				}
				
				$post_custom_css = get_post_meta( $page_id, '_wpb_post_custom_css', true );
				if ( ! empty( $post_custom_css ) ) {
					echo '<style type="text/css" data-type="vc_custom-css-' . esc_attr( $page_id ) . '">';
					echo get_post_meta( $page_id, '_wpb_post_custom_css', true );
					echo '</style>';
				}
			}
		}
	}
	
	add_action( 'borderland_elated_action_after_content_inner', 'borderland_elated_add_visual_composer_custom_css' );
}

if ( ! function_exists( 'borderland_elated_vc_grid_elements_enabled' ) ) {
	
	/**
	 * Function that checks if Visual Composer Grid Elements are enabled
	 *
	 * @return bool
	 */
	function borderland_elated_vc_grid_elements_enabled() {
		return borderland_elated_options()->getOptionValue( 'enable_grid_elements' ) == 'yes';
	}
}

if ( ! function_exists( 'borderland_elated_vc_grid_elements' ) ) {
	
	/**
	 * Removes Visual Composer Grid Elements post type if VC Grid option disabled
	 * and enables Visual Composer Grid Elements post type
	 * if VC Grid option enabled
	 */
	function borderland_elated_vc_grid_elements() {
		if ( ! borderland_elated_vc_grid_elements_enabled() ) {
			remove_action( 'init', 'vc_grid_item_editor_create_post_type' );
		}
	}
	
	add_action( 'vc_after_init', 'borderland_elated_vc_grid_elements', 12 );
}

if ( ! function_exists( 'borderland_elated_vc_grid_elements_ajax_disable' ) ) {
	/**
	 * Function that disables ajax transitions if grid elements are enabled in theme options
	 */
	function borderland_elated_vc_grid_elements_ajax_disable() {
		
		if ( borderland_elated_vc_grid_elements_enabled() ) {
			borderland_elated_options()->addOption( 'page_transitions', '0' );
		}
	}
	
	add_action( 'wp', 'borderland_elated_vc_grid_elements_ajax_disable' );
}

if ( ! function_exists( 'borderland_elated_get_sidebar_layout' ) ) {
	function borderland_elated_get_sidebar_layout( $default_value = true ) {
		$eltd_page_id      = borderland_elated_get_page_id();
		$show_sidebar_meta = get_post_meta( $eltd_page_id, "eltd_show-sidebar", true );
		$sidebar           = $default_value ? borderland_elated_options()->getOptionValue( 'category_blog_sidebar' ) : '';
		
		if ( ! empty( $show_sidebar_meta ) ) {
			$sidebar = $show_sidebar_meta;
		}
		
		if ( is_singular( 'post' ) && ( $show_sidebar_meta === 'default' || empty( $show_sidebar_meta ) ) ) {
			$sidebar = borderland_elated_options()->getOptionValue( 'blog_single_sidebar' );
		}
		
		if ( is_singular( 'portfolio_page' ) ) {
			$show_portfolio_sidebar_meta = get_post_meta( $eltd_page_id, "eltd_portfolio_show_sidebar", true );
			
			if ( ! empty( $show_portfolio_sidebar_meta ) && $show_portfolio_sidebar_meta != "default" ) {
				$sidebar = $show_portfolio_sidebar_meta;
			}
		}
		
		if ( ! empty( $sidebar ) && ! is_active_sidebar( borderland_elated_get_sidebar_name() ) ) {
			$sidebar = '';
		}
		
		return $sidebar;
	}
}

if ( ! function_exists( 'borderland_elated_get_sidebar_name' ) ) {
	function borderland_elated_get_sidebar_name() {
		$page_id = borderland_elated_get_page_id();
		
		if ( get_post_meta( $page_id, 'eltd_choose-sidebar', true ) != "" ) {
			$sidebar = get_post_meta( $page_id, 'eltd_choose-sidebar', true );
		} else {
			if ( is_singular( "post" ) ) {
				if ( borderland_elated_options()->getOptionValue( 'blog_single_sidebar_custom_display' ) != "" ) {
					$sidebar = borderland_elated_options()->getOptionValue( 'blog_single_sidebar_custom_display' );
				} else {
					$sidebar = 'sidebar';
				}
			} else {
				$sidebar = 'sidebar_page';
			}
		}
		
		return $sidebar;
	}
}

if ( ! function_exists( 'borderland_elated_inline_page_background_style' ) ) {
	function borderland_elated_inline_page_background_style() {
		$page_id = borderland_elated_get_page_id();
		$style   = array();
		
		$background_color = get_post_meta( $page_id, "eltd_page_background_color", true );
		
		if ( ! empty( $background_color ) ) {
			$style[] = 'background-color:' . esc_attr( $background_color );
		}
		
		if ( ! empty( $style ) ) {
			echo borderland_elated_get_inline_style( $style );
		}
	}
}

if ( ! function_exists( 'borderland_elated_inline_page_padding_style' ) ) {
	function borderland_elated_inline_page_padding_style() {
		$page_id = borderland_elated_get_page_id();
		$style   = array();
		
		$content_padding = get_post_meta( $page_id, "eltd_content-top-padding", true );
		$is_mobile_check = get_post_meta( $page_id, "eltd_content-top-padding-mobile", true);
		$padding_suffix  = $is_mobile_check === 'yes' ? '!important' : '';
		
		if ( $content_padding !== '' ) {
			$style[] = 'padding-top:' . intval( $content_padding ) . 'px' . $padding_suffix;
		}
		
		if ( ! empty( $style ) ) {
			echo borderland_elated_get_inline_style( $style );
		}
	}
}

if ( ! function_exists( 'borderland_elated_get_blog_content_part' ) ) {
	function borderland_elated_get_blog_content_part() {
		$page_object = get_post( borderland_elated_get_page_id() );
		$content     = $page_object->post_content;
		$content     = apply_filters( 'the_content', $content );
		
		return $content;
	}
}

if ( ! function_exists( 'borderland_elated_get_blog_query_posts' ) ) {
	function borderland_elated_get_blog_query_posts() {
		$eltd_page_id             = borderland_elated_get_page_id();
		$category                 = get_post_meta( $eltd_page_id, "eltd_choose-blog-category", true );
		$number_of_posts_per_page = get_post_meta( $eltd_page_id, "eltd_show-posts-per-page", true );
		$post_number              = ! empty( $number_of_posts_per_page ) ? esc_attr( $number_of_posts_per_page ) : esc_attr( get_option( 'posts_per_page' ) );
		
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		
		$query_array = array(
			'post_status'    => 'publish',
			'post_type'      => 'post',
			'paged'          => $paged,
			'cat'            => $category,
			'posts_per_page' => $post_number
		);
		
		$blog_query = new WP_Query( $query_array );
		if ( is_archive() ) {
			$blog_query = borderland_elated_return_global_wp_query();
		}
		
		return $blog_query;
	}
}

if ( ! function_exists( 'borderland_elated_get_blog_pagination' ) ) {
	function borderland_elated_get_blog_pagination( $eltd_blog_query ) {
		
		if ( borderland_elated_options()->getOptionValue( 'pagination' ) !== 0 ) {
			$blog_page_range_meta = borderland_elated_options()->getOptionValue( 'blog_page_range' );
			
			if ( ! empty( $blog_page_range_meta ) ) {
				$blog_page_range = $blog_page_range_meta;
			} else {
				$blog_page_range = $eltd_blog_query->max_num_pages;
			}
			
			if ( get_query_var( 'paged' ) ) {
				$paged = get_query_var( 'paged' );
			} elseif ( get_query_var( 'page' ) ) {
				$paged = get_query_var( 'page' );
			} else {
				$paged = 1;
			}
			
			borderland_elated_get_blog_pagination_html( $eltd_blog_query->max_num_pages, $blog_page_range, $paged );
		}
	}
}

if ( ! function_exists( 'borderland_elated_get_blog_pagination_html' ) ) {
	function borderland_elated_get_blog_pagination_html( $pages = '', $range = 4, $paged = 1 ) {
		$showitems = $range + 1;
		
		if ( $pages == '' ) {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if ( ! $pages ) {
				$pages = 1;
			}
		}
		
		$pagination_classes = '';
		if ( borderland_elated_options()->getOptionValue( 'pagination_type' ) == 'standard' && borderland_elated_options()->getOptionValue( 'pagination_standard_position' ) !== '' ) {
			$pagination_classes .= "standard_" . esc_attr( borderland_elated_options()->getOptionValue( 'pagination_standard_position' ) );
		} elseif ( borderland_elated_options()->getOptionValue( 'pagination_type' ) == 'arrows_on_sides' ) {
			$pagination_classes .= "arrows_on_sides";
		}
		
		$pagination_style = "";
		if ( borderland_elated_options()->getOptionValue( 'blog_pagination_border_above_yesno' ) == 'yes' ) {
			$pagination_classes .= " pagination_with_border";
			if ( borderland_elated_options()->getOptionValue( 'blog_pgn_border_color' ) != '' ) {
				$pagination_style .= "border-top-color:" . borderland_elated_options()->getOptionValue( 'blog_pgn_border_color' ) . "; ";
			} else {
				$pagination_style .= "border-top-color: #dedede; ";
			}
			
			if ( borderland_elated_options()->getOptionValue( 'blog_pgn_border_width' ) != '' ) {
				$pagination_style .= "border-top-width:" . borderland_elated_options()->getOptionValue( 'blog_pgn_border_width' ) . "px; ";
			} else {
				$pagination_style .= "border-top-width: 1px; ";
			}
			
			if ( borderland_elated_options()->getOptionValue( 'blog_pgn_border_style' ) != '' ) {
				$pagination_style .= "border-top-style:" . borderland_elated_options()->getOptionValue( 'blog_pgn_border_style' ) . "; ";
			} else {
				$pagination_style .= "border-top-style: solid; ";
			}
			
			if ( borderland_elated_options()->getOptionValue( 'blog_pagination_border_margin' ) != '' ) {
				$pagination_style .= "padding-top:" . borderland_elated_options()->getOptionValue( 'blog_pagination_border_margin' ) . "px; ";
			} else {
				$pagination_style .= "padding-top: 40px; ";
			}
		}
		
		if ( 1 != $pages ) {
			echo "<div class='pagination " . esc_attr( $pagination_classes ) . "' " . borderland_elated_get_inline_style( $pagination_style ) . "><ul>";
			
			$icon_first_left_html = "<span class='pagination_arrow arrow_carrot-2left'></span>";
			if ( borderland_elated_options()->getOptionValue( 'pagination_double_arrows_type' ) != '' ) {
				$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_double_arrows_type' );
				$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_first_left_html  = '<span class="pagination_arrow ' . esc_attr( $direction_nav_classes['left_icon_class'] ) . '"></span>';
			}
			if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
				echo "<li class='first'><a href='" . esc_url( get_pagenum_link( 1 ) ) . "'>$icon_first_left_html</a></li>";
			}
			echo "<li class='prev";
			if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
				echo " prev_first";
			}
			
			$icon_left_html = "<i class='pagination_arrow arrow_carrot-left'></i>";
			if ( borderland_elated_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
				$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_arrows_type' );
				$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_left_html        = '<span class="pagination_arrow ' . $direction_nav_classes['left_icon_class'] . '"></span>';
			}
			
			echo "'><a href='" . esc_url( get_pagenum_link( $paged - 1 ) ) . "'>$icon_left_html</a></li>";
			
			for ( $i = 1; $i <= $pages; $i ++ ) {
				if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
					echo esc_attr( $paged == $i ) ? "<li class='active'><span>" . $i . "</span></li>" : "<li><a href='" . get_pagenum_link( $i ) . "' class='inactive'>" . $i . "</a></li>";
				}
			}
			
			echo "<li class='next";
			if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
				echo " next_last";
			}
			echo "'><a href=\"";
			if ( $pages > $paged ) {
				echo esc_url( get_pagenum_link( $paged + 1 ) );
			} else {
				echo esc_url( get_pagenum_link( $paged ) );
			}
			
			$icon_right_html = "<i class='pagination_arrow arrow_carrot-right'></i>";
			
			if ( borderland_elated_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
				$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_arrows_type' );
				$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_right_html       = '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class'] . '"></span>';
			}
			
			echo "\">$icon_right_html</a></li>";
			
			$icon_last_right_html = "<span class='pagination_arrow arrow_carrot-2right'></span>";
			
			if ( borderland_elated_options()->getOptionValue( 'pagination_double_arrows_type' ) != '' ) {
				$icon_navigation_class = borderland_elated_options()->getOptionValue( 'pagination_double_arrows_type' );
				$direction_nav_classes = borderland_elated_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_last_right_html  = '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class'] . '"></span>';
			}
			
			if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
				echo "<li class='last'><a href='" . esc_url( get_pagenum_link( $pages ) ) . "'>$icon_last_right_html</a></li>";
			}
			echo "</ul></div>\n";
		}
	}
}