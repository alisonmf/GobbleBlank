<?php

	// Set the content width. for media gallery image sizing.
	// "large" images will be set to the below value
	if ( ! isset( $content_width ) ) $content_width = 800;

	// WordPress specific support
	add_theme_support( 'menus' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-formats' )
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	//navigation support
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

	// Pulls the main stylesheet for the wysiwyg editor for client
	add_editor_style('style.css');

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
		));
	}
	add_action( 'widgets_init', 'gobsnack_widgets_init' );

	//enqueue our scripts & styles
	function gobs_jquery() {
		wp_enqueue_script( 'jquery' );

		wp_register_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js');
		wp_enqueue_script('modernizr');

		wp_register_script('retinajs', get_template_directory_uri() . '/js/retina.js');
		wp_enqueue_script('retinajs');

		wp_register_script('smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js');
		wp_enqueue_script('smartmenus');

		wp_register_script('smartmenus_keyboard', get_template_directory_uri() . '/js/jquery.smartmenus.keyboard.js');
		wp_enqueue_script('smartmenus_keyboard');

		wp_register_script('fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js');
		wp_enqueue_script('fitvid');

		//custom js functions
		// wp_register_script('gob_functions', get_template_directory_uri() . '/js/functions.js');
		// wp_enqueue_script('gob_functions');

		//styles
		wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Lusitana:400,700|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic');

	}
	add_action( 'wp_enqueue_scripts', 'gobs_jquery' );
?>
