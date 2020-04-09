<?php

$elementsPage = new BorderlandElatedAdminPage(
	"6",
	esc_html__( "Elements", 'borderland' ),
	"fa fa-flag-o"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"elementsPage",
	$elementsPage
);

//Accordions and Toogles

$panel29 = new BorderlandElatedPanel(
	esc_html__( "Accordions and  Toggles", 'borderland' ),
	"accordions_toogles_panel"
);
$elementsPage->addChild(
	"panel29",
	$panel29
);

$accordion_regular_subtitle = new BorderlandElatedTitle(
	"accordion_regular_subtitle",
	esc_html__( "Accordion & Toggle Title", 'borderland' )
);
$panel29->addChild(
	"accordion_regular_subtitle",
	$accordion_regular_subtitle
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define Accordion & Toggle Title style", 'borderland' )
);
$panel29->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow( true );
$group4->addChild(
	"row1",
	$row1
);

$accordion_regular_title_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_regular_title_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"accordion_regular_title_color",
	$accordion_regular_title_color
);

$accordion_regular_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_regular_title_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"accordion_regular_title_hover_color",
	$accordion_regular_title_hover_color
);

$accordion_toogle_subtitle = new BorderlandElatedTitle(
	"accordion_toogle_subtitle",
	esc_html__( "Accordion & Toggle Boxed Title", 'borderland' )
);
$panel29->addChild(
	"accordion_toogle_subtitle",
	$accordion_toogle_subtitle
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define Accordion & Toggle Boxed Title style", 'borderland' )
);
$panel29->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow( true );
$group1->addChild(
	"row1",
	$row1
);

$accordion_toogle_title_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toogle_title_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"accordion_toogle_title_color",
	$accordion_toogle_title_color
);

$accordion_toogle_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toogle_title_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"accordion_toogle_title_hover_color",
	$accordion_toogle_title_hover_color
);

$accordion_toogle_mark_subtitle = new BorderlandElatedTitle(
	"accordion_toogle_mark_subtitle",
	esc_html__( "Accordion & Toggle Mark", 'borderland' )
);
$panel29->addChild(
	"accordion_toogle_mark_subtitle",
	$accordion_toogle_mark_subtitle
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Mark Style", 'borderland' ),
	esc_html__( "Define mark style", 'borderland' )
);
$panel29->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow( true );
$group2->addChild(
	"row1",
	$row1
);

$accordion_mark_icon_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"accordion_mark_icon_color",
	$accordion_mark_icon_color
);

$accordion_mark_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"accordion_mark_icon_hover_color",
	$accordion_mark_icon_hover_color
);

$accordion_mark_background_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"accordion_mark_background_color",
	$accordion_mark_background_color
);

$accordion_mark_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"accordion_mark_background_hover_color",
	$accordion_mark_background_hover_color
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$accordion_mark_border_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row2->addChild(
	"accordion_mark_border_color",
	$accordion_mark_border_color
);

$accordion_mark_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'borderland' )
);
$row2->addChild(
	"accordion_mark_border_hover_color",
	$accordion_mark_border_hover_color
);

$accordion_mark_border_radius = new BorderlandElatedField(
	"textsimple",
	"accordion_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'borderland' )
);
$row2->addChild(
	"accordion_mark_border_radius",
	$accordion_mark_border_radius
);

$accordion_toggle_boxed_subtitle = new BorderlandElatedTitle(
	"accordion_toggle_boxed_subtitle",
	esc_html__( "Accordion & Toggle Boxed Style", 'borderland' )
);
$panel29->addChild(
	"accordion_toggle_boxed_subtitle",
	$accordion_toggle_boxed_subtitle
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Boxed Style", 'borderland' ),
	esc_html__( "Define boxed style", 'borderland' )
);
$panel29->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow( true );
$group3->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_background_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toggle_boxed_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_color",
	$accordion_toggle_boxed_background_color
);

$accordion_toggle_boxed_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toggle_boxed_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_hover_color",
	$accordion_toggle_boxed_background_hover_color
);

$accordion_toggle_boxed_border_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toggle_boxed_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_color",
	$accordion_toggle_boxed_border_color
);

$accordion_toggle_boxed_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"accordion_toggle_boxed_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_hover_color",
	$accordion_toggle_boxed_border_hover_color
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$accordion_toggle_boxed_border_radius = new BorderlandElatedField(
	"textsimple",
	"accordion_toggle_boxed_border_radius",
	"",
	esc_html__( "Border Radius", 'borderland' )
);
$row2->addChild(
	"accordion_toggle_boxed_border_radius",
	$accordion_toggle_boxed_border_radius
);

//Back to top

$panel1 = new BorderlandElatedPanel(
	"esc_html__( 'Back to Top', 'borderland' ) Link Button",
	"back_to_top_panel"
);
$elementsPage->addChild(
	"panel1",
	$panel1
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Background", 'borderland' ),
	esc_html__( 'Choose background for "Back to Top"', 'borderland' )
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

$back_to_top_background_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_background_color",
	$back_to_top_background_color
);

$back_to_top_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_background_hover_color",
	$back_to_top_background_hover_color
);

$back_to_top_background_transparency = new BorderlandElatedField(
	"textsimple",
	"back_to_top_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"back_to_top_background_transparency",
	$back_to_top_background_transparency
);

$back_to_top_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"back_to_top_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"back_to_top_background_hover_transparency",
	$back_to_top_background_hover_transparency
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Border", 'borderland' ),
	esc_html__( "Choose Border style for Back to Top", 'borderland' )
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

$back_to_top_border_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_border_color",
	$back_to_top_border_color
);

$back_to_top_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_border_hover_color",
	$back_to_top_border_hover_color
);

$back_to_top_border_width = new BorderlandElatedField(
	"textsimple",
	"back_to_top_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_border_width",
	$back_to_top_border_width
);

$back_to_top_border_radius = new BorderlandElatedField(
	"textsimple",
	"back_to_top_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_border_radius",
	$back_to_top_border_radius
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_border_transparency = new BorderlandElatedField(
	"textsimple",
	"back_to_top_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"back_to_top_border_transparency",
	$back_to_top_border_transparency
);

$back_to_top_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"back_to_top_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"back_to_top_border_hover_transparency",
	$back_to_top_border_hover_transparency
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Button Size", 'borderland' ),
	esc_html__( 'Choose Size for "Back to Top" button', 'borderland' )
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

$back_to_top_height = new BorderlandElatedField(
	"textsimple",
	"back_to_top_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_height",
	$back_to_top_height
);
$back_to_top_width = new BorderlandElatedField(
	"textsimple",
	"back_to_top_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_width",
	$back_to_top_width
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Button Position", 'borderland' ),
	esc_html__( 'Define button alignment and margin bottom', 'borderland' )
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

$back_to_top_position = new BorderlandElatedField(
	"selectsimple",
	"back_to_top_position",
	"",
	esc_html__( "Button Alignment", 'borderland' ),
	esc_html__( 'Choose alignment for "Back to Top" button', 'borderland' ),
	array(
		"right" => esc_html__( "Right", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
	)
);
$row1->addChild(
	"back_to_top_position",
	$back_to_top_position
);

$back_to_top_button_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"back_to_top_button_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' ),
	esc_html__( "Enter bottom margin", 'borderland' )
);
$row1->addChild(
	"back_to_top_button_margin_bottom",
	$back_to_top_button_margin_bottom
);

$back_to_top_type = new BorderlandElatedField(
	"select",
	"back_to_top_type",
	"arrow",
	esc_html__( "Button Text Type", 'borderland' ),
	esc_html__( 'Choose "Back to Top" button type ', 'borderland' ),
	array(
		"arrow" => esc_html__( "Arrow", 'borderland' ),
		"text" => esc_html__( "Text", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"arrow" => "#eltdf_back_to_top_type_text_container",
			"text"  => "#eltdf_back_to_top_type_arrow_container"
		),
		"show"       => array(
			"arrow" => "#eltdf_back_to_top_type_arrow_container",
			"text"  => "#eltdf_back_to_top_type_text_container"
		)
	)
);
$panel1->addChild(
	"back_to_top_type",
	$back_to_top_type
);

$back_to_top_type_arrow_container = new BorderlandElatedContainer(
	"back_to_top_type_arrow_container",
	"back_to_top_type",
	"text"
);
$panel1->addChild(
	"back_to_top_type_arrow_container",
	$back_to_top_type_arrow_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Arrow Icon Style", 'borderland' ),
	esc_html__( "Define style for arrow icon", 'borderland' )
);
$back_to_top_type_arrow_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$show_back_button_icon = new BorderlandElatedField(
	'selectsimple',
	'show_back_button_icon',
	'',
	esc_html__( 'Choose Icon', 'borderland' ),
	esc_html__( 'Choose Icon', 'borderland' ),
	borderland_elated_get_options_value_by_name( 'arrows_up_type' )
);
$row1->addChild(
	'show_back_button_icon',
	$show_back_button_icon
);

$back_to_top_arrow_size = new BorderlandElatedField(
	"textsimple",
	"back_to_top_arrow_size",
	"14",
	esc_html__( "Icon Size (px)", 'borderland' ),
	esc_html__( "Default value is 14	", 'borderland' )
);
$row1->addChild(
	"back_to_top_arrow_size",
	$back_to_top_arrow_size
);

$back_to_top_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_arrow_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_arrow_color",
	$back_to_top_arrow_color
);

$back_to_top_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_arrow_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_arrow_hover_color",
	$back_to_top_arrow_hover_color
);

$back_to_top_type_text_container = new BorderlandElatedContainer(
	"back_to_top_type_text_container",
	"back_to_top_type",
	"arrow"
);
$panel1->addChild(
	"back_to_top_type_text_container",
	$back_to_top_type_text_container
);

$back_to_top_text = new BorderlandElatedField(
	"text",
	"back_to_top_text",
	"",
	esc_html__( "Back to Top Text", 'borderland' ),
	esc_html__( "Enter text for 'Back to Top' button", 'borderland' )
);
$back_to_top_type_text_container->addChild(
	"back_to_top_text",
	$back_to_top_text
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Button Text Color", 'borderland' ),
	esc_html__( "Define Color for Text Type", 'borderland' )
);
$back_to_top_type_text_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_text_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_text_color",
	$back_to_top_text_color
);

$back_to_top_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"back_to_top_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"back_to_top_text_hover_color",
	$back_to_top_text_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Button Text Style", 'borderland' ),
	esc_html__( "Define Style for Text Type", 'borderland' )
);
$back_to_top_type_text_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_text_fontsize = new BorderlandElatedField(
	"textsimple",
	"back_to_top_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_text_fontsize",
	$back_to_top_text_fontsize
);

$back_to_top_text_lineheight = new BorderlandElatedField(
	"textsimple",
	"back_to_top_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"back_to_top_text_lineheight",
	$back_to_top_text_lineheight
);

$back_to_top_text_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"back_to_top_text_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"back_to_top_text_texttransform",
	$back_to_top_text_texttransform
);

$back_to_top_text_fontfamily = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"back_to_top_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"back_to_top_text_fontfamily",
	$back_to_top_text_fontfamily
);

$row2 = new BorderlandElatedRow();
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_text_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"back_to_top_text_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"back_to_top_text_fontstyle",
	$back_to_top_text_fontstyle
);

$back_to_top_text_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"back_to_top_text_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"back_to_top_text_fontweight",
	$back_to_top_text_fontweight
);

$back_to_top_text_letterspacing = new BorderlandElatedField(
	"textsimple",
	"back_to_top_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"back_to_top_text_letterspacing",
	$back_to_top_text_letterspacing
);

//Buttons

$panel2 = new BorderlandElatedPanel(
	esc_html__( "Buttons", 'borderland' ),
	"buttons_panel"
);
$elementsPage->addChild(
	"panel2",
	$panel2
);

$button_default_section = new BorderlandElatedTitle(
	"button_default_section",
	esc_html__( "Default Button", 'borderland' )
);
$panel2->addChild(
	"button_default_section",
	$button_default_section
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
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
$button_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"button_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"button_title_google_fonts",
	$button_title_google_fonts
);

$button_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"button_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'borderland' )
);
$row1->addChild(
	"button_title_fontsize",
	$button_title_fontsize
);

$button_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"button_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	"button_title_fontstyle",
	$button_title_fontstyle
);

$button_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"button_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"button_title_fontweight",
	$button_title_fontweight
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$button_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"button_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"button_title_letter_spacing",
	$button_title_letter_spacing
);

$button_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"button_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"button_title_lineheight",
	$button_title_lineheight
);

$button_title_color = new BorderlandElatedField(
	"colorsimple",
	"button_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"button_title_color",
	$button_title_color
);

$button_title_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"button_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row2->addChild(
	"button_title_hovercolor",
	$button_title_hovercolor
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$button_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"button_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"button_title_texttransform",
	$button_title_texttransform
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Background", 'borderland' ),
	esc_html__( "Define background", 'borderland' )
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

$button_backgroundcolor = new BorderlandElatedField(
	"colorsimple",
	"button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"button_backgroundcolor",
	$button_backgroundcolor
);

$button_backgroundcolor_hover = new BorderlandElatedField(
	"colorsimple",
	"button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"button_backgroundcolor_hover",
	$button_backgroundcolor_hover
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
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

$button_border_color = new BorderlandElatedField(
	"colorsimple",
	"button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"button_border_color",
	$button_border_color
);

$button_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"button_border_hover_color",
	$button_border_hover_color
);

$button_border_width = new BorderlandElatedField(
	"textsimple",
	"button_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"button_border_width",
	$button_border_width
);

$button_border_radius = new BorderlandElatedField(
	"textsimple",
	"button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"button_border_radius",
	$button_border_radius
);

$button_padding = new BorderlandElatedField(
	"text",
	"button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"button_padding",
	$button_padding
);

$button_box_shadows = new BorderlandElatedField(
	'yesno',
	'button_box_shadows',
	'no',
	esc_html__( 'Show Button Shadows', 'borderland' ),
	esc_html__( 'Enabling this option will show button shadows', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_button_box_shadows_container'
	)
);
$panel2->addChild(
	'button_box_shadows',
	$button_box_shadows
);

$button_box_shadows_container = new BorderlandElatedContainer(
	'button_box_shadows_container',
	'button_box_shadows',
	'no'
);
$panel2->addChild(
	'button_box_shadows_container',
	$button_box_shadows_container
);

$group4 = new BorderlandElatedGroup(
	esc_html__( 'Button Shadows', 'borderland' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'borderland' )
);
$button_box_shadows_container->addChild(
	'group4',
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	'row1',
	$row1
);

$button_box_shadow_horizontal_shadow = new BorderlandElatedField(
	'textsimple',
	'button_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'borderland' )
);
$row1->addChild(
	'button_box_shadow_horizontal_shadow',
	$button_box_shadow_horizontal_shadow
);

$button_box_shadow_vertical_shadow = new BorderlandElatedField(
	'textsimple',
	'button_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'borderland' )
);
$row1->addChild(
	'button_box_shadow_vertical_shadow',
	$button_box_shadow_vertical_shadow
);

$button_box_shadow_blur_distance = new BorderlandElatedField(
	'textsimple',
	'button_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'borderland' )
);
$row1->addChild(
	'button_box_shadow_blur_distance',
	$button_box_shadow_blur_distance
);

$button_box_shadow_shadow_size = new BorderlandElatedField(
	'textsimple',
	'button_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'borderland' )
);
$row1->addChild(
	'button_box_shadow_shadow_size',
	$button_box_shadow_shadow_size
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	'row2',
	$row2
);

$button_box_shadow_shadow_color = new BorderlandElatedField(
	'colorsimple',
	'button_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'borderland' )
);
$row2->addChild(
	'button_box_shadow_shadow_color',
	$button_box_shadow_shadow_color
);

$button_predefined_white_section = new BorderlandElatedTitle(
	"button_predefined_white_section",
	esc_html__( "Predefined White Button", 'borderland' )
);
$panel2->addChild(
	"button_predefined_white_section",
	$button_predefined_white_section
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style.", 'borderland' )
);
$panel2->addChild(
	"group5",
	$group5
);
$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$button_white_text_color = new BorderlandElatedField(
	"colorsimple",
	"button_white_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"button_white_text_color",
	$button_white_text_color
);

$button_white_text_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_white_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"button_white_text_color_hover",
	$button_white_text_color_hover
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Background", 'borderland' ),
	esc_html__( "Define background", 'borderland' )
);
$panel2->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$button_white_background_color = new BorderlandElatedField(
	"colorsimple",
	"button_white_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"button_white_background_color",
	$button_white_background_color
);

$button_white_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_white_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"button_white_background_color_hover",
	$button_white_background_color_hover
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style.", 'borderland' )
);
$panel2->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$button_white_border_color = new BorderlandElatedField(
	"colorsimple",
	"button_white_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"button_white_border_color",
	$button_white_border_color
);

$button_white_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_white_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"button_white_border_color_hover",
	$button_white_border_color_hover
);

$button_predefined_solid_section = new BorderlandElatedTitle(
	"button_predefined_solid_section",
	esc_html__( "Predefined Solid Button", 'borderland' )
);
$panel2->addChild(
	"button_predefined_solid_section",
	$button_predefined_solid_section
);

$group20 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style.", 'borderland' )
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

$button_solid_text_color = new BorderlandElatedField(
	"colorsimple",
	"button_solid_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"button_solid_text_color",
	$button_solid_text_color
);

$button_solid_text_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_solid_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"button_solid_text_color_hover",
	$button_solid_text_color_hover
);

$group21 = new BorderlandElatedGroup(
	esc_html__( "Background", 'borderland' ),
	esc_html__( "Define background", 'borderland' )
);
$panel2->addChild(
	"group21",
	$group21
);
$row1 = new BorderlandElatedRow();
$group21->addChild(
	"row1",
	$row1
);

$button_solid_background_color = new BorderlandElatedField(
	"colorsimple",
	"button_solid_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"button_solid_background_color",
	$button_solid_background_color
);

$button_solid_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_solid_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"button_solid_background_color_hover",
	$button_solid_background_color_hover
);

$group22 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style.", 'borderland' )
);
$panel2->addChild(
	"group22",
	$group22
);

$row1 = new BorderlandElatedRow();
$group22->addChild(
	"row1",
	$row1
);

$button_solid_border_color = new BorderlandElatedField(
	"colorsimple",
	"button_solid_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"button_solid_border_color",
	$button_solid_border_color
);

$button_solid_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"button_solid_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"button_solid_border_color_hover",
	$button_solid_border_color_hover
);

$button_small_section = new BorderlandElatedTitle(
	"button_small_section",
	esc_html__( "Small Button", 'borderland' )
);
$panel2->addChild(
	"button_small_section",
	$button_small_section
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel2->addChild(
	"group14",
	$group14
);
$row1 = new BorderlandElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$small_button_fontsize = new BorderlandElatedField(
	"textsimple",
	"small_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"small_button_fontsize",
	$small_button_fontsize
);

$small_button_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"small_button_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"small_button_fontweight",
	$small_button_fontweight
);

$small_button_lineheight = new BorderlandElatedField(
	"textsimple",
	"small_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"small_button_lineheight",
	$small_button_lineheight
);

$small_button_padding = new BorderlandElatedField(
	"text",
	"small_button_padding",
	"",
	esc_html__( "Padding left/right (px) ", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_padding",
	$small_button_padding
);

$small_button_border_radius = new BorderlandElatedField(
	"text",
	"small_button_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' ),
	esc_html__( "Define border", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_border_radius",
	$small_button_border_radius
);

$button_large_section = new BorderlandElatedTitle(
	"button_large_section",
	esc_html__( "Large Button", 'borderland' )
);
$panel2->addChild(
	"button_large_section",
	$button_large_section
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
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

$large_button_fontsize = new BorderlandElatedField(
	"textsimple",
	"large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"large_button_fontsize",
	$large_button_fontsize
);

$large_button_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"large_button_fontweight",
	$large_button_fontweight
);

$large_button_lineheight = new BorderlandElatedField(
	"textsimple",
	"large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"large_button_lineheight",
	$large_button_lineheight
);

$large_button_padding = new BorderlandElatedField(
	"text",
	"large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_padding",
	$large_button_padding
);

$large_button_border_radius = new BorderlandElatedField(
	"text",
	"large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' ),
	esc_html__( "Define border", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_border_radius",
	$large_button_border_radius
);

$button_extra_large_section = new BorderlandElatedTitle(
	"button_extra_large_section",
	esc_html__( "Extra Large Button", 'borderland' )
);
$panel2->addChild(
	"button_extra_large_section",
	$button_extra_large_section
);

$group20 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
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

$big_large_button_fontsize = new BorderlandElatedField(
	"textsimple",
	"big_large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"big_large_button_fontsize",
	$big_large_button_fontsize
);

$big_large_button_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"big_large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"big_large_button_fontweight",
	$big_large_button_fontweight
);

$big_large_button_lineheight = new BorderlandElatedField(
	"textsimple",
	"big_large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"big_large_button_lineheight",
	$big_large_button_lineheight
);

$big_large_button_padding = new BorderlandElatedField(
	"text",
	"big_large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_padding",
	$big_large_button_padding
);

$big_large_button_border_radius = new BorderlandElatedField(
	"text",
	"big_large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_border_radius",
	$big_large_button_border_radius
);

//Blockquote

$panel3 = new BorderlandElatedPanel(
	esc_html__( "Blockquote", 'borderland' ),
	"blockquote_panel"
);
$elementsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Blockquote Style", 'borderland' ),
	esc_html__( "Define Blockquote style", 'borderland' )
);
$panel3->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blockquote_color = new BorderlandElatedField(
	"colorsimple",
	"blockquote_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blockquote_font_color",
	$blockquote_color
);

$blockquote_font_size = new BorderlandElatedField(
	"textsimple",
	"blockquote_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blockquote_font_size",
	$blockquote_font_size
);

$blockquote_line_height = new BorderlandElatedField(
	"textsimple",
	"blockquote_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blockquote_line_height",
	$blockquote_line_height
);

$blockquote_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blockquote_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blockquote_text_transform",
	$blockquote_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blockquote_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blockquote_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blockquote_font_family",
	$blockquote_font_family
);

