<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head prefix="og:http://ogp.me/ns#">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/assets/android-chrome-192x192.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
<title>VORTEX</title>
<meta name="description" content="VORTEX | 関わる人の「もっと」を応援する">
<meta name="keywords" content="VORTEX, SES, システムエンジニアリングサービス">
<!-- OGP -->
<meta property="og:title" content="VORTEX | 関わる人の「もっと」を応援する">
<meta property="og:description" content="システムエンジニアリングサービスを提供しています。">
<meta property="og:url" content="">
<meta property="og:image" content=""><!-- 絶対値で指定 -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="VORTEX">
<meta property="og:locale" content="ja_JP">
<!-- Swiper -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/swiper-bundle.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="vt_wrapper">
<header class="vt_header">
	<a href="<?php bloginfo('url'); ?>/">
		<img class="fadeIn fadeIn--1" src="<?php echo get_template_directory_uri(); ?>/dist/assets/logo.svg">
	</a>
	<nav class="js-menu">
		<ul class="fadeIn fadeIn--1d fadeIn--2">
			<li>
				<a href="">About</a>
			</li>
			<li>
				<a href="">Service</a>
			</li>
			<li>
				<a href="">Project</a>
			</li>
			<li>
				<a href="">Recruit</a>
			</li>
			<li>
				<a href="">Information</a>
			</li>
			<li>
				<a href="<?php bloginfo('url'); ?>/contact">Contact</a>
			</li>
		</ul>
	</nav>
	<button class="js-menu_toggler vt_menu fadeIn fadeIn--1d fadeIn--2">
		<span></span>
		<span></span>
		<span></span>
	</button>
</header>
<!-- Hamburger -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/slideMenu.min.js"></script>
<main>