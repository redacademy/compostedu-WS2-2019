<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="news-short-content">

			<?php $news = new WP_Query(
				array(
					'post_type'=>'post', 
					'post_status'=>'publish', 
					'posts_per_page'=>1
				)); 
			?>

			<?php if ( $news->have_posts() ) : ?>

			<?php while ( $news->have_posts() ) : $news->the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

				<?php $next = get_next_post();
						//var_dump($next);

					  $previous = get_previous_post();
					  var_dump($previous);	

				?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</section>

		<section class="news-content">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'news' ); ?>

				<?php endwhile; ?>

				<?php red_starter_numbered_pagination(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
