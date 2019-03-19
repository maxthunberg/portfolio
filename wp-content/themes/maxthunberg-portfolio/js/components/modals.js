function modalClose() {

	var modal = $('.modal');

	if ( modal.hasClass('is-visible') ) {

		modal.removeClass('is-visible');
		setTimeout(function(){
			modal.removeClass('is-active');
		},200);

	}

}

function modalOpen(className) {

	var anyModal = $('.modal');

	var modal = $(className);

	if ( !anyModal.hasClass('is-visible') ) {

		modal.addClass('is-active');
		setTimeout(function(){
			modal.addClass('is-visible');
		},50);

	}

}

if ( $('.modal').length ) {

	var modal = $('.modal');
	var container = $('.modal--container');
	var shortcuts = $('.modal--shortcuts');
	var menu = $('.modal--menu');

	$('[href="#website-shortcuts"]').click(function(){
		shortcuts.addClass('is-active');
		setTimeout(function(){
			shortcuts.addClass('is-visible');
		},50);
	});

	// Menu animations
	$('.navbar--menu').click(function(){
		menu.addClass('is-active');
		setTimeout(function(){
			menu.addClass('is-visible');
		},50);
	});

	$('.modal__close').click(function(){
			modal.removeClass('is-visible');
		setTimeout(function(){
			modal.removeClass('is-active');
		},200);
	});

	modal.click(function(){

		if ( modal.hasClass('is-visible') ) {

			modal.removeClass('is-visible');
			setTimeout(function(){
				modal.removeClass('is-active');
			},200);

		}

	});

	// You can not click on the modal container to close it
	$('.modal--container').click(function(event){
    event.stopPropagation();
	});

}
