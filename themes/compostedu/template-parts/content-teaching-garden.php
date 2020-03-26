<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="teaching-garden-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>The teaching garden is nestled in a community garden in the Fernwood neighborhood of Victoria. It is open for the public Wednesday – Saturday, from 10am-4pm.</p>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class='slideshow-flickr-container'>
			<div class='flickr-slide'>
				<p class='slideshow-p'>A few things you will observe as you wander through our garden… </p>
				<a data-flickr-embed="true" data-context="true" href="https://www.flickr.com/photos/composteducation/26891403171/in/album-72157668024451461" title="purple sprouting broccoli harvest"><img src="https://live.staticflickr.com/7212/26891403171_66af6e9e5d_z.jpg" width="480" height="640" alt="purple sprouting broccoli harvest"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
			</div>
			<div class='flickr-slide'>
				<p class='slideshow-p'>An album just of flowers in case you love them as much as we do!</p>
				<a data-flickr-embed="true" data-context="true" href="https://www.flickr.com/photos/composteducation/26354477254/in/album-72157668279445725" title="DSCN0310"><img src="https://live.staticflickr.com/7721/26354477254_65cfecfdd9_z.jpg" width="480" height="640" alt="DSCN0310"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
			</div>
			<div class="mocha-content contact-us-panel">
				<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
			</div>
		</div>
</article><!-- #post-## -->