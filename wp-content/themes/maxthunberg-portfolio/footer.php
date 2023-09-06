<?php if ( ( is_page(567) ) || ( is_page(622) ) ): ?>

<?php else: ?>
  
  <div class="footer hide">

  <div class="button button-secondary button-prev"><?php add_icon('arrow-left-large'); ?>Previous</div>
  <div class="button button-secondary button-next icon-right">Next<?php add_icon('arrow-right-large'); ?></div>

</div>
<?php endif; ?>

<?php wp_footer(); ?>

<!-- Initialize Swiper -->
<script>
var horizontalSwiper = new Swiper ('.swiper-container-horizontal', {
  spaceBetween: 0,
  speed: 400,
  loop : true,
  keyboard: true,
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 80,
  effect: "coverflow",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: false,
  },
  initialSlide: 0,
  navigation: {
    nextEl: '.button-next',
    prevEl: '.button-prev',
  },

});

</script>
</body>
</html>
