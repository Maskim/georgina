<?php

$footerPage = new BorderlandElatedAdminPage(
	"3",
	esc_html__( "Footer", 'borderland' ),
	"fa fa-sort-amount-asc"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"footer",
	$footerPage
);

$panel10 = new BorderlandElatedPanel(
	esc_html__( "Footer", 'borderland' ),
	"footer_panel"
);
$footerPage->addChild(
	"panel10",
	$panel10
);

$uncovering_footer = new BorderlandElatedField(
	"yesno",
	"uncovering_footer",
	"no",
	esc_html__( "Uncovering Footer", 'borderland' ),
	esc_html__( "Enabling this option will make Footer gradually appear on scroll", 'borderland' )
);
$panel10->addChild(
	"uncovering_footer",
	$uncovering_footer
);

$footer_in_grid = new BorderlandElatedField(
	"yesno",
	"footer_in_grid",
	"yes",
	esc_html__( "Footer in Grid", 'borderland' ),
	esc_html__( "Enabling this option will place Footer content in grid", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_grid_background_container"
	)
);
$panel10->addChild(
	"footer_in_grid",
	$footer_in_grid
);

$footer_main_image_background = new BorderlandElatedField(
	"image",
	"footer_main_image_background",
	"",
	esc_html__( "Footer Background Image", 'borderland' ),
	esc_html__( "Choose footer background image", 'borderland' )
);
$panel10->addChild(
	"footer_main_image_background",
	$footer_main_image_background
);

$show_footer_top = new BorderlandElatedField(
	"yesno",
	"show_footer_top",
	"yes",
	esc_html__( "Show Footer Top", 'borderland' ),
	esc_html__( "Enabling this option will show Footer Top area", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_show_footer_top_container"
	)
);
$panel10->addChild(
	"show_footer_top",
	$show_footer_top
);

$show_footer_top_container = new BorderlandElatedContainer(
	"show_footer_top_container",
	"show_footer_top",
	"no"
);
$panel10->addChild(
	"show_footer_top_container",
	$show_footer_top_container
);

$footer_top_columns_alignment = new BorderlandElatedField(
	"select",
	"footer_top_columns_alignment",
	"",
	esc_html__( "Footer Top Columns Alignment", 'borderland' ),
	esc_html__( "Text Alignment in Footer Columns", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns_alignment",
	$footer_top_columns_alignment
);

$footer_top_columns = new BorderlandElatedField(
	"select",
	"footer_top_columns",
	"4",
	esc_html__( "Footer Top Columns", 'borderland' ),
	esc_html__( "Choose number of columns for Footer Top area", 'borderland' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3",
		"5" => esc_html__( "3(25%+25%+50%)", 'borderland' ),
		"6" => esc_html__( "3(50%+25%+25%)", 'borderland' ),
		"4" => "4"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"1" => "#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"2" => "#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"3" => "#eltdf_footer_top_column4_alignment_container",
			"4" => "",
			"5" => "#eltdf_footer_top_column4_alignment_container",
			"6" => "#eltdf_footer_top_column4_alignment_container"
		),
		"show"       => array(
			"1" => "#eltdf_footer_top_column1_alignment_container",
			"2" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container",
			"3" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
			"4" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container,#eltdf_footer_top_column4_alignment_container",
			"5" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
			"6" => "#eltdf_footer_top_column1_alignment_container,#eltdf_footer_top_column2_alignment_container,#eltdf_footer_top_column3_alignment_container",
		)
	)
);
$show_footer_top_container->addChild(
	"footer_top_columns",
	$footer_top_columns
);

$footer_top_column1_alignment_container = new BorderlandElatedContainer(
	"footer_top_column1_alignment_container",
	"footer_top_columns",
	""
);
$show_footer_top_container->addChild(
	"footer_top_column1_alignment_container",
	$footer_top_column1_alignment_container
);

