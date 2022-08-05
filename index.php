<?php
get_header();
?>

<main id="primary" class="site-main">

	<?php 
	get_template_part('template-parts/content-hero'); 
	get_template_part('template-parts/content-about');
	get_template_part('template-parts/content-played-with');
	get_template_part('template-parts/content-lessons');
	get_template_part('template-parts/content-qualifications');
	get_template_part('template-parts/content-contact');
	?>

</main><!-- #main -->

	<?php
get_footer();
