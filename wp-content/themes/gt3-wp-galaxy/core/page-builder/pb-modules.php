<?php

/* PB MODULES */
$modules['accordion']['name'] = "accordion";
$modules['accordion']['caption'] = __("Accordion", "theme_localization");

$modules['toggle']['name'] = "toggle";
$modules['toggle']['caption'] = __("Toggle", "theme_localization");

$modules['blockquote']['name'] = "blockquote";
$modules['blockquote']['caption'] = __("Blockquote", "theme_localization");

$modules['feedback_form']['name'] = "feedback_form";
$modules['feedback_form']['caption'] = __("Feedback form", "theme_localization");

$modules['iconboxes']['name'] = "iconboxes";
$modules['iconboxes']['caption'] = __("Icon box", "theme_localization");

$modules['messageboxes']['name'] = "messageboxes";
$modules['messageboxes']['caption'] = __("Message box", "theme_localization");

$modules['custom_list']['name'] = "custom_list";
$modules['custom_list']['caption'] = __("Custom list", "theme_localization");

$modules['gallery']['name'] = "gallery";
$modules['gallery']['caption'] = __("Gallery", "theme_localization");

$modules['portfolio']['name'] = "portfolio";
$modules['portfolio']['caption'] = __("Portfolio", "theme_localization");

$modules['blog']['name'] = "blog";
$modules['blog']['caption'] = __("Blog", "theme_localization");

$modules['feature_posts']['name'] = "feature_posts";
$modules['feature_posts']['caption'] = __("Featured posts", "theme_localization");

$modules['promo_text']['name'] = "promo_text";
$modules['promo_text']['caption'] = __("Promo text", "theme_localization");

$modules['divider']['name'] = "divider";
$modules['divider']['caption'] = __("Divider", "theme_localization");

$modules['video']['name'] = "video";
$modules['video']['caption'] = __("Video", "theme_localization");

$modules['tabs']['name'] = "tabs";
$modules['tabs']['caption'] = __("Tabs", "theme_localization");

$modules['title']['name'] = "title";
$modules['title']['caption'] = __("Title", "theme_localization");

$modules['slider']['name'] = "layer_slider";
$modules['slider']['caption'] = __("Slider", "theme_localization");

$modules['team']['name'] = "team";
$modules['team']['caption'] = __("Team", "theme_localization");

$modules['price_table']['name'] = "price_table";
$modules['price_table']['caption'] = __("Price table", "theme_localization");

$modules['testimonial']['name'] = "testimonial";
$modules['testimonial']['caption'] = __("Testimonials", "theme_localization");

$modules['text_area']['name'] = "text_area";
$modules['text_area']['caption'] = __("Text area", "theme_localization");

$modules['google_map']['name'] = "google_map";
$modules['google_map']['caption'] = __("Google map", "theme_localization");

$modules['content']['name'] = "content";
$modules['content']['caption'] = __("Content", "theme_localization");

$modules['contact_info']['name'] = "contact_info";
$modules['contact_info']['caption'] = __("Contact info", "theme_localization");

$modules['social_share']['name'] = "social_share";
$modules['social_share']['caption'] = __("Social share", "theme_localization");

$modules['partners']['name'] = "partners";
$modules['partners']['caption'] = __("Partners", "theme_localization");

$modules['diagramm']['name'] = "diagramm";
$modules['diagramm']['caption'] = __("Diagram", "theme_localization");

$modules['sitemap']['name'] = "sitemap";
$modules['sitemap']['caption'] = __("Sitemap", "theme_localization");

$modules['bg_start']['name'] = "bg_start";
$modules['bg_start']['caption'] = __("BG Start", "theme_localization");

$modules['bg_end']['name'] = "bg_end";
$modules['bg_end']['caption'] = __("BG End", "theme_localization");

$modules['html']['name'] = "html";
$modules['html']['caption'] = __("HTML", "theme_localization");
/* END PB MODULES */

function get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig)
{
    if (!isset($gt3_pagebuilder['modules'][$moduleid]['heading_text'])) {$gt3_pagebuilder['modules'][$moduleid]['heading_text'] = '';}
    if (!isset($gt3_pagebuilder['modules'][$moduleid]['heading_alignment'])) {$gt3_pagebuilder['modules'][$moduleid]['heading_alignment'] = '';}

    return "
    <div class='padding-cont'>
        <div class='heading' style='width:298px;'>
            <h4>".__("Heading", "theme_localization")."</h4>
            <input type='text' class='textoption type1' value=\"".esc_attr($gt3_pagebuilder['modules'][$moduleid]['heading_text'])."\" name='pagebuilder[modules][$moduleid][heading_text]'>
        </div>
        <div class='alignment' style='float:left;margin-right:20px;'>
            <h4>".__("Alignment", "theme_localization")."</h4>
            <select class='newselect' name='pagebuilder[modules][$moduleid][heading_alignment]'>
                " . gt3_get_select_options($gt3_pbconfig['all_available_headers_alignment'], $gt3_pagebuilder['modules'][$moduleid]['heading_alignment']) . "
            </select>
        </div>
        <div class='heading_size'>
            <h4>".__("Heading size", "theme_localization")."</h4>
            <select class='newselect' name='pagebuilder[modules][$moduleid][heading_size]'>
                " . gt3_get_select_options($gt3_pbconfig['all_available_headers_for_module'], $pb_module_size_now) . "
            </select>
        </div>
        <div class='heading_color'>
            <h4>".__("Color", "theme_localization")."</h4>
            " . gt3_colorpicker_block("pagebuilder[modules][$moduleid][heading_color]", (isset($gt3_pagebuilder['modules'][$moduleid]['heading_color']) ? $gt3_pagebuilder['modules'][$moduleid]['heading_color'] : '')) . "
        </div>
        <div class='clear'></div>
    </div>
    <div class='hr_double'></div>
    ";
}

