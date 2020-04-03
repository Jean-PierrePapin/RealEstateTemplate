<?php

function real_estate_setup_theme(){
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );

  // La fonction permet de rajouter un menu dans la partie admin de WP
  register_nav_menu( 'primary', __( 'Primary Menu', 'btre_theme' ) );
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'btre_theme' ) );
}