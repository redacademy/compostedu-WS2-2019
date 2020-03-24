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
</div>
			
			<div class="mocha-content contact-us-panel">
				<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
			</div>

</div>
<div class='background-grey-color'>
			<section class='subcription-main-container' >
				<h2>Subscribe to Our News Letter!</h2>
				<p>Interested in keeping in touch with us?  The Latest Dirt is our monthly newsletter that keeps you in the loop about all our workshops and special events.<br>
				You can subscribe to our newsletter using the form below. We love keeping in touch but we also make it easy for you to unsubscribe at any point.</p>
		
				<div class='subscribe-container'>
					<form class='newsletter-subscription-form'>
					<label for='name'>Name</label><br>
					<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
					<label for='email'>Email Address</label><br>
					<input class='subscribe-input'  type="text" id="fname" name="fname"><br>
					<button class='subscribe-btn'>Subscribe</button>
					</form>
				</div>
			</section>
			
			
			
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
