<?php header("Content-type: text/css");
$wp_include = "../../../../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
    $wp_include = "../$wp_include";
}

require($wp_include);

global $gt3_themeconfig;
if ($gt3_themeconfig['custom_fonts'] == true) {
    if (is_array($gt3_themeconfig['custom_fonts_array'])) {
        foreach ($gt3_themeconfig['custom_fonts_array'] as $id => $font) {
            if ($font['font_file_name']!=="default_font") {
                echo "
                @font-face {
                    font-family: '".$font['font_family']."';
                    src: url('".THEMEROOTURL."/css/../fonts/".$font['font_file_name'].".eot');
                    src: url('".THEMEROOTURL."/css/../fonts/".$font['font_file_name'].".eot?#iefix') format('embedded-opentype'),
                         url('".THEMEROOTURL."/css/../fonts/".$font['font_file_name'].".woff') format('woff'),
                         url('".THEMEROOTURL."/css/../fonts/".$font['font_file_name'].".ttf') format('truetype'),
                         url('".THEMEROOTURL."/css/../fonts/".$font['font_file_name'].".svg#".$font['svg_id']."') format('svg');
                    font-weight: ".$font['font_weight'].";
                    font-style: ".$font['font_style'].";

                }
                ";
            }
        }
    }
}

if (isset($_COOKIE['theme_color1'])) {
    $themecolor1 = $_COOKIE['theme_color1'];
} else {
    $themecolor1 = gt3_get_theme_option("theme_color1");
}
/*if (isset($_COOKIE['theme_color2'])) {
    $themecolor2 = $_COOKIE['theme_color2'];
} else {
    $themecolor2 = gt3_get_theme_option("theme_color2");
}*/
$additional_font = gt3_get_theme_option("additional_font");

#Fonts & colors
$footer_background_color = gt3_get_theme_option("footer_background_color");
$footer_text_color = gt3_get_theme_option("footer_text_color");
$content_text_color = gt3_get_theme_option("content_text_color");
$text_headers_font = gt3_get_theme_option("text_headers_font");
$main_content_font = gt3_get_theme_option("main_content_font");

$h1_font_size = gt3_get_theme_option("h1_font_size");
$h1_line_height = substr(gt3_get_theme_option("h1_font_size"), 0, -2);
$h1_line_height = (int)$h1_line_height+2;$h1_line_height = $h1_line_height."px";

$h2_font_size = gt3_get_theme_option("h2_font_size");
$h2_line_height = substr(gt3_get_theme_option("h2_font_size"), 0, -2);
$h2_line_height = (int)$h2_line_height+2;$h2_line_height = $h2_line_height."px";

$h3_font_size = gt3_get_theme_option("h3_font_size");
$h3_line_height = substr(gt3_get_theme_option("h3_font_size"), 0, -2);
$h3_line_height = (int)$h3_line_height+2;$h3_line_height = $h3_line_height."px";

$h4_font_size = gt3_get_theme_option("h4_font_size");
$h4_line_height = substr(gt3_get_theme_option("h4_font_size"), 0, -2);
$h4_line_height = (int)$h4_line_height+2;$h4_line_height = $h4_line_height."px";

$h5_font_size = gt3_get_theme_option("h5_font_size");
$h5_line_height = substr(gt3_get_theme_option("h5_font_size"), 0, -2);
$h5_line_height = (int)$h5_line_height+2;$h5_line_height = $h5_line_height."px";

$h6_font_size = gt3_get_theme_option("h6_font_size");
$h6_line_height = substr(gt3_get_theme_option("h6_font_size"), 0, -2);
$h6_line_height = (int)$h6_line_height+2;$h6_line_height = $h6_line_height."px";

$main_content_font_size = gt3_get_theme_option("main_content_font_size");
$main_content_line_height = gt3_get_theme_option("main_content_line_height");
?>
/* *** MAIN COLOR: #37878d *** */

