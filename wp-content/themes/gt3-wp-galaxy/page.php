<?php get_header();
the_post();

/* LOAD PAGE BUILDER ARRAY */
$gt3_pagebuilder = gt3_get_theme_pagebuilder(get_the_ID());
$pf = get_post_format();
if (empty($pf)) $pf = "text";
$pfIcon = gt3_get_pf_icon($pf);
$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
gt3_the_pb_custom_bg_and_color($gt3_pagebuilder);
$gt3_current_page_sidebar = $gt3_pagebuilder['settings']['layout-sidebars'];
?>

<div class="content_wrapper <?php echo ((isset($gt3_pagebuilder['settings']['show_breadcrumb']) && $gt3_pagebuilder['settings']['show_breadcrumb'] == "yes" && gt3_get_theme_option("show_breadcrumb") !== "off") ? 'withbreadcrumb' : 'withoutbreadcrumb') ?>">
    <?php if (($gt3_pagebuilder['settings']['show_page_title'] == "yes" || $gt3_pagebuilder['settings']['show_breadcrumb'] == "yes") || (!isset($gt3_pagebuilder['settings']['show_page_title']) && !isset($gt3_pagebuilder['settings']['show_breadcrumb']))) { ?>
    <div class="page_title_block">
        <div class="container">
            <h1 class="title"><?php if ($gt3_pagebuilder['settings']['show_page_title'] !== "no") { the_title(); } ?></h1>
            <?php if (function_exists('gt3_the_breadcrumb') && $gt3_pagebuilder['settings']['show_breadcrumb'] !== "no" && gt3_get_theme_option("show_breadcrumb") !== "off") {gt3_the_breadcrumb();} ?>
        </div>
    </div>
    <?php } ?>
    <div class="container">
        <div class="content_block <?php echo esc_attr($gt3_pagebuilder['settings']['layout-sidebars']) ?> row">
            <div class="fl-container <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                <div class="row">
                    <div class="posts-block <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "left-sidebar" || $gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                        <div class="contentarea">

                            <?php
                            if (!post_password_required()) { the_pb_parser((isset($gt3_pagebuilder['modules']) ? $gt3_pagebuilder['modules'] : array())); }

                            global $gt3_contentAlreadyPrinted;
                            if ($gt3_contentAlreadyPrinted !== true && strlen(get_the_content())>0) {
                                echo '<div class="row-fluid"><div class="span12">';
                                the_content(((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("read_more_link") : __('Read more!','theme_localization')));
                                echo '</div><div class="clear"></div></div>';
                            }

                            wp_link_pages( array( 'before' => '<div class="page-link"><span>' . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translate_pages") : __('Pages','theme_localization')) . ': </span>', 'after' => '</div>' ) );
                            ?>

                            <?php
                            if ( comments_open() && gt3_get_theme_option("page_comments") == "enabled"  ) {
                            ?>
                            <div class="row-fluid">
                                <div class="span12">
                                    <?php comments_template(); ?>
                                </div>
                            </div>
                            <?php
                            }
                            ?>

                        </div><!-- .contentarea -->
                    </div>
                    <?php get_sidebar('left'); ?>
                </div>
                <div class="clear"><!-- ClearFix --></div>
            </div><!-- .fl-container -->
            <?php get_sidebar('right'); ?>
            <div class="clear"><!-- ClearFix --></div>
        </div>
    </div><!-- .container -->
</div><!-- .content_wrapper -->

<?php get_footer(); ?>