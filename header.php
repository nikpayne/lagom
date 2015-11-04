<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <script type="text/javascript">
    (function($) {
      $(document).ready(function(){
        $('.btn-close').fadeOut(200);
        var open = false;
        $('.nav__icons a').on('click',function(){
          console.log('clicking');
          if(open == false){
            $('.nav__overlay, .btn-close').fadeIn(200);
            $('.btn-menu, .array').fadeOut(200);
            open = true;
          } else {
            $('.nav__overlay, .btn-close').fadeOut(200)
            $('.btn-menu').fadeIn(200);
            open = false;
          }
        });
        $('.nav__overlay').on('mouseup', function(){
          $('.nav__overlay, .btn-close').fadeOut(200);
          $('.btn-menu').fadeIn(200);
          open = false;
        });
        $('.nav__wrap').on('mouseup', function(){
          return false;
        });
      })
    }(jQuery));
    </script>
  </head>
  <body <?php body_class(); ?> >

    <section class="nav">
      <header class="nav__header">

        <div class="nav__title">
        </div>

        <div class="nav__icons">
          <a href="#">
            <?php include("src/img/sort.svg"); ?>
            <?php include("src/img/close.svg"); ?>
            <?php include("src/img/menu.svg"); ?>
          </a>
        </div>

        <div class="nav__overlay">
          <div class="nav__wrap">
            <nav class="nav__primary">
              <?php wp_nav_menu(); ?>
            </nav>
            <div class="nav__social">
              <!-- Social -->
            </div>
          </div>
        </div>

      </header>
    </section>
