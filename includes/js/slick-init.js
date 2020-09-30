jQuery(document).ready(function($){
	$('.post-items').slick({
		slidesToShow: 3,
		slideToScroll: 1,
		autoplay: true,
		arrows: true,
		autoplaySpeed: 2000,
		dots: true,
		centerMode: false,
		focusOnSelect: true
	});
});