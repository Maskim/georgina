<?php

$portfolioPage = new BorderlandElatedAdminPage(
	"9",
	esc_html__( "Portfolio", 'borderland' ),
	"fa fa-camera-retro"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"portfolioPage",
	$portfolioPage
);

//Portfolio List

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Portfolio List", 'borderland' ),
	"porfolio_list"
);
$portfolioPage->addChild(
	"panel1",
	$panel1
);

$portfolio_eltd_like = new BorderlandElatedField(
	"onoff",
	"portfolio_eltd_like",
	"on",
	esc_html__( "Likes", 'borderland' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'borderland' )
);
$panel1->addChild(
	"portfolio_eltd_like",
	$portfolio_eltd_like
);

$portfolio_disable_text_box = new BorderlandElatedField(
	"yesno",
	"portfolio_disable_text_box",
	"yes",
	esc_html__( "Disable Boxed Style Project Description", 'borderland' ),
	esc_html__( "Disabling boxed styled project description", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_enable_portfolio_list_box_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"portfolio_disable_text_box",
	$portfolio_disable_text_box
);

$enable_portfolio_list_box_container = new BorderlandElatedContainer(
	"enable_portfolio_list_box_container",
	"portfolio_disable_text_box",
	"yes"
);
$panel1->addChild(
	"enable_portfolio_list_box_container",
	$enable_portfolio_list_box_container
);

$portfolio_list_box_background_color = new BorderlandElatedField(
	"color",
	"portfolio_list_box_background_color",
	"",
	esc_html__( "Portfolio Box Background Color", 'borderland' ),
	esc_html__( "Default color is #ffffff", 'borderland' )
);
$enable_portfolio_list_box_container->addChild(
	"portfolio_list_box_background_color",
	$portfolio_list_box_background_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Image Hover Overlay Color", 'borderland' ),
	esc_html__( "Define icons styles on project hover. Default hover color is #303030.", 'borderland' )
);
$panel1->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$portfolio_shader_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_shader_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"portfolio_shader_color",
	$portfolio_shader_color
);

$portfolio_shader_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_shader_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'borderland' ),
	"",
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"portfolio_shader_transparency",
	$portfolio_shader_transparency
);

// Portfolio List TEXT STYLES

$title_text_styles = new BorderlandElatedTitle(
	"title_text_styles",
	esc_html__( "Title Text Styles", 'borderland' )
);
$panel1->addChild(
	"title_text_styles",
	$title_text_styles
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Title Style for Standard and Pinterest Lists", 'borderland' ),
	esc_html__( "Define title styles for standard and pinterest portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);
$portfolio_title_standard_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_standard_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_standard_list_color",
	$portfolio_title_standard_list_color
);
$portfolio_title_standard_list_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_standard_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_standard_list_hover_color",
	$portfolio_title_standard_list_hover_color
);
$portfolio_title_standard_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_standard_list_font_size",
	$portfolio_title_standard_list_font_size
);
$portfolio_title_standard_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_standard_list_line_height",
	$portfolio_title_standard_list_line_height
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);
$portfolio_title_standard_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_standard_list_text_transform",
	$portfolio_title_standard_list_text_transform
);
$portfolio_title_standard_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_title_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_family",
	$portfolio_title_standard_list_font_family
);
$portfolio_title_standard_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_style",
	$portfolio_title_standard_list_font_style
);
$portfolio_title_standard_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_weight",
	$portfolio_title_standard_list_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);
$portfolio_title_standard_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"portfolio_title_standard_list_letter_spacing",
	$portfolio_title_standard_list_letter_spacing
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Title Style for Text on Hover Image and Text before Hover Lists", 'borderland' ),
	esc_html__( "Define title styles for text on hover image and text before hover portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);
$portfolio_title_hover_box_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_color",
	$portfolio_title_hover_box_list_color
);
$portfolio_title_hover_box_list_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_hover_box_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_hover_color",
	$portfolio_title_hover_box_list_hover_color
);
$portfolio_title_hover_box_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_font_size",
	$portfolio_title_hover_box_list_font_size
);
$portfolio_title_hover_box_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_line_height",
	$portfolio_title_hover_box_list_line_height
);

$row2 = new BorderlandElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);
$portfolio_title_hover_box_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_title_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_family",
	$portfolio_title_hover_box_list_font_family
);
$portfolio_title_hover_box_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_text_transform",
	$portfolio_title_hover_box_list_text_transform
);
$portfolio_title_hover_box_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_style",
	$portfolio_title_hover_box_list_font_style
);
$portfolio_title_hover_box_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_weight",
	$portfolio_title_hover_box_list_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);
$portfolio_title_hover_box_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"portfolio_title_hover_box_list_letter_spacing",
	$portfolio_title_hover_box_list_letter_spacing
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Title Style for Portfolio Slider and Masonry Lists", 'borderland' ),
	esc_html__( "Define title styles for slider and masonry portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group11",
	$group11
);

$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);
$portfolio_title_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_list_color",
	$portfolio_title_list_color
);
$portfolio_title_list_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_list_hover_color",
	$portfolio_title_list_hover_color
);
$portfolio_title_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_list_font_size",
	$portfolio_title_list_font_size
);
$portfolio_title_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_list_line_height",
	$portfolio_title_list_line_height
);

