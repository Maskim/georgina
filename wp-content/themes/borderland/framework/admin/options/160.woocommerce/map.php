<?php

$woocommercePage = new BorderlandElatedAdminPage(
	"19",
	esc_html__( "WooCommerce", 'borderland' ),
	"fa fa-shopping-cart"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"woocommerce",
	$woocommercePage
);

// General
$panel3 = new BorderlandElatedPanel(
	esc_html__( "General", 'borderland' ),
	"general_panel"
);
$woocommercePage->addChild(
	"panel3",
	$panel3
);

$text_input_field_subtitle = new BorderlandElatedTitle(
	"text_input_field_subtitle",
	esc_html__( "Text Input Fields", 'borderland' )
);
$panel3->addChild(
	"text_input_field_subtitle",
	$text_input_field_subtitle
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Text Input Fields Text Style", 'borderland' ),
	esc_html__( "Define text input fields style in Cart, Checkout, My Account", 'borderland' )
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

$woo_input_text_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_input_text_color",
	$woo_input_text_color
);

$woo_input_focus_text_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'borderland' )
);
$row1->addChild(
	"woo_input_focus_text_color",
	$woo_input_focus_text_color
);

$group16 = new BorderlandElatedGroup(
	esc_html__( "Text Input Fields Background", 'borderland' ),
	esc_html__( "Define text input fields background", 'borderland' )
);
$panel3->addChild(
	"group16",
	$group16
);

$row1 = new BorderlandElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$woo_input_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_input_background_color",
	$woo_input_background_color
);

$woo_input_focus_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'borderland' )
);
$row1->addChild(
	"woo_input_focus_background_color",
	$woo_input_focus_background_color
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Text Input Fields Border", 'borderland' ),
	esc_html__( "Define text input fields border", 'borderland' )
);
$panel3->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$woo_input_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_input_border_color",
	$woo_input_border_color
);

$woo_input_focus_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'borderland' )
);
$row1->addChild(
	"woo_input_focus_border_color",
	$woo_input_focus_border_color
);

$woo_input_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_input_border_width",
	$woo_input_border_width
);

//Button

$button_all_shop_pages = new BorderlandElatedTitle(
	"button_all_shop_pages",
	esc_html__( "Buttons", 'borderland' )
);
$panel3->addChild(
	"button_all_shop_pages",
	$button_all_shop_pages
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Button Text Style", 'borderland' ),
	esc_html__( "Define button text style for all shop pages", 'borderland' )
);
$panel3->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_color",
	$woo_products_list_add_to_cart_color
);

$woo_products_list_add_to_cart_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_font_size",
	$woo_products_list_add_to_cart_font_size
);

$woo_products_list_add_to_cart_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_line_height",
	$woo_products_list_add_to_cart_line_height
);

$woo_products_list_add_to_cart_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_text_transform",
	$woo_products_list_add_to_cart_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$woo_products_list_add_to_cart_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_list_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_family",
	$woo_products_list_add_to_cart_font_family
);

$woo_products_list_add_to_cart_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_style",
	$woo_products_list_add_to_cart_font_style
);

$woo_products_list_add_to_cart_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_list_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_font_weight",
	$woo_products_list_add_to_cart_font_weight
);

$woo_products_list_add_to_cart_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_list_add_to_cart_letter_spacing",
	$woo_products_list_add_to_cart_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$woo_products_list_add_to_cart_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_hover_color",
	$woo_products_list_add_to_cart_hover_color
);

$woo_products_list_add_to_cart_padding = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_padding",
	"",
	esc_html__( "Padding Left/Right (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_list_add_to_cart_padding",
	$woo_products_list_add_to_cart_padding
);

$row4 = new BorderlandElatedRow( true );
$group8->addChild(
	"row4",
	$row4
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Button Background", 'borderland' ),
	esc_html__( "Define button background", 'borderland' )
);
$panel3->addChild(
	"group14",
	$group14
);

$row1 = new BorderlandElatedRow();
$group14->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_color",
	$woo_products_list_add_to_cart_background_color
);

$woo_products_list_add_to_cart_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_background_hover_color",
	$woo_products_list_add_to_cart_background_hover_color
);

$group15 = new BorderlandElatedGroup(
	esc_html__( "Button Border", 'borderland' ),
	esc_html__( "Define button border", 'borderland' )
);
$panel3->addChild(
	"group15",
	$group15
);

$row1 = new BorderlandElatedRow();
$group15->addChild(
	"row1",
	$row1
);

$woo_products_list_add_to_cart_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_color",
	$woo_products_list_add_to_cart_border_color
);

$woo_products_list_add_to_cart_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_list_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_hover_color",
	$woo_products_list_add_to_cart_border_hover_color
);

$woo_products_list_add_to_cart_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_width",
	$woo_products_list_add_to_cart_border_width
);

$woo_products_list_add_to_cart_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_list_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_list_add_to_cart_border_radius",
	$woo_products_list_add_to_cart_border_radius
);

$wocommerce_messages_style_title = new BorderlandElatedTitle(
	"wocommerce_messages_style_title",
	esc_html__( "Message", 'borderland' )
);
$panel3->addChild(
	"wocommerce_messages_style_title",
	$wocommerce_messages_style_title
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Message Box Style", 'borderland' ),
	esc_html__( "Define message box style for all shop pages", 'borderland' )
);
$panel3->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$woo_message_box_text_color = new BorderlandElatedField(
	"colorsimple",
	"woo_message_box_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_message_box_text_color",
	$woo_message_box_text_color
);

$woo_message_box_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_message_box_font_size",
	"",
	esc_html__( "Font Size", 'borderland' )
);
$row1->addChild(
	"woo_message_box_font_size",
	$woo_message_box_font_size
);

$woo_message_box_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_message_box_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_message_box_background_color",
	$woo_message_box_background_color
);

$woo_message_box_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_message_box_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_message_box_border_color",
	$woo_message_box_border_color
);

//Product list styles

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Product List", 'borderland' ),
	"product_list_panel"
);
$woocommercePage->addChild(
	"panel1",
	$panel1
);

//Use full-width template

$woo_products_enable_full_width_template = new BorderlandElatedField(
	"yesno",
	"woo_products_enable_full_width_template",
	"no",
	esc_html__( "Enable Full Width Template", 'borderland' ),
	esc_html__( "Enabling this option will enable full width template for shop page", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_full_width_template_container"
	)
);
$panel1->addChild(
	"woo_products_enable_full_width_template",
	$woo_products_enable_full_width_template
);

$enable_full_width_template_container = new BorderlandElatedContainer(
	"enable_full_width_template_container",
	"woo_products_enable_full_width_template",
	"no"
);
$panel1->addChild(
	"enable_full_width_template_container",
	$enable_full_width_template_container
);

