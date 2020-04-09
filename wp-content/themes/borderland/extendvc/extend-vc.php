<?php
$icon_collections = borderland_elated_icon_collections();

/*** Removing shortcodes ***/

vc_remove_element( "vc_widget_sidebar" );
vc_remove_element( "vc_wp_search" );
vc_remove_element( "vc_wp_meta" );
vc_remove_element( "vc_wp_recentcomments" );
vc_remove_element( "vc_wp_calendar" );
vc_remove_element( "vc_wp_pages" );
vc_remove_element( "vc_wp_tagcloud" );
vc_remove_element( "vc_wp_custommenu" );
vc_remove_element( "vc_wp_text" );
vc_remove_element( "vc_wp_posts" );
vc_remove_element( "vc_wp_links" );
vc_remove_element( "vc_wp_categories" );
vc_remove_element( "vc_wp_archives" );
vc_remove_element( "vc_wp_rss" );
vc_remove_element( "vc_teaser_grid" );
vc_remove_element( "vc_button" );
vc_remove_element( "vc_cta_button" );
vc_remove_element( "vc_cta_button2" );
vc_remove_element( "vc_message" );
vc_remove_element( "vc_tour" );
vc_remove_element( "vc_progress_bar" );
vc_remove_element( "vc_pie" );
vc_remove_element( "vc_posts_slider" );
vc_remove_element( "vc_toggle" );
vc_remove_element( "vc_images_carousel" );
vc_remove_element( "vc_posts_grid" );
vc_remove_element( "vc_carousel" );
vc_remove_element( "vc_gmaps" );
vc_remove_element( "vc_btn" );
vc_remove_element( "vc_cta" );
vc_remove_element( "vc_round_chart" );
vc_remove_element( "vc_line_chart" );
vc_remove_element( "vc_tta_accordion" );
vc_remove_element( "vc_tta_tour" );
vc_remove_element( "vc_tta_tabs" );
vc_remove_element( "vc_section" );

/***Remove Grid Elements if disabled ***/

if ( ! borderland_elated_vc_grid_elements_enabled() && version_compare( borderland_elated_get_vc_version(), '4.4.2' ) >= 0 ) {
	vc_remove_element( 'vc_basic_grid' );
	vc_remove_element( 'vc_media_grid' );
	vc_remove_element( 'vc_masonry_grid' );
	vc_remove_element( 'vc_masonry_media_grid' );
	vc_remove_element( 'vc_icon' );
	vc_remove_element( 'vc_button2' );
	vc_remove_element( "vc_custom_heading" );
}

/*** Remove unused parameters ***/

if ( function_exists( 'vc_remove_param' ) ) {
	vc_remove_param( 'vc_single_image', 'css_animation' );
	vc_remove_param( 'vc_single_image', 'title' );
	vc_remove_param( 'vc_gallery', 'title' );
	vc_remove_param( 'vc_column_text', 'css_animation' );
	vc_remove_param( 'vc_row', 'video_bg' );
	vc_remove_param( 'vc_row', 'video_bg_url' );
	vc_remove_param( 'vc_row', 'video_bg_parallax' );
	vc_remove_param( 'vc_row', 'full_height' );
	vc_remove_param( 'vc_row', 'content_placement' );
	vc_remove_param( 'vc_row', 'full_width' );
	vc_remove_param( 'vc_row', 'bg_image' );
	vc_remove_param( 'vc_row', 'bg_color' );
	vc_remove_param( 'vc_row', 'font_color' );
	vc_remove_param( 'vc_row', 'margin_bottom' );
	vc_remove_param( 'vc_row', 'bg_image_repeat' );
	vc_remove_param( "vc_row", "css" );
	vc_remove_param( "vc_row_inner", "css" );
	vc_remove_param( 'vc_tabs', 'interval' );
	vc_remove_param( 'vc_tabs', 'title' );
	vc_remove_param( 'vc_separator', 'style' );
	vc_remove_param( 'vc_separator', 'color' );
	vc_remove_param( 'vc_separator', 'accent_color' );
	vc_remove_param( 'vc_separator', 'el_width' );
	vc_remove_param( 'vc_text_separator', 'style' );
	vc_remove_param( 'vc_text_separator', 'color' );
	vc_remove_param( 'vc_text_separator', 'accent_color' );
	vc_remove_param( 'vc_text_separator', 'el_width' );
	vc_remove_param( 'vc_text_separator', 'title_align' );
	vc_remove_param( 'vc_accordion', 'title' );
	vc_remove_param( 'vc_row', 'gap' );
	vc_remove_param( 'vc_row', 'columns_placement' );
	vc_remove_param( 'vc_row', 'equal_height' );
	vc_remove_param( 'vc_row_inner', 'gap' );
	vc_remove_param( 'vc_row_inner', 'columns_placement' );
	vc_remove_param( 'vc_row_inner', 'equal_height' );
	vc_remove_param( 'vc_row_inner', 'content_placement' );
	vc_remove_param( 'vc_row', 'parallax_speed_video' );
	vc_remove_param( 'vc_row', 'parallax_speed_bg' );
	vc_remove_param( 'vc_row', 'css_animation' );
	
	vc_remove_param( 'vc_row_inner', 'disable_element' );
	vc_remove_param( 'vc_row', 'disable_element' );
	
	//remove vc parallax functionality
	vc_remove_param( 'vc_row', 'parallax' );
	vc_remove_param( 'vc_row', 'parallax_image' );
	
	vc_remove_param( 'vc_text_separator', 'add_icon' );
	vc_remove_param( 'vc_text_separator', 'vc_icon' );
	vc_remove_param( 'vc_text_separator', 'i_icon_material' );
	vc_remove_param( 'vc_text_separator', 'i_icon_monosocial' );
	vc_remove_param( 'vc_text_separator', 'i_type' );
	vc_remove_param( 'vc_text_separator', 'i_icon_fontawesome' );
	vc_remove_param( 'vc_text_separator', 'i_icon_openiconic' );
	vc_remove_param( 'vc_text_separator', 'i_icon_typicons' );
	vc_remove_param( 'vc_text_separator', 'i_icon_entypo' );
	vc_remove_param( 'vc_text_separator', 'i_icon_linecons' );
	vc_remove_param( 'vc_text_separator', 'i_color' );
	vc_remove_param( 'vc_text_separator', 'i_custom_color' );
	vc_remove_param( 'vc_text_separator', 'i_background_color' );
	vc_remove_param( 'vc_text_separator', 'i_background_style' );
	vc_remove_param( 'vc_text_separator', 'i_custom_background_color' );
	vc_remove_param( 'vc_text_separator', 'i_size' );
	vc_remove_param( 'vc_text_separator', 'i_css_animation' );
	
	if ( version_compare( borderland_elated_get_vc_version(), '4.4.2' ) >= 0 ) {
		vc_remove_param( 'vc_accordion', 'disable_keyboard' );
		vc_remove_param( 'vc_separator', 'align' );
		vc_remove_param( 'vc_separator', 'border_width' );
		vc_remove_param( 'vc_text_separator', 'align' );
		vc_remove_param( 'vc_text_separator', 'border_width' );
	}
	
	if ( version_compare( borderland_elated_get_vc_version(), '4.7.4' ) >= 0 ) {
		add_action( 'init', 'borderland_elated_remove_vc_image_zoom', 11 );
		function borderland_elated_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset( $param['value']['Zoom'] );
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		
		vc_remove_param( 'vc_text_separator', 'css' );
		vc_remove_param( 'vc_separator', 'css' );
	}
}

/*** Remove unused parameters from grid elements ***/

if ( function_exists( 'vc_remove_param' ) && borderland_elated_vc_grid_elements_enabled() && version_compare( borderland_elated_get_vc_version(), '4.4.2' ) >= 0 ) {
	vc_remove_param( 'vc_basic_grid', 'button_style' );
	vc_remove_param( 'vc_basic_grid', 'button_color' );
	vc_remove_param( 'vc_basic_grid', 'button_size' );
	vc_remove_param( 'vc_basic_grid', 'filter_color' );
	vc_remove_param( 'vc_basic_grid', 'filter_style' );
	vc_remove_param( 'vc_media_grid', 'button_style' );
	vc_remove_param( 'vc_media_grid', 'button_color' );
	vc_remove_param( 'vc_media_grid', 'button_size' );
	vc_remove_param( 'vc_media_grid', 'filter_color' );
	vc_remove_param( 'vc_media_grid', 'filter_style' );
	vc_remove_param( 'vc_masonry_grid', 'button_style' );
	vc_remove_param( 'vc_masonry_grid', 'button_color' );
	vc_remove_param( 'vc_masonry_grid', 'button_size' );
	vc_remove_param( 'vc_masonry_grid', 'filter_color' );
	vc_remove_param( 'vc_masonry_grid', 'filter_style' );
	vc_remove_param( 'vc_masonry_media_grid', 'button_style' );
	vc_remove_param( 'vc_masonry_media_grid', 'button_color' );
	vc_remove_param( 'vc_masonry_media_grid', 'button_size' );
	vc_remove_param( 'vc_masonry_media_grid', 'filter_color' );
	vc_remove_param( 'vc_masonry_media_grid', 'filter_style' );
	vc_remove_param( 'vc_basic_grid', 'paging_color' );
	vc_remove_param( 'vc_basic_grid', 'arrows_color' );
	vc_remove_param( 'vc_media_grid', 'paging_color' );
	vc_remove_param( 'vc_media_grid', 'arrows_color' );
	vc_remove_param( 'vc_masonry_grid', 'paging_color' );
	vc_remove_param( 'vc_masonry_grid', 'arrows_color' );
	vc_remove_param( 'vc_masonry_media_grid', 'paging_color' );
	vc_remove_param( 'vc_masonry_media_grid', 'arrows_color' );
}

/*** Remove frontend editor ***/

if ( function_exists( 'vc_disable_frontend' ) ) {
	vc_disable_frontend();
}

/*** Restore Tabs&Accordion from Deprecated category ***/

$vc_map_deprecated_settings = array(
	'deprecated' => false,
	'category' => esc_html__( 'Content', 'borderland' ),
);
vc_map_update( 'vc_accordion', $vc_map_deprecated_settings );
vc_map_update( 'vc_tabs', $vc_map_deprecated_settings );
vc_map_update( 'vc_tab', array( 'deprecated' => false ) );
vc_map_update( 'vc_accordion_tab', array( 'deprecated' => false ) );

$animations         = array(
	esc_html__( "No animations", 'borderland' ) => "",
	esc_html__( "Elements Shows From Left Side", 'borderland' ) => "element_from_left",
	esc_html__( "Elements Shows From Right Side", 'borderland' ) => "element_from_right",
	esc_html__( "Elements Shows From Top Side", 'borderland' ) => "element_from_top",
	esc_html__( "Elements Shows From Bottom Side", 'borderland' ) => "element_from_bottom",
	esc_html__( "Elements Shows From Fade", 'borderland' ) => "element_from_fade"
);
$font_weight_array  = array(
	esc_html__( "Default", 'borderland' ) => "",
	esc_html__( "Thin 100", 'borderland' ) => "100",
	esc_html__( "Extra-Light 200", 'borderland' ) => "200",
	esc_html__( "Light 300", 'borderland' ) => "300",
	esc_html__( "Regular 400", 'borderland' ) => "400",
	esc_html__( "Medium 500", 'borderland' ) => "500",
	esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
	esc_html__( "Bold 700", 'borderland' ) => "700",
	esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
	esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
);
$social_icons_array = array(
	""                 => "",
	esc_html__( "ADN", 'borderland' ) => "fa-adn",
	esc_html__( "Android", 'borderland' ) => "fa-android",
	esc_html__( "Apple", 'borderland' ) => "fa-apple",
	esc_html__( "Bitbucket", 'borderland' ) => "fa-bitbucket",
	esc_html__( "Bitbucket-Sign", 'borderland' ) => "fa-bitbucket-sign",
	esc_html__( "Bitcoin", 'borderland' ) => "fa-bitcoin",
	esc_html__( "BTC", 'borderland' ) => "fa-btc",
	esc_html__( "CSS3", 'borderland' ) => "fa-css3",
	esc_html__( "Dribbble", 'borderland' ) => "fa-dribbble",
	esc_html__( "Dropbox", 'borderland' ) => "fa-dropbox",
	esc_html__( "Facebook", 'borderland' ) => "fa-facebook",
	esc_html__( "Facebook-Sign", 'borderland' ) => "fa-facebook-sign",
	esc_html__( "Flickr", 'borderland' ) => "fa-flickr",
	esc_html__( "Foursquare", 'borderland' ) => "fa-foursquare",
	esc_html__( "GitHub", 'borderland' ) => "fa-github",
	esc_html__( "GitHub-Alt", 'borderland' ) => "fa-github-alt",
	esc_html__( "GitHub-Sign", 'borderland' ) => "fa-github-sign",
	esc_html__( "Gittip", 'borderland' ) => "fa-gittip",
	esc_html__( "Google Plus", 'borderland' ) => "fa-google-plus",
	esc_html__( "Google Plus-Sign", 'borderland' ) => "fa-google-plus-sign",
	esc_html__( "HTML5", 'borderland' ) => "fa-html5",
	esc_html__( "Instagram", 'borderland' ) => "fa-instagram",
	esc_html__( "LinkedIn", 'borderland' ) => "fa-linkedin",
	esc_html__( "LinkedIn-Sign", 'borderland' ) => "fa-linkedin-sign",
	esc_html__( "Linux", 'borderland' ) => "fa-linux",
	esc_html__( "MaxCDN", 'borderland' ) => "fa-maxcdn",
	esc_html__( "Paypal", 'borderland' ) => "fa-paypal",
	esc_html__( "Pinterest", 'borderland' ) => "fa-pinterest",
	esc_html__( "Pinterest-Sign", 'borderland' ) => "fa-pinterest-sign",
	esc_html__( "Renren", 'borderland' ) => "fa-renren",
	esc_html__( "Skype", 'borderland' ) => "fa-skype",
	esc_html__( "StackExchange", 'borderland' ) => "fa-stackexchange",
	esc_html__( "Trello", 'borderland' ) => "fa-trello",
	esc_html__( "Tumblr", 'borderland' ) => "fa-tumblr",
	esc_html__( "Tumblr-Sign", 'borderland' ) => "fa-tumblr-sign",
	esc_html__( "Twitter", 'borderland' ) => "fa-twitter",
	esc_html__( "Twitter-Sign", 'borderland' ) => "fa-twitter-sign",
	esc_html__( "VK", 'borderland' ) => "fa-vk",
	esc_html__( "Weibo", 'borderland' ) => "fa-weibo",
	esc_html__( "Windows", 'borderland' ) => "fa-windows",
	esc_html__( "Xing", 'borderland' ) => "fa-xing",
	esc_html__( "Xing-Sign", 'borderland' ) => "fa-xing-sign",
	esc_html__( "YouTube", 'borderland' ) => "fa-youtube",
	esc_html__( "YouTube Play", 'borderland' ) => "fa-youtube-play",
	esc_html__( "YouTube-Sign", 'borderland' ) => "fa-youtube-sign"
);

/*** Accordion ***/

vc_add_param( "vc_accordion", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Style", 'borderland' ),
	"param_name"  => "style",
	"value"       => array(
		esc_html__( "Accordion", 'borderland' ) => "accordion",
		esc_html__( "Toggle", 'borderland' ) => "toggle",
		esc_html__( "Boxed Accordion", 'borderland' ) => "boxed_accordion",
		esc_html__( "Boxed Toggle", 'borderland' ) => "boxed_toggle"
	),
	'save_always' => true,
) );

vc_add_param( "vc_accordion", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'borderland' ),
	"param_name" => "accordion_border_radius",
	"value"      => "",
	"dependency" => Array( 'element' => "style", 'value' => array( 'accordion', 'toggle' ) )
) );

vc_add_param( "vc_accordion", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Hide Icon", 'borderland' ),
	"param_name"  => "hide_icon",
	"value"       => array(
		esc_html__( "Yes", 'borderland' ) => "yes",
		esc_html__( "No", 'borderland' ) => "no"
	),
	'save_always' => true,
) );
vc_add_param( "vc_accordion", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Title Alignment", 'borderland' ),
	"param_name" => "title_alignment",
	"value"      => array(
		""       => "",
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Right", 'borderland' ) => "right",
		esc_html__( "Center", 'borderland' ) => "center",
	),
	"dependency" => Array( 'element' => "hide_icon", 'value' => "yes" )
) );

vc_add_param( "vc_accordion", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Title and Icon Alignment", 'borderland' ),
	"param_name"  => "title_icon_alignment",
	"value"       => array(
		""             => "",
		esc_html__( "Icon on Left", 'borderland' ) => "icon_left",
		esc_html__( "Text on Left", 'borderland' ) => "text_left"
	),
	"description" => esc_html__( "This option is only used for boxed accordions.", 'borderland' ),
	"dependency"  => Array( 'element' => "hide_icon", 'value' => "no" )
) );

vc_add_param( "vc_accordion_tab", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Title Color", 'borderland' ),
	"param_name" => "title_color",
	"value"      => "",
) );

vc_add_param( "vc_accordion_tab", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Background Color", 'borderland' ),
	"param_name" => "background_color",
	"value"      => "",
) );

vc_add_param( "vc_accordion_tab", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Title Tag", 'borderland' ),
	"param_name" => "title_tag",
	"value"      => array(
		""   => "",
		esc_html__( "h2", 'borderland' ) => "h2",
		esc_html__( "h3", 'borderland' ) => "h3",
		esc_html__( "h4", 'borderland' ) => "h4",
		esc_html__( "h5", 'borderland' ) => "h5",
		esc_html__( "h6", 'borderland' ) => "h6",
	),
) );

/*** Tabs ***/

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Style", 'borderland' ),
	"param_name"  => "style",
	"value"       => array(
		esc_html__( "Horizontal Center", 'borderland' ) => "horizontal",
		esc_html__( "Horizontal Center With Icons", 'borderland' ) => "horizontal_with_icons",
		esc_html__( "Horizontal Left", 'borderland' ) => "horizontal_left",
		esc_html__( "Horizontal Left With Icons", 'borderland' ) => "horizontal_left_with_icons",
		esc_html__( "Horizontal Right", 'borderland' ) => "horizontal_right",
		esc_html__( "Horizontal Right With Icons", 'borderland' ) => "horizontal_right_with_icons",
		esc_html__( "Vertical Left", 'borderland' ) => "vertical_left",
		esc_html__( "Vertical Left With Icons", 'borderland' ) => "vertical_left_with_icons",
		esc_html__( "Vertical Right", 'borderland' ) => "vertical_right",
		esc_html__( "Vertical Right With Icons", 'borderland' ) => "vertical_right_with_icons"
	),
	'save_always' => true,
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Tab Type", 'borderland' ),
	"param_name"  => "tab_type_default",
	"value"       => array(
		esc_html__( "Default", 'borderland' ) => "default",
		esc_html__( "With Borders", 'borderland' ) => "with_borders"
	),
	'save_always' => true,
	"dependency"  => Array(
		'element' => "style",
		'value'   => array(
			'horizontal',
			'horizontal_left',
			'horizontal_right',
			'vertical_left',
			'vertical_right'
		)
	)
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Tab Type", 'borderland' ),
	"param_name"  => "tab_type_icons",
	"value"       => array(
		esc_html__( "Default", 'borderland' ) => "default",
		esc_html__( "With Borders", 'borderland' ) => "with_borders",
		esc_html__( "With Lines", 'borderland' ) => "with_lines"
	),
	'save_always' => true,
	"dependency"  => Array(
		'element' => "style",
		'value'   => array(
			'horizontal_with_icons',
			'horizontal_left_with_icons',
			'horizontal_right_with_icons',
			'vertical_left_with_icons',
			'vertical_right_with_icons'
		)
	)
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Border Type", 'borderland' ),
	"param_name"  => "border_type_default",
	"value"       => array(
		esc_html__( "Border Arround Tabs", 'borderland' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'borderland' ) => "border_arround_active_tab"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "tab_type_default", 'value' => array( 'with_borders' ) )
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Border Type", 'borderland' ),
	"param_name"  => "border_type_icons",
	"value"       => array(
		esc_html__( "Border Arround Tabs", 'borderland' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'borderland' ) => "border_arround_active_tab"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "tab_type_icons", 'value' => array( 'with_borders' ) )
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Margin Between Tabs", 'borderland' ),
	"param_name"  => "margin_between_tabs",
	"value"       => array(
		esc_html__( "Yes", 'borderland' ) => "enable_margin",
		esc_html__( "No", 'borderland' ) => "disable_margin"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "border_type_default", 'value' => array( 'border_arround_element' ) )
) );

vc_add_param( "vc_tabs", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Margin Between Tabs", 'borderland' ),
	"param_name"  => "icons_margin_between_tabs",
	"value"       => array(
		esc_html__( "Yes", 'borderland' ) => "enable_margin",
		esc_html__( "No", 'borderland' ) => "disable_margin"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "border_type_icons", 'value' => array( 'border_arround_element' ) )
) );

vc_add_param( "vc_tabs", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Space Between Tab and Content (px)", 'borderland' ),
	"param_name"  => "space_between_tab_and_content",
	"value"       => "",
	"description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'borderland' ),
	"dependency"  => Array(
		'element' => "style",
		'value'   => array(
			'horizontal_with_icons',
			'horizontal_left_with_icons',
			'horizontal_right_with_icons',
			'horizontal',
			'horizontal_left',
			'horizontal_right',
			'boxed'
		)
	)
) );

vc_add_param( "vc_tab", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Icon Pack", 'borderland' ),
	"param_name"  => $icon_collections->iconPackParamName,
	"value"       => $icon_collections->getIconCollectionsVC(),
	'save_always' => true
) );

foreach ( $icon_collections->iconCollections as $collection_key => $collection ) {
	vc_add_param( "vc_tab", array(
		"type"        => "dropdown",
		"heading" => esc_html__( "Icon", 'borderland' ),
		"param_name"  => $collection->param,
		"value"       => $collection->getIconsArray(),
		'save_always' => true,
		"dependency"  => Array(
			'element' => $icon_collections->iconPackParamName,
			'value'   => array( $collection_key )
		)
	) );
}

/*** Flickr Widget ***/

vc_add_param( "vc_flickr", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Columns", 'borderland' ),
	"param_name"  => "columns",
	"value"       => array(
		esc_html__( "Two", 'borderland' ) => "two",
		esc_html__( "Three", 'borderland' ) => "three",
		esc_html__( "Four", 'borderland' ) => "four"
	),
	'save_always' => true,
) );

/*** Empty Space ***/

vc_add_param( "vc_empty_space", array(
		"type"        => "attach_image",
		'heading' => esc_html__( 'Background Image', 'borderland' ),
		'param_name'  => 'background_image',
		'value'       => '',
		'description' => esc_html__( 'Select image from media library.', 'borderland' )
	)
);
vc_add_param( "vc_empty_space", array(
		"type"        => "dropdown",
		'heading' => esc_html__( 'Image Repeat', 'borderland' ),
		'param_name'  => 'image_repeat',
		"value"       => array(
			esc_html__( 'No Repeat', 'borderland' ) => 'no-repeat',
			esc_html__( 'Repeat x', 'borderland' ) => 'repeat-x',
			esc_html__( 'Repeat y', 'borderland' ) => 'repeat-y',
			esc_html__( 'Repeat (x y)', 'borderland' ) => 'repeat'
		),
		'save_always' => true
	)
);

