<?php

function wpt_theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style( 'Anton', "https://fonts.googleapis.com/css?family=Anton" );
	wp_enqueue_style( 'Raleway', "https://fonts.googleapis.com/css?family=Raleway" );
	wp_enqueue_style( 'Pacifico', "https://fonts.googleapis.com/css?family=Pacifico" );

// Font awesome 


}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');


// False means add to the top of the page, True at the bottom

// The first parameter after the filepath is an array that sets which files to load first, ie jquery, then foundation

function wpt_theme_js() {

	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', '', '', false );
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
	wp_enqueue_script( 'jquery-ui', "http://code.jquery.com/ui/1.9.2/jquery-ui.js", array('jquery'), '', true );
	wp_enqueue_script( 'scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );

// Adds theme support for featured images in posts/pages

add_theme_support( 'post-thumbnails' );

// Registers menus with WordPress

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      //'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// Alters excerpt length

function custom_excerpt_length( $length ) {
	return 25;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>