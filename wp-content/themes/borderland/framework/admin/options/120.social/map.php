<?php

$socialPage = new BorderlandElatedAdminPage(
	"12",
	esc_html__( "Social", 'borderland' ),
	"fa fa-share-alt"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"socialPage",
	$socialPage
);

//Enable Social Share

$panel2 = new BorderlandElatedPanel(
	esc_html__( "Enable Social Share", 'borderland' ),
	"social_sharing_panel"
);
$socialPage->addChild(
	"panel2",
	$panel2
);

$enable_social_share = new BorderlandElatedField(
	"yesno",
	"enable_social_share",
	"no",
	esc_html__( "Enable Social Share", 'borderland' ),
	esc_html__( "Enabling this option will allow social share on networks of your choice", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_social_networks_panel,#eltdf_show_social_share_panel"
	)
);
$panel2->addChild(
	"enable_social_share",
	$enable_social_share
);

//Show Social Share

$panel3 = new BorderlandElatedPanel(
	esc_html__( "Show Social Share On", 'borderland' ),
	"show_social_share_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel3",
	$panel3
);

$post_types_names_post = new BorderlandElatedField(
	"flagpost",
	"post_types_names_post",
	"",
	esc_html__( "Posts", 'borderland' ),
	esc_html__( "Show Social Share on Blog Posts", 'borderland' )
);
$panel3->addChild(
	"post_types_names_post",
	$post_types_names_post
);

$post_types_names_page = new BorderlandElatedField(
	"flagpage",
	"post_types_names_page",
	"",
	esc_html__( "Pages", 'borderland' ),
	esc_html__( "Show Social Share on Pages", 'borderland' )
);
$panel3->addChild(
	"post_types_names_page",
	$post_types_names_page
);

$post_types_names_attachment = new BorderlandElatedField(
	"flagmedia",
	"post_types_names_attachment",
	"",
	esc_html__( "Media", 'borderland' ),
	esc_html__( "Show Social Share for Images and Videos", 'borderland' )
);
$panel3->addChild(
	"post_types_names_attachment",
	$post_types_names_attachment
);

$post_types_names_portfolio_page = new BorderlandElatedField(
	"flagportfolio",
	"post_types_names_portfolio_page",
	"",
	esc_html__( "Portfolio Item", 'borderland' ),
	esc_html__( "Show Social Share for Portfolio Items", 'borderland' )
);
$panel3->addChild(
	"post_types_names_portfolio_page",
	$post_types_names_portfolio_page
);

if ( borderland_elated_is_woocommerce_installed() ) {
	$post_types_names_product = new BorderlandElatedField(
		"flagproduct",
		"post_types_names_product",
		"",
		esc_html__( "Product", 'borderland' ),
		esc_html__( "Show Social Share for Product Items", 'borderland' )
	);
	$panel3->addChild(
		"post_types_names_product",
		$post_types_names_product
	);
}

//Social Share Networks

$panel4 = new BorderlandElatedPanel(
	esc_html__( "Social Networks", 'borderland' ),
	"social_networks_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel4",
	$panel4
);

//Facebook

$facebook_subtitle = new BorderlandElatedTitle(
	"facebook_subtitle",
	esc_html__( "Share on Facebook", 'borderland' )
);
$panel4->addChild(
	"facebook_subtitle",
	$facebook_subtitle
);

$enable_facebook_share = new BorderlandElatedField(
	"yesno",
	"enable_facebook_share",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via Facebook", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_facebook_share_container"
	)
);
$panel4->addChild(
	"enable_facebook_share",
	$enable_facebook_share
);

$enable_facebook_share_container = new BorderlandElatedContainer(
	"enable_facebook_share_container",
	"enable_facebook_share",
	"no"
);
$panel4->addChild(
	"enable_facebook_share_container",
	$enable_facebook_share_container
);

$facebook_icon = new BorderlandElatedField(
	"image",
	"facebook_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_facebook_share_container->addChild(
	"facebook_icon",
	$facebook_icon
);

//Twitter
$twitter_subtitle = new BorderlandElatedTitle(
	"twitter_subtitle",
	esc_html__( "Share on Twitter", 'borderland' )
);
$panel4->addChild(
	"twitter_subtitle",
	$twitter_subtitle
);

