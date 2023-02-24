<?php
function enqueue_styles_child_theme()
{
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['parent-style'],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');

function enqueue_scripts_child_theme()
{
    wp_enqueue_script('child-main-script', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_child_theme');