function get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $headingtext, $settingname)
{
    return "
        <div class='enter_option_row'>
            <h5>{$headingtext}</h5>
            <textarea name='pagebuilder[modules][$moduleid][$settingname]' class='enter_text1'>".(isset($gt3_pagebuilder['modules'][$moduleid][$settingname]) ? $gt3_pagebuilder['modules'][$moduleid][$settingname] : '')."</textarea>
        </div>
    ";
}

function get_empty_textarea($headingtext, $classes, $width="100%", $textalign="left", $default_value="")
{
    return "
        <div class='enter_option_row' style='width:{$width} !important;'>
            <h5>{$headingtext}</h5>
            <textarea name='' class='enter_text1 ".$classes."' style='text-align: {$textalign} !important;'></textarea>
        </div>
    ";
}

function get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $headingtext, $settingname, $width, $available_options_in_select)
{
    return "
        <div class='enter_option_row'>
            <h5>$headingtext</h5>
            <select class='newselect' name='pagebuilder[modules][$moduleid][$settingname]' style='width:{$width} !important;'>
                " . gt3_get_select_options($available_options_in_select, (isset($gt3_pagebuilder['modules'][$moduleid][$settingname]) ? $gt3_pagebuilder['modules'][$moduleid][$settingname] : '')) . "
            </select>
        </div>
    ";
}

function get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $headingtext, $settingname, $width, $available_options_in_select)
{
    return "
        <div class='enter_option_row'>
            <h5>$headingtext</h5>
            <select class='newselect' name='pagebuilder[modules][$moduleid][$settingname]' style='width:{$width} !important;'>
                " . gt3_get_select_options_with_caption($available_options_in_select, (isset($gt3_pagebuilder['modules'][$moduleid][$settingname]) ? $gt3_pagebuilder['modules'][$moduleid][$settingname] : '')) . "
            </select>
        </div>
    ";
}

function get_module_settings_part_upload_file($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $headingtext, $settingname, $width)
{
    return "
        <div class='enter_option_row upload_file_cont'>
            <h5>$headingtext</h5>
            <div class='input'>
                <input type='text' value='".(isset($gt3_pagebuilder['modules'][$moduleid][$settingname]) ? $gt3_pagebuilder['modules'][$moduleid][$settingname] : '')."' name='pagebuilder[modules][$moduleid][$settingname]' class='textoption type1' style='width:609px;float:left;'>
                <div class='up_btns' style='float:left;'>
                    <span id='uploaded_file_{$settingname}{$moduleid}' class='button btn_upload_image style2'>Upload Image</span>
                </div>
                <div class='clear'></div>
            </div>
        </div>
    ";
}

function get_empty_select($headingtext, $classes, $available_options_in_select, $width="100px", $default_value="")
{
    return "
        <div class='enter_option_row'>
            <h5>$headingtext</h5>
            <select class='newselect ".$classes."' name='' style='width:{$width} !important;'>
                " . gt3_get_select_options_with_caption($available_options_in_select, '') . "
            </select>
        </div>
    ";
}

function get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $headingtext, $settingname, $width, $textalign, $defaultvalue='')
{
    return "
        <div class='enter_option_row'>
            <h5>$headingtext</h5>
            <input style='width:{$width} !important; text-align: {$textalign} !important;' type='text' value='".(isset($gt3_pagebuilder['modules'][$moduleid][$settingname]) ? $gt3_pagebuilder['modules'][$moduleid][$settingname] : $defaultvalue)."' name='pagebuilder[modules][$moduleid][$settingname]' class='enter_text1'>
        </div>
    ";
}

function get_empty_input($headingtext, $classes, $width="200px", $textalign="center", $default_value="")
{
    return "
        <div class='enter_option_row'>
            <h5>$headingtext</h5>
            <input style='width:{$width} !important; text-align: {$textalign} !important;' type='text' value='".$default_value."' name='' class='enter_text1 ".$classes."'>
        </div>
    ";
}

function get_module_settings_part_done_btn()
{
    return "
        <div class='padding-cont' style='padding-top:0;'>
            <input type='button' name='ignore_this_button' class='done-btn green-btn' value='".__("Done", "theme_localization")."'>
            <div class='clear'></div>
        </div>
    ";
}

