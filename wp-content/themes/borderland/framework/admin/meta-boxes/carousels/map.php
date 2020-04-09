<?php

//Carousels

$eltdCarousels = new BorderlandElatedMetaBox(
	"carousels",
	esc_html__( "Carousels", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"carousels",
	$eltdCarousels
);

$eltd_carousel_image = new BorderlandElatedMetaField(
	"image",
	"eltd_carousel-image",
	"",
	esc_html__( "Carousel Image", 'borderland' ),
	esc_html__( "Choose carousel image (min width needs to be 215px)", 'borderland' )
);
$eltdCarousels->addChild(
	"eltd_carousel-image",
	$eltd_carousel_image
);

$eltd_carousel_hover_image = new BorderlandElatedMetaField(
	"image",
	"eltd_carousel-hover-image",
	"",
	esc_html__( "Carousel Hover Image", 'borderland' ),
	esc_html__( "Choose carousel hover image (min width needs to be 215px)", 'borderland' )
);
$eltdCarousels->addChild(
	"eltd_carousel-hover-image",
	$eltd_carousel_hover_image
);

$eltd_carousel_item_link = new BorderlandElatedMetaField(
	"text",
	"eltd_carousel-item-link",
	"",
	esc_html__( "Link", 'borderland' ),
	esc_html__( "Enter the URL to which you want the image to link to (e.g. http://www.example.com)", 'borderland' )
);
$eltdCarousels->addChild(
	"eltd_carousel-item-link",
	$eltd_carousel_item_link
);

$eltd_carousel_item_target = new BorderlandElatedMetaField(
	"selectblank",
	"eltd_carousel-item-target",
	"",
	esc_html__( "Target", 'borderland' ),
	esc_html__( "Specify where to open the linked document", 'borderland' ),
	array(
		"_self" => esc_html__( "Self", 'borderland' ),
		"_blank" => esc_html__( "Blank", 'borderland' )
	)
);
$eltdCarousels->addChild(
	"eltd_carousel-item-target",
	$eltd_carousel_item_target
);