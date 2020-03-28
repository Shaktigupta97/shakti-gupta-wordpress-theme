<?php
/**
 * name:      main footer file
 * @package:  wordpress-shakti-theme
 */

function load_scripts(){

  $path = get_template_directory_uri();

  //css
  wp_enqueue_style('bootstrap-css', $path.'/assets/vendor/bootstrap/scss/bootstrap.min.css', false, '1.0');
  wp_enqueue_style('main-css', $path.'/assets/css/main.min.css', false, '1.0');

  // js files after body
  wp_enqueue_script('jQuery-js', $path.'/assets/vendor/jquery/jquery-3.4.1.min.js', array(), '1.0', true);
  wp_enqueue_script('bootstrap-js', $path.'/assets/vendor/bootstrap/js/bootstrap.min.js', array(), '1.0', true);
  wp_enqueue_script('theme-main-js', $path.'/assets/js/main.js', array(), '1.0', true);

 }
 add_action('wp_enqueue_scripts', 'load_scripts');