$woo_full_width_margin_left = new BorderlandElatedField(
	"text",
	"woo_full_width_margin_left",
	"",
	esc_html__( "Full Width Template Left Margin", 'borderland' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_left",
	$woo_full_width_margin_left
);

$woo_full_width_margin_right = new BorderlandElatedField(
	"text",
	"woo_full_width_margin_right",
	"",
	esc_html__( "Full Width Template Right Margin", 'borderland' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$enable_full_width_template_container->addChild(
	"woo_full_width_margin_right",
	$woo_full_width_margin_right
);

//Use full-width template

$woo_products_disable_space_between_products = new BorderlandElatedField(
	"yesno",
	"woo_products_disable_space_between_products",
	"no",
	esc_html__( "Disable Space Between Products", 'borderland' ),
	esc_html__( "Enabling this option will disable space between products", 'borderland' )
);
$panel1->addChild(
	"woo_products_disable_space_between_products",
	$woo_products_disable_space_between_products
);

//Product per page

$woo_products_per_page = new BorderlandElatedField(
	"text",
	"woo_products_per_page",
	"",
	esc_html__( "Number Of Product Per Page", 'borderland' ),
	esc_html__( "Set number of products on shop page.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_per_page",
	$woo_products_per_page
);

$woo_products_list_margin_top = new BorderlandElatedField(
	"text",
	"woo_products_list_margin_top",
	"",
	esc_html__( "Product List Margin Top ", 'borderland' ),
	esc_html__( "Set margin top for product list.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_list_margin_top",
	$woo_products_list_margin_top
);

//Products list type

$woo_products_list_type = new BorderlandElatedField(
	"select",
	"woo_products_list_type",
	"type1",
	esc_html__( "Product List Style", 'borderland' ),
	esc_html__( "Choose layout for displaying product listing", 'borderland' ),
	array(
		"type1" => esc_html__( "Simple", 'borderland' ),
		"type2" => esc_html__( "Long Description", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"type2" => "#eltdf_woo_products_enable_item_borders_container",
		),
		"show"       => array(
			"type1" => "#eltdf_woo_products_enable_item_borders_container"
		)
	)
);
$panel1->addChild(
	"woo_products_list_type",
	$woo_products_list_type
);

$woo_products_enable_item_borders_container = new BorderlandElatedContainer(
	"woo_products_enable_item_borders_container",
	"woo_products_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_item_borders_container",
	$woo_products_enable_item_borders_container
);

$woo_products_enable_item_borders = new BorderlandElatedField(
	"yesno",
	"woo_products_enable_item_borders",
	"no",
	esc_html__( "Enable Borders Around Item", 'borderland' ),
	esc_html__( "Enable this option and choose to display borders around item's box or image", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_products_item_borders_container"
	)
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_enable_item_borders",
	$woo_products_enable_item_borders
);

$woo_products_item_borders_container = new BorderlandElatedContainer(
	"woo_products_item_borders_container",
	"woo_products_enable_item_borders",
	"no"
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_item_borders_container",
	$woo_products_item_borders_container
);

$woo_products_item_borders_style = new BorderlandElatedField(
	"select",
	"woo_products_item_borders_style",
	"around_item",
	esc_html__( "Display Borders Around", 'borderland' ),
	esc_html__( "Choose to display borders around the item's box or image", 'borderland' ),
	array(
		"around_item" => esc_html__( "Item Box", 'borderland' ),
		"around_image" => esc_html__( "Image", 'borderland' )
	
	)
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_style",
	$woo_products_item_borders_style
);

$woo_products_item_borders_color = new BorderlandElatedField(
	"color",
	"woo_products_item_borders_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose a color for the item borders", 'borderland' )
);
$woo_products_item_borders_container->addChild(
	"woo_products_item_borders_color",
	$woo_products_item_borders_color
);

$woo_products_enable_lighbox_icon = new BorderlandElatedField(
	"yesno",
	"woo_products_enable_lighbox_icon",
	"yes",
	esc_html__( "Enable Lightbox Icon", 'borderland' ),
	esc_html__( "Enabling this option will show lighbox icon on product list", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_products_item_lightbox_icon_container"
	)
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_enable_lighbox_icon",
	$woo_products_enable_lighbox_icon
);

$woo_products_item_lightbox_icon_container = new BorderlandElatedContainer(
	"woo_products_item_lightbox_icon_container",
	"woo_products_enable_lighbox_icon",
	"no"
);
$woo_products_enable_item_borders_container->addChild(
	"woo_products_item_lightbox_icon_container",
	$woo_products_item_lightbox_icon_container
);

$woo_products_lightbox_icon_color = new BorderlandElatedField(
	"color",
	"woo_products_lightbox_icon_color",
	"",
	esc_html__( "Lightbox Icon Color", 'borderland' ),
	esc_html__( "Define color for lightbox icon", 'borderland' )
);
$woo_products_item_lightbox_icon_container->addChild(
	"woo_products_lightbox_icon_color",
	$woo_products_lightbox_icon_color
);

$woo_products_hover_list_type = new BorderlandElatedField(
	"select",
	"woo_products_hover_list_type",
	"hover_type1",
	esc_html__( "Product Hover Style", 'borderland' ),
	esc_html__( "Choose hover style for products in products list", 'borderland' ),
	array(
		"hover_type1" => esc_html__( "Add to cart button", 'borderland' ),
		"hover_type2" => esc_html__( "Add to cart icon", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover_type2" => "#eltdf_woo_products_enable_button_icons_container"
		),
		"show"       => array(
			"hover_type1" => "#eltdf_woo_products_enable_button_icons_container"
		)
	)
);
$panel1->addChild(
	"woo_products_hover_list_type",
	$woo_products_hover_list_type
);

$woo_products_enable_button_icons_container = new BorderlandElatedContainer(
	"woo_products_enable_button_icons_container",
	"woo_products_hover_list_type",
	""
);
$panel1->addChild(
	"woo_products_enable_button_icons_container",
	$woo_products_enable_button_icons_container
);

$woo_products_enable_button_icons = new BorderlandElatedField(
	"yesno",
	"woo_products_enable_button_icons",
	"no",
	esc_html__( "Enable Icons in Add to Cart Button", 'borderland' ),
	esc_html__( "Enabling this option will display icons in Add to Cart button", 'borderland' )
);
$woo_products_enable_button_icons_container->addChild(
	"woo_products_enable_button_icons",
	$woo_products_enable_button_icons
);

$woo_products_list_number = new BorderlandElatedField(
	"select",
	"woo_products_list_number",
	"columns-3",
	esc_html__( "Product List and Related Products Columns Number", 'borderland' ),
	esc_html__( "Choose number of columns for product listing and related products on single product", 'borderland' ),
	array(
		"columns-3" => esc_html__( "3 Columns (2 with sidebar)", 'borderland' ),
		"columns-4" => esc_html__( "4 Columns (3 with sidebar)", 'borderland' )
	)
);

$panel1->addChild(
	"woo_products_list_number",
	$woo_products_list_number
);

//Product box
$woo_products_box_text_align = new BorderlandElatedField(
	"select",
	"woo_products_box_text_align",
	"left",
	esc_html__( "Product Info Text Alignment", 'borderland' ),
	esc_html__( "Specify products text alignment in product listing", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$panel1->addChild(
	"woo_products_box_text_align",
	$woo_products_box_text_align
);

$woo_products_item_info_box_background_color = new BorderlandElatedField(
	"color",
	"woo_products_item_info_box_background_color",
	"",
	esc_html__( "Product Info Background Color", 'borderland' ),
	esc_html__( "Define background color for product info box", 'borderland' )
);
$panel1->addChild(
	"woo_products_item_info_box_background_color",
	$woo_products_item_info_box_background_color
);

$woo_products_item_info_box_padding = new BorderlandElatedField(
	"text",
	"woo_products_item_info_box_padding",
	"",
	esc_html__( "Product Info Box Padding", 'borderland' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_info_box_padding",
	$woo_products_item_info_box_padding
);

$woo_products_item_info_box_border = new BorderlandElatedField(
	"yesno",
	"woo_products_item_info_box_border",
	"no",
	esc_html__( "Enable Right Separator for Product Info Box", 'borderland' ),
	esc_html__( "Enabling this option will show right separator for product info box.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#eltdf_woo_products_item_info_box_container",
		"dependence_hide_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_item_info_box_border",
	$woo_products_item_info_box_border
);

$woo_products_item_info_box_container = new BorderlandElatedContainer(
	"woo_products_item_info_box_container",
	"woo_products_item_info_box_border",
	"no"
);
$panel1->addChild(
	"woo_products_item_info_box_container",
	$woo_products_item_info_box_container
);

$group_product_box_info = new BorderlandElatedGroup(
	esc_html__( "Product Box Info Border Styles ", 'borderland' ),
	esc_html__( "Define box info border styles", 'borderland' )
);
$woo_products_item_info_box_container->addChild(
	"group_product_box_info",
	$group_product_box_info
);

$row1 = new BorderlandElatedRow();
$group_product_box_info->addChild(
	"row1",
	$row1
);

$woo_products_box_info_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_box_info_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_box_info_border_width",
	$woo_products_box_info_border_width
);

$woo_products_box_info_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_box_info_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_box_info_border_color",
	$woo_products_box_info_border_color
);

$woo_products_item_shader_color = new BorderlandElatedField(
	"color",
	"woo_products_item_shader_color",
	"",
	esc_html__( "Shader Background Color", 'borderland' ),
	esc_html__( "Choose a background color for the shader of hovered item", 'borderland' )
);
$panel1->addChild(
	"woo_products_item_shader_color",
	$woo_products_item_shader_color
);

$woo_products_item_shader_opacity = new BorderlandElatedField(
	"text",
	"woo_products_item_shader_opacity",
	"",
	esc_html__( "Shader Background Opacity", 'borderland' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_products_item_shader_opacity",
	$woo_products_item_shader_opacity
);

$woo_product_out_of_stock_shader_color = new BorderlandElatedField(
	"color",
	"woo_product_out_of_stock_shader_color",
	"",
	esc_html__( "Shader Background Color for Out of Stock Products", 'borderland' ),
	esc_html__( "Choose a background color for the shader of hovered item", 'borderland' )
);
$panel1->addChild(
	"woo_product_out_of_stock_shader_color",
	$woo_product_out_of_stock_shader_color
);

$woo_product_out_of_stock_shader_opacity = new BorderlandElatedField(
	"text",
	"woo_product_out_of_stock_shader_opacity",
	"",
	esc_html__( "Shader Background Opacity for Out of Stock Products", 'borderland' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"woo_product_out_of_stock_shader_opacity",
	$woo_product_out_of_stock_shader_opacity
);

//Product category
$woo_products_category_hide_category = new BorderlandElatedField(
	"yesno",
	"woo_products_category_hide_category",
	"no",
	esc_html__( "Hide Product Category", 'borderland' ),
	esc_html__( "Enabling this option will hide product category.", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_woo_products_hide_category_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_category_hide_category",
	$woo_products_category_hide_category
);

$woo_products_hide_category_container = new BorderlandElatedContainer(
	"woo_products_hide_category_container",
	"woo_products_category_hide_category",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_category_container",
	$woo_products_hide_category_container
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Product Category Text Style", 'borderland' ),
	esc_html__( "Define product category text style", 'borderland' )
);
$woo_products_hide_category_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$woo_products_category_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_category_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_category_color",
	$woo_products_category_color
);

$woo_products_category_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_category_font_size",
	$woo_products_category_font_size
);

$woo_products_category_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_category_line_height",
	$woo_products_category_line_height
);

$woo_products_category_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_category_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_category_text_transform",
	$woo_products_category_text_transform
);

$row2 = new BorderlandElatedRow();
$group2->addChild(
	"row2",
	$row2
);

$woo_products_category_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_category_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_category_font_family",
	$woo_products_category_font_family
);

$woo_products_category_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_category_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_category_font_style",
	$woo_products_category_font_style
);

$woo_products_category_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_category_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_category_font_weight",
	$woo_products_category_font_weight
);

$woo_products_category_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_category_letter_spacing",
	$woo_products_category_letter_spacing
);

$woo_products_title_separator_hide_title_separator = new BorderlandElatedField(
	"yesno",
	"woo_products_title_separator_hide_title_separator",
	"no",
	esc_html__( "Hide Separator in Product Title ", 'borderland' ),
	esc_html__( "Enabling this option will hide product title separator", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_woo_products_hide_title_separator_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"woo_products_title_separator_hide_title_separator",
	$woo_products_title_separator_hide_title_separator
);

$woo_products_hide_title_separator_container = new BorderlandElatedContainer(
	"woo_products_hide_title_separator_container",
	"woo_products_title_separator_hide_title_separator",
	"yes"
);
$panel1->addChild(
	"woo_products_hide_title_separator_container",
	$woo_products_hide_title_separator_container
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Separator Styles", 'borderland' ),
	esc_html__( "Define style for product title separator ", 'borderland' )
);
$woo_products_hide_title_separator_container->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_products_title_separator_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_title_separator_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"woo_products_title_separator_color",
	$woo_products_title_separator_color
);

$woo_products_title_separator_style = new BorderlandElatedField(
	"selectsimple",
	"woo_products_title_separator_style",
	"solid",
	esc_html__( "Style", 'borderland' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' )
	)
);
$row1->addChild(
	"woo_products_title_separator_style",
	$woo_products_title_separator_style
);

$woo_products_title_separator_margin_top = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_separator_margin_top",
	"",
	esc_html__( "Margin Top (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_title_separator_margin_top",
	$woo_products_title_separator_margin_top
);

$woo_products_title_separator_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_separator_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_title_separator_margin_bottom",
	$woo_products_title_separator_margin_bottom
);

