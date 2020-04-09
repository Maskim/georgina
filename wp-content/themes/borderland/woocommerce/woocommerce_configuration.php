<?php

//Disable the default WooCommerce stylesheet.
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

if(!function_exists('borderland_elated_woo_related_products_args')) {
    /**
     * Function that sets number of displayed related products. Hooks to woocommerce_output_related_products_args filter
     * @param $args array array of args for the query
     * @return mixed array of changed args
     */
    function borderland_elated_woo_related_products_args( $args ) {
        if( borderland_elated_options()->getOptionValue( 'woo_products_list_number' ) != ''){
            switch( borderland_elated_options()->getOptionValue( 'woo_products_list_number' ) ){
                case('columns-3') :
                    $args['posts_per_page'] = 3;
                    break;
                case('columns-4') :
                    $args['posts_per_page'] = 4;
                    break;
                default :
                    $args['posts_per_page'] = 3;
            }
        }
        else {
            $args['posts_per_page'] = 3;
        }
        return $args;
    }

    add_filter( 'woocommerce_output_related_products_args', 'borderland_elated_woo_related_products_args' );
}

// Define number of products per page.
if(!function_exists('borderland_elated_woo_product_per_page')) {
    /**
     * Function that sets number of products per page. Default is 12
     * @return int number of products to be shown per page
     */
    function borderland_elated_woo_product_per_page() {
        $products_per_page = 12;
        if( borderland_elated_options()->getOptionValue( 'woo_products_per_page' ) ) {
            $products_per_page = borderland_elated_options()->getOptionValue( 'woo_products_per_page' );
        }

        return $products_per_page;
    }

    add_filter('loop_shop_per_page', 'borderland_elated_woo_product_per_page', 20);
}

/**
 * Remove add to cart function from woocommerce_after_shop_loop_item_title hook
 * and hook it in eltd_woocommerce_after_product_image
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action('eltd_woocommerce_after_product_image', 'woocommerce_template_loop_add_to_cart', 10);

/**
 * Remove related products from woocommerce_after_single_product_summary hook
 * and hook it in borderland_elated_action_woocommerce_related_products.With this action(borderland_elated_action_woocommerce_related_products)
 *  related products now can be hooked separately from woocommerce tabs(accordions)
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action('borderland_elated_action_woocommerce_related_products', 'woocommerce_output_related_products', 5);


/**
 * Overrides placeholder values for checkout fields
 * @param array all checkout fields
 * @return array checkout fields with overriden values
 */
function borderland_elated_custom_override_checkout_fields($fields) {
    //billing fields
    $args_billing = array(
        'first_name' => esc_html__('First name','borderland'),
        'last_name'  => esc_html__('Last name','borderland'),
        'company'    => esc_html__('Company name','borderland'),
        'address_1'  => esc_html__('Address','borderland'),
        'email'      => esc_html__('Email','borderland'),
        'phone'      => esc_html__('Phone','borderland'),
        'postcode'   => esc_html__('Postcode / ZIP','borderland'),
        'city'       => esc_html__('City','borderland'),
        'state'      => esc_html__('State','borderland')
    );
    
    //shipping fields
    $args_shipping = array(
        'first_name' => esc_html__('First name','borderland'),
        'last_name'  => esc_html__('Last name','borderland'),
        'company'    => esc_html__('Company name','borderland'),
        'address_1'  => esc_html__('Address','borderland'),
        'postcode'   => esc_html__('Postcode / ZIP','borderland')
    );
    
    //override billing placeholder values
    foreach ($args_billing as $key => $value) {
        $fields["billing"]["billing_{$key}"]["placeholder"] = $value;
    }
    
    //override shipping placeholder values
    foreach ($args_shipping as $key => $value) {
        $fields["shipping"]["shipping_{$key}"]["placeholder"] = $value;
    }

    return $fields;
}

// Hook in
add_filter('woocommerce_checkout_fields', 'borderland_elated_custom_override_checkout_fields');

// Adds theme support for woocommerce 
add_theme_support('woocommerce');

if ( ! function_exists( 'borderland_elated_set_number_of_columns_woo_product_list' ) ) {
    function borderland_elated_set_number_of_columns_woo_product_list() {
        global $woocommerce_loop;
        
        $woocommerce_loop['columns'] = 3;
    }
}

