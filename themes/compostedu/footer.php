<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

<footer >
	<section class='main-footer-container'>
		<!-- Division created to make it work for tablet and desktop -->
		<div class='tablet-desktop-container'>
			<div class='footer-links'>
				 <h4>Activities</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'activities-menu', 'container_class' => 'p' ) ); ?>
			</div>	

			<div class='footer-links'>
				<h4>Resources</h4>
				<?php wp_nav_menu( array( 'theme_location' => 'resources-menu', 'container_class' => 'p') ); ?>
			</div>
		</div> 

		<!-- Division created to make it work for tablet and desktop -->
		<div class='tablet-desktop-container'>

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

		
		<div>
			<div class='social-icons-main-container'>
			<a class='fb' href='https://www.facebook.com/composteducation'><img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/fb.svg' alt='social-media-icon'></a>
			<a class='twt' href='https://twitter.com/viccomposted'><img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/twtr.svg' alt='social-media-icon'></a>
			<a class='insta' href='https://www.instagram.com/composteducation/'><img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/Insta.svg' alt='social-media-icon'></a>
			<a class='yt' href='https://www.youtube.com/channel/UCDCeINX3_s_6lGL5QrLuulA'><img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/Mail.svg' alt='social-media-icon'></a>
			<a class='mail' href='mailto:office@compost.bc.ca'><img class='icons' src='<?php echo get_template_directory_uri() ?>/images/footer/YT.svg' alt='social-media-icon'></a>
		</div>

			<div class='contact-main-container'>
				<p class='mobile-phone-number'>(250) 386-9676</p>
				<p> 1216 North Park St <br> Victoria BC <br>V8T 1C9</p>
			</div>

			<div class='hours-container'>
				<p>Wed-Sat, <br> 10:00 AM -- 4:00 PM</p>
			</div>
		</div>
	</section> <!--footer main container------->

	<section class='copyright-container'>
			<p>Copyright © 2020 Compost Education Center.
					All rights reserved.</p>
	</section>

	<?php wp_footer(); ?>
		
</footer>

	</body>
</html>