//Product title

$group3 = new BorderlandElatedGroup(
	esc_html__( "Product Title", 'borderland' ),
	esc_html__( "Define product title text style", 'borderland' )
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

$woo_products_title_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_title_color",
	$woo_products_title_color
);

$woo_products_title_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_title_font_size",
	$woo_products_title_font_size
);

$woo_products_title_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_title_line_height",
	$woo_products_title_line_height
);

$woo_products_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_title_text_transform",
	$woo_products_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_products_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_title_font_family",
	$woo_products_title_font_family
);

$woo_products_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_title_font_style",
	$woo_products_title_font_style
);

$woo_products_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_title_font_weight",
	$woo_products_title_font_weight
);

$woo_products_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_title_letter_spacing",
	$woo_products_title_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$woo_products_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row3->addChild(
	"woo_products_title_hover_color",
	$woo_products_title_hover_color
);

$woo_products_title_line_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"woo_products_title_line_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_title_line_margin_bottom",
	$woo_products_title_line_margin_bottom
);

//Product price	

$group4 = new BorderlandElatedGroup(
	esc_html__( "Product Price", 'borderland' ),
	esc_html__( "Define product price text style", 'borderland' )
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

$woo_products_price_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_price_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_price_color",
	$woo_products_price_color
);

$woo_products_price_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_price_font_size",
	$woo_products_price_font_size
);

$woo_products_price_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_price_line_height",
	$woo_products_price_line_height
);

$woo_products_price_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_price_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_price_text_transform",
	$woo_products_price_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_products_price_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_price_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_price_font_family",
	$woo_products_price_font_family
);

$woo_products_price_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_price_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_price_font_style",
	$woo_products_price_font_style
);

$woo_products_price_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_price_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_price_font_weight",
	$woo_products_price_font_weight
);

$woo_products_price_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_price_letter_spacing",
	$woo_products_price_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_products_price_old_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_price_old_font_size",
	$woo_products_price_old_font_size
);

$woo_products_price_old_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_price_old_color",
	"",
	esc_html__( "Old Price Color", 'borderland' )
);
$row3->addChild(
	"woo_products_price_old_color",
	$woo_products_price_old_color
);

//Product sale

$group5 = new BorderlandElatedGroup(
	esc_html__( "Product Sale", 'borderland' ),
	esc_html__( "Define product sale text style", 'borderland' )
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

$woo_products_sale_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sale_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sale_color",
	$woo_products_sale_color
);

$woo_products_sale_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_sale_font_size",
	$woo_products_sale_font_size
);

$woo_products_sale_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_sale_line_height",
	$woo_products_sale_line_height
);

$woo_products_sale_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sale_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_sale_text_transform",
	$woo_products_sale_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_products_sale_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_sale_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_sale_font_family",
	$woo_products_sale_font_family
);

$woo_products_sale_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sale_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_sale_font_style",
	$woo_products_sale_font_style
);

$woo_products_sale_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sale_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_sale_font_weight",
	$woo_products_sale_font_weight
);

$woo_products_sale_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_sale_letter_spacing",
	$woo_products_sale_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$woo_products_sale_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sale_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"woo_products_sale_background_color",
	$woo_products_sale_background_color
);

$woo_products_sale_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_sale_border_radius",
	$woo_products_sale_border_radius
);

$woo_products_sale_top_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_top_position",
	"",
	esc_html__( "Top Position (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_sale_top_position",
	$woo_products_sale_top_position
);

$woo_products_sale_left_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_left_position",
	"",
	esc_html__( "Left Position (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_sale_left_position",
	$woo_products_sale_left_position
);

$row4 = new BorderlandElatedRow( true );
$group5->addChild(
	"row4",
	$row4
);

$woo_products_sale_right_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_right_position",
	"",
	esc_html__( "Right Position (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_sale_right_position",
	$woo_products_sale_right_position
);

$woo_products_sale_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_sale_width",
	$woo_products_sale_width
);

$woo_products_sale_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_sale_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_sale_height",
	$woo_products_sale_height
);

//Product out of stock

$group6 = new BorderlandElatedGroup(
	esc_html__( 'Product "Out Of Stock"', 'borderland' ),
	esc_html__( "Define 'Out Of Stock' text style", 'borderland' )
);
$panel1->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$woo_products_out_of_stock_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_out_of_stock_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_out_of_stock_color",
	$woo_products_out_of_stock_color
);

$woo_products_out_of_stock_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_out_of_stock_font_size",
	$woo_products_out_of_stock_font_size
);

$woo_products_out_of_stock_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_out_of_stock_line_height",
	$woo_products_out_of_stock_line_height
);

$woo_products_out_of_stock_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_out_of_stock_text_transform",
	$woo_products_out_of_stock_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_out_of_stock_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_out_of_stock_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_family",
	$woo_products_out_of_stock_font_family
);

$woo_products_out_of_stock_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_style",
	$woo_products_out_of_stock_font_style
);

$woo_products_out_of_stock_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_out_of_stock_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_out_of_stock_font_weight",
	$woo_products_out_of_stock_font_weight
);

$woo_products_out_of_stock_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_out_of_stock_letter_spacing",
	$woo_products_out_of_stock_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_out_of_stock_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_out_of_stock_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"woo_products_out_of_stock_background_color",
	$woo_products_out_of_stock_background_color
);

$woo_products_out_of_stock_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_out_of_stock_border_radius",
	$woo_products_out_of_stock_border_radius
);

$woo_products_out_of_stock_top_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_top_position",
	"",
	esc_html__( "Top Position (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_out_of_stock_top_position",
	$woo_products_out_of_stock_top_position
);

$woo_products_out_of_stock_left_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_left_position",
	"",
	esc_html__( "Left Position (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_out_of_stock_left_position",
	$woo_products_out_of_stock_left_position
);

$row4 = new BorderlandElatedRow( true );
$group6->addChild(
	"row4",
	$row4
);

$woo_products_out_of_stock_right_position = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_right_position",
	"",
	esc_html__( "Right Position (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_out_of_stock_right_position",
	$woo_products_out_of_stock_right_position
);

$woo_products_out_of_stock_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_out_of_stock_width",
	$woo_products_out_of_stock_width
);

$woo_products_out_of_stock_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_out_of_stock_height",
	"",
	esc_html__( "Height (px)", 'borderland' )
);
$row4->addChild(
	"woo_products_out_of_stock_height",
	$woo_products_out_of_stock_height
);

//Pricing Filter

$group9 = new BorderlandElatedGroup(
	esc_html__( "Price Filter Colors", 'borderland' ),
	esc_html__( "Define colors in price filter", 'borderland' )
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

$woo_products_price_filter_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_price_filter_background_color",
	"",
	esc_html__( "In Price Range", 'borderland' )
);
$row1->addChild(
	"woo_products_price_filter_background_color",
	$woo_products_price_filter_background_color
);

$woo_products_price_filter_background_active_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_price_filter_background_active_color",
	"",
	esc_html__( "Out Price Range", 'borderland' )
);
$row1->addChild(
	"woo_products_price_filter_background_active_color",
	$woo_products_price_filter_background_active_color
);

