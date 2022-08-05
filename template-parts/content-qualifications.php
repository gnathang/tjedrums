<!-- Set the secondary background colour to display on this section -->
<div class="w-100 bg-color-2">

  <section id="qualifications" class="center pv4 vh-100 w-80-l w-100 center">

  <?php
    // Query for our qualifications post
    $args = array(
      'post_type' => 'post',
      'category_name' => 'qualifications',
      'posts_per_page' => 1,
      'orderby' => 'title',
      'order' => 'DESC'
    );
    $about = new WP_Query( $args );
    
    if ( $about->have_posts() ) : while ( $about->have_posts() ) :$about->the_post();?>

    <!-- Title and content -->
    <div class="qualifications f3-l f4-m f5 pa4 w-100 tc"> 
      <div class="entry-post">
        <h3 class="entry-title"><?php the_title(); ?></h3>
        <p class="entry-content"><?php the_content(); ?></p>
      </div>
    </div>

    <!-- Nav arrow -->
    <div class="arrow-wrapper center pt4">
      <a class="arrow scroll flex justify-center" href="#contact">
        <img src="<?php bloginfo('template_directory');?>/images/down-arrow-2.png" class="w2">
      </a>
    </div>

  </section>

</div>

<?php 
endwhile;
endif;
?>
