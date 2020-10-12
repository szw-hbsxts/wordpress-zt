<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel='stylesheet' id='papaya-shopper-css'  href="<?php echo get_template_directory_uri().'/assets/css/app.css';?>" type='text/css' media='all' />
	<script>
		var papaya = {
			"ajax_url":"\/wp-admin\/admin-ajax.php",
			"is_mobile":false,
			"page":"home",
			"_use_queue":[],
			"guide_pay":true,
			"checkout_url":"\/checkout\/",
			"is_add_cart_shake":true
			};
	</script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body class="home blog theme-papaya-shopper woocommerce-no-js py- py-n01">
	<header class="py-header" >
	<div class="py-header-nav" uk-sticky >
		<nav class="wp uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar>
			<div class="nav-overlay uk-navbar-left">
				<a class="uk-navbar-item uk-logo notranslate" href="<?php echo home_url();?>">
				<?php bloginfo( 'name' ); ?>
				</a>
				<div class="uk-visible@s">
					<div class="menu-header_menu-container">
						<ul id="nav-top" class="uk-navbar-nav">
							<li id="menu-item-13"><a href="<?php echo home_url();?>/index.php/shop/">All Products</a></li>
							<li id="menu-item-2676"><a href="<?php echo home_url();?>/index.php/contact-us/">Contact Us</a></li>
							<li id="menu-item-14"><a href="<?php echo home_url();?>/index.php/my-account/">my account</a></li>
							<li id="menu-item-3195"><a href="<?php echo home_url();?>/index.php/cart/">Cart</a></li>
						</ul>
					</div>				
				</div>
			</div>
			<div class="nav-overlay uk-navbar-right" >
				<a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#" uk-toggle="target: #py-nav-mobile"></a>
				<div class="py-icon-nav">
					<ul class="uk-iconnav">
						<li>
							<a href="https://funpinpin.com/housebeauty/my-account/">
								<i class="pyf pyf-yonghu"></i>
							</a>
						</li>
						<li>
							<a href="#"> 
								<i class="pyf pyf-sousuo"></i>
							</a>
							<div class="py-search-input-box uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-dropdown;boundary: !nav;offset:30">
								<div class="uk-grid-small uk-flex-middle" uk-grid>
									<div class="uk-width-expand">
										<?php get_search_form(); ?>
									</div>
								</div>
							</div>
						</li>
						<li class=""> 
							<a href="javascript:;" >
								<i class="pyf pyf-huabanbeifen4"></i>
							</a>
							<div class="py-header-language-dropdown uk-hi" uk-dropdown="mode: click;offset:30" >
								<div class="py-language" >
    								<h4>Location</h4>
    								<button class="uk-button uk-button-default notranslate" type="button"> - - </button>
   									<div id="py-language-dropdown" class=" notranslate" uk-dropdown="offset:-19;mode: click;pos: bottom-center;boundary:.py-language;boundary-align: true">
									<ul class="uk-nav uk-dropdown-nav" data-default="" >    
										<li >
											<a data-lang="en">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_USA"></use>
													</svg>
													<span>English</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="fi">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_FIN"></use>
													</svg>
													<span>Suomi</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="fr">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_FRA"></use>
													</svg>
													<span>Français</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="de">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_DEU"></use>
													</svg>
													<span>Deutsch</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="el">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_GRC"></use>
													</svg>
													<span>Ελληνικά</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="it">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_ITA"></use>
													</svg>
													<span>Italiano</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="ja">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_JPN"></use>
													</svg>
													<span>日本語</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="ru">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_RUS"></use>
													</svg>
													<span>Русский</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="es">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_ESP"></use>
													</svg>
													<span>Español</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="zh-CN">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_CHN"></use>
													</svg>
													<span>简体中文</span>
												</div>
											</a>
										</li>
										
										<li >
															<a data-lang="zh-TW">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_HKG"></use>
													</svg>
													<span>繁體中文</span>
												</div>
											</a>
										</li>
										
									</ul>
    							</div>
							</div>
							<div class="py-currency" >
								<h4>Currency</h4>
								<button class="uk-button uk-button-default notranslate" type="button"> - - </button>
								<div id="py-currency-dropdown" class=" notranslate" uk-dropdown="offset:-19;mode: click;pos: bottom-center;boundary:.py-currency;boundary-align: true" >
									<ul class="uk-nav uk-dropdown-nav currency_switcher">
										<li>
											<a href="javascript:;" class="default currency-USD" data-currencycode="USD">
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_USA"></use>
													</svg> 
													<span>USD</span>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:;" class="currency-CNY" data-currencycode="CNY"> 
												<div>
													<svg class="py-language-svg" aria-hidden="true">
														<use xlink:href="#py-nf-world-flag_CHN"></use></svg> <span>CNY</span></div></a></li><li><a href="javascript:;" class="currency-HKD" data-currencycode="HKD"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_HKG"></use></svg> <span>HKD</span></div></a></li><li><a href="javascript:;" class="currency-EUR" data-currencycode="EUR"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_EuropeUnion"></use></svg> <span>EUR</span></div></a></li><li><a href="javascript:;" class="currency-AUD" data-currencycode="AUD"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_AUS"></use></svg> <span>AUD</span></div></a></li><li><a href="javascript:;" class="currency-CAD" data-currencycode="CAD"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_CAN"></use></svg> <span>CAD</span></div></a></li><li><a href="javascript:;" class="currency-DEM" data-currencycode="DEM"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_DEU"></use></svg> <span>DEM</span></div></a></li><li><a href="javascript:;" class="currency-JPY" data-currencycode="JPY"> <div><svg class="py-language-svg" aria-hidden="true"><use xlink:href="#py-nf-world-flag_JPN"></use></svg> <span>JPY</span></div></a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="py-header-cart">
							<a class="cart-customlocation" href="#py-mini-cart"uk-toggle>
							<i class="pyf pyf-gouwuche"></i>
							<span class="uk-badge">
							<?php echo count(WC()->cart->get_cart());?>
							</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
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
									echo '<li class="py-product product type-product post-3825 status-publish instock product_cat-beauty has-post-thumbnail taxable shipping-taxable purchasable product-type-variable">';
									echo '<div class="py-thumbnail uk-inline-clip uk-transition-toggle" tabindex="0">';
									echo '<a class="py-img" href="'.get_permalink().'">';
									echo woocommerce_show_product_loop_sale_flash();
									echo woocommerce_get_product_thumbnail().get_the_title().'</a>';
									echo '<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default uk-padding-remove"><p class="py-thumbnail-btn uk-margin-remove uk-flex "><a class="uk-button uk-button-primary" href="'.get_permalink().'" data-product_id="'.get_the_ID().'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">快速浏览</font></font></a></p></div></div>';
									echo '<a class="py-img" href="'.get_permalink().'"><h2 class="woocommerce-loop-product__title">'.get_the_title().'</h2></a>';
									// 要输出的内容，如标题、日期等 
									add_filter( 'woocommerce_variation_option_name', 'display_price_in_variation_option_name' );

									echo '<div class="py-toggle"><div><span class="price">';
									echo get_product(get_the_ID())->get_price_html();
									echo '</span><div class="link">
									<a href="'.get_permalink().'" data-quantity="1" class="product_type_variable add_to_cart_button uk-link" data-product_id="'.get_the_ID().'" data-product_sku="'.get_product(get_the_ID())->get_sku().'" aria-label="Select options for “'.get_the_title().'”" rel="nofollow">Select options</a></div></div></div></li>';
							 
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
									<a href="mailto:housebeauty@funpinpin.com" class="pyf pyf-youxiang" uk-tooltip="title: our email; pos: bottom" target="_blank"></a>
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


