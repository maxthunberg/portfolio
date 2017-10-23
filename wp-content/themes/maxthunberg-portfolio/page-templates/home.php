<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="fullpage">

	<div class="section">
      <div class="contact-bg">
        <div class="contact-info">
          <h4>DIGITAL DESIGNER</h4>
          <h2>Max Thunberg</h2>

          <div class="contact-info--paragrafs">

              <div class="contact-info--paragrafleft">
                <p class="text-white">The man who did all this is me, Max Thunberg. A digital designer from Växjö
                  in the south of Sweden currently living in Gothenburg. I am mostly focusing on
                  web development, branding, photo manipulation and more awesome areas. If you
                  are interested in getting in touch, which of course you are, simply send me
                  and <strong>e-mail</strong> or give me a <strong>call</strong>.</p>
              </div>

              <div class="contact-info--paragrafright">
                <p class="contact-paragraf--col1"><span class="bold">Advanced:</span> Adobe CC suite, Sketch, Flinto, HTML, CSS,
                  Business Development, Google Sprints & teamwork.<br /><br />
                <span class="bold">Basic:</span> PHP, JavaScript, Wordpress, Principle, Git, SASS, jQuery & Wordpress.
                </p>
              </div>

          </div>

          <div class="contact-social">
            <div class="contact-social--behance">

            </div>
            <div class="contact-social--instagram">

            </div>
            <div class="contact-social--dribbble">

            </div>


          </div>

        </div>
        <div class="contact-image">

        </div>

      </div>

  </div>

	<div class="section active">

    <!--Home page -->
    <div class="carousel-bg carousel-page one">

          <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="card one" id="one">

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
                  <div class="card two" id="two">

                    <div class="card-text--black">
                      <h4>AGROWTH</h4>
                      <h2>Branding<br />Project</h2>
                    </div>
                    <div class="card-img">
                      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                    </div>
                  </div>

                </div>


                <div class="swiper-slide">
                  <div class="card three" id="three">

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
                  <div class="card four" id="four">

                    <div class="card-text--black">
                      <h4>PERSONAL</h4>
                      <h2>Photo<br />Composition</h2>
                    </div>
                    <div class="card-img">
                      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                    </div>
                  </div>

                </div>


                <div class="swiper-slide">
                  <div class="card five" id="five">

                    <div class="card-text--white">
                      <h4>Int3 Software</h4>
                      <h2>Branding<br />Project</h2>
                    </div>
                    <div class="card-img">
                      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                    </div>
                  </div>

                </div>


                <div class="swiper-slide">
                  <div class="card six" id="six">

                    <div class="card-text--white">
                      <h4>SCHOOL</h4>
                      <h2>Icon Set:<br />Yrgo</h2>
                    </div>
                    <div class="card-img">
                      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/m-redesign-macbook--landingpage.png" />
                    </div>
                  </div>

                </div>

            </div>

        </div>




    </div>

  </div> <!--Section Two-->


  <!--section Three-->

	<div class="section">

  </div><!--Section Three-->


</div> <!--fullpage end-->




        <!-- arrow buttons-->

        <div class="button-arrows--container">


        <div class="button-arrows">

            <div class="button-arrow button-arrow--left btn-prev-slide">
              <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/icons/icn-arrow--left.svg" />
            </div>

            <div class="button-arrows--updown">

                <div class="button-arrow button-arrow--up active">
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
