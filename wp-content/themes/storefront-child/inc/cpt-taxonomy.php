<?php
// function calido_register_custom_post_types() {

//     // Glass Collections Post Type:
//     $labels_collection = array(
//         'name'                  => _x( 'Glass Creations', 'post type general name' ),
//         'singular_name'         => _x( 'Glass Creation', 'post type singular name'),
//         'menu_name'             => _x( 'Glass Creations', 'admin menu' ),
//         'name_admin_bar'        => _x( 'Glass Creation', 'add new on admin bar' ),
//         'add_new'               => _x( 'Add New', 'glass creation' ),
//         'add_new_item'          => __( 'Add New Glass Creation' ),
//         'new_item'              => __( 'New Glass Creation' ),
//         'edit_item'             => __( 'Edit Glass Creation' ),
//         'view_item'             => __( 'View Glass Creation' ),
//         'all_items'             => __( 'All Glass Creations' ),
//         'search_items'          => __( 'Search Glass Creations' ),
//         'parent_item_colon'     => __( 'Parent Glass Creations:' ),
//         'not_found'             => __( 'No glass creation found.' ),
//         'not_found_in_trash'    => __( 'No collection found in Trash.' ),
//         'archives'              => __( 'Glass Creations Archives'),
//         'insert_into_item'      => __( 'Insert into collection'),
//         'uploaded_to_this_item' => __( 'Uploaded to this glass creation'),
//         'filter_item_list'      => __( 'Filter glass creation list'),
//         'items_list_navigation' => __( 'Glass Creations list navigation'),
//         'items_list'            => __( 'Glass Creations list'),
//         'featured_image'        => __( 'Glass Creation featured image'),
//         'set_featured_image'    => __( 'Set collection featured image'),
//         'remove_featured_image' => __( 'Remove collection featured image'),
//         'use_featured_image'    => __( 'Use as featured image'),
//     );

//     $args_collection = array(
//         'labels'             => $labels_collection,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'show_in_nav_menus'  => true,
//         'show_in_admin_bar'  => true,
//         'show_in_rest'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'collections' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => 2,
//         'menu_icon'          => 'dashicons-archive',
//         'supports'           => array( 'title', 'thumbnail', 'editor' ),
//     );
//     register_post_type( 'calido-collection', $args_collection );
// }
// add_action( 'init', 'calido_register_custom_post_types' );

// function calido_register_taxonomies() {
//     $labels_collections_category
// }
// add_action( 'init', 'calido_register_taxonomies' );
