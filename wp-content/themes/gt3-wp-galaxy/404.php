<?php get_header();
#Emulate default settings for page without personal ID
$gt3_pagebuilder = gt3_get_default_pb_settings();
gt3_the_pb_custom_bg_and_color($gt3_pagebuilder);
?>

<div class="content_wrapper <?php echo ((isset($gt3_pagebuilder['settings']['show_breadcrumb']) && $gt3_pagebuilder['settings']['show_breadcrumb'] == "yes" && gt3_get_theme_option("show_breadcrumb") !== "off") ? 'withbreadcrumb' : 'withoutbreadcrumb') ?>">
    <?php if (($gt3_pagebuilder['settings']['show_page_title'] == "yes" || $gt3_pagebuilder['settings']['show_breadcrumb'] == "yes") || (!isset($gt3_pagebuilder['settings']['show_page_title']) && !isset($gt3_pagebuilder['settings']['show_breadcrumb']))) { ?>
        <div class="page_title_block">
            <div class="container">
                <h2 class="title"><?php echo ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_oops") : __('Oops!','theme_localization')); ?></h2>
                <?php if (function_exists('gt3_the_breadcrumb') && $gt3_pagebuilder['settings']['show_breadcrumb'] !== "no" && gt3_get_theme_option("show_breadcrumb") !== "off") {gt3_the_breadcrumb();} ?>
            </div>
        </div>
    <?php } ?>
    <div class="container">
        <div class="content_block no-sidebar row">
            <div class="fl-container span12">
                <div class="row">
                    <div class="posts-block span12">
                        <div class="contentarea">

                            <div class="module_cont module_404">
                                <div class="wrapper404">
                                    <div class="block404">
                                        <h1><?php echo ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_oops") : __('Oops!','theme_localization')); ?> <?php echo ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_header_404") : __('Not Found :(','theme_localization')); ?></h1>
                                        <h4><?php echo ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_text_404") : __('Apologies, but we were unable to find what you were looking for.','theme_localization')); ?></h4>
                                    </div>
                                    <form name="search_field" method="get" action="<?php echo home_url(); ?>" class="search_form">
                                        <input type="text" name="s" value="<?php (gt3_get_theme_option("translator_status") == "enable") ? gt3_the_text("translator_search_value") : _e('Search the site...','theme_localization'); ?>" title="<?php (gt3_get_theme_option("translator_status") == "enable") ? gt3_the_text("translator_search_value") : _e('Search the site...','theme_localization'); ?>" class="field_search">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php /*get_sidebar('left');*/ ?>
                </div>
            </div>
            <?php /*get_sidebar('right');*/ ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>