function get_module_settings_part_add_list_ability($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, $caption)
{
    if (!isset($compile)) {$compile='';}
    $compile .= "
        <div class='rows_must_be_here'>
            <input type='hidden' value='{$moduleid}' class='moduleid' name='moduleid'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_row_section'>
                <div class='option_title text-shadow1'>{$caption}</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
            <div class='clear'></div>
            <ul class='sections row-list'>";
    if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
        foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
            $compile .= "
                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>&nbsp;</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <textarea class='expanded_text1 type2 mt' name='pagebuilder[modules][$moduleid][module_items][$itemid][text]'>{$item['text']}</textarea>
                        </div>
                    </div>
                </li>
             ";
        }
    }
    $compile .= "
            </ul>
            <div class='clear'></div>
        </div>
    ";
    return $compile;
}


function get_pb_module($module_name, $module_caption, $moduleid, $gt3_pagebuilder, $module_size, $size_caption)
{
    #module_name - for example: $modules[google_map][name]
    #module_caption - for example: $modules[google_map][caption]
    #moduleid - pagebuilder[modules][x]
    global $gt3_pbconfig;

    if (!isset($compile)) {$compile='';}

    if (strlen($module_size) < 1) {
        $module_size = "block_1_4";
    }
    if (strlen($size_caption) < 1) {
        $size_caption = "1/4";
    }
    if (!is_array($gt3_pagebuilder)) {
        $gt3_pagebuilder = array();
        $pb_module_size_now = $gt3_pbconfig['default_heading_in_module'];
    } else {
        $pb_module_size_now = (isset($gt3_pagebuilder['modules'][$moduleid]['heading_size']) ? $gt3_pagebuilder['modules'][$moduleid]['heading_size'] : '');
    }

    $all_items_before_html = "<li class='module-cont item-with-settings {$module_size}'><input type='hidden' value='{$module_size}' name='pagebuilder[modules][$moduleid][size]' class='current_size'><input type='hidden' value='{$module_name}' name='pagebuilder[modules][$moduleid][name]' class='module_name'><input type='hidden' value='{$module_caption}' name='pagebuilder[modules][$moduleid][caption]' class='module_caption'><input type='hidden' value='{$moduleid}' name='pagebuilder[modules][$moduleid][key]' class='module_key'><div class='innerpadding'><div class='top'><div class='caption'><span class='module-name'>{$module_caption}</span></div><div class='controls'><div class='dragger box-with-icon'><div class='border-right'></div><div class='border-left'></div><div class='control-element'></div></div><div class='delete box-with-icon'><div class='border-right'></div><div class='border-left'></div><div class='control-element'></div></div></div><div class='text-catch'></div></div><div class='bottom'><div class='left box-with-icon'><div class='control-element'></div></div><div class='size-caption box-with-icon'><div class='control-element'><span>{$size_caption}</span></div></div><div class='right box-with-icon'><div class='control-element'></div></div><div class='edit box-with-icon'><div class='border-right'></div><div class='border-left'></div><div class='control-element'></div></div></div></div><div class='edit_popup'>";
    $all_items_after_html = "</div></li>";

    $compile .= $all_items_before_html;

###########################################################################################
##################################### ACCORDION MODULE START ##############################
###########################################################################################
    if ($module_name == "accordion") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='fl'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_accordion_section'>
                <div class='option_title text-shadow1'>".__("add new section", "theme_localization")."</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
        </div>
        <div class='fr desc_pop text-shadow1'>

        </div>
        <div class='clear'></div>
    </div>
    <div class='pb-popup-white-bg'>
        <div class='padding-cont pt25'>
            <ul class='sections accordion'>";
        if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
            foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
                $compile .= "
                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>{$item['title']}</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <input type='text' class='expanded_text1 type1 section_name' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][title]' value='{$item['title']}'>
                            <textarea class='expanded_text1 type2 mt' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][description]'>{$item['description']}</textarea>
                        </div>
                        <div class='expanded_state_cont'>
                            <span class='text-shadow1'>".__("Expanded", "theme_localization")."</span>
                        " . gt3_toggle_radio_yes_no("pagebuilder[modules][$moduleid][module_items][{$itemid}][expanded_state]", $item['expanded_state'], 'no', 'accordion_expanded_toggle') . "
                        </div>
                    </div>
                </li>
                ";
            }
        }
        $compile .= "</ul>
            <div class='clear'></div>
        </div>
    </div>
    <div class='dbg'></div>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
