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
		<img class="people-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	<?php else : ?>
		<img class="people-img" src="<?php echo get_template_directory_uri() . '/images/people/default-people.png' ?>" alt="empty image" />
	<?php endif; ?>

	<header class="entry-header">
		<h2><?php the_title() ?></h2>
		<p><?php the_field('position'); ?></p>
	</header><!-- .entry-header -->

	<a class="view-link view-click" href="#">Read more</a>

	<div class="entry-content displayed-content" style="display: none;">
		<?php $content = get_the_content(); ?>
		<?php if( !empty( $content ) ): ?>
			<?php echo $content ?>
		<?php else : ?>
			<p>We currently don't have her information yet, sorry folks. We will update this once we get the information. In the meantime, feel free to read about other members of our organization!</p>
		<?php endif; ?>
	</div><!-- .entry-content -->

	<hr/>
</article><!-- #post-## -->
