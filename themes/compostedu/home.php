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
				<img class="news-img-top" alt="">

				<header class="entry-header">
					<h1 class="entry-title entry-title-top"></h1> </header>
				<!-- .entry-header -->

				<div class="entry-content entry-content-top">
					<p></p>
				</div>
				<!-- .entry-content -->

				<div class="news-information-container">
					<div><i class="far fa-folder"></i></div>
					<div class="news-categories-top"></div>
					<div><i class="far fa-calendar"></i></div>
					<div class="news-date-top"></div>
				</div>
			</article>
			
			<div class="news-buttons-content">
				<button id="new-next-button" class="news-slider-button slider-next" type="button"><i class="fas fa-chevron-left"></i></button>
				<a id="new-red-more-button" class="btn-pine news-read-more" type="button">Read more</a>
				<button id="new-previous-button" class="news-slider-button slider-previous" type="button"><i class="fas fa-chevron-right"></i></button>
			</div>

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
