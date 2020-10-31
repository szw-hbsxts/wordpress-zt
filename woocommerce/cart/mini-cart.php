		<?php 

			if(count(WC()->cart->get_cart()) == 0){
				echo "<p class='woocommerce-mini-cart__empty-message'>No products in the cart.</p>";
			}else{
		?>
		<form class="woocommerce-cart-form mini_cart_hdhnsj" method="post">
			<ul id="mini_cart_sff" class="woocommerce-mini-cart cart_list product_list_widget" style="padding-bottom: 1rem;border-bottom: 1px solid #eaecee;margin-bottom: 1rem;">
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					

					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					
									

					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<li class="woocommerce-mini-cart-item mini_cart_item">
								<a href="<?php echo  esc_url( $product_permalink );?>" class="title_car" style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;overflow: hidden;">
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
										$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
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

							
		</form>
			<div class="cart-collaterals" id="shghj" style="width:100%;">
				<?php
				/**
				 * Cart collaterals hook.
				 *
				 * @hooked woocommerce_cross_sell_display
				 * @hooked woocommerce_cart_totals - 10
				 */
				do_action( 'woocommerce_cart_collaterals' );
				?>
			</div>
		<?php } ?>

<script>
	var gf = document.getElementById("uk-badge");
	gf.innerHTML= <?php echo count(WC()->cart->get_cart());?>;
</script>