$blockquote_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blockquote_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blockquote_font_style",
	$blockquote_font_style
);

$blockquote_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blockquote_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blockquote_font_weight",
	$blockquote_font_weight
);

$blockquote_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blockquote_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blockquote_letter_spacing",
	$blockquote_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blockquote_background_color = new BorderlandElatedField(
	"colorsimple",
	"blockquote_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"blockquote_background_color",
	$blockquote_background_color
);

$blockquote_border_color = new BorderlandElatedField(
	"colorsimple",
	"blockquote_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row3->addChild(
	"blockquote_border_color",
	$blockquote_border_color
);

$blockquote_quote_icon_color = new BorderlandElatedField(
	"colorsimple",
	"blockquote_quote_icon_color",
	"",
	esc_html__( "Quote Icon Color", 'borderland' )
);
$row3->addChild(
	"blockquote_quote_icon_color",
	$blockquote_quote_icon_color
);

//Content Menu

$panel25 = new BorderlandElatedPanel(
	esc_html__( "Content Menu", 'borderland' ),
	"content_menu_panel"
);
$elementsPage->addChild(
	"panel25",
	$panel25
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Menu Icons Style", 'borderland' ),
	esc_html__( "Define Icons style", 'borderland' )
);
$panel25->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$content_menu_icon_color = new BorderlandElatedField(
	"colorsimple",
	"content_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"content_menu_icon_color",
	$content_menu_icon_color
);
$content_menu_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"content_menu_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"content_menu_icon_hover_color",
	$content_menu_icon_hover_color
);
$content_menu_icon_size = new BorderlandElatedField(
	"textsimple",
	"content_menu_icon_size",
	"",
	esc_html__( "Icon Size", 'borderland' )
);
$row1->addChild(
	"content_menu_icon_size",
	$content_menu_icon_size
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define Text style", 'borderland' )
);
$panel25->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$content_menu_text_color = new BorderlandElatedField(
	"colorsimple",
	"content_menu_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"content_menu_text_color",
	$content_menu_text_color
);
$content_menu_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"content_menu_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"content_menu_text_hover_color",
	$content_menu_text_hover_color
);
$content_menu_text_fontsize = new BorderlandElatedField(
	"textsimple",
	"content_menu_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"content_menu_text_fontsize",
	$content_menu_text_fontsize
);
$content_menu_text_lineheight = new BorderlandElatedField(
	"textsimple",
	"content_menu_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"content_menu_text_lineheight",
	$content_menu_text_lineheight
);
$row2 = new BorderlandElatedRow();
$group2->addChild(
	"row2",
	$row2
);
$content_menu_text_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"content_menu_text_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"content_menu_text_texttransform",
	$content_menu_text_texttransform
);
$content_menu_text_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"content_menu_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"content_menu_text_google_fonts",
	$content_menu_text_google_fonts
);
$content_menu_text_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"content_menu_text_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"content_menu_text_fontstyle",
	$h1_fontstyle
);
$content_menu_text_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"content_menu_text_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"content_menu_text_fontweight",
	$content_menu_text_fontweight
);
$row3 = new BorderlandElatedRow();
$group2->addChild(
	"row3",
	$row3
);
$content_menu_text_letterspacing = new BorderlandElatedField(
	"textsimple",
	"content_menu_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"content_menu_text_letterspacing",
	$content_menu_text_letterspacing
);

//Call to action

$panel31 = new BorderlandElatedPanel(
	esc_html__( "Call to Action", 'borderland' ),
	"call_to_action_panel"
);
$elementsPage->addChild(
	"panel31",
	$panel31
);

$call_to_action_button_section = new BorderlandElatedTitle(
	"call_to_action_button_section",
	esc_html__( "Button", 'borderland' )
);
$panel31->addChild(
	"call_to_action_button_section",
	$call_to_action_button_section
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel31->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$cto_action_bttn_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"cto_action_bttn_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_title_google_fonts",
	$cto_action_bttn_title_google_fonts
);

$cto_action_bttn_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"cto_action_bttn_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_title_fontsize",
	$cto_action_bttn_title_fontsize
);

$cto_action_bttn_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	"cto_action_bttn_title_fontstyle",
	$cto_action_bttn_title_fontstyle
);

$cto_action_bttn_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"cto_action_bttn_title_fontweight",
	$cto_action_bttn_title_fontweight
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$cto_action_bttn_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"cto_action_bttn_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"cto_action_bttn_title_letter_spacing",
	$cto_action_bttn_title_letter_spacing
);

$cto_action_bttn_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"cto_action_bttn_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"cto_action_bttn_title_lineheight",
	$cto_action_bttn_title_lineheight
);

$cto_action_bttn_title_color = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"cto_action_bttn_title_color",
	$cto_action_bttn_title_color
);

$cto_action_bttn_title_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row2->addChild(
	"cto_action_bttn_title_hovercolor",
	$cto_action_bttn_title_hovercolor
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$cto_action_bttn_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"cto_action_bttn_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"cto_action_bttn_title_texttransform",
	$cto_action_bttn_title_texttransform
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Background", 'borderland' ),
	esc_html__( "Define background", 'borderland' )
);
$panel31->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$cto_action_bttn_backgroundcolor = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor",
	$cto_action_bttn_backgroundcolor
);

$cto_action_bttn_backgroundcolor_hover = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor_hover",
	$cto_action_bttn_backgroundcolor_hover
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
);
$panel31->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$cto_action_bttn_border_color = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_border_color",
	$cto_action_bttn_border_color
);

$cto_action_bttn_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"cto_action_bttn_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_border_hover_color",
	$cto_action_bttn_border_hover_color
);

$cto_action_bttn_border_width = new BorderlandElatedField(
	"textsimple",
	"cto_action_bttn_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_border_width",
	$cto_action_bttn_border_width
);

$cto_action_bttn_border_radius = new BorderlandElatedField(
	"textsimple",
	"cto_action_bttn_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"cto_action_bttn_border_radius",
	$cto_action_bttn_border_radius
);

$cto_action_bttn_padding = new BorderlandElatedField(
	"text",
	"cto_action_bttn_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'borderland' ),
	esc_html__( "Define padding", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel31->addChild(
	"cto_action_bttn_padding",
	$cto_action_bttn_padding
);

//Counters

$panel4 = new BorderlandElatedPanel(
	esc_html__( "Counters", 'borderland' ),
	"counters_panel"
);
$elementsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Counters Style", 'borderland' ),
	esc_html__( "Define styles for Counters", 'borderland' )
);
$panel4->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$counter_color = new BorderlandElatedField(
	"colorsimple",
	"counter_color",
	"",
	esc_html__( "Numeral Color", 'borderland' )
);
$row1->addChild(
	"counter_color",
	$counter_color
);

$counter_text_color = new BorderlandElatedField(
	"colorsimple",
	"counter_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"counter_text_color",
	$counter_text_color
);

$counter_separator_color = new BorderlandElatedField(
	"colorsimple",
	"counter_separator_color",
	"",
	esc_html__( "Separator Color", 'borderland' )
);
$row1->addChild(
	"counter_separator_color",
	$counter_separator_color
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$counters_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"counters_font_family",
	"-1",
	esc_html__( "Numeral Font Family", 'borderland' )
);
$row2->addChild(
	"counters_font_family",
	$counters_font_family
);

$counters_font_size = new BorderlandElatedField(
	"textsimple",
	"counters_font_size",
	"",
	esc_html__( "Numeral Font Size (px)", 'borderland' )
);
$row2->addChild(
	"counters_font_size",
	$counters_font_size
);

$counters_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"counters_fontweight",
	"",
	esc_html__( "Numeral Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"counters_fontweight",
	$counters_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$counters_text_font_size = new BorderlandElatedField(
	"textsimple",
	"counters_text_font_size",
	"",
	esc_html__( "Text Font Size (px)", 'borderland' )
);
$row3->addChild(
	"counters_text_font_size",
	$counters_text_font_size
);

$counters_text_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"counters_text_fontweight",
	"",
	esc_html__( "Text Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"counters_text_fontweight",
	$counters_text_fontweight
);

$counters_text_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"counters_text_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"counters_text_texttransform",
	$counters_text_texttransform
);

$counters_text_letterspacing = new BorderlandElatedField(
	"textsimple",
	"counters_text_letterspacing",
	"",
	esc_html__( "Text Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"counters_text_letterspacing",
	$counters_text_letterspacing
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Counters Title", 'borderland' ),
	esc_html__( "Define Counter title style", 'borderland' )
);
$panel4->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$counters_title_color = new BorderlandElatedField(
	"colorsimple",
	"counters_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"counters_title_color",
	$counters_title_color
);

$counters_title_font_size = new BorderlandElatedField(
	"textsimple",
	"counters_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"counters_title_font_size",
	$counters_title_font_size
);

$counters_title_line_height = new BorderlandElatedField(
	"textsimple",
	"counters_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"counters_title_line_height",
	$counters_title_line_height
);

$counters_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"counters_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"counters_title_text_transform",
	$counters_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$counters_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"counters_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"counters_title_font_family",
	$counters_title_font_family
);

$counters_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"counters_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"counters_title_font_style",
	$counters_title_font_style
);

$counters_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"counters_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"counters_title_font_weight",
	$counters_title_font_weight
);

$counters_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"counters_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"counters_title_letter_spacing",
	$counters_title_letter_spacing
);

//Expandable Section

$panel5 = new BorderlandElatedPanel(
	esc_html__( "Expandable Section", 'borderland' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel5",
	$panel5
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define Expandable Section title style", 'borderland' )
);
$panel5->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$expandable_label_color = new BorderlandElatedField(
	"colorsimple",
	"expandable_label_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"expandable_label_color",
	$expandable_label_color
);

$expandable_label_font_size = new BorderlandElatedField(
	"textsimple",
	"expandable_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"expandable_label_font_size",
	$expandable_label_font_size
);

$expandable_label_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"expandable_label_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"expandable_label_text_transform",
	$expandable_label_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$expandable_label_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"expandable_label_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"expandable_label_font_family",
	$expandable_label_font_family
);

$expandable_label_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"expandable_label_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"expandable_label_font_weight",
	$expandable_label_font_weight
);

$expandable_label_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"expandable_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"expandable_label_letter_spacing",
	$expandable_label_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$expandable_background_color = new BorderlandElatedField(
	"colorsimple",
	"expandable_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"expandable_background_color",
	$expandable_background_color
);

$expandable_label_hover_color = new BorderlandElatedField(
	"colorsimple",
	"expandable_label_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"expandable_label_hover_color",
	$expandable_label_hover_color
);

//Highlight

$panel17 = new BorderlandElatedPanel(
	esc_html__( "Highlight", 'borderland' ),
	"highlight_panel"
);
$elementsPage->addChild(
	"panel17",
	$panel17
);
$highlight_color = new BorderlandElatedField(
	"color",
	"highlight_color",
	"",
	esc_html__( "Highlight Color", 'borderland' ),
	esc_html__( "Set color for Highlight", 'borderland' )
);
$panel17->addChild(
	"highlight_color",
	$highlight_color
);

//Horizontal Progress Bars

$panel6 = new BorderlandElatedPanel(
	esc_html__( "Horizontal Progress Bars", 'borderland' ),
	"horizontal_progress_bars_panel"
);
$elementsPage->addChild(
	"panel6",
	$panel6
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Progress Bar Title Style", 'borderland' ),
	esc_html__( "Define styles for Horizontal Progress Bars title", 'borderland' )
);
$panel6->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_font_size = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_font_size",
	$progress_bar_horizontal_font_size
);

$progress_bar_horizontal_color = new BorderlandElatedField(
	"colorsimple",
	"progress_bar_horizontal_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_color",
	$progress_bar_horizontal_color
);

$progress_bar_horizontal_line_height = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_line_height",
	$progress_bar_horizontal_line_height
);

$progress_bar_horizontal_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"progress_bar_horizontal_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_font_family",
	$progress_bar_horizontal_font_family
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_horizontal_font_style",
	$progress_bar_horizontal_font_style
);

$progress_bar_horizontal_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_horizontal_font_weight",
	$progress_bar_horizontal_font_weight
);

$progress_bar_horizontal_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"progress_bar_horizontal_letter_spacing",
	$progress_bar_horizontal_letter_spacing
);

$progress_bar_horizontal_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_horizontal_text_transform",
	$progress_bar_horizontal_text_transform
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Progress Bar Percentage Style", 'borderland' ),
	esc_html__( "Define styles for Horizontal Progress Bars percentage", 'borderland' )
);
$panel6->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_percentage_font_size = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_size",
	$progress_bar_horizontal_percentage_font_size
);

$progress_bar_horizontal_percentage_color = new BorderlandElatedField(
	"colorsimple",
	"progress_bar_horizontal_percentage_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_color",
	$progress_bar_horizontal_percentage_color
);

$progress_bar_horizontal_percentage_line_height = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_line_height",
	$progress_bar_horizontal_percentage_line_height
);

$progress_bar_horizontal_percentage_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"progress_bar_horizontal_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_family",
	$progress_bar_horizontal_percentage_font_family
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_percentage_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_style",
	$progress_bar_horizontal_percentage_font_style
);

$progress_bar_horizontal_percentage_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_weight",
	$progress_bar_horizontal_percentage_font_weight
);

$progress_bar_horizontal_percentage_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"progress_bar_horizontal_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_letter_spacing",
	$progress_bar_horizontal_percentage_letter_spacing
);

$progress_bar_horizontal_percentage_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_text_transform",
	$progress_bar_horizontal_percentage_text_transform
);
//Vertical Progress Bars

$panel73 = new BorderlandElatedPanel(
	esc_html__( "Vertical Progress Bars", 'borderland' ),
	"vertical_progress_bars_panel"
);
$elementsPage->addChild(
	"panel73",
	$panel73
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Progress Bar Title Style", 'borderland' ),
	esc_html__( "Define styles for Vertical Progress Bars title", 'borderland' )
);
$panel73->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_font_size = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_font_size",
	$progress_bar_vertical_font_size
);

$progress_bar_vertical_color = new BorderlandElatedField(
	"colorsimple",
	"progress_bar_vertical_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_color",
	$progress_bar_vertical_color
);

$progress_bar_vertical_line_height = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_line_height",
	$progress_bar_vertical_line_height
);

$progress_bar_vertical_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"progress_bar_vertical_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_font_family",
	$progress_bar_vertical_font_family
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_vertical_font_style",
	$progress_bar_vertical_font_style
);

$progress_bar_vertical_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_vertical_font_weight",
	$progress_bar_vertical_font_weight
);

$progress_bar_vertical_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"progress_bar_vertical_letter_spacing",
	$progress_bar_vertical_letter_spacing
);

$progress_bar_vertical_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_vertical_text_transform",
	$progress_bar_vertical_text_transform
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Progress Bar Percentage Style", 'borderland' ),
	esc_html__( "Define styles for Vertical Progress Bars percentage", 'borderland' )
);
$panel73->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_percentage_font_size = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_size",
	$progress_bar_vertical_percentage_font_size
);

$progress_bar_vertical_percentage_color = new BorderlandElatedField(
	"colorsimple",
	"progress_bar_vertical_percentage_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_color",
	$progress_bar_vertical_percentage_color
);

$progress_bar_vertical_percentage_line_height = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_line_height",
	$progress_bar_vertical_percentage_line_height
);

$progress_bar_vertical_percentage_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"progress_bar_vertical_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_family",
	$progress_bar_vertical_percentage_font_family
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_percentage_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_style",
	$progress_bar_vertical_percentage_font_style
);

$progress_bar_vertical_percentage_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_weight",
	$progress_bar_vertical_percentage_font_weight
);

$progress_bar_vertical_percentage_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"progress_bar_vertical_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_letter_spacing",
	$progress_bar_vertical_percentage_letter_spacing
);

$progress_bar_vertical_percentage_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_text_transform",
	$progress_bar_vertical_percentage_text_transform
);

//Vertical Split Screen Slider
$panelVSS = new BorderlandElatedPanel(
	esc_html__( "Vertical Split Screen Slider", 'borderland' ),
	"vertical_split_screen_slider"
);
$elementsPage->addChild(
	"panel_vss",
	$panelVSS
);

$vss_navigation_color = new BorderlandElatedField(
	"color",
	"vss_navigation_color",
	"",
	esc_html__( "Navigation Color", 'borderland' ),
	esc_html__( "Define color for navigation dots", 'borderland' )
);
$panelVSS->addChild(
	"vss_navigation_color",
	$vss_navigation_color
);

$vss_navigation_size = new BorderlandElatedField(
	"text",
	"vss_navigation_size",
	"",
	esc_html__( "Navigation Size (px)", 'borderland' ),
	esc_html__( "Define size for navigation dots", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$panelVSS->addChild(
	"vss_navigation_size",
	$vss_navigation_size
);

$vss_navigation_spacing_from_edge = new BorderlandElatedField(
	"text",
	"vss_navigation_spacing_from_edge",
	"",
	esc_html__( "Navigation Position (px)", 'borderland' ),
	esc_html__( "Define position of navigation from right/left edge of slider", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$panelVSS->addChild(
	"vss_navigation_spacing_from_edge",
	$vss_navigation_spacing_from_edge
);

$vss_left_panel_size = new BorderlandElatedField(
	"text",
	"vss_left_panel_size",
	"",
	esc_html__( "Left Slide Panel size (%)", 'borderland' ),
	esc_html__( "Define size for left slide panel. Note that sum of left and right slide panel should be 100.", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$panelVSS->addChild(
	"vss_left_panel_size",
	$vss_left_panel_size
);

$vss_right_panel_size = new BorderlandElatedField(
	"text",
	"vss_right_panel_size",
	"",
	esc_html__( "Right Slide Panel size (%)", 'borderland' ),
	esc_html__( "Define size for right slide panel. Note that sum of left and right slide panel should be 100.", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$panelVSS->addChild(
	"vss_right_panel_size",
	$vss_right_panel_size
);

//Icon

$panel19 = new BorderlandElatedPanel(
	esc_html__( "Icons", 'borderland' ),
	"icons_panel"
);
$elementsPage->addChild(
	"panel19",
	$panel19
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Normal Icons", 'borderland' ),
	esc_html__( "Define Normal Icons style", 'borderland' )
);
$panel19->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_color_normal = new BorderlandElatedField(
	"colorsimple",
	"icon_color_normal",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"icon_color_normal",
	$icon_color_normal
);

$icon_hover_color_normal = new BorderlandElatedField(
	"colorsimple",
	"icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"icon_hover_color_normal",
	$icon_hover_color_normal
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Icons Circle/Square", 'borderland' ),
	esc_html__( "Define circle/square Icons style", 'borderland' )
);
$panel19->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_color = new BorderlandElatedField(
	"colorsimple",
	"icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"icon_color",
	$icon_color
);

$icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"icon_hover_color",
	$icon_hover_color
);

$icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'borderland' )
);
$row1->addChild(
	"icon_background_color",
	$icon_background_color
);

$icon_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'borderland' )
);
$row1->addChild(
	"icon_hover_background_color",
	$icon_hover_background_color
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_border_width = new BorderlandElatedField(
	"textsimple",
	"icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'borderland' )
);
$row2->addChild(
	"icon_border_width",
	$icon_border_width
);

$icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'borderland' )
);
$row2->addChild(
	"icon_border_color",
	$icon_border_color
);

$icon_hover_border_color = new BorderlandElatedField(
	"colorsimple",
	"icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'borderland' )
);
$row2->addChild(
	"icon_hover_border_color",
	$icon_hover_border_color
);

$icon_box_shadows = new BorderlandElatedField(
	'yesno',
	'icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'borderland' ),
	esc_html__( 'Enabling this option will show icon shadow', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_icon_box_shadows_container'
	)
);
$panel19->addChild(
	'icon_box_shadows',
	$icon_box_shadows
);

$icon_box_shadows_container = new BorderlandElatedContainer(
	'icon_box_shadows_container',
	'icon_box_shadows',
	'no'
);
$panel19->addChild(
	'icon_box_shadows_container',
	$icon_box_shadows_container
);

$group3 = new BorderlandElatedGroup(
	esc_html__( 'Icon Shadows', 'borderland' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'borderland' )
);
$icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new BorderlandElatedRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_box_shadow_horizontal_shadow = new BorderlandElatedField(
	'textsimple',
	'icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'borderland' )
);
$row3->addChild(
	'icon_box_shadow_horizontal_shadow',
	$icon_box_shadow_horizontal_shadow
);

$icon_box_shadow_vertical_shadow = new BorderlandElatedField(
	'textsimple',
	'icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'borderland' )
);
$row3->addChild(
	'icon_box_shadow_vertical_shadow',
	$icon_box_shadow_vertical_shadow
);

$icon_box_shadow_blur_distance = new BorderlandElatedField(
	'textsimple',
	'icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'borderland' )
);
$row3->addChild(
	'icon_box_shadow_blur_distance',
	$icon_box_shadow_blur_distance
);

$icon_box_shadow_shadow_size = new BorderlandElatedField(
	'textsimple',
	'icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'borderland' )
);
$row3->addChild(
	'icon_box_shadow_shadow_size',
	$icon_box_shadow_shadow_size
);

$row4 = new BorderlandElatedRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_box_shadow_shadow_color = new BorderlandElatedField(
	'colorsimple',
	'icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'borderland' )
);
$row4->addChild(
	'icon_box_shadow_shadow_color',
	$icon_box_shadow_shadow_color
);

$panel21 = new BorderlandElatedPanel(
	esc_html__( "Icon With Text", 'borderland' ),
	"icon_with_text_panel"
);
$elementsPage->addChild(
	"panel21",
	$panel21
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Normal Icons", 'borderland' ),
	esc_html__( "Define Normal Icons style", 'borderland' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color_normal = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_color_normal",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_color_normal",
	$icon_with_text_icon_color_normal
);

$icon_with_text_icon_hover_color_normal = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color_normal",
	$icon_with_text_icon_hover_color_normal
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Icons Circle/Square", 'borderland' ),
	esc_html__( "Define circle/square Icons style", 'borderland' )
);
$panel21->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_color",
	$icon_with_text_icon_color
);

$icon_with_text_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color",
	$icon_with_text_icon_hover_color
);

