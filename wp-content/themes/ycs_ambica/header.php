<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ambica
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

<!-- Facebook Like Box -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1404443816496021&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- //Facebook Like Box -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ycs_ambica' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="masthead-wrapper" class="row twelve">
			<div class="row twelve">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="logo"></div></a>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div><!-- .site-branding -->
				<div class="address">
	                <p>
	                    9054 Metcalf Ave.<br />
	                    Overland Park<br />
	                    Kansas 66212<br />
	                </p>
	            </div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'ycs_ambica' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content row twelve">
