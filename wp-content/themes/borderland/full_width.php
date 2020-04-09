<?php
/*
Template Name: Full Width
*/

get_header();

$borderland_sidebar   = borderland_elated_get_sidebar_layout( false );
$enable_page_comments = get_post_meta( borderland_elated_get_page_id(), "eltd_enable-page-comments", true ) == 'yes';
?>
<div class="full_width" <?php borderland_elated_inline_page_background_style(); ?>>
	<div class="full_width_inner" <?php borderland_elated_inline_page_padding_style(); ?>>
		<?php if ( ( $borderland_sidebar == "default" ) || ( $borderland_sidebar == "" ) ) : ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
		
				borderland_elated_wp_link_pages();
				
				if ( $enable_page_comments ) { ?>
					<div class="container">
						<div class="container_inner">
							<?php comments_template( '', true ); ?>
						</div>
					</div>
					<?php
				}
			endwhile; endif;
		elseif ( $borderland_sidebar == "1" || $borderland_sidebar == "2" ): ?>
			<?php if ( $borderland_sidebar == "1" ) : ?>
				<div class="two_columns_66_33 clearfix grid2">
					<div class="column1 content_left_from_sidebar">
			<?php elseif ( $borderland_sidebar == "2" ) : ?>
				<div class="two_columns_75_25 clearfix grid2">
					<div class="column1 content_left_from_sidebar">
			<?php endif; ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="column_inner">
							<?php
							the_content();
							
							borderland_elated_wp_link_pages();
							
							if ( $enable_page_comments ) { ?>
								<div class="container">
									<div class="container_inner">
										<?php comments_template( '', true ); ?>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					<?php endwhile; endif; ?>
					</div>
					<div class="column2"><?php get_sidebar(); ?></div>
				</div>
			<?php elseif ( $borderland_sidebar == "3" || $borderland_sidebar == "4" ): ?>
				<?php if ( $borderland_sidebar == "3" ) : ?>
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1"><?php get_sidebar(); ?></div>
						<div class="column2 content_right_from_sidebar">
				<?php elseif ( $borderland_sidebar == "4" ) : ?>
					<div class="two_columns_25_75 clearfix grid2">
						<div class="column1"><?php get_sidebar(); ?></div>
						<div class="column2 content_right_from_sidebar">
				<?php endif; ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class="column_inner">
								<?php
								the_content();
								
								borderland_elated_wp_link_pages();
								
								if ( $enable_page_comments ) { ?>
									<div class="container">
										<div class="container_inner">
											<?php comments_template( '', true ); ?>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>