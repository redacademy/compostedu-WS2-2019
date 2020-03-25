<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="teaching-garden-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>The teaching garden is nestled in a community garden in the Fernwood neighborhood of Victoria. It is open for the public Wednesday – Saturday, from 10am-4pm.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<div class="mocha-content contact-us-panel">
				<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
			</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->