<?php

/**
 * File which contains the functions for creating the custom post types "Realtor" and "Listing"
 */

// Realtor custom post type
function rt_template_realtor_init(){
  $labels = array(
    'name'                  => _x( 'realtors', 'Post type general name', 'realtor' ),
    'singular_name'         => _x( 'realtor', 'Post type singular name', 'realtor' ),
    'menu_name'             => _x( 'realtors', 'Admin Menu text', 'realtor' ),
    'name_admin_bar'        => _x( 'realtor', 'Add New on Toolbar', 'realtor' ),
    'add_new'               => __( 'Add New', 'realtor' ),
    'add_new_item'          => __( 'Add New realtor', 'realtor' ),
    'new_item'              => __( 'New realtor', 'realtor' ),
    'edit_item'             => __( 'Edit realtor', 'realtor' ),
    'view_item'             => __( 'View realtor', 'realtor' ),
    'all_items'             => __( 'All realtors', 'realtor' ),
    'search_items'          => __( 'Search realtors', 'realtor' ),
    'parent_item_colon'     => __( 'Parent realtors:', 'realtor' ),
    'not_found'             => __( 'No realtors found.', 'realtor' ),
    'not_found_in_trash'    => __( 'No realtors found in Trash.', 'realtor' ),
    'featured_image'        => _x( 'realtor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'realtor' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'realtor' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'realtor' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'realtor' ),
    'archives'              => _x( 'realtor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'realtor' ),
    'insert_into_item'      => _x( 'Insert into realtor', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'realtor' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this realtor', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'realtor' ),
    'filter_items_list'     => _x( 'Filter realtors list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'realtor' ),
    'items_list_navigation' => _x( 'realtors list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'realtor' ),
    'items_list'            => _x( 'realtors list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'realtor' ),
  );

  $args = array(
      'labels'              =>  $labels,
      'description'         =>  'A simple realtor',
      'public'              =>  true,
      'publicly_queryable'  =>  true,
      'show_ui'             =>  true, // to show the custom post type UI or not
      'show_in_menu'        =>  true,
      'query_var'           =>  true,
      'rewrite'             =>  array( 'slug' => 'realtor' ),
      'capability_type'     =>  'post',
      'has_archive'         =>  true,
      'hierarchical'        =>  false,
      'menu_position'       =>  null,
      'supports'            =>  [ 'title', 'editor', 'author', 'thumbnail' ],
      'taxonomies'          =>  [],
      'show_in_rest'        =>  true
  );
  //register_taxonomy('realtor', ['post'], $args);

  register_post_type( 'realtor', $args );

}

// Listing custom post type
function rt_template_listing_init(){
  $labels = array(
    'name'                  => _x( 'listings', 'Post type general name', 'listing' ),
    'singular_name'         => _x( 'listing', 'Post type singular name', 'listing' ),
    'menu_name'             => _x( 'listings', 'Admin Menu text', 'listing' ),
    'name_admin_bar'        => _x( 'listing', 'Add New on Toolbar', 'listing' ),
    'add_new'               => __( 'Add New', 'listing' ),
    'add_new_item'          => __( 'Add New listing', 'listing' ),
    'new_item'              => __( 'New listing', 'listing' ),
    'edit_item'             => __( 'Edit listing', 'listing' ),
    'view_item'             => __( 'View listing', 'listing' ),
    'all_items'             => __( 'All listings', 'listing' ),
    'search_items'          => __( 'Search listings', 'listing' ),
    'parent_item_colon'     => __( 'Parent listings:', 'listing' ),
    'not_found'             => __( 'No listings found.', 'listing' ),
    'not_found_in_trash'    => __( 'No listings found in Trash.', 'listing' ),
    'featured_image'        => _x( 'listing Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'listing' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'listing' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'listing' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'listing' ),
    'archives'              => _x( 'listing archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'listing' ),
    'insert_into_item'      => _x( 'Insert into listing', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'listing' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this listing', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'listing' ),
    'filter_items_list'     => _x( 'Filter listings list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'listing' ),
    'items_list_navigation' => _x( 'listings list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'listing' ),
    'items_list'            => _x( 'listings list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'listing' ),
  );

  $args = array(
      'labels'              =>  $labels,
      'description'         =>  'A simple listing',
      'public'              =>  true,
      'publicly_queryable'  =>  true,
      'show_ui'             =>  true,
      'show_in_menu'        =>  true,
      'query_var'           =>  true,
      'rewrite'             =>  array( 'slug' => 'listing' ),
      'capability_type'     =>  'post',
      'has_archive'         =>  true,
      'hierarchical'        =>  false,
      'menu_position'       =>  null,
      'supports'            =>  [ 'title', 'editor', 'author', 'thumbnail' ],
      'taxonomies'          =>  [],
      'show_in_rest'        =>  true
  );

  register_post_type( 'listing', $args );

}

// Contact custom post type


/* // Listings custom post type
function rt_template_listings_init(){
  $labels = array(
    'name'                  => _x( 'listingss', 'Post type general name', 'listings' ),
    'singular_name'         => _x( 'listings', 'Post type singular name', 'listings' ),
    'menu_name'             => _x( 'listingss', 'Admin Menu text', 'listings' ),
    'name_admin_bar'        => _x( 'listings', 'Add New on Toolbar', 'listings' ),
    'add_new'               => __( 'Add New', 'listings' ),
    'add_new_item'          => __( 'Add New listings', 'listings' ),
    'new_item'              => __( 'New listings', 'listings' ),
    'edit_item'             => __( 'Edit listings', 'listings' ),
    'view_item'             => __( 'View listings', 'listings' ),
    'all_items'             => __( 'All listingss', 'listings' ),
    'search_items'          => __( 'Search listingss', 'listings' ),
    'parent_item_colon'     => __( 'Parent listingss:', 'listings' ),
    'not_found'             => __( 'No listingss found.', 'listings' ),
    'not_found_in_trash'    => __( 'No listingss found in Trash.', 'listings' ),
    'featured_image'        => _x( 'listings Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'listings' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'listings' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'listings' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'listings' ),
    'archives'              => _x( 'listings archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'listings' ),
    'insert_into_item'      => _x( 'Insert into listings', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'listings' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this listings', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'listings' ),
    'filter_items_list'     => _x( 'Filter listingss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'listings' ),
    'items_list_navigation' => _x( 'listingss list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'listings' ),
    'items_list'            => _x( 'listingss list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'listings' ),
  );

  $args = array(
      'labels'              =>  $labels,
      'description'         =>  'A simple listings',
      'public'              =>  true,
      'publicly_queryable'  =>  true,
      'show_ui'             =>  true,
      'show_in_menu'        =>  true,
      'query_var'           =>  true,
      'rewrite'             =>  array( 'slug' => 'listings' ),
      'capability_type'     =>  'post',
      'has_archive'         =>  true,
      'hierarchical'        =>  false,
      'menu_position'       =>  null,
      'supports'            =>  [ 'title', 'editor', 'author', 'thumbnail' ],
      'taxonomies'          =>  [ 'category', 'post_tag' ],
      'show_in_rest'        =>  true
  );

  register_post_type( 'listings', $args );

}
 */