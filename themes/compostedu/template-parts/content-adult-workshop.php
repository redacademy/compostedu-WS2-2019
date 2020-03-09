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
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?php the_field('summary'); ?></p>
	</div><!-- .entry-content -->

	<div class="aw-information-container">
		<div>
			<?php $date_string = get_field('date'); ?>
			<?php if( !empty( $date_string  ) ): ?>
				<i class="far fa-calendar"></i> <?php echo $date_string; ?>
			<?php endif; ?>
		</div>
		<div><i class="fas fa-dollar-sign"></i> <?php the_field('price'); ?></div>
		<div>
			<?php
				$start = get_field('start');
				$end = get_field('end');
			?>
			<?php echo strtoupper($start); ?> - <?php echo strtoupper($end); ?> <?php the_field('timezone'); ?> 
		</div>
	</div>

	<a class="view-link" href="<?php echo esc_url( get_permalink()) ?>">View event →</a>

	<hr/>
</article><!-- #post-## -->
