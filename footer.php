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
							<?php

								$cats = get_categories();

								foreach ( $cats as $cat ) {

								query_posts( 'showposts=10&cat=' . $cat->cat_ID );

								?>

								<!-- <h3><php echo $cat->cat_name; ?></h3> -->

								<ul class="sitemap-list">

									<?php while ( have_posts() ) { the_post(); ?>

									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

									<?php } wp_reset_query(); ?>

								</ul>

								<?php } ?>

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
	<div>Copyright © <?php echo (new DateTime)->format("Y");?> <a href="<?php echo home_url();?>"><?php bloginfo( 'name' ); ?> All rights reserved.</a></div>
	<ul class="pyf-pay uk-flex">
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifuamex"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifudiscover"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifujcb"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifumastercard"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifupaypal"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifuunionpay"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifuvisa"></use>
			</svg>
		</li>
		<li>
			<svg aria-hidden="true">
				<use xlink:href="#pyf-pay-icon_zhifudinersclub"></use>
			</svg>
		</li>
	</ul>
</div>
</div>
</footer>





<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HTPBRR" height="0" width="0" style="display:none;visibility:hidden">
	</iframe>
</noscript>



<div id="py-nav-mobile" uk-offcanvas="overlay: true;flip: true">
	<div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-center">
		<div class="menu-header_menu-container">
			<ul id="nav-top-mobile" class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
				<li><a href="<?php echo home_url();?>/index.php/shop/">All Products</a></li>
				<li><a href="<?php echo home_url();?>/?page_id=3&preview=true">Contact Us</a></li>
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


