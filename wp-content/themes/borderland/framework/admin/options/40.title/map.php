<?php

$icon_collections = borderland_elated_icon_collections();

$titlePage = new BorderlandElatedAdminPage(
	"4",
	esc_html__( "Title", 'borderland' ),
	"fa fa-list-alt"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"title",
	$titlePage
);

$panel8 = new BorderlandElatedPanel(
	esc_html__( "Title", 'borderland' ),
	"title_panel"
);
$titlePage->addChild(
	"panel8",
	$panel8
);

$show_page_title = new BorderlandElatedField(
	"yesno",
	"show_page_title",
	"yes",
	esc_html__( "Enable Page Title Area", 'borderland' ),
	esc_html__( "This option will enable Title Area", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_title_container"
	)
);
$panel8->addChild(
	"show_page_title",
	$show_page_title
);

$enable_title_container = new BorderlandElatedContainer(
	"enable_title_container",
	"show_page_title",
	"no"
);
$panel8->addChild(
	"enable_title_container",
	$enable_title_container
);

$title_type = new BorderlandElatedField(
	"select",
	"title_type",
	"standard_title",
	esc_html__( "Title Type", 'borderland' ),
	esc_html__( "Choose title type", 'borderland' ),
	array(
		"standard_title" => esc_html__( "Standard", 'borderland' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumb", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#eltdf_title_standard_container" ),
		"show"       => array( "standard_title" => "#eltdf_title_standard_container" )
	)
);
$enable_title_container->addChild(
	"title_type",
	$title_type
);

$animate_title_area = new BorderlandElatedField(
	"select",
	"animate_title_area",
	"no",
	esc_html__( "Animations", 'borderland' ),
	esc_html__( "Choose an animation for Title Area", 'borderland' ),
	array(
		"no" => esc_html__( "No animation", 'borderland' ),
		"text_right_left" => esc_html__( "Text right to left", 'borderland' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'borderland' )
	)
);
$enable_title_container->addChild(
	"animate_title_area",
	$animate_title_area
);

$page_title_vertical_aligment = new BorderlandElatedField(
	"select",
	"page_title_vertical_aligment",
	"header_bottom",
	esc_html__( "Vertical Alignment", 'borderland' ),
	esc_html__( "Specify Title vertical alignment", 'borderland' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'borderland' ),
		"window_top" => esc_html__( "From Window Top", 'borderland' )
	)
);
$enable_title_container->addChild(
	"page_title_vertical_aligment",
	$page_title_vertical_aligment
);

$show_page_title_text = new BorderlandElatedField(
	"yesno",
	"show_page_title_text",
	"yes",
	esc_html__( "Enable Page Title Text", 'borderland' ),
	esc_html__( "This option will enable Title Text", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_title_text_container, #eltdf_animation_page_title_contaier"
	)
);
$enable_title_container->addChild(
	"show_page_title_text",
	$show_page_title_text
);

$enable_title_text_container = new BorderlandElatedContainer(
	"enable_title_text_container",
	"show_page_title_text",
	"no"
);
$enable_title_container->addChild(
	"enable_title_text_container",
	$enable_title_text_container
);

