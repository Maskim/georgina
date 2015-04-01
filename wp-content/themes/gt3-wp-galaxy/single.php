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
    <div class="page_title_block">
        <div class="container">
            <h1 class="title"><?php if ($gt3_pagebuilder['settings']['show_page_title'] !== "no") { the_title(); } ?></h1>
            <?php if (function_exists('gt3_the_breadcrumb') && $gt3_pagebuilder['settings']['show_breadcrumb'] !== "no" && gt3_get_theme_option("show_breadcrumb") !== "off") {gt3_the_breadcrumb();} ?>
        </div>
    </div>
    <div class="container">
        <div class="content_block <?php echo esc_attr($gt3_pagebuilder['settings']['layout-sidebars']) ?> row">
            <div class="fl-container <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                <div class="row">
                    <div class="posts-block <?php echo (($gt3_pagebuilder['settings']['layout-sidebars'] == "left-sidebar" || $gt3_pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                        <div class="contentarea">
                            <div class="row-fluid">
                                <div class="span12 module_cont module_blog module_none_padding">
                                    <div class="blog_post_page">
                                        <?php include ("ext/pf_type1.php"); ?>
                                        <div class="blog_post-meta">
                                            <div class="blogpost_type_ico">
                                                <svg class="blogpost-svg" viewBox="0 0 1000 1000">
                                                    <rect width="1000" height="1000" />
                                                </svg>
                                                <span class="post_type_<?php echo $pf; ?>"></span>
                                            </div><!-- .post type -->
                                            <span><?php the_time("d M Y"); ?></span>
                                            <span>by <?php the_author_posts_link(); ?></span>
                                            <span><?php the_category(', '); ?></span>
                                            <?php the_tags("<span>tags: ", ', ', '</span>'); ?>
                                        </div>

                                        <article class="contentarea">
                                            <?php
                                            if (!post_password_required()) { the_pb_parser((isset($gt3_pagebuilder['modules']) ? $gt3_pagebuilder['modules'] : array())); }

                                            global $gt3_contentAlreadyPrinted;
                                            if ($gt3_contentAlreadyPrinted !== true) {
                                                the_content(((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("read_more_link") : __('Read more!','theme_localization')));
                                            }
                                            wp_link_pages( array( 'before' => '<div class="page-link"><span>' . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translate_pages") : __('Pages','theme_localization')) . ': </span>', 'after' => '</div>' ) );
                                            ?>
                                        </article>

                                        <div class="dn">
                                            <?php posts_nav_link(); ?>
                                        </div>

                                        <div class="blogpost_share">
                                            <a target="_blank" href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>" class="ico_socialize_facebook2 ico_socialize type1"></a>
                                            <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&amp;url=<?php echo get_permalink(); ?>" class="ico_socialize_twitter2 ico_socialize type1"></a>
                                            <a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink(); ?>&media=<?php gt3_the_theme_option("logo"); ?>" class="ico_socialize_pinterest ico_socialize type1"></a>
                                            <a target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="ico_socialize_google2 ico_socialize type1"></a>
                                            <div class="clear"></div>
                                        </div>

                                        <div class="prev_next_links">
                                            <div class="fleft"><?php previous_post_link('&laquo; %link') ?></div>
                                            <div class="fright"><?php next_post_link('%link &raquo;') ?></div>
                                            <div class="clear"></div>
                                        </div>


                                    </div><!--.blog_post_page -->
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <?php comments_template(); ?>
                                </div>
                            </div>

                            <?php

                            if (gt3_get_theme_option("related_posts") == "on") {

                                if ($gt3_pagebuilder['settings']['layout-sidebars'] == "no-sidebar") {
                                    $posts_per_line = 4;
                                } else {
                                    $posts_per_line = 3;
                                }

                                echo '<div class="row-fluid"><div class="span12 module_cont module_small_padding module_feature_posts">';
                                echo do_shortcode("[feature_posts
                                heading_color=''
                                heading_size='h4'
                                heading_text='".((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translate_related_posts") : __('Related Posts','theme_localization'))."'
                                number_of_posts='20'
                                posts_per_line=".$posts_per_line."
                                sorting_type='random'
                                related='yes'
                                post_type='post'][/feature_posts]");
                                echo '</div></div>';
                            }

                            ?>

                            <div class="row-fluid">
                                <div class="span12 module_cont">
                                    <a class="shortcode_button btn_small btn_type1 btn_back" href="<?php echo esc_js("javascript:history.back()");?>"><?php (gt3_get_theme_option("translator_status") == "enable") ? gt3_the_text("back_button") : _e('Back','theme_localization'); ?></a><div class="clear"></div>
                                </div>
                            </div>

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

<?php get_footer() ?>