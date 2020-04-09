<?php
/*
Template Name: Blog: Vertical Loop
*/

get_header();

$borderland_sidebar = borderland_elated_get_sidebar_layout();

borderland_elated_set_blog_word_count( 'blog_vertical_loop_type_number_of_chars' );
?>
	<div class="full_width blog_vertical_loop" <?php borderland_elated_inline_page_background_style(); ?>>
		<div class="full_width_inner" <?php borderland_elated_inline_page_padding_style(); ?>>
			<div class="blog_holder blog_vertical_loop_type">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'templates/blog/blog_vertical', 'loop' ); ?>
				<?php endwhile; ?>
				<?php else: //If no posts are present ?>
					<div class="entry">
						<p><?php esc_html_e( 'No posts were found.', 'borderland' ); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>