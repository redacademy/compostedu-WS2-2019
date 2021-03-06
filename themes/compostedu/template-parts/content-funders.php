<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="funders-page-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <p class ='funders-header-description'>Thank you to our funders! <br>
    Through the generosity of these funding agencies we are able to continue our educational and informative programs </p>
</header><!-- .entry-header -->

<div class="entry-content">
    <?php the_content(); ?>
    
    <?php	$rows = get_field('funders_field'); ?>

	<?php foreach($rows as $row): ?>
		<div class="custom-fields-container">
			<?php $image = $row['image']; ?>
			<?php if( !empty( $image ) ): ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			<h3 class="funders-fields-title"><?php echo $row['title']?></h3>
            <pclass="funders-field-description"> <?php echo $row['description'] ?></p>
			<a class="funders-links" href="<?php echo $row['url'] ?>">View Website</a>
            
		</div>
	<?php endforeach; ?>
    
	</div><!-- .entry-content -->
</article><!-- #post-## -->
