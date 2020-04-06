<?php

function rt_save_post_admin( $post_id, $post, $update ){
  $realtor_data             =   get_post_meta( $post_id, 'realtor_data', true );
  $realtor_data             =   empty( $recipe_data ) ? [] : $recipe_data;

  update_post_meta( $post_id, 'realtor_data', $realtor_data );

  $listing_data             =   get_post_meta( $post_id, 'listing_data', true );
  $listing_data             =   empty( $listing_data ) ? [] : $listing_data;

  update_post_meta( $post_id, 'listing_data', $listing_data );
}

function rt_save_realtor() {
 if( !current_user_can( 'edit_theme_options' ) ) {
   wp_die( __( 'You are not allowed to be on this page', 'rt-template' ) );
 }

 /* check_admin_referer( 'rt_options_verify' ); */
 
 /* echo '<pre>';
 print_r($_POST);
 echo '</pre>'; */

 
 /* include( 'database.php' ); */




 // Envoi des données dans la base de données wp_starterthemereal_estate_realtor
 global $wpdb;
 $wpdb->insert( $wpdb->prefix . "real_estate_realtor", $item, null );

}

function rt_save_listing(){

}