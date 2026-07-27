<?php
function jumpymouse_it_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jumpymouse-it'),
    ));
}
add_action('after_setup_theme', 'jumpymouse_it_setup');

function jumpymouse_it_assets() {
    wp_enqueue_style('jumpymouse-it-style', get_stylesheet_uri(), array(), '1.0');
}
add_action('wp_enqueue_scripts', 'jumpymouse_it_assets');
