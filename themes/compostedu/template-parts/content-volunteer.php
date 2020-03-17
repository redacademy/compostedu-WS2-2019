<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="volunteer-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='volunteer-header-description'>Thank you for your interest in volunteering with the Compost Education Centre!  Our training sessions 
            generally take place once a year over the course of a weekend. 
             Find your volunteer opportunity now. </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
