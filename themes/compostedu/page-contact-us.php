<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="contact-us-site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'contact-us' ); ?>

			<?php endwhile; // End of the loop. ?>
			
			<div class='subscribe-container'>
				<form class='newsletter-subscription-form'>
				<label for='name'>Name</label><br>
				<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
				<label for='email'>Email Address</label><br>
				<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
				<button class='subscribe-btn'>Subscribe</button>
				</form>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>