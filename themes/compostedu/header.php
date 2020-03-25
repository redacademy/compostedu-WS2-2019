<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="first-sight-header">
					<div class="menu show">
						<nav id="navigation" class="main-navigation ">
							<button id="menu-button" class="menu-toggle" aria-controls="primary-meenu" aria-expanded="false">
								<img src="<?php echo get_template_directory_uri(); ?>/images/header/menu.svg" alt="Menu Icon">
							</button>
							<ul id="primary-menu" class="primary-menu hide-primary-menu">
								<li>Home</li>
								<li class="arrow activities">Activities <img id="arrow_right-activities" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "activities-submenu" class="activities-hide-submenu sub-menu">
										<li>Adult Workshops</li>
										<li>Community Workshops</li>
										<li class="arrow school-programs">School Programs <img id="arrow_right2" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
											<ul id="school-programs-submenu" class="school-programs-submenu sub-menu hide-submenu">
												<li>About School Programs</li>
												<li>Composting For Kids</li>
												<li>Intermediate Programs</li>
												<li>High School Programs</li>
											</ul>
										<li class="arrow healing-city-soils">Healing City Soils <img id="arrow_right3" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
											<ul id="healing-city-soils-submenu" class="healing-city-soils-hide-submenu sub-menu">
												<li>About Healing Soils</li>
												<li>Victoria Soil Quality Map</li>
											</ul>
									</ul>
								<li class="arrow resources">Resources <img id="arrow_right-resources" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "resources-submenu" class="resources-hide-submenu sub-menu ">
										<li>Fact Sheets</li>
										<li>Teaching Garden</li>
										<li>Third Party Resources</li>
										<li>Products</li>
									</ul>
								</li>
								<li class="arrow get-involved">Get Involved <img id="arrow_right-get-involved" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "get-involved-submenu" class="get-involved-hide-submenu sub-menu">
										<li>Membership</li>
										<li>Donate</li>
										<li>Volunteer</li>
									</ul>
								<li class="arrow about-us">About Us <img id="arrow_right-about-us" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "about-us-submenu" class="sub-menu about-us-hide-submenu">
										<li>Who We Are</li>
										<li>People</li>
										<li>News</li>
										<li>Annual Reports</li>
										<li>Funders</li>
									</ul>
								<li>Contact Us</li>
								<li class="donate">Donate</li>
							</ul>
						</nav>
					</div>
					
					<div id="logo" class="site-branding show">
						<a href="<?php echo get_home_url() ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/header/logo@3x.png" alt="Logo">
						</a>
					</div><!-- .site-branding -->
					
					<div id="form-wrapper" class="search-form-wrapper">
						<?php echo get_search_form(); ?>
					</div>
				</div>

				<div id="menu-bar" class="menu-bar hide-menu">
					<?php wp_nav_menu() ?>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