##################################### TOGGLE MODULE START #################################
###########################################################################################
    if ($module_name == "toggle") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='fl'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_toggle_section'>
                <div class='option_title text-shadow1'>".__("add new section", "theme_localization")."</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
        </div>
        <div class='fr desc_pop text-shadow1'>

        </div>
        <div class='clear'></div>
    </div>
    <div class='pb-popup-white-bg'>
        <div class='padding-cont pt25'>
            <ul class='sections'>";
        if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
            foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
                $compile .= "
                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>{$item['title']}</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <input type='text' class='expanded_text1 type1 section_name' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][title]' value='{$item['title']}'>
                            <textarea class='expanded_text1 type2 mt' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][description]'>{$item['description']}</textarea>
                        </div>
                        <div class='expanded_state_cont'>
                            <span class='text-shadow1'>".__("Expanded", "theme_localization")."</span>
                        " . gt3_toggle_radio_yes_no("pagebuilder[modules][$moduleid][module_items][{$itemid}][expanded_state]", $item['expanded_state'], 'no', 'toggles_expanded_toggle') . "
                        </div>
                    </div>
                </li>
                ";
            }
        }
        $compile .= "</ul>
            <div class='clear'></div>
        </div>
    </div>
    <div class='dbg'></div>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
####################################### TABS MODULE START #################################
###########################################################################################
    if ($module_name == "tabs") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='fl'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_accordion_section'>
                <div class='option_title text-shadow1'>".__("add new section", "theme_localization")."</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
        </div>
        <div class='fr desc_pop text-shadow1'>

        </div>
        <div class='clear'></div>
    </div>
    <div class='pb-popup-white-bg'>
        <div class='padding-cont pt25'>
            <ul class='sections'>";
        if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
            foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
                $compile .= "
                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>{$item['title']}</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <input type='text' class='expanded_text1 type1 section_name' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][title]' value='{$item['title']}'>
                            <textarea class='expanded_text1 type2 mt' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][description]'>{$item['description']}</textarea>
                        </div>
                        <div class='expanded_state_cont'>
                            <span class='text-shadow1'>".__("Expanded", "theme_localization")."</span>
                        " . gt3_toggle_radio_yes_no("pagebuilder[modules][$moduleid][module_items][{$itemid}][expanded_state]", $item['expanded_state'], 'no', 'accordion_expanded_toggle') . "
                        </div>
                    </div>
                </li>
                ";
            }
        }
        $compile .= "</ul>
            <div class='clear'></div>
        </div>
    </div>
    <div class='dbg'></div>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Type", "tab_type", "200px", $gt3_pbconfig['available_tabs_types']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################# BLOCKQUOTE MODULE START #################################
###########################################################################################
    if ($module_name == "blockquote") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>

    " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Quote text", "theme_localization"), "quote_text") . "

    " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Quote type", "theme_localization"), "quote_type", "200px", $gt3_pbconfig['all_available_quote_types']) . "

    " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Author", "theme_localization"), "author_name", "100%", "left") . "
    " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
####################################### FEEDBACK FORM #####################################
###########################################################################################
    if ($module_name == "feedback_form") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    <div style='margin-bottom:20px;'></div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
########################################## DIAGRAMM #######################################
###########################################################################################
    if ($module_name == "diagramm") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='fl'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_diagramm_section'>
                <div class='option_title text-shadow1'>".__("add new section", "theme_localization")."</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
        </div>
        <div class='fr desc_pop text-shadow1'>

        </div>
        <div class='clear'></div>
    </div>
    <div class='pb-popup-white-bg'>
        <div class='padding-cont pt25'>
            <ul class='sections accordion'>";
        if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
            foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
                $compile .= "
                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>{$item['title']}</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <input type='text' class='expanded_text1 type1 section_name' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][title]' value='{$item['title']}'> Percent: <input type='text' class='expanded_text1 type1 section_name' name='pagebuilder[modules][$moduleid][module_items][{$itemid}][percent]' style='width:88px; text-align: center; margin-right: 2px; float: right;' value='{$item['percent']}'>
                        </div>
                    </div>
                </li>
                ";
            }
        }
        $compile .= "</ul>
            <div class='clear'></div>
        </div>
    </div>
    <div class='dbg'></div>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## GALLERY MODULE START ###################################
###########################################################################################
    if ($module_name == "gallery") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='enter_option_row'>
            <h5>".__("Select gallery", "theme_localization")."</h5>
            <select name='pagebuilder[modules][$moduleid][selected_gallery]' class='newselect' style='width:300px;'>";

        /* GET ALL GALL'S FOR SELECT */
        if (isset($wp_query)) {$temp = $wp_query;}
        $wp_query = null;
        $wp_query = new WP_Query();
        $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1,
            'suppress_filters' => FALSE
        );

        $compilegal = "";

        $wp_query->query($args);
        while ($wp_query->have_posts()) : $wp_query->the_post();

            if (isset($gt3_pagebuilder['modules'][$moduleid]['selected_gallery']) && $gt3_pagebuilder['modules'][$moduleid]['selected_gallery'] == get_the_ID()) {
                $selectedstate = "selected='selected'";
            } else {
                $selectedstate = "";
            }

            $compilegal .= "<option value='" . get_the_ID() . "' {$selectedstate}>" . get_the_title() . "</option>";

        endwhile;

        $compile .= $compilegal;

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['image_width'])) {
            $gt3_pagebuilder['modules'][$moduleid]['image_width'] = $gt3_pbconfig['gallery_module_default_width'];
        }

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['image_height'])) {
            $gt3_pagebuilder['modules'][$moduleid]['image_height'] = $gt3_pbconfig['gallery_module_default_height'];
        }

        $compile .= "
            </select>
            <div class='clear'></div>
        </div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Images in a row", "theme_localization"), "images_in_a_row", "100px", $gt3_pbconfig['gallery_images_in_a_row']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################ CONTACT INFO MODULE START ################################
