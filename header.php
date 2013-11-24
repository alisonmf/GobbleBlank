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
	<meta name="viewport" content="width=device-width" />
	<!--[if IE]><![endif]-->
	<title>
		<?php		
		wp_title( '|', true, 'right' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		?>
	</title>
	
	<!-- CSS/LINKS -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/scss/print.css" type="text/css" media="print" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<?php 
	
		//emqueue the comment reply string for single posts
		if (is_singular()) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		//enqueue jquery
		wp_enqueue_script( 'jquery' );
	?>
		
	<!-- JS -->
	<?php 
		
		//outputs all the plugins included front end scripts and styles
		wp_head();
	
	?>
	
</head>

<body <?php body_class(); ?>>
	
	<div class="wrapper">

		<div class="header">
		
			<a class="logo" href="<?php echo home_url(); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" /></a>		
			
		    <ul class="nav navbar-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-main', 'items_wrap' => '%3$s' ) ); ?>
		    </ul>
			
		</div><!-- /#header -->