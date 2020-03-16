<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="contact-us-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>We are a non-profit organization with charitable status providing composting and ecological gardening education to CRD residents.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->