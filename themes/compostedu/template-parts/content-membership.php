<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="membership-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='header-description'>As a member of the Compost Education Centre, you will be supporting composting, soil conservation and organic gardening education programs while receiving benefits listed below.</p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->