<?php

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}
function mgiwp_setup() {
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 970);
	add_image_size('proyecto_thumb', 350, 228, true);
	add_image_size('home_carousel', 787, 450, true);
	add_image_size('modelo_thumb', 350, 233, true);
}
add_action('init', 'mgiwp_setup');

// add default class for img-responsive
function add_image_responsive_class($content) {
	global $post;
	$pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
	$replacement = '<img$1class="$2 img-fluid"$3>';
	$content = preg_replace($pattern, $replacement, $content);
	return $content;
}
add_filter('the_content', 'add_image_responsive_class');

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'wp_title', function( $title )
{
    return trim( $title );
} );

if (function_exists('acf_set_options_page_menu')){
	acf_set_options_page_menu('Opciones de Plantilla');
}