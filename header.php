<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <script type="text/javascript">
    // $(document).ready(function(){
    //   $('.btn-close').fadeOut(200);
    //   var open = false;
    //   $('.button a').on('click',function(){
    //     if(open == false){
    //       $('.overlay, .btn-close').fadeIn(200);
    //       $('nav ul li, .btn-open, .array').fadeOut(200);
    //       open = true;
    //     } else {
    //       $('.overlay, .btn-close').fadeOut(200)
    //       $('nav ul li, .btn-open, .array').fadeIn(200);
    //       open = false;
    //     }
    //   });
    //   $('.overlay').on('mouseup', function(){
    //     $('.overlay, .btn-close').fadeOut(200);
    //     $('nav ul li, .btn-open, .array').fadeIn(200);
    //     open = false;
    //   });
    //   $('.wrap').on('mouseup', function(){
    //     return false;
    //   });
    // })
    </script>
  </head>
  <body <?php body_class(); ?> >
    <header class="row no-max pad main">
      <nav>
        <header>
          <nav>
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no-bullet'
              );
              wp_nav_menu('defaults');
            ?>
          </nav>
          <div class="button">
            <a href="#">
              <?php include("src/img/array.svg"); ?>
              <?php include("src/img/menu.svg"); ?>
              <?php include("src/img/close.svg"); ?>
            </a>
          </div>
        </header>
        <div class="overlay">
          <div class="wrap">
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' => 'primary-menu',
                'menu_class' => 'no-bullet'
              );
              wp_nav_menu('defaults');
            ?>
            <div class="social">
              <!-- Social -->
            </div>
          </div>
        </div>
      </nav>
    </header>
