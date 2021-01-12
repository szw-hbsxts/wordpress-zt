<?php

get_header();
?>
</main><!-- #main -->
</div><!-- #.customify-grid -->
</div><!-- #.customify-container -->
<!---内容开始---->
<div class="py-banner uk-margin-large-bottom uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="ratio: false;autoplay: true;animation: pull">
	<!---banner切换---->
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
        <ul class="uk-slideshow-items">           
            <li class="uk-light">
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/banner01.jpg';?>" alt="" uk-cover>
                </div>
                <div class="uk-overlay uk-dark uk-position-center-left">
                                        <h2 uk-slideshow-parallax="x: 100,-100" class="uk-margin-remove">Find Your Love</h2>
                                    </div>
                <a href=""  ></a>
            </li>
            
            <li class="uk-light">
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/banner02.jpg';?>" alt="" uk-cover>
                </div>
                <div class="uk-overlay uk-dark uk-position-center"></div>
                <a href=""  ></a>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
	</div>
	<!---小ban切换---->
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-hidden@m"></ul>
    <div class="py-banner-thumbnav uk-position-bottom-center uk-flex uk-flex-center uk-visible@s">
        <ul class="uk-thumbnav">
            <li uk-slideshow-item="0" class="uk-light">
                <a href="#" class="uk-background-cover uk-background-center-center " data-src="<?php echo get_template_directory_uri().'/assets/images/ban01-150x150.jpg';?>" uk-img>
                </a>
            </li>
            <li uk-slideshow-item="1" class="uk-light">
                <a href="#" class="uk-background-cover uk-background-center-center " data-src="<?php echo get_template_directory_uri().'/assets/images/ban02-150x150.jpg';?>" uk-img></a>
            </li>
        </ul>
    </div>

</div>
<!---精选推荐---->
<div class="uk-margin-large">
	<!---精选产品标题---->
    <div class="uk-margin-medium-bottom" >
        <h1 id="py-product-0" class="py-title uk-article-title">products</h1>
    </div>
    <!---精选产品---->
    <div>
		<div class="py-container">
			<div class="woocommerce">
				<div class="woocommerce columns-4 ">
					<ol class="py-products uk-child-width-1-2 uk-grid-small uk-child-width-1-4@m uk-grid" uk-grid>

						<?php
							$args = array(
								// 用于查询的参数或者参数集合
								'post_type'=>'product',
								'posts_per_page' => 8,
								'tax_query' => array(
									array(
										'taxonomy' => 'product_visibility',
										'terms' => 'featured',
										'field' => 'name',
										'operator' => 'IN',
										'include_children' => false
									)
								)
							); 
							 
							// 自定义查询
							$the_query = new WP_Query( $args );
							// 判断查询的结果，检查是否有文章
							if ( $the_query->have_posts() ) :
								// 通过查询的结果，开始主循环
								while ( $the_query->have_posts() ) :
									$the_query->the_post(); //获取到特定的文章
									echo '<li class="py-product product type-product post-'.get_the_ID().' status-publish instock product_cat-beauty has-post-thumbnail taxable shipping-taxable purchasable product-type-variable">';
									echo '<div class="py-thumbnail uk-inline-clip uk-transition-toggle" tabindex="0">';
									echo '<a class="py-img" href="'.get_permalink().'">';
									echo woocommerce_show_product_loop_sale_flash();
									echo woocommerce_get_product_thumbnail().get_the_title().'</a>';
									$order = get_the_ID();
									
									echo '<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default uk-padding-remove"><p class="py-thumbnail-btn uk-margin-remove uk-flex "><a href="javascript:void(0)" data-product_id="'.get_the_ID().'" class="uk-button uk-button-primary" id="wisnhju"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">quick viewing</font></font></a></p></div></div>';
									echo '<a class="py-img" href="'.get_permalink().'"><h2 class="woocommerce-loop-product__title">'.get_the_title().'</h2></a>';
									// // 要输出的内容，如标题、日期等 
									// add_filter( 'woocommerce_variation_option_name', 'display_price_in_variation_option_name' );

									echo '<div class="py-toggle"><div><span class="price">';
									echo get_product(get_the_ID())->get_price_html();
									echo '</span>';
									echo '<button type="submit" id="index_add_wsj" dataid="#button_'.get_the_ID().'">add to cart</button>';
									echo '</div></div></li>';
							 
								endwhile;
							endif;
							 
							// 重置请求数据
							wp_reset_postdata(); 
						?>

					</ol>
				</div>        
			</div>
		</div>
	</div>
