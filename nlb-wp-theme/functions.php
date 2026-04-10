<?php

// Functions and definitions

function nlb_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery-slim', get_template_directory_uri() . '/js/jquery-3.5.1.slim.min.js', array(), '3.5.1', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery-slim' ), '1.16.1', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'popper' ), '4.5.2', true );
}
add_action( 'wp_enqueue_scripts', 'nlb_theme_scripts' );