::selection {background:#<?php echo $themecolor1; ?>;}
::-moz-selection {background:#<?php echo $themecolor1; ?>;}

.shortcode_promoblock .promo_button_block a:hover,
blockquote.type1:before,
.highlighted_colored,

header ul.menu li .sub-menu li:hover > a,
header nav ul li .sub-menu li:hover > a,
header nav ul li .sub-menu li:hover .sub-menu li:hover > a,
ul.mobile_menu li > a:hover,
ul.mobile_menu li:hover > a,
ul.mobile_menu li .sub-menu li:hover > a,
ul.mobile_menu li .sub-menu li:hover .sub-menu li:hover > a,
.feedback_form .feedback_go:hover,
.feedback_form .feedback_reset:hover,
#commentform #reset:hover,
#commentform #submit:hover,
.btn_login:hover,
.price_item_btn a:hover,
.most_popular .price_item_btn a,
.shortcode_button.btn_type4,
.pagerblock li a:hover,
.pagerblock li a.current,
.panel_toggler:hover,
.ie8 .btn2top-wrapper,
.ie8 .iconbox-ie8,
.price_item.most_popular .price_ico {
background-color:#<?php echo $themecolor1; ?>;
}
.view-tenth .mask,
.dropcap.colored,
.shortcode_accordion_item_title:hover,
.shortcode_toggles_item_title:hover,
ul.sub-menu li.current-menu-parent > a,
ul.sub-menu li.current-menu-item > a,
.shortcode_button.btn_type1:hover,
.shortcode_button.btn_type2:hover,
.shortcode_button.btn_type3:hover,
.widget_tag_cloud a:hover {
background-color:#<?php echo $themecolor1; ?>!important;
}

a,
.shortcode_tab_item_title:hover,
.testimonials_list .author,
.recent_posts_content .post_title,
.blogpost_title:hover,
a.menu_toggler:hover {
color:#<?php echo $themecolor1; ?>;
}
header ul.menu > li > a:hover,
header ul.menu > li:hover > a,
header ul.menu > li.current-menu-item > a,
header ul.menu > li.current-menu-parent > a,
#footer_bar .twitter_list a:hover,
blockquote .author,
.blogpost_date-block a:hover,
#footer_bar .recent_posts .post_title:hover {
color:#<?php echo $themecolor1; ?>!important;
}

hr.colored {
border-color:#<?php echo $themecolor1; ?>;
}

header nav ul.menu > li > .sub-menu > li.current-menu-item:before,
header nav ul.menu > li > .sub-menu > li.current-menu-parent:before,
header nav ul.menu > li > .sub-menu > li:hover:before {
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-bottom: 5px solid #<?php echo $themecolor1; ?>;
}

.btn2top rect,
.shortcode_iconbox .ico .iconbox-svg rect,
.blogpost_type_ico .blogpost-svg rect,
.post_type_ico,
.price_ico rect {
fill:#<?php echo $themecolor1; ?>;
}

.ie8 .btn2top-wrapper:before,
.ie8 .iconbox-ie8:before,
.ie8 .gallery_item .iconbox-ie8:before,
.price_item.most_popular .price_ico:before {
border-bottom-color:#<?php echo $themecolor1; ?>;
}
.ie8 .btn2top-wrapper:after,
.ie8 .iconbox-ie8:after,
.ie8 .gallery_item .iconbox-ie8:after,
.price_item.most_popular .price_ico:after {
border-top-color:#<?php echo $themecolor1; ?>;
}



/* *** F O N T   F A M I L I E S  *** */

@font-face {
font-family: 'CoreIconsRegular';
src: url('../fonts/coreicons-webfont.eot');
src: url('../fonts/coreicons-webfont.eot?#iefix') format('embedded-opentype'),
url('../fonts/coreicons-webfont.woff') format('woff'),
url('../fonts/coreicons-webfont.ttf') format('truetype'),
url('../fonts/coreicons-webfont.svg#coreiconsregular') format('svg');
font-weight: normal;
font-style: normal;

}
* {
font-family:Arial, Helvetica, sans-serif;
font-weight:400;
}

.call_us .ico,
.ico,
.shortcode_iconbox .ico span {
font-family: 'CoreIconsRegular';
}



/* ***  F O N T   S E T T I N G S  *** */

p, td, div,
blockquote p {
font-size:<?php echo $main_content_font_size;?>;
line-height:<?php echo $main_content_line_height;?>;
}

header .top_line .call_us,
header .top_line .slogan {
line-height:14px;
font-size:11px;
}

h1, h2, h3, h4, h5, h6,
h1 span, h2 span, h3 span, h4 span, h5 span, h6 span,
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
text-decoration:none!important;
padding:0;
color:#<?php gt3_the_theme_option("header_text_color"); ?>;
}

