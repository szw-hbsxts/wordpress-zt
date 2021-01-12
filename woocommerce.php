<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package customify
 */

get_header(); ?>
<div class="py-container content-inner" id="dsjka">
	<?php

	do_action( 'customify/content/before' );
	woocommerce_content();
	do_action( 'customify/content/after' );
	
	?>
</div><!-- #.content-inner -->


<?php
get_footer();

?>

<?php

function trgj($id){
	  //php 语法
  //echo 输出
  //php可以嵌套到html中
  //php的连接符是.  不是+
  //$_GET['name']  获取get方式请求的参数  参数要用单引号
  //isset()  判断该函数中的参数值是否存在
 // echo "get请求，不传递参数<br/>";
  //echo "来自php的数据";
  //echo "<br/>";
  //$id = $_GET['id'];
  //echo $id;
  //var_dump(get_product($id));

  


$args = array(
	// 用于查询的参数或者参数集合
	'post_type'=>'product',
	'p' => $id
);

 
// 自定义查询
$the_query = new WP_Query( $args );
// 判断查询的结果，检查是否有文章
if ( $the_query->have_posts() ) :
	// 通过查询的结果，开始主循环
	while ( $the_query->have_posts() ) :
		$the_query->the_post(); //获取到特定的文章
		echo '<li id="app_'.get_the_ID().'" class="uk-flex-top uk-modal" uk-modal="bg-close:false" style="display:none;" dataid="#button_'.get_the_ID().'">';
		echo '<div class="uk-modal-dialog  uk-margin-auto-vertical">';
		echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
		echo '<div class="uk-modal-body">';
		echo '<div id="py-quick-view-content" class="woocommerce py-quick-view-single-product">';
		echo '<div class="product content-inner">';
		echo '<div id="product-'.get_the_ID().'" class="nav-in-title product type-product post-'.get_the_ID().' status-publish first instock product_cat-tshirts has-post-thumbnail shipping-taxable purchasable product-type-simple">';
		echo '<div class="customify-grid wc-layout-columns"> ';


		echo '<div class="media-product-media customify-col-6_md-6_sm-12_xs-12" >';

		echo woocommerce_show_product_loop_sale_flash();
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
		echo '<div id="py-quick-view-loading" class="woocommerce py-quick-view-single-product __null"><div class="product uk-grid"><div class="py-product-gallery uk-width-1-1 uk-width-1-2@m"><div class="img"></div></div><div class="uk-width-1-1 uk-width-1-2@m"><h1 class="product-title product_title entry-title"></h1><p class="price"></p></div></div></div>';
		echo '</div>';
		echo '<div class="uk-modal-footer uk-text-center"><a id="py-quick-view-details" class="uk-link-muted" href="'.get_permalink().'">VIEW FULL DETAILS</a></div>';
		echo '</div></div></li>';
	endwhile;
endif;
 
// 重置请求数据
wp_reset_postdata(); 


}

?>



