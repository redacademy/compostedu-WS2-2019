<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="adult-workshop-single-header">
		<?php $image = get_field('image'); ?>
		<?php if( !empty( $image ) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
		<p><?php the_field('summary'); ?></p>

		<div class="aw-single-information-container">
			<div><i class="far fa-calendar"></i></div>
			<div>
				<?php $date_string = get_field('date'); ?>
				<?php if( !empty( $date_string  ) ): ?>
					<?php $date = DateTime::createFromFormat('D, j M Y', $date_string);?>
					<?php echo $date->format('l, j M Y'); ?>
				<?php endif; ?>
			</div>
			<div><i class="fas fa-map-marker-alt"></i></div>
			<div>Address //TODO</div>
			<div><i class="fas fa-dollar-sign"></i></div>
			<div><?php the_field('price'); ?></div>
		</div>

	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
