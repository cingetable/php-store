$(document).ready(function () {
	$('.header_burger').click(function (event) {
		$('.header_burger,.header_menu').toggleClass('active');
		$('body').toggleClass('lock');
	})
	$('.header_burger:before').click(function (event) {
		$('.header_burger,.header_menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
	$('.header_burger:after').click(function (event) {
		$('.header_burger,.header_menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
