
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