$page_title_position = new BorderlandElatedField(
	"select",
	"page_title_position",
	"left",
	esc_html__( "Title Text Alignment", 'borderland' ),
	esc_html__( "Specify Title text alignment", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$enable_title_text_container->addChild(
	"page_title_position",
	$page_title_position
);

$title_text_shadow = new BorderlandElatedField(
	"yesno",
	"title_text_shadow",
	"no",
	esc_html__( "Title Text Shadow", 'borderland' ),
	esc_html__( "Enabling this option will give Title text a shadow", 'borderland' )
);
$enable_title_text_container->addChild(
	"title_text_shadow",
	$title_text_shadow
);

$title_standard_container = new BorderlandElatedContainer(
	"title_standard_container",
	"title_type",
	"breadcrumbs_title"
);
$enable_title_container->addChild(
	"title_standard_container",
	$title_standard_container
);

//Title like separator with text
$title_like_separator = new BorderlandElatedField(
	"yesno",
	"title_like_separator",
	"no",
	esc_html__( "Separator Around Title Text", 'borderland' ),
	esc_html__( "Enable separator around title", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_like_separator_container"
	)
);
$title_standard_container->addChild(
	"title_like_separator",
	$title_like_separator
);

$title_like_separator_container = new BorderlandElatedContainer(
	"title_like_separator_container",
	"title_like_separator",
	"no"
);
$title_standard_container->addChild(
	"title_like_separator_container",
	$title_like_separator_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Line Styles", 'borderland' ),
	esc_html__( "Choose style for separator line", 'borderland' )
);
$title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_line_color = new BorderlandElatedField(
	"colorsimple",
	"title_like_separator_line_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"title_like_separator_line_color",
	$title_like_separator_line_color
);

$title_like_separator_line_width = new BorderlandElatedField(
	"textsimple",
	"title_like_separator_line_width",
	"",
	esc_html__( "Width", 'borderland' )
);
$row1->addChild(
	"title_like_separator_line_width",
	$title_like_separator_line_width
);

$title_like_separator_line_thickness = new BorderlandElatedField(
	"textsimple",
	"title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'borderland' )
);
$row1->addChild(
	"title_like_separator_line_thickness",
	$title_like_separator_line_thickness
);

$title_like_separator_line_style = new BorderlandElatedField(
	"selectsimple",
	"title_like_separator_line_style",
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
	"title_like_separator_line_style",
	$title_like_separator_line_style
);

$title_like_separator_margins = new BorderlandElatedField(
	"text",
	"title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'borderland' ),
	esc_html__( "Define left/right margins for title from separator", 'borderland' )
);
$title_like_separator_container->addChild(
	"title_like_separator_margins",
	$title_like_separator_margins
);

$title_like_separator_line_dots = new BorderlandElatedField(
	"yesno",
	"title_like_separator_line_dots",
	"no",
	esc_html__( "Dots on The End of Lines", 'borderland' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_like_separator_dots_container"
	)
);
$title_like_separator_container->addChild(
	"title_like_separator_line_dots",
	$title_like_separator_line_dots
);

$title_like_separator_dots_container = new BorderlandElatedContainer(
	"title_like_separator_dots_container",
	"title_like_separator_line_dots",
	"no"
);
$title_like_separator_container->addChild(
	"title_like_separator_dots_container",
	$title_like_separator_dots_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Dots Style", 'borderland' ),
	esc_html__( "Choose style for dots", 'borderland' )
);
$title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_dots_size = new BorderlandElatedField(
	"textsimple",
	"title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'borderland' )
);
$row1->addChild(
	"title_like_separator_dots_size",
	$title_like_separator_dots_size
);

$title_like_separator_dots_color = new BorderlandElatedField(
	"colorsimple",
	"title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"title_like_separator_dots_color",
	$title_like_separator_dots_color
);

//Subtitle like separator with text
$subtitle_like_separator = new BorderlandElatedField(
	"yesno",
	"subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle Text", 'borderland' ),
	esc_html__( "Enable separator around subtitle", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_subtitle_like_separator_container"
	)
);
$title_standard_container->addChild(
	"subtitle_like_separator",
	$subtitle_like_separator
);

$subtitle_like_separator_container = new BorderlandElatedContainer(
	"subtitle_like_separator_container",
	"subtitle_like_separator",
	"no"
);
$title_standard_container->addChild(
	"subtitle_like_separator_container",
	$subtitle_like_separator_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Line Styles", 'borderland' ),
	esc_html__( "Choose style for separator line", 'borderland' )
);
$subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$subtitle_like_separator_line_color = new BorderlandElatedField(
	"colorsimple",
	"subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"subtitle_like_separator_line_color",
	$subtitle_like_separator_line_color
);

$subtitle_like_separator_line_width = new BorderlandElatedField(
	"textsimple",
	"subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'borderland' )
);
$row1->addChild(
	"subtitle_like_separator_line_width",
	$subtitle_like_separator_line_width
);

$subtitle_like_separator_line_thickness = new BorderlandElatedField(
	"textsimple",
	"subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'borderland' )
);
$row1->addChild(
	"subtitle_like_separator_line_thickness",
	$subtitle_like_separator_line_thickness
);

$subtitle_like_separator_line_style = new BorderlandElatedField(
	"selectsimple",
	"subtitle_like_separator_line_style",
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
	"subtitle_like_separator_line_style",
	$subtitle_like_separator_line_style
);

$subtitle_like_separator_margins = new BorderlandElatedField(
	"text",
	"subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subtitle", 'borderland' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'borderland' )
);
$subtitle_like_separator_container->addChild(
	"subtitle_like_separator_margins",
	$subtitle_like_separator_margins
);

