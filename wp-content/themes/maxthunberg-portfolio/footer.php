
<div class="arrowbtns">

  <div class="arrowbtns-container">

          <div class="arrowbtns-btn arrowbtns-btn--left ui ui--white btn-prev-slide">
            <div class="arrowbtns-arrow--left"></div>
          </div>

      <div class="arrowbtns-container--updown">

          <div class="arrowbtns-btn arrowbtns-btn--top ui ui--white">
            <div class="arrowbtns-arrow--up"></div>
          </div>

          <div class="arrowbtns-btn arrowbtns-btn--bottom ui ui--white">
            <div class="arrowbtns-arrow--down"></div>
          </div>

      </div>

          <div class="arrowbtns-btn arrowbtns-btn--right ui ui--white btn-next-slide">
            <div class="arrowbtns-arrow--right"></div>
          </div>

  </div>

</div>

<?php wp_footer(); ?>

<!-- Initialize Swiper -->
<script>
var mySwiper = new Swiper ('.swiper-container', {
  spaceBetween: 64,
  speed: 350,
  slidesPerView:'auto',
  centeredSlides: true,
  loop : true,
  keyboard: true,
  initialSlide: 0,
  // slidesOffsetBefore: 4992,
  navigation: {
    nextEl: '.btn-next-slide',
    prevEl: '.btn-prev-slide',
  }

 })

// var mySwiper = new Swiper ('.swiper-container', {
//   spaceBetween: 0,
//   speed: 250,
//   slidesPerView:'auto',
//   loop : true,
//   initialSlide : 4,
//   slidesOffsetBefore: 4992,
//   nextButton: '.swiper-button-next',
//   prevButton: '.swiper-button-prev'
//
//  })


</script>
</body>
</html>
