<?php

function rt_realtor_admin_init(){
  include( 'columns.php' );

  add_filter( 'manage_realtor_posts_columns', 'rt_add_new_realtor_columns', 50, 4 );
  add_action( 'manage_realtor_posts_custom_column', 'rt_manage_realtor_columns',30, 3 );
}