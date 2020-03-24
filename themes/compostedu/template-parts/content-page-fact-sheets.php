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
		<p>If you don't find the information you're looking for please call us at 250-386-WORM (96-76) or email us at office@compost.bc.ca with your questions.</p>
	</div><!-- .entry-content -->

	<div class="entry-content topic-fs-grid">
		<div class="topic-fs">Topics</div>

		<div class="type-fs-content topic-anchor">
			<?php 
				foreach($types as $type) {
					echo '<a href=\'#' . sha1($type) . '-fs-id\'>' . $type . '</a>';
				}
			?>
		</div>
	</div>

	<?php foreach($types as $type): ?>
		<div id="<?php echo sha1($type)?>-fs-id" class="entry-content type-box-fs-content">
			<h1><?php echo $type ?></h1>
			<section class="fs-container">
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
			</section>
		</div>
	<?php endforeach; ?>
	
</article><!-- #post-## -->