$icon_with_text_icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_background_color",
	$icon_with_text_icon_background_color
);

$icon_with_text_icon_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'borderland' )
);
$row1->addChild(
	"icon_with_text_icon_hover_background_color",
	$icon_with_text_icon_hover_background_color
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_with_text_icon_border_width = new BorderlandElatedField(
	"textsimple",
	"icon_with_text_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'borderland' )
);
$row2->addChild(
	"icon_with_text_icon_border_width",
	$icon_with_text_icon_border_width
);

$icon_with_text_icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'borderland' )
);
$row2->addChild(
	"icon_with_text_icon_border_color",
	$icon_with_text_icon_border_color
);

$icon_with_text_icon_hover_border_color = new BorderlandElatedField(
	"colorsimple",
	"icon_with_text_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'borderland' )
);
$row2->addChild(
	"icon_with_text_icon_hover_border_color",
	$icon_with_text_icon_hover_border_color
);

$icon_with_text_box_shadows = new BorderlandElatedField(
	'yesno',
	'icon_with_text_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'borderland' ),
	esc_html__( 'Enabling this option will show icon shadow', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_icon_with_text_box_shadows_container'
	)
);
$panel21->addChild(
	'icon_with_text_box_shadows',
	$icon_with_text_box_shadows
);

$icon_with_text_box_shadows_container = new BorderlandElatedContainer(
	'icon_with_text_box_shadows_container',
	'icon_with_text_box_shadows',
	'no'
);
$panel21->addChild(
	'icon_with_text_box_shadows_container',
	$icon_with_text_box_shadows_container
);

$group3 = new BorderlandElatedGroup(
	esc_html__( 'Icon Shadows', 'borderland' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'borderland' )
);
$icon_with_text_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new BorderlandElatedRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_with_text_box_shadow_horizontal_shadow = new BorderlandElatedField(
	'textsimple',
	'icon_with_text_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'borderland' )
);
$row3->addChild(
	'icon_with_text_box_shadow_horizontal_shadow',
	$icon_with_text_box_shadow_horizontal_shadow
);

$icon_with_text_box_shadow_vertical_shadow = new BorderlandElatedField(
	'textsimple',
	'icon_with_text_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'borderland' )
);
$row3->addChild(
	'icon_with_text_box_shadow_vertical_shadow',
	$icon_with_text_box_shadow_vertical_shadow
);

$icon_with_text_box_shadow_blur_distance = new BorderlandElatedField(
	'textsimple',
	'icon_with_text_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'borderland' )
);
$row3->addChild(
	'icon_with_text_box_shadow_blur_distance',
	$icon_with_text_box_shadow_blur_distance
);

$icon_with_text_box_shadow_shadow_size = new BorderlandElatedField(
	'textsimple',
	'icon_with_text_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'borderland' )
);
$row3->addChild(
	'icon_with_text_box_shadow_shadow_size',
	$icon_with_text_box_shadow_shadow_size
);

$row4 = new BorderlandElatedRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_with_text_box_shadow_shadow_color = new BorderlandElatedField(
	'colorsimple',
	'icon_with_text_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'borderland' )
);
$row4->addChild(
	'icon_with_text_box_shadow_shadow_color',
	$icon_with_text_box_shadow_shadow_color
);

//Input Fields

$panel7 = new BorderlandElatedPanel(
	esc_html__( "Input Fields", 'borderland' ),
	"input_fields_panel"
);
$elementsPage->addChild(
	"panel7",
	$panel7
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Input Fields Style", 'borderland' ),
	esc_html__( "Define styles for Input Fields", 'borderland' )
);
$panel7->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$input_background_color = new BorderlandElatedField(
	"colorsimple",
	"input_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"input_background_color",
	$input_background_color
);

$input_focus_background_color = new BorderlandElatedField(
	"colorsimple",
	"input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'borderland' )
);
$row1->addChild(
	"input_focus_background_color",
	$input_focus_background_color
);

$input_border_color = new BorderlandElatedField(
	"colorsimple",
	"input_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"input_border_color",
	$input_border_color
);

$input_focus_border_color = new BorderlandElatedField(
	"colorsimple",
	"input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'borderland' )
);
$row1->addChild(
	"input_focus_border_color",
	$input_focus_border_color
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$input_text_color = new BorderlandElatedField(
	"colorsimple",
	"input_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"input_text_color",
	$input_text_color
);

$input_focus_text_color = new BorderlandElatedField(
	"colorsimple",
	"input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'borderland' )
);
$row2->addChild(
	"input_focus_text_color",
	$input_focus_text_color
);

//Interactive Banners

$panel71 = new BorderlandElatedPanel(
	esc_html__( "Interactive Banners", 'borderland' ),
	"interactive_banners_panel"
);
$elementsPage->addChild(
	"panel71",
	$panel71
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Interactive Banners Style", 'borderland' ),
	esc_html__( "Define styles for Interactive Banners", 'borderland' )
);
$panel71->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$interactive_banners_background_color = new BorderlandElatedField(
	"colorsimple",
	"interactive_banners_background_color",
	"",
	esc_html__( "Image Overlay Color", 'borderland' )
);
$row1->addChild(
	"interactive_banners_background_color",
	$interactive_banners_background_color
);

$interactive_banners_background_transparency = new BorderlandElatedField(
	"textsimple",
	"interactive_banners_background_transparency",
	"",
	esc_html__( "Image Overlay Color Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"interactive_banners_background_transparency",
	$interactive_banners_background_transparency
);

$interactive_banners_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"interactive_banners_hover_background_color",
	"",
	esc_html__( "Image Overlay Hover Color", 'borderland' )
);
$row1->addChild(
	"interactive_banners_hover_background_color",
	$interactive_banners_hover_background_color
);

$interactive_banners_hover_background_transparency = new BorderlandElatedField(
	"textsimple",
	"interactive_banners_hover_background_transparency (0-1)",
	"",
	esc_html__( "Image Overlay Hover Color Transparency", 'borderland' )
);
$row1->addChild(
	"interactive_banners_hover_background_transparency",
	$interactive_banners_hover_background_transparency
);

//Lists

$panel72 = new BorderlandElatedPanel(
	esc_html__( "Lists", 'borderland' ),
	"lists"
);
$elementsPage->addChild(
	"panel72",
	$panel72
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Unordered List Style", 'borderland' ),
	esc_html__( "Define styles for Unordered Lists", 'borderland' )
);
$panel72->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$list_item_color = new BorderlandElatedField(
	"colorsimple",
	"list_item_color",
	"",
	esc_html__( "List Bullet Color", 'borderland' )
);
$row1->addChild(
	"list_item_color",
	$list_item_color
);
$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$list_color = new BorderlandElatedField(
	"colorsimple",
	"list_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"list_color",
	$list_color
);

$list_fontsize = new BorderlandElatedField(
	"textsimple",
	"list_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"list_fontsize",
	$list_fontsize
);

$list_lineheight = new BorderlandElatedField(
	"textsimple",
	"list_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"list_lineheight",
	$list_lineheight
);

$list_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"list_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"list_texttransform",
	$list_texttransform
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);
$list_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"list_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row3->addChild(
	"list_google_fonts",
	$list_google_fonts
);

$list_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"list_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"list_fontstyle",
	$list_fontstyle
);

$list_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"list_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"list_fontweight",
	$list_fontweight
);

$list_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"list_letter_spacing",
	$list_letter_spacing
);
$row4 = new BorderlandElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);
$list_bottom_margin = new BorderlandElatedField(
	"textsimple",
	"list_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'borderland' )
);
$row4->addChild(
	"list_bottom_margin",
	$list_bottom_margin
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Ordered List Style", 'borderland' ),
	esc_html__( "Define styles for Ordered lists", 'borderland' )
);
$panel72->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$list_ordered_item_color = new BorderlandElatedField(
	"colorsimple",
	"list_ordered_item_color",
	"",
	esc_html__( "List Number Color", 'borderland' )
);
$row1->addChild(
	"list_ordered_item_color",
	$list_ordered_item_color
);
$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$list_ordered_color = new BorderlandElatedField(
	"colorsimple",
	"list_ordered_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"list_ordered_color",
	$list_ordered_color
);

$list_ordered_fontsize = new BorderlandElatedField(
	"textsimple",
	"list_ordered_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"list_ordered_fontsize",
	$list_ordered_fontsize
);

$list_ordered_lineheight = new BorderlandElatedField(
	"textsimple",
	"list_ordered_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"list_ordered_lineheight",
	$list_ordered_lineheight
);

$list_ordered_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"list_ordered_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"list_ordered_texttransform",
	$list_ordered_texttransform
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);
$list_ordered_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"list_ordered_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row3->addChild(
	"list_ordered_google_fonts",
	$list_ordered_google_fonts
);

$list_ordered_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"list_ordered_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"list_ordered_fontstyle",
	$list_ordered_fontstyle
);

$list_ordered_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"list_ordered_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"list_ordered_fontweight",
	$list_ordered_fontweight
);

$list_ordered_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"list_ordered_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"list_ordered_letter_spacing",
	$list_ordered_letter_spacing
);
$row4 = new BorderlandElatedRow( true );
$group2->addChild(
	"row4",
	$row4
);
$list_ordered_bottom_margin = new BorderlandElatedField(
	"textsimple",
	"list_ordered_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'borderland' )
);
$row4->addChild(
	"list_ordered_bottom_margin",
	$list_ordered_bottom_margin
);

//Message Boxes

$panel8 = new BorderlandElatedPanel(
	esc_html__( "Message Boxes", 'borderland' ),
	"message_boxes_panel"
);
$elementsPage->addChild(
	"panel8",
	$panel8
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Message Box Style", 'borderland' ),
	esc_html__( "Define Message Box Style", 'borderland' )
);
$panel8->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$message_title_color = new BorderlandElatedField(
	"colorsimple",
	"message_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"message_title_color",
	$message_title_color
);

$message_backgroundcolor = new BorderlandElatedField(
	"colorsimple",
	"message_backgroundcolor",
	"",
	esc_html__( "Background color", 'borderland' )
);
$row1->addChild(
	"message_backgroundcolor",
	$message_backgroundcolor
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$message_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"message_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"message_title_google_fonts",
	$message_title_google_fonts
);

$message_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"message_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"message_title_fontsize",
	$message_title_fontsize
);

$message_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"message_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"message_title_lineheight",
	$message_title_lineheight
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$message_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"message_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"message_title_fontstyle",
	$message_title_fontstyle
);

$message_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"message_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"message_title_fontweight",
	$message_title_fontweight
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Message Box Icon Style", 'borderland' ),
	esc_html__( "Define styles for Message Box icons", 'borderland' )
);
$panel8->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$message_icon_color = new BorderlandElatedField(
	"colorsimple",
	"message_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"message_icon_color",
	$message_icon_color
);

$message_icon_fontsize = new BorderlandElatedField(
	"textsimple",
	"message_icon_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"message_icon_fontsize",
	$message_icon_fontsize
);

//Pagination

$panel10 = new BorderlandElatedPanel(
	esc_html__( "Pagination", 'borderland' ),
	"pagination_panel"
);
$elementsPage->addChild(
	"panel10",
	$panel10
);

$pagination_type = new BorderlandElatedField(
	"select",
	"pagination_type",
	"",
	esc_html__( "Type", 'borderland' ),
	esc_html__( "Choose pagination style", 'borderland' ),
	array(
		"standard" => esc_html__( "Standard", 'borderland' ),
		"arrows_on_sides" => esc_html__( "Arrows on Sides", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"standard"        => "",
			"arrows_on_sides" => "#eltdf_pagination_standard_position_container"
		),
		"show"       => array(
			"standard"        => "#eltdf_pagination_standard_position_container",
			"arrows_on_sides" => ""
		)
	)
);
$panel10->addChild(
	"pagination_type",
	$pagination_type
);

$pagination_standard_position_container = new BorderlandElatedContainer(
	"pagination_standard_position_container",
	"pagination_type",
	"arrows_on_sides"
);
$panel10->addChild(
	"pagination_standard_position_container",
	$pagination_standard_position_container
);

$pagination_standard_position = new BorderlandElatedField(
	"select",
	"pagination_standard_position",
	"",
	esc_html__( "Position", 'borderland' ),
	esc_html__( "Choose position of pagination", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$pagination_standard_position_container->addChild(
	"pagination_standard_position",
	$pagination_standard_position
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Navigation Style", 'borderland' ),
	esc_html__( "Define Navigation styles", 'borderland' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$pagination_button_width = new BorderlandElatedField(
	"textsimple",
	"pagination_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"pagination_button_width",
	$pagination_button_width
);

$pagination_button_height = new BorderlandElatedField(
	"textsimple",
	"pagination_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"pagination_button_height",
	$pagination_button_height
);

$pagination_space_between_buttons = new BorderlandElatedField(
	"textsimple",
	"pagination_space_between_buttons",
	"",
	esc_html__( "Space between buttons (px)", 'borderland' )
);
$row1->addChild(
	"pagination_space_between_buttons",
	$pagination_space_between_buttons
);

$pagination_button_background_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"pagination_button_background_color",
	$pagination_button_background_color
);

$row2 = new BorderlandElatedRow();
$group3->addChild(
	"row2",
	$row2
);

$pagination_button_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row2->addChild(
	"pagination_button_background_hover_color",
	$pagination_button_background_hover_color
);

$pagination_button_background_active_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_background_active_color",
	"",
	esc_html__( "Background Active Color", 'borderland' )
);
$row2->addChild(
	"pagination_button_background_active_color",
	$pagination_button_background_active_color
);

$pagination_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row2->addChild(
	"pagination_button_border_color",
	$pagination_button_border_color
);

$pagination_button_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row2->addChild(
	"pagination_button_border_hover_color",
	$pagination_button_border_hover_color
);

$row3 = new BorderlandElatedRow();
$group3->addChild(
	"row3",
	$row3
);

$pagination_button_border_active_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_button_border_active_color",
	"",
	esc_html__( "Border Active Color", 'borderland' )
);
$row3->addChild(
	"pagination_button_border_active_color",
	$pagination_button_border_active_color
);

$pagination_button_border_radius = new BorderlandElatedField(
	"textsimple",
	"pagination_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row3->addChild(
	"pagination_button_border_radius",
	$pagination_button_border_radius
);

$pagination_button_border_width = new BorderlandElatedField(
	"textsimple",
	"pagination_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row3->addChild(
	"pagination_button_border_width",
	$pagination_button_border_width
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define text styles (this style will also be applied to Only Previous and Next type)", 'borderland' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pagination_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pagination_color",
	$pagination_color
);

$pagination_hover_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"pagination_hover_color",
	$pagination_hover_color
);

$pagination_active_color = new BorderlandElatedField(
	"colorsimple",
	"pagination_active_color",
	"",
	esc_html__( "Active Text Color", 'borderland' )
);
$row1->addChild(
	"pagination_active_color",
	$pagination_active_color
);

$pagination_font_size = new BorderlandElatedField(
	"textsimple",
	"pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pagination_font_size",
	$pagination_font_size
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pagination_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pagination_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pagination_font_weight",
	$pagination_font_weight
);

$pagination_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pagination_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pagination_font_family",
	$pagination_font_family
);

$pagination_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pagination_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pagination_font_style",
	$pagination_font_style
);

$pagination_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pagination_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pagination_letter_spacing",
	$pagination_letter_spacing
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define arrow styles (this style will also be applied to Only Previous and Next type)", 'borderland' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$pagination_arrow_size = new BorderlandElatedField(
	"textsimple",
	"pagination_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'borderland' )
);
$row1->addChild(
	"pagination_arrow_size",
	$pagination_arrow_size
);

$pagination_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"pagination_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"pagination_arrows_type",
	$pagination_arrows_type
);

$pagination_double_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"pagination_double_arrows_type",
	"",
	esc_html__( "First/Last Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'double_arrows_type' )
);
$row1->addChild(
	"pagination_double_arrows_type",
	$pagination_double_arrows_type
);

$portfolio_pagination_section = new BorderlandElatedTitle(
	"portfolio_pagination_section",
	esc_html__( "Portfolio Pagination", 'borderland' )
);
$panel10->addChild(
	"portfolio_pagination_section",
	$portfolio_pagination_section
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Portfolio Pagination Style", 'borderland' ),
	esc_html__( "Define Pagination styles for portfolio single", 'borderland' )
);
$panel10->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$portfolio_pagination_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_pagination_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_pagination_color",
	$portfolio_pagination_color
);

$portfolio_pagination_hover_color = new BorderlandElatedField(
	"colorsimple",
	"portfolio_pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"portfolio_pagination_hover_color",
	$portfolio_pagination_hover_color
);

$portfolio_pagination_font_size = new BorderlandElatedField(
	"textsimple",
	"portfolio_pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"portfolio_pagination_font_size",
	$portfolio_pagination_font_size
);

//Parallax
$panelParallax = new BorderlandElatedPanel(
	esc_html__( "Parallax Settings", 'borderland' ),
	"parallax_settings_panel"
);
$elementsPage->addChild(
	"panel_parallax",
	$panelParallax
);

$parallax_onoff = new BorderlandElatedField(
	"onoff",
	"parallax_onoff",
	"on",
	esc_html__( "Parallax on touch devices", 'borderland' ),
	esc_html__( "Enabling this option will allow parallax on touch devices", 'borderland' )
);
$panelParallax->addChild(
	"parallax_onoff",
	$parallax_onoff
);

$parallax_minheight = new BorderlandElatedField(
	"text",
	"parallax_minheight",
	"400",
	esc_html__( "Parallax Min Height (px)", 'borderland' ),
	esc_html__( "Set a minimum height for parallax images on small displays (phones, tablets, etc.)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panelParallax->addChild(
	"parallax_minheight",
	$parallax_minheight
);

//Pie Charts

$panel11 = new BorderlandElatedPanel(
	esc_html__( "Pie Charts", 'borderland' ),
	"pie_charts_panel"
);
$elementsPage->addChild(
	"panel11",
	$panel11
);

$pie_charts_margin_below_chart = new BorderlandElatedField(
	"text",
	"pie_charts_margin_below_chart",
	"",
	esc_html__( "Margin Below Chart (px)", 'borderland' ),
	esc_html__( "Set margin below pie chart", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"pie_charts_margin_below_chart",
	$pie_charts_margin_below_chart
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Pie Chart Percent Style", 'borderland' ),
	esc_html__( "Define text style for Pie Charts percent number", 'borderland' )
);
$panel11->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pie_charts_fontsize = new BorderlandElatedField(
	"textsimple",
	"pie_charts_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pie_charts_fontsize",
	$pie_charts_fontsize
);

$pie_charts_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"pie_charts_fontweight",
	"",
	esc_html__( "Text Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"pie_charts_fontweight",
	$pie_charts_fontweight
);

//Pricing table

$panel12 = new BorderlandElatedPanel(
	esc_html__( "Pricing Table", 'borderland' ),
	"pricing_table_panel"
);
$elementsPage->addChild(
	"panel12",
	$panel12
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Style", 'borderland' ),
	esc_html__( "Define Pricing tables style", 'borderland' )
);
$panel12->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$pricing_table_title_background_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'borderland' )
);
$row1->addChild(
	"pricing_table_title_background_color",
	$pricing_table_title_background_color
);

$pricing_table_title_separator_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'borderland' )
);
$row1->addChild(
	"pricing_table_title_separator_color",
	$pricing_table_title_separator_color
);

