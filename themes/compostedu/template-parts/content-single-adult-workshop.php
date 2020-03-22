<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>">
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
			<div><?php the_field('address'); ?></div>
			<div><i class="fas fa-dollar-sign"></i></div>
			<div><?php the_field('price'); ?></div>
		</div>

		<?php $event = get_field('event');?>
		<a href="<?php echo $event['url'] ?>" class="aw-register-event btn-pine">Register for this event</a>
	</section><!-- .entry-content -->

	<div class="aw-about">
		<h1>About This event</h1>
		<?php the_content(); ?>
		<div class="aw-address-map"><?php the_field('address_map'); ?></div>
	</div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