$woo_products_price_filter_arrows_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_price_filter_arrows_color",
	"",
	esc_html__( "Handles", 'borderland' )
);
$row1->addChild(
	"woo_products_price_filter_arrows_color",
	$woo_products_price_filter_arrows_color
);

$group7 = new BorderlandElatedGroup(
	esc_html__( 'Number of Results Text Style', 'borderland' ),
	esc_html__( "Define style for text showing the number of results in product list", 'borderland' )
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

$woo_products_sorting_result_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_result_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_result_color",
	$woo_products_sorting_result_color
);

$woo_products_sorting_result_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_sorting_result_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_result_font_size",
	$woo_products_sorting_result_font_size
);

$woo_products_sorting_result_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_sorting_result_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_result_line_height",
	$woo_products_sorting_result_line_height
);

$woo_products_sorting_result_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_products_sorting_result_text_transform",
	$woo_products_sorting_result_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$woo_products_sorting_result_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_sorting_result_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_sorting_result_font_family",
	$woo_products_sorting_result_font_family
);

$woo_products_sorting_result_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_sorting_result_font_style",
	$woo_products_sorting_result_font_style
);

$woo_products_sorting_result_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_sorting_result_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_sorting_result_font_weight",
	$woo_products_sorting_result_font_weight
);

$woo_products_sorting_result_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_sorting_result_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_products_sorting_result_letter_spacing",
	$woo_products_sorting_result_letter_spacing
);

//Products add to cart button

$products_add_to_cart_subtitle = new BorderlandElatedTitle(
	"products_add_to_cart_subtitle",
	esc_html__( 'Add to cart button', 'borderland' )
);
$panel1->addChild(
	"products_add_to_cart_subtitle",
	$products_add_to_cart_subtitle
);

$group14 = new BorderlandElatedGroup(
	esc_html__( "Button Text Style", 'borderland' ),
	esc_html__( "Define Add To Cart button text style", 'borderland' )
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

$woo_products_add_to_cart_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_color",
	$woo_products_add_to_cart_color
);

$woo_products_add_to_cart_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_hover_color",
	$woo_products_add_to_cart_hover_color
);

$woo_products_add_to_cart_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_font_size",
	$woo_products_add_to_cart_font_size
);

$woo_products_add_to_cart_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_line_height",
	$woo_products_add_to_cart_line_height
);

$row2 = new BorderlandElatedRow( true );
$group14->addChild(
	"row2",
	$row2
);

$woo_products_add_to_cart_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"woo_products_add_to_cart_text_transform",
	$woo_products_add_to_cart_text_transform
);

$woo_products_add_to_cart_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_family",
	$woo_products_add_to_cart_font_family
);

$woo_products_add_to_cart_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_style",
	$woo_products_add_to_cart_font_style
);

$woo_products_add_to_cart_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_add_to_cart_font_weight",
	$woo_products_add_to_cart_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group14->addChild(
	"row3",
	$row3
);

$woo_products_add_to_cart_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_add_to_cart_letter_spacing",
	$woo_products_add_to_cart_letter_spacing
);

$group27 = new BorderlandElatedGroup(
	esc_html__( 'Button Background', 'borderland' ),
	esc_html__( 'Define Add To Cart Button Background', 'borderland' )
);
$panel1->addChild(
	"group27",
	$group27
);

$row1 = new BorderlandElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_color",
	$woo_products_add_to_cart_background_color
);

$woo_products_add_to_cart_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_background_hover_color",
	$woo_products_add_to_cart_background_hover_color
);

$group28 = new BorderlandElatedGroup(
	esc_html__( 'Button Border', 'borderland' ),
	esc_html__( 'Define Add To Cart border', 'borderland' )
);
$panel1->addChild(
	"group28",
	$group28
);

$row1 = new BorderlandElatedRow();
$group28->addChild(
	"row1",
	$row1
);

$woo_products_add_to_cart_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_color",
	$woo_products_add_to_cart_border_color
);

$woo_products_add_to_cart_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_hover_color",
	$woo_products_add_to_cart_border_hover_color
);

$woo_products_add_to_cart_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_width",
	$woo_products_add_to_cart_border_width
);

$woo_products_add_to_cart_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_add_to_cart_border_radius",
	$woo_products_add_to_cart_border_radius
);

//Sorting Product List

$product_sorting = new BorderlandElatedTitle(
	"product_sorting",
	esc_html__( "Product Sorting Select Box", 'borderland' )
);
$panel1->addChild(
	"product_sorting",
	$product_sorting
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Select Box Text Style", 'borderland' ),
	esc_html__( "Define product sorting text style", 'borderland' )
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

$woo_products_sorting_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_color",
	$woo_products_sorting_color
);

$woo_products_sorting_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_hover_color",
	$woo_products_sorting_hover_color
);

// Sorting Background

$group12 = new BorderlandElatedGroup(
	esc_html__( "Select Box Background", 'borderland' ),
	esc_html__( "Define product sorting select box background", 'borderland' )
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

$woo_products_sorting_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_background_color",
	$woo_products_sorting_background_color
);

$woo_products_sorting_dropdown_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_dropdown_background_color",
	"",
	esc_html__( "Dropdown Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_dropdown_background_color",
	$woo_products_sorting_dropdown_background_color
);

// Sorting Border Style

$group13 = new BorderlandElatedGroup(
	esc_html__( "Select Box Border", 'borderland' ),
	esc_html__( "Define product sorting select box border", 'borderland' )
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

$woo_products_sorting_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_sorting_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_border_color",
	$woo_products_sorting_border_color
);

$woo_products_sorting_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_sorting_border_width",
	"",
	esc_html__( "Box Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_sorting_border_width",
	$woo_products_sorting_border_width
);

//Show Number of Results text

//Product single styles

$panel2 = new BorderlandElatedPanel(
	esc_html__( "Product Single", 'borderland' ),
	"product_single_panel"
);
$woocommercePage->addChild(
	"panel2",
	$panel2
);

//Product single title

$product_text_style = new BorderlandElatedTitle(
	"product_text_style",
	esc_html__( "Product Text Style", 'borderland' )
);
$panel2->addChild(
	"product_text_style",
	$product_text_style
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Product Single Title", 'borderland' ),
	esc_html__( "Define Product Single Title Style", 'borderland' )
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

$woo_product_single_title_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_title_color",
	$woo_product_single_title_color
);

$woo_product_single_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_title_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_title_hover_color",
	$woo_product_single_title_hover_color
);

$woo_product_single_title_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_title_font_size",
	$woo_product_single_title_font_size
);

$woo_product_single_title_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_title_line_height",
	$woo_product_single_title_line_height
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$woo_product_single_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"woo_product_single_title_text_transform",
	$woo_product_single_title_text_transform
);

$woo_product_single_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_title_font_family",
	$woo_product_single_title_font_family
);

$woo_product_single_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_title_font_style",
	$woo_product_single_title_font_style
);

$woo_product_single_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_title_font_weight",
	$woo_product_single_title_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group1->addChild(
	"row3",
	$row3
);

$woo_product_single_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"woo_product_single_title_letter_spacing",
	$woo_product_single_title_letter_spacing
);

//Product single meta title

$group2 = new BorderlandElatedGroup(
	esc_html__( "Product Single Meta Title", 'borderland' ),
	esc_html__( "Define Product Single Meta Title Style", 'borderland' )
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

$woo_product_single_meta_title_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_meta_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_title_color",
	$woo_product_single_meta_title_color
);

$woo_product_single_meta_title_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_title_font_size",
	$woo_product_single_meta_title_font_size
);

$woo_product_single_meta_title_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_title_line_height",
	$woo_product_single_meta_title_line_height
);

$woo_product_single_meta_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_product_single_meta_title_text_transform",
	$woo_product_single_meta_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_meta_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_family",
	$woo_product_single_meta_title_font_family
);

$woo_product_single_meta_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_style",
	$woo_product_single_meta_title_font_style
);

$woo_product_single_meta_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_meta_title_font_weight",
	$woo_product_single_meta_title_font_weight
);

$woo_product_single_meta_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_meta_title_letter_spacing",
	$woo_product_single_meta_title_letter_spacing
);

//Product single meta title

$group3 = new BorderlandElatedGroup(
	esc_html__( "Product Single Meta Info", 'borderland' ),
	esc_html__( "Define Product Single Meta Info Style", 'borderland' )
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

$woo_product_single_meta_info_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_meta_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_info_color",
	$woo_product_single_meta_info_color
);

$woo_product_single_meta_info_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_info_font_size",
	$woo_product_single_meta_info_font_size
);

$woo_product_single_meta_info_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_meta_info_line_height",
	$woo_product_single_meta_info_line_height
);

$woo_product_single_meta_info_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_product_single_meta_info_text_transform",
	$woo_product_single_meta_info_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$woo_product_single_meta_info_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_meta_info_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_family",
	$woo_product_single_meta_info_font_family
);

$woo_product_single_meta_info_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_style",
	$woo_product_single_meta_info_font_style
);

$woo_product_single_meta_info_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_meta_info_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_meta_info_font_weight",
	$woo_product_single_meta_info_font_weight
);

