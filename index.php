<?php ini_set('display_errors', 1); ?>

<?php @get_header(); ?>

<div class="row">
  <div class="columns medium-8 medium-centered">

    <?php get_template_part('partials/blog', 'filter'); ?>

    <!-- <?php get_template_part('partials/blog', 'select'); ?> -->

    <?php get_template_part('partials/loading', 'widget'); ?>

    <main id="main__content">

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part('content'); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>

    </main>

  </div>
</div>

<?php get_footer(); ?>
