<?php 

function landaworks_load_stylesheets(){
    wp_register_style( 'stylesheet', get_template_directory_uri().'/style.css', [], 1, 'all' );
    wp_enqueue_style( 'stylesheet' );
    wp_register_style( 'custom', get_template_directory_uri().'/app.css', [], 1, 'all' );
    wp_enqueue_style( 'custom' );
}
add_action( 'wp_enqueue_scripts', 'landaworks_load_stylesheets');

function landaworks_load_scripts(){
    wp_register_script( 'custom', get_template_directory_uri().'/app.js', 'jquery', 1, true );
    wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'landaworks_load_scripts');