$footer_top_column1_alignment = new BorderlandElatedField(
	"select",
	"footer_top_column1_alignment",
	"",
	esc_html__( "Footer Top First Column Alignment", 'borderland' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'borderland' ),
	array(
		"" => esc_html__( "Default", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	),
	array( "col_width" => 3 )
);
$footer_top_column1_alignment_container->addChild(
	"footer_top_column1_alignment",
	$footer_top_column1_alignment
);

$footer_top_column2_alignment_container = new BorderlandElatedContainer(
	"footer_top_column2_alignment_container",
	"footer_top_columns",
	"1"
);
$show_footer_top_container->addChild(
	"footer_top_column2_alignment_container",
	$footer_top_column2_alignment_container
);

$footer_top_column2_alignment = new BorderlandElatedField(
	"select",
	"footer_top_column2_alignment",
	"",
	esc_html__( "Footer Top Second Column Alignment", 'borderland' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'borderland' ),
	array(
		"" => esc_html__( "Default", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	),
	array( "col_width" => 3 )
);
$footer_top_column2_alignment_container->addChild(
	"footer_top_column2_alignment",
	$footer_top_column2_alignment
);

$footer_top_column3_alignment_container = new BorderlandElatedContainer(
	"footer_top_column3_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2" )
);
$show_footer_top_container->addChild(
	"footer_top_column3_alignment_container",
	$footer_top_column3_alignment_container
);

$footer_top_column3_alignment = new BorderlandElatedField(
	"select",
	"footer_top_column3_alignment",
	"",
	esc_html__( "Footer Top Third Column Alignment", 'borderland' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'borderland' ),
	array(
		"" => esc_html__( "Default", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	),
	array( "col_width" => 3 )
);
$footer_top_column3_alignment_container->addChild(
	"footer_top_column3_alignment",
	$footer_top_column3_alignment
);

$footer_top_column4_alignment_container = new BorderlandElatedContainer(
	"footer_top_column4_alignment_container",
	"footer_top_columns",
	"1",
	array( "1", "2", "3", "5", "6" )
);
$show_footer_top_container->addChild(
	"footer_top_column4_alignment_container",
	$footer_top_column4_alignment_container
);

$footer_top_column4_alignment = new BorderlandElatedField(
	"select",
	"footer_top_column4_alignment",
	"",
	esc_html__( "Footer Top Fourth Column Alignment", 'borderland' ),
	esc_html__( "This option will overwrite 'Footer Top Columns Alignment'", 'borderland' ),
	array(
		"" => esc_html__( "Default", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	),
	array( "col_width" => 3 )
);
$footer_top_column4_alignment_container->addChild(
	"footer_top_column4_alignment",
	$footer_top_column4_alignment
);

$footer_border_columns = new BorderlandElatedField(
	"yesno",
	"footer_border_columns",
	"yes",
	esc_html__( "Border Between Columns", 'borderland' ),
	esc_html__( "Disabling this option will remove border between footer columns.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_border_columns_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_border_columns",
	$footer_border_columns
);

$footer_border_columns_holder = new BorderlandElatedContainer(
	"footer_border_columns_holder",
	"footer_border_columns",
	"no"
);
$show_footer_top_container->addChild(
	"footer_border_columns_holder",
	$footer_border_columns_holder
);

$footer_border_columns_color = new BorderlandElatedField(
	"color",
	"footer_border_columns_color",
	"",
	esc_html__( "Border Color Between Columns", 'borderland' ),
	esc_html__( "Choose a color for border in footer columns.", 'borderland' )
);
$footer_border_columns_holder->addChild(
	"footer_border_columns_color",
	$footer_border_columns_color
);

$footer_bottom_border_element = new BorderlandElatedField(
	"yesno",
	"footer_bottom_border_element",
	"yes",
	esc_html__( "Border Bottom on Elements", 'borderland' ),
	esc_html__( "Enabling this option will add border bottom on footer elements.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_bottom_border_element_holder"
	)
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element",
	$footer_bottom_border_element
);

$footer_bottom_border_element_holder = new BorderlandElatedContainer(
	"footer_bottom_border_element_holder",
	"footer_bottom_border_element",
	"no"
);
$show_footer_top_container->addChild(
	"footer_bottom_border_element_holder",
	$footer_bottom_border_element_holder
);

$footer_bottom_border_element_color = new BorderlandElatedField(
	"color",
	"footer_bottom_border_element_color",
	"",
	esc_html__( "Border Bottom Color", 'borderland' ),
	esc_html__( "Choose a color for border in footer columns.", 'borderland' )
);
$footer_bottom_border_element_holder->addChild(
	"footer_bottom_border_element_color",
	$footer_bottom_border_element_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Footer Top Area Style", 'borderland' ),
	esc_html__( "Configure style for Footer Top area", 'borderland' )
);
$show_footer_top_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$footer_top_background_color = new BorderlandElatedField(
	"colorsimple",
	"footer_top_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"footer_top_background_color",
	$footer_top_background_color
);

$footer_top_border_color = new BorderlandElatedField(
	"colorsimple",
	"footer_top_border_color",
	"",
	esc_html__( "Top Border Color", 'borderland' )
);
$row1->addChild(
	"footer_top_border_color",
	$footer_top_border_color
);

$footer_top_border_width = new BorderlandElatedField(
	"textsimple",
	"footer_top_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'borderland' )
);
$row1->addChild(
	"footer_top_border_width",
	$footer_top_border_width
);

$footer_top_border_in_grid = new BorderlandElatedField(
	"yesnosimple",
	"footer_top_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'borderland' ),
	""
);
$row1->addChild(
	"footer_top_border_in_grid",
	$footer_top_border_in_grid
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_top_padding = new BorderlandElatedField(
	"textsimple",
	"footer_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row2->addChild(
	"footer_top_padding",
	$footer_top_padding
);

$footer_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row2->addChild(
	"footer_bottom_padding",
	$footer_bottom_padding
);

$footer_left_padding = new BorderlandElatedField(
	"textsimple",
	"footer_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row2->addChild(
	"footer_left_padding",
	$footer_left_padding
);

$footer_right_padding = new BorderlandElatedField(
	"textsimple",
	"footer_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row2->addChild(
	"footer_right_padding",
	$footer_right_padding
);

$footer_grid_background_container = new BorderlandElatedContainer(
	"footer_grid_background_container",
	"footer_in_grid",
	"no"
);
$show_footer_top_container->addChild(
	"footer_grid_background_container",
	$footer_grid_background_container
);

$footer_top_background_color_in_grid = new BorderlandElatedField(
	"color",
	"footer_top_background_color_in_grid",
	"",
	esc_html__( "Grid Background Color", 'borderland' ),
	esc_html__( "Choose background color for grid on footer top", 'borderland' )
);
$footer_grid_background_container->addChild(
	"footer_top_background_color_in_grid",
	$footer_top_background_color_in_grid
);

$footer_image_background = new BorderlandElatedField(
	"image",
	"footer_image_background",
	"",
	esc_html__( "Footer Top Background Image", 'borderland' ),
	esc_html__( "Choose footer top background image", 'borderland' )
);
$show_footer_top_container->addChild(
	"footer_image_background",
	$footer_image_background
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Footer Top Title Style", 'borderland' ),
	esc_html__( "Configure style for Footer Top Title", 'borderland' )
);
$show_footer_top_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$footer_title_color = new BorderlandElatedField(
	"colorsimple",
	"footer_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_title_color",
	$footer_title_color
);

$footer_title_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_title_font_size",
	$footer_title_font_size
);

$footer_title_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_title_line_height",
	$footer_title_line_height
);

$footer_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_title_text_transform",
	$footer_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$footer_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_title_font_family",
	$footer_title_font_family
);

$footer_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_title_font_style",
	$footer_title_font_style
);

$footer_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_title_font_weight",
	$footer_title_font_weight
);

