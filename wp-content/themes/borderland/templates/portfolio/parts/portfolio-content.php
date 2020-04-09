<?php
$portfolio_title_tag            = 'h3';
$portfolio_title_style          = '';

//set title tag
if (borderland_elated_options()->getOptionValue( 'portfolio_title_tag' )) {
$portfolio_title_tag = borderland_elated_options()->getOptionValue( 'portfolio_title_tag' );
}

//set style for title
if ((borderland_elated_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '')
	|| (borderland_elated_options()->getOptionValue( 'portfolio_title_color' ))){

	if (borderland_elated_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '') {
		$portfolio_title_style .= 'margin-bottom:'.esc_attr(borderland_elated_options()->getOptionValue( 'portfolio_title_margin_bottom' )).'px;';
	}

	if (borderland_elated_options()->getOptionValue( 'portfolio_title_color' )) {
		$portfolio_title_style .= 'color:'.esc_attr(borderland_elated_options()->getOptionValue( 'portfolio_title_color' )).';';
	}

}

?>

<<?php echo esc_attr($portfolio_title_tag);?> class="info_section_title" <?php borderland_elated_inline_style($portfolio_title_style); ?>><?php the_title(); ?></<?php echo esc_attr($portfolio_title_tag);?>>
<div class="info portfolio_single_content">
	<?php the_content(); ?>
</div> <!-- close div.portfolio_content -->