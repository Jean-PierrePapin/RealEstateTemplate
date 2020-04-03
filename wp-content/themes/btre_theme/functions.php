<?php
// 

// Setup


// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/navwalker.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'ret_enqueue' );
add_action( 'after_setup_theme', 'real_estate_setup_theme' );
add_action( 'after_setup_theme', 'register_navwalker' );

// Shortcodes




// Translation Functions
// __( 'Returns a translated string', 'udemy ');
// _e( 'Outputs a translated string', 'udemy' );
// _x( 'Bass', 'Instrument', 'udemy' );
// _n( 'Singular Form', 'Plural Form', 1, 'udemy' ); // Singular
// _n( 'Singular Form', 'Plural Form', 2, 'udemy' ); // Plural
// _ex( 'Bass', 'Instrument', 'udemy' );
// _nx( 'Singular', 'Plural', 2, 'Instrument', 'udemy' );

// // HIGHLY recommended translation functions
// esc_html__( 'Returns an escaped translated string', 'udemy' );
// esc_html_e( 'Outputs an escaped translated string', 'udemy' );
// esc_html_x( 'Bass (Escaped)', 'Fish', 'udemy' );
// wp_kses_post( __( 'Unescaped translated string', 'udemy' ) );