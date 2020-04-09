<?php
if(!defined('ABSPATH')) exit;

/**
 * Class EltdCPT
 *
 * @package Elated Core
 *
 * This class is used to register custom post types and taxonomies. It is a singletone class and main method
 * is registerCPT
 * It registers:
 * - portfolio
 * - portfolio category
 * - testimonials
 * - testimonials category
 * - carousels
 * - carousels category
 * - sliders
 * - sliders category
 */
class EltdCPT {
    private static $instance;

    /**
     * Private constructor so this class can't instantiated multiple times
     */
    private function __construct() {}

    /**
     * Method that returns instance of current class
     * @return EltdCPT
     */
    public static function getInstance() {
        if(self::$instance == null) {
            return new self();
        }

        return self::$instance;
    }

    /**
     * Method that registers all CPTs
     *
     * @see EltdCPT::registerPortfolio
     * @see EltdCPT::registerTestimonials
     * @see EltdCPT::registerCarousels
     * @see EltdCPT::registerEltdSlider
     */
    public function registerCPT() {
        $this->registerPortfolio();
        $this->registerTestimonials();
        $this->registerCarousels();
        $this->registerEltdSlider();
    }

    /**
     * Method that registers portfolio CPT and portfolio category taxonomy
     */
    public function registerPortfolio() {
        global $borderland_elated_framework;

        $slug = 'portfolio_page';
        if(borderland_elated_options()->getOptionValue( 'portfolio_single_slug') != ""){
            $slug = borderland_elated_options()->getOptionValue( 'portfolio_single_slug');
        }

        $menuPosition   = $borderland_elated_framework->getSkin()->getMenuItemPosition('portfolio');
        $menuIcon       = $borderland_elated_framework->getSkin()->getMenuIcon('portfolio');

        register_post_type( 'portfolio_page',
            array(
                'labels' => array(
                    'name' => esc_html__( 'Portfolio','eltd-cpt' ),
                    'singular_name' => esc_html__( 'Portfolio Item','eltd-cpt' ),
                    'add_item' => esc_html__('New Portfolio Item','eltd-cpt'),
                    'add_new_item' => esc_html__('Add New Portfolio Item','eltd-cpt'),
                    'edit_item' => esc_html__('Edit Portfolio Item','eltd-cpt')
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => $slug),
                'menu_position' => $menuPosition,
                'menu_icon'	=> $menuIcon,
                'show_ui' => true,
                'supports' => array('author', 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'comments')
            )
        );

        $labels = array(
            'name' => esc_html__( 'Portfolio Categories', 'eltd-cpt' ),
            'singular_name' => esc_html__( 'Portfolio Category', 'eltd-cpt' ),
            'search_items' =>  esc_html__( 'Search Portfolio Categories','eltd-cpt' ),
            'all_items' => esc_html__( 'All Portfolio Categories','eltd-cpt' ),
            'parent_item' => esc_html__( 'Parent Portfolio Category','eltd-cpt' ),
            'parent_item_colon' => esc_html__( 'Parent Portfolio Category:','eltd-cpt' ),
            'edit_item' => esc_html__( 'Edit Portfolio Category','eltd-cpt' ),
            'update_item' => esc_html__( 'Update Portfolio Category','eltd-cpt' ),
            'add_new_item' => esc_html__( 'Add New Portfolio Category','eltd-cpt' ),
            'new_item_name' => esc_html__( 'New Portfolio Category Name','eltd-cpt' ),
            'menu_name' => esc_html__( 'Portfolio Categories','eltd-cpt' ),
        );

        register_taxonomy('portfolio_category', array('portfolio_page'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'portfolio-category' ),
        ));

        $labels = array(
            'name' => esc_html__( 'Portfolio Tags', 'eltd-cpt' ),
            'singular_name' => esc_html__( 'Portfolio Tag', 'eltd-cpt' ),
            'search_items' =>  esc_html__( 'Search Portfolio Tags','eltd-cpt' ),
            'all_items' => esc_html__( 'All Portfolio Tags','eltd-cpt' ),
            'parent_item' => esc_html__( 'Parent Portfolio Tag','eltd-cpt' ),
            'parent_item_colon' => esc_html__( 'Parent Portfolio Tags:','eltd-cpt' ),
            'edit_item' => esc_html__( 'Edit Portfolio Tag','eltd-cpt' ),
            'update_item' => esc_html__( 'Update Portfolio Tag','eltd-cpt' ),
            'add_new_item' => esc_html__( 'Add New Portfolio Tag','eltd-cpt' ),
            'new_item_name' => esc_html__( 'New Portfolio Tag Name','eltd-cpt' ),
            'menu_name' => esc_html__( 'Portfolio Tags','eltd-cpt' ),
        );

