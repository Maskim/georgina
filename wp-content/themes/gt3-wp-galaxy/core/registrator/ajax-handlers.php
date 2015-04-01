<?php

#Upload images
add_action('wp_ajax_mix_ajax_post_action', 'mix_ajax_callback');
function mix_ajax_callback()
{
    if (is_admin()) {
        $save_type = $_POST['type'];

        if ($save_type == 'upload') {

            $clickedID = $_POST['data'];
            $filename = $_FILES[$clickedID];
            $filename['name'] = preg_replace('/[^a-zA-Z0-9._\-]/', '', $filename['name']);

            $override['test_form'] = false;
            $override['action'] = 'wp_handle_upload';
            $uploaded_file = wp_handle_upload($filename, $override);
            $upload_tracking[] = $clickedID;
            gt3_update_theme_option($clickedID, $uploaded_file['url']);
            if (!empty($uploaded_file['error'])) {
                echo 'Upload Error: ' . $uploaded_file['error'];
            } else {
                echo esc_url($uploaded_file['url']);
            }
        }
    }

    die();
}


#Compile ShortcodesUI and push it
add_action('wp_ajax_getshortcodesUI', 'prefix_ajax_getshortcodesUI');
function prefix_ajax_getshortcodesUI()
{

    global $gt3_shortcodesUI;

    echo "<div class='select_shortcode_cont'>Select shortcode: <select name='select_shortcode' class='select_shortcode'>";
    if (is_array($gt3_shortcodesUI)) {
        foreach ($gt3_shortcodesUI as $array) {
            echo "

                <option value='" . $array['name'] . "'>" . $array['name'] . "</option>

            ";
        }
    }
    echo "</select></div>";

    if (is_array($gt3_shortcodesUI)) {
        foreach ($gt3_shortcodesUI as $array) {
            echo "
            <div shortcodename='" . $array['name'] . "' class='shortcodeitem " . $array['name'] . "'>
                <div class='handler_body'>" . $array['handler'] . "</div>
                <button class='insertshortcode button button-primary button-small'>Insert</button>
            </div>
            ";
        }
    }
    ?>

    <script>
        jQuery('.shortcodeitem:first').show();
    </script>

    <?php

    die();
}


#Get last slide ID
add_action('wp_ajax_get_unused_id_ajax', 'get_unused_id_ajax');
if (!function_exists('get_unused_id_ajax')) {
    function get_unused_id_ajax()
    {
        if (is_admin()) {
            $lastid = gt3_get_theme_option("last_slide_id");
            if ($lastid < 3) {
                $lastid = 2;
            }
            $lastid++;

            echo $lastid;

            gt3_update_theme_option("last_slide_id", $lastid);
        }

        die();
    }
}


#Send feedback

#CAPTCHA
function get_theme_captcha()
{

}

#GET NEW CAPTCHA
if (gt3_get_theme_option("captcha_status") == "enabled") {
    add_action('wp_ajax_get_new_captcha', 'get_new_captcha');
    add_action('wp_ajax_nopriv_get_new_captcha', 'get_new_captcha');
    if (!function_exists('get_new_captcha')) {
        function get_new_captcha()
        {
            /*$_SESSION['theme_captcha'] = mt_rand(0, 9);
            $compile['first'] = mt_rand(0,$_SESSION['theme_captcha']);
            $compile['second'] = $_SESSION['theme_captcha'] - $compile['first'];
            $compile['summ'] = $_SESSION['theme_captcha'];
            echo $compile['first']."+".$compile['second']."=";
            die();*/
        }
    }
}
#END CAPTCHA

