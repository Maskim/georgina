<?php

$eltd_pages = array();
$pages      = get_pages();
foreach ( $pages as $page ) {
	$eltd_pages[ $page->ID ] = $page->post_title;
}

$icon_collections = borderland_elated_icon_collections();

//Portfolio Images

$eltdPortfolioImages = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images (multiple upload)", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_images",
	$eltdPortfolioImages
);

$eltd_portfolio_image_gallery = new BorderlandElatedMultipleImages(
	"eltd_portfolio-image-gallery",
	esc_html__( "Portfolio Images", 'borderland' ),
	esc_html__( "Choose your portfolio images", 'borderland' )
);
$eltdPortfolioImages->addChild(
	"eltd_portfolio-image-gallery",
	$eltd_portfolio_image_gallery
);

//Portfolio Images/Videos 2

$eltdPortfolioImagesVideos2 = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images/Videos (single upload)", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_images_videos2",
	$eltdPortfolioImagesVideos2
);

$eltd_portfolio_images_videos2 = new BorderlandElatedImagesVideosFramework(
	esc_html__( "Portfolio Images/Videos 2", 'borderland' ),
	esc_html__( "ThisIsDescription", 'borderland' )
);
$eltdPortfolioImagesVideos2->addChild(
	"eltd_portfolio_images_videos2",
	$eltd_portfolio_images_videos2
);

//Portfolio Additional Sidebar Items

$eltdAdditionalSidebarItems = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Additional Portfolio Sidebar Items", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_properties",
	$eltdAdditionalSidebarItems
);

$eltd_portfolio_properties = new BorderlandElatedOptionsFramework(
	esc_html__( "Portfolio Properties", 'borderland' ),
	esc_html__( "ThisIsDescription", 'borderland' )
);
$eltdAdditionalSidebarItems->addChild(
	"eltd_portfolio_properties",
	$eltd_portfolio_properties
);

//General

$eltdGeneral = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "General", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_general",
	$eltdGeneral
);

$eltd_page_background_color = new BorderlandElatedMetaField(
	"color",
	"eltd_page_background_color",
	"",
	esc_html__( "Page Background Color", 'borderland' ),
	esc_html__( "Choose the page background (body) color", 'borderland' )
);
$eltdGeneral->addChild(
	"eltd_page_background_color",
	$eltd_page_background_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Content Style", 'borderland' ),
	esc_html__( "Define styles for Content area", 'borderland' )
);
$eltdGeneral->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_content_top_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_content-top-padding",
	"",
	esc_html__( "Content Top Padding (px)", 'borderland' ),
	esc_html__( "This option control content top padding.", 'borderland' )
);
$row1->addChild(
	"eltd_content-top-padding",
	$eltd_content_top_padding
);

$eltd_content_top_padding_mobile = new BorderlandElatedMetaField(
	"selectblanksimple",
	"eltd_content-top-padding-mobile",
	"",
	esc_html__( "Set this top padding for mobile header", 'borderland' ),
	"",
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$row1->addChild(
	"eltd_content-top-padding-mobile",
	$eltd_content_top_padding_mobile
);

$eltd_show_animation = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_show-animation",
	"",
	esc_html__( "Page Transition", 'borderland' ),
	esc_html__( 'Choose a type of transition between loading pages.', 'borderland' ),
	array(
		"no_animation" => esc_html__( "No Animation", 'borderland' ),
		"updown" => esc_html__( "Up / Down", 'borderland' ),
		"fade" => esc_html__( "Fade", 'borderland' ),
		"updown_fade" => esc_html__( "Up/Down (In) / Fade (Out)", 'borderland' ),
		"leftright" => esc_html__( "Left / Right", 'borderland' )
	),
	array(),
	"enable_grid_elements",
	array( "yes" )
);
$eltdGeneral->addChild(
	"eltd_show-animation",
	$eltd_show_animation
);

$page_transitions_notice = new BorderlandElatedNotice(
	esc_html__( "Page Transition", 'borderland' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'borderland' ),
	esc_html__( "AJAX Page transitions are disabled due to VC Grid Elements", 'borderland' ),
	"enable_grid_elements",
	"no"
);
$eltdGeneral->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$eltd_revolution_slider = new BorderlandElatedMetaField(
	"text",
	"eltd_revolution-slider",
	"",
	esc_html__( "Layer Slider or Elated Slider Shortcode", 'borderland' ),
	esc_html__( "Copy and paste your shortcode located in Elated Slider -> Slider", 'borderland' )
);
$eltdGeneral->addChild(
	"eltd_revolution-slider",
	$eltd_revolution_slider
);

$eltd_choose_portfolio_single_view = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_choose-portfolio-single-view",
	"",
	esc_html__( "Portfolio Type", 'borderland' ),
	esc_html__( 'Choose a default type for Single Project pages', 'borderland' ),
	array(
		"small-images" => esc_html__( "Portfolio small images", 'borderland' ),
		"small-slider" => esc_html__( "Portfolio small slider", 'borderland' ),
		"big-images" => esc_html__( "Portfolio big images", 'borderland' ),
		"big-slider" => esc_html__( "Portfolio big slider", 'borderland' ),
		"custom" => esc_html__( "Portfolio custom", 'borderland' ),
		"full-width-custom" => esc_html__( "Portfolio full width custom", 'borderland' ),
		"gallery" => esc_html__( "Portfolio gallery", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"full-width-custom" => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"custom"            => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"big-slider"        => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"big-images"        => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"small-slider"      => "#eltdf_eltd_choose_number_of_portfolio_columns_container",
			"small-images"      => "#eltdf_eltd_choose_number_of_portfolio_columns_container"
		),
		"show"       => array(
			"gallery" => "#eltdf_eltd_choose_number_of_portfolio_columns_container"
		)
	)
);
$eltdGeneral->addChild(
	"eltd_choose-portfolio-single-view",
	$eltd_choose_portfolio_single_view
);

$eltd_choose_number_of_portfolio_columns_container = new BorderlandElatedContainer(
	"eltd_choose_number_of_portfolio_columns_container",
	"eltd_choose-portfolio-single-view",
	"no",
	array( "", "1", "2", "3", "4", "5", "7" )
);
$eltdGeneral->addChild(
	"eltd_choose_number_of_portfolio_columns_container",
	$eltd_choose_number_of_portfolio_columns_container
);

$eltd_choose_number_of_portfolio_columns = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_choose-number-of-portfolio-columns",
	"",
	esc_html__( "Number of Columns", 'borderland' ),
	esc_html__( 'Choose the number of columns for Portfolio Gallery type', 'borderland' ),
	array(
		"2" => esc_html__( "2 Columns", 'borderland' ),
		"3" => esc_html__( "3 Columns", 'borderland' ),
		"4" => esc_html__( "4 Columns", 'borderland' )
	)
);
$eltd_choose_number_of_portfolio_columns_container->addChild(
	"eltd_choose-number-of-portfolio-columns",
	$eltd_choose_number_of_portfolio_columns
);

