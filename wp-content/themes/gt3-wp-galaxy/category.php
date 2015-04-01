<?php get_header();
#Emulate default settings for page without personal ID
$gt3_pagebuilder = gt3_get_default_pb_settings();
gt3_the_pb_custom_bg_and_color($gt3_pagebuilder);
$gt3_current_page_sidebar = $gt3_pagebuilder['settings']['layout-sidebars'];
?>

<div class="content_wrapper <?php echo ((isset($gt3_pagebuilder['settings']['show_breadcrumb']) && $gt3_pagebuilder['settings']['show_breadcrumb'] == "yes" && gt3_get_theme_option("show_breadcrumb") !== "off") ? 'withbreadcrumb' : 'withoutbreadcrumb') ?>">
    <div class="page_title_block">
        <div class="container">
            <?php if (function_exists('gt3_the_breadcrumb') && $gt3_pagebuilder['settings']['show_breadcrumb'] !== "no" && gt3_get_theme_option("show_breadcrumb") !== "off") {gt3_the_breadcrumb();} ?>
        </div>
    </div>
    <div class="container">
        <div class="content_block <?php echo esc_attr($gt3_pagebuilder['settings']['layout-sidebars']) ?> row">
            <div class="fl-container <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                <div class="row">
                    <div class="posts-block <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "left-sidebar" || $gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                        <div class="contentarea">
                            <?php
                            if (!post_password_required()) { the_pb_parser((isset($gt3_pagebuilder['modules']) ? $gt3_pagebuilder['modules'] : array())); }
                                echo '<div class="row-fluid"><div class="span12">';
                                while (have_posts()) : the_post();
                                    get_template_part("bloglisting");
                                endwhile; gt3_get_pagination();
                                echo '</div><div class="clear"></div></div>';
                            ?>
                        </div>
                    </div>
                    <?php get_sidebar('left'); ?>
                </div>
            </div>
            <?php get_sidebar('right'); ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>