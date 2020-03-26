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
		<style></style>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<!-- <div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div> -->

				<div>

					<div>

						<div class="compostedu-menu">
							<label class="compostedu-menu-item-1" for="tm" id="toggle-menu"><i class="fas fa-bars"></i></label>

							<div id="logo" class="site-branding compostedu-menu-item-2">
								<a href="<?php echo get_home_url() ?>">
									<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/header/logo@3x.png" alt="Logo">
								</a>
							</div><!-- .site-branding -->

							<div id="form-wrapper" class="search-form-wrapper search-menu-header compostedu-menu-item-3">
								<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<label class="show-search-menu">
										<input type="search" class="search-field-menu" placeholder="Search the site" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
									</label>
									<button class="search-submit button-search-menu show-search-button-menu">
										<span class="icon-search" aria-hidden="true">
											<i class="fa fa-search"></i>
										</span>
										<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
									</button>
									<button class="button-search-menu expand-search-button-menu">
										<span class="icon-search" aria-hidden="true">
											<i class="fa fa-search"></i>
										</span>
									</button>
								</form>
							</div>
						</div>
						
						<nav id="menu" class="compostedu-menu-desktop">
							<div id="logo" class="site-branding compostedu-menu-item-desktop-1">
								<a href="<?php echo get_home_url() ?>">
									<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/header/logo@3x.png" alt="Logo">
								</a>
							</div><!-- .site-branding -->

							<div class=compostedu-menu-item-desktop-2>
								<input type="checkbox" id="tm">
								<ul class="main-menu cf">
									<li><a href="<?php echo get_home_url() ?>">Home</a></li>
									<li>
										<a class="menu-item" href="#">Activities
										<span class="drop-icon">▾</span>
										<label title="Toggle Drop-down" class="drop-icon" for="sm-activities">▾</label>
										</a>
										<input type="checkbox" id="sm-activities">
										<ul class="sub-menu">
											<li><a href="<?php echo get_post_type_archive_link( 'adult_workshop' ) ?>">Adult Workshops</a></li>
											<li><a href="<?php echo get_post_type_archive_link( 'community_workshop' ) ?>">Community Workshops</a></li>
											<li>
												<a class="menu-item" href="#">School Programs
												<span class="drop-icon">▸</span>
												<label title="Toggle Drop-down" class="drop-icon" for="sm-school-programs">▾</label>
												</a>
												<input type="checkbox" id="sm-school-programs">
												<ul class="sub-menu">
												<li><a href="<?php echo get_permalink( get_page_by_title( 'About School Programs' ) ); ?>">About School Programs</a></li>
												<li><a href="<?php echo get_post_type_archive_link( 'composting_for_kids' ) ?>">Composting For Kids</a></li>
												<li><a href="<?php echo get_post_type_archive_link( 'intermediate_program' ) ?>">Intermediate Programs</a></li>
												<li><a href="<?php echo get_post_type_archive_link( 'high_school_program' ) ?>">High School Programs</a></li>
												</ul>
											</li>
											<li>
												<a class="menu-item" href="#">Healing City Soils
												<span class="drop-icon">▸</span>
												<label title="Toggle Drop-down" class="drop-icon" for="sm-healing-city-soils">▾</label>
												</a>
												<input type="checkbox" id="sm-healing-city-soils">
												<ul class="sub-menu">
												<li><a href="<?php echo get_permalink( get_page_by_title( 'About Healing City Soils' ) ); ?>">About Healing City Soils</a></li>
												<li><a href="<?php echo get_permalink( get_page_by_title( 'Victoria Soil Quality Map' ) ); ?>">Victoria Soil Quality Map</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a class="menu-item" href="#">Resources
										<span class="drop-icon">▾</span>
										<label title="Toggle Drop-down" class="drop-icon" for="sm-resources">▾</label>
										</a>
										<input type="checkbox" id="sm-resources">
										<ul class="sub-menu">
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Fact Sheets' ) ); ?>">Fact Sheets</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Teaching Garden' ) ); ?>">Teaching Garden</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Third Party Resources' ) ); ?>">Third Party Resources</a></li>
											<li><a href="<?php echo get_post_type_archive_link( 'product' ) ?>">Products</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-item" href="#">Get Involved
										<span class="drop-icon">▾</span>
										<label title="Toggle Drop-down" class="drop-icon" for="sm-get-involved">▾</label>
										</a>
										<input type="checkbox" id="sm-get-involved">
										<ul class="sub-menu">
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Membership' ) ); ?>">Membership</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Donate' ) ); ?>">Donate</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Volunteer' ) ); ?>">Volunteer</a></li>
										</ul>
									</li>
									<li>
										<a class="menu-item" href="#">About Us
										<span class="drop-icon">▾</span>
										<label title="Toggle Drop-down" class="drop-icon" for="sm-about-us">▾</label>
										</a>
										<input type="checkbox" id="sm-about-us">
										<ul class="sub-menu">
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Who We Are' ) ); ?>">Who We Are</a></li>
											<li><a href="<?php echo get_post_type_archive_link( 'people' ) ?>">People</a></li>
											<li><a href="<?php echo get_post_type_archive_link( 'post' ) ?>">News</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Annual Reports' ) ); ?>">Annual Reports</a></li>
											<li><a href="<?php echo get_permalink( get_page_by_title( 'Funders' ) ); ?>">Funders</a></li>
										</ul>
									</li>
									<li><a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) ); ?>">Contact Us</a></li>
									<li><a class="menu-item-donate btn-red" href="<?php echo get_permalink( get_page_by_title( 'Donate' ) ); ?>">Donate</a></li>
								</ul>
							</div>

							<div id="form-wrapper" class="search-form-wrapper search-menu-header compostedu-menu-item-desktop-3">
							<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
								<label class="show-search-menu">
									<input type="search" class="search-field-menu" placeholder="Search the site" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
								</label>
								<button class="search-submit button-search-menu show-search-button-menu">
									<span class="icon-search" aria-hidden="true">
										<i class="fa fa-search"></i>
									</span>
									<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
								</button>
							</form>
							</div>
						</nav>
					</div>
					
				</div>
				
			</header><!-- #masthead -->

			<div id="content" class="site-content">
