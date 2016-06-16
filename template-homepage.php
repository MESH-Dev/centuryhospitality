<?php /*
 * Template Name: Homepage Template
 */
?>

	<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<!-- HOMEPAGE SLIDER -->
	<div class="slides">
		<ul class="rslides">
			<?php if(get_field('rotating_images'))
			{

				while(has_sub_field('rotating_images'))
				{?>
				<li>
					<img src="<?php echo get_sub_field('image')?>" alt="" title="">
					<div class="container">
						<!-- <div class="home_quote_container">
							 <div class="home_quote">
								<p><?php echo get_sub_field('quote')?></p>
							</div>
						</div> -->
					</div>
				</li>

				<?
				}
			}?>

		</ul>
	</div>

	<div class="banner">
		<div class="container container_logos">
			<div class=" logos">
 

					<ul>
 

							<?php 
							if (have_rows('hotel_logos')) :
							while(have_rows('hotel_logos')) : the_row();

								$image = get_sub_field('image');
								//var_dump($image);
								$image_URL = $image['sizes']['small'];
								//var_dump($image_URL);
							?>
								<li>
									<a href="<?php echo get_sub_field('link')?>" target="_blank">
										<img src="<?php echo $image_URL; ?>" alt="" title="">
									</a>
								</li>
							<?php endwhile; endif;?>
 

					</ul>
 

			</div>
		</div>
	</div>

	<div class="container home">
		<div class="six columns ">
			<div class="border_box">
				<div class="home_callout">
					<h2><a href="<?php echo get_field('left_link')?>"><?php echo get_field('left_callout_box')?></a></h2>
				</div>
			</div>
		</div>
		<div class="six columns ">
			<div class="border_box callout">
				<div class="home_callout">
					<h2><a href="<?php echo get_field('right_link')?>"><?php echo get_field('right_callout_box')?></a></h2>
				</div>
			</div>
		</div>

		<!-- <div class="twelve columns home_line"> </div> -->

		<div class="twelve columns home_column">
			<!-- <h2><?php echo get_field('left_box_title')?></h2> -->

				<?php echo get_field('left_box_content')?>
			
			<!-- <a class="more" href="<?php echo get_field('left_box_link')?>" title="<?php echo get_field('left_box_title')?>">read more ></a> -->
		</div>

		<!-- <div class="four columns home_column">
			<h2><?php echo get_field('middle_box_title')?></h2>
			<?php echo get_field('middle_box_content')?>
			<a class="more" href="<?php echo get_field('middle_box_link')?>" title="<?php echo get_field('middle_box_title')?>">read more ></a>
		</div>

		<div class="four columns home_column">
			<h2><?php echo get_field('Right_box_title')?></h2>
			<?php echo get_field('Right_box_content')?>
			<a class="more" href="<?php echo get_field('right_box_link')?>" title="<?php echo get_field('Right_box_title')?>">read more ></a>
		</div> -->


			<?php endwhile; ?>

	</div><!-- End of Container -->







	<?php get_footer(); ?>
