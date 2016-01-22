<!doctype html>

<!--[if lt IE 7 ]> <html id="ie6" class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html id="ie7" class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html id="ie8" class="ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html id="ie9" class="ie" <?php language_attributes(); ?>> <![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
	<!--[if IE]><![endif]-->
	<title>
		<?php
			wp_title();
		?>
	</title>

	<!-- CSS/LINKS -->
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-144x144-precomposed.png" type="image/x-icon" />
	<link rel='apple-touch-icon' href='<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-144x144-precomposed.png'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" type="text/css" media="print" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>

	<?php

		//emqueue the comment reply string for single posts
		if (is_singular()) {
			wp_enqueue_script( 'comment-reply' );
		}

		//enqueue jquery
		wp_enqueue_script( 'jquery' );
	?>

	<!-- JS -->
	<script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>

	<?php wp_head(); //outputs all the plugins included front end scripts and styles?>

</head>

<body <?php body_class();?>>

	<div class="container">

		<header class="header">

			<div class="span-6">
				<a class="logo" href="<?php echo home_url(); ?>/">GobbleBlank2</a>
			</div><!-- /.span-6 -->

			<div class="span-6 omega">
				<ul class="main-menu">
					<?php
					//be sure to define your menus in the admin area for this to function correctly!
					wp_nav_menu( array( 'theme_location' => 'menu-main', 'items_wrap' => '%3$s' ) ); ?>
				</ul>
			</div><!-- /.span-6 -->

		</header><!-- /.header -->