$eltd_choose_portfolio_image_size = new BorderlandElatedMetaField(
	"select",
	"eltd_choose-portfolio-image-size",
	"full",
	esc_html__( "Image Proportions", 'borderland' ),
	esc_html__( 'Choose image proportions for Portfolio Gallery type', 'borderland' ),
	array(
		"full" => esc_html__( "Original Size", 'borderland' ),
		"portfolio-square" => esc_html__( "Square", 'borderland' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'borderland' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'borderland' )
	)
);

$eltd_choose_number_of_portfolio_columns_container->addChild(
	"eltd_choose-portfolio-image-size",
	$eltd_choose_portfolio_image_size
);

$eltd_choose_portfolio_list_page = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_choose-portfolio-list-page",
	"",
	esc_html__( 'Back To Link', 'borderland' ),
	esc_html__( 'Choose Back To page to link from portfolio Single Project page', 'borderland' ),
	$eltd_pages
);
$eltdGeneral->addChild(
	"eltd_choose-portfolio-list-page",
	$eltd_choose_portfolio_list_page
);

$eltd_portfolio_external_link = new BorderlandElatedMetaField(
	"text",
	"eltd_portfolio-external-link",
	"",
	esc_html__( "Portfolio External Link", 'borderland' ),
	esc_html__( "Enter URL to link from Portfolio List page", 'borderland' )
);
$eltdGeneral->addChild(
	"eltd_portfolio-external-link",
	$eltd_portfolio_external_link
);

$eltd_portfolio_lightbox_link = new BorderlandElatedMetaField(
	"text",
	"eltd_portfolio-lightbox-link",
	"",
	esc_html__( "Portfolio Custom Lighbox Content", 'borderland' ),
	esc_html__( "Enter URL to link custom image/video content inside lightbox", 'borderland' )
);
$eltdGeneral->addChild(
	"eltd_portfolio-lightbox-link",
	$eltd_portfolio_lightbox_link
);

$eltd_portfolio_type_masonry_style = new BorderlandElatedMetaField(
	"select",
	"eltd_portfolio_type_masonry_style",
	"",
	esc_html__( "Dimensions for Masonry", 'borderland' ),
	esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists', 'borderland' ),
	array(
		"default" => esc_html__( "Default", 'borderland' ),
		"large_width" => esc_html__( "Large width", 'borderland' ),
		"large_height" => esc_html__( "Large height", 'borderland' ),
		"large_width_height" => esc_html__( "Large width/height", 'borderland' )
	)
);
$eltdGeneral->addChild(
	"eltd_portfolio_type_masonry_style",
	$eltd_portfolio_type_masonry_style
);

$eltd_portfolio_disable_comments = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_portfolio-hide-comments",
	"",
	esc_html__( "Disable Comments", 'borderland' ),
	"",
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$eltdGeneral->addChild(
	"eltd_portfolio-hide-comments",
	$eltd_portfolio_disable_comments
);

$eltd_portfolio_hover_color = new BorderlandElatedMetaField(
	"color",
	"eltd_portfolio-hover-color",
	"",
	esc_html__( "Portfolio Hover Color", 'borderland' ),
	esc_html__( "Choose color for portfolio hover type", 'borderland' )
);
$eltdGeneral->addChild(
	"eltd_portfolio-hover-color",
	$eltd_portfolio_hover_color
);

// Header

$eltdHeader = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Header", 'borderland' ),
	"vertical_area",
	array( "yes" )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"porfolio_header",
	$eltdHeader
);

$eltd_header_style = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_header-style",
	"",
	esc_html__( "Header Skin", 'borderland' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'borderland' ),
	array(
		"light" => esc_html__( "Light", 'borderland' ),
		"dark" => esc_html__( "Dark", 'borderland' )
	)
);
$eltdHeader->addChild(
	"eltd_header-style",
	$eltd_header_style
);

$eltd_header_style_on_scroll = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_header-style-on-scroll",
	"",
	esc_html__( "Enable Header Style on Scroll", 'borderland' ),
	esc_html__( "Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$eltdHeader->addChild(
	"eltd_header-style-on-scroll",
	$eltd_header_style_on_scroll
);

$eltd_header_color_per_page = new BorderlandElatedMetaField(
	"color",
	"eltd_header_color_per_page",
	"",
	esc_html__( "Initial Header Background Color", 'borderland' ),
	esc_html__( "Choose a background color for header area", 'borderland' )
);
$eltdHeader->addChild(
	"eltd_header_color_per_page",
	$eltd_header_color_per_page
);

$eltd_header_color_transparency_per_page = new BorderlandElatedMetaField(
	"text",
	"eltd_header_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Transparency", 'borderland' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$eltdHeader->addChild(
	"eltd_header_color_transparency_per_page",
	$eltd_header_color_transparency_per_page
);

$eltd_header_bottom_border_color = new BorderlandElatedMetaField(
	"color",
	"eltd_header_bottom_border_color",
	"",
	esc_html__( "Initial Header Bottom Border Color", 'borderland' ),
	esc_html__( "Choose a bottom border color for header area", 'borderland' )
);
$eltdHeader->addChild(
	"eltd_header_bottom_border_color",
	$eltd_header_bottom_border_color
);

$eltd_page_scroll_amount_for_sticky = new BorderlandElatedMetaField(
	"text",
	"eltd_page_scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll amount for sticky header appearance (px)", 'borderland' ),
	esc_html__( "Define scroll amount for sticky header appearance", 'borderland' ),
	array(),
	array( "col_width" => 3 ),
	"header_bottom_appearance",
	array( "regular", "fixed", "fixed_hiding" )
);
$eltdHeader->addChild(
	"eltd_page_scroll_amount_for_sticky",
	$eltd_page_scroll_amount_for_sticky
);

$eltd_page_hide_initial_sticky = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_hide_initial_sticky",
	"",
	esc_html__( "Hide Sticky Header Initially", 'borderland' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$eltdHeader->addChild(
	"eltd_page_hide_initial_sticky",
	$eltd_page_hide_initial_sticky
);

// Side Menu Area

$eltdLeftMenuArea = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Side Menu Area", 'borderland' ),
	"vertical_area",
	array( "no" )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"porfolio_left_menu",
	$eltdLeftMenuArea
);

$eltd_page_vertical_area_transparency = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_vertical_area_transparency",
	"",
	esc_html__( "Enable transparent side menu area", 'borderland' ),
	esc_html__( "Enabling this option will make Left Menu background transparent ", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_transparency",
	$eltd_page_vertical_area_transparency
);

$eltd_page_vertical_area_background = new BorderlandElatedMetaField(
	"color",
	"eltd_page_vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'borderland' ),
	esc_html__( "Choose a color for Left Menu background", 'borderland' )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background",
	$eltd_page_vertical_area_background
);

