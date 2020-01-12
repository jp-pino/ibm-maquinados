$(document).ready(function() {
	$.each($('.parallax'), function() {
		offset = $(this).data('offset');
		$(this).css("background-position-y", (offset + 'px'));
	});
});

$(window).scroll(function() {
	var scrolled = $(window).scrollTop();
	$.each($('.parallax'), function() {
		let offset = scrolled - $(this).position().top;
		$(this).css("background-position-x", 'center');
		if ($(window).width() <= 500) {
			$(this).css("background-position-y", (offset * 0.05 + $(this).data('offset')) + 'px');
		} else {
			$(this).css("background-position-y", (-offset * 0.85 + $(this).data('offset-lg')) + 'px');
		}
	});

	$.each($(".reveal"), function() {
		var offset = $(this).offset().top - 750;
		if ($(window).width() <= 500)
			 offset = $(this).offset().top - 500;
		if (offset <= scrolled) {
			$(this).removeClass("opacity-0");
			$(this).addClass("opacity-100");
		} else {
			$(this).removeClass("opacity-100");
			$(this).addClass("opacity-0");
		}
	});

	if ($(window).width() <= 500) {
		$.each($(".scroll-shrink"), function() {
			if ($(this).offset().top <= scrolled + 200) {
				$(this).addClass("scale-90");
			} else {
				$(this).removeClass("scale-90");
			}
		});
	}
});
