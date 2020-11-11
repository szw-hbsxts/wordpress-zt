<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */
add_filter('show_admin_bar', '__return_false');
?>
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
  <!-- import Vue before Element -->
  <script src="/wp-content/themes/wordpress-zt/assets/js/jquery.js"></script>
  <script src="/wp-content/themes/wordpress-zt/assets/js/index.js"></script>
  <?php
	if(is_home()){
		echo "<script type='text/javascript' src='/wp-content/themes/wordpress-zt/assets/js/banner.js'></script>";
	}

	?>	
	  <?php
		if(is_checkout()){
			echo "<script type='text/javascript' src='/wp-content/themes/wordpress-zt/assets/js/checkout.js'></script>";
		}

	?>		
</head>

<body <?php body_class(); ?>>

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
							<li id="menu-item-2676"><a href="<?php echo home_url();?>/?page_id=3&preview=true">Contact Us</a></li>
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
						<li class="py-header-cart">
							<a class="cart-customlocation" href="#py-mini-cart"uk-toggle>
							<i class="pyf pyf-gouwuche"></i>
							<span id="uk-badge" class="uk-badge">
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
<div id="page" <?php customify_site_classes(); ?>>
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'customify' ); ?></a>
	<?php
	do_action( 'customify/site-start/before' );

	do_action( 'customify/site-start/after' );

	/**
	 * Hook before main content
	 *
	 * @since 0.2.1
	 */
	do_action( 'customify/before-site-content' );
	?>
	<div id="site-content" <?php customify_site_content_class(); ?>>
		<div <?php customify_site_content_container_class(); ?> <?php if(is_home()){echo 'style="display:none;"';}?>>
			<div <?php customify_site_content_grid_class(); ?>>
				<main id="main" <?php customify_main_content_class(); ?>>

				<?php
					if(is_woocommerce()){
						if(!is_product()){
							echo '<div class="uk-margin-medium-bottom">';
							echo '<h1 id="py-product-0" class="py-title uk-article-title">';
							if(single_cat_title() == null){
								echo " All Products";
							}else{
								echo single_cat_title();
							}
							echo '</h1></div>';
						}
					}
				?>
					<?php do_action( 'customify/main/before' ); ?>