$footer_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_title_letter_spacing",
	$footer_title_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Footer Top Text Style", 'borderland' ),
	esc_html__( "Configure style for Footer Top text", 'borderland' )
);
$show_footer_top_container->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$footer_top_text_color = new BorderlandElatedField(
	"colorsimple",
	"footer_top_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_top_text_color",
	$footer_top_text_color
);

$footer_top_text_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_top_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_top_text_font_size",
	$footer_top_text_font_size
);

$footer_top_text_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_top_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_top_text_line_height",
	$footer_top_text_line_height
);

$footer_top_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_top_text_text_transform",
	$footer_top_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);
$footer_top_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_top_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_top_text_font_family",
	$footer_top_text_font_family
);

$footer_top_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_top_text_font_style",
	$footer_top_text_font_style
);

$footer_top_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_top_text_font_weight",
	$footer_top_text_font_weight
);

$footer_top_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_top_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_top_text_letter_spacing",
	$footer_top_text_letter_spacing
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Footer Top Link Style", 'borderland' ),
	esc_html__( "Configure style for Footer Top link", 'borderland' )
);
$show_footer_top_container->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$footer_top_link_color = new BorderlandElatedField(
	"colorsimple",
	"footer_top_link_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_top_link_color",
	$footer_top_link_color
);

