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

} 
add_action( 'init', 'custom_post_types_init' );