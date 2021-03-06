<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('expand-item'); ?>>
	<?php $image = get_field('image'); ?>
	<?php if( !empty( $image ) ): ?>
		<img class="cw-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>

	<header class="entry-header">
		<h2 class="entry-title"><?php the_title()?> (<?php the_field('duration')?>, <?php the_field('cost_information')?>)</h2>
	</header><!-- .entry-header -->

	<a class="view-link view-click" href="#">Read more</a>

	<div class="entry-content displayed-content" style="display: none;">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<hr/>
</article><!-- #post-## -->
