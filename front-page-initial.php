<?php
/**
Template Name: Front-page
 */

get_header(); ?>



			<div class = "front_page_intro_wrapper">
				
				<div class = "front_page_intro_container">
					<h1 class = "front_page_intro">
						I'm a budding web developer who loves to build things. I can't think of anything else right now.
					</h1>
				</div><!--intro_container-->
				
			</div><!--intro_wrapper-->
			
		<div class = "below_intro_container cf">
			<div class = "front_page_bio_wrapper">
				<div class = "front_page_bio_content cf">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
					</p>
				</div><!--bio_content_content-->
			</div><!--bio-wrapper-->
					
			
			<div class = "front_page_contact_wrapper cf">
			
					<div class = "contact_header_container">
						<h2 class = "front_section_header">Do be in touch.</h2>
					</div>
					
					
					<div class = "front_page_contact_content">
						<ul>
						
							<li>
								<a href = "#"><img src="<?php echo get_template_directory_uri();?>/images/email2.png" alt="email icon" class = "contact_left"></a>
							</li>
							
							
							<li>
								<a href = "#"><img src="<?php echo get_template_directory_uri();?>/images/linkedin2.png" alt="linkedin icon" class = "contact_middle"></a>
							</li>
						
							
							
							<li>
								<a href = "#"><img src="<?php echo get_template_directory_uri();?>/images/twitter2.png" alt="email icon" class = "contact_right"></a>
							</li>
						</ul>
					</div><!--front_page_contact_content-->
			</div><!--contact_wrapper-->
			
			<div class = "front_page_blog_snippet_wrapper cf">
				<div class = "front_page_blog_snippet_content cf">
					<h2 class = "front_section_header">My latest<a href = "#" alt = "link to blog"> blog.</a></h2>	
					<?php $my_query = new WP_Query('showposts=1'); ?>	
					<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
					
					<div class="post">
						<h3 class="front_page_blog_post_title">
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>
					</div><!--post-->
 					
 					<div class="entry">
 						<?php global $more; $more = 0; ?>
						<?php the_content(); ?>
					</div><!--entry-->
					
					<?php endwhile; ?>
				
				</div><!--blog_snipper_content-->
			</div><!--blog_snippet_wrapper-->			
				
		
		</div><!--below_intro_container-->
			
<?php get_footer(); ?>
