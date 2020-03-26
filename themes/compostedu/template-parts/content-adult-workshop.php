<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div>
		<?php $image = get_field('image'); ?>
		<?php if( !empty( $image ) ): ?>
			<img class="adult-workshop-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>

	<div class="aw-data">		
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p><?php the_field('summary'); ?></p>
		</div><!-- .entry-content -->

		<div class="aw-time-link-container">
			<div class="aw-information-container">
				<div class="aw-information-container-item-1">
					<?php $date_string = get_field('date'); ?>
					<?php if( !empty( $date_string  ) ): ?>
						<i class="far fa-calendar"></i> <?php echo $date_string; ?>
					<?php endif; ?>
				</div>
				<div class="aw-information-container-item-2"><i class="fas fa-dollar-sign"></i><?php the_field('price'); ?></div>
				<div class="aw-information-container-item-3">
					<?php
						$start = get_field('start');
						$end = get_field('end');
					?>
					<?php echo strtoupper($start); ?> - <?php echo strtoupper($end); ?> <?php the_field('timezone'); ?> 
				</div>
			</div>

			<div>
				<a class="view-link" href="<?php echo esc_url( get_permalink()) ?>">View event <i class="fas fa-arrow-right"></i></a>
			</div>
		
		</div>
	<div>

	<hr/>
</article><!-- #post-## -->
