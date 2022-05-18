jQuery(document).ready(function ($) {
	$("h1, h2, h3, h4, h5, h6").addClass("font-head");
	$("p, a, button").addClass("font-body");

	$(".project_cat  li").addClass("js-filter-item");

	let btn = $("#button");
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "100");
	});

	$(window).scroll(function () {
		let logo = $(".logo2");
		let sticky = $(".header"),
			scroll = $(window).scrollTop();

		if (scroll >= 80) {
			sticky.addClass("menu-sticky");
			logo.html(`
				<img class="" 
				src="/wp-content/uploads/2022/03/logo-blue.png" 
				alt="Flower and sky"
				/>
			`);
		} else {
			sticky.removeClass("menu-sticky");
			logo.html(`
				<img class="" 
				src="/wp-content/uploads/2022/03/logo-white.png" 
				alt="Flower and sky"
				/>
			`);
		}
	});

	// Accordian Action
	$(".faq_q").on("click", function () {
		$(this)
			.next()
			.slideToggle(500)
			// selects all other answers and slides up any open answer
			.siblings(".faq_a")
			.slideUp();
		// Grab img from clicked question
		let arrow = $(this).children(".faq_t");
		// remove Rotate class from all images except the active
		$(".faq_t").not(arrow).removeClass("rotate");
		// toggle rotate class
		arrow.toggleClass("rotate");
	});

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

let topbar = document.querySelector(".topbar");
let menu = document.querySelector(".menu");
let hamburgerLabel = document.querySelector(".label-text");

// const menuDisplay = false;

const toggleNav = () => {
	topbar.classList.toggle("active");
	menu.classList.toggle("active");

	if (menu.classList.contains("hidden")) {
		menu.classList.add("flex-col");
		menu.classList.remove("hidden");
		hamburgerLabel.innerHTML = "close";
	} else {
		menu.classList.add("hidden");
		menu.classList.remove("flex-col");
		hamburgerLabel.innerHTML = "menu";
	}
};
