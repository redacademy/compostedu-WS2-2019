<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

<!-- <a> TAG LINK TO BE ADDED TO ALL THE <p> TAGS  -->

<footer >
	<section class='main-footer-container'>
		<div>
			<div class='footer-links'>
				 <h4>Activities</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'activities-menu', 'container_class' => 'p' ) ); ?>
			</div>	

			<div class='footer-links'>
				<h4>Resources</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'resources-menu', 'container_class' => 'p') ); ?>
			</div>
		</div> 

		<div>

			<div class='footer-links'>
				<h4>Get Involved</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'get-involved-menu', 'container_class' => 'p' ) ); ?>
				<br>
				<br>
			</div>	

			<div class='footer-links'>
				<h4>About Us</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'about-us-menu', 'container_class' => 'p' ) ); ?>
			</div>
		</div>

		<div class='social-icons-main-container'>
			<img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/fb.svg' alt='social-media-icon'>
			<img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/twtr.svg' alt='social-media-icon'>
			<img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/Insta.svg' alt='social-media-icon'>
			<img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/Mail.svg' alt='social-media-icon'>
			<img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/YT.svg' alt='social-media-icon'>
		</div>

		<div class='contact-main-container'>
			<p class='mobile-phone-number'>(250) 386-9676</p>
			<p> 1216 North Park St <br> Victoria BC <br>V8T 1C9</p>
		</div>

		<div class='hours-container'>
			<p>Wed-Sat, <br> 10:00 AM -- 4:00 PM</p>
		</div>
	</section> <!--footer main container------->

	<section class='copyright-container'>
			<p>Copyright © 2020 Compost Education Center.  <br>
					All rights reserved.</p>
	</section>

	<?php wp_footer(); ?>
		
</footer>

	</body>
</html>
