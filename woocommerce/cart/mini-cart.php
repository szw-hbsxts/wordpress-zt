		
		<?php
			function is_https() {
				if ( !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
					return true;
				} elseif ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
					return true;
				} elseif ( !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
					return true;
				}else{
					return false;
				}
			}
			if(count(WC()->cart->get_cart()) == 0){
				echo "<p class='woocommerce-mini-cart__empty-message'>No products in the cart.</p>";
			}else{		
		?>
		<form class="woocommerce-cart-form mini_cart_hdhnsj" action="http://www.wdp01.com/"  method="post">
			<ul id="mini_cart_sff" class="woocommerce-mini-cart cart_list product_list_widget" style="padding-bottom: 1rem;border-bottom: 1px solid #eaecee;margin-bottom: 1rem;">
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					

					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					
									

					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<li class="woocommerce-mini-cart-item mini_cart_item">
								<a href="<?php echo  esc_url( $product_permalink );?>" class="title_car">
								<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
								echo $thumbnail;
								?>
								<?php echo  $_product->get_name();?>
								</a>
								<?php


								// Meta data.
								echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

								?>
		
								<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.

								?>
							

								<?php
									if ( $_product->is_sold_individually() ) {
										$product_quantity = sprintf( '<input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
									} else {
										$product_quantity = woocommerce_quantity_input(
											array(
												'input_name'   => "cart[{$cart_item_key}][qty]",
												'input_value'  => $cart_item['quantity'],
												'max_value'    => $_product->get_max_purchase_quantity(),
												'min_value'    => '0',
												'product_name' => $_product->get_name(),
											),
											$_product,
											false
										);
									}
									//echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
									$yt = uniqid( 'quantity_' );
								?>
								<div class="quantity">
									<label class="screen-reader-text" for="<?php echo $yt;?>">Hoodie - Blue, Yes quantity</label>
									<span class="input-qty-pm ghjags" style="width:100%;">
										<button type="button" class="input-pm-act input-mini-minus" style="float: left;">-</button>
										<input type="text" id="<?php echo $yt;?>" class="input-text qty text mini_cart_input" step="1" min="0" max="" post_type="<?php echo $_product->{'post_type'};?>" data_product_id="<?php echo $cart_item['product_id'];?>" data_variation_id="<?php echo $cart_item['variation_id'];?>"  name="cart[<?php echo $cart_item_key;?>][qty]" value="<?php echo $cart_item['quantity'];?>" title="quantity" size="4" placeholder="" inputmode="numeric" style="float: left;">
										<button type="button" class="input-pm-act input-mini-plus" style="float: left;">+</button>
									</span>
									
								</div>



								<?php

								echo apply_filters(
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove remove_from_cart_button mini_remove_from_cart" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										__( 'Remove this item', 'customify' ),
										esc_attr( $product_id ),
										esc_attr( $cart_item_key ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);

								?>
								
		
							</li>
						<?php
					}
				}
				?>
			<?php do_action( 'woocommerce_after_cart_table' ); ?>
			</ul>
				<button type="submit" class="button cart-mini-butt" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>" style="display:none;"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

				<?php do_action( 'woocommerce_cart_actions' ); ?>
				<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

				<input type="hidden" id="zdy_khgh" name="_wp_http_referer" value="">
		</form>
		<p class="woocommerce-mini-cart__total total">
			<?php esc_html_e( 'Total', 'woocommerce' ); ?>:
			<?php wc_cart_totals_order_total_html(); ?>
		</p>
		<div class="wc-proceed-to-checkout" style="width:100%;">
			<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
		</div>
		<?php } ?>

<?php

?>

<script>
 var url = window.location.href;
 $('#zdy_khgh').prev().remove();
 if(url.indexOf("index.php") != -1){
	 $('#zdy_khgh').attr('value',url);
 }else{
	var gf = url+"index.php";
	$('#zdy_khgh').attr('value',gf);
 }
</script>