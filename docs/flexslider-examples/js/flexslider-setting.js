jQuery( document ).ready( function($) {

	/* === FLEXSLIDER Settings Example === */

	/* Basic HTML or Image Slider */
	$('.flexslider.basicslide').flexslider({
		slideshow: true
	});

	/* Slider With Thumbnail as Navigation */
	$('.flexslider.thumbnav').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});

	/* Carousel Slider */
	$('.flexslider.carousel').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 150,
		itemMargin: 5,
		minItems: 4,
		maxItems: 4
	});

});
