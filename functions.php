<?php
// Silence is golden.

// Sets up the theme for use
function everydaySetup() {
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css','1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css','1.1','all');
    wp_enqueue_script( 'bootstrapjs.min', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array ( 'jquery' ), 1.1);

}

add_action( 'wp_enqueue_scripts', 'everydaySetup' );

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');