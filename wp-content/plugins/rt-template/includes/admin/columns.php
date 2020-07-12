<?php

/**
 * File to add customized columns for the custom post types "Listing" and "Realtor"
 */

function rt_add_new_listing_columns( $columns ){
  $new_columns                  = [];
  $new_columns['title']         = __( 'Title', 'listing' );
  $new_columns['is_published']  = '<input type="checkbox" />';
  $new_columns['price']         = __( 'Price', 'listing' );
  $new_columns['List Date']     = __( 'List Date', 'listing' );
  $new_columns['Realtor']       = __( 'Realtor', 'listing' );

  return $new_columns;
}

function rt_add_new_realtor_columns( $columns ){
  $new_columns                  = [];
  $new_columns['realtorID']     = __( 'ID', 'realtor' );
  $new_columns['name']          = __( 'Name', 'realtor' );
  $new_columns['email']         = __( 'email', 'realtor' );
  $new_columns['Hire Date']     = __( 'Hire Date', 'realtor' );

  return $new_columns;
}

function rt_manage_listing_columns( $column, $post_id ){
  switch( $column ){
    case 'is_published':
        $listing_data        =   get_post_meta( $post_id, 'listing_data', true );
        echo isset($listing_data['is_published']) ? $listing_data['is_published'] : '<input type="checkbox" />';
        break;
    case 'price':
        $listing_data        =   get_post_meta( $post_id, 'listing_data', true );
        echo isset($listing_data['price']) ? $listing_data['price'] : 'N/A';
        break;
    case 'List Date':
      $listing_data          =   get_post_meta( $post_id, 'listing_data', true );
      echo isset($listing_data['list_date']) ? $listing_data['list_date'] : 'N/A';
      break;
    case 'Realtor':
      $listing_data          =   get_post_meta( $post_id, 'listing_data', true );
      echo isset($listing_data['realtorID']) ? $realtor_data['name'] : 'N/A';
      break;
    default:
        break;
  }
}

function rt_manage_realtor_columns( $column, $post_id ){
  switch( $column ){
    case 'ID':
      $realtor_data          =  get_post_meta( $post_id, 'realtor_data', true );
      echo isset($realtor_data['realtorID']) ? $realtor_data['realtorID'] : 'N/A';
    break;
    case 'name':
        $realtor_data        =   get_post_meta( $post_id, 'realtor_data', true );
        echo isset($realtor_data['name']) ? $realtor_data['name'] : 'N/A';
        break;
    case 'email':
        $realtor_data        =   get_post_meta( $post_id, 'realtor_data', true );
        echo isset($realtor_data['email']) ? $realtor_data['email'] : 'N/A';
        break;
    case 'Hire Date':
      $realtor_data          =   get_post_meta( $post_id, 'realtor_data', true );
      echo isset($realtor_data['hire_date']) ? $realtor_data['hire_date'] : 'N/A'; 
    break;
    default:
        break;
  }
}