$pricing_table_title_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"pricing_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'borderland' )
);
$row1->addChild(
	"pricing_table_title_separator_thickness",
	$pricing_table_title_separator_thickness
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pricing_table_title_top_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_title_top_padding",
	"",
	esc_html__( "Title Padding Top (px)", 'borderland' )
);
$row2->addChild(
	"pricing_table_title_top_padding",
	$pricing_table_title_top_padding
);

$pricing_table_title_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_title_bottom_padding",
	"",
	esc_html__( "Title Padding Bottom (px)", 'borderland' )
);
$row2->addChild(
	"pricing_table_title_bottom_padding",
	$pricing_table_title_bottom_padding
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$pricing_table_price_background_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_price_background_color",
	"",
	esc_html__( "Price Background Color", 'borderland' )
);
$row3->addChild(
	"pricing_table_price_background_color",
	$pricing_table_price_background_color
);

$pricing_table_price_separator_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_price_separator_color",
	"",
	esc_html__( "Price Separator Color", 'borderland' )
);
$row3->addChild(
	"pricing_table_price_separator_color",
	$pricing_table_price_separator_color
);

$pricing_table_price_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"pricing_table_price_separator_thickness",
	"",
	esc_html__( "Price Separator Thickness (px)", 'borderland' )
);
$row3->addChild(
	"pricing_table_price_separator_thickness",
	$pricing_table_price_separator_thickness
);

$row4 = new BorderlandElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);

$pricing_table_price_top_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_price_top_padding",
	"",
	esc_html__( "Price Top Padding (px)", 'borderland' )
);
$row4->addChild(
	"pricing_table_price_top_padding",
	$pricing_table_price_top_padding
);

$pricing_table_price_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_price_bottom_padding",
	"",
	esc_html__( "Price Bottom Padding (px)", 'borderland' )
);
$row4->addChild(
	"pricing_table_price_bottom_padding",
	$pricing_table_price_bottom_padding
);

$row5 = new BorderlandElatedRow( true );
$group1->addChild(
	"row5",
	$row5
);

$pricing_table_background_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_background_color",
	"",
	esc_html__( "Content Background Color", 'borderland' )
);
$row5->addChild(
	"pricing_table_background_color",
	$pricing_table_background_color
);

$pricing_table_separator_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'borderland' )
);
$row5->addChild(
	"pricing_table_separator_color",
	$pricing_table_separator_color
);

$pricing_table_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"pricing_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'borderland' )
);
$row5->addChild(
	"pricing_table_separator_thickness",
	$pricing_table_separator_thickness
);

$row6 = new BorderlandElatedRow( true );
$group1->addChild(
	"row6",
	$row6
);

$pricing_table_content_top_margin = new BorderlandElatedField(
	"textsimple",
	"pricing_table_content_top_margin",
	"",
	esc_html__( "Content Top Margin (px)", 'borderland' )
);
$row6->addChild(
	"pricing_table_content_top_margin",
	$pricing_table_content_top_margin
);

$pricing_table_content_bottom_margin = new BorderlandElatedField(
	"textsimple",
	"pricing_table_content_bottom_margin",
	"",
	esc_html__( "Content Bottom Margin (px)", 'borderland' )
);
$row6->addChild(
	"pricing_table_content_bottom_margin",
	$pricing_table_content_bottom_margin
);

$row7 = new BorderlandElatedRow( true );
$group1->addChild(
	"row7",
	$row7
);

$pricing_table_button_holder_background_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_table_button_holder_background_color",
	"",
	esc_html__( "Button Holder Background Color", 'borderland' )
);
$row7->addChild(
	"pricing_table_button_holder_background_color",
	$pricing_table_button_holder_background_color
);

$pricing_table_button_top_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_button_top_padding",
	"",
	esc_html__( "Button Holder Padding Top(px)", 'borderland' )
);
$row7->addChild(
	"pricing_table_button_top_padding",
	$pricing_table_button_top_padding
);

$pricing_table_button_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_button_bottom_padding",
	"",
	esc_html__( "Button Holder Padding Bottom(px)", 'borderland' )
);
$row7->addChild(
	"pricing_table_button_bottom_padding",
	$pricing_table_button_bottom_padding
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Active Text", 'borderland' ),
	esc_html__( "DefinePricing tables active text style.", 'borderland' )
);
$panel12->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$pricing_tables_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_active_text_color",
	$pricing_tables_active_text_color
);

$pricing_tables_active_text_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_active_text_font_size",
	$pricing_tables_active_text_font_size
);

$pricing_tables_active_text_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_active_text_line_height",
	$pricing_tables_active_text_line_height
);

$pricing_tables_active_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_active_text_text_transform",
	$pricing_tables_active_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$pricing_tables_active_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_active_text_font_family",
	$pricing_tables_active_text_font_family
);

$pricing_tables_active_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_active_text_font_style",
	$pricing_tables_active_text_font_style
);

$pricing_tables_active_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_active_text_font_weight",
	$pricing_tables_active_text_font_weight
);

$pricing_tables_active_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_active_text_letter_spacing",
	$pricing_tables_active_text_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Title", 'borderland' ),
	esc_html__( "Define Pricing tables title style", 'borderland' )
);
$panel12->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$pricing_tables_title_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_title_color",
	$pricing_tables_title_color
);

$pricing_tables_title_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_title_font_size",
	$pricing_tables_title_font_size
);

$pricing_tables_title_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_title_line_height",
	$pricing_tables_title_line_height
);

$pricing_tables_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_title_text_transform",
	$pricing_tables_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$pricing_tables_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_title_font_family",
	$pricing_tables_title_font_family
);

$pricing_tables_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_title_font_style",
	$pricing_tables_title_font_style
);

$pricing_tables_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_title_font_weight",
	$pricing_tables_title_font_weight
);

$pricing_tables_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_title_letter_spacing",
	$pricing_tables_title_letter_spacing
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Period", 'borderland' ),
	esc_html__( "DefinePricing tables period style", 'borderland' )
);
$panel12->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_tables_period_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_period_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_period_color",
	$pricing_tables_period_color
);

$pricing_tables_period_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_period_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_period_font_size",
	$pricing_tables_period_font_size
);

$pricing_tables_period_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_period_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_period_line_height",
	$pricing_tables_period_line_height
);

$pricing_tables_period_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_period_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_period_text_transform",
	$pricing_tables_period_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_tables_period_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_period_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_period_font_family",
	$pricing_tables_period_font_family
);

$pricing_tables_period_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_period_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_period_font_style",
	$pricing_tables_period_font_style
);

$pricing_tables_period_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_period_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_period_font_weight",
	$pricing_tables_period_font_weight
);

$pricing_tables_period_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_period_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_period_letter_spacing",
	$pricing_tables_period_letter_spacing
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Price", 'borderland' ),
	esc_html__( "Define Pricing Tables price style", 'borderland' )
);
$panel12->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_tables_price_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_price_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_price_color",
	$pricing_tables_price_color
);

$pricing_tables_price_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_price_font_size",
	$pricing_tables_price_font_size
);

$pricing_tables_price_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_price_line_height",
	$pricing_tables_price_line_height
);

$pricing_tables_price_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_price_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_price_text_transform",
	$pricing_tables_price_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$pricing_tables_price_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_price_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_price_font_family",
	$pricing_tables_price_font_family
);

$pricing_tables_price_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_price_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_price_font_style",
	$pricing_tables_price_font_style
);

$pricing_tables_price_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_price_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_price_font_weight",
	$pricing_tables_price_font_weight
);

$pricing_tables_price_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_price_letter_spacing",
	$pricing_tables_price_letter_spacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Currency", 'borderland' ),
	esc_html__( "Define Pricing tables currency style.", 'borderland' )
);
$panel12->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$pricing_tables_currency_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_currency_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_currency_color",
	$pricing_tables_currency_color
);

$pricing_tables_currency_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_currency_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_currency_font_size",
	$pricing_tables_currency_font_size
);

$pricing_tables_currency_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_currency_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_currency_line_height",
	$pricing_tables_currency_line_height
);

$pricing_tables_currency_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_currency_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_currency_text_transform",
	$pricing_tables_currency_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$pricing_tables_currency_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_currency_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_currency_font_family",
	$pricing_tables_currency_font_family
);

$pricing_tables_currency_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_currency_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_currency_font_style",
	$pricing_tables_currency_font_style
);

$pricing_tables_currency_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_currency_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_currency_font_weight",
	$pricing_tables_currency_font_weight
);

$pricing_tables_currency_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_currency_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_currency_letter_spacing",
	$pricing_tables_currency_letter_spacing
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Button", 'borderland' ),
	esc_html__( "Define Pricing Tables button style.", 'borderland' )
);
$panel12->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$pricing_tables_button_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_button_color",
	$pricing_tables_button_color
);

$pricing_tables_button_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_button_font_size",
	$pricing_tables_button_font_size
);

$pricing_tables_button_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_button_line_height",
	$pricing_tables_button_line_height
);

$pricing_tables_button_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_button_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_button_text_transform",
	$pricing_tables_button_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$pricing_tables_button_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_button_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_button_font_family",
	$pricing_tables_button_font_family
);

$pricing_tables_button_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_button_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_button_font_style",
	$pricing_tables_button_font_style
);

$pricing_tables_button_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_button_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_button_font_weight",
	$pricing_tables_button_font_weight
);

$pricing_tables_button_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_button_letter_spacing",
	$pricing_tables_button_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);
$pricing_tables_button_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_hovercolor",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row3->addChild(
	"pricing_tables_button_hovercolor",
	$pricing_tables_button_hovercolor
);

$pricing_tables_button_backgroundcolor = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor",
	$pricing_tables_button_backgroundcolor
);

$pricing_tables_button_backgroundcolor_hover = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor_hover",
	$pricing_tables_button_backgroundcolor_hover
);

$row4 = new BorderlandElatedRow( true );
$group7->addChild(
	"row4",
	$row4
);

$pricing_tables_button_border_width = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row4->addChild(
	"pricing_tables_button_border_width",
	$pricing_tables_button_border_width
);

$pricing_tables_button_border_radius = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row4->addChild(
	"pricing_tables_button_border_radius",
	$pricing_tables_button_border_radius
);

$pricing_tables_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row4->addChild(
	"pricing_tables_button_border_color",
	$pricing_tables_button_border_color
);

$pricing_tables_button_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row4->addChild(
	"pricing_tables_button_border_hover_color",
	$pricing_tables_button_border_hover_color
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Button Padding", 'borderland' ),
	esc_html__( "Define Pricing Tables button padding (Takes effect only when pricing table button is set to size normal)", 'borderland' )
);
$panel12->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow( true );
$group9->addChild(
	"row1",
	$row1
);

$pricing_table_button_left_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_button_left_padding",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"pricing_table_button_left_padding",
	$pricing_table_button_left_padding
);

$pricing_table_button_right_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_button_right_padding",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"pricing_table_button_right_padding",
	$pricing_table_button_right_padding
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Pricing Tables Content", 'borderland' ),
	esc_html__( "Define Pricing Tables content style", 'borderland' )
);
$panel12->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$pricing_tables_content_color = new BorderlandElatedField(
	"colorsimple",
	"pricing_tables_content_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"pricing_tables_content_color",
	$pricing_tables_content_color
);

$pricing_tables_content_font_size = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_content_font_size",
	$pricing_tables_content_font_size
);

$pricing_tables_content_line_height = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"pricing_tables_content_line_height",
	$pricing_tables_content_line_height
);

$pricing_tables_content_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_content_text_transform",
	$pricing_tables_content_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$pricing_tables_content_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"pricing_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"pricing_tables_content_font_family",
	$pricing_tables_content_font_family
);

$pricing_tables_content_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_content_font_style",
	$pricing_tables_content_font_style
);

$pricing_tables_content_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"pricing_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_content_font_weight",
	$pricing_tables_content_font_weight
);

$pricing_tables_content_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"pricing_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"pricing_tables_content_letter_spacing",
	$pricing_tables_content_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$pricing_table_content_top_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_content_top_padding",
	"",
	esc_html__( "Content Top Padding (px)", 'borderland' )
);
$row3->addChild(
	"pricing_table_content_top_padding",
	$pricing_table_content_top_padding
);

$pricing_table_content_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"pricing_table_content_bottom_padding",
	"",
	esc_html__( "Content Bottom Padding (px)", 'borderland' )
);
$row3->addChild(
	"pricing_table_content_bottom_padding",
	$pricing_table_content_bottom_padding
);

//Service table

$panel22 = new BorderlandElatedPanel(
	esc_html__( "Service Table", 'borderland' ),
	"service_table_panel"
);
$elementsPage->addChild(
	"panel22",
	$panel22
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Service Tables Style", 'borderland' ),
	esc_html__( "Define Service tables style", 'borderland' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$service_table_title_background_color = new BorderlandElatedField(
	"colorsimple",
	"service_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'borderland' )
);
$row1->addChild(
	"service_table_title_background_color",
	$service_table_title_background_color
);

$service_table_title_separator_color = new BorderlandElatedField(
	"colorsimple",
	"service_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'borderland' )
);
$row1->addChild(
	"service_table_title_separator_color",
	$service_table_title_separator_color
);

$service_table_title_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"service_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'borderland' )
);
$row1->addChild(
	"service_table_title_separator_thickness",
	$service_table_title_separator_thickness
);

$row2 = new BorderlandElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$service_table_title_padding_top = new BorderlandElatedField(
	"textsimple",
	"service_table_title_padding_top",
	"",
	esc_html__( "Title Padding Top (px)", 'borderland' )
);
$row2->addChild(
	"service_table_title_padding_top",
	$service_table_title_padding_top
);

$service_table_title_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"service_table_title_padding_bottom",
	"",
	esc_html__( "Title Padding Bottom (px)", 'borderland' )
);
$row2->addChild(
	"service_table_title_padding_bottom",
	$service_table_title_padding_bottom
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$service_table_background_color = new BorderlandElatedField(
	"colorsimple",
	"service_table_background_color",
	"",
	esc_html__( "Content Background Color", 'borderland' )
);
$row3->addChild(
	"service_table_background_color",
	$service_table_background_color
);

$service_table_separator_color = new BorderlandElatedField(
	"colorsimple",
	"service_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'borderland' )
);
$row3->addChild(
	"service_table_separator_color",
	$service_table_separator_color
);

$service_table_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"service_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'borderland' )
);
$row3->addChild(
	"service_table_separator_thickness",
	$service_table_separator_thickness
);

$row4 = new BorderlandElatedRow();
$group1->addChild(
	"row4",
	$row4
);

$service_table_content_padding_top = new BorderlandElatedField(
	"textsimple",
	"service_table_content_padding_top",
	"",
	esc_html__( "Content Padding Top (px)", 'borderland' )
);
$row4->addChild(
	"service_table_content_padding_top",
	$service_table_content_padding_top
);

$service_table_content_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"service_table_content_padding_bottom",
	"",
	esc_html__( "Content Padding Bottom (px)", 'borderland' )
);
$row4->addChild(
	"service_table_content_padding_bottom",
	$service_table_content_padding_bottom
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Service Tables Active Text", 'borderland' ),
	esc_html__( "DefineService tables active text style.", 'borderland' )
);
$panel22->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$service_tables_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"service_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"service_tables_active_text_color",
	$service_tables_active_text_color
);

$service_tables_active_text_font_size = new BorderlandElatedField(
	"textsimple",
	"service_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_active_text_font_size",
	$service_tables_active_text_font_size
);

$service_tables_active_text_line_height = new BorderlandElatedField(
	"textsimple",
	"service_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_active_text_line_height",
	$service_tables_active_text_line_height
);

$service_tables_active_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_active_text_text_transform",
	$service_tables_active_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$service_tables_active_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"service_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"service_tables_active_text_font_family",
	$service_tables_active_text_font_family
);

$service_tables_active_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_active_text_font_style",
	$service_tables_active_text_font_style
);

$service_tables_active_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_active_text_font_weight",
	$service_tables_active_text_font_weight
);

$service_tables_active_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"service_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"service_tables_active_text_letter_spacing",
	$service_tables_active_text_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Service Tables Title", 'borderland' ),
	esc_html__( "Define Service tables title style", 'borderland' )
);
$panel22->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$service_tables_title_color = new BorderlandElatedField(
	"colorsimple",
	"service_tables_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"service_tables_title_color",
	$service_tables_title_color
);

$service_tables_title_font_size = new BorderlandElatedField(
	"textsimple",
	"service_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_title_font_size",
	$service_tables_title_font_size
);

$service_tables_title_line_height = new BorderlandElatedField(
	"textsimple",
	"service_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_title_line_height",
	$service_tables_title_line_height
);

$service_tables_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_title_text_transform",
	$service_tables_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$service_tables_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"service_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"service_tables_title_font_family",
	$service_tables_title_font_family
);

$service_tables_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_title_font_style",
	$service_tables_title_font_style
);

$service_tables_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_title_font_weight",
	$service_tables_title_font_weight
);

$service_tables_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"service_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"service_tables_title_letter_spacing",
	$service_tables_title_letter_spacing
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Service Tables Content", 'borderland' ),
	esc_html__( "Define Service tables content style", 'borderland' )
);
$panel22->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$service_tables_content_color = new BorderlandElatedField(
	"colorsimple",
	"service_tables_content_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"service_tables_content_color",
	$service_tables_content_color
);

$service_tables_content_font_size = new BorderlandElatedField(
	"textsimple",
	"service_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_content_font_size",
	$service_tables_content_font_size
);

$service_tables_content_line_height = new BorderlandElatedField(
	"textsimple",
	"service_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"service_tables_content_line_height",
	$service_tables_content_line_height
);

$service_tables_content_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_content_text_transform",
	$service_tables_content_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$service_tables_content_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"service_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"service_tables_content_font_family",
	$service_tables_content_font_family
);

$service_tables_content_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_content_font_style",
	$service_tables_content_font_style
);

$service_tables_content_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"service_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_content_font_weight",
	$service_tables_content_font_weight
);

$service_tables_content_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"service_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"service_tables_content_letter_spacing",
	$service_tables_content_letter_spacing
);

//Separators

$panel13 = new BorderlandElatedPanel(
	esc_html__( "Separators", 'borderland' ),
	"separators_panel"
);
$elementsPage->addChild(
	"panel13",
	$panel13
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Normal", 'borderland' ),
	esc_html__( 'Define styles for separator of type "Normal"', 'borderland' )
);
$panel13->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$separator_color = new BorderlandElatedField(
	"colorsimple",
	"separator_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"separator_color",
	$separator_color
);

$separator_thickness = new BorderlandElatedField(
	"textsimple",
	"separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'borderland' )
);
$row1->addChild(
	"separator_thickness",
	$separator_thickness
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separator_topmargin = new BorderlandElatedField(
	"textsimple",
	"separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'borderland' )
);
$row2->addChild(
	"separator_topmargin",
	$separator_topmargin
);

$separator_bottommargin = new BorderlandElatedField(
	"textsimple",
	"separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' )
);
$row2->addChild(
	"separator_bottommargin",
	$separator_bottommargin
);

$separator_type = new BorderlandElatedField(
	"selectblanksimple",
	"separator_type",
	"",
	esc_html__( "Separator type", 'borderland' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' )
	)
);
$row2->addChild(
	"separator_type",
	$separator_type
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Small", 'borderland' ),
	esc_html__( 'Define styles for separator of type "Small"', 'borderland' )
);
$panel13->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$separator_small_color = new BorderlandElatedField(
	"colorsimple",
	"separator_small_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"separator_small_color",
	$separator_small_color
);

$separator_small_thickness = new BorderlandElatedField(
	"textsimple",
	"separator_small_thickness",
	"",
	esc_html__( "Thickness (px)", 'borderland' )
);
$row1->addChild(
	"separator_small_thickness",
	$separator_small_thickness
);

$separator_small_width = new BorderlandElatedField(
	"textsimple",
	"separator_small_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"separator_small_width",
	$separator_small_width
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$separator_small_topmargin = new BorderlandElatedField(
	"textsimple",
	"separator_small_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'borderland' )
);
$row2->addChild(
	"separator_small_topmargin",
	$separator_small_topmargin
);

$separator_small_bottommargin = new BorderlandElatedField(
	"textsimple",
	"separator_small_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' )
);
$row2->addChild(
	"separator_small_bottommargin",
	$separator_small_bottommargin
);

$separator_small_type = new BorderlandElatedField(
	"selectsimple",
	"separator_small_type",
	"",
	esc_html__( "Separator type", 'borderland' ),
	"",
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' )
	)
);
$row2->addChild(
	"separator_small_type",
	$separator_small_type
);

//Separators with text

$panel23 = new BorderlandElatedPanel(
	esc_html__( "Separators with Text", 'borderland' ),
	"separators_with_text_panel"
);
$elementsPage->addChild(
	"panel23",
	$panel23
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( 'Define text styles for separator with text', 'borderland' )
);
$panel23->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$separators_with_text_text_color = new BorderlandElatedField(
	"colorsimple",
	"separators_with_text_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"separators_with_text_text_color",
	$separators_with_text_text_color
);

$separators_with_text_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"separators_with_text_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"separators_with_text_text_hover_color",
	$separators_with_text_text_hover_color
);

$separators_with_text_text_fontsize = new BorderlandElatedField(
	"textsimple",
	"separators_with_text_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"separators_with_text_text_fontsize",
	$separators_with_text_text_fontsize
);