/*** Gallery ***/

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Column Number", 'borderland' ),
	"param_name"  => "column_number",
	"value"       => array( 2, 3, 4, 5, "Disable" => 0 ),
	'save_always' => true,
	"dependency"  => Array( 'element' => "type", 'value' => array( 'image_grid' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Grayscale Images", 'borderland' ),
	"param_name"  => "grayscale",
	"value"       => array(
		esc_html__( 'No', 'borderland' ) => 'no',
		esc_html__( 'Yes', 'borderland' ) => 'yes'
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "type", 'value' => array( 'image_grid' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Frame", 'borderland' ),
	"param_name" => "frame",
	"value"      => array( esc_html__( "Use frame?", 'borderland' ) => "use_frame" ),
	"dependency" => Array( 'element' => "type", 'value' => array( 'flexslider_slide' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Choose Frame", 'borderland' ),
	"param_name"  => "choose_frame",
	"value"       => array(
		esc_html__( 'Default', 'borderland' ) => 'default',
		esc_html__( 'Frame 1', 'borderland' ) => 'frame1',
		esc_html__( 'Frame 2', 'borderland' ) => 'frame2',
		esc_html__( 'Frame 3', 'borderland' ) => 'frame3',
		esc_html__( 'Frame 4', 'borderland' ) => 'frame4'
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "frame", 'value' => array( 'use_frame' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show image data?", 'borderland' ),
	"param_name" => "show_image_data",
	"value"      => array( esc_html__( "Show image data?", 'borderland' ) => "yes" ),
	"dependency" => Array( 'element' => "type", 'value' => array( 'flexslider_slide', 'flexslider_fade' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show image title?", 'borderland' ),
	"param_name" => "show_image_title",
	"value"      => array( esc_html__( "Show image title in the bottom of image", 'borderland' ) => "show_image_title" ),
	"dependency" => Array( 'element' => "show_image_data", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show image description?", 'borderland' ),
	"param_name" => "show_image_description",
	"value"      => array( esc_html__( "Show image description in the bottom of image", 'borderland' ) => "show_image_description" ),
	"dependency" => Array( 'element' => "show_image_data", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Disable navigation arrows?", 'borderland' ),
	"param_name" => "disable_navigation_arrows",
	"value"      => array( esc_html__( "Disable navigation arrows", 'borderland' ) => "yes" ),
	"dependency" => Array( 'element' => "type", 'value' => array( 'flexslider_slide', 'flexslider_fade' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show navigation controls?", 'borderland' ),
	"param_name" => "show_navigation_controls",
	"value"      => array( esc_html__( "Show navigation controls", 'borderland' ) => "yes" ),
	"dependency" => Array( 'element' => "type", 'value' => array( 'flexslider_slide', 'flexslider_fade' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show border around items", 'borderland' ),
	"param_name" => "show_border_around_items",
	"value"      => array( esc_html__( "Show border around items", 'borderland' ) => "yes" ),
	"dependency" => Array( 'element' => "type", 'value' => array( 'flexslider_fade' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Title and Description Position", 'borderland' ),
	"param_name"  => "title_desc_position",
	"value"       => array(
		esc_html__( "On Image", 'borderland' ) => "on_image",
		esc_html__( "Below Image", 'borderland' ) => "below_image"
	),
	'save_always' => true,
	"description" => esc_html__( "When you set this option to Below Image, Show navigation controls should be disabled", 'borderland' ),
	"dependency"  => Array( 'element' => "type", 'value' => array( 'flexslider_fade' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Title and Desc Layer Color", 'borderland' ),
	"param_name" => "title_and_desc_layer_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_data", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Title Color", 'borderland' ),
	"param_name" => "title_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Title Alignment", 'borderland' ),
	"param_name"  => "title_alignment",
	"value"       => array(
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Title Font Family", 'borderland' ),
	"param_name" => "title_font_family",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Title Font Size (px)", 'borderland' ),
	"param_name" => "title_font_size",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Title Font Weight", 'borderland' ),
	"param_name" => "title_font_weight",
	"value"      => array(
		esc_html__( "Default", 'borderland' ) => "",
		esc_html__( "Thin 100", 'borderland' ) => "100",
		esc_html__( "Extra-Light 200", 'borderland' ) => "200",
		esc_html__( "Light 300", 'borderland' ) => "300",
		esc_html__( "Regular 400", 'borderland' ) => "400",
		esc_html__( "Medium 500", 'borderland' ) => "500",
		esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
		esc_html__( "Bold 700", 'borderland' ) => "700",
		esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
		esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
	),
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Title Font Style", 'borderland' ),
	"param_name" => "title_font_style",
	"value"      => array(
		""       => "",
		esc_html__( "Normal", 'borderland' ) => "normal",
		esc_html__( "Italic", 'borderland' ) => "italic"
	),
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Title Layer Color", 'borderland' ),
	"param_name" => "title_layer_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_title", 'value' => array( 'show_image_title' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Description Color", 'borderland' ),
	"param_name" => "description_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Description Alignment", 'borderland' ),
	"param_name"  => "description_alignment",
	"value"       => array(
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Description Font Family", 'borderland' ),
	"param_name" => "description_font_family",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Description Font Size (px)", 'borderland' ),
	"param_name" => "description_font_size",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Description Font Weight", 'borderland' ),
	"param_name" => "description_font_weight",
	"value"      => array(
		esc_html__( "Default", 'borderland' ) => "",
		esc_html__( "Thin 100", 'borderland' ) => "100",
		esc_html__( "Extra-Light 200", 'borderland' ) => "200",
		esc_html__( "Light 300", 'borderland' ) => "300",
		esc_html__( "Regular 400", 'borderland' ) => "400",
		esc_html__( "Medium 500", 'borderland' ) => "500",
		esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
		esc_html__( "Bold 700", 'borderland' ) => "700",
		esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
		esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
	),
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Description Font Style", 'borderland' ),
	"param_name" => "description_font_style",
	"value"      => array(
		""       => "",
		esc_html__( "Normal", 'borderland' ) => "normal",
		esc_html__( "Italic", 'borderland' ) => "italic"
	),
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Description Layer Color", 'borderland' ),
	"param_name" => "description_layer_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_image_description", 'value' => array( 'show_image_description' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Border Color", 'borderland' ),
	"param_name" => "border_color",
	"value"      => "",
	"dependency" => Array( 'element' => "show_border_around_items", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Border Width (px)", 'borderland' ),
	"param_name" => "border_width",
	"value"      => "",
	"dependency" => Array( 'element' => "show_border_around_items", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_gallery", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Background hover color", 'borderland' ),
	"param_name" => "background_hover_color",
	"value"      => "",
	"dependency" => Array( 'element' => "grayscale", 'value' => array( "no" ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Choose hover icon", 'borderland' ),
	"param_name"  => "hover_icon",
	"value"       => array(
		esc_html__( 'None', 'borderland' ) => 'none',
		esc_html__( 'Magnifier', 'borderland' ) => 'magnifier',
		esc_html__( 'Plus', 'borderland' ) => 'plus'
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "grayscale", 'value' => array( "no" ) )
) );

vc_add_param( "vc_gallery", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Spaces between images", 'borderland' ),
	"param_name"  => "images_space",
	"value"       => array(
		esc_html__( 'No', 'borderland' ) => 'gallery_without_space',
		esc_html__( 'Yes', 'borderland' ) => 'gallery_with_space'
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "type", 'value' => array( 'image_grid' ) )
) );

/*** Row ***/

vc_add_param( "vc_row", array(
	"type"                    => "dropdown",
	"show_settings_on_create" => true,
	"heading" => esc_html__( "Row Type", 'borderland' ),
	"param_name"              => "row_type",
	"value"                   => array(
		esc_html__( "Row", 'borderland' ) => "row",
		esc_html__( "Parallax", 'borderland' ) => "parallax",
		esc_html__( "Expandable", 'borderland' ) => "expandable",
		esc_html__( "Content menu", 'borderland' ) => "content_menu"
	),
	'save_always'             => true
) );

vc_add_param( "vc_row", array(
	"type"                    => "dropdown",
	"show_settings_on_create" => true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'borderland' ),
	"param_name"              => "use_row_as_full_screen_section",
	"value"                   => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always'             => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'borderland' ),
	"dependency"              => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Type", 'borderland' ),
	"param_name"  => "type",
	"value"       => array(
		esc_html__( "Full Width", 'borderland' ) => "full_width",
		esc_html__( "In Grid", 'borderland' ) => "grid"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row', 'parallax', 'content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Header Style", 'borderland' ),
	"param_name" => "header_style",
	"value"      => array(
		""      => "",
		esc_html__( "Light", 'borderland' ) => "light",
		esc_html__( "Dark", 'borderland' ) => "dark"
	),
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row', 'parallax', 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Anchor ID (Example home)", 'borderland' ),
	"param_name" => "anchor",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row', 'parallax', 'expandable' ) )
) );
vc_add_param( "vc_row", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Row in content menu", 'borderland' ),
	"value"      => array( esc_html__( "Use row for content menu?", 'borderland' ) => "in_content_menu" ),
	"param_name" => "in_content_menu",
	"dependency" => Array(
		'element' => "row_type",
		'value'   => array( 'row', 'parallax', 'expandable', 'expandable_with_background' )
	)
) );
vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Content menu title", 'borderland' ),
	"value"      => "",
	"param_name" => "content_menu_title",
	"dependency" => Array( 'element' => "in_content_menu", 'value' => array( 'in_content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Content menu icon pack", 'borderland' ),
	"param_name"  => $icon_collections->iconPackParamName,
	"value"       => $icon_collections->getIconCollectionsVC(),
	'save_always' => true,
	"dependency"  => Array( 'element' => "in_content_menu", 'value' => array( 'in_content_menu' ) )
) );

foreach ( $icon_collections->iconCollections as $collection_key => $collection ) {
	vc_add_param( "vc_row", array(
		"type"        => "dropdown",
		"heading" => esc_html__( "Content menu icon", 'borderland' ),
		"param_name"  => "content_menu_" . $collection->param,
		"value"       => $collection->getIconsArray(),
		'save_always' => true,
		"dependency"  => Array(
			'element' => $icon_collections->iconPackParamName,
			'value'   => array( $collection_key )
		)
	) );
}

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Text Align", 'borderland' ),
	"param_name"  => "text_align",
	"value"       => array(
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row', 'parallax', 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Video background", 'borderland' ),
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "",
		esc_html__( "Yes", 'borderland' ) => "show_video"
	),
	'save_always' => true,
	"param_name"  => "video",
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Video overlay", 'borderland' ),
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "",
		esc_html__( "Yes", 'borderland' ) => "show_video_overlay"
	),
	'save_always' => true,
	"param_name"  => "video_overlay",
	"dependency"  => Array( 'element' => "video", 'value' => array( 'show_video' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "attach_image",
	"heading" => esc_html__( "Video overlay image (pattern)", 'borderland' ),
	"value"      => "",
	"param_name" => "video_overlay_image",
	"dependency" => Array( 'element' => "video_overlay", 'value' => array( 'show_video_overlay' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Video background (webm) file url", 'borderland' ),
	"value"      => "",
	"param_name" => "video_webm",
	"dependency" => Array( 'element' => "video", 'value' => array( 'show_video' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Video background (mp4) file url", 'borderland' ),
	"value"      => "",
	"param_name" => "video_mp4",
	"dependency" => Array( 'element' => "video", 'value' => array( 'show_video' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Video background (ogv) file url", 'borderland' ),
	"value"      => "",
	"param_name" => "video_ogv",
	"dependency" => Array( 'element' => "video", 'value' => array( 'show_video' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "attach_image",
	"heading" => esc_html__( "Video preview image", 'borderland' ),
	"value"      => "",
	"param_name" => "video_image",
	"dependency" => Array( 'element' => "video", 'value' => array( 'show_video' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "attach_image",
	"heading" => esc_html__( "Background image", 'borderland' ),
	"value"      => "",
	"param_name" => "background_image",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'parallax', 'row', 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Pattern background", 'borderland' ),
	"value"      => array( esc_html__( "Use background image as pattern?", 'borderland' ) => "pattern_background" ),
	"param_name" => "pattern_background",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Full Screen Height", 'borderland' ),
	"param_name"  => "full_screen_section_height",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'parallax' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Vertically Align Content In Middle", 'borderland' ),
	"param_name"  => "vertically_align_content_in_middle",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"dependency"  => array( 'element' => 'full_screen_section_height', 'value' => 'yes' )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Section height", 'borderland' ),
	"param_name" => "section_height",
	"value"      => "",
	"dependency" => Array( 'element' => "full_screen_section_height", 'value' => array( 'no' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "checkbox",
	"heading" => esc_html__( "Use as box", 'borderland' ),
	"value"       => array( esc_html__( "Use row as box", 'borderland' ) => "use_row_as_box" ),
	"param_name"  => "use_as_box",
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Parallax speed", 'borderland' ),
	"param_name" => "parallax_speed",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'parallax' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Background color", 'borderland' ),
	"param_name" => "background_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row', 'expandable', 'content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show logo", 'borderland' ),
	"value"      => array( esc_html__( "Show logo in content menu", 'borderland' ) => "logo_in_content_menu" ),
	"param_name" => "logo_in_content_menu",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Custom widget area", 'borderland' ),
	"param_name"  => "custom_widget_area",
	"value"       => array_merge( array( '' => '' ), borderland_elated_get_custom_sidebars() ),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "checkbox",
	"heading" => esc_html__( "Show Border Bottom", 'borderland' ),
	"value"      => array( esc_html__( "Show border bottom on content menu?", 'borderland' ) => "yes" ),
	"param_name" => "content_menu_border_bottom",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'content_menu' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Content Menu Border Color", 'borderland' ),
	"param_name" => "content_menu_border_color",
	"value"      => "",
	"dependency" => Array( 'element' => "content_menu_border_bottom", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Content Menu Border Style", 'borderland' ),
	"param_name"  => "content_menu_border_style",
	"value"       => array(
		esc_html__( "Solid", 'borderland' ) => "solid",
		esc_html__( "Dashed", 'borderland' ) => "dashed",
		esc_html__( "Dotted", 'borderland' ) => "dotted"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "content_menu_border_bottom", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Border Top Color", 'borderland' ),
	"param_name" => "border_top_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Border Bottom Color", 'borderland' ),
	"param_name" => "border_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Padding", 'borderland' ),
	"value"       => "",
	"param_name"  => "side_padding",
	"description" => esc_html__( "Padding (left/right in pixels or percentage. Put number and px or %. Ex. 30% or 30px)", 'borderland' ),
	"dependency"  => Array( 'element' => "type", 'value' => array( 'full_width' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Padding Top (px)", 'borderland' ),
	"value"      => "",
	"param_name" => "padding_top",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Padding Bottom (px)", 'borderland' ),
	"value"      => "",
	"param_name" => "padding_bottom",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Label Color", 'borderland' ),
	"param_name" => "color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Label Hover Color", 'borderland' ),
	"param_name" => "hover_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "More Label", 'borderland' ),
	"param_name"  => "more_button_label",
	"value"       => "",
	"description" => esc_html__( "Default label is Expand Section", 'borderland' ),
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Less Label", 'borderland' ),
	"param_name"  => "less_button_label",
	"value"       => "",
	"description" => esc_html__( "Default label is Contract Section", 'borderland' ),
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Label Position", 'borderland' ),
	"param_name" => "button_position",
	"value"      => array(
		""       => "",
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Right", 'borderland' ) => "right",
		esc_html__( "Center", 'borderland' ) => "center"
	),
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'borderland' ),
	"param_name"  => "css_animation",
	"admin_label" => true,
	"value"       => $animations,
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )

) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'borderland' ),
	"param_name"  => "transition_delay",
	"admin_label" => true,
	"value"       => "",
	"dependency"  => array( "element" => "css_animation", "not_empty" => true )

) );

vc_add_param( "vc_row", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Box Shadow on Row", 'borderland' ),
	"param_name"  => "box_shadow_on_row",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"dependency"  => array( "element" => "row_type", "value" => array( "row" ) )
) );

vc_add_param( "vc_row", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Box Shadow Color", 'borderland' ),
	"param_name" => "box_shadow_color",
	"value"      => "",
	"dependency" => array( "element" => "box_shadow_on_row", "value" => "yes" )

) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Horizontal Offset (px)", 'borderland' ),
	"param_name"  => "horizontal_offset",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Vertical Offset (px)", 'borderland' ),
	"param_name"  => "vertical_offset",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Shadow Blur (px)", 'borderland' ),
	"param_name"  => "box_shadow_blur",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Shadow Spread (px)", 'borderland' ),
	"param_name"  => "box_shadow_spread",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

/*** Row Inner ***/

vc_add_param( "vc_row_inner", array(
	"type"                    => "dropdown",
	"show_settings_on_create" => true,
	"heading" => esc_html__( "Row Type", 'borderland' ),
	"param_name"              => "row_type",
	"value"                   => array(
		esc_html__( "Row", 'borderland' ) => "row",
		esc_html__( "Parallax", 'borderland' ) => "parallax",
		esc_html__( "Expandable", 'borderland' ) => "expandable"
	),
	'save_always'             => true
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Type", 'borderland' ),
	"param_name"  => "type",
	"value"       => array(
		esc_html__( "Full Width", 'borderland' ) => "full_width",
		esc_html__( "In Grid", 'borderland' ) => "grid"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Use Row as Full Screen Section Slide", 'borderland' ),
	"param_name"  => "use_row_as_full_screen_section_slide",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'borderland' ),
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "checkbox",
	"heading" => esc_html__( "Use as box", 'borderland' ),
	"value"       => array( esc_html__( "Use row as box", 'borderland' ) => "use_row_as_box" ),
	"param_name"  => "use_as_box",
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Border Radius(px)", 'borderland' ),
	"param_name" => "row_box_border_radius",
	"value"      => "",
	"dependency" => Array( 'element' => "use_as_box", 'value' => array( 'use_row_as_box' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Anchor ID", 'borderland' ),
	"param_name" => "anchor",
	"value"      => ""
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Text Align", 'borderland' ),
	"param_name"  => "text_align",
	"value"       => array(
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true

) );

vc_add_param( "vc_row_inner", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Background color", 'borderland' ),
	"param_name" => "background_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row', 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "attach_image",
	"heading" => esc_html__( "Background image", 'borderland' ),
	"value"      => "",
	"param_name" => "background_image",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'parallax', 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Border color", 'borderland' ),
	"param_name" => "border_color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row', 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Padding", 'borderland' ),
	"value"       => "",
	"param_name"  => "side_padding",
	"description" => esc_html__( "Left and right spacing in pixels", 'borderland' ),
	"dependency"  => Array( 'element' => "type", 'value' => array( 'full_width' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Padding Top", 'borderland' ),
	"value"      => "",
	"param_name" => "padding_top",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Padding Bottom", 'borderland' ),
	"value"      => "",
	"param_name" => "padding_bottom",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'row' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "More Button Label", 'borderland' ),
	"param_name" => "more_button_label",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Less Button Label", 'borderland' ),
	"param_name" => "less_button_label",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Button Position", 'borderland' ),
	"param_name"  => "button_position",
	"value"       => array(
		""       => "",
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Right", 'borderland' ) => "right",
		esc_html__( "Center", 'borderland' ) => "center"
	),
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Color", 'borderland' ),
	"param_name" => "color",
	"value"      => "",
	"dependency" => Array( 'element' => "row_type", 'value' => array( 'expandable' ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'borderland' ),
	"param_name"  => "css_animation",
	"admin_label" => true,
	"value"       => $animations,
	'save_always' => true,
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )

) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'borderland' ),
	"param_name"  => "transition_delay",
	"admin_label" => true,
	"value"       => "",
	"dependency"  => Array( 'element' => "row_type", 'value' => array( 'row' ) )

) );

vc_add_param( "vc_row_inner", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Box Shadow on Row", 'borderland' ),
	"param_name"  => "box_shadow_on_row",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"dependency"  => array( "element" => "row_type", "value" => array( "row" ) )
) );

vc_add_param( "vc_row_inner", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Box Shadow Color", 'borderland' ),
	"param_name" => "box_shadow_color",
	"value"      => "",
	"dependency" => array( "element" => "box_shadow_on_row", "value" => "yes" )

) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Horizontal Offset (px)", 'borderland' ),
	"param_name"  => "horizontal_offset",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Vertical Offset (px)", 'borderland' ),
	"param_name"  => "vertical_offset",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Shadow Blur (px)", 'borderland' ),
	"param_name"  => "box_shadow_blur",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

vc_add_param( "vc_row_inner", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Shadow Spread (px)", 'borderland' ),
	"param_name"  => "box_shadow_spread",
	"value"       => "",
	"description" => esc_html__( "Default value is 1", 'borderland' ),
	"dependency"  => array( "element" => "box_shadow_on_row", "value" => "yes" )
) );

/*** Separator ***/

$separator_setting = array(
	'show_settings_on_create' => true,
	"controls"                => '',
);
vc_map_update( 'vc_separator', $separator_setting );

vc_add_param( "vc_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Type", 'borderland' ),
	"param_name"  => "type",
	"value"       => array(
		esc_html__( "Normal", 'borderland' ) => "normal",
		esc_html__( "Transparent", 'borderland' ) => "transparent",
		esc_html__( "Small", 'borderland' ) => "small",
	),
	'save_always' => true,
) );

vc_add_param( "vc_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Position", 'borderland' ),
	"param_name"  => "position",
	"value"       => array(
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true,
	"dependency"  => array( "element" => "type", "value" => array( "small" ) ),
) );

vc_add_param( "vc_separator", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Color", 'borderland' ),
	"param_name" => "color",
	"value"      => "",
	"dependency" => array( "element" => "type", "value" => array( "small", "normal" ) )
) );

vc_add_param( "vc_separator", array(
	"type"       => "dropdown",
	"heading" => esc_html__( "Border Style", 'borderland' ),
	"param_name" => "border_style",
	"value"      => array(
		""       => "",
		esc_html__( "Dashed", 'borderland' ) => "dashed",
		esc_html__( "Solid", 'borderland' ) => "solid",
		esc_html__( "Dotted", 'borderland' ) => "dotted"
	),
) );

vc_add_param( "vc_separator", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Width (px)", 'borderland' ),
	"param_name" => "width",
	"value"      => "",
	"dependency" => array( "element" => "type", "value" => array( "small" ) )
) );

vc_add_param( "vc_separator", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Thickness (px)", 'borderland' ),
	"param_name" => "thickness",
	"value"      => "",
) );

vc_add_param( "vc_separator", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Top Margin (px)", 'borderland' ),
	"param_name" => "up",
	"value"      => "",
) );

vc_add_param( "vc_separator", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Bottom Margin  (px)", 'borderland' ),
	"param_name" => "down",
	"value"      => "",
) );

/*** Separator With Text ***/

vc_add_param( "vc_text_separator", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Title Color", 'borderland' ),
	"param_name" => "title_color",
) );

vc_add_param( "vc_text_separator", array(
	"type"       => "textfield",
	"heading" => esc_html__( "Title Font size (px)", 'borderland' ),
	"param_name" => 'title_size',
	"value"      => "",
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Text In Box", 'borderland' ),
	"param_name"  => "text_in_box",
	"value"       => array(
		esc_html__( "Yes", 'borderland' ) => "yes",
		esc_html__( "No", 'borderland' ) => "no"
	),
	'save_always' => true
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Text Position", 'borderland' ),
	"param_name"  => "text_position",
	"value"       => array(
		esc_html__( "Center", 'borderland' ) => "center",
		esc_html__( "Left", 'borderland' ) => "left",
		esc_html__( "Right", 'borderland' ) => "right"
	),
	'save_always' => true
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Height (px)", 'borderland' ),
	"param_name"  => 'box_height',
	"value"       => "",
	"description" => esc_html__( "Insert height for a shape around the text", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Left/right Padding (px)", 'borderland' ),
	"param_name"  => 'box_padding',
	"value"       => "",
	"description" => esc_html__( "Insert size for a padding on left and right side of text", 'borderland' ),
) );

vc_add_param( "vc_text_separator", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Box Background Color", 'borderland' ),
	"param_name" => "box_background_color",
	"dependency" => Array( 'element' => "text_in_box", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Border Width (px)", 'borderland' ),
	"param_name"  => "box_border_width",
	"value"       => "",
	"description" => esc_html__( "Insert width for the separator line", 'borderland' ),
	"dependency"  => Array( 'element' => "text_in_box", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"       => "colorpicker",
	"heading" => esc_html__( "Box Border Color", 'borderland' ),
	"param_name" => "box_border_color",
	"dependency" => Array( 'element' => "text_in_box", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Border radius (px)", 'borderland' ),
	"param_name"  => "box_border_radius",
	"description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default. ", 'borderland' ),
	"dependency"  => Array( 'element' => "text_in_box", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Box Border Style", 'borderland' ),
	"param_name"  => "box_border_style",
	"value"       => array(
		esc_html__( "Solid", 'borderland' ) => "solid",
		esc_html__( "Dashed", 'borderland' ) => "dashed",
		esc_html__( "Dotted", 'borderland' ) => "dotted",
		esc_html__( "Transparent", 'borderland' ) => "transparent"
	),
	'save_always' => true,
	"description" => esc_html__( "Choose a style for the separator line", 'borderland' ),
	"dependency"  => Array( 'element' => "text_in_box", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "colorpicker",
	"heading" => esc_html__( "Line Color", 'borderland' ),
	"param_name"  => "line_color",
	"value"       => "",
	"description" => esc_html__( "Choose a color for the separator line", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Line Width (px)", 'borderland' ),
	"param_name"  => "line_width",
	"value"       => "",
	"description" => esc_html__( "Insert width for the separator line", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Line Thickness (px)", 'borderland' ),
	"param_name"  => "line_thickness",
	"value"       => "",
	"description" => esc_html__( "Insert thickness for the separator line", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Separator Line Style", 'borderland' ),
	"param_name"  => "line_border_style",
	"value"       => array(
		esc_html__( "Solid", 'borderland' ) => "solid",
		esc_html__( "Dashed", 'borderland' ) => "dashed",
		esc_html__( "Dotted", 'borderland' ) => "dotted",
		esc_html__( "Transparent", 'borderland' ) => "transparent"
	),
	'save_always' => true,
	"description" => esc_html__( "Choose a style for the separator line", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Top Margin (px)", 'borderland' ),
	"param_name"  => "up",
	"value"       => "",
	"description" => esc_html__( "Insert top margin for the separator", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Bottom Margin (px)", 'borderland' ),
	"param_name"  => "down",
	"value"       => "",
	"description" => esc_html__( "Insert bottom margin for the separator", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Box Margins (px)", 'borderland' ),
	"param_name"  => "box_margin",
	"description" => esc_html__( "Insert left and right line margins", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "Dots on line end ", 'borderland' ),
	"param_name"  => "line_dots",
	"value"       => array(
		esc_html__( "No", 'borderland' ) => "no",
		esc_html__( "Yes", 'borderland' ) => "yes"
	),
	'save_always' => true,
	"description" => esc_html__( "Insert icons on the end of the border", 'borderland' )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "colorpicker",
	"heading" => esc_html__( "Dots Color", 'borderland' ),
	"param_name"  => "line_dots_color",
	"description" => esc_html__( "Insert dots color (default value is #b2b2b2)", 'borderland' ),
	"dependency"  => Array( 'element' => "line_dots", 'value' => array( 'yes' ) )
) );

vc_add_param( "vc_text_separator", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Dots Size (px)", 'borderland' ),
	"param_name"  => "line_dots_size",
	"description" => esc_html__( "Insert dots size", 'borderland' ),
	"dependency"  => Array( 'element' => "line_dots", 'value' => array( 'yes' ) )
) );

/*** Single Image ***/

vc_add_param( "vc_single_image", array(
	"type"        => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'borderland' ),
	"param_name"  => "eltd_css_animation",
	"admin_label" => true,
	"value"       => $animations,
	'save_always' => true,
) );

vc_add_param( "vc_single_image", array(
	"type"        => "textfield",
	"heading" => esc_html__( "Transition delay (s)", 'borderland' ),
	"param_name"  => "transition_delay",
	"admin_label" => true,
	"value"       => "",
	"dependency"  => array( "element" => "eltd_css_animation", "not_empty" => true )
) );

function borderland_elated_add_open_prettyphoto() {
	//Get current values stored in the Link Target in "Single Image" element
	$param = WPBMap::getParam( 'vc_single_image', 'img_link_target' );
	//Append new value to the 'value' array
	$param['value']['Open prettyPhoto'] = 'open_prettyphoto';
	//Finally "mutate" param with new values
	WPBMap::mutateParam( 'vc_single_image', $param );
}

add_action( 'init', 'borderland_elated_add_open_prettyphoto', 11 );

/*************************************
 * Mapping Shortcodes
 *************************************/

/*** Elements Holder ***/
class WPBakeryShortCode_No_Elements_Holder extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Elements Holder', 'borderland' ),
	"base"                    => "no_elements_holder",
	"as_parent"               => array( 'only' => 'no_elements_holder_item' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-elements-holder extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view"                 => 'VcColumnView',
	"params"                  => array(
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
			"value"      => "",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Columns", 'borderland' ),
			"param_name"  => "number_of_columns",
			"value"       => array(
				esc_html__( "1 Column", 'borderland' ) => "one_column",
				esc_html__( "2 Columns", 'borderland' ) => "two_columns",
				esc_html__( "3 Columns", 'borderland' ) => "three_columns",
				esc_html__( "4 Columns", 'borderland' ) => "four_columns",
				esc_html__( "5 Columns", 'borderland' ) => "five_columns",
				esc_html__( "6 Columns", 'borderland' ) => "six_columns"
			),
			'save_always' => true,
		),
		array(
			"type"       => "checkbox",
			"heading" => esc_html__( "Items Float Left", 'borderland' ),
			"param_name" => "items_float_left",
			"value"      => array( esc_html__( "Make Items Float Left?", 'borderland' ) => "yes" ),
		),
		array(
			"type"        => "dropdown",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Switch to One Column", 'borderland' ),
			"param_name"  => "switch_to_one_column",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Below 1300px", 'borderland' ) => "1300",
				esc_html__( "Below 1000px", 'borderland' ) => "1000",
				esc_html__( "Below 768px", 'borderland' ) => "768",
				esc_html__( "Below 600px", 'borderland' ) => "600",
				esc_html__( "Below 480px", 'borderland' ) => "480",
				esc_html__( "Never", 'borderland' ) => "never"
			),
			"description" => esc_html__( "Choose on which stage item will be in one column", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Choose Alignment In Responsive Mode", 'borderland' ),
			"param_name"  => "alignment_one_column",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Center", 'borderland' ) => "center",
				esc_html__( "Right", 'borderland' ) => "right"
			),
			"description" => esc_html__( "Alignment When Items are in One Column", 'borderland' )
		)
	)
) );

/*** Elements Holder Item ***/
class WPBakeryShortCode_No_Elements_Holder_Item extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Elements Holder Item', 'borderland' ),
	"base"                    => "no_elements_holder_item",
	"as_parent"               => array( 'except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel' ),
	"as_child"                => array( 'only' => 'no_elements_holder' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-elements-holder-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view"                 => 'VcColumnView',
	"params"                  => array(
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
			"value"      => "",
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Background Image", 'borderland' ),
			"param_name" => "background_image",
			"value"      => "",
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Padding", 'borderland' ),
			"param_name"  => "item_padding",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Alignment", 'borderland' ),
			"param_name"  => "aligment",
			"value"       => array(
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Right", 'borderland' ) => "right",
				esc_html__( "Center", 'borderland' ) => "center"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Vertical Alignment", 'borderland' ),
			"param_name" => "vertical_alignment",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Top", 'borderland' ) => "top",
				esc_html__( "Middle", 'borderland' ) => "middle",
				esc_html__( "Bottom", 'borderland' ) => "bottom"
			),
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Animation Name", 'borderland' ),
			"param_name" => "animation_name",
			"value"      => array(
				esc_html__( "No Animation", 'borderland' ) => "",
				esc_html__( "Flip In", 'borderland' ) => "flip_in",
				esc_html__( "Grow In", 'borderland' ) => "grow_in",
				esc_html__( "X Rotate", 'borderland' ) => "x_rotate",
				esc_html__( "Z Rotate", 'borderland' ) => "z_rotate",
				esc_html__( "Y Translate", 'borderland' ) => "y_translate",
				esc_html__( "Fade In", 'borderland' ) => "fade_in",
				esc_html__( "Fade In Down", 'borderland' ) => "fade_in_down",
				esc_html__( "Fade In Left X Rotate", 'borderland' ) => "fade_in_left_x_rotate"
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Animation Delay (ms)", 'borderland' ),
			"param_name" => "animation_delay",
			"value"      => "",
			"dependency" => array(
				'element' => "animation_name",
				'value'   => array(
					'flip_in',
					'grow_in',
					'x_rotate',
					'z_rotate',
					'y_translate',
					'fade_in',
					'fade_in_down',
					'fade_in_left_x_rotate'
				)
			)
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Advanced Animations", 'borderland' ),
			"param_name"  => "advanced_animations",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Animation Start Position", 'borderland' ),
			"param_name"  => "start_position",
			"value"       => array(
				esc_html__( 'Bottom of Page', 'borderland' ) => 'bottom',
				esc_html__( 'Center of Page', 'borderland' ) => 'center'
			),
			'save_always' => true,
			"dependency"  => array( "element" => "advanced_animations", "value" => array( "yes" ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Start Animation Style", 'borderland' ),
			"param_name" => "start_animation_style",
			"dependency" => array( "element" => "advanced_animations", "value" => array( "yes" ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Animation End Position", 'borderland' ),
			"param_name"  => "end_position",
			"value"       => array(
				esc_html__( "Center of Page", 'borderland' ) => "center",
				esc_html__( "Top of Page", 'borderland' ) => "top-bottom"
			),
			'save_always' => true,
			"dependency"  => array( "element" => "advanced_animations", "value" => array( "yes" ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "End Animation Style", 'borderland' ),
			"param_name" => "end_animation_style",
			"dependency" => array( "element" => "advanced_animations", "value" => array( "yes" ) )
		),
		array(
			"type"        => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Padding on screen size between 1000px-1300px", 'borderland' ),
			"param_name"  => "item_padding_1000_1300",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Padding on screen size between 768px-1000px", 'borderland' ),
			"param_name"  => "item_padding_768_1000",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Padding on screen size between 600px-768px", 'borderland' ),
			"param_name"  => "item_padding_600_768",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Padding on screen size between 480px-600px", 'borderland' ),
			"param_name"  => "item_padding_480_600",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"group" => esc_html__( "Width & Responsiveness", 'borderland' ),
			"heading" => esc_html__( "Padding on Screen Size Bellow 480px", 'borderland' ),
			"param_name"  => "item_padding_480",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'borderland' )
		)
	)
) );

/*** Bordered Elements Holder ***/
class WPBakeryShortCode_No_Bordered_Elements_Holder extends WPBakeryShortCodesContainer {
}

vc_map( array(
	'name' => esc_html__( 'Bordered Elements Holder', 'borderland' ),
	'base'                    => 'no_bordered_elements_holder',
	'as_parent'               => array( 'except' => 'vc_row' ),
	'content_element'         => true,
	'category' => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-bordered-elements-holder-item extended-custom-icon",
	'show_settings_on_create' => true,
	'js_view'                 => 'VcColumnView',
	'params'                  => array(
		array(
			'type'        => 'dropdown',
			'heading' => esc_html__( 'Border Animation Type', 'borderland' ),
			'param_name'  => 'animation_type',
			'value'       => array(
				esc_html__( 'No Animation', 'borderland' ) => '',
				esc_html__( 'Continue Line', 'borderland' ) => 'eltd_box_continue_line',
				esc_html__( 'Corner Line', 'borderland' ) => 'eltd_box_corner_line',
				esc_html__( 'Simultaneous Line', 'borderland' ) => 'eltd_box_simultaneous_line'
			),
			'description' => esc_html__( 'Choose type of animation', 'borderland' )
		),
		array(
			'type'       => 'colorpicker',
			'heading' => esc_html__( 'Border Color', 'borderland' ),
			'param_name' => 'border_color',
			'value'      => '',
		),
		array(
			'type'       => 'textfield',
			'heading' => esc_html__( 'Border Width (px)', 'borderland' ),
			'param_name' => 'border_width',
			'value'      => '',
		),
		array(
			'type'        => 'textfield',
			'heading' => esc_html__( 'Duration of the Animation (s)', 'borderland' ),
			'param_name'  => 'animation_time',
			'value'       => '',
			'description' => esc_html__( 'Default is 2 sec', 'borderland' ),
			'dependency'  => array(
				'element' => 'animation_type',
				'value'   => array(
					'eltd_box_continue_line',
					'eltd_box_corner_line',
					'eltd_box_simultaneous_line'
				)
			)
		),
		array(
			'type'       => 'textfield',
			'heading' => esc_html__( 'Holder Padding (px)', 'borderland' ),
			'param_name' => 'holder_padding',
			'value'      => '',
		)
	)
) );

/*** Blog List ***/

vc_map( array(
	"name" => esc_html__( "Blog List", 'borderland' ),
	"base"                      => "no_blog_list",
	"icon"                      => "icon-wpb-blog-list extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Type", 'borderland' ),
			"param_name"  => "type",
			"value"       => array(
				esc_html__( "Image in left box", 'borderland' ) => "image_in_box",
				esc_html__( "Boxes", 'borderland' ) => "boxes",
				esc_html__( "Minimal", 'borderland' ) => "minimal"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Number of Posts", 'borderland' ),
			"param_name" => "number_of_posts",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'minimal', 'boxes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Image Size", 'borderland' ),
			"param_name"  => "image_size",
			"value"       => array(
				esc_html__( "Original", 'borderland' ) => "original",
				esc_html__( "Landscape", 'borderland' ) => "landscape",
				esc_html__( "Square", 'borderland' ) => "square"
			
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Thumbnail", 'borderland' ),
			"param_name"  => "show_thumbnail",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no",
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Number of Columns", 'borderland' ),
			"param_name"  => "number_of_columns",
			"value"       => array(
				esc_html__( "One", 'borderland' ) => "1",
				esc_html__( "Two", 'borderland' ) => "2",
				esc_html__( "Three", 'borderland' ) => "3",
				esc_html__( "Four", 'borderland' ) => "4"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Overlay Color", 'borderland' ),
			"param_name" => "overlay_color",
			"dependency" => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Display Overlay Icon", 'borderland' ),
			"param_name"  => "overlay_icon",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "0",
				esc_html__( "Yes", 'borderland' ) => "1"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Order By", 'borderland' ),
			"param_name"  => "order_by",
			"value"       => array(
				esc_html__( "Title", 'borderland' ) => "title",
				esc_html__( "Date", 'borderland' ) => "date"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Order", 'borderland' ),
			"param_name"  => "order",
			"value"       => array(
				esc_html__( "ASC", 'borderland' ) => "ASC",
				esc_html__( "DESC", 'borderland' ) => "DESC"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Category Slug", 'borderland' ),
			"param_name"  => "category",
			"description" => esc_html__( "Leave empty for all or use comma for list", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Text length", 'borderland' ),
			"param_name"  => "text_length",
			"description" => esc_html__( "Number of characters", 'borderland' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title Size (px)", 'borderland' ),
			"param_name" => "title_size",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Display excerpt", 'borderland' ),
			"param_name"  => "display_excerpt",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Excerpt Color", 'borderland' ),
			"param_name" => "excerpt_color",
			"dependency" => Array( 'element' => "display_excerpt", 'value' => array( '1', '' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Info Position", 'borderland' ),
			"param_name" => "info_position",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Top", 'borderland' ) => "top",
				esc_html__( "Bottom", 'borderland' ) => "bottom"
			),
			"dependency" => array( 'element' => "type", 'value' => array( 'image_in_box', 'minimal', 'boxes' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Post info font size (px)", 'borderland' ),
			"param_name" => "post_info_font_size",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Post info color", 'borderland' ),
			"param_name" => "post_info_color",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Post info link color", 'borderland' ),
			"param_name" => "post_info_link_color",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Post info font family", 'borderland' ),
			"param_name" => "post_info_font_family",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Post info text transform", 'borderland' ),
			"param_name" => "post_info_text_transform",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "None", 'borderland' ) => "none",
				esc_html__( "Capitalize", 'borderland' ) => "capitalize",
				esc_html__( "Uppercase", 'borderland' ) => "uppercase",
				esc_html__( "Lowercase", 'borderland' ) => "lowercase"
			),
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Post info font weight", 'borderland' ),
			"param_name"  => "post_info_font_weight",
			"value"       => $font_weight_array,
			'save_always' => true,
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Post info font style", 'borderland' ),
			"param_name" => "post_info_font_style",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Normal", 'borderland' ) => "normal",
				esc_html__( "Italic", 'borderland' ) => "italic"
			),
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Post info letter spacing (px)", 'borderland' ),
			"param_name" => "post_info_letter_spacing",
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Display category", 'borderland' ),
			"param_name"  => "display_category",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			),
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Display date", 'borderland' ),
			"param_name"  => "display_date",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			),
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Date Position", 'borderland' ),
			"param_name"  => "date_place",
			"value"       => array(
				esc_html__( "Date by Title", 'borderland' ) => "by_title",
				esc_html__( "Date by Post Info", 'borderland' ) => "by_post_info"
			),
			'save_always' => true,
			"description" => esc_html__( 'Choose where will be date placed', 'borderland' ),
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Date Size (px)", 'borderland' ),
			"param_name" => "date_size",
			"dependency" => array( 'element' => "type", 'value' => array( 'boxes', 'image_in_box' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Display author", 'borderland' ),
			"param_name" => "display_author",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			)
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Display comments", 'borderland' ),
			"param_name" => "display_comments",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			),
			"dependency" => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Box Background Color", 'borderland' ),
			"param_name" => "background_color",
			"dependency" => Array( 'element' => "type", 'value' => array( 'boxes', 'image_in_box' ) )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Box Padding", 'borderland' ),
			"param_name"  => "box_info_padding",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
			"dependency"  => Array( 'element' => "type", 'value' => array( 'boxes', 'image_in_box' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Separator Between Item Color", 'borderland' ),
			"param_name" => "border_color",
			"dependency" => array( 'element' => "type", 'value' => array( 'minimal', 'image_in_box' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Separator Between Item Thickness (px)", 'borderland' ),
			"param_name" => "border_width",
			"dependency" => array( 'element' => "type", 'value' => array( 'minimal', 'image_in_box' ) )
		
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Display Button", 'borderland' ),
			"param_name"  => "display_button",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "1",
				esc_html__( "No", 'borderland' ) => "0"
			),
			"description" => esc_html__( "Show button leading to post single page", 'borderland' ),
			"dependency"  => Array( 'element' => "type", 'value' => array( 'image_in_box', 'boxes', 'minimal' ) )
		
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Button Size", 'borderland' ),
			"param_name"  => "button_size",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Small", 'borderland' ) => "small",
				esc_html__( "Medium", 'borderland' ) => "medium",
				esc_html__( "Large", 'borderland' ) => "large",
				esc_html__( "Extra Large", 'borderland' ) => "big_large"
			),
			"description" => esc_html__( "Default value is small", 'borderland' ),
			"dependency"  => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Button Style", 'borderland' ),
			"param_name" => "button_style",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "White", 'borderland' ) => "white"
			),
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Button Text", 'borderland' ),
			"param_name"  => "button_text",
			"description" => esc_html__( "Default text is LEARN MORE", 'borderland' ),
			"dependency"  => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Text Color", 'borderland' ),
			"param_name" => "button_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Text Hover Color", 'borderland' ),
			"param_name" => "button_hover_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Background Color", 'borderland' ),
			"param_name" => "button_background_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Hover Background Color", 'borderland' ),
			"param_name" => "button_hover_background_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Border Color", 'borderland' ),
			"param_name" => "button_border_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Button Border Width", 'borderland' ),
			"param_name" => "button_border_width",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Hover Border Color", 'borderland' ),
			"param_name" => "button_hover_border_color",
			"dependency" => array( 'element' => "display_button", 'value' => '1' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Button Border Radius (px)", 'borderland' ),
			"param_name"  => "button_border_radius",
			"description" => esc_html__( "Border radius for button", 'borderland' ),
			"dependency"  => array( 'element' => "display_button", 'value' => '1' )
		)
	)
) );

/*** Blog Slider ***/

vc_map( array(
	"name" => esc_html__( "Blog Slider", 'borderland' ),
	"base"                      => "no_blog_slider",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-blog-slider extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Slider type", 'borderland' ),
			"param_name" => "type",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Post Info visible", 'borderland' ) => "info_always",
				esc_html__( "Post Info in Bottom", 'borderland' ) => "info_in_bottom"
			),
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Image size", 'borderland' ),
			"param_name" => "image_size",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Original Size", 'borderland' ) => "full",
				esc_html__( "Landscape", 'borderland' ) => "landscape",
				esc_html__( "Portrait", 'borderland' ) => "portrait"
			),
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Order By", 'borderland' ),
			"param_name" => "order_by",
			"value"      => array(
				""      => "",
				esc_html__( "Title", 'borderland' ) => "title",
				esc_html__( "Date", 'borderland' ) => "date"
			),
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Order", 'borderland' ),
			"param_name" => "order",
			"value"      => array(
				""     => "",
				esc_html__( "ASC", 'borderland' ) => "ASC",
				esc_html__( "DESC", 'borderland' ) => "DESC",
			),
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Number", 'borderland' ),
			"param_name"  => "number",
			"value"       => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Number of Blog Posts Shown", 'borderland' ),
			"param_name"  => "blogs_shown",
			"value"       => array(
				""  => "",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6"
			),
			"description" => esc_html__( "Number of blog posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'borderland' ),
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Category", 'borderland' ),
			"param_name"  => "category",
			"value"       => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Selected Projects", 'borderland' ),
			"param_name"  => "selected_projects",
			"value"       => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'borderland' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Info Box Background Color", 'borderland' ),
			"param_name" => "hover_box_color",
			"value"      => "",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Post Info Color", 'borderland' ),
			"param_name" => "post_info_color",
			"value"      => "",
			"dependency" => array( "element" => "type", "value" => "info_in_bottom" )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Author", 'borderland' ),
			"param_name"  => "show_author",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'borderland' ),
			"dependency"  => array( "element" => "type", "value" => "info_in_bottom" )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Author Color", 'borderland' ),
			"param_name" => "author_color",
			"value"      => "",
			"dependency" => array( 'element' => "show_author", 'value' => array( 'yes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Category Names", 'borderland' ),
			"param_name"  => "show_categories",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'borderland' ),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Category Name Color", 'borderland' ),
			"param_name" => "category_color",
			"value"      => "",
			"dependency" => array( 'element' => "show_categories", 'value' => array( 'yes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Date", 'borderland' ),
			"param_name"  => "show_date",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'borderland' ),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Date Color", 'borderland' ),
			"param_name" => "date_color",
			"value"      => "",
			"dependency" => array( 'element' => "show_date", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
			"value"      => "",
		),
		array(
			"type"       => "checkbox",
			"heading" => esc_html__( "Prev/Next navigation", 'borderland' ),
			"value"      => array( esc_html__( "Enable prev/next navigation?", 'borderland' ) => "enable_navigation" ),
			"param_name" => "enable_navigation"
		),
		array(
			"type"       => "checkbox",
			"heading" => esc_html__( "Bullets navigation", 'borderland' ),
			"value"      => array( esc_html__( "Show bullets navigation?", 'borderland' ) => "yes" ),
			"param_name" => "pager_navigation"
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Extra class name", 'borderland' ),
			"param_name"  => "add_class",
			"value"       => "",
			"description" => esc_html__( "If you wish to style this particular blog slider differently, you can use this field to add an extra class name to it and then refer to that class name in your css file.", 'borderland' )
		)
	)
) );

/*** Vertical Split Slider ***/
class WPBakeryShortCode_No_Vertical_Split_Slider extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Elated Vertical Split Slider', 'borderland' ),
	"base"                    => "no_vertical_split_slider",
	"as_parent"               => array( 'only' => 'no_vertical_left_sliding_panel,no_vertical_right_sliding_panel' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view"                 => 'VcColumnView',
	"params"                  => array(
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Preloader Background Color", 'borderland' ),
			"param_name" => "background_color",
			"value"      => "",
		)
	)
) );

/*** Vertical Split Slider Left Panel ***/
class WPBakeryShortCode_No_Vertical_Left_Sliding_Panel extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Left Sliding Panel', 'borderland' ),
	"base"                    => "no_vertical_left_sliding_panel",
	"as_parent"               => array( 'only' => 'no_vertical_slide_content_item' ),
	"as_child"                => array( 'only' => 'no_vertical_split_slider' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view"                 => 'VcColumnView',
	"params"                  => array()
) );

/*** Vertical Split Slider Right Panel ***/
class WPBakeryShortCode_No_Vertical_Right_Sliding_Panel extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Right Sliding Panel', 'borderland' ),
	"base"                    => "no_vertical_right_sliding_panel",
	"as_parent"               => array( 'only' => 'no_vertical_slide_content_item' ),
	"as_child"                => array( 'only' => 'no_vertical_split_slider' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view"                 => 'VcColumnView',
	"params"                  => array()
) );

/*** Vertical Split Slider Content Item ***/
class WPBakeryShortCode_No_Vertical_Slide_Content_Item extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( 'Slide Content Item', 'borderland' ),
	"base"                    => "no_vertical_slide_content_item",
	"as_parent"               => array( 'except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel' ),
	"as_child"                => array( 'only' => 'no_vertical_left_sliding_panel, no_vertical_right_sliding_panel' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view"                 => 'VcColumnView',
	"params"                  => array(
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
			"value"      => "",
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Background Image", 'borderland' ),
			"param_name" => "background_image",
			"value"      => "",
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Padding left/right", 'borderland' ),
			"param_name"  => "item_padding",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format 10px", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Content Aligment", 'borderland' ),
			"param_name"  => "alignment",
			"value"       => array(
				esc_html__( "left", 'borderland' ) => "left",
				esc_html__( "right", 'borderland' ) => "right",
				esc_html__( "center", 'borderland' ) => "center"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Header Style", 'borderland' ),
			"param_name" => "header_style",
			"value"      => array(
				""      => "",
				esc_html__( "Light", 'borderland' ) => "light",
				esc_html__( "Dark", 'borderland' ) => "dark"
			),
		)
	
	)
) );

/*** Image slider ***/

vc_map( array(
	"name" => esc_html__( "Elated Image Slider", 'borderland' ),
	"base"                      => "no_image_slider_no_space",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-image-slider-no-space extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "attach_images",
			"heading" => esc_html__( "Images", 'borderland' ),
			"param_name" => "images"
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "On click", 'borderland' ),
			"param_name" => "on_click",
			"value"      => array(
				esc_html__( "Do nothing", 'borderland' ) => "",
				esc_html__( "Open image in prettyphoto", 'borderland' ) => "prettyphoto",
				esc_html__( "Open image in new tab", 'borderland' ) => "new_tab",
				esc_html__( "Use custom links", 'borderland' ) => "use_custom_links"
			),
		),
		array(
			"type"        => "textarea",
			"heading" => esc_html__( "Custom Links", 'borderland' ),
			"param_name"  => "custom_links",
			"value"       => "",
			"dependency"  => array( 'element' => 'on_click', 'value' => 'use_custom_links' ),
			"description" => esc_html__( "Enter links for each image here. Divide links with comma.", 'borderland' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Custom links target", 'borderland' ),
			"param_name" => "custom_links_target",
			"value"      => array(
				""            => "",
				esc_html__( "Same window", 'borderland' ) => "_self",
				esc_html__( "New window", 'borderland' ) => "_blank"
			),
			"dependency" => array( 'element' => 'on_click', 'value' => 'use_custom_links' ),
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show info", 'borderland' ),
			"param_name"  => "show_info",
			"value"       => array(
				""                     => "",
				esc_html__( "On Hover", 'borderland' ) => "on_hover",
				esc_html__( "In The Bottom Corner", 'borderland' ) => "in_bottom_corner",
			),
			"description" => esc_html__( "Show image title and description", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Info position", 'borderland' ),
			"param_name"  => "info_position",
			"value"       => array(
				esc_html__( "Bottom Left", 'borderland' ) => "bottom_left",
				esc_html__( "Bottom Right", 'borderland' ) => "bottom_right",
			),
			'save_always' => true,
			"dependency"  => array( 'element' => "show_info", 'value' => array( 'in_bottom_corner' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
			"dependency" => array( 'element' => "show_info", 'value' => array( 'on_hover', 'in_bottom_corner' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
			"dependency" => array( 'element' => "show_info", 'value' => array( 'on_hover', 'in_bottom_corner' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title font size (px)", 'borderland' ),
			"param_name" => "title_font_size",
			"value"      => "",
			"dependency" => array( 'element' => "show_info", 'value' => array( 'on_hover', 'in_bottom_corner' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Description Color", 'borderland' ),
			"param_name" => "description_color",
			"dependency" => array( 'element' => "show_info", 'value' => array( 'on_hover', 'in_bottom_corner' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Description font size (px)", 'borderland' ),
			"param_name" => "description_font_size",
			"value"      => "",
			"dependency" => array( 'element' => "show_info", 'value' => array( 'on_hover', 'in_bottom_corner' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'borderland' ),
			"param_name" => "separator_color",
			"dependency" => array( 'element' => "show_info", 'value' => 'on_hover' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Separator opacity (0-1)", 'borderland' ),
			"param_name" => "separator_opacity",
			"value"      => "",
			"dependency" => array( 'element' => "show_info", 'value' => 'on_hover' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Full Screen Height", 'borderland' ),
			"param_name"  => "full_screen",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Slider height (px)", 'borderland' ),
			"param_name" => "height",
			"value"      => "",
			"dependency" => array( 'element' => 'full_screen', 'value' => 'no' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Navigation style", 'borderland' ),
			"param_name" => "navigation_style",
			"value"      => array(
				""      => "",
				esc_html__( "Light", 'borderland' ) => "light",
				esc_html__( "Dark", 'borderland' ) => "dark"
			)
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Highlight Active Image", 'borderland' ),
			"param_name" => "highlight_active_image",
			"value"      => array(
				""    => "",
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			)
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Highlight Inactive Color", 'borderland' ),
			"param_name" => "highlight_inactive_color",
			"dependency" => array( 'element' => "highlight_active_image", 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Highlight Inactive Opacity (0-1)", 'borderland' ),
			"param_name" => "highlight_inactive_opacity",
			"value"      => "",
			"dependency" => array( 'element' => "highlight_active_image", 'value' => 'yes' )
		)
	)
) );

/*** Google Map ***/

vc_map( array(
	"name" => esc_html__( "Google Map", 'borderland' ),
	"base"                      => "no_google_map",
	"icon"                      => "icon-wpb-google-map extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Address 1", 'borderland' ),
			"param_name" => "address1",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Address 2", 'borderland' ),
			"param_name" => "address2",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Address 3", 'borderland' ),
			"param_name" => "address3",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Address 4", 'borderland' ),
			"param_name" => "address4",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Address 5", 'borderland' ),
			"param_name" => "address5",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Custom Map Style", 'borderland' ),
			"param_name"  => "custom_map_style",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "false",
				esc_html__( "Yes", 'borderland' ) => "true"
			),
			'save_always' => true,
			"description" => esc_html__( "Enabling this option will allow Map editing", 'borderland' )
		),
		array(
			"type"        => "colorpicker",
			"heading" => esc_html__( "Color Overlay", 'borderland' ),
			"param_name"  => "color_overlay",
			"description" => esc_html__( "Choose a Map color overlay", 'borderland' ),
			"dependency"  => Array( 'element' => "custom_map_style", 'value' => array( 'true' ) )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Saturation", 'borderland' ),
			"param_name"  => "saturation",
			"description" => esc_html__( "Choose a level of saturation (-100 = least saturated, 100 = most saturated)", 'borderland' ),
			"dependency"  => Array( 'element' => "custom_map_style", 'value' => array( 'true' ) )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Lightness", 'borderland' ),
			"param_name"  => "lightness",
			"description" => esc_html__( "Choose a level of lightness (-100 = darkest, 100 = lightest)", 'borderland' ),
			"dependency"  => Array( 'element' => "custom_map_style", 'value' => array( 'true' ) )
		),
		array(
			"type"        => "attach_image",
			"heading" => esc_html__( "Pin", 'borderland' ),
			"param_name"  => "pin",
			"description" => esc_html__( "Select a pin image to be used on Google Map", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Map Zoom", 'borderland' ),
			"param_name"  => "zoom",
			"description" => esc_html__( "Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Zoom Map on Mouse Wheel", 'borderland' ),
			"param_name"  => "google_maps_scroll_wheel",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "false",
				esc_html__( "Yes", 'borderland' ) => "true"
			),
			'save_always' => true,
			"description" => esc_html__( "Enabling this option will allow users to zoom in on Map using mouse wheel", 'borderland' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Map Height", 'borderland' ),
			"param_name" => "map_height",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show address info box on page load", 'borderland' ),
			"param_name"  => "address_info_box",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true
		)
	)
) );

/*** Team ***/

$team_social_icons_array = array();
for ( $x = 1; $x < 6; $x ++ ) {
	$teamIconCollections = $icon_collections->iconCollections;
	if ( array_key_exists( 'linea_icons', $teamIconCollections ) ) {
		unset( $teamIconCollections['linea_icons'] );
	}
	foreach ( $teamIconCollections as $collection_key => $collection ) {
		
		$team_social_icons_array[] = array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Social Icon ", 'borderland' ) . $x,
			"param_name"  => "team_social_" . $collection->param . "_" . $x,
			"value"       => $collection->getSocialIconsArrayVC(),
			'save_always' => true,
			"dependency"  => Array( 'element' => "team_social_icon_pack", 'value' => array( $collection_key ) )
		);
		
	}
	
	$team_social_icons_array[] = array(
		"type"       => "textfield",
		"heading" => esc_html__( " Link", 'borderland' ),
		"param_name" => "team_social_icon_" . $x . "_link",
		"dependency" => array(
			'element' => 'team_social_icon_pack',
			'value'   => $icon_collections->getIconCollectionsKeys()
		)
	);
	
	$team_social_icons_array[] = array(
		"type"       => "dropdown",
		"heading" => esc_html__( " Target", 'borderland' ),
		"param_name" => "team_social_icon_" . $x . "_target",
		"value"      => array(
			""      => "",
			esc_html__( "Self", 'borderland' ) => "_self",
			esc_html__( "Blank", 'borderland' ) => "_blank"
		),
		"dependency" => Array( 'element' => "team_social_icon_" . $x . "_link", 'not_empty' => true )
	);
	
}

vc_map( array(
	"name" => esc_html__( "Team", 'borderland' ),
	"base"                      => "no_team",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-team extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "team_type",
				"value"       => array(
					esc_html__( "Main Info on Hover", 'borderland' ) => "on_hover",
					esc_html__( "Main Info Below Image", 'borderland' ) => "below_image"
				),
				'save_always' => true
			),
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Image", 'borderland' ),
				"param_name" => "team_image"
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Image hover color", 'borderland' ),
				"param_name" => "team_image_hover_color"
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Hover Type", 'borderland' ),
				"param_name"  => "team_hover_type",
				"value"       => array(
					esc_html__( "Text In Center", 'borderland' ) => "in_center",
					esc_html__( "Text in Left Corner", 'borderland' ) => "in_corner"
				),
				'save_always' => true,
				"dependency"  => array( 'element' => "team_type", 'value' => array( 'on_hover' ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Name", 'borderland' ),
				"param_name" => "team_name"
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Name Tag", 'borderland' ),
				"param_name" => "team_name_tag",
				"value"      => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"dependency" => array( 'element' => 'team_name', 'not_empty' => true )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Name font size(px)", 'borderland' ),
				"param_name" => "team_name_font_size",
				"dependency" => array( 'element' => 'team_name', 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Name color", 'borderland' ),
				"param_name" => "team_name_color",
				"dependency" => array( 'element' => 'team_name', 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Name font weight", 'borderland' ),
				"param_name"  => "team_name_font_weight",
				"value"       => $font_weight_array,
				'save_always' => true,
				"dependency"  => array( 'element' => 'team_name', 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Name text transform", 'borderland' ),
				"param_name" => "team_name_text_transform",
				"value"      => array(
					esc_html__( "Default", 'borderland' ) => "",
					esc_html__( "None", 'borderland' ) => "none",
					esc_html__( "Capitalize", 'borderland' ) => "capitalize",
					esc_html__( "Uppercase", 'borderland' ) => "uppercase",
					esc_html__( "Lowercase", 'borderland' ) => "lowercase"
				),
				"dependency" => array( 'element' => 'team_name', 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Show Separator", 'borderland' ),
				"param_name"  => "team_show_separator",
				"value"       => array(
					esc_html__( "Yes", 'borderland' ) => "yes",
					esc_html__( "No", 'borderland' ) => "no"
				),
				'save_always' => true,
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Separator color", 'borderland' ),
				"param_name" => "team_separator_color",
				"dependency" => array( 'element' => 'team_show_separator', 'value' => "yes" )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Position", 'borderland' ),
				"param_name" => "team_position"
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Position font size(px)", 'borderland' ),
				"param_name" => "team_position_font_size",
				"dependency" => array( 'element' => 'team_position', 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Position color", 'borderland' ),
				"param_name" => "team_position_color",
				"dependency" => array( 'element' => 'team_position', 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Position font weight", 'borderland' ),
				"param_name"  => "team_position_font_weight",
				"value"       => $font_weight_array,
				'save_always' => true,
				"dependency"  => array( 'element' => 'team_position', 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Position text transform", 'borderland' ),
				"param_name" => "team_position_text_transform",
				"value"      => array(
					esc_html__( "Default", 'borderland' ) => "",
					esc_html__( "None", 'borderland' ) => "none",
					esc_html__( "Capitalize", 'borderland' ) => "capitalize",
					esc_html__( "Uppercase", 'borderland' ) => "uppercase",
					esc_html__( "Lowercase", 'borderland' ) => "lowercase"
				),
				"dependency" => array( 'element' => 'team_position', 'not_empty' => true )
			),
			array(
				"type"       => "textarea",
				"heading" => esc_html__( "Description", 'borderland' ),
				"param_name" => "team_description"
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Description color", 'borderland' ),
				"param_name" => "team_description_color",
				"dependency" => array( 'element' => 'team_description', 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Text align", 'borderland' ),
				"param_name" => "text_align",
				"value"      => array(
					esc_html__( "Default", 'borderland' ) => "",
					esc_html__( "Left", 'borderland' ) => "left_align",
					esc_html__( "Center", 'borderland' ) => "center_align",
					esc_html__( "Right", 'borderland' ) => "right_align"
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Color", 'borderland' ),
				"param_name" => "background_color",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Box Border", 'borderland' ),
				"param_name" => "box_border",
				"value"      => array(
					esc_html__( "Default", 'borderland' ) => "",
					esc_html__( "No", 'borderland' ) => "no",
					esc_html__( "Yes", 'borderland' ) => "yes"
				),
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Box Border Width", 'borderland' ),
				"param_name" => "box_border_width",
				"value"      => "",
				"dependency" => array( 'element' => "box_border", 'value' => array( 'yes' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Box Border Color", 'borderland' ),
				"param_name" => "box_border_color",
				"value"      => "",
				"dependency" => array( 'element' => "box_border", 'value' => array( 'yes' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Social Icon Pack", 'borderland' ),
				"param_name"  => "team_social_icon_pack",
				"value"       => array_merge( array( "" => "" ), $icon_collections->getIconCollectionsVCExclude( 'linea_icons' ) ),
				'save_always' => true
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Social Style", 'borderland' ),
				"param_name"  => "team_social_style",
				"value"       => array(
					esc_html__( "Between Image and Info", 'borderland' ) => "social_style_between",
					esc_html__( "In the center of the image", 'borderland' ) => "social_style_center"
				),
				'save_always' => true,
				"description" => esc_html__( "Social Style applies only when Main Info Below Image type is selected", 'borderland' ),
				"dependency"  => array(
					'element' => 'team_social_icon_pack',
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Social Icons Position", 'borderland' ),
				"param_name"  => "social_icons_position",
				"value"       => array(
					esc_html__( "Left", 'borderland' ) => "left",
					esc_html__( "Center", 'borderland' ) => "center",
					esc_html__( "Right", 'borderland' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Social Icons Position applies only when Main Info Below Image type is selected", 'borderland' ),
				"dependency"  => array( 'element' => 'team_social_style', 'value' => array( "social_style_between" ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Social Icons Type", 'borderland' ),
				"param_name"  => "team_social_icon_type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal_social",
					esc_html__( "Circle", 'borderland' ) => "circle_social",
					esc_html__( "Square", 'borderland' ) => "square_social"
				),
				'save_always' => true,
				"dependency"  => array(
					'element' => 'team_social_icon_pack',
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Social Icons color", 'borderland' ),
				"param_name" => "team_social_icon_color",
				"dependency" => array(
					'element' => 'team_social_icon_pack',
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Social Icons Background Color", 'borderland' ),
				"param_name" => "team_social_icon_background_color",
				"dependency" => array(
					'element' => 'team_social_icon_type',
					'value'   => array( 'circle_social', 'square_social' )
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Social Icons Border Color", 'borderland' ),
				"param_name" => "team_social_icon_border_color",
				"dependency" => array(
					'element' => 'team_social_icon_type',
					'value'   => array( 'circle_social', 'square_social' )
				)
			)
		),
		$team_social_icons_array,
		array(
			array(
				"type"       => "checkbox",
				"heading" => esc_html__( "Team Member Skills", 'borderland' ),
				"value"      => array( esc_html__( "Show Team Member Skills?", 'borderland' ) => "yes" ),
				"param_name" => "show_skills",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Skills Title Size", 'borderland' ),
				"param_name" => "skills_title_size",
				"dependency" => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "First Skill Title", 'borderland' ),
				"param_name"  => "skill_title_1",
				"description" => esc_html__( "For example Web design", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "First Skill Percentage", 'borderland' ),
				"param_name"  => "skill_percentage_1",
				"description" => esc_html__( "Enter just number, without %", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Second Skill Title", 'borderland' ),
				"param_name"  => "skill_title_2",
				"description" => esc_html__( "For example Web design", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Second Skill Percentage", 'borderland' ),
				"param_name"  => "skill_percentage_2",
				"description" => esc_html__( "Enter just number, without %", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Third Skill Title", 'borderland' ),
				"param_name"  => "skill_title_3",
				"description" => esc_html__( "For example Web design", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Third Skill Percentage", 'borderland' ),
				"param_name"  => "skill_percentage_3",
				"description" => esc_html__( "Enter just number, without %", 'borderland' ),
				"dependency"  => array( "element" => "show_skills", "value" => "yes" )
			)
		)
	)

) );

/*** Clients ***/
class WPBakeryShortCode_No_Clients extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( "Elated Clients", 'borderland' ),
	"base"                    => "no_clients",
	"as_parent"               => array( 'only' => 'no_client' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-clients extended-custom-icon",
	"show_settings_on_create" => true,
	"params"                  => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Columns", 'borderland' ),
			"param_name"  => "columns",
			"value"       => array(
				esc_html__( "Two", 'borderland' ) => "two_columns",
				esc_html__( "Three", 'borderland' ) => "three_columns",
				esc_html__( "Four", 'borderland' ) => "four_columns",
				esc_html__( "Five", 'borderland' ) => "five_columns",
				esc_html__( "Six", 'borderland' ) => "six_columns"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show borders", 'borderland' ),
			"param_name"  => "client_borders",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Space between clients", 'borderland' ),
			"param_name"  => "space_between_clients",
			"description" => esc_html__( "When yes, space will be 10px", 'borderland' ),
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true
		)
	),
	"js_view"                 => 'VcColumnView'
) );

/*** Client ***/
class WPBakeryShortCode_No_Client extends WPBakeryShortCode {
}

vc_map( array(
	"name" => esc_html__( "Elated Client", 'borderland' ),
	"base"            => "no_client",
	"content_element" => true,
	"icon"            => "icon-wpb-client extended-custom-icon",
	"as_child"        => array( 'only' => 'no_clients' ),
	"params"          => array(
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image", 'borderland' ),
			"param_name" => "image"
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link", 'borderland' ),
			"param_name" => "link"
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Link Target", 'borderland' ),
			"param_name" => "link_target",
			"value"      => array(
				""      => "",
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			)
		)
	)
) );

/*** Circles ***/
class WPBakeryShortCode_No_Circles extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( "Elated Process Holder", 'borderland' ),
	"base"                    => "no_circles",
	"as_parent"               => array( 'only' => 'no_circle' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-circles extended-custom-icon",
	"show_settings_on_create" => true,
	"params"                  => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Columns", 'borderland' ),
			"param_name"  => "columns",
			"value"       => array(
				esc_html__( "Three", 'borderland' ) => "three_columns",
				esc_html__( "Four", 'borderland' ) => "four_columns",
				esc_html__( "Five", 'borderland' ) => "five_columns",
				esc_html__( "Six", 'borderland' ) => "six_columns"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Lines between items?", 'borderland' ),
			"param_name"  => "lines_between",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Line Color", 'borderland' ),
			"param_name" => "line_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Process Item Height (px)", 'borderland' ),
			"param_name" => "process_height",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Process Item Width (px)", 'borderland' ),
			"param_name" => "process_width",
		)
	),
	"js_view"                 => 'VcColumnView'
) );

/*** Circle ***/
class WPBakeryShortCode_No_Circle extends WPBakeryShortCode {
}

vc_map( array(
	"name" => esc_html__( "Elated Process", 'borderland' ),
	"base"            => "no_circle",
	"content_element" => true,
	"icon"            => "icon-wpb-circle extended-custom-icon",
	"as_child"        => array( 'only' => 'no_circles' ),
	"params"          => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Icon in Process", 'borderland' ) => "icon_type",
					esc_html__( "Image", 'borderland' ) => "image_type",
					esc_html__( "Text in Process", 'borderland' ) => "text_type",
					esc_html__( "Image with Text", 'borderland' ) => "image_with_text_type"
				),
				'save_always' => true
			),
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Process Background Image", 'borderland' ),
				"param_name" => "background_image",
				"dependency" => array( 'element' => "type", 'value' => array( "icon_type" ) ),
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Process Color", 'borderland' ),
				"param_name" => "background_color",
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Background Process Transparency", 'borderland' ),
				"param_name"  => "background_transparency",
				"description" => esc_html__( "Insert value between 0 and 1", 'borderland' )
			),
			array(
				"type"       => "checkbox",
				"heading" => esc_html__( "Without outer border?", 'borderland' ),
				"value"      => array( esc_html__( "Yes", 'borderland' ) => "yes" ),
				"param_name" => "without_double_border",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Border Process Color", 'borderland' ),
				"param_name" => "border_color",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Border Process Width", 'borderland' ),
				"param_name" => "border_width",
			)
		),
		$icon_collections->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'icon_type' ) ) ),
		array(
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Size", 'borderland' ),
				"param_name"  => "size",
				"description" => esc_html__( "Enter just number. Omit px", 'borderland' ),
				"dependency"  => array( 'element' => "type", 'value' => array( "icon_type" ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
				"dependency" => array( 'element' => "type", 'value' => array( "icon_type" ) )
			),
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Image", 'borderland' ),
				"param_name" => "image",
				"dependency" => array( 'element' => "type", 'value' => array( "image_type", "image_with_text_type" ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Text in Process", 'borderland' ),
				"param_name" => "text_in_circle",
				"dependency" => array( 'element' => "type", 'value' => array( "text_type", "image_with_text_type" ) )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Text in Process Tag", 'borderland' ),
				"param_name" => "text_in_circle_tag",
				"value"      => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"dependency" => array( 'element' => "text_in_circle", 'not_empty' => true )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Text in Process Size (px)", 'borderland' ),
				"param_name" => "font_size",
				"dependency" => array( 'element' => "text_in_circle", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Text in Process Color", 'borderland' ),
				"param_name" => "text_in_circle_color",
				"dependency" => array( 'element' => "text_in_circle", 'not_empty' => true )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Link Target", 'borderland' ),
				"param_name" => "link_target",
				"value"      => array(
					""      => "",
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
				"dependency" => array( 'element' => "link", 'not_empty' => true )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title", 'borderland' ),
				"param_name" => "title",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Title Tag", 'borderland' ),
				"param_name" => "title_tag",
				"value"      => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"dependency" => array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Title Color", 'borderland' ),
				"param_name" => "title_color",
				"dependency" => array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Title Alignment", 'borderland' ),
				"param_name" => "title_alignment",
				"value"      => array(
					""       => "",
					esc_html__( "Left", 'borderland' ) => "title_left",
					esc_html__( "Center", 'borderland' ) => "title_center",
					esc_html__( "Right", 'borderland' ) => "title_right"
				),
				"dependency" => array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "textarea",
				"heading" => esc_html__( "Text", 'borderland' ),
				"param_name" => "text",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Text Color", 'borderland' ),
				"param_name" => "text_color",
				"dependency" => array( 'element' => "text", 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Text Alignment", 'borderland' ),
				"param_name" => "text_alignment",
				"value"      => array(
					""       => "",
					esc_html__( "Left", 'borderland' ) => "text_left",
					esc_html__( "Center", 'borderland' ) => "text_center",
					esc_html__( "Right", 'borderland' ) => "text_right"
				),
				"dependency" => array( 'element' => "text", 'not_empty' => true )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Space between circle and title", 'borderland' ),
				"param_name"  => "title_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 24)", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Space between title and text", 'borderland' ),
				"param_name"  => "text_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 5)", 'borderland' )
			)
		)
	)
) );

/*** Pricing Tables ***/
class WPBakeryShortCode_No_Pricing_Tables extends WPBakeryShortCodesContainer {
}

vc_map( array(
	"name" => esc_html__( "Elated Pricing Tables", 'borderland' ),
	"base"                    => "no_pricing_tables",
	"as_parent"               => array( 'only' => 'no_pricing_table' ),
	"content_element"         => true,
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                    => "icon-wpb-pricing-tables extended-custom-icon",
	"show_settings_on_create" => true,
	"params"                  => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Columns", 'borderland' ),
			"param_name"  => "columns",
			"value"       => array(
				esc_html__( "Two", 'borderland' ) => "two_columns",
				esc_html__( "Three", 'borderland' ) => "three_columns",
				esc_html__( "Four", 'borderland' ) => "four_columns",
			),
			'save_always' => true,
		)
	),
	"js_view"                 => 'VcColumnView'
) );

/*** Pricing Table ***/
class WPBakeryShortCode_No_Pricing_Table extends WPBakeryShortCode {
}

vc_map( array(
	"name" => esc_html__( "Pricing Table", 'borderland' ),
	"base"                      => "no_pricing_table",
	"icon"                      => "icon-wpb-pricing-table extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"as_child"                  => array( 'only' => 'no_pricing_tables' ),
	"params"                    => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Type", 'borderland' ),
			"param_name"  => "type",
			"value"       => array(
				esc_html__( "Price on top", 'borderland' ) => "price_on_top",
				esc_html__( "Title on top", 'borderland' ) => "title_on_top"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
			"value"       =>  esc_html__( "Basic Plan", 'borderland' ),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Background Color", 'borderland' ),
			"param_name" => "title_background_color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Title Small Separator", 'borderland' ),
			"param_name"  => "title_separator",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'type', 'value' => 'price_on_top' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Separator Color", 'borderland' ),
			"param_name" => "title_separator_color",
			"dependency" => array( 'element' => 'title_separator', 'value' => 'yes' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Title Border Bottom", 'borderland' ),
			"param_name"  => "title_border_bottom",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'type', 'value' => 'title_on_top' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Border Bottom Color", 'borderland' ),
			"param_name" => "title_border_bottom_color",
			"dependency" => array( 'element' => 'title_border_bottom', 'value' => 'yes' )
		),
		
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Border Around", 'borderland' ),
			"param_name"  => "border_arround",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Border Arround Color", 'borderland' ),
			"param_name" => "border_arround_color",
			"dependency" => array( 'element' => 'border_arround', 'value' => 'yes' )
		),
		
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Wide Border Top", 'borderland' ),
			"param_name"  => "table_border_top",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'type', 'value' => 'title_on_top' )
		),
		
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Wide Border Top Color", 'borderland' ),
			"param_name" => "pricing_table_border_top_color",
			"dependency" => array( 'element' => 'table_border_top', 'value' => 'yes' )
		),
		
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Price", 'borderland' ),
			"param_name"  => "price",
			"description" => esc_html__( "Default value is 100", 'borderland' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Price Background Color", 'borderland' ),
			"param_name" => "price_background",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Price Font Weight", 'borderland' ),
			"param_name"  => "price_font_weight",
			"value"       => $font_weight_array,
			'save_always' => true,
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Currency", 'borderland' ),
			"param_name"  => "currency",
			"description" => esc_html__( "Default mark is $", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Price Period", 'borderland' ),
			"param_name"  => "price_period",
			"description" => esc_html__( "Default label is monthly", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Price Period Position", 'borderland' ),
			"param_name"  => "price_period_position",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Next to Title", 'borderland' ) => "next_to_title",
				esc_html__( "Bellow Title", 'borderland' ) => "bellow_title"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'type', 'value' => 'price_on_top' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Show Button", 'borderland' ),
			"param_name" => "show_button",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Button Type", 'borderland' ),
			"param_name" => "pricing_button_type",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Standard Button", 'borderland' ) => "standard_button",
				esc_html__( "Button on Bottom", 'borderland' ) => "button_on_bottom"
			),
			"dependency" => array( 'element' => 'show_button', 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Button Text", 'borderland' ),
			"param_name" => "button_text",
			"dependency" => array( 'element' => 'pricing_button_type', 'value' => 'standard_button' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Button Size", 'borderland' ),
			"value"       => array(
				esc_html__( "Full Width", 'borderland' ) => "full_width",
				esc_html__( "Normal", 'borderland' ) => "normal"
			),
			'save_always' => true,
			"param_name"  => "button_size",
			"description" => esc_html__( "This options is only used for type Title on Top", 'borderland' ),
			"dependency"  => array( 'element' => 'pricing_button_type', 'value' => 'standard_button' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Button Link", 'borderland' ),
			"param_name" => "link",
			"dependency" => array( 'element' => 'show_button', 'value' => 'yes' )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Button Target", 'borderland' ),
			"param_name" => "target",
			"value"      => array(
				""      => "",
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			),
			"dependency" => array( 'element' => 'link', 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Color", 'borderland' ),
			"param_name" => "button_color",
			"dependency" => array( 'element' => 'show_button', 'value' => 'yes' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Button Background Color", 'borderland' ),
			"param_name" => "button_background_color",
			"dependency" => array( 'element' => 'show_button', 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Button Icon Size(px)", 'borderland' ),
			"param_name" => "button_icon_size",
			"dependency" => array( 'element' => 'pricing_button_type', 'value' => 'button_on_bottom' )
		),
		
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Button arrow", 'borderland' ),
			"param_name"  => "button_arrow",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'button_text', 'not_empty' => true )
		),
		
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Disable Button Top Border", 'borderland' ),
			"param_name"  => "disable_button_border_top",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			"description" => esc_html__( "This options is only used for type Title on Top", 'borderland' ),
			"dependency"  => array( 'element' => 'button_text', 'not_empty' => true )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Active", 'borderland' ),
			"param_name"  => "active",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Active Style", 'borderland' ),
			"param_name"  => "active_style",
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Circle", 'borderland' ) => "circle",
				esc_html__( "Rectangle", 'borderland' ) => "rectangle",
			),
			"description" => esc_html__( "This option is only used for type price on top", 'borderland' ),
			"dependency"  => array( 'element' => 'active', 'value' => 'yes' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Active text", 'borderland' ),
			"param_name"  => "active_text",
			"description" => esc_html__( "Best choice", 'borderland' ),
			"dependency"  => array( 'element' => 'active', 'value' => 'yes' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Active Text Color", 'borderland' ),
			"param_name" => "active_text_color",
			"dependency" => array( 'element' => 'active', 'value' => 'yes' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Active Text Background Color", 'borderland' ),
			"param_name" => "active_text_background_color",
			"dependency" => array( 'element' => 'active', 'value' => 'yes' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Content Text Color", 'borderland' ),
			"param_name" => "content_text_color"
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Content Background Color", 'borderland' ),
			"param_name" => "content_background_color",
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Pricing Table Background Image", 'borderland' ),
			"param_name" => "content_background_image",
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"      => "<li>content content content</li><li>content content content</li><li>content content content</li>",
		)
	)
) );

/*** Service table ***/

vc_map( array(
		"name" => esc_html__( "Service Table", 'borderland' ),
		"base"                      => "no_service_table",
		"icon"                      => "icon-wpb-service-table extended-custom-icon",
		"category" => esc_html__( 'by Elated', 'borderland' ),
		"allowed_container_element" => 'vc_row',
		"params"                    => array_merge(
			array(
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Type", 'borderland' ),
					"param_name"  => "type",
					"value"       => array(
						esc_html__( "Icon/Image on Top", 'borderland' ) => "icon_image_on_top",
						esc_html__( "Title on Top", 'borderland' ) => "title_on_top",
					),
					'save_always' => true,
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Title", 'borderland' ),
					"param_name" => "title",
					"value"      => ""
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Title Tag", 'borderland' ),
					"param_name" => "title_tag",
					"value"      => array(
						""   => "",
						esc_html__( "h2", 'borderland' ) => "h2",
						esc_html__( "h3", 'borderland' ) => "h3",
						esc_html__( "h4", 'borderland' ) => "h4",
						esc_html__( "h5", 'borderland' ) => "h5",
						esc_html__( "h6", 'borderland' ) => "h6",
					),
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Title Color", 'borderland' ),
					"param_name" => "title_color",
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Title Background Color", 'borderland' ),
					"param_name" => "title_background_color",
				),
				array(
					"type"       => "attach_image",
					"heading" => esc_html__( "Top Background Image", 'borderland' ),
					"param_name" => "top_background_image",
					"dependency" => array( "element" => "type", "value" => array( "icon_image_on_top" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Title Small Separator", 'borderland' ),
					"param_name"  => "title_separator",
					"value"       => array(
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "type", "value" => array( "icon_image_on_top" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Separator Color", 'borderland' ),
					"param_name" => "title_separator_color",
					"dependency" => array( "element" => "title_separator", "value" => array( "yes" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Title Border Bottom", 'borderland' ),
					"param_name"  => "title_border_bottom",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "type", "value" => array( "title_on_top" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Title Border Bottom color", 'borderland' ),
					"param_name" => "title_border_bottom_color",
					"dependency" => array( "element" => "title_border_bottom", "value" => array( "yes" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Wide Border Top", 'borderland' ),
					"param_name"  => "border_top",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "type", "value" => array( "title_on_top" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Wide Border Top Color", 'borderland' ),
					"param_name" => "border_top_color",
					"dependency" => array( "element" => "border_top", "value" => array( "yes" ) )
				),
				
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Icon/Image", 'borderland' ),
					"param_name"  => "show_icon_image",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
				),
				
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Header type", 'borderland' ),
					"param_name"  => "header_type",
					"value"       => array(
						esc_html__( "With Icon", 'borderland' ) => "with_icon",
						esc_html__( "With Image", 'borderland' ) => "with_image"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "show_icon_image", "value" => array( "yes" ) )
				)
			),
			$icon_collections->getVCParamsArray( array(
				"element" => "header_type",
				"value"   => array( "with_icon" )
			) ),
			array(
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'borderland' ),
					"param_name" => "icon_color",
					"dependency" => array( "element" => "header_type", "value" => array( "with_icon" ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Custom Size (px)", 'borderland' ),
					"param_name" => "custom_size",
					"value"      => "",
					"dependency" => array( "element" => "header_type", "value" => array( "with_icon" ) )
				),
				array(
					"type"       => "attach_image",
					"heading" => esc_html__( "Header Image", 'borderland' ),
					"param_name" => "header_image",
					"dependency" => array( "element" => "header_type", "value" => array( "with_image" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Content Background Color", 'borderland' ),
					"param_name" => "content_background_color",
				),
				array(
					"type"       => "attach_image",
					"heading" => esc_html__( "Content Background Image", 'borderland' ),
					"param_name" => "content_background_image",
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Border Around", 'borderland' ),
					"param_name" => "border",
					"value"      => array(
						esc_html__( "Default", 'borderland' ) => "",
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Border width (px)", 'borderland' ),
					"param_name" => "border_width",
					"value"      => "",
					"dependency" => array( 'element' => "border", 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Border color", 'borderland' ),
					"param_name" => "border_color",
					"value"      => "",
					"dependency" => array( 'element' => "border", 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Active", 'borderland' ),
					"param_name"  => "active",
					"value"       => array(
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
					'save_always' => true,
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Active Style", 'borderland' ),
					"param_name"  => "active_style",
					"value"       => array(
						esc_html__( "Default", 'borderland' ) => "",
						esc_html__( "Circle", 'borderland' ) => "circle",
						esc_html__( "Rectangle", 'borderland' ) => "rectangle"
					),
					"description" => esc_html__( "This option is only used for type Icon/Image on Top", 'borderland' ),
					"dependency"  => array( 'element' => "active", 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Active text", 'borderland' ),
					"param_name"  => "active_text",
					"description" => esc_html__( "Best choice", 'borderland' ),
					"dependency"  => array( 'element' => 'active', 'value' => 'yes' )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Active Text Color", 'borderland' ),
					"param_name" => "active_text_color",
					"dependency" => array( 'element' => 'active', 'value' => 'yes' )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Active Text Background Color", 'borderland' ),
					"param_name" => "active_text_background_color",
					"dependency" => array( 'element' => 'active', 'value' => 'yes' )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Content Text Color", 'borderland' ),
					"param_name" => "content_text_color"
				),
				array(
					"type"       => "textarea_html",
					"heading" => esc_html__( "Content", 'borderland' ),
					"param_name" => "content",
					"value"      => "<li>content content content</li><li>content content content</li><li>content content content</li>",
				)
			)
		)
	)
);

/*** Call to action ***/

vc_map( array(
		"name" => esc_html__( "Call to Action", 'borderland' ),
		"base"                      => "no_call_to_action",
		"category" => esc_html__( 'by Elated', 'borderland' ),
		"icon"                      => "icon-wpb-call-to-action extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params"                    => array_merge(
			array(
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Full Width", 'borderland' ),
					"param_name"  => "full_width",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Content in grid", 'borderland' ),
					"param_name"  => "content_in_grid",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "full_width", "value" => "yes" )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Grid size", 'borderland' ),
					"param_name"  => "grid_size",
					"value"       => array(
						esc_html__( "75/25", 'borderland' ) => "75",
						esc_html__( "50/50", 'borderland' ) => "50",
						esc_html__( "66/33", 'borderland' ) => "66"
					),
					'save_always' => true,
					"dependency"  => array( "element" => "content_in_grid", "value" => "yes" )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Type", 'borderland' ),
					"param_name"  => "type",
					"value"       => array(
						esc_html__( "Normal", 'borderland' ) => "normal",
						esc_html__( "With Icon", 'borderland' ) => "with_icon",
						esc_html__( "With Custom Icon", 'borderland' ) => "with_custom_icon"
					),
					'save_always' => true,
				)
			),
			$icon_collections->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'with_icon' ) ) ),
			array(
				array(
					"type"       => "attach_image",
					"heading" => esc_html__( "Custom Icon", 'borderland' ),
					"param_name" => "custom_icon",
					"dependency" => Array( 'element' => "type", 'value' => array( 'with_custom_icon' ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Icon Size", 'borderland' ),
					"param_name" => "icon_size",
					"dependency" => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Icon Position", 'borderland' ),
					"param_name"  => "icon_position",
					"value"       => array(
						esc_html__( "Default/Top", 'borderland' ) => "top",
						esc_html__( "Middle", 'borderland' ) => "middle",
						esc_html__( "Bottom", 'borderland' ) => "bottom"
					),
					'save_always' => true,
					"dependency"  => array( 'element' => 'type', 'value' => array( 'with_icon', 'with_custom_icon' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'borderland' ),
					"param_name" => "icon_color",
					"dependency" => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Background Color", 'borderland' ),
					"param_name" => "background_color",
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Border Color", 'borderland' ),
					"param_name" => "border_color",
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Box Padding (top right bottom left) px", 'borderland' ),
					"param_name"  => "box_padding",
					"description" => esc_html__( "Default padding is 20px on all sides", 'borderland' )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Default Text Font Size (px)", 'borderland' ),
					"param_name"  => "text_size",
					"description" => esc_html__( "Font size for p tag", 'borderland' )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Button", 'borderland' ),
					"param_name"  => "show_button",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Button Position", 'borderland' ),
					"param_name" => "button_position",
					"value"      => array(
						esc_html__( "Default/right", 'borderland' ) => "",
						esc_html__( "Center", 'borderland' ) => "center",
						esc_html__( "Left", 'borderland' ) => "left"
					),
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Button Size", 'borderland' ),
					"param_name" => "button_size",
					"value"      => array(
						esc_html__( "Default", 'borderland' ) => "",
						esc_html__( "Small", 'borderland' ) => "small",
						esc_html__( "Medium", 'borderland' ) => "medium",
						esc_html__( "Large", 'borderland' ) => "large",
						esc_html__( "Extra Large", 'borderland' ) => "big_large"
					),
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Button Text", 'borderland' ),
					"param_name"  => "button_text",
					"description" => esc_html__( "Default text is button", 'borderland' ),
					"dependency"  => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Button Link", 'borderland' ),
					"param_name" => "button_link",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Button Target", 'borderland' ),
					"param_name" => "button_target",
					"value"      => array(
						""      => "",
						esc_html__( "Self", 'borderland' ) => "_self",
						esc_html__( "Blank", 'borderland' ) => "_blank"
					),
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Text Color", 'borderland' ),
					"param_name" => "button_text_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Hover Text Color", 'borderland' ),
					"param_name" => "button_hover_text_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Background Color", 'borderland' ),
					"param_name" => "button_background_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Hover Background Color", 'borderland' ),
					"param_name" => "button_hover_background_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Border Color", 'borderland' ),
					"param_name" => "button_border_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Hover Border Color", 'borderland' ),
					"param_name" => "button_hover_border_color",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Button Border Width", 'borderland' ),
					"param_name" => "button_border_width",
					"dependency" => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Border Radius px", 'borderland' ),
					"param_name"  => "border_radius",
					"description" => esc_html__( "Border radius for button", 'borderland' ),
					"dependency"  => array( 'element' => 'show_button', 'value' => array( 'yes' ) )
				),
				array(
					"type"       => "textarea_html",
					"heading" => esc_html__( "Content", 'borderland' ),
					"param_name" => "content",
					"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
				)
			)
		)
	)
);

/*** Message shortcode ***/

vc_map( array(
	"name" => esc_html__( "Message", 'borderland' ),
	"base"                      => "no_message",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-message extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "With Icon", 'borderland' ) => "with_icon",
					esc_html__( "With Custom Icon", 'borderland' ) => "with_custom_icon"
				),
				'save_always' => true
			)
		),
		$icon_collections->getVCParamsArray( array( 'element' => "type", 'value' => array( 'with_icon' ) ) ),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Position", 'borderland' ),
				"param_name"  => "icon_position",
				"value"       => array(
					esc_html__( "Right", 'borderland' ) => "right",
					esc_html__( "Left", 'borderland' ) => "left"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => $icon_collections->iconPackParamName, 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Position", 'borderland' ),
				"param_name"  => "custom_icon_position",
				"value"       => array(
					esc_html__( "Right", 'borderland' ) => "right",
					esc_html__( "Left", 'borderland' ) => "left"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => 'type', 'value' => array( 'with_custom_icon' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Size", 'borderland' ),
				"param_name"  => "icon_size",
				"value"       => $icon_collections->getIconSizesArray(),
				'save_always' => true,
				"dependency"  => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'borderland' ),
				"param_name" => "icon_custom_size",
				"value"      => "",
				"dependency" => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'borderland' ),
				"param_name" => "icon_background_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Custom Icon", 'borderland' ),
				"param_name" => "custom_icon",
				"dependency" => Array( 'element' => "type", 'value' => array( 'with_custom_icon' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Color", 'borderland' ),
				"param_name" => "background_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name" => "border_color",
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Border Width (px)", 'borderland' ),
				"param_name"  => "border_width",
				"description" => esc_html__( "Default value is 1", 'borderland' )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Close Button Color", 'borderland' ),
				"param_name"  => "close_button_color",
				"description" => esc_html__( "Default color is #fff", 'borderland' )
			),
			array(
				"type"       => "textarea_html",
				"heading" => esc_html__( "Content", 'borderland' ),
				"param_name" => "content",
				"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
			)
		)
	)
) );

/*** Blockquote ***/

vc_map( array(
	"name" => esc_html__( "Blockquote", 'borderland' ),
	"base"                      => "no_blockquote",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-blockquote extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"        => "textarea",
			"heading" => esc_html__( "Text", 'borderland' ),
			"param_name"  => "text",
			"value"        =>  esc_html__( "Blockquote text", 'borderland' ),
			"save_always" => true
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color", 'borderland' ),
			"param_name" => "text_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Width", 'borderland' ),
			"param_name"  => "width",
			"description" => esc_html__( "Width (%)", 'borderland' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Line Height", 'borderland' ),
			"param_name"  => "line_height",
			"description" => esc_html__( "Line Height (px)", 'borderland' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Border", 'borderland' ),
			"param_name"  => "show_border",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Border Color", 'borderland' ),
			"param_name" => "border_color",
			"dependency" => array( 'element' => "show_border", 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Border width (px)", 'borderland' ),
			"param_name" => "border_width",
			"dependency" => array( 'element' => "show_border", 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Border Right Margin (px)", 'borderland' ),
			"param_name" => "border_right_margin",
			"dependency" => array( 'element' => "show_border", 'value' => 'yes' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Quote Icon", 'borderland' ),
			"param_name"  => "show_quote_icon",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Use Custom Icon or Font", 'borderland' ),
			"param_name" => "quote_icon_font",
			"value"      => array(
				esc_html__( "No", 'borderland' ) => "",
				esc_html__( "Use Specific Font", 'borderland' ) => "font_family",
				esc_html__( "Use Icon", 'borderland' ) => "with_icon"
			),
			"dependency" => array( 'element' => "show_quote_icon", 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Quote Icon Font", 'borderland' ),
			"param_name" => "quote_font_family",
			"dependency" => Array( 'element' => "quote_icon_font", 'value' => 'font_family' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Quote Icon Pack", 'borderland' ),
			"param_name"  => "quote_icon_pack",
			"value"       => array_merge( array( "" => "" ), $icon_collections->getIconCollectionsVCExclude( 'linea_icons' ) ),
			'save_always' => true,
			"dependency"  => Array( 'element' => "quote_icon_font", 'value' => 'with_icon' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Quote Icon Color", 'borderland' ),
			"param_name" => "quote_icon_color",
			"dependency" => array( 'element' => "show_quote_icon", 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Quote Icon Size (px)", 'borderland' ),
			"param_name" => "quote_icon_size",
			"dependency" => array( 'element' => "show_quote_icon", 'value' => 'yes' )
		)
	)
) );

/*** Custom Font ***/

vc_map( array(
	"name" => esc_html__( "Custom Font", 'borderland' ),
	"base"                      => "no_custom_font",
	"icon"                      => "icon-wpb-custom-font extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Font family", 'borderland' ),
			"param_name" => "font_family",
			"value"      => ""
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Font size", 'borderland' ),
			"param_name"  => "font_size",
			"value"       => "",
			"save_always" => true
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Line height", 'borderland' ),
			"param_name"  => "line_height",
			"value"       => "",
			"save_always" => true
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Font Style", 'borderland' ),
			"param_name"  => "font_style",
			"value"       => array(
				esc_html__( "Normal", 'borderland' ) => "normal",
				esc_html__( "Italic", 'borderland' ) => "italic"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Text Align", 'borderland' ),
			"param_name"  => "text_align",
			"value"       => array(
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Center", 'borderland' ) => "center",
				esc_html__( "Right", 'borderland' ) => "right"
			),
			'save_always' => true,
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Font weight", 'borderland' ),
			"param_name"  => "font_weight",
			"value"       => "300",
			"save_always" => true
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Color", 'borderland' ),
			"param_name" => "color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Text decoration", 'borderland' ),
			"param_name"  => "text_decoration",
			"value"       => array(
				esc_html__( "None", 'borderland' ) => "none",
				esc_html__( "Underline", 'borderland' ) => "underline",
				esc_html__( "Overline", 'borderland' ) => "overline",
				esc_html__( "Line Through", 'borderland' ) => "line-through"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Text transform", 'borderland' ),
			"param_name"  => "text_transform",
			"value"       => array(
				esc_html__( "None", 'borderland' ) => "none",
				esc_html__( "Uppercase", 'borderland' ) => "uppercase",
				esc_html__( "Lowercase", 'borderland' ) => "lowercase",
				esc_html__( "Capitalize", 'borderland' ) => "capitalize"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Text shadow", 'borderland' ),
			"param_name"  => "text_shadow",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Letter Spacing (px)", 'borderland' ),
			"param_name" => "letter_spacing",
			"value"      => ""
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Padding (px)", 'borderland' ),
			"param_name"  => "padding",
			"value"       => "0",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Margin (px)", 'borderland' ),
			"param_name" => "margin",
			"value"      => "0"
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show in border box", 'borderland' ),
			"param_name"  => "show_in_border_box",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Border Color", 'borderland' ),
			"param_name" => "border_color",
			"dependency" => array( 'element' => 'show_in_border_box', 'value' => 'yes' )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Border Thickness (px)", 'borderland' ),
			"param_name" => "border_width",
			"value"      => "",
			"dependency" => array( 'element' => 'show_in_border_box', 'value' => 'yes' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text background Color", 'borderland' ),
			"param_name" => "text_background_color",
			"value"      => "",
			"dependency" => array( 'element' => 'show_in_border_box', 'value' => 'yes' )
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Text padding (px)", 'borderland' ),
			"param_name"  => "text_padding",
			"value"       => "",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
			"dependency"  => array( 'element' => 'show_in_border_box', 'value' => 'yes' )
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
		)
	)
) );

/*** Button shortcode **/

vc_map( array(
		"name" => esc_html__( "Button", 'borderland' ),
		"base"                      => "no_button",
		"category" => esc_html__( 'by Elated', 'borderland' ),
		"icon"                      => "icon-wpb-button extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params"                    => array_merge(
			array(
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Size", 'borderland' ),
					"param_name"  => "size",
					"value"       => array(
						esc_html__( "Default", 'borderland' ) => "",
						esc_html__( "Small", 'borderland' ) => "small",
						esc_html__( "Medium", 'borderland' ) => "medium",
						esc_html__( "Large", 'borderland' ) => "large",
						esc_html__( "Extra Large", 'borderland' ) => "big_large",
						esc_html__( "Extra Large Full Width", 'borderland' ) => "big_large_full_width"
					),
					'save_always' => true
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Style", 'borderland' ),
					"param_name" => "style",
					"value"      => array(
						esc_html__( "Default", 'borderland' ) => "",
						esc_html__( "White", 'borderland' ) => "white"
					)
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Text", 'borderland' ),
					"param_name"  => "text",
					"description" => esc_html__( "Default text is button", 'borderland' )
				)
			),
			$icon_collections->getVCParamsArray( array(), '', true ),
			array(
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Icon Position", 'borderland' ),
					"param_name"  => "icon_position",
					"value"       => array(
						esc_html__( "Right", 'borderland' ) => "right",
						esc_html__( "Left", 'borderland' ) => "left"
					),
					'save_always' => true,
					"dependency"  => Array( 'element' => $icon_collections->iconPackParamName, 'not_empty' => true )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'borderland' ),
					"param_name" => "icon_color",
					"dependency" => Array( 'element' => $icon_collections->iconPackParamName, 'not_empty' => true )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Background Color", 'borderland' ),
					"param_name" => "icon_background_color",
					"dependency" => Array( 'element' => $icon_collections->iconPackParamName, 'not_empty' => true )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Background Hover Color", 'borderland' ),
					"param_name" => "icon_background_hover_color",
					"dependency" => Array( 'element' => $icon_collections->iconPackParamName, 'not_empty' => true )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Link", 'borderland' ),
					"param_name" => "link"
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Link Target", 'borderland' ),
					"param_name"  => "target",
					"value"       => array(
						esc_html__( "Self", 'borderland' ) => "_self",
						esc_html__( "Blank", 'borderland' ) => "_blank"
					),
					'save_always' => true
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Color", 'borderland' ),
					"param_name" => "color"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Hover Color", 'borderland' ),
					"param_name" => "hover_color"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Background Color", 'borderland' ),
					"param_name" => "background_color"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Hover Background Color", 'borderland' ),
					"param_name" => "hover_background_color"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Border Color", 'borderland' ),
					"param_name" => "border_color"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Hover Border Color", 'borderland' ),
					"param_name" => "hover_border_color"
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Border Width (px)", 'borderland' ),
					"param_name" => "border_width"
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Font Style", 'borderland' ),
					"param_name" => "font_style",
					"value"      => array(
						""       => "",
						esc_html__( "Normal", 'borderland' ) => "normal",
						esc_html__( "Italic", 'borderland' ) => "italic"
					)
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Font Weight", 'borderland' ),
					"param_name"  => "font_weight",
					"value"       => $font_weight_array,
					'save_always' => true
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Margin", 'borderland' ),
					"param_name"  => "margin",
					"description" => esc_html__( "Please insert margin in format: 0px 0px 1px 0px", 'borderland' ),
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Left/Right Padding (px)", 'borderland' ),
					"param_name" => "padding",
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Border radius", 'borderland' ),
					"param_name"  => "border_radius",
					"description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4 ", 'borderland' ),
				)
			)
		)
	)
);

/*** Counter ***/

vc_map( array(
	"name" => esc_html__( "Counter", 'borderland' ),
	"base"                      => "no_counter",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	'admin_enqueue_css'         => array( borderland_elated_get_skin_uri() . '/assets/css/eltdf-vc-extend.css' ),
	"icon"                      => "icon-wpb-counter extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Type", 'borderland' ),
			"param_name"  => "type",
			"value"       => array(
				esc_html__( "Zero Counter", 'borderland' ) => "zero",
				esc_html__( "Random Counter", 'borderland' ) => "random"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Box", 'borderland' ),
			"param_name" => "box",
			"value"      => array(
				""    => "",
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Box Border Color", 'borderland' ),
			"param_name" => "box_border_color",
			"dependency" => array( 'element' => "box", 'value' => array( 'yes' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Position", 'borderland' ),
			"param_name"  => "position",
			"value"       => array(
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Right", 'borderland' ) => "right",
				esc_html__( "Center", 'borderland' ) => "center"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Digit", 'borderland' ),
			"param_name" => "digit",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Underline Digit", 'borderland' ),
			"param_name" => "underline_digit",
			"value"      => array(
				""    => "",
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Digit Font Size (px)", 'borderland' ),
			"param_name" => "font_size",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Digit Font Weight", 'borderland' ),
			"param_name" => "font_weight",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Thin 100", 'borderland' ) => "100",
				esc_html__( "Extra-Light 200", 'borderland' ) => "200",
				esc_html__( "Light 300", 'borderland' ) => "300",
				esc_html__( "Regular 400", 'borderland' ) => "400",
				esc_html__( "Medium 500", 'borderland' ) => "500",
				esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
				esc_html__( "Bold 700", 'borderland' ) => "700",
				esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
				esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Digit Letter Spacing (px)", 'borderland' ),
			"param_name" => "digit_letter_spacing",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Digit Font Color", 'borderland' ),
			"param_name" => "font_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title Size (px)", 'borderland' ),
			"param_name" => "title_size",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text", 'borderland' ),
			"param_name" => "text",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text Size (px)", 'borderland' ),
			"param_name" => "text_size",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Text Font Weight", 'borderland' ),
			"param_name" => "text_font_weight",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Thin 100", 'borderland' ) => "100",
				esc_html__( "Extra-Light 200", 'borderland' ) => "200",
				esc_html__( "Light 300", 'borderland' ) => "300",
				esc_html__( "Regular 400", 'borderland' ) => "400",
				esc_html__( "Medium 500", 'borderland' ) => "500",
				esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
				esc_html__( "Bold 700", 'borderland' ) => "700",
				esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
				esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
			)
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Text Transform", 'borderland' ),
			"param_name" => "text_transform",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "None", 'borderland' ) => "none",
				esc_html__( "Capitalize", 'borderland' ) => "capitalize",
				esc_html__( "Uppercase", 'borderland' ) => "uppercase",
				esc_html__( "Lowercase", 'borderland' ) => "lowercase"
			),
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color", 'borderland' ),
			"param_name" => "text_color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Separator", 'borderland' ),
			"param_name"  => "separator",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Separator Position", 'borderland' ),
			"param_name" => "separator_position",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Above Title", 'borderland' ) => "above_title",
				esc_html__( "Under Title", 'borderland' ) => "under_title",
			),
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'borderland' ),
			"param_name" => "separator_color",
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Separator Thickness (px)", 'borderland' ),
			"param_name" => "separator_thickness",
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Separator Border Style", 'borderland' ),
			"param_name" => "separator_border_style",
			"value"      => array(
				""       => "",
				esc_html__( "Dashed", 'borderland' ) => "dashed",
				esc_html__( "Solid", 'borderland' ) => "solid"
			),
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Padding Bottom(px)", 'borderland' ),
			"param_name" => "padding_bottom",
		),
	)
) );

/*** Countdown ***/

vc_map( array(
	"name" => esc_html__( "Countdown", 'borderland' ),
	"base"                      => "no_countdown",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-countdown extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Year", 'borderland' ),
			"param_name"  => "year",
			"value"       => array(
				""     => "",
				esc_html__( "2014", 'borderland' ) => "2014",
				esc_html__( "2015", 'borderland' ) => "2015",
				esc_html__( "2016", 'borderland' ) => "2016",
				esc_html__( "2017", 'borderland' ) => "2017",
				esc_html__( "2018", 'borderland' ) => "2018",
				esc_html__( "2019", 'borderland' ) => "2019",
				esc_html__( "2020", 'borderland' ) => "2020"
			),
			"save_always" => true
		),
		
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Month", 'borderland' ),
			"param_name"  => "month",
			"value"       => array(
				""          => "",
				esc_html__( "January", 'borderland' ) => "1",
				esc_html__( "February", 'borderland' ) => "2",
				esc_html__( "March", 'borderland' ) => "3",
				esc_html__( "April", 'borderland' ) => "4",
				esc_html__( "May", 'borderland' ) => "5",
				esc_html__( "June", 'borderland' ) => "6",
				esc_html__( "July", 'borderland' ) => "7",
				esc_html__( "August", 'borderland' ) => "8",
				esc_html__( "September", 'borderland' ) => "9",
				esc_html__( "October", 'borderland' ) => "10",
				esc_html__( "November", 'borderland' ) => "11",
				esc_html__( "December", 'borderland' ) => "12"
			),
			"save_always" => true
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Day", 'borderland' ),
			"param_name"  => "day",
			"value"       => array(
				""   => "",
				"1"  => "1",
				"2"  => "2",
				"3"  => "3",
				"4"  => "4",
				"5"  => "5",
				"6"  => "6",
				"7"  => "7",
				"8"  => "8",
				"9"  => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
			),
			"save_always" => true
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Hour", 'borderland' ),
			"param_name"  => "hour",
			"value"       => array(
				""   => "",
				"0"  => "0",
				"1"  => "1",
				"2"  => "2",
				"3"  => "3",
				"4"  => "4",
				"5"  => "5",
				"6"  => "6",
				"7"  => "7",
				"8"  => "8",
				"9"  => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24"
			),
			"save_always" => true
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Minute", 'borderland' ),
			"param_name"  => "minute",
			"value"       => array(
				""   => "",
				"0"  => "0",
				"1"  => "1",
				"2"  => "2",
				"3"  => "3",
				"4"  => "4",
				"5"  => "5",
				"6"  => "6",
				"7"  => "7",
				"8"  => "8",
				"9"  => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
				"32" => "32",
				"33" => "33",
				"34" => "34",
				"35" => "35",
				"36" => "36",
				"37" => "37",
				"38" => "38",
				"39" => "39",
				"40" => "40",
				"41" => "41",
				"42" => "42",
				"43" => "43",
				"44" => "44",
				"45" => "45",
				"46" => "46",
				"47" => "47",
				"48" => "48",
				"49" => "49",
				"50" => "50",
				"51" => "51",
				"52" => "52",
				"53" => "53",
				"54" => "54",
				"55" => "55",
				"56" => "56",
				"57" => "57",
				"58" => "58",
				"59" => "59",
				"60" => "60",
			),
			"save_always" => true
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Month Label", 'borderland' ),
			"param_name" => "month_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Day Label", 'borderland' ),
			"param_name" => "day_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Hour Label", 'borderland' ),
			"param_name" => "hour_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Minute Label", 'borderland' ),
			"param_name" => "minute_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Second Label", 'borderland' ),
			"param_name" => "second_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Month Singular Label", 'borderland' ),
			"param_name" => "month_singular_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Day Singular Label", 'borderland' ),
			"param_name" => "day_singular_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Hour Singular Label", 'borderland' ),
			"param_name" => "hour_singular_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Minute Singular Label", 'borderland' ),
			"param_name" => "minute_singular_label",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Second Singular Label", 'borderland' ),
			"param_name" => "second_singular_label",
		),
		array(
			"type"        => "colorpicker",
			"heading" => esc_html__( "Color", 'borderland' ),
			"param_name"  => "color",
			"description" => esc_html__( "For digits, labels and separators", 'borderland' ),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Digit Font Size (px)", 'borderland' ),
			"param_name" => "digit_font_size",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Label Font Size (px)", 'borderland' ),
			"param_name" => "label_font_size",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Font Weight", 'borderland' ),
			"param_name"  => "font_weight",
			"description" => esc_html__( "For both digits and labels", 'borderland' ),
			"value"       => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Thin 100", 'borderland' ) => "100",
				esc_html__( "Extra-Light 200", 'borderland' ) => "200",
				esc_html__( "Light 300", 'borderland' ) => "300",
				esc_html__( "Regular 400", 'borderland' ) => "400",
				esc_html__( "Medium 500", 'borderland' ) => "500",
				esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
				esc_html__( "Bold 700", 'borderland' ) => "700",
				esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
				esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
			)
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show separator", 'borderland' ),
			"param_name"  => "show_separator",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "hide_separator",
				esc_html__( "Yes", 'borderland' ) => "show_separator"
			),
			'save_always' => true
		),
	)
) );

/*** Pie Chart ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart", 'borderland' ),
	"base"                      => "no_pie_chart",
	"icon"                      => "icon-wpb-pie-chart extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Size(px)", 'borderland' ),
			"param_name" => "size",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Type of Central text", 'borderland' ),
			"param_name"  => "type_of_central_text",
			"value"       => array(
				esc_html__( "Title", 'borderland' ) => "title",
				esc_html__( "Percent", 'borderland' ) => "percent"
			),
			'save_always' => true
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage", 'borderland' ),
			"param_name" => "percent",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Percentage Mark", 'borderland' ),
			"param_name"  => "show_percent_mark",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "with_mark",
				esc_html__( "No", 'borderland' ) => "without_mark"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Percentage Color", 'borderland' ),
			"param_name" => "percentage_color",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Font", 'borderland' ),
			"param_name" => "percent_font_family",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Font Size", 'borderland' ),
			"param_name" => "percent_font_size",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Percentage Font weight", 'borderland' ),
			"param_name" => "percent_font_weight",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Thin 100", 'borderland' ) => "100",
				esc_html__( "Extra-Light 200", 'borderland' ) => "200",
				esc_html__( "Light 300", 'borderland' ) => "300",
				esc_html__( "Regular 400", 'borderland' ) => "400",
				esc_html__( "Medium 500", 'borderland' ) => "500",
				esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
				esc_html__( "Bold 700", 'borderland' ) => "700",
				esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
				esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
			),
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Bar Active Color", 'borderland' ),
			"param_name" => "active_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Bar Inactive Color", 'borderland' ),
			"param_name" => "noactive_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Pie Chart Line Width (px)", 'borderland' ),
			"param_name" => "line_width",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Chart Alignment", 'borderland' ),
			"param_name" => "chart_alignment",
			"value"      => array(
				esc_html__( "Center", 'borderland' ) => "",
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Right", 'borderland' ) => "right"
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Margin below chart (px)", 'borderland' ),
			"param_name" => "margin_below_chart",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text", 'borderland' ),
			"param_name" => "text",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color", 'borderland' ),
			"param_name" => "text_color",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Separator", 'borderland' ),
			"param_name"  => "separator",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'borderland' ),
			"param_name" => "separator_color",
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Separator Border Style", 'borderland' ),
			"param_name" => "separator_border_style",
			"value"      => array(
				""       => "",
				esc_html__( "Dashed", 'borderland' ) => "dashed",
				esc_html__( "Solid", 'borderland' ) => "solid"
			),
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		)
	)
) );

/*** Pie Chart 2 (Pie) ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart 2 (Pie)", 'borderland' ),
	"base"                      => "no_pie_chart2",
	"icon"                      => "icon-wpb-pie-chart2 extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Width", 'borderland' ),
			"param_name" => "width",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Height", 'borderland' ),
			"param_name" => "height",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Legend Text Color", 'borderland' ),
			"param_name" => "color",
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"       =>  esc_html__( "15,#555,Legend One; 35,#222,Legend Two; 50,#303030,Legend Three", 'borderland' ),
		)
	
	)
) );

/*** Pie Chart 3 (Doughnut) ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart 3 (Doughnut)", 'borderland' ),
	"base"                      => "no_pie_chart3",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-pie-chart3 extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Width", 'borderland' ),
			"param_name" => "width",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Height", 'borderland' ),
			"param_name" => "height",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Legend Text Color", 'borderland' ),
			"param_name" => "color",
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"       =>  esc_html__( "15,#555,Legend One; 35,#222,Legend Two; 50,#303030,Legend Three", 'borderland' ),
		)
	
	)
) );

/*** Pie Chart With Icon ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart With Icon", 'borderland' ),
	"base"                      => "no_pie_chart_with_icon",
	"icon"                      => "icon-wpb-pie-chart-with-icon extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Size(px)", 'borderland' ),
				"param_name" => "size",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Percentage", 'borderland' ),
				"param_name" => "percent",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Bar Active Color", 'borderland' ),
				"param_name" => "active_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Bar Inactive Color", 'borderland' ),
				"param_name" => "noactive_color",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'borderland' ),
				"param_name" => "line_width",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title", 'borderland' ),
				"param_name" => "title",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Title Color", 'borderland' ),
				"param_name" => "title_color",
				"dependency" => array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Title Tag", 'borderland' ),
				"param_name" => "title_tag",
				"value"      => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"dependency" => array( 'element' => "title", 'not_empty' => true )
			),
		),
		$icon_collections->getVCParamsArray(),
		array(
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
				"dependency" => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Custom Icon Size (px)", 'borderland' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Size", 'borderland' ),
				"param_name"  => "icon_size",
				"value"       => $icon_collections->getIconSizesArray(),
				'save_always' => true,
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Text", 'borderland' ),
				"param_name" => "text",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Text Color", 'borderland' ),
				"param_name" => "text_color",
				"dependency" => array( 'element' => "text", 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Separator", 'borderland' ),
				"param_name"  => "separator",
				"value"       => array(
					esc_html__( "Yes", 'borderland' ) => "yes",
					esc_html__( "No", 'borderland' ) => "no"
				),
				'save_always' => true,
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Separator Color", 'borderland' ),
				"param_name" => "separator_color",
				"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Separator Border Style", 'borderland' ),
				"param_name" => "separator_border_style",
				"value"      => array(
					""       => "",
					esc_html__( "Dashed", 'borderland' ) => "dashed",
					esc_html__( "Solid", 'borderland' ) => "solid"
				),
				"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
			)
		)
	)

) );

/** Horizontal progress bar shortcode ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Horizontal", 'borderland' ),
	"base"                      => "no_progress_bar",
	"icon"                      => "icon-wpb-progress-bar extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title Custom Size (px)", 'borderland' ),
			"param_name" => "title_custom_size",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title Padding Bottom(px)", 'borderland' ),
			"param_name" => "title_padding_bottom",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage", 'borderland' ),
			"param_name" => "percent",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Percentage Number", 'borderland' ),
			"param_name"  => "show_percent_number",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Percentage Mark", 'borderland' ),
			"param_name"  => "show_percent_mark",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "with_mark",
				esc_html__( "No", 'borderland' ) => "without_mark"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Percentage Type", 'borderland' ),
			"param_name"  => "percentage_type",
			"value"       => array(
				esc_html__( "Floating", 'borderland' ) => "floating",
				esc_html__( "Static", 'borderland' ) => "static"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Bar Height (px)", 'borderland' ),
			"param_name" => "percentage_bar_height",
			"dependency" => array( 'element' => "percentage_type", 'value' => array( 'floating' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Floating Type", 'borderland' ),
			"param_name"  => "floating_type",
			"value"       => array(
				esc_html__( "Outside Floating", 'borderland' ) => "floating_outside",
				esc_html__( "Inside Floating", 'borderland' ) => "floating_inside"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => "percentage_type", 'value' => array( 'floating' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Percentage Color", 'borderland' ),
			"param_name" => "percent_color",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Percentage Background Color", 'borderland' ),
			"param_name" => "percent_background_color",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Border Radius (px)", 'borderland' ),
			"param_name" => "percent_border_radius",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Font Size", 'borderland' ),
			"param_name" => "percent_font_size",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Percentage Font weight", 'borderland' ),
			"param_name" => "percent_font_weight",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Thin 100", 'borderland' ) => "100",
				esc_html__( "Extra-Light 200", 'borderland' ) => "200",
				esc_html__( "Light 300", 'borderland' ) => "300",
				esc_html__( "Regular 400", 'borderland' ) => "400",
				esc_html__( "Medium 500", 'borderland' ) => "500",
				esc_html__( "Semi-Bold 600", 'borderland' ) => "600",
				esc_html__( "Bold 700", 'borderland' ) => "700",
				esc_html__( "Extra-Bold 800", 'borderland' ) => "800",
				esc_html__( "Ultra-Bold 900", 'borderland' ) => "900"
			),
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Active Background Color", 'borderland' ),
			"param_name" => "active_background_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Active Border Color", 'borderland' ),
			"param_name" => "active_border_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Inactive Background Color", 'borderland' ),
			"param_name" => "noactive_background_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Progress Bar Height (px)", 'borderland' ),
			"param_name" => "height",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Progress Bar Border Radius)", 'borderland' ),
			"param_name" => "border_radius",
		)
	)
) );

/*** Vertical progress bar shortcode ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Vertical", 'borderland' ),
	"base"                      => "no_progress_bar_vertical",
	"icon"                      => "icon-wpb-vertical-progress-bar extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title Size", 'borderland' ),
			"param_name" => "title_size",
		),
		array(
			"type"        => "textfield",
			"heading" => esc_html__( "Progress Bar Height(px)", 'borderland' ),
			"param_name"  => "bar_content_height",
			"description" => esc_html__( "Default value is 190px", 'borderland' )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Bar Color", 'borderland' ),
			"param_name" => "bar_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Bar Border Color", 'borderland' ),
			"param_name" => "bar_border_color",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Background Color", 'borderland' ),
			"param_name" => "background_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Top Border Radius", 'borderland' ),
			"param_name" => "border_radius",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percent", 'borderland' ),
			"param_name" => "percent",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Percentage Number", 'borderland' ),
			"param_name"  => "show_percent_number",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Show Percentage Mark", 'borderland' ),
			"param_name"  => "show_percent_mark",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "with_mark",
				esc_html__( "No", 'borderland' ) => "without_mark"
			),
			'save_always' => true,
			"dependency"  => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Percentage Text Size", 'borderland' ),
			"param_name" => "percentage_text_size",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Percentage Color", 'borderland' ),
			"param_name" => "percent_color",
			"dependency" => Array( 'element' => "percent", 'not_empty' => true )
		),
		array(
			"type"       => "textarea",
			"heading" => esc_html__( "Text", 'borderland' ),
			"param_name" => "text",
			"value"      => "",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color", 'borderland' ),
			"param_name" => "text_color",
			"dependency" => Array( 'element' => "text", 'not_empty' => true )
		)
	)
) );

/*** Progress Bar Icon ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Icon", 'borderland' ),
	"base"                      => "no_progress_bar_icon",
	"icon"                      => "icon-wpb-progress-bar-icon extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Number of Icons", 'borderland' ),
				"param_name" => "icons_number",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Number of Active Icons", 'borderland' ),
				"param_name" => "active_number",
			)
		),
		$icon_collections->getVCParamsArray(),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Size", 'borderland' ),
				"param_name"  => "size",
				"value"       => array(
					esc_html__( "Tiny", 'borderland' ) => "tiny",
					esc_html__( "Small", 'borderland' ) => "small",
					esc_html__( "Medium", 'borderland' ) => "medium",
					esc_html__( "Large", 'borderland' ) => "large",
					esc_html__( "Very Large", 'borderland' ) => "very_large",
					esc_html__( "Custom", 'borderland' ) => "custom"
				),
				'save_always' => true,
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'borderland' ),
				"param_name" => "custom_size",
				"value"      => "",
				"dependency" => array( 'element' => 'size', 'value' => array( 'custom' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
				'save_always' => true,
				"dependency"  => array(
					'element' => 'size',
					'value'   => array( 'tiny', 'small', 'medium', 'large', 'very_large' )
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Active Color", 'borderland' ),
				"param_name" => "icon_active_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Color", 'borderland' ),
				"param_name" => "background_color",
				"dependency" => array( 'element' => "type", 'value' => array( 'square', 'circle' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Active Color", 'borderland' ),
				"param_name" => "background_active_color",
				"dependency" => array( 'element' => "type", 'value' => array( 'square', 'circle' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name"  => "border_color",
				"description" => esc_html__( "Only for Square and Circle type", 'borderland' ),
				"dependency"  => array( 'element' => "type", 'value' => array( 'square', 'circle' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Border Active Color", 'borderland' ),
				"param_name"  => "border_active_color",
				"description" => esc_html__( "Only for Square and Circle type", 'borderland' ),
				"dependency"  => array( 'element' => "type", 'value' => array( 'square', 'circle' ) )
			)
		)
	)
) );

/*** Line Graph shortcode ***/

vc_map( array(
	"name" => esc_html__( "Line Graph", 'borderland' ),
	"base"                      => "no_line_graph",
	"icon"                      => "icon-wpb-line-graph extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Type", 'borderland' ),
			"param_name" => "type",
			"value"      => array(
				""              => "",
				esc_html__( "Rounded edges", 'borderland' ) => "rounded",
				esc_html__( "Sharp edges", 'borderland' ) => "sharp"
			),
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Width", 'borderland' ),
			"param_name" => "width",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Height", 'borderland' ),
			"param_name" => "height",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Custom Color", 'borderland' ),
			"param_name" => "custom_color",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Scale steps", 'borderland' ),
			"param_name" => "scale_steps",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Scale step width", 'borderland' ),
			"param_name" => "scale_step_width",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Labels", 'borderland' ),
			"param_name" => "labels",
			"value"       =>  esc_html__( "Label 1, Label 2, Label 3", 'borderland' )
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"       =>  esc_html__( "#303030,Legend One,1,5,10;#222,Legend Two,3,7,20;#555,Legend Three,10,2,34", 'borderland' )
		)
	)
) );

/*** Ordered List ***/

vc_map( array(
	"name" => esc_html__( "List - Ordered", 'borderland' ),
	"base"                      => "no_ordered_list",
	"icon"                      => "icon-wpb-ordered-list extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"      => "<ol><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ol>",
		)
	
	)
) );

/*** Unordered List ***/

vc_map( array(
	"name" => esc_html__( "List - Unordered", 'borderland' ),
	"base"                      => "no_unordered_list",
	"icon"                      => "icon-wpb-unordered-list extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Style", 'borderland' ),
			"param_name"  => "style",
			"value"       => array(
				esc_html__( "Circle", 'borderland' ) => "circle",
				esc_html__( "Number", 'borderland' ) => "number",
				esc_html__( "Line", 'borderland' ) => "line"
			),
			'save_always' => true,
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Number Type", 'borderland' ),
			"param_name"  => "number_type",
			"value"       => array(
				esc_html__( "Circle", 'borderland' ) => "circle_number",
				esc_html__( "Transparent", 'borderland' ) => "transparent_number"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => "style", 'value' => array( 'number' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Animate List", 'borderland' ),
			"param_name"  => "animate",
			"value"       => array(
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Font Weight", 'borderland' ),
			"param_name" => "font_weight",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "Light", 'borderland' ) => "light",
				esc_html__( "Normal", 'borderland' ) => "normal",
				esc_html__( "Bold", 'borderland' ) => "bold"
			),
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"      => "<ul><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ul>",
		)
	)
) );

/*** Icon List Item ***/

vc_map( array(
	"name" => esc_html__( "Icon List Item", 'borderland' ),
	"base"     => "no_icon_list_item",
	"icon"     => "icon-wpb-icon-list-item extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"params"   => array_merge(
		$icon_collections->getVCParamsArray(),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Type", 'borderland' ),
				"param_name"  => "icon_type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal_icon_list",
					esc_html__( "Small", 'borderland' ) => "small_icon_list"
				),
				'save_always' => true,
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Icon Margin Right (px)", 'borderland' ),
				"param_name" => "icon_margin_right",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Border Type", 'borderland' ),
				"param_name" => "border_type",
				"value"      => array(
					""       => "",
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name" => "border_color",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title", 'borderland' ),
				"param_name" => "title",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Title Color", 'borderland' ),
				"param_name" => "title_color",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title size (px)", 'borderland' ),
				"param_name" => "title_size",
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Title Font Weight (px)", 'borderland' ),
				"param_name"  => "title_font_weight",
				"value"       => $font_weight_array,
				'save_always' => true,
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Bottom Margin (px)", 'borderland' ),
				"param_name" => "bottom_margin",
			)
		)
	)
) );

/*** Icon Shortcode ***/

vc_map( array(
	"name" => esc_html__( "Icon", 'borderland' ),
	"base"                      => "no_icons",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-icons extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		$icon_collections->getVCParamsArray(),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Size", 'borderland' ),
				"param_name"  => 'fa_size',
				"value"       => $icon_collections->getIconSizesArray(),
				'save_always' => true,
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'borderland' ),
				"param_name" => "custom_size",
				"value"      => ""
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
				'save_always' => true,
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Rotated Shape", 'borderland' ),
				"param_name"  => "rotated_shape",
				"value"       => array(
					esc_html__( "No", 'borderland' ) => "no",
					esc_html__( "Yes", 'borderland' ) => "yes"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "type", 'value' => "square" )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Border radius", 'borderland' ),
				"param_name"  => "border_radius",
				"description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4 ", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Shape Size (px)", 'borderland' ),
				"param_name" => 'shape_size',
				"value"      => "",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Position", 'borderland' ),
				"param_name" => "position",
				"value"      => array(
					esc_html__( "Normal", 'borderland' ) => "",
					esc_html__( "Left", 'borderland' ) => "left",
					esc_html__( "Center", 'borderland' ) => "center",
					esc_html__( "Right", 'borderland' ) => "right"
				),
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name"  => "border_color",
				"dependency"  => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) ),
				"description" => esc_html__( "Same color for Inner Border if enabled", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Border Width", 'borderland' ),
				"param_name"  => "border_width",
				"description" => esc_html__( "Default value is 1. Enter just number. Omit pixels", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Color", 'borderland' ),
				"param_name" => "background_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Hover Icon Color", 'borderland' ),
				"param_name" => "hover_icon_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Hover Border Color", 'borderland' ),
				"param_name" => "hover_border_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Hover Background Color", 'borderland' ),
				"param_name" => "hover_background_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Shadow", 'borderland' ),
				"param_name"  => "icon_shadow",
				"value"       => array(
					esc_html__( "No", 'borderland' ) => "no",
					esc_html__( "Yes", 'borderland' ) => "yes"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Shadow Color", 'borderland' ),
				"param_name" => "shadow_color",
				"dependency" => Array( 'element' => "icon_shadow", 'value' => 'yes' )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Hover Shadow Color", 'borderland' ),
				"param_name" => "hover_shadow_color",
				"dependency" => Array( 'element' => "icon_shadow", 'value' => 'yes' )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Inner Border", 'borderland' ),
				"param_name"  => "inner_border",
				"value"       => array(
					esc_html__( "No", 'borderland' ) => "no",
					esc_html__( "Yes", 'borderland' ) => "yes"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Margin", 'borderland' ),
				"param_name"  => "margin",
				"description" => esc_html__( "Margin (top right bottom left)", 'borderland' )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Icon Animation", 'borderland' ),
				"param_name" => "icon_animation",
				"value"      => array(
					esc_html__( "No", 'borderland' ) => "",
					esc_html__( "Yes", 'borderland' ) => "eltd_icon_animation"
				),
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'borderland' ),
				"param_name" => "icon_animation_delay",
				"value"      => "",
				"dependency" => Array( 'element' => "icon_animation", 'value' => 'eltd_icon_animation' )
			),
			array(
				"type"       => "checkbox",
				"heading" => esc_html__( "Use For Back To Top", 'borderland' ),
				"value"      => array( esc_html__( "Use this icon as Back to Top button?", 'borderland' ) => "yes" ),
				"param_name" => "back_to_top_icon",
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
				"value"      => ""
			),
			array(
				"type"        => "checkbox",
				"heading" => esc_html__( "Use Link as Anchor", 'borderland' ),
				"value"       => array( esc_html__( "Use this icon as Anchor?", 'borderland' ) => "yes" ),
				"param_name"  => "anchor_icon",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'borderland' ),
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Target", 'borderland' ),
				"param_name"  => "target",
				"value"       => array(
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			)
		)
	)
) );

/*** Social icon ***/

vc_map( array(
	"name" => esc_html__( "Social Icons", 'borderland' ),
	"base"                      => "no_social_icons",
	"icon"                      => "icon-wpb-social-icons extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal_social",
					esc_html__( "Circle", 'borderland' ) => "circle_social",
					esc_html__( "Square", 'borderland' ) => "square_social"
				),
				'save_always' => true,
			)
		),
		$icon_collections->getSocialVCParamsArray( array(), '', false, 'linea_icons' ),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Size", 'borderland' ),
				"param_name"  => "size",
				"value"       => array(
					esc_html__( "Tiny", 'borderland' ) => "tiny",
					esc_html__( "Small", 'borderland' ) => "small",
					esc_html__( "Medium", 'borderland' ) => "medium",
					esc_html__( "Large", 'borderland' ) => "large",
					esc_html__( "Huge", 'borderland' ) => "huge"
				),
				'save_always' => true,
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
				"value"      => ""
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Target", 'borderland' ),
				"param_name"  => "target",
				"value"       => array(
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color"
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Color", 'borderland' ),
				"param_name" => "background_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle_social', 'square_social' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name" => "border_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle_social', 'square_social' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Hover Color", 'borderland' ),
				"param_name" => "icon_hover_color",
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Background Hover Color", 'borderland' ),
				"param_name" => "background_hover_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle_social', 'square_social' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Border Hover Color", 'borderland' ),
				"param_name" => "border_hover_color",
				"dependency" => Array( 'element' => "type", 'value' => array( 'circle_social', 'square_social' ) )
			)
		)
	)
) );

