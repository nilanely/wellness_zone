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
    $descripcion = isset($values['main-descripcion']) ? esc_attr($values['main-descripcion'][0]) : '';
    $featured_check = isset($values['is-featured']) ? esc_attr($values['is-featured'][0]) : '';
    wp_nonce_field('wz' . $post->ID, 'actividad-nonce');
?>
    <div>
        <label for="main-descripcion">
            <?= 'Descripción corta de la actividad' ?>
        </label>
        <textarea rows="3" type="text" name="main-descripcion" id="main-descripcion"><?= esc_html($descripcion); ?></textarea>
    </div>
    <div>
        <input type="checkbox" id="is-featured" name="is-featured" <?php checked($featured_check, 'on'); ?> />
        <label for="is-featured">
            <?= 'Actividad destacada' ?>
        </label>
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

    if (isset($_POST['main-descripcion'])) {
        update_post_meta($post_id, 'main-descripcion', sanitize_text_field($_POST['main-descripcion']));
    }

    $featured_value = isset($_POST['is-featured']) ? 'on' : '';
    update_post_meta($post_id, 'is-featured', $featured_value);
}
add_action('save_post', 'wz_actividad_metabox_save');
