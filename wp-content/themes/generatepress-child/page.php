<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="contenido-inicio">
    <div class="banner">
        <div class="text-container">
            <h1>Únete a la comunidad <br /> deportiva más enérgica</h1>
            <p>Tenemos todo lo que necesitas para mejorar tu forma física y disfrutar del deporte</p>
            <button class="btn-principal">Inscribirse</button>
        </div>
    </div>
    <div class="titulo-container">
        <h1>
            Bienvenidos a Wellness Zone
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>

    <section class="contenedor-slider">
        <div class="slider"></div>
    </section>

    <section class="mx-auto mb-20">
        <div class="relative">
            <h1 class="text-center text-4xl font-bold text-black mt-8 mb-6">
                ACTIVIDADES DEPORTIVAS
            </h1>
        </div>

</div>
<?php
get_footer();
