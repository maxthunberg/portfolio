
$(document).ready(function() {
	$('#fullpage').fullpage({
		//Navigation
		menu: '#menu',
		lockAnchors: false,
		anchors:['About', 'Home', 'Project'],
		navigation: false,
		navigationPosition: 'right',
		navigationTooltips: ['firstSlide', 'secondSlide'],
		showActiveTooltip: false,
		slidesNavigation: false,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 350,
		autoScrolling: true,
		fitToSection: true,
		fitToSectionDelay: 1000,
		scrollBar: false,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
		loopBottom: false,
		loopTop: false,
		loopHorizontal: true,
		continuousVertical: false,
		continuousHorizontal: false,
		scrollHorizontally: false,
		interlockedSlides: false,
		dragAndMove: false,
		offsetSections: false,
		resetSliders: false,
		fadingEffect: false,
		normalScrollElements: '#element1, .element2',
		scrollOverflow: false,
		scrollOverflowReset: false,
		scrollOverflowOptions: null,
		touchSensitivity: 15,
		normalScrollElementTouchThreshold: 5,
		bigSectionsDestination: null,

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,

		//Design
		controlArrows: true,
		// verticalCentered: true,
		// sectionsColor : ['#ccc', '#fff'],
		// paddingTop: '3em',
		// paddingBottom: '10px',
		// fixedElements: '#header, .footer',
		// responsiveWidth: 0,
		// responsiveHeight: 0,
		// responsiveSlides: false,
		// parallax: false,
		// parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

		//Custom selectors
		sectionSelector: '.section',
		slideSelector: '.slide',

		lazyLoading: true,

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){},
		afterResize: function(){},
		afterResponsive: function(isResponsive){},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
		onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
	});



// Change BG Color on carousel based on what card is active// Change BG Color on carousel based on what card is active
// Change BG Color on carousel based on what card is active// Change BG Color on carousel based on what card is active

		var changeBgColorPrev = function() {

						if ( $('.one').parent().hasClass('swiper-slide-active')) {
							$('.carousel-bg').removeClass('one')
							$('.carousel-bg').addClass('six');

						} else if ( $('.two').parent().hasClass('swiper-slide-active')) {
								$('.carousel-bg').removeClass('two')
								$('.carousel-bg').addClass('one');

						} else if ( $('.three').parent().hasClass('swiper-slide-active')) {
								$('.carousel-bg').removeClass('three')
								$('.carousel-bg').addClass('two');

						} else if ( $('.four').parent().hasClass('swiper-slide-active')) {
								$('.carousel-bg').removeClass('four')
								$('.carousel-bg').addClass('three');

						} else if ( $('.five').parent().hasClass('swiper-slide-active')) {
								$('.carousel-bg').removeClass('five')
								$('.carousel-bg').addClass('four');

						} else if ( $('.six').parent().hasClass('swiper-slide-active')) {
								$('.carousel-bg').removeClass('six')
								$('.carousel-bg').addClass('five');
						}

		}

		var changeBgColorNext = function() {

		    if ( $('.one').parent().hasClass('swiper-slide-active')) {
		      $('.carousel-bg').removeClass('one')
		      $('.carousel-bg').addClass('two');

		    } else if ( $('.two').parent().hasClass('swiper-slide-active')) {
		        $('.carousel-bg').removeClass('two')
		        $('.carousel-bg').addClass('three');

		    } else if ( $('.three').parent().hasClass('swiper-slide-active')) {
		        $('.carousel-bg').removeClass('three')
		        $('.carousel-bg').addClass('four');

		    } else if ( $('.four').parent().hasClass('swiper-slide-active')) {
		        $('.carousel-bg').removeClass('four')
		        $('.carousel-bg').addClass('five');

		    } else if ( $('.five').parent().hasClass('swiper-slide-active')) {
		        $('.carousel-bg').removeClass('five')
		        $('.carousel-bg').addClass('six');

		    } else if ( $('.six').parent().hasClass('swiper-slide-active')) {
		        $('.carousel-bg').removeClass('six')
		        $('.carousel-bg').addClass('one');
		    }

		}

		$("body").keydown(function(e) {
		  if(e.keyCode == 37) { // left
				changeBgColorPrev();
		  }
		  else if(e.keyCode == 39) { // right
		    changeBgColorNext();
		  }
		});



// Grid & Carousel icon animation // Grid & Carousel icon animation // Grid & Carousel icon animation
// Grid & Carousel icon animation // Grid & Carousel icon animation // Grid & Carousel icon animation

		// Carousel
		$(".header-displaymode--carousel").hover(function(){
		    $('.icn-carousel--card0').css("width", "5px");
				$('.icn-carousel--card0').css("left", "0px");
			},
			function(){
				$('.icn-carousel--card0').css("width", "0px");
				$('.icn-carousel--card0').css("left", "0px");
		});

		$(".header-displaymode--carousel").hover(function(){
		    $('.icn-carousel--card1').css("width", "12px");
				$('.icn-carousel--card1').css("left", "7px");
			},
			function(){
				$('.icn-carousel--card1').css("width", "5px");
				$('.icn-carousel--card1').css("left", "0px");
		});

		$(".header-displaymode--carousel").hover(function(){
		    $('.icn-carousel--card2').css("left", "21px");
		    $('.icn-carousel--card2').css("width", "5px");
			},
			function(){
				$('.icn-carousel--card2').css("left", "7px");
				$('.icn-carousel--card2').css("width", "12px");
		});

		$(".header-displaymode--carousel").hover(function(){
		    $('.icn-carousel--card3').css("right", "0px");
				$('.icn-carousel--card3').css("width", "0px");
			},
			function(){
				$('.icn-carousel--card3').css("right", "0px");
				$('.icn-carousel--card3').css("width", "5px");
		});


		// Grid
		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card1').css("left", "2px");
				$('.icn-grid--card1').css("top", "4px");
			},
			function(){
				$('.icn-grid--card1').css("left", "2px");
				$('.icn-grid--card1').css("top", "3px");
		});

		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card2').css("left", "10px");
				$('.icn-grid--card2').css("top", "4px");
			},
			function(){
				$('.icn-grid--card2').css("left", "10px");
				$('.icn-grid--card2').css("top", "3px");
		});

		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card3').css("right", "2px");
				$('.icn-grid--card3').css("top", "4px");
			},
			function(){
				$('.icn-grid--card3').css("right", "2px");
				$('.icn-grid--card3').css("top", "3px");
		});

		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card4').css("left", "2px");
				$('.icn-grid--card4').css("bottom", "4px");
			},
			function(){
				$('.icn-grid--card4').css("left", "2px");
				$('.icn-grid--card4').css("bottom", "3px");
		});

		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card5').css("left", "10px");
				$('.icn-grid--card5').css("bottom", "4px");
			},
			function(){
				$('.icn-grid--card5').css("left", "10px");
				$('.icn-grid--card5').css("bottom", "3px");
		});

		$(".header-displaymode--grid").hover(function(){
				$('.icn-grid--card6').css("right", "2px");
				$('.icn-grid--card6').css("bottom", "4px");
			},
			function(){
				$('.icn-grid--card6').css("right", "2px");
				$('.icn-grid--card6').css("bottom", "3px");
		});


		$(window).scroll(function() {
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 500) {
        //clearHeader, not clearheader - caps H
        $(".animate-col1").css('margin-left','0px');
        $(".animate-col1").css('opacity','1');
    } else {
			  $(".animate-col1").css('margin-left','-64px');
		    $(".animate-col1").css('opacity','0.2');
		}
		});

		$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		 //>=, not <=
		if (scroll >= 500) {
				//clearHeader, not clearheader - caps H
				$(".animate-col2").css('margin-left','0px');
				$(".animate-col2").css('opacity','1');
		} else {
				$(".animate-col2").css('margin-left','-256px');
				$(".animate-col2").css('opacity','0.2');
		}
		});

		$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		 //>=, not <=
		if (scroll >= 500) {
				//clearHeader, not clearheader - caps H
				$(".animate-col3").css('margin-left','0px');
				$(".animate-col3").css('opacity','1');
		} else {
				$(".animate-col3").css('margin-left','-512px');
				$(".animate-col3").css('opacity','0.2');
		}
		});

		});


		// JavaScript
		window.sr = ScrollReveal();
		sr.reveal('.revealer');