$eltd_page_vertical_area_background_opacity = new BorderlandElatedMetaField(
	"text",
	"eltd_page_vertical_area_background_opacity",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'borderland' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background_opacity",
	$eltd_page_vertical_area_background_opacity
);

$eltd_page_vertical_area_background_image = new BorderlandElatedMetaField(
	"image",
	"eltd_page_vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'borderland' ),
	esc_html__( "Choose an image for Left Menu background", 'borderland' )
);
$eltdLeftMenuArea->addChild(
	"eltd_page_vertical_area_background_image",
	$eltd_page_vertical_area_background_image
);

// Title

$eltdTitle = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Title", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"porfolio_title",
	$eltdTitle
);

$eltd_show_page_title = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_show-page-title",
	"",
	esc_html__( "Show Title Area", 'borderland' ),
	esc_html__( "Disabling this option will turn off page title area", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations"
		),
		"show"       => array(
			""    => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations",
			"yes" => "#eltdf_eltd_page_title_area_container, #eltdf-meta-box-portfolio_title_animations"
		)
	)
);
$eltdTitle->addChild(
	"eltd_show-page-title",
	$eltd_show_page_title
);

$eltd_page_title_area_container = new BorderlandElatedContainer(
	"eltd_page_title_area_container",
	"eltd_show-page-title",
	"no"
);
$eltdTitle->addChild(
	"eltd_page_title_area_container",
	$eltd_page_title_area_container
);

$eltd_page_title_type = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_title_type",
	"",
	esc_html__( "Title Type", 'borderland' ),
	esc_html__( "Choose title type for this page.", 'borderland' ),
	array(
		"standard_title" => esc_html__( "Standard", 'borderland' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumbs", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#eltdf_eltd_title_standard_container" ),
		"show"       => array(
			"standard_title" => "#eltdf_eltd_title_standard_container",
			""               => "#eltdf_eltd_title_standard_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_title_type",
	$eltd_page_title_type
);

$eltd_animate_page_title = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_animate_page_title",
	"",
	esc_html__( "Animations", 'borderland' ),
	esc_html__( "Choose an animation for Title Area", 'borderland' ),
	array(
		"no" => esc_html__( "No animation", 'borderland' ),
		"text_right_left" => esc_html__( "Text right to left", 'borderland' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'borderland' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_animate_page_title",
	$eltd_animate_page_title
);

$eltd_page_page_title_vertical_aligment = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_page_title_vertical_aligment",
	"",
	esc_html__( "Vertical Alignment", 'borderland' ),
	esc_html__( "Specify Title vertical alignment", 'borderland' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'borderland' ),
		"window_top" => esc_html__( "From Window Top", 'borderland' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_page_title_vertical_aligment",
	$eltd_page_page_title_vertical_aligment
);

$eltd_show_page_title_text = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_show_page_title_text",
	"",
	esc_html__( "Show Title Text", 'borderland' ),
	esc_html__( "Disabling this option will turn off page title text", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container"
		),
		"show"       => array(
			""    => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container",
			"yes" => "#eltdf_eltd_title_text_container, #eltdf_animation_page_page_title_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_show_page_title_text",
	$eltd_show_page_title_text
);

$eltd_title_text_container = new BorderlandElatedContainer(
	"eltd_title_text_container",
	"eltd_show_page_title_text",
	"no"
);
$eltd_page_title_area_container->addChild(
	"eltd_title_text_container",
	$eltd_title_text_container
);

$eltd_page_title_position = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_title_position",
	"",
	esc_html__( "Title Text Alignment", 'borderland' ),
	esc_html__( "Specify Title text alignment", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$eltd_title_text_container->addChild(
	"eltd_page_title_position",
	$eltd_page_title_position
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title Text Style", 'borderland' ),
	esc_html__( "Define styles for text in Title Area", 'borderland' )
);
$eltd_title_text_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_page_title_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_page-title-color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "ThisIsDescription", 'borderland' )
);
$row1->addChild(
	"eltd_page-title-color",
	$eltd_page_title_color
);

$eltd_title_text_shadow = new BorderlandElatedMetaField(
	"selectblanksimple",
	"eltd_title_text_shadow",
	"",
	esc_html__( "Text Shadow", 'borderland' ),
	esc_html__( "ThisIsDescription", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "yes", 'borderland' )
	)
);
$row1->addChild(
	"eltd_title_text_shadow",
	$eltd_title_text_shadow
);

$eltd_title_standard_container = new BorderlandElatedContainer(
	"eltd_title_standard_container",
	"eltd_page_title_type",
	"breadcrumbs_title"
);
$eltd_page_title_area_container->addChild(
	"eltd_title_standard_container",
	$eltd_title_standard_container
);

$eltd_title_like_separator = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_title_like_separator",
	"",
	esc_html__( "Show Separator Around Title Text", 'borderland' ),
	esc_html__( "Choose if you want title to look like separator with text", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_title_like_separator_container",
			""   => "#eltdf_eltd_title_like_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_like_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_title_like_separator",
	$eltd_title_like_separator
);

$eltd_title_like_separator_container = new BorderlandElatedContainer(
	"eltd_title_like_separator_container",
	"eltd_title_like_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_title_like_separator_container",
	$eltd_title_like_separator_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Line Styles", 'borderland' ),
	esc_html__( "Choose style for separator line", 'borderland' )
);
$eltd_title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_like_separator_line_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_like_separator_line_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"eltd_title_like_separator_line_color",
	$eltd_title_like_separator_line_color
);

$eltd_title_like_separator_line_width = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_line_width",
	"",
	esc_html__( "Width", 'borderland' )
);
$row1->addChild(
	"eltd_title_like_separator_line_width",
	$eltd_title_like_separator_line_width
);

$eltd_title_like_separator_line_thickness = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'borderland' )
);
$row1->addChild(
	"eltd_title_like_separator_line_thickness",
	$eltd_title_like_separator_line_thickness
);

$eltd_title_like_separator_line_style = new BorderlandElatedMetaField(
	"selectsimple",
	"eltd_title_like_separator_line_style",
	"",
	esc_html__( "Style", 'borderland' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' )
	)
);
$row1->addChild(
	"eltd_title_like_separator_line_style",
	$eltd_title_like_separator_line_style
);

$eltd_title_like_separator_margins = new BorderlandElatedMetaField(
	"text",
	"eltd_title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'borderland' ),
	esc_html__( "Define left/right margins for title from separator", 'borderland' )
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_margins",
	$eltd_title_like_separator_margins
);

$eltd_title_like_separator_line_dots = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_title_like_separator_line_dots",
	"",
	esc_html__( "Dots on The End of Lines", 'borderland' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#eltdf_eltd_title_like_separator_dots_container" ),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_like_separator_dots_container",
			""    => "#eltdf_eltd_title_like_separator_dots_container"
		)
	)
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_line_dots",
	$eltd_title_like_separator_line_dots
);