###########################################################################################

    /*
     " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Vimeo", "vimeo", "100%", "left") . "
     */


    if ($module_name == "contact_info") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Address", "address", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Phone", "phone", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "E-mail", "email", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Skype", "skype", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Twitter", "twitter", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Flickr", "flickr", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Facebook", "facebook", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "Dribbble", "dribbble", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, "YouTube", "youtube", "100%", "left") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## SITEMAP MODULE START ###################################
###########################################################################################

    if ($module_name == "sitemap") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Show Site Feeds", "theme_localization"), "show_site_feeds", "200px", array('yes' => 'Yes', 'no' => 'No')) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Show Posts", "theme_localization"), "show_posts", "200px", array('yes' => 'Yes', 'no' => 'No')) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
#################################### BLOG MODULE START ####################################
###########################################################################################
    if ($module_name == "blog") {

        if (isset($gt3_pagebuilder['modules'][$moduleid]['posts_per_page']) && strlen($gt3_pagebuilder['modules'][$moduleid]['posts_per_page']) < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['posts_per_page'] = $gt3_pbconfig['blog_default_posts_per_page'];
        }

        $available_categories  = array("all");

        $args = array(
            'type'                     => 'post',
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => 0,
            'exclude'                  => '',
            'include'                  => '',
            'number'                   => '',
            'taxonomy'                 => 'category'
        );
        $categories = get_categories( $args );

        if (is_array($categories)) {
            foreach ($categories as $category) {
                array_push($available_categories, $category->slug);
            }
        }


        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Posts per page", "theme_localization"), "posts_per_page", "100px", "center", $gt3_pbconfig['blog_default_posts_per_page']) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Category", "theme_localization"), "category", "200px", $available_categories) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################ LAYER SLIDER MODULE START ################################
###########################################################################################
    if ($module_name == "layer_slider") {

        global $wpdb;
        $table_name = $wpdb->prefix . "layerslider";

        $wpdb->hide_errors();

        $slides = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM $table_name WHERE flag_hidden = %d AND flag_deleted = %d ORDER BY date_c ASC LIMIT 1000", 0, 0
            )
        );

        $wpdb->show_errors();

        $list_slide_id = array();
        $all_sliders = array();
        if (is_array($slides)) {
            foreach ($slides as $arrayid => $slide) {
                $all_sliders[$slide->id] = $slide->name;
            }
        }

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Select slider", "theme_localization"), "show_slider_id", "400px", $all_sliders) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='example'>".__("Please create a slider using \"LayerSlider WP\". Please make sure it has already been installed in your wordpress.", "theme_localization")."</div>
    </div>
    <div class='hr_double' style='margin-bottom:20px;'></div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */

    }
#MODULE END


###########################################################################################
################################# PORTFOLIO MODULE START ##################################
###########################################################################################
    if ($module_name == "portfolio") {

        if (isset($gt3_pagebuilder['modules'][$moduleid]['portfolio_per_page']) && strlen($gt3_pagebuilder['modules'][$moduleid]['portfolio_per_page']) < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['portfolio_per_page'] = $gt3_pbconfig['portfolio_default_posts_per_page'];
        }

        $available_categories  = array("all");

        $args = array(
            'type'                     => 'port',
            'orderby'                  => 'name',
            'order'                    => 'ASC',
            'hide_empty'               => 0,
            'exclude'                  => '',
            'include'                  => '',
            'number'                   => '',
            'taxonomy'                 => 'portcat'
        );
        $categories = get_categories( $args );

        if (is_array($categories)) {
            foreach ($categories as $category) {
                array_push($available_categories, $category->slug);
            }
        }

        #echo "<pre>"; print_r($categories); echo "</pre>";

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Items per page (Put the number of the items to load on the page)", "theme_localization"), "items_on_start", "100px", "center", $gt3_pbconfig['portfolio_default_items_on_start']) . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Load per click", "theme_localization"), "items_per_click", "100px", "center", $gt3_pbconfig['portfolio_default_items_load_per_click']) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("View type", "theme_localization"), "view_type", "200px", $gt3_pbconfig['all_available_portfolio_types']) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Ajax", "theme_localization"), "ajax", "200px", array("on", "off")) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Filter", "theme_localization"), "filter", "200px", array("on", "off")) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Category", "theme_localization"), "category", "200px", $available_categories) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## PARTNERS MODULE START ##################################
###########################################################################################
    if ($module_name == "partners") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Number", "theme_localization"), "number", "100px", "center", $gt3_pbconfig['partners_default_number']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################### FEATURE MODULE START ##################################
