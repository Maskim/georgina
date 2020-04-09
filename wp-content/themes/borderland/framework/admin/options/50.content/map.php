<?php

$pageContent = new BorderlandElatedAdminPage(
	"content",
	esc_html__( "Content", 'borderland' ),
	"fa fa-align-justify"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"content",
	$pageContent
);

$panelGeneral = new BorderlandElatedPanel(
	esc_html__( "General Settings", 'borderland' ),
	"general_settings"
);
$pageContent->addChild(
	"panel_general",
	$panelGeneral
);

$background_color = new BorderlandElatedField(
	"color",
	"background_color",
	"",
	esc_html__( "Content Background Color", 'borderland' ),
	esc_html__( "Choose the background color for page content area. Default color is #f5f5f5.", 'borderland' )
);
$panelGeneral->addChild(
	"background_color",
	$background_color
);

$background_color_grid = new BorderlandElatedField(
	"color",
	"background_color_grid",
	"",
	esc_html__( "Content Background Color for Templates in Grid", 'borderland' ),
	esc_html__( "Choose the background color for the page templates in grid.", 'borderland' )
);
$panelGeneral->addChild(
	"background_color_grid",
	$background_color_grid
);

$content_top_padding = new BorderlandElatedField(
	"text",
	"content_top_padding",
	"0",
	esc_html__( "Content Top Padding (px)", 'borderland' ),
	esc_html__( "Enter top padding for content area. If you set this value then it's important to set also Content top padding for mobile header value.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding",
	$content_top_padding
);

$content_top_padding_default_template = new BorderlandElatedField(
	"text",
	"content_top_padding_default_template",
	"44",
	esc_html__( "Content Top Padding for Templates in Grid (px)", 'borderland' ),
	esc_html__( "Enter top padding for content area for Templates in grid. If you set this value then it's important to set also Content top padding for mobile header value.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding_default_template",
	$content_top_padding_default_template
);

$content_top_padding_mobile = new BorderlandElatedField(
	"text",
	"content_top_padding_mobile",
	"44",
	esc_html__( "Content Top Padding for Mobile Header (px)", 'borderland' ),
	esc_html__( "Enter top padding for content area for Mobile Header.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panelGeneral->addChild(
	"content_top_padding_mobile",
	$content_top_padding_mobile
);

$overlapping_content = new BorderlandElatedField(
	"yesno",
	"overlapping_content",
	"no",
	esc_html__( "Enable Overlapping Content", 'borderland' ),
	esc_html__( "Enabling this option will make content overlap title area or slider for set amount of pixels", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_overlapping_content_container"
	)
);
$panelGeneral->addChild(
	"overlapping_content",
	$overlapping_content
);

$overlapping_content_container = new BorderlandElatedContainer(
	"overlapping_content_container",
	"overlapping_content",
	"no"
);
$panelGeneral->addChild(
	"overlapping_content_container",
	$overlapping_content_container
);

$overlapping_content_amount = new BorderlandElatedField(
	"text",
	"overlapping_content_amount",
	"",
	esc_html__( "Overlapping amount (px)", 'borderland' ),
	esc_html__( "Enter amount of pixels you would like content to overlap title area or slider", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_amount",
	$overlapping_content_amount
);

$overlapping_content_padding = new BorderlandElatedField(
	"text",
	"overlapping_content_padding",
	"",
	esc_html__( "Overlapping left/right padding (px)", 'borderland' ),
	esc_html__( "This option takes effect only on Default (in grid) templates", 'borderland' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_padding",
	$overlapping_content_padding
);

$content_grid_position = new BorderlandElatedField(
	"select",
	"content_grid_position",
	"",
	esc_html__( "Position of Content in Grid", 'borderland' ),
	esc_html__( "Set position of content in grid", 'borderland' ),
	array(
		"default" => esc_html__( "Default", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$panelGeneral->addChild(
	"content_grid_position",
	$content_grid_position
);

$content_predefined_width = new BorderlandElatedField(
	"select",
	"content_predefined_width",
	"",
	esc_html__( "Initial Width of Content", 'borderland' ),
	esc_html__( "Choose the initial width of content which is in grid (Applies to pages set to 'Default Template' and rows set to 'In Grid' )", 'borderland' ),
	array(
		"" => esc_html__( "1100px - default", 'borderland' ),
		"grid_1300" => esc_html__( "1300px", 'borderland' ),
		"grid_1200" => esc_html__( "1200px", 'borderland' ),
		"grid_800" => esc_html__( "800px", 'borderland' )
	)
);
$panelGeneral->addChild(
	"content_predefined_width",
	$content_predefined_width
);

//Content Bottom Area

$panelContentBottom = new BorderlandElatedPanel(
	esc_html__( "Content Bottom Area", 'borderland' ),
	"content_bottom_area_panel"
);
$pageContent->addChild(
	"panel_content_bottom",
	$panelContentBottom
);

$enable_content_bottom_area = new BorderlandElatedField(
	"yesno",
	"enable_content_bottom_area",
	"no",
	esc_html__( "Enable Content Bottom Area", 'borderland' ),
	esc_html__( "This option will enable Content Bottom area on pages", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_content_bottom_area_container"
	)
);
$panelContentBottom->addChild(
	"enable_content_bottom_area",
	$enable_content_bottom_area
);

$enable_content_bottom_area_container = new BorderlandElatedContainer(
	"enable_content_bottom_area_container",
	"enable_content_bottom_area",
	"no"
);
$panelContentBottom->addChild(
	"enable_content_bottom_area_container",
	$enable_content_bottom_area_container
);

$custom_sidebars = borderland_elated_get_custom_sidebars();

$content_bottom_sidebar_custom_display = new BorderlandElatedField(
	"selectblank",
	"content_bottom_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'borderland' ),
	esc_html__( "Choose a Content Bottom sidebar to display", 'borderland' ),
	$custom_sidebars
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_sidebar_custom_display",
	$content_bottom_sidebar_custom_display
);

$content_bottom_in_grid = new BorderlandElatedField(
	"yesno",
	"content_bottom_in_grid",
	"yes",
	esc_html__( "Display in Grid", 'borderland' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'borderland' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_in_grid",
	$content_bottom_in_grid
);

$content_bottom_background_color = new BorderlandElatedField(
	"color",
	"content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose a background color for Content Bottom area", 'borderland' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_background_color",
	$content_bottom_background_color
);