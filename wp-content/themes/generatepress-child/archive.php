<?php /* Template Name: Plantilla actividades */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_post_types.php');
require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_metabox.php');
require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_taxonomy.php');

$posts_per_page = -1;
$term_args = [
    'taxonomy' => 'wz-actividad-type',
    'hide_empty' => true,
    'orderby' => 'name'
];
$actividad_terms = get_terms($term_args);
$tipoActividad = '';
if (isset($_GET["tipo"]))
    $tipoActividad = $_GET["tipo"];
?>
<div class="contenedor-actividades">
    <ul class="actividad-types-menu">
        <li>
            <a class="btn-categoria" href="/actividades">
                Ver todas
            </a>
        </li>
        <?php foreach ($actividad_terms as $key => $term) : ?>
            <li>
                <a class="btn-categoria" href="/actividades?tipo=<?= $term->slug ?>">
                    <?= $term->name ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="types-post">
        <?php foreach ($actividad_terms as $key => $term) :
            if ($term->slug == $tipoActividad || $tipoActividad == '') :
                $actividads = wz_filter_actividad_type($term->slug, $posts_per_page); ?>
                <?php foreach ($actividads as $index => $post) : ?>
                    <div class="post-content">
                        <a class="actividad-enlace" href="<?= get_the_permalink($post->ID) ?>">
                            <div class="actividad-image"><?= get_the_post_thumbnail($post->ID) ?></div>
                            <?= $post->post_title ?>
                        </a>
                    </div>
            <?php endforeach;
            endif; ?>

        <?php endforeach; ?>
    </div>
</div>
<?php
function wz_filter_actividad_type($term, $post_per_page)
{
    $args = [
        'post_type' => 'wz-actividad',
        'posts_per_page' => $post_per_page,
        'orderby' => 'rand',
        'tax_query' => [
            [
                'taxonomy' => 'wz-actividad-type',
                'field' => 'slug',
                'terms' => $term,
            ]
        ]
    ];
    return get_posts($args);
}


get_footer();