###########################################################################################
    if ($module_name == "feature_posts") {

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['number_of_posts'])) {
            $gt3_pagebuilder['modules'][$moduleid]['number_of_posts'] = $gt3_pbconfig['featured_posts_default_number_of_posts'];
        }

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['posts_per_line'])) {
            $gt3_pagebuilder['modules'][$moduleid]['posts_per_line'] = $gt3_pbconfig['featured_posts_default_posts_per_line'];
        }

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Number of posts", "theme_localization"), "number_of_posts", "100px", "center") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Posts per line", "theme_localization"), "posts_per_line", "100px", $gt3_pbconfig['available_posts_per_line']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Post type", "theme_localization"), "post_type", "200px", $gt3_pbconfig['featured_posts_available_post_types']) . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Sorting type", "theme_localization"), "sorting_type", "200px", $gt3_pbconfig['featured_posts_available_sorting_type']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################# PROMO TEXT MODULE START #################################
###########################################################################################
    if ($module_name == "promo_text") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Main text", "theme_localization"), "main_text", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Additional text", "theme_localization"), "additional_text", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Button text", "theme_localization"), "button_text", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Button link", "theme_localization"), "button_link", "100%", "left") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################### DIVIDER MODULE START ##################################
###########################################################################################
    if ($module_name == "divider") {

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Divider type", "theme_localization"), "divider_color", "200px", $gt3_pbconfig['all_available_dividers']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
#################################### VIDEO MODULE START ###################################
###########################################################################################
    if ($module_name == "video") {

        if (isset($gt3_pagebuilder['modules'][$moduleid]['video_height']) && strlen($gt3_pagebuilder['modules'][$moduleid]['video_height']) < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['video_height'] = $gt3_pbconfig['default_video_height'];
        }

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='example'>Examples:<br>Youtube - http://www.youtube.com/watch?v=YW8p8JO2hQw<br>Vimeo - http://vimeo.com/47989207</div>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Video url", "theme_localization"), "video_url", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Video height", "theme_localization"), "video_height", "100px", "center", $gt3_pbconfig['default_video_height']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
#################################### TEAM MODULE START ####################################
###########################################################################################
    if ($module_name == "team") {

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['number_of_workers']) || $gt3_pagebuilder['modules'][$moduleid]['number_of_workers'] < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['number_of_workers'] = $gt3_pbconfig['team_default_numbers'];
        }

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['posts_per_line']) || $gt3_pagebuilder['modules'][$moduleid]['posts_per_line'] < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['posts_per_line'] = 4;
        }

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Number of workers", "theme_localization"), "number_of_workers", "100px", "center") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Workers per line", "theme_localization"), "posts_per_line", "100px", $gt3_pbconfig['available_workers_per_line']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
############################### TESTIMONIALS MODULE START #################################
###########################################################################################
    if ($module_name == "testimonial") {

        if (!isset($gt3_pagebuilder['modules'][$moduleid]['number_of_testimonials']) || strlen($gt3_pagebuilder['modules'][$moduleid]['number_of_testimonials']) < 1) {
            $gt3_pagebuilder['modules'][$moduleid]['number_of_testimonials'] = $gt3_pbconfig['default_number_of_testimonials'];
        }

        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Number of testimonials", "theme_localization"), "number_of_testimonials", "100px", "center") . "
        " . get_module_settings_part_select($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Sorting type", "theme_localization"), "sorting_type", "200px", $gt3_pbconfig['all_available_testimonial_sorting_type']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## TEXT AREA MODULE START #################################
###########################################################################################
    if ($module_name == "text_area") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont' style='padding-bottom:0;'>
        " . gt3_get_shortcodes_selector("qshortcodes_it_textarea") . "
    </div>
    <div class='hr_double'></div>
    <div class='padding-cont sc_inserted_here'>
        " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Text", "theme_localization"), "text") . "
        <div class='example'>".__("You can use HTML tags and shortcodes that are available in this theme.", "theme_localization")."</div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
##################################### HTML MODULE START ###################################
###########################################################################################
    if ($module_name == "html") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("HTML", "theme_localization"), "html") . "
        <div class='example'>".__("You can use HTML tags and shortcodes that are available in this theme.", "theme_localization")."</div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
###################################### BG START MODULE ####################################
###########################################################################################

    if ($module_name == "bg_start") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Padding-top", "theme_localization"), "padding_top", "200px", $gt3_pbconfig['available_padding_top_for_bg_start']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Properties", "theme_localization"), "properties", "200px", array("stretch" => "Stretch", "" => "Pattern")) . "
        " . get_module_settings_part_upload_file($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Background image", "theme_localization"), "bg_image", "100%") . "
        <div class='enter_option_row'>
            <h5>".__("Background color", "theme_localization")."</h5>
            " . gt3_colorpicker_block("pagebuilder[modules][$moduleid][bg_color]", (isset($gt3_pagebuilder['modules'][$moduleid]['bg_color']) ? $gt3_pagebuilder['modules'][$moduleid]['bg_color'] : '')) . "
            <div class='clear'></div>
        </div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END