$title_background_color = new BorderlandElatedField(
	"color",
	"title_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose a background color for Title Area", 'borderland' )
);
$enable_title_container->addChild(
	"title_background_color",
	$title_background_color
);

$title_image = new BorderlandElatedField(
	"image",
	"title_image",
	"",
	esc_html__( "Background Image", 'borderland' ),
	esc_html__( "Choose an Image for Title Area", 'borderland' )
);
$enable_title_container->addChild(
	"title_image",
	$title_image
);

$responsive_title_image = new BorderlandElatedField(
	"yesno",
	"responsive_title_image",
	"no",
	esc_html__( "Background Responsive Image", 'borderland' ),
	esc_html__( "Enabling this option will make Title background image responsive", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_responsive_title_image_container",
		"dependence_show_on_yes" => ""
	)
);
$enable_title_container->addChild(
	"responsive_title_image",
	$responsive_title_image
);

$responsive_title_image_container = new BorderlandElatedContainer(
	"responsive_title_image_container",
	"responsive_title_image",
	"yes"
);
$enable_title_container->addChild(
	"responsive_title_image_container",
	$responsive_title_image_container
);
$fixed_title_image = new BorderlandElatedField(
	"select",
	"fixed_title_image",
	"no",
	esc_html__( "Parallax Title Image", 'borderland' ),
	esc_html__( "Enabling this option will make Title image parallax", 'borderland' ),
	array(
		"no" => esc_html__( "No", 'borderland' ),
		"yes" => esc_html__( "Yes", 'borderland' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'borderland' )
	)
);
$responsive_title_image_container->addChild(
	"fixed_title_image",
	$fixed_title_image
);
$title_height = new BorderlandElatedField(
	"text",
	"title_height",
	"",
	esc_html__( "Title Height (px)", 'borderland' ),
	esc_html__( "Set a height for Title Area in pixels", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$responsive_title_image_container->addChild(
	"title_height",
	$title_height
);

$title_overlay_image = new BorderlandElatedField(
	"image",
	"title_overlay_image",
	"",
	esc_html__( "Pattern Overlay Image", 'borderland' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'borderland' )
);
$enable_title_container->addChild(
	"title_overlay_image",
	$title_overlay_image
);

$title_separator = new BorderlandElatedField(
	"yesno",
	"title_separator",
	"no",
	esc_html__( "Show Title Separator", 'borderland' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_title_separator_container, #eltdf_animation_page_title_separator_container"
	)
);
$title_standard_container->addChild(
	"title_separator",
	$title_separator
);

$title_separator_container = new BorderlandElatedContainer(
	"title_separator_container",
	"title_separator",
	"no"
);
$title_standard_container->addChild(
	"title_separator_container",
	$title_separator_container
);

$title_separator_format = new BorderlandElatedField(
	"select",
	"title_separator_format",
	"normal",
	esc_html__( "Format", 'borderland' ),
	esc_html__( "Choose a format (type) of separator", 'borderland' ),
	array(
		"normal" => esc_html__( "Normal", 'borderland' ),
		"with_icon" => esc_html__( "With Icon", 'borderland' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal"           => "#eltdf_separator_with_icon_container, #eltdf_separator_custom_icon_container, #eltdf_separator_all_icons_container",
			"with_custom_icon" => "#eltdf_separator_with_icon_container",
			"with_icon"        => "#eltdf_separator_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#eltdf_separator_with_icon_container, #eltdf_separator_all_icons_container",
			"with_custom_icon" => "#eltdf_separator_custom_icon_container, #eltdf_separator_all_icons_container"
		)
	)
);

$title_separator_container->addChild(
	"title_separator_format",
	$title_separator_format
);

$separator_all_icons_container = new BorderlandElatedContainer(
	"separator_all_icons_container",
	"title_separator_format",
	"normal"
);
$title_separator_container->addChild(
	"separator_all_icons_container",
	$separator_all_icons_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Icon Position and Margins", 'borderland' ),
	esc_html__( "Choose icon position and set left(right) margin", 'borderland' )
);
$separator_all_icons_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_position = new BorderlandElatedField(
	"selectsimple",
	"title_separator_icon_position",
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
	"title_separator_icon_position",
	$title_separator_icon_position
);

$title_separator_icon_margins = new BorderlandElatedField(
	"textsimple",
	"title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'borderland' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_margins",
	$title_separator_icon_margins
);

$separator_with_icon_container = new BorderlandElatedContainer(
	"separator_with_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_custom_icon" )
);
$title_separator_container->addChild(
	"separator_with_icon_container",
	$separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array = array();
$separator_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( $icon_collections->iconCollections ) && count( $icon_collections->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = $icon_collections->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( $icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#eltdf_separator_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#eltdf_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$separator_icon_pack = new BorderlandElatedField(
	"select",
	"separator_icon_pack",
	"font_awesome",
	esc_html__( "Separator Icon Pack", 'borderland' ),
	esc_html__( "Choose icon pack for separator", 'borderland' ),
	$icon_collections->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$separator_with_icon_container->addChild(
	"separator_icon_pack",
	$separator_icon_pack
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
		
		$separator_icon_hide_values = $icon_collections_keys;
		$separator_icon_container   = new BorderlandElatedContainer(
			"separator_icon_" . $collection_object->param . "_container",
			"separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$separator_icon             = new BorderlandElatedField(
			"select",
			"separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'borderland' ),
			esc_html__( "Choose Separator Icon", 'borderland' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$separator_icon_container->addChild(
			"separator_icon_" . $collection_object->param,
			$separator_icon
		);
		
		$separator_with_icon_container->addChild(
			"separator_icon_" . $collection_object->param . "_container",
			$separator_icon_container
		);
	}
	
}

$group1 = new BorderlandElatedGroup(
	esc_html__( "Icon Style", 'borderland' ),
	esc_html__( "Choose icon style", 'borderland' )
);
$separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose a color of icon for Title separator", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_color",
	$title_separator_icon_color
);

$title_separator_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_hover_color",
	$title_separator_icon_hover_color
);

$title_separator_icon_custom_size = new BorderlandElatedField(
	"textsimple",
	"title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'borderland' ),
	esc_html__( "Choose size of icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_custom_size",
	$title_separator_icon_custom_size
);

$title_separator_icon_type = new BorderlandElatedField(
	"select",
	"title_separator_icon_type",
	"normal",
	esc_html__( "Icon Type", 'borderland' ),
	esc_html__( "Choose icon type", 'borderland' ),
	array(
		"normal" => esc_html__( "Normal", 'borderland' ),
		"circle" => esc_html__( "Circle", 'borderland' ),
		"square" => esc_html__( "Square", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "normal" => "#eltdf_title_separator_types_container" ),
		"show"       => array(
			"circle" => "#eltdf_title_separator_types_container",
			"square" => "#eltdf_title_separator_types_container"
		)
	)
);
$separator_with_icon_container->addChild(
	"title_separator_icon_type",
	$title_separator_icon_type
);

$title_separator_types_container = new BorderlandElatedContainer(
	"title_separator_types_container",
	"title_separator_icon_type",
	"normal"
);
$separator_with_icon_container->addChild(
	"title_separator_types_container",
	$title_separator_types_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define border style for icon", 'borderland' )
);
$title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_border_radius = new BorderlandElatedField(
	"textsimple",
	"title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' ),
	esc_html__( "Enter border radius for icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_border_radius",
	$title_separator_icon_border_radius
);

$title_separator_icon_border_width = new BorderlandElatedField(
	"textsimple",
	"title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' ),
	esc_html__( "Enter border width for icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_border_width",
	$title_separator_icon_border_width
);

$title_separator_icon_border_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Enter border color for icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_border_color",
	$title_separator_icon_border_color
);

$title_separator_icon_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Enter border color for icon", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_border_hover_color",
	$title_separator_icon_border_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Additional Icon Style", 'borderland' ),
	esc_html__( "Choose adition icon styling", 'borderland' )
);
$title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_icon_shape_size = new BorderlandElatedField(
	"textsimple",
	"title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_shape_size",
	$title_separator_icon_shape_size
);

$title_separator_icon_background_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_background_color",
	$title_separator_icon_background_color
);

$title_separator_icon_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"title_separator_icon_background_hover_color",
	$title_separator_icon_background_hover_color
);

$separator_custom_icon_container = new BorderlandElatedContainer(
	"separator_custom_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_icon" )
);
$title_separator_container->addChild(
	"separator_custom_icon_container",
	$separator_custom_icon_container
);

$separator_custom_icon = new BorderlandElatedField(
	"image",
	"separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'borderland' ),
	esc_html__( "Choose custom icon for separator", 'borderland' )
);
$separator_custom_icon_container->addChild(
	"separator_custom_icon",
	$separator_custom_icon
);

$title_separator_type = new BorderlandElatedField(
	"select",
	"title_separator_type",
	"",
	esc_html__( "Type", 'borderland' ),
	esc_html__( "Choose a Title separator line style", 'borderland' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' )
	)
);
$title_separator_container->addChild(
	"title_separator_type",
	$title_separator_type
);

$title_separator_position = new BorderlandElatedField(
	"select",
	"title_separator_position",
	"",
	esc_html__( "Position", 'borderland' ),
	esc_html__( "Choose a Title separator position", 'borderland' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'borderland' ),
		"below" => esc_html__( "Below Title", 'borderland' )
	)
);
$title_separator_container->addChild(
	"title_separator_position",
	$title_separator_position
);

