/* Author: 

*/


$('.lightbox').fancybox();


/* Nivo Slider
**************************************/

$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'random', // Specify sets like: 'fold,fade,sliceDown'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:5000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:true, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});


$(document).ready(function() {
	// When the page loads
	$(".tab-content").hide(); //Hide ALL content
	$("ul.tabs li:first").addClass("active").show(); // Activate the first tab 
	$(".tab-content:first").show(); // Show first tab content
	
	// Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); // Remove ACTIVE class from ALL tabs
		$(this).addClass("active"); // Add ACTIVE class to the clicked tab
		$(".tab-content").hide(); // Hide ALL tabs content
		
		var activeTab = $(this).find("a").attr("href");
		$(activeTab).fadeIn(); // Fade in the NEW active tab
		return false;
	
	});

});














