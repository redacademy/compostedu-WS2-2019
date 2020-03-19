<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title()?></h1>
		<div class="news-information">
			<div class="news-author-information">
				<?php red_starter_posted_by(); ?>
			</div>
			<div>
				Updated <?php echo get_the_modified_time('l, jS F Y'); ?>
			</div>
			<div>
				<i class="far fa-folder"></i>
				<?php $categories = get_the_category($post_id); ?>
				<?php $category_names = [] ?>
				<?php foreach($categories as $category): ?>
					<?php array_push($category_names, $category->name); ?>
				<?php endforeach; ?>
				<?php echo implode(" / ", $category_names);?>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php $image = get_field('image'); ?>
	<?php if( !empty( $image ) ): ?>
		<img class="news-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>

	<hr/>
</article><!-- #post-## -->
