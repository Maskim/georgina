<?php

$generalPage = new BorderlandElatedAdminPage(
	"",
	esc_html__( "General", 'borderland' ),
	"fa fa-institution"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"general",
	$generalPage
);

// Design Style

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Design Style", 'borderland' ),
	"design_style"
);
$generalPage->addChild(
	"panel1",
	$panel1
);

$google_fonts = new BorderlandElatedField(
	"font",
	"google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose a default Google font for your site", 'borderland' )
);
$panel1->addChild(
	"google_fonts",
	$google_fonts
);

$additional_google_fonts = new BorderlandElatedField(
	"yesno",
	"additional_google_fonts",
	"no",
	esc_html__( "Additional Google Fonts", 'borderland' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_additional_google_font_container"
	)
);
$panel1->addChild(
	"additional_google_fonts",
	$additional_google_fonts
);

$additional_google_font_container = new BorderlandElatedContainer(
	"additional_google_font_container",
	"additional_google_fonts",
	"no"
);
$panel1->addChild(
	"additional_google_font_container",
	$additional_google_font_container
);

$additional_google_font1 = new BorderlandElatedField(
	"font",
	"additional_google_font1",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose additional Google font for your site", 'borderland' )
);
$additional_google_font_container->addChild(
	"additional_google_font1",
	$additional_google_font1
);

$additional_google_font2 = new BorderlandElatedField(
	"font",
	"additional_google_font2",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose additional Google font for your site", 'borderland' )
);
$additional_google_font_container->addChild(
	"additional_google_font2",
	$additional_google_font2
);

$additional_google_font3 = new BorderlandElatedField(
	"font",
	"additional_google_font3",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose additional Google font for your site", 'borderland' )
);
$additional_google_font_container->addChild(
	"additional_google_font3",
	$additional_google_font3
);

$additional_google_font4 = new BorderlandElatedField(
	"font",
	"additional_google_font4",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose additional Google font for your site", 'borderland' )
);
$additional_google_font_container->addChild(
	"additional_google_font4",
	$additional_google_font4
);

$additional_google_font5 = new BorderlandElatedField(
	"font",
	"additional_google_font5",
	"-1",
	esc_html__( "Font Family", 'borderland' ),
	esc_html__( "Choose additional Google font for your site", 'borderland' )
);
$additional_google_font_container->addChild(
	"additional_google_font5",
	$additional_google_font5
);

$first_color = new BorderlandElatedField(
	"color",
	"first_color",
	"",
	esc_html__( "First Main Color", 'borderland' ),
	esc_html__( "Choose the most dominant theme color. Default color is #e6ae48.", 'borderland' )
);
$panel1->addChild(
	"first_color",
	$first_color
);

$selection_color = new BorderlandElatedField(
	"color",
	"selection_color",
	"",
	esc_html__( "Text Selection Color", 'borderland' ),
	esc_html__( "Choose the color users see when selecting text", 'borderland' )
);
$panel1->addChild(
	"selection_color",
	$selection_color
);

$transparent_content = new BorderlandElatedField(
	"yesno",
	"transparent_content",
	"no",
	esc_html__( "Enable Uniform Site Background", 'borderland' ),
	esc_html__( "If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_transparent_content_container"
	)
);
$panel1->addChild(
	"transparent_content",
	$transparent_content
);

$transparent_content_container = new BorderlandElatedContainer(
	"transparent_content_container",
	"transparent_content",
	"no"
);
$panel1->addChild(
	"transparent_content_container",
	$transparent_content_container
);

$transparent_content_background_color = new BorderlandElatedField(
	"color",
	"transparent_content_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose body background color. Default color is #ffffff.", 'borderland' )
);
$transparent_content_container->addChild(
	"transparent_content_background_color",
	$transparent_content_background_color
);

$transparent_content_background_image = new BorderlandElatedField(
	"image",
	"transparent_content_background_image",
	"",
	esc_html__( "Background Image", 'borderland' ),
	esc_html__( "Choose an image to be displayed in background", 'borderland' )
);
$transparent_content_container->addChild(
	"transparent_content_background_image",
	$transparent_content_background_image
);

