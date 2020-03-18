<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $image = get_field('image'); ?>
	<?php if( !empty( $image ) ): ?>
		<img class="news-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php $excerpt = get_the_excerpt(); ?>
		<?php if ($excerpt) : ?>
			<p><?php echo $excerpt ?></p>
		<?php else :?>
			<?php $content = get_the_content(); ?>
			<?php if ($content) : ?>
				<?php if (strpos($content, 'wp:core-embed/youtube ') !== false) : ?>
					<p>Check out the video!</p>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif;?>
	</div><!-- .entry-content -->

	<?php $categories = get_categories(); ?>

	<div class="news-information-container">
		<div><i class="far fa-folder"></i></div>
		<div>
			<?php $categories = get_categories(); ?>
			<?php $category_names = [] ?>
			<?php foreach($categories as $category): ?>
				<?php array_push($category_names, $category->name); ?>
			<?php endforeach; ?>
			<?php echo implode(" / ", $category_names);?>
		</div>
		<div><i class="far fa-calendar"></i></div>
		<div>
			<?php echo get_the_modified_time('l, jS F Y');  ?>
		</div>
	</div>

	<hr/>
</article><!-- #post-## -->
