<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package customify
 */

get_header(); echo "</main>";?>
	<div class="py-container">
		<div class="woocommerce">
			<?php  
				$args = array(
					'post_type'      => 'product',
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

				$loop = new WP_Query( $args );
				// echo "<pre>";
				// var_dump($loop);
				echo "<div class='img'><ul class='vv'>";
				while ( $loop->have_posts() ) : $loop->the_post();
					global $product;
					
					echo wc_get_product();
				endwhile;
				echo "</ul></div>";
				wp_reset_query();
			?>
		</div>
	</div>
<?php
echo "<main>";
get_footer();
?>
<script>
var app = new Vue({
	el: '#app',
	data: {
	  message: 'Hello Vue!'
	}
  })
</script>
