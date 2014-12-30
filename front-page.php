<?php
/**
Template Name: Front-page
 */

get_header(); ?>



			<div class = "front-page-section-wrapper intro-wrapper cf">
				<div class = "intro-container">
					<h1 class = 'front-page-heading intro-heading' >
						Ryan Kresse					
					</h1>
					<p  class = "front-page-copy-one intro-copy">
						<?php the_field('copy'); ?>
					</p>
				</div><!--intro_container-->
			</div><!--intro_wrapper-->
			<div class = "divider"></div>
			<div class = "front-page-section-wrapper contact-wrapper cf">
				<div class = "contact-container cf">
					<h1 class= "contact-header" >Get in touch.</h1>
						<ul class = "cf contact-ul">
							
							<li class = "email-link">
								<a href = "http://ryankresse.com/contact/"><img src="<?php echo get_template_directory_uri();?>/images/email2.png" alt="email icon" ></a>
							</li>
							<li class = "github-link">
								<a href = "https://github.com/ryankresse"><img src="<?php echo get_template_directory_uri();?>/images/github.png" alt="Git hub icon" ></a>
							</li>
							<li class = "twitter-link">
								<a href = "https://twitter.com/RKresse"><img src="<?php echo get_template_directory_uri();?>/images/twitter2.png" alt="email icon" ></a>
							</li>
						</ul>
				</div><!--front_page_contact_container-->
			</div><!--contact_wrapper-->
			<div class = "divider"></div>
			<div class = "front-page-section-wrapper blog-wrapper cf">
				<div class = "blog-container cf">
					<h1 class = 'front-page-heading blog-header'>From the<a href = "http://ryankresse.com/blog" alt = "link to blog"> blog.</a></h1>	
						<?php $my_query = new WP_Query('showposts=1'); ?>	
						<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="post-teaser">
						<h3 class="front-page-blog-post-title">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>
					
	 					<div class="entry">
	 						<?php global $more; $more = 0; ?>
							<?php the_content(); ?>
						</div><!--entry-->
						
						<?php endwhile; ?>
					</div><!--post-->
				</div><!--blog_snipper_container-->
			</div><!--blog_snippet_wrapper-->			
					
<?php get_footer(); ?>