$separators_with_text_text_lineheight = new BorderlandElatedField(
	"textsimple",
	"separators_with_text_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"separators_with_text_text_lineheight",
	$separators_with_text_text_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separators_with_text_text_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"separators_with_text_text_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"separators_with_text_text_texttransform",
	$separators_with_text_text_texttransform
);

$separators_with_text_text_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"separators_with_text_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"separators_with_text_text_google_fonts",
	$separators_with_text_text_google_fonts
);

$separators_with_text_text_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"separators_with_text_text_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"separators_with_text_text_fontstyle",
	$separators_with_text_text_fontstyle
);

$separators_with_text_text_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"separators_with_text_text_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"separators_with_text_text_fontweight",
	$separators_with_text_text_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$separators_with_text_text_letterspacing = new BorderlandElatedField(
	"textsimple",
	"separators_with_text_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"separators_with_text_text_letterspacing",
	$separators_with_text_text_letterspacing
);

$panel24 = new BorderlandElatedPanel(
	esc_html__( "Single Image", 'borderland' ),
	"single_image_panel"
);
$elementsPage->addChild(
	"panel24",
	$panel24
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Hover Style", 'borderland' ),
	esc_html__( "Define hover style", 'borderland' )
);
$panel24->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$single_image_hover_color = new BorderlandElatedField(
	"colorsimple",
	"single_image_hover_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"single_image_hover_color",
	$single_image_hover_color
);

$single_image_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"single_image_hover_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'borderland' )
);
$row1->addChild(
	"single_image_hover_transparency",
	$single_image_hover_transparency
);

//Slider Navigation Interface

$panel9 = new BorderlandElatedPanel(
	esc_html__( "Slider Navigation Interface", 'borderland' ),
	"navigation_panel"
);
$elementsPage->addChild(
	"panel9",
	$panel9
);

$navigation_slider_horizontal_section = new BorderlandElatedTitle(
	"navigation_slider_horizontal_section",
	esc_html__( "Elated Slider", 'borderland' )
);
$panel9->addChild(
	"navigation_slider_horizontal_section",
	$navigation_slider_horizontal_section
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Size", 'borderland' ),
	esc_html__( "Define navigation button size", 'borderland' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$navigation_button_width = new BorderlandElatedField(
	"textsimple",
	"navigation_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"navigation_button_width",
	$navigation_button_width
);

$navigation_button_height = new BorderlandElatedField(
	"textsimple",
	"navigation_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"navigation_button_height",
	$navigation_button_height
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Position", 'borderland' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'borderland' )
);
$panel9->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_position = new BorderlandElatedField(
	"textsimple",
	"navigation_button_position",
	"",
	esc_html__( "Position (px)", 'borderland' )
);
$row1->addChild(
	"navigation_button_position",
	$navigation_button_position
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define arrow navigation style", 'borderland' )
);
$panel9->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$navigation_arrow_size = new BorderlandElatedField(
	"textsimple",
	"navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'borderland' ),
	esc_html__( "Default value is 14    ", 'borderland' )
);
$row1->addChild(
	"navigation_arrow_size",
	$navigation_arrow_size
);

$navigation_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"navigation_arrows_type",
	$navigation_arrows_type
);

$navigation_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"navigation_arrow_color",
	$navigation_arrow_color
);

$navigation_arrow_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"navigation_arrow_transparency",
	$navigation_arrow_transparency
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$navigation_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row2->addChild(
	"navigation_arrow_hover_color",
	$navigation_arrow_hover_color
);

$navigation_arrow_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"navigation_arrow_hover_transparency",
	$navigation_arrow_hover_transparency
);

$navigation_number_group = new BorderlandElatedGroup(
	esc_html__( 'Navigation Numbers Style', 'borderland' ),
	esc_html__( 'Define navigation numbers style', 'borderland' )
);
$panel9->addChild(
	'navigation_number_group',
	$navigation_number_group
);

$row1 = new BorderlandElatedRow();
$navigation_number_group->addChild(
	'row1',
	$row1
);

$navigation_number_font_size = new BorderlandElatedField(
	'textsimple',
	'navigation_number_font_size',
	'',
	esc_html__( 'Font Size (px)', 'borderland' ),
	''
);
$row1->addChild(
	'navigation_number_font_size',
	$navigation_number_font_size
);

$navigation_number_letter_spacing = new BorderlandElatedField(
	'textsimple',
	'navigation_number_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'borderland' ),
	''
);
$row1->addChild(
	'navigation_number_letter_spacing',
	$navigation_number_letter_spacing
);

$navigation_number_line_height = new BorderlandElatedField(
	'textsimple',
	'navigation_number_line_height',
	'',
	esc_html__( 'Line Height', 'borderland' ),
	''
);
$row1->addChild(
	'navigation_number_line_height',
	$navigation_number_line_height
);

$navigation_number_font_font_family = new BorderlandElatedField(
	'fontsimple',
	'navigation_number_font_font_family',
	'-1',
	esc_html__( 'Font Family', 'borderland' ),
	''
);
$row1->addChild(
	'navigation_number_font_font_family',
	$navigation_number_font_font_family
);

$row2 = new BorderlandElatedRow( true );
$navigation_number_group->addChild(
	'row2',
	$row2
);

$navigation_number_font_style = new BorderlandElatedField(
	'selectsimple',
	'navigation_number_font_style',
	'',
	esc_html__( 'Font Style', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'navigation_number_font_style',
	$navigation_number_font_style
);

$navigation_number_font_weight = new BorderlandElatedField(
	'selectsimple',
	'navigation_number_font_weight',
	'',
	esc_html__( 'Font Weight', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'navigation_number_font_weight',
	$navigation_number_font_weight
);

$row3 = new BorderlandElatedRow( true );
$navigation_number_group->addChild(
	'row3',
	$row3
);

$navigation_number_color = new BorderlandElatedField(
	'colorsimple',
	'navigation_number_color',
	'',
	esc_html__( 'Color', 'borderland' ),
	''
);
$row3->addChild(
	'navigation_number_color',
	$navigation_number_color
);

$navigation_number_hover_color = new BorderlandElatedField(
	'colorsimple',
	'navigation_number_hover_color',
	'',
	esc_html__( 'Hover Color', 'borderland' ),
	''
);
$row3->addChild(
	'navigation_number_hover_color',
	$navigation_number_hover_color
);

$navigation_number_transparency = new BorderlandElatedField(
	'textsimple',
	'navigation_number_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'borderland' ),
	''
);
$row3->addChild(
	'navigation_number_transparency',
	$navigation_number_transparency
);

$navigation_number_hover_transparency = new BorderlandElatedField(
	'textsimple',
	'navigation_number_hover_transparency',
	'',
	esc_html__( 'Hover Transparency (0=full - 1=opaque)', 'borderland' ),
	''
);
$row3->addChild(
	'navigation_number_hover_transparency',
	$navigation_number_hover_transparency
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Background", 'borderland' ),
	esc_html__( "Define navigation button background", 'borderland' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$navigation_background_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"navigation_background_color",
	$navigation_background_color
);

$navigation_background_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"navigation_background_transparency",
	$navigation_background_transparency
);

$navigation_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"navigation_background_hover_color",
	$navigation_background_hover_color
);

$navigation_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"navigation_background_hover_transparency",
	$navigation_background_hover_transparency
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Border", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
);
$panel9->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$navigation_border_width = new BorderlandElatedField(
	"textsimple",
	"navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'borderland' ),
	""
);
$row1->addChild(
	"navigation_border_width",
	$navigation_border_width
);

$navigation_border_radius = new BorderlandElatedField(
	"textsimple",
	"navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"navigation_border_radius",
	$navigation_border_radius
);

$navigation_border_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"navigation_border_color",
	$navigation_border_color
);

$navigation_border_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"navigation_border_transparency",
	$navigation_border_transparency
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$navigation_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row2->addChild(
	"navigation_border_hover_color",
	$navigation_border_hover_color
);

$navigation_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"navigation_border_hover_transparency",
	$navigation_border_hover_transparency
);

$navigation_show_button_shadow = new BorderlandElatedField(
	"yesno",
	"navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'borderland' ),
	esc_html__( "Enabling this options will show button shadow", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"navigation_show_button_shadow",
	$navigation_show_button_shadow
);

$navigation_button_shadow_container = new BorderlandElatedContainer(
	"navigation_button_shadow_container",
	"navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"navigation_button_shadow_container",
	$navigation_button_shadow_container
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Button Shadow", 'borderland' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'borderland' )
);
$navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_shadow_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for  box shadow", 'borderland' )
);
$row1->addChild(
	"navigation_button_shadow_color",
	$navigation_button_shadow_color
);

$row2 = new BorderlandElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$navigation_button_h_shadow = new BorderlandElatedField(
	"textsimple",
	"navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"navigation_button_h_shadow",
	$navigation_button_h_shadow
);

$navigation_button_v_shadow = new BorderlandElatedField(
	"textsimple",
	"navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"navigation_button_v_shadow",
	$navigation_button_v_shadow
);

$navigation_button_blur = new BorderlandElatedField(
	"textsimple",
	"navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'borderland' ),
	""
);
$row2->addChild(
	"navigation_button_blur",
	$navigation_button_blur
);

$navigation_button_spread = new BorderlandElatedField(
	"textsimple",
	"navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'borderland' ),
	""
);
$row2->addChild(
	"navigation_button_spread",
	$navigation_button_spread
);

$navigation_carousels_slider = new BorderlandElatedTitle(
	"navigation_carousels_slider",
	esc_html__( "Carousel Sliders", 'borderland' )
);
$panel9->addChild(
	"navigation_carousels_slider",
	$navigation_carousels_slider
);

$group16 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Size", 'borderland' ),
	esc_html__( "Define navigation button size", 'borderland' )
);
$panel9->addChild(
	"group16",
	$group16
);

$row1 = new BorderlandElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_width = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_button_width",
	$carousel_navigation_button_width
);

$carousel_navigation_button_height = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_button_height",
	$carousel_navigation_button_height
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Position", 'borderland' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'borderland' )
);
$panel9->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_position = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_button_position",
	$carousel_navigation_button_position
);

$group18 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define arrow navigation style", 'borderland' )
);
$panel9->addChild(
	"group18",
	$group18
);
$row1 = new BorderlandElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$carousel_navigation_arrow_size = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'borderland' ),
	esc_html__( "Default value is 14    ", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_arrow_size",
	$carousel_navigation_arrow_size
);

$carousel_navigation_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"carousel_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"carousel_navigation_arrows_type",
	$carousel_navigation_arrows_type
);

$carousel_navigation_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_arrow_color",
	$carousel_navigation_arrow_color
);

$carousel_navigation_arrow_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_arrow_transparency",
	$carousel_navigation_arrow_transparency
);

$row2 = new BorderlandElatedRow( true );
$group18->addChild(
	"row2",
	$row2
);

$carousel_navigation_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_color",
	$carousel_navigation_arrow_hover_color
);

$carousel_navigation_arrow_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_transparency",
	$carousel_navigation_arrow_hover_transparency
);

$group19 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Background", 'borderland' ),
	esc_html__( "Define navigation button background", 'borderland' )
);
$panel9->addChild(
	"group19",
	$group19
);

$row1 = new BorderlandElatedRow();
$group19->addChild(
	"row1",
	$row1
);

$carousel_navigation_background_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_background_color",
	$carousel_navigation_background_color
);

$carousel_navigation_background_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_background_transparency",
	$carousel_navigation_background_transparency
);

$carousel_navigation_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_background_hover_color",
	$carousel_navigation_background_hover_color
);

$carousel_navigation_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_background_hover_transparency",
	$carousel_navigation_background_hover_transparency
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Border", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
);
$panel9->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$carousel_navigation_border_width = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'borderland' ),
	""
);
$row1->addChild(
	"carousel_navigation_border_width",
	$carousel_navigation_border_width
);

$carousel_navigation_border_radius = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_border_radius",
	$carousel_navigation_border_radius
);

$carousel_navigation_border_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_border_color",
	$carousel_navigation_border_color
);

$carousel_navigation_border_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_border_transparency",
	$carousel_navigation_border_transparency
);

$row2 = new BorderlandElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$carousel_navigation_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row2->addChild(
	"carousel_navigation_border_hover_color",
	$carousel_navigation_border_hover_color
);

$carousel_navigation_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"carousel_navigation_border_hover_transparency",
	$carousel_navigation_border_hover_transparency
);

$carousel_navigation_show_button_shadow = new BorderlandElatedField(
	"yesno",
	"carousel_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'borderland' ),
	esc_html__( "Enabling this options will show button shadow", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_carousel_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"carousel_navigation_show_button_shadow",
	$carousel_navigation_show_button_shadow
);

$carousel_navigation_button_shadow_container = new BorderlandElatedContainer(
	"carousel_navigation_button_shadow_container",
	"carousel_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"carousel_navigation_button_shadow_container",
	$carousel_navigation_button_shadow_container
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Button Shadow", 'borderland' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'borderland' )
);
$carousel_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_shadow_color = new BorderlandElatedField(
	"colorsimple",
	"carousel_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for  box shadow", 'borderland' )
);
$row1->addChild(
	"carousel_navigation_button_shadow_color",
	$carousel_navigation_button_shadow_color
);

$row2 = new BorderlandElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$carousel_navigation_button_h_shadow = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_h_shadow",
	$carousel_navigation_button_h_shadow
);

$carousel_navigation_button_v_shadow = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_v_shadow",
	$carousel_navigation_button_v_shadow
);

$carousel_navigation_button_blur = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'borderland' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_blur",
	$carousel_navigation_button_blur
);

$carousel_navigation_button_spread = new BorderlandElatedField(
	"textsimple",
	"carousel_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'borderland' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_spread",
	$carousel_navigation_button_spread
);

$navigation_single_sliders_slider = new BorderlandElatedTitle(
	"navigation_single_sliders_slider",
	esc_html__( "Flex Sliders", 'borderland' )
);
$panel9->addChild(
	"navigation_single_sliders_slider",
	$navigation_single_sliders_slider
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Size", 'borderland' ),
	esc_html__( "Define navigation button size", 'borderland' )
);
$panel9->addChild(
	"group11",
	$group11
);
$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_width = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_button_width",
	$single_slider_navigation_button_width
);

$single_slider_navigation_button_height = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_button_height",
	$single_slider_navigation_button_height
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Position", 'borderland' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'borderland' )
);
$panel9->addChild(
	"group12",
	$group12
);

$row1 = new BorderlandElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_position = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_button_position",
	$single_slider_navigation_button_position
);

$group13 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define arrow navigation style", 'borderland' )
);
$panel9->addChild(
	"group13",
	$group13
);
$row1 = new BorderlandElatedRow();
$group13->addChild(
	"row1",
	$row1
);

$single_slider_navigation_arrow_size = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'borderland' ),
	esc_html__( "Default value is 14    ", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_arrow_size",
	$single_slider_navigation_arrow_size
);

$single_slider_navigation_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"single_slider_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"single_slider_navigation_arrows_type",
	$single_slider_navigation_arrows_type
);

$single_slider_navigation_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_arrow_color",
	$single_slider_navigation_arrow_color
);

$single_slider_navigation_arrow_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_arrow_transparency",
	$single_slider_navigation_arrow_transparency
);

$row2 = new BorderlandElatedRow( true );
$group13->addChild(
	"row2",
	$row2
);

$single_slider_navigation_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_color",
	$single_slider_navigation_arrow_hover_color
);

$single_slider_navigation_arrow_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_transparency",
	$single_slider_navigation_arrow_hover_transparency
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Background", 'borderland' ),
	esc_html__( "Define navigation button background", 'borderland' )
);
$panel9->addChild(
	"group14",
	$group14
);

$row1 = new BorderlandElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$single_slider_navigation_background_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_background_color",
	$single_slider_navigation_background_color
);

$single_slider_navigation_background_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_background_transparency",
	$single_slider_navigation_background_transparency
);

$single_slider_navigation_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_color",
	$single_slider_navigation_background_hover_color
);

$single_slider_navigation_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_transparency",
	$single_slider_navigation_background_hover_transparency
);

$group15 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Border", 'borderland' ),
	esc_html__( "Define border style", 'borderland' )
);
$panel9->addChild(
	"group15",
	$group15
);

$row1 = new BorderlandElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$single_slider_navigation_border_width = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'borderland' ),
	""
);
$row1->addChild(
	"single_slider_navigation_border_width",
	$single_slider_navigation_border_width
);

$single_slider_navigation_border_radius = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_border_radius",
	$single_slider_navigation_border_radius
);

$single_slider_navigation_border_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_border_color",
	$single_slider_navigation_border_color
);

$single_slider_navigation_border_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_border_transparency",
	$single_slider_navigation_border_transparency
);

$row2 = new BorderlandElatedRow( true );
$group15->addChild(
	"row2",
	$row2
);

$single_slider_navigation_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_color",
	$single_slider_navigation_border_hover_color
);

$single_slider_navigation_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'borderland' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_transparency",
	$single_slider_navigation_border_hover_transparency
);

$single_slider_navigation_show_button_shadow = new BorderlandElatedField(
	"yesno",
	"single_slider_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'borderland' ),
	esc_html__( "Enabling this options will show button shadow", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_single_slider_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"single_slider_navigation_show_button_shadow",
	$single_slider_navigation_show_button_shadow
);

$single_slider_navigation_button_shadow_container = new BorderlandElatedContainer(
	"single_slider_navigation_button_shadow_container",
	"single_slider_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"single_slider_navigation_button_shadow_container",
	$single_slider_navigation_button_shadow_container
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Button Shadow", 'borderland' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'borderland' )
);
$single_slider_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_shadow_color = new BorderlandElatedField(
	"colorsimple",
	"single_slider_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose color for  box shadow", 'borderland' )
);
$row1->addChild(
	"single_slider_navigation_button_shadow_color",
	$single_slider_navigation_button_shadow_color
);

$row2 = new BorderlandElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$single_slider_navigation_button_h_shadow = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_h_shadow",
	$single_slider_navigation_button_h_shadow
);

$single_slider_navigation_button_v_shadow = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'borderland' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_v_shadow",
	$single_slider_navigation_button_v_shadow
);

$single_slider_navigation_button_blur = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'borderland' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_blur",
	$single_slider_navigation_button_blur
);

$single_slider_navigation_button_spread = new BorderlandElatedField(
	"textsimple",
	"single_slider_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'borderland' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_spread",
	$single_slider_navigation_button_spread
);

$slider_circle_navigation = new BorderlandElatedTitle(
	"slider_circle_navigation",
	esc_html__( "Bullet Navigation", 'borderland' )
);
$panel9->addChild(
	"slider_circle_navigation",
	$slider_circle_navigation
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Navigation Controls", 'borderland' ),
	esc_html__( "Define navigation controls style", 'borderland' )
);
$panel9->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$navigation_control_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_control_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"navigation_control_color",
	$navigation_control_color
);

$navigation_control_active_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'borderland' )
);
$row1->addChild(
	"navigation_control_active_color",
	$navigation_control_active_color
);

$navigation_control_size = new BorderlandElatedField(
	"textsimple",
	"navigation_control_size",
	"",
	esc_html__( "Size (px)", 'borderland' )
);
$row1->addChild(
	"navigation_control_size",
	$navigation_control_size
);

$navigation_control_active_size = new BorderlandElatedField(
	"textsimple",
	"navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'borderland' )
);
$row1->addChild(
	"navigation_control_active_size",
	$navigation_control_active_size
);

$row2 = new BorderlandElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$navigation_control_border_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row2->addChild(
	"navigation_control_border_color",
	$navigation_control_border_color
);

$navigation_control_active_border_color = new BorderlandElatedField(
	"colorsimple",
	"navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'borderland' )
);
$row2->addChild(
	"navigation_control_active_border_color",
	$navigation_control_active_border_color
);

$navigation_control_border_radius = new BorderlandElatedField(
	"textsimple",
	"navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row2->addChild(
	"navigation_control_border_radius",
	$navigation_control_border_radius
);

$navigation_slider_vertical_section = new BorderlandElatedTitle(
	"navigation_slider_vertical_section",
	esc_html__( "Vertical Sliders (Full Screen Section Template)", 'borderland' )
);
$panel9->addChild(
	"navigation_slider_vertical_section",
	$navigation_slider_vertical_section
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Size", 'borderland' ),
	esc_html__( "Define navigation button size", 'borderland' )
);
$panel9->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$fs_navigation_button_width = new BorderlandElatedField(
	"textsimple",
	"fs_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"fs_navigation_button_width",
	$fs_navigation_button_width
);

$fs_navigation_button_height = new BorderlandElatedField(
	"textsimple",
	"fs_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"fs_navigation_button_height",
	$fs_navigation_button_height
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Icon Arrow Style", 'borderland' ),
	esc_html__( "Define arrow navigation style", 'borderland' )
);
$panel9->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$fs_navigation_arrow_size = new BorderlandElatedField(
	"textsimple",
	"fs_navigation_arrow_size",
	"",
	esc_html__( "Icon Arrow Size (px)", 'borderland' ),
	esc_html__( "Define size for arrow navigation icons", 'borderland' )
);
$row1->addChild(
	"fs_navigation_arrow_size",
	$fs_navigation_arrow_size
);