header nav > ul > li > a,
.page_title_block .breadcrumbs a,
.page_title_block .breadcrumbs span,
.shortcode_accordion_item_title,
.shortcode_toggles_item_title,
.shortcode_tab_item_title,
.btn_small,
.btn_normal,
.btn_large,
.sitemap_list li a,
.sitemap_list li,
.filter_navigation ul li ul li a,
.feedback_go,
.feedback_reset,
.promo_button,
.price_item_btn a,
.shortcode_button,
.filter_navigation ul li ul li a,
.widget_nav_menu ul li a,
.widget_archive ul li a,
.widget_pages ul li a,
.widget_categories ul li a,
.widget_recent_entries ul li a,
.pagerblock li a,
.blogpost_date-block,
.blogpost_date-block a,
.demo_panel .panel_title,
header .tag_line .call_us,
header .tag_line .slogan,
a.menu_toggler {
font-family:'<?php echo $text_headers_font; ?>', sans-serif!important;
}

* {
font-family:<?php echo $main_content_font; ?>, Helvetica, sans-serif;
color:#464d52;
}

input, button, select, textarea {
font-family:<?php echo $main_content_font; ?>, Helvetica, sans-serif!important;
}

h1, h2, h3, h4, h5, h6,
h1 span, h2 span, h3 span, h4 span, h5 span, h6 span,
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
font-family:'<?php echo $text_headers_font; ?>', sans-serif!important;
}

h1, h1 span, h1 a {
font-size:<?php echo $h1_font_size; ?>;
line-height:<?php echo $h1_line_height; ?>;
}
h2, h2 span, h2 a {
font-size:<?php echo $h2_font_size; ?>;
line-height:<?php echo $h2_line_height; ?>;
}
h3, h3 span, h3 a {
font-size:<?php echo $h3_font_size; ?>;
line-height:<?php echo $h3_line_height; ?>;
}
h4, h4 span, h4 a {
font-size:<?php echo $h4_font_size; ?>;
line-height:<?php echo $h4_line_height; ?>;
}
h5, h5 span, h5 a {
font-size:<?php echo $h5_font_size; ?>;
line-height:<?php echo $h5_line_height; ?>;
}
h6, h6 span, h6 a {
font-size:<?php echo $h6_font_size; ?>;
line-height:<?php echo $h6_line_height; ?>;
}

@media only screen and (max-width: 760px) {
    h1, h1 span, h1 a {
    font-size:35px;
    line-height:37px;
    }
    h2, h2 span, h2 a {
    font-size:30px;
    line-height:32px;
    }
    h3, h3 span, h3 a {
    font-size:26px;
    line-height:28px;
    }
    h4, h4 span, h4 a {
    font-size:20px;
    line-height:22px;
    }
    h5, h5 span, h5 a {
    font-size:16px;
    line-height:18px;
    }
    h6, h6 span, h6 a {
    font-size:14px;
    line-height:16px;
    }
}


/* ***  C O L O R   O P T I O N S  *** */

header ul.menu > li > a {
color:#464d52;
}