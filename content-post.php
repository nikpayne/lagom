<article <?php post_class('main-article clearfix'); ?> id="post-<?php the_ID(); ?>">
  <h1 id="<?php echo the_slug(); ?>">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </h1>
  <?php if(has_post_thumbnail()) : ?>
    <figure>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb'); ?></a>
    </figure>

  <?php endif; ?>

  <?php the_content(); ?>

</article>
