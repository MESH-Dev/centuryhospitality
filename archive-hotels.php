<?php 

?>

<?php get_header(); ?>
<?php //get_template_part( 'subheader'); ?>

<div class="container page_content">
	<h1>Current Portfolio</h1>
	<div class="map" id="map" style=" background-image:url('<?php bloginfo('template_url' );?>/images/ch_map_new.png')">

		<?php 
		$hotel_locs = get_terms('city');
		foreach($hotel_locs as $hotel_loc){

			$hotel = $hotel_loc->name;
		?>
		<ul class="pin <?php echo $hotel_loc->slug; ?>"><?php //echo $hotel_loc->slug; ?>
			
			<!-- <ul> -->
				<li class="tooltip_container">
			<ul class="tooltip_wrapper"><li>
				<h4><?php echo $hotel_loc->name;?></h4>

				<div class="tooltip">
				<?php 

                  $args2 = array(
                  			'post_status' => 'publish',
                          'post_type' => 'hotels',
                          'order_by' => 'name',
                          'order' => 'ASC',
                          'posts_per_page' => -1,
                          

                          'tax_query' => array(
										array(
											'taxonomy' => 'city',
											'field'    => 'slug',
											'terms'    => $hotel,
										),
									),
                  );

                  $the_query = new WP_Query( $args2 );
            	?>

           		 <?php if ( $the_query->have_posts() ) : 

                  //$card_ct=0;

                  while ($the_query->have_posts()) : $the_query->the_post();

                  // $output_hotel ='';
                  // $output_city = '';

                  // $separator = ' ';


                  //$citys = get_the_terms($post->ID, 'city');  //Grammar violation, but helps with foreach setup
                  //var_dump('$citys');
                  // $hotel = get_the_terms($post->ID, 'hotel_family');

                  // $hotel_name2 = get_field('hotel_title', $post->ID);
                  //var_dump($hotel_name);
                  // $hotel_description = get_field('hotel_description', $post->ID);
                  // $hotel_family_icon = get_field('hotel_family_icon', $post->ID);
                  // $portfolio_images = get_field('hotel_portfolio_images', $post->ID);
                  // $hotel_link = get_field('hotel_link');

                  //Sanitize the hotel title so that it can be used for the href in our list
                  $title = get_the_title();
                  $preg_title = str_replace(array('#038;','&','.',','),'', $title);
                  $the_parts = explode(" ", $preg_title);
                  $the_whole = strtolower(implode("-", $the_parts));
                  $the_id = str_replace(array('--','/'),'-', $the_whole);

                  $is_cs = get_field('coming_soon', $post->ID);

                  $publish = get_post_status($ID);

                  if ($publish == 'publish') {
                  ?>

                  <div><a href="#<?php if($is_cs == 'true'){echo 'coming-soon';} else{ echo $the_id;} ?>"><?php the_title(); ?> <?php if($is_cs == "true"){ echo '<span class="cs"><sup>*</sup>Coming Soon</span>'; }?></a></div>

                  <? } endwhile; endif; wp_reset_query(); ?>

              	</div>
              </li>
			</ul><!-- end tooltip_wrapper -->
		</li>
              		<!-- </ul> -->
		</ul>
		<?php } ?>
	</div>

	<div class="twelve columns content">
		<div class="results">
