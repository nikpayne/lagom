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
        $('.btn-close').fadeOut(150);
        var open = false;
        $('.nav__icons svg').on('click',function(){
          console.log('clicking');
          if(open == false){
            $('.nav__overlay, .btn-close').fadeIn(150);
            $('.btn-menu, .array').fadeOut(150);
            open = true;
          } else {
            $('.nav__overlay, .btn-close').fadeOut(150)
            $('.btn-menu').fadeIn(150);
            open = false;
          }
        });

        function hideOverlay() {
          $('.nav__overlay, .btn-close').fadeOut(150);
          $('.btn-menu').fadeIn(150);
          open = false;
        }

        $('.nav__overlay').on('mouseup', function(){
          hideOverlay();
        });

        $('.nav__wrap').on('click', function(){
          hideOverlay();
        });

        $('.nav__row').on('click', function(e){
          e.preventDefault();
        });

        $('.nav__wrap').on('mouseup', function(){
          return false;
        });
      });
    }(jQuery));

    (function($) {
      $(window).scroll(function(event){
        didScroll = true;
      });
      setInterval(function() {
        if (didScroll) {
          hasScrolled();
          didScroll = false;
        }
      }, 250);

      var prevScroll = 0;

      function hasScrolled() {
        var currScroll = $(this).scrollTop();

        if (currScroll > 54 && currScroll > prevScroll + 30) {
          $('.nav__header').addClass('minimalist-mode');
        } else if(currScroll < 54 || currScroll < prevScroll - 60) {
          $('.nav__header').removeClass('minimalist-mode');
        }
        prevScroll = currScroll;
      }
    }(jQuery));
    </script>
  </head>
  <body <?php body_class(); ?> >

    <section class="nav">
      <header class="nav__header">

        <div class="nav__title">
          <a href="<?php $url = home_url(); echo $url; ?>">
            <h2 title="<?php echo get_bloginfo('description'); ?>"><?php echo get_bloginfo('name'); ?></h2>
          </a>
        </div>

        <nav class="nav__primary">
          <?php wp_nav_menu(); ?>
        </nav>

        <div class="nav__icons">
          <?php include("src/img/close.svg"); ?>
          <?php include("src/img/menu.svg"); ?>
        </div>

        <div class="nav__overlay">
          <div class="nav__wrap">
            <div class="nav__row row">
              <div class="columns small-10 medium-5 large-3 large-centered small-centered">
                <nav class="nav__secondary" style="text-align: left">
                  <?php wp_nav_menu(); ?>
                </nav>
                <div class="nav__social">
                  <!-- Social -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </header>
    </section>
