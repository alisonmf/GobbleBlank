<?php
	
	// Set the content width. for media gallery image sizing.
	// "large" images will be set to the below value
	if ( ! isset( $content_width ) ) $content_width = 800;

	// Menu support	
	add_theme_support( 'menus' );
	
		register_nav_menus(
			array(
			'menu-main' => __( 'Top Navigation' ),
			'menu-footer' => __( 'Footer Navigation' )
			)
		);
	
	//remove the menu div container
	function my_wp_nav_menu_args( $args = '' ) {
		$args['container'] = false;
		return $args;
	}
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
	
	// Feed links for head
	add_theme_support( 'automatic-feed-links' );
	
	// Custom background support for client
	add_theme_support( 'custom-background' );
	
	// Pulls the main stylesheet for the wysiwyg editor for client
	add_editor_style('style.css');
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	
	// Remove link in the head (RSD, WLW, WP version, etc for security purposes)
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
	remove_action('wp_head', 'start_post_rel_link');
    
    // Add our widgets
    function gobsnack_widgets_init() {
    
    	register_sidebar( array(
    		'name' => __( 'Main Sidebar' ),
    		'id' => 'main-sidebar',
    		'description' => __( 'The sidebar is your main sidebar' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget' => "</div>",
    		'before_title' => '<h3 class="widget-title">',
    		'after_title' => '</h3>',
    	) );
    
    }
    add_action( 'widgets_init', 'gobsnack_widgets_init' );    
  

?>