function menuColorSwitch(element) {

	if ( $('.navbar--logo.project').length ) {

		$(window).on('scroll', function() {

				var section = $('.ui-section');
				var el = $(element);
				var elPos = el.offset().top;

				section.each(function(el) {

					var thisSection = $(this);
					var thisSectionPos = $(this).offset().top - 96;
					var el = $(element);

					if ( thisSection.hasClass('focus-area') || thisSection.hasClass('project-overview') || thisSection.hasClass('fullwidth-image') ) {
							var thisSectionPos = $(this).offset().top - 0;
					}

					if ( elPos >= thisSectionPos ) {

							if ( thisSection.hasClass('dark-section') ) {
								el.removeClass("light");
							} else {
								el.addClass("light");
							}

					}

				});

		});

	}

}

menuColorSwitch('.navbar--menu .line-1');
menuColorSwitch('.navbar--menu .line-2');
menuColorSwitch('.navbar--menu span');