$woo_product_single_meta_info_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_meta_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_meta_info_letter_spacing",
	$woo_product_single_meta_info_letter_spacing
);
//Product single description title

$group_desc_title = new BorderlandElatedGroup(
	esc_html__( "Product Single Description Title", 'borderland' ),
	esc_html__( "Define Product Single Description Title", 'borderland' )
);
$panel2->addChild(
	"group_desc_title",
	$group_desc_title
);

$row1 = new BorderlandElatedRow();
$group_desc_title->addChild(
	"row1",
	$row1
);

$woo_product_single_desc_title_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_desc_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_desc_title_color",
	$woo_product_single_desc_title_color
);

$woo_product_single_desc_title_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_desc_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_desc_title_font_size",
	$woo_product_single_desc_title_font_size
);

$woo_product_single_desc_title_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_desc_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_desc_title_line_height",
	$woo_product_single_desc_title_line_height
);

$woo_product_single_desc_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_desc_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_product_single_desc_title_text_transform",
	$woo_product_single_desc_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group_desc_title->addChild(
	"row2",
	$row2
);

$woo_product_single_desc_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_desc_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_desc_title_font_family",
	$woo_product_single_desc_title_font_family
);

$woo_product_single_desc_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_desc_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_desc_title_font_style",
	$woo_product_single_desc_title_font_style
);

$woo_product_single_desc_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_desc_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_desc_title_font_weight",
	$woo_product_single_desc_title_font_weight
);

$woo_product_single_desc_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_desc_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_desc_title_letter_spacing",
	$woo_product_single_desc_title_letter_spacing
);

//Product single price 

$group4 = new BorderlandElatedGroup(
	esc_html__( "Product Single Price", 'borderland' ),
	esc_html__( "Define Product Single Price Style", 'borderland' )
);
$panel2->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$woo_product_single_price_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_price_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_price_color",
	$woo_product_single_price_color
);

$woo_product_single_price_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_price_font_size",
	$woo_product_single_price_font_size
);

$woo_product_single_price_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_price_line_height",
	$woo_product_single_price_line_height
);

$woo_product_single_price_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_price_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_product_single_price_text_transform",
	$woo_product_single_price_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$woo_product_single_price_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_price_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_price_font_family",
	$woo_product_single_price_font_family
);

$woo_product_single_price_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_price_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_price_font_style",
	$woo_product_single_price_font_style
);

$woo_product_single_price_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_price_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_price_font_weight",
	$woo_product_single_price_font_weight
);

$woo_product_single_price_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_price_letter_spacing",
	$woo_product_single_price_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$woo_product_single_price_old_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_price_old_font_size",
	"",
	esc_html__( "Old Price Font Size (px)", 'borderland' )
);
$row3->addChild(
	"woo_product_single_price_old_font_size",
	$woo_product_single_price_old_font_size
);

$woo_product_single_price_old_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_price_old_color",
	"",
	esc_html__( "Old Price Color", 'borderland' )
);
$row3->addChild(
	"woo_product_single_price_old_color",
	$woo_product_single_price_old_color
);

$woo_product_single_show_social_share = new BorderlandElatedField(
	"yesno",
	"woo_product_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'borderland' ),
	esc_html__( "Enabling this option will show share on Single Product", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_woo_product_single_share_options_container"
	)
);
$panel2->addChild(
	"woo_product_single_show_social_share",
	$woo_product_single_show_social_share
);

$woo_product_single_share_options_container = new BorderlandElatedContainer(
	"woo_product_single_share_options_container",
	"woo_product_single_show_social_share",
	"no"
);
$panel2->addChild(
	"woo_product_single_share_options_container",
	$woo_product_single_share_options_container
);

$woo_product_single_select_share_option = new BorderlandElatedField(
	"select",
	"woo_product_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'borderland' ),
	esc_html__( "Choose Social Share Style for Single Product", 'borderland' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'borderland' ),
		"list" => esc_html__( "Social Share List", 'borderland' )
	)
);
$woo_product_single_share_options_container->addChild(
	"woo_product_single_select_share_option",
	$woo_product_single_select_share_option
);

//Product single tabs/accordions

$woo_products_info_style = new BorderlandElatedField(
	"select",
	"woo_products_info_style",
	"accordions",
	esc_html__( "Product Info Display Style", 'borderland' ),
	esc_html__( "Choose to display product info with accordions right from product image or with vertical tabs below product image", 'borderland' ),
	array(
		"accordions" => esc_html__( "Accordions", 'borderland' ),
		"vertical_tabs" => esc_html__( "Vertical Tabs", 'borderland' )
	
	)
);

$panel2->addChild(
	"woo_products_info_style",
	$woo_products_info_style
);

//Product single accordions 

$group10 = new BorderlandElatedGroup(
	esc_html__( "Product Single Accordions", 'borderland' ),
	esc_html__( "Define Product Single Accordions Style", 'borderland' )
);
$panel2->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$woo_product_single_tabs_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_color",
	"",
	esc_html__( "Header Background Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_tabs_color",
	$woo_product_single_tabs_color
);

$woo_product_single_tabs_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_hover_color",
	"",
	esc_html__( "Header Hover Background Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_tabs_hover_color",
	$woo_product_single_tabs_hover_color
);

$woo_product_single_tabs_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_border_color",
	"",
	esc_html__( "Header Border Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_tabs_border_color",
	$woo_product_single_tabs_border_color
);

$woo_product_single_tabs_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_border_hover_color",
	"",
	esc_html__( "Header Hover Border Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_tabs_border_hover_color",
	$woo_product_single_tabs_border_hover_color
);

$row2 = new BorderlandElatedRow();
$group10->addChild(
	"row2",
	$row2
);

$woo_product_single_tabs_text_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row2->addChild(
	"woo_product_single_tabs_text_color",
	$woo_product_single_tabs_text_color
);

$woo_product_single_tabs_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row2->addChild(
	"woo_product_single_tabs_text_hover_color",
	$woo_product_single_tabs_text_hover_color
);

$woo_product_single_tabs_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_tabs_font_size",
	$woo_product_single_tabs_font_size
);

$woo_product_single_tabs_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_tabs_line_height",
	$woo_product_single_tabs_line_height
);

$row3 = new BorderlandElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$woo_product_single_tabs_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"woo_product_single_tabs_text_transform",
	$woo_product_single_tabs_text_transform
);

$woo_product_single_tabs_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row3->addChild(
	"woo_product_single_tabs_font_family",
	$woo_product_single_tabs_font_family
);

$woo_product_single_tabs_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"woo_product_single_tabs_font_style",
	$woo_product_single_tabs_font_style
);

$woo_product_single_tabs_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"woo_product_single_tabs_font_weight",
	$woo_product_single_tabs_font_weight
);

$row4 = new BorderlandElatedRow( true );
$group10->addChild(
	"row4",
	$row4
);

$woo_product_single_tabs_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row4->addChild(
	"woo_product_single_tabs_letter_spacing",
	$woo_product_single_tabs_letter_spacing
);

//Product single tabs 

$group11 = new BorderlandElatedGroup(
	esc_html__( "Product Single Tabs", 'borderland' ),
	esc_html__( "Define Product Single Tabs Style", 'borderland' )
);
$panel2->addChild(
	"group11",
	$group11
);

$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$woo_product_single_vertical_tabs_text_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_color",
	$woo_product_single_vertical_tabs_text_color
);

$woo_product_single_vertical_tabs_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_text_hover_color",
	$woo_product_single_vertical_tabs_text_hover_color
);

$woo_product_single_vertical_tabs_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_vertical_tabs_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_color",
	$woo_product_single_vertical_tabs_border_color
);

$woo_product_single_vertical_tabs_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_vertical_tabs_border_width",
	$woo_product_single_vertical_tabs_border_width
);

$row2 = new BorderlandElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$woo_product_single_vertical_tabs_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_size",
	$woo_product_single_vertical_tabs_font_size
);

$woo_product_single_vertical_tabs_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_line_height",
	$woo_product_single_vertical_tabs_line_height
);

$woo_product_single_vertical_tabs_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_text_transform",
	$woo_product_single_vertical_tabs_text_transform
);

$woo_product_single_vertical_tabs_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_vertical_tabs_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_vertical_tabs_font_family",
	$woo_product_single_vertical_tabs_font_family
);

$row3 = new BorderlandElatedRow( true );
$group11->addChild(
	"row3",
	$row3
);

$woo_product_single_vertical_tabs_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_style",
	$woo_product_single_vertical_tabs_font_style
);

$woo_product_single_vertical_tabs_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_vertical_tabs_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_font_weight",
	$woo_product_single_vertical_tabs_font_weight
);

$woo_product_single_vertical_tabs_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_vertical_tabs_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"woo_product_single_vertical_tabs_letter_spacing",
	$woo_product_single_vertical_tabs_letter_spacing
);

//Related Products Title

$group5 = new BorderlandElatedGroup(
	esc_html__( "Related Products Title", 'borderland' ),
	esc_html__( "Define Related Products Title Style", 'borderland' )
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

$woo_product_single_related_color = new BorderlandElatedField(
	"colorsimple",
	"woo_product_single_related_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_product_single_related_color",
	$woo_product_single_related_color
);

$woo_product_single_related_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_related_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_related_font_size",
	$woo_product_single_related_font_size
);

