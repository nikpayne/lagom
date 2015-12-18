<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >

    <section class="nav">
      <header class="nav__header">

        <div class="nav__title">
          <!-- <a href="<?php $url = home_url(); echo $url; ?>">
            <h2 title="<?php echo get_bloginfo('description'); ?>"><?php echo get_bloginfo('name'); ?></h2>
          </a> -->
          <div class="nav__logo">
            <?php include("src/img/logo2.svg"); ?>
          </div>
        </div>

        <nav class="nav__primary">
          <?php wp_nav_menu(); ?>
        </nav>

        <div class="nav__icons">
          <?php include("src/img/close3.svg"); ?>
          <?php include("src/img/menu5.svg"); ?>
        </div>

        <div class="nav__overlay">
          <div class="nav__wrap">
            <div class="nav__row row">
              <div class="columns small-10 medium-4 large-4">
                <nav class="nav__secondary" style="text-align: left">
                  <?php wp_nav_menu(); ?>
                </nav>
              </div>
              <div class="columns small-10 medium-4 large-4">
                <section class="nav__widgets">
                  <?php if ( is_active_sidebar( 'overlay_nav' ) ) : ?>
                    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                      <?php dynamic_sidebar( 'overlay_nav' ); ?>
                    </div><!-- #primary-sidebar -->
                  <?php endif; ?>
                </section>
              </div>
              <div class="nav__social">
                <!-- Social -->
              </div>
            </div>
          </div>
        </div>

      </header>
    </section>
