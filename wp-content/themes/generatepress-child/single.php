<?php

/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<div class="contenido-single">
	<?php
	global $post;
	setup_postdata($post);
	?>
	<div class="single-titulo">
		<h2><?php echo get_the_title(); ?></h2>
		<div class="imagen-single">
			<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" alt="">
		</div>
	</div>
	<div class="p-contenido">
		<?php the_content(); ?>
	</div>
	<?php
	wp_reset_postdata();
	?>
	<div class="actividades-shortcode"><?php echo do_shortcode(' [actividad id="61"] ') ?></div>



	<!--tarifas-->

	<div class="bg-white">
		<div class="container px-6 py-8 mx-auto mb-20">
			<h1 class="text-2xl font-extrabold text-center uppercase text-gray-800 lg:text-3xl">
				Suscripción
			</h1>

			<p class="max-w-2xl mx-auto mt-4 text-center text-gray-500 xl:mt-6">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias quas
				magni libero consequuntur voluptatum velit amet id repudiandae ea,
				deleniti laborum in neque eveniet.
			</p>

			<div class="grid grid-cols-1 gap-8 mt-6 xl:mt-12 xl:gap-12 md:grid-cols-2 lg:grid-cols-3">
				<div class="w-full p-8 space-y-8 text-center border border-gray-200 rounded-lg">
					<p class="font-medium text-gray-500 uppercase">Clase de prueba</p>

					<h2 class="text-4xl font-semibold text-gray-800 uppercase">€7</h2>

					<p class="font-medium text-gray-500">Detalle</p>
					<a href="#">
						<button class="w-full px-4 py-2 mt-10 tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-md hover:bg-yellow-400 hover:text-black focus:outline-none focus:bg-gray-700 focus:ring focus:ring-gray-200 focus:ring-opacity-80">
							Inscribirse
						</button></a>
				</div>

				<div class="w-full p-8 space-y-8 text-center bg-yellow-400 rounded-lg">
					<p class="font-medium text-gray-900 uppercase">Mensual</p>

					<h2 class="text-5xl font-bold text-gray-800 uppercase">€40</h2>

					<p class="font-medium text-gray-900">Detalle</p>
					<a href="#">
						<button class="w-full px-4 py-2 mt-10 tracking-wide text-black capitalize transition-colors duration-300 transform bg-white rounded-md hover:bg-black hover:text-white focus:outline-none focus:bg-gray-100 focus:ring focus:ring-gray-200 focus:ring-opacity-80">
							Inscribirse
						</button></a>
				</div>

				<div class="w-full p-8 space-y-8 text-center border border-gray-200 rounded-lg">
					<p class="font-medium text-gray-500 uppercase">Anual</p>

					<h2 class="text-4xl font-semibold text-gray-800 uppercase">€100</h2>

					<p class="font-medium text-gray-500">Detalle</p>
					<a href="">
						<button class="w-full px-4 py-2 mt-10 tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-md hover:bg-yellow-400 hover:text-black focus:outline-none focus:bg-gray-700 focus:ring focus:ring-gray-200 focus:ring-opacity-80">
							Inscribirse
						</button></a>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
get_footer();