$row2 = new BorderlandElatedRow( true );
$group11->addChild(
	"row2",
	$row2
);
$portfolio_title_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_list_text_transform",
	$portfolio_title_list_text_transform
);
$portfolio_title_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_title_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_title_list_font_family",
	$portfolio_title_list_font_family
);
$portfolio_title_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_list_font_style",
	$portfolio_title_list_font_style
);
$portfolio_title_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_title_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_list_font_weight",
	$portfolio_title_list_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);
$portfolio_title_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"portfolio_title_list_letter_spacing",
	$portfolio_title_list_letter_spacing
);

$category_text_styles = new BorderlandElatedTitle(
	"category_text_styles",
	esc_html__( "Category Text Styles", 'borderland' )
);
$panel1->addChild(
	"category_text_styles",
	$category_text_styles
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Category Style for Standard and Pinterest Lists", 'borderland' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);
$portfolio_category_standard_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_category_standard_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_category_standard_list_color",
	$portfolio_category_standard_list_color
);
$portfolio_category_standard_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_standard_list_font_size",
	$portfolio_category_standard_list_font_size
);
$portfolio_category_standard_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_standard_list_line_height",
	$portfolio_category_standard_list_line_height
);
$portfolio_category_standard_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_standard_list_text_transform",
	$portfolio_category_standard_list_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);
$portfolio_category_standard_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_category_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_family",
	$portfolio_category_standard_list_font_family
);
$portfolio_category_standard_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_style",
	$portfolio_category_standard_list_font_style
);
$portfolio_category_standard_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_weight",
	$portfolio_category_standard_list_font_weight
);
$portfolio_category_standard_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"portfolio_category_standard_list_letter_spacing",
	$portfolio_category_standard_list_letter_spacing
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Category Style for Text on Hover Image and Text before Hover Lists", 'borderland' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);
$portfolio_category_hover_box_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_category_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_color",
	$portfolio_category_hover_box_list_color
);
$portfolio_category_hover_box_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_font_size",
	$portfolio_category_hover_box_list_font_size
);
$portfolio_category_hover_box_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_line_height",
	$portfolio_category_hover_box_list_line_height
);
$portfolio_category_hover_box_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_text_transform",
	$portfolio_category_hover_box_list_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);
$portfolio_category_hover_box_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_category_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_family",
	$portfolio_category_hover_box_list_font_family
);
$portfolio_category_hover_box_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_style",
	$portfolio_category_hover_box_list_font_style
);
$portfolio_category_hover_box_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_weight",
	$portfolio_category_hover_box_list_font_weight
);
$portfolio_category_hover_box_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_letter_spacing",
	$portfolio_category_hover_box_list_letter_spacing
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Category Style for Portfolio Slider and Masonry Lists", 'borderland' ),
	esc_html__( "Define category styles for slider and masonry portfolio lists.", 'borderland' )
);
$panel1->addChild(
	"group12",
	$group12
);

$row1 = new BorderlandElatedRow();
$group12->addChild(
	"row1",
	$row1
);
$portfolio_category_list_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_category_list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_category_list_color",
	$portfolio_category_list_color
);
$portfolio_category_list_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_list_font_size",
	$portfolio_category_list_font_size
);
$portfolio_category_list_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_category_list_line_height",
	$portfolio_category_list_line_height
);
$portfolio_category_list_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_list_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_list_text_transform",
	$portfolio_category_list_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group12->addChild(
	"row2",
	$row2
);
$portfolio_category_list_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_category_list_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_category_list_font_family",
	$portfolio_category_list_font_family
);
$portfolio_category_list_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_list_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_list_font_style",
	$portfolio_category_list_font_style
);
$portfolio_category_list_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_category_list_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_list_font_weight",
	$portfolio_category_list_font_weight
);
$portfolio_category_list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_category_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"portfolio_category_list_letter_spacing",
	$portfolio_category_list_letter_spacing
);

// Portfolio Filter
$portfolio_filter = new BorderlandElatedTitle(
	"portfolio_filter",
	esc_html__( "Category Filter", 'borderland' )
);
$panel1->addChild(
	"portfolio_filter",
	$portfolio_filter
);

$portfolio_list_filter_background_color = new BorderlandElatedField(
	"color",
	"portfolio_list_filter_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose color for background of filter area", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_background_color",
	$portfolio_list_filter_background_color
);

