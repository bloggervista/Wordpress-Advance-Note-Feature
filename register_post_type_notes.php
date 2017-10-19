<?php
add_action( 'init', function() {
    $labels = array(
        'name'                  => _x( 'Class 11 Notes', 'Post Type General Name', 'Shirshak' ),
        'singular_name'         => _x( 'Class 11 Note', 'Post Type Singular Name', 'Shirshak' ),
        'menu_name'             => __( 'Class 11', 'Shirshak' ),
        'name_admin_bar'        => __( 'Class 11 Notes', 'Shirshak' ),
        'parent_item_colon'     => __( 'Parent Item:', 'Shirshak' ),
        'all_items'             => __( 'All Class 11 Notes', 'Shirshak' ),
        'add_new_item'          => __( 'Add New Class 11 Note', 'Shirshak' ),
        'add_new'               => __( 'Add New', 'Shirshak' ),
        'new_item'              => __( 'New Class 11 Note', 'Shirshak' ),
        'edit_item'             => __( 'Edit Class 11 Note', 'Shirshak' ),
        'update_item'           => __( 'Update  Class 11 Note', 'Shirshak' ),
        'view_item'             => __( 'View Class 11 Note', 'Shirshak' ),
        'search_items'          => __( 'Search Class 11 Note', 'Shirshak' ),
        'not_found'             => __( 'Not found', 'Shirshak' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Shirshak' ),
        'items_list'            => __( 'Items list', 'Shirshak' ),
        'items_list_navigation' => __( 'Items list navigation', 'Shirshak' ),
        'filter_items_list'     => __( 'Filter items list', 'Shirshak' ),
    );
    $rewrite = array(
        'slug'                  => 'class-11',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => false,
    );
    $args = array(
        'label'                 => __( 'Class 11 Note', 'Shirshak' ),
        'description'           => __( 'Advance way to add notes in wordpress', 'Shirshak' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
        'taxonomies'            => array(),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'class-11',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
        'yarpp_support' => true
    );
    register_post_type( 'class-11', $args );

}, 0 );
add_action( 'init', function() {
    $labels = array(
        'name'                  => _x( 'Class 12 Notes', 'Post Type General Name', 'Shirshak' ),
        'singular_name'         => _x( 'Class 12 Note', 'Post Type Singular Name', 'Shirshak' ),
        'menu_name'             => __( 'Class 12', 'Shirshak' ),
        'name_admin_bar'        => __( 'Class 12 Notes', 'Shirshak' ),
        'parent_item_colon'     => __( 'Parent Item:', 'Shirshak' ),
        'all_items'             => __( 'All Class 12 Notes', 'Shirshak' ),
        'add_new_item'          => __( 'Add New Class 12 Note', 'Shirshak' ),
        'add_new'               => __( 'Add New', 'Shirshak' ),
        'new_item'              => __( 'New Class 12 Note', 'Shirshak' ),
        'edit_item'             => __( 'Edit Class 12 Note', 'Shirshak' ),
        'update_item'           => __( 'Update  Class 12 Note', 'Shirshak' ),
        'view_item'             => __( 'View Class 12 Note', 'Shirshak' ),
        'search_items'          => __( 'Search Class 12 Note', 'Shirshak' ),
        'not_found'             => __( 'Not found', 'Shirshak' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Shirshak' ),
        'items_list'            => __( 'Items list', 'Shirshak' ),
        'items_list_navigation' => __( 'Items list navigation', 'Shirshak' ),
        'filter_items_list'     => __( 'Filter items list', 'Shirshak' ),
    );
    $rewrite = array(
        'slug'                  => 'class-12',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => false,
    );
    $args = array(
        'label'                 => __( 'Class 12 Note', 'Shirshak' ),
        'description'           => __( 'Advance way to add notes in wordpress', 'Shirshak' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
        'taxonomies'            => array(),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-aside',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => 'class-12',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
        'yarpp_support' => true
    );
    register_post_type( 'class-12', $args );

}, 0 );