<?php /*
 * Template Name: Map Template
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'subheader'); ?>

<div class="container page_content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<div class="twelve columns content">
		<?php the_content(); ?>
	</div>

	

<?php endwhile; ?>

</div><!-- End of Container -->







<?php get_footer(); ?>
