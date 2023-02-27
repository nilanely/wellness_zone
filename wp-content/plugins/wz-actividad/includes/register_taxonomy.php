<?php
function wz_register_actividad_type_taxonomy()
{
    $labels = [
        'name' => _x('Tipo de actividad', 'taxonomy general name', 'wz-project'),
        'singular_name' => _x('Tipo de actividad', 'taxonomy singular name', 'wz-project'),
        'search_items' => __('Buscar tipo de actividad', 'wz-project'),
        'all_items' => __('Todos los tipos de actividades', 'wz-project'),
        'parent_item' => __('Tipo de actividad padre', 'wz-project'),
        'parent_item_colon' => __('Tipo de actividad padre:', 'wz-project'),
        'edit_item' => __('Editar tipo de actividad', 'wz-project'),
        'update_item' => __('Actualizar tipo de actividad', 'wz-project'),
        'add_new_item' => __('Añadir tipo de actividad', 'wz-project'),
        'new_item_name' => __('Nuevo tipo de actividad', 'wz-project'),
        'menu_name' => __('Tipos de actividad', 'wz-project'),
    ];
    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'tipo-actividad'],
        'show_in_rest' => false
    ];
    register_taxonomy('wz-actividad-type', ['wz-actividad'], $args);
}
add_action('init', 'wz_register_actividad_type_taxonomy');

function wz_register_actividad_time_taxonomy()
{
    $labels = [
        'name' => _x('Horario', 'taxonomy general name', 'wz-project'),
        'singular_name' => _x('Horario', 'taxonomy singular name', 'wz-project'),
        'search_items' => __('Buscar horario', 'wz-project'),
        'all_items' => __('Todos los horarios de actividad', 'wz-project'),
        'parent_item' => __('Horario padre', 'wz-project'),
        'parent_item_colon' => __('Horario padre:', 'wz-project'),
        'edit_item' => __('Editar horario', 'wz-project'),
        'update_item' => __('Actualizar horario', 'wz-project'),
        'add_new_item' => __('Añadir horario', 'wz-project'),
        'new_item_name' => __('Nuevo horario', 'wz-project'),
        'menu_name' => __('Horarios', 'wz-project'),
    ];
    $args = [
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'horario-actividad'],
        'show_in_rest' => false
    ];
    register_taxonomy('wz-actividad-time', ['wz-actividad'], $args);
}
add_action('init', 'wz_register_actividad_time_taxonomy');
