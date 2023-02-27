<?php /* Template Name: Plantilla contacto */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- formulario de contacto -->
<div class="contenido-plantilla  w-full mb-20 mx-10">
    <div class="titulo-container">
        <h1>
            Comunícate con nosotros
        </h1>

    </div>
    <div class="site-content justify-center">

        <section class="bg-cover bg-opacity-50 m-10" style="background-image: url('https://images.unsplash.com/photo-1434596922112-19c563067271?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHxmaXRuZXNzfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=400&q=60')">
            <div class="container px-6 py-12 mx-auto">
                <div class="lg:flex lg:items-center lg:-mx-6">
                    <div class="lg:w-1/2 lg:mx-6">

                        <h2 class="font-semibold text-white lg:text-lg">
                            Preguntas, sugerencias o comentarios, estamos para ayudarte
                        </h2>

                        <div class="mt-6 space-y-8 md:mt-8">
                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span class="mx-2 text-white truncate w-72">
                                    Las Palmas De Gran Canaria
                                </span>
                            </p>

                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>

                                <span class="mx-2 text-white truncate w-72">92800000</span>
                            </p>

                            <p class="flex items-start -mx-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>

                                <span class="mx-2 text-white truncate w-72">wellness@zone.com</span>
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 lg:w-1/2 lg:mx-6">
                        <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white rounded-lg shadow-2xl lg:max-w-xl shadow-gray-300/50">
                            <h1 class="text-lg font-medium text-gray-700">
                                Formulario de contacto
                            </h1>

                            <form id="formulario-contacto" class="mt-6">
                                <div class="flex-1">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Nombre</label>
                                    <input id="contacto-nombre" type="text" required placeholder="Nombre" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="flex-1 mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                                    <input id="contacto-email" type="email" required placeholder="ejemplo@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                </div>

                                <div class="w-full mt-6">
                                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Mensaje</label>
                                    <textarea id="contacto-mensaje" class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" required placeholder="Mensaje"></textarea>
                                </div>

                                <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-md hover:bg-yellow-400 hover:text-black focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                    Enviar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>



<?php
get_footer();
