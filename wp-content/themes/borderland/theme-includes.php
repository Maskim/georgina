<?php

define( 'BORDERLAND_ELATED', true );
define( 'BORDERLAND_ROOT', get_template_directory_uri() );
define( 'BORDERLAND_ROOT_DIR', get_template_directory() );
define( 'BORDERLAND_VAR_PREFIX', 'eltd_' );
define( 'BORDERLAND_CSS_ROOT', BORDERLAND_ROOT . '/css' );
define( 'BORDERLAND_CSS_ROOT_DIR', BORDERLAND_ROOT_DIR . '/css' );
define( 'BORDERLAND_JS_ROOT', BORDERLAND_ROOT . '/js' );
define( 'BORDERLAND_JS_ROOT_DIR', BORDERLAND_ROOT_DIR . '/js' );
define( 'BORDERLAND_FRAMEWORK_ROOT', BORDERLAND_ROOT . '/framework' );
define( 'BORDERLAND_FRAMEWORK_ROOT_DIR', BORDERLAND_ROOT_DIR . '/framework' );

include_once BORDERLAND_FRAMEWORK_ROOT_DIR . '/eltd-fallback-helper-functions.php';
include_once BORDERLAND_FRAMEWORK_ROOT_DIR . '/eltd-framework.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-plugin-helper-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-dynamic-helper-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-body-classes.php';

if ( file_exists( BORDERLAND_ROOT_DIR . '/export' ) && file_exists( BORDERLAND_ROOT_DIR . '/export/eltd-export.php' ) ) {
	include_once BORDERLAND_ROOT_DIR . '/export/eltd-export.php';
}

include_once BORDERLAND_ROOT_DIR . '/includes/nav-menu/eltd-menu.php';
include_once BORDERLAND_ROOT_DIR . '/plugins/class-tgm-plugin-activation.php';
include_once BORDERLAND_ROOT_DIR . '/plugins/plugins-activation.php';

include_once BORDERLAND_ROOT_DIR . '/includes/eltd-breadcrumbs.php';
include_once BORDERLAND_ROOT_DIR . '/includes/sidebar/eltd-custom-sidebar.php';
include_once BORDERLAND_ROOT_DIR . '/includes/header/eltd-header-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/title/eltd-title-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-portfolio-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-loading-spinners.php';
include_once BORDERLAND_ROOT_DIR . '/includes/sidebar/sidebar.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-blog-functions.php';
include_once BORDERLAND_ROOT_DIR . '/includes/eltd-layout-helpers.php';
include_once BORDERLAND_ROOT_DIR . '/includes/widgets/eltd-call-to-action-widget.php';
include_once BORDERLAND_ROOT_DIR . '/includes/widgets/eltd-sticky-sidebar.php';
include_once BORDERLAND_ROOT_DIR . '/includes/widgets/eltd-latest-posts-widget.php';

//does woocommerce function exists?
if ( borderland_elated_is_woocommerce_installed() ) {
	//include woocommerce configuration
	include_once BORDERLAND_ROOT_DIR . '/woocommerce/woocommerce_configuration.php';
	//include cart dropdown widget
	include_once BORDERLAND_ROOT_DIR . '/includes/widgets/eltd-woocommerce-dropdown-cart.php';
}