$fs_navigation_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"fs_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"fs_navigation_arrow_color",
	$fs_navigation_arrow_color
);

$fs_navigation_arrow_hover_color = new BorderlandElatedField(
	"colorsimple",
	"fs_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row1->addChild(
	"fs_navigation_arrow_hover_color",
	$fs_navigation_arrow_hover_color
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Navigation Button Background", 'borderland' ),
	esc_html__( "Define navigation button background", 'borderland' )
);
$panel9->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$fs_navigation_background_color = new BorderlandElatedField(
	"colorsimple",
	"fs_navigation_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"fs_navigation_background_color",
	$fs_navigation_background_color
);

$fs_navigation_background_transparency = new BorderlandElatedField(
	"textsimple",
	"fs_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"fs_navigation_background_transparency",
	$fs_navigation_background_transparency
);

$fs_navigation_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"fs_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"fs_navigation_background_hover_color",
	$fs_navigation_background_hover_color
);

$fs_navigation_background_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"fs_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'borderland' )
);
$row1->addChild(
	"fs_navigation_background_hover_transparency",
	$fs_navigation_background_hover_transparency
);

//Social Icon

$panel14 = new BorderlandElatedPanel(
	esc_html__( "Social Icon", 'borderland' ),
	"social_icon_panel"
);
$elementsPage->addChild(
	"panel14",
	$panel14
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Normal Icons", 'borderland' ),
	esc_html__( "Define Normal Social Icons style", 'borderland' )
);
$panel14->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$social_color = new BorderlandElatedField(
	"colorsimple",
	"social_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"social_color",
	$social_color
);

$social_hover_color = new BorderlandElatedField(
	"colorsimple",
	"social_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"social_hover_color",
	$social_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Social Circle/Square Icon", 'borderland' ),
	esc_html__( "Define Social circle/square Icons style", 'borderland' )
);
$panel14->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$social_icon_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"social_icon_color",
	$social_icon_color
);

$social_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"social_icon_hover_color",
	$social_icon_hover_color
);

$social_icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'borderland' )
);
$row1->addChild(
	"social_icon_background_color",
	$social_icon_background_color
);

$social_icon_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'borderland' )
);
$row1->addChild(
	"social_icon_hover_background_color",
	$social_icon_hover_background_color
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$social_icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'borderland' )
);
$row2->addChild(
	"social_icon_border_color",
	$social_icon_border_color
);

$social_icon_hover_border_color = new BorderlandElatedField(
	"colorsimple",
	"social_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'borderland' )
);
$row2->addChild(
	"social_icon_hover_border_color",
	$social_icon_hover_border_color
);

$social_icon_box_shadows = new BorderlandElatedField(
	'yesno',
	'social_icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'borderland' ),
	esc_html__( 'Enabling this option will show icon shadow', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_social_icon_box_shadows_container'
	)
);
$panel14->addChild(
	'social_icon_box_shadows',
	$social_icon_box_shadows
);

$social_icon_box_shadows_container = new BorderlandElatedContainer(
	'social_icon_box_shadows_container',
	'social_icon_box_shadows',
	'no'
);
$panel14->addChild(
	'social_icon_box_shadows_container',
	$social_icon_box_shadows_container
);

$group3 = new BorderlandElatedGroup(
	esc_html__( 'Icon Shadows', 'borderland' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'borderland' )
);
$social_icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new BorderlandElatedRow();
$group3->addChild(
	'row3',
	$row3
);

$social_icon_box_shadow_horizontal_shadow = new BorderlandElatedField(
	'textsimple',
	'social_icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'borderland' )
);
$row3->addChild(
	'social_icon_box_shadow_horizontal_shadow',
	$social_icon_box_shadow_horizontal_shadow
);

$social_icon_box_shadow_vertical_shadow = new BorderlandElatedField(
	'textsimple',
	'social_icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'borderland' )
);
$row3->addChild(
	'social_icon_box_shadow_vertical_shadow',
	$social_icon_box_shadow_vertical_shadow
);

$social_icon_box_shadow_blur_distance = new BorderlandElatedField(
	'textsimple',
	'social_icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'borderland' )
);
$row3->addChild(
	'social_icon_box_shadow_blur_distance',
	$social_icon_box_shadow_blur_distance
);

$social_icon_box_shadow_shadow_size = new BorderlandElatedField(
	'textsimple',
	'social_icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'borderland' )
);
$row3->addChild(
	'social_icon_box_shadow_shadow_size',
	$social_icon_box_shadow_shadow_size
);

$row4 = new BorderlandElatedRow( true );
$group3->addChild(
	'row4',
	$row4
);

$social_icon_box_shadow_shadow_color = new BorderlandElatedField(
	'colorsimple',
	'social_icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'borderland' )
);
$row4->addChild(
	'social_icon_box_shadow_shadow_color',
	$social_icon_box_shadow_shadow_color
);

// Social Share List Icon

$panel26 = new BorderlandElatedPanel(
	esc_html__( "Social Share List", 'borderland' ),
	"social_share_list_icon_panel"
);
$elementsPage->addChild(
	"panel26",
	$panel26
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Icons", 'borderland' ),
	esc_html__( "Define Social Icons style for Social Share List", 'borderland' )
);
$panel26->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$social_share_list_icon_size = new BorderlandElatedField(
	"textsimple",
	"social_share_list_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row1->addChild(
	"social_share_list_icon_size",
	$social_share_list_icon_size
);

$social_share_list_icon_margin_right = new BorderlandElatedField(
	"textsimple",
	"social_share_list_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'borderland' )
);
$row1->addChild(
	"social_share_list_icon_margin_right",
	$social_share_list_icon_margin_right
);

$social_share_list_icon_color = new BorderlandElatedField(
	"colorsimple",
	"social_share_list_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"social_share_list_icon_color",
	$social_share_list_icon_color
);

$social_share_list_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"social_share_list_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"social_share_list_icon_hover_color",
	$social_share_list_icon_hover_color
);

$social_share_list_icons_type = new BorderlandElatedField(
	'select',
	'social_share_list_icons_type',
	'circle',
	esc_html__( 'Icons Type', 'borderland' ),
	esc_html__( 'Choose type of social share list icons', 'borderland' ),
	array(
		'circle' => esc_html__( 'Circle', 'borderland' ),
		'normal' => esc_html__( 'Normal', 'borderland' )
	)
);
$panel26->addChild(
	'social_share_list_icons_type',
	$social_share_list_icons_type
);

//Tabs Panel

$panel15 = new BorderlandElatedPanel(
	esc_html__( "Tabs", 'borderland' ),
	"tabs_panel"
);
$elementsPage->addChild(
	"panel15",
	$panel15
);

$tabs_navigation_subtitle = new BorderlandElatedTitle(
	"tabs_navigation_subtitle",
	esc_html__( "Tabs Navigation (with Text)", 'borderland' )
);
$panel15->addChild(
	"tabs_navigation_subtitle",
	$tabs_navigation_subtitle
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Tabs Navigation Text Style", 'borderland' ),
	esc_html__( "Define Tabs text style", 'borderland' )
);
$panel15->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$tab_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"tab_text_color",
	$tab_text_color
);

$tab_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_active_text_color",
	"",
	esc_html__( "Text Active Color", 'borderland' )
);
$row1->addChild(
	"tab_active_text_color",
	$tab_active_text_color
);

$tab_text_size = new BorderlandElatedField(
	"textsimple",
	"tab_text_size",
	"",
	esc_html__( "Text Size (px)", 'borderland' )
);
$row1->addChild(
	"tab_text_size",
	$tab_text_size
);

$tab_nav_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"tab_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"tab_nav_font_family",
	$tab_nav_font_family
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tab_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"tab_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"tab_text_transform",
	$tab_text_transform
);

$tab_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"tab_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"tab_letter_spacing",
	$tab_letter_spacing
);

$tab_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"tab_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"tab_font_weight",
	$tab_font_weight
);

$tab_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"tab_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"tab_font_style",
	$tab_font_style
);

$tabs_navigation_icon_subtitle = new BorderlandElatedTitle(
	"tabs_navigation_icon_subtitle",
	esc_html__( "Tabs Navigation (with Icon)", 'borderland' )
);
$panel15->addChild(
	"tabs_navigation_icon_subtitle",
	$tabs_navigation_icon_subtitle
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Tabs Navigation Icon Style", 'borderland' ),
	esc_html__( "Define icon style", 'borderland' )
);
$panel15->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$tabs_icon_size = new BorderlandElatedField(
	"textsimple",
	"tabs_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row1->addChild(
	"tabs_icon_size",
	$tabs_icon_size
);

$tab_icon_color = new BorderlandElatedField(
	"colorsimple",
	"tab_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"tab_icon_color",
	$tab_icon_color
);

$tab_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_icon_hover_color",
	$tab_icon_hover_color
);

$tabs_navigation_type_with_lines_subtitle = new BorderlandElatedTitle(
	"tabs_navigation_type_with_lines_subtitle",
	esc_html__( "Tabs Navigation (With Lines)", 'borderland' )
);
$panel15->addChild(
	"tabs_navigation_type_with_lines_subtitle",
	$tabs_navigation_type_with_lines_subtitle
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Tabs Navigation Style", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow( true );
$group3->addChild(
	"row1",
	$row1
);

$tabs_icon_width = new BorderlandElatedField(
	"textsimple",
	"tabs_icon_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"tabs_icon_width",
	$tabs_icon_width
);

$tabs_icon_height = new BorderlandElatedField(
	"textsimple",
	"tabs_icon_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"tabs_icon_height",
	$tabs_icon_height
);

$tabs_icon_shape_border_width = new BorderlandElatedField(
	"textsimple",
	"tabs_icon_shape_border_width",
	"",
	esc_html__( "Spike Length (px)", 'borderland' )
);
$row1->addChild(
	"tabs_icon_shape_border_width",
	$tabs_icon_shape_border_width
);

$tabs_default_subtitle = new BorderlandElatedTitle(
	"tabs_default_subtitle",
	esc_html__( "Default Tabs Style", 'borderland' )
);
$panel15->addChild(
	"tabs_default_subtitle",
	$tabs_default_subtitle
);

$tabs_default_show_separator = new BorderlandElatedField(
	"yesno",
	"tabs_default_show_separator",
	"no",
	esc_html__( "Show Right Separator", 'borderland' ),
	esc_html__( "Enabling this option will show right separator", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_default_tabs_right_separator_container"
	)
);
$panel15->addChild(
	"tabs_default_show_separator",
	$tabs_default_show_separator
);

$default_tabs_right_separator_container = new BorderlandElatedContainer(
	"default_tabs_right_separator_container",
	"tabs_default_show_separator",
	"no"
);
$panel15->addChild(
	"default_tabs_right_separator_container",
	$default_tabs_right_separator_container
);

$tabs_default_right_separator_color = new BorderlandElatedField(
	"color",
	"tabs_default_right_separator_color",
	"",
	esc_html__( "Separator Color", 'borderland' ),
	esc_html__( "Choose right separator color", 'borderland' )
);
$default_tabs_right_separator_container->addChild(
	"tabs_default_right_separator_color",
	$tabs_default_right_separator_color
);

$group_default_tabs = new BorderlandElatedGroup(
	esc_html__( "Tabs Navigation Style", 'borderland' ),
	esc_html__( "Define tab navigation style", 'borderland' )
);
$panel15->addChild(
	"group_default_tabs",
	$group_default_tabs
);

$row1 = new BorderlandElatedRow( true );
$group_default_tabs->addChild(
	"row1",
	$row1
);

$tabs_default_padding_left = new BorderlandElatedField(
	"textsimple",
	"tabs_default_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"tabs_default_padding_left",
	$tabs_default_padding_left
);

$tabs_default_padding_right = new BorderlandElatedField(
	"textsimple",
	"tabs_default_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"tabs_default_padding_right",
	$tabs_default_padding_right
);

$row2 = new BorderlandElatedRow( true );
$group_default_tabs->addChild(
	"row2",
	$row2
);

$tabs_default_text_color = new BorderlandElatedField(
	"colorsimple",
	"tabs_default_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"tabs_default_text_color",
	$tabs_default_text_color
);

$tabs_default_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tabs_default_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row2->addChild(
	"tabs_default_active_text_color",
	$tabs_default_active_text_color
);

$tabs_navigation_boxed_subtitle = new BorderlandElatedTitle(
	"tabs_navigation_boxed_subtitle",
	esc_html__( "Tabs Navigation (With Borders)", 'borderland' )
);
$panel15->addChild(
	"tabs_navigation_boxed_subtitle",
	$tabs_navigation_boxed_subtitle
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Tabs Navigation Size", 'borderland' ),
	esc_html__( "Define tab size style", 'borderland' )
);
$panel15->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow( true );
$group4->addChild(
	"row1",
	$row1
);

$tabs_with_borders_height = new BorderlandElatedField(
	"textsimple",
	"tabs_with_borders_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"tabs_with_borders_height",
	$tabs_with_borders_height
);

$tabs_with_borders_padding_left = new BorderlandElatedField(
	"textsimple",
	"tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"tabs_with_borders_padding_left",
	$tabs_with_borders_padding_left
);

$tabs_with_borders_padding_right = new BorderlandElatedField(
	"textsimple",
	"tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"tabs_with_borders_padding_right",
	$tabs_with_borders_padding_right
);

$horizontal_tabs_border_arround_element_no_space = new BorderlandElatedTitle(
	"horizontal_tabs_border_arround_element_no_space",
	esc_html__( "Horizontal Tabs - Border Around Tabs (Without Space)", 'borderland' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_element_no_space",
	$horizontal_tabs_border_arround_element_no_space
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_background_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color",
	$tab_bae_hor_no_marg_background_color
);

$tab_bae_hor_no_marg_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color_hover",
	"",
	esc_html__( "Background Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color_hover",
	$tab_bae_hor_no_marg_background_color_hover
);

$tab_bae_hor_no_marg_border_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_color",
	$tab_bae_hor_no_marg_border_color
);

$tab_bae_hor_no_marg_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_hover_color",
	$tab_bae_hor_no_marg_border_hover_color
);
$group6 = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text styles", 'borderland' )
);
$panel15->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_text_color",
	$tab_bae_hor_no_marg_text_color
);

$tab_bae_hor_no_marg_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_no_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_active_text_color",
	$tab_bae_hor_no_marg_active_text_color
);

$hor_tabs_border_arround_element_with_space = new BorderlandElatedTitle(
	"hor_tabs_border_arround_element_with_space",
	esc_html__( "Horizontal Tabs -  Border Around Tabs (With Space)", 'borderland' )
);
$panel15->addChild(
	"hor_tabs_border_arround_element_with_space",
	$hor_tabs_border_arround_element_with_space
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow( true );
$group7->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_background_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_color",
	$tab_bae_hor_marg_background_color
);

$tab_bae_hor_marg_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_hover_color",
	$tab_bae_hor_marg_background_hover_color
);

$tab_bae_hor_marg_border_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_color",
	$tab_bae_hor_marg_border_color
);

$tab_bae_hor_marg_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_hover_color",
	$tab_bae_hor_marg_border_hover_color
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text styles", 'borderland' )
);
$panel15->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow( true );
$group8->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_text_color",
	$tab_bae_hor_marg_text_color
);

$tab_bae_hor_marg_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bae_hor_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_bae_hor_marg_active_text_color",
	$tab_bae_hor_marg_active_text_color
);

$horizontal_tabs_border_arround_active_tab = new BorderlandElatedTitle(
	"horizontal_tabs_border_arround_active_tab",
	esc_html__( "Horizontal Tabs -  Border Around Active Tab", 'borderland' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_active_tab",
	$horizontal_tabs_border_arround_active_tab
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow( true );
$group9->addChild(
	"row1",
	$row1
);

$tab_bord_active_background_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_background_color",
	"",
	esc_html__( "Background Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_background_color",
	$tab_bord_active_background_color
);

$tab_bord_active_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_background_color_hover",
	$tab_bord_active_background_color_hover
);

$tab_bord_active_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_border_hover_color",
	$tab_bord_active_border_hover_color
);

$tab_bord_active_active_tab_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_active_tab_border_hover_color",
	"",
	esc_html__( "Border Active Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_active_tab_border_hover_color",
	$tab_bord_active_active_tab_border_hover_color
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel15->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow( true );
$group10->addChild(
	"row1",
	$row1
);

$tab_bord_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_text_color",
	$tab_bord_active_text_color
);

$tab_bord_active_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"tab_bord_active_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"tab_bord_active_active_text_color",
	$tab_bord_active_active_text_color
);

$vertical_tabs_border_arround_element = new BorderlandElatedTitle(
	"vertical_tabs_border_arround_element",
	esc_html__( "Vertical Tabs -  Border Around Tabs(Without Space)", 'borderland' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_element",
	$vertical_tabs_border_arround_element
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group11",
	$group11
);

$row1 = new BorderlandElatedRow( true );
$group11->addChild(
	"row1",
	$row1
);

$ver_tab_bae_background_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_background_color",
	$ver_tab_bae_background_color
);

$ver_tab_bae_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_background_color_hover",
	$ver_tab_bae_background_color_hover
);

$ver_tab_bae_border_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_border_color",
	$ver_tab_bae_border_color
);

$ver_tab_bae_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_border_color_hover",
	$ver_tab_bae_border_color_hover
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel15->addChild(
	"group12",
	$group12
);

$row1 = new BorderlandElatedRow( true );
$group12->addChild(
	"row1",
	$row1
);

$ver_tab_bae_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_text_color",
	$ver_tab_bae_text_color
);

$ver_tab_bae_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_active_text_color",
	$ver_tab_bae_active_text_color
);

$ver_tab_bae_with_space = new BorderlandElatedTitle(
	"ver_tab_bae_with_space",
	esc_html__( "Vertical Tabs -  Border Around Tabs(With Space)", 'borderland' )
);
$panel15->addChild(
	"ver_tab_bae_with_space",
	$ver_tab_bae_with_space
);

$group_vert_tabs_with_space = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group_vert_tabs_with_space",
	$group_vert_tabs_with_space
);

$row1 = new BorderlandElatedRow( true );
$group_vert_tabs_with_space->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_background_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color",
	$ver_tab_bae_with_space_background_color
);

$ver_tab_bae_with_space_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color_hover",
	$ver_tab_bae_with_space_background_color_hover
);

$ver_tab_bae_with_space_border_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color",
	$ver_tab_bae_with_space_border_color
);

$ver_tab_bae_with_space_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color_hover",
	$ver_tab_bae_with_space_border_color_hover
);

$group_vert_tabs_with_space_text = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel15->addChild(
	"group_vert_tabs_with_space_text",
	$group_vert_tabs_with_space_text
);

$row1 = new BorderlandElatedRow( true );
$group_vert_tabs_with_space_text->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_text_color",
	$ver_tab_bae_with_space_text_color
);

$ver_tab_bae_with_space_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bae_with_space_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bae_with_space_active_text_color",
	$ver_tab_bae_with_space_active_text_color
);

$vertical_tabs_border_arround_active_tab = new BorderlandElatedTitle(
	"vertical_tabs_border_arround_active_tab",
	esc_html__( "Vertical Tabs -  Border Around Active Tab", 'borderland' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_active_tab",
	$vertical_tabs_border_arround_active_tab
);

$group13 = new BorderlandElatedGroup(
	esc_html__( "Tab Styles", 'borderland' ),
	esc_html__( "Define tab style", 'borderland' )
);
$panel15->addChild(
	"group13",
	$group13
);

$row1 = new BorderlandElatedRow( true );
$group13->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_background_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_background_color",
	"",
	esc_html__( "Background Active Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color",
	$ver_tab_bord_act_background_color
);

$ver_tab_bord_act_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_background_color_hover",
	"",
	esc_html__( "Background HoverColor", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color_hover",
	$ver_tab_bord_act_background_color_hover
);

$ver_tab_bord_act_border_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_border_color",
	"",
	esc_html__( "Border Active Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color",
	$ver_tab_bord_act_border_color
);

$ver_tab_bord_act_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color_hover",
	$ver_tab_bord_act_border_color_hover
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Text Styles", 'borderland' ),
	esc_html__( "Define text style", 'borderland' )
);
$panel15->addChild(
	"group14",
	$group14
);

$row1 = new BorderlandElatedRow( true );
$group14->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_text_color",
	$ver_tab_bord_act_text_color
);

$ver_tab_bord_act_active_text_color = new BorderlandElatedField(
	"colorsimple",
	"ver_tab_bord_act_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'borderland' )
);
$row1->addChild(
	"ver_tab_bord_act_active_text_color",
	$ver_tab_bord_act_active_text_color
);

$tabs_content_horizontal_subtitle = new BorderlandElatedTitle(
	"tabs_content_horizontal_subtitle",
	esc_html__( "Horizontal Tabs Content", 'borderland' )
);
$panel15->addChild(
	"tabs_content_horizontal_subtitle",
	$tabs_content_horizontal_subtitle
);

$group15 = new BorderlandElatedGroup(
	esc_html__( "Tabs Content Styles", 'borderland' ),
	esc_html__( "Define tab content style", 'borderland' )
);
$panel15->addChild(
	"group15",
	$group15
);

