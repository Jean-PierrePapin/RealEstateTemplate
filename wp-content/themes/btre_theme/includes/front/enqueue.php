<?php

function ret_enqueue() {
  $uri                =   get_theme_file_uri();
  $ver                =   1;

  // Register the style in order to load them later on
  wp_register_style( 'ret_all_style', $uri . '/assets/css/all.css' );
  wp_register_style( 'ret_bootstrap_style', $uri . '/assets/css/bootstrap.css' );
  wp_register_style( 'ret_style', $uri . '/assets/css/style.css' );

  // Enqueue styles so they can be loaded on the theme
  wp_enqueue_style( 'ret_all_style' );
  wp_enqueue_style( 'ret_bootstrap_style' );
  wp_enqueue_style( 'ret_style' );

  // Register the scripts so the wp_footer function could load the scripts
  wp_register_script( 'ret_bootstrap_bundle_min', $uri . '/assets/js/bootstrap.bundle.min.js', [], false, true );
  wp_register_script( 'ret_main', $uri . '/assets/js/main.js', [], false, true );

  // Enqueue the scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ret_bootstrap_bundle_min' );
  wp_enqueue_script( 'ret_main' );
}