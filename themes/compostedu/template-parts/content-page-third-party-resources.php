<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<?php $third_party_resources = get_field('third_party_resources'); ?>
<?php
	$types = [];
	foreach($third_party_resources as $third_party_resource) {
		array_push($types, $third_party_resource['type']);
	}
	$types = array_unique($types);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="entry-content">
		<div class="topic-tps">Topics</div>

		<div class="type-tps-content topic-anchor">
			<?php 
				foreach($types as $type) {
					echo '<a href=\'#' . sha1($type) . '-tps-id\'>' . $type . '</a>';
				}
			?>
		</div>
	</div>

	<?php foreach($types as $type): ?>
		<div id="<?php echo sha1($type)?>-tps-id" class="entry-content type-box-tps-content">
			<h1><?php echo $type ?></h1>
			<?php foreach($third_party_resources as $third_party_resource): ?>
				<?php if ($type == $third_party_resource['type']): ?>
					<div class="box-tps">
						<h2><?php echo $third_party_resource['title']?></h2>
						<a class="view-link view-click" href="#">Read more</a>
						<div class="displayed-content" style="display:none;"><?php echo $third_party_resource['content']?></div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>

</article><!-- #post-## -->