$woo_product_single_related_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_related_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_product_single_related_line_height",
	$woo_product_single_related_line_height
);

$woo_product_single_related_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_related_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"woo_product_single_related_text_transform",
	$woo_product_single_related_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$woo_product_single_related_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_product_single_related_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_product_single_related_font_family",
	$woo_product_single_related_font_family
);

$woo_product_single_related_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_related_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_product_single_related_font_style",
	$woo_product_single_related_font_style
);

$woo_product_single_related_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_product_single_related_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_product_single_related_font_weight",
	$woo_product_single_related_font_weight
);

$woo_product_single_related_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_product_single_related_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"woo_product_single_related_letter_spacing",
	$woo_product_single_related_letter_spacing
);

//Add to cart button

$add_to_cart_subtitle = new BorderlandElatedTitle(
	"add_to_cart_subtitle",
	esc_html__( 'Add to cart button', 'borderland' )
);
$panel2->addChild(
	"add_to_cart_subtitle",
	$add_to_cart_subtitle
);

$group6 = new BorderlandElatedGroup(
	esc_html__( 'Button Text Style', 'borderland' ),
	esc_html__( 'Define Add To Cart button text style', 'borderland' )
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

$woo_products_single_add_to_cart_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_color",
	$woo_products_single_add_to_cart_color
);

$woo_products_single_add_to_cart_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_hover_color",
	$woo_products_single_add_to_cart_hover_color
);

$woo_products_single_add_to_cart_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_font_size",
	$woo_products_single_add_to_cart_font_size
);

$woo_products_single_add_to_cart_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_line_height",
	$woo_products_single_add_to_cart_line_height
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$woo_products_single_add_to_cart_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_text_transform",
	$woo_products_single_add_to_cart_text_transform
);

$woo_products_single_add_to_cart_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"woo_products_single_add_to_cart_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_family",
	$woo_products_single_add_to_cart_font_family
);

$woo_products_single_add_to_cart_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_style",
	$woo_products_single_add_to_cart_font_style
);

$woo_products_single_add_to_cart_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"woo_products_single_add_to_cart_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"woo_products_single_add_to_cart_font_weight",
	$woo_products_single_add_to_cart_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$woo_products_single_add_to_cart_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_letter_spacing",
	$woo_products_single_add_to_cart_letter_spacing
);

$woo_products_single_add_to_cart_margin_left = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_margin_left",
	"",
	esc_html__( "Margin left (px)", 'borderland' )
);
$row3->addChild(
	"woo_products_single_add_to_cart_margin_left",
	$woo_products_single_add_to_cart_margin_left
);

$group18 = new BorderlandElatedGroup(
	esc_html__( 'Button Background', 'borderland' ),
	esc_html__( 'Define Add To Cart Button Background', 'borderland' )
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

$woo_products_single_add_to_cart_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_color",
	$woo_products_single_add_to_cart_background_color
);

$woo_products_single_add_to_cart_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_background_hover_color",
	$woo_products_single_add_to_cart_background_hover_color
);

$group19 = new BorderlandElatedGroup(
	esc_html__( 'Button Border', 'borderland' ),
	esc_html__( 'Define Add To Cart border', 'borderland' )
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

$woo_products_single_add_to_cart_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_color",
	$woo_products_single_add_to_cart_border_color
);

$woo_products_single_add_to_cart_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_add_to_cart_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_hover_color",
	$woo_products_single_add_to_cart_border_hover_color
);

$woo_products_single_add_to_cart_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_width",
	$woo_products_single_add_to_cart_border_width
);

$woo_products_single_add_to_cart_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_add_to_cart_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_add_to_cart_border_radius",
	$woo_products_single_add_to_cart_border_radius
);

//Quantity buttons

$quantity_subtitle = new BorderlandElatedTitle(
	"quantity_subtitle",
	esc_html__( 'Quantity Buttons', 'borderland' )
);
$panel2->addChild(
	"quantity_subtitle",
	$quantity_subtitle
);

$woo_products_single_quantity_button_space = new BorderlandElatedField(
	"yesno",
	"woo_products_single_quantity_button_space",
	"no",
	esc_html__( "Disable Space Between Buttons", 'borderland' ),
	esc_html__( "Enabling this option will disable space between quantity buttons", 'borderland' )
);
$panel2->addChild(
	"woo_products_single_quantity_button_space",
	$woo_products_single_quantity_button_space
);

$group27 = new BorderlandElatedGroup(
	esc_html__( 'Buttons Width', 'borderland' ),
	esc_html__( 'Define width for buttons', 'borderland' )
);
$panel2->addChild(
	"group27",
	$group27
);

$row1 = new BorderlandElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_width",
	$woo_products_single_quantity_width
);

$group20 = new BorderlandElatedGroup(
	esc_html__( 'Buttons Text Style', 'borderland' ),
	esc_html__( 'Define Quantity buttons text style', 'borderland' )
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

$woo_products_single_quantity_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_color",
	$woo_products_single_quantity_color
);

$woo_products_single_quantity_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_hover_color",
	"",
	esc_html__( "Hover Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_hover_color",
	$woo_products_single_quantity_hover_color
);

$woo_products_single_quantity_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_font_size",
	$woo_products_single_quantity_font_size
);

$woo_products_single_quantity_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_line_height",
	$woo_products_single_quantity_line_height
);

$group21 = new BorderlandElatedGroup(
	esc_html__( 'Buttons Background', 'borderland' ),
	esc_html__( 'Define Quantity buttons background', 'borderland' )
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

$woo_products_single_quantity_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_background_color",
	$woo_products_single_quantity_background_color
);

$woo_products_single_quantity_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_background_hover_color",
	"",
	esc_html__( "Hover Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_background_hover_color",
	$woo_products_single_quantity_background_hover_color
);

$group22 = new BorderlandElatedGroup(
	esc_html__( 'Buttons Border', 'borderland' ),
	esc_html__( 'Define Quantity buttons border', 'borderland' )
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

$woo_products_single_quantity_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_border_color",
	$woo_products_single_quantity_border_color
);

$woo_products_single_quantity_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_border_hover_color",
	$woo_products_single_quantity_border_hover_color
);

$woo_products_single_quantity_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_border_width",
	$woo_products_single_quantity_border_width
);

$woo_products_single_quantity_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_border_radius",
	$woo_products_single_quantity_border_radius
);

//Quantity input field

$quantity_input_subtitle = new BorderlandElatedTitle(
	"quantity_input_subtitle",
	esc_html__( 'Quantity Input Field', 'borderland' )
);
$panel2->addChild(
	"quantity_input_subtitle",
	$quantity_input_subtitle
);

$group26 = new BorderlandElatedGroup(
	esc_html__( 'Input Field Width', 'borderland' ),
	esc_html__( 'Define width for input field', 'borderland' )
);
$panel2->addChild(
	"group26",
	$group26
);

$row1 = new BorderlandElatedRow();
$group26->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_input_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_width",
	$woo_products_single_quantity_input_width
);

$group23 = new BorderlandElatedGroup(
	esc_html__( 'Input Text Style', 'borderland' ),
	esc_html__( 'Define Quantity Input Field text style', 'borderland' )
);
$panel2->addChild(
	"group23",
	$group23
);

$row1 = new BorderlandElatedRow();
$group23->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_color",
	$woo_products_single_quantity_input_color
);

$woo_products_single_quantity_input_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_hover_color",
	"",
	esc_html__( "Focus Text Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_hover_color",
	$woo_products_single_quantity_input_hover_color
);

$woo_products_single_quantity_input_font_size = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_input_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_font_size",
	$woo_products_single_quantity_input_font_size
);

$woo_products_single_quantity_input_line_height = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_input_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_line_height",
	$woo_products_single_quantity_input_line_height
);

$group24 = new BorderlandElatedGroup(
	esc_html__( 'Input Background', 'borderland' ),
	esc_html__( 'Define Quantity Input Field background', 'borderland' )
);
$panel2->addChild(
	"group24",
	$group24
);

$row1 = new BorderlandElatedRow();
$group24->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_background_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_color",
	$woo_products_single_quantity_input_background_color
);

$woo_products_single_quantity_input_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_background_hover_color",
	"",
	esc_html__( "Focus Background Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_background_hover_color",
	$woo_products_single_quantity_input_background_hover_color
);

$group25 = new BorderlandElatedGroup(
	esc_html__( 'Input Border', 'borderland' ),
	esc_html__( 'Define Quantity Input Field border', 'borderland' )
);
$panel2->addChild(
	"group25",
	$group25
);

$row1 = new BorderlandElatedRow();
$group25->addChild(
	"row1",
	$row1
);

$woo_products_single_quantity_input_border_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_color",
	$woo_products_single_quantity_input_border_color
);

$woo_products_single_quantity_input_border_hover_color = new BorderlandElatedField(
	"colorsimple",
	"woo_products_single_quantity_input_border_hover_color",
	"",
	esc_html__( "Border Focus Color", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_hover_color",
	$woo_products_single_quantity_input_border_hover_color
);

$woo_products_single_quantity_input_border_width = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_input_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_width",
	$woo_products_single_quantity_input_border_width
);

