<?php
$borderland_revslider = get_post_meta( borderland_elated_get_page_id(), "eltd_revolution-slider", true );

if ( ! empty( $borderland_revslider ) && ! is_page_template( 'full_screen.php' ) ) { ?>
	<div class="eltd_slider">
		<div class="eltd_slider_inner">
			<?php echo do_shortcode( wp_kses_post( $borderland_revslider ) ); ?>
		</div>
	</div>
	<?php
}
?>