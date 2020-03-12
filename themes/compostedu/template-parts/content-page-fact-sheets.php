<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-content">
		<div class="topic-fs">Topics</div>

		<div class="type-fs-content">
			<?php 
				$fact_sheets = get_field('fact_sheets');

				foreach($fact_sheets as $fact_sheet) {
					echo '<a href=\'#\'>' . $fact_sheet['type'] . '</a>';
				}
			?>
		<div>


	<div>
	
</article><!-- #post-## -->
