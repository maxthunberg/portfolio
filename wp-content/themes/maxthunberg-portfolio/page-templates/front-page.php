<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

	<div class="grain">

	<?php // include( get_template_directory() . '/phtml-components/preloader.phtml');?>

	<?php include( get_template_directory() . '/phtml-components/grid-mode.phtml');?>

	<div class="swiper-container swiper-container-horizontal">
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

					<!-- <div class="swiper-slide horizontal"> -->

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

			
								<a class="swiper-slide horizontal card-link" href="<?php the_permalink(); ?>">

									<div class="card carousel animation--carouselreveal <?= $gradient[$a]; ?>--gradient project-<?= $i ?>">

										<div class="left-container">
											<h5 class="sub-heading-three light"><?= $client ?></h5>
											<h2 class="heading-two light no-margin"><?= $name ?></h2>
										</div>

										<div class="right-container">

											<?php	if( !empty($image) ):

													echo add_image(
														$image,  // ACF-field
														'g_south,q_70,c_fill,f_auto', // Parameters
														'featured-image image-loaded', // Classes
														$alt // alt text
													);

													

											endif; ?>

										</div>

									</div>
								</a>

							<?php endwhile; ?>

					<?php endif; ?>

					<!-- </div> -->


			<?php endwhile; endif;?>

		</div>
	</div>

</div>


<?php get_footer(); ?>
