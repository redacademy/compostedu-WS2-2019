<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"> Community Education Workshops</h1>
				<p>Workshops can be delivered during our regular business hours: Wed-Sat, between 10am and 4pm. To book a workshop, call us at 250-386-9676 or get in touch via our contact form. We require at least 48 hours notice for workshop cancellation.</p>
			</header><!-- .page-header -->

			<section class="community-workshops-content">

				<?php $community_workshops = new WP_Query(
					array(
						'post_type'=>'community_workshop', 
						'post_status'=>'publish', 
						'posts_per_page'=>-1
					)); 
				?>

				<?php /* Start the Loop */ ?>
				<?php while ( $community_workshops->have_posts() ) : $community_workshops->the_post(); ?>

					<?php
						get_template_part( 'template-parts/content', 'community-workshop' );
					?>

				<?php endwhile; ?>
				
			</section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