$title_separator_color = new BorderlandElatedField(
	"color",
	"title_separator_color",
	"",
	esc_html__( "Color", 'borderland' ),
	esc_html__( "Choose a color for Title separator", 'borderland' )
);
$title_separator_container->addChild(
	"title_separator_color",
	$title_separator_color
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Size", 'borderland' ),
	esc_html__( 'Define size for Title separator', 'borderland' )
);
$title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_thickness = new BorderlandElatedField(
	"textsimple",
	"title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'borderland' )
);
$row1->addChild(
	"title_separator_thickness",
	$title_separator_thickness
);

$title_separator_width = new BorderlandElatedField(
	"textsimple",
	"title_separator_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"title_separator_width",
	$title_separator_width
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Margin", 'borderland' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'borderland' )
);
$title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_topmargin = new BorderlandElatedField(
	"textsimple",
	"title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'borderland' )
);
$row1->addChild(
	"title_separator_topmargin",
	$title_separator_topmargin
);

$title_separator_bottommargin = new BorderlandElatedField(
	"textsimple",
	"title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' )
);
$row1->addChild(
	"title_separator_bottommargin",
	$title_separator_bottommargin
);

$border_bottom_title_area = new BorderlandElatedField(
	"yesno",
	"border_bottom_title_area",
	"no",
	esc_html__( "Bottom Border", 'borderland' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_border_bottom_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_bottom_title_area",
	$border_bottom_title_area
);
$border_bottom_title_area_container = new BorderlandElatedContainer(
	"border_bottom_title_area_container",
	"border_bottom_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_bottom_title_area_container",
	$border_bottom_title_area_container
);
$border_bottom_title_area_width = new BorderlandElatedField(
	"text",
	"border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'borderland' ),
	esc_html__( "Choose a width for Title Area bottom border Note: If width has not been set, border bottom will not be displayed", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_width",
	$border_bottom_title_area_width
);
$border_bottom_title_area_color = new BorderlandElatedField(
	"color",
	"border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'borderland' ),
	esc_html__( "Choose a color for Title Area bottom border", 'borderland' )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_color",
	$border_bottom_title_area_color
);

$enable_breadcrumbs = new BorderlandElatedField(
	"yesno",
	"enable_breadcrumbs",
	"no",
	esc_html__( "Enable Breadcrumbs", 'borderland' ),
	esc_html__( "This option will display Breadcrumbs in Title Area", 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_animation_page_title_breadcrumbs_container'
	)
);
$enable_title_container->addChild(
	"enable_breadcrumbs",
	$enable_breadcrumbs
);

$title_graphics = new BorderlandElatedField(
	"image",
	"title_graphics",
	"",
	esc_html__( "Graphics", 'borderland' ),
	esc_html__( "Choose graphics", 'borderland' )
);
$title_standard_container->addChild(
	"title_graphics",
	$title_graphics
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title Area Content Style", 'borderland' ),
	esc_html__( 'Define style for Title Area Content', 'borderland' )
);
$enable_title_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$title_content_background_color = new BorderlandElatedField(
	"colorsimple",
	"title_content_background_color",
	"",
	esc_html__( "Title Content Background Color", 'borderland' ),
	esc_html__( "Background color for title content", 'borderland' )
);
$row1->addChild(
	"title_content_background_color",
	$title_content_background_color
);

$title_content_background_opacity = new BorderlandElatedField(
	"textsimple",
	"title_content_background_opacity",
	"",
	esc_html__( "Title Content Background Opacity", 'borderland' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"title_content_background_opacity",
	$title_content_background_opacity
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( 'Define style for Title', 'borderland' )
);
$enable_title_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$title_span_background_color = new BorderlandElatedField(
	"colorsimple",
	"title_span_background_color",
	"",
	esc_html__( "Title Background Color", 'borderland' ),
	esc_html__( "Background color for title", 'borderland' )
);
$row1->addChild(
	"title_span_background_color",
	$title_span_background_color
);

$title_span_background_opacity = new BorderlandElatedField(
	"textsimple",
	"title_span_background_opacity",
	"",
	esc_html__( "Title Background Opacity", 'borderland' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"title_span_background_opacity",
	$title_span_background_opacity
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Title Padding", 'borderland' ),
	esc_html__( 'Define padding for Title', 'borderland' )
);
$enable_title_container->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$title_span_top_padding = new BorderlandElatedField(
	"textsimple",
	"title_span_top_padding",
	"",
	esc_html__( "Top Padding", 'borderland' )
);
$row1->addChild(
	"title_span_top_padding",
	$title_span_top_padding
);

$title_span_right_padding = new BorderlandElatedField(
	"textsimple",
	"title_span_right_padding",
	"",
	esc_html__( "Right Padding", 'borderland' )
);
$row1->addChild(
	"title_span_right_padding",
	$title_span_right_padding
);

$title_span_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"title_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'borderland' )
);
$row1->addChild(
	"title_span_bottom_padding",
	$title_span_bottom_padding
);

$title_span_left_padding = new BorderlandElatedField(
	"textsimple",
	"title_span_left_padding",
	"",
	esc_html__( "Left Padding", 'borderland' )
);
$row1->addChild(
	"title_span_left_padding",
	$title_span_left_padding
);

$subtitle_position = new BorderlandElatedField(
	"select",
	"subtitle_position",
	"below_title",
	esc_html__( "Subtitle Position", 'borderland' ),
	esc_html__( "Choose a Subtitle position", 'borderland' ),
	array(
		"below_title" => esc_html__( "Below Title", 'borderland' ),
		"above_title" => esc_html__( "Above Title", 'borderland' ),
		"next_to_title" => esc_html__( "Next to Title", 'borderland' )
	)
);
$enable_title_container->addChild(
	"subtitle_position",
	$subtitle_position
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Subtitle Style", 'borderland' ),
	esc_html__( 'Define style for subtitle', 'borderland' )
);
$enable_title_container->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$subtitle_span_background_color = new BorderlandElatedField(
	"colorsimple",
	"subtitle_span_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'borderland' ),
	esc_html__( "Background color for subtitle", 'borderland' )
);
$row1->addChild(
	"subtitle_span_background_color",
	$subtitle_span_background_color
);

$subtitle_span_background_opacity = new BorderlandElatedField(
	"textsimple",
	"subtitle_span_background_opacity",
	"",
	esc_html__( "Subtitle Background Opacity", 'borderland' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'borderland' )
);
$row1->addChild(
	"subtitle_span_background_opacity",
	$subtitle_span_background_opacity
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Subtitle Padding", 'borderland' ),
	esc_html__( 'Define padding for subtitle', 'borderland' )
);
$enable_title_container->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$subtitle_span_top_padding = new BorderlandElatedField(
	"textsimple",
	"subtitle_span_top_padding",
	"",
	esc_html__( "Top Padding", 'borderland' )
);
$row1->addChild(
	"subtitle_span_top_padding",
	$subtitle_span_top_padding
);

$subtitle_span_right_padding = new BorderlandElatedField(
	"textsimple",
	"subtitle_span_right_padding",
	"",
	esc_html__( "Right Padding", 'borderland' )
);
$row1->addChild(
	"subtitle_span_right_padding",
	$subtitle_span_right_padding
);

$subtitle_span_bottom_padding = new BorderlandElatedField(
	"textsimple",
	"subtitle_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'borderland' )
);
$row1->addChild(
	"subtitle_span_bottom_padding",
	$subtitle_span_bottom_padding
);

$subtitle_span_left_padding = new BorderlandElatedField(
	"textsimple",
	"subtitle_span_left_padding",
	"",
	esc_html__( "Left Padding", 'borderland' )
);
$row1->addChild(
	"subtitle_span_left_padding",
	$subtitle_span_left_padding
);

$panel9 = new BorderlandElatedPanel(
	esc_html__( 'Title Animations', 'borderland' ),
	'title_animations'
);
$titlePage->addChild(
	'panel9',
	$panel9
);

//Whole title content animation
$page_title_whole_content_animations = new BorderlandElatedField(
	'yesno',
	'page_title_whole_content_animations',
	'no',
	esc_html__( 'Enable Whole Title Content Animation', 'borderland' ),
	esc_html__( 'This option will enable whole title content animation', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_whole_content_animations_container'
	)
);
$panel9->addChild(
	'page_title_whole_content_animations',
	$page_title_whole_content_animations
);

$page_title_whole_content_animations_container = new BorderlandElatedContainer(
	'page_title_whole_content_animations_container',
	'page_title_whole_content_animations',
	'no'
);
$panel9->addChild(
	'page_title_whole_content_animations_container',
	$page_title_whole_content_animations_container
);

$page_title_whole_content_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_start',
	$page_title_whole_content_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_whole_content_data_start = new BorderlandElatedField(
	'textsimple',
	'page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_title_whole_content_data_start',
	$page_title_whole_content_data_start
);

$page_title_whole_content_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_title_whole_content_start_custom_style',
	$page_title_whole_content_start_custom_style
);

$page_title_whole_content_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_end',
	$page_title_whole_content_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_whole_content_data_end = new BorderlandElatedField(
	'textsimple',
	'page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_title_whole_content_data_end',
	$page_title_whole_content_data_end
);

$page_title_whole_content_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_title_whole_content_end_custom_style',
	$page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_title_contaier = new BorderlandElatedContainerNoStyle(
	'animation_page_title_contaier',
	'show_page_title_text',
	'no'
);
$panel9->addChild(
	'animation_page_title_contaier',
	$animation_page_title_contaier
);

$page_title_animations = new BorderlandElatedField(
	'yesno',
	'page_title_animations',
	'no',
	esc_html__( 'Enable Page Title Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_animations_container'
	)
);
$animation_page_title_contaier->addChild(
	'page_title_animations',
	$page_title_animations
);

$page_title_animations_container = new BorderlandElatedContainer(
	'page_title_animations_container',
	'page_title_animations',
	'no'
);
$animation_page_title_contaier->addChild(
	'page_title_animations_container',
	$page_title_animations_container
);

$page_title_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_start',
	$page_title_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_data_start = new BorderlandElatedField(
	'textsimple',
	'page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_title_data_start',
	$page_title_data_start
);

$page_title_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_title_start_custom_style',
	$page_title_start_custom_style
);

$page_title_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_end',
	$page_title_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_data_end = new BorderlandElatedField(
	'textsimple',
	'page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_title_data_end',
	$page_title_data_end
);

$page_title_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_title_end_custom_style',
	$page_title_end_custom_style
);

