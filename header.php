<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>


<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?>    <?php wp_title("| ",true); ?></title>

	<!-- Meta
	============================================== -->
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
	<!-- if page is content page -->
	<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" />

	<!-- if page is others -->
	<?php } else { ?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php bloginfo('template_url' );?>/images/century-equities.png" /> <?php } ?>


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fix.css" />
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Typekit
	================================================== -->


	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/ch_favicon.png" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/ch_favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">


	<!-- SHARE THIS
	================================================== -->
	<script type="text/javascript">var switchTo5x=true;</script>
	<!-- <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> -->
	<!-- <script type="text/javascript">stLight.options({publisher: "ur-503f3d72-2c1-bb49-15d3-a4f0ee3ef754", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> -->


	<?php wp_head(); ?>

	<style>
		/*.top-bar{text-align:right;}
		.top-links{background:#98a6b9; margin-bottom:7px; padding:.7em .7em .5em 0;}
		.top-links a:hover, .top-links a:active, .top-links a:focus{opacity:.8;}*/
	</style>

</head>
<?php 
	
	$template = get_page_template();
	$template_name = explode("/", $template);
	$template = end($template_name);


	//var_dump($template_name);

if (is_page_template('template-background-test.php')){  //$template == 'page.php'
	 
	 //$background = the_field('top_image', $post->ID);
	 //var_dump($background);

	if(get_field('top_image')){ 
		$background = get_field('top_image');
		//var_dump($background);
	}
}
?>
<?php //var_dump($post->ID); 

//$background = get_field('top_image');
	 //var_dump($background);


?>

<body <?php body_class(  ); ?> id="page-<?php echo $post->ID; ?>" style="background-image:url('<?php echo $background; ?>')">

	<div class="top-bar">
		<div class="top-links">
			<a href="http://www.centuryequities.com" title="Visit Century Equities" alt="Century Equities logo, click here to visit http://centuryequities.com"><img src="<?php bloginfo('template_url' );?>/images/centuryEquitiesTopLink.png"></a>
			<img src="<?php bloginfo('template_url' );?>/images/linkSeparator.png">
			<a href="http://www.century-realty.com" title="Visit Century Realty" alt="Century Realty logo, click here to visit http://century-realty.com"><img src="<?php bloginfo('template_url' );?>/images/centuryRealtyTopLink.png"></a>
		</div>
	</div>
	<div id="header">
		<div class="container">
				<div class="three columns logo">
					 <a href="<?php bloginfo( 'url' );?>" title="Return to the Century Hospitality homepage" alt="Century Hospitality logo, click here to return to the Century Hospitality homepage"><img src="<?php bloginfo('template_url' );?>/images/logo.png" title="Century Hospitality, Proven Hospitality Partners" alt="Century Hospitality, Proven Hospitality Partners"></a>
				</div>

				<div class="nine columns navigation">
					<div class="social">
						<!-- <span class='st_sharethis_custom' displayText='ShareThis'></span>
						<span class='st_email_custom' displayText='Email'></span>
						<span class='st_twitter_custom' displayText='Tweet'></span>
						<span class='st_facebook_custom' displayText='Facebook'></span> -->

					</div>
					<div class="clear"></div>
					<?php wp_nav_menu( array( 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<span class="stretch"><span></ul>')); ?>

				</div>
				<div class="clear"></div>

 		</div>
	</div><!-- End of Header -->
