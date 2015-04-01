<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie ie9" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

    <!-- Mobile Specific Metas
   ================================================== -->
    <?php if (gt3_get_theme_option("responsive")=="on") { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="<?php echo gt3_get_theme_option('favicon'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo gt3_get_theme_option('apple_touch_57'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo gt3_get_theme_option('apple_touch_72'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo gt3_get_theme_option('apple_touch_114'); ?>">

    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php echo gt3_get_if_strlen(gt3_get_theme_option("custom_css"), "<style>", "</style>"); ?>
    <?php gt3_the_theme_option("code_before_head"); ?>
    <script>
        mixajaxurl = "<?php echo esc_url(get_option("siteurl")) ?>/wp-admin/admin-ajax.php";
        themerooturl = "<?php echo THEMEROOTURL; ?>";
    </script>
    <!--[if IE 8 ]><script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
            document.createElement(e[i]);
        }
    </script><![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="<?php echo gt3_get_theme_option("header_type"); ?>">

    <section class="<?php echo gt3_get_theme_option("tagline_type"); ?>">
        <div class="container">
            <div class="call_us"><?php if (gt3_get_theme_option("translator_status") == "enable") {gt3_the_text("call_us");} else {_e('Call us toll free: ','theme_localization');} ?> <?php gt3_the_theme_option("phone"); ?></div>
            <div class="slogan"><?php if (gt3_get_theme_option("translator_status") == "enable") {gt3_the_text("translator_top_slogan");} else {_e('Best WP Theme Ever!','theme_localization');} ?></div>
        </div>
        <div class="clear"></div>
    </section>

    <div class="header_wrapper container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php gt3_the_theme_option("logo"); ?>" alt=""  width="<?php gt3_the_theme_option("header_logo_standart_width"); ?>" height="<?php gt3_the_theme_option("header_logo_standart_height"); ?>" class="logo_def"><img src="<?php gt3_the_theme_option("logo_retina"); ?>" alt="" width="<?php gt3_the_theme_option("header_logo_standart_width"); ?>" height="<?php gt3_the_theme_option("header_logo_standart_height"); ?>" class="logo_retina"></a>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'menu', 'depth' => '3')); ?>
            <div class="clear"></div>
        </nav>
        <div class="call_us"><?php if (gt3_get_theme_option("translator_status") == "enable") {gt3_the_text("call_us");} else {_e('Call us toll free: ','theme_localization');} ?> <?php gt3_the_theme_option("phone"); ?></div>
        <div class="socials">
            <ul class="socials_list">
                <?php echo gt3_socsm("social_facebook", $class = "ico_social-facebook", $title = "Facebook"); ?>
                <?php echo gt3_socsm("social_vimeo", $class = "ico_social-vimeo", $title = "Vimeo"); ?>
                <?php echo gt3_socsm("social_tumblr", $class = "ico_social-tumblr", $title = "Tumblr"); ?>
                <?php echo gt3_socsm("social_twitter", $class = "ico_social-twitter", $title = "Twitter"); ?>
                <?php echo gt3_socsm("social_delicious", $class = "ico_social-delicious", $title = "Delicious"); ?>
                <?php echo gt3_socsm("social_flickr", $class = "ico_social-flickr", $title = "Flickr"); ?>
                <?php echo gt3_socsm("social_pinterest", $class = "ico_social-pinterest", $title = "Pinterest"); ?>
                <?php echo gt3_socsm("social_dribbble", $class = "ico_social-dribbble", $title = "Dribbble"); ?>
                <?php echo gt3_socsm("social_linked_in", $class = "ico_social-linked", $title = "LinkedIn"); ?>
                <?php echo gt3_socsm("social_youtube", $class = "ico_social-youtube", $title = "YouTube"); ?>
                <?php echo gt3_socsm("social_gplus", $class = "ico_social-gplus", $title = "Google Plus"); ?>
                <?php echo gt3_socsm("social_instagram", $class = "ico_social-instagram", $title = "Instagram"); ?>
            </ul>
        </div><!-- .social -->
    </div>
</header>

<div class="main_wrapper">