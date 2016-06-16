<?php /*
 * Template Name: Century Happenings Template
 */
?>


<?php get_header(); ?>
<?php get_template_part( 'subheader'); ?>

<div class="container page_content"> 
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="three columns">
		<div class="border_box">
			<div class="border_inner page_nav">
	            <ul>
					<?php wp_list_categories("orderby=name&hide_empty=0&title_li="); ?> 
				</ul>
	  		</div>		
		</div>

		<div class="border_box page_side">
			<div class="border_inner testimonials">
				<?php $args = array( 'post_type' => 'quotes', 'posts_per_page' => 1, 'orderby'=> 'rand' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					the_content(); 
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
	</div>	

	<div class="nine columns omega alpha ">
		<div class="landing_blocks"> 
				<div class="four columns ">
					<h2>Awards & Recognitions</h2>

					<?php
					$args = array('posts_per_page' => 1, 'cat'=> '5' );
					query_posts( $args );
					while ( have_posts() ) : the_post();?>
					 
					<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					<?php the_excerpt();?>

					<?php endwhile;

					wp_reset_query();

					?>

					<?php $category_link = get_category_link(5);?>
					<a class="more" href="<?php echo esc_url( $category_link ); ?>" title="Awards & Recognitions">view more ></a>
				</div>

				<div class="four columns ">
					<h2>Press Releases</h2>

					<?php
					$args = array('posts_per_page' => 1, 'cat'=> '3' );
					query_posts( $args );
					while ( have_posts() ) : the_post();?>
					 
					<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					<?php the_excerpt();?>

					<?php endwhile;
					wp_reset_query();
					?>

					<?php $category_link = get_category_link(3);?>
					<a class="more" href="<?php echo esc_url( $category_link ); ?>" title="Press">view more ></a>
				</div>

				<div class="four columns ">
					<h2>Events</h2>

					<?php
					$args = array('posts_per_page' => 1, 'cat'=> '4' );
					query_posts( $args );
					while ( have_posts() ) : the_post();?>
					 
					<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					<?php the_excerpt();?>

					<?php endwhile;

					wp_reset_query();

					?>

					<?php $category_link = get_category_link(4);?>
					<a class="more" href="<?php echo esc_url( $category_link ); ?>" title="Events">view more ></a>
				</div>

				<div class="four columns ">
					<h2>Archives</h2>

					<?php
					$args = array('posts_per_page' => 1, 'cat'=> '6' );
					query_posts( $args );
					while ( have_posts() ) : the_post();?>
					 
					<a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
					<?php the_excerpt();?>

					<?php endwhile;

					wp_reset_query();

					?>

					<?php $category_link = get_category_link(6);?>
					<a class="more" href="<?php echo esc_url( $category_link ); ?>" title="Events">view more ></a>
				</div>


 
		 

 
		</div>	
		 
	</div>
		  	
<?php endwhile; ?>

</div><!-- End of Container -->




<?php get_footer(); ?>