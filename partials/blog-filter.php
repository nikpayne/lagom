<div class="" style="height: 1.55rem; text-align: center;">
  <?php
  $mydir = dirname(__FILE__).'/../src/img/sort.svg';
  include_once( $mydir ); ?>
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
  <li class="filter__item filter__controller">
    <a class="">
      select your category
    </a>
  </li>
 <?php foreach ($categories as $category) { ?>
  <li class="filter__item" value="<?php echo $category->cat_name; ?>">
    <a class="filter__link" href="<?php echo get_category_link($category->term_id); ?>">
     <?php echo $category->category_nicename . " (" . $category->category_count . ")"; ?>
   </a>
  </li>
 <?php } ?>
</ul>
