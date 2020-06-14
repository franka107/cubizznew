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
add_shortcode('login_logut_icon', 'login_logut_icon');
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
		<a role="button" href="<?php echo wp_logout_url(get_permalink()); ?>" style="color:white"><i aria-hidden="true" class="fas fa-lock"></i> Cerrar Sesión</a>

	<?php
	else :
		// Set the login URL - below it is set to get_permalink() - you can set that to whatever URL eg '/whatever'
	?>
		<a role="button" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" style="color: white;"><i aria-hidden="true" class="fas fa-user"></i> Iniciar Sesión/ Registrarse</a>

	<?php
	endif;

	return ob_get_clean();
}
function login_logut_icon()
{
	ob_start();
	if (is_user_logged_in()) :
		// Set the logout URL - below it is set to the root URL
	?>
		<a role="button" href="<?php echo wp_logout_url(get_permalink()); ?>" style="color: white"><i aria-hidden="true" class="fas fa-lock"></i> Salir</a>

	<?php
	else :
		// Set the login URL - below it is set to get_permalink() - you can set that to whatever URL eg '/whatever'
	?>
		<a role="button" href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" style="color: white;">
			<i aria-hidden="true" class="fas fa-user"></i>
			Iniciar Sesión
		</a>

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


function add_meta_tags()
{
	?>
	<meta name="theme-color" content="#0794DA" />

<?php }
add_action('wp_head', 'add_meta_tags');
