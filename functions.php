<?php
// Silence is golden.


function everydaySetup() {
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css','1.1','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css','1.1','all');
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . 'assets/js/bootstrap/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

}


add_action( 'wp_enqueue_scripts', 'everydaySetup' );

