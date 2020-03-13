<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<?php $fact_sheets = get_field('fact_sheets'); ?>
<?php
	$types = [];
	foreach($fact_sheets as $fact_sheet) {
		array_push($types, $fact_sheet['type']);
	}
	$types = array_unique($types);
?>


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
				foreach($types as $type) {
					echo '<a href=\'#' . strtolower($type) . '-fs-id\'>' . $type . '</a>';
				}
			?>
		</div>
	</div>

	<!-- <div class="entry-content"> -->
		<?php foreach($types as $type): ?>
			<div id="<?php echo strtolower($type)?>-fs-id" class="entry-content type-box-fs-content">
				<h1><?php echo $type ?></h1>
				<?php foreach($fact_sheets as $fact_sheet): ?>
					<?php if ($type == $fact_sheet['type']): ?>
						<div class="box-fs">
							<h2><?php echo $fact_sheet['title']?></h2>
							<p><?php echo $fact_sheet['description']?></p>

							<?php
								$file = $fact_sheet['pdf'];
								if( $file ): ?>
									<a class="view-link" href="<?php echo $file['url']; ?>" target="_blank">View PDF <i class="fas fa-arrow-right"></i></a>
								<?php endif; 
							?>

							
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	<!-- </div> -->
	
</article><!-- #post-## -->
