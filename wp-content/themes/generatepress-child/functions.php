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
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_child_theme');

function add_fontawesome_script()
{
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/b75bd66f73.js', array(), '5.15.3', true);
}

add_action('wp_enqueue_scripts', 'add_fontawesome_script');

function enqueue_tailwind()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind');

function enqueue_scripts_formulario()
{
    wp_enqueue_script('formularios-script', get_stylesheet_directory_uri() . '/js/formularios.js');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_formulario');
