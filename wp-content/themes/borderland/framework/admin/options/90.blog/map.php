<?php

$blogPage = new BorderlandElatedAdminPage(
	"8",
	esc_html__( "Blog", 'borderland' ),
	"fa fa-files-o"
);
$borderland_elated_framework->eltdOptions->addAdminPage(
	"blogPage",
	$blogPage
);

// Blog Post Lists - General

$panel1 = new BorderlandElatedPanel(
	esc_html__( "Blog Lists", 'borderland' ),
	"post_lists_general_panel"
);
$blogPage->addChild(
	"panel1",
	$panel1
);

$blog_style = new BorderlandElatedField(
	"select",
	"blog_style",
	"1",
	esc_html__( "Archive and Category Layout", 'borderland' ),
	esc_html__( "Choose a default blog layout for archived Blog Post Lists and Category Blog Lists", 'borderland' ),
	array(
		"1" => esc_html__( "Blog: Standard", 'borderland' ),
		"2" => esc_html__( "Blog: Masonry", 'borderland' ),
		"3" => esc_html__( "Blog: Masonry Full Width", 'borderland' ),
		"4" => esc_html__( "Blog: Standard Whole Post", 'borderland' )
	)
);
$panel1->addChild(
	"blog_style",
	$blog_style
);

$category_blog_sidebar = new BorderlandElatedField(
	"select",
	"category_blog_sidebar",
	"default",
	esc_html__( "Archive and Category Sidebar", 'borderland' ),
	esc_html__( "Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists", 'borderland' ),
	array(
		"default" => esc_html__( "No Sidebar", 'borderland' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'borderland' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'borderland' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'borderland' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'borderland' )
	)
);
$panel1->addChild(
	"category_blog_sidebar",
	$category_blog_sidebar
);

$pagination = new BorderlandElatedField(
	"yesno",
	"pagination",
	"yes",
	esc_html__( "Pagination", 'borderland' ),
	esc_html__( "Enabling this option will display pagination links on bottom of Blog Post List", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_hide_pagination_list_container"
	)
);
$panel1->addChild(
	"pagination",
	$pagination
);

$blog_hide_pagination_list_container = new BorderlandElatedContainer(
	"blog_hide_pagination_list_container",
	"pagination",
	""
);
$panel1->addChild(
	"blog_hide_pagination_list_container",
	$blog_hide_pagination_list_container
);

$blog_pagination_type = new BorderlandElatedField(
	"select",
	"blog_pagination_type",
	"standard",
	esc_html__( "Pagination type", 'borderland' ),
	esc_html__( "Choose type of pagination", 'borderland' ),
	array(
		"standard" => esc_html__( "Standard", 'borderland' ),
		"prev_and_next" => esc_html__( "Only Previous and Next", 'borderland' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"prev_and_next" => "#eltdf_blog_page_range_container",
			"standard"      => "#eltdf_blog_pagination_text_container"
		),
		"show"       => array(
			"standard"      => "#eltdf_blog_page_range_container",
			"prev_and_next" => "#eltdf_blog_pagination_text_container"
		)
	)
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_type",
	$blog_pagination_type
);

$blog_page_range_container = new BorderlandElatedContainer(
	"blog_page_range_container",
	"blog_pagination_type",
	"prev_and_next"
);
$blog_hide_pagination_list_container->addChild(
	"blog_page_range_container",
	$blog_page_range_container
);

$blog_page_range = new BorderlandElatedField(
	"text",
	"blog_page_range",
	"",
	esc_html__( "Pagination Range limit", 'borderland' ),
	esc_html__( "Enter a number that will limit pagination to a certain range of links", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_page_range_container->addChild(
	"blog_page_range",
	$blog_page_range
);

$blog_pagination_text_container = new BorderlandElatedContainer(
	"blog_pagination_text_container",
	"blog_pagination_type",
	"standard"
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_text_container",
	$blog_pagination_text_container
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Labels for Buttons", 'borderland' ),
	esc_html__( "Enter labels you want for Previous and Next buttons (Previous and Next are standard labels)", 'borderland' )
);
$blog_pagination_text_container->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_pagination_previous_label = new BorderlandElatedField(
	"textsimple",
	"blog_pagination_previous_label",
	"",
	esc_html__( "Previous Label", 'borderland' )
);
$row1->addChild(
	"blog_pagination_previous_label",
	$blog_pagination_previous_label
);

$blog_pagination_next_label = new BorderlandElatedField(
	"textsimple",
	"blog_pagination_next_label",
	"",
	esc_html__( "Next Label", 'borderland' )
);
$row1->addChild(
	"blog_pagination_next_label",
	$blog_pagination_next_label
);

$blog_pagination_border_above_yesno = new BorderlandElatedField(
	"yesno",
	"blog_pagination_border_above_yesno",
	"no",
	esc_html__( "Border Above Pagination", 'borderland' ),
	esc_html__( "Enabling this option will display border above pagination", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#eltdf_blog_pagination_border_container"
	)
);
$blog_page_range_container->addChild(
	"blog_pagination_border_above_yesno",
	$blog_pagination_border_above_yesno
);

$blog_pagination_border_container = new BorderlandElatedContainer(
	"blog_pagination_border_container",
	"blog_pagination_border_above_yesno",
	"no"
);
$blog_page_range_container->addChild(
	"blog_pagination_border_container",
	$blog_pagination_border_container
);

$group18 = new BorderlandElatedGroup(
	esc_html__( "Border Style", 'borderland' ),
	esc_html__( "Define style for border top on pagination", 'borderland' )
);
$blog_pagination_border_container->addChild(
	"group18",
	$group18
);

$row1 = new BorderlandElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_pgn_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_pgn_border_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$row1->addChild(
	"blog_pgn_border_color",
	$blog_pgn_border_color
);

$blog_pgn_border_width = new BorderlandElatedField(
	"textsimple",
	"blog_pgn_border_width",
	"",
	esc_html__( "Width (px)", 'borderland' )
);
$row1->addChild(
	"blog_pgn_border_width",
	$blog_pgn_border_width
);

$blog_pgn_border_style = new BorderlandElatedField(
	"selectsimple",
	"blog_pgn_border_style",
	"",
	esc_html__( "Style", 'borderland' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'borderland' ),
		"dotted" => esc_html__( "Dotted", 'borderland' ),
		"dashed" => esc_html__( "Dashed", 'borderland' )
	)
);
$row1->addChild(
	"blog_pgn_border_style",
	$blog_pgn_border_style
);

$blog_pagination_border_margin = new BorderlandElatedField(
	"text",
	"blog_pagination_border_margin",
	"",
	esc_html__( "Margin from Border (px)", 'borderland' ),
	esc_html__( "Set margin from border to pagination buttons", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_pagination_border_container->addChild(
	"blog_pagination_border_margin",
	$blog_pagination_border_margin
);

$number_of_chars = new BorderlandElatedField(
	"text",
	"number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'borderland' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"number_of_chars",
	$number_of_chars
);

// Blog Single

$panel20 = new BorderlandElatedPanel(
	esc_html__( "Blog Single", 'borderland' ),
	"blog_single_panel"
);
$blogPage->addChild(
	"panel20",
	$panel20
);

$blog_single_sidebar = new BorderlandElatedField(
	"select",
	"blog_single_sidebar",
	"default",
	esc_html__( "Sidebar Layout", 'borderland' ),
	esc_html__( "Choose a sidebar layout for Blog Single pages", 'borderland' ),
	array(
		"default" => esc_html__( "No Sidebar", 'borderland' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'borderland' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'borderland' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'borderland' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'borderland' )
	)
);
$panel20->addChild(
	"blog_single_sidebar",
	$blog_single_sidebar
);

$custom_sidebars = borderland_elated_get_custom_sidebars();

$blog_single_sidebar_custom_display = new BorderlandElatedField(
	"selectblank",
	"blog_single_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'borderland' ),
	esc_html__( "Choose a sidebar to display on Blog Single pages", 'borderland' ),
	$custom_sidebars
);
$panel20->addChild(
	"blog_single_sidebar_custom_display",
	$blog_single_sidebar_custom_display
);

$blog_single_show_ql_icon = new BorderlandElatedField(
	"yesno",
	"blog_single_show_ql_icon",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'borderland' ),
	esc_html__( "Enabling this option will show Quote/Link Icon on Blog Single posts", 'borderland' )
);
$panel20->addChild(
	"blog_single_show_ql_icon",
	$blog_single_show_ql_icon
);

$blog_show_subtitle_on_single = new BorderlandElatedField(
	"yesno",
	"blog_show_subtitle_on_single",
	"no",
	esc_html__( "Enable Subtitle on Single Post Pages", 'borderland' ),
	esc_html__( "Enable Subtitle on Single Post Pages", 'borderland' )
);
$panel20->addChild(
	"blog_show_subtitle_on_single",
	$blog_show_subtitle_on_single
);

$blog_single_navigation = new BorderlandElatedField(
	"yesno",
	"blog_single_navigation",
	"no",
	esc_html__( "Enable Prev/Next Single Post Navigation Links", 'borderland' ),
	esc_html__( "Enable navigation links through the blog posts (left and right arrows will appear)", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_hide_pagination_container"
	)
);
$panel20->addChild(
	"blog_single_navigation",
	$blog_single_navigation
);

$blog_hide_pagination_container = new BorderlandElatedContainer(
	"blog_hide_pagination_container",
	"blog_single_navigation",
	"no"
);
$panel20->addChild(
	"blog_hide_pagination_container",
	$blog_hide_pagination_container
);

$blog_navigation_through_same_category = new BorderlandElatedField(
	"yesno",
	"blog_navigation_through_same_category",
	"no",
	esc_html__( "Enable Navigation Only in Current Category", 'borderland' ),
	esc_html__( "Limit your navigation only through current category", 'borderland' )
);
$blog_hide_pagination_container->addChild(
	"blog_navigation_through_same_category",
	$blog_navigation_through_same_category
);

$blog_single_title_tags = new BorderlandElatedField(
	"select",
	"blog_single_title_tags",
	"h5",
	esc_html__( "Headlines Below Post Content", 'borderland' ),
	esc_html__( 'Choose a tag for headlines below post content ("Tags", "Post a comment", etc)', 'borderland' ),
	array(
		"h2" => esc_html__( "h2", 'borderland' ),
		"h3" => esc_html__( "h3", 'borderland' ),
		"h4" => esc_html__( "h4", 'borderland' ),
		"h5" => esc_html__( "h5", 'borderland' ),
		"h6" => esc_html__( "h6", 'borderland' )
	)
);
$panel20->addChild(
	"blog_single_title_tags",
	$blog_single_title_tags
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Blog Single Spacing", 'borderland' ),
	esc_html__( "Set spacing for single post pages", 'borderland' )
);
$panel20->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_tags_holder_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_single_tags_holder_margin_top",
	"",
	esc_html__( "Margin Above Tags(px)", 'borderland' )
);
$row1->addChild(
	"blog_single_tags_holder_margin_top",
	$blog_single_tags_holder_margin_top
);

$blog_single_navigation_margin = new BorderlandElatedField(
	"textsimple",
	"blog_single_navigation_margin",
	"",
	esc_html__( "Margin Above and Under Navigation(px)", 'borderland' )
);
$row1->addChild(
	"blog_single_navigation_margin",
	$blog_single_navigation_margin
);

$blog_single_comments_holder_margin = new BorderlandElatedField(
	"textsimple",
	"blog_single_comments_holder_margin",
	"",
	esc_html__( "Margin Above and Under Comments(px)", 'borderland' )
);
$row1->addChild(
	"blog_single_comments_holder_margin",
	$blog_single_comments_holder_margin
);

$post_info_data_single = new BorderlandElatedTitle(
	"post_info_data_single",
	esc_html__( "Post Info Data Fields", 'borderland' )
);
$panel20->addChild(
	"post_info_data_single",
	$post_info_data_single
);

$blog_single_show_date = new BorderlandElatedField(
	"yesno",
	"blog_single_show_date",
	"yes",
	esc_html__( "Show Date", 'borderland' ),
	esc_html__( "Enabling this option will show date on Blog Single posts", 'borderland' )
);
$panel20->addChild(
	"blog_single_show_date",
	$blog_single_show_date
);

$blog_single_show_like = new BorderlandElatedField(
	"yesno",
	"blog_single_show_like",
	"no",
	esc_html__( "Show Like", 'borderland' ),
	esc_html__( "Enabling this option will turn on 'Likes' on Blog Single posts", 'borderland' )
);
$panel20->addChild(
	"blog_single_show_like",
	$blog_single_show_like
);

$blog_single_show_social_share = new BorderlandElatedField(
	"yesno",
	"blog_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'borderland' ),
	esc_html__( "Enabling this option will show share on Single Post", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_single_share_options_container"
	)
);
$panel20->addChild(
	"blog_single_show_social_share",
	$blog_single_show_social_share
);

$blog_single_share_options_container = new BorderlandElatedContainer(
	"blog_single_share_options_container",
	"blog_single_show_social_share",
	"no"
);
$panel20->addChild(
	"blog_single_share_options_container",
	$blog_single_share_options_container
);

$blog_single_select_share_option = new BorderlandElatedField(
	"select",
	"blog_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'borderland' ),
	esc_html__( "Choose Social Share Style for Single Post", 'borderland' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'borderland' ),
		"list" => esc_html__( "Social Share List", 'borderland' )
	)
);

