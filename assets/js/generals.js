$(document).ready(function () {
	$('.owl-carousel').owlCarousel({
		loop: false,
		margin: 10,
		dotsClass: 'owl-dots',
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})
});
