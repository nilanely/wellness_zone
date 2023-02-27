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

<div>
	<main>
		<?php
		/**
		 * generate_before_main_content hook.
		 *
		 * @since 0.1
		 */
		do_action('generate_before_main_content');

		if (generate_has_default_loop()) {
			while (have_posts()) :

				the_post();

				$template = "single";
				if (apply_filters('generate_do_template_part', true, $template)) {
					if ('archive' === $template || 'index' === $template) {
						get_template_part('content', get_post_format());
					} elseif ('none' === $template) {
						get_template_part('no-results');
					} else {
						get_template_part('content', $template);
					}
				}


			endwhile;
		}

		/**
		 * generate_after_main_content hook.
		 *
		 * @since 0.1
		 */
		//do_action('generate_after_main_content');
		?>
	</main>
</div>

<?php




get_footer();
