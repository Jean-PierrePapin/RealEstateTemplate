<?php

function rt_realtor_admin_menus() {
  add_menu_page(
    'Realtor Options',
    'Realtor Options',
    'edit_theme_options',
    'rt_plugin_realtor_opts',
    'rt_realtors_option_page'
  );
}

function rt_listing_admin_menus() {
  add_menu_page(
    'Listing Options',
    'Listing Options',
    'edit_theme_options',
    'rt_plugin_listing_opts',
    'rt_listings_option_page'
  );
}