add_action('wp_ajax_send_feedback', 'send_feedback');
add_action('wp_ajax_nopriv_send_feedback', 'send_feedback');
if (!function_exists('send_feedback')) {
    function send_feedback()
    {

        $sendername = esc_attr($_POST['name']);
        $senderemail = filter_var(esc_attr($_POST['email']), FILTER_SANITIZE_EMAIL);
        $subjectmessage = esc_attr($_POST['subject']);
        $sendermessage = esc_attr($_POST['message']);
        $subject = esc_attr($_POST['subject']);

        if (gt3_get_theme_option("captcha_status") == "enabled") {
            $captcha = esc_attr($_POST['captcha']);
            /*if ((int)$captcha !== (int)$_SESSION['theme_captcha']) {
                echo "<span class='ajax_activity red'>" . gt3_get_text("wrong_captcha") . "</span>";
                die();
            }*/
        }

        if ($sendername == "" || $senderemail == "" || $sendermessage == "" || $sendername == ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_feedback_form_name") : __('Name *', 'theme_localization')) || $senderemail == ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_feedback_form_email") : __('Email *', 'theme_localization')) || $sendermessage == ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_feedback_form_message") : __('Message *', 'theme_localization'))) {
            echo "<span class='ajax_activity red'>" . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("fill_the_required_field") : __('Please fill the required field.', 'theme_localization')) . "</span>";
            die();
        }

        if (!filter_var($senderemail, FILTER_VALIDATE_EMAIL)) {
            echo "<span class='ajax_activity red'>" . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("fill_the_required_field") : __('Please fill the required field.', 'theme_localization')) . "</span>";
            die();
        }

        gt3_sendFeedback($senderemail, $sendermessage, $sendername, $subjectmessage);
        echo "<span class='ajax_activity green'>" . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("contacts_thanx") : __('Thank you! Your message has been sent.', 'theme_localization')) . "</span>";
        die();
    }
}


