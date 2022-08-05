
<?php
// Query for our contact catgeory
  $args = array(
    'post_type' => 'post',
    'category_name' => 'contact',
    'posts_per_page' => 1,
  );
  $contact = new WP_Query( $args );
  
if ( $contact->have_posts() ) : while ( $contact->have_posts() ) :$contact->the_post();?>

<section id="contact" class="section contact flex flex-wrap f3-l f4-m f5 items-center pt5-ns pt3 tc w-80-l w-100 center"> 
	<!-- Inside here want two more divs, 
		each 50% width, next to each other (on big viewports) -->

	<!-- Title and content -->
	<div class="entry-post w-50-l w-100">
			<h3 class="entry-title">
				<?php the_title(); ?>	
			</h3>
			<p class="entry-content">
				<?php the_content(); ?>
			</p>
	</div>

	<!-- Featured Image -->
	<div class="entry-image w-50-l mt3-ns mt4 w-80 center">
		<div class="w-80 center">
			<?php tjedrums_post_thumbnail ();?>
		</div>
	</div><!-- .entry-image -->

</section>

<?php 
endwhile;
endif;
?>