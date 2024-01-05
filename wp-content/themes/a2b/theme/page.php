<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/layout/header', 'plugin'); ?>

<body>

	<div class="relative z-0">
		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div
			class="flex-col justify-start items-start flex w-full">
			<?php
			echo the_content();
			?>
		</div>
		<?php get_footer() ?>

	</div>
</body>