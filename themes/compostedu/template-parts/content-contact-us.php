<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="contact-us-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='contact-us-header-address'>250-386-WORM (9676) </p>
            <p>1216 North Park Street<br>Victoria, BC, V8T 1C9</p>
	</header><!-- .entry-header -->
	
</article><!-- #post-## -->
<div class="entry-content">
	<div class ='test'>
		<?php the_content(); ?>


