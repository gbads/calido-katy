<?php 
function storefront_child_init() {
	/*
  * Enable support for Post Thumbnails on posts and pages.
  *
  * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  */
  add_theme_support( 'post-thumbnails' );

  // Custom Image Crops
  add_image_size( 'thumbnail-icon', 100, 100, true );

}
add_action( 'init', 'storefront_child_init' );

/** 
 * Enqueue styles and scripts:
*/
function storefront_child_enqueues() {
    // Refers to styles in the parent theme folder
    wp_enqueue_style(
        'storefront-parent-styles',
        get_template_directory_uri() .'/style.css'
    );
    // Refers to child scripts in the child theme
    wp_enqueue_script(
        'child-scripts',
        get_stylesheet_directory_uri() .'/js/child-scripts.js'
    );
}
add_action( 'wp_enqueue_scripts', 'storefront_child_enqueues' ); 



