$(document).ready(function() {

	function preloaderCounter() {
			var i = 0;

			// This block will be executed 100 times.
			setInterval(function(){
				var preloader = $('.preloader');
				var complete = $('.progress.completed');

					if (i == 100) {
						$('.preloader .counter').text('100');
						preloader.fadeOut(500);

					} else {
						$('.preloader .bar .progress').css('width', i++ + '%');
					}

					if (complete.length) {
						setTimeout(function() { //
							$('.preloader .counter').text('100');
						}, 200);
					} else {
						$('.preloader .counter').text(i++);
					}

			}, 100); // Max 5000 ms before removing preloader

	} // End

	if (!$.cookie('loaded')) {

		$('.preloader .preloader--container').removeClass('hide');

		// show preloader
		preloaderCounter();

		$(window).on('load', function () {

				 console.log("Window Loaded");

				 $('.preloader .bar .progress').addClass('completed');

				 setTimeout(function() { //
					 $('.preloader .counter').text('100');
				 }, 200);

				 setTimeout(function() {
					 $('.preloader').fadeOut(500);
 						carouselReveal();
				 }, 500);

		});

	// create cookie
	$.cookie('loaded', true, {expires: 30});

	} else {

		$('.preloader').addClass('hide');
		carouselReveal();

	}

});
