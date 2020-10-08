<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel='stylesheet' id='papaya-shopper-css'  href="<?php echo get_template_directory_uri().'/assets/css/app.css';?>" type='text/css' media='all' />
	<script type='text/javascript' src="<?php echo get_template_directory_uri().'/assets/js/admin_connect_with_stripe.js';?>"></script>
	<script type='text/javascript' src="<?php echo get_template_directory_uri().'/assets/js/js.cookie.min.js';?>"></script>
	<script type='text/javascript' src="<?php echo get_template_directory_uri().'/assets/js/jquery.bind-first-0.2.3.min.js';?>"></script>
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
								0
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
                                        
                    <div>
                        <h4>SUBSCRIBE TODAY!</h4>
                        <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="zh-CN" dir="ltr">
						<div class="screen-reader-response"></div>
						<?php
						try {
							echo wpm_form(1);
							} 
							catch (EmptyIterator $e) {
								echo '请安装邮箱订阅';
							} 
						?>
					</div>
					<div class="py_diy_social py-customize-item uk-margin">
						<h4>FOLLOW US ON SOCIAL MEDIA</h4>
						<div>
							<ul class="uk-iconnav">
								<li>
									<a href="mailto:housebeauty@funpinpin.com" class="pyf pyf-youxiang" uk-tooltip="title: our email; pos: bottom" target="_blank"></a>
								</li>
								<li>
									<a href="https://www.facebook.com/Housebeauty-101225984948119/" class="pyf pyf-facebook-box-fill" uk-tooltip="title: Follow Us; pos: bottom" target="_blank"></a></li><li><a href="" class="pyf " uk-tooltip="title: ; pos: bottom" target="_blank"></a>
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
<div id="py-quick-view-modal" class="uk-flex-top" uk-modal="bg-close:false">
    <div class="uk-modal-dialog  uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <div id="py-quick-view-content" class="woocommerce py-quick-view-single-product"> </div>
            <div id="py-quick-view-loading" class="woocommerce py-quick-view-single-product __null">
                <div class="product uk-grid">
                    <div class="py-product-gallery uk-width-1-1 uk-width-1-2@m">
                        <div class="img"></div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m">
                        <h1 class="product-title product_title entry-title"></h1>
                        <p class="price"></p>
                        <button class="uk-button"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer uk-text-center">
            <a id="py-quick-view-details" class="uk-link-muted" href="javascript:;">VIEW FULL DETAILS</a>
        </div>
    </div>
</div>
<noscript>
	 <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HTPBRR" height="0" width="0" style="display:none;visibility:hidden">
	</iframe>
</noscript>
<div id="py-quick-view-modal" class="uk-flex-top" uk-modal="bg-close:false">
    <div class="uk-modal-dialog  uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <div id="py-quick-view-content" class="woocommerce py-quick-view-single-product"> </div>
            <div id="py-quick-view-loading" class="woocommerce py-quick-view-single-product __null">
                <div class="product uk-grid">
                    <div class="py-product-gallery uk-width-1-1 uk-width-1-2@m">
                        <div class="img"></div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m">
                        <h1 class="product-title product_title entry-title"></h1>
                        <p class="price"></p>
                        <button class="uk-button"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-modal-footer uk-text-center">
            <a id="py-quick-view-details" class="uk-link-muted" href="javascript:;">VIEW FULL DETAILS</a>
        </div>
    </div>
