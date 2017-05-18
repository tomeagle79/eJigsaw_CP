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

/**
 * Modify the document title for the search page
 */
add_filter( 'document_title_parts', function( $title )
{
    if ( is_search() ) 
        $title['title'] = sprintf( 
            esc_html__( '&#8220;%s&#8221; result page', 'my-theme-domain' ), 
            get_search_query() 
        );

    return $title;
} );

/**
 * Add numeric pagination to theme
 */

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}



?>