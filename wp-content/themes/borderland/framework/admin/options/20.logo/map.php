<?php

$logoPage = new BorderlandElatedAdminPage(
	"1",
	esc_html__( "Logo", 'borderland' ),
	"fa fa-coffee"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"logo",
	$logoPage
);

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Logo Upload", 'borderland' ),
	"logo"
);
$logoPage->addChild(
	"panel1",
	$panel1
);

$show_logo = new BorderlandElatedField(
	"yesno",
	"show_logo",
	"yes",
	esc_html__( "Show Logo", 'borderland' ),
	esc_html__( "Disabling this option will hide logo", 'borderland' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_show_logo_container"
	)
);
$panel1->addChild(
	"show_logo",
	$show_logo
);
$show_logo_container = new BorderlandElatedContainer(
	"show_logo_container",
	"show_logo",
	"no"
);
$panel1->addChild(
	"show_logo_container",
	$show_logo_container
);

$logo_image = new BorderlandElatedField(
	"image",
	"logo_image",
	BORDERLAND_ROOT . "/img/logo.png",
	esc_html__( "Logo Image - Normal", 'borderland' ),
	esc_html__( "Choose a default logo image to display ", 'borderland' )
);
$show_logo_container->addChild(
	"logo_image",
	$logo_image
);

$logo_image_light = new BorderlandElatedField(
	"image",
	"logo_image_light",
	BORDERLAND_ROOT . "/img/logo_white.png",
	esc_html__( "Logo Image - Light", 'borderland' ),
	esc_html__( 'Choose a logo image to display for "Light" header skin', 'borderland' )
);
$show_logo_container->addChild(
	"logo_image_light",
	$logo_image_light
);

$logo_image_dark = new BorderlandElatedField(
	"image",
	"logo_image_dark",
	BORDERLAND_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Dark", 'borderland' ),
	esc_html__( 'Choose a logo image to display for "Dark" header skin', 'borderland' )
);
$show_logo_container->addChild(
	"logo_image_dark",
	$logo_image_dark
);

$logo_image_sticky = new BorderlandElatedField(
	"image",
	"logo_image_sticky",
	BORDERLAND_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Sticky Header", 'borderland' ),
	esc_html__( 'Choose a logo image to display for "Sticky" header type', 'borderland' )
);
$show_logo_container->addChild(
	"logo_image_sticky",
	$logo_image_sticky
);

$logo_image_fixed_hidden = new BorderlandElatedField(
	"image",
	"logo_image_fixed_hidden",
	"",
	esc_html__( "Logo Image - Fixed Advanced Header", 'borderland' ),
	esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'borderland' )
);
$show_logo_container->addChild(
	"logo_image_fixed_hidden",
	$logo_image_fixed_hidden
);

$logo_image_mobile = new BorderlandElatedField(
	"image",
	"logo_image_mobile",
	"",
	esc_html__( "Logo Image - Mobile Header", 'borderland' ),
	esc_html__( 'Choose a logo image to display for "Mobile" header type', 'borderland' )
);
$show_logo_container->addChild(
	"logo_image_mobile",
	$logo_image_mobile
);

$vertical_logo_bottom = new BorderlandElatedField(
	"image",
	"vertical_logo_bottom",
	"",
	esc_html__( "Side Menu Area Bottom Logo Image", 'borderland' ),
	esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type', 'borderland' )
);
$show_logo_container->addChild(
	"vertical_logo_bottom",
	$vertical_logo_bottom
);

$content_menu_logo_image = new BorderlandElatedField(
	"image",
	"content_menu_logo_image",
	"",
	esc_html__( "Content Menu Logo Image", 'borderland' ),
	esc_html__( 'Choose a logo image to display on the Content Menu', 'borderland' )
);
$show_logo_container->addChild(
	"content_menu_logo_image",
	$content_menu_logo_image
);