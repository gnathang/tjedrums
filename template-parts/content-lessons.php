<!-- here we use wp_qeuey to query for our lessons category name. -->

<?php

  $args = array(
    'post_type' => 'post',
    'category_name' => 'lessons',
    'posts_per_page' => 1,
  );

  $lessons = new WP_Query( $args );
  
if ( $lessons->have_posts() ) : while ( $lessons->have_posts() ) :$lessons->the_post();?>

<section id="lessons" class="section lessons w-80-l w-100 center tc flex flex-wrap f3-l f4-m f5 items-center pt2-l mt5-l mt3 pb4"> 

 	<!-- Inside this section we want two divs, 
	each 50% width, next to each other (big viewports) -->

	<!-- Image on left -->
	<div class="entry-image w-50-ns w-70 center pt3-l pt2">
		<div class="w-80 center">
			<?php tjedrums_post_thumbnail (); ?>
		</div>
	</div>

	<!-- Title and content on right-->
	<div class="entry-post lessons-text center tc w-50-l w-70-m w-100 pv2 ph4 mt4-l mt0">
		<h3 class="entry-title"><?php the_title(); ?></h3>
		<p class="entry-content"> <?php the_content(); ?></p>
	</div>

	<!-- Nav arrow at bottom -->
	<div class="arrow-wrapper center w-100">
			<a class="arrow scroll flex justify-center" href="#qualifications">
				<img src="<?php bloginfo('template_directory');?>/images/down-arrow-2.png" class="mt5 w2">
			</a>
	</div>

</section>



<?php 
endwhile;
endif;
?>