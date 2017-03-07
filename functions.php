<?php

add_theme_support( 'custom-logo' );

add_theme_support( 'custom-logo', array(
    'height'      => 38,
    'width'       => 148,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

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

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'myowntheme' ));
}
add_action( 'init', 'register_my_menu' );

function social_icons_html_output($format) {
    $format = '<li class="%1$s"><a href="%2$s" target="_blank">%3$s%4$s</a></li>';
    return $format;
}
add_filter('social_icon_output', 'social_icons_html_output');


function wpt_create_widget( $name, $id, $description ) {

    register_sidebar(array(
        'name' => __( $name ),   
        'id' => $id, 
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="module-heading">',
        'after_title' => '</h2>'
    ));

}

wpt_create_widget( 'Header', 'page', 'Displays on the side of pages with a header' );
wpt_create_widget( 'Contact Us', 'contact', 'Displays on the side of pages with a contact' );
wpt_create_widget( 'Find us', 'find', 'Displays on the side of pages with a find' );
wpt_create_widget( 'Write us', 'write', 'Displays on the side of pages with a write' );
wpt_create_widget( 'Footer', 'footer', 'Displays on the side of pages with a footer' );





?>