$portfolio_list_filter_height = new BorderlandElatedField(
	"text",
	"portfolio_list_filter_height",
	"",
	esc_html__( "Height (px)", 'borderland' ),
	esc_html__( "Enter height for filter area", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_height",
	$portfolio_list_filter_height
);

$portfolio_filter_margin_bottom = new BorderlandElatedField(
	"text",
	"portfolio_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_filter_margin_bottom",
	$portfolio_filter_margin_bottom
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Title", 'borderland' ),
	esc_html__( "Define text styles for filter title", 'borderland' )
);
$panel1->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$portfolio_filter_title_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_filter_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_title_color",
	$portfolio_filter_title_color
);
$portfolio_filter_title_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_title_font_size",
	$portfolio_filter_title_font_size
);
$portfolio_filter_title_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_title_line_height",
	$portfolio_filter_title_line_height
);
$portfolio_filter_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_filter_title_text_transform",
	$portfolio_filter_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$portfolio_filter_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_filter_title_font_family",
	$portfolio_filter_title_font_family
);
$portfolio_filter_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_filter_title_font_style",
	$portfolio_filter_title_font_style
);
$portfolio_filter_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_filter_title_font_weight",
	$portfolio_filter_title_font_weight
);
$portfolio_filter_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"portfolio_filter_title_letter_spacing",
	$portfolio_filter_title_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Categories", 'borderland' ),
	esc_html__( "Define text styles for filter categories", 'borderland' )
);
$panel1->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$portfolio_filter_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_color",
	$portfolio_filter_color
);
$portfolio_filter_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_hovercolor",
	$portfolio_filter_hovercolor
);
$portfolio_filter_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_font_size",
	$portfolio_filter_font_size
);
$portfolio_filter_line_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_filter_line_height",
	$portfolio_filter_line_height
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);
$portfolio_filter_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"portfolio_filter_font_family",
	$portfolio_filter_font_family
);
$portfolio_filter_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_filter_font_style",
	$portfolio_filter_font_style
);
$portfolio_filter_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_filter_font_weight",
	$portfolio_filter_font_weight
);
$portfolio_filter_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_filter_text_transform",
	$portfolio_filter_text_transform
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);
$portfolio_filter_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"portfolio_filter_letter_spacing",
	$portfolio_filter_letter_spacing
);

$portfolio_filter_disable_separator = new BorderlandElatedField(
	"yesno",
	"portfolio_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'borderland' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_portfolio_filter_separator_container",
		"dependence_show_on_yes" => "",
	)
);
$panel1->addChild(
	"portfolio_filter_disable_separator",
	$portfolio_filter_disable_separator
);

$portfolio_filter_separator_container = new BorderlandElatedContainer(
	"portfolio_filter_separator_container",
	"portfolio_filter_disable_separator",
	"yes"
);
$panel1->addChild(
	"portfolio_filter_separator_container",
	$portfolio_filter_separator_container
);

$portfolio_filter_separator_color = new BorderlandElatedField(
	"color",
	"portfolio_filter_separator_color",
	"",
	esc_html__( "Separator Between Categories Color", 'borderland' ),
	esc_html__( "Choose a color for separator between categories in filter", 'borderland' )
);
$portfolio_filter_separator_container->addChild(
	"portfolio_filter_separator_color",
	$portfolio_filter_separator_color
);

//ICONS STYLE
$icons_style = new BorderlandElatedTitle(
	"icons_style",
	esc_html__( "Icons", 'borderland' )
);
$panel1->addChild(
	"icons_style",
	$icons_style
);

$portfolio_list_icons_pack = new BorderlandElatedField(
	"select",
	"portfolio_list_icons_pack",
	"font-awesome",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( 'Choose font family for hover icons on portfolio', 'borderland' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'borderland' ),
		"font-elegant" => esc_html__( "Font Elegant", 'borderland' )
	)
);
$panel1->addChild(
	"portfolio_list_icons_pack",
	$portfolio_list_icons_pack
);

$portfolio_list_icons_size = new BorderlandElatedField(
	"text",
	"portfolio_list_icons_size",
	"",
	esc_html__( "Size (px)", 'borderland' ),
	esc_html__( "Enter size for icons in portfolio list. Default value is 16", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_icons_size",
	$portfolio_list_icons_size
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color of the icons on project hover", 'borderland' )
);
$panel1->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$portfolio_list_icons_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_color",
	$portfolio_list_icons_color
);
$portfolio_list_icons_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_hover_color",
	$portfolio_list_icons_hover_color
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Define icons background color styles on project hover", 'borderland' )
);
$panel1->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);
$portfolio_list_icons_background_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_background_color",
	$portfolio_list_icons_background_color
);
$portfolio_list_icons_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_background_hover_color",
	$portfolio_list_icons_background_hover_color
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Border", 'borderland' ),
	esc_html__( "Define icons border styles on project hover", 'borderland' )
);
$panel1->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);

$portfolio_list_icons_border_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_border_color",
	$portfolio_list_icons_border_color
);
$portfolio_list_icons_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_list_icons_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_border_hover_color",
	$portfolio_list_icons_border_hover_color
);
$portfolio_list_icons_border_width = new BorderlandElatedField(
	"textsimple",
	"portfolio_list_icons_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_border_width",
	$portfolio_list_icons_border_width
);
$portfolio_list_icons_border_radius = new BorderlandElatedField(
	"textsimple",
	"portfolio_list_icons_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_list_icons_border_radius",
	$portfolio_list_icons_border_radius
);

$portfolio_masonry_style = new BorderlandElatedTitle(
	"portfolio_masonry_style",
	esc_html__( "Masonry", 'borderland' )
);
$panel1->addChild(
	"portfolio_masonry_style",
	$portfolio_masonry_style
);