/*** Icon with Text ***/

vc_map( array(
	"name" => esc_html__( "Icon With Text", 'borderland' ),
	"base"                      => "no_icon_text",
	"icon"                      => "icon-wpb-icon-with-text extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Box type", 'borderland' ),
				"param_name"  => "box_type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "Icon in a box", 'borderland' ) => "icon_in_a_box"
				),
				'save_always' => true,
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Box Border", 'borderland' ),
				"param_name"  => "box_border",
				"value"       => array(
					esc_html__( "Yes", 'borderland' ) => "yes",
					esc_html__( "No", 'borderland' ) => "no"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "box_type", 'value' => array( 'icon_in_a_box' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Box Border Color", 'borderland' ),
				"param_name" => "box_border_color",
				"dependency" => Array( 'element' => "box_type", 'value' => array( 'icon_in_a_box' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Box Background Color", 'borderland' ),
				"param_name" => "box_background_color",
				"dependency" => Array( 'element' => "box_type", 'value' => array( 'icon_in_a_box' ) )
			)
		),
		$icon_collections->getVCParamsArray(),
		array(
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Custom Icon", 'borderland' ),
				"param_name" => "custom_icon"
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Type", 'borderland' ),
				"param_name"  => "icon_type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
				'save_always' => true,
				"description" => esc_html__( "This attribute does not work when Icon Position is Top. In This case Icon Type is Normal", 'borderland' ),
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon border width (px)", 'borderland' ),
				"param_name"  => "icon_border_width",
				"description" => esc_html__( "Enter just number, omit pixels", 'borderland' ),
				"dependency"  => array( 'element' => 'icon_type', 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Size / Icon Space From Text", 'borderland' ),
				"param_name"  => "icon_size",
				"value"       => $icon_collections->getIconSizesArray(),
				'save_always' => true,
				"description" => esc_html__( "This attribute does not work when Icon Position is Top", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Custom Icon Size (px)", 'borderland' ),
				"param_name"  => "custom_icon_size",
				"description" => esc_html__( "Default value is 30", 'borderland' ),
				"dependency"  => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Animation", 'borderland' ),
				"param_name"  => "icon_animation",
				"value"       => array(
					esc_html__( "No", 'borderland' ) => "",
					esc_html__( "Yes", 'borderland' ) => "eltd_icon_animation"
				),
				'save_always' => true
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'borderland' ),
				"param_name" => "icon_animation_delay",
				"value"      => "",
				"dependency" => Array( 'element' => "icon_animation", 'value' => array( 'eltd_icon_animation' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Position", 'borderland' ),
				"param_name"  => "icon_position",
				"value"       => array(
					esc_html__( "Top", 'borderland' ) => "top",
					esc_html__( "Left", 'borderland' ) => "left",
					esc_html__( "Left From Title", 'borderland' ) => "left_from_title",
					esc_html__( "Right", 'borderland' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Icon Position (only for normal box type)", 'borderland' ),
				"dependency"  => Array( 'element' => "box_type", 'value' => array( 'normal' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon Margin", 'borderland' ),
				"param_name"  => "icon_margin",
				"value"       => "",
				"description" => esc_html__( "Margin should be set in a top right bottom left format", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Text Left Padding (px)", 'borderland' ),
				"param_name"  => "text_left_padding",
				"description" => esc_html__( "Default value is 86. Only when Icon Position is Left", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_position", 'value' => array( 'left' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Text Right Padding (px)", 'borderland' ),
				"param_name"  => "text_right_padding",
				"description" => esc_html__( "Default value is 86. Only when Icon Position is Right", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_position", 'value' => array( 'right' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Border Color", 'borderland' ),
				"param_name"  => "icon_border_color",
				"description" => esc_html__( "Only for Square and Circle type", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'square', 'circle' ) )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'borderland' ),
				"param_name"  => "icon_background_color",
				"description" => esc_html__( "Icon Background Color (only for square and circle icon type)", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'square', 'circle' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Separator", 'borderland' ),
				"param_name"  => "separator",
				"value"       => array(
					esc_html__( "No", 'borderland' ) => "no",
					esc_html__( "Yes", 'borderland' ) => "yes",
				),
				'save_always' => true,
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Separator Color", 'borderland' ),
				"param_name" => "separator_color",
				"dependency" => array( 'element' => "separator", 'value' => array( "yes" ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Separator Thickness (px)", 'borderland' ),
				"param_name" => "separator_thickness",
				"dependency" => array( 'element' => "separator", 'value' => array( "yes" ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Separator Size (px)", 'borderland' ),
				"param_name" => "separator_width",
				"dependency" => array( 'element' => "separator", 'value' => array( "yes" ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Separator Alignment", 'borderland' ),
				"param_name"  => "separator_alignment",
				"value"       => array(
					esc_html__( "Center", 'borderland' ) => "none",
					esc_html__( "Left", 'borderland' ) => "left",
					esc_html__( "Right", 'borderland' ) => "right",
				),
				'save_always' => true,
				"dependency"  => array( 'element' => "separator", 'value' => array( "yes" ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title", 'borderland' ),
				"param_name" => "title",
				"value"      => ""
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Title Tag", 'borderland' ),
				"param_name" => "title_tag",
				"value"      => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"dependency" => Array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Title Color", 'borderland' ),
				"param_name" => "title_color",
				"dependency" => Array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Title Top Padding (px)", 'borderland' ),
				"param_name"  => "title_padding",
				"value"       => "",
				"description" => esc_html__( "This attribute is used for boxed type", 'borderland' ),
				"dependency"  => Array( 'element' => "box_type", 'value' => array( 'icon_in_a_box' ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Text", 'borderland' ),
				"param_name" => "text",
				"value"      => ""
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Text Color", 'borderland' ),
				"param_name" => "text_color",
				"dependency" => Array( 'element' => "text", 'not_empty' => true )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
				"value"      => "",
				"dependency" => Array( 'element' => "box_type", 'value' => array( 'normal' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Link Text", 'borderland' ),
				"param_name"  => "link_text",
				"description" => esc_html__( "Default value is READ MORE", 'borderland' ),
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Button Link Text Color", 'borderland' ),
				"param_name" => "link_color",
				"dependency" => Array( 'element' => "link_text", 'not_empty' => true )
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Target", 'borderland' ),
				"param_name" => "target",
				"value"      => array(
					""      => "",
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
				"dependency" => Array( 'element' => "link", 'not_empty' => true )
			)
		)
	)
) );

/*** Separator with Icon ***/

vc_map( array(
	"name" => esc_html__( "Separator with Icon", 'borderland' ),
	"base"                      => "no_separator_with_icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-separator-with-icon extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Separator Line Style", 'borderland' ),
				"param_name"  => "border_style",
				"value"       => array(
					esc_html__( "Solid", 'borderland' ) => "solid",
					esc_html__( "Dashed", 'borderland' ) => "dashed",
					esc_html__( "Dotted", 'borderland' ) => "dotted",
					esc_html__( "Transparent", 'borderland' ) => "transparent"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'borderland' )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Line Color", 'borderland' ),
				"param_name"  => "color",
				"value"       => "",
				"description" => esc_html__( "Choose a color for the separator line", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Line Width (px)", 'borderland' ),
				"param_name"  => "width",
				"value"       => "",
				"description" => esc_html__( "Insert width for the separator line", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Line Thickness (px)", 'borderland' ),
				"param_name"  => "thickness",
				"value"       => "",
				"description" => esc_html__( "Insert thickness for the separator line", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Top Margin (px)", 'borderland' ),
				"param_name"  => "up",
				"value"       => "",
				"description" => esc_html__( "Insert top margin for the separator", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Bottom Margin (px)", 'borderland' ),
				"param_name"  => "down",
				"value"       => "",
				"description" => esc_html__( "Insert bottom margin for the separator", 'borderland' )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Type", 'borderland' ),
				"param_name"  => "type",
				"value"       => array(
					esc_html__( "Default Icon", 'borderland' ) => "with_icon",
					esc_html__( "Custom Icon", 'borderland' ) => "with_custom_icon"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'borderland' )
			),
		),
		$icon_collections->getVCParamsArray( array( 'element' => "type", 'value' => array( 'with_icon' ) ) ),
		array(
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon Custom Size (px)", 'borderland' ),
				"param_name"  => "icon_custom_size",
				"value"       => "",
				"description" => esc_html__( "Insert size for the icon (default value is 20)", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Type", 'borderland' ),
				"param_name"  => "icon_type",
				"value"       => array(
					esc_html__( "Normal", 'borderland' ) => "normal",
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose icon type", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Custom Icon", 'borderland' ),
				"param_name" => "custom_icon",
				"dependency" => Array( 'element' => "type", 'value' => array( 'with_custom_icon' ) )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Position", 'borderland' ),
				"param_name"  => "separator_icon_position",
				"value"       => array(
					esc_html__( "Center", 'borderland' ) => "center",
					esc_html__( "Left", 'borderland' ) => "left",
					esc_html__( "Right", 'borderland' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose position of the icon", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon Margins", 'borderland' ),
				"param_name"  => "icon_margin",
				"description" => esc_html__( "Insert left and right icon margins", 'borderland' )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon Border radius", 'borderland' ),
				"param_name"  => "icon_border_radius",
				"description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default. ", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Shape Size (px)", 'borderland' ),
				"param_name"  => 'icon_shape_size',
				"value"       => "",
				"description" => esc_html__( "Insert size for a shape around the icon", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name"  => "icon_color",
				"description" => esc_html__( "Choose a color for the icon", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Border Color", 'borderland' ),
				"param_name"  => "icon_border_color",
				"description" => esc_html__( "Choose a color for the border around the icon shape", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Icon Border Width", 'borderland' ),
				"param_name"  => "icon_border_width",
				"description" => esc_html__( "Insert border width (just number, omit pixels)", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'borderland' ),
				"param_name"  => "icon_background_color",
				"description" => esc_html__( "Choose a background color for the icon shape", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Hover Icon Color", 'borderland' ),
				"param_name"  => "hover_icon_color",
				"description" => esc_html__( "Choose a hover color for the icon", 'borderland' ),
				"dependency"  => Array( 'element' => "type", 'value' => array( 'with_icon' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Hover Border Color", 'borderland' ),
				"param_name"  => "hover_icon_border_color",
				"description" => esc_html__( "Choose a hover color for the border around the icon shape", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"        => "colorpicker",
				"heading" => esc_html__( "Icon Hover Background Color", 'borderland' ),
				"param_name"  => "hover_icon_background_color",
				"description" => esc_html__( "Choose a background hover color for the icon shape", 'borderland' ),
				"dependency"  => Array( 'element' => "icon_type", 'value' => array( 'circle', 'square' ) )
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
			),
			array(
				"type"        => "checkbox",
				"heading" => esc_html__( "Use Link as Anchor", 'borderland' ),
				"value"       => array( esc_html__( "Use this icon as Anchor?", 'borderland' ) => "yes" ),
				"param_name"  => "icon_anchor",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'borderland' ),
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Target", 'borderland' ),
				"param_name"  => "target",
				"value"       => array(
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
				'save_always' => true,
				"dependency"  => Array( 'element' => "link", 'not_empty' => true )
			)
		)
	)

) );

/*** Social Share ***/

vc_map( array(
	"name" => esc_html__( "Social Share", 'borderland' ),
	"base"                      => "no_social_share",
	"icon"                      => "icon-wpb-social-share extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"show_settings_on_create"   => false
) );

/*** Cover Boxes ***/

vc_map( array(
	"name" => esc_html__( "Cover Boxes", 'borderland' ),
	"base"                      => "no_cover_boxes",
	"icon"                      => "icon-wpb-cover-boxes extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Active element", 'borderland' ),
			"param_name" => "active_element",
			"value"      => ""
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Title tag", 'borderland' ),
			"param_name"  => "title_tag",
			"value"       => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
			"description" => esc_html__( "Choose with heading tag to display for titles", 'borderland' )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Number of items", 'borderland' ),
			"param_name"  => "number_of_items",
			"value"       => array(
				""  => "",
				"2" => "2",
				"3" => "3"
			),
			"description" => esc_html__( "Choose the number of items shown", 'borderland' )
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image 1", 'borderland' ),
			"param_name" => "image1"
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title 1", 'borderland' ),
			"param_name" => "title1",
			"value"      => ""
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color 1", 'borderland' ),
			"param_name" => "title_color1",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text 1", 'borderland' ),
			"param_name" => "text1",
			"value"      => ""
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color 1", 'borderland' ),
			"param_name" => "text_color1",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link 1", 'borderland' ),
			"param_name" => "link1",
			"value"      => ""
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link label 1", 'borderland' ),
			"param_name" => "link_label1",
			"value"      => ""
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Target 1", 'borderland' ),
			"param_name"  => "target1",
			"value"       => array(
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			),
			'save_always' => true,
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image 2", 'borderland' ),
			"param_name" => "image2"
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title 2", 'borderland' ),
			"param_name" => "title2",
			"value"      => ""
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color 2", 'borderland' ),
			"param_name" => "title_color2",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text 2", 'borderland' ),
			"param_name" => "text2",
			"value"      => ""
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color 2", 'borderland' ),
			"param_name" => "text_color2",
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link 2", 'borderland' ),
			"param_name" => "link2",
			"value"      => ""
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link label 2", 'borderland' ),
			"param_name" => "link_label2",
			"value"      => ""
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Target 2", 'borderland' ),
			"param_name"  => "target2",
			"value"       => array(
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			),
			'save_always' => true,
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image 3", 'borderland' ),
			"param_name" => "image3",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title 3", 'borderland' ),
			"param_name" => "title3",
			"value"      => "",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color 3", 'borderland' ),
			"param_name" => "title_color3",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Text 3", 'borderland' ),
			"param_name" => "text3",
			"value"      => "",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Text Color 3", 'borderland' ),
			"param_name" => "text_color3",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link 3", 'borderland' ),
			"param_name" => "link3",
			"value"      => "",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link label 3", 'borderland' ),
			"param_name" => "link_label3",
			"value"      => "",
			"dependency" => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Target 3", 'borderland' ),
			"param_name"  => "target3",
			"value"       => array(
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			),
			'save_always' => true,
			"dependency"  => array( 'element' => 'number_of_items', 'value' => array( '', '3' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Read More Button Style", 'borderland' ),
			"param_name" => "read_more_button_style",
			"value"      => array(
				esc_html__( "Default", 'borderland' ) => "",
				esc_html__( "No", 'borderland' ) => "no",
				esc_html__( "Yes", 'borderland' ) => "yes"
			),
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Separator", 'borderland' ),
			"param_name"  => "separator",
			"value"       => array(
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			),
			'save_always' => true,
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Separator Color", 'borderland' ),
			"param_name" => "separator_color",
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Separator Border Style", 'borderland' ),
			"param_name" => "separator_border_style",
			"value"      => array(
				""       => "",
				esc_html__( "Dashed", 'borderland' ) => "dashed",
				esc_html__( "Solid", 'borderland' ) => "solid"
			),
			"dependency" => array( 'element' => "separator", 'value' => array( 'yes' ) )
		)
	)
) );

/*** Interactive Banners ***/

vc_map( array(
		"name" => esc_html__( "Interactive Banners", 'borderland' ),
		"base"                      => "no_interactive_banners",
		"category" => esc_html__( 'by Elated', 'borderland' ),
		"icon"                      => "icon-wpb-interactive-banners extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params"                    => array_merge(
			array(
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Width", 'borderland' ),
					"param_name" => "layout_width",
					"value"      => array(
						""    => "",
						esc_html__( "1/2", 'borderland' ) => "one_half",
						esc_html__( "1/3", 'borderland' ) => "one_third",
						esc_html__( "1/4", 'borderland' ) => "one_fourth",
					),
				),
				array(
					"type"       => "attach_image",
					"heading" => esc_html__( "Image", 'borderland' ),
					"param_name" => "image"
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Image Color Overlay", 'borderland' ),
					"param_name" => "overlay_color",
					"value"      => "",
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Image Hover Color Overlay", 'borderland' ),
					"param_name" => "overlay_color_hover",
					"value"      => "",
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Image Zoom on Hover", 'borderland' ),
					"param_name"  => "image_animate",
					"value"       => array(
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
					'save_always' => true,
					"dependency"  => Array( 'element' => "image", 'not_empty' => true )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Image Inner Border", 'borderland' ),
					"param_name"  => "show_border",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no"
					),
					'save_always' => true,
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Image Inner Border Color", 'borderland' ),
					"param_name" => "border_color",
					"dependency" => Array( 'element' => "show_border", 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Inner Border Offset (px)", 'borderland' ),
					"param_name"  => "inner_border_offset",
					"value"       => "",
					"description" => esc_html__( "Default value is 5", 'borderland' ),
					"dependency"  => Array( 'element' => "show_border", 'value' => array( 'yes' ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Icon", 'borderland' ),
					"param_name"  => "show_icon",
					"value"       => array(
						esc_html__( "Always", 'borderland' ) => "always",
						esc_html__( "Only On Hover", 'borderland' ) => "on_hover",
						esc_html__( "Never", 'borderland' ) => "never"
					),
					'save_always' => true,
				),
			),
			$icon_collections->getVCParamsArray( ( array(
				'element' => "show_icon",
				'value'   => array( 'always', 'on_hover' )
			) ), '', true ),
			array(
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Icon Type", 'borderland' ),
					"param_name"  => "icon_type",
					"value"       => array(
						esc_html__( "Normal", 'borderland' ) => "normal",
						esc_html__( "Circle", 'borderland' ) => "circle",
						esc_html__( "Square", 'borderland' ) => "square"
					),
					'save_always' => true,
					"dependency"  => Array(
						'element' => "icon_pack",
						'value'   => $icon_collections->getIconCollectionsKeys()
					)
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Icon Size (px)", 'borderland' ),
					"param_name"  => "icon_custom_size",
					"value"       => "",
					"description" => esc_html__( "Default value is 20", 'borderland' ),
					"dependency"  => Array(
						'element' => "icon_pack",
						'value'   => $icon_collections->getIconCollectionsKeys()
					)
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Icon Color", 'borderland' ),
					"param_name" => "icon_color",
					"dependency" => Array(
						'element' => "icon_pack",
						'value'   => $icon_collections->getIconCollectionsKeys()
					)
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Icon Zoom on Hover", 'borderland' ),
					"param_name"  => "icon_zoom",
					"value"       => array(
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
					'save_always' => true,
					"dependency"  => Array(
						'element' => "icon_pack",
						'value'   => $icon_collections->getIconCollectionsKeys()
					)
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Title", 'borderland' ),
					"param_name"  => "show_title",
					"value"       => array(
						esc_html__( "Always", 'borderland' ) => "always",
						esc_html__( "Only On Hover", 'borderland' ) => "on_hover",
						esc_html__( "Never", 'borderland' ) => "never"
					),
					'save_always' => true,
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Title Text", 'borderland' ),
					"param_name" => "title",
					"dependency" => Array( 'element' => "show_title", 'value' => array( 'always', 'on_hover' ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Title Color", 'borderland' ),
					"param_name" => "title_color",
					"dependency" => Array( 'element' => "title", 'not_empty' => true ),
					"dependency" => Array( 'element' => "show_title", 'value' => array( 'always', 'on_hover' ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Title Size (px)", 'borderland' ),
					"param_name"  => "title_size",
					"description" => esc_html__( "Default value is 17", 'borderland' ),
					"dependency"  => Array( 'element' => "title", 'not_empty' => true ),
					"dependency"  => Array( 'element' => "show_title", 'value' => array( 'always', 'on_hover' ) )
				),
				array(
					"type"       => "dropdown",
					"heading" => esc_html__( "Title Tag", 'borderland' ),
					"param_name" => "title_tag",
					"value"      => array(
						""   => "",
						esc_html__( "h2", 'borderland' ) => "h2",
						esc_html__( "h3", 'borderland' ) => "h3",
						esc_html__( "h4", 'borderland' ) => "h4",
						esc_html__( "h5", 'borderland' ) => "h5",
						esc_html__( "h6", 'borderland' ) => "h6",
					),
					"dependency" => Array( 'element' => "title", 'not_empty' => true )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Button", 'borderland' ),
					"param_name"  => "show_button",
					"value"       => array(
						esc_html__( "Always", 'borderland' ) => "always",
						esc_html__( "Only On Hover", 'borderland' ) => "on_hover",
						esc_html__( "Never", 'borderland' ) => "never"
					),
					'save_always' => true,
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Button Height", 'borderland' ),
					"param_name"  => "button_size",
					"description" => esc_html__( "It uses small button options (px)", 'borderland' ),
					"dependency"  => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"        => "textfield",
					"heading" => esc_html__( "Button Left and Right Padding", 'borderland' ),
					"param_name"  => "button_padding",
					"description" => esc_html__( "It uses small button options (px)", 'borderland' ),
					"dependency"  => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Button Text", 'borderland' ),
					"param_name" => "link_text",
					"dependency" => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Link Button to following URL", 'borderland' ),
					"param_name" => "button_link",
					"dependency" => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Link Target", 'borderland' ),
					"param_name"  => "target",
					"value"       => array(
						esc_html__( "Self", 'borderland' ) => "_self",
						esc_html__( "Blank", 'borderland' ) => "_blank"
					),
					'save_always' => true,
					"dependency"  => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Text Color", 'borderland' ),
					"param_name" => "link_color",
					"dependency" => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Border Color", 'borderland' ),
					"param_name" => "link_border_color",
					"dependency" => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Button Background Color", 'borderland' ),
					"param_name" => "link_background_color",
					"dependency" => Array( 'element' => "show_button", 'value' => array( "on_hover", "always" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Button Animation", 'borderland' ),
					"param_name"  => "button_animation",
					"value"       => array(
						esc_html__( "Fade in", 'borderland' ) => "fade_in",
						esc_html__( "Zoom", 'borderland' ) => "zoom",
						esc_html__( "Slides Up", 'borderland' ) => "slides_up"
					),
					'save_always' => true,
					"description" => esc_html__( "This option does not work if Hide Text Content on Hover enabled", 'borderland' ),
					"dependency"  => Array( 'element' => "show_button", 'value' => array( "on_hover" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Add Link Over Banner Content", 'borderland' ),
					"param_name"  => "link_over_content",
					"value"       => array(
						esc_html__( "No", 'borderland' ) => "no",
						esc_html__( "Yes", 'borderland' ) => "yes"
					),
					'save_always' => true,
					"dependency"  => Array( 'element' => "show_button", 'value' => "never" )
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Link Banner Content to following URL", 'borderland' ),
					"param_name" => "content_link",
					"dependency" => Array( 'element' => "link_over_content", 'value' => 'yes' )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Separator under Title", 'borderland' ),
					"param_name"  => "separator",
					"value"       => array(
						esc_html__( "Never", 'borderland' ) => "no",
						esc_html__( "Always", 'borderland' ) => "yes",
						esc_html__( "Only On Hover", 'borderland' ) => "on_hover"
					),
					'save_always' => true,
				),
				array(
					"type"       => "textfield",
					"heading" => esc_html__( "Separator Thickness (px)", 'borderland' ),
					"param_name" => "separator_thickness",
					"dependency" => Array( 'element' => "separator", 'value' => array( "yes", "on_hover" ) )
				),
				array(
					"type"       => "colorpicker",
					"heading" => esc_html__( "Separator Color", 'borderland' ),
					"param_name" => "separator_color",
					"dependency" => Array( 'element' => "separator", 'value' => array( "yes", "on_hover" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Separator Animation", 'borderland' ),
					"param_name"  => "separator_animate",
					"value"       => array(
						esc_html__( "Yes", 'borderland' ) => "yes",
						esc_html__( "No", 'borderland' ) => "no",
					),
					'save_always' => true,
					"dependency"  => Array( 'element' => "separator", 'value' => array( "yes", "on_hover" ) )
				),
				array(
					"type"        => "dropdown",
					"heading" => esc_html__( "Show Content", 'borderland' ),
					"param_name"  => "show_content",
					"value"       => array(
						esc_html__( "Always", 'borderland' ) => "always",
						esc_html__( "Only On Hover", 'borderland' ) => "on_hover",
						esc_html__( "Never", 'borderland' ) => "never"
					),
					'save_always' => true,
				),
				array(
					"type"       => "textarea_html",
					"heading" => esc_html__( "Content", 'borderland' ),
					"param_name" => "content",
					"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
				)
			)
		)
	)
);

/*** Image with Text and Icon ***/

vc_map( array(
	"name" => esc_html__( "Image with text and Icon", 'borderland' ),
	"base"                      => "no_image_with_text_and_icon",
	"icon"                      => "icon-wpb-image-with-text-and-icon extended-custom-icon",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"allowed_container_element" => 'vc_row',
	"params"                    => array_merge(
		array(
			array(
				"type"       => "attach_image",
				"heading" => esc_html__( "Image", 'borderland' ),
				"param_name" => "image"
			)
		),
		$icon_collections->getVCParamsArray( array(), '', true ),
		array(
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Icon Type", 'borderland' ),
				"param_name"  => "icon_type",
				"value"       => array(
					esc_html__( "Circle", 'borderland' ) => "circle",
					esc_html__( "Square", 'borderland' ) => "square"
				),
				'save_always' => true,
				"dependency"  => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Custom Size (px)", 'borderland' ),
				"param_name"  => "icon_custom_size",
				"value"       => "",
				"description" => esc_html__( "Default value is 25", 'borderland' ),
				"dependency"  => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Custom Shape Size (px)", 'borderland' ),
				"param_name"  => "icon_shape_size",
				"value"       => "",
				"description" => esc_html__( "Default value is 100", 'borderland' ),
				"dependency"  => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Color", 'borderland' ),
				"param_name" => "icon_color",
				"dependency" => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Icon Background Color", 'borderland' ),
				"param_name" => "icon_background_color",
				"dependency" => Array(
					'element' => "icon_pack",
					'value'   => $icon_collections->getIconCollectionsKeys()
				)
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Link", 'borderland' ),
				"param_name" => "link",
			),
			array(
				"type"       => "dropdown",
				"heading" => esc_html__( "Link Target", 'borderland' ),
				"param_name" => "target",
				"value"      => array(
					""      => "",
					esc_html__( "Self", 'borderland' ) => "_self",
					esc_html__( "Blank", 'borderland' ) => "_blank"
				),
			),
			array(
				"type"       => "textfield",
				"heading" => esc_html__( "Title", 'borderland' ),
				"param_name" => "title",
			),
			array(
				"type"        => "dropdown",
				"heading" => esc_html__( "Title Tag", 'borderland' ),
				"param_name"  => "title_tag",
				"value"       => array(
					""   => "",
					esc_html__( "h2", 'borderland' ) => "h2",
					esc_html__( "h3", 'borderland' ) => "h3",
					esc_html__( "h4", 'borderland' ) => "h4",
					esc_html__( "h5", 'borderland' ) => "h5",
					esc_html__( "h6", 'borderland' ) => "h6",
				),
				"description" => esc_html__( "Default value is h4", 'borderland' ),
				"dependency"  => Array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "colorpicker",
				"heading" => esc_html__( "Title Color", 'borderland' ),
				"param_name" => "title_color",
				"dependency" => Array( 'element' => "title", 'not_empty' => true )
			),
			array(
				"type"       => "textarea_html",
				"heading" => esc_html__( "Content", 'borderland' ),
				"param_name" => "content",
				"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
			),
			array(
				"type"        => "textfield",
				"heading" => esc_html__( "Top Margin", 'borderland' ),
				"param_name"  => "position_top",
				"description" => esc_html__( "Select top position of title from image. Default value is 75", 'borderland' )
			)
		)
	)

) );

/*** Image with text ***/

vc_map( array(
	"name" => esc_html__( "Image With Text", 'borderland' ),
	"base"                      => "no_image_with_text",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-image-with-text extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image", 'borderland' ),
			"param_name" => "image"
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Alignment", 'borderland' ),
			"param_name"  => "alignment",
			"value"       => array(
				esc_html__( "Center", 'borderland' ) => "center",
				esc_html__( "Left", 'borderland' ) => "left",
				esc_html__( "Right", 'borderland' ) => "right"
			),
			'save_always' => true,
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Title", 'borderland' ),
			"param_name" => "title",
		),
		array(
			"type"       => "colorpicker",
			"heading" => esc_html__( "Title Color", 'borderland' ),
			"param_name" => "title_color",
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Title Tag", 'borderland' ),
			"param_name" => "title_tag",
			"value"      => array(
				""   => "",
				esc_html__( "h2", 'borderland' ) => "h2",
				esc_html__( "h3", 'borderland' ) => "h3",
				esc_html__( "h4", 'borderland' ) => "h4",
				esc_html__( "h5", 'borderland' ) => "h5",
				esc_html__( "h6", 'borderland' ) => "h6",
			),
		),
		array(
			"type"       => "textarea_html",
			"heading" => esc_html__( "Content", 'borderland' ),
			"param_name" => "content",
			"value"      => "<p>" . esc_html__( "I am test text element content for this shortcode.", 'borderland' ) . "</p>",
		)
	)
) );

/*** Image hover ***/

vc_map( array(
	"name" => esc_html__( "Image Hover", 'borderland' ),
	"base"                      => "no_image_hover",
	"category" => esc_html__( 'by Elated', 'borderland' ),
	"icon"                      => "icon-wpb-image-hover extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params"                    => array(
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Image", 'borderland' ),
			"param_name" => "image"
		),
		array(
			"type"       => "attach_image",
			"heading" => esc_html__( "Hover Image", 'borderland' ),
			"param_name" => "hover_image"
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Link", 'borderland' ),
			"param_name" => "link",
		),
		array(
			"type"        => "dropdown",
			"heading" => esc_html__( "Target", 'borderland' ),
			"param_name"  => "target",
			"value"       => array(
				esc_html__( "Self", 'borderland' ) => "_self",
				esc_html__( "Blank", 'borderland' ) => "_blank"
			),
			'save_always' => true
		),
		array(
			"type"       => "dropdown",
			"heading" => esc_html__( "Animation", 'borderland' ),
			"param_name" => "animation",
			"value"      => array(
				""    => "",
				esc_html__( "Yes", 'borderland' ) => "yes",
				esc_html__( "No", 'borderland' ) => "no"
			)
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Animation speed (In seconds)", 'borderland' ),
			"param_name" => "animation_speed",
			"dependency" => array( 'element' => "animation", 'value' => array( "yes" ) )
		),
		array(
			"type"       => "textfield",
			"heading" => esc_html__( "Transition delay", 'borderland' ),
			"param_name" => "transition_delay",
			"dependency" => array( 'element' => "animation", 'value' => array( "yes" ) )
		)
	)
) );

/*** Contact Form 7 ***/

if ( borderland_elated_contact_form_7_installed() ) {
	vc_add_param( "contact-form-7", array(
		"type"        => "dropdown",
		"heading" => esc_html__( "Style", 'borderland' ),
		"param_name"  => "html_class",
		"value"       => array(
			esc_html__( "Default", 'borderland' ) => "default",
			esc_html__( "Custom Style 1", 'borderland' ) => "cf7_custom_style_1",
			esc_html__( "Custom Style 2", 'borderland' ) => "cf7_custom_style_2",
			esc_html__( "Custom Style 3", 'borderland' ) => "cf7_custom_style_3"
		),
		'save_always' => true,
		"description" => esc_html__( "You can style each form element individually in Elated Options > Contact Form 7", 'borderland' )
	) );
}