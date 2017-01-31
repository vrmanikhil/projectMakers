$(document).ready(function () {
	var slidesPerView = 1;
	if ($(document).width() > 768) {
		slidesPerView = 2;
	}
	window.mySwiper = new Swiper ('.swiper-container', {
		loop: true,
		spaceBetween: 50,
		slidesPerView: slidesPerView,
		pagination: '.swiper-pagination',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev'
	});
});