$portfolio_masonry_with_padding_width = new BorderlandElatedField(
	"text",
	"portfolio_masonry_with_padding_width",
	"",
	esc_html__( "Space Width (px)", 'borderland' ),
	esc_html__( "Enter space width for Masonry if space is enabled. Default value is 10", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_masonry_with_padding_width",
	$portfolio_masonry_with_padding_width
);

$thin_plus_only_style = new BorderlandElatedTitle(
	"thin_plus_only_style",
	esc_html__( "Thin Plus Only", 'borderland' )
);
$panel1->addChild(
	"thin_plus_only_style",
	$thin_plus_only_style
);

$group13 = new BorderlandElatedGroup(
	esc_html__( "Cursor", 'borderland' ),
	esc_html__( "Define styles for Cursor on Thin Plus Only hover type", 'borderland' )
);
$panel1->addChild(
	"group13",
	$group13
);

$row1 = new BorderlandElatedRow();
$group13->addChild(
	"row1",
	$row1
);
$thin_plus_only_style_color = new BorderlandElatedField(
	"colorsimple",
	"thin_plus_only_style_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"thin_plus_only_style_color",
	$thin_plus_only_style_color
);
$thin_plus_only_style_size = new BorderlandElatedField(
	"textsimple",
	"thin_plus_only_style_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"thin_plus_only_style_size",
	$thin_plus_only_style_size
);
$thin_plus_only_style_weight = new BorderlandElatedField(
	"selectblanksimple",
	"thin_plus_only_style_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"thin_plus_only_style_weight",
	$thin_plus_only_style_weight
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Button Shadow", 'borderland' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'borderland' )
);
$panel1->addChild(
	"group14",
	$group14
);

$row1 = new BorderlandElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$portfolio_with_btn_shadow_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_with_btn_shadow_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for box shadow", 'borderland' )
);
$row1->addChild(
	"portfolio_with_btn_shadow_color",
	$portfolio_with_btn_shadow_color
);

$row2 = new BorderlandElatedRow();
$group14->addChild(
	"row2",
	$row2
);

$portfolio_with_btn_h_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_with_btn_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_with_btn_h_shadow",
	$portfolio_with_btn_h_shadow
);

$portfolio_with_btn_v_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_with_btn_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_with_btn_v_shadow",
	$portfolio_with_btn_v_shadow
);

$portfolio_with_btn_blur_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_with_btn_blur_shadow",
	"",
	esc_html__( "Blur (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_with_btn_blur_shadow",
	$portfolio_with_btn_blur_shadow
);

$portfolio_with_btn_spread_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_with_btn_spread_shadow",
	"",
	esc_html__( "Spread (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_with_btn_spread_shadow",
	$portfolio_with_btn_spread_shadow
);

$animated_border_hover_style = new BorderlandElatedTitle(
	"animated_border_hover_style",
	esc_html__( "Animated Border", 'borderland' )
);
$panel1->addChild(
	"animated_border_hover_style",
	$animated_border_hover_style
);

$group23 = new BorderlandElatedGroup(
	esc_html__( "Border Hover", 'borderland' ),
	esc_html__( "Define styles for border on Animated Border hover type", 'borderland' )
);
$panel1->addChild(
	"group23",
	$group23
);

$row1 = new BorderlandElatedRow();
$group23->addChild(
	"row1",
	$row1
);
$animated_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"animated_border_hover_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"animated_border_hover_color",
	$animated_border_hover_color
);
$animated_border_hover_width = new BorderlandElatedField(
	"textsimple",
	"animated_border_hover_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"animated_border_hover_width",
	$animated_border_hover_width
);

//Portfolio Single Project

$panel2 = new BorderlandElatedPanel(
	esc_html__( "Portfolio Single", 'borderland' ),
	"porfolio_single_project"
);
$portfolioPage->addChild(
	"panel2",
	$panel2
);

$portfolio_style = new BorderlandElatedField(
	"select",
	"portfolio_style",
	"small-images",
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
	)
);
$panel2->addChild(
	"portfolio_style",
	$portfolio_style
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Portfolio Overlay Color", 'borderland' ),
	esc_html__( "Define color and opacity for overlay color", 'borderland' )
);
$panel2->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$portfolio_gallery_overlay_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_gallery_overlay_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"portfolio_gallery_overlay_color",
	$portfolio_gallery_overlay_color
);

$portfolio_gallery_overlay_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_gallery_overlay_transparency",
	"",
	esc_html__( "Transparency (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_gallery_overlay_transparency",
	$portfolio_gallery_overlay_transparency
);

$portfolio_gallery_image_hover_style = new BorderlandElatedField(
	"select",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	esc_html__( "Portfolio Image Hover", 'borderland' ),
	esc_html__( 'Choose a default hover type for Single Project pages', 'borderland' ),
	array(
		"disable" => esc_html__( "None", 'borderland' ),
		"magnifier" => esc_html__( "Magnifier", 'borderland' ),
		"icon" => esc_html__( "Icon", 'borderland' ),
		"text" => esc_html__( "Image Title", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"disable"   => "#eltdf_portfolio_gallery_image_hover_separator_container,#eltdf_portfolio_gallery_image_hover_icon_container",
			"magnifier" => "#eltdf_portfolio_gallery_image_hover_separator_container,#eltdf_portfolio_gallery_image_hover_icon_container",
			"icon"      => "#eltdf_portfolio_gallery_image_hover_separator_container",
			"text"      => "#eltdf_portfolio_gallery_image_hover_icon_container"
		),
		"show"       => array(
			"disable"   => "",
			"magnifier" => "",
			"icon"      => "#eltdf_portfolio_gallery_image_hover_icon_container",
			"text"      => "#eltdf_portfolio_gallery_image_hover_separator_container"
		)
	)
);
$panel2->addChild(
	"portfolio_gallery_image_hover_style",
	$portfolio_gallery_image_hover_style
);