$blog_single_share_options_container->addChild(
	"blog_single_select_share_option",
	$blog_single_select_share_option
);

$blog_single_show_category = new BorderlandElatedField(
	"yesno",
	"blog_single_show_category",
	"yes",
	esc_html__( "Show Category", 'borderland' ),
	esc_html__( "Enabling this option will show category/categories on Blog Single posts", 'borderland' )
);
$panel20->addChild(
	"blog_single_show_category",
	$blog_single_show_category
);

$blog_author_info = new BorderlandElatedField(
	"yesno",
	"blog_author_info",
	"no",
	esc_html__( "Show Author Info", 'borderland' ),
	esc_html__( "Enabling this option will display author name and descriptions on Blog Single pages", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_blog_author_info_container"
	)
);
$panel20->addChild(
	"blog_author_info",
	$blog_author_info
);

$enable_blog_author_info_container = new BorderlandElatedContainer(
	"enable_blog_author_info_container",
	"blog_author_info",
	"no"
);
$panel20->addChild(
	"enable_blog_author_info_container",
	$enable_blog_author_info_container
);

$enable_author_info_email = new BorderlandElatedField(
	"yesno",
	"enable_author_info_email",
	"no",
	esc_html__( "Show Author Email", 'borderland' ),
	esc_html__( "Enabling this option will show author email", 'borderland' )
);
$enable_blog_author_info_container->addChild(
	"enable_author_info_email",
	$enable_author_info_email
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Blog Single Author Info Box Style", 'borderland' ),
	esc_html__( "Set styles for author info box on single post pages", 'borderland' )
);
$enable_blog_author_info_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_margin_top",
	"",
	esc_html__( "Margin Top for Author Info Holder (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_margin_top",
	$blog_single_post_author_info_margin_top
);

$blog_single_post_author_info_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_author_info_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_background_color",
	$blog_single_post_author_info_background_color
);

$blog_single_post_author_info_border_width = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_border_width",
	"",
	esc_html__( "Border width(px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_border_width",
	$blog_single_post_author_info_border_width
);

$blog_single_post_author_info_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_author_info_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_border_color",
	$blog_single_post_author_info_border_color
);

$row2 = new BorderlandElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_padding_top = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_top",
	$blog_single_post_author_info_padding_top
);

$blog_single_post_author_info_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_bottom",
	$blog_single_post_author_info_padding_bottom
);

$blog_single_post_author_info_padding_left = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_left",
	$blog_single_post_author_info_padding_left
);

$blog_single_post_author_info_padding_right = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_right",
	$blog_single_post_author_info_padding_right
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Blog Single Author Info Title Style", 'borderland' ),
	esc_html__( "Set styles for author info title on single post pages", 'borderland' )
);
$enable_blog_author_info_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_author_info_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_title_color",
	$blog_single_post_author_info_title_color
);

$blog_single_post_author_info_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_single_post_author_info_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_title_font_family",
	$blog_single_post_author_info_title_font_family
);

$blog_single_post_author_info_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_title_fontsize",
	$blog_single_post_author_info_title_fontsize
);

$blog_single_post_author_info_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_title_lineheight",
	$blog_single_post_author_info_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_single_post_author_info_title_fontstyle",
	$blog_single_post_author_info_title_fontstyle
);

$blog_single_post_author_info_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_single_post_author_info_title_fontweight",
	$blog_single_post_author_info_title_fontweight
);

$blog_single_post_author_info_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_single_post_author_info_title_texttransform",
	$blog_single_post_author_info_title_texttransform
);

$blog_single_post_author_info_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_title_letterspacing",
	$blog_single_post_author_info_title_letterspacing
);

$row3 = new BorderlandElatedRow();
$group2->addChild(
	"row3",
	$row3
);

$blog_single_post_author_info_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom for Author Info Title (px)", 'borderland' )
);
$row3->addChild(
	"blog_single_post_author_info_title_margin_bottom",
	$blog_single_post_author_info_title_margin_bottom
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Blog Single Author Info Text Style", 'borderland' ),
	esc_html__( "Set styles for author info text on single post pages", 'borderland' )
);
$enable_blog_author_info_container->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_text_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_author_info_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_text_color",
	$blog_single_post_author_info_text_color
);

$blog_single_post_author_info_text_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_single_post_author_info_text_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_text_font_family",
	$blog_single_post_author_info_text_font_family
);

$blog_single_post_author_info_text_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_text_fontsize",
	$blog_single_post_author_info_text_fontsize
);

$blog_single_post_author_info_text_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_author_info_text_lineheight",
	$blog_single_post_author_info_text_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_text_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_single_post_author_info_text_fontstyle",
	$blog_single_post_author_info_text_fontstyle
);

$blog_single_post_author_info_text_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_single_post_author_info_text_fontweight",
	$blog_single_post_author_info_text_fontweight
);

$blog_single_post_author_info_text_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_single_post_author_info_text_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_single_post_author_info_text_texttransform",
	$blog_single_post_author_info_text_texttransform
);

$blog_single_post_author_info_text_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_author_info_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_author_info_text_letterspacing",
	$blog_single_post_author_info_text_letterspacing
);

$blog_single_post_author_image_border_radius = new BorderlandElatedField(
	"text",
	"blog_single_post_author_image_border_radius",
	"",
	esc_html__( "Border Radius Around Image (px)", 'borderland' ),
	esc_html__( "Define border radius around image", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$enable_blog_author_info_container->addChild(
	"blog_single_post_author_image_border_radius",
	$blog_single_post_author_image_border_radius
);

$blog_single_show_comments = new BorderlandElatedField(
	"yesno",
	"blog_single_show_comments",
	"yes",
	esc_html__( "Show Comments", 'borderland' ),
	esc_html__( "Enabling this option will show comments on Blog Single posts", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_enable_blog_comments_container"
	)
);
$panel20->addChild(
	"blog_single_show_comments",
	$blog_single_show_comments
);

$enable_blog_comments_container = new BorderlandElatedContainer(
	"enable_blog_comments_container",
	"blog_single_show_comments",
	"no"
);
$panel20->addChild(
	"enable_blog_comments_container",
	$enable_blog_comments_container
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Comments Box Style", 'borderland' ),
	esc_html__( "Set styles for comments box on single post pages", 'borderland' )
);
$enable_blog_comments_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_background_color",
	$blog_single_post_comments_background_color
);

$blog_single_post_comments_border_width = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_border_width",
	"",
	esc_html__( "Border width(px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_border_width",
	$blog_single_post_comments_border_width
);

$blog_single_post_comments_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_border_color",
	$blog_single_post_comments_border_color
);

$blog_single_post_comments_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_margin_bottom",
	$blog_single_post_comments_margin_bottom
);

$row2 = new BorderlandElatedRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_comments_padding_top = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_comments_padding_top",
	$blog_single_post_comments_padding_top
);

$blog_single_post_comments_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_comments_padding_bottom",
	$blog_single_post_comments_padding_bottom
);

$blog_single_post_comments_padding_left = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_comments_padding_left",
	$blog_single_post_comments_padding_left
);

$blog_single_post_comments_padding_right = new BorderlandElatedField(
	"textsimple",
	"blog_single_post_comments_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row2->addChild(
	"blog_single_post_comments_padding_right",
	$blog_single_post_comments_padding_right
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Comments Color Style", 'borderland' ),
	esc_html__( "Set styles for comments on single post pages", 'borderland' )
);
$enable_blog_comments_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_title_color",
	"",
	esc_html__( "Title Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_title_color",
	$blog_single_post_comments_title_color
);

$blog_single_post_comments_text_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_text_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_text_color",
	$blog_single_post_comments_text_color
);

$blog_single_post_comments_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_link_color",
	$blog_single_post_comments_link_color
);

$blog_single_post_comments_date_color = new BorderlandElatedField(
	"colorsimple",
	"blog_single_post_comments_date_color",
	"",
	esc_html__( "Date Color", 'borderland' )
);
$row1->addChild(
	"blog_single_post_comments_date_color",
	$blog_single_post_comments_date_color
);

$blog_single_comments_image_border_radius = new BorderlandElatedField(
	"text",
	"blog_single_comments_image_border_radius",
	"",
	esc_html__( "Border Radius Around Image (px)", 'borderland' ),
	esc_html__( "Define border radius around image", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$enable_blog_comments_container->addChild(
	"blog_single_comments_image_border_radius",
	$blog_single_comments_image_border_radius
);

// Advanced Options

$panel_advanced_options = new BorderlandElatedPanel(
	esc_html__( "Advanced Options", 'borderland' ),
	"panel_advanced_options"
);
$blogPage->addChild(
	"panel_advanced_options",
	$panel_advanced_options
);

$blog_standard_type_show_options = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_options",
	"no",
	esc_html__( "Show Standard Template Options", 'borderland' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_standard_type_show_options",
	$blog_standard_type_show_options
);

$blog_masonry_show_options = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_options",
	"no",
	esc_html__( "Show Masonry & Masonry Full Width Template Options", 'borderland' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_show_options",
	$blog_masonry_show_options
);

$blog_vertical_loop_show_options = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_show_options",
	"no",
	esc_html__( "Show Vertical Loop Template Options", 'borderland' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_vertical_loop_show_options",
	$blog_vertical_loop_show_options
);

// Blog Post List - Blog: Masonry
$panel10 = new BorderlandElatedPanel(
	esc_html__( "Blog List Templates Options: Masonry & Masonry Full Width", 'borderland' ),
	"blog_masonry_post_lists",
	"blog_masonry_show_options",
	"no"
);
$blogPage->addChild(
	"panel10",
	$panel10
);

$blog_masonry_number_of_chars = new BorderlandElatedField(
	"text",
	"blog_masonry_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'borderland' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_number_of_chars",
	$blog_masonry_number_of_chars
);

$blog_masonry_read_more_button = new BorderlandElatedField(
	"yesno",
	"blog_masonry_read_more_button",
	"no",
	esc_html__( "Read More Button", 'borderland' ),
	esc_html__( "Enable Read More Button", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_read_more_button",
	$blog_masonry_read_more_button
);

$pagination_masonry = new BorderlandElatedField(
	"select",
	"pagination_masonry",
	"pagination",
	esc_html__( "Pagination on Masonry", 'borderland' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'borderland' ),
	array(
		"pagination" => esc_html__( "Pagination", 'borderland' ),
		"load_more" => esc_html__( "Load More", 'borderland' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'borderland' )
	)
);
$panel10->addChild(
	"pagination_masonry",
	$pagination_masonry
);

$blog_masonry_columns = new BorderlandElatedField(
	'select',
	'blog_masonry_columns',
	'two_columns',
	esc_html__( 'Masonry Blog Columns', 'borderland' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'borderland' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3'
	)
);
$panel10->addChild(
	'blog_masonry_columns',
	$blog_masonry_columns
);

$blog_masonry_full_width_columns = new BorderlandElatedField(
	'select',
	'blog_masonry_full_width_columns',
	'three_columns',
	esc_html__( 'Full Width Masonry Blog Columns', 'borderland' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'borderland' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel10->addChild(
	'blog_masonry_full_width_columns',
	$blog_masonry_full_width_columns
);

$blog_masonry_full_width_margin = new BorderlandElatedField(
	"text",
	"blog_masonry_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'borderland' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_full_width_margin",
	$blog_masonry_full_width_margin
);

$blog_masonry_filter = new BorderlandElatedField(
	"yesno",
	"blog_masonry_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'borderland' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_filter_container"
	)
);
$panel10->addChild(
	"blog_masonry_filter",
	$blog_masonry_filter
);

$blog_masonry_filter_container = new BorderlandElatedContainer(
	"blog_masonry_filter_container",
	"blog_masonry_filter",
	"no"
);
$panel10->addChild(
	"blog_masonry_filter_container",
	$blog_masonry_filter_container
);

// Blog Masonry Filter
$blog_masonry_filter_background_color = new BorderlandElatedField(
	"color",
	"blog_masonry_filter_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose color for background of filter area", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_background_color",
	$blog_masonry_filter_background_color
);

$blog_masonry_filter_height = new BorderlandElatedField(
	"text",
	"blog_masonry_filter_height",
	"",
	esc_html__( "Height (px)", 'borderland' ),
	esc_html__( "Enter height for filter area", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_height",
	$blog_masonry_filter_height
);

$blog_masonry_filter_margin_bottom = new BorderlandElatedField(
	"text",
	"blog_masonry_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'borderland' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_margin_bottom",
	$blog_masonry_filter_margin_bottom
);

$blog_masonry_filter_alignment = new BorderlandElatedField(
	"select",
	"blog_masonry_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'borderland' ),
	esc_html__( "Choose filter alignment", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_alignment",
	$blog_masonry_filter_alignment
);

$blog_masonry_enable_filter_title = new BorderlandElatedField(
	"yesno",
	"blog_masonry_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'borderland' ),
	esc_html__( "Enabling this option will show category filter title", 'borderland' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_enable_filter_title",
	$blog_masonry_enable_filter_title
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Title", 'borderland' ),
	esc_html__( "Define text styles for filter title", 'borderland' )
);
$blog_masonry_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_filter_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_title_color",
	$blog_masonry_filter_title_color
);
$blog_masonry_filter_title_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_title_font_size",
	$blog_masonry_filter_title_font_size
);
$blog_masonry_filter_title_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_title_line_height",
	$blog_masonry_filter_title_line_height
);
$blog_masonry_filter_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_masonry_filter_title_text_transform",
	$blog_masonry_filter_title_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_family",
	$blog_masonry_filter_title_font_family
);
$blog_masonry_filter_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_style",
	$blog_masonry_filter_title_font_style
);
$blog_masonry_filter_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_weight",
	$blog_masonry_filter_title_font_weight
);
$blog_masonry_filter_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_filter_title_letter_spacing",
	$blog_masonry_filter_title_letter_spacing
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Categories", 'borderland' ),
	esc_html__( "Define text styles for filter categories", 'borderland' )
);
$blog_masonry_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_filter_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_color",
	$blog_masonry_filter_color
);
$blog_masonry_filter_hovercolor = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_hovercolor",
	$blog_masonry_filter_hovercolor
);
$blog_masonry_filter_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_font_size",
	$blog_masonry_filter_font_size
);
$blog_masonry_filter_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_filter_line_height",
	$blog_masonry_filter_line_height
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_filter_font_family",
	$blog_masonry_filter_font_family
);
$blog_masonry_filter_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_filter_font_style",
	$blog_masonry_filter_font_style
);
$blog_masonry_filter_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_filter_font_weight",
	$blog_masonry_filter_font_weight
);
$blog_masonry_filter_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_filter_text_transform",
	$blog_masonry_filter_text_transform
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);
$blog_masonry_filter_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_filter_letter_spacing",
	$blog_masonry_filter_letter_spacing
);

