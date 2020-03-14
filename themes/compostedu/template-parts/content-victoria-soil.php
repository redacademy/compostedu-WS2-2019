<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="victoria-soil-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='victoria-soil-header-description'>This information on soil heavy metal levels in Greater Victoria has been 
            gathered through the Healing City 
            Soils project- a collaboration between the Victoria Compost Education Centre and Royal Roads University. </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