$eltd_title_like_separator_dots_container = new BorderlandElatedContainer(
	"eltd_title_like_separator_dots_container",
	"eltd_title_like_separator_line_dots",
	"no"
);
$eltd_title_like_separator_container->addChild(
	"eltd_title_like_separator_dots_container",
	$eltd_title_like_separator_dots_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Dots Style", 'borderland' ),
	esc_html__( "Choose style for dots", 'borderland' )
);
$eltd_title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_like_separator_dots_size = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_like_separator_dots_size",
	$eltd_title_like_separator_dots_size
);

$eltd_title_like_separator_dots_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"eltd_title_like_separator_dots_color",
	$eltd_title_like_separator_dots_color
);

//Subtitle like separator with text
$eltd_subtitle_like_separator = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_subtitle_like_separator",
	"",
	esc_html__( "Show Separator Around Subtitle Text", 'borderland' ),
	esc_html__( "Choose if you want title to look like separator with text", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_subtitle_like_separator_container",
			""   => "#eltdf_eltd_subtitle_like_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_subtitle_like_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_subtitle_like_separator",
	$eltd_subtitle_like_separator
);

$eltd_subtitle_like_separator_container = new BorderlandElatedContainer(
	"eltd_subtitle_like_separator_container",
	"eltd_subtitle_like_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_subtitle_like_separator_container",
	$eltd_subtitle_like_separator_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Line Styles", 'borderland' ),
	esc_html__( "Choose style for separator line", 'borderland' )
);
$eltd_subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_subtitle_like_separator_line_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_color",
	$eltd_subtitle_like_separator_line_color
);

$eltd_subtitle_like_separator_line_width = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_width",
	$eltd_subtitle_like_separator_line_width
);

$eltd_subtitle_like_separator_line_thickness = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_thickness",
	$eltd_subtitle_like_separator_line_thickness
);

$eltd_subtitle_like_separator_line_style = new BorderlandElatedMetaField(
	"selectsimple",
	"eltd_subtitle_like_separator_line_style",
	"",
	esc_html__( "Style", 'borderland' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' )
	)
);
$row1->addChild(
	"eltd_subtitle_like_separator_line_style",
	$eltd_subtitle_like_separator_line_style
);

$eltd_subtitle_like_separator_margins = new BorderlandElatedMetaField(
	"text",
	"eltd_subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subitle", 'borderland' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'borderland' )
);
$eltd_subtitle_like_separator_container->addChild(
	"eltd_subtitle_like_separator_margins",
	$eltd_subtitle_like_separator_margins
);

$eltd_page_title_background_color = new BorderlandElatedMetaField(
	"color",
	"eltd_page-title-background-color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for Title Area", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page-title-background-color",
	$eltd_page_title_background_color
);

$eltd_show_page_title_image = new BorderlandElatedMetaField(
	"yesno",
	"eltd_show-page-title-image",
	"no",
	esc_html__( "Don't Show Background Image", 'borderland' ),
	esc_html__( "Enable this option to hide background image in Title Area", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_background_image_container",
		"dependence_show_on_yes" => ""
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_show-page-title-image",
	$eltd_show_page_title_image
);

$eltd_background_image_container = new BorderlandElatedContainer(
	"eltd_background_image_container",
	"eltd_show-page-title-image",
	"yes"
);
$eltd_page_title_area_container->addChild(
	"eltd_background_image_container",
	$eltd_background_image_container
);

$eltd_title_image = new BorderlandElatedMetaField(
	"image",
	"eltd_title-image",
	"",
	esc_html__( "Background Image", 'borderland' ),
	esc_html__( "Choose a background image for Title Area", 'borderland' )
);
$eltd_background_image_container->addChild(
	"eltd_title-image",
	$eltd_title_image
);

$eltd_title_overlay_image = new BorderlandElatedMetaField(
	"image",
	"eltd_title-overlay-image",
	"",
	esc_html__( "Pattern Overlay Image", 'borderland' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'borderland' )
);
$eltd_background_image_container->addChild(
	"eltd_title-overlay-image",
	$eltd_title_overlay_image
);

$eltd_responsive_title_image = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_responsive-title-image",
	"",
	esc_html__( "Responsive Background Image", 'borderland' ),
	esc_html__( "Do you want to make Title background image responsive?", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"yes" => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height"
		),
		"show"       => array(
			""   => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height",
			"no" => "#eltdf_eltd_responsive_title_image_container, #eltdf_eltd_title-height"
		)
	)
);
$eltd_background_image_container->addChild(
	"eltd_responsive-title-image",
	$eltd_responsive_title_image
);

$eltd_responsive_title_image_container = new BorderlandElatedContainer(
	"eltd_responsive_title_image_container",
	"eltd_responsive-title-image",
	"yes"
);
$eltd_background_image_container->addChild(
	"eltd_responsive_title_image_container",
	$eltd_responsive_title_image_container
);

$eltd_fixed_title_image = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_fixed-title-image",
	"",
	esc_html__( "Parallax Background Image", 'borderland' ),
	esc_html__( "Do you want background image to have parallax effect?", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'borderland' )
	)
);
$eltd_responsive_title_image_container->addChild(
	"eltd_fixed-title-image",
	$eltd_fixed_title_image
);

$eltd_title_height = new BorderlandElatedMetaField(
	"text",
	"eltd_title-height",
	"",
	esc_html__( "Title Height (px)", 'borderland' ),
	esc_html__( "Set a height for Title Area in pixels", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$eltd_page_title_area_container->addChild(
	"eltd_title-height",
	$eltd_title_height
);

//Separator

$eltd_title_separator = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_title_separator",
	"",
	esc_html__( "Show Title Separator", 'borderland' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#eltdf_eltd_title_separator_container",
			"no" => "#eltdf_eltd_title_separator_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_title_separator_container"
		)
	)
);
$eltd_title_standard_container->addChild(
	"eltd_title_separator",
	$eltd_title_separator
);

$eltd_title_separator_container = new BorderlandElatedContainer(
	"eltd_title_separator_container",
	"eltd_title_separator",
	"",
	array( '', 'no' )
);
$eltd_title_standard_container->addChild(
	"eltd_title_separator_container",
	$eltd_title_separator_container
);

