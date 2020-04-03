<?php

function rt_admin_scripts(){
  if( !isset($_GET['page']) || $_GET['page'] != "rt_realtors_option" ) {
    return;
  }
  wp_register_style( 'rt_bootstrap', 
                      plugins_url( '/assets/css/bootstrap.css' ), 
                      REAL_ESTATE_PLUGIN_URL
                    );
  wp_enqueue_style( 'rt_bootstrap' );
}