<div class="footer hide">

            <!-- Left -->
            <svg class="btn-arrow btn-arrow__left" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
              <path fill="#263241" fill-rule="evenodd" d="M132,376 L156,376 C157.104569,376 158,376.895431 158,378 L158,394 C158,395.104569 157.104569,396 156,396 L132,396 C130.895431,396 130,395.104569 130,394 L130,378 C130,376.895431 130.895431,376 132,376 Z M147,381 L140,386 L147,391 L147,381 Z" transform="translate(-130 -376)"/>
            </svg>


      <div class="container--updown">

          <!-- Top -->
          <svg class="btn-arrow btn-arrow__top" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
            <path fill="#263241" fill-rule="evenodd" d="M168,348 L192,348 C193.104569,348 194,348.895431 194,350 L194,366 C194,367.104569 193.104569,368 192,368 L168,368 C166.895431,368 166,367.104569 166,366 L166,350 C166,348.895431 166.895431,348 168,348 Z M180,354 L175,361 L185,361 L180,354 Z" transform="translate(-166 -348)"/>
          </svg>

          <!-- Bottom -->
          <svg class="btn-arrow btn-arrow__bottom" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
            <path fill="#263241" fill-rule="evenodd" d="M168,376 L192,376 C193.104569,376 194,376.895431 194,378 L194,394 C194,395.104569 193.104569,396 192,396 L168,396 C166.895431,396 166,395.104569 166,394 L166,378 C166,376.895431 166.895431,376 168,376 Z M185,383 L175,383 L180,390 L185,383 Z" transform="translate(-166 -376)"/>
          </svg>

      </div>


          <!-- Right -->
          <svg class="btn-arrow btn-arrow__right" xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
            <path fill="#263241" fill-rule="evenodd" d="M204,376 L228,376 C229.104569,376 230,376.895431 230,378 L230,394 C230,395.104569 229.104569,396 228,396 L204,396 C202.895431,396 202,395.104569 202,394 L202,378 C202,376.895431 202.895431,376 204,376 Z M213,381 L213,391 L220,386 L213,381 Z" transform="translate(-202 -376)"/>
          </svg>


</div>


<?php wp_footer(); ?>

<!-- Initialize Swiper -->
<script>
var horizontalSwiper = new Swiper ('.swiper-container--horizontal', {
  spaceBetween: 0,
  speed: 300,
  slidesPerView:'auto',
  centeredSlides: true,
  loop : true,
  keyboard: true,
  initialSlide: 0,
  navigation: {
    nextEl: '.btn-arrow__right',
    prevEl: '.btn-arrow__left',
  },

});


  var verticalSwiper = new Swiper('.swiper-container--vertical', {
   direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 300,
    hashNavigation: {
      replaceState: true,
    },
    initialSlide: 1,
    navigation: {
      nextEl: '.btn-arrow__bottom',
      prevEl: '.btn-arrow__top',
    },
    mousewheel: {
      invert: false,
      releaseOnEdges: false,
      sensitivity: 0,
    },

  });


 // Scroll Reveal

 //Changing the defaults
window.sr = ScrollReveal({
  origin: 'bottom',
  distance: '32px',
  reset: true,
  scale: 1,
  easing:'cubic-bezier(.25,.8,.25,1)',
  viewFactor: 0,
  viewOffset: { top: 0, right: 0, bottom: 100, left: 0 },
});

// Customizing a reveal set
sr.reveal('.revealer-0', { duration: 400, delay: 0 });
sr.reveal('.revealer-100', { duration: 400, delay: 100 });
sr.reveal('.revealer-200', { duration: 400, delay: 200 });
sr.reveal('.revealer-300', { duration: 400, delay: 300 });
sr.reveal('.revealer-400', { duration: 400, delay: 400 });
sr.reveal('.revealer-500', { duration: 400, delay: 500 });
sr.reveal('.revealer-600', { duration: 400, delay: 600 });
sr.reveal('.revealer-700', { duration: 400, delay: 700 });



</script>
</body>
</html>
