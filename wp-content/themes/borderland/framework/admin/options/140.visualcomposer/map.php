<?php

$visualComposerPage = new BorderlandElatedAdminPage(
	'22',
	esc_html__( 'Visual Composer', 'borderland' ),
	'fa fa-ellipsis-h'
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	'visualComposerPage',
	$visualComposerPage
);

$panel1 = new BorderlandElatedPanel(
	esc_html__( 'Visual Composer Grid Elements', 'borderland' ),
	'vc_grid_elements'
);
$visualComposerPage->addChild(
	'panel1',
	$panel1
);

$enable_grid_elements = new BorderlandElatedField(
	'yesno',
	'enable_grid_elements',
	'no',
	esc_html__( 'Enable Grid Elements', 'borderland' ),
	esc_html__( 'Enabling this option will allow Visual Composer Grid Elements. NOTE: Enabling Grid Elements will disable Page Transition.', 'borderland' ),
	array(),
	array(
		'dependence' => 'true',
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_vc_grid_elements_style'
	)
);
$panel1->addChild(
	'enable_grid_elements',
	$enable_grid_elements
);

$panel2 = new BorderlandElatedPanel(
	esc_html__( 'Visual Composer Grid Elements Style', 'borderland' ),
	'vc_grid_elements_style',
	'enable_grid_elements',
	'no'
);
$visualComposerPage->addChild(
	'panel2',
	$panel2
);

$group1 = new BorderlandElatedGroup(
	esc_html__( 'Button', 'borderland' ),
	esc_html__( 'Define styles for grid button', 'borderland' )
);
$panel2->addChild(
	'group1',
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$vc_grid_button_title_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_title_color',
	'',
	esc_html__( 'Text Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_color',
	$vc_grid_button_title_color
);
$vc_grid_button_title_hovercolor = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_button_title_hovercolor',
	$vc_grid_button_title_hovercolor
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	'row2',
	$row2
);

$vc_grid_button_title_google_fonts = new BorderlandElatedField(
	esc_html__( 'Fontsimple', 'borderland' ),
	'vc_grid_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_google_fonts',
	$vc_grid_button_title_google_fonts
);
$vc_grid_button_title_fontsize = new BorderlandElatedField(
	'textsimple',
	'vc_grid_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_fontsize',
	$vc_grid_button_title_fontsize
);
$vc_grid_button_title_lineheight = new BorderlandElatedField(
	'textsimple',
	'vc_grid_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_button_title_lineheight',
	$vc_grid_button_title_lineheight
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	'row3',
	$row3
);

$vc_grid_button_title_fontstyle = new BorderlandElatedField(
	'selectblanksimple',
	'vc_grid_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	'vc_grid_button_title_fontstyle',
	$vc_grid_button_title_fontstyle
);
$vc_grid_button_title_fontweight = new BorderlandElatedField(
	'selectblanksimple',
	'vc_grid_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	'vc_grid_button_title_fontweight',
	$vc_grid_button_title_fontweight
);
$vc_grid_button_title_letter_spacing = new BorderlandElatedField(
	'textsimple',
	'vc_grid_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'borderland' ),
	''
);
$row3->addChild(
	'vc_grid_button_title_letter_spacing',
	$vc_grid_button_title_letter_spacing
);

$row4 = new BorderlandElatedRow( true );
$group1->addChild(
	'row4',
	$row4
);

$vc_grid_button_backgroundcolor = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor',
	$vc_grid_button_backgroundcolor
);
$vc_grid_button_backgroundcolor_hover = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_button_backgroundcolor_hover',
	$vc_grid_button_backgroundcolor_hover
);
$vc_grid_button_border_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_border_color',
	'',
	esc_html__( 'Border Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_color',
	$vc_grid_button_border_color
);
$vc_grid_button_border_hover_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_button_border_hover_color',
	$vc_grid_button_border_hover_color
);

$row5 = new BorderlandElatedRow( true );
$group1->addChild(
	'row5',
	$row5
);

