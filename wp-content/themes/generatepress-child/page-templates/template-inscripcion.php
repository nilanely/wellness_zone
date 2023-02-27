<?php /* Template Name: Plantilla de inscripción */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_post_types.php');
require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_metabox.php');
require_once(ABSPATH . 'wp-content/plugins/wz-actividad/includes/register_taxonomy.php');
get_header(); ?>



<section class="bg-white dark:bg-gray-900 w-full my-10 mb-20">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Inscribete
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">
                    Let’s get you all set up so you can verify your personal account and begin setting up your profile.
                </p>

                <form id="form-inscripcion" class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nombre</label>
                        <input id="inscripcion-nombre" required type="text" placeholder="Nombre" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Apellidos</label>
                        <input id="inscripcion-apellido" required type="text" placeholder="Apellido" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Teléfono</label>
                        <input id="inscripcion-telefono" required type="text" placeholder="XXXXXXXXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div>
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                        <input id="inscripcion-email" required type="email" placeholder="ejemplo@mail.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div class="w-full">
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Actividad</label>

                        <?php

                        $term_args = [
                            'taxonomy' => 'wz-actividad-type',
                            'hide_empty' => true,
                            'orderby' => 'name'
                        ];
                        $actividad_terms = get_terms($term_args);
                        ?>
                        <select id="inscripcion-actividad" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>--Seleccione actividad--</option>
                            <?php
                            foreach ($actividad_terms as $key => $term) :
                                $actividades = wz_filter_actividad_type($term->slug, -1);
                                foreach ($actividades as $index => $post) : ?>
                                    <option value="<?= $post->ID  ?>">
                                        <?= $post->post_title ?>
                                    </option>
                            <?php endforeach;
                            endforeach;

                            ?>
                        </select>
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
                        ?>
                    </div>

                    <div class="col-span-2">
                        <button class="w-3/6 m-auto flex items-center justify-between px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Inscribirse </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
</div>
<?php
get_footer();
