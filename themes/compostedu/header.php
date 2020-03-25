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
								<a href="<?php echo get_home_url() ?>"><li>Home</li></a>
								
								<li class="arrow activities">Activities <img id="arrow_right-activities" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "activities-submenu" class="activites activities-hide-submenu sub-menu">
										<a href="<?php echo get_template_directory_uri();?>/archive-adult_workshop.php"><li>Adult Workshops</li></a>
										<a href="<?php echo get_template_directory_uri();?>/archive-community_workshop.php"><li>Community Workshops</li></a>
										
										<li class="arrow school-programs">School Programs <img id="arrow_right-school" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
											<ul id="school-programs-submenu" class="school school-programs-hide-submenu sub-sub-menu">
												<a href="<?php echo get_template_directory_uri();?>/page-about-school-programs.php"><li>About School Programs</li></a>
												<a href="<?php echo get_template_directory_uri();?>/archive-composting_for_kids.php"><li>Composting For Kids</li></a>
												<a href="<?php echo get_template_directory_uri();?>/archive-intermediate_program.php"><li>Intermediate Programs</li></a>
												<a href="<?php echo get_template_directory_uri();?>/archive-high_school_program.php"><li>High School Programs</li></a>
											</ul>
										
										<li class="arrow healing-city-soils">Healing City Soils <img id="arrow_right-healing" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
											<ul id="healing-city-soils-submenu" class="healing healing-city-soils-hide-submenu sub-sub-menu">
												<a href="<?php echo get_template_directory_uri();?>"><li>About Healing Soils</li></a>
												<a href="<?php echo get_template_directory_uri();?>/page-victoria-soil-quality-map.php"><li>Victoria Soil Quality Map</li></a>
											</ul>
									</ul>
								
								<li class="arrow resources">Resources <img id="arrow_right-resources" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "resources-submenu" class="resources resources-hide-submenu sub-menu ">
										<a href="<?php echo get_template_directory_uri();?>/page-fact-sheets.php"><li>Fact Sheets</li></a>
										<a href="<?php echo get_template_directory_uri();?>/paage-teaching-garden.php"><li>Teaching Garden</li></a>
										<a href="<?php echo get_template_directory_uri();?>/page-third-party-resources.php"><li>Third Party Resources</li></a>
										<a href="<?php echo get_template_directory_uri();?>/archive-product.php"><li>Products</li></a>
									</ul>
								</li>
								
								<li class="arrow get-involved">Get Involved <img id="arrow_right-get-involved" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "get-involved-submenu" class="involved get-involved-hide-submenu sub-menu">
										<a href="<?php echo get_template_directory_uri();?>/page-membership.php"><li>Membership</li></a>
										<a href="<?php echo get_template_directory_uri();?>/page-donate.php"><li>Donate</li></a>
										<a href="<?php echo get_template_directory_uri();?>/page-volunteer.php"><li>Volunteer</li></a>
									</ul>
								
								<li class="arrow about-us">About Us <img id="arrow_right-about-us" src="<?php echo get_template_directory_uri();?>/images/header/arrow-right.svg" alt="Arrow Right"></li>
									<ul id= "about-us-submenu" class="about sub-menu about-us-hide-submenu">
										<a href="<?php echo get_template_directory_uri();?>/page-who-we-are.php"><li>Who We Are</li></a>
										<a href="<?php echo get_template_directory_uri();?>/archive-people.php"><li>People</li></a>
										<a href="<?php echo get_template_directory_uri();?>"><li>News</li></a>
										<a href="<?php echo get_template_directory_uri();?>/page-annual-reports.php"><li>Annual Reports</li></a>
										<a href="<?php echo get_template_directory_uri();?>/page-funders"><li>Funders</li></a>
									</ul>
								<a href="<?php echo get_template_directory_uri();?>/page-contact-us.php"><li>Contact Us</li></a>
								<a href="<?php echo get_template_directory_uri();?>/page-donate.php"><li class="donate">Donate</li></a>
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
			</header><!-- #masthead -->

			<div id="content" class="site-content">
