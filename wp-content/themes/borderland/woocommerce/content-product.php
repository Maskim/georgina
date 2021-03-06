<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$eltd_products_list_type = 'type1';
if ( borderland_elated_options()->getOptionValue( 'woo_products_list_type' ) ) {
	$eltd_products_list_type = borderland_elated_options()->getOptionValue( 'woo_products_list_type' );
}

$eltd_product_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

$eltd_hide_separator = "no";
if ( borderland_elated_options()->getOptionValue( 'woo_products_title_separator_hide_title_separator' ) ) {
	$eltd_hide_separator = borderland_elated_options()->getOptionValue( 'woo_products_title_separator_hide_title_separator' );
}
?>
<?php switch($eltd_products_list_type) { 
	
	case 'type1': ?>
	<li <?php wc_product_class( '', $product ); ?>>
			<a href="<?php the_permalink(); ?>" class="product_info_overlay"></a>
			<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
			<div class="top-product-section">
					<a href="<?php the_permalink(); ?>">
						<span class="image-wrapper">
						<?php
							/**
							 * woocommerce_before_shop_loop_item_title hook
							 *
							 * @hooked woocommerce_show_product_loop_sale_flash - 10
							 * @hooked woocommerce_template_loop_product_thumbnail - 10
							 */
							do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
						</span>
					</a>
					<?php do_action('eltd_woocommerce_after_product_image'); ?>
				</div>
				<div class="product_info_box">
					<span class="product-categories">
						<?php echo wp_kses(wc_get_product_category_list($product), array(
							'a' => array(
								'href' => true,
								'rel' => true,
								'class' => true,
								'title' => true,
								'id' => true
							)
						)); ?>
					</span>
					<a href="<?php the_permalink(); ?>" class="product-category">            
						<span class="product-title"><?php the_title(); ?></span>
					</a>
					<?php if($eltd_hide_separator == "no") { ?>
						<div class="separator_holder"><span class="separator medium"></span></div>
					<?php } ?>
					<div class="shop_price_lightbox_holder">
						<?php
							/**
							 * woocommerce_after_shop_loop_item_title hook
							 *
							 * @hooked woocommerce_template_loop_rating - 5
							 * @hooked woocommerce_template_loop_price - 10
							 */
							do_action( 'woocommerce_after_shop_loop_item_title' );
						?>
						<?php if( borderland_elated_options()->getOptionValue( 'woo_products_enable_lighbox_icon' ) == "yes") { ?>
							<div class="shop_lightbox">
								<a class="product_lightbox" title="<?php echo esc_attr(the_title()); ?>" href="<?php echo esc_url($eltd_product_image_src[0]); ?>" data-rel="prettyPhoto[single_pretty_photo]">
									<span class="fa-search"></span>
								</a>
							</div>
						<?php } ?>
					</div>	
				</div>
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
	</li>

<?php break; 
case 'type2': ?>
	<li <?php wc_product_class( '', $product ); ?>>
		<a href="<?php the_permalink(); ?>" class="product_info_overlay"></a>
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
			<div class="top-product-section">
				<a href="<?php the_permalink(); ?>">
					<span class="image-wrapper">
						<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
					</span>
				</a>
				<?php do_action('eltd_woocommerce_after_product_image'); ?>
			</div>
			<div class="product_info_box">
				<span class="product-categories">
					<?php echo wp_kses(wc_get_product_category_list($product), array(
						'a' => array(
							'href' => true,
							'rel' => true,
							'class' => true,
							'title' => true,
							'id' => true
						)
					)); ?>
				</span>
				<a href="<?php the_permalink(); ?>" class="product-category">            
					<div class="title_price_holder">
						<span class="product-title"><?php the_title(); ?></span>
						<?php if($eltd_hide_separator == "no") { ?>
							<div class="separator_holder"><span class="separator medium"></span></div>
						<?php } ?>						
						<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
					</div>
					<div class="product_info_holder">
						<?php echo wp_kses_post(apply_filters( 'woocommerce_short_description', $post->post_excerpt ));?>
					</div>
				</a>
			
			</div>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>

	</li>

<?php break; } ?>