$portfolio_gallery_image_hover_separator_container = new BorderlandElatedContainer(
	"portfolio_gallery_image_hover_separator_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "icon" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_separator_container",
	$portfolio_gallery_image_hover_separator_container
);

$portfolio_gallery_image_hover_separator = new BorderlandElatedField(
	"select",
	"portfolio_gallery_image_hover_separator",
	"",
	esc_html__( "Separator below image title", 'borderland' ),
	esc_html__( "This option will place separator below text", 'borderland' ),
	array(
		"yes" => esc_html__( "Yes", 'borderland' ),
		"no" => esc_html__( "No", 'borderland' )
	),
	array( "col_width" => 3 )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_image_hover_separator",
	$portfolio_gallery_image_hover_separator
);

$portfolio_gallery_overlay_text_color = new BorderlandElatedField(
	"color",
	"portfolio_gallery_overlay_text_color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "Choose a color for overlay text in Single Project pages", 'borderland' )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_overlay_text_color",
	$portfolio_gallery_overlay_text_color
);

$portfolio_gallery_image_hover_icon_container = new BorderlandElatedContainer(
	"portfolio_gallery_image_hover_icon_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "text" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_icon_container",
	$portfolio_gallery_image_hover_icon_container
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Portfolio Image Hover Icon", 'borderland' ),
	esc_html__( "Define style for Portfolio Image Hover Icon", 'borderland' )
);
$portfolio_gallery_image_hover_icon_container->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$portfolio_gallery_icon_pack = new BorderlandElatedField(
	"selectsimple",
	"portfolio_gallery_icon_pack",
	"font-awesome",
	esc_html__( "Font Family", 'borderland' ),
	"",
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'borderland' ),
		"font-elegant" => esc_html__( "Font Elegant", 'borderland' )
	)
);
$group4->addChild(
	"portfolio_gallery_icon_pack",
	$portfolio_gallery_icon_pack
);

$portfolio_gallery_icon_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_gallery_icon_size",
	"",
	esc_html__( "Size", 'borderland' )
);
$group4->addChild(
	"portfolio_gallery_icon_size",
	$portfolio_gallery_icon_size
);

$portfolio_gallery_icon_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_gallery_icon_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$group4->addChild(
	"portfolio_gallery_icon_color",
	$portfolio_gallery_icon_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define title styles on project.", 'borderland' )
);
$panel2->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$portfolio_title_tag = new BorderlandElatedField(
	"selectsimple",
	"portfolio_title_tag",
	"h3",
	esc_html__( "Tag element", 'borderland' ),
	"",
	array(
		"h2" => esc_html__( "h2", 'borderland' ),
		"h3" => esc_html__( "h3", 'borderland' ),
		"h4" => esc_html__( "h4", 'borderland' ),
		"h5" => esc_html__( "h5", 'borderland' )
	)
);
$row1->addChild(
	"portfolio_title_tag",
	$portfolio_title_tag
);

$portfolio_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"portfolio_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_title_margin_bottom",
	$portfolio_title_margin_bottom
);

$portfolio_title_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_title_color",
	$portfolio_title_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Additional Portfolio Titles", 'borderland' ),
	esc_html__( "Define additional portfolio titles styles on project.", 'borderland' )
);
$panel2->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$portfolio_info_tag = new BorderlandElatedField(
	"selectsimple",
	"portfolio_info_tag",
	"h6",
	esc_html__( "Tag element", 'borderland' ),
	"",
	array(
		"h4" => esc_html__( "h4", 'borderland' ),
		"h5" => esc_html__( "h5", 'borderland' ),
		"h6" => esc_html__( "h6", 'borderland' )
	)
);
$row1->addChild(
	"portfolio_info_tag",
	$portfolio_info_tag
);

$portfolio_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"portfolio_info_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_info_margin_bottom",
	$portfolio_info_margin_bottom
);

$portfolio_info_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_info_color",
	$portfolio_info_color
);

