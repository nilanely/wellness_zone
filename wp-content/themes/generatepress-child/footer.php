<?php

/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

</div>
</div>

<?php
/**
 * generate_before_footer hook.
 *
 * @since 0.1
 */
do_action('generate_before_footer');
?>

<footer>
	<div class="social-media">
		<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-linkedin-in"></i></a>
	</div>
	<div class="links">
		<a href="http://proyecto.test/">Inicio</a>
		<a href="http://proyecto.test/actividades/">Actividades</a>
		<a href="http://proyecto.test/contacto/">Contacto</a>
	</div>
	<div class="copyright">
		<span>© 2023 Mi Sitio Web</span>
	</div>
</footer>

<?php
/**
 * generate_after_footer hook.
 *
 * @since 2.1
 */
do_action('generate_after_footer');

wp_footer();
?>

</body>

</html>