</div>





<div id="butt_vue" style="display:none;">

<?php
$args = array(
	// 用于查询的参数或者参数集合
	'post_type'=>'product',
	'posts_per_page' => 8,
	'tax_query' => array(
		array(
			'taxonomy' => 'product_visibility',
			'terms' => 'featured',
			'field' => 'name',
			'operator' => 'IN',
			'include_children' => false
		)
	)
); 
 
// 自定义查询
$the_query = new WP_Query( $args );
// 判断查询的结果，检查是否有文章
if ( $the_query->have_posts() ) :
	// 通过查询的结果，开始主循环
	while ( $the_query->have_posts() ) :
		$the_query->the_post(); //获取到特定的文章
		echo '<div id="app_'.get_the_ID().'" class="uk-flex-top" uk-modal="bg-close:false">';
		echo '<div class="uk-modal-dialog  uk-margin-auto-vertical">';
		echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
		echo '<div class="uk-modal-body">';
		echo '<div id="py-quick-view-content" class="woocommerce py-quick-view-single-product">';
		echo '<div class="product content-inner">';
		echo '<div id="product-'.get_the_ID().'" class="nav-in-title product type-product post-'.get_the_ID().' status-publish first instock product_cat-tshirts has-post-thumbnail shipping-taxable purchasable product-type-simple">';
		echo '<div class="customify-grid wc-layout-columns"> ';


		echo '<div class="media-product-media customify-col-6_md-6_sm-12_xs-12" >';

		echo woocommerce_show_product_images();
		
		
		echo '</div><div class="summary entry-summary  customify-col-6_md-6_sm-12_xs-12">';

		echo '<a class="py-img" href="'.get_permalink().'"><h2 class="woocommerce-loop-product__title">'.get_the_title().'</h2></a>';

		
		// Meta data.
		// echo wc_get_formatted_cart_item_data( $the_query ); // PHPCS: XSS ok.
		
		// echo woocommerce_template_single_meta();




		echo '<div class="py-toggle"><div><span class="price">';

		echo woocommerce_template_single_price();

		echo '</span></div></div>';

		echo wc_get_stock_html( $the_query );

		echo woocommerce_template_single_sharing();

		echo woocommerce_template_single_excerpt();
		
		// echo woocommerce_quantity_input();


		// echo '<a href="?add-to-cart='.get_the_ID().'" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="'.get_the_ID().'" data-product_sku="woo-hoodie-with-zipper" aria-label="添加“'.get_the_title().'” 到您的购物车" rel="nofollow"><span class="button-label">加入购物车</span></a>';

		// echo woocommerce_single_variation_add_to_cart_button();
		
		echo '<div id="button_'.get_the_ID().'">';
		echo woocommerce_template_single_add_to_cart();
		echo "</div>";

		//echo woocommerce_simple_add_to_cart();   //有货显示无货不显示

		// echo woocommerce_product_description_tab(); 描述

		
		echo '</div></div></div></div>';
		echo '<div id="py-quick-view-loading" class="woocommerce py-quick-view-single-product __null"><div class="product uk-grid"><div class="py-product-gallery uk-width-1-1 uk-width-1-2@m"><div class="img"></div></div><div class="uk-width-1-1 uk-width-1-2@m"><h1 class="product-title product_title entry-title"></h1><p class="price"></p><button class="uk-button"></button></div></div></div>';
		echo '</div>';
		echo '<div class="uk-modal-footer uk-text-center"><a id="py-quick-view-details" class="uk-link-muted" href="'.get_permalink().'">VIEW FULL DETAILS</a></div>';
		echo '</div></div></div>';
	endwhile;
endif;
 
// 重置请求数据
wp_reset_postdata(); 


?>
</div>

<div><!-- #.customify-grid -->
	<div><!-- #.customify-container -->
<main>
<?php
get_footer();