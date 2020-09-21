

<?php

function my_theme_setup() {
    // Ready for i18n
    load_theme_textdomain( "my_theme", TEMPLATEPATH . "/languages");

    // Use thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for custom logo.
    add_theme_support( 'custom-logo', array(
        'height' =&gt; 240,
        'width' =&gt; 240,
        'flex-height' =&gt; true,
    ) );

    // Register Navigation Menus
    register_nav_menus(array(
        'header-menu' =&gt; 'Header Menu',
        'footer-menu' =&gt; 'Footer Menu',
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


function my_theme_cssjs() {
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/styles.css' );
    wp_enqueue_script( 'my-theme-js', get_template_directory_uri() . '/scripts.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_cssjs' );


// Removes some links from the header
function my_theme_remove_headlinks() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'my_theme_remove_headlinks' );


function my_theme_excerpt($length) {
    return 25;
}
add_filter( 'excerpt_length', 'my_theme_excerpt' );