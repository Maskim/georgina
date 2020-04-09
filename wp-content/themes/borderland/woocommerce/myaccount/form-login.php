<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
	
	<div class="u-columns col2-set" id="customer_login">
	
	<div class="u-column1 col-1">

<?php endif; ?>

    <h2><?php esc_html_e( 'Login', 'borderland' ); ?></h2>

    <form method="post" class="login">

        <?php do_action( 'woocommerce_login_form_start' ); ?>

        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_attr_e('Username or email', 'borderland'); ?>" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
        </p>
        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
            <input class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_attr_e('Password', 'borderland'); ?>" type="password" name="password" id="password" />
        </p>

        <?php do_action( 'woocommerce_login_form' ); ?>

        <p class="form-row">
	        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
            <input type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'Login', 'borderland' ); ?>" />
            <a class="lost_password woo-lost_password2" href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost Password?', 'borderland' ); ?></a>
            <label for="rememberme" class="inline woo-my-account-rememberme">
                <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php esc_html_e( 'Remember me', 'borderland' ); ?>
            </label>
        </p>
	
	    <?php do_action( 'woocommerce_login_form_end' ); ?>

    </form>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

    </div>

    <div class="u-column2 col-2">

        <h2><?php esc_html_e( 'Register', 'borderland' ); ?></h2>
	
	    <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
		
		    <?php do_action( 'woocommerce_register_form_start' ); ?>
		
		    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
			
			    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_attr_e('Username', 'borderland'); ?>" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			    </p>
		
		    <?php endif; ?>

            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <input type="email" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_attr_e('Email', 'borderland'); ?>" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
            </p>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text placeholder" placeholder="<?php esc_attr_e('Password', 'borderland'); ?>" name="password" id="reg_password" />
                </p>

            <?php endif; ?>
		
		    <?php do_action( 'woocommerce_register_form' ); ?>
		
		    <p class="woocommerce-FormRow form-row">
			    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
			    <button type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'Register', 'borderland' ); ?>"><?php esc_html_e( 'Register', 'borderland' ); ?></button>
		    </p>
		
		    <?php do_action( 'woocommerce_register_form_end' ); ?>

        </form>

    </div>

    </div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>