###########################################################################################
####################################### BG END MODULE #####################################
###########################################################################################
    if ($module_name == "bg_end") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} ".__("settings", "theme_localization")."</h2>
<div class='pop_scrollable_area'>
    <div class='padding-cont'>
        <div class='enter_option_row'>
            ".__("No available settings.", "theme_localization")."
        </div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## GOOGLE MAP MODULE START ################################
###########################################################################################
    if ($module_name == "google_map") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Google map code", "theme_localization"), "map") . "
        <div class='example'>
            ".__("Example:", "theme_localization")."<br>
            &lt;iframe width='100%' height='395' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.ca/maps?f=q&source=s_q&hl=en&geocode=&q=New+York&sll=49.891235,-97.15369&sspn=47.259509,86.923828&ie=UTF8&hq=&hnear=New+York,+United+States&ll=40.714867,-74.005537&spn=0.019517,0.018797&z=14&iwloc=near&output=embed'&gt;&lt;/iframe&gt;
        <br><br>
            ".__("Code from", "theme_localization")." <a href='https://maps.google.com/' target='_blank'>Google maps</a>
        </div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Full width", "theme_localization"), "fullwidth_map", "200px", array("no" => __("No", "theme_localization"), "yes" => __("Yes", "theme_localization"))) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
#################################### CONTENT MODULE START #################################
###########################################################################################
    if ($module_name == "content") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='enter_option_row'>
            ".__("This module will display the entire content of the standard wordpress editor. Please note that you can use this module only once on the page.", "theme_localization")."
        </div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################# SOCIAL SHARE MODULE START ###############################
###########################################################################################
    if ($module_name == "social_share") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='enter_option_row'>
            ".__("This module displays the social sharing buttons.", "theme_localization")."
        </div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
###################################### TITLE MODULE START #################################
###########################################################################################
    if ($module_name == "title") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################## ICONBOXES MODULE START #################################
###########################################################################################
    if ($module_name == "iconboxes") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Icon", "theme_localization"), "icon_type", "100px", "center") . "
        <div class='example' style='padding-bottom:15px !important;'>".__("Please type the letter/symbol which belongs to the specific icon in the field above.<br>All available icons you can find", "theme_localization")." <a target='_blank' href='{$gt3_pbconfig['iconboxes_img_preview_url']}'>here</a>.</div>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Iconbox heading", "theme_localization"), "iconbox_heading", "100%", "left") . "
        " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Iconbox text", "theme_localization"), "iconbox_text") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Link", "theme_localization"), "link", "100%", "left") . "
       " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Target", "theme_localization"), "target", "200px", array("_blank" => "Blank", "_self" => "Self")) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
#################################### META MODULE START ####################################
###########################################################################################
    if ($module_name == "postinfo") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Project Option Title #1", "theme_localization"), "project_option_title_1", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Project Option Description #1", "theme_localization"), "project_option_description_1", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Project Option Title #2", "theme_localization"), "project_option_title_2", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Project Option Description #2", "theme_localization"), "project_option_description_2", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Time spent", "theme_localization"), "project_time_spent", "100%", "left") . "
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Project date", "theme_localization"), "project_date", "100%", "left") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Show categories", "theme_localization"), "show_categories", "200px", array('yes'=>'Yes', 'no'=>'No')) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Show share buttons", "theme_localization"), "show_share_buttons", "200px", array('yes'=>'Yes', 'no'=>'No')) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("View type", "theme_localization"), "view_type", "200px", $gt3_pbconfig['available_postinfo_module_view_types']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################ MESSAGEBOXES MODULE START ################################
###########################################################################################
    if ($module_name == "messageboxes") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        " . get_module_settings_part_input($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Message box heading", "theme_localization"), "messagebox_heading", "100%", "left") . "
        " . get_module_settings_part_textarea($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Message box text", "theme_localization"), "messagebox_text") . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Box type", "theme_localization"), "box_type", "200px", $gt3_pbconfig['messagebox_available_types']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################ CUSTOM LIST MODULE START #################################
###########################################################################################
    if ($module_name == "custom_list") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>

        " . get_module_settings_part_add_list_ability($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Add new list item", "theme_localization")) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("List type", "theme_localization"), "list_type", "200px", $gt3_pbconfig['all_available_custom_list_types']) . "
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
        <div class='clear'></div>
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


