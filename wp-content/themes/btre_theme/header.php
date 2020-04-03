<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge; charset=<?php bloginfo( 'charset' ); ?>">
  
  
  <?php wp_head(); ?>
 
  <title><?php wp_title(); ?></title>
</head>

<body>
  <!-- Top Bar -->
  <!-- Créer un plugin pour renter les valeurs du Top Bar  -->
  <section id="top-bar" class="p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-phone"></i> (617)-555-5555
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope-open"></i> contact@realestatetemplate.com
        </div>
        <div class="col-md-4">
          <div class="social text-right">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="<?php home_url( '/' ); ?>">
        <?php
        // Pour le customizer de WP pour téléverser le logo de son choix
        if( has_custom_logo() ){
          the_custom_logo();
        } else {
          ?>
          <img src="wp-content/themes/btre_theme/assets/img/logo.png" class="logo" alt="">
          <?php
        }

        ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- <ul class="navbar-nav">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="<?php home_url( '/' ); ?>">Home</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php home_url( '/about' ); ?>">About</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php home_url( '/listings' ); ?>">Featured Listings</a>
          </li> 
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3">
            <a class="nav-link" href="#">
              <i class="fas fa-user-plus"></i> Register</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="#">
              <i class="fas fa-sign-in-alt"></i>

              Login</a>
          </li>
        </ul> -->
        
        <!-- <ul class="navbar-nav">
          <li class="nav-item mr-3">
            <a class="nav-link" href="<?php home_url( '/' ); ?>">Home</a>
          </li>
        </ul> -->

        <?php

        /*
         *  The navwalker for Bootstrap 4 and the source from GitHub
         *  https://github.com/wp-bootstrap/wp-bootstrap-navwalker
         *  For the primary and secondary menus
         */

        if( has_nav_menu( 'primary' ) ){
            wp_nav_menu([
                'menu_class'            =>  'navbar-nav',
                'theme_location'        =>  'primary',
                'container'             =>  '',
                'fallback_cb'           =>  'WP_Bootstrap_Navwalker::fallback',
                'walker'                =>  new WP_Bootstrap_Navwalker(),
            ]);
        }
        
        if( has_nav_menu( 'secondary' ) ){
          wp_nav_menu([
              'menu_class'            =>  'navbar-nav ml-auto',
              'theme_location'        =>  'secondary',
              'container'             =>  '',
              'fallback_cb'           =>  'WP_Bootstrap_Navwalker::fallback',
              'depth'                 =>  1,
              'walker'                =>  new WP_Bootstrap_Navwalker(),
          ]);
        }

        ?> 

      </div>
    </div>
  </nav>