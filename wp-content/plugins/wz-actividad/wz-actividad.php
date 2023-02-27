<?php
/*
Plugin Name: Plugin actividades
Plugin URI: 
Description: Plugin para Wellness Zone
Version: 1.0
Author: Yo
Author Uri:
Licence: GPL v3 or later
Licence URI: gnu.org/licenses/gpl-3.0.html
*/
require_once(plugin_dir_path(__FILE__) . 'includes/register_post_types.php');
require_once(plugin_dir_path(__FILE__) . 'includes/register_metabox.php');
require_once(plugin_dir_path(__FILE__) . 'includes/register_taxonomy.php');

function wz_plugin_assets()
{
    wp_enqueue_style('wz-main-css', plugins_url('/css/style.css', __FILE__));
    wp_enqueue_script('wz-main-js', plugins_url('/js/main.js', __FILE__));
}
add_action('wp_enqueue_scripts', 'wz_plugin_assets');

function mostrar_actividad_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'id' => get_the_ID(),
    ), $atts, 'actividad');

    $dificultad = get_post_meta($atts['id'], 'dificultad', true);
    $duracion = get_post_meta($atts['id'], 'duracion', true);

    $output = '<p>Dificultad: ' . esc_html($dificultad) . '</p>';
    $output .= '<p>Duración: ' . esc_html($duracion) . '</p>';

    return $output;
}
add_shortcode('actividad', 'mostrar_actividad_shortcode');
