<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

add_shortcode('login_logut', 'login_logut');
/**
 * Add a login/logout shortcode button
 * @since 1.0.0
 */
function login_logut()
{
	ob_start();
	if (is_user_logged_in()) :
		// Set the logout URL - below it is set to the root URL
?>
		<i aria-hidden="true" class="fas fa-lock" style="color: red;"></i>
		<a role="button" href="<?php echo wp_logout_url(get_permalink()); ?>">Cerrar Sesión</a>

	<?php
	else :
		// Set the login URL - below it is set to get_permalink() - you can set that to whatever URL eg '/whatever'
	?>
		<i aria-hidden="true" class="fas fa-user" style="color: red;"></i>
		<a role="button" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">Iniciar Sesión/ Registrarse</a>

<?php
	endif;

	return ob_get_clean();
}

// To change add to cart text on single product page
//add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text');
//function woocommerce_custom_single_add_to_cart_text()
//{
//	return __('Buy Now', 'woocommerce');
//}

// To change add to cart text on product archives(Collection) page
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
function woocommerce_custom_product_add_to_cart_text()
{
	return __('+Carrito', 'woocommerce');
}
