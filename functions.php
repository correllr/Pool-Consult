<?php



function poolconsult_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'poolconsult_resources');

// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),'footer' => __( 'Footer'),
));

// Featured images

add_theme_support( 'post-thumbnails' );

add_image_size( 'excerpt-thumb', 400, 400 );
add_image_size( 'full-banner', 1800, 800, true );
add_image_size( 'home-banner', 1600, 400, true );


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

/// ACF Options page
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();
};



?>