$woo_products_single_quantity_input_border_radius = new BorderlandElatedField(
	"textsimple",
	"woo_products_single_quantity_input_border_radius",
	"",
	esc_html__( "Border radius (px)", 'borderland' )
);
$row1->addChild(
	"woo_products_single_quantity_input_border_radius",
	$woo_products_single_quantity_input_border_radius
);

//Product single styles

$panel4 = new BorderlandElatedPanel(
	esc_html__( "Header & Sidebar Widget", 'borderland' ),
	"product_widget"
);
$woocommercePage->addChild(
	"panel4",
	$panel4
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Product Title", 'borderland' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'borderland' )
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
$sidebar_product_title_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_product_title_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"sidebar_product_title_color",
	$sidebar_product_title_color
);

$sidebar_product_title_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_title_font_size",
	$sidebar_product_title_font_size
);

$sidebar_product_title_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_title_line_height",
	$sidebar_product_title_line_height
);

$sidebar_product_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_product_title_text_transform",
	$sidebar_product_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$sidebar_product_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"sidebar_product_title_font_family",
	$sidebar_product_title_font_family
);

$sidebar_product_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_product_title_font_style",
	$sidebar_product_title_font_style
);

$sidebar_product_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_product_title_font_weight",
	$sidebar_product_title_font_weight
);

$sidebar_product_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_product_title_letter_spacing",
	$sidebar_product_title_letter_spacing
);

$row3 = new BorderlandElatedRow();
$group1->addChild(
	"row3",
	$row3
);
$sidebar_product_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row3->addChild(
	"sidebar_product_title_hover_color",
	$sidebar_product_title_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Product Price", 'borderland' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'borderland' )
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

$sidebar_product_price_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_product_price_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"sidebar_product_price_color",
	$sidebar_product_price_color
);

$sidebar_product_price_font_size = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_price_font_size",
	$sidebar_product_price_font_size
);

$sidebar_product_price_line_height = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_price_line_height",
	$sidebar_product_price_line_height
);

$sidebar_product_price_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_product_price_text_transform",
	$sidebar_product_price_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$sidebar_product_price_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"sidebar_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"sidebar_product_price_font_family",
	$sidebar_product_price_font_family
);

$sidebar_product_price_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_price_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_product_price_font_style",
	$sidebar_product_price_font_style
);

$sidebar_product_price_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"sidebar_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_product_price_font_weight",
	$sidebar_product_price_font_weight
);

$sidebar_product_price_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"sidebar_product_price_letter_spacing",
	$sidebar_product_price_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$sidebar_product_price_old_color = new BorderlandElatedField(
	"colorsimple",
	"sidebar_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'borderland' )
);
$row3->addChild(
	"sidebar_product_price_old_color",
	$sidebar_product_price_old_color
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Icon Spacing", 'borderland' ),
	esc_html__( "Define padding and margin for widget icon", 'borderland' )
);
$panel4->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$sidebar_product_icon_padding_left = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_icon_padding_left",
	$sidebar_product_icon_padding_left
);

$sidebar_product_icon_padding_right = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_icon_padding_right",
	$sidebar_product_icon_padding_right
);

$sidebar_product_icon_margin_left = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_icon_margin_left",
	$sidebar_product_icon_margin_left
);

$sidebar_product_icon_margin_right = new BorderlandElatedField(
	"textsimple",
	"sidebar_product_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'borderland' )
);
$row1->addChild(
	"sidebar_product_icon_margin_right",
	$sidebar_product_icon_margin_right
);

//WooCommerce Dropdown Cart
$woo_drop_cart_type = new BorderlandElatedField(
	"select",
	"woo_drop_cart_type",
	"with_icon",
	esc_html__( "WooCommerce Dropdown Cart Widget Style", 'borderland' ),
	esc_html__( "Choose style for woocommerce dropdown cart widget in header", 'borderland' ),
	array(
		"with_icon" => esc_html__( "With Icon", 'borderland' ),
		"with_icon_label" => esc_html__( "With Icon and Label", 'borderland' ),
		"button_with_text" => esc_html__( "Button with Text", 'borderland' )
	)
);
$panel4->addChild(
	"woo_drop_cart_type",
	$woo_drop_cart_type
);

$cart_styles_title = new BorderlandElatedTitle(
	"cart_styles_title",
	esc_html__( "Cart Menu Item Style", 'borderland' )
);
$panel4->addChild(
	"cart_styles_title",
	$cart_styles_title
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Cart Text Style", 'borderland' ),
	esc_html__( "Define cart text style in header", 'borderland' )
);
$panel4->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$header_cart_text_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"header_cart_text_color",
	$header_cart_text_color
);

$header_cart_text_hover_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"header_cart_text_hover_color",
	$header_cart_text_hover_color
);

$header_cart_text_font_size = new BorderlandElatedField(
	"textsimple",
	"header_cart_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"header_cart_text_font_size",
	$header_cart_text_font_size
);

$header_cart_text_line_height = new BorderlandElatedField(
	"textsimple",
	"header_cart_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"header_cart_text_line_height",
	$header_cart_text_line_height
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$header_cart_text_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"header_cart_text_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"header_cart_text_text_transform",
	$header_cart_text_text_transform
);

$header_cart_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"header_cart_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"header_cart_text_font_family",
	$header_cart_text_font_family
);

$header_cart_text_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"header_cart_text_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"header_cart_text_font_style",
	$header_cart_text_font_style
);

$header_cart_text_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"header_cart_text_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"header_cart_text_font_weight",
	$header_cart_text_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$header_cart_text_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"header_cart_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"header_cart_text_letter_spacing",
	$header_cart_text_letter_spacing
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Cart Icon Style", 'borderland' ),
	esc_html__( "Define cart icon style in header.", 'borderland' )
);
$panel4->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$header_cart_icon_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_color",
	$header_cart_icon_color
);

$header_cart_icon_hover_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_hover_color",
	$header_cart_icon_hover_color
);

$header_cart_icon_size = new BorderlandElatedField(
	"textsimple",
	"header_cart_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_size",
	$header_cart_icon_size
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Count Number Style", 'borderland' ),
	esc_html__( "Define count number style in header.", 'borderland' )
);
$panel4->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$header_cart_icon_count_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_icon_count_color",
	"",
	esc_html__( "Count Number Color", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_count_color",
	$header_cart_icon_count_color
);

$header_cart_icon_count_hover_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_icon_count_hover_color",
	"",
	esc_html__( "Count Number Hover Color", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_count_hover_color",
	$header_cart_icon_count_hover_color
);

$header_cart_icon_count_size = new BorderlandElatedField(
	"textsimple",
	"header_cart_icon_count_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"header_cart_icon_count_size",
	$header_cart_icon_count_size
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Button with Text Style", 'borderland' ),
	esc_html__( "Define button with text style in header.", 'borderland' )
);
$panel4->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$header_cart_button_background_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"header_cart_button_background_color",
	$header_cart_button_background_color
);

$header_cart_button_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"header_cart_button_background_hover_color",
	$header_cart_button_background_hover_color
);

$ww_dropdown_styles_title = new BorderlandElatedTitle(
	"ww_dropdown_styles_title",
	esc_html__( "Dropdown Item Style", 'borderland' )
);
$panel4->addChild(
	"ww_dropdown_styles_title",
	$ww_dropdown_styles_title
);

$group_drop_down_back_color = new BorderlandElatedGroup(
	esc_html__( "Dropdown Styles", 'borderland' ),
	esc_html__( "Define dropdown box style", 'borderland' )
);
$panel4->addChild(
	"group_drop_down_back_color",
	$group_drop_down_back_color
);

$row1 = new BorderlandElatedRow();
$group_drop_down_back_color->addChild(
	"row1",
	$row1
);

$header_cart_drop_down_back_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_drop_down_back_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"header_cart_drop_down_back_color",
	$header_cart_drop_down_back_color
);

$header_cart_drop_down_border_color = new BorderlandElatedField(
	"colorsimple",
	"header_cart_drop_down_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"header_cart_drop_down_border_color",
	$header_cart_drop_down_border_color
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Product Name & Price Style", 'borderland' ),
	esc_html__( "Define style for product name and price", 'borderland' )
);
$panel4->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$drop_down_product_name_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_product_name_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"drop_down_product_name_color",
	$drop_down_product_name_color
);

$drop_down_product_name_hover_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_product_name_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"drop_down_product_name_hover_color",
	$drop_down_product_name_hover_color
);

$drop_down_product_name_font_size = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_name_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_name_font_size",
	$drop_down_product_name_font_size
);

$drop_down_product_name_line_height = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_name_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_name_line_height",
	$drop_down_product_name_line_height
);

$row2 = new BorderlandElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$drop_down_product_name_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_name_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"drop_down_product_name_text_transform",
	$drop_down_product_name_text_transform
);

$drop_down_product_name_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"drop_down_product_name_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"drop_down_product_name_font_family",
	$drop_down_product_name_font_family
);

$drop_down_product_name_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_name_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"drop_down_product_name_font_style",
	$drop_down_product_name_font_style
);

$drop_down_product_name_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_name_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"drop_down_product_name_font_weight",
	$drop_down_product_name_font_weight
);