###########################################################################################
################################ PRICE TABLE MODULE START #################################
###########################################################################################
    if ($module_name == "price_table") {
        /* START POPUP HTML */
        $compile .= "
<h2>{$module_caption} settings</h2>
<div class='pop_scrollable_area'>
    " . get_module_settings_part_heading($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig) . "
    <div class='padding-cont'>
        <div class='rows_must_be_here'>
            <input type='hidden' value='{$moduleid}' class='moduleid' name='moduleid'>
            <div class='heading line_option visual_style1 small_type hovered clickable add_new_price_block'>
                <div class='option_title text-shadow1'>".__("Add price item", "theme_localization")."</div>
                <div class='some-element cross'></div>
                <div class='pre_toggler'></div>
            </div>
            <div class='clear'></div>
            <ul class='sections row-list'>";
        if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'])) {
            foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'] as $itemid => $item) {
                $compile .= "

                <li class='section'>
                    <div class='heading line_option visual_style1 big_type'>
                        <div class='option_title text-shadow1'>&nbsp;</div>
                        <div class='some-element clickable edit hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element movable move hovered'></div>
                        <div class='pre_toggler'></div>
                        <div class='some-element clickable delete hovered'></div>
                        <div class='pre_toggler'></div>
                    </div>
                    <div class='clear'></div>
                    <div class='hide_area'>
                        <div class='some-padding'>
                            <div class='caption'>".__("Name", "theme_localization")."</div>
                            <input class='expanded_text type3' name='pagebuilder[modules][$moduleid][module_items][$itemid][block_name]' value='{$item['block_name']}'>
                            <div class='caption'>".__("Price", "theme_localization")."</div>
                            <input class='expanded_text type3' name='pagebuilder[modules][$moduleid][module_items][$itemid][block_price]' value='{$item['block_price']}'>
                            <div class='caption'>".__("Period", "theme_localization")."</div>
                            <input class='expanded_text type3' name='pagebuilder[modules][$moduleid][module_items][$itemid][block_period]' value='{$item['block_period']}'>
                            <div class='rows_must_be_here dark_lined'>
                                <input type='hidden' name='moduleid' class='moduleid' value='$moduleid'>
                                <input type='hidden' name='sectionid' class='sectionid' value='$itemid'>
                                <div class='heading line_option visual_style1 small_type hovered clickable add_new_price_feature'>
                                    <div class='option_title text-shadow1'>".__("Add feature", "theme_localization")."</div>
                                    <div class='some-element cross'></div>
                                    <div class='pre_toggler'></div>
                                </div>
                                <ul class='feature-list'>";
                if (isset($gt3_pagebuilder['modules'][$moduleid]['module_items'][$itemid]['price_features']) && is_array($gt3_pagebuilder['modules'][$moduleid]['module_items'][$itemid]['price_features'])) {
                    foreach ($gt3_pagebuilder['modules'][$moduleid]['module_items'][$itemid]['price_features'] as $featureid => $featuretext) {
                        $compile .= "
                        <li class='price_feature'>
                            <div class='heading line_option visual_style1 big_type'>
                                <div class='option_title text-shadow1'>$featuretext</div>
                                <div class='some-element2 clickable edit2 hovered'></div>
                                <div class='pre_toggler'></div>
                                <div class='some-element2 movable move hovered'></div>
                                <div class='pre_toggler'></div>
                                <div class='some-element2 clickable delete hovered'></div>
                                <div class='pre_toggler'></div>
                            </div>
                            <div class='clear'></div>
                            <div class='hide_area2'>
                                <div class='some-padding'>
                                <textarea class='expanded_text1 type2 mt' name='pagebuilder[modules][$moduleid][module_items][$itemid][price_features][$featureid]'>$featuretext</textarea>
                                </div>
                            </div>
                        </li>
                    ";
                    }
                }
                $compile .= "                   </ul>
                            </div>
                            <div class='caption'>\"".__("Get it now", "theme_localization")."\" ".__("Link", "theme_localization")."</div>
                            <input class='expanded_text type3' name='pagebuilder[modules][$moduleid][module_items][$itemid][block_link]' value='{$item['block_link']}'>
                            <div class='caption'>\"".__("Get it now", "theme_localization")."\" ".__("caption", "theme_localization")."</div>
                            <input class='expanded_text type3' name='pagebuilder[modules][$moduleid][module_items][$itemid][get_it_now_caption]' value='{$item['get_it_now_caption']}'>
                            <div class='caption' style='float:left; margin-top: 13px; margin-right: 15px;'>Most popular</div>

                            " . gt3_toggle_radio_yes_no("pagebuilder[modules][$moduleid][module_items][$itemid][most_popular]", $item['most_popular'], "no", "most_popular") . "

                            <div class='clear'></div>
                        </div>
                    </div>
                </li>

            ";
            }
        }
        $compile .= "
            </ul>
            <div class='clear'></div>
        </div>
        <div class='clear'></div>
        " . get_module_settings_part_select_with_caption($gt3_pagebuilder, $moduleid, $pb_module_size_now, $gt3_pbconfig, __("Margin-bottom", "theme_localization"), "padding_bottom", "200px", $gt3_pbconfig['available_padding_after_module']) . "
    </div>
    " . get_module_settings_part_done_btn() . "
</div>
        ";
        /* END POPUP HTML */
    }
#MODULE END


    $compile .= $all_items_after_html;
    return $compile;
}

?>