//Title Separator Animations
$animation_page_title_separator_container = new BorderlandElatedContainerNoStyle(
	'animation_page_title_separator_container',
	'title_separator',
	'no'
);
$panel9->addChild(
	'animation_page_title_separator_container',
	$animation_page_title_separator_container
);

$page_title_separator_animations = new BorderlandElatedField(
	'yesno',
	'page_title_separator_animations',
	'no',
	esc_html__( 'Enable Page Separator Title Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_separator_animations_container'
	)
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations',
	$page_title_separator_animations
);

$page_title_separator_animations_container = new BorderlandElatedContainer(
	'page_title_separator_animations_container',
	'page_title_separator_animations',
	'no'
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations_container',
	$page_title_separator_animations_container
);

$page_title_separator_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_start',
	$page_title_separator_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_separator_data_start = new BorderlandElatedField(
	'textsimple',
	'page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_title_separator_data_start',
	$page_title_separator_data_start
);

$page_title_separator_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_title_separator_start_custom_style',
	$page_title_separator_start_custom_style
);

$page_title_separator_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_end',
	$page_title_separator_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_separator_data_end = new BorderlandElatedField(
	'textsimple',
	'page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_title_separator_data_end',
	$page_title_separator_data_end
);

$page_title_separator_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_title_separator_end_custom_style',
	$page_title_separator_end_custom_style
);

