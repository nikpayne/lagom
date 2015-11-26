<article <?php post_class('article__main clearfix'); ?> id='post-<?php the_ID(); ?>'>

  <?php
  $hero = wp_get_attachment_url( get_post_thumbnail_id(), 'medium');
  ?>
  <header class="article__header">
    <span style="position: absolute: left: 0; bottom: 0rem;">Hello</span>
    <h1 id="" class="article__title">
      <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
    </h1>
  </header>
  <figure class="article__hero">
    <a class="article__link" href="<?php the_permalink(); ?>">
      <div class="article__hero-inner" style="background-image: url('<?php echo $hero; ?>');">
      </div>
    </a>
  </figure>
  <section class="article__tags">
    <?php
    $tags = get_the_tags();
    if ($tags) {
      foreach($tags as $tag) {
        echo $tag->name . ' ';
      }
    }
    ?>
  </section>
  <section class="article__categories">
    <?php
    $categories = get_the_category();
    if ($categories) {
      foreach($categories as $category) {
        $link = "<a href='" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        $link .= "/category/" . $category->name ."/' rel='category tag'>";
        $link .= $category->name . "</a>";
        echo $link;
      }
    }
    ?>
  </section>
  <section class="article__excerpt">
    <?php the_excerpt(); ?>
  </section>

</article>

<hr>
