<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<?php $annual_reports = get_field('annual_reports'); ?>

<article>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class='reports-grid-container'>

	<?php foreach($annual_reports as $annual_report): ?>
		<div class="reports">
			<?php $image = $annual_report['image']; ?>
			<?php if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			<h2 class="report-title"><?php echo $annual_report['title']?></h2>
			<a class="report-pdf" href="<?php echo $annual_report['link'] ?>">View report on ISSUU</a>
		</div>
	<?php endforeach; ?>
			</div>
	
</article><!-- #post-## -->