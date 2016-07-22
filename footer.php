
<div id="footer">
	<div class="container footer">
		<!-- <div class="two columns ">
			<?php wp_nav_menu( array('menu_id' => 'footer-menu', 'theme_location' => 'footer-menu') ); ?>

			<div class="clear" style="margin-top: 20px;"></div>
			<p>
				<a href="http://www.linkedin.com/company/century-hospitality" target-"_blank" >
					<img src="<?php bloginfo( 'template_url' ); ?>/images/linked_in.png">
				</a>
			</p>
		</div> -->

		<div class="ten columns footer_contact">
			<div class="border-left">
				
				<h3>Contact Us Today</h3>
				<ul class="footer-locations">
					<li>
					<p>
						960 Penn Avenue, Suite 1001</br>
					Pittsburgh, PA 15222</br>
					Phone: <span class="contact">(412) 235-7233</span>
					</p>
					</li>
				<li>
					<p>
					Century Centre<br />
					1233 Main Street, Suite 1500<br />
					Wheeling, WV 26003</br>
					Phone: <span class="contact">(304) 232-5411</span>
					<!-- Fax: <span class="contact">(304) 232-5425</span><br /> -->
					
					</p>
				</li>
				<li>
					<p>Email: <a href="mailto:info@centuryequities.com">info@centuryequities.com</a></br>
					Partners: <a href="http://www.centuryequities.com/"/>Century Equities</a>
				</li>
			</ul>
			</div>
		</div>

		<div class="two columns footer_icon">
			<a href="<?php bloginfo('url' ); ?>" title="Century Hospitality"><img src="<?php bloginfo('template_url' ); ?>/images/footer-CH.png"></a>
			<p>
				<a href="http://www.linkedin.com/company/century-hospitality" target-"_blank" >
					<i class="fa fa-fw fa-2x fa-linkedin-square"></i>
					<!-- <img src="<?php bloginfo( 'template_url' ); ?>/images/linked_in.png"> -->
				</a>
			</p>
		</div>

		<div class="twelve columns copyright">
			<p>&copy;  <?php echo date('Y') . " ";  bloginfo('name'); ?>. All Rights Reserved. </p>
				<p class="mesh">Design by <a href="http://meshfresh.com">MESH | Design and Development</a> </p>
		</div>

	<div><!-- End of Container -->
</div><!-- End of Footer -->

<?php wp_footer(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>

<script type="text/javascript">


	 jQuery(document).ready(function($) {
		$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 6500,          // Integer: Time between slide transitions, in milliseconds
 
});

		$("h3.job_title").click(function() {
				$(this).next(".job_description").slideToggle('slow');
		});


	});
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sly.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.waitforimages.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ch.js"></script>
</body>
</html>
