<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <style media="screen">
    .hero {
      position: relative;
      width: 100%;
      padding-top: 56.25%;
    }
    .hero span {
      display: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }
    </style>
    <script type="text/javascript">
      window.onload = function() {
        document.queryselector('.hero').classList.add('loaded');
      };
    </script>
    <div class="hero">
      <span></span>
      <h1><?php the_title(); ?></h1>
    </div>
    <main>
      <article>
        <h1>Article</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut enim lorem. Aenean consectetur magna quam, ac pharetra velit molestie vitae. Donec eros nisi, condimentum in nunc eget, rutrum faucibus orci. Aenean lacinia augue vel blandit ultricies. Quisque aliquet dui egestas consectetur aliquet. Etiam semper interdum sodales. Donec vehicula arcu rutrum nisi malesuada tincidunt convallis vitae magna. Nam in tortor commodo, molestie ligula vitae, volutpat justo.</p>
        <p>Phasellus velit lectus, sagittis vitae nunc sit amet, elementum convallis nibh. Donec urna purus, faucibus a turpis a, blandit eleifend sem. Vivamus blandit, felis eu sodales cursus, elit mauris iaculis enim, quis volutpat purus massa in sapien. Fusce a enim felis. Aliquam in nulla leo. Aliquam at lacinia lectus. Nunc imperdiet dui in tortor tincidunt rutrum. Etiam porttitor metus convallis, ornare nisl a, interdum nisl. Integer lacinia quis enim nec ultrices. Mauris eget ante magna. Vestibulum volutpat adipiscing lorem et dignissim. Suspendisse sed semper ligula. Donec consequat auctor luctus. Quisque sodales, ipsum id facilisis cursus, lectus purus tincidunt massa, eu mollis odio odio ac dui. Suspendisse potenti.</p>
        <p>Nam vitae ante in augue ultrices volutpat in non turpis. Ut mattis tellus vitae condimentum sagittis. Aenean porta nisi nulla, et sagittis odio consectetur vestibulum. Proin convallis felis ut nunc aliquam auctor. Praesent aliquet ut dui fermentum viverra. Curabitur tincidunt diam tellus, aliquet porttitor nisl accumsan ut. Fusce tincidunt lorem sit amet arcu porta consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse potenti. Maecenas aliquet neque a risus euismod faucibus. Aenean sit amet velit bibendum, iaculis orci in, interdum sem.
        </p>
        <p>Phasellus sed tortor eget odio eleifend congue non eu felis. Praesent cursus vehicula bibendum. Sed lacinia eget erat a mattis. Nulla et nisl nulla. Phasellus ac nisl augue. Sed erat quam, iaculis consectetur ante quis, imperdiet fermentum magna. Vivamus porttitor quis mi ac volutpat. Etiam libero nibh, varius id luctus sit amet, facilisis convallis erat. Nulla facilisi.</p>
        <?php the_content(); ?>
      </article>
    </main>

  <?php endwhile; ?>

<?php else : ?>

<?php get_footer(); ?>
