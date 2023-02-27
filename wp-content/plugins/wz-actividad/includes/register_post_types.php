<?php
function wz_register_post_type_actividad()
{
    $labels = [
        'name' => _x('Actividades', 'Post Type General Name', 'wz-project'),
        'singular_name' => _x('Actividad', 'Post Type General Name', 'wz-project'),
        'menu_name' => __('Actividades deportivas', 'wz-project'),
        'parent_item_colon' => __('Actividad padre', 'wz-project'),
        'all_items' => __('Todas las actividades', 'wz-project'),
        'view_item' => __('Ver actividades', 'wz-project'),
        'add_new_item' => __('Añadir actividad', 'wz-project'),
        'add_new' => __('Añadir actividad', 'wz-project'),
        'edit_item' => __('Editar actividad', 'wz-project'),
        'update_item' => __('Actualizar actividad', 'wz-project'),
        'search_items' => __('Buscar actividad', 'wz-project'),
        'not_found' => __('Actividad no encontrada', 'wz-project'),
        'not_found_in_trash' => __('Actividad no encontrada en la papelera', 'wz-project'),
    ];
    $supports = [
        'title',
        'editor',
        'author',
        'excerpt',
        'thumbnail',
        'comments',
        'revisions',
        'custom-fields',
        'page-attributes'
    ];
    register_post_type('wz-actividad', [
        'labels' => $labels,
        'description' => __('Actividades deportivas', 'wz-project'),
        'supports' => $supports,
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-universal-access-alt',
        'can_export' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
        'rewrite' => ['slug' => 'actividades'],
        'show_in_rest' => false
    ]);
}
add_action('init', 'wz_register_post_type_actividad', 0);