$eltd_title_separator_format = new BorderlandElatedMetaField(
	"select",
	"eltd_title_separator_format",
	"",
	esc_html__( "Format", 'borderland' ),
	esc_html__( "Choose a format (type) of separator", 'borderland' ),
	array(
		""                 => "",
		"normal" => esc_html__( "Normal", 'borderland' ),
		"with_icon" => esc_html__( "With Icon", 'borderland' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                 => "#eltdf_eltd_separator_with_icon_container, #eltdf_eltd_separator_with_custom_icon_container",
			"normal"           => "#eltdf_eltd_separator_with_icon_container, #eltdf_eltd_separator_with_custom_icon_container",
			"with_custom_icon" => "#eltdf_eltd_separator_with_icon_container",
			"with_icon"        => "#eltdf_eltd_separator_with_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#eltdf_eltd_separator_with_icon_container",
			"with_custom_icon" => "#eltdf_eltd_separator_with_custom_icon_container"
		)
	)
);

$eltd_title_separator_container->addChild(
	"eltd_title_separator_format",
	$eltd_title_separator_format
);

$eltd_separator_with_icon_container = new BorderlandElatedContainer(
	"eltd_separator_with_icon_container",
	"eltd_title_separator_format",
	"normal",
	array( "normal", "with_custom_icon", "" )
);
$eltd_title_separator_container->addChild(
	"eltd_separator_with_icon_container",
	$eltd_separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array     = array();
$separator_icon_pack_show_array     = array();
$separator_icon_pack_hide_array[""] = "";

//do we have some collection added in collections array?
if ( is_array( $icon_collections->iconCollections ) && count( $icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( $icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_eltd_separator_icon_' . $dep_collection_object->param . '_container';
		$separator_icon_pack_hide_array[""]                    .= '#eltdf_eltd_separator_icon_' . $dep_collection_object->param . '_container,';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_eltd_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		
	}
	
	$separator_icon_pack_hide_array[""] = rtrim(
		$separator_icon_pack_hide_array[""],
		','
	);
	
}

$eltd_separator_icon_pack = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_separator_icon_pack",
	"",
	esc_html__( "Separator Icon Pack", 'borderland' ),
	esc_html__( "Choose icon pack for separator", 'borderland' ),
	$icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$eltd_separator_with_icon_container->addChild(
	"eltd_separator_icon_pack",
	$eltd_separator_icon_pack
);

if ( is_array( $icon_collections->iconCollections ) && count( $icon_collections->iconCollections ) ) {
	//foreach icon collection we need to generate separate container that will have dependency set
	//it will have one field inside with icons dropdown
	foreach ( $icon_collections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
		$icon_collections_keys = $icon_collections->getIconCollectionsKeys();
		
		//unset current one, because it doesn't have to be included in dependency that hides icon container
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$separator_icon_hide_values    = $icon_collections_keys;
		$separator_icon_hide_values[]  = "";
		$eltd_separator_icon_container = new BorderlandElatedContainer(
			"eltd_separator_icon_" . $collection_object->param . "_container",
			"eltd_separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$eltd_separator_icon           = new BorderlandElatedMetaField(
			"select",
			"eltd_separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'borderland' ),
			esc_html__( "Choose Separator Icon", 'borderland' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$eltd_separator_icon_container->addChild(
			"eltd_separator_icon_" . $collection_object->param,
			$eltd_separator_icon
		);
		
		$eltd_separator_with_icon_container->addChild(
			"eltd_separator_icon_" . $collection_object->param . "_container",
			$eltd_separator_icon_container
		);
	}
	
}

$group1 = new BorderlandElatedGroup(
	esc_html__( "Icon Style", 'borderland' ),
	esc_html__( "Choose icon style", 'borderland' )
);
$eltd_separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose a color of icon for Title separator", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_color",
	$eltd_title_separator_icon_color
);

$eltd_title_separator_icon_hover_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_hover_color",
	$eltd_title_separator_icon_hover_color
);

$eltd_title_separator_icon_custom_size = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'borderland' ),
	esc_html__( "Choose size of icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_custom_size",
	$eltd_title_separator_icon_custom_size
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Icon Position and Margin", 'borderland' ),
	esc_html__( "Choose icon position and left(right) margin", 'borderland' )
);
$eltd_separator_with_icon_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_position = new BorderlandElatedMetaField(
	"selectsimple",
	"eltd_title_separator_icon_position",
	"",
	esc_html__( "Icon Position", 'borderland' ),
	esc_html__( "Choose a position for an icon", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$row1->addChild(
	"eltd_title_separator_icon_position",
	$eltd_title_separator_icon_position
);

$eltd_title_separator_icon_margins = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'borderland' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_margins",
	$eltd_title_separator_icon_margins
);

$eltd_title_separator_icon_type = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_title_separator_icon_type",
	"",
	esc_html__( "Icon Type", 'borderland' ),
	esc_html__( "Choose icon type", 'borderland' ),
	array(
		"normal" => esc_html__( "Normal", 'borderland' ),
		"circle" => esc_html__( "Circle", 'borderland' ),
		"square" => esc_html__( "Square", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#eltdf_eltd_title_separator_types_container",
			""       => "#eltdf_eltd_title_separator_types_container"
		),
		"show"       => array(
			"circle" => "#eltdf_eltd_title_separator_types_container",
			"square" => "#eltdf_eltd_title_separator_types_container"
		)
	)
);
$eltd_separator_with_icon_container->addChild(
	"eltd_title_separator_icon_type",
	$eltd_title_separator_icon_type
);

$eltd_title_separator_types_container = new BorderlandElatedContainer(
	"eltd_title_separator_types_container",
	"eltd_title_separator_icon_type",
	"",
	array( "", "normal" )
);
$eltd_separator_with_icon_container->addChild(
	"eltd_title_separator_types_container",
	$eltd_title_separator_types_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style for icon", 'borderland' )
);
$eltd_title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_border_radius = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' ),
	esc_html__( "Enter border radius for icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_radius",
	$eltd_title_separator_icon_border_radius
);

$eltd_title_separator_icon_border_width = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' ),
	esc_html__( "Enter border width for icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_width",
	$eltd_title_separator_icon_border_width
);

$eltd_title_separator_icon_border_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Enter border color for icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_color",
	$eltd_title_separator_icon_border_color
);

$eltd_title_separator_icon_border_hover_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Enter border color for icon", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_border_hover_color",
	$eltd_title_separator_icon_border_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Additional Icon Style", 'borderland' ),
	esc_html__( "Choose adition icon styling", 'borderland' )
);
$eltd_title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_icon_shape_size = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_shape_size",
	$eltd_title_separator_icon_shape_size
);

$eltd_title_separator_icon_background_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_background_color",
	$eltd_title_separator_icon_background_color
);

$eltd_title_separator_icon_background_hover_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_icon_background_hover_color",
	$eltd_title_separator_icon_background_hover_color
);

$eltd_separator_with_custom_icon_container = new BorderlandElatedContainer(
	"eltd_separator_with_custom_icon_container",
	"eltd_title_separator_format",
	"normal",
	array( "normal", "with_icon", "" )
);
$eltd_title_separator_container->addChild(
	"eltd_separator_with_custom_icon_container",
	$eltd_separator_with_custom_icon_container
);

