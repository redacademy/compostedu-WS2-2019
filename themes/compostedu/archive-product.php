<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<h1 class="page-title"> Products</h1>
				<p>All prices include sales tax. We are not able to ship products or offer online ordering at this time.</p>
			</header><!-- .page-header -->

			<?php $product_taxonomies = get_terms( 'product_taxonomy'); ?>

			<?php foreach($product_taxonomies as $product_taxonomy): ?>

				<section class="product-type-content">

					<h1><?php echo $product_taxonomy->name?></h1>

					<?php $products = new WP_Query(
						array(
							'post_type'=>'product', 
							'post_status'=>'publish', 
							'posts_per_page'=>-1,
							'tax_query' => array(
								array(
									'taxonomy' => $product_taxonomy->taxonomy,
									'terms' => $product_taxonomy->slug,
									'field' => 'slug'
								)
							)
						)); 
					?>

					<div class="products-container">
						
						<?php if ( $products->have_posts() ) : ?>

							<?php while ( $products->have_posts() ) : $products->the_post(); ?>

								<?php
									get_template_part( 'template-parts/content', 'products' );
								?>

							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>

					</div>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>

				</section>

			<?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
