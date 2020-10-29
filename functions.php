<?php
/**
 * Customify functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package customify
 */

/**
 *  Same the hook `the_content`
 *
 * @TODO: do not effect content by plugins
 *
 * 8 WP_Embed:run_shortcode
 * 8 WP_Embed:autoembed
 * 10 wptexturize
 * 10 wpautop
 * 10 shortcode_unautop
 * 10 prepend_attachment
 * 10 wp_filter_content_tags || wp_make_content_images_responsive
 * 11 capital_P_dangit
 * 11 do_shortcode
 * 20 convert_smilies
 */
global $wp_embed;
add_filter( 'customify_the_content', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'customify_the_content', array( $wp_embed, 'autoembed' ), 8 );
add_filter( 'customify_the_content', 'wptexturize' );
add_filter( 'customify_the_content', 'wpautop' );
add_filter( 'customify_the_content', 'shortcode_unautop' );
if ( function_exists( 'wp_filter_content_tags' ) ) {
	add_filter( 'customify_the_content', 'wp_filter_content_tags' );
} else {
	add_filter( 'customify_the_content', 'wp_make_content_images_responsive' );
}

add_filter( 'customify_the_content', 'capital_P_dangit' );
add_filter( 'customify_the_content', 'do_shortcode' );
add_filter( 'customify_the_content', 'convert_smilies' );


/**
 *  Same the hook `the_content` but not auto P
 *
 * @TODO: do not effect content by plugins
 *
 * 8 WP_Embed:run_shortcode
 * 8 WP_Embed:autoembed
 * 10 wptexturize
 * 10 shortcode_unautop
 * 10 prepend_attachment
 * 10 wp_filter_content_tags || wp_make_content_images_responsive
 * 11 capital_P_dangit
 * 11 do_shortcode
 * 20 convert_smilies
 */
add_filter( 'customify_the_title', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'customify_the_title', array( $wp_embed, 'autoembed' ), 8 );
add_filter( 'customify_the_title', 'wptexturize' );
add_filter( 'customify_the_title', 'shortcode_unautop' );
if ( function_exists( 'wp_filter_content_tags' ) ) {
	add_filter( 'customify_the_title', 'wp_filter_content_tags' );
} else {
	add_filter( 'customify_the_title', 'wp_make_content_images_responsive' );
}
add_filter( 'customify_the_title', 'capital_P_dangit' );
add_filter( 'customify_the_title', 'do_shortcode' );
add_filter( 'customify_the_title', 'convert_smilies' );

// Include the main Customify class.
require_once get_template_directory() . '/inc/class-customify.php';

/**
 * Main instance of Customify.
 *
 * Returns the main instance of Customify.
 *
 * @return Customify
 */
function Customify() {
	// phpc:ignore WordPress.NamingConventions.ValidFunctionName.
	return Customify::get_instance();
}

Customify();

add_theme_support( 'post-thumbnails' );


function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    <a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
    <?php
    $fragments['a.cart-customlocation'] = ob_get_clean();
    return $fragments;
}

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 20 );


