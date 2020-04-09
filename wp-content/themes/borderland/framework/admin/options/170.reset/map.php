<?php

$resetPage = new BorderlandElatedAdminPage(
	"21",
	esc_html__( "Reset", 'borderland' ),
	"fa fa-retweet"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	esc_html__( "Reset", 'borderland' ),
	$resetPage
);

//Reset

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Reset to Defaults", 'borderland' ),
	"reset_panel"
);
$resetPage->addChild(
	"panel1",
	$panel1
);

$reset_to_defaults = new BorderlandElatedField(
	"yesno",
	"reset_to_defaults",
	"no",
	esc_html__( "Reset to Defaults", 'borderland' ),
	esc_html__( "This option will reset all Elated Options values to defaults", 'borderland' )
);
$panel1->addChild(
	"reset_to_defaults",
	$reset_to_defaults
);