<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="contact-bg">

</div>
<!--Home page -->
<div class="carousel-bg one" id="carousel-bg">

      <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="card one">

                <div class="card-text--white">
                  <h4>ALFA LAVAL</h4>
                  <h2>Landing<br />Page</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="card two">

                <div class="card-text--white">
                  <h4>AGROWTH</h4>
                  <h2>Branding<br />Project</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="card three">

                <div class="card-text--white">
                  <h4>CARIBOU</h4>
                  <h2>Travel<br />App</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>
            </div>


            <div class="swiper-slide">
              <div class="card four">

                <div class="card-text--white">
                  <h4>AGROWTH</h4>
                  <h2>Branding<br />Project</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="card five">

                <div class="card-text--white">
                  <h4>AGROWTH</h4>
                  <h2>Branding<br />Project</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="card six">

                <div class="card-text--white">
                  <h4>AGROWTH</h4>
                  <h2>Branding<br />Project</h2>
                </div>
                <div class="card-img">
                  <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                </div>
              </div>

            </div>

        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>



    <!-- arrow buttons-->

    <div class="button-arrows">

        <div class="button-arrow button-arrow--left btn-prev-slide">
          <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-arrow--left.svg" />
        </div>

        <div class="button-arrows--updown">

            <div class="button-arrow button-arrow--up">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-arrow--up.svg" />
            </div>

            <div class="button-arrow button-arrow--down">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-arrow--down.svg" />
            </div>

        </div>

        <div class="button-arrow button-arrow--right btn-next-slide">
          <img class="arrow-right--image" src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-arrow--right.svg" />
        </div>

    </div>




</div>


<?php get_footer(); ?>
