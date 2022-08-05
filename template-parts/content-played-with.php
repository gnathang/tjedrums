
<!-- Set the secondary color to display on this section -->
<div class="w-100 bg-color-2">
	<section id="played-with" class="center w-80-l w-100 mt5-l mt4 pa4">

		<?php
		// Query for our played-with category
			$args = array(
				'post_type' => 'post',
				'category_name' => 'Played-With',
				'posts_per_page' => 1,
			);
			$about = new WP_Query( $args );
			
		if ( $about->have_posts() ) : while ( $about->have_posts() ) :$about->the_post();?>

		<!--  Title and content -->
		<div class="section played-with center w-100-l w-80-m w-100 tj"> 
			<div class="entry-post tc">
				<p class="entry-content"><?php the_content(); ?></p>
			</div>
		</div>
		
		<!-- Nav arrow -->
		<div class="arrow-wrapper center">
			<a class="arrow scroll flex justify-center" href="#lessons">
				<img src="<?php bloginfo('template_directory');?>/images/down-arrow-2.png" class="mt4 w2">
			</a>
		</div>

		<?php 
		endwhile;
		endif;
		?>

	</section>
</div>