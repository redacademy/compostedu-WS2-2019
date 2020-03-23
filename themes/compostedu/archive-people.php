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
				<h1 class="page-title"> People</h1>
				<p>Get to know our board of directors and our staff members!</p>
			</header><!-- .page-header -->

			<?php $people_terms = get_terms( 'people_taxonomy'); ?>

			<?php foreach($people_terms as $people_term): ?>

				<section class="people-type-content">

					<h1><?php echo $people_term->name?></h1>

					<?php $people = new WP_Query(
						array(
							'post_type'=>'people', 
							'post_status'=>'publish', 
							'posts_per_page'=>-1,
							'tax_query' => array(
								array(
									'taxonomy' => $people_term->taxonomy,
									'terms' => $people_term->slug,
									'field' => 'slug'
								)
							)
						)); 
					?>

					<div class="people-container">
						
						<?php if ( $people->have_posts() ) : ?>

							<?php if( !empty( $people_term->name == 'Board of Directors' ) ): ?>
								<article class="grey-content">
									<h2>Board of Directors Election</h2>

									<p>The current board of directors were elected at our las Annual General Meeting in June 2019. Terms run for two years. Elections are scheduled for our next Annual General Meeting in June 2020. To discuss opportunities with the Board of Directors, please <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>">contact us</a>.</p>
								</article>
							<?php endif; ?>

							<?php while ( $people->have_posts() ) : $people->the_post(); ?>

								<?php
									get_template_part( 'template-parts/content', 'people' );
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