#Load portfolio works
add_action('wp_ajax_get_portfolio_works', 'get_portfolio_works');
add_action('wp_ajax_nopriv_get_portfolio_works', 'get_portfolio_works');
if (!function_exists('get_portfolio_works')) {
    function get_portfolio_works()
    {
        $html_template = esc_attr($_POST['html_template']);
        $now_open_works = absint($_POST['now_open_works']);
        $works_per_load = absint($_POST['works_per_load']);
        $category = ($_POST['category'] !== "all" ? $_POST['category'] : '');

        $wp_query = new WP_Query();
        $args = array(
            'post_type' => 'port',
            'order' => 'DESC',
            'offset' => $now_open_works,
            'posts_per_page' => $works_per_load,
            'suppress_filters' => FALSE
        );

        if (strlen($category) > 0) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'portcat',
                    'field' => 'slug',
                    'terms' => $category
                )
            );
        }
        $wp_query->query($args);

        $i = 1;

        while ($wp_query->have_posts()) : $wp_query->the_post();

            $pf = get_post_format();
            if (empty($pf)) $pf = "text";
            $pfIcon = gt3_get_pf_icon($pf);
            $gt3_pagebuilder = gt3_get_theme_pagebuilder(get_the_ID());

            $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'single-post-thumbnail');
            if (strlen($featured_image[0]) < 1) {
                $featured_image[0] = IMGURL . "/core/your_image_goes_here.jpg";
            }

            if (isset($gt3_pagebuilder['settings']['external_link']) && strlen($gt3_pagebuilder['settings']['external_link']) > 0) {
                $linkToTheWork = $gt3_pagebuilder['settings']['external_link'];
                $target = "target='_blank'";
            } else {
                $linkToTheWork = get_permalink();
                $target = "";
            }

            if (isset($gt3_pagebuilder['settings']['time_spent']) && strlen($gt3_pagebuilder['settings']['time_spent']) > 0) {
                $time_spent_value = $gt3_pagebuilder['settings']['time_spent'];
                $time_spent_html = '<div class="portfolio_descr_time">' . ((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("translator_time_spent") : __('Time spent', 'theme_localization')) . ': <span>' . $time_spent_value . '</span></div>';
            } else {
                $time_spent_value = '';
                $time_spent_html = '';
            }

            if (!isset($echoallterm)) {
                $echoallterm = '';
            }
            $new_term_list = get_the_terms(get_the_id(), "portcat");
            if (is_array($new_term_list)) {
                foreach ($new_term_list as $term) {
                    $tempname = strtr($term->name, array(
                        ' ' => '-',
                    ));
                    $echoallterm .= strtolower($tempname) . " ";
                    $echoterm = $term->name;
                }
            }


            #Portfolio 1
            if ($html_template == "1 column") {
                echo '
                <div data-category="' . $echoallterm . '" class="' . $echoallterm . ' element row-fluid">
                    <div class="filter_img span6">
                        <a ' . $target . ' href="' . $linkToTheWork . '">
                            <img src="' . aq_resize($featured_image[0], "570", "340", true) . '" alt="">
                        </a>
                    </div>
                    <div class="portfolio_dscr span6">
                        <h5><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5>
                        ' . do_shortcode(get_the_content(((gt3_get_theme_option("translator_status") == "enable") ? gt3_get_text("read_more_link") : __('Read more!', 'theme_localization')))) . '
                    </div>
                </div>
                ';
            }
            #END Portfolio 1


            #Portfolio 2
            if ($html_template == "2 columns") {
                echo '
                <div data-category="' . $echoallterm . '" class="' . $echoallterm . ' element">
                    <div class="filter_img portfolio_item">
                        <a href="' . get_permalink() . '">
                            <img src="' . aq_resize($featured_image[0], "570", "570", true) . '" alt="" width="570" height="570">
                            <div class="gallery_fadder"></div>
                            <div class="post_type_ico">
                                <svg class="iconbox-svg" viewBox="0 0 1000 1000">
                                      <rect width="1000" height="1000" />
                                </svg>
                                <span class="post_type_' . $pf . '"></span>
                            </div><!-- .post type -->
                            <div class="gallery_descr">
                                <h5 class="gallery_title">' . get_the_title() . '</h5>
                                <p>' . gt3_smarty_modifier_truncate(get_the_excerpt(), 460) . '</p>
                            </div>
                        </a>
                    </div>
                </div>
                ';
            }
            #END Portfolio 2


            #Portfolio 3
            if ($html_template == "3 columns") {
                echo '
                <div data-category="' . $echoallterm . '" class="' . $echoallterm . ' element">
                    <div class="filter_img portfolio_item">
                        <a href="' . get_permalink() . '">
                            <img src="' . aq_resize($featured_image[0], "570", "570", true) . '" alt="" width="570" height="570">
                            <div class="gallery_fadder"></div>
                            <div class="post_type_ico">
                                <svg class="iconbox-svg" viewBox="0 0 1000 1000">
                                      <rect width="1000" height="1000" />
                                </svg>
                                <span class="post_type_' . $pf . '"></span>
                            </div><!-- .post type -->
                            <div class="gallery_descr">
                                <h5 class="gallery_title">' . get_the_title() . '</h5>
                                <p>' . gt3_smarty_modifier_truncate(get_the_excerpt(), 460) . '</p>
                            </div>
                        </a>
                    </div>
                </div>
                ';
            }
            #END Portfolio 3


            #Portfolio 4
            if ($html_template == "4 columns") {
                echo '
                <div data-category="' . $echoallterm . '" class="' . $echoallterm . ' element">
                    <div class="filter_img portfolio_item">
                        <a href="' . get_permalink() . '">
                            <img src="' . aq_resize($featured_image[0], "570", "570", true) . '" alt="" width="570" height="570">
                            <div class="gallery_fadder"></div>
                            <div class="post_type_ico">
                                <svg class="iconbox-svg" viewBox="0 0 1000 1000">
                                      <rect width="1000" height="1000" />
                                </svg>
                                <span class="post_type_' . $pf . '"></span>
                            </div><!-- .post type -->
                            <div class="gallery_descr">
                                <h5 class="gallery_title">' . get_the_title() . '</h5>
                                <p>' . gt3_smarty_modifier_truncate(get_the_excerpt(), 60) . '</p>
                            </div>
                        </a>
                    </div>
                </div>
                ';
            }
            #END Portfolio 4

            $i++;
            unset($echoallterm, $pf);
        endwhile;

        die();
    }
}

#Ajax import xml
add_action('wp_ajax_ajax_import_dump', 'ajax_import_dump');
if (!function_exists('ajax_import_dump')) {
    function ajax_import_dump()
    {
        if (is_admin()) {
            if (!defined('WP_LOAD_IMPORTERS')) {
                define('WP_LOAD_IMPORTERS', true);
            }

            require_once(TEMPLATEPATH . '/core/xml-importer/importer.php');

            try {
                ob_start();
                $importer = new WP_Import();
                $importer->import(TEMPLATEPATH . '/core/xml-importer/import.xml');
                ob_clean();
            } catch (Exception $e) {
                die(json_encode(array(
                    'message' => $e->getMessage()
                )));
            }
            die(json_encode(array(
                'message' => 'Data was imported successfully'
            )));
        }
    }
}

?>