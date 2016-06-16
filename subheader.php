<div class="subheader">
	<ul class="rslides">
		 
			<li>
				<?php if(get_field('top_image')){ ?>
					<img src="<?php the_field('top_image'); ?>" alt="" title="">	
				<?php } else { ?>				
					<img src="<?php bloginfo('template_url'); ?>/images/int.jpg" alt="" title="">
				<?php } ?>	

			<!-- <div class="container">
				<div class="page_title_container">
					 <div class="page_title">
						<h1><?php if(is_404()){echo "OOPS!";} else {wp_title("",true);} ?></h1>
					</div>
				</div>
			</div> -->
			</li>
		 
		</ul>
</div>