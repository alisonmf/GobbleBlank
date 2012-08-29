<?php

	//menu support	
	add_theme_support( 'menus' );
	
		register_nav_menus(
			array(
			'menu-main' => __( 'Top Navigation' ),
			'menu-footer' => __( 'Footer Navigation' )
			)
		);
	
	//custom background support for client
	add_theme_support( 'custom-background' );
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    //adds a menu class to the first and last child for your dynamic menus    	
	function add_first_and_last($output) {
	  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
	  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
	  return $output;
	}
	add_filter('wp_nav_menu', 'add_first_and_last');
    
    //iframe support in tincymce (mostly for vimeo video support)
    function mytheme_tinymce_config( $init ) {
	$valid_iframe = 'iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]';
	if ( isset( $init['extended_valid_elements'] ) ) {
		$init['extended_valid_elements'] .= ',' . $valid_iframe;
		
	} else {
		$init['extended_valid_elements'] = $valid_iframe;
	}
	
	return $init;
	}
	
	add_filter('tiny_mce_before_init', 'mytheme_tinymce_config');
	
	//pulls the main stylesheet for the wysiwyg editor, good for clients!
	if ( ! function_exists('tdav_css') ) {
	function tdav_css($wp) {
		$wp .= ',' . get_bloginfo('stylesheet_url');
	return $wp;
	}
	}
	
	add_filter( 'mce_css', 'tdav_css' );

?>