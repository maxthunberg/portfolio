
$(document).ready(function() {

    function carouselReveal() {
            if ( $('.swiper-slide.horizontal .card.carousel.floating') ) {
                $('.swiper-slide.horizontal .card.carousel').removeClass('floating');
            }
            setTimeout(function() {
                $('.swiper-slide-prev.horizontal .card.carousel').removeClass('animation--carouselreveal');
            }, 100);
            setTimeout(function() {
                $('.swiper-slide-active.horizontal .card.carousel').removeClass('animation--carouselreveal');
            }, 150);
            setTimeout(function() {
                $('.swiper-slide-next.horizontal .card.carousel').removeClass('animation--carouselreveal');
            }, 200);
            setTimeout(function() {
                $('.swiper-slide.horizontal .card.carousel').removeClass('animation--carouselreveal');
                $('.swiper-slide.horizontal .card.carousel').addClass('floating');
            }, 300);
    }

    function gridReveal() {
            if ( $('.grid-mode .card.grid.floating') ) {
                $('.grid-mode .card.grid').removeClass('floating');
            }
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(1) .card.grid').removeClass('animation--gridreveal');
            }, 100);
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(2) .card.grid').removeClass('animation--gridreveal');
            }, 150);
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(3) .card.grid').removeClass('animation--gridreveal');
            }, 200);
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(4) .card.grid').removeClass('animation--gridreveal');
            }, 250);
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(5) .card.grid').removeClass('animation--gridreveal');
            }, 300);
            setTimeout(function() {
                $('.grid-mode--container .card-link:nth-child(6) .card.grid').removeClass('animation--gridreveal');
                $('.grid-mode .card.grid').addClass('floating');
            }, 400);
    }

    function navbarScrollSwitch(element) {

        if ( $('.project-content').length ) {

            if ( $('.hero.ui-section').hasClass('dark-section') ) {
                $(element).addClass("light");
            } else if ( $('.hero.ui-section').hasClass('light-section') ) {
                $(element).removeClass("light");
            }

            $(window).on('scroll', function() {

                var section = $('.ui-section');
                var el = $(element);
                var elPos = el.offset().top;

                section.each(function(el) {

                    var thisSection = $(this);
                    var thisSectionPos = $(this).offset().top - 20;
                    var el = $(element);

                    if ( elPos >= thisSectionPos ) {

                        if ( thisSection.hasClass('dark-section') ) {
                            el.addClass("light");
                        } else {
                            el.removeClass("light");
                        }
                    }
                });
            });
        }
    }

    navbarScrollSwitch('.navbar .button');

    function resetCardAnimation() {

        if ( $('.swiper-slide-active .card.click').length ) {

            horizontalSwiper.enable();

            var gridHidden = $('.grid-mode.hide').length;

            if ( gridHidden ) {

                var goToURL = $('.swiper-slide-active.horizontal').attr('href'); // store anchor href

                // Card clicked gets class click -> Which will create expand animation
                setTimeout(function() {
                    $('.footer').removeClass('hide');
                    $('.navbar').removeClass('hide');   
                    $('.swiper-slide-active.horizontal .card').addClass('floating');
                    $('.swiper-slide-active.horizontal .card').removeClass('click');
                }, 200)
            }
        }
    }

    function enterAnimationToProject() {

        horizontalSwiper.disable();

    	var gridHidden = $('.grid-mode.hide').length;

    	if ( gridHidden ) {

    		var goToURL = $('.swiper-slide-active.horizontal').attr('href'); // store anchor href

    		// Card clicked gets class click -> Which will create expand animation
            setTimeout(function() {
                $('.swiper-slide-active.horizontal .card').addClass('click');
                $('.swiper-slide-active.horizontal.card-link').addClass('click');
                $('.swiper-slide-active.horizontal .card').removeClass('floating');
                $('.navbar').addClass('hide');
                $('.footer').addClass('hide');
            }, 0);

    		setTimeout(function() {
    			window.location = goToURL;
    		}, 250);
    	}
    }

    function cardClickAnimation() {

        $('.swiper-slide.horizontal.card-link').click(function(e) {

            e.preventDefault(); // prevent default anchor behavior

            // save index of clicked card
            var index = horizontalSwiper.clickedIndex;

            // Slide to index of clicked card
            horizontalSwiper.slideTo(index);

            // This to that in order for it to work insie a setTimeout function
            var card = $(this).children('.card');

            // Link href which is the destination URL
            var goToURL = this.getAttribute("href"); // store anchor href

            // Card clicked gets class click -> Which will create expand animation
            setTimeout(function() {
                card.addClass('click');
                card.removeClass('floating');
                $('.navbar').addClass('hide');
                $('.footer').addClass('hide');
            }, 250);

            setTimeout(function() {
                // Disable slide to avoid any sliding during expand animation
                horizontalSwiper.disable();
            }, 350);

            setTimeout(function() {
                window.location = goToURL;
            }, 550);

        });

    }

    if ( $('.navbar.front-page').length ) {

        cardClickAnimation();

    }

    function escapeReturnFrontpage() {

    	if ( $('.navbar .button-back').length ) {

    		var getUrl = window.location;
    		var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";

    		window.location = baseUrl;

    	}

    }

    if ($('.swiper-slide').length) {

        function activateGridMode() {

            // Switch between screens
            horizontalSwiper.disable();
            $('.grid-mode').removeClass('hide');
            $('.swiper-container-horizontal').addClass('hide');

            // Switch of icons
            $('.grid-mode__button').addClass('selected');
            $('.carousel-mode__button').removeClass('selected');

            // Change label text under icons
            $('.display-mode .caption').text('Change Grid (G)').fadeIn();

    		setTimeout(function() {
    		     $('.card.carousel').addClass('animation--carouselreveal');
    		}, 200);

    		gridReveal();

        }


        function activateCarouselMode() {

            // Switch between screens
            $('.grid-mode').addClass('hide');
            $('.swiper-container-horizontal').removeClass('hide');
            horizontalSwiper.enable();

            // Switch of icons
            $('.grid-mode__button').removeClass('selected');
            $('.carousel-mode__button').addClass('selected');

            // Change label text under icons
            $('.display-mode .caption').text('Change Grid (G)').fadeIn();

    		setTimeout(function() {
    		$('.card.grid').addClass('animation--gridreveal');
    		}, 200);

    		carouselReveal();

        }

        carouselReveal();


        // Function to animate carousel on hover
          var carouselHoverAnimation = function() {

            var navbarCarousel = $(".carousel-mode__button");
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
            var navbarGrid = $(".grid-mode__button");
            var gridCard = $('.icn-grid--card');

            navbarGrid.hover(function() {
    							gridCard.toggleClass('hover');
            });
        }


        // ON LOAD CHECK PAGE


        if ($(".projects").hasClass("swiper-slide-active")) { // If PROJECTS PAGE ON LOAD
            keyAboutToHome();

        } else if ($(".contact").hasClass("swiper-slide-active")) { // If CONTACT PAGE ON LOAD
            keyHomeToAbout();
        }

        gridHoverAnimation();
        carouselHoverAnimation();

    }


    //KEYS NAV
    $(document).keydown(function(e) {
        switch (e.which) {
    		case 37: // left
                horizontalSwiper.slidePrev();
    		break;

    		case 39: // right
                horizontalSwiper.slideNext();
    		break;

    		case 13: // enter 
    			enterAnimationToProject();
    		break;

    		case 27: // ESC
                escapeReturnFrontpage();
    		break;

    		case 71: // G-key

                if ( $('.carousel-mode__button.selected').length ) {
                    console.log('Activate Grid');
                    activateGridMode();
                } else {
                    console.log('Activate Carousel');
                    activateCarouselMode();
                }

    		break;

    		default:
    		return; // exit this handler for other keys
        }
            e.preventDefault(); // prevent the default action (scroll / move caret)
    });



    $('.grid-mode__button').click(function() {
        activateGridMode();
    });

    $('.carousel-mode__button').click(function() {
        activateCarouselMode();
    }); 


    setTimeout(function() {
        $('.navbar').removeClass('hide');
        $('.footer').removeClass('hide');
    }, 200);


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

    // // If browser back button was used, flush cache
    // (function () {
    //     window.onpageshow = function(event) {
    //         if (event.persisted) {
    //             window.location.reload();
    //         }
    //     };
    // })();

    window.addEventListener("pageshow", function(event) {
      if (event.persisted) {
        console.log("Browser back clicked");
        resetCardAnimation();
      } else {
        console.log("Fresh Page");
      }
    });

}); 

// alert(performance.getEntriesByType("navigation")[0].type);