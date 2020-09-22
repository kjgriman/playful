

<?php

//Ocultar admin bar a todos los usuarios
add_action('after_setup_theme', 'bld_ocultar_admin_bar');
function bld_ocultar_admin_bar() {
add_filter( 'show_admin_bar', '__return_false' );
}

function my_theme_setup() {
    

    // Register Navigation Menus
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));

}
add_action( 'after_setup_theme', 'my_theme_setup' );


function my_theme_cssjs() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/css/bootstrap.min.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/css/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/js/bootstrap.js', array( 'bootstrap' ), '', true );
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