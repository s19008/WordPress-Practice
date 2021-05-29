<?php

// 標準機能

function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}

add_action('after_setup_theme', 'my_setup');

// CSS / JavaScriptの読み込み

function my_script_init()
{
    wp_deregister_script('jquery');
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('aos-css', '//unpkg.com/aos@2.3.1/dist/aos.css', array());
    wp_enqueue_style('blog-css', get_template_directory_uri() . '/css/blog.css', array(), '1.0.0', 'all');
    wp_enqueue_style('single-css', get_template_directory_uri() . '/css/single.css', array(), '1.0.0.', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css', array('reset', 'slick', 'slick-theme', 'aos-css', 'blog-css', 'single-css'), 'all');
    wp_enqueue_script('my-jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), NULL, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array('my-jquery'), NULL, true);
    wp_enqueue_script('aos-js', '//unpkg.com/aos@2.3.1/dist/aos.js', array('my-jquery'), NULL, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/javascript/script.js', array('my-jquery', 'slick-js', 'aos-js'), filemtime( get_theme_file_path( '/javascript/script.js' ) ), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// パンくずリスト //
function breadcrumb($postID) {
    $title = get_the_title($postID);
    echo '<ol class="breadcrumb-list">';
    if ( is_single() ) {
        echo '<li class="breadcrumb-item"><a href="/">ホーム</a></li>';
        echo '<li class="breadcrumb-item"><a href="/blog/"> > ブログ</a></li>';
        echo '<li class="breadcrumb-item" aria-current="page">'.$title.'</li>';
    }
    else if( is_page() ) {
        echo '<li class="breadcrumb-item"><a href="/">ホーム</a></li>';
        echo '<li class="breadcrumb-item" aria-current="page"> > '.$title.'</li>';
    }
    echo "</ol>";
}

function my_theme_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー',
        'id' => 'main-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
