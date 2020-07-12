<?php

/**
 * File to store the data from the realtor post type in order to use them later
 */

// $realtors_opts        = [];
$name           = $_POST['name'];
$photo          = $_POST['photo'];
$description    = $_POST['description'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
$userid         = $_POST['user_id'] = get_current_user_id();
$is_mvp         = false;
$date           = $_POST['hire_date'];
$id             = $_POST['realtorID'];

// Origine https://jacobmartella.com/2018/01/17/add-wordpress-admin-page-data-custom-table/
global $wpdb;
$table_name     = $wpdb->prefix . "real_estate_realtor";
$default_row    = $wpdb->get_row( "SELECT * FROM $table_name ORDER BY realtorID DESC LIMIT 1" );

if ( $default_row != null ){
  $id = $default_row->realtorID + 1;
} else {
  $id = 1;
}

$item           = [
  $id,
  $name,
  $phone,
  $email,
  $date,
  $userid,
  $is_mvp,
  $photo,
  $description  
];

 /* echo '<pre>';
 print_r($item);
 echo '</pre>'; */