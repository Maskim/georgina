<?php
//get portfolio date value
$portfolio_hide_date = "";
if(borderland_elated_options()->getOptionValue( 'portfolio_hide_date' )){
	$portfolio_hide_date = borderland_elated_options()->getOptionValue( 'portfolio_hide_date' );
}

if($portfolio_hide_date != "yes"){

    $portfolio_info_tag             = 'h6';
    $portfolio_info_style           = '';

    //set info tag
    if (borderland_elated_options()->getOptionValue( 'portfolio_info_tag' )) {
    	$portfolio_info_tag = borderland_elated_options()->getOptionValue( 'portfolio_info_tag' );
    }

    //set style for info
    if ((borderland_elated_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '')
    || (borderland_elated_options()->getOptionValue( 'portfolio_info_color' ))) {

		if (borderland_elated_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '') {
			$portfolio_info_style .= 'margin-bottom:' . esc_attr(borderland_elated_options()->getOptionValue( 'portfolio_info_margin_bottom' )) . 'px;';
		}

		if (borderland_elated_options()->getOptionValue( 'portfolio_info_color' )) {
			$portfolio_info_style .= 'color:'.esc_attr(borderland_elated_options()->getOptionValue( 'portfolio_info_color' )).';';
		}

    }

   ?>


	<div class="info portfolio_single_custom_date">
		<<?php echo esc_attr($portfolio_info_tag); ?> class="info_section_title" <?php borderland_elated_inline_style($portfolio_info_style); ?>><?php esc_html_e('Date','borderland'); ?></<?php echo esc_attr($portfolio_info_tag); ?>>
        <p><?php the_time(get_option('date_format')); ?></p>
	</div>
<?php } ?>