function carouselReveal() {
		setTimeout(function() {
			$('.swiper-slide-prev.horizontal .card-lg').removeClass('animation--carouselreveal');
		}, 50);
		setTimeout(function() {
			$('.swiper-slide-active.horizontal .card-lg').removeClass('animation--carouselreveal');
		}, 100);
		setTimeout(function() {
			$('.swiper-slide-next.horizontal .card-lg').removeClass('animation--carouselreveal');
		}, 150);
		setTimeout(function() {
			$('.swiper-slide.horizontal .card-lg').removeClass('animation--carouselreveal');
		}, 300);
	}

function gridReveal() {
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(1) .card-sm').removeClass('animation--gridreveal');
		}, 50);
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(2) .card-sm').removeClass('animation--gridreveal');
		}, 100);
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(3) .card-sm').removeClass('animation--gridreveal');
		}, 150);
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(4) .card-sm').removeClass('animation--gridreveal');
		}, 200);
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(5) .card-sm').removeClass('animation--gridreveal');
		}, 250);
		setTimeout(function() {
			$('.grid-mode--container .card-container:nth-child(6) .card-sm').removeClass('animation--gridreveal');
		}, 350);
	}