$footer_top_link_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_top_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_top_link_font_size",
	$footer_top_link_font_size
);

$footer_top_link_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_top_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_top_link_line_height",
	$footer_top_link_line_height
);

$footer_top_link_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_link_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_top_link_text_transform",
	$footer_top_link_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);
$footer_top_link_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_top_link_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_top_link_font_family",
	$footer_top_link_font_family
);

$footer_top_link_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_link_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_top_link_font_style",
	$footer_top_link_font_style
);

$footer_top_link_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_top_link_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_top_link_font_weight",
	$footer_top_link_font_weight
);

$footer_top_link_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_top_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_top_link_letter_spacing",
	$footer_top_link_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);
$footer_top_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"footer_top_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"footer_top_link_hover_color",
	$footer_top_link_hover_color
);

$footer_text = new BorderlandElatedField(
	"yesno",
	"footer_text",
	"yes",
	esc_html__( "Show Footer Bottom", 'borderland' ),
	esc_html__( "Enabling this option will show Footer Bottom area", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_footer_text_container"
	)
);
$panel10->addChild(
	"footer_text",
	$footer_text
);

$footer_text_container = new BorderlandElatedContainer(
	"footer_text_container",
	"footer_text",
	"no"
);
$panel10->addChild(
	"footer_text_container",
	$footer_text_container
);

$footer_bottom_columns = new BorderlandElatedField(
	"select",
	"footer_bottom_columns",
	"3",
	esc_html__( "Footer Bottom Columns", 'borderland' ),
	esc_html__( "Choose number of columns for Footer Bottom area", 'borderland' ),
	array(
		"1" => "1",
		"2" => "2",
		"3" => "3"
	)
);
$footer_text_container->addChild(
	"footer_bottom_columns",
	$footer_bottom_columns
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Footer Bottom Area Style", 'borderland' ),
	esc_html__( "Configure style for Footer Bottom area", 'borderland' )
);
$footer_text_container->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);
$footer_bottom_height = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_bottom_height",
	$footer_bottom_height
);
$footer_bottom_background_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"footer_bottom_background_color",
	$footer_bottom_background_color
);