$blog_masonry_filter_disable_separator = new BorderlandElatedField(
	"yesno",
	"blog_masonry_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'borderland' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'borderland' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_disable_separator",
	$blog_masonry_filter_disable_separator
);

$blog_masonry_type = new BorderlandElatedField(
	"select",
	"blog_masonry_type",
	"post_info_below_title",
	esc_html__( "Post Info Position", 'borderland' ),
	esc_html__( "Choose Post Info Position for Masonry Blog List", 'borderland' ),
	array(
		"post_info_below_title" => esc_html__( "Post Info Section Below Title", 'borderland' ),
		"post_info_at_bottom" => esc_html__( "Post Info Section at Bottom", 'borderland' )
	)
);
$panel10->addChild(
	"blog_masonry_type",
	$blog_masonry_type
);

$blog_masonry_content_position = new BorderlandElatedField(
	"select",
	"blog_masonry_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'borderland' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'borderland' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'borderland' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'borderland' )
	)
);
$panel10->addChild(
	"blog_masonry_content_position",
	$blog_masonry_content_position
);

$blog_masonry_post_meta_data_section = new BorderlandElatedTitle(
	"blog_masonry_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_post_meta_data_section",
	$blog_masonry_post_meta_data_section
);

$blog_masonry_show_categories = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_categories",
	"no",
	esc_html__( "Show Categories", 'borderland' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_show_categories",
	$blog_masonry_show_categories
);

$blog_masonry_show_comments = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_comments",
	"no",
	esc_html__( "Show Comments", 'borderland' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_show_comments",
	$blog_masonry_show_comments
);

$blog_masonry_show_author = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_author",
	"no",
	esc_html__( "Show Author Name", 'borderland' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_show_author",
	$blog_masonry_show_author
);

$blog_masonry_show_date = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_date",
	"no",
	esc_html__( "Show Date", 'borderland' ),
	esc_html__( "Enabling this option will show date on Post List", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_show_date",
	$blog_masonry_show_date
);

$blog_masonry_show_share = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_share",
	"no",
	esc_html__( "Show Share", 'borderland' ),
	esc_html__( "Enabling this option will show share on Post List", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_share_options_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_share",
	$blog_masonry_show_share
);

$blog_masonry_share_options_container = new BorderlandElatedContainer(
	"blog_masonry_share_options_container",
	"blog_masonry_show_share",
	"no"
);
$panel10->addChild(
	"blog_masonry_share_options_container",
	$blog_masonry_share_options_container
);

$blog_masonry_select_share_options_masonry_type = new BorderlandElatedField(
	"select",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'borderland' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'borderland' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'borderland' ),
		"list" => esc_html__( "Social Share List", 'borderland' )
	)
);

$blog_masonry_share_options_container->addChild(
	"blog_masonry_select_share_options_masonry_type",
	$blog_masonry_select_share_options_masonry_type
);

$blog_masonry_share_icon_color = new BorderlandElatedField(
	"color",
	"blog_masonry_share_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for share dropdown", 'borderland' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color",
	$blog_masonry_share_icon_color
);

$blog_masonry_share_icon_hover_color = new BorderlandElatedField(
	"color",
	"blog_masonry_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose icon hover color for share dropdown", 'borderland' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color",
	$blog_masonry_share_icon_hover_color
);

$blog_masonry_share_background_color = new BorderlandElatedField(
	"color",
	"blog_masonry_share_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for share dropdown list field", 'borderland' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_background_color",
	$blog_masonry_share_background_color
);

$blog_masonry_show_like = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_like",
	"no",
	esc_html__( "Show Likes", 'borderland' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'borderland' )
);
$panel10->addChild(
	"blog_masonry_show_like",
	$blog_masonry_show_like
);

$blog_masonry_post_design_style = new BorderlandElatedTitle(
	"blog_masonry_post_design_style",
	esc_html__( "Post Design Style", 'borderland' )
);
$panel10->addChild(
	"blog_masonry_post_design_style",
	$blog_masonry_post_design_style
);

$blog_masonry_post_alignment = new BorderlandElatedField(
	"select",
	"blog_masonry_post_alignment",
	"",
	esc_html__( "Post Alignment", 'borderland' ),
	esc_html__( "Choose alignment for whole post", 'borderland' ),
	array(
		"left" => esc_html__( "Left", 'borderland' ),
		"center" => esc_html__( "Center", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);
$panel10->addChild(
	"blog_masonry_post_alignment",
	$blog_masonry_post_alignment
);

$blog_masonry_enable_text_box = new BorderlandElatedField(
	"yesno",
	"blog_masonry_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'borderland' ),
	esc_html__( "Enable post text boxed features", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_enable_text_box_container"
	)
);
$panel10->addChild(
	"blog_masonry_enable_text_box",
	$blog_masonry_enable_text_box
);

$blog_masonry_enable_text_box_container = new BorderlandElatedContainer(
	"blog_masonry_enable_text_box_container",
	"blog_masonry_enable_text_box",
	"no"
);
$panel10->addChild(
	"blog_masonry_enable_text_box_container",
	$blog_masonry_enable_text_box_container
);

$blog_masonry_box_background_color = new BorderlandElatedField(
	"color",
	"blog_masonry_box_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for post text box", 'borderland' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_background_color",
	$blog_masonry_box_background_color
);

$blog_masonry_box_border_color = new BorderlandElatedField(
	"color",
	"blog_masonry_box_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for post text box", 'borderland' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_border_color",
	$blog_masonry_box_border_color
);

$blog_masonry_box_padding = new BorderlandElatedField(
	"text",
	"blog_masonry_box_padding",
	"",
	esc_html__( "Text box padding", 'borderland' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_padding",
	$blog_masonry_box_padding
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Paragraph", 'borderland' ),
	esc_html__( "Set paragraph color", 'borderland' )
);
$panel10->addChild(
	"group7",
	$group7
);

$blog_masonry_paragraph_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group_masonry_read_more_button = new BorderlandElatedGroup(
	esc_html__( "Read More Button Style", 'borderland' ),
	esc_html__( "Set read more button styles", 'borderland' )
);
$panel10->addChild(
	"group_masonry_read_more_button",
	$group_masonry_read_more_button
);

$row1 = new BorderlandElatedRow();
$group_masonry_read_more_button->addChild(
	"row1",
	$row1
);

$blog_masonry_read_more_button_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "Choose text color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_read_more_button_color",
	$blog_masonry_read_more_button_color
);

$blog_masonry_read_more_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_color_hover",
	"",
	esc_html__( "Text Hover Color", 'borderland' ),
	esc_html__( "Choose text hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_read_more_button_color_hover",
	$blog_masonry_read_more_button_color_hover
);

$blog_masonry_read_more_button_back_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_back_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_read_more_button_back_color",
	$blog_masonry_read_more_button_back_color
);

$blog_masonry_read_more_button_back_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Choose background hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_read_more_button_back_color_hover",
	$blog_masonry_read_more_button_back_color_hover
);

$row2 = new BorderlandElatedRow();
$group_masonry_read_more_button->addChild(
	"row2",
	$row2
);

$blog_masonry_read_more_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_masonry_read_more_button_border_color",
	$blog_masonry_read_more_button_border_color
);

$blog_masonry_read_more_button_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_read_more_button_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Choose border hover color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_masonry_read_more_button_border_color_hover",
	$blog_masonry_read_more_button_border_color_hover
);

$group_masonry_share_button = new BorderlandElatedGroup(
	esc_html__( "Share Button Style", 'borderland' ),
	esc_html__( "Set share button styles", 'borderland' )
);
$panel10->addChild(
	"group_masonry_share_button",
	$group_masonry_share_button
);

$row1 = new BorderlandElatedRow();
$group_masonry_share_button->addChild(
	"row1",
	$row1
);

$blog_masonry_share_button_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "Choose text color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_share_button_color",
	$blog_masonry_share_button_color
);

$blog_masonry_share_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_color_hover",
	"",
	esc_html__( "Text Hover Color", 'borderland' ),
	esc_html__( "Choose text hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_share_button_color_hover",
	$blog_masonry_share_button_color_hover
);

$blog_masonry_share_button_back_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_back_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_share_button_back_color",
	$blog_masonry_share_button_back_color
);

$blog_masonry_share_button_back_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Choose background hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_masonry_share_button_back_color_hover",
	$blog_masonry_share_button_back_color_hover
);

$row2 = new BorderlandElatedRow();
$group_masonry_share_button->addChild(
	"row2",
	$row2
);

$blog_masonry_share_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_masonry_share_button_border_color",
	$blog_masonry_share_button_border_color
);

$blog_masonry_share_button_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_share_button_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Choose border hover color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_masonry_share_button_border_color_hover",
	$blog_masonry_share_button_border_color_hover
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Background", 'borderland' ),
	esc_html__( "Set background of Quote/Link post type", 'borderland' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_background_image = new BorderlandElatedField(
	"yesnosimple",
	"blog_masonry_ql_background_image",
	"no",
	esc_html__( "Background Image", 'borderland' ),
	""
);
$row1->addChild(
	"blog_masonry_ql_background_image",
	$blog_masonry_ql_background_image
);

$blog_masonry_ql_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Default color is #ffffff.", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_background_color",
	$blog_masonry_ql_background_color
);

$blog_masonry_ql_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Default color is #e6ae48.", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_hover_background_color",
	$blog_masonry_ql_hover_background_color
);

$blog_masonry_show_ql_mark = new BorderlandElatedField(
	"yesno",
	"blog_masonry_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'borderland' ),
	esc_html__( "Show Icons for quote/link post format", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_masonry_show_ql_mark_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_ql_mark",
	$blog_masonry_show_ql_mark
);

$blog_masonry_show_ql_mark_container = new BorderlandElatedContainer(
	"blog_masonry_show_ql_mark_container",
	"blog_masonry_show_ql_mark",
	"no"
);
$panel10->addChild(
	"blog_masonry_show_ql_mark_container",
	$blog_masonry_show_ql_mark_container
);

$row1 = new BorderlandElatedRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_mark_color = new BorderlandElatedField(
	"color",
	"blog_masonry_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for quote/link post", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_mark_color",
	$blog_masonry_ql_mark_color
);

$blog_masonry_ql_mark_hover_color = new BorderlandElatedField(
	"color",
	"blog_masonry_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_mark_hover_color",
	$blog_masonry_ql_mark_hover_color
);

$blog_masonry_quote_size = new BorderlandElatedField(
	"text",
	"blog_masonry_quote_size",
	"",
	esc_html__( "Quote Icon Size (px)", 'borderland' ),
	esc_html__( "Define font size for quote post.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_masonry_quote_size",
	$blog_masonry_quote_size
);

$blog_masonry_link_size = new BorderlandElatedField(
	"text",
	"blog_masonry_link_size",
	"",
	esc_html__( "Link Icon Size (px)", 'borderland' ),
	esc_html__( "Define font size for link post.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_masonry_link_size",
	$blog_masonry_link_size
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel10->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_image_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_image_margin_bottom",
	$blog_masonry_image_margin_bottom
);

$blog_masonry_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_title_margin_bottom",
	$blog_masonry_title_margin_bottom
);

$blog_masonry_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_post_info_margin_bottom",
	$blog_masonry_post_info_margin_bottom
);

$blog_masonry_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_read_more_margin_top",
	$blog_masonry_read_more_margin_top
);

