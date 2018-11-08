<?php



function poolconsult_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'poolconsult_resources');


// Featured images

add_theme_support( 'post-thumbnails' );

add_image_size( 'excerpt-thumb', 400, 400 );



// Excerpts
// Length
function custom_excerpt_length() {
	return 90;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// Remove ... after excerpt
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');



?>