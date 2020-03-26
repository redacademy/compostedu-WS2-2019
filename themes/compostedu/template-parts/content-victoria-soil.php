<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="victoria-soil-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <p class ='victoria-soil-header-description'>This information on soil heavy metal levels in Greater Victoria has been 
            gathered through the Healing City 
            Soils project- a collaboration between the Victoria Compost Education Centre and Royal Roads University. </p>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class='victoria-entry-content'>
			<?php the_content(); ?>
		</div>
<div>
		<div class='application-container'>
			<h2>Healing City Soils 2020 Applications Are Now Open! </h2>
			<p>100 applications will be selected for testing based upon the needs of the student’s project objectives; application does
				 not guarantee selection. </p>
			<p>Reapplication in following years are welcome! 
						<strong>Applications close March 31st, 2020.<strong></p>
			<a href='' class='victoria-apply-button'>Apply Now</a>
		</div>

		<div class="mocha-content contact-us-panel">
				<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
			</div>
</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
