<?php

function wpt_theme_styles() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Exo+2:300|Lato|Open+Sans:600|Roboto+Condensed|Roboto:400,400i,700' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/slick.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/slick-theme.css' );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

add_theme_support( 'post-thumbnails' );


function theme_js() {

    global $wp_scripts;

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

function registerNavMenu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'registerNavMenu' );



?>