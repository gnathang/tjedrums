
<!-- Putting everything inside this <section> 
ensures that the content splits into the columns -->

	<section id="about" class="block mt4-l mt3 h-100 w-80-l w-100 center">

	<?php
	// Query for our about category
		$args = array(
			'post_type' => 'post',
			'category_name' => 'about',
			'posts_per_page' => 1,
			'orderby' => 'title',
			'order' => 'DESC'
		);
		$about = new WP_Query( $args );
		
	if ( $about->have_posts() ) : while ( $about->have_posts() ) :$about->the_post();?>

<!-- Content div -->
	<div class="section about f3-l f4-m f5 pa2 w-75-l w-80 tj center"> 
		<div class="entry-post">
			<h3 class="entry-title"><?php the_title(); ?></h3>
			<p class="entry-content center"><?php the_content(); ?></p>
		</div>
	</div>

	<!-- Nav arrow div -->
	<div class="arrow-wrapper center">
		<a class="arrow scroll flex justify-center" href="#played-with">
			<img src="<?php bloginfo('template_directory');?>/images/down-arrow-2.png" class="w2">
		</a>
	</div>

</section>

<?php 
endwhile;
endif;
?>