$row1 = new BorderlandElatedRow( true );
$group15->addChild(
	"row1",
	$row1
);

$tabs_content_text_size = new BorderlandElatedField(
	"textsimple",
	"tabs_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'borderland' ),
	esc_html__( "Enter size for text in tab containers", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_content_text_size",
	$tabs_content_text_size
);

$tabs_content_background_color = new BorderlandElatedField(
	"colorsimple",
	"tabs_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'borderland' ),
	esc_html__( "Choose color for tab background", 'borderland' )
);
$row1->addChild(
	"tabs_content_background_color",
	$tabs_content_background_color
);

$group16 = new BorderlandElatedGroup(
	esc_html__( "Content Padding", 'borderland' ),
	esc_html__( "Define tab content padding", 'borderland' )
);
$panel15->addChild(
	"group16",
	$group16
);

$row1 = new BorderlandElatedRow( true );
$group16->addChild(
	"row1",
	$row1
);

$tabs_content_padding_left = new BorderlandElatedField(
	"textsimple",
	"tabs_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"tabs_content_padding_left",
	$tabs_content_padding_left
);

$tabs_content_padding_right = new BorderlandElatedField(
	"textsimple",
	"tabs_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"tabs_content_padding_right",
	$tabs_content_padding_right
);

$tabs_content_padding_top = new BorderlandElatedField(
	"textsimple",
	"tabs_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'borderland' )
);
$row1->addChild(
	"tabs_content_padding_top",
	$tabs_content_padding_top
);

$tabs_content_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"tabs_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'borderland' )
);
$row1->addChild(
	"tabs_content_padding_bottom",
	$tabs_content_padding_bottom
);

$tabs_vertical_content_subtitle = new BorderlandElatedTitle(
	"tabs_vertical_content_subtitle",
	esc_html__( "Vertical Tabs Content", 'borderland' )
);
$panel15->addChild(
	"tabs_vertical_content_subtitle",
	$tabs_vertical_content_subtitle
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Tabs Content Styles", 'borderland' ),
	esc_html__( "Define tab content style", 'borderland' )
);
$panel15->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow( true );
$group17->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_text_size = new BorderlandElatedField(
	"textsimple",
	"tabs_vertical_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'borderland' ),
	esc_html__( "Enter size for text in tab containers", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_vertical_content_text_size",
	$tabs_vertical_content_text_size
);

$tabs_vertical_content_background_color = new BorderlandElatedField(
	"colorsimple",
	"tabs_vertical_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'borderland' ),
	esc_html__( "Choose color for tab background", 'borderland' )
);
$row1->addChild(
	"tabs_vertical_content_background_color",
	$tabs_vertical_content_background_color
);

$group18 = new BorderlandElatedGroup(
	esc_html__( "Content Padding", 'borderland' ),
	esc_html__( "Define tab content padding", 'borderland' )
);
$panel15->addChild(
	"group18",
	$group18
);

$row1 = new BorderlandElatedRow( true );
$group18->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_padding_left = new BorderlandElatedField(
	"textsimple",
	"tabs_vertical_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"tabs_vertical_content_padding_left",
	$tabs_vertical_content_padding_left
);

$tabs_vertical_content_padding_right = new BorderlandElatedField(
	"textsimple",
	"tabs_vertical_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"tabs_vertical_content_padding_right",
	$tabs_vertical_content_padding_right
);

$tabs_vertical_content_padding_top = new BorderlandElatedField(
	"textsimple",
	"tabs_vertical_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'borderland' )
);
$row1->addChild(
	"tabs_vertical_content_padding_top",
	$tabs_vertical_content_padding_top
);

$tabs_vertical_content_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"tabs_vertical_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'borderland' )
);
$row1->addChild(
	"tabs_vertical_content_padding_bottom",
	$tabs_vertical_content_padding_bottom
);

//Tags

$panel18 = new BorderlandElatedPanel(
	esc_html__( "Tags", 'borderland' ),
	"tags_panel"
);
$elementsPage->addChild(
	"panel18",
	$panel18
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Tags Style", 'borderland' ),
	esc_html__( "Define Tags style", 'borderland' )
);
$panel18->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$tags_color = new BorderlandElatedField(
	"colorsimple",
	"tags_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"tags_color",
	$tags_color
);

$tags_font_size = new BorderlandElatedField(
	"textsimple",
	"tags_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"tags_font_size",
	$tags_font_size
);

$tags_line_height = new BorderlandElatedField(
	"textsimple",
	"tags_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"tags_line_height",
	$tags_line_height
);

$tags_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"tags_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"tags_text_transform",
	$tags_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tags_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"tags_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"tags_font_family",
	$tags_font_family
);

$tags_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"tags_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"tags_font_style",
	$tags_font_style
);

$tags_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"tags_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"tags_font_weight",
	$tags_font_weight
);

$tags_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"tags_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"tags_letter_spacing",
	$tags_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$tags_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tags_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"tags_hover_color",
	$tags_hover_color
);

$tags_background_color = new BorderlandElatedField(
	"colorsimple",
	"tags_background_color",
	"",
	esc_html__( "Background color", 'borderland' )
);
$row3->addChild(
	"tags_background_color",
	$tags_background_color
);

$tags_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tags_background_hover_color",
	"",
	esc_html__( "Hover background color", 'borderland' )
);
$row3->addChild(
	"tags_background_hover_color",
	$tags_background_hover_color
);

$tags_border_radius = new BorderlandElatedField(
	"textsimple",
	"tags_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row3->addChild(
	"tags_border_radius",
	$tags_border_radius
);

$row4 = new BorderlandElatedRow( true );
$group1->addChild(
	"row4",
	$row4
);

$tags_border_color = new BorderlandElatedField(
	"colorsimple",
	"tags_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row4->addChild(
	"tags_border_color",
	$tags_border_color
);

$tags_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"tags_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row4->addChild(
	"tags_border_hover_color",
	$tags_border_hover_color
);

$tags_border_width = new BorderlandElatedField(
	"textsimple",
	"tags_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row4->addChild(
	"tags_border_width",
	$tags_border_width
);

//Team

$panel20 = new BorderlandElatedPanel(
	esc_html__( "Team", 'borderland' ),
	"team_panel"
);
$elementsPage->addChild(
	"panel20",
	$panel20
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Team Image Hover Color Overlay", 'borderland' ),
	esc_html__( "Choose team image hover color overlay", 'borderland' )
);
$panel20->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$team_hover_color = new BorderlandElatedField(
	"colorsimple",
	"team_hover_color",
	"",
	""
);
$row1->addChild(
	"team_hover_color",
	$team_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Team Member Name", 'borderland' ),
	esc_html__( "Define styles for team member name", 'borderland' )
);
$panel20->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$team_color = new BorderlandElatedField(
	"colorsimple",
	"team_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"team_color",
	$team_color
);

$team_font_size = new BorderlandElatedField(
	"textsimple",
	"team_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"team_font_size",
	$team_font_size
);

$team_line_height = new BorderlandElatedField(
	"textsimple",
	"team_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"team_line_height",
	$team_line_height
);

$team_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"team_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_text_transform",
	$team_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$team_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"team_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"team_font_family",
	$team_font_family
);

$team_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"team_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_font_style",
	$team_font_style
);

$team_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"team_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_font_weight",
	$team_font_weight
);

$team_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"team_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"team_letter_spacing",
	$team_letter_spacing
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Team Member Position", 'borderland' ),
	esc_html__( "Define styles for team member position", 'borderland' )
);
$panel20->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$team_position_color = new BorderlandElatedField(
	"colorsimple",
	"team_position_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"team_position_color",
	$team_position_color
);

$team_position_font_size = new BorderlandElatedField(
	"textsimple",
	"team_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"team_position_font_size",
	$team_position_font_size
);

$team_position_line_height = new BorderlandElatedField(
	"textsimple",
	"team_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"team_position_line_height",
	$team_position_line_height
);

$team_position_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"team_position_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_position_text_transform",
	$team_position_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$team_position_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"team_position_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"team_position_font_family",
	$team_position_font_family
);

$team_position_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"team_position_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_position_font_style",
	$team_position_font_style
);

$team_position_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"team_position_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_position_font_weight",
	$team_position_font_weight
);

$team_position_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"team_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"team_position_letter_spacing",
	$team_position_letter_spacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Team Member Description", 'borderland' ),
	esc_html__( "Define styles for team member description", 'borderland' )
);
$panel20->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$team_description_color = new BorderlandElatedField(
	"colorsimple",
	"team_description_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"team_description_color",
	$team_description_color
);

$team_description_font_size = new BorderlandElatedField(
	"textsimple",
	"team_description_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"team_description_font_size",
	$team_description_font_size
);

$team_description_line_height = new BorderlandElatedField(
	"textsimple",
	"team_description_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"team_description_line_height",
	$team_description_line_height
);

$team_description_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"team_description_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_description_text_transform",
	$team_description_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$team_description_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"team_description_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"team_description_font_family",
	$team_description_font_family
);

$team_description_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"team_description_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_description_font_style",
	$team_description_font_style
);

$team_description_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"team_description_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_description_font_weight",
	$team_description_font_weight
);

$team_description_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"team_description_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"team_description_letter_spacing",
	$team_description_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Social Icons", 'borderland' ),
	esc_html__( "Define Social Icons style", 'borderland' )
);
$panel20->addChild(
	"group3",
	$group3
);
$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$team_icon_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"team_icon_color",
	$team_icon_color
);

$team_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"team_icon_hover_color",
	$team_icon_hover_color
);

$team_icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'borderland' )
);
$row1->addChild(
	"team_icon_background_color",
	$team_icon_background_color
);

$team_icon_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'borderland' )
);
$row1->addChild(
	"team_icon_hover_background_color",
	$team_icon_hover_background_color
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$team_icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'borderland' )
);
$row2->addChild(
	"team_icon_border_color",
	$team_icon_border_color
);

$team_icon_hover_border_color = new BorderlandElatedField(
	"colorsimple",
	"team_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'borderland' )
);
$row2->addChild(
	"team_icon_hover_border_color",
	$team_icon_hover_border_color
);

$team_icon_size = new BorderlandElatedField(
	"textsimple",
	"team_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row2->addChild(
	"team_icon_size",
	$team_icon_size
);

$team_icon_shape_size = new BorderlandElatedField(
	"textsimple",
	"team_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'borderland' )
);
$row2->addChild(
	"team_icon_shape_size",
	$team_icon_shape_size
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$team_icon_space = new BorderlandElatedField(
	"textsimple",
	"team_icon_space",
	"",
	esc_html__( "Space between Icons (px)", 'borderland' )
);
$row3->addChild(
	"team_icon_space",
	$team_icon_space
);

$main_info_below_image_subtitle = new BorderlandElatedTitle(
	"main_info_below_image_subtitle",
	esc_html__( "Main Info Below Image - Type", 'borderland' )
);
$panel20->addChild(
	"main_info_below_image_subtitle",
	$main_info_below_image_subtitle
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Share Icon", 'borderland' ),
	esc_html__( "Define Share Icon style. This applies only if Between Image and Info is selected for Social Style", 'borderland' )
);
$panel20->addChild(
	"group4",
	$group4
);
$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$team_share_icon_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"team_share_icon_color",
	$team_share_icon_color
);

$team_share_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"team_share_icon_hover_color",
	$team_share_icon_hover_color
);

$team_share_icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'borderland' )
);
$row1->addChild(
	"team_share_icon_background_color",
	$team_share_icon_background_color
);

$team_share_icon_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'borderland' )
);
$row1->addChild(
	"team_share_icon_hover_background_color",
	$team_share_icon_hover_background_color
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$team_share_icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'borderland' )
);
$row2->addChild(
	"team_share_icon_border_color",
	$team_share_icon_border_color
);

$team_share_icon_hover_border_color = new BorderlandElatedField(
	"colorsimple",
	"team_share_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'borderland' )
);
$row2->addChild(
	"team_share_icon_hover_border_color",
	$team_share_icon_hover_border_color
);

$team_share_icon_size = new BorderlandElatedField(
	"textsimple",
	"team_share_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row2->addChild(
	"team_share_icon_size",
	$team_share_icon_size
);

$team_share_icon_shape_size = new BorderlandElatedField(
	"textsimple",
	"team_share_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'borderland' )
);
$row2->addChild(
	"team_share_icon_shape_size",
	$team_share_icon_shape_size
);

//Testimonials

$panel16 = new BorderlandElatedPanel(
	esc_html__( "Testimonials", 'borderland' ),
	"testimonials_panel"
);
$elementsPage->addChild(
	"panel16",
	$panel16
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Title", 'borderland' ),
	esc_html__( "Define Testimonials title style", 'borderland' )
);
$panel16->addChild(
	"group4",
	$group4
);
$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$testimonials_title_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"testimonials_title_color",
	$testimonials_title_color
);

$testimonials_title_font_size = new BorderlandElatedField(
	"textsimple",
	"testimonials_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_title_font_size",
	$testimonials_title_font_size
);

$testimonials_title_line_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_title_line_height",
	$testimonials_title_line_height
);

$testimonials_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_title_text_transform",
	$testimonials_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$testimonials_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"testimonials_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"testimonials_title_font_family",
	$testimonials_title_font_family
);

$testimonials_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_title_font_style",
	$testimonials_title_font_style
);

$testimonials_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_title_font_weight",
	$testimonials_title_font_weight
);

$testimonials_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"testimonials_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"testimonials_title_letter_spacing",
	$testimonials_title_letter_spacing
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Text", 'borderland' ),
	esc_html__( "Define Testimonials text style", 'borderland' )
);
$panel16->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$testimonials_text_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"testimonials_text_color",
	$testimonials_text_color
);

$testimonials_text_font_size = new BorderlandElatedField(
	"textsimple",
	"testimonials_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_text_font_size",
	$testimonials_text_font_size
);

$testimonials_text_line_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_text_line_height",
	$testimonials_text_line_height
);

$testimonials_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_text_text_transform",
	$testimonials_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$testimonials_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"testimonials_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"testimonials_text_font_family",
	$testimonials_text_font_family
);

$testimonials_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_text_font_style",
	$testimonials_text_font_style
);

$testimonials_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_text_font_weight",
	$testimonials_text_font_weight
);

$testimonials_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"testimonials_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"testimonials_text_letter_spacing",
	$testimonials_text_letter_spacing
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Author Style", 'borderland' ),
	esc_html__( "Define Testimonials author style", 'borderland' )
);
$panel16->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$testimonials_author_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_author_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"testimonials_author_color",
	$testimonials_author_color
);

$testimonials_author_font_size = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_author_font_size",
	$testimonials_author_font_size
);

$testimonials_author_line_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_author_line_height",
	$testimonials_author_line_height
);

$testimonials_author_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_author_text_transform",
	$testimonials_author_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$testimonials_author_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"testimonials_author_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"testimonials_author_font_family",
	$testimonials_author_font_family
);

$testimonials_author_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_author_font_style",
	$testimonials_author_font_style
);

$testimonials_author_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_author_font_weight",
	$testimonials_author_font_weight
);

$testimonials_author_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"testimonials_author_letter_spacing",
	$testimonials_author_letter_spacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Job Position Style", 'borderland' ),
	esc_html__( "Define testimonials job position author style", 'borderland' )
);
$panel16->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$testimonials_author_job_position_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_author_job_position_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"testimonials_author_job_position_color",
	$testimonials_author_job_position_color
);

$testimonials_author_job_position_font_size = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_job_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_author_job_position_font_size",
	$testimonials_author_job_position_font_size
);

$testimonials_author_job_position_line_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_job_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_author_job_position_line_height",
	$testimonials_author_job_position_line_height
);

$testimonials_author_job_position_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_author_job_position_text_transform",
	$testimonials_author_job_position_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$testimonials_author_job_position_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"testimonials_author_job_position_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"testimonials_author_job_position_font_family",
	$testimonials_author_job_position_font_family
);

$testimonials_author_job_position_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_author_job_position_font_style",
	$testimonials_author_job_position_font_style
);

$testimonials_author_job_position_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_author_job_position_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_author_job_position_font_weight",
	$testimonials_author_job_position_font_weight
);

$testimonials_author_job_position_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"testimonials_author_job_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"testimonials_author_job_position_letter_spacing",
	$testimonials_author_job_position_letter_spacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Navigation", 'borderland' ),
	esc_html__( "Define Testimonials navigation style", 'borderland' )
);
$panel16->addChild(
	"group3",
	$group3
);
$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$testimonials_navigation_width = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_navigation_width",
	$testimonials_navigation_width
);

$testimonials_navigation_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_navigation_height",
	$testimonials_navigation_height
);

$testimonials_navigation_active_width = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_active_width",
	"",
	esc_html__( "Active Width (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_navigation_active_width",
	$testimonials_navigation_active_width
);

$testimonials_navigation_active_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_active_height",
	"",
	esc_html__( "Active Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_navigation_active_height",
	$testimonials_navigation_active_height
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$testimonials_navigation_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_navigation_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row2->addChild(
	"testimonials_navigation_color",
	$testimonials_navigation_color
);

$testimonials_navigation_color_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_color_transparency",
	"",
	esc_html__( "Color Transparency", 'borderland' )
);
$row2->addChild(
	"testimonials_navigation_color_transparency",
	$testimonials_navigation_color_transparency
);

$testimonials_navigation_active_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_navigation_active_color",
	"",
	esc_html__( "Active Color", 'borderland' )
);
$row2->addChild(
	"testimonials_navigation_active_color",
	$testimonials_navigation_active_color
);

$testimonials_navigation_active_color_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_active_color_transparency",
	"",
	esc_html__( "Active Color Transparency", 'borderland' )
);
$row2->addChild(
	"testimonials_navigation_active_color_transparency",
	$testimonials_navigation_active_color_transparency
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$testimonials_navigation_border_radius = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row3->addChild(
	"testimonials_navigation_border_radius",
	$testimonials_navigation_border_radius
);

$testimonials_navigation_border_width = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'borderland' )
);
$row3->addChild(
	"testimonials_navigation_border_width",
	$testimonials_navigation_border_width
);

$testimonials_navigation_border_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_navigation_border_color",
	"",
	esc_html__( "Border color", 'borderland' )
);
$row3->addChild(
	"testimonials_navigation_border_color",
	$testimonials_navigation_border_color
);

$testimonials_navigation_border_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_border_transparency",
	"",
	esc_html__( "Border Color Transparency", 'borderland' )
);
$row3->addChild(
	"testimonials_navigation_border_transparency",
	$testimonials_navigation_border_transparency
);

$row4 = new BorderlandElatedRow();
$group3->addChild(
	"row4",
	$row4
);

$testimonials_navigation_active_border_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_navigation_active_border_color",
	"",
	esc_html__( "Active Border color", 'borderland' )
);
$row4->addChild(
	"testimonials_navigation_active_border_color",
	$testimonials_navigation_active_border_color
);

$testimonials_navigation_active_border_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_navigation_active_border_transparency",
	"",
	esc_html__( "Active Border Color Transparency", 'borderland' )
);
$row4->addChild(
	"testimonials_navigation_active_border_transparency",
	$testimonials_navigation_active_border_transparency
);

$group_testimonials_image = new BorderlandElatedGroup(
	esc_html__( "Testimonials Image Style", 'borderland' ),
	esc_html__( "Define Testimonials Image Style", 'borderland' )
);
$panel16->addChild(
	"group_testimonials_image",
	$group_testimonials_image
);

$row1 = new BorderlandElatedRow( true );
$group_testimonials_image->addChild(
	"row1",
	$row1
);

$testimonials_image_border_radius = new BorderlandElatedField(
	"textsimple",
	"testimonials_image_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_image_border_radius",
	$testimonials_image_border_radius
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Testimonials Arrows Style", 'borderland' ),
	esc_html__( "Define Testimonials Arrows Style", 'borderland' )
);
$panel16->addChild(
	"group5",
	$group5
);
$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$testimonials_arrows_button_width = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_button_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_arrows_button_width",
	$testimonials_arrows_button_width
);

$testimonials_arrows_button_height = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_button_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"testimonials_arrows_button_height",
	$testimonials_arrows_button_height
);

$testimonials_arrows_type = new BorderlandElatedField(
	"selectblanksimple",
	"testimonials_arrows_type",
	"",
	esc_html__( "Arrow Type", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"testimonials_arrows_type",
	$testimonials_arrows_type
);

$testimonials_arrows_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"testimonials_arrows_color",
	$testimonials_arrows_color
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$testimonials_arrows_color_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_color_transparency",
	"",
	esc_html__( "Background Transparency (0=full - 1=opaque)", 'borderland' )
);
$row2->addChild(
	"testimonials_arrows_color_transparency",
	$testimonials_arrows_color_transparency
);

$testimonials_arrows_active_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_active_color",
	"",
	esc_html__( "Hover Background Color", 'borderland' )
);
$row2->addChild(
	"testimonials_arrows_active_color",
	$testimonials_arrows_active_color
);

$testimonials_arrows_active_color_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_active_color_transparency",
	"",
	esc_html__( "Background Hover Transparency (0=full - 1=opaque)", 'borderland' )
);
$row2->addChild(
	"testimonials_arrows_active_color_transparency",
	$testimonials_arrows_active_color_transparency
);

