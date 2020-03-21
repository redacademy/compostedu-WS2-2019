<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="funders-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='funders-header-description'>Thank you to our funders! <br>
            Through the generosity of these funding agencies we are able to continue our educational and informative programs </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
