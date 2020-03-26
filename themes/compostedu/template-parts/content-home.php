<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="front-page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="front-page-header-btns">
				<a href="<?php echo get_post_type_archive_link( 'adult_workshop' ) ?>" class="btn-red">Browse our workshops</a>
				<a href="<?php echo get_permalink( get_page_by_title( 'Fact Sheets' ) ); ?>" class="btn-white">Learn about composting</a>
			<div>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<section class="fp-image-content">
			<div class="fp-content">
				<?php the_content(); ?>
				<div class="fp-about-div">
					<a href="<?php echo get_permalink( get_page_by_title( 'Who We Are' ) ); ?>" class="fp-about-link btn-red">Learn more about us</a>
				</div>
			</div>

			<div>
				<img src="<?php echo get_template_directory_uri() . '/images/front-page/compost-education-centre-edited.jpg' ?>"
					srcset="<?php echo get_template_directory_uri() . '/images/front-page/compost-education-centre-edited@2x.jpg' ?> 2x,
					<?php echo get_template_directory_uri() . '/images/front-page/compost-education-centre-edited@3x.jpg' ?> 3x"
					class="fp-image">
			</div>
		</section>

		<section class="highlight-mocha-contents">
			<div class="mocha-content">
				<img src="<?php echo get_template_directory_uri() . '/images/front-page/paper.png' ?>" srcset="<?php echo get_template_directory_uri() . '/images/front-page/paper@2x.png' ?> 2x, <?php echo get_template_directory_uri() . '/images/front-page/paper@3x.png' ?> 3x" class="fp-icon">

				<h1>Fact Sheets</h1>
				<?php
					$fact_sheet_page = new WP_Query( 'pagename=fact-sheets' );
					while ( $fact_sheet_page->have_posts() ) : $fact_sheet_page->the_post();
						the_content();
					endwhile;
					wp_reset_postdata();
				?>

			</div>

			<div class="mocha-content">
				<img src="<?php echo get_template_directory_uri() . '/images/front-page/school-program.png' ?>" srcset="<?php echo get_template_directory_uri() . '/images/front-page/school-program@2x.png' ?> 2x, <?php echo get_template_directory_uri() . '/images/front-page/school-program@3x.png' ?> 3x" class="fp-icon">

				<h1>School Programs</h1>
				<?php
					$school_program_page = new WP_Query( 'pagename=about-school-programs' );
					while ( $school_program_page->have_posts() ) : $school_program_page->the_post();
						the_content();
					endwhile;
					wp_reset_postdata();
				?>
			</div>

			<div class="mocha-content">
				<img src="<?php echo get_template_directory_uri() . '/images/front-page/workshops.png' ?>" srcset="<?php echo get_template_directory_uri() . '/images/front-page/workshops@2x.png' ?> 2x, <?php echo get_template_directory_uri() . '/images/front-page/workshops@3x.png' ?> 3x" class="fp-icon">

				<h1>Workshops</h1>
				<p>We are pleased to offer a broad range of workshops on composting, organic gardening, and sustainable living topics every year. Check out what's coming up at the Centre on our calendar.</p>
			</div>

		</section>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
