/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
 jQuery(document).ready(function($) {

    /*----------------------------------------------------*/
	/*	clients owlCarousel
    /*----------------------------------------------------*/
	let cSlide = $(".client-slide");
	cSlide.owlCarousel({
		items: 6,
		loop: true,
		autoplay: true,
		dots: false,
		navBy: 1,
		autoplayTimeout: 2500,
		autoplayHoverPause: false,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 1,
			},
			500: {
				items: 2,
			},
			767: {
				items: 3,
			},
			768: {
				items: 4,
			},
			991: {
				items: 5,
			},
			1000: {
				items: 6,
			},
		},
	});
	/*----------------------------------------------------*/
	/*	Testimonial owlCarousel
    /*----------------------------------------------------*/
	let tSlide = $(".testimonial-slide");
	tSlide.owlCarousel({
		items: 1,
		loop: true,
		autoplay: true,
		dots: true,
		nav: true,
		navText: [
			"<i class='fas fa-chevron-left'></i>",
			"<i class='fas fa-chevron-right'></i>",
		],
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 1,
			},
			767: {
				items: 1,
			},
			768: {
				items: 1,
			},
			991: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	});

});