$row2 = new BorderlandElatedRow();
$group8->addChild(
	"row2",
	$row2
);

$blog_masonry_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_social_share_list_margin_top",
	$blog_masonry_social_share_list_margin_top
);

$blog_masonry_article_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_article_margin_bottom",
	$blog_masonry_article_margin_bottom
);

$blog_masonry_post_info_bottom_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_post_info_bottom_margin_top",
	"",
	esc_html__( "Margin Above Post Info When Post Info is on the bottom (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_post_info_bottom_margin_top",
	$blog_masonry_post_info_bottom_margin_top
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel10->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_info_margin_bottom",
	$blog_masonry_ql_info_margin_bottom
);

$blog_masonry_ql_quote_author_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_quote_author_margin_top",
	"",
	esc_html__( "Margin Above Quote Author (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_quote_author_margin_top",
	$blog_masonry_ql_quote_author_margin_top
);

$blog_masonry_ql_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_social_share_list_margin_top",
	$blog_masonry_ql_social_share_list_margin_top
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Border Arround Article", 'borderland' ),
	esc_html__( "Set border style for articles", 'borderland' )
);
$panel10->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_masonry_article_border_width = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_article_border_width",
	"",
	esc_html__( "Border Width (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_article_border_width",
	$blog_masonry_article_border_width
);

$blog_masonry_article_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_article_border_color",
	"",
	esc_html__( "Border Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_article_border_color",
	$blog_masonry_article_border_color
);

$post_text_styling = new BorderlandElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'borderland' )
);
$panel10->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new BorderlandElatedGroup(
	esc_html__( "Post Title", 'borderland' ),
	esc_html__( "Define title styles in this blog post template.", 'borderland' )
);
$panel10->addChild(
	"group2",
	$group2
);

$row1 = new BorderlandElatedRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_masonry_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_title_color",
	$blog_masonry_title_color
);

$blog_masonry_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_title_hover_color",
	$blog_masonry_title_hover_color
);

$blog_masonry_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_title_fontsize",
	$blog_masonry_title_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_title_lineheight",
	$blog_masonry_title_lineheight
);

$blog_masonry_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_title_google_fonts",
	$blog_masonry_title_google_fonts
);

$blog_masonry_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_title_fontstyle",
	$blog_masonry_title_fontstyle
);

$blog_masonry_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_title_fontweight",
	$blog_masonry_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_title_texttransform",
	$blog_masonry_title_texttransform
);

$blog_masonry_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_title_letterspacing",
	$blog_masonry_title_letterspacing
);

$group4 = new BorderlandElatedGroup(
	esc_html__( "Post Info Data", 'borderland' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'borderland' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new BorderlandElatedRow();
$group4->addChild(
	"row1",
	$row1
);

$blog_masonry_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_info_color",
	$blog_masonry_info_color
);

$blog_masonry_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_info_link_color",
	$blog_masonry_info_link_color
);

$blog_masonry_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_info_hover_color",
	$blog_masonry_info_hover_color
);

$blog_masonry_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_info_fontsize",
	$blog_masonry_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_info_lineheight",
	$blog_masonry_info_lineheight
);

$blog_masonry_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_info_google_fonts",
	$blog_masonry_info_google_fonts
);

$blog_masonry_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_info_fontstyle",
	$blog_masonry_info_fontstyle
);

$blog_masonry_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_info_fontweight",
	$blog_masonry_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_masonry_info_texttransform",
	$blog_masonry_info_texttransform
);

$blog_masonry_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_info_letterspacing",
	$blog_masonry_info_letterspacing
);

$group3 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Title Style", 'borderland' ),
	esc_html__( "Define title styles for Quote/Link articles", 'borderland' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new BorderlandElatedRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_title_color",
	$blog_masonry_ql_title_color
);

$blog_masonry_ql_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_title_hover_color",
	$blog_masonry_ql_title_hover_color
);

$blog_masonry_ql_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_title_font_size",
	$blog_masonry_ql_title_fontsize
);

$blog_masonry_ql_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_title_lineheight",
	$blog_masonry_ql_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_ql_title_texttransform",
	$blog_masonry_ql_title_texttransform
);

$blog_masonry_ql_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_ql_title_google_fonts",
	$blog_masonry_ql_title_google_fonts
);

$blog_masonry_ql_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_title_fontstyle",
	$blog_masonry_ql_title_fontstyle
);

$blog_masonry_ql_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_title_fontweight",
	$blog_masonry_ql_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_ql_title_letterspacing",
	$blog_masonry_ql_title_letterspacing
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'borderland' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'borderland' )
);
$panel10->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_info_color",
	$blog_masonry_ql_info_color
);

$blog_masonry_ql_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_info_link_color",
	$blog_masonry_ql_info_link_color
);

$blog_masonry_ql_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_info_hover_color",
	$blog_masonry_ql_info_hover_color
);

$blog_masonry_ql_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_info_fontsize",
	$blog_masonry_ql_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_masonry_ql_info_lineheight",
	$blog_masonry_ql_info_lineheight
);

$blog_masonry_ql_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_ql_info_google_fonts",
	$blog_masonry_ql_info_google_fonts
);

$blog_masonry_ql_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_info_fontstyle",
	$blog_masonry_ql_info_fontstyle
);

$blog_masonry_ql_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_info_fontweight",
	$blog_masonry_ql_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_masonry_ql_info_texttransform",
	$blog_masonry_ql_info_texttransform
);

$blog_masonry_ql_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_ql_info_letterspacing",
	$blog_masonry_ql_info_letterspacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Quote Author Style", 'borderland' ),
	esc_html__( "Define author styles for Quote articles", 'borderland' )
);
$panel10->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_author_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_author_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_author_color",
	$blog_masonry_ql_author_color
);

$blog_masonry_ql_author_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_masonry_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_author_hover_color",
	$blog_masonry_ql_author_hover_color
);

$blog_masonry_ql_author_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_author_font_size",
	$blog_masonry_ql_author_fontsize
);

$blog_masonry_ql_author_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_masonry_ql_author_lineheight",
	$blog_masonry_ql_author_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_author_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_ql_author_texttransform",
	$blog_masonry_ql_author_texttransform
);

$blog_masonry_ql_author_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_masonry_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_masonry_ql_author_google_fonts",
	$blog_masonry_ql_author_google_fonts
);

$blog_masonry_ql_author_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_author_fontstyle",
	$blog_masonry_ql_author_fontstyle
);

$blog_masonry_ql_author_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_author_fontweight",
	$blog_masonry_ql_author_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_author_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_masonry_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_masonry_ql_author_letterspacing",
	$blog_masonry_ql_author_letterspacing
);

// Blog Post List - Blog: Standard
$panel21 = new BorderlandElatedPanel(
	esc_html__( "Blog List Template Options: Standard", 'borderland' ),
	"blog_standard_type_post_lists",
	"blog_standard_type_show_options",
	"no"
);
$blogPage->addChild(
	"panel21",
	$panel21
);

$blog_standard_type_number_of_chars = new BorderlandElatedField(
	"text",
	"blog_standard_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'borderland' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel21->addChild(
	"blog_standard_type_number_of_chars",
	$blog_standard_type_number_of_chars
);

$blog_standard_type_read_more_button = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'borderland' ),
	esc_html__( "Enable Read More Button", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_read_more_button",
	$blog_standard_type_read_more_button
);

$blog_standard_type_content_position = new BorderlandElatedField(
	"select",
	"blog_standard_type_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'borderland' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'borderland' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'borderland' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'borderland' )
	)
);
$panel21->addChild(
	"blog_standard_type_content_position",
	$blog_standard_type_content_position
);

$blog_standard_type_post_meta_data_section = new BorderlandElatedTitle(
	"blog_standard_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_post_meta_data_section",
	$blog_standard_type_post_meta_data_section
);

$blog_standard_type_show_categories = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'borderland' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_show_categories",
	$blog_standard_type_show_categories
);

$blog_standard_type_show_comments = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'borderland' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_show_comments",
	$blog_standard_type_show_comments
);

$blog_standard_type_show_author = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'borderland' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_show_author",
	$blog_standard_type_show_author
);

$blog_standard_type_show_date = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_date",
	"yes",
	esc_html__( "Show Date", 'borderland' ),
	esc_html__( "Enabling this option will show date on Post List", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_hide_date",
	$blog_standard_type_show_date
);

$blog_standard_type_show_share = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_share",
	"no",
	esc_html__( "Show Share", 'borderland' ),
	esc_html__( "Enabling this option will show share on Post List", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_share_options_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_share",
	$blog_standard_type_show_share
);

$blog_standard_type_share_options_container = new BorderlandElatedContainer(
	"blog_standard_type_share_options_container",
	"blog_standard_type_show_share",
	"no"
);
$panel21->addChild(
	"blog_standard_type_share_options_container",
	$blog_standard_type_share_options_container
);

$blog_standard_type_select_share_option = new BorderlandElatedField(
	"select",
	"blog_standard_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'borderland' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'borderland' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'borderland' ),
		"list" => esc_html__( "Social Share List", 'borderland' )
	)
);

$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_select_share_option",
	$blog_standard_type_select_share_option
);

$blog_standard_type_share_icon_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'borderland' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color",
	$blog_standard_type_share_icon_color
);

$blog_standard_type_share_icon_hover_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'borderland' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color",
	$blog_standard_type_share_icon_hover_color
);

$blog_standard_type_share_background_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_share_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for dropdown share type", 'borderland' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_background_color",
	$blog_standard_type_share_background_color
);

$blog_standard_type_show_like = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_like",
	"no",
	esc_html__( "Show Likes", 'borderland' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_show_like",
	$blog_standard_type_show_like
);

$blog_standard_type_post_design_style = new BorderlandElatedTitle(
	"blog_standard_type_post_design_style",
	esc_html__( "Post Design Style", 'borderland' )
);
$panel21->addChild(
	"blog_standard_type_post_design_style",
	$blog_standard_type_post_design_style
);

$blog_standard_type_enable_text_box = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'borderland' ),
	esc_html__( "Enable post text boxed features", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_enable_text_box_container"
	)
);
$panel21->addChild(
	"blog_standard_type_enable_text_box",
	$blog_standard_type_enable_text_box
);

$blog_standard_type_enable_text_box_container = new BorderlandElatedContainer(
	"blog_standard_type_enable_text_box_container",
	"blog_standard_type_enable_text_box",
	"no"
);
$panel21->addChild(
	"blog_standard_type_enable_text_box_container",
	$blog_standard_type_enable_text_box_container
);

$blog_standard_type_box_background_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_box_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for post text box", 'borderland' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_background_color",
	$blog_standard_type_box_background_color
);

$blog_standard_type_box_border_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_box_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for post text box", 'borderland' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_border_color",
	$blog_standard_type_box_border_color
);

$blog_standard_type_box_padding = new BorderlandElatedField(
	"text",
	"blog_standard_type_box_padding",
	"",
	esc_html__( "Text box padding", 'borderland' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_padding",
	$blog_standard_type_box_padding
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Paragraph", 'borderland' ),
	esc_html__( "Set paragraph color", 'borderland' )
);
$panel21->addChild(
	"group10",
	$group10
);

$blog_standard_type_paragraph_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_paragraph_color",
	"",
	esc_html__( "Color", 'borderland' )
);
$group10->addChild(
	"blog_standard_type_paragraph_color",
	$blog_standard_type_paragraph_color
);

$group_read_more_button = new BorderlandElatedGroup(
	esc_html__( "Read More Button Style", 'borderland' ),
	esc_html__( "Set read more button styles", 'borderland' )
);
$panel21->addChild(
	"group_read_more_button",
	$group_read_more_button
);

$row1 = new BorderlandElatedRow();
$group_read_more_button->addChild(
	"row1",
	$row1
);

$blog_stand_read_more_button_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "Choose text color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_read_more_button_color",
	$blog_stand_read_more_button_color
);

$blog_stand_read_more_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_color_hover",
	"",
	esc_html__( "Text Hover Color", 'borderland' ),
	esc_html__( "Choose text hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_read_more_button_color_hover",
	$blog_stand_read_more_button_color_hover
);

$blog_stand_read_more_button_back_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_back_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_read_more_button_back_color",
	$blog_stand_read_more_button_back_color
);

$blog_stand_read_more_button_back_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Choose background hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_read_more_button_back_color_hover",
	$blog_stand_read_more_button_back_color_hover
);

