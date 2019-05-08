<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

	<div class="grain">

	<?php include( get_template_directory() . '/phtml-components/preloader.phtml');?>

	<div class="swiper-container swiper-container--vertical"> <!-- Container Outer Vertical Swiper-->
    <div class="swiper-wrapper"><!--Wrapper all-->

			<!--CONTACT PAGE SLIDE-->
      <div class="swiper-slide vertical contact" data-hash="about">

				<?php include( get_template_directory() . '/phtml-components/contactpage.phtml');?>

			</div>

			<!--HORIZONTAL NESTED SWIPER FOR PROJECTS-->
			<div class="swiper-slide bg-gradient vertical projects" data-hash="projects">
		    <!-- <canvas id="noise" class="noise"></canvas> -->

				<?php include( get_template_directory() . '/phtml-components/grid-mode.phtml');?>

				<div class="swiper-container swiper-container--horizontal">
						<div class="swiper-wrapper">

									<?php

									$args = array(
									'post_type' => 'projects',
									'posts_per_page' => -1,
									'orderby' => 'post_date',
									'order' => 'DESC'
									);


									// The Query
									$query = new WP_Query( $args );
									$a = -1;
									$i = 0;

									// The Loop
									if ( $query->have_posts() ) : while ( $query->have_posts() ) :
											$query->the_post();?>

											<div class="swiper-slide horizontal">

											<?php if( have_rows('project_card') ):

														while( have_rows('project_card') ): the_row();

															// vars
															$client = get_sub_field('client');
															$name = get_sub_field('name');
															$alt = get_sub_field('alt_text');
															$image = get_sub_field('image');
															$i++;
															$a++;
															$gradient = array("one", "two", "three", "four", "five", "six");
															?>


														<a class="card-link" href="<?php the_permalink(); ?>">

															<div class="card card-lg animation--carouselreveal <?= $gradient[$a]; ?>--gradient project-<?= $i ?>">

																		<div class="cardclick cardclick-<?= $i ?>"></div>

																		<div class="card-left">
																			<div class="card-text">
																				<h5 class="sub-heading-three light"><?= $client ?></h5>
																				<h2 class="heading-two light no-margin"><?= $name ?></h2>
																			</div>
																		</div>


																			<div class="card-right">
																				<?php	if( !empty($image) ):

																									echo add_image(
																										$image,  // ACF-field
																										'g_south,q_90,c_fill', // Parameters
																										'featured-image image-loaded', // Classes
																										$alt // alt text
																									);

																								endif; ?>

																			</div>

															</div>
														</a>

													<?php endwhile; ?>

											<?php endif; ?>

											</div>


									<?php endwhile; endif;?>

						</div>
				</div>

			</div>
			<!-- <div class="swiper-slide vertical projectscroll" data-hash="projectscroll">

				<div class="append">
					<?php //include( get_template_directory() . '/testajax.php');?>

				</div>

			</div> -->




    </div>
  </div>

	<!-- Notification -->
	<?php include( get_template_directory() . '/phtml-components/notifications.phtml');?>

	<!-- Modal Shortcuts -->
	<?php include( get_template_directory() . '/phtml-components/modal--shortcuts.phtml');?>

	<!-- Modal Menu -->
	<?php include( get_template_directory() . '/phtml-components/modal--menu.phtml');?>

</div>


<?php get_footer(); ?>
