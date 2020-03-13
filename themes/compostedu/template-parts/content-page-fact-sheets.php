<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<?php $fact_sheets = get_field('fact_sheets'); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content-fs">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-content">
		<div class="topic-fs">Topics</div>

		<div class="type-fs-content">
			<?php 
				foreach($fact_sheets as $fact_sheet) {
					echo '<a href=\'#\'>' . $fact_sheet['type'] . '</a>';
				}
			?>
		</div>
	</div>

	<div class="entry-content">
		<?php foreach($fact_sheets as $fact_sheet): ?>
			<div class="box-fs">
				<h1><?php echo $fact_sheet['type']?></h1>
				<h2><?php echo $fact_sheet['title']?></h2>
				<p><?php echo $fact_sheet['description']?></p>
			</div>
		<?php endforeach; ?>
	</div>
	
</article><!-- #post-## -->
