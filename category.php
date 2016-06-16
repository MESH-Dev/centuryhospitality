<?php /*
 * Template Name: Century Happenings Template
 */
?>


<?php get_header(); ?>
<?php get_template_part( 'subheader'); ?>

<div class="container page_content"> 
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
				
			<?php

			global $query_string;
			query_posts( $query_string . '&posts_per_page=-1' );

			while ( have_posts() ) : the_post();?> 
			<div class="four columns ">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
				<?php the_excerpt();?>
				<a class="more" href="<?php the_permalink(); ?>" title="<?php the_title();?>">read more</a>
			</div>
				<?php endwhile;	
			wp_reset_query();

			?>
				

 
		</div>	
		 
	</div>
		  	


</div><!-- End of Container -->




<?php get_footer(); ?>