<?php

// $realtors_opts        = [];
$name           = $_POST['name'];
$photo          = $_POST['photo'];
$description    = $_POST['description'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
$is_mvp         = false;
$date           = $_POST['hire_date'];

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
  $name,
  $photo,
  $description,
  $phone,
  $email,
  $is_mvp,
  $date
];