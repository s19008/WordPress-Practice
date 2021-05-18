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
    wp_deregister_script('jquery');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'aos-css', '//unpkg.com/aos@2.3.1/dist/aos.css', array() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array( 'reset', 'slick', 'slick-theme', 'aos-css'), 'all');
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/slick/slick.min.js', array(), true );
    wp_enqueue_script( 'aos-js', '//unpkg.com/aos@2.3.1/dist/aos.js', array(), true );
    wp_enqueue_script( 'my-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array( 'slick-js','aos-js' ), true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/javascript/script.js', array( 'my-jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );
?>