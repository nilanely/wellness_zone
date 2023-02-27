<?php
function wz_actividad_metabox()
{
    add_meta_box(
        'extra-info-actividad',
        'Información de la actividad',
        'wz_render_actividad_metabox',
        'wz-actividad',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'wz_actividad_metabox');

function wz_render_actividad_metabox($post)
{
    $values = get_post_custom($post->ID);
    $dificultad = isset($values['dificultad']) ? esc_attr($values['dificultad'][0]) : '';
    $duracion = isset($values['duracion']) ? esc_attr($values['duracion'][0]) : '';
    if (empty($dificultad)) {
        $dificultad = '';
    }
    if (empty($duracion)) {
        $duracion = '';
    }
    wp_nonce_field('wz' . $post->ID, 'actividad-nonce');
    $values = get_post_custom($post->ID);
?>
    <div>

        </label>
        <?= esc_html('Dificultad:'); ?>
        <select name="dificultad" id="dificultad">
            <option value="baja" <?php selected($dificultad, 'baja'); ?>>Baja</option>
            <option value="media" <?php selected($dificultad, 'media'); ?>>Media</option>
            <option value="alta" <?php selected($dificultad, 'alta'); ?>>Alta</option>
        </select>
    </div>
    <div>
        <label for="duracion">
            <?= 'Duración:' ?>
        </label>
        <select name="duracion" id="duracion">
            <option value="30min" <?php selected($duracion, '30min'); ?>>30 minutos</option>
            <option value="45min" <?php selected($duracion, '45min'); ?>>45 minutos</option>
        </select>
    </div>
<?php
}


function wz_actividad_metabox_save($post_id)
{
    // Ignora los auto guardados.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!isset($_POST['actividad-nonce']) || !wp_verify_nonce($_POST['actividad-nonce'], 'wz' . $post_id)) {
        return;
    }

    if (!current_user_can('edit_posts')) {
        return;
    }

    if (isset($_POST['duracion'])) {
        update_post_meta($post_id, 'duracion', sanitize_text_field($_POST['duracion']));
    }

    if (isset($_POST['dificultad'])) {
        update_post_meta($post_id, 'dificultad', sanitize_text_field($_POST['dificultad']));
    }
}
add_action('save_post', 'wz_actividad_metabox_save');
