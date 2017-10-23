
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


// Change BG Color on carousel based on what card is active


var a = [3,4,5,6,7,8,9];

var b = "MAX";


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
    changeUiColor();
  }
  else if(e.keyCode == 39) { // right
    changeBgColorNext(b);
  }
});


// var changeBgColor = function(){
//   if ($(".swiper-slide-active .one")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('one');
//         $('.carousel-bg').addClass('six');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('one');
//         $('.carousel-bg').addClass('two');
//       }
//     });
//
//   } else if ($(".swiper-slide-active .two")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('two');
//         $('.carousel-bg').addClass('one');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('two');
//         $('.carousel-bg').addClass('three');
//       }
//     });
//
//   } else if ($(".swiper-slide-active .three")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('three');
//         $('.carousel-bg').addClass('two');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('three');
//         $('.carousel-bg').addClass('four');
//       }
//     });
//
//   } else if ($(".swiper-slide-active .four")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('four');
//         $('.carousel-bg').addClass('three');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('four');
//         $('.carousel-bg').addClass('five');
//       }
//     });
//
//   } else if ($(".swiper-slide-active .five")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('five');
//         $('.carousel-bg').addClass('four');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('five');
//         $('.carousel-bg').addClass('six');
//       }
//     });
//
//   } else if ($(".swiper-slide-active .six")[0]){
//     $("body").keydown(function(e) {
//       if(e.keyCode == 37) { // left
//         $('.carousel-bg').removeClass('six');
//         $('.carousel-bg').addClass('five');
//       }
//       else if(e.keyCode == 39) { // right
//         $('.carousel-bg').removeClass('six');
//         $('.carousel-bg').addClass('one');
//       }
//     });
//
// }

// changeBgColor();







});
