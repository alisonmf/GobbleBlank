<?php
	
	//set the content width. for media gallery image sizing. "large" images will be set to the below value
	if ( ! isset( $content_width ) ) $content_width = 800;

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
	
	//pulls the main stylesheet for the wysiwyg editor for client
	add_editor_style('style.css');
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    //add our widgets
    function gobsnack_widgets_init() {
    
    	register_sidebar( array(
    		'name' => __( 'Main Sidebar', 'gobbleblank' ),
    		'id' => 'sidebar-main',
    		'description' => __( 'The sidebar is your main sidebar', 'gobbleblank' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => "</div>",
    		'before_title' => '<h3 class="widget-title">',
    		'after_title' => '</h3>',
    	) );
    
    	register_sidebar( array(
    		'name' => __( 'Other Sidebar', 'gobbleblank' ),
    		'id' => 'sidebar-other',
    		'description' => __( 'The sidebar is for extra content', 'gobbleblank' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => "</div>",
    		'before_title' => '<h3 class="widget-title">',
    		'after_title' => '</h3>',
    	) );
    
    }
    add_action( 'widgets_init', 'gobsnack_widgets_init' );    
    
    
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

?>