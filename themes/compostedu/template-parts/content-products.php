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
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php endif; ?>

	<header class="entry-header">
		<h2><?php the_title() ?></h2>
		<h2 class="product-cost-information"><?php echo get_field('cost_information'); ?></h2>
		<?php $extra_information = get_field('extra_information'); ?>
		<?php if( !empty( $extra_information ) ): ?>
			<h2 class="product-extra-information">[<?php echo $extra_information; ?>]<h2>
		<?php endif; ?>	
	</header><!-- .entry-header -->

	<a class="view-link view-click" href="#">Read more</a>

	<div class="entry-content displayed-content" style="display: none;">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<hr/>
</article><!-- #post-## -->
