<?php
/*
Template Name: Blog: Standard
*/

get_header();

$borderland_sidebar = borderland_elated_get_sidebar_layout();

borderland_elated_set_blog_word_count( 'blog_standard_type_number_of_chars' );
?>
	<div class="container" <?php borderland_elated_inline_page_background_style(); ?>>
		<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
		<div class="overlapping_content">
			<div class="overlapping_content_inner">
				<?php } ?>
				<div class="container_inner default_template_holder clearfix" <?php borderland_elated_inline_page_padding_style(); ?>>
					<?php if ( $borderland_sidebar == "default" || $borderland_sidebar == "" ) : ?>
						<?php
						echo borderland_elated_get_blog_content_part();
						get_template_part( 'templates/blog/blog', 'structure' );
						?>
					<?php elseif ( $borderland_sidebar == "1" || $borderland_sidebar == "2" ): ?>
						<?php if ( borderland_elated_options()->getOptionValue( 'blog_standard_type_content_position' ) != "content_above_blog_list" ) {
							echo borderland_elated_get_blog_content_part();
						} ?>
						<div class="<?php if ( $borderland_sidebar == "1" ): ?>two_columns_66_33<?php elseif ( $borderland_sidebar == "2" ) : ?>two_columns_75_25<?php endif; ?> clearfix grid2 background_color_sidebar">
							<div class="column1 content_left_from_sidebar">
								<div class="column_inner">
									<?php
									if ( borderland_elated_options()->getOptionValue( 'blog_standard_type_content_position' ) == "content_above_blog_list" ) {
										echo borderland_elated_get_blog_content_part();
									}
									get_template_part( 'templates/blog/blog', 'structure' );
									?>
								</div>
							</div>
							<div class="column2">
								<?php get_sidebar(); ?>
							</div>
						</div>
					<?php elseif ( $borderland_sidebar == "3" || $borderland_sidebar == "4" ): ?>
						<?php if ( borderland_elated_options()->getOptionValue( 'blog_standard_type_content_position' ) != "content_above_blog_list" ) {
							echo borderland_elated_get_blog_content_part();
						} ?>
						<div class="<?php if ( $borderland_sidebar == "3" ): ?>two_columns_33_66<?php elseif ( $borderland_sidebar == "4" ) : ?>two_columns_25_75<?php endif; ?> grid2 clearfix background_color_sidebar">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
								<div class="column_inner">
									<?php
									if ( borderland_elated_options()->getOptionValue( 'blog_standard_type_content_position' ) == "content_above_blog_list" ) {
										echo borderland_elated_get_blog_content_part();
									}
									get_template_part( 'templates/blog/blog', 'structure' );
									?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php get_footer(); ?>