$eltd_separator_custom_icon = new BorderlandElatedMetaField(
	"image",
	"eltd_separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'borderland' ),
	esc_html__( "Choose custom icon for separator", 'borderland' )
);
$eltd_separator_with_custom_icon_container->addChild(
	"eltd_separator_custom_icon",
	$eltd_separator_custom_icon
);

$eltd_title_separator_type = new BorderlandElatedMetaField(
	"select",
	"eltd_title_separator_type",
	"",
	esc_html__( "Type", 'borderland' ),
	esc_html__( "Choose a Title separator line style", 'borderland' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' )
	)
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_type",
	$eltd_title_separator_type
);

$eltd_title_separator_position = new BorderlandElatedMetaField(
	"select",
	"eltd_title_separator_position",
	"",
	esc_html__( "Position", 'borderland' ),
	esc_html__( "Choose a Title separator position", 'borderland' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'borderland' ),
		"below" => esc_html__( "Below Title", 'borderland' )
	)
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_position",
	$eltd_title_separator_position
);

$eltd_title_separator_color = new BorderlandElatedMetaField(
	"color",
	"eltd_title_separator_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose a color for Title separator", 'borderland' )
);
$eltd_title_separator_container->addChild(
	"eltd_title_separator_color",
	$eltd_title_separator_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Size", 'borderland' ),
	esc_html__( 'Define size for Title separator', 'borderland' )
);
$eltd_title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$eltd_title_separator_thickness = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_thickness",
	$eltd_title_separator_thickness
);

$eltd_title_separator_width = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_width",
	$eltd_title_separator_width
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Margin", 'borderland' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'borderland' )
);
$eltd_title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$eltd_title_separator_topmargin = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_topmargin",
	$eltd_title_separator_topmargin
);

$eltd_title_separator_bottommargin = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_separator_bottommargin",
	$eltd_title_separator_bottommargin
);

$eltd_title_graphics = new BorderlandElatedMetaField(
	"image",
	"eltd_title-graphics",
	"",
	esc_html__( "Title Graphics", 'borderland' ),
	esc_html__( "Choose a graphic for Title Area, appearing above title", 'borderland' )
);
$eltd_title_standard_container->addChild(
	"eltd_title-graphics",
	$eltd_title_graphics
);

$eltd_enable_breadcrumbs = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_enable_breadcrumbs",
	"",
	esc_html__( "Enable Breadcrumbs", 'borderland' ),
	esc_html__( "Do you want to display breadcrumbs in title area?", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#eltdf_animation_page_page_title_breadcrumbs_container",
			"no" => "#eltdf_animation_page_page_title_breadcrumbs_container"
		),
		"show"       => array(
			"yes" => "#eltdf_animation_page_page_title_breadcrumbs_container"
		)
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_enable_breadcrumbs",
	$eltd_enable_breadcrumbs
);

$eltd_page_breadcrumbs_color = new BorderlandElatedMetaField(
	"color",
	"eltd_page_breadcrumbs_color",
	"",
	esc_html__( "Breadcrumbs Color", 'borderland' ),
	esc_html__( "Choose a color for breadcrumbs text ", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_breadcrumbs_color",
	$eltd_page_breadcrumbs_color
);

$eltd_page_subtitle = new BorderlandElatedMetaField(
	"text",
	"eltd_page_subtitle",
	"",
	esc_html__( "Subtitle Text", 'borderland' ),
	esc_html__( "Enter your subtitle text", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle",
	$eltd_page_subtitle
);

$eltd_page_subtitle_position = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_page_subtitle_position",
	"",
	esc_html__( "Subtitle Position", 'borderland' ),
	esc_html__( "Choose a Subtitle position", 'borderland' ),
	array(
		"below_title" => esc_html__( "Below Title", 'borderland' ),
		"above_title" => esc_html__( "Above Title", 'borderland' )
	)
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle_position",
	$eltd_page_subtitle_position
);

$eltd_page_subtitle_color = new BorderlandElatedMetaField(
	"color",
	"eltd_page_subtitle_color",
	"",
	esc_html__( "Subtitle Text Color", 'borderland' ),
	esc_html__( "Choose a color for subtitle text", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_page_subtitle_color",
	$eltd_page_subtitle_color
);

$eltd_title_content_style = new BorderlandElatedGroup(
	esc_html__( "Title Content Style", 'borderland' ),
	esc_html__( "Define style for title area content", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_title_content_style",
	$eltd_title_content_style
);

$row1 = new BorderlandElatedRow();
$eltd_title_content_style->addChild(
	"row1",
	$row1
);

$eltd_title_area_content_background_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_area_content_background_color",
	"",
	esc_html__( "Title Area Content Background Color", 'borderland' ),
	esc_html__( "Choose a background color for Title Area Content", 'borderland' )
);
$row1->addChild(
	"eltd_title_area_content_background_color",
	$eltd_title_area_content_background_color
);

$eltd_title_area_content_opacity = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_area_content_opacity",
	"",
	esc_html__( "Title Area Content Background Color Opacity", 'borderland' ),
	esc_html__( "Choose a transparency for the content area background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"eltd_title_area_content_opacity",
	$eltd_title_area_content_opacity
);

$eltd_title_style = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define style for title", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_title_style",
	$eltd_title_style
);

$row1 = new BorderlandElatedRow();
$eltd_title_style->addChild(
	"row1",
	$row1
);

$eltd_title_background_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_title_background_color",
	"",
	esc_html__( "Title Background Color", 'borderland' ),
	esc_html__( "Choose a background color for Title", 'borderland' )
);
$row1->addChild(
	"eltd_title_background_color",
	$eltd_title_background_color
);

$eltd_title_opacity = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_opacity",
	"",
	esc_html__( "Title Background Color Opacity", 'borderland' ),
	esc_html__( "Choose a transparency for the title background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"eltd_title_opacity",
	$eltd_title_opacity
);

$title_padding_group = new BorderlandElatedGroup(
	esc_html__( "Padding", 'borderland' ),
	esc_html__( "Define padding for title (When using separator around title, only right margin is counted for left/right margin)", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"title_padding_group",
	$title_padding_group
);

$row1 = new BorderlandElatedRow( true );
$title_padding_group->addChild(
	"row1",
	$row1
);

$eltd_title_top_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_top_padding",
	$eltd_title_top_padding
);

$eltd_title_right_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_right_padding",
	$eltd_title_right_padding
);

$eltd_title_bottom_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_bottom_padding",
	$eltd_title_bottom_padding
);

$eltd_title_left_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_title_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_title_left_padding",
	$eltd_title_left_padding
);

