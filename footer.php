<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

?>              <?php do_action( 'customify/main/after' ); ?>
			</main><!-- #main -->
			<?php do_action( 'customify/sidebars' ); ?>
		</div><!-- #.customify-grid -->
	</div><!-- #.customify-container -->
</div><!-- #content -->
<?php
/**
 * Hook before site content
 *
 * @since 0.2.2
 */
do_action( 'customify/after-site-content' );

do_action( 'customify/site-end/before' );
if ( ! customify_is_e_theme_location( 'footer' ) ) {
	/**
	 * Site end
	 *
	 * @hooked customify_customize_render_footer - 10
	 *
	 * @see customify_customize_render_footer
	 */
	do_action( 'customify/site-end' );
}
do_action( 'customify/site-end/after' );

?>
</div>

<!-- #page -->

<footer class="py-footer">
    <div class="wp uk-section uk-section-default uk-padding-remove">
        <div class="footer-box uk-grid-match uk-flex">
            <div class="py-footer-logo uk-flex uk-flex-middle uk-flex-center" >
                <a href="<?php echo home_url();?>" class="uk-logo"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="uk-flex-1">
               <div class="item uk-flex uk-flex-between">
                    <div>
                        <h4>SHOP GUIDE</h4>
                        <div class="menu-shop-guide-container">
							<ul id="nav-shop-guide" class="uk-nav">
								<?php
									$taxonomy     = 'product_cat';
									$orderby      = 'name';  
									$show_count   = 0;      // 1 for yes, 0 for no
									$pad_counts   = 0;      // 1 for yes, 0 for no
									$hierarchical = 0;      // 1 for yes, 0 for no  
									$title        = '';  
									$empty        = 0;
									$args = array(
									'taxonomy'     => $taxonomy,
									'orderby'      => $orderby,
									'show_count'   => $show_count,
									'pad_counts'   => $pad_counts,
									'hierarchical' => $hierarchical,
									'title_li'     => $title,
									'hide_empty'   => $empty
									);
									?>
									<?php $all_categories = get_categories( $args );

									//print_r($all_categories);
									foreach ($all_categories as $cat) {
										//print_r($cat);
										if($cat->category_parent == 0) {
											$category_id = $cat->term_id;
									?>     
									<?php       
											echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>'; ?>
										<?php }     
									}
									?>


							</ul>
						</div>
					</div>
                    
                    <div>
                        <h4>CUSTOMER SERVICE</h4>
                        <div class="menu-customer_service-container">
							<ul id="nav-customer-service" class="uk-nav">
			                    <ul class="sitemap-list">

									<li><a href="https://www.aoogeek.com/index.php/contact-us/">Contact Us</a></li>
									<li><a href="https://www.aoogeek.com/index.php/privacy-policy/">Privacy Policy</a></li>
									<li><a href="https://www.aoogeek.com/index.php/return-refund-policy/">Return &amp; Refund Policy</a></li>
									<li><a href="https://www.aoogeek.com/index.php/terms-of-service/">Terms of service</a></li>
								</ul>
							</ul>
						</div>                    
					</div>
                                        
                    <!-- <div>
                        <h4>SUBSCRIBE TODAY!</h4>
                        <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="zh-CN" dir="ltr">
						<div class="screen-reader-response"></div>
						
					</div> -->
					<div class="py_diy_social py-customize-item uk-margin">
						<h4>FOLLOW US ON SOCIAL MEDIA</h4>
						<div>
							<ul class="uk-iconnav">
								<li>
									<a href="#" class="pyf pyf-youxiang" uk-tooltip="title: our email; pos: bottom" target="_blank"></a>
								</li>
								<li>
									<a href="#" class="pyf pyf-facebook-box-fill" uk-tooltip="title: Follow Us; pos: bottom" target="_blank"></a></li><li><a href="" class="pyf " uk-tooltip="title: ; pos: bottom" target="_blank"></a>
								</li>
								<li>
									<a href="" class="pyf " uk-tooltip="title: ; pos: bottom" target="_blank"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <div class="py-copyright uk-flex uk-flex-between uk-text-meta uk-flex-middle ">
	<div style="width:100%;font-size: 1rem;text-align: center;padding: 0.8rem;">Copyright © <?php echo (new DateTime)->format("Y");?> <a href="<?php echo home_url();?>"><?php bloginfo( 'name' ); ?> All rights reserved.</a></div>
</div>
</div>
</footer>




<div id="py-nav-mobile" uk-offcanvas="overlay: true;flip: true">
	<div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-center">
		<div class="menu-header_menu-container">
			<ul id="nav-top-mobile" class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
				<li><a href="<?php echo home_url();?>/index.php/shop/">All Products</a></li>
				<li><a href="<?php echo home_url();?>/index.php/contact-us/">Contact Us</a></li>
				<li><a href="<?php echo home_url();?>/index.php/my-account/">my account</a></li>
				<li><a href="<?php echo home_url();?>/index.php/cart/">Cart</a></li>
			</ul>
		</div>		
	</div>
</div>

<div id="py-mini-cart" uk-offcanvas="flip: true; overlay: true;">
	<div class="uk-offcanvas-bar">
		<div class="widget_shopping_cart_content">

		</div>
	</div>
</div>

<div id="google_translate_element"></div>


<?php
if(!is_account_page() && !is_checkout() && !is_cart()){

?>



<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" aria-label="关闭(Esc)"></button>
				<button class="pswp__button pswp__button--share" aria-label="分享"></button>
				<button class="pswp__button pswp__button--fs" aria-label="切换全屏模式"></button>
				<button class="pswp__button pswp__button--zoom" aria-label="缩放"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" aria-label="前一个 (向左的箭头)"></button>
			<button class="pswp__button pswp__button--arrow--right" aria-label="后一个 (向右的箭头)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>

<?php
}
?>

<?php wp_footer(); ?>

<?php
if(!is_account_page() && !is_checkout() && !is_cart()){

?>

<link rel="stylesheet" href="/wp-content/themes/wordpress-zt/assets/css/photoswipe.css';?>">
<link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.css">
<script type='text/javascript' src='/wp-includes/js/comment-reply.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21'></script>
<script type='text/javascript' src='/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2'></script>
<script type='text/javascript' src='/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"\u8bf7\u9009\u62e9\u8bc4\u5206","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>

<?php
}
?>

<?php
if(!is_product() && !is_account_page() && !is_checkout() && !is_cart()){
	echo "<script type='text/javascript' src='/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js'></script>";
}

if(is_product()){
	echo "<script type='text/javascript' src='/wp-content/themes/wordpress-zt/assets/js/reviews.js'></script>";
}

?>





</body>
</html>


