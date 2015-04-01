</div><!-- .main_wrapper -->

<?php if (gt3_get_theme_option("footer_widgets_area") == "on") { ?>
<div class="pre_footer">
    <div class="container">
        <aside id="footer_bar" class="row">
            <?php get_sidebar('footer'); ?>
        </aside>
    </div>
</div><!-- .pre_footer -->
<?php } ?>

<footer>
    <div class="footer_line container">

        <figure class="btn2top-wrapper">
            <svg class="btn2top" viewBox="0 0 1000 1000">
                <rect width="1000" height="1000" />
            </svg>
        </figure>

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
        </div>
        <div class="clear"></div>
        <div class="copyright"><?php if (gt3_get_theme_option("translator_status") == "enable") {gt3_the_theme_option("copyright");} else {_e('&copy; 2020 Business Theme. All Rights Reserved.','theme_localization');}?></div>
    </div>
</footer>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="1000px" height="1000px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
        <defs>
            <clipPath id="galaxy">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M555.014,986.879c-30.257,17.494-79.772,17.494-110.028,0L106.457,791.144
                    c-30.257-17.493-55.009-60.433-55.009-95.42l0.002-391.455c0-34.989,24.754-77.928,55.009-95.422L444.986,13.12
                    c30.257-17.495,79.771-17.495,110.025,0l338.532,195.727c30.254,17.494,55.008,60.433,55.008,95.422l-0.004,391.455
                    c0,34.987-24.754,77.927-55.011,95.42L555.014,986.879z"/>
            </clipPath>
        </defs>
    </svg>
<?php gt3_the_theme_option("code_before_body"); wp_footer(); ?>
</body>
</html>