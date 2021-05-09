<?php 

// 標準機能

function my_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );   
}

add_action( 'after_setup_theme', 'my_setup');

// CSS / JavaScriptの読み込み

function my_script_init() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );