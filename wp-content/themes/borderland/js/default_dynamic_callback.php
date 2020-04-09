<?php
$root = dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) );
if ( file_exists( $root . '/wp-load.php' ) ) {
	require_once( $root . '/wp-load.php' );
} else {
	$root = dirname( dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) ) );
	if ( file_exists( $root . '/wp-load.php' ) ) {
		require_once( $root . '/wp-load.php' );
	}
}
header( 'Content-type: application/x-javascript' );
?>
var header_height = 129;
var min_header_height_scroll = 57;
var min_header_height_sticky = 60;
var scroll_amount_for_sticky = 85;
var min_header_height_fixed_hidden = 45;
var header_bottom_border_weight = 1;
var scroll_amount_for_fixed_hiding = 200;
var menu_item_margin = 0;
var large_menu_item_border = 0;
var element_appear_amount = -150;
var paspartu_width_init = 0.02;
var directionNavArrows = 'arrow_carrot-';
var directionNavArrowsTestimonials = 'fa fa-angle-';

<?php if ( borderland_elated_options()->getOptionValue( 'header_height' ) !== '' ) { ?>
	header_height = <?php echo intval( borderland_elated_options()->getOptionValue( 'header_height' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'header_height_scroll' ) !== "" ) { ?>
	min_header_height_scroll = <?php echo intval( borderland_elated_options()->getOptionValue( 'header_height_scroll' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'header_height_sticky' ) !== "" ) { ?>
	min_header_height_sticky = <?php echo intval( borderland_elated_options()->getOptionValue( 'header_height_sticky' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'scroll_amount_for_sticky' ) ) { ?>
	scroll_amount_for_sticky = <?php echo intval( borderland_elated_options()->getOptionValue( 'scroll_amount_for_sticky' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'header_height_scroll_hidden' ) ) { ?>
	min_header_height_fixed_hidden = <?php echo intval( borderland_elated_options()->getOptionValue( 'header_height_scroll_hidden' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' ) ) { ?>
	scroll_amount_for_fixed_hiding = <?php echo intval( borderland_elated_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'enable_manu_item_border' ) == 'yes' && borderland_elated_options()->getOptionValue( 'menu_item_style' ) == 'large_item' ) {
	if ( borderland_elated_options()->getOptionValue( 'menu_item_border_style' ) == 'all_borders' ) { ?>
		large_menu_item_border = <?php echo floatval( borderland_elated_options()->getOptionValue( 'menu_item_border_width' ) ) * 2;
	} ?>
	<?php if ( borderland_elated_options()->getOptionValue( 'menu_item_border_style' ) == 'top_bottom_borders' ) { ?>
		large_menu_item_border = <?php echo floatval( borderland_elated_options()->getOptionValue( 'menu_item_border_width' ) ) * 2;
	} ?>
	<?php if ( borderland_elated_options()->getOptionValue( 'menu_item_border_style' ) == 'bottom_border' ) { ?>
		large_menu_item_border = <?php echo floatval( borderland_elated_options()->getOptionValue( 'menu_item_border_width' ) );
	} ?>
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'element_appear_amount' ) !== "" ) { ?>
	element_appear_amount = -<?php echo intval( borderland_elated_options()->getOptionValue( 'element_appear_amount' ) ); ?>;
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'paspartu_width' ) !== "" ) { ?>
	paspartu_width_init = <?php echo floatval( borderland_elated_options()->getOptionValue( 'paspartu_width' ) ) / 100; ?>;
<?php } ?>

var logo_height = 130; // borderland logo height
var logo_width = 280; // borderland logo width
<?php
$logo_width  = borderland_elated_options()->getOptionValue( 'logo_width' );
$logo_height = borderland_elated_options()->getOptionValue( 'logo_height' );
?>
logo_width = <?php echo intval( $logo_width ); ?>;
logo_height = <?php echo intval( $logo_height ); ?>;

<?php if ( borderland_elated_options()->getOptionValue( 'menu_margin_left_right' ) !== '' ) { ?>
	menu_item_margin = <?php echo floatval( borderland_elated_options()->getOptionValue( 'menu_margin_left_right' ) ); ?>;
<?php } ?>

header_top_height = 0;
<?php if ( borderland_elated_options()->getOptionValue( 'header_top_area' ) == "yes" ) { ?>
	<?php if ( borderland_elated_options()->getOptionValue( 'header_top_height' ) !== "" ) { ?>
		header_top_height= <?php echo intval( borderland_elated_options()->getOptionValue( 'header_top_height' ) ); ?>;
	<?php } else { ?>
		header_top_height = 36;
	<?php } ?>
<?php } ?>

var loading_text;
loading_text = '<?php esc_attr_e( 'Loading new posts...', 'borderland' ); ?>';
var finished_text;
finished_text = '<?php esc_attr_e( 'No more posts', 'borderland' ); ?>';

var piechartcolor;
piechartcolor    = "#303030";

<?php if ( borderland_elated_options()->getOptionValue( 'first_color' ) ) { ?>
	piechartcolor = "<?php echo esc_attr( borderland_elated_options()->getOptionValue( 'first_color' ) ); ?>";
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'single_slider_navigation_arrows_type' ) != '' ) { ?>
	directionNavArrows = '<?php echo esc_attr( borderland_elated_options()->getOptionValue( 'single_slider_navigation_arrows_type' ) ); ?>';
<?php } ?>

<?php if ( borderland_elated_options()->getOptionValue( 'testimonials_arrows_type' ) != '' ) { ?>
	directionNavArrowsTestimonials = '<?php echo esc_attr( borderland_elated_options()->getOptionValue( 'testimonials_arrows_type' ) ); ?>';
<?php } ?>

var no_ajax_pages = [];
var eltd_root = '<?php echo esc_url( home_url( '/' ) ); ?>';
var theme_root = '<?php echo BORDERLAND_ROOT; ?>/';
<?php if ( borderland_elated_options()->getOptionValue( 'header_style' ) != '' ) { ?>
	var header_style_admin = "<?php echo esc_attr( borderland_elated_options()->getOptionValue( 'header_style' ) ); ?>";
<?php } else { ?>
	var header_style_admin = "";
<?php } ?>
if(typeof no_ajax_obj !== 'undefined') {
	no_ajax_pages = no_ajax_obj.no_ajax_pages;
}