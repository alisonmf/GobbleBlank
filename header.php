<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<!--[if IE]><![endif]-->
		<title>
			<?php		
			wp_title( '|', true, 'right' );
		
			// Add the blog name.
			bloginfo( 'name' );
		
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			?>
		</title>
		
		<!-- CSS/LINKS -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		
		<?php wp_head(); ?>
		
		<!-- JS -->
		
	</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper">

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
			
			<ul id="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div>