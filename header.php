<?php
/**
  * The Header for our theme.
  *
  * Displays all of the <head> section and everything up till <div id="main">
  *
  * @package WordPress
  * @subpackage Steel
  * @since Steel 1.0
  */
	$ui_settings = get_settings_config( 'ui' );
?>

<!DOCTYPE html>
<html id="<?php echo str_replace( '.', '-', $_SERVER['HTTP_HOST'] ); ?>" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />

		<?php
			/* ----- Mobile tags ----- */
			include 'inc/meta/mobile.php';

			/* ----- Facebook OG tags ----- */
			if ( get_settings_config( 'facebook' ) ) {
				include 'inc/meta/facebook.php'; 
			}
		
			/* ----- Twitter Hover Card tags ----- */
			if ( get_settings_config( 'twitter' ) ) {
				include 'inc/meta/twitter.php'; 
			}

			/* ----- Google Plus Publisher tags ----- */
			if ( get_settings_config( 'google_plus' ) ) {
				include 'inc/meta/google_plus.php'; 
			}

			/* ----- Stack Exchange Open ID tags ----- */
			if ( get_settings_config( 'stackexchange' ) ) {
				include 'inc/meta/google_plus.php'; 
			}

			/* ----- Profile links ----- */
			include 'inc/meta/profile.php'; 

			/* ----- Bitly Shortener ----- */
			if ( get_settings_config( 'bitly' ) ) { ?>
				<link rel="shortlink" href="<?php echo bitly_shortlink(); ?>" />
		<?php 
			} 
		?>

		<!-- Canonical -->
        <link rel="canonical" href="<?php echo esc_url( home_url() ); ?>" />

		<!-- RSS Feed / Alternate Links -->
		<link rel="alternate" href="<?php echo get_feed_link(); ?>" title="RSS Feed for <?php bloginfo( 'name' ); ?>" type="application/rss+xml" />

		<?php 
			/* ----- Meta links ----- */
			include 'inc/meta/links.php'; 
		
			/* ----- Favicon links ----- */
			if ( ! empty( $ui_settings['favicons'] ) ) {
				include 'inc/meta/favicons.php';
			}

			/* ----- Stylesheets ----- */
			the_stylesheets( null, null );

			/* ----- Analytics ----- */
			if ( get_settings_config( 'google_analytics' ) ) {
				include 'inc/meta/analytics.php';
			} 
		?>

		<!--[if lt IE 9]>
		<script src="<?php echo scripts_path_url( 'html5.js' ); ?>"></script>
		<![endif]-->

		<!-- Title -->
		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</a>

				<div id="navbar" class="navbar">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'steel' ); ?></h3>
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'steel' ); ?>"><?php _e( 'Skip to content', 'steel' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						<?php get_search_form(); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
			</header><!-- #masthead -->

			<div id="main" class="site-main">