$row2 = new BorderlandElatedRow();
$group_read_more_button->addChild(
	"row2",
	$row2
);

$blog_stand_read_more_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_stand_read_more_button_border_color",
	$blog_stand_read_more_button_border_color
);

$blog_stand_read_more_button_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_read_more_button_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Choose border hover color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_stand_read_more_button_border_color_hover",
	$blog_stand_read_more_button_border_color_hover
);

$group_share_button = new BorderlandElatedGroup(
	esc_html__( "Share Button Style", 'borderland' ),
	esc_html__( "Set share button styles", 'borderland' )
);
$panel21->addChild(
	"group_share_button",
	$group_share_button
);

$row1 = new BorderlandElatedRow();
$group_share_button->addChild(
	"row1",
	$row1
);

$blog_stand_share_button_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_color",
	"",
	esc_html__( "Text Color", 'borderland' ),
	esc_html__( "Choose text color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_share_button_color",
	$blog_stand_share_button_color
);

$blog_stand_share_button_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_color_hover",
	"",
	esc_html__( "Text Hover Color", 'borderland' ),
	esc_html__( "Choose text hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_share_button_color_hover",
	$blog_stand_share_button_color_hover
);

$blog_stand_share_button_back_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_back_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_share_button_back_color",
	$blog_stand_share_button_back_color
);

$blog_stand_share_button_back_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_back_color_hover",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Choose background hover color for read more button", 'borderland' )
);
$row1->addChild(
	"blog_stand_share_button_back_color_hover",
	$blog_stand_share_button_back_color_hover
);

$row2 = new BorderlandElatedRow();
$group_share_button->addChild(
	"row2",
	$row2
);

$blog_stand_share_button_border_color = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_stand_share_button_border_color",
	$blog_stand_share_button_border_color
);

$blog_stand_share_button_border_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_stand_share_button_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'borderland' ),
	esc_html__( "Choose border hover color for read more button", 'borderland' )
);
$row2->addChild(
	"blog_stand_share_button_border_color_hover",
	$blog_stand_share_button_border_color_hover
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Background", 'borderland' ),
	esc_html__( "Set background of Quote/Link post type", 'borderland' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_background_image = new BorderlandElatedField(
	"yesnosimple",
	"blog_standard_type_ql_background_image",
	"no",
	esc_html__( "Background Image", 'borderland' ),
	""
);
$row1->addChild(
	"blog_standard_type_ql_background_image",
	$blog_standard_type_ql_background_image
);

$blog_standard_type_ql_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Default color is #ffffff.", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_background_color",
	$blog_standard_type_ql_background_color
);

$blog_standard_type_ql_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Default color is #e6ae48.", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_hover_background_color",
	$blog_standard_type_ql_hover_background_color
);

$blog_standard_type_show_ql_mark = new BorderlandElatedField(
	"yesno",
	"blog_standard_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'borderland' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_standard_type_show_ql_mark_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark",
	$blog_standard_type_show_ql_mark
);

$blog_standard_type_show_ql_mark_container = new BorderlandElatedContainer(
	"blog_standard_type_show_ql_mark_container",
	"blog_standard_type_show_ql_mark",
	"no"
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark_container",
	$blog_standard_type_show_ql_mark_container
);

$row1 = new BorderlandElatedRow();
$blog_standard_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_mark_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for quote/link post.", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_color",
	$blog_standard_type_ql_mark_color
);

$blog_standard_type_ql_mark_hover_color = new BorderlandElatedField(
	"color",
	"blog_standard_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_hover_color",
	$blog_standard_type_ql_mark_hover_color
);

$blog_standard_type_quote_size = new BorderlandElatedField(
	"text",
	"blog_standard_type_quote_size",
	"",
	esc_html__( "Quote Icon Size (px)", 'borderland' ),
	esc_html__( "Define font size for quote post.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_standard_type_quote_size",
	$blog_standard_type_quote_size
);

$blog_standard_type_link_size = new BorderlandElatedField(
	"text",
	"blog_standard_type_link_size",
	"",
	esc_html__( "Link Icon Size (px)", 'borderland' ),
	esc_html__( "Define font size for link post.", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"blog_standard_type_link_size",
	$blog_standard_type_link_size
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel21->addChild(
	"group11",
	$group11
);

$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_standard_type_image_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_image_margin_bottom",
	$blog_standard_type_image_margin_bottom
);

$blog_standard_type_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_title_margin_bottom",
	$blog_standard_type_title_margin_bottom
);

$blog_standard_type_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button Holder (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_read_more_margin_top",
	$blog_standard_type_read_more_margin_top
);

$blog_standard_type_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_post_info_margin_bottom",
	$blog_standard_type_post_info_margin_bottom
);

$row2 = new BorderlandElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_standard_type_article_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_article_margin_bottom",
	$blog_standard_type_article_margin_bottom
);

$blog_standard_type_single_article_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_single_article_social_share_list_margin_top",
	$blog_standard_type_single_article_social_share_list_margin_top
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel21->addChild(
	"group12",
	$group12
);

$row1 = new BorderlandElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_post_info_margin_bottom",
	$blog_standard_type_ql_post_info_margin_bottom
);

$blog_standard_type_ql_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_social_share_list_margin_top",
	$blog_standard_type_ql_social_share_list_margin_top
);

$blog_standard_type_ql_quote_author_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_quote_author_margin_top",
	"",
	esc_html__( "Margin Above Quote Author (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_quote_author_margin_top",
	$blog_standard_type_ql_quote_author_margin_top
);

$post_text_styling = new BorderlandElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'borderland' )
);
$panel21->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Post Title", 'borderland' ),
	esc_html__( "Define title styles in this blog post template.", 'borderland' )
);
$panel21->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_standard_type_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_title_color",
	$blog_standard_type_title_color
);

$blog_standard_type_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_title_hover_color",
	$blog_standard_type_title_hover_color
);

$blog_standard_type_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_title_fontsize",
	$blog_standard_type_title_fontsize
);

$blog_standard_type_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_title_lineheight",
	$blog_standard_type_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_standard_type_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_title_texttransform",
	$blog_standard_type_title_texttransform
);

$blog_standard_type_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_standard_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_title_google_fonts",
	$blog_standard_type_title_google_fonts
);

$blog_standard_type_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_title_fontstyle",
	$blog_standard_type_title_fontstyle
);

$blog_standard_type_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_title_fontweight",
	$blog_standard_type_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_standard_type_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_standard_type_title_letterspacing",
	$blog_standard_type_title_letterspacing
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Post Info Data", 'borderland' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'borderland' )
);
$panel21->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_standard_type_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_info_color",
	$blog_standard_type_info_color
);

$blog_standard_type_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_info_link_color",
	$blog_standard_type_info_link_color
);

$blog_standard_type_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_info_hover_color",
	$blog_standard_type_info_hover_color
);

$blog_standard_type_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_info_fontsize",
	$blog_standard_type_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_standard_type_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_info_lineheight",
	$blog_standard_type_info_lineheight
);

$blog_standard_type_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_standard_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_info_google_fonts",
	$blog_standard_type_info_google_fonts
);

$blog_standard_type_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_info_fontstyle",
	$blog_standard_type_info_fontstyle
);

$blog_standard_type_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_info_fontweight",
	$blog_standard_type_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_standard_type_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_standard_type_info_texttransform",
	$blog_standard_type_info_texttransform
);

$blog_standard_type_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_standard_type_info_letterspacing",
	$blog_standard_type_info_letterspacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Title Style", 'borderland' ),
	esc_html__( "Define title styles for Quote/Link articles", 'borderland' )
);
$panel21->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_title_color",
	$blog_standard_type_ql_title_color
);

$blog_standard_type_ql_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_title_hover_color",
	$blog_standard_type_ql_title_hover_color
);

$blog_standard_type_ql_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_title_font_size",
	$blog_standard_type_ql_title_fontsize
);

$blog_standard_type_ql_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_title_lineheight",
	$blog_standard_type_ql_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_ql_title_texttransform",
	$blog_standard_type_ql_title_texttransform
);

$blog_standard_type_ql_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_standard_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_ql_title_google_fonts",
	$blog_standard_type_ql_title_google_fonts
);

$blog_standard_type_ql_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_title_fontstyle",
	$blog_standard_type_ql_title_fontstyle
);

$blog_standard_type_ql_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_title_fontweight",
	$blog_standard_type_ql_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_standard_type_ql_title_letterspacing",
	$blog_standard_type_ql_title_letterspacing
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'borderland' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'borderland' )
);
$panel21->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_info_color",
	$blog_standard_type_ql_info_color
);

$blog_standard_type_ql_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_info_link_color",
	$blog_standard_type_ql_info_link_color
);

$blog_standard_type_ql_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_info_hover_color",
	$blog_standard_type_ql_info_hover_color
);

$blog_standard_type_ql_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_info_fontsize",
	$blog_standard_type_ql_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_ql_info_lineheight",
	$blog_standard_type_ql_info_lineheight
);

$blog_standard_type_ql_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_standard_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_ql_info_google_fonts",
	$blog_standard_type_ql_info_google_fonts
);

$blog_standard_type_ql_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_info_fontstyle",
	$blog_standard_type_ql_info_fontstyle
);

$blog_standard_type_ql_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_info_fontweight",
	$blog_standard_type_ql_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_standard_type_ql_info_texttransform",
	$blog_standard_type_ql_info_texttransform
);

$blog_standard_type_ql_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_standard_type_ql_info_letterspacing",
	$blog_standard_type_ql_info_letterspacing
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Quote Author Style", 'borderland' ),
	esc_html__( "Define author styles for Quote articles", 'borderland' )
);
$panel21->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_author_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_author_color",
	$blog_standard_type_ql_author_color
);

$blog_standard_type_ql_author_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_standard_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_author_hover_color",
	$blog_standard_type_ql_author_hover_color
);

$blog_standard_type_ql_author_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_author_font_size",
	$blog_standard_type_ql_author_fontsize
);

$blog_standard_type_ql_author_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_standard_type_ql_author_lineheight",
	$blog_standard_type_ql_author_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_author_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_ql_author_texttransform",
	$blog_standard_type_ql_author_texttransform
);

$blog_standard_type_ql_author_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_standard_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_standard_type_ql_author_google_fonts",
	$blog_standard_type_ql_author_google_fonts
);

$blog_standard_type_ql_author_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_author_fontstyle",
	$blog_standard_type_ql_author_fontstyle
);

$blog_standard_type_ql_author_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_author_fontweight",
	$blog_standard_type_ql_author_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_author_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_standard_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_standard_type_ql_author_letterspacing",
	$blog_standard_type_ql_author_letterspacing
);

// Blog Post List - Blog: Vertical Loop
$panel22 = new BorderlandElatedPanel(
	esc_html__( "Blog List Template Options: Vertical Loop", 'borderland' ),
	"blog_vertical_loop_post_lists",
	"blog_vertical_loop_show_options",
	"no"
);
$blogPage->addChild(
	"panel22",
	$panel22
);

$blog_vertical_loop_type_number_of_chars = new BorderlandElatedField(
	"text",
	"blog_vertical_loop_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'borderland' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_number_of_chars",
	$blog_vertical_loop_type_number_of_chars
);

$blog_vertical_loop_type_post_meta_data_section = new BorderlandElatedTitle(
	"blog_vertical_loop_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_meta_data_section",
	$blog_vertical_loop_type_post_meta_data_section
);

$blog_vertical_loop_type_show_categories = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'borderland' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_categories",
	$blog_vertical_loop_type_show_categories
);

$blog_vertical_loop_type_show_comments = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'borderland' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_comments",
	$blog_vertical_loop_type_show_comments
);

$blog_vertical_loop_type_show_author = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'borderland' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_author",
	$blog_vertical_loop_type_show_author
);

$blog_vertical_loop_type_show_date = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_date",
	"yes",
	esc_html__( "Show Date", 'borderland' ),
	esc_html__( "Enabling this option will show date on Post List", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_hide_date",
	$blog_vertical_loop_type_show_date
);

$blog_vertical_loop_type_show_share = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_share",
	"no",
	esc_html__( "Show Share", 'borderland' ),
	esc_html__( "Enabling this option will show share on Post List", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_share_options_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_share",
	$blog_vertical_loop_type_show_share
);

$blog_vertical_loop_type_share_options_container = new BorderlandElatedContainer(
	"blog_vertical_loop_type_share_options_container",
	"blog_vertical_loop_type_show_share",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_share_options_container",
	$blog_vertical_loop_type_share_options_container
);

$blog_vertical_loop_type_select_share_option = new BorderlandElatedField(
	"select",
	"blog_vertical_loop_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'borderland' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'borderland' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'borderland' ),
		"list" => esc_html__( "Social Share List", 'borderland' )
	)
);

$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_select_share_option",
	$blog_vertical_loop_type_select_share_option
);

$blog_vertical_loop_type_share_icon_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'borderland' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_color",
	$blog_vertical_loop_type_share_icon_color
);

