<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-post' ); ?>

			<div class="news-nav-links-content">
				<?php previous_post_link() ?>
				
				<?php next_post_link() ;?>
			</div> 

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