$lightbox_single_project = new BorderlandElatedField(
	"yesno",
	"lightbox_single_project",
	"yes",
	esc_html__( "Lightbox for Images", 'borderland' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for projects with images.", 'borderland' )
);
$panel2->addChild(
	"lightbox_single_project",
	$lightbox_single_project
);

$lightbox_video_single_project = new BorderlandElatedField(
	"yesno",
	"lightbox_video_single_project",
	"no",
	esc_html__( "Lightbox for Videos", 'borderland' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.", 'borderland' )
);
$panel2->addChild(
	"lightbox_video_single_project",
	$lightbox_video_single_project
);

$portfolio_hide_categories = new BorderlandElatedField(
	"yesno",
	"portfolio_hide_categories",
	"no",
	esc_html__( "Hide Categories", 'borderland' ),
	esc_html__( "Enabling this option will disable category meta description on Single Projects.", 'borderland' )
);
$panel2->addChild(
	"portfolio_hide_categories",
	$portfolio_hide_categories
);

$portfolio_hide_date = new BorderlandElatedField(
	"yesno",
	"portfolio_hide_date",
	"no",
	esc_html__( "Hide Date", 'borderland' ),
	esc_html__( "Enabling this option will disable date meta on Single Projects.", 'borderland' )
);
$panel2->addChild(
	"portfolio_hide_date",
	$portfolio_hide_date
);

$portfolio_hide_comments = new BorderlandElatedField(
	"yesno",
	"portfolio_hide_comments",
	"yes",
	esc_html__( "Hide Comments", 'borderland' ),
	esc_html__( "Enabling this option will turn off comments functionality.", 'borderland' )
);
$panel2->addChild(
	"portfolio_hide_comments",
	$portfolio_hide_comments
);

$portfolio_text_follow = new BorderlandElatedField(
	"portfoliofollow",
	"portfolio_text_follow",
	"portfolio_single_follow",
	esc_html__( "Sticky Side Text ", 'borderland' ),
	esc_html__( "Enabling this option will make side text sticky on Single Project pages", 'borderland' )
);
$panel2->addChild(
	"portfolio_text_follow",
	$portfolio_text_follow
);

$portfolio_hide_pagination = new BorderlandElatedField(
	"yesno",
	"portfolio_hide_pagination",
	"no",
	esc_html__( "Hide Pagination", 'borderland' ),
	esc_html__( "Enabling this option will turn off portfolio pagination functionality.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_portfolio_hide_pagination_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"portfolio_hide_pagination",
	$portfolio_hide_pagination
);

$portfolio_hide_pagination_container = new BorderlandElatedContainer(
	"portfolio_hide_pagination_container",
	"portfolio_hide_pagination",
	"yes"
);
$panel2->addChild(
	"portfolio_hide_pagination_container",
	$portfolio_hide_pagination_container
);

$portfolio_navigation_through_same_category = new BorderlandElatedField(
	"yesno",
	"portfolio_navigation_through_same_category",
	"no",
	esc_html__( "Enable Pagination Through Same Category", 'borderland' ),
	esc_html__( "Enabling this option will make portfolio pagination sort through current category.", 'borderland' )
);
$portfolio_hide_pagination_container->addChild(
	"portfolio_navigation_through_same_category",
	$portfolio_navigation_through_same_category
);

$portfolio_box = new BorderlandElatedField(
	"yesno",
	"portfolio_box",
	"yes",
	esc_html__( "Enable Box Holder", 'borderland' ),
	esc_html__( "Enabling this option will place box holder on project. This option works only if Portfolio style is Big Images, Big Slider or Gallery", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_portfolio_without_box_container",
		"dependence_show_on_yes" => "#eltdf_portfolio_box_container"
	)
);
$panel2->addChild(
	"portfolio_box",
	$portfolio_box
);

$portfolio_box_container = new BorderlandElatedContainer(
	"portfolio_box_container",
	"portfolio_box",
	"no"
);
$panel2->addChild(
	"portfolio_box_container",
	$portfolio_box_container
);

$portfolio_box_background_color = new BorderlandElatedField(
	"color",
	"portfolio_box_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Default color is #ffffff", 'borderland' )
);
$portfolio_box_container->addChild(
	"portfolio_box_background_color",
	$portfolio_box_background_color
);

$portfolio_box_lr_padding = new BorderlandElatedField(
	"text",
	"portfolio_box_lr_padding",
	"",
	esc_html__( "Padding(px)", 'borderland' ),
	esc_html__( "Format: 10px 5px 10px 8px (Default value is 46px 26px 45px 26px)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_box_container->addChild(
	"portfolio_box_lr_padding",
	$portfolio_box_lr_padding
);

$portfolio_without_box_container = new BorderlandElatedContainer(
	"portfolio_without_box_container",
	"portfolio_box",
	"yes"
);
$panel2->addChild(
	"portfolio_without_box_container",
	$portfolio_without_box_container
);

$portfolio_box_top_padding = new BorderlandElatedField(
	"text",
	"portfolio_box_top_padding",
	"",
	esc_html__( "Top Padding(px)", 'borderland' ),
	esc_html__( "Default value is 46", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_without_box_container->addChild(
	"portfolio_box_top_padding",
	$portfolio_box_top_padding
);

$portfolio_columns_number = new BorderlandElatedField(
	"select",
	"portfolio_columns_number",
	"2",
	esc_html__( "Number of Columns", 'borderland' ),
	esc_html__( 'Enter the number of columns for Portfolio Gallery type', 'borderland' ),
	array(
		"2" => esc_html__( "2 columns", 'borderland' ),
		"3" => esc_html__( "3 columns", 'borderland' ),
		"4" => esc_html__( "4 columns", 'borderland' )
	)
);
$panel2->addChild(
	"portfolio_columns_number",
	$portfolio_columns_number
);

$portfolio_single_slug = new BorderlandElatedField(
	"text",
	"portfolio_single_slug",
	"",
	esc_html__( "Portfolio Single Slug", 'borderland' ),
	esc_html__( 'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"portfolio_single_slug",
	$portfolio_single_slug
);

/*Navigation*/

$portfolio_navigation_title = new BorderlandElatedTitle(
	"portfolio_navigation_title",
	esc_html__( "Navigation", 'borderland' )
);
$panel2->addChild(
	"portfolio_navigation_title",
	$portfolio_navigation_title
);

$group19 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Size", 'borderland' ),
	esc_html__( "Define navigation button size", 'borderland' )
);
$panel2->addChild(
	"group19",
	$group19
);

$row1 = new BorderlandElatedRow();
$group19->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_width = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_button_width",
	$portfolio_single_navigation_button_width
);

$portfolio_single_navigation_button_height = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_button_height",
	$portfolio_single_navigation_button_height
);

$group20 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Position", 'borderland' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'borderland' )
);
$panel2->addChild(
	"group20",
	$group20
);

$row1 = new BorderlandElatedRow();
$group20->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_position = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_button_position",
	$portfolio_single_navigation_button_position
);

$group16 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define navigation arrow style", 'borderland' )
);
$panel2->addChild(
	"group16",
	$group16
);

