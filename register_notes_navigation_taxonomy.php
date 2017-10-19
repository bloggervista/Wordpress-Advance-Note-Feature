<?php
add_action( 'init', function () {

	$labels = array(
		'name'                       => _x( 'Notes Navigation', 'Taxonomy General Name', 'Shirshak' ),
		'singular_name'              => _x( 'Notes Navigation', 'Taxonomy Singular Name', 'Shirshak' ),
		'menu_name'                  => __( 'Notes Navigation', 'Shirshak' ),
		'all_items'                  => __( 'All Items', 'Shirshak' ),
		'parent_item'                => __( 'Parent Item', 'Shirshak' ),
		'parent_item_colon'          => __( 'Parent Item:', 'Shirshak' ),
		'new_item_name'              => __( 'New Item Name', 'Shirshak' ),
		'add_new_item'               => __( 'Add New Item', 'Shirshak' ),
		'edit_item'                  => __( 'Edit Item', 'Shirshak' ),
		'update_item'                => __( 'Update Item', 'Shirshak' ),
		'view_item'                  => __( 'View Item', 'Shirshak' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'Shirshak' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'Shirshak' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Shirshak' ),
		'popular_items'              => __( 'Popular Items', 'Shirshak' ),
		'search_items'               => __( 'Search Items', 'Shirshak' ),
		'not_found'                  => __( 'Not Found', 'Shirshak' ),
		'items_list'                 => __( 'Items list', 'Shirshak' ),
		'items_list_navigation'      => __( 'Items list navigation', 'Shirshak' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => false,
	);
	register_taxonomy( 'note_navigation', array( 'note' ), $args );

}, 0 );