//Subtitle Animations
$page_subtitle_animations = new BorderlandElatedField(
	'yesno',
	'page_subtitle_animations',
	'no',
	esc_html__( 'Enable Page Subtitle Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_subtitle_animations_container'
	)
);
$panel9->addChild(
	'page_subtitle_animations',
	$page_subtitle_animations
);

$page_subtitle_animations_container = new BorderlandElatedContainer(
	'page_subtitle_animations_container',
	'page_subtitle_animations',
	'no'
);
$panel9->addChild(
	'page_subtitle_animations_container',
	$page_subtitle_animations_container
);

$page_subtitle_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_start',
	$page_subtitle_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_subtitle_data_start = new BorderlandElatedField(
	'textsimple',
	'page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_subtitle_data_start',
	$page_subtitle_data_start
);

$page_subtitle_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_subtitle_start_custom_style',
	$page_subtitle_start_custom_style
);

$page_subtitle_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_end',
	$page_subtitle_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_subtitle_data_end = new BorderlandElatedField(
	'textsimple',
	'page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_subtitle_data_end',
	$page_subtitle_data_end
);

$page_subtitle_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_subtitle_end_custom_style',
	$page_subtitle_end_custom_style
);

//Graphic Animations
$page_title_graphic_animations = new BorderlandElatedField(
	'yesno',
	'page_title_graphic_animations',
	'no',
	esc_html__( 'Enable Page Title Graphic Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_graphic_animations_container'
	)
);
$panel9->addChild(
	'page_title_graphic_animations',
	$page_title_graphic_animations
);

