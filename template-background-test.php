<?php /*
 * Template Name: Background Layout Test Template
 * Once approved, this will take the place of the page.php template
 */
?>


<?php get_header(); ?>
<?php //get_template_part( 'subheader'); ?>

<div class="container page_content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	

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

		<?php if (! is_page(109)){ ?>
		<div class="border_box page_side testimonials">
			<div class="border_inner testimonials">
				<?php $args = array( 'post_type' => 'quotes', 'posts_per_page' => 1, 'orderby'=> 'rand' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					the_content(); ?>
				<?php
				endwhile;
				wp_reset_query();
				?>
			</div>
		</div>
		<?php } ?>
	</div>

	<div class="nine columns content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

</div><!-- End of Container -->







<?php get_footer(); ?>