$footer_bottom_border_in_grid = new BorderlandElatedField(
	"yesnosimple",
	"footer_bottom_border_in_grid",
	"no",
	esc_html__( "Set Top Border In Grid", 'borderland' ),
	""
);
$row1->addChild(
	"footer_bottom_border_in_grid",
	$footer_bottom_border_in_grid
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$footer_bottom_border_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_border_color",
	"",
	esc_html__( "Top Border Color", 'borderland' )
);
$row2->addChild(
	"footer_bottom_border_color",
	$footer_bottom_border_color
);
$footer_bottom_border_width = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_border_width",
	"",
	esc_html__( "Top Border Width (px)", 'borderland' )
);
$row2->addChild(
	"footer_bottom_border_width",
	$footer_bottom_border_width
);
$footer_bottom_border_bottom_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_border_bottom_color",
	"",
	esc_html__( "Bottom Border Color", 'borderland' )
);
$row2->addChild(
	"footer_bottom_border_bottom_color",
	$footer_bottom_border_bottom_color
);
$footer_bottom_border_bottom_width = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_border_bottom_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'borderland' )
);
$row2->addChild(
	"footer_bottom_border_bottom_width",
	$footer_bottom_border_bottom_width
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$footer_bottom_top_padding = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row3->addChild(
	"footer_bottom_top_padding",
	$footer_bottom_top_padding
);
$footer_bottom_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row3->addChild(
	"footer_bottom_bottom_padding",
	$footer_bottom_bottom_padding
);
$footer_bottom_left_padding = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row3->addChild(
	"footer_bottom_left_padding",
	$footer_bottom_left_padding
);
$footer_bottom_right_padding = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row3->addChild(
	"footer_bottom_right_padding",
	$footer_bottom_right_padding
);

$footer_bottom_image_background = new BorderlandElatedField(
	"image",
	"footer_bottom_image_background",
	"",
	esc_html__( "Footer Bottom Background Image", 'borderland' ),
	esc_html__( "Choose footer bottom background image", 'borderland' )
);
$footer_text_container->addChild(
	"footer_bottom_image_background",
	$footer_bottom_image_background
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Footer Bottom Text Style", 'borderland' ),
	esc_html__( "Configure style for Footer Bottom text", 'borderland' )
);
$footer_text_container->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$footer_bottom_text_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_bottom_text_color",
	$footer_bottom_text_color
);

$footer_bottom_text_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_bottom_text_font_size",
	$footer_bottom_text_font_size
);

$footer_bottom_text_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_bottom_text_line_height",
	$footer_bottom_text_line_height
);

$footer_bottom_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_bottom_text_text_transform",
	$footer_bottom_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$footer_bottom_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_bottom_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_bottom_text_font_family",
	$footer_bottom_text_font_family
);

$footer_bottom_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_bottom_text_font_style",
	$footer_bottom_text_font_style
);

$footer_bottom_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_bottom_text_font_weight",
	$footer_bottom_text_font_weight
);

$footer_bottom_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_bottom_text_letter_spacing",
	$footer_bottom_text_letter_spacing
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Footer Bottom Link Style", 'borderland' ),
	esc_html__( "Configure style for Footer Bottom link", 'borderland' )
);
$footer_text_container->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$footer_bottom_link_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_link_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_bottom_link_color",
	$footer_bottom_link_color
);

$footer_bottom_link_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_bottom_link_font_size",
	$footer_bottom_link_font_size
);

$footer_bottom_link_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_bottom_link_line_height",
	$footer_bottom_link_line_height
);

$footer_bottom_link_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_link_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_bottom_link_text_transform",
	$footer_bottom_link_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$footer_bottom_link_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_bottom_link_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_bottom_link_font_family",
	$footer_bottom_link_font_family
);

$footer_bottom_link_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_link_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_bottom_link_font_style",
	$footer_bottom_link_font_style
);

$footer_bottom_link_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_bottom_link_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_bottom_link_font_weight",
	$footer_bottom_link_font_weight
);

$footer_bottom_link_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_bottom_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_bottom_link_letter_spacing",
	$footer_bottom_link_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$footer_bottom_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"footer_bottom_link_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"footer_bottom_link_hover_color",
	$footer_bottom_link_hover_color
);