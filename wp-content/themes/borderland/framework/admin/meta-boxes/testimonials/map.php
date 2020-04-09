<?php

//Testimonials

$eltdTestimonials = new BorderlandElatedMetaBox(
	"testimonials",
	esc_html__( "Testimonials", 'borderland' )
);
$borderland_elated_framework->eltdMetaBoxes->addMetaBox(
	"testimonials",
	$eltdTestimonials
);

$eltd_show_testimonial_title_text = new BorderlandElatedMetaField(
	"yesno",
	"eltd_show_testimonial_title_text",
	"no",
	esc_html__( "Hide Testimonial Title Text", 'borderland' ),
	esc_html__( "Enable this option to hide the title text", 'borderland' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "#eltdf_eltd_testimonial_title_container",
		"dependence_show_on_yes" => ""
	)
);
$eltdTestimonials->addChild(
	"eltd_show_testimonial_title_text",
	$eltd_show_testimonial_title_text
);

$eltd_testimonial_title_container = new BorderlandElatedContainer(
	"eltd_testimonial_title_container",
	"eltd_show_testimonial_title_text",
	"yes"
);
$eltdTestimonials->addChild(
	"eltd_testimonial_title_container",
	$eltd_testimonial_title_container
);

$eltd_testimonial_title = new BorderlandElatedMetaField(
	"text",
	"eltd_testimonial_title",
	"",
	esc_html__( "Title", 'borderland' ),
	esc_html__( "Enter testimonial title", 'borderland' )
);
$eltd_testimonial_title_container->addChild(
	"eltd_testimonial_title",
	$eltd_testimonial_title
);

$eltd_testimonial_author = new BorderlandElatedMetaField(
	"text",
	"eltd_testimonial-author",
	"",
	esc_html__( "Author", 'borderland' ),
	esc_html__( "Enter author name", 'borderland' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial-author",
	$eltd_testimonial_author
);

$eltd_testimonial_author_position = new BorderlandElatedMetaField(
	"text",
	"eltd_testimonial_author_position",
	"",
	esc_html__( "Job Position", 'borderland' ),
	esc_html__( "Enter job position name", 'borderland' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial_author_position",
	$eltd_testimonial_author_position
);

$eltd_testimonial_text = new BorderlandElatedMetaField(
	"textarea",
	"eltd_testimonial-text",
	"",
	esc_html__( "Text", 'borderland' ),
	esc_html__( "Enter testimonial text", 'borderland' )
);
$eltdTestimonials->addChild(
	"eltd_testimonial-text",
	$eltd_testimonial_text
);