<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>">

	<section class="aw-grid-content hentry">
		<header class="adult-workshop-single-header aw-grid-item-1">
			<?php $image = get_field('image'); ?>
			<?php if( !empty( $image ) ): ?>
				<img class="adult-workshop-single-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</header><!-- .entry-header -->

		<section class="entry-content aw-grid-item-2">
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
	</section>

	<div class="aw-about">
		<h1>About This event</h1>
		<section class="aw-about-grid">
			<div class="aw-about-content">
				<?php the_content(); ?>
			</div>
			<div class="aw-address-map"><?php the_field('address_map'); ?></div>
		</section>
	</div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