$page_title_graphic_animations_container = new BorderlandElatedContainer(
	'page_title_graphic_animations_container',
	'page_title_graphic_animations',
	'no'
);
$panel9->addChild(
	'page_title_graphic_animations_container',
	$page_title_graphic_animations_container
);

$page_title_graphic_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_title_graphic_animations_container->addChild(
	'page_title_graphic_animations_data_start',
	$page_title_graphic_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_graphic_data_start = new BorderlandElatedField(
	'textsimple',
	'page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_title_graphic_data_start',
	$page_title_graphic_data_start
);

$page_title_graphic_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_title_graphic_start_custom_style',
	$page_title_graphic_start_custom_style
);

$page_title_graphic_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_title_graphic_animations_container->addChild(
	'$page_title_graphic_animations_data_end',
	$page_title_graphic_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_graphic_data_end = new BorderlandElatedField(
	'textsimple',
	'page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_title_graphic_data_end',
	$page_title_graphic_data_end
);

$page_title_graphic_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_title_graphic_end_custom_style',
	$page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_title_breadcrumbs_container = new BorderlandElatedContainerNoStyle(
	'animation_page_title_breadcrumbs_container',
	'enable_breadcrumbs',
	'no'
);
$panel9->addChild(
	'animation_page_title_breadcrumbs_container',
	$animation_page_title_breadcrumbs_container
);

$page_title_breadcrumbs_animations = new BorderlandElatedField(
	'yesno',
	'page_title_breadcrumbs_animations',
	'no',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'borderland' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'borderland' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#eltdf_page_title_breadcrumbs_animations_container'
	)
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations',
	$page_title_breadcrumbs_animations
);

