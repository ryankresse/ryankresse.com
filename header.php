<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description"
      content="Ryan Kresse is a Pittsburgh-based web developer. Learn about his work, read his blog and find out how to get in touch with him.">
      
     <!--facebook metas-->
     <meta property="og:title" content="Ryan Kresse | Web Developer"/>
     <meta property="og:type" content="website">
     <meta property="og:description"content= "Based in Pittsburgh, Ryan Kresse is a web developer dedicated to producing exemplary work. Learn more about him."/> 
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

<!--google fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	
	<script type="text/javascript">
		jQuery.noConflict();
		jQuery(document).ready(function($){
			$("[id^='attachment']").each(function(){ 
        		$(this).removeAttr('width');
        		$(this).removeAttr('height');
   		 });
	</script>
	
</head>

<body class ="cf" <?php body_class(); ?>  >

<div id="page" class="hfeed site cf">
	
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	
	<?php endif; ?>

	<header id="masthead" class="site-header cf" role="banner">
		<div class="header-main cf">
				
				<div class = "branding cf" role="banner">
					
					<div class = "logo">
						<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo" >
					</div><!--logo-->
				
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>


					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<!--<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>-->
						<!--<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>-->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav>

				</div><!--branding-->

		</div><!--header-main-->

	</header><!-- #masthead -->

	<div id="main" class="site-main">
