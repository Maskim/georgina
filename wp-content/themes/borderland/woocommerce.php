<?php
/*
Template Name: WooCommerce
*/

get_header();

$borderland_sidebar = borderland_elated_get_sidebar_layout( false );
?>
<?php if ( borderland_elated_options()->getOptionValue( 'woo_products_enable_full_width_template' ) == "yes" && ! is_singular( 'product' ) ) { ?>
	<div class="full_width" <?php borderland_elated_inline_page_background_style(); ?>>
<?php } else { ?>
	<div class="container" <?php borderland_elated_inline_page_background_style(); ?>>
<?php } ?>
		<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
			<div class="overlapping_content">
			<div class="overlapping_content_inner">
		<?php } ?>
		<?php if ( borderland_elated_options()->getOptionValue( 'woo_products_enable_full_width_template' ) == "yes" && ! is_singular( 'product' ) ){ ?>
			<div class="full_width_inner" <?php borderland_elated_inline_page_padding_style(); ?>>
			<?php } else { ?>
			<div class="container_inner default_template_holder clearfix" <?php borderland_elated_inline_page_padding_style(); ?>>
		<?php } ?>
			<?php if ( ! is_singular( 'product' ) ) { ?>
				<?php if ( ( $borderland_sidebar == "default" ) || ( $borderland_sidebar == "" ) ) : ?>
					<?php borderland_elated_woocommerce_content(); ?>
				<?php elseif ( $borderland_sidebar == "1" || $borderland_sidebar == "2" ): ?>
					<?php borderland_elated_set_number_of_columns_woo_product_list(); ?>
					<?php if ( $borderland_sidebar == "1" ) : ?>
						<div class="two_columns_66_33 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1">
					<?php elseif ( $borderland_sidebar == "2" ) : ?>
						<div class="two_columns_75_25 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<?php borderland_elated_woocommerce_content(); ?>
								</div>
							</div>
							<div class="column2"><?php get_sidebar(); ?></div>
						</div>
				<?php elseif ( $borderland_sidebar == "3" || $borderland_sidebar == "4" ): ?>
					<?php borderland_elated_set_number_of_columns_woo_product_list(); ?>
					<?php if ( $borderland_sidebar == "3" ) : ?>
						<div class="two_columns_33_66 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1"><?php get_sidebar(); ?></div>
							<div class="column2">
					<?php elseif ( $borderland_sidebar == "4" ) : ?>
						<div class="two_columns_25_75 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1"><?php get_sidebar(); ?></div>
							<div class="column2 content_right_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<?php borderland_elated_woocommerce_content(); ?>
								</div>
							</div>
						</div>
				<?php endif; ?>
			<?php } else {
				borderland_elated_woocommerce_content();
			} ?>
			</div>
		<?php if ( borderland_elated_options()->getOptionValue( 'overlapping_content' ) == 'yes' ) { ?>
			</div></div>
		<?php } ?>
	</div>
<?php get_footer(); ?>