</div>
<noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=253011309283888&ev=PageView&noscript=1" alt="facebook_pixel"></noscript>
<noscript><img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=253011309283888&ev=GeneralEvent&noscript=1&cd[post_type]=page&cd[content_name]=housebeauty" alt="facebook_pixel"></noscript>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	
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
				<button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" aria-label="Share"></button>
				<button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
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
			<button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
			<button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>
		<script type="text/javascript">
			var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A324%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fwp-content%5C%2Fuploads%5C%2Fhousebeauty%5C%2Fwoocommerce-placeholder-324x324.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22limitTags%22%3Afalse%2C%22hasTags%22%3Atrue%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A15%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A15%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%2C%7B%22term_id%22%3A42%2C%22name%22%3A%223C%22%2C%22slug%22%3A%223c%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A42%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2F3c%5C%2F%22%7D%2C%7B%22term_id%22%3A61%2C%22name%22%3A%22Acne%20removal%22%2C%22slug%22%3A%22acne-removal%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A61%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Facne-removal%5C%2F%22%7D%2C%7B%22term_id%22%3A21%2C%22name%22%3A%22Bait%22%2C%22slug%22%3A%22bait%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A21%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fbait%5C%2F%22%7D%2C%7B%22term_id%22%3A45%2C%22name%22%3A%22BEAUTY%22%2C%22slug%22%3A%22beauty%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A45%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A8%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fbeauty%5C%2F%22%7D%2C%7B%22term_id%22%3A53%2C%22name%22%3A%22Beauty%20%26amp%3B%20Health%22%2C%22slug%22%3A%22beauty-health%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A53%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fbeauty-health%5C%2F%22%7D%2C%7B%22term_id%22%3A131%2C%22name%22%3A%22bicycle%22%2C%22slug%22%3A%22bicycle%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A131%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fbicycle%5C%2F%22%7D%2C%7B%22term_id%22%3A33%2C%22name%22%3A%22Car%20accessories%22%2C%22slug%22%3A%22car-accessories%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A33%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A3%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fcar-accessories%5C%2F%22%7D%2C%7B%22term_id%22%3A46%2C%22name%22%3A%22Car%20tools%22%2C%22slug%22%3A%22car-tools%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A46%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fcar-tools%5C%2F%22%7D%2C%7B%22term_id%22%3A40%2C%22name%22%3A%22Cleaning%22%2C%22slug%22%3A%22cleaning%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A40%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fcleaning%5C%2F%22%7D%2C%7B%22term_id%22%3A112%2C%22name%22%3A%22DIY%26amp%3BTOY%22%2C%22slug%22%3A%22diytoy%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A112%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fdiytoy%5C%2F%22%7D%2C%7B%22term_id%22%3A43%2C%22name%22%3A%22Electronic%22%2C%22slug%22%3A%22electronic%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A43%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Felectronic%5C%2F%22%7D%2C%7B%22term_id%22%3A132%2C%22name%22%3A%22Fashion%20Style%22%2C%22slug%22%3A%22fashion-style%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A132%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Ffashion-style%5C%2F%22%7D%2C%7B%22term_id%22%3A22%2C%22name%22%3A%22Fishing%20rod%22%2C%22slug%22%3A%22fishing-rod%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A22%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Ffishing-rod%5C%2F%22%7D%2C%7B%22term_id%22%3A114%2C%22name%22%3A%22Gadget%22%2C%22slug%22%3A%22gadget%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A114%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fgadget%5C%2F%22%7D%2C%7B%22term_id%22%3A47%2C%22name%22%3A%22HOME%22%2C%22slug%22%3A%22home%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A47%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A16%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fhome%5C%2F%22%7D%2C%7B%22term_id%22%3A23%2C%22name%22%3A%22Home%20page%22%2C%22slug%22%3A%22home-page%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A23%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fhome-page%5C%2F%22%7D%2C%7B%22term_id%22%3A60%2C%22name%22%3A%22Household%22%2C%22slug%22%3A%22household%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A60%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fhousehold%5C%2F%22%7D%2C%7B%22term_id%22%3A48%2C%22name%22%3A%22jigsaw%20puzzles%22%2C%22slug%22%3A%22jigsaw-puzzles%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A48%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A25%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fjigsaw-puzzles%5C%2F%22%7D%2C%7B%22term_id%22%3A32%2C%22name%22%3A%22Kitchen%22%2C%22slug%22%3A%22kitchen%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A32%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fkitchen%5C%2F%22%7D%2C%7B%22term_id%22%3A93%2C%22name%22%3A%22Leggings%22%2C%22slug%22%3A%22leggings%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A93%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fleggings%5C%2F%22%7D%2C%7B%22term_id%22%3A50%2C%22name%22%3A%22pet%22%2C%22slug%22%3A%22pet%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A50%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fpet%5C%2F%22%7D%2C%7B%22term_id%22%3A49%2C%22name%22%3A%22PET%26amp%3BTOY%22%2C%22slug%22%3A%22pettoy%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A49%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fpettoy%5C%2F%22%7D%2C%7B%22term_id%22%3A24%2C%22name%22%3A%22puzzle%22%2C%22slug%22%3A%22puzzle%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A24%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fpuzzle%5C%2F%22%7D%2C%7B%22term_id%22%3A35%2C%22name%22%3A%22sofa%20covers%22%2C%22slug%22%3A%22sofa-covers%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A35%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fsofa-covers%5C%2F%22%7D%2C%7B%22term_id%22%3A29%2C%22name%22%3A%22Woman%22%2C%22slug%22%3A%22woman%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A29%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2Fproduct-category%5C%2Fwoman%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Ffunpinpin.com%5C%2Fhousebeauty%5C%2F%22%7D' ) );
		</script>
		<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<link rel='stylesheet' id='photoswipe-css'  href='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.css?ver=3.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.css?ver=3.7.0' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/funpinpin.com\/housebeauty\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.5'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/housebeauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/housebeauty\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/funpinpin.com\/housebeauty\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.7.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/housebeauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/housebeauty\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.7.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/housebeauty\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/housebeauty\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_342077da54a63f9ab7e8ca8c4763edd4","fragment_name":"wc_fragments_342077da54a63f9ab7e8ca8c4763edd4","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.7.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mailchimp_public_data = {"site_url":"https:\/\/funpinpin.com\/housebeauty","ajax_url":"https:\/\/funpinpin.com\/housebeauty\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.3.6'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-includes/js/wp-embed.min.js?ver=5.3.4'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/themes/papaya-shopper/includes/public/language/js/money.min.js?ver=0.1.3'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/themes/papaya-shopper/includes/public/language/js/accounting.min.js?ver=0.3.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_currency_converter_inline_params = {"current_currency":"USD","symbol_positions":{"CNY":"left","HKD":"left","USD":"left","EUR":"left","AUD":"left","CAD":"left","DEM":"left","JPY":"left"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/themes/papaya-shopper/includes/public/language/js/conversion_inline.min.js?ver=1.6.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_currency_converter_params = {"current_currency":"USD","currencies":"{\"AED\":\"\u062f.\u0625\",\"AFN\":\"\u060b\",\"ALL\":\"L\",\"AMD\":\"AMD\",\"ANG\":\"\u0192\",\"AOA\":\"Kz\",\"ARS\":\"$\",\"AUD\":\"$\",\"AWG\":\"Afl.\",\"AZN\":\"AZN\",\"BAM\":\"KM\",\"BBD\":\"$\",\"BDT\":\"\u09f3\u00a0\",\"BGN\":\"\u043b\u0432.\",\"BHD\":\".\u062f.\u0628\",\"BIF\":\"Fr\",\"BMD\":\"$\",\"BND\":\"$\",\"BOB\":\"Bs.\",\"BRL\":\"R$\",\"BSD\":\"$\",\"BTC\":\"\u0e3f\",\"BTN\":\"Nu.\",\"BWP\":\"P\",\"BYR\":\"Br\",\"BYN\":\"Br\",\"BZD\":\"$\",\"CAD\":\"$\",\"CDF\":\"Fr\",\"CHF\":\"CHF\",\"CLP\":\"$\",\"CNY\":\"\u00a5\",\"COP\":\"$\",\"CRC\":\"\u20a1\",\"CUC\":\"$\",\"CUP\":\"$\",\"CVE\":\"$\",\"CZK\":\"K\u010d\",\"DJF\":\"Fr\",\"DKK\":\"DKK\",\"DOP\":\"RD$\",\"DZD\":\"\u062f.\u062c\",\"EGP\":\"EGP\",\"ERN\":\"Nfk\",\"ETB\":\"Br\",\"EUR\":\"\u20ac\",\"FJD\":\"$\",\"FKP\":\"\u00a3\",\"GBP\":\"\u00a3\",\"GEL\":\"\u20be\",\"GGP\":\"\u00a3\",\"GHS\":\"\u20b5\",\"GIP\":\"\u00a3\",\"GMD\":\"D\",\"GNF\":\"Fr\",\"GTQ\":\"Q\",\"GYD\":\"$\",\"HKD\":\"$\",\"HNL\":\"L\",\"HRK\":\"kn\",\"HTG\":\"G\",\"HUF\":\"Ft\",\"IDR\":\"Rp\",\"ILS\":\"\u20aa\",\"IMP\":\"\u00a3\",\"INR\":\"\u20b9\",\"IQD\":\"\u0639.\u062f\",\"IRR\":\"\ufdfc\",\"IRT\":\"\u062a\u0648\u0645\u0627\u0646\",\"ISK\":\"kr.\",\"JEP\":\"\u00a3\",\"JMD\":\"$\",\"JOD\":\"\u062f.\u0627\",\"JPY\":\"\u00a5\",\"KES\":\"KSh\",\"KGS\":\"\u0441\u043e\u043c\",\"KHR\":\"\u17db\",\"KMF\":\"Fr\",\"KPW\":\"\u20a9\",\"KRW\":\"\u20a9\",\"KWD\":\"\u062f.\u0643\",\"KYD\":\"$\",\"KZT\":\"KZT\",\"LAK\":\"\u20ad\",\"LBP\":\"\u0644.\u0644\",\"LKR\":\"\u0dbb\u0dd4\",\"LRD\":\"$\",\"LSL\":\"L\",\"LYD\":\"\u0644.\u062f\",\"MAD\":\"\u062f.\u0645.\",\"MDL\":\"MDL\",\"MGA\":\"Ar\",\"MKD\":\"\u0434\u0435\u043d\",\"MMK\":\"Ks\",\"MNT\":\"\u20ae\",\"MOP\":\"P\",\"MRU\":\"UM\",\"MUR\":\"\u20a8\",\"MVR\":\".\u0783\",\"MWK\":\"MK\",\"MXN\":\"$\",\"MYR\":\"RM\",\"MZN\":\"MT\",\"NAD\":\"$\",\"NGN\":\"\u20a6\",\"NIO\":\"C$\",\"NOK\":\"kr\",\"NPR\":\"\u20a8\",\"NZD\":\"$\",\"OMR\":\"\u0631.\u0639.\",\"PAB\":\"B\\\/.\",\"PEN\":\"S\\\/\",\"PGK\":\"K\",\"PHP\":\"\u20b1\",\"PKR\":\"\u20a8\",\"PLN\":\"z\u0142\",\"PRB\":\"\u0440.\",\"PYG\":\"\u20b2\",\"QAR\":\"\u0631.\u0642\",\"RON\":\"lei\",\"RSD\":\"\u0434\u0438\u043d.\",\"RUB\":\"\u20bd\",\"RWF\":\"Fr\",\"SAR\":\"\u0631.\u0633\",\"SBD\":\"$\",\"SCR\":\"\u20a8\",\"SDG\":\"\u062c.\u0633.\",\"SEK\":\"kr\",\"SGD\":\"$\",\"SHP\":\"\u00a3\",\"SLL\":\"Le\",\"SOS\":\"Sh\",\"SRD\":\"$\",\"SSP\":\"\u00a3\",\"STN\":\"Db\",\"SYP\":\"\u0644.\u0633\",\"SZL\":\"L\",\"THB\":\"\u0e3f\",\"TJS\":\"\u0405\u041c\",\"TMT\":\"m\",\"TND\":\"\u062f.\u062a\",\"TOP\":\"T$\",\"TRY\":\"\u20ba\",\"TTD\":\"$\",\"TWD\":\"NT$\",\"TZS\":\"Sh\",\"UAH\":\"\u20b4\",\"UGX\":\"UGX\",\"USD\":\"$\",\"UYU\":\"$\",\"UZS\":\"UZS\",\"VEF\":\"Bs F\",\"VES\":\"Bs.S\",\"VND\":\"\u20ab\",\"VUV\":\"Vt\",\"WST\":\"T\",\"XAF\":\"CFA\",\"XCD\":\"$\",\"XOF\":\"CFA\",\"XPF\":\"Fr\",\"YER\":\"\ufdfc\",\"ZAR\":\"R\",\"ZMW\":\"ZK\"}","rates":{"AED":3.673,"AFN":76.800005,"ALL":105.483355,"AMD":481.616228,"ANG":1.79479,"AOA":633.71,"ARS":77.1135,"AUD":1.400119,"AWG":1.8,"AZN":1.7025,"BAM":1.6631,"BBD":2,"BDT":84.784888,"BGN":1.6628,"BHD":0.376757,"BIF":1935,"BMD":1,"BND":1.359234,"BOB":6.904164,"BRL":5.6058,"BSD":1,"BTC":9.4129712e-5,"BTN":73.282728,"BWP":11.519411,"BYN":2.622925,"BZD":2.01545,"CAD":1.32787,"CDF":1965.5,"CHF":0.91669,"CLF":0.02887,"CLP":796.6,"CNH":6.731115,"CNY":6.7905,"COP":3838.91,"CRC":601.990695,"CUC":0.999987,"CUP":25.75,"CVE":94.18,"CZK":23.0132,"DJF":178,"DKK":6.323633,"DOP":58.44,"DZD":128.946609,"EGP":15.7089,"ERN":15.000006,"ETB":37.01968,"EUR":0.849732,"FJD":2.1268,"FKP":0.774244,"GBP":0.774244,"GEL":3.21,"GGP":0.774244,"GHS":5.8,"GIP":0.774244,"GMD":51.8,"GNF":9750,"GTQ":7.779067,"GYD":209.189532,"HKD":7.75015,"HNL":24.616183,"HRK":6.432,"HTG":63.092734,"HUF":304.898502,"IDR":14698.31319,"ILS":3.40375,"IMP":0.774244,"INR":73.339962,"IQD":1193.66495,"IRR":42105,"ISK":138.34,"JEP":0.774244,"JMD":143.328099,"JOD":0.709,"JPY":105.96281084,"KES":108.48,"KGS":79.383349,"KHR":4102,"KMF":418.600229,"KPW":900,"KRW":1156.874985,"KWD":0.30611,"KYD":0.833238,"KZT":429.390606,"LAK":9218.51668,"LBP":1511.798134,"LKR":184.475582,"LRD":198.649954,"LSL":16.678358,"LYD":1.36818,"MAD":9.2555,"MDL":16.854973,"MGA":3892.039014,"MKD":52.393038,"MMK":1297.765373,"MNT":2863.231447,"MOP":7.981191,"MRO":357,"MRU":37,"MUR":39.749999,"MVR":15.4,"MWK":751.27991,"MXN":21.52491,"MYR":4.1575,"MZN":72.475008,"NAD":18.08,"NGN":384.95,"NIO":34.826085,"NOK":9.302521,"NPR":117.251256,"NZD":1.516634,"OMR":0.384993,"PAB":1,"PEN":3.591,"PGK":3.498316,"PHP":48.4271,"PKR":164.4,"PLN":3.807172,"PYG":7000.442422,"QAR":3.640554,"RON":4.1422,"RSD":99.895,"RUB":78.2827,"RWF":976.491713,"SAR":3.750541,"SBD":8.166667,"SCR":18.101188,"SDG":55.325,"SEK":8.891747,"SGD":1.35881,"SHP":0.774244,"SLL":9809.999858,"SOS":578.393995,"SRD":14.154,"SSP":130.26,"STD":21031.906016,"STN":20.95,"SVC":8.749038,"SYP":511.83359,"SZL":16.667984,"THB":31.23,"TJS":10.318746,"TMT":3.51,"TND":2.76,"TOP":2.312746,"TRY":7.878637,"TTD":6.768026,"TWD":28.678498,"TZS":2319.725226,"UAH":28.329145,"UGX":3699.518586,"USD":1,"UYU":42.504956,"UZS":10349.838236,"VEF":248487.642241,"VES":437430.678484,"VND":23187.66378,"VUV":113.267646,"WST":2.637196,"XAF":557.387911,"XAG":0.04216745,"XAU":0.00053025,"XCD":2.70255,"XDR":0.708402,"XOF":557.387911,"XPD":0.00042383,"XPF":101.400047,"XPT":0.00115678,"YER":250.350066,"ZAR":16.6722,"ZMW":20.072618,"ZWL":322},"base":"USD","currency_format_symbol":"$","currency":"USD","currency_pos":"left","num_decimals":"2","trim_zeros":"","thousand_sep":",","decimal_sep":".","i18n_oprice":"Original price:","zero_replace":".00","currency_rate_default":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/themes/papaya-shopper/includes/public/language/js/conversion.min.js?ver=1.6.20'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/themes/papaya-shopper/dist/app.js?ver=1.10.8'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/housebeauty\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-includes/js/wp-util.min.js?ver=5.3.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/housebeauty\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.7.0'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='https://www.paypal.com/sdk/js?client-id=ASFoZ02YtuiRCdGqiC0puujK3xYEar9EzDqhERWedSwZh8CUFySN8wA7ZIunU3-YuY_hf5u2Cma7U076&#038;commit=false&#038;currency=USD'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpg_param = {"page":"","layout":"vertical","color":"gold","shape":"rect","label":"paypal","commit":"false","layout_mini":"vertical","color_mini":"gold","shape_mini":"rect","label_mini":"paypal","checkout":"\/housebeauty\/?wc-ajax=checkout","add_to_cart_ajaxurl":"\/housebeauty\/?wc-ajax=wpg_ajax_generate_cart_for_paypal_checkout&quick=1","get_checkout_details":"https:\/\/funpinpin.com\/housebeauty\/?wc-api=Woo_PayPal_Gateway_PayPal_Checkout_Rest&pp_action=get_checkout_details&utm_nooverride=1","set_checkout":"https:\/\/funpinpin.com\/housebeauty\/?wc-api=Woo_PayPal_Gateway_PayPal_Checkout_Rest&pp_action=set_checkout&utm_nooverride=1","display_order_page":"https:\/\/funpinpin.com\/housebeauty\/?wc-api=Woo_PayPal_Gateway_PayPal_Checkout_Rest&pp_action=display_order_page&utm_nooverride=1","cancel_url":"https:\/\/funpinpin.com\/housebeauty\/?wc-api=Woo_PayPal_Gateway_PayPal_Checkout_Rest&pp_action=cancel_url&utm_nooverride=1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woo-paypal-rest-gateway/public/js/woo-paypal-checkout-public.min.js?ver=2.1.44'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":true,"animationSpeed":500,"animationLoop":true,"allowOneSlide":false,"slideshowSpeed":4000},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://funpinpin.com/housebeauty/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=3.7.0'></script>

    <div id="py-nav-mobile" uk-offcanvas="overlay: true;flip: true">
		<div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-center">
			<div class="menu-header_menu-container"><ul id="nav-top-mobile" class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical"><li><a href="https://funpinpin.com/housebeauty/shop/">All Products</a></li>
<li><a href="https://funpinpin.com/housebeauty/contact-us/">Contact Us</a></li>
<li><a href="https://funpinpin.com/housebeauty/my-account/">my account</a></li>
<li><a href="https://funpinpin.com/housebeauty/cart/">Cart</a></li>
</ul></div>		</div>
	</div>
	
	<div id="py-mini-cart" uk-offcanvas="flip: true; overlay: true;">
		<div class="uk-offcanvas-bar">
			<div class="widget_shopping_cart_content ">
				

	<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


			</div>
    	</div>
	</div>

        <div class="py-add-to-card-animation"> <span></span> </div>

        <div id="google_translate_element"></div>

	<!-- DB_NAME: housebeauty | FPP_ENV: prod -->    
</body>
</html>


