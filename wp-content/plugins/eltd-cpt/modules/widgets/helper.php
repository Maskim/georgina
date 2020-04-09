<?php

if ( ! function_exists( 'borderland_elated_register_widgets' ) ) {
	function borderland_elated_register_widgets() {
		$widgets = array(
			'BorderlandElatedCallToActionWidget',
			'BorderlandElatedLatestPostWidget',
			'BorderlandElatedStickySidebarWidget'
		);
		
		if ( borderland_elated_is_woocommerce_installed() ) {
			$widgets[] = 'BorderlandElatedWooCommerceDropDownCartWidget';
		}
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'borderland_elated_register_widgets' );
}