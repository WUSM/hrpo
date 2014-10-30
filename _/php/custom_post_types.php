<?php

function custom_post_types_init() {


  // Homepage Slider

  $labels = array(
    'name' => 'Homepage Slider',
    'singular_name' => 'Slide',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Slide',
    'edit_item' => 'Edit Slide',
    'new_item' => 'New Slide',
    'all_items' => 'All Slides',
    'view_item' => 'View Slide',
    'search_items' => 'Search slides',
    'not_found' =>  'No slides found',
    'not_found_in_trash' => 'No slides found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Slider'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'slider' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-images-alt2',
    'supports' => array(  )
  );

  register_post_type( 'slider', $args );

 
  // Tip of the Week

  $labels = array(
    'name' => 'Tip of the Week',
    'singular_name' => 'Tip',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Tip',
    'edit_item' => 'Edit Tip',
    'new_item' => 'New Tip',
    'all_items' => 'All Tips',
    'view_item' => 'View Tip',
    'search_items' => 'Search tips',
    'not_found' =>  'No tips found',
    'not_found_in_trash' => 'No tips found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Tip of the Week'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tips' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-lightbulb',
    'supports' => array(  )
  );

  register_post_type( 'tips', $args );


  // Metrics

  $labels = array(
    'name' => 'Metrics',
    'singular_name' => 'Chart',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Chart',
    'edit_item' => 'Edit Chart',
    'new_item' => 'New Chart',
    'all_items' => 'All Charts',
    'view_item' => 'View Chart',
    'search_items' => 'Search charts',
    'not_found' =>  'No charts found',
    'not_found_in_trash' => 'No charts found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Metrics'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'exclude_from_search' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'charts' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-chart-bar',
    'supports' => array(  )
  );

  register_post_type( 'charts', $args );

  
  // Staff Directory

  $labels = array(
    'name' => 'Staff Directory',
    'singular_name' => 'Staff Member',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Staff Member',
    'edit_item' => 'Edit Staff Member',
    'new_item' => 'New Staff Member',
    'all_items' => 'All Staff Members',
    'view_item' => 'View Staff Member',
    'search_items' => 'Search staff members',
    'not_found' =>  'No staff members found',
    'not_found_in_trash' => 'No staff members found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Staff'
  );

  $args = array(
    'labels' => $labels,
    'public' => false,
    'exclude_from_search' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'staff' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-groups',
    'supports' => array(  )
  );

  register_post_type( 'staff', $args );

} 
add_action( 'init', 'custom_post_types_init' );


function charts_taxonomy() {
  $args = array(
        'hierarchical' => true
    );
  register_taxonomy( 'charts_category', 'charts', $args );
}

add_action( 'init', 'charts_taxonomy', 0 );

function staff_taxonomy() {
  $args = array(
        'hierarchical' => true
    );
  register_taxonomy( 'staff_category', 'staff', $args );
}

add_action( 'init', 'staff_taxonomy', 0 );