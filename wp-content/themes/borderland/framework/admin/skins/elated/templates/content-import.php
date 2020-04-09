<div class="eltdf-tabs-content">
    <div class="tab-content">
        <div class="tab-pane fade in active" id="import">
            <div class="eltdf-tab-content">
                <h2 class="eltdf-page-title"><?php esc_html_e( 'Import', 'borderland' ); ?></h2>
                <form method="post" class="eltd_ajax_form eltdf-import-page-holder">
                    <div class="eltdf-page-form">
                        <div class="eltdf-page-form-section-holder">
                            <h3 class="eltdf-page-section-title"><?php esc_html_e( 'Import Demo Content', 'borderland' ); ?></h3>
                            <div class="eltdf-page-form-section">
                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import', 'borderland' ); ?></h4>

                                    <p><?php esc_html_e( 'Choose demo content you want to import', 'borderland' ); ?></p>
                                </div>
                                <!-- close div.eltdf-field-desc -->

                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_example" id="import_example" class="form-control eltdf-form-element dependence">
                                                    <option value="borderland1"><?php esc_html_e( '1 Sierra', 'borderland' ); ?></option>
                                                    <option value="borderland2"><?php esc_html_e( '2 Steppe', 'borderland' ); ?></option>
                                                    <option value="borderland3"><?php esc_html_e( '3 Range', 'borderland' ); ?></option>
                                                    <option value="borderland4"><?php esc_html_e( '4 Bronco', 'borderland' ); ?></option>
                                                    <option value="borderland5"><?php esc_html_e( '5 Pasture', 'borderland' ); ?></option>
                                                    <option value="borderland6"><?php esc_html_e( '6 Mesa', 'borderland' ); ?></option>
                                                    <option value="borderland7"><?php esc_html_e( '7 Maverick', 'borderland' ); ?></option>
                                                    <option value="borderland8"><?php esc_html_e( '8 Riata', 'borderland' ); ?></option>
                                                    <option value="borderland9"><?php esc_html_e( '9 Rockies', 'borderland' ); ?></option>
                                                    <option value="borderland10"><?php esc_html_e( '10 Plateau', 'borderland' ); ?></option>
                                                    <option value="borderland11"><?php esc_html_e( '11 Canyon', 'borderland' ); ?></option>
                                                    <option value="borderland12"><?php esc_html_e( '12 Outback', 'borderland' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->

                            </div>

                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import Type', 'borderland' ); ?></h4>

                                    <p><?php esc_html_e( 'Enabling this option will switch to a Side Position (default is Top Position)', 'borderland' ); ?></p>
                                </div>
                                <!-- close div.eltdf-field-desc -->



                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_option" id="import_option" class="form-control eltdf-form-element">
                                                    <option value=""><?php esc_html_e( 'Please Select', 'borderland' ); ?></option>
                                                    <option value="complete_content"><?php esc_html_e( 'All', 'borderland' ); ?></option>
                                                    <option value="content"><?php esc_html_e( 'Content', 'borderland' ); ?></option>
                                                    <option value="widgets"><?php esc_html_e( 'Widgets', 'borderland' ); ?></option>
                                                    <option value="options"><?php esc_html_e( 'Options', 'borderland' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->

                            </div>
                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import attachments', 'borderland' ); ?></h4>

                                    <p>Do you want to import media files?</p>
                                </div>
                                <!-- close div.eltdf-field-desc -->
                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="field switch">
                                                    <label class="cb-enable dependence"><span><?php esc_html_e( 'Yes', 'borderland' ); ?></span></label>
                                                    <label class="cb-disable selected dependence"><span><?php esc_html_e( 'No', 'borderland' ); ?></span></label>
                                                    <input type="checkbox" id="import_attachments" class="checkbox" name="import_attachments" value="1">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->
                            </div>
                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <input type="submit" class="btn btn-primary btn-sm " value="<?php esc_attr_e( 'Import', 'borderland' ); ?>" name="import" id="import_demo_data" />
                                </div>
                                <!-- close div.eltdf-field-desc -->
                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="import_load"><span><?php esc_html_e('The import process may take some time. Please be patient.', 'borderland') ?> </span><br />
                                                    <div class="eltd-progress-bar-wrapper html5-progress-bar">
                                                        <div class="progress-bar-wrapper">
                                                            <progress id="progressbar" value="0" max="100"></progress>
                                                        </div>
                                                        <div class="progress-value">0%</div>
                                                        <div class="progress-bar-message">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->
                            </div>
                            <div class="eltdf-page-form-section eltdf-import-button-wrapper">

                                <div class="alert alert-warning">
                                    <strong><?php esc_html_e('Important notes:', 'borderland') ?></strong>
                                    <ul>
                                        <li><?php esc_html_e('Please note that import process will take time needed to download all attachments from demo web site.', 'borderland'); ?></li>
                                        <li> <?php esc_html_e('If you plan to use shop, please install WooCommerce before you run import.', 'borderland')?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div><!-- close eltdf-tab-content -->
        </div>
    </div>
</div> <!-- close div.eltdf-tabs-content -->

<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $(document).on('click', '#import_demo_data', function(e) {
                e.preventDefault();
                if (confirm('Are you sure, you want to import Demo Data now?')) {
                    $('.import_load').css('display','block');
                    var progressbar = $('#progressbar');
                    var import_opt = $( "#import_option" ).val();
                    var import_expl = $( "#import_example" ).val();
                    var p = 0;
                    if(import_opt === 'content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'borderland_content_0'+i+'.xml';
                            else str = 'borderland_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'borderland_elated_action_data_import',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'borderland_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'borderland_elated_action_data_import',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                p+= 10;
                                                $('.progress-value').html((p) + '%');
                                                progressbar.val(p);
                                                $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'borderland' ); ?></strong></div>');
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    } else if(import_opt === 'widgets') {
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'borderland_elated_action_widgets_import',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'borderland' ); ?></strong></div>');
                    } else if(import_opt === 'options'){
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'borderland_elated_action_options_import',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'borderland' ); ?></strong></div>');
                    }else if(import_opt === 'complete_content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'borderland_content_0'+i+'.xml';
                            else str = 'borderland_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'borderland_elated_action_data_import',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'borderland_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'borderland_elated_action_data_import',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                jQuery.ajax({
                                                    type: 'POST',
                                                    url: ajaxurl,
                                                    data: {
                                                        action: 'borderland_elated_action_other_import',
                                                        example: import_expl
                                                    },
                                                    success: function(data, textStatus, XMLHttpRequest){
                                                        $('.progress-value').html((100) + '%');
                                                        progressbar.val(100);
                                                        $('.progress-bar-message').html('<div class="alert alert-success"><?php esc_html_e( 'Import is completed.', 'borderland' ); ?></div>');
                                                    },
                                                    error: function(MLHttpRequest, textStatus, errorThrown){
                                                    }
                                                });
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    }
                }
                return false;
            });
        });
    })(jQuery);

</script>