<?php 
function storefront_child_init() {

  remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
  remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
  remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
  remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
  remove_action( 'woocommerce_after_single_product_summary', 'storefront_single_product_pagination', 30 );

  add_action( 'wp', 'bbloomer_remove_default_sorting_storefront' );
  
  function bbloomer_remove_default_sorting_storefront() {
    remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
  }
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
  remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );

  // add_filter( 'woocommerce_product_tabs', 'my_remove_all_product_tabs', 98 );
 
  function my_remove_all_product_tabs( $tabs ) {
    // unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );       // Remove the reviews tab
    unset( $tabs['additional_information'] );    // Remove the additional information tab
    return $tabs;
  }
  // add_filter( 
  //   'woocommerce_product_tabs', 
  //   'woocommerce_remove_product_tabs', 98 );

 // Move the Price below the excerpt on single Product posts
  remove_action(
    'woocommerce_single_product_summary', // value in do_action()
    'woocommerce_template_single_price', // function name
    10 // priority 
  );
  add_action(
    'woocommerce_single_product_summary', // do_action() value
    'woocommerce_template_single_price', // function name
    21 // priority 
  );



  // function remove_sidebar() {
  //   if( is_product('product') ) {
  //     remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
  //   }
  // }
  // add_action( 'get_header','remove_sidebar_shop' );

  
  // Disable search functionality
  // function wc_remove_all_filters( $tag ) {
  //   global $wp_filter;
  //   if( isset( $wp_filter[$tag] ) ) {
  //     unset( $wp_filter[$tag] );
  //   }
  // }
  // add_action( 'init', 'wc_remove_all_filters', 10 );

  // Disable WooCommerce search bar 
  function wc_disable_search() {
    if ( function_exists( 'WC' ) && ! is_admin() && is_search() && 
    isset( $_GET['post_type'] ) &&  $_GET['post_type'] == 'product' ) {
      wp_redirect( home_url() );
      exit;
    }
  }
  add_action( 'template_redirect', 'wc_disable_search' );
  
	/*
  * Enable support for Post Thumbnails on posts and pages.
  *
  * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  */
  add_theme_support( 'post-thumbnails' );

  // Custom Image Crops
  // add_image_size( 'thumbnail-icon', 100, 100, true );

  //   add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
  //     return array(
  //       'width'  => 300,
  //       'height' => 300,
  //       'crop'   => 0,
  //     );
  //   });
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

// Disables Gutenberg on speficic pages:
add_action('admin_init', function () {
  if (array_key_exists('post', $_GET) || array_key_exists('post_ID', $_GET)) {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if (!isset($post_id)) {
      return;
    }
    $title = get_the_title($post_id);
    if ($title == 'Home' || $title == 'About') {
      remove_post_type_support('page', 'editor');
    }
  }
}, 10);






