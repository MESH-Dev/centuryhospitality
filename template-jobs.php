<?php /*
 * Template Name: Jobs Template
 */
?>

<?php get_header(); ?>
<?php get_template_part('subheader'); ?>

<div class="container page_content"> 

	

	<div class="three columns">
		<?php 
            //get parent title
            global $post;
            if(is_page() && $post->post_parent) {
        			$pid = $post->post_parent;
              $thepermalink = get_permalink( $pid );
            } 
		?>

		<?php
	 	//list parent child pages
	 	if($post->post_parent)
			$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&depth=1");
		else
			$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&depth=1");
    
    	if ($children) { ?>
			<div class="border_box">  
				<div class="border_inner page_nav">
					<ul>
		  				<?php echo $children; ?>
		  			</ul>         	
		  		</div>		
			</div>
	<?php }  ?>

		<div class="border_box page_side testimonials">
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

	<div class="seven offset-by-one columns content">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; wp_reset_query();?>


		<?php	
		//Get each location
		$terms = get_terms("location");
		$count = count($terms);

		if ( $count > 0 ){
		     foreach ( $terms as $term ) { ?>
		        <h2><?php echo $term->name; ?></h2>
		    	
		    	<?php 
		    		$args = array(
						'post_type'=> 'Jobs',
						'location'    => $term->name,
						'order'    => 'ASC'
					);
					query_posts( $args );
					 while ( have_posts() ) : the_post(); ?>
						<h3 class="job_title"><?php the_title();?> </h3>
						<div class="job_description">
							<?php the_content(); ?>

							<p>
								<a href="<?php bloginfo('url');?>/careers/job-application-form/?jobname=<?php the_title();?> - <?php echo $term->name; ?>" class="applynow" > Apply Now! </a>
							</p>
						</div>
					<?php endwhile; wp_reset_query();?>
					
		    <?php }
	 	}?>

	</div>
		  	
</div><!-- End of Container -->



<?php get_footer(); ?>