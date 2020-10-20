<?php
/**
 * Reset default WC action hooks.
 */
function customify_wc_reset_default_hooks() {
	remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );

	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
	remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

	if ( Customify()->get_setting( 'wc_single_layout_breadcrumb' ) ) {
		add_action( 'woocommerce_single_product_summary_before', 'woocommerce_breadcrumb', 5 );
	}
	add_action( 'customify/wc-product/before-media', 'woocommerce_template_loop_product_link_open', 10 );
	add_action( 'customify/wc-product/after-media', 'woocommerce_template_loop_product_link_close', 10 );
}

add_action( 'wp', 'customify_wc_reset_default_hooks' );


/**
 * Display secondary thumbnail.
 */
function customify_wc_secondary_product_thumbnail() {
	$setting = wc_get_loop_prop( 'media_secondary' );
	if ( 'none' == $setting ) {
		return;
	}
	global $product;
	$image_ids = $product->get_gallery_image_ids();
	if ( count( $image_ids ) ) {
		$secondary_img_id = 'last' == $setting ? end( $image_ids ) : reset( $image_ids );
		$size             = 'shop_catalog';
		$classes          = 'attachment-' . $size . ' secondary-image image-transition';
		echo wp_get_attachment_image( $secondary_img_id, $size, false, array( 'class' => $classes ) );
	}
}


/**
 * Change before shop loop.
 */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

/**
 * Add view mod buttons to before shop loop.
 */
add_action( 'woocommerce_before_shop_loop', 'customify_wc_catalog_header', 15 );

/**
 * Custom shop header.
 *
 * @return bool
 */
function customify_wc_catalog_header() {
	// Do not show shop header when display categories.
	$d = false;
	if ( is_product_category() || is_product_tag() || is_product_taxonomy() ) {
		$d = get_option( 'woocommerce_category_archive_display' );
	} else {
		$d = get_option( 'woocommerce_shop_page_display' );
	}

	if ( $d && 'subcategories' == $d ) {
		return;
	}

	if ( ! Customify()->get_setting( 'wc_cd_show_catalog_header' ) ) {
		return false;
	}
	echo '<div class="wc-catalog-header">';
	customify_wc_catalog_view_mod();
	woocommerce_result_count();
	woocommerce_catalog_ordering();
	echo '</div>';
}

/**
 * Display switcher mod view
 *
 * @return string
 */
function customify_wc_catalog_view_mod() {
	if ( ! Customify()->get_setting( 'wc_cd_show_view_mod' ) ) {
		return '';
	}

	$default = customify_get_default_catalog_view_mod();
	?>

	<?php
}

/**
 * Loop Layout.
 */
add_action( 'woocommerce_before_subcategory', 'customify_wc_before_shop_loop_item', 1 );
add_action( 'woocommerce_after_subcategory', 'customify_wc_after_shop_loop_item', 9999 );
add_filter( 'woocommerce_after_output_product_categories', 'customify_wc_after_output_product_categories' );

function customify_wc_before_shop_loop_item() {
	echo '<div class="wc-product-inner">';
}

/**
 * After loop layout
 */
function customify_wc_after_shop_loop_item() {
	echo '</div>';
}

/**
 * Add separator between product categories and products
 *
 * @param string $html HTML to add.
 *
 * @return string
 */
function customify_wc_after_output_product_categories( $html ) {
	if ( wc_get_loop_prop( 'is_shortcode' ) && ! WC_Template_Loader::in_content_filter() ) {
		return $html;
	}

	return '<li class="wc-loop-cats-separator"></li>';
}


/**
 * Cart page
 */

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_after_cart_table', 'woocommerce_cross_sell_display' );

/**
 * Checkout Page. Add custom heading.
 */
function customify_your_order_heading() {
	?>
	<h3 class="order_review_heading"><?php _e( 'Your order', 'customify' ); ?></h3>
	<?php
}

add_action( 'woocommerce_checkout_order_review', 'customify_your_order_heading', 1 );