$vc_grid_button_border_width = new BorderlandElatedField(
	'textsimple',
	'vc_grid_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'borderland' )
);
$row5->addChild(
	'vc_grid_button_border_width',
	$vc_grid_button_border_width
);
$vc_grid_button_border_radius = new BorderlandElatedField(
	'textsimple',
	'vc_grid_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'borderland' )
);
$row5->addChild(
	'vc_grid_button_border_radius',
	$vc_grid_button_border_radius
);

$group2 = new BorderlandElatedGroup(
	esc_html__( 'Load More Button', 'borderland' ),
	esc_html__( 'Define styles for grid load more button', 'borderland' )
);
$panel2->addChild(
	'group2',
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$vc_grid_load_more_button_title_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_title_color',
	'',
	esc_html__( 'Text Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_color',
	$vc_grid_load_more_button_title_color
);
$vc_grid_load_more_button_title_hovercolor = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_title_hovercolor',
	'',
	esc_html__( 'Hover Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_load_more_button_title_hovercolor',
	$vc_grid_load_more_button_title_hovercolor
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	'row2',
	$row2
);

$vc_grid_load_more_button_title_google_fonts = new BorderlandElatedField(
	esc_html__( 'Fontsimple', 'borderland' ),
	'vc_grid_load_more_button_title_google_fonts',
	'-1',
	esc_html__( 'Font Family', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_google_fonts',
	$vc_grid_load_more_button_title_google_fonts
);
$vc_grid_load_more_button_title_fontsize = new BorderlandElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_fontsize',
	'',
	esc_html__( 'Font Size (px)', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_fontsize',
	$vc_grid_load_more_button_title_fontsize
);
$vc_grid_load_more_button_title_lineheight = new BorderlandElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_lineheight',
	'',
	esc_html__( 'Line Height (px)', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_load_more_button_title_lineheight',
	$vc_grid_load_more_button_title_lineheight
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	'row3',
	$row3
);

$vc_grid_load_more_button_title_fontstyle = new BorderlandElatedField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontstyle',
	'',
	esc_html__( 'Font Style', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontstyle',
	$vc_grid_load_more_button_title_fontstyle
);
$vc_grid_load_more_button_title_fontweight = new BorderlandElatedField(
	'selectblanksimple',
	'vc_grid_load_more_button_title_fontweight',
	'',
	esc_html__( 'Font Weight', 'borderland' ),
	'',
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	'vc_grid_load_more_button_title_fontweight',
	$vc_grid_load_more_button_title_fontweight
);
$vc_grid_load_more_button_title_letter_spacing = new BorderlandElatedField(
	'textsimple',
	'vc_grid_load_more_button_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'borderland' ),
	''
);
$row3->addChild(
	'vc_grid_load_more_button_title_letter_spacing',
	$vc_grid_load_more_button_title_letter_spacing
);

$row4 = new BorderlandElatedRow( true );
$group2->addChild(
	'row4',
	$row4
);

$vc_grid_load_more_button_backgroundcolor = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor',
	'',
	esc_html__( 'Background Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor',
	$vc_grid_load_more_button_backgroundcolor
);
$vc_grid_load_more_button_backgroundcolor_hover = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_backgroundcolor_hover',
	'',
	esc_html__( 'Hover Background Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_backgroundcolor_hover',
	$vc_grid_load_more_button_backgroundcolor_hover
);
$vc_grid_load_more_button_border_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_border_color',
	'',
	esc_html__( 'Border Color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_color',
	$vc_grid_load_more_button_border_color
);
$vc_grid_load_more_button_border_hover_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_load_more_button_border_hover_color',
	'',
	esc_html__( 'Border Hover color', 'borderland' ),
	''
);
$row4->addChild(
	'vc_grid_load_more_button_border_hover_color',
	$vc_grid_load_more_button_border_hover_color
);

$row5 = new BorderlandElatedRow( true );
$group2->addChild(
	'row5',
	$row5
);

$vc_grid_load_more_button_border_width = new BorderlandElatedField(
	'textsimple',
	'vc_grid_load_more_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'borderland' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_width',
	$vc_grid_load_more_button_border_width
);
$vc_grid_load_more_button_border_radius = new BorderlandElatedField(
	'textsimple',
	'vc_grid_load_more_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'borderland' )
);
$row5->addChild(
	'vc_grid_load_more_button_border_radius',
	$vc_grid_load_more_button_border_radius
);

$group3 = new BorderlandElatedGroup(
	esc_html__( 'Pagination', 'borderland' ),
	esc_html__( 'Define styles for grid pagination', 'borderland' )
);
$panel2->addChild(
	'group3',
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	'row1',
	$row1
);

$vc_grid_pagination_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_color',
	'',
	esc_html__( 'Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_color',
	$vc_grid_pagination_color
);
$vc_grid_pagination_hover_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_hover_color',
	'',
	esc_html__( 'Hover Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_hover_color',
	$vc_grid_pagination_hover_color
);
$vc_grid_pagination_background_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_background_color',
	'',
	esc_html__( 'Background Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_color',
	$vc_grid_pagination_background_color
);
$vc_grid_pagination_background_hover_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_background_hover_color',
	'',
	esc_html__( 'Background Hover Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_pagination_background_hover_color',
	$vc_grid_pagination_background_hover_color
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	'row2',
	$row2
);

$vc_grid_pagination_border_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_border_color',
	'',
	esc_html__( 'Border Color', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_color',
	$vc_grid_pagination_border_color
);
$vc_grid_pagination_border_hover_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_pagination_border_hover_color',
	'',
	esc_html__( 'Border Hover Color', 'borderland' ),
	''
);
$row2->addChild(
	'vc_grid_pagination_border_hover_color',
	$vc_grid_pagination_border_hover_color
);

