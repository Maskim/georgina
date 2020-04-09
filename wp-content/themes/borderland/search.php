<?php
get_header();

$borderland_sidebar = borderland_elated_get_sidebar_layout();
?>
	<div class="container">
<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	<div class="overlapping_content">
	<div class="overlapping_content_inner">
<?php } ?>
	<div class="container_inner default_template_holder clearfix">
		<?php if ( ( $borderland_sidebar == "default" ) || ( $borderland_sidebar == "" ) ) : ?>
			<div class="blog_holder blog_standard_type">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'templates/blog/blog_search', 'loop' ); ?>
				<?php endwhile; ?>
				<?php else: //If no posts are present ?>
					<div class="entry posts_no_found_holder">
						<h5><?php esc_html_e( 'No posts were found.', 'borderland' ); ?></h5>
					</div>
				<?php endif; ?>
				<?php borderland_elated_get_blog_pagination( borderland_elated_return_global_wp_query() ); ?>
			</div>
		<?php elseif ( $borderland_sidebar == "1" || $borderland_sidebar == "2" ): ?>
			<div class="<?php if ( $borderland_sidebar == "1" ): ?>two_columns_66_33<?php elseif ( $borderland_sidebar == "2" ) : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
				<div class="column1 content_left_from_sidebar">
					<div class="column_inner">
						<div class="blog_holder blog_standard_type">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'templates/blog/blog_search', 'loop' ); ?>
							<?php endwhile; ?>
							<?php else: //If no posts are present ?>
								<div class="entry posts_no_found_holder">
									<h5><?php esc_html_e( 'No posts were found.', 'borderland' ); ?></h5>
								</div>
							<?php endif; ?>
							<?php borderland_elated_get_blog_pagination( borderland_elated_return_global_wp_query() ); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<?php get_sidebar(); ?>
				</div>
			</div>
		<?php elseif ( $borderland_sidebar == "3" || $borderland_sidebar == "4" ): ?>
			<div class="<?php if ( $borderland_sidebar == "3" ): ?>two_columns_33_66<?php elseif ( $borderland_sidebar == "4" ) : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
				<div class="column1">
					<?php get_sidebar(); ?>
				</div>
				<div class="column2 content_right_from_sidebar">
					<div class="column_inner">
						<div class="blog_holder blog_standard_type">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'templates/blog/blog_search', 'loop' ); ?>
							<?php endwhile; ?>
							<?php else: //If no posts are present ?>
								<div class="entry posts_no_found_holder">
									<h5><?php esc_html_e( 'No posts were found.', 'borderland' ); ?></h5>
								</div>
							<?php endif; ?>
							<?php borderland_elated_get_blog_pagination( borderland_elated_return_global_wp_query() ); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	<div class="overlapping_content">
	<div class="overlapping_content_inner">
<?php } ?>
	</div>
<?php get_footer(); ?>