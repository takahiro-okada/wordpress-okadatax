<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
																	echo ' :';
																} ?> <?php bloginfo('name'); ?></title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<!-- drawer.js -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" media="screen and (max-width:1024px)">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js">
		<?php wp_head(); ?>
			<script
			script >
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
				assets: '<?php echo get_template_directory_uri(); ?>',
				tests: {}
			});
	</script>
</head>

<body class="drawer drawer--right" <?php body_class(); ?>>
	<!-- header -->
	<header class="header" role="banner">
		<div class="header__inner inner">
			<h1 class="header__logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="岡田税理士事務所"></a></h1>
			<button type="button" class="drawer-toggle drawer-hamburger is-pc">
				<span class="drawer-hamburger-icon"></span>
			</button>
			<nav class="header__nav drawer-nav" role="navigation">
				<? /*php html5blank_nav(); */?>
				<ul class="nav__list">
					<li class="nav__item drawer-menu-item"><a href="<?php echo home_url(); ?>/service">事業内容</a></li>
					<li class="nav__item drawer-menu-item"><a href="<?php echo home_url(); ?>/concept">事業所概要</a></li>
					<li class="nav__item drawer-menu-item"><a href="<?php echo home_url(); ?>/category/news/">ニュース</a></li>
					<li class="nav__item drawer-menu-item"><a href="<?php echo home_url(); ?>/recruit">採用情報</a></li>
					<a href="<?php echo home_url(); ?>/contact"><li class="nav__item drawer-menu-item _email"><img src="<?php echo get_template_directory_uri(); ?>/img/email.png">お問い合わせ</li></a>
				</ul>
			</nav>
		</div>
	</header>

	<!-- /header -->