$row3 = new BorderlandElatedRow();
$group8->addChild(
	"row3",
	$row3
);

$drop_down_product_name_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_name_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"drop_down_product_name_letter_spacing",
	$drop_down_product_name_letter_spacing
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Product Quantity Style", 'borderland' ),
	esc_html__( "Define style for product quantity", 'borderland' )
);
$panel4->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$drop_down_product_quantity_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_product_quantity_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"drop_down_product_quantity_color",
	$drop_down_product_quantity_color
);

$drop_down_product_quantity_font_size = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_quantity_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_quantity_font_size",
	$drop_down_product_quantity_font_size
);

$drop_down_product_quantity_line_height = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_quantity_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_quantity_line_height",
	$drop_down_product_quantity_line_height
);

$drop_down_product_quantity_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"drop_down_product_quantity_text_transform",
	$drop_down_product_quantity_text_transform
);

$row2 = new BorderlandElatedRow();
$group9->addChild(
	"row2",
	$row2
);

$drop_down_product_quantity_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"drop_down_product_quantity_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"drop_down_product_quantity_font_family",
	$drop_down_product_quantity_font_family
);

$drop_down_product_quantity_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"drop_down_product_quantity_font_style",
	$drop_down_product_quantity_font_style
);

$drop_down_product_quantity_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_quantity_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"drop_down_product_quantity_font_weight",
	$drop_down_product_quantity_font_weight
);

$drop_down_product_quantity_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_quantity_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"drop_down_product_quantity_letter_spacing",
	$drop_down_product_quantity_letter_spacing
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Product Total Style", 'borderland' ),
	esc_html__( "Define style for product total", 'borderland' )
);
$panel4->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$drop_down_product_total_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_product_total_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"drop_down_product_total_color",
	$drop_down_product_total_color
);

$drop_down_product_total_font_size = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_total_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_total_font_size",
	$drop_down_product_total_font_size
);

$drop_down_product_total_line_height = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_total_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_product_total_line_height",
	$drop_down_product_total_line_height
);

$drop_down_product_total_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_total_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"drop_down_product_total_text_transform",
	$drop_down_product_total_text_transform
);

$row2 = new BorderlandElatedRow();
$group10->addChild(
	"row2",
	$row2
);

$drop_down_product_total_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"drop_down_product_total_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"drop_down_product_total_font_family",
	$drop_down_product_total_font_family
);

$drop_down_product_total_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_total_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"drop_down_product_total_font_style",
	$drop_down_product_total_font_style
);

$drop_down_product_total_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_product_total_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"drop_down_product_total_font_weight",
	$drop_down_product_total_font_weight
);

$drop_down_product_total_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"drop_down_product_total_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"drop_down_product_total_letter_spacing",
	$drop_down_product_total_letter_spacing
);

$group_drop_cart_buttons = new BorderlandElatedGroup(
	esc_html__( "Dropdown Cart Buttons", 'borderland' ),
	esc_html__( "Define style for dropdown cart buttons", 'borderland' )
);
$panel4->addChild(
	"group_drop_cart_buttons",
	$group_drop_cart_buttons
);

$row1 = new BorderlandElatedRow();
$group_drop_cart_buttons->addChild(
	"row1",
	$row1
);

$drop_down_cart_button_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_cart_button_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"drop_down_cart_button_color",
	$drop_down_cart_button_color
);

$drop_down_cart_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"drop_down_cart_button_color_hover",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"drop_down_cart_button_color_hover",
	$drop_down_cart_button_color_hover
);

$drop_down_cart_button_line_height = new BorderlandElatedField(
	"textsimple",
	"drop_down_cart_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"drop_down_cart_button_line_height",
	$drop_down_cart_button_line_height
);

$row2 = new BorderlandElatedRow();
$group_drop_cart_buttons->addChild(
	"row2",
	$row2
);

$drop_down_cart_button_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_cart_button_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"drop_down_cart_button_text_transform",
	$drop_down_cart_button_text_transform
);

$drop_down_cart_button_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"drop_down_cart_button_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"drop_down_cart_button_font_family",
	$drop_down_cart_button_font_family
);

$drop_down_cart_button_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_cart_button_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"drop_down_cart_button_font_style",
	$drop_down_cart_button_font_style
);

$drop_down_cart_button_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"drop_down_cart_button_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"drop_down_cart_button_font_weight",
	$drop_down_cart_button_font_weight
);

$row3 = new BorderlandElatedRow();
$group_drop_cart_buttons->addChild(
	"row3",
	$row3
);

$drop_down_cart_button_background_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_cart_button_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row3->addChild(
	"drop_down_cart_button_background_color",
	$drop_down_cart_button_background_color
);

$drop_down_cart_button_background_color_hover = new BorderlandElatedField(
	"colorsimple",
	"drop_down_cart_button_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row3->addChild(
	"drop_down_cart_button_background_color_hover",
	$drop_down_cart_button_background_color_hover
);

$group_drop_cart_remove_button = new BorderlandElatedGroup(
	esc_html__( "Remove Button Style", 'borderland' ),
	esc_html__( "Define style for remove button", 'borderland' )
);
$panel4->addChild(
	"group_drop_cart_remove_button",
	$group_drop_cart_remove_button
);

$row1 = new BorderlandElatedRow();
$group_drop_cart_remove_button->addChild(
	"row1",
	$row1
);

$drop_down_remove_button_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_remove_button_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"drop_down_remove_button_color",
	$drop_down_remove_button_color
);

$drop_down_remove_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"drop_down_remove_button_color_hover",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"drop_down_remove_button_color_hover",
	$drop_down_remove_button_color_hover
);

$drop_down_remove_button_back_color = new BorderlandElatedField(
	"colorsimple",
	"drop_down_remove_button_back_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"drop_down_remove_button_back_color",
	$drop_down_remove_button_back_color
);

$drop_down_remove_button_back_color_hover = new BorderlandElatedField(
	"colorsimple",
	"drop_down_remove_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"drop_down_remove_button_back_color_hover",
	$drop_down_remove_button_back_color_hover
);

//Footer widget

$panel5 = new BorderlandElatedPanel(
	esc_html__( "Footer Widget", 'borderland' ),
	"footer_product_widget"
);
$woocommercePage->addChild(
	"panel5",
	$panel5
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Product Title", 'borderland' ),
	esc_html__( "Define styles for product title in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'borderland' )
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

$footer_wdgt_product_title_color = new BorderlandElatedField(
	"colorsimple",
	"footer_wdgt_product_title_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_title_color",
	$footer_wdgt_product_title_color
);

$footer_wdgt_product_title_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_title_font_size",
	$footer_wdgt_product_title_font_size
);

$footer_wdgt_product_title_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_title_line_height",
	$footer_wdgt_product_title_line_height
);

$footer_wdgt_product_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_wdgt_product_title_text_transform",
	$footer_wdgt_product_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_wdgt_product_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_family",
	$footer_wdgt_product_title_font_family
);

$footer_wdgt_product_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_style",
	$footer_wdgt_product_title_font_style
);

$footer_wdgt_product_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_wdgt_product_title_font_weight",
	$footer_wdgt_product_title_font_weight
);

$footer_wdgt_product_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_wdgt_product_title_letter_spacing",
	$footer_wdgt_product_title_letter_spacing
);

$row3 = new BorderlandElatedRow();
$group1->addChild(
	"row3",
	$row3
);
$footer_wdgt_product_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"footer_wdgt_product_title_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row3->addChild(
	"footer_wdgt_product_title_hover_color",
	$footer_wdgt_product_title_hover_color
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Product Price", 'borderland' ),
	esc_html__( "Define product price text style in widget. This option works for Products, Recently Viewed Products and Top Rated Products widget", 'borderland' )
);
$panel5->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$footer_wdgt_product_price_color = new BorderlandElatedField(
	"colorsimple",
	"footer_wdgt_product_price_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_price_color",
	$footer_wdgt_product_price_color
);

$footer_wdgt_product_price_font_size = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_price_font_size",
	$footer_wdgt_product_price_font_size
);

$footer_wdgt_product_price_line_height = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"footer_wdgt_product_price_line_height",
	$footer_wdgt_product_price_line_height
);

$footer_wdgt_product_price_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"footer_wdgt_product_price_text_transform",
	$footer_wdgt_product_price_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$footer_wdgt_product_price_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"footer_wdgt_product_price_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_family",
	$footer_wdgt_product_price_font_family
);

$footer_wdgt_product_price_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_style",
	$footer_wdgt_product_price_font_style
);

$footer_wdgt_product_price_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"footer_wdgt_product_price_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"footer_wdgt_product_price_font_weight",
	$footer_wdgt_product_price_font_weight
);

$footer_wdgt_product_price_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"footer_wdgt_product_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"footer_wdgt_product_price_letter_spacing",
	$footer_wdgt_product_price_letter_spacing
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$footer_wdgt_product_price_old_color = new BorderlandElatedField(
	"colorsimple",
	"footer_wdgt_product_price_old_color",
	"",
	esc_html__( "Old Price Color", 'borderland' )
);
$row3->addChild(
	"footer_wdgt_product_price_old_color",
	$footer_wdgt_product_price_old_color
);
