<?php

function rt_activate_plugin() {
  // 5.8 < 5.0
  if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
    wp_die( __( "You must update Wordpress to use this plugin.", 'rt-template' ) );
  }
  
  rt_template_realtor_init();
  rt_template_listing_init();
  flush_rewrite_rules();

  global $wpdb;
  $createSQL      =   "
    CREATE TABLE `" . $wpdb->prefix . "real_estate_contact` (
      `listing` VARCHAR(200) NOT NULL,
      `listing_id` INT(11) NOT NULL,
      `name` VARCHAR(200),
      `email` VARCHAR(100),
      `phone` VARCHAR(100),
      `message` TEXT,
      `contact_date` DATETIME,
      `user_id` INT(11) NOT NULL
    ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";

  require( ABSPATH . "/wp-admin/includes/upgrade.php" );
  dbDelta( $createSQL );
  
  $createSQL_2    =  "
  CREATE TABLE `" . $wpdb->prefix . "real_estate_realtor` (
    `realtorID` INT(11) NOT NULL,
    `name` VARCHAR(200),
    `phone` VARCHAR(50),
    `email` VARCHAR(20),
    `hire_date` DATE,
    `user_id` INT(11) NOT NULL,
    `is_mvp` TINYINT,
    `photo` BLOB(10000),
    `description` TEXT,
    PRIMARY KEY (realtorID)
  ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";

  dbDelta( $createSQL_2 );

  $createSQL_1    =  "
  CREATE TABLE `" . $wpdb->prefix . "real_estate_listings` (
    `realtorID` INT(11) NOT NULL,
    `title` VARCHAR(200),
    `address` VARCHAR(200),
    `city` VARCHAR(100),
    `state` VARCHAR(100),
    `zipcode` INT(20),
    `description` TEXT,
    `price` INT(11), 
    `bedrooms` INT(11), 
    `bathrooms` DOUBLE(11, 2), 
    `garage` INT(11), 
    `sqft` INT(11),
    `lot_size`  DOUBLE(11, 2),
    `photo_main`  BLOB(50000),
    `photo_1`  BLOB(50000),
    `photo_2`  BLOB(50000),
    `photo_3`  BLOB(50000),
    `photo_4`  BLOB(50000),
    `photo_5`  BLOB(50000),
    `photo_6`  BLOB(50000),
    `is_published`  TINYINT(50),
    `list_date` DATETIME,
    FOREIGN KEY (realtorID) REFERENCES " . $wpdb->prefix . "real_estate_realtor(realtorID)
  ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";";

  
  dbDelta( $createSQL_1 );

  global $wp_roles;
  add_role(
    'rt_template_author',
    __( 'Real estate Author', 'rt-template' ),
    [
      'read'          =>  true,
      'edit_posts'    =>  true,
      'upload_files'  =>  true,
    ]
  );

  // $real_estate_template_opts        = get_option( 'rt_opts' );


}

