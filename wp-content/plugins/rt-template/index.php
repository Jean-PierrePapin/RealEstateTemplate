<?php
/*
* Plugin Name: Real Estate plugin
* Description: A simple WordPress plugin that allows to add realtor and listings
* Version: 1.0
* Author: Sam The Coder
* Author URI: None
* Text Domain: real estate plugin
*/

if( !function_exists( 'add_action' ) ){
  echo "Hi there! I'm just a plugin, not much I can do when called directly.";
  exit;
}

// Setup
define( 'REAL_ESTATE_PLUGIN_URL', __FILE__ );



// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
/* include( 'process/save-post.php' ); */
//include( dirname(REAL_ESTATE_PLUGIN_URL) . '/includes/widgets.php' );
include( 'includes/admin/init.php' );
//include( 'includes/admin/init_1.php' );
include( 'includes/admin/listings-option.php' ); 
include( 'includes/admin/realtors-option.php' );
include( 'includes/admin/menus.php' );
include( 'includes/admin/options-page.php' );
include( 'includes/admin/enqueue.php' );
include( 'process/save-post.php' );



// Hooks
register_activation_hook( __FILE__, 'rt_activate_plugin' );
add_action( 'init', 'rt_template_realtor_init' );
/* add_action( 'init', 'rt_template_listings_init', 10 ); */
add_action( 'init', 'rt_template_listing_init', 100 );
/* add_action( 'save_post_realtor_listing', 'rt_save_post_admin', 10, 3 ); */
/* add_action( 'admin_init', 'rt_listing_admin_init', 100 ); */
add_action( 'admin_init', 'rt_realtor_admin_init' );
add_action( 'admin_menu', 'rt_listing_admin_menus', 100 );
add_action( 'admin_menu', 'rt_realtor_admin_menus' );
add_action( 'wp_enqueue_scripts', 'rt_enqueue_scripts', 100 );




// Shortcodes