$transparent_content_pattern_background_image = new BorderlandElatedField(
	"image",
	"transparent_content_pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'borderland' ),
	esc_html__( "Choose an image to be used as background pattern", 'borderland' )
);
$transparent_content_container->addChild(
	"transparent_content_pattern_background_image",
	$transparent_content_pattern_background_image
);

$boxed = new BorderlandElatedField(
	"yesno",
	"boxed",
	"no",
	esc_html__( "Boxed layout", 'borderland' ),
	esc_html__( "Enabling this option will display site content in grid", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_boxed_container"
	)
);
$panel1->addChild(
	"boxed",
	$boxed
);

$boxed_container = new BorderlandElatedContainer(
	"boxed_container",
	"boxed",
	"no"
);
$panel1->addChild(
	"boxed_container",
	$boxed_container
);

$background_color_box = new BorderlandElatedField(
	"color",
	"background_color_box",
	"",
	esc_html__( "Page Background Color", 'borderland' ),
	esc_html__( "Choose the page background (body) color. Default color is #f5f5f5.", 'borderland' )
);
$boxed_container->addChild(
	"background_color_box",
	$background_color_box
);

$background_image = new BorderlandElatedField(
	"image",
	"background_image",
	"",
	esc_html__( "Background Image", 'borderland' ),
	esc_html__( "Choose an image to be displayed in background", 'borderland' )
);
$boxed_container->addChild(
	"background_image",
	$background_image
);

$pattern_background_image = new BorderlandElatedField(
	"image",
	"pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'borderland' ),
	esc_html__( "Choose an image to be used as background pattern", 'borderland' )
);
$boxed_container->addChild(
	"pattern_background_image",
	$pattern_background_image
);

$background_image_attachment = new BorderlandElatedField(
	"select",
	"background_image_attachment",
	"fixed",
	esc_html__( "Background Attachment", 'borderland' ),
	esc_html__( "Choose background attachment behavior", 'borderland' ),
	array(
		"fixed" => esc_html__( "Fixed", 'borderland' ),
		"scroll" => esc_html__( "Scroll", 'borderland' )
	)
);
$boxed_container->addChild(
	"background_image_attachment",
	$background_image_attachment
);

