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
				<div id="menu-icon" class="menu show">
					<a href="#" class="menu-button">
						<img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="Hamburger Menu">
					</a>
				</div>

				<div id="logo" class="site-branding show">
					<a href="<?php echo get_home_url() ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
					</a>
				</div><!-- .site-branding -->

				<div class="search-form-wrapper">
					<?php echo get_search_form(); ?>
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