$row1 = new BorderlandElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_arrow_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'borderland' ),
	esc_html__( "Default value is 14    ", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_size",
	$portfolio_single_navigation_arrow_size
);

$portfolio_single_navigation_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"portfolio_single_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"portfolio_single_navigation_arrows_type",
	$portfolio_single_navigation_arrows_type
);

$portfolio_single_navigation_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_color",
	$portfolio_single_navigation_arrow_color
);

$portfolio_single_navigation_arrow_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_arrow_transparency",
	$portfolio_single_navigation_arrow_transparency
);

$row2 = new BorderlandElatedRow( true );
$group16->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_color",
	$portfolio_single_navigation_arrow_hover_color
);

$portfolio_single_navigation_arrow_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"portfolio_single_navigation_arrow_hover_transparency",
	$portfolio_single_navigation_arrow_hover_transparency
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Background", 'borderland' ),
	esc_html__( "Define navigation button background", 'borderland' )
);
$panel2->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_background_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_background_color",
	$portfolio_single_navigation_background_color
);

$portfolio_single_navigation_background_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_background_transparency",
	$portfolio_single_navigation_background_transparency
);

$portfolio_single_navigation_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_color",
	$portfolio_single_navigation_background_hover_color
);

$portfolio_single_navigation_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_background_hover_transparency",
	$portfolio_single_navigation_background_hover_transparency
);

$group18 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Border", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
);
$panel2->addChild(
	"group18",
	$group18
);

$row1 = new BorderlandElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_border_width = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'borderland' ),
	""
);
$row1->addChild(
	"portfolio_single_navigation_border_width",
	$portfolio_single_navigation_border_width
);

$portfolio_single_navigation_border_radius = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_border_radius",
	$portfolio_single_navigation_border_radius
);

$portfolio_single_navigation_border_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_border_color",
	$portfolio_single_navigation_border_color
);

$portfolio_single_navigation_border_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_border_transparency",
	$portfolio_single_navigation_border_transparency
);

$row2 = new BorderlandElatedRow( true );
$group18->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_color",
	$portfolio_single_navigation_border_hover_color
);

$portfolio_single_navigation_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"portfolio_single_navigation_border_hover_transparency",
	$portfolio_single_navigation_border_hover_transparency
);

$portfolio_single_navigation_show_button_shadow = new BorderlandElatedField(
	"yesno",
	"portfolio_single_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'borderland' ),
	esc_html__( "Enabling this options will show button shadow", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_portfolio_single_navigation_button_shadow_container"
	)
);
$panel2->addChild(
	"portfolio_single_navigation_show_button_shadow",
	$portfolio_single_navigation_show_button_shadow
);

$portfolio_single_navigation_button_shadow_container = new BorderlandElatedContainer(
	"portfolio_single_navigation_button_shadow_container",
	"portfolio_single_navigation_show_button_shadow",
	"no"
);
$panel2->addChild(
	"portfolio_single_navigation_button_shadow_container",
	$portfolio_single_navigation_button_shadow_container
);

$group21 = new BorderlandElatedGroup(
	esc_html__( "Button Shadow", 'borderland' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'borderland' )
);
$portfolio_single_navigation_button_shadow_container->addChild(
	"group21",
	$group21
);

$row1 = new BorderlandElatedRow();
$group21->addChild(
	"row1",
	$row1
);

$portfolio_single_navigation_button_shadow_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_single_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for  box shadow", 'borderland' )
);
$row1->addChild(
	"portfolio_single_navigation_button_shadow_color",
	$portfolio_single_navigation_button_shadow_color
);

$row2 = new BorderlandElatedRow();
$group21->addChild(
	"row2",
	$row2
);

$portfolio_single_navigation_button_h_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_h_shadow",
	$portfolio_single_navigation_button_h_shadow
);

$portfolio_single_navigation_button_v_shadow = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_v_shadow",
	$portfolio_single_navigation_button_v_shadow
);

$portfolio_single_navigation_button_blur = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_blur",
	$portfolio_single_navigation_button_blur
);

