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
				<h1 class="page-title">High School Programs</h1>
				<p>Workshops are available Wednesday-Friday, 9 am - 4 pm. Workshops may be delivered in our straw bale teaching building or at your facility, while site tours take place in the Compost Education Centre demonstration gardens.</p>
			</header><!-- .page-header -->

			<section class="high-school-program-grid">

				<?php $compost_for_kids = new WP_Query(
						array(
							'post_type'=>'high_school_program', 
							'post_status'=>'publish', 
							'posts_per_page'=>-1
						)); 
				?>

				<div class="high-school-program-container">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content', 'high-school-programs' );
						?>

					<?php endwhile; ?>

				</div>

				<div>
					<div class="mocha-content contact-us-panel">
						<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
						?>
					</div>
				</div>

			</section>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