$page_title_breadcrumbs_animations_container = new BorderlandElatedContainer(
	'page_title_breadcrumbs_animations_container',
	'page_title_breadcrumbs_animations',
	'no'
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations_container',
	$page_title_breadcrumbs_animations_container
);

$page_title_breadcrumbs_animations_data_start = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation Start Point', 'borderland' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'borderland' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_start',
	$page_title_breadcrumbs_animations_data_start
);

$row1 = new BorderlandElatedRow();
$page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_breadcrumbs_data_start = new BorderlandElatedField(
	'textsimple',
	'page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row1->addChild(
	'page_title_breadcrumbs_data_start',
	$page_title_breadcrumbs_data_start
);

$page_title_breadcrumbs_start_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row1->addChild(
	'page_title_breadcrumbs_start_custom_style',
	$page_title_breadcrumbs_start_custom_style
);

$page_title_breadcrumbs_animations_data_end = new BorderlandElatedGroup(
	esc_html__( 'Scrolling Animation End Point', 'borderland' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'borderland' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_end',
	$page_title_breadcrumbs_animations_data_end
);

$row2 = new BorderlandElatedRow();
$page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_breadcrumbs_data_end = new BorderlandElatedField(
	'textsimple',
	'page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'borderland' )
);
$row2->addChild(
	'page_title_breadcrumbs_data_end',
	$page_title_breadcrumbs_data_end
);

$page_title_breadcrumbs_end_custom_style = new BorderlandElatedField(
	'textareasimple',
	'page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'borderland' )
);
$row2->addChild(
	'page_title_breadcrumbs_end_custom_style',
	$page_title_breadcrumbs_end_custom_style
);