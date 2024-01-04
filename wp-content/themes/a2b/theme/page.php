<!doctype html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/layout/header', 'plugin'); ?>

<body>

	<div class="relative z-0 bg-[#F0EFEA]">
		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div
			class="flex-col justify-start items-start lg:gap-[120px] md:gap-[60px] gap-[40px] flex w-full relative z-0">
			<?php
			echo the_content();
			?>
		</div>
		<?php get_footer() ?>

	</div>
</body>