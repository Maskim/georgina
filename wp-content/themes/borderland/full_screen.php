<?php
/*
Template Name: Full Screen Sections
*/

get_header();
?>
<div class="full_screen_preloader">
	<?php get_template_part( 'includes/preloader/preloader-template' ); ?>
</div>
<div class="full_screen_holder" <?php borderland_elated_inline_page_background_style(); ?>>
	<div class="full_screen_inner" <?php borderland_elated_inline_page_padding_style(); ?>>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="full_screen_navigation_holder">
		<div class="full_screen_navigation_inner">
			<a id="up_fs_button" href="#"><span class='arrow_carrot-up'></span></a>
			<a id="down_fs_button" href="#"><span class='arrow_carrot-down'></span></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>