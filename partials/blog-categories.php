<select class="home__categories" name="blog-sort">
  <?php
  $args = array(
    'type'                     => 'post',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => 1,
    'hierarchical'             => 1,
    'exclude'                  => '',
    'include'                  => '',
    'number'                   => '',
    'taxonomy'                 => 'category',
    'pad_counts'               => false
  );

  $categories = get_categories( $args );
 ?>
 <?php foreach ($categories as $category) { ?>
  <option value="<?php echo $category->cat_name; ?>">
     <?php echo $category->cat_name . " (" . $category->category_count . ")"; ?>
  </option>
 <?php } ?>
</select>

<pre>
  <?php var_dump($categories); ?>
</pre>
