<?php /*
 * Default Page Template
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
		<?php the_content(); ?>
	</div>
		  	
<?php endwhile; ?>

</div><!-- End of Container -->







<?php get_footer(); ?>