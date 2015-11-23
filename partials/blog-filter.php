<div class="filter__button">
  <?php
  $icon = dirname(__FILE__).'/../src/img/sort.svg';
  include( $icon );
  ?>
</div>

<ul class="filter__list">
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
  <li class="filter__item" value="<?php echo $category->cat_name; ?>">
    <a class="filter__link" href="<?php echo get_category_link($category->term_id); ?>">
     <?php echo $category->category_nicename . " (" . $category->category_count . ")"; ?>
   </a>
  </li>
 <?php } ?>
</ul>
