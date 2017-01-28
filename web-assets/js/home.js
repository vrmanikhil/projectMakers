$(document).ready(function () {
	var slidesPerView = 1;
	if ($(document).width() > 768) {
		slidesPerView = 2;
	}
	var mySwiper = new Swiper ('.swiper-container', {
		loop: true,
		spaceBetween: 50,
		slidesPerView: slidesPerView,
		pagination: '.swiper-pagination',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev'
	});
	adjustFooter();
	$(window).resize(adjustFooter);
});

function adjustFooter() {
	setTimeout(function () {
		$('body > footer').css('flex-shrink', '0');
	}, 200);
}
