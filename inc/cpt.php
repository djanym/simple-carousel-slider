<?php

/**
 * Register Custom Post Type for Slider.
 */
function scs_slider_cpt() {
    $labels = array(
        'name'                  => 'Sliders',
        'singular_name'         => 'Slider',
        'menu_name'             => 'Sliders',
        'name_admin_bar'        => 'Slider',
        'archives'              => 'Slider Archives',
        'attributes'            => 'Slider Attributes',
        'parent_item_colon'     => 'Parent Slider:',
        'all_items'             => 'All Sliders',
        'add_new_item'          => 'Add New Slider',
        'add_new'               => 'Add New',
        'new_item'              => 'New Slider',
        'edit_item'             => 'Edit Slider',
        'update_item'           => 'Update Slider',
        'view_item'             => 'View Slider',
        'view_items'            => 'View Sliders',
        'search_items'          => 'Search Slider',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Slider',
        'uploaded_to_this_item' => 'Uploaded to this Slider',
        'items_list'            => 'Sliders list',
        'items_list_navigation' => 'Sliders list navigation',
        'filter_items_list'     => 'Filter Sliders list',
    );
    $args   = array(
        'label'               => 'Slider',
        'labels'              => $labels,
        'supports'            => array( 'title', 'custom-fields' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-slides',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
    );
    register_post_type( 'scs_slider', $args );
}
add_action( 'init', 'scs_slider_cpt', 0 );
