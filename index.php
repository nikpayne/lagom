<?php ini_set('display_errors', 1); ?>

<?php @get_header(); ?>

<main class="row home__row">
  <div class="columns medium-8 medium-centered">

    <?php get_template_part('partials/blog', 'filter'); ?>

    <!-- <?php get_template_part('partials/blog', 'select'); ?> -->

    <?php get_template_part('partials/loading', 'widget'); ?>

    <div id="main__content">

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content'); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>

    </div>

  </div>
</main>

<?php get_footer(); ?>
