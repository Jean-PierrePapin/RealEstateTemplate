<?php

/**
 * File to erase all the tables in DB when the plugin is uninstalled
 */

if( !defined( 'WP_UNINSTALL_PLUGIN' ) ){
  exit;
}

/*
*   Code à revoir car il faut supprimer trois bases de données au lieu de une comme
*   dans le tutoriel.
*   Faire des tests, une fois le plugin est terminé.
*   "DROP TABLE ` wp_starterthemereal_estate_realtor `"
*
*/
global $wpdb;
$wpdb->query( "DROP TABLE IF EXISTS `" . $wpdb->prefix . "real_estate_realtor`" );
$wpdb->query( "DROP TABLE IF EXISTS `" . $wpdb->prefix . "real_estate_listings`" );
$wpdb->query( "DROP TABLE IF EXISTS `" . $wpdb->prefix . "real_estate_contact`" );
/* $wpdb->query( "DROP TABLE `" . $wpdb->prefix . "real_estate_realtor`" );
$wpdb->query( "DROP TABLE `" . $wpdb->prefix . "real_estate_listings`" );
$wpdb->query( "DROP TABLE `" . $wpdb->prefix . "real_estate_contact`" ); */