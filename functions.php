<?php

  add_theme_support( 'menus' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }

  add_action( 'init', register_theme_menus );

  function wpp_theme_styles() {
    wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
    wp_enqueue_style('app_css', get_template_directory_uri() . '/assets/css/app.css');
  }
  add_action( 'wp_enqueue_scripts', 'wpp_theme_styles');

  function wpp_theme_js() {
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', '', '', false);
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array('jquery'), '', false);
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', false);
  }
  add_action( 'wp_enqueue_scripts', 'wpp_theme_js');

?>
