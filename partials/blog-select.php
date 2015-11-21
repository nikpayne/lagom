<select class="select__list">
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
  <option class="select__item" value="category/<?php echo $category->category_nicename; ?>">
     <?php echo $category->category_nicename . " (" . $category->category_count . ")"; ?>
  </option>
 <?php } ?>
</select>
