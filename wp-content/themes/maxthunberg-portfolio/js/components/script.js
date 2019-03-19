$(document).ready(function() {

    // FUNCTIONS

    //Down button changes

    var downUiActive = function() {
        $(".btn-arrow__bottom").addClass('selected');
    }
    var downUiDeactive = function() {
        $(".btn-arrow__bottom").removeClass('selected');
    }


    //Up button changes

    var upUiActive = function() {
        $(".btn-arrow__top").addClass('selected');
    }

    var upUiDeactive = function() {
        $(".btn-arrow__top").removeClass('selected');
    }

    //Right button changes

    var rightUiActive = function() {
        $(".btn-arrow__right").addClass('selected');
    }
    var rightUiDeactive = function() {
        $(".btn-arrow__right").removeClass('selected');
    }

    //Left button changes
    var leftUiActive = function() {
        $(".btn-arrow__left").addClass('selected');
    }
    var leftUiDeactive = function() {
        $(".btn-arrow__left").removeClass('selected');
    }

    // deactive UI icons


    var keyAboutToHome = function() {
        if ($('.grid-mode__btn').hasClass('selected')) {
            upUiActive();
            downUiDeactive();
            leftUiDeactive();
            rightUiDeactive();

        } else if ($('.carousel-mode__btn').hasClass('selected')) {
            upUiActive();
            downUiDeactive();
            leftUiActive();
            rightUiActive();
        }
    }

    var keyHomeToAbout = function() {
        upUiDeactive();
        downUiActive();
        leftUiDeactive();
        rightUiDeactive();
    }


		function enterAnimationToProject() {

      modalClose();
      notificationClose();

			var gridHidden = $('.grid-mode.hide').length;
			var contactActive = $('.swiper-slide-active.vertical.contact').length;

			if ( gridHidden && !contactActive ) {

				var cardActive = $('.swiper-slide-active.horizontal .card-link');

				var goTo = cardActive.attr('href'); // store anchor href

				setTimeout(function() {
					window.location = goTo;
				}, 650);

				// Card clicked gets class click -> Which will create expand animation
				setTimeout(function() {
						$(cardActive).addClass('click');
						$('.navbar--logo').addClass('hide');
						$('.navbar--displaymode').addClass('hide');
						$('.navbar--menu').addClass('hide');
						$('.footer').addClass('hide');
				}, 350);

			}

		}

		function escapeReturnFrontpage() {

			if ( $('.navbar--logo.project').length ) {

				var getUrl = window.location;
				var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";

				window.location = baseUrl;

			}

		}



    if ($('.swiper-slide').length) {


        function activateGridMode() {

            // Switch between screens
            $('.grid-mode').removeClass('hide');
            $('.swiper-container-horizontal').addClass('hide');

            // Switch of icons
            $('.grid-mode__btn').addClass('selected');
            $('.carousel-mode__btn').removeClass('selected');

            // Change label text under icons
            $('.display-mode__caption').text('Change grid (G)').fadeIn();


            if ($(".swiper-slide.vertical.projects").hasClass("swiper-slide-active")) {

                rightUiDeactive();
                leftUiDeactive();
                upUiActive();
                downUiDeactive();

            } else if ($(".swiper-slide.vertical.contact").hasClass("swiper-slide-active")) {

                rightUiDeactive();
                leftUiDeactive();
                upUiDeactive();
                downUiActive();
                verticalSwiper.slideNext();

            }

						setTimeout(function() {
						$('.card-lg').addClass('animation--carouselreveal');
					  }, 200);

						gridReveal();

        }


        function activateCarouselMode() {

            // Switch between screens
            $('.grid-mode').addClass('hide');
            $('.swiper-container-horizontal').removeClass('hide');

            // Switch of icons
            $('.grid-mode__btn').removeClass('selected');
            $('.carousel-mode__btn').addClass('selected');

            // Change label text under icons
            $('.display-mode__caption').text('Change grid (G)').fadeIn();


            if ($(".swiper-slide.vertical.projects").hasClass("swiper-slide-active")) {

                rightUiActive();
                leftUiActive();
                upUiActive();
                downUiDeactive();

            } else if ($(".swiper-slide.vertical.contact").hasClass("swiper-slide-active")) {

                rightUiDeactive();
                leftUiDeactive();
                upUiDeactive();
                downUiActive();
                verticalSwiper.slideNext();
            }

						setTimeout(function() {
						$('.card-sm').addClass('animation--gridreveal');
						}, 200);

						carouselReveal();

        }


        function cardClickAnimation() {

            $('.swiper-slide.horizontal .card-link').click(function() {

                // save index of clicked card
                var index = horizontalSwiper.clickedIndex;

                // Slide to index of clicked card
                horizontalSwiper.slideTo(index);

                // This to that in order for it to work insie a setTimeout function
                var that = this;

                // Card clicked gets class click -> Which will create expand animation
                setTimeout(function() {
                    $(that).addClass('click');
                    $('.navbar--logo').addClass('hide');
        						$('.navbar--displaymode').addClass('hide');
                    $('.navbar--menu').addClass('hide');
                    $('.footer').addClass('hide');
                }, 350);

            });

        }

        cardClickAnimation();



        $('.card-link').click(function(e) {

            e.preventDefault(); // prevent default anchor behavior

            var goTo = this.getAttribute("href"); // store anchor href

            setTimeout(function() {
                window.location = goTo;
            }, 650);

        });


        // Function to animate carousel on hover
	      var carouselHoverAnimation = function() {

	        var navbarCarousel = $(".carousel-mode__btn");
	        var card = $('.icn-carousel--card');
					var cardTwo = $('.icn-carousel--card:nth-child(2)');
					var cardThree = $('.icn-carousel--card:nth-child(3)');
					var cardFour = $('.icn-carousel--card:nth-child(4)');

	        navbarCarousel.hover(function() {
	                card.toggleClass('hover');
					});

        }


      	// Function to animate grid on hover
        var gridHoverAnimation = function() {
            var navbarGrid = $(".grid-mode__btn");
            var gridCard = $('.icn-grid--card');

            navbarGrid.hover(function() {
								gridCard.toggleClass('hover');
            });
        }

        // Clicks arrows --> changes arrow styling

        $('.btn-arrow__top').click(function() {
            keyHomeToAbout();
        });

        $('.btn-arrow__bottom').click(function() {
            keyAboutToHome();
        });


        // ON LOAD CHECK PAGE


        if ($(".projects").hasClass("swiper-slide-active")) { // If PROJECTS PAGE ON LOAD
            keyAboutToHome();

        } else if ($(".contact").hasClass("swiper-slide-active")) { // If CONTACT PAGE ON LOAD
            keyHomeToAbout();
        }

        // if vertical swipe change ui arrows
        verticalSwiper.on('slideChange', function() {
            if ($(".projects").hasClass("swiper-slide-active")) { // If PROJECTS PAGE ON LOAD
                keyHomeToAbout();

            } else if ($(".contact").hasClass("swiper-slide-active")) { // If CONTACT PAGE ON LOAD
                keyAboutToHome();

            }
        });

        gridHoverAnimation();
        carouselHoverAnimation();

    }


		//KEYS NAV
		$(document).keydown(function(e) {
				switch (e.which) {
						case 37: // left

								break;

						case 38: // up
								keyHomeToAbout();
								verticalSwiper.slidePrev();

								break;

						case 39: // right

								break;

						case 40: // down
								keyAboutToHome();
								verticalSwiper.slideNext();

								break;

						case 13: // enter

								enterAnimationToProject();

								break;

						case 27: // ESC

                if ( !$('.modal.is-visible').length ) {
                  escapeReturnFrontpage();
                }

                modalClose();
                notificationClose()

								break;

						case 83: // S-key

								modalOpen('.modal--shortcuts');

								break;

						case 71: // G-key

                if ( $('.carousel-mode__btn.selected').length ) {
                  activateGridMode();
                } else {
                  activateCarouselMode();
                }

								break;

            case 77: // M-key

						      modalOpen('.modal--menu');

                break;


						default:
						return; // exit this handler for other keys
				}
				e.preventDefault(); // prevent the default action (scroll / move caret)
		});



    $('.grid-mode__btn').click(function() {
        activateGridMode();
    });

    $('.carousel-mode__btn').click(function() {
        activateCarouselMode();
    });


    setTimeout(function() {
        $('.navbar--logo').removeClass('hide');
				$('.navbar--displaymode').removeClass('hide');
				$('.navbar--menu').removeClass('hide');
        $('.footer').removeClass('hide');
    }, 200);



$('.card-link .card-sm').click(function(){
	$(this).addClass('click');
});


// Function to change favicon images depending on url
var changeFaviconImages = function() {
		if (document.location.href.indexOf("agrowth") >= 0 ) {
				var sHref = $("#favicon").attr("href").replace("favicon.ico", "favicon-agrowth.ico");
				$("#favicon").attr("href", sHref);
		} else if (document.location.href.indexOf("sendify") >= 0 ) {
				var sHrefTwo = $("#favicon").attr("href").replace("favicon.ico", "favicon-sendify.ico");
				$("#favicon").attr("href", sHrefTwo);
		} else if (document.location.href.indexOf("express-delivery") >= 0 ) {
				var sHrefTwo = $("#favicon").attr("href").replace("favicon.ico", "favicon-express-delivery.ico");
				$("#favicon").attr("href", sHrefTwo);
		} else if (document.location.href.indexOf("humblebee") >= 0 ) {
				var sHrefTwo = $("#favicon").attr("href").replace("favicon.ico", "favicon-humblebee.ico");
				$("#favicon").attr("href", sHrefTwo);
		} else if (document.location.href.indexOf("int3") >= 0 ) {
				var sHrefTwo = $("#favicon").attr("href").replace("favicon.ico", "favicon-int3-software.ico");
				$("#favicon").attr("href", sHrefTwo);
		} else {

		}
}

changeFaviconImages();


// Type section functionality

$('.type-area .type-sm').click(function(){
	$('.type-area textarea').addClass('sm');
	$('.type-area textarea').removeClass('md');
	$('.type-area textarea').removeClass('lg');
});

$('.type-area .type-md').click(function(){
	$('.type-area textarea').removeClass('sm');
	$('.type-area textarea').addClass('md');
	$('.type-area textarea').removeClass('lg');
});

$('.type-area .type-lg').click(function(){
	$('.type-area textarea').removeClass('sm');
	$('.type-area textarea').removeClass('md');
	$('.type-area textarea').addClass('lg');
});




});