$group5 = new BorderlandElatedGroup(
	esc_html__( 'Filter', 'borderland' ),
	esc_html__( 'Define styles for grid filter', 'borderland' )
);
$panel2->addChild(
	'group5',
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	'row1',
	$row1
);

$vc_grid_portfolio_filter_color = new BorderlandElatedField(
	"colorsimple",
	"vc_grid_portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_color",
	$vc_grid_portfolio_filter_color
);
$vc_grid_portfolio_filter_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"vc_grid_portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_hovercolor",
	$vc_grid_portfolio_filter_hovercolor
);
$vc_grid_portfolio_filter_font_size = new BorderlandElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_font_size",
	$vc_grid_portfolio_filter_font_size
);
$vc_grid_portfolio_filter_line_height = new BorderlandElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"vc_grid_portfolio_filter_line_height",
	$vc_grid_portfolio_filter_line_height
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	'row2',
	$row2
);

$vc_grid_portfolio_filter_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_text_transform",
	$vc_grid_portfolio_filter_text_transform
);
$vc_grid_portfolio_filter_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"vc_grid_portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_family",
	$vc_grid_portfolio_filter_font_family
);
$vc_grid_portfolio_filter_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_style",
	$vc_grid_portfolio_filter_font_style
);
$vc_grid_portfolio_filter_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"vc_grid_portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"vc_grid_portfolio_filter_font_weight",
	$vc_grid_portfolio_filter_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	'row3',
	$row3
);

$vc_grid_portfolio_filter_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"vc_grid_portfolio_filter_letter_spacing",
	$vc_grid_portfolio_filter_letter_spacing
);
$vc_grid_portfolio_filter_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"vc_grid_portfolio_filter_margin_bottom",
	"",
	esc_html__( "Filter Bottom Margin (px)", 'borderland' ),
	""
);
$row3->addChild(
	"vc_grid_portfolio_filter_margin_bottom",
	$vc_grid_portfolio_filter_margin_bottom
);

$group4 = new BorderlandElatedGroup(
	esc_html__( 'Arrows', 'borderland' ),
	esc_html__( 'Define styles for grid arrows', 'borderland' )
);
$panel2->addChild(
	'group4',
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	'row1',
	$row1
);

$vc_grid_arrows_color = new BorderlandElatedField(
	'colorsimple',
	'vc_grid_arrows_color',
	'',
	esc_html__( 'Color', 'borderland' ),
	''
);
$row1->addChild(
	'vc_grid_arrows_color',
	$vc_grid_arrows_color
);