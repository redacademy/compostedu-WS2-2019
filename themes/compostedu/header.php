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
					<div id="menu-icon" class="menu show">
						<nav id="site-navigation" class="main-navigation menu-bar" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<img src="<?php echo get_template_directory_uri(); ?>/images/header/menu.svg" alt="Menu Icon">
							</button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
					
					<div id="logo" class="site-branding show">
						<a href="<?php echo get_home_url() ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" alt="Logo">
						</a>
					</div><!-- .site-branding -->
					
					<div id="form-wrapper" class="search-form-wrapper">
						<?php echo get_search_form(); ?>
					</div>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
