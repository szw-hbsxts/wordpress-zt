
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();add_filter('show_admin_bar', '__return_false'); ?>
	<link rel='stylesheet' id='papaya-shopper-css'  href="<?php echo get_template_directory_uri().'/assets/css/app.css';?>" type='text/css' media='all' />
	<link rel='stylesheet' href="<?php echo get_template_directory_uri().'/assets/css/index.css';?>" type='text/css' media='all' />
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
  <!-- import Vue before Element -->
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/1.12.4/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/vue.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/index.js"></script>


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
							<a href="<?php echo home_url();?>/index.php/my-account/">
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
							<span id="uk-badge" class="uk-badge">
								{{ message }}
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
					<ol id="sajha" class="py-products uk-child-width-1-2 uk-grid-small uk-child-width-1-4@m uk-grid" uk-grid>

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
									echo woocommerce_template_loop_add_to_cart();
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





<div id="butt_vue">

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
		
		echo woocommerce_template_single_add_to_cart();

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






<?php
get_footer();