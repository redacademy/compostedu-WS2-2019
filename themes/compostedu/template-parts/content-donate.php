<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="donate-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='donate-header-description'>We rely on people like you!
It’s your goodwill and financial support that help produce the programs and services that make such a difference in our community.  
Thank you so much! </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<section class='logos-container'>
		<div class='grid-container'> 
			<img class='donate-logos' src=<?php echo get_template_directory_uri() . '/images/donate/Artwork.svg' ?>>
			<p class='logo description'>Work of Art</p>
		</div>

		<div class='grid-container'>
			<img class='donate-logos' src=<?php echo get_template_directory_uri() . '/images/donate/Securities.svg' ?>>
			<p class='logo description'>Publicly Listed Securities</p>
		</div>

		<div class='grid-container'>
			<img class='donate-logos' src=<?php echo get_template_directory_uri() . '/images/donate/Data.svg' ?>>
			<p class='logo description'>Specific Amount or Asset</p>
		</div>

		<div class='grid-container'>
			<img class='donate-logos' src=<?php echo get_template_directory_uri() . '/images/donate/Estate.svg' ?>>
			<p class='logo description'>Percentage of Estatet</p>
		</div>

		<div class='grid-container'>
			<img class='donate-logos' src=<?php echo get_template_directory_uri() . '/images/donate/Bequest.svg' ?>>
			<p class='logo description'>Residual Bequest</p>
		</div>



			
			
			</section>


	</div><!-- .entry-content -->
</article><!-- #post-## -->
