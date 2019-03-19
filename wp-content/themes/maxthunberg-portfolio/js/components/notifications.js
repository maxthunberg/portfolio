function notificationActivate(className) {

	setTimeout(function(){
		$(className).addClass('is-active');
		setTimeout(function(){
			$(className).addClass('is-visible');
		},50);

	},5000);

}

function notificationClose() {

	if ( $('.notification.is-active').length ) {
		$('.notification').removeClass('is-visible');
		setTimeout(function(){
			$('.notification').removeClass('is-active');
		},200);
	}
}

$('.notification--btn').click(function() {

	$(this).parent().removeClass('is-visible');
	setTimeout(function(){
		$('.notification').removeClass('is-active');
	},50);

});


notificationActivate('.notification.start-message');
