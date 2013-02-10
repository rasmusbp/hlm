(function ($) { 
		
		
		// TOP SLIDER
		var shft = 5000;
		
		setInterval(function rotateImages() {
			var CurPhoto = $(".slider-imgs div.current");
			var NxtPhoto = CurPhoto.next();
			

			if (NxtPhoto.length == 0)
				NxtPhoto = $(".slider-imgs div:first");
			
			CurPhoto.removeClass("current").addClass("prev");
			NxtPhoto.css({opacity: 0}).addClass("current").animate({opacity: 1}, 1000,
				function() {
					CurPhoto.removeClass("prev");
			});
			
			
		}, shft);
	
$(document).ready(function() {

			rotateImages();	
	
}); // <-- Document Ready

})(jQuery);