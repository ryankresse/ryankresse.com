jQuery( document ).ready(function() {
	
//FRONT PAGE SCRIPT

	var introHeading = document.querySelector('.intro-heading');
   	var introCopy = document.querySelector('.intro-copy');
   	var contactHeader = jQuery('.contact-header');
   	var contactUl = jQuery('.contact-ul');
   	var blogHeader = jQuery('.blog-header');
   	var postTeaser = jQuery('.post-teaser');
   	var contactHeadingOffset = jQuery('.contact-header').offset();
   	var contactHeadingTop = contactHeadingOffset.top;
   	var blogOffset = jQuery('.blog-header').offset(); 
   	var blogTop = blogOffset.top;
   	var emailLink = jQuery('.email-link');
   	var githubLink = jQuery('.github-link');
   	var twitterLink = jQuery('.twitter-link');
  	



	var animateContactDiv = setInterval(function () {
		var scrollPos = jQuery(document).scrollTop();
		console.log(scrollPos);

		if (scrollPos > contactHeadingTop - 600) {
			console.log('reached contact heading');
			TweenLite.to(contactHeader, .6, {opacity:"1", bottom:"0px"});
			TweenLite.to(emailLink, .4, {opacity:"0.6", bottom:"0px", delay: .7});
			TweenLite.to(githubLink, .4, {opacity:"0.6", bottom:"0px", delay: 1});
			TweenLite.to(twitterLink, .4, {opacity:"0.6", bottom:"0px", delay: 1.3});
			clearInterval(animateContactDiv);
		}
	}, 500);


	var animateBlogDiv = setInterval(function () {
		var scrollPos = jQuery(document).scrollTop();
		console.log(scrollPos);
		console.log(blogTop);

		if (scrollPos > blogTop - 600) {
			console.log('reached blog heading');
			TweenLite.to(blogHeader, .6, {opacity:"1", bottom:"0px"});
			TweenLite.to(postTeaser, .6, {opacity:"1", bottom:"0px", delay: .7});
			clearInterval(animateBlogDiv);
			clearInterval(checkWindowWidth);
		}
	}, 500);

	
   		var checkWindowWidth = setInterval(function () {
	   		var windowWidth = jQuery(window).width();
		   	if (windowWidth < 585) {
		   		console.log('mobile');
		   		jQuery('.intro-heading, .intro-copy, .contact-header, .blog-header, .post-teaser, .github-link, .twitter-link, .email-link').css({'opacity': 1, 'bottom': 0});
		   		clearInterval(animateContactDiv);
		   		clearInterval(animateBlogDiv);
		   		clearInterval(checkWindowWidth);
		   	}
	   }, 100);
	

	TweenLite.to(introHeading, .6, {opacity:"1", bottom:"0px", delay: 1});
   	TweenLite.to(introCopy, .6, {opacity:"1", bottom:"0px", delay: 1.7});





});