$testimonials_arrows_border_radius = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row2->addChild(
	"testimonials_arrows_border_radius",
	$testimonials_arrows_border_radius
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$testimonials_arrows_border_width = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row3->addChild(
	"testimonials_arrows_border_width",
	$testimonials_arrows_border_width
);

$testimonials_arrows_border_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row3->addChild(
	"testimonials_arrows_border_color",
	$testimonials_arrows_border_color
);

$testimonials_arrows_border_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_border_transparency",
	"",
	esc_html__( "Border Transparency (0=full - 1=opaque)", 'borderland' )
);
$row3->addChild(
	"testimonials_arrows_border_transparency",
	$testimonials_arrows_border_transparency
);

$testimonials_arrows_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row3->addChild(
	"testimonials_arrows_border_hover_color",
	$testimonials_arrows_border_hover_color
);

$row4 = new BorderlandElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$testimonials_arrows_border_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0=full - 1=opaque)", 'borderland' )
);
$row4->addChild(
	"testimonials_arrows_border_hover_transparency",
	$testimonials_arrows_border_hover_transparency
);

$testimonials_arrows_icon_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row4->addChild(
	"testimonials_arrows_icon_color",
	$testimonials_arrows_icon_color
);

$testimonials_arrows_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_transparency",
	"",
	esc_html__( "Icon Transparency (0=full - 1=opaque)", 'borderland' )
);
$row4->addChild(
	"testimonials_arrows_transparency",
	$testimonials_arrows_transparency
);

$testimonials_arrows_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"testimonials_arrows_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row4->addChild(
	"testimonials_arrows_icon_hover_color",
	$testimonials_arrows_icon_hover_color
);

$row5 = new BorderlandElatedRow( true );
$group5->addChild(
	"row5",
	$row5
);

$testimonials_arrows_hover_transparency = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_hover_transparency",
	"",
	esc_html__( "Icon Hover Transparency (0=full - 1=opaque)", 'borderland' )
);
$row5->addChild(
	"testimonials_arrows_hover_transparency",
	$testimonials_arrows_hover_transparency
);

$testimonials_arrows_size = new BorderlandElatedField(
	"textsimple",
	"testimonials_arrows_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row5->addChild(
	"testimonials_arrows_size",
	$testimonials_arrows_size
);

//Widgets
$panelWidgets = new BorderlandElatedPanel(
	esc_html__( "Widgets", 'borderland' ),
	"widget_style"
);
$elementsPage->addChild(
	"panel_widgets",
	$panelWidgets
);

$sidebar_background_color = new BorderlandElatedField(
	"color",
	"sidebar_background_color",
	"",
	esc_html__( "Sidebar Background Color", 'borderland' ),
	esc_html__( "Choose background color for sidebar", 'borderland' )
);
$panelWidgets->addChild(
	"sidebar_background_color",
	$sidebar_background_color
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Padding", 'borderland' ),
	esc_html__( "Define padding for sidebar", 'borderland' )
);
$panelWidgets->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow( true );
$group6->addChild(
	"row1",
	$row1
);
$sidebar_padding_top = new BorderlandElatedField(
	"textsimple",
	"sidebar_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_padding_top",
	$sidebar_padding_top
);
$sidebar_padding_right = new BorderlandElatedField(
	"textsimple",
	"sidebar_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_padding_right",
	$sidebar_padding_right
);
$sidebar_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"sidebar_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_padding_bottom",
	$sidebar_padding_bottom
);
$sidebar_padding_left = new BorderlandElatedField(
	"textsimple",
	"sidebar_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_padding_left",
	$sidebar_padding_left
);

$sidebar_shadow_enable = new BorderlandElatedField(
	'yesno',
	'sidebar_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Sidebar', 'borderland' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_sidebar_shadow_container'
	)
);
$panelWidgets->addChild(
	'sidebar_enable_box_shadow',
	$sidebar_shadow_enable
);

$sidebar_shadow_container = new BorderlandElatedContainer(
	'sidebar_shadow_container',
	'sidebar_enable_box_shadow',
	'no'
);
$panelWidgets->addChild(
	'sidebar_shadow_container',
	$sidebar_shadow_container
);

$sidebar_shadow_horizontal_offset = new BorderlandElatedField(
	'text',
	'sidebar_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'borderland' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_horizontal_offset',
	$sidebar_shadow_horizontal_offset
);

$sidebar_shadow_vertical_offset = new BorderlandElatedField(
	'text',
	'sidebar_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'borderland' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_vertical_offset',
	$sidebar_shadow_vertical_offset
);

$sidebar_shadow_blur = new BorderlandElatedField(
	'text',
	'sidebar_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'borderland' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_blur',
	$sidebar_shadow_blur
);

$sidebar_shadow_spread = new BorderlandElatedField(
	'text',
	'sidebar_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'borderland' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_spread',
	$sidebar_shadow_spread
);

$sidebar_shadow_color = new BorderlandElatedField(
	'color',
	'sidebar_shadow_color',
	'',
	esc_html__( 'Color', 'borderland' ),
	esc_html__( 'Choose color of shadow', 'borderland' )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_color',
	$sidebar_shadow_color
);

$sidebar_alignment = new BorderlandElatedField(
	"select",
	"sidebar_alignment",
	"",
	esc_html__( "Text Alignment", 'borderland' ),
	esc_html__( "Choose text aligment", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$panelWidgets->addChild(
	"sidebar_alignment",
	$sidebar_alignment
);

$widget_style = new BorderlandElatedTitle(
	"widget_style",
	esc_html__( "Widget Style", 'borderland' )
);
$panelWidgets->addChild(
	"widget_style",
	$widget_style
);

$widget_background_color = new BorderlandElatedField(
	"color",
	"widget_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose color for widget background", 'borderland' )
);
$panelWidgets->addChild(
	"widget_background_color",
	$widget_background_color
);

$widget_border_color = new BorderlandElatedField(
	"color",
	"widget_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose a border color around widget", 'borderland' )
);
$panelWidgets->addChild(
	"widget_border_color",
	$widget_border_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Padding", 'borderland' ),
	esc_html__( "Define padding for widget", 'borderland' )
);
$panelWidgets->addChild(
	"group1",
	$group1
);
$row1 = new BorderlandElatedRow( true );
$group1->addChild(
	"row1",
	$row1
);
$widget_padding_top = new BorderlandElatedField(
	"textsimple",
	"widget_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row1->addChild(
	"widget_padding_top",
	$widget_padding_top
);
$widget_padding_right = new BorderlandElatedField(
	"textsimple",
	"widget_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row1->addChild(
	"widget_padding_right",
	$widget_padding_right
);
$widget_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"widget_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row1->addChild(
	"widget_padding_bottom",
	$widget_padding_bottom
);
$widget_padding_left = new BorderlandElatedField(
	"textsimple",
	"widget_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row1->addChild(
	"widget_padding_left",
	$widget_padding_left
);

$sidebar_widget_enable_box_shadow = new BorderlandElatedField(
	'yesno',
	'sidebar_widget_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Widgets', 'borderland' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_sidebar_widget_shadow_container'
	)
);
$panelWidgets->addChild(
	'sidebar_widget_enable_box_shadow',
	$sidebar_widget_enable_box_shadow
);

$sidebar_widget_shadow_container = new BorderlandElatedContainer(
	'sidebar_widget_shadow_container',
	'sidebar_widget_enable_box_shadow',
	'no'
);
$panelWidgets->addChild(
	'sidebar_widget_shadow_container',
	$sidebar_widget_shadow_container
);

$sidebar_widget_shadow_horizontal_offset = new BorderlandElatedField(
	'text',
	'sidebar_widget_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'borderland' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_horizontal_offset',
	$sidebar_widget_shadow_horizontal_offset
);

$sidebar_widget_shadow_vertical_offset = new BorderlandElatedField(
	'text',
	'sidebar_widget_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'borderland' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_vertical_offset',
	$sidebar_widget_shadow_vertical_offset
);

$sidebar_widget_shadow_blur = new BorderlandElatedField(
	'text',
	'sidebar_widget_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'borderland' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_blur',
	$sidebar_widget_shadow_blur
);

$sidebar_widget_shadow_spread = new BorderlandElatedField(
	'text',
	'sidebar_widget_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'borderland' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_spread',
	$sidebar_widget_shadow_spread
);

$sidebar_widget_shadow_color = new BorderlandElatedField(
	'color',
	'sidebar_widget_shadow_color',
	'',
	esc_html__( 'Color', 'borderland' ),
	esc_html__( 'Choose color of shadow', 'borderland' )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_color',
	$sidebar_widget_shadow_color
);

$widget_title = new BorderlandElatedTitle(
	"widget_title",
	esc_html__( "Widget Title", 'borderland' )
);
$panelWidgets->addChild(
	"widget_title",
	$widget_title
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define styles for widgets title", 'borderland' )
);
$panelWidgets->addChild(
	"group2",
	$group2
);
$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$sidebar_title_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"sidebar_title_color",
	$sidebar_title_color
);

$sidebar_title_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_font_size",
	$sidebar_title_font_size
);

$sidebar_title_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_line_height",
	$sidebar_title_line_height
);

$sidebar_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_title_text_transform",
	$sidebar_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidebar_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"sidebar_title_font_family",
	$sidebar_title_font_family
);

$sidebar_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_title_font_style",
	$sidebar_title_font_style
);

$sidebar_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_title_font_weight",
	$sidebar_title_font_weight
);

$sidebar_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_title_letter_spacing",
	$sidebar_title_letter_spacing
);

$sidebar_title_background = new BorderlandElatedField(
	"color",
	"sidebar_title_background",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose color for background", 'borderland' )
);
$panelWidgets->addChild(
	"sidebar_title_background",
	$sidebar_title_background
);

$sidebar_title_border_color = new BorderlandElatedField(
	"color",
	"sidebar_title_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose color for border", 'borderland' )
);
$panelWidgets->addChild(
	"sidebar_title_border_color",
	$sidebar_title_border_color
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Padding for Title", 'borderland' ),
	esc_html__( "Define padding for title", 'borderland' )
);
$panelWidgets->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$sidebar_title_padding_top = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_padding_top",
	$sidebar_title_padding_top
);

$sidebar_title_padding_right = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_padding_right",
	$sidebar_title_padding_right
);

$sidebar_title_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_padding_bottom",
	$sidebar_title_padding_bottom
);

$sidebar_title_padding_left = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_padding_left",
	$sidebar_title_padding_left
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Separator", 'borderland' ),
	esc_html__( "Define styles for title separator", 'borderland' )
);
$panelWidgets->addChild(
	"group4",
	$group4
);
$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);
$sidebar_title_border_bottom_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_title_border_bottom_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"sidebar_title_border_bottom_color",
	$sidebar_title_border_bottom_color
);

$sidebar_title_border_bottom_width = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_border_bottom_width",
	"",
	esc_html__( "Thickness (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_border_bottom_width",
	$sidebar_title_border_bottom_width
);

$sidebar_title_border_bottom_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_border_bottom_padding_bottom",
	"",
	esc_html__( "Top Margin (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_border_bottom_padding_bottom",
	$sidebar_title_border_bottom_padding_bottom
);

$sidebar_title_border_bottom_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"sidebar_title_border_bottom_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_title_border_bottom_margin_bottom",
	$sidebar_title_border_bottom_margin_bottom
);

$widget_text = new BorderlandElatedTitle(
	"widget_text",
	esc_html__( "Widget Text", 'borderland' )
);
$panelWidgets->addChild(
	"widget_text",
	$widget_text
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define styles for widgets text", 'borderland' )
);
$panelWidgets->addChild(
	"group7",
	$group7
);
$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);
$sidebar_text_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"sidebar_text_color",
	$sidebar_text_color
);

$sidebar_text_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_text_font_size",
	$sidebar_text_font_size
);

$sidebar_text_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_text_line_height",
	$sidebar_text_line_height
);

$sidebar_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_text_text_transform",
	$sidebar_text_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);
$sidebar_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"sidebar_text_font_family",
	$sidebar_text_font_family
);

$sidebar_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_text_font_style",
	$sidebar_text_font_style
);

$sidebar_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_text_font_weight",
	$sidebar_text_font_weight
);

$sidebar_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_text_letter_spacing",
	$sidebar_text_letter_spacing
);

$widget_link = new BorderlandElatedTitle(
	"widget_link",
	esc_html__( "Widget Link", 'borderland' )
);
$panelWidgets->addChild(
	"widget_link",
	$widget_link
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Text Style", 'borderland' ),
	esc_html__( "Define styles for widget links", 'borderland' )
);
$panelWidgets->addChild(
	"group3",
	$group3
);
$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);
$sidebar_link_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_link_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"sidebar_link_color",
	$sidebar_link_color
);

$sidebar_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_link_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"sidebar_link_hover_color",
	$sidebar_link_hover_color
);

$sidebar_link_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_link_font_size",
	$sidebar_link_font_size
);

$sidebar_link_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_link_line_height",
	$sidebar_link_line_height
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$sidebar_link_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_link_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"sidebar_link_text_transform",
	$sidebar_link_text_transform
);

$sidebar_link_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_link_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"sidebar_link_font_family",
	$sidebar_link_font_family
);

$sidebar_link_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_link_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_link_font_style",
	$sidebar_link_font_style
);

$sidebar_link_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_link_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_link_font_weight",
	$sidebar_link_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);
$sidebar_link_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"sidebar_link_letter_spacing",
	$sidebar_link_letter_spacing
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Separator Style", 'borderland' ),
	esc_html__( "Choose style for separator between links", 'borderland' )
);
$panelWidgets->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$sidebar_link_separator_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_link_separator_color",
	"",
	esc_html__( "Separator between links color", 'borderland' ),
	esc_html__( "Choose color for separator between color", 'borderland' )
);
$row1->addChild(
	"sidebar_link_separator_color",
	$sidebar_link_separator_color
);

$sidebar_link_separator_type = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_link_separator_type",
	"",
	esc_html__( "Separator between links style", 'borderland' ),
	esc_html__( "Choose style for separator", 'borderland' ),
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' )
	)
);
$row1->addChild(
	"sidebar_link_separator_type",
	$sidebar_link_separator_type
);

$widget_elements = new BorderlandElatedTitle(
	"widget_elements",
	esc_html__( "Widget Elements", 'borderland' )
);
$panelWidgets->addChild(
	"widget_elements",
	$widget_elements
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Search", 'borderland' ),
	esc_html__( "Define styles for search in widget", 'borderland' )
);
$panelWidgets->addChild(
	"group5",
	$group5
);
$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$sidebar_search_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_search_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_search_height",
	$sidebar_search_height
);

$sidebar_search_border_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_search_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"sidebar_search_border_color",
	$sidebar_search_border_color
);

$sidebar_search_loupe_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'borderland' )
);
$row1->addChild(
	"sidebar_search_loupe_color",
	$sidebar_search_loupe_color
);

$sidebar_search_loupe_background_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'borderland' )
);
$row1->addChild(
	"sidebar_search_loupe_background_color",
	$sidebar_search_loupe_background_color
);

$row2 = new BorderlandElatedRow();
$group5->addChild(
	"row2",
	$row2
);
$sidebar_search_text_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_search_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"sidebar_search_text_color",
	$sidebar_search_text_color
);

$sidebar_search_focus_text_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'borderland' )
);
$row2->addChild(
	"sidebar_search_focus_text_color",
	$sidebar_search_focus_text_color
);

$sidebar_search_text_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_search_text_font_size",
	$sidebar_search_text_font_size
);

$sidebar_search_text_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_search_text_line_height",
	$sidebar_search_text_line_height
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$sidebar_search_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"sidebar_search_text_text_transform",
	$sidebar_search_text_text_transform
);

$sidebar_search_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row3->addChild(
	"sidebar_search_text_font_family",
	$sidebar_search_text_font_family
);

$sidebar_search_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_search_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"sidebar_search_text_font_style",
	$sidebar_search_text_font_style
);

$sidebar_search_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"sidebar_search_text_font_weight",
	$sidebar_search_text_font_weight
);

$row4 = new BorderlandElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$sidebar_search_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row4->addChild(
	"sidebar_search_text_letter_spacing",
	$sidebar_search_text_letter_spacing
);

$sidebar_search_border_around = new BorderlandElatedField(
	"selectsimple",
	"sidebar_search_border_around",
	"",
	esc_html__( "Border Around", 'borderland' ),
	"",
	array(
		"around_everything" => esc_html__( "Around Everything", 'borderland' ),
		"around_search_text" => esc_html__( "Around Search Text", 'borderland' )
	)
);
$row4->addChild(
	"sidebar_search_border_around",
	$sidebar_search_border_around
);

$widget_blog_list = new BorderlandElatedTitle(
	"widget_blog_list",
	esc_html__( "Widget - Elated Blog", 'borderland' )
);
$panelWidgets->addChild(
	"widget_blog_list",
	$widget_blog_list
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Blog List Title", 'borderland' ),
	esc_html__( "Define Blog List title style", 'borderland' )
);
$panelWidgets->addChild(
	"group10",
	$group10
);
$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_title_color",
	$widget_blog_list_title_color
);

$widget_blog_list_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_title_hover_color",
	$widget_blog_list_title_hover_color
);

$widget_blog_list_title_font_size = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_title_font_size",
	$widget_blog_list_title_font_size
);

$widget_blog_list_title_line_height = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_title_line_height",
	$widget_blog_list_title_line_height
);

$row2 = new BorderlandElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$widget_blog_list_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"widget_blog_list_title_text_transform",
	$widget_blog_list_title_text_transform
);

$widget_blog_list_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"widget_blog_list_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"widget_blog_list_title_font_family",
	$widget_blog_list_title_font_family
);

$widget_blog_list_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_title_font_style",
	$widget_blog_list_title_font_style
);

$widget_blog_list_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"widget_blog_list_title_font_weight",
	$widget_blog_list_title_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$widget_blog_list_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"widget_blog_list_title_letter_spacing",
	$widget_blog_list_title_letter_spacing
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Blog List Post Info", 'borderland' ),
	esc_html__( "Define blog list post info style", 'borderland' )
);
$panelWidgets->addChild(
	"group11",
	$group11
);
$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$widget_blog_list_post_info_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_post_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_post_info_color",
	$widget_blog_list_post_info_color
);

$widget_blog_list_post_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_post_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_color",
	$widget_blog_list_post_info_link_color
);

$widget_blog_list_post_info_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_hover_color",
	$widget_blog_list_post_info_link_hover_color
);

$widget_blog_list_post_info_font_size = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_post_info_font_size",
	$widget_blog_list_post_info_font_size
);

$row2 = new BorderlandElatedRow( true );
$group11->addChild(
	"row2",
	$row2
);

$widget_blog_list_post_info_line_height = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"widget_blog_list_post_info_line_height",
	$widget_blog_list_post_info_line_height
);

$widget_blog_list_post_info_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"widget_blog_list_post_info_text_transform",
	$widget_blog_list_post_info_text_transform
);

$widget_blog_list_post_info_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"widget_blog_list_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_family",
	$widget_blog_list_post_info_font_family
);

$widget_blog_list_post_info_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_style",
	$widget_blog_list_post_info_font_style
);

$row3 = new BorderlandElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);

$widget_blog_list_post_info_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"widget_blog_list_post_info_font_weight",
	$widget_blog_list_post_info_font_weight
);

$widget_blog_list_post_info_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"widget_blog_list_post_info_letter_spacing",
	$widget_blog_list_post_info_letter_spacing
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Blog List Date Style", 'borderland' ),
	esc_html__( "Define blog list date style", 'borderland' )
);
$panelWidgets->addChild(
	"group12",
	$group12
);
$row1 = new BorderlandElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$widget_blog_list_date_color = new BorderlandElatedField(
	"colorsimple",
	"widget_blog_list_date_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_date_color",
	$widget_blog_list_date_color
);

$widget_blog_list_date_font_size = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_date_font_size",
	$widget_blog_list_date_font_size
);

$widget_blog_list_date_line_height = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_date_line_height",
	$widget_blog_list_date_line_height
);

$widget_blog_list_date_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_date_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"widget_blog_list_date_text_transform",
	$widget_blog_list_date_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group12->addChild(
	"row2",
	$row2
);

$widget_blog_list_date_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"widget_blog_list_date_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"widget_blog_list_date_font_family",
	$widget_blog_list_date_font_family
);

$widget_blog_list_date_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_date_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_date_font_style",
	$widget_blog_list_date_font_style
);

$widget_blog_list_date_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"widget_blog_list_date_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"widget_blog_list_date_font_weight",
	$widget_blog_list_date_font_weight
);

$widget_blog_list_date_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"widget_blog_list_date_letter_spacing",
	$widget_blog_list_date_letter_spacing
);

$group31 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Define blog list spacing", 'borderland' )
);
$panelWidgets->addChild(
	"group31",
	$group31
);

$row1 = new BorderlandElatedRow( true );
$group31->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_margin_bttm = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_title_margin_bttm",
	$widget_blog_list_title_margin_bttm
);

$widget_blog_list_post_info_margin_bttm = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_post_info_margin_bttm",
	$widget_blog_list_post_info_margin_bttm
);

$widget_blog_list_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"widget_blog_list_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'borderland' )
);
$row1->addChild(
	"widget_blog_list_read_more_margin_top",
	$widget_blog_list_read_more_margin_top
);