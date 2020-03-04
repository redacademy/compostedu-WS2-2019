<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="front-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="front-page-header-btns">
				<a href="<?php echo get_permalink( get_page_by_title( 'Adult Workshops' ) ); ?>" class="btn-red">Browse our workshops</a>
				<a href="<?php echo get_permalink( get_page_by_title( 'Fact Sheets' ) ); ?>" class="btn-white">Learn about composting</a>
			<div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