        register_taxonomy('portfolio_tag',array('portfolio_page'), array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'portfolio-tag' ),
        ));
    }

    /**
     * Method that registers testimonials CPT and testimonials category taxonomy
     */
    public function registerTestimonials() {
        global $borderland_elated_framework;
	
	    $menuPosition   = $borderland_elated_framework->getSkin()->getMenuItemPosition('testimonial');
	    $menuIcon       = $borderland_elated_framework->getSkin()->getMenuIcon('testimonial');

        register_post_type('testimonials',
            array(
                'labels' 		=> array(
                    'name' 				=> esc_html__('Testimonials','eltd-cpt' ),
                    'singular_name' 	=> esc_html__('Testimonial','eltd-cpt' ),
                    'add_item'			=> esc_html__('New Testimonial','eltd-cpt'),
                    'add_new_item' 		=> esc_html__('Add New Testimonial','eltd-cpt'),
                    'edit_item' 		=> esc_html__('Edit Testimonial','eltd-cpt')
                ),
                'public'		=>	false,
                'show_in_menu'	=>	true,
                'rewrite' 		=> 	array('slug' => 'testimonials'),
                'menu_position' => 	$menuPosition,
                'menu_icon'		=>  $menuIcon,
                'show_ui'		=>	true,
                'has_archive'	=>	false,
                'hierarchical'	=>	false,
                'supports'		=>	array('title', 'thumbnail')
            )
        );

        $labels = array(
            'name' => esc_html__( 'Testimonials Categories', 'eltd-cpt' ),
            'singular_name' => esc_html__( 'Testimonial Category', 'eltd-cpt' ),
            'search_items' =>  esc_html__( 'Search Testimonials Categories','eltd-cpt' ),
            'all_items' => esc_html__( 'All Testimonials Categories','eltd-cpt' ),
            'parent_item' => esc_html__( 'Parent Testimonial Category','eltd-cpt' ),
            'parent_item_colon' => esc_html__( 'Parent Testimonial Category:','eltd-cpt' ),
            'edit_item' => esc_html__( 'Edit Testimonials Category','eltd-cpt' ),
            'update_item' => esc_html__( 'Update Testimonials Category','eltd-cpt' ),
            'add_new_item' => esc_html__( 'Add New Testimonials Category','eltd-cpt' ),
            'new_item_name' => esc_html__( 'New Testimonials Category Name','eltd-cpt' ),
            'menu_name' => esc_html__( 'Testimonials Categories','eltd-cpt' ),
        );

        register_taxonomy('testimonials_category',array('testimonials'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'testimonials-category' ),
        ));
    }

    /**
     * Method that registers carousel item CPT and carousel taxonomy
     */
    public function registerCarousels() {
        global $borderland_elated_framework;
	
	    $menuIcon       = $borderland_elated_framework->getSkin()->getMenuIcon('carousel');
	    $menuPosition   = $borderland_elated_framework->getSkin()->getMenuItemPosition('carousel');

        register_post_type('carousels',
            array(
                'labels'    => array(
                    'name'        => esc_html__('Elated Carousel','eltd-cpt' ),
                    'menu_name' => esc_html__('Elated Carousel','eltd-cpt' ),
                    'all_items' => esc_html__('Carousel Items','eltd-cpt' ),
                    'add_new' =>  esc_html__('Add New Carousel Item','eltd-cpt'),
                    'singular_name'   => esc_html__('Carousel Item','eltd-cpt' ),
                    'add_item'      => esc_html__('New Carousel Item','eltd-cpt'),
                    'add_new_item'    => esc_html__('Add New Carousel Item','eltd-cpt'),
                    'edit_item'     => esc_html__('Edit Carousel Item','eltd-cpt')
                ),
                'public'    =>  false,
                'show_in_menu'  =>  true,
                'rewrite'     =>  array('slug' => 'carousels'),
                'menu_position' =>  $menuPosition,
                'menu_icon'	=> $menuIcon,
                'show_ui'   =>  true,
                'has_archive' =>  false,
                'hierarchical'  =>  false,
                'supports'    =>  array('title','page-attributes'),
            )
        );

        $labels = array(
            'name' => esc_html__( 'Carousels', 'eltd-cpt' ),
            'singular_name' => esc_html__( 'Carousel', 'eltd-cpt' ),
            'search_items' =>  esc_html__( 'Search Carousels','eltd-cpt' ),
            'all_items' => esc_html__( 'All Carousels','eltd-cpt' ),
            'parent_item' => esc_html__( 'Parent Carousel','eltd-cpt' ),
            'parent_item_colon' => esc_html__( 'Parent Carousel:','eltd-cpt' ),
            'edit_item' => esc_html__( 'Edit Carousel','eltd-cpt' ),
            'update_item' => esc_html__( 'Update Carousel','eltd-cpt' ),
            'add_new_item' => esc_html__( 'Add New Carousel','eltd-cpt' ),
            'new_item_name' => esc_html__( 'New Carousel Name','eltd-cpt' ),
            'menu_name' => esc_html__( 'Carousels','eltd-cpt' ),
        );

        register_taxonomy('carousels_category',array('carousels'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'carousels-category' ),
        ));
    }

    /**
     * Method that registers slide CPT and slider taxonomy
     */
    public function registerEltdSlider() {
        global $borderland_elated_framework;
	
	    $menuIcon       = $borderland_elated_framework->getSkin()->getMenuIcon('slider');
	    $menuPosition   = $borderland_elated_framework->getSkin()->getMenuItemPosition('slider');
	    
        register_post_type('slides',
            array(
                'labels' 		=> array(
                    'name' 				=> esc_html__('Elated Slider','eltd-cpt' ),
                    'menu_name'	=> esc_html__('Elated Slider','eltd-cpt' ),
                    'all_items'	=> esc_html__('Slides','eltd-cpt' ),
                    'add_new' =>  esc_html__('Add New Slide','eltd-cpt'),
                    'singular_name' 	=> esc_html__('Slide','eltd-cpt' ),
                    'add_item'			=> esc_html__('New Slide','eltd-cpt'),
                    'add_new_item' 		=> esc_html__('Add New Slide','eltd-cpt'),
                    'edit_item' 		=> esc_html__('Edit Slide','eltd-cpt')
                ),
                'public'		=>	false,
                'show_in_menu'	=>	true,
                'rewrite' 		=> 	array('slug' => 'slides'),
                'menu_position' => 	$menuPosition,
                'menu_icon'		=>  $menuIcon,
                'show_ui'		=>	true,
                'has_archive'	=>	false,
                'hierarchical'	=>	false,
                'supports'		=>	array('title', 'thumbnail', 'page-attributes'),
            )
        );

        $labels = array(
            'name' => esc_html__( 'Sliders', 'eltd-cpt' ),
            'singular_name' => esc_html__( 'Slider', 'eltd-cpt' ),
            'search_items' =>  esc_html__( 'Search Sliders','eltd-cpt' ),
            'all_items' => esc_html__( 'All Sliders','eltd-cpt' ),
            'parent_item' => esc_html__( 'Parent Slider','eltd-cpt' ),
            'parent_item_colon' => esc_html__( 'Parent Slider:','eltd-cpt' ),
            'edit_item' => esc_html__( 'Edit Slider','eltd-cpt' ),
            'update_item' => esc_html__( 'Update Slider','eltd-cpt' ),
            'add_new_item' => esc_html__( 'Add New Slider','eltd-cpt' ),
            'new_item_name' => esc_html__( 'New Slider Name','eltd-cpt' ),
            'menu_name' => esc_html__( 'Sliders','eltd-cpt' ),
        );

        register_taxonomy('slides_category',array('slides'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array( 'slug' => 'slides-category' ),
        ));
    }
}

//Hook EltdCPT::registerCPT method to init action
add_action('init', array(EltdCPT::getInstance(), 'registerCPT'), 0);