<!-- <php add_filter('show_admin_bar', '__return_false');?>
	
<php wp_footer(); ?> -->

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
		<div class="widget_shopping_cart_content ">
		<?php 

			if(count(WC()->cart->get_cart()) == 0){
				echo "<p class='woocommerce-mini-cart__empty-message'>No products in the cart.</p>";
			}else{
		
		?>
		<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
			<ul class="woocommerce-mini-cart cart_list product_list_widget">
				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					

					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<li class="woocommerce-mini-cart-item mini_cart_item">
								<a href="<?php echo  esc_url( $product_permalink );?>">
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

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						
							</li>
						<?php
					}
				}
				?>
			<?php do_action( 'woocommerce_after_cart_table' ); ?>
			</ul>
		</form>
			<div class="cart-collaterals">
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
		</div>
	</div>
</div>
<div id="app">
  {{ message }}
</div>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","qty_pm":"1"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var Customify_JS = {"is_rtl":"","css_media_queries":{"all":"%s","desktop":"%s","tablet":"@media screen and (max-width: 1024px) { %s }","mobile":"@media screen and (max-width: 568px) { %s }"},"sidebar_menu_no_duplicator":"1","wc_open_cart":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.wdp01.com/wp-content/themes/wordpress-zt/assets/js/compatibility/woocommerce.min.js?ver=0.3.5'></script>

</body>
</html>
<script>
console.log(<?php var_dump(WC()->cart->get_cart());?>);

</script>

