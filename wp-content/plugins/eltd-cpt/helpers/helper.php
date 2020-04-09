<?php

if ( ! function_exists( 'borderland_elated_cpt_is_installed' ) ) {
	/**
	 * Function that checks if forward module installed
	 *
	 * @param $name string - module name
	 *
	 * @return bool
	 */
	function borderland_elated_cpt_is_installed( $name ) {
		
		switch ( $name ) {
			case 'theme';
				return defined( 'BORDERLAND_ELATED' );
				break;
			case 'woocommerce';
				return function_exists( 'is_woocommerce' );
				break;
			case 'visual-composer';
				return class_exists( 'WPBakeryVisualComposerAbstract' );
				break;
			case 'gutenberg-editor';
				return function_exists( 'register_block_type' );
				break;
			default:
				return false;
		}
	}
}