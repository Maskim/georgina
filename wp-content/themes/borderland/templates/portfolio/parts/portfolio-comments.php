<?php

//get portfolio comment value
$portfolio_hide_comments = "";
if(get_post_meta(get_the_ID(), "eltd_portfolio-hide-comments", true) == "yes"){
	$portfolio_hide_comments = "yes";
} elseif (borderland_elated_options()->getOptionValue( 'portfolio_hide_comments' )){
	$portfolio_hide_comments = borderland_elated_options()->getOptionValue( 'portfolio_hide_comments' );
}

if($portfolio_hide_comments != "yes"){
	comments_template('', true); 
}