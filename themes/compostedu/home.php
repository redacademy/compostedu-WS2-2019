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

			<article class="article-news-top">
				<img class="news-img-top" src="//localhost/wp-content/uploads/2020/03/COVID-19-768x768-1.jpg" alt="">

				<header class="entry-header">
					<h1 class="entry-title">CEC, COVID-19 Preparedness and Flattening the Curve</h1> </header>
				<!-- .entry-header -->

				<div class="entry-content">
					<p>The Compost Education Centre is currently doing its part to respond to COVID 19 concerns and working to “flatten the curve” of the outbreak. Although policies and events are evolving rapidly we are currently: Maintaining a healthy work environment with posted information about how to stop the spread of illness. Encouraging employees, visitors and workshop […]</p>
				</div>
				<!-- .entry-content -->

				<div class="news-information-container">
					<div><i class="far fa-folder"></i></div>
					<div>
						News 
					</div>
					<div><i class="far fa-calendar"></i></div>
					<div>
						Wednesday, 18th March 2020 
					</div>
				</div>
			</article>

			<button type="button" id="new-next-button">Next</button>
			<button type="button" id="new-red-more-button">Read more</button>
			<button type="button" id="new-previous-button">Previous</button>

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