$blog_vertical_loop_type_share_icon_hover_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'borderland' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_icon_hover_color",
	$blog_vertical_loop_type_share_icon_hover_color
);

$blog_vertical_loop_type_share_background_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_share_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for dropdown share type", 'borderland' )
);
$blog_vertical_loop_type_share_options_container->addChild(
	"blog_vertical_loop_type_share_background_color",
	$blog_vertical_loop_type_share_background_color
);

$blog_vertical_loop_type_show_like = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_like",
	"no",
	esc_html__( "Show Likes", 'borderland' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_show_like",
	$blog_vertical_loop_type_show_like
);

$blog_vertical_loop_type_post_design_style = new BorderlandElatedTitle(
	"blog_vertical_loop_type_post_design_style",
	esc_html__( "Post Design Style", 'borderland' )
);
$panel22->addChild(
	"blog_vertical_loop_type_post_design_style",
	$blog_vertical_loop_type_post_design_style
);

$blog_vertical_loop_subtitle_on_single = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_subtitle_on_single",
	"no",
	esc_html__( "Enable Subtitle on single post pages", 'borderland' ),
	esc_html__( "Enable Subtitle on single post pages", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_enable_text_box_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_subtitle_on_single",
	$blog_vertical_loop_subtitle_on_single
);

$blog_vertical_loop_type_enable_text_box = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'borderland' ),
	esc_html__( "Enable post text boxed features", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_enable_text_box_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box",
	$blog_vertical_loop_type_enable_text_box
);

$blog_vertical_loop_type_enable_text_box_container = new BorderlandElatedContainer(
	"blog_vertical_loop_type_enable_text_box_container",
	"blog_vertical_loop_type_enable_text_box",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_enable_text_box_container",
	$blog_vertical_loop_type_enable_text_box_container
);

$blog_vertical_loop_type_box_background_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_box_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Choose background color for post text box", 'borderland' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_background_color",
	$blog_vertical_loop_type_box_background_color
);

$blog_vertical_loop_type_box_border_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_box_border_color",
	"",
	esc_html__( "Border Color", 'borderland' ),
	esc_html__( "Choose border color for post text box", 'borderland' )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_border_color",
	$blog_vertical_loop_type_box_border_color
);

$blog_vertical_loop_type_box_padding = new BorderlandElatedField(
	"text",
	"blog_vertical_loop_type_box_padding",
	"",
	esc_html__( "Text box padding", 'borderland' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$blog_vertical_loop_type_enable_text_box_container->addChild(
	"blog_vertical_loop_type_box_padding",
	$blog_vertical_loop_type_box_padding
);

$group1 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Background", 'borderland' ),
	esc_html__( "Set background of Quote/Link post type", 'borderland' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new BorderlandElatedRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'borderland' ),
	esc_html__( "Default color is #ffffff.", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_background_color",
	$blog_vertical_loop_type_ql_background_color
);

$blog_vertical_loop_type_ql_hover_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' ),
	esc_html__( "Default color is #e6ae48.", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_hover_background_color",
	$blog_vertical_loop_type_ql_hover_background_color
);

$blog_vertical_loop_type_show_ql_mark = new BorderlandElatedField(
	"yesno",
	"blog_vertical_loop_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'borderland' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'borderland' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#eltdf_blog_vertical_loop_type_show_ql_mark_container"
	)
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark",
	$blog_vertical_loop_type_show_ql_mark
);

$blog_vertical_loop_type_show_ql_mark_container = new BorderlandElatedContainer(
	"blog_vertical_loop_type_show_ql_mark_container",
	"blog_vertical_loop_type_show_ql_mark",
	"no"
);
$panel22->addChild(
	"blog_vertical_loop_type_show_ql_mark_container",
	$blog_vertical_loop_type_show_ql_mark_container
);

$row1 = new BorderlandElatedRow();
$blog_vertical_loop_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_mark_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'borderland' ),
	esc_html__( "Choose icon color for quote/link post.", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_color",
	$blog_vertical_loop_type_ql_mark_color
);

$blog_vertical_loop_type_ql_mark_hover_color = new BorderlandElatedField(
	"color",
	"blog_vertical_loop_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'borderland' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_mark_hover_color",
	$blog_vertical_loop_type_ql_mark_hover_color
);

$blog_vertical_loop_type_image_height = new BorderlandElatedField(
	"text",
	"blog_vertical_loop_type_image_height",
	"",
	esc_html__( "Image Height", 'borderland' ),
	esc_html__( "Define image height for current and next article", 'borderland' ),
	array(),
	array( "col_width" => 3 )
);
$panel22->addChild(
	"blog_vertical_loop_type_image_height",
	$blog_vertical_loop_type_image_height
);

$group11 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel22->addChild(
	"group11",
	$group11
);

$row1 = new BorderlandElatedRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_image_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_image_margin_bottom",
	$blog_vertical_loop_type_image_margin_bottom
);

$blog_vertical_loop_type_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_margin_bottom",
	$blog_vertical_loop_type_title_margin_bottom
);

$blog_vertical_loop_type_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_post_info_margin_bottom",
	$blog_vertical_loop_type_post_info_margin_bottom
);

$blog_vertical_loop_type_article_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_article_margin_bottom",
	$blog_vertical_loop_type_article_margin_bottom
);

$row2 = new BorderlandElatedRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_subtitle_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_subtitle_margin_bottom",
	"",
	esc_html__( "Margin Under Post Subtitle (px)", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_subtitle_margin_bottom",
	$blog_vertical_loop_subtitle_margin_bottom
);

$blog_vertical_loop_type_single_article_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_single_article_social_share_list_margin_top",
	$blog_vertical_loop_type_single_article_social_share_list_margin_top
);

$group12 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'borderland' ),
	esc_html__( "Set spacing for blog layouts", 'borderland' )
);
$panel22->addChild(
	"group12",
	$group12
);

$row1 = new BorderlandElatedRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_margin_bottom",
	$blog_vertical_loop_type_ql_title_margin_bottom
);

$blog_vertical_loop_type_ql_social_share_list_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_social_share_list_margin_top",
	$blog_vertical_loop_type_ql_social_share_list_margin_top
);

$blog_vertical_loop_type_ql_quote_author_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_quote_author_margin_bottom",
	$blog_vertical_loop_type_ql_quote_author_margin_bottom
);

$post_text_styling = new BorderlandElatedTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'borderland' )
);
$panel22->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Post Title", 'borderland' ),
	esc_html__( "Define title styles in this blog post template.", 'borderland' )
);
$panel22->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_color",
	$blog_vertical_loop_type_title_color
);

$blog_vertical_loop_type_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_hover_color",
	$blog_vertical_loop_type_title_hover_color
);

$blog_vertical_loop_type_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_fontsize",
	$blog_vertical_loop_type_title_fontsize
);

$blog_vertical_loop_type_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_title_lineheight",
	$blog_vertical_loop_type_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_texttransform",
	$blog_vertical_loop_type_title_texttransform
);

$blog_vertical_loop_type_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_google_fonts",
	$blog_vertical_loop_type_title_google_fonts
);

$blog_vertical_loop_type_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontstyle",
	$blog_vertical_loop_type_title_fontstyle
);

$blog_vertical_loop_type_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_title_fontweight",
	$blog_vertical_loop_type_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_type_title_letterspacing",
	$blog_vertical_loop_type_title_letterspacing
);

$group_vertical_subtitle = new BorderlandElatedGroup(
	esc_html__( "Post Subtitle", 'borderland' ),
	esc_html__( "Define subtitle styles in this blog post template.", 'borderland' )
);
$panel22->addChild(
	"group_vertical_subtitle",
	$group_vertical_subtitle
);

$row1 = new BorderlandElatedRow();
$group_vertical_subtitle->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_subtitle_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_subtitle_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_subtitle_color",
	$blog_vertical_loop_subtitle_color
);

$blog_vertical_loop_subtitle_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_subtitle_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_subtitle_hover_color",
	$blog_vertical_loop_subtitle_hover_color
);

$blog_vertical_loop_subtitle_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_subtitle_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_subtitle_fontsize",
	$blog_vertical_loop_subtitle_fontsize
);

$blog_vertical_loop_subtitle_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_subtitle_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_subtitle_lineheight",
	$blog_vertical_loop_subtitle_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group_vertical_subtitle->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_subtitle_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_subtitle_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_vertical_loop_subtitle_texttransform",
	$blog_vertical_loop_subtitle_texttransform
);

$blog_vertical_loop_subtitle_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_subtitle_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_subtitle_google_fonts",
	$blog_vertical_loop_subtitle_google_fonts
);

$blog_vertical_loop_subtitle_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_subtitle_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_subtitle_fontstyle",
	$blog_vertical_loop_subtitle_fontstyle
);

$blog_vertical_loop_subtitle_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_subtitle_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_subtitle_fontweight",
	$blog_vertical_loop_subtitle_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group_vertical_subtitle->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_subtitle_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_subtitle_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_subtitle_letterspacing",
	$blog_vertical_loop_subtitle_letterspacing
);

$group7 = new BorderlandElatedGroup(
	esc_html__( "Post Info Data", 'borderland' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'borderland' )
);
$panel22->addChild(
	"group7",
	$group7
);

$row1 = new BorderlandElatedRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_color",
	$blog_vertical_loop_type_info_color
);

$blog_vertical_loop_type_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_link_color",
	$blog_vertical_loop_type_info_link_color
);

$blog_vertical_loop_type_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_hover_color",
	$blog_vertical_loop_type_info_hover_color
);

$blog_vertical_loop_type_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_info_fontsize",
	$blog_vertical_loop_type_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_lineheight",
	$blog_vertical_loop_type_info_lineheight
);

$blog_vertical_loop_type_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_google_fonts",
	$blog_vertical_loop_type_info_google_fonts
);

$blog_vertical_loop_type_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontstyle",
	$blog_vertical_loop_type_info_fontstyle
);

$blog_vertical_loop_type_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_info_fontweight",
	$blog_vertical_loop_type_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_vertical_loop_type_info_texttransform",
	$blog_vertical_loop_type_info_texttransform
);

$blog_vertical_loop_type_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_type_info_letterspacing",
	$blog_vertical_loop_type_info_letterspacing
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Title Style", 'borderland' ),
	esc_html__( "Define title styles for Quote/Link articles", 'borderland' )
);
$panel22->addChild(
	"group6",
	$group6
);

$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_color",
	$blog_vertical_loop_type_ql_title_color
);

$blog_vertical_loop_type_ql_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_hover_color",
	$blog_vertical_loop_type_ql_title_hover_color
);

$blog_vertical_loop_type_ql_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_font_size",
	$blog_vertical_loop_type_ql_title_fontsize
);

$blog_vertical_loop_type_ql_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_title_lineheight",
	$blog_vertical_loop_type_ql_title_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_texttransform",
	$blog_vertical_loop_type_ql_title_texttransform
);

$blog_vertical_loop_type_ql_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_google_fonts",
	$blog_vertical_loop_type_ql_title_google_fonts
);

$blog_vertical_loop_type_ql_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontstyle",
	$blog_vertical_loop_type_ql_title_fontstyle
);

$blog_vertical_loop_type_ql_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_title_fontweight",
	$blog_vertical_loop_type_ql_title_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_title_letterspacing",
	$blog_vertical_loop_type_ql_title_letterspacing
);

$group8 = new BorderlandElatedGroup(
	esc_html__( "Quote/Link Post Info Data", 'borderland' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'borderland' )
);
$panel22->addChild(
	"group8",
	$group8
);

$row1 = new BorderlandElatedRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_color",
	$blog_vertical_loop_type_ql_info_color
);

$blog_vertical_loop_type_ql_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_link_color",
	$blog_vertical_loop_type_ql_info_link_color
);

$blog_vertical_loop_type_ql_info_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_hover_color",
	$blog_vertical_loop_type_ql_info_hover_color
);

$blog_vertical_loop_type_ql_info_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_info_fontsize",
	$blog_vertical_loop_type_ql_info_fontsize
);

$row2 = new BorderlandElatedRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_info_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_lineheight",
	$blog_vertical_loop_type_ql_info_lineheight
);

$blog_vertical_loop_type_ql_info_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_google_fonts",
	$blog_vertical_loop_type_ql_info_google_fonts
);

$blog_vertical_loop_type_ql_info_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontstyle",
	$blog_vertical_loop_type_ql_info_fontstyle
);

$blog_vertical_loop_type_ql_info_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_info_fontweight",
	$blog_vertical_loop_type_ql_info_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_info_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_texttransform",
	$blog_vertical_loop_type_ql_info_texttransform
);

$blog_vertical_loop_type_ql_info_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_info_letterspacing",
	$blog_vertical_loop_type_ql_info_letterspacing
);

$group9 = new BorderlandElatedGroup(
	esc_html__( "Quote Author Style", 'borderland' ),
	esc_html__( "Define author styles for Quote articles", 'borderland' )
);
$panel22->addChild(
	"group9",
	$group9
);