$boxed_padding_general = new BorderlandElatedField(
	"text",
	"boxed_padding_general",
	"",
	esc_html__( "Left/Right Padding on Content (%)", 'borderland' ),
	esc_html__( "Insert left(right) padding that will apply generaly", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$boxed_container->addChild(
	"boxed_padding_general",
	$boxed_padding_general
);

$boxed_padding_on_header_footer = new BorderlandElatedField(
	"yesno",
	"boxed_padding_on_header_footer",
	"no",
	esc_html__( "Left/Right Padding Affects Header and Footer", 'borderland' ),
	esc_html__( "By enabling this option the left/right padding will affect header and footer also", 'borderland' )
);
$boxed_container->addChild(
	"boxed_padding_on_header_footer",
	$boxed_padding_on_header_footer
);

$boxed_padding_on_title_content = new BorderlandElatedField(
	"yesno",
	"boxed_padding_on_title_content",
	"no",
	esc_html__( "Left/Right Padding Affects Title Content", 'borderland' ),
	esc_html__( "By enabling this option the left/right padding will affect title content", 'borderland' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_content",
	$boxed_padding_on_title_content
);

$boxed_padding_on_title_container = new BorderlandElatedField(
	"yesno",
	"boxed_padding_on_title_container",
	"no",
	esc_html__( "Left/Right Padding Affects Title Container", 'borderland' ),
	esc_html__( "By enabling this option the left/right padding will affect title container (including title image)", 'borderland' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_container",
	$boxed_padding_on_title_container
);

$paspartu = new BorderlandElatedField(
	"yesno",
	"paspartu",
	"no",
	esc_html__( "Passepartout", 'borderland' ),
	esc_html__( "Enabling this option will display passepartout around site content", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_container"
	)
);
$panel1->addChild(
	"paspartu",
	$paspartu
);

$paspartu_container = new BorderlandElatedContainer(
	"paspartu_container",
	"paspartu",
	"no"
);
$panel1->addChild(
	"paspartu_container",
	$paspartu_container
);

$paspartu_color = new BorderlandElatedField(
	"color",
	"paspartu_color",
	"",
	esc_html__( "Passepartout Color", 'borderland' ),
	esc_html__( "Choose passepartout color, default value is #ffffff", 'borderland' )
);
$paspartu_container->addChild(
	"paspartu_color",
	$paspartu_color
);

$paspartu_width = new BorderlandElatedField(
	"text",
	"paspartu_width",
	"",
	esc_html__( "Passepartout Size (%)", 'borderland' ),
	esc_html__( "Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$paspartu_container->addChild(
	"paspartu_width",
	$paspartu_width
);

$paspartu_header_alignment = new BorderlandElatedField(
	"yesno",
	"paspartu_header_alignment",
	"no",
	esc_html__( "Align Header With Passepartout", 'borderland' ),
	esc_html__( "Enabling this option will align header content with passepartout borders", 'borderland' )
);
$paspartu_container->addChild(
	"paspartu_header_alignment",
	$paspartu_header_alignment
);

$paspartu_header_inside = new BorderlandElatedField(
	"yesno",
	"paspartu_header_inside",
	"no",
	esc_html__( "Set Header Inside Passepartout", 'borderland' ),
	esc_html__( "Enabling this option will set the whole header between the left and right border of passepartout", 'borderland' )
);
$paspartu_container->addChild(
	"paspartu_header_inside",
	$paspartu_header_inside
);

$vertical_menu_inside_paspartu = new BorderlandElatedField(
	"yesno",
	"vertical_menu_inside_paspartu",
	"yes",
	esc_html__( "Vertical Menu Inside Passepartout", 'borderland' ),
	""
);
$paspartu_container->addChild(
	"vertical_menu_inside_paspartu",
	$vertical_menu_inside_paspartu
);

$paspartu_on_top = new BorderlandElatedField(
	"yesno",
	"paspartu_on_top",
	"yes",
	esc_html__( "Top Passepartout", 'borderland' ),
	esc_html__( "Disabling this option will disable top part of passepartout", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_on_top_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_top",
	$paspartu_on_top
);

$paspartu_on_top_fixed_container = new BorderlandElatedContainer(
	"paspartu_on_top_fixed_container",
	"paspartu_on_top",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_top_fixed_container",
	$paspartu_on_top_fixed_container
);

$paspartu_on_top_fixed = new BorderlandElatedField(
	"yesno",
	"paspartu_on_top_fixed",
	"no",
	esc_html__( "Fix Top Passepartout", 'borderland' ),
	esc_html__( "Enabling this option will fix top part of passepartout to the top of the screen", 'borderland' )
);
$paspartu_on_top_fixed_container->addChild(
	"paspartu_on_top_fixed",
	$paspartu_on_top_fixed
);

$paspartu_on_bottom_slider_container = new BorderlandElatedContainer(
	"paspartu_on_bottom_slider_container",
	"",
	""
);
$paspartu_container->addChild(
	"paspartu_on_bottom_slider_container",
	$paspartu_on_bottom_slider_container
);

$paspartu_on_bottom_slider = new BorderlandElatedField(
	"yesno",
	"paspartu_on_bottom_slider",
	"no",
	esc_html__( "Show Bottom Passepartout on Elated Slider", 'borderland' ),
	esc_html__( "Enabling this option will show bottom passepartout on Elated Slider", 'borderland' )
);
$paspartu_on_bottom_slider_container->addChild(
	"paspartu_on_bottom_slider",
	$paspartu_on_bottom_slider
);

$paspartu_on_bottom = new BorderlandElatedField(
	"yesno",
	"paspartu_on_bottom",
	"yes",
	esc_html__( "Bottom Passepartout", 'borderland' ),
	esc_html__( "Disabling this option will disable bottom part of passepartout", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_paspartu_on_bottom_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_bottom",
	$paspartu_on_bottom
);

$paspartu_on_bottom_fixed_container = new BorderlandElatedContainer(
	"paspartu_on_bottom_fixed_container",
	"paspartu_on_bottom",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_bottom_fixed_container",
	$paspartu_on_bottom_fixed_container
);

$paspartu_on_bottom_fixed = new BorderlandElatedField(
	"yesno",
	"paspartu_on_bottom_fixed",
	"no",
	esc_html__( "Fix Bottom Passepartout", 'borderland' ),
	esc_html__( "Enabling this option will fix bottom part of passepartout to the bottom of the screen", 'borderland' )
);
$paspartu_on_bottom_fixed_container->addChild(
	"paspartu_on_bottom_fixed",
	$paspartu_on_bottom_fixed
);

$preload_pattern_image = new BorderlandElatedField(
	"image",
	"preload_pattern_image",
	BORDERLAND_ROOT . "/img/preload_pattern.png",
	esc_html__( "Preload Pattern Image", 'borderland' ),
	esc_html__( "Choose preload pattern image to be displayed until images are loaded ", 'borderland' )
);
$panel1->addChild(
	"preload_pattern_image",
	$preload_pattern_image
);

$element_appear_amount = new BorderlandElatedField(
	"text",
	"element_appear_amount",
	"",
	esc_html__( "Element Appearance (px)", 'borderland' ),
	esc_html__( "For animated elements, set distance (related to browser bottom) to start the animation", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"element_appear_amount",
	$element_appear_amount
);

// Settings

$panel4 = new BorderlandElatedPanel(
	esc_html__( "Settings", 'borderland' ),
	"settings"
);
$generalPage->addChild(
	"panel4",
	$panel4
);

$page_transitions = new BorderlandElatedField(
	"select",
	"page_transitions",
	"0",
	esc_html__( "Page Transition", 'borderland' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'borderland' ),
	array(
		0 => "No animation",
		1 => "Up/Down",
		2 => "Fade",
		3 => "Up/Down (In) / Fade (Out)",
		4 => "Left/Right"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"0" => "#eltdf_ajax_animate_header_container",
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => ""
		),
		"show"       => array(
			"0" => "",
			"1" => "#eltdf_ajax_animate_header_container",
			"2" => "#eltdf_ajax_animate_header_container",
			"3" => "#eltdf_ajax_animate_header_container",
			"4" => "#eltdf_ajax_animate_header_container"
		)
	),
	"enable_grid_elements",
	array( "yes" )
);
$panel4->addChild(
	"page_transitions",
	$page_transitions
);

$page_transitions_notice = new BorderlandElatedNotice(
	esc_html__( "Page Transition", 'borderland' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'borderland' ),
	esc_html__( "Page transition is disabled because VC Grid is Enabled", 'borderland' ),
	"enable_grid_elements",
	"no"
);
$panel4->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$ajax_animate_header_container = new BorderlandElatedContainer(
	"ajax_animate_header_container",
	"page_transitions",
	"0"
);
$panel4->addChild(
	"ajax_animate_header_container",
	$ajax_animate_header_container
);

$ajax_animate_header = new BorderlandElatedField(
	"yesno",
	"ajax_animate_header",
	"no",
	esc_html__( "Animate Header", 'borderland' ),
	esc_html__( "Enabling this option will include the header area in the Ajax Page Transition Animations", 'borderland' )
);
$ajax_animate_header_container->addChild(
	"ajax_animate_header",
	$ajax_animate_header
);

$loading_animation = new BorderlandElatedField(
	"onoff",
	"loading_animation",
	"off",
	esc_html__( "Loading Animation", 'borderland' ),
	esc_html__( "Enabling this option will display animation while page loads", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_loading_animation_container"
	)
);
$panel4->addChild(
	"loading_animation",
	$loading_animation
);

$loading_animation_container = new BorderlandElatedContainer(
	"loading_animation_container",
	"loading_animation",
	"off"
);
$panel4->addChild(
	"loading_animation_container",
	$loading_animation_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Loading Animation Graphic", 'borderland' ),
	esc_html__( "Choose type and color of preload graphic animation", 'borderland' )
);
$loading_animation_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$loading_animation_spinner = new BorderlandElatedField(
	"selectsimple",
	"loading_animation_spinner",
	"pulse",
	esc_html__( "Spinner", 'borderland' ),
	"",
	array(
		"pulse" => esc_html__( "Pulse", 'borderland' ),
		"double_pulse" => esc_html__( "Double Pulse", 'borderland' ),
		"cube" => esc_html__( "Cube", 'borderland' ),
		"rotating_cubes" => esc_html__( "Rotating Cubes", 'borderland' ),
		"stripes" => esc_html__( "Stripes", 'borderland' ),
		"wave" => esc_html__( "Wave", 'borderland' ),
		"two_rotating_circles" => esc_html__( "2 Rotating Circles", 'borderland' ),
		"five_rotating_circles" => esc_html__( "5 Rotating Circles", 'borderland' ),
		"atom" => esc_html__( "Atom", 'borderland' ),
		"clock" => esc_html__( "Clock", 'borderland' ),
		"mitosis" => esc_html__( "Mitosis", 'borderland' ),
		"lines" => esc_html__( "Lines", 'borderland' ),
		"fussion" => esc_html__( "Fussion", 'borderland' ),
		"wave_circles" => esc_html__( "Wave Circles", 'borderland' ),
		"pulse_circles" => esc_html__( "Pulse Circles", 'borderland' )
	)
);
$row1->addChild(
	"loading_animation_spinner",
	$loading_animation_spinner
);

$spinner_color = new BorderlandElatedField(
	"colorsimple",
	"spinner_color",
	"",
	esc_html__( "Spinner Color", 'borderland' )
);
$row1->addChild(
	"spinner_color",
	$spinner_color
);

$loading_image = new BorderlandElatedField(
	"image",
	"loading_image",
	"",
	esc_html__( "Loading Image", 'borderland' ),
	esc_html__( 'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', 'borderland' )
);
$loading_animation_container->addChild(
	"loading_image",
	$loading_image
);

$smooth_scroll = new BorderlandElatedField(
	"yesno",
	"smooth_scroll",
	"yes",
	esc_html__( "Smooth Scroll", 'borderland' ),
	esc_html__( "Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", 'borderland' )
);
$panel4->addChild(
	"smooth_scroll",
	$smooth_scroll
);

$elements_animation_on_touch = new BorderlandElatedField(
	"yesno",
	"elements_animation_on_touch",
	"no",
	esc_html__( "Elements Animation on Mobile/Touch Devices", 'borderland' ),
	esc_html__( "Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", 'borderland' )
);
$panel4->addChild(
	"elements_animation_on_touch",
	$elements_animation_on_touch
);

$show_back_button = new BorderlandElatedField(
	"yesno",
	"show_back_button",
	"yes",
	esc_html__( "Show 'Back To Top Button'", 'borderland' ),
	esc_html__( "Enabling this option will display a Back to Top button on every page", 'borderland' )
);
$panel4->addChild(
	"show_back_button",
	$show_back_button
);

$responsiveness = new BorderlandElatedField(
	"yesno",
	"responsiveness",
	"yes",
	esc_html__( "Responsiveness", 'borderland' ),
	esc_html__( "Enabling this option will make all pages responsive", 'borderland' )
);
$panel4->addChild(
	"responsiveness",
	$responsiveness
);

$favicon_image = new BorderlandElatedField(
	"image",
	"favicon_image",
	BORDERLAND_ROOT . "/img/favicon.ico",
	esc_html__( "Favicon Image", 'borderland' ),
	esc_html__( "Choose a favicon image to be displayed", 'borderland' )
);
$panel4->addChild(
	"favicon_image",
	$favicon_image
);

$internal_no_ajax_links = new BorderlandElatedField(
	"textarea",
	"internal_no_ajax_links",
	"",
	esc_html__( "List of Internal URLs Loaded Without AJAX (Separated With Comma)", 'borderland' ),
	esc_html__( "To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", 'borderland' )
);
$panel4->addChild(
	"internal_no_ajax_links",
	$internal_no_ajax_links
);

// Custom Code

$panel3 = new BorderlandElatedPanel(
	esc_html__( "Custom Code", 'borderland' ),
	"custom_code"
);
$generalPage->addChild(
	"panel3",
	$panel3
);

$custom_css = new BorderlandElatedField(
	"textarea",
	"custom_css",
	"",
	esc_html__( "Custom CSS", 'borderland' ),
	esc_html__( "Enter your custom CSS here", 'borderland' )
);
$panel3->addChild(
	"custom_css",
	$custom_css
);

$custom_svg_css = new BorderlandElatedField(
	"textarea",
	"custom_svg_css",
	"",
	esc_html__( "Custom SVG CSS", 'borderland' ),
	esc_html__( "Enter your SVG CSS here", 'borderland' )
);
$panel3->addChild(
	"custom_svg_css",
	$custom_svg_css
);

$custom_js = new BorderlandElatedField(
	"textarea",
	"custom_js",
	"",
	esc_html__( "Custom JS", 'borderland' ),
	esc_html__( 'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', 'borderland' )
);
$panel3->addChild(
	"custom_js",
	$custom_js
);

// SEO

$panel2 = new BorderlandElatedPanel(
	esc_html__( "SEO", 'borderland' ),
	"seo"
);
$generalPage->addChild(
	"panel2",
	$panel2
);

$disable_eltd_seo = new BorderlandElatedField(
	"yesno",
	"disable_eltd_seo",
	"no",
	esc_html__( "Disable SEO", 'borderland' ),
	esc_html__( "Enabling this option will turn off SEO", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#eltdf_disable_eltd_seo_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"disable_eltd_seo",
	$disable_eltd_seo
);

$disable_eltd_seo_container = new BorderlandElatedContainer(
	"disable_eltd_seo_container",
	"disable_eltd_seo",
	"yes"
);
$panel2->addChild(
	"disable_eltd_seo_container",
	$disable_eltd_seo_container
);

$meta_keywords = new BorderlandElatedField(
	"textarea",
	"meta_keywords",
	"",
	esc_html__( "Meta Keywords", 'borderland' ),
	esc_html__( "Add relevant keywords separated with commas to improve SEO", 'borderland' )
);
$disable_eltd_seo_container->addChild(
	"meta_keywords",
	$meta_keywords
);

$meta_description = new BorderlandElatedField(
	"textarea",
	"meta_description",
	"",
	esc_html__( "Meta Description", 'borderland' ),
	esc_html__( "Enter a short description of the website for SEO", 'borderland' )
);
$disable_eltd_seo_container->addChild(
	"meta_description",
	$meta_description
);

//Maintenance Mode
$eltd_pages = array();
$pages      = get_posts(
	array(
		'post_type' => esc_html__( 'page', 'borderland' ),
		'meta_key' => esc_html__( '_wp_page_template', 'borderland' ),
		'meta_value' => esc_html__( 'landing_page.php', 'borderland' )
	)
);
foreach ( $pages as $page ) {
	$eltd_pages[ $page->ID ] = $page->post_title;
}

$panel_maintenance = new BorderlandElatedPanel(
	esc_html__( "Maintenance Mode", 'borderland' ),
	"maintenance_panel"
);
$generalPage->addChild(
	"panel_maintenance",
	$panel_maintenance
);

$maintenance_mode = new BorderlandElatedField(
	"yesno",
	"eltd_maintenance_mode",
	"no",
	esc_html__( "Maintenance Mode", 'borderland' ),
	esc_html__( "Turn on this option if you want to enable maintenance mode on your site", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_maintenance_container"
	)
);
$panel_maintenance->addChild(
	"eltd_maintenance_mode",
	$maintenance_mode
);

$maintenance_container = new BorderlandElatedContainer(
	"maintenance_container",
	"eltd_maintenance_mode",
	"no"
);
$panel_maintenance->addChild(
	"maintenance_container",
	$maintenance_container
);

$maintenance_page = new BorderlandElatedField(
	"selectblank",
	"eltd_maintenance_page",
	"",
	esc_html__( 'Maintenance Page', 'borderland' ),
	esc_html__( 'Choose maintenance page to display when user visits your site', 'borderland' ),
	$eltd_pages
);
$maintenance_container->addChild(
	"eltd_maintenance_page",
	$maintenance_page
);

// Google Maps API key

$panel5 = new BorderlandElatedPanel(
	esc_html__( "Google Maps API key", 'borderland' ),
	"google_maps_api_key"
);
$generalPage->addChild(
	"panel5",
	$panel5
);

$google_maps_api_key = new BorderlandElatedField(
	"text",
	"google_maps_api_key",
	"",
	esc_html__( "Google Maps API key", 'borderland' ),
	esc_html__( "Enter your Google Maps API key", 'borderland' )
);
$panel5->addChild(
	"google_maps_api_key",
	$google_maps_api_key
);