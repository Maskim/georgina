<?php
get_header();

$borderland_sidebar        = borderland_elated_get_sidebar_layout( false );
$blog_single_show_comments = borderland_elated_options()->getOptionValue( 'blog_single_show_comments' ) === 'yes';

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container" <?php borderland_elated_inline_page_background_style(); ?>>
	<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
	<div class="overlapping_content">
		<div class="overlapping_content_inner">
			<?php } ?>
			<div class="container_inner default_template_holder" <?php borderland_elated_inline_page_padding_style(); ?>>
				<?php if ( ( $borderland_sidebar == "default" ) || ( $borderland_sidebar == "" ) ) : ?>
				<div class="blog_holder blog_single blog_standard_type">
					<?php get_template_part( 'templates/blog/blog_single', 'loop' ); ?>
					<?php if ( $blog_single_show_comments ) {
						comments_template( '', true );
					} else {
						echo "<br/><br/>";
					} ?>
				<?php elseif ( $borderland_sidebar == "1" || $borderland_sidebar == "2" ): ?>
					<?php if ( $borderland_sidebar == "1" ) : ?>
						<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php elseif ( $borderland_sidebar == "2" ) : ?>
						<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<div class="blog_holder blog_single blog_standard_type">
										<?php get_template_part( 'templates/blog/blog_single', 'loop' ); ?>
									</div>
									<?php if ( $blog_single_show_comments ) {
										comments_template( '', true );
									} else {
										echo "<br/><br/>";
									} ?>
								</div>
							</div>
							<div class="column2">
								<?php get_sidebar(); ?>
							</div>
						</div>
				<?php elseif ( $borderland_sidebar == "3" || $borderland_sidebar == "4" ): ?>
					<?php if ( $borderland_sidebar == "3" ) : ?>
						<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
					<?php elseif ( $borderland_sidebar == "4" ) : ?>
						<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<div class="blog_holder blog_single blog_standard_type">
										<?php get_template_part( 'templates/blog/blog_single', 'loop' ); ?>
									</div>
									<?php if ( $blog_single_show_comments ) {
										comments_template( '', true );
									} else {
										echo "<br/><br/>";
									} ?>
								</div>
							</div>
						</div>
				<?php endif; ?>
				</div>
			</div>
			<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		</div>
	</div>
<?php } ?>
</div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>