$row1 = new BorderlandElatedRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_ql_author_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_color",
	$blog_vertical_loop_type_ql_author_color
);

$blog_vertical_loop_type_ql_author_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_hover_color",
	$blog_vertical_loop_type_ql_author_hover_color
);

$blog_vertical_loop_type_ql_author_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_font_size",
	$blog_vertical_loop_type_ql_author_fontsize
);

$blog_vertical_loop_type_ql_author_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_ql_author_lineheight",
	$blog_vertical_loop_type_ql_author_lineheight
);

$row2 = new BorderlandElatedRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_ql_author_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_texttransform",
	$blog_vertical_loop_type_ql_author_texttransform
);

$blog_vertical_loop_type_ql_author_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_google_fonts",
	$blog_vertical_loop_type_ql_author_google_fonts
);

$blog_vertical_loop_type_ql_author_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontstyle",
	$blog_vertical_loop_type_ql_author_fontstyle
);

$blog_vertical_loop_type_ql_author_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_ql_author_fontweight",
	$blog_vertical_loop_type_ql_author_fontweight
);

$row3 = new BorderlandElatedRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_ql_author_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_vertical_loop_type_ql_author_letterspacing",
	$blog_vertical_loop_type_ql_author_letterspacing
);

$post_vertical_loop_type_next_article_title = new BorderlandElatedTitle(
	"post_vertical_loop_type_next_article_title",
	esc_html__( "Next Article Styles", 'borderland' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_article_title",
	$post_vertical_loop_type_next_article_title
);

$group10 = new BorderlandElatedGroup(
	esc_html__( "Title Style", 'borderland' ),
	esc_html__( "Define title styles for next article", 'borderland' )
);
$panel22->addChild(
	"group10",
	$group10
);

$row1 = new BorderlandElatedRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_color",
	$blog_vertical_loop_type_next_article_title_color
);

$blog_vertical_loop_type_next_article_title_fontsize = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_fontsize",
	$blog_vertical_loop_type_next_article_title_fontsize
);

$blog_vertical_loop_type_next_article_title_lineheight = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_lineheight",
	$blog_vertical_loop_type_next_article_title_lineheight
);

$blog_vertical_loop_type_next_article_title_texttransform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_texttransform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_title_texttransform",
	$blog_vertical_loop_type_next_article_title_texttransform
);

$row2 = new BorderlandElatedRow( true );
$group10->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_title_google_fonts = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_vertical_loop_type_next_article_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_google_fonts",
	$blog_vertical_loop_type_next_article_title_google_fonts
);

$blog_vertical_loop_type_next_article_title_fontstyle = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontstyle",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontstyle",
	$blog_vertical_loop_type_next_article_title_fontstyle
);

$blog_vertical_loop_type_next_article_title_fontweight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_title_fontweight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_fontweight",
	$blog_vertical_loop_type_next_article_title_fontweight
);

$blog_vertical_loop_type_next_article_title_letterspacing = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_title_letterspacing",
	$blog_vertical_loop_type_next_article_title_letterspacing
);

$row3 = new BorderlandElatedRow( true );
$group10->addChild(
	"row3",
	$row3
);

$blog_vertical_loop_type_next_article_title_position = new BorderlandElatedField(
	"selectsimple",
	"blog_vertical_loop_type_next_article_title_position",
	"dropdown",
	esc_html__( "Title Position", 'borderland' ),
	esc_html__( "Choose title position for next article", 'borderland' ),
	array(
		"center" => esc_html__( "Center", 'borderland' ),
		"left" => esc_html__( "Left", 'borderland' ),
		"right" => esc_html__( "Right", 'borderland' )
	)
);

$row3->addChild(
	"blog_vertical_loop_type_next_article_title_position",
	$blog_vertical_loop_type_next_article_title_position
);

$post_vertical_loop_type_next_previous_arrow_title = new BorderlandElatedTitle(
	"post_vertical_loop_type_next_previous_arrow_title",
	esc_html__( "Previous/Next Article Arrow Style", 'borderland' )
);
$panel22->addChild(
	"post_vertical_loop_type_next_previous_arrow_title",
	$post_vertical_loop_type_next_previous_arrow_title
);

$group13 = new BorderlandElatedGroup(
	esc_html__( "Article Arrow Style", 'borderland' ),
	esc_html__( "Define arrow styles for next article", 'borderland' )
);
$panel22->addChild(
	"group13",
	$group13
);

$row1 = new BorderlandElatedRow();
$group13->addChild(
	"row1",
	$row1
);

$blog_vertical_loop_type_next_article_arrow_background_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_background_color",
	"",
	esc_html__( "Background Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_background_color",
	$blog_vertical_loop_type_next_article_arrow_background_color
);

$blog_vertical_loop_type_next_article_arrow_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color",
	"",
	esc_html__( "Arrow Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color",
	$blog_vertical_loop_type_next_article_arrow_color
);

$blog_vertical_loop_type_next_article_arrow_background_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_background_hover_color",
	$blog_vertical_loop_type_next_article_arrow_background_hover_color
);

$blog_vertical_loop_type_next_article_arrow_color_hover = new BorderlandElatedField(
	"colorsimple",
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	"",
	esc_html__( "Arrow Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_vertical_loop_type_next_article_arrow_color_hover",
	$blog_vertical_loop_type_next_article_arrow_color_hover
);

$row2 = new BorderlandElatedRow();
$group13->addChild(
	"row2",
	$row2
);

$blog_vertical_loop_type_next_article_arrow_size = new BorderlandElatedField(
	"textsimple",
	"blog_vertical_loop_type_next_article_arrow_size",
	"",
	esc_html__( "Arrow Size", 'borderland' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_arrow_size",
	$blog_vertical_loop_type_next_article_arrow_size
);

$blog_vertical_loop_type_next_article_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_vertical_loop_type_next_article_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_vertical_loop_type_next_article_font_weight",
	$blog_vertical_loop_type_next_article_font_weight
);

//Blog List Shortcodes

$panel28 = new BorderlandElatedPanel(
	esc_html__( "Blog List Shortcodes", 'borderland' ),
	"blog_list_panel"
);
$blogPage->addChild(
	"panel28",
	$panel28
);

//Blog List Boxes

$blog_list_boxes_section_subtitle = new BorderlandElatedTitle(
	"blog_list_boxes_section_subtitle",
	esc_html__( "Blog List - Boxes", 'borderland' )
);
$panel28->addChild(
	"blog_list_boxes_section_subtitle",
	$blog_list_boxes_section_subtitle
);

$group6 = new BorderlandElatedGroup(
	esc_html__( "Blog List Padding", 'borderland' ),
	esc_html__( "Enter Boxes Blog List padding", 'borderland' )
);
$panel28->addChild(
	"group6",
	$group6
);
$row1 = new BorderlandElatedRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_list_boxes_padding_top = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_padding_top",
	$blog_list_boxes_padding_top
);

$blog_list_boxes_padding_right = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_padding_right",
	$blog_list_boxes_padding_right
);

$blog_list_boxes_padding_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_padding_bottom",
	$blog_list_boxes_padding_bottom
);

$blog_list_boxes_padding_left = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_padding_left",
	$blog_list_boxes_padding_left
);

$group16 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Define blog list spacing", 'borderland' )
);
$panel28->addChild(
	"group16",
	$group16
);

$row1 = new BorderlandElatedRow();
$group16->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_title_margin_bottom",
	$blog_list_boxes_title_margin_bottom
);

$blog_list_boxes_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_post_info_margin_bottom",
	$blog_list_boxes_post_info_margin_bottom
);

$blog_list_boxes_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_read_more_margin_top",
	$blog_list_boxes_read_more_margin_top
);

$group17 = new BorderlandElatedGroup(
	esc_html__( "Blog List Title", 'borderland' ),
	esc_html__( "Define Blog List title style", 'borderland' )
);
$panel28->addChild(
	"group17",
	$group17
);

$row1 = new BorderlandElatedRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_boxes_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_title_color",
	$blog_list_boxes_title_color
);

$blog_list_boxes_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_boxes_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_title_hover_color",
	$blog_list_boxes_title_hover_color
);

$blog_list_boxes_title_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_title_font_size",
	$blog_list_boxes_title_font_size
);

$blog_list_boxes_title_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_title_line_height",
	$blog_list_boxes_title_line_height
);

$row2 = new BorderlandElatedRow();
$group17->addChild(
	"row2",
	$row2
);

$blog_list_boxes_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_boxes_title_text_transform",
	$blog_list_boxes_title_text_transform
);

$blog_list_boxes_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_list_boxes_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_list_boxes_title_font_family",
	$blog_list_boxes_title_font_family
);

$blog_list_boxes_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_boxes_title_font_style",
	$blog_list_boxes_title_font_style
);

$blog_list_boxes_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_boxes_title_font_weight",
	$blog_list_boxes_title_font_weight
);

$row3 = new BorderlandElatedRow();
$group17->addChild(
	"row3",
	$row3
);

$blog_list_boxes_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_list_boxes_title_letter_spacing",
	$blog_list_boxes_title_letter_spacing
);

$group18 = new BorderlandElatedGroup(
	esc_html__( "Blog List Post Info", 'borderland' ),
	esc_html__( "Define blog list post info style", 'borderland' )
);
$panel28->addChild(
	"group18",
	$group18
);

$row1 = new BorderlandElatedRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_list_boxes_post_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_post_info_color",
	$blog_list_boxes_post_info_color
);

$blog_list_boxes_post_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_color",
	$blog_list_boxes_post_info_link_color
);

$blog_list_boxes_post_info_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_boxes_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_hover_color",
	$blog_list_boxes_post_info_link_hover_color
);

$blog_list_boxes_post_info_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_boxes_post_info_font_size",
	$blog_list_boxes_post_info_font_size
);

$row2 = new BorderlandElatedRow();
$group18->addChild(
	"row2",
	$row2
);

$blog_list_boxes_post_info_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_list_boxes_post_info_line_height",
	$blog_list_boxes_post_info_line_height
);

$blog_list_boxes_post_info_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_boxes_post_info_text_transform",
	$blog_list_boxes_post_info_text_transform
);

$blog_list_boxes_post_info_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_list_boxes_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_family",
	$blog_list_boxes_post_info_font_family
);

$blog_list_boxes_post_info_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_style",
	$blog_list_boxes_post_info_font_style
);

$row3 = new BorderlandElatedRow();
$group18->addChild(
	"row3",
	$row3
);

$blog_list_boxes_post_info_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_list_boxes_post_info_font_weight",
	$blog_list_boxes_post_info_font_weight
);

$blog_list_boxes_post_info_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_list_boxes_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_list_boxes_post_info_letter_spacing",
	$blog_list_boxes_post_info_letter_spacing
);

$blog_list_boxes_date_color = new BorderlandElatedField(
	"color",
	"blog_list_boxes_date_color",
	"",
	esc_html__( "Date Color", 'borderland' ),
	esc_html__( "Choose color for date", 'borderland' )
);
$panel28->addChild(
	"blog_list_boxes_date_color",
	$blog_list_boxes_date_color
);

$blog_list_minimal_subtitle = new BorderlandElatedTitle(
	"blog_list_minimal_subtitle",
	esc_html__( "Blog List - Minimal", 'borderland' )
);
$panel28->addChild(
	"blog_list_minimal_subtitle",
	$blog_list_minimal_subtitle
);

$group5 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Define blog list spacing", 'borderland' )
);
$panel28->addChild(
	"group5",
	$group5
);

$row1 = new BorderlandElatedRow( true );
$group5->addChild(
	"row1",
	$row1
);

$blog_list_minimal_title_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_list_minimal_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_minimal_title_margin_bottom",
	$blog_list_minimal_title_margin_bottom
);

$blog_list_minimal_post_info_margin_bottom = new BorderlandElatedField(
	"textsimple",
	"blog_list_minimal_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_minimal_post_info_margin_bottom",
	$blog_list_minimal_post_info_margin_bottom
);

$blog_list_minimal_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_list_minimal_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_minimal_read_more_margin_top",
	$blog_list_minimal_read_more_margin_top
);

// Image in left box

$image_in_left_box = new BorderlandElatedTitle(
	"image_in_left_box",
	esc_html__( "Blog List - Image in Left Box", 'borderland' )
);
$panel28->addChild(
	"image_in_left_box",
	$image_in_left_box
);

$group28 = new BorderlandElatedGroup(
	esc_html__( "Blog List Title", 'borderland' ),
	esc_html__( "Define Blog List title style", 'borderland' )
);
$panel28->addChild(
	"group28",
	$group28
);
$row1 = new BorderlandElatedRow();
$group28->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_title_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_color",
	$blog_list_img_in_lbox_title_color
);

$blog_list_img_in_lbox_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_hover_color",
	$blog_list_img_in_lbox_title_hover_color
);

$blog_list_img_in_lbox_title_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_font_size",
	$blog_list_img_in_lbox_title_font_size
);

$blog_list_img_in_lbox_title_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_line_height",
	$blog_list_img_in_lbox_title_line_height
);