$eltd_subtitle_style = new BorderlandElatedGroup(
	esc_html__( "Subtitle Style", 'borderland' ),
	esc_html__( "Define style for subtitle (When using separator around subtitle, only right margin is counted for left/right margin)", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"eltd_subtitle_style",
	$eltd_subtitle_style
);

$row1 = new BorderlandElatedRow();
$eltd_subtitle_style->addChild(
	"row1",
	$row1
);

$eltd_subtitle_background_color = new BorderlandElatedMetaField(
	"colorsimple",
	"eltd_subtitle_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'borderland' ),
	esc_html__( "Choose a background color for Subtitle", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_background_color",
	$eltd_subtitle_background_color
);

$eltd_subtitle_opacity = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_opacity",
	"",
	esc_html__( "Subtitle Background Color Opacity", 'borderland' ),
	esc_html__( "Choose a transparency for the subtitle background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_opacity",
	$eltd_subtitle_opacity
);

$subtitle_padding_group = new BorderlandElatedGroup(
	esc_html__( "Padding", 'borderland' ),
	esc_html__( "Define padding for subtitle", 'borderland' )
);
$eltd_page_title_area_container->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new BorderlandElatedRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);

$eltd_subtitle_top_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_top_padding",
	$eltd_subtitle_top_padding
);

$eltd_subtitle_right_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_right_padding",
	$eltd_subtitle_right_padding
);

$eltd_subtitle_bottom_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_bottom_padding",
	$eltd_subtitle_bottom_padding
);

$eltd_subtitle_left_padding = new BorderlandElatedMetaField(
	"textsimple",
	"eltd_subtitle_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row1->addChild(
	"eltd_subtitle_left_padding",
	$eltd_subtitle_left_padding
);

//Portfolio Title Animations
$eltdTitleAnimations = new BorderlandElatedMetaBox(
	'portfolio_page',
	esc_html__( 'Title Animations', 'borderland' ),
	'eltd_show-page-title',
	array( 'no' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	'portfolio_title_animations',
	$eltdTitleAnimations
);

//Whole title content animation
$page_page_title_whole_content_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_title_whole_content_animations',
	'',
	esc_html__( 'Enable Whole Title Content Animation', 'borderland' ),
	esc_html__( 'This option will enable whole title content animation', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_whole_content_animations_container',
			'no' => '#eltdf_page_page_title_whole_content_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_whole_content_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_whole_content_animations',
	$page_page_title_whole_content_animations
);

$page_page_title_whole_content_animations_container = new BorderlandElatedContainer(
	'page_page_title_whole_content_animations_container',
	'page_page_title_whole_content_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_whole_content_animations_container',
	$page_page_title_whole_content_animations_container
);

$page_page_title_whole_content_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_start',
	$page_page_title_whole_content_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_whole_content_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_title_whole_content_data_start',
	$page_page_title_whole_content_data_start
);

$page_page_title_whole_content_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_title_whole_content_start_custom_style',
	$page_page_title_whole_content_start_custom_style
);

$page_page_title_whole_content_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_end',
	$page_page_title_whole_content_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_whole_content_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_title_whole_content_data_end',
	$page_page_title_whole_content_data_end
);

$page_page_title_whole_content_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_title_whole_content_end_custom_style',
	$page_page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_page_title_container = new BorderlandElatedContainerNoStyle(
	'animation_page_page_title_container',
	'eltd_show_page_title_text',
	'no'
);
$eltdTitleAnimations->addChild(
	'animation_page_page_title_container',
	$animation_page_page_title_container
);

$page_page_title_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_title_animations',
	'',
	esc_html__( 'Enable Page Title Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_animations_container',
			'no' => '#eltdf_page_page_title_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_animations_container'
		)
	)
);

$animation_page_page_title_container->addChild(
	'page_page_title_animations',
	$page_page_title_animations
);

$page_page_title_animations_container = new BorderlandElatedContainer(
	'page_page_title_animations_container',
	'page_page_title_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_container->addChild(
	'page_page_title_animations_container',
	$page_page_title_animations_container
);

$page_page_title_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_start',
	$page_page_title_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_title_data_start',
	$page_page_title_data_start
);

$page_page_title_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_title_start_custom_style',
	$page_page_title_start_custom_style
);

$page_page_title_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_end',
	$page_page_title_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_title_data_end',
	$page_page_title_data_end
);

$page_page_title_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_title_end_custom_style',
	$page_page_title_end_custom_style
);

//Title Separator Animations
$page_page_title_separator_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_title_separator_animations',
	'',
	esc_html__( 'Enable Page Separator Title Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_separator_animations_container',
			'no' => '#eltdf_page_page_title_separator_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_separator_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_separator_animations',
	$page_page_title_separator_animations
);

$page_page_title_separator_animations_container = new BorderlandElatedContainer(
	'page_page_title_separator_animations_container',
	'page_page_title_separator_animations',
	'',
	array( 'no', '' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_separator_animations_container',
	$page_page_title_separator_animations_container
);

$page_page_title_separator_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_start',
	$page_page_title_separator_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_separator_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_title_separator_data_start',
	$page_page_title_separator_data_start
);

$page_page_title_separator_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_title_separator_start_custom_style',
	$page_page_title_separator_start_custom_style
);

$page_page_title_separator_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_end',
	$page_page_title_separator_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_separator_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_title_separator_data_end',
	$page_page_title_separator_data_end
);

$page_page_title_separator_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_title_separator_end_custom_style',
	$page_page_title_separator_end_custom_style
);

//Subtitle Animations
$page_page_subtitle_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_subtitle_animations',
	'',
	esc_html__( 'Enable Page Subtitle Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_subtitle_animations_container',
			'no' => '#eltdf_page_page_subtitle_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_subtitle_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_subtitle_animations',
	$page_page_subtitle_animations
);

$page_page_subtitle_animations_container = new BorderlandElatedContainer(
	'page_page_subtitle_animations_container',
	'page_page_subtitle_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_subtitle_animations_container',
	$page_page_subtitle_animations_container
);

$page_page_subtitle_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_start',
	$page_page_subtitle_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_subtitle_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_subtitle_data_start',
	$page_page_subtitle_data_start
);

$page_page_subtitle_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_subtitle_start_custom_style',
	$page_page_subtitle_start_custom_style
);

$page_page_subtitle_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_end',
	$page_page_subtitle_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_subtitle_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_subtitle_data_end',
	$page_page_subtitle_data_end
);

$page_page_subtitle_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_subtitle_end_custom_style',
	$page_page_subtitle_end_custom_style
);

//Graphic Animations
$page_page_title_graphic_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_title_graphic_animations',
	'',
	esc_html__( 'Enable Page Title Graphic Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_graphic_animations_container',
			'no' => '#eltdf_page_page_title_graphic_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_graphic_animations_container'
		)
	)
);
$eltdTitleAnimations->addChild(
	'page_page_title_graphic_animations',
	$page_page_title_graphic_animations
);