<?php wp_footer(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/photoswipe.css';?>">
<link rel="stylesheet" href="<?php echo home_url();?>/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.css">


<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/money.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/accounting.min.js?ver=0.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_currency_converter_inline_params = {"current_currency":"USD","symbol_positions":{"CNY":"left","HKD":"left","USD":"left","EUR":"left","AUD":"left","CAD":"left","DEM":"left","JPY":"left"}};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/conversion_inline.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_currency_converter_params = {"current_currency":"USD","currencies":"{\"AED\":\"\u062f.\u0625\",\"AFN\":\"\u060b\",\"ALL\":\"L\",\"AMD\":\"AMD\",\"ANG\":\"\u0192\",\"AOA\":\"Kz\",\"ARS\":\"$\",\"AUD\":\"$\",\"AWG\":\"Afl.\",\"AZN\":\"AZN\",\"BAM\":\"KM\",\"BBD\":\"$\",\"BDT\":\"\u09f3\u00a0\",\"BGN\":\"\u043b\u0432.\",\"BHD\":\".\u062f.\u0628\",\"BIF\":\"Fr\",\"BMD\":\"$\",\"BND\":\"$\",\"BOB\":\"Bs.\",\"BRL\":\"R$\",\"BSD\":\"$\",\"BTC\":\"\u0e3f\",\"BTN\":\"Nu.\",\"BWP\":\"P\",\"BYR\":\"Br\",\"BYN\":\"Br\",\"BZD\":\"$\",\"CAD\":\"$\",\"CDF\":\"Fr\",\"CHF\":\"CHF\",\"CLP\":\"$\",\"CNY\":\"\u00a5\",\"COP\":\"$\",\"CRC\":\"\u20a1\",\"CUC\":\"$\",\"CUP\":\"$\",\"CVE\":\"$\",\"CZK\":\"K\u010d\",\"DJF\":\"Fr\",\"DKK\":\"DKK\",\"DOP\":\"RD$\",\"DZD\":\"\u062f.\u062c\",\"EGP\":\"EGP\",\"ERN\":\"Nfk\",\"ETB\":\"Br\",\"EUR\":\"\u20ac\",\"FJD\":\"$\",\"FKP\":\"\u00a3\",\"GBP\":\"\u00a3\",\"GEL\":\"\u20be\",\"GGP\":\"\u00a3\",\"GHS\":\"\u20b5\",\"GIP\":\"\u00a3\",\"GMD\":\"D\",\"GNF\":\"Fr\",\"GTQ\":\"Q\",\"GYD\":\"$\",\"HKD\":\"$\",\"HNL\":\"L\",\"HRK\":\"kn\",\"HTG\":\"G\",\"HUF\":\"Ft\",\"IDR\":\"Rp\",\"ILS\":\"\u20aa\",\"IMP\":\"\u00a3\",\"INR\":\"\u20b9\",\"IQD\":\"\u0639.\u062f\",\"IRR\":\"\ufdfc\",\"IRT\":\"\u062a\u0648\u0645\u0627\u0646\",\"ISK\":\"kr.\",\"JEP\":\"\u00a3\",\"JMD\":\"$\",\"JOD\":\"\u062f.\u0627\",\"JPY\":\"\u00a5\",\"KES\":\"KSh\",\"KGS\":\"\u0441\u043e\u043c\",\"KHR\":\"\u17db\",\"KMF\":\"Fr\",\"KPW\":\"\u20a9\",\"KRW\":\"\u20a9\",\"KWD\":\"\u062f.\u0643\",\"KYD\":\"$\",\"KZT\":\"KZT\",\"LAK\":\"\u20ad\",\"LBP\":\"\u0644.\u0644\",\"LKR\":\"\u0dbb\u0dd4\",\"LRD\":\"$\",\"LSL\":\"L\",\"LYD\":\"\u0644.\u062f\",\"MAD\":\"\u062f.\u0645.\",\"MDL\":\"MDL\",\"MGA\":\"Ar\",\"MKD\":\"\u0434\u0435\u043d\",\"MMK\":\"Ks\",\"MNT\":\"\u20ae\",\"MOP\":\"P\",\"MRU\":\"UM\",\"MUR\":\"\u20a8\",\"MVR\":\".\u0783\",\"MWK\":\"MK\",\"MXN\":\"$\",\"MYR\":\"RM\",\"MZN\":\"MT\",\"NAD\":\"$\",\"NGN\":\"\u20a6\",\"NIO\":\"C$\",\"NOK\":\"kr\",\"NPR\":\"\u20a8\",\"NZD\":\"$\",\"OMR\":\"\u0631.\u0639.\",\"PAB\":\"B\\\/.\",\"PEN\":\"S\\\/\",\"PGK\":\"K\",\"PHP\":\"\u20b1\",\"PKR\":\"\u20a8\",\"PLN\":\"z\u0142\",\"PRB\":\"\u0440.\",\"PYG\":\"\u20b2\",\"QAR\":\"\u0631.\u0642\",\"RON\":\"lei\",\"RSD\":\"\u0434\u0438\u043d.\",\"RUB\":\"\u20bd\",\"RWF\":\"Fr\",\"SAR\":\"\u0631.\u0633\",\"SBD\":\"$\",\"SCR\":\"\u20a8\",\"SDG\":\"\u062c.\u0633.\",\"SEK\":\"kr\",\"SGD\":\"$\",\"SHP\":\"\u00a3\",\"SLL\":\"Le\",\"SOS\":\"Sh\",\"SRD\":\"$\",\"SSP\":\"\u00a3\",\"STN\":\"Db\",\"SYP\":\"\u0644.\u0633\",\"SZL\":\"L\",\"THB\":\"\u0e3f\",\"TJS\":\"\u0405\u041c\",\"TMT\":\"m\",\"TND\":\"\u062f.\u062a\",\"TOP\":\"T$\",\"TRY\":\"\u20ba\",\"TTD\":\"$\",\"TWD\":\"NT$\",\"TZS\":\"Sh\",\"UAH\":\"\u20b4\",\"UGX\":\"UGX\",\"USD\":\"$\",\"UYU\":\"$\",\"UZS\":\"UZS\",\"VEF\":\"Bs F\",\"VES\":\"Bs.S\",\"VND\":\"\u20ab\",\"VUV\":\"Vt\",\"WST\":\"T\",\"XAF\":\"CFA\",\"XCD\":\"$\",\"XOF\":\"CFA\",\"XPF\":\"Fr\",\"YER\":\"\ufdfc\",\"ZAR\":\"R\",\"ZMW\":\"ZK\"}","rates":{"AED":3.6732,"AFN":76.81356,"ALL":105.441215,"AMD":481.616228,"ANG":1.794073,"AOA":636.73,"ARS":77.1142,"AUD":1.396576,"AWG":1.8,"AZN":1.7025,"BAM":1.662456,"BBD":2,"BDT":84.752097,"BGN":1.662835,"BHD":0.377031,"BIF":1932.493072,"BMD":1,"BND":1.358708,"BOB":6.901611,"BRL":5.6127,"BSD":1,"BTC":9.4617949e-5,"BTN":73.25502,"BWP":11.514809,"BYN":2.621878,"BZD":2.014645,"CAD":1.323539,"CDF":1960.707243,"CHF":0.917872,"CLF":0.028797,"CLP":794.599933,"CNH":6.73409,"CNY":6.7902,"COP":3833.725595,"CRC":601.75006,"CUC":0.999588,"CUP":25.75,"CVE":94.18,"CZK":23.0618,"DJF":177.936824,"DKK":6.330232,"DOP":58.390031,"DZD":129.05,"EGP":15.7066,"ERN":15.000059,"ETB":36.9,"EUR":0.850588,"FJD":2.139,"FKP":0.773575,"GBP":0.773575,"GEL":3.235,"GGP":0.773575,"GHS":5.797186,"GIP":0.773575,"GMD":51.8,"GNF":9787.355475,"GTQ":7.776125,"GYD":209.112104,"HKD":7.75007,"HNL":24.62,"HRK":6.4366,"HTG":63.06753,"HUF":304.185,"IDR":14712.128415,"ILS":3.39205,"IMP":0.773575,"INR":73.233495,"IQD":1193.191717,"IRR":42105,"ISK":138.48,"JEP":0.773575,"JMD":143.270826,"JOD":0.709,"JPY":105.9815,"KES":108.445138,"KGS":79.383349,"KHR":4107.379606,"KMF":418.600229,"KPW":900,"KRW":1151.83,"KWD":0.306305,"KYD":0.832905,"KZT":429.219144,"LAK":9214.753342,"LBP":1511.193552,"LKR":184.404283,"LRD":198.54995,"LSL":16.645,"LYD":1.367633,"MAD":9.256662,"MDL":16.926297,"MGA":3900,"MKD":52.414879,"MMK":1289.829576,"MNT":2860.995884,"MOP":7.978138,"MRO":357,"MRU":38.39743,"MUR":39.752451,"MVR":15.4,"MWK":750.98032,"MXN":21.428829,"MYR":4.1525,"MZN":72.497999,"NAD":16.645,"NGN":384.8,"NIO":34.66,"NOK":9.283445,"NPR":117.205912,"NZD":1.517681,"OMR":0.384986,"PAB":1,"PEN":3.582242,"PGK":3.5025,"PHP":48.486189,"PKR":163.864991,"PLN":3.81725,"PYG":6997.700576,"QAR":3.639223,"RON":4.1464,"RSD":99.995,"RUB":77.9367,"RWF":976.103678,"SAR":3.751032,"SBD":8.166667,"SCR":18.104251,"SDG":55.3,"SEK":8.887529,"SGD":1.358328,"SHP":0.773575,"SLL":9809.999914,"SOS":578.163663,"SRD":14.154,"SSP":130.26,"STD":21031.906016,"STN":20.95,"SVC":8.745543,"SYP":511.923004,"SZL":16.645,"THB":31.17,"TJS":10.314755,"TMT":3.5,"TND":2.762,"TOP":2.31385,"TRY":7.92016,"TTD":6.765322,"TWD":28.647,"TZS":2320,"UAH":28.317829,"UGX":3698.150473,"USD":1,"UYU":42.504956,"UZS":10335,"VEF":248487.642241,"VES":437172.5,"VND":23209.455005,"VUV":113.621082,"WST":2.637786,"XAF":557.949063,"XAG":0.04168111,"XAU":0.00052841,"XCD":2.70255,"XDR":0.708157,"XOF":557.949063,"XPD":0.00042365,"XPF":101.502132,"XPT":0.00115474,"YER":250.399984,"ZAR":16.630496,"ZMW":20.0646,"ZWL":322},"base":"USD","currency_format_symbol":"$","currency":"USD","currency_pos":"left","num_decimals":"2","trim_zeros":"","thousand_sep":",","decimal_sep":".","i18n_oprice":"Original price:","zero_replace":".00","currency_rate_default":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/conversion.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>


<script type='text/javascript' src='<?php echo home_url();?>/wp-includes/js/comment-reply.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='<?php echo home_url();?>/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21'></script>
<script type='text/javascript' src='<?php echo home_url();?>/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2'></script>
<script type='text/javascript' src='<?php echo home_url();?>/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='<?php echo home_url();?>/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"\u8bf7\u9009\u62e9\u8bc4\u5206","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>


<?php
if(!is_product()){
	echo "<script type='text/javascript' src='".home_url()."/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js'></script>";
}


?>


</body>
</html>
<script>
var py = new Vue({
  el: '#uk-badge',
  data: {
    message: <?php echo count(WC()->cart->get_cart());?>
  }
})







</script>


