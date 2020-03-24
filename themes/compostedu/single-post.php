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

			<div class="news-nav-links">
				<hr/>
				<div class="news-nav-link-content">
					<?php next_post_link('<i class="fas fa-arrow-left"></i> %link') ;?>
				</div>
				<hr/>
				<div class="news-nav-link-content">
					<?php previous_post_link('%link <i class="fas fa-arrow-right"></i>') ?>
				</div>
				<hr/>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
