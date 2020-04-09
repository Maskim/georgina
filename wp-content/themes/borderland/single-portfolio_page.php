<?php

get_header();

$portfolio_template = 'small-images';
if ( get_post_meta( get_the_ID(), "eltd_choose-portfolio-single-view", true ) != "" ) {
	$portfolio_template = get_post_meta( get_the_ID(), "eltd_choose-portfolio-single-view", true );
} elseif ( borderland_elated_options()->getOptionValue( 'portfolio_style' ) !== '' ) {
	//get default portfolio template if set in theme's options
	$portfolio_template = borderland_elated_options()->getOptionValue( 'portfolio_style' );
}

if ( have_posts() ) : while ( have_posts() ) : the_post();
	//is current portfolio template full width?
	if ( $portfolio_template !== 'full-width-custom' ) {
		//load general portfolio structure which will load proper template
		get_template_part( 'templates/portfolio/portfolio-structure' );
	} else {
		//load custom full width template that doesn't have anything in common with other
		get_template_part( 'templates/portfolio/portfolio', $portfolio_template );
	}
endwhile; endif; ?>
<?php get_footer(); ?>	