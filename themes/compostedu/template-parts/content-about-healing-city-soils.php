<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

        <div class="text">
            <h1 class="entry-title">Healing City Soils</h1>
            <p class="healind-soil-title-description">Thanks to generous funding from the Victoria Foundation, and the Capital Regional District, Healing City Soils (HCS), a partnership between the CEC, soil toxicologist and HCS Program Technician, Danielle Stevenson of DIY FUNGI, GIS specialist and Mapping Coordinator Steeve Deschenes, and Royal Roads University, enters its 5th year!</p>
        </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