$page_page_title_graphic_animations_container = new BorderlandElatedContainer(
	'page_page_title_graphic_animations_container',
	'page_page_title_graphic_animations',
	'',
	array( '', 'no' )
);
$eltdTitleAnimations->addChild(
	'page_page_title_graphic_animations_container',
	$page_page_title_graphic_animations_container
);

$page_page_title_graphic_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_start',
	$page_page_title_graphic_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_graphic_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_title_graphic_data_start',
	$page_page_title_graphic_data_start
);

$page_page_title_graphic_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_title_graphic_start_custom_style',
	$page_page_title_graphic_start_custom_style
);

$page_page_title_graphic_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_end',
	$page_page_title_graphic_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_graphic_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_title_graphic_data_end',
	$page_page_title_graphic_data_end
);

$page_page_title_graphic_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_title_graphic_end_custom_style',
	$page_page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_page_title_breadcrumbs_container = new BorderlandElatedContainerNoStyle(
	'animation_page_page_title_breadcrumbs_container',
	'eltd_enable_breadcrumbs',
	'no'
);
$eltdTitleAnimations->addChild(
	'animation_page_page_title_breadcrumbs_container',
	$animation_page_page_title_breadcrumbs_container
);

$page_page_title_breadcrumbs_animations = new BorderlandElatedMetaField(
	'selectblank',
	'page_page_title_breadcrumbs_animations',
	'',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'borderland' ),
	array(
		'no' => esc_html__( 'No', 'borderland' ),
		'yes' => esc_html__( 'Yes', 'borderland' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#eltdf_page_page_title_breadcrumbs_animations_container',
			'no' => '#eltdf_page_page_title_breadcrumbs_animations_container'
		),
		'show'       => array(
			'yes' => '#eltdf_page_page_title_breadcrumbs_animations_container'
		)
	)
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations',
	$page_page_title_breadcrumbs_animations
);

$page_page_title_breadcrumbs_animations_container = new BorderlandElatedContainer(
	'page_page_title_breadcrumbs_animations_container',
	'page_page_title_breadcrumbs_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations_container',
	$page_page_title_breadcrumbs_animations_container
);

$page_page_title_breadcrumbs_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_start',
	$page_page_title_breadcrumbs_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_breadcrumbs_data_start = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_data_start',
	$page_page_title_breadcrumbs_data_start
);

$page_page_title_breadcrumbs_start_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_start_custom_style',
	$page_page_title_breadcrumbs_start_custom_style
);

$page_page_title_breadcrumbs_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_end',
	$page_page_title_breadcrumbs_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_breadcrumbs_data_end = new BorderlandElatedMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_data_end',
	$page_page_title_breadcrumbs_data_end
);

$page_page_title_breadcrumbs_end_custom_style = new BorderlandElatedMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_end_custom_style',
	$page_page_title_breadcrumbs_end_custom_style
);

// Content Bottom

$eltdContentBottom = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Content Bottom", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_content_bottom_page",
	$eltdContentBottom
);

$eltd_enable_content_bottom_area = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_enable_content_bottom_area",
	"",
	esc_html__( "Show Content Bottom Area", 'borderland' ),
	esc_html__( "Do you want to show content bottom area?", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#eltdf_eltd_enable_content_bottom_area_container",
			""   => "#eltdf_eltd_enable_content_bottom_area_container"
		),
		"show"       => array(
			"yes" => "#eltdf_eltd_enable_content_bottom_area_container"
		)
	)
);
$eltdContentBottom->addChild(
	"eltd_enable_content_bottom_area",
	$eltd_enable_content_bottom_area
);

$eltd_enable_content_bottom_area_container = new BorderlandElatedContainer(
	"eltd_enable_content_bottom_area_container",
	"eltd_enable_content_bottom_area",
	"no",
	array( "", "no" )
);
$eltdContentBottom->addChild(
	"eltd_enable_content_bottom_area_container",
	$eltd_enable_content_bottom_area_container
);

$eltd_content_bottom_background_color = new BorderlandElatedMetaField(
	"color",
	"eltd_content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose a color for content bottom area", 'borderland' )
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_content_bottom_background_color",
	$eltd_content_bottom_background_color
);

$eltd_choose_content_bottom_sidebar = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_choose_content_bottom_sidebar",
	"",
	esc_html__( "Custom Widget", 'borderland' ),
	esc_html__( "Choose Custom Widget area to display", 'borderland' ),
	$eltd_custom_sidebars
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_choose_content_bottom_sidebar",
	$eltd_choose_content_bottom_sidebar
);

$eltd_content_bottom_sidebar_in_grid = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_content_bottom_sidebar_in_grid",
	"",
	esc_html__( "Display in Grid", 'borderland' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' )
	)
);
$eltd_enable_content_bottom_area_container->addChild(
	"eltd_content_bottom_sidebar_in_grid",
	$eltd_content_bottom_sidebar_in_grid
);

// Side Bar Area

$eltdSideBar = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "Sidebar", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_side_bar",
	$eltdSideBar
);

$eltd_show_sidebar = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_portfolio_show_sidebar",
	"default",
	esc_html__( "Layout", 'borderland' ),
	esc_html__( "Choose the sidebar layout", 'borderland' ),
	array(
		"default" => esc_html__( "Default", 'borderland' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'borderland' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'borderland' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'borderland' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'borderland' ),
	)
);
$eltdSideBar->addChild(
	"eltd_portfolio_show_sidebar",
	$eltd_show_sidebar
);

$eltd_choose_sidebar = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_choose-sidebar",
	"default",
	esc_html__( "Choose Widget Area in Sidebar", 'borderland' ),
	esc_html__( "Choose Custom Widget area to display in Sidebar", 'borderland' ),
	$eltd_custom_sidebars
);
$eltdSideBar->addChild(
	"eltd_choose-sidebar",
	$eltd_choose_sidebar
);

// SEO

$eltdSeo = new BorderlandElatedMetaBox(
	"portfolio_page",
	esc_html__( "SEO", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"portfolio_seo",
	$eltdSeo
);

$seo_title = new BorderlandElatedMetaField(
	"text",
	"seo_title",
	"",
	esc_html__( "SEO Title", 'borderland' ),
	esc_html__( "Enter custom Title for this page", 'borderland' )
);
$eltdSeo->addChild(
	"seo_title",
	$seo_title
);

$seo_keywords = new BorderlandElatedMetaField(
	"text",
	"seo_keywords",
	"",
	esc_html__( "SEO Keywords", 'borderland' ),
	esc_html__( "Enter the list of keywords separated by commas", 'borderland' )
);
$eltdSeo->addChild(
	"seo_keywords",
	$seo_keywords
);

$seo_description = new BorderlandElatedMetaField(
	"textarea",
	"seo_description",
	"",
	esc_html__( "SEO Description", 'borderland' ),
	esc_html__( "Enter meta description for this page", 'borderland' )
);
$eltdSeo->addChild(
	"seo_description",
	$seo_description
);