<?php //if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php 

                  $args = array(
                          'post_type' => 'hotels',
                          'order' => 'ASC',
                          'posts_per_page' => -1,
                          'post_status' => 'publish',
                  );

                  $the_query = new WP_Query( $args );
            ?>

				<?php if ( $the_query->have_posts() ) : 

                  $card_ct=0;

                  while ($the_query->have_posts()) : $the_query->the_post();

                  $output_hotel ='';
                  $output_city = '';

                  $separator = ' ';


                  $citys = get_the_terms($post->ID, 'city');  //Grammar violation, but helps with foreach setup
                  $hotel = get_the_terms($post->ID, 'hotel_family');

                  $hotel_name = get_field('hotel_title', $post->ID);
                  $hotel_description = get_field('hotel_description', $post->ID);
                  $hotel_family_icon = get_field('hotel_family_icon', $post->ID);
                  $portfolio_images = get_field('hotel_portfolio_images', $post->ID);
                  $hotel_link = get_field('hotel_link');
                  $is_coming_soon = get_field('coming_soon');

                  //Sanitize the title so that it can be used as the id for our hotels
                  $title = get_the_title();
                  $preg_title = str_replace(array('#038;','&','.',','),'', $title);
                  $the_parts = explode(" ", $preg_title);
                  $the_whole = strtolower(implode("-", $the_parts));
                  $the_id = str_replace(array('--','/'),'-', $the_whole);;

                  if($citys){
                  	foreach($citys as $city){
                  		$output_city .= $city->slug . $separator;
                  		$city_name = $city->slug;
                  	}
                  }

				?>
		<?php //the_content(); ?>
		<?php if ($is_coming_soon != 'true' ){ ?>
		 <div class="pick <?php echo $output_city ?> " id="<?php echo $the_id; ?>">  <!-- hide -->
		 	<h2><?php the_title(); ?></h2>
		 	<?php 
		 			$hotel_family_icon = get_field('hotel_family_icon');
		 			$hfi_URL = $hotel_family_icon['sizes']['small'];
		 			$hfi_ALT = $hotel_family_icon['alt'];

		 			if($hotel_family_icon != "" ){
		 		?>
		 	<img class="family-icon" src="<?php echo $hfi_URL; ?>" alt="<?php echo $hfi_ALT; ?>">

		 	<?php } ?>
		 	<p><?php echo $hotel_description; ?></p>
		 	<div class="portfolio_images">

		 		<?php 
		 		//if (have_rows('hotel_portfolio_images', $post->ID)): 
		 		//while (have_rows('hotel_portfolio_images', $post->ID)):the_row(); 
		 		$images = get_field('hotel_portfolio_images');
		 		//var_dump($images);
		 		$first_image = $images[0];
		 		$top_image = $first_image['hotel_portfolio_image'];
		 		$top_image_url = $top_image['sizes']['large'];
		 		//var_dump($first_image);
		 		//echo 'First Image is' . var_dump('$first_image');
		 		//$first_image_url = $first_image['url'];
		 		//$images_url = $images['url'];

		 		//var_dump($images);
		 		?>

		 		<img class="feature" src="<?php echo $top_image_url; ?>"/>


		 		<?php //endwhile; endif; ?>
		 		<div class="row">
		 		<ul class="image_list">
		 			<?php 
		 		if (have_rows('hotel_portfolio_images', $post->ID)): 
		 		while (have_rows('hotel_portfolio_images', $post->ID)):the_row(); 

		 		$images = get_sub_field('hotel_portfolio_image');
		 		$image_reference = $images['sizes']['large'];
		 		$images_url = $images['sizes']['thumbnail'];

		 		//print_r(get_field('hotel_portfolio_image'));

		 		//var_dump($images);
		 		?>
		 			<li><img data-src="<?php echo $image_reference; ?>" src="<?php echo $images_url ?>"></li>

		 		<?php endwhile; endif; ?>
		 		</ul>
		 		</div>
		 	</div>
		 	
		 	<div class="hotel_link">
		 		<?php 

		 		if (have_rows('hotel_link', $post->ID)): 
		 		while (have_rows('hotel_link', $post->ID)):the_row(); 
		 		$hotel_link_text = get_sub_field('hotel_link_text');
		 		$hotel_link = get_sub_field('hotel_link');
		 		?>
		 		<p>Visit the <a href="<?php echo $hotel_link; ?>" target="_blank"><?php echo $hotel_link_text ?></a> website</p>
		 		<?php endwhile; endif; ?>
		 	</div>
		 	<div class="btt_btn">
		 		<a class="btt" href="#map"><span><strong>&uarr;</strong></span> Back to map</a>
	 		</div>
		 </div>
		 <?php } ?>

<?php endwhile; endif;?>

</div><!-- end results -->
<div class="coming_soon" id="coming-soon">
	<h1>Coming soon</h1>
	<?php if (have_rows('coming_soon_list', 1251)) : 
			while(have_rows('coming_soon_list', 1251)) : the_row();

			$icon = get_sub_field('hotel_family_icon');
			$icon_url = $icon['sizes']['small'];
			$description = get_sub_field('hotel_description');


	?>

	<div class="four columns">
		<div class="img">
			<img src="<?php echo $icon_url; ?>">
		</div>
		<p><?php echo $description ?></p>
	</div>
	<?php endwhile; endif; ?>
</div><!-- end coming soon -->
</div><!-- end twelve columns content -->
</div><!-- End of Container Page-Content-->


<?php get_footer(); ?>