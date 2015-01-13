<?php
/**
Template Name: Portfolio
 */

?>
<!DOCTYPE html>
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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <div class="main">
	    <section class="page1">
        	<div class=" page_container page_container1">
            	<div class = "project-description">
              		<a href = "http://cravegiftbaskets.com">
                    <h1 class = "project-title black-border-bottom"> 
                		  Crave
              		  </h1>
              		</a>
                  <p class = "project-copy">
                	Built with Wordpress for a friend, of a friend, of a friend, of a friend. <a href = "http://cravegiftbaskets.com">Cravegiftbaskets.com</a> is responsive, clean and has a little CMS that makes updating content a cinch.
              		</p>
            	</div>
            	<div class = "project-image-container">
                <img src="<?php echo get_template_directory_uri();?>/images/crave_ipad.png" alt="Crave website" class = "device-image small-device-image">   
            		<img src="<?php echo get_template_directory_uri();?>/images/crave_ipad_partial_2.png" alt="Crave website" class = "device-image crave-big-image">			
            	</div>
  	    	</div>
  	    </section>
	  	<section class="page2">
	      <div class="page_container page_container2 align-image-left">
          	 <div class = "project-description description-aligned-right">
                  <a href = "http://cravegiftbaskets.com">
                    <h1 class = "project-title"> 
                      Twitter Stream
                    </h1>
                  </a>
                  <p class = "project-copy">
                  A Node/Socket.io/Angular app that lets you stream tweets that come from a specific location and that contain certain words. Want to know when someone in Lincoln, Nebraska tweets about alfalfa? <a href = "https://tweetstreaming.herokuapp.com">Twitter Stream</a> has you covered.
                  </p>
              </div>
              <div class = "project-image-container image-aligned-left">
                <img src="<?php echo get_template_directory_uri();?>/images/tweetsteam-small.png" alt="My project, tweet sream" class = "device-image small-device-image">   
                <img src="<?php echo get_template_directory_uri();?>/images/macbook_air_partial.png" alt="My project, tweet sream"  class = "device-image tweetstream-big-image image-floating-left">      
              </div>
	      </div>
     	</section>
     

    </div><!--main-->
     <ul class = 'page-indicator'>
        <li class = 'indicator-circle first-indicator-circle cf'>
        
        </li>
        <li class = 'indicator-circle cf'>
        
        </li>
      </ul>

											
					
<?php get_footer(); ?>