$row2 = new BorderlandElatedRow( true );
$group28->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_text_transform",
	$blog_list_img_in_lbox_title_text_transform
);

$blog_list_img_in_lbox_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_list_img_in_lbox_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_family",
	$blog_list_img_in_lbox_title_font_family
);

$blog_list_img_in_lbox_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_style",
	$blog_list_img_in_lbox_title_font_style
);

$blog_list_img_in_lbox_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_weight",
	$blog_list_img_in_lbox_title_font_weight
);

$row3 = new BorderlandElatedRow( true );
$group28->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_list_img_in_lbox_title_letter_spacing",
	$blog_list_img_in_lbox_title_letter_spacing
);

$group29 = new BorderlandElatedGroup(
	esc_html__( "Blog List Post Info", 'borderland' ),
	esc_html__( "Define blog list post info style", 'borderland' )
);
$panel28->addChild(
	"group29",
	$group29
);
$row1 = new BorderlandElatedRow();
$group29->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_post_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_color",
	$blog_list_img_in_lbox_post_info_color
);

$blog_list_img_in_lbox_post_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_color",
	$blog_list_img_in_lbox_post_info_link_color
);

$blog_list_img_in_lbox_post_info_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_hover_color",
	$blog_list_img_in_lbox_post_info_link_hover_color
);

$blog_list_img_in_lbox_post_info_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_font_size",
	$blog_list_img_in_lbox_post_info_font_size
);

$row2 = new BorderlandElatedRow( true );
$group29->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_post_info_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_line_height",
	$blog_list_img_in_lbox_post_info_line_height
);

$blog_list_img_in_lbox_post_info_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_text_transform",
	$blog_list_img_in_lbox_post_info_text_transform
);

$blog_list_img_in_lbox_post_info_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_list_img_in_lbox_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_family",
	$blog_list_img_in_lbox_post_info_font_family
);

$blog_list_img_in_lbox_post_info_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_style",
	$blog_list_img_in_lbox_post_info_font_style
);

$row3 = new BorderlandElatedRow( true );
$group29->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_post_info_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_font_weight",
	$blog_list_img_in_lbox_post_info_font_weight
);

$blog_list_img_in_lbox_post_info_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_letter_spacing",
	$blog_list_img_in_lbox_post_info_letter_spacing
);

$group30 = new BorderlandElatedGroup(
	esc_html__( "Blog List Date Style", 'borderland' ),
	esc_html__( "Define blog list date style", 'borderland' )
);
$panel28->addChild(
	"group30",
	$group30
);
$row1 = new BorderlandElatedRow();
$group30->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_date_color = new BorderlandElatedField(
	"colorsimple",
	"blog_list_img_in_lbox_date_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_color",
	$blog_list_img_in_lbox_date_color
);

$blog_list_img_in_lbox_date_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_font_size",
	$blog_list_img_in_lbox_date_font_size
);

$blog_list_img_in_lbox_date_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_line_height",
	$blog_list_img_in_lbox_date_line_height
);

$blog_list_img_in_lbox_date_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_text_transform",
	$blog_list_img_in_lbox_date_text_transform
);

$row2 = new BorderlandElatedRow( true );
$group30->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_date_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_list_img_in_lbox_date_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_family",
	$blog_list_img_in_lbox_date_font_family
);

$blog_list_img_in_lbox_date_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_style",
	$blog_list_img_in_lbox_date_font_style
);

$blog_list_img_in_lbox_date_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_weight",
	$blog_list_img_in_lbox_date_font_weight
);

$blog_list_img_in_lbox_date_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_letter_spacing",
	$blog_list_img_in_lbox_date_letter_spacing
);

$group31 = new BorderlandElatedGroup(
	esc_html__( "Blog List Spacing", 'borderland' ),
	esc_html__( "Define blog list spacing", 'borderland' )
);
$panel28->addChild(
	"group31",
	$group31
);

$row1 = new BorderlandElatedRow( true );
$group31->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_margin_bttm = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_margin_bttm",
	$blog_list_img_in_lbox_title_margin_bttm
);

$blog_list_img_in_lbox_post_info_margin_bttm = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_margin_bttm",
	$blog_list_img_in_lbox_post_info_margin_bttm
);

$blog_list_img_in_lbox_read_more_margin_top = new BorderlandElatedField(
	"textsimple",
	"blog_list_img_in_lbox_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'borderland' )
);
$row1->addChild(
	"blog_list_img_in_lbox_read_more_margin_top",
	$blog_list_img_in_lbox_read_more_margin_top
);

/*** Blog Slider ***/

$panel31 = new BorderlandElatedPanel(
	esc_html__( "Blog Slider", 'borderland' ),
	"blog_slider"
);
$blogPage->addChild(
	"panel31",
	$panel31
);

$blog_slider_default_and_with_info_always_title = new BorderlandElatedTitle(
	"blog_slider_default_and_with_info_always_title",
	esc_html__( "Default and Post Info Visible", 'borderland' )
);
$panel31->addChild(
	"blog_slider_default_and_with_info_always_title",
	$blog_slider_default_and_with_info_always_title
);

$group23 = new BorderlandElatedGroup(
	esc_html__( "Title style", 'borderland' ),
	esc_html__( "Blog slider title style", 'borderland' )
);
$panel31->addChild(
	"group23",
	$group23
);

$row1 = new BorderlandElatedRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_slider_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_title_color",
	"",
	esc_html__( "Title Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_title_color",
	$blog_slider_title_color
);

$blog_slider_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_title_hover_color",
	$blog_slider_title_hover_color
);

$blog_slider_title_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_slider_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_title_font_size",
	$blog_slider_title_font_size
);

$blog_slider_title_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_slider_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_title_line_height",
	$blog_slider_title_line_height
);

$row2 = new BorderlandElatedRow();
$group23->addChild(
	"row2",
	$row2
);

$blog_slider_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_title_text_transform",
	$blog_slider_title_text_transform
);

$blog_slider_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_slider_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_slider_title_font_family",
	$blog_slider_title_font_family
);

$blog_slider_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_title_font_style",
	$blog_slider_title_font_style
);

$blog_slider_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_title_font_weight",
	$blog_slider_title_font_weight
);

$row3 = new BorderlandElatedRow();
$group23->addChild(
	"row3",
	$row3
);

$blog_slider_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_slider_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_slider_title_letter_spacing",
	$blog_slider_title_letter_spacing
);

$group24 = new BorderlandElatedGroup(
	esc_html__( "Category style", 'borderland' ),
	esc_html__( "Blog slider categories style", 'borderland' )
);
$panel31->addChild(
	"group24",
	$group24
);

$row1 = new BorderlandElatedRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_slider_category_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_category_color",
	"",
	esc_html__( "Category Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_category_color",
	$blog_slider_category_color
);

$blog_slider_category_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_category_hover_color",
	"",
	esc_html__( "Category Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_category_hover_color",
	$blog_slider_category_hover_color
);

$blog_slider_category_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_slider_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_category_font_size",
	$blog_slider_category_font_size
);

$blog_slider_category_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_slider_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_category_line_height",
	$blog_slider_category_line_height
);

$row2 = new BorderlandElatedRow();
$group24->addChild(
	"row2",
	$row2
);

$blog_slider_category_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_category_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_category_text_transform",
	$blog_slider_category_text_transform
);

$blog_slider_category_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_slider_category_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_slider_category_font_family",
	$blog_slider_category_font_family
);

$blog_slider_category_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_category_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_category_font_style",
	$blog_slider_category_font_style
);

$blog_slider_category_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_category_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_category_font_weight",
	$blog_slider_category_font_weight
);

$row3 = new BorderlandElatedRow();
$group24->addChild(
	"row3",
	$row3
);

$blog_slider_category_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_slider_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_slider_category_letter_spacing",
	$blog_slider_category_letter_spacing
);

$group25 = new BorderlandElatedGroup(
	esc_html__( "Date style", 'borderland' ),
	esc_html__( "Blog slider date style", 'borderland' )
);
$panel31->addChild(
	"group25",
	$group25
);

$row1 = new BorderlandElatedRow();
$group25->addChild(
	"row1",
	$row1
);

$blog_slider_date_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_date_color",
	"",
	esc_html__( "Date Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_date_color",
	$blog_slider_date_color
);

$blog_slider_date_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_slider_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_date_font_size",
	$blog_slider_date_font_size
);

$blog_slider_date_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_slider_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_date_line_height",
	$blog_slider_date_line_height
);

$blog_slider_date_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_date_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_slider_date_text_transform",
	$blog_slider_date_text_transform
);

$row2 = new BorderlandElatedRow();
$group25->addChild(
	"row2",
	$row2
);

$blog_slider_date_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_slider_date_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_slider_date_font_family",
	$blog_slider_date_font_family
);

$blog_slider_date_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_date_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_date_font_style",
	$blog_slider_date_font_style
);

$blog_slider_date_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_date_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_date_font_weight",
	$blog_slider_date_font_weight
);

$blog_slider_date_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_slider_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row2->addChild(
	"blog_slider_date_letter_spacing",
	$blog_slider_date_letter_spacing
);

$blog_slider_info_in_bottom_title = new BorderlandElatedTitle(
	"blog_slider_info_in_bottom_title",
	esc_html__( "Post Info in Bottom", 'borderland' )
);
$panel31->addChild(
	"blog_slider_info_in_bottom_title",
	$blog_slider_info_in_bottom_title
);

$group26 = new BorderlandElatedGroup(
	esc_html__( "Title style", 'borderland' ),
	esc_html__( "Blog slider title style", 'borderland' )
);
$panel31->addChild(
	"group26",
	$group26
);

$row1 = new BorderlandElatedRow();
$group26->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_title_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_color",
	"",
	esc_html__( "Title Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_color",
	$blog_slider_post_info_in_bottom_title_color
);

$blog_slider_post_info_in_bottom_title_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_hover_color",
	$blog_slider_post_info_in_bottom_title_hover_color
);

$blog_slider_post_info_in_bottom_title_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_font_size",
	$blog_slider_post_info_in_bottom_title_font_size
);

$blog_slider_post_info_in_bottom_title_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_line_height",
	$blog_slider_post_info_in_bottom_title_line_height
);

$row2 = new BorderlandElatedRow();
$group26->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_title_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_text_transform",
	$blog_slider_post_info_in_bottom_title_text_transform
);

$blog_slider_post_info_in_bottom_title_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_slider_post_info_in_bottom_title_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_family",
	$blog_slider_post_info_in_bottom_title_font_family
);

$blog_slider_post_info_in_bottom_title_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_style",
	$blog_slider_post_info_in_bottom_title_font_style
);

$blog_slider_post_info_in_bottom_title_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_weight",
	$blog_slider_post_info_in_bottom_title_font_weight
);

$row3 = new BorderlandElatedRow();
$group26->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_title_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	$blog_slider_post_info_in_bottom_title_letter_spacing
);

$group27 = new BorderlandElatedGroup(
	esc_html__( "Post Info style", 'borderland' ),
	esc_html__( "Blog slider post info style", 'borderland' )
);
$panel31->addChild(
	"group27",
	$group27
);

$row1 = new BorderlandElatedRow();
$group27->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_post_info_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_color",
	"",
	esc_html__( "Text Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_color",
	$blog_slider_post_info_in_bottom_post_info_color
);

$blog_slider_post_info_in_bottom_post_info_link_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_color",
	"",
	esc_html__( "Link Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_color",
	$blog_slider_post_info_in_bottom_post_info_link_color
);

$blog_slider_post_info_in_bottom_post_info_link_hover_color = new BorderlandElatedField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	$blog_slider_post_info_in_bottom_post_info_link_hover_color
);

$blog_slider_post_info_in_bottom_post_info_font_size = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'borderland' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_size",
	$blog_slider_post_info_in_bottom_post_info_font_size
);

$row2 = new BorderlandElatedRow();
$group27->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_post_info_line_height = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'borderland' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_line_height",
	$blog_slider_post_info_in_bottom_post_info_line_height
);

$blog_slider_post_info_in_bottom_post_info_text_transform = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	$blog_slider_post_info_in_bottom_post_info_text_transform
);

$blog_slider_post_info_in_bottom_post_info_font_family = new BorderlandElatedField(
	esc_html__( "Fontsimple", 'borderland' ),
	"blog_slider_post_info_in_bottom_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'borderland' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_family",
	$blog_slider_post_info_in_bottom_post_info_font_family
);

$blog_slider_post_info_in_bottom_post_info_font_style = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_style",
	"",
	esc_html__( "Font Style", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_style",
	$blog_slider_post_info_in_bottom_post_info_font_style
);

$row3 = new BorderlandElatedRow();
$group27->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_post_info_font_weight = new BorderlandElatedField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'borderland' ),
	"",
	borderland_elated_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	$blog_slider_post_info_in_bottom_post_info_font_weight
);

$blog_slider_post_info_in_bottom_post_info_letter_spacing = new BorderlandElatedField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'borderland' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	$blog_slider_post_info_in_bottom_post_info_letter_spacing
);
