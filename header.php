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
	<title><?php wp_title(); ?></title>

	<!-- CSS/LINKS -->
	<link rel='shortcut icon' href='<?php echo esc_url(get_stylesheet_directory_uri()) ; ?>/apple-touch-icon-144x144-precomposed.png' type='image/x-icon' />
	<link rel='apple-touch-icon' href='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/apple-touch-icon-144x144-precomposed.png'>
	<link rel='stylesheet' href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' />
	<link rel='stylesheet' href='<?php echo esc_url(get_stylesheet_directory_uri()); ?>/css/print.css' type='text/css' media='print' />
	<link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />

	<?php wp_head(); ?>

</head>

<body <?php body_class();?>>

	<div class="page-container">

		<header>

			<div class="span-3">

				<a href="<?php echo home_url(); ?>/">Gobble Blank</a>

			</div><!-- /.span-6 -->

			<div class="span-9 omega">

				<nav id="main-nav" role="navigation">

					<ul id="main-menu" class="sm sm-simple">

						<?php
							//be sure to define your menus in the admin area for this to function correctly!
							wp_nav_menu( array( 'theme_location' => 'menu-main', 'items_wrap' => '%3$s' ) );
						?>

					</ul>

				</nav>

			</div>

		</header>
