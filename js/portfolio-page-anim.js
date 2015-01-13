



jQuery( document ).ready(function() {
	


   	//PORTFOLIO PAGE SCRIPT

   	var currentIndex = 1;
  	var pageContainers = document.querySelectorAll('.page_container');
    var pageIndicatorCircles = document.querySelectorAll('.indicator-circle');
    var length = pageIndicatorCircles.length;
    
    onePageScroll(".main", {
      sectionContainer: "section",
      loop: false,
      responsiveFallback: false,
      pagination: false,  
      
      beforeMove: function(index, next_el) {
       
       //need this declared here or i will equal length -1 after the first move
       var i = 0;
       
       //fading out the content that is displayed
       var currentSection = pageContainers[currentIndex - 1];
       TweenLite.to(currentSection, .6, {opacity:"0", bottom:"15px"});
       index > currentIndex ? currentIndex += 1 : currentIndex -= 1;
       console.log(index);
       
       //changing the page indicator circle
       for (; i < length; i++) {
          if (i == index - 1) {
            pageIndicatorCircles[i].style.background = "#000";
          }
          else {
            pageIndicatorCircles[i].style.background = "#ccc";
          }
       }

     },
 
      afterMove: function(index, next_el) {
       var newSection = pageContainers[currentIndex - 1];
       TweenLite.to(newSection, .6, {opacity:"1", bottom:"0px"});
     },
 
   });




});

