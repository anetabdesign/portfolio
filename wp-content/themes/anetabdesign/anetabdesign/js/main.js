(function($) {
  $(document).ready(function(){
    
	$('#mainNav').affix({
	  offset: {
		top: 600,
	  }
	})


	$("#slideshow > div:gt(0)").hide();
	
	
	setInterval(function() {
	  $('#slideshow > div:first')
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end()
		.appendTo('#slideshow');
	}, 3000);
	
	$(window).scroll(function(){
		var pos = $(window).scrollTop();
        if(pos < 1000)  
		{
			$('#slideshowColorOverlay').css('opacity' , pos/ 600);
		}			
    })
	
 });
}(jQuery));