$(document).ready(function () {
	$('a[href*=\\#]').on('click', function (event) {
		event.preventDefault();
		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 500);
	});

	$(document).on('click', '.js-products-menu__item', function () {
		var clickedItem = $(this);
		if (clickedItem.hasClass('active')) {return}
		var activeItem = clickedItem.parent().find('.active');
		activeItem.removeClass('active');
		clickedItem.addClass('active');
	});

});