if (!function_exists('borderland_elated_woocommerce_content')){

    /**
     * Output WooCommerce content.
     *
     * This function is only used in the optional 'woocommerce.php' template
     * which people can add to their themes to add basic woocommerce support
     * without hooks or modifying core templates.
     *
     * @access public
     * @return void
     */
    function borderland_elated_woocommerce_content() {
    
        if ( is_singular( 'product' ) ) {
        
            while ( have_posts() ) : the_post();
            
                wc_get_template_part( 'content', 'single-product' );
        
            endwhile;
        
        } else {
        
            do_action( 'woocommerce_archive_description' );
        
            if ( have_posts() ) {
            
                /**
                 * Hook: woocommerce_before_shop_loop.
                 *
                 * @hooked wc_print_notices - 10
                 * @hooked woocommerce_result_count - 20
                 * @hooked woocommerce_catalog_ordering - 30
                 */
                do_action( 'woocommerce_before_shop_loop' );
            
                woocommerce_product_loop_start();
            
                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();
                    
                        /**
                         * Hook: woocommerce_shop_loop.
                         *
                         * @hooked WC_Structured_Data::generate_product_data() - 10
                         */
                        do_action( 'woocommerce_shop_loop' );
                    
                        wc_get_template_part( 'content', 'product' );
                    }
                }
            
                woocommerce_product_loop_end();
            
                /**
                 * Hook: woocommerce_after_shop_loop.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
                do_action( 'woocommerce_after_shop_loop' );
            } else {
                /**
                 * Hook: woocommerce_no_products_found.
                 *
                 * @hooked wc_no_products_found - 10
                 */
                do_action( 'woocommerce_no_products_found' );
            }
        }
    }
}

if ( ! function_exists( 'borderland_elated_woo_output_product_data_tabs' ) ) {

	/**
	 * Output the product tabs.
	 *
	 * @access public
	 * @subpackage	Product/Tabs
	 * @return void
	 */
	function borderland_elated_woo_output_product_data_tabs() {
        wc_get_template( 'single-product/tabs/tabs.php' );
                echo '</div>';
	}
}

if(!function_exists('borderland_elated_woo_change_actions_priorities')) {
    /**
     * Function that changes woocommerce actions priorities.
     * Used in product listing to put product rating bellow product price
     */
    function borderland_elated_woo_change_actions_priorities() {
        $actions = array(
            array(
                'tag' => 'woocommerce_after_shop_loop_item_title',
                'action' => 'woocommerce_template_loop_price',
                'priority' => 10,
                'priority_to_set' => 10
            ),
            array(
                'tag' => 'woocommerce_after_shop_loop_item_title',
                'action' => 'woocommerce_template_loop_rating',
                'priority' => 5,
                'priority_to_set' => 11
            )
        );
        
        foreach($actions as $action) {
            //actions which priorities needs to be changed
            remove_action($action['tag'], $action['action'], $action['priority']);
            
            //new priorities
            add_action($action['tag'], $action['action'], $action['priority_to_set']);
        }
    }
    
    add_action('woocommerce_change_priorities', 'borderland_elated_woo_change_actions_priorities');
    do_action('woocommerce_change_priorities');
}

add_filter( 'get_product_search_form' , 'borderland_elated_woo_product_searchform' );

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function borderland_elated_woo_product_searchform($form) {

    $form = '<form role="search" method="get" class="woocommerce-product-search" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>
			<label class="screen-reader-text" for="s">' . esc_html__( 'Search for:', 'borderland' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search Products', 'borderland' ) . '" />
			<input type="submit" id="searchsubmit" value="&#xf002" />
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';

    return $form;

}

if ( ! function_exists( 'borderland_elated_woo_share' ) ) {
    function borderland_elated_woo_share() {
        
        $product_show_social_share = "no";
        if ( borderland_elated_options()->getOptionValue( 'enable_social_share' ) == "yes" && borderland_elated_options()->getOptionValue( 'post_types_names_product' ) == "product" ) {
            if ( borderland_elated_options()->getOptionValue( 'woo_product_single_show_social_share' ) ) {
                $product_show_social_share = borderland_elated_options()->getOptionValue( 'woo_product_single_show_social_share' );
                
                $product_social_share_type = "dropdown";
                if ( borderland_elated_options()->getOptionValue( 'woo_product_single_select_share_option' ) ) {
                    $product_social_share_type = borderland_elated_options()->getOptionValue( 'woo_product_single_select_share_option' );
                }
            }
        }
        
        if ( $product_show_social_share == 'yes' ) {
            if ( $product_social_share_type == 'dropdown' ) {
                if ( do_shortcode( '[no_social_share]' ) != "" ) {
                    echo '<span class="socail_share_title">' . esc_html__( 'Share:', 'borderland' ) . '</span>';
                    echo do_shortcode( '[no_social_share]' ); // XSS OK
                }
            } elseif ( $product_social_share_type == 'list' ) {
                if ( do_shortcode( '[no_social_share_list]' ) != "" ) {
                    echo '<div class="social_share_list_holder">';
                    echo do_shortcode( '[no_social_share_list]' ); // XSS OK
                    echo '</div>'; // close social_share_list_holder
                }
            }
        }
    }
    
    add_action( 'woocommerce_product_meta_end', 'borderland_elated_woo_share' );
}

/* removes double links around products on lists and related items */
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);