<?php
/**
 * name:      main header file
 * @package:  wordpress-shakti-theme
 */ ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- <?php
  $sep = ' | ';
  $name = get_bloginfo( 'name' );

  if( is_home() || is_front_page() )
    $title = $name . $sep . get_bloginfo( 'description' );

  if( is_single() || is_page() )
    $title = wp_title( $sep, false, 'right' ) . $name;

?> -->

<title><?php echo get_the_title(); ?></title>

  <!-- WordPress Default Head -->
  <?php wp_head(); ?>
</head>
<body>
