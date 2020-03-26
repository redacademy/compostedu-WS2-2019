<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="about-school-page-header">
		<h1 class="entry-title">School Programs</h1>
		<?php the_content(); ?>
	</header><!-- .entry-header -->

		<h1 class='school-main-title'>Programs Offered</h1>
	<div class="entry-content image-school-programs-content">

			<div class='main-grid-container-school'>
				<div class='test-one'>
					<article class="hentry">
						<img class="images-school-programs" src="<?php echo get_template_directory_uri() . '/images/about-school-programs/composting-for-kids.jpg' ?>" alt="">
						<div class='card-img-container'>
							<header class="entry-header">
								<h2 class="entry-title">Composting For Kids</h2>
							</header><!-- .entry-header -->
							<div>
								<p>This program is for children attending preschool to grade 3. Workshops may be delivered in our straw bale teaching building or at your gacility, while site tours take place in our demonstration gardens.</p>
							</div><!-- .entry-content -->
							<a class="view-link" href="<?php echo get_post_type_archive_link( 'composting_for_kids' ) ?>">Find out more <i class="fas fa-arrow-right"></i></a>
						</div> <!-- card img container ----------->
					</article>

					<article class="hentry">
						<img class="images-school-programs" src="<?php echo get_template_directory_uri() . '/images/about-school-programs/intermediate-programs.jpg' ?>" alt="">
						<div class='card-img-container'>
								<header class="entry-header">
									<h2 class="entry-title">Intermediate Programs</h2>
								</header><!-- .entry-header -->
								<div>
									<p>This program is for children attending grades 4 through 8. Workshops may be delivered in our straw bale teaching building or at your gacility, while site tours take place in our demonstration gardens.</p>
								</div><!-- .entry-content -->

								<a class="view-link" href="<?php echo get_post_type_archive_link( 'intermediate_program' ) ?>">Find out more <i class="fas fa-arrow-right"></i></a>
						</div> <!-- card img container ----------->	
					</article>
					
					<article class="hentry">
						<img class="images-school-programs" src="<?php echo get_template_directory_uri() . '/images/about-school-programs/high-school-programs.jpg' ?>" alt="">
							<div class='card-img-container'>
								<header class="entry-header">
									<h2 class="entry-title">High School Programs</h2>
								</header><!-- .entry-header -->
								<div>
									<p>This program is for children attending grades 4 through 8. Workshops may be delivered in our straw bale teaching building or at your gacility, while site tours take place in our demonstration gardens.</p>
								</div><!-- .entry-content -->
								<a class="view-link" href="<?php echo get_post_type_archive_link( 'high_school_program' ) ?>">Find out more <i class="fas fa-arrow-right"></i></a>

							</div> <!-- card img container ----------->	
					</article>
					
					<article class="hentry">
						<img class="images-school-programs" src="<?php echo get_template_directory_uri() . '/images/about-school-programs/home-learners.jpg' ?>" alt="">
							<div class='card-img-container'>
								<header class="entry-header">
									<h2 class="entry-title">Home Learners</h2>
								</header><!-- .entry-header -->
								<div>
									<p class='p-small-size'>Home learners can access the full workshop line-up for the same prices. Worshops can be done at the Compost Education Centre or at a home learner's house. Workshop line-up varies by age. Visit our <a href="<?php echo get_post_type_archive_link( 'composting_for_kids' ) ?>">Composting For Kids</a>, <a href="<?php echo get_post_type_archive_link( 'intermediate_program' ) ?>">Intermediate Programs</a>, and <a href="<?php echo get_post_type_archive_link( 'high_school_program' ) ?>">High School Programs</a> pages to view the available workshops.</p>
								</div><!-- .entry-content -->

							</div> <!-- card img container ----------->	
					</article>

					<p class='flickr-top-text'>And an album of our school program activities.</p>
					<a data-flickr-embed="true" data-context="true" href="https://www.flickr.com/photos/composteducation/26699821700/in/album-72157665835113554" title="ECO preschool visit - photo credit Vicki Finucane Bell"><img src="https://live.staticflickr.com/7792/26699821700_765f766227_z.jpg" width="640" height="480" alt="ECO preschool visit - photo credit Vicki Finucane Bell"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
				</div> <!-- test-one ----------------->

					<div class='test-two'>
						<div class="mocha-content">
							<h1>Schedule & Hours</h1>
							
							<p>Workshops are offered <strong>Wednesday</strong> to <strong>Friday</strong> during school hours.</p>
							
							<p>Programs range from <strong>one to two hours</strong> and may be delivered at our demonstration site or at your facility</p>
							
							<p>Spring time and summer time camps can book any of our workshops and we are happy to discuss stratefies that suit both camp and educator's needs</p>
						</div>
						
						<div class="mocha-content">
							<h1>Booking</h1>
							
							<p>To book a program call our Education Coordinator at 386-WORM (9676) during our regular office hours or contact us using the form below.</p>
						</div>
						
						<div class="mocha-content contact-us-panel">
								<?php
							$contactUsText='If you have questions about our school programs or would like to book a program, call Kayla at 230-386-9676 or email using the form below.';
							set_query_var( 'contactUsText', $contactUsText );
							get_template_part( 'template-parts/contact-us' );
							?>
						</div>
					</div> <!-- test-two----------->
			</div> <!--main-grid-container  ---------------------------->
		

		</div><!-- .entry-content -->
			<section class='grey-background'>
				<div class='padding-container'>
					<h1 class='resources-title'>Teaching Resources</h1>
						<div class="teaching-resources-content">

						<?php if( have_rows('teaching_resources') ): ?>

							<?php while( have_rows('teaching_resources') ): the_row(); 
							
							// vars
							$image = get_sub_field('image');
							$title = get_sub_field('title');
							$pdf = get_sub_field('pdf');

							?>

						<section class="hentry teaching-resources-item">
							<?php if( !empty( $image ) ): ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<header class="entry-header">
								<h2 class="entry-title"><?php echo $title?></h2>
							</header><!-- .entry-header -->
							<?php
								if( $pdf ): ?>
									<a class="view-link" href="<?php echo $pdf['url']; ?>" target="_blank">Download PDF <i class="fas fa-arrow-right"></i></a>
								<?php endif; 
							?>
							<hr>
						</section>
						<?php endwhile; ?>
						<?php endif; ?>
				</div>
			</section>

		</div>

</article><!-- #post-## -->