$enable_twitter_share = new BorderlandElatedField(
	"yesno",
	"enable_twitter_share",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via Twitter", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_twitter_share_container"
	)
);
$panel4->addChild(
	"enable_twitter_share",
	$enable_twitter_share
);
$enable_twitter_share_container = new BorderlandElatedContainer(
	"enable_twitter_share_container",
	"enable_twitter_share",
	"no"
);
$panel4->addChild(
	"enable_twitter_share_container",
	$enable_twitter_share_container
);
$twitter_icon = new BorderlandElatedField(
	"image",
	"twitter_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_icon",
	$twitter_icon
);
$twitter_via = new BorderlandElatedField(
	"text",
	"twitter_via",
	"",
	esc_html__( "Via", 'borderland' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_via",
	$twitter_via
);

//Google Plus

$google_plus_subtitle = new BorderlandElatedTitle(
	"google_plus_subtitle",
	esc_html__( "Share on Google Plus", 'borderland' )
);
$panel4->addChild(
	"google_plus_subtitle",
	$google_plus_subtitle
);

$enable_google_plus = new BorderlandElatedField(
	"yesno",
	"enable_google_plus",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via Google Plus", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_google_plus_container"
	)
);
$panel4->addChild(
	"enable_google_plus",
	$enable_google_plus
);
$enable_google_plus_container = new BorderlandElatedContainer(
	"enable_google_plus_container",
	"enable_google_plus",
	"no"
);
$panel4->addChild(
	"enable_google_plus_container",
	$enable_google_plus_container
);
$google_plus_icon = new BorderlandElatedField(
	"image",
	"google_plus_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_google_plus_container->addChild(
	"google_plus_icon",
	$google_plus_icon
);

//LinkedIn

$linkedin_subtitle = new BorderlandElatedTitle(
	"linkedin_subtitle",
	esc_html__( "Share on LinkedIn", 'borderland' )
);
$panel4->addChild(
	"linkedin_subtitle",
	$linkedin_subtitle
);

$enable_linkedin = new BorderlandElatedField(
	"yesno",
	"enable_linkedin",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via LinkedIn", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_linkedin_container"
	)
);
$panel4->addChild(
	"enable_linkedin",
	$enable_linkedin
);
$enable_linkedin_container = new BorderlandElatedContainer(
	"enable_linkedin_container",
	"enable_linkedin",
	"no"
);
$panel4->addChild(
	"enable_linkedin_container",
	$enable_linkedin_container
);
$linkedin_icon = new BorderlandElatedField(
	"image",
	"linkedin_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_linkedin_container->addChild(
	"linkedin_icon",
	$linkedin_icon
);

//Tumblr

$tumblr_subtitle = new BorderlandElatedTitle(
	"tumblr_subtitle",
	esc_html__( "Share on Tumblr", 'borderland' )
);
$panel4->addChild(
	"tumblr_subtitle",
	$tumblr_subtitle
);

$enable_tumblr = new BorderlandElatedField(
	"yesno",
	"enable_tumblr",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via Tumblr", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_tumblr_container"
	)
);
$panel4->addChild(
	"enable_tumblr",
	$enable_tumblr
);

$enable_tumblr_container = new BorderlandElatedContainer(
	"enable_tumblr_container",
	"enable_tumblr",
	"no"
);
$panel4->addChild(
	"enable_tumblr_container",
	$enable_tumblr_container
);

$tumblr_icon = new BorderlandElatedField(
	"image",
	"tumblr_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_tumblr_container->addChild(
	"tumblr_icon",
	$tumblr_icon
);

// Pinterest

$pinterest_subtitle = new BorderlandElatedTitle(
	"pinterest_subtitle",
	esc_html__( "Share on Pinterest", 'borderland' )
);
$panel4->addChild(
	"pinterest_subtitle",
	$pinterest_subtitle
);

$enable_pinterest = new BorderlandElatedField(
	"yesno",
	"enable_pinterest",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via Pinterest", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_pinterest_container"
	)
);
$panel4->addChild(
	"enable_pinterest",
	$enable_pinterest
);
$enable_pinterest_container = new BorderlandElatedContainer(
	"enable_pinterest_container",
	"enable_pinterest",
	"no"
);
$panel4->addChild(
	"enable_pinterest_container",
	$enable_pinterest_container
);
$pinterest_icon = new BorderlandElatedField(
	"image",
	"pinterest_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_pinterest_container->addChild(
	"pinterest_icon",
	$pinterest_icon
);

//VK

$vk_subtitle = new BorderlandElatedTitle(
	"vk_subtitle",
	esc_html__( "Share on VK", 'borderland' )
);
$panel4->addChild(
	"vk_subtitle",
	$vk_subtitle
);

$enable_vk = new BorderlandElatedField(
	"yesno",
	"enable_vk",
	"no",
	esc_html__( "Enable Share", 'borderland' ),
	esc_html__( "Enabling this option will allow sharing via VK", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_vk_container"
	)
);
$panel4->addChild(
	"enable_vk",
	$enable_vk
);
$enable_vk_container = new BorderlandElatedContainer(
	"enable_vk_container",
	"enable_vk",
	"no"
);
$panel4->addChild(
	"enable_vk_container",
	$enable_vk_container
);
$vk_icon = new BorderlandElatedField(
	"image",
	"vk_icon",
	"",
	esc_html__( "Upload Icon", 'borderland' ),
	""
);
$enable_vk_container->addChild(
	"vk_icon",
	$vk_icon
);