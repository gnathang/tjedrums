
<?php
// Query for our hero category
  $args = array(
    'post_type' => 'post',
    'category_name' => 'hero',
    'posts_per_page' => 1,
  );
  $hero = new WP_Query( $args );
  
if ( $hero->have_posts() ) : while ( $hero->have_posts() ) :$hero->the_post();?>
        
  <section class="hero pv6-l pv4">
    <div class="hero-text ttu ph5-l pv6-l pa4">
      <h1 class="anton f1"> <?php the_title(); ?> </h1>
      <h2 class="anton f2"> <?php the_content(); ?> </h2>
    </div>
  </section>

<?php
endwhile;
endif;
?>
