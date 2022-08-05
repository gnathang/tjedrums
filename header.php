<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton
		&family=IBM+Plex+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200
		&family=Poppins:wght@200;300;400;500;600;700;800
		&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="w-100 bg-white site-header flex items-center justify-between pv3 ph5-l ph4">

		<!-- Logo element on the left -->
		<div class="logo-wrapper flex items-center w-third justify start">
				<a href="<?php get_home_url(); ?>" class="flex logo w-20-l w-30-m w-40">
					<img src="<?php bloginfo('template_directory');?>/images/profile-logo-cropped-no-writing-.png"
					class="logo">
				</a>
		</div>
		
		<!-- Navigation arrow in the center -->
		<div class="nav-arrow-wrapper w-third flex items-center tc">
			<a class="arrow scroll" href="#about">
				<img src="<?php bloginfo('template_directory');?>/images/down-arrow-2.png" class="w-10-ns w-20">
			</a>
		</div>

		<!-- Social icons on the right -->
		<div class="social w-third flex items-center justify-end">
				<a href="https://www.facebook.com/theolovesdrums" class="flex items-center">
					<img src="<?php bloginfo('template_directory');?>/images/iconmonstr-facebook-5.svg" class="pr3">
				</a>
				<a href="https://instagram.com/theolovesdrums?igshid=1c5t27vp478fs" class="flex items-center">
					<img src="<?php bloginfo('template_directory');?>/images/iconmonstr-instagram-11.svg"  class="pl3">
				</a>
		</div>

	</header><!-- #masthead -->
