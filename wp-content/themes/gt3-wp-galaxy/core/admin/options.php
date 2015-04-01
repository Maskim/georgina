<?php

$gt3_tabs = new Tabs();

$gt3_tabs->add(new Tab(array(
    'name' => __('General','theme_localization'),
    'desc' => '',
    'icon' => 'general.png',
    'icon_active' => 'general_active.png',
    'icon_hover' => 'general_hover.png'
), array(
    new UploadOption(array(
        'name' => __('Header logo','theme_localization'),
        'id' => 'logo',
        'desc' => 'Default: 101px x 112px',
        'default' => THEMEROOTURL . '/img/logo.png'
    )),
    new UploadOption(array(
        'name' => __('Logo (Retina)','theme_localization'),
        'id' => 'logo_retina',
        'desc' => 'Default: 202px x 224px',
        'default' => THEMEROOTURL . '/img/retina/logo.png'
    )),
    new textOption(array(
        'name' => __('Header logo width','theme_localization'),
        'id' => 'header_logo_standart_width',
        'not_empty' => true,
        'width' => '100px',
        'textalign' => 'center',
        'default' => '101'
    )),
    new textOption(array(
        'name' => __('Header logo height','theme_localization'),
        'id' => 'header_logo_standart_height',
        'not_empty' => true,
        'width' => '100px',
        'textalign' => 'center',
        'default' => '112'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Favicon','theme_localization'),
        'id' => 'favicon',
        'desc' => 'Icon must be 16x16px or 32x32px',
        'default' => THEMEROOTURL . '/img/favicon.ico'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Apple touch icon (57px)','theme_localization'),
        'id' => 'apple_touch_57',
        'desc' => 'Icon must be 57x57px',
        'default' => THEMEROOTURL . '/img/apple_icons_57x57.png'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Apple touch icon (72px)','theme_localization'),
        'id' => 'apple_touch_72',
        'desc' => 'Icon must be 72x72px',
        'default' => THEMEROOTURL . '/img/apple_icons_72x72.png'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Apple touch icon (114px)','theme_localization'),
        'id' => 'apple_touch_114',
        'desc' => 'Icon must be 114x114px',
        'default' => THEMEROOTURL . '/img/apple_icons_114x114.png'
    )),
    new SelectOption(array(
        'name' => __('Header type','theme_localization'),
        'id' => 'header_type',
        'desc' => '',
        'default' => 'head_type1',
        'options' => array(
            'head_type1' => 'Default',
            'head_type2' => 'Type 2',
            'head_type3' => 'Type 3',
            'head_type4' => 'Type 4',
            'head_type5' => 'Type 5'
        )
    )),
    new SelectOption(array(
        'name' => __('Tag Line type','theme_localization'),
        'id' => 'tagline_type',
        'desc' => '',
        'default' => '',
        'options' => array(
            '' => 'None',
            'tag_type1' => 'Type 1',
            'tag_type2' => 'Type 2',
            'tag_type3' => 'Type 3',
            'tag_type4' => 'Type 4'
        )
    )),
    new TextareaOption(array(
        'name' => __('Custom CSS','theme_localization'),
        'id' => 'custom_css',
        'default' => ''
    )),
    new TextareaOption(array(
        'name' => __('Google analytics or any other code<br>(before &lt;/head&gt;)','theme_localization'),
        'id' => 'code_before_head',
        'default' => ''
    )),
    new TextareaOption(array(
        'name' => __('Any code <br>(before &lt;/body&gt;)','theme_localization'),
        'id' => 'code_before_body',
        'default' => ''
    )),
    new SelectOption(array(
        'name' => __('Related Posts','theme_localization'),
        'id' => 'related_posts',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption(array(
        'name' => __('Footer Widget Area','theme_localization'),
        'id' => 'footer_widgets_area',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption(array(
        'name' => __('Responsive','theme_localization'),
        'id' => 'responsive',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption(array(
        'name' => __('Site width','theme_localization'),
        'id' => 'site_width',
        'desc' => '',
        'default' => '1170px',
        'options' => array(
            '1170px' => '1170px',
            '960px' => '960px'
        )
    )),
    new SelectOption(array(
        'name' => __('Portfolio comments','theme_localization'),
        'id' => 'portfolio_comments',
        'desc' => '',
        'default' => 'disabled',
        'options' => array(
            'disabled' => 'Disabled',
            'enabled' => 'Enabled'
        )
    )),
    new SelectOption(array(
        'name' => __('Page comments','theme_localization'),
        'id' => 'page_comments',
        'desc' => '',
        'default' => 'disabled',
        'options' => array(
            'disabled' => 'Disabled',
            'enabled' => 'Enabled'
        )
    )),
    new AjaxButtonOption(array(
        'title' => 'Import Sample Data',
        'id' => 'action_import',
        'name' => 'Import demo content',
        'confirm' => TRUE,
        'data' => array(
            'action' => 'ajax_import_dump'
        )
    ))
)));


$gt3_tabs->add(new Tab(array(
    'name' => __('Sidebars','theme_localization'),
    'desc' => '',
    'icon' => 'layout.png',
    'icon_active' => 'layout_active.png',
    'icon_hover' => 'layout_hover.png'
), array(
    new SelectOption(array(
        'name' => __('Default sidebar layout','theme_localization'),
        'id' => 'default_sidebar_layout',
        'desc' => '',
        'default' => 'no-sidebar',
        'options' => array(
            'left-sidebar' => 'Left sidebar',
            'right-sidebar' => 'Right sidebar',
            'no-sidebar' => 'Without sidebar'
        )
    )),
    new SidebarManager(array(
        'name' => __('Sidebar manager','theme_localization'),
        'id' => 'sidebar_manager',
        'desc' => ''
    ))
)));


$gt3_tabs->add(new Tab(array(
    'name' => __('Fonts','theme_localization'),
    'desc' => '',
    'icon' => 'fonts.png',
    'icon_active' => 'fonts_active.png',
    'icon_hover' => 'fonts_hover.png'
), array(
    new FontSelector(array(
        'name' => __('Main font','theme_localization'),
        'id' => 'additional_font',
        'desc' => '',
        'default' => 'Open Sans',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption(array(
        'name' => __('Main font parameters','theme_localization'),
        'id' => 'google_font_parameters_main_font',
        'not_empty' => true,
        'default' => ':400,600,700,800,400italic,600italic,700italic',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new FontSelector(array(
        'name' => __('Headers','theme_localization'),
        'id' => 'text_headers_font',
        'desc' => '',
        'default' => 'Open Sans',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption(array(
        'name' => __('Headers font parameters','theme_localization'),
        'id' => 'google_font_parameters_headers_font',
        'not_empty' => true,
        'default' => ':400,600,700,800,400italic,600italic,700italic',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new FontSelector(array(
        'name' => __('Content','theme_localization'),
        'id' => 'main_content_font',
        'desc' => '',
        'default' => 'Arial',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption(array(
        'name' => __('Content font parameters','theme_localization'),
        'id' => 'google_font_parameters_main_content_font',
        'not_empty' => true,
        'default' => ':400,600,700,800,400italic,600italic,700italic',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new textOption(array(
        'name' => __('H1 font size','theme_localization'),
        'id' => 'h1_font_size',
        'not_empty' => true,
        'default' => '70px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('H2 font size','theme_localization'),
        'id' => 'h2_font_size',
        'not_empty' => true,
        'default' => '35px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('H3 font size','theme_localization'),
        'id' => 'h3_font_size',
        'not_empty' => true,
        'default' => '30px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('H4 font size','theme_localization'),
        'id' => 'h4_font_size',
        'not_empty' => true,
        'default' => '24px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('H5 font size','theme_localization'),
        'id' => 'h5_font_size',
        'not_empty' => true,
        'default' => '16px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('H6 font size','theme_localization'),
        'id' => 'h6_font_size',
        'not_empty' => true,
        'default' => '14px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('Content font size','theme_localization'),
        'id' => 'main_content_font_size',
        'not_empty' => true,
        'default' => '13px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('Content line height','theme_localization'),
        'id' => 'main_content_line_height',
        'not_empty' => true,
        'default' => '18px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
)));


$gt3_tabs->add(new Tab(array(
    'name' => __('Socials','theme_localization'),
    'icon' => 'social.png',
    'icon_active' => 'social_active.png',
    'icon_hover' => 'social_hover.png'
), array(
    new TextOption(array(
        'name' => __('Facebook','theme_localization'),
        'id' => 'social_facebook',
        'default' => 'http://facebook.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Flickr','theme_localization'),
        'id' => 'social_flickr',
        'default' => 'http://flickr.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Vimeo','theme_localization'),
        'id' => 'social_vimeo',
        'default' => 'http://vimeo.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Pinterest','theme_localization'),
        'id' => 'social_pinterest',
        'default' => 'http://pinterest.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Dribbble','theme_localization'),
        'id' => 'social_dribbble',
        'default' => 'http://dribbble.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('LinkedIn','theme_localization'),
        'id' => 'social_linked_in',
        'default' => 'http://linkedin.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Tumblr','theme_localization'),
        'id' => 'social_tumblr',
        'default' => 'http://tumblr.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('YouTube','theme_localization'),
        'id' => 'social_youtube',
        'default' => 'http://youtube.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Delicious','theme_localization'),
        'id' => 'social_delicious',
        'default' => 'http://delicious.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Google Plus','theme_localization'),
        'id' => 'social_gplus',
        'default' => 'http://google.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Instagram','theme_localization'),
        'id' => 'social_instagram',
        'default' => 'http://instagram.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Twitter','theme_localization'),
        'id' => 'social_twitter',
        'default' => 'http://twitter.com',
        'desc' => __('Please specify http:// to the URL','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Twitter Consumer key','theme_localization'),
        'id' => 'consumer_key',
        'default' => '',
        'desc' => __('For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Twitter Consumer secret','theme_localization'),
        'id' => 'consumer_secret',
        'default' => '',
        'desc' => __('For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Twitter User token','theme_localization'),
        'id' => 'user_token',
        'default' => '',
        'desc' => __('For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Twitter User secret','theme_localization'),
        'id' => 'user_secret',
        'default' => '',
        'desc' => __('For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.','theme_localization')
    )),
)));


$gt3_tabs->add(new Tab(array(
    'name' => __('Contacts','theme_localization'),
    'icon' => 'contacts.png',
    'icon_active' => 'contacts_active.png',
    'icon_hover' => 'contacts_hover.png'
), array(
    new TextOption(array(
        'name' => __('Send mails to','theme_localization'),
        'id' => 'contacts_to',
        'default' => get_option("admin_email")
    )),
    new TextOption(array(
        'name' => __('Phone number','theme_localization'),
        'id' => 'phone',
        'default' => '+1 800 789 50 12'
    )),
)));


$gt3_tabs->add(new Tab(array(
    'name' => __('View Options','theme_localization'),
    'icon' => 'colors.png',
    'icon_active' => 'colors_active.png',
    'icon_hover' => 'colors_hover.png'
), array(
    new ColorOption(array(
        'name' => __('Theme color','theme_localization'),
        'id' => 'theme_color1',
        'desc' => '',
        'not_empty' => 'true',
        'default' => '37878d'
    )),
    new SelectOption(array(
        'name' => __('Default theme layout','theme_localization'),
        'id' => 'default_theme_layout',
        'desc' => '',
        'default' => 'clean',
        'options' => array(
            'clean' => __('Clean','theme_localization'),
            'boxed' => __('Boxed','theme_localization'),
            'fullscreen_bg_image' => __('Fullscreen bg image','theme_localization')
        )
    )),
    new ColorOption(array(
        'name' => __('Default background color','theme_localization'),
        'id' => 'default_bg_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'A8A8A8'
    )),
    new ColorOption(array(
        'name' => __('Header text color','theme_localization'),
        'id' => 'header_text_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => '464d52'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Background image','theme_localization'),
        'id' => 'bg_img',
        'desc' => '',
        'default' => THEMEROOTURL . '/img/bg_user.jpg'
    )),
    new UploadOption(array(
        'type' => 'upload',
        'name' => __('Background pattern','theme_localization'),
        'id' => 'bg_pattern',
        'desc' => '',
        'default' => THEMEROOTURL . '/img/bg_pattern1.png'
    )),
    new SelectOption(array(
        'name' => __('Breadcrumb','theme_localization'),
        'id' => 'show_breadcrumb',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => __('Yes','theme_localization'),
            'off' => __('No','theme_localization')
        )
    )),
)));

/* TRANSLATOR */
$gt3_tabs->add(new Tab(array(
    'name' => __('Translator','theme_localization'),
    'icon' => 'translator.png',
    'icon_active' => 'translator_active.png',
    'icon_hover' => 'translator_hover.png'
), array(
    new SelectOption(array(
        'name' => __('Custom translator status','theme_localization'),
        'id' => 'translator_status',
        'desc' => __('If you want to use .po .mo files, please disable custom translator, otherwise you can use the custom translator below.','theme_localization'),
        'default' => 'enable',
        'options' => array(
            'enable' => __('Enable','theme_localization'),
            'disable' => __('Disable','theme_localization')
        )
    )),
    new textOption(array(
        'name' => __('Copyright','theme_localization'),
        'id' => 'copyright',
        'not_empty' => false,
        'default' => __('&copy; 2020 Business Theme. All Rights Reserved.','theme_localization'),
        'desc' => __('In footer','theme_localization')
    )),
    new textOption(array(
        'name' => __('Call us','theme_localization'),
        'id' => 'call_us',
        'not_empty' => false,
        'default' => __('Call us toll free: ','theme_localization'),
        'desc' => ''
    )),
    new textOption(array(
        'name' => __('Slogan','theme_localization'),
        'id' => 'translator_top_slogan',
        'not_empty' => false,
        'default' => __('Best WP Theme Ever!','theme_localization')
    )),
    new textOption(array(
        'name' => __('Search','theme_localization'),
        'id' => 'translator_search_value',
        'not_empty' => false,
        'default' => __('Search the site...','theme_localization')
    )),
    new textOption(array(
        'name' => __('Reply button','theme_localization'),
        'id' => 'translator_reply_value',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Reply','theme_localization')
    )),
    new textOption(array(
        'name' => __('Post Comment','theme_localization'),
        'id' => 'post_comment',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Post Comment','theme_localization')
    )),
    new textOption(array(
        'name' => __('Awaiting moderation','theme_localization'),
        'id' => 'translator_awaiting_moder_value',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Your comment is awaiting moderation.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Clear','theme_localization'),
        'id' => 'tranlator_clear',
        'not_empty' => false,
        'desc' => __('In all forms','theme_localization'),
        'default' => __('Clear form','theme_localization')
    )),
    new textOption(array(
        'name' => __('Send comment','theme_localization'),
        'id' => 'tranlator_send_message',
        'not_empty' => false,
        'desc' => __('In all forms','theme_localization'),
        'default' => __('Send comment','theme_localization')
    )),
    new textOption(array(
        'name' => __('404 header','theme_localization'),
        'id' => 'translator_header_404',
        'not_empty' => false,
        'desc' => __('Error 404 page header','theme_localization'),
        'default' => __('Not Found!','theme_localization')
    )),
    new TextareaOption(array(
        'name' => __('Oops','theme_localization'),
        'id' => 'translator_oops',
        'not_empty' => false,
        'desc' => __('Error 404 page','theme_localization'),
        'default' => __('Oops!','theme_localization')
    )),
    new TextareaOption(array(
        'name' => __('404 text','theme_localization'),
        'id' => 'translator_text_404',
        'not_empty' => false,
        'desc' => __('Error 404 page text','theme_localization'),
        'default' => __('Apologies, but we were unable to find what you were looking for.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Project URL','theme_localization'),
        'id' => 'project_url',
        'not_empty' => true,
        'desc' => '',
        'default' => __('Project URL','theme_localization')
    )),
    new textOption(array(
        'name' => __('View Project','theme_localization'),
        'id' => 'view_project',
        'not_empty' => true,
        'desc' => '',
        'default' => __('View Project','theme_localization')
    )),
    new textOption(array(
        'name' => __('All items','theme_localization'),
        'id' => 'translator_portfolio_all',
        'not_empty' => false,
        'desc' => __('Portfolio page (filter)','theme_localization'),
        'default' => __('All','theme_localization')
    )),
    new textOption(array(
        'name' => __('Portfolio','theme_localization'),
        'id' => 'translator_portfolio',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Portfolio','theme_localization')
    )),
    new textOption(array(
        'name' => __('Load more button','theme_localization'),
        'id' => 'translator_load_more',
        'not_empty' => false,
        'desc' => __('Portfolio page','theme_localization'),
        'default' => __('Load more works','theme_localization')
    )),
    new textOption(array(
        'name' => __('Feedback form name','theme_localization'),
        'id' => 'translator_feedback_form_name',
        'not_empty' => false,
        'desc' => __('Contact form','theme_localization'),
        'default' => __('Name *','theme_localization')
    )),
    new textOption(array(
        'name' => __('Feedback form email','theme_localization'),
        'id' => 'translator_feedback_form_email',
        'not_empty' => false,
        'desc' => __('Contact form','theme_localization'),
        'default' => __('Email *','theme_localization')
    )),
    new textOption(array(
        'name' => __('Feedback form subject','theme_localization'),
        'id' => 'translator_feedback_form_subject',
        'not_empty' => false,
        'desc' => __('Contact form','theme_localization'),
        'default' => __('Subject','theme_localization')
    )),
    new textOption(array(
        'name' => __('Feedback form message','theme_localization'),
        'id' => 'translator_feedback_form_message',
        'not_empty' => false,
        'desc' => __('Contact form','theme_localization'),
        'default' => __('Message *','theme_localization')
    )),
    new TextOption(array(
        'name' => __('Message subject','theme_localization'),
        'id' => 'contacts_subject',
        'default' => __('[Website] Contact Form','theme_localization')
    )),
    new TextareaOption(array(
        'name' => __('Thank you message','theme_localization'),
        'id' => 'contacts_thanx',
        'default' => __('Thank you! Your message has been sent.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Please fill the required field','theme_localization'),
        'id' => 'fill_the_required_field',
        'not_empty' => false,
        'desc' => __('Contact page','theme_localization'),
        'default' => __('Please fill the required field.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Password protected','theme_localization'),
        'id' => 'password_protected',
        'not_empty' => false,
        'desc' => '',
        'default' => __('This post is password protected. Enter the password to view comments.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Leave a Comment!','theme_localization'),
        'id' => 'leave_a_comment',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Leave a Comment!','theme_localization')
    )),
    new textOption(array(
        'name' => __('Logged in','theme_localization'),
        'id' => 'you_must_logged_in',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('You must be logged in to post a comment.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Logged in as','theme_localization'),
        'id' => 'logged_in_as',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Logged in as','theme_localization')
    )),
    new textOption(array(
        'name' => __('Log out','theme_localization'),
        'id' => 'log_out',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Log out?','theme_localization')
    )),
    new textOption(array(
        'name' => __('Comment form is closed','theme_localization'),
        'id' => 'comment_form_is_closed',
        'not_empty' => false,
        'desc' => __('Comments','theme_localization'),
        'default' => __('Sorry, the comment form is closed at this time.','theme_localization')
    )),
    new textOption(array(
        'name' => __('Comments','theme_localization'),
        'id' => 'comments_number',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Comments','theme_localization')
    )),
    new textOption(array(
        'name' => __('Posted by','theme_localization'),
        'id' => 'posted_by',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Posted by','theme_localization')
    )),
    new textOption(array(
        'name' => __('Read more','theme_localization'),
        'id' => 'read_more_link',
        'not_empty' => false,
        'desc' => __('All pages','theme_localization'),
        'default' => __('Read more!','theme_localization')
    )),
    new textOption(array(
        'name' => __('Tags','theme_localization'),
        'id' => 'tags_caption',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Tags: ','theme_localization')
    )),
    new textOption(array(
        'name' => __('Name','theme_localization'),
        'id' => 'comment_form_name',
        'not_empty' => false,
        'desc' => __('Comment form','theme_localization'),
        'default' => __('Name *','theme_localization')
    )),
    new textOption(array(
        'name' => __('Email','theme_localization'),
        'id' => 'comment_form_email',
        'not_empty' => false,
        'desc' => __('Comment form','theme_localization'),
        'default' => __('Email *','theme_localization')
    )),
    new textOption(array(
        'name' => __('URL','theme_localization'),
        'id' => 'comment_form_url',
        'not_empty' => false,
        'desc' => __('Comment form','theme_localization'),
        'default' => __('URL','theme_localization')
    )),
    new textOption(array(
        'name' => __('Message','theme_localization'),
        'id' => 'comment_form_message',
        'not_empty' => false,
        'desc' => __('Comment form','theme_localization'),
        'default' => __('Message...','theme_localization')
    )),
    new textOption(array(
        'name' => __('Back button','theme_localization'),
        'id' => 'back_button',
        'not_empty' => false,
        'desc' => __('Portfolio page','theme_localization'),
        'default' => __('Back','theme_localization')
    )),
    new textOption(array(
        'name' => __('Pages','theme_localization'),
        'id' => 'translate_pages',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Pages','theme_localization')
    )),
    new textOption(array(
        'name' => __('Site Feeds','theme_localization'),
        'id' => 'translator_site_feeds',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Site Feeds','theme_localization')
    )),
    new textOption(array(
        'name' => __('Main RSS Feed','theme_localization'),
        'id' => 'translator_main_rss_feed',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Main RSS Feed','theme_localization')
    )),
    new textOption(array(
        'name' => __('Comments RSS Feed','theme_localization'),
        'id' => 'translator_comment_rss_feed',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Comments RSS Feed','theme_localization')
    )),
    new textOption(array(
        'name' => __('Pages','theme_localization'),
        'id' => 'translator_pages',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Pages','theme_localization')
    )),
    new textOption(array(
        'name' => __('Posts','theme_localization'),
        'id' => 'translator_posts',
        'not_empty' => false,
        'desc' => '',
        'default' => __('Posts','theme_localization')
    )),
    new textOption(array(
        'name' => __('Time spent','theme_localization'),
        'id' => 'translator_time_spent',
        'not_empty' => false,
        'desc' => '',
        'default' => __('time spent','theme_localization')
    )),
    new textOption(array(
        'name' => __('Skills Needed','theme_localization'),
        'id' => 'translator_skills_needed',
        'not_empty' => false,
        'desc' => '',
        'default' => __('skills needed','theme_localization')
    )),
    new textOption(array(
        'name' => __('Related Projects','theme_localization'),
        'id' => 'translate_related_projects',
        'not_empty' => true,
        'desc' => '',
        'default' => __('Related Projects','theme_localization')
    )),
    new textOption(array(
        'name' => __('Related Posts','theme_localization'),
        'id' => 'translate_related_posts',
        'not_empty' => true,
        'desc' => '',
        'default' => __('Related Posts','theme_localization')
    )),
    new textOption(array(
        'name' => __('Home','theme_localization'),
        'id' => 'translate_home',
        'not_empty' => true,
        'desc' => '',
        'default' => __('Home','theme_localization')
    )),
)));

?>