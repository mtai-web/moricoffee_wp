<?php

function mori_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'global-menu' => 'グローバルメニュー'
        )
    );

}

add_action('after_setup_theme', 'mori_setup');



function mori_enqueue_style() {
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

}

add_action('wp_enqueue_scripts', 'mori_enqueue_style');

function create_menu_post_type() {

    register_post_type('menu',array(
        'label' => 'メニュー',
        'public'=> true,
        'has_archive'=> true,
        'supports' => array('title', 'editor', 'thumbnail')
    )
    );
}
add_action('init', 'create_menu_post_type');

?>