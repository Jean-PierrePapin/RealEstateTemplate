<?php

function rt_listing_admin_init(){
  include( 'columns.php' );

  add_filter( 'manage_listing_posts_columns', 'rt_add_new_listing_columns' );
  add_action( 'manage_listing_posts_custom_column', 'rt_manage_listing_columns', 10, 2 );
  add_action( 'admin_enqueue_scripts', 'rt_admin_scripts' );
  
}

function rt_realtor_admin_init(){
  include( 'columns.php' );

  add_filter( 'manage_realtor_posts_columns', 'rt_add_new_realtor_columns', 50, 4 );
  add_action( 'manage_realtor_posts_custom_column', 'rt_manage_realtor_columns',30, 3 );
  add_action( 'admin_enqueue_scripts', 'rt_admin_scripts' );
  add_action( 'admin_post_rt_save_realtor', 'rt_save_realtor' );
}