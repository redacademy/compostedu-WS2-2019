<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="teaching-garden-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>The teaching garden is nestled in a community garden in the Fernwood neighborhood of Victoria. It is open for the public Wednesday – Saturday, from 10am-4pm.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->