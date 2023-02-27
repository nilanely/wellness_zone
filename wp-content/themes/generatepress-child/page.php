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


<!-- Banner.-->
<div class="contenido-inicio">
    <div class="banner">
        <div class="text-container">
            <h1>Únete a la comunidad <br /> deportiva más enérgica</h1>
            <p>Tenemos todo lo que necesitas para mejorar tu forma física y disfrutar del deporte</p>
            <a href="/inscripcion/" class="btn-principal">Inscribirse</a>
        </div>
    </div>
    <!-- Titulo carrusel-->
    <div class="titulo-container">
        <h1>
            Bienvenidos a Wellness Zone
        </h1>
        <p>
            Somos un centro deportivo que ofrece una amplia variedad de actividades
            dirigidas a los diferentes niveles de condición física. Además, nuestros
            clientes disfrutan de parking gratuito y nuestras instalaciones están
            completamente equipadas para garantizar una experiencia deportiva única
            y satisfactoria.
        </p>
    </div>

    <!--carrusel-->
    <section class="carrusel">
        <div class="carrusel__contenedor">
            <div class="carrusel__contenedor-list">
                <ul class="slider" id="slider">
                    <li class="slider__item">
                        <img class="slider__img" src="https://images.unsplash.com/photo-1580086319619-3ed498161c77?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="Actividades dirigidas" />
                        <div class="slider__banner">
                            <h2 class="slider__banner-text">Actividades dirigidas</h2>
                        </div>
                    </li>
                    <li class="slider__item hidden">
                        <img class="slider__img" src="https://images.unsplash.com/photo-1590674899484-d5640e854abe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGFya2luZ3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=400&q=60" alt="" />
                        <div class="slider__banner">
                            <h2 class="slider__banner-text">Parking gratuito</h2>
                        </div>
                    </li>
                    <li class="slider__item hidden">
                        <img class="slider__img" src="https://images.unsplash.com/photo-1561214078-f3247647fc5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
                        <div class="slider__banner">
                            <h2 class="slider__banner-text">Instalaciones Equipadas</h2>
                        </div>
                    </li>
                </ul>
                <div class="slider__buttons-content">
                    <div class="slider__buttons">
                        <button id="prevButton" class="btn-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="btn-slider__icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </button>
                        <button id="nextButton" class="btn-slider">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="btn-slider__icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--cards-->
    <section class="cards">
        <div class="cards1">
            <div class="cards-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M320 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM125.7 175.5c9.9-9.9 23.4-15.5 37.5-15.5c1.9 0 3.8 .1 5.6 .3L137.6 254c-9.3 28 1.7 58.8 26.8 74.5l86.2 53.9-25.4 88.8c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l28.7-100.4c5.9-20.6-2.6-42.6-20.7-53.9L238 299l30.9-82.4 5.1 12.3C289 264.7 323.9 288 362.7 288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H362.7c-12.9 0-24.6-7.8-29.5-19.7l-6.3-15c-14.6-35.1-44.1-61.9-80.5-73.1l-48.7-15c-11.1-3.4-22.7-5.2-34.4-5.2c-31 0-60.8 12.3-82.7 34.3L57.4 153.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l23.1-23.1zM91.2 352H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h69.6c19 0 36.2-11.2 43.9-28.5L157 361.6l-9.5-6c-17.5-10.9-30.5-26.8-37.9-44.9L91.2 352z" />
                </svg>
            </div>
            <div class="cards-titel">Actividad física</div>
            <div class="cards-details">
                "Muévete y disfruta de los beneficios de una vida activa"
            </div>
        </div>
        <div class="cards1">
            <div class="cards-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                </svg>
            </div>
            <div class="cards-titel">Nutrición</div>
            <div class="cards-details">
                "La nutrición adecuada es la clave para una vida saludable"
            </div>
        </div>
        <div class="cards1">
            <div class="cards-icon">
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M160 0c17.7 0 32 14.3 32 32V144H128V32c0-17.7 14.3-32 32-32zM32 64c0-17.7 14.3-32 32-32s32 14.3 32 32v80H32V64zm192 0c0-17.7 14.3-32 32-32s32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V64zm96 64c0-17.7 14.3-32 32-32s32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V128zm-96 88l0-.6c9.4 5.4 20.3 8.6 32 8.6c13.2 0 25.4-4 35.6-10.8c8.7 24.9 32.5 42.8 60.4 42.8c11.7 0 22.6-3.1 32-8.6V256c0 52.3-25.1 98.8-64 128v96c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V401.6c-17.3-7.9-33.2-18.8-46.9-32.5L37.5 357.5C13.5 333.5 0 300.9 0 267V240c0-35.3 28.7-64 64-64h88c22.1 0 40 17.9 40 40s-17.9 40-40 40H96c-8.8 0-16 7.2-16 16s7.2 16 16 16h56c39.8 0 72-32.2 72-72z" />
                </svg>
            </div>
            <div class="cards-titel">Motivación</div>
            <div class="cards-details">
                "Encuentra tu motivación y conquista tus objetivos"
            </div>
        </div>
    </section>

    <!-- actividades -->
    <section class="seccion-actividades">
        <div class="seccion-actividades__titulo">
            <h1 class="seccion-actividades__titulo-text">ACTIVIDADES DEPORTIVAS</h1>
        </div>
        <!-- galeria imagenes-->
        <div class="galeria">
            <div class="galeria__grid">
                <!--primera imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1530631673369-bc20fdb32288?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="aqua" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Aqua</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="#" class="btn-card"> Ver más </a>
                    </div>
                </div>
                <!--segunda imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1591343395902-1adcb454c4e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="body-mind" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Body mind</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="monitores.html" class="btn-card"> Ver más </a>
                    </div>
                </div>
                <!--tercera imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1592588253470-9eb67341e66e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="fuerza" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Fuerza</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="monitores.html" class="btn-card"> Ver más </a>
                    </div>
                </div>
                <!--cuarta imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1591804671002-b24e17464f9b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="cardio" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Cardio</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="monitores.html" class="btn-card"> Ver más </a>
                    </div>
                </div>
                <!--quinta imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1584380931214-dbb5b72e7fd0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=449&q=80" alt="funcional" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Funcional</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="monitores.html" class="btn-card"> Ver más </a>
                    </div>
                </div>
                <!--sexta imagen-->
                <div class="galeria__card group">
                    <div class="galeria__card-content">
                        <img class="galeria__card-img" src="https://images.unsplash.com/photo-1619107372089-9b05ed524774?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1175&q=80" alt="Dance" />
                    </div>
                    <div class="galeria__card__backdrop"></div>
                    <div class="galeria__card__text-content">
                        <h1 class="galeria__card__text-titulo">Dance</h1>
                        <p class="galeria__card__text-descripcion">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Repellat ad odio quibusdam.
                        </p>
                        <a href="monitores.html" class="btn-card"> Ver más </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<?php
get_footer();