$portfolio_single_navigation_button_spread = new BorderlandElatedField(
	"textsimple",
	"portfolio_single_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'borderland' ),
	""
);
$row2->addChild(
	"portfolio_single_navigation_button_spread",
	$portfolio_single_navigation_button_spread
);

$portfolio_back_to_button_choice = new BorderlandElatedField(
	"select",
	"portfolio_back_to_button_choice",
	"icon",
	esc_html__( "Back to Button Type", 'borderland' ),
	esc_html__( "Choose Back to button type", 'borderland' ),
	array(
		"icon" => esc_html__( "Icon", 'borderland' ),
		"custom_icon" => esc_html__( "Custom Icon", 'borderland' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"icon"        => "#eltdf_portfolio_back_to_button_icon_container",
			"custom_icon" => "#eltdf_portfolio_back_to_button_custom_container"
		),
		"hide"       => array(
			"custom_icon" => "#eltdf_portfolio_back_to_button_icon_container",
			"icon"        => "#eltdf_portfolio_back_to_button_custom_container"
		)
	)
);

$panel2->addChild(
	"portfolio_back_to_button_choice",
	$portfolio_back_to_button_choice
);

$portfolio_back_to_button_icon_container = new BorderlandElatedContainer(
	"portfolio_back_to_button_icon_container",
	"portfolio_back_to_button_choice",
	"custom_icon"
);
$panel2->addChild(
	"portfolio_back_to_button_icon_container",
	$portfolio_back_to_button_icon_container
);

$group22 = new BorderlandElatedGroup(
	esc_html__( "Icon and Style", 'borderland' ),
	esc_html__( "Choose icon and style for it", 'borderland' )
);
$portfolio_back_to_button_icon_container->addChild(
	"group22",
	$group22
);

$row1 = new BorderlandElatedRow();
$group22->addChild(
	"row1",
	$row1
);

$portfolio_back_to_button_icon_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_back_to_button_icon_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_color",
	$portfolio_back_to_button_icon_color
);

$portfolio_back_to_button_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_back_to_button_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_hover_color",
	$portfolio_back_to_button_icon_hover_color
);

$portfolio_back_to_button_icon = new BorderlandElatedField(
	"selectsimple",
	"portfolio_back_to_button_icon",
	"",
	esc_html__( "Icon", 'borderland' ),
	esc_html__( "Choose icon for Back to button", 'borderland' ),
	array(
		"fa fa-th" => esc_html__( "fa-th grid", 'borderland' ),
		"icon_grid-3x3" => esc_html__( "icon_grid 3x3", 'borderland' ),
		"ion-grid" => esc_html__( "ion-grid", 'borderland' )
	)
);
$row1->addChild(
	"portfolio_back_to_button_icon",
	$portfolio_back_to_button_icon
);

$portfolio_back_to_button_icon_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_back_to_button_icon_size",
	"",
	esc_html__( "Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_back_to_button_icon_size",
	$portfolio_back_to_button_icon_size
);

$portfolio_back_to_button_custom_container = new BorderlandElatedContainer(
	"portfolio_back_to_button_custom_container",
	"portfolio_back_to_button_choice",
	"icon"
);
$panel2->addChild(
	"portfolio_back_to_button_custom_container",
	$portfolio_back_to_button_custom_container
);

$portfolio_back_to_button_custom_icon = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_icon",
	"",
	esc_html__( "Custom Icon", 'borderland' ),
	esc_html__( "Choose custom icon for Back to button", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon",
	$portfolio_back_to_button_custom_icon
);

$portfolio_back_to_button_custom_hover_icon = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon",
	"",
	esc_html__( "Custom Hover Icon", 'borderland' ),
	esc_html__( "Choose custom hover icon for Back to button", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon",
	$portfolio_back_to_button_custom_hover_icon
);

$portfolio_back_to_button_custom_icon_retina_x15 = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x15",
	"",
	esc_html__( "Custom Icon for Retina x1.5", 'borderland' ),
	esc_html__( "Choose custom icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x15",
	$portfolio_back_to_button_custom_icon_retina_x15
);

$portfolio_back_to_button_custom_hover_icon_retina_x15 = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	"",
	esc_html__( "Custom Hover Icon for Retina x1.5", 'borderland' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x1.5 (note that you must have Custom Icon first)", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x15",
	$portfolio_back_to_button_custom_hover_icon_retina_x15
);

$portfolio_back_to_button_custom_icon_retina_x2 = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_icon_retina_x2",
	"",
	esc_html__( "Custom Icon for Retina x2", 'borderland' ),
	esc_html__( "Choose custom icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_icon_retina_x2",
	$portfolio_back_to_button_custom_icon_retina_x2
);

$portfolio_back_to_button_custom_hover_icon_retina_x2 = new BorderlandElatedField(
	"image",
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	"",
	esc_html__( "Custom Hover Icon for Retina x2", 'borderland' ),
	esc_html__( "Choose custom hover icon for Back to button for retina x2 (note that you must have Custom Icon first)", 'borderland' )
);
$portfolio_back_to_button_custom_container->addChild(
	"portfolio_back_to_button_custom_hover_icon_retina_x2",
	$portfolio_back_to_button_custom_hover_icon_retina_x2
);