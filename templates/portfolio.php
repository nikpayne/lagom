<?php
/*
  Template Name: Portfolio
*/

 ?>

<?php get_header(); ?>


<section class="row">
  <div class="small-12 medium-5 columns text-center">
    <h2>Sidebar!</h2>
  </div>
  <div class="small-12 medium-7 columns text-center">
    <div class="leader">

      <?php if( have_posts()) : while( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <h1>BAZINGA!</h1>
      <p><?php the_content(); ?></p>

      <?php endwhile; else : ?>

      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

      <?php endif; ?>

    </div>
  </div>
</section>



<?php get_footer(); ?>
