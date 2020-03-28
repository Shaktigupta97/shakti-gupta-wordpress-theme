<?php
/**
 * Template Name:   Home Page 
 * @package:        wordpress-shakti-theme
 */

// HTML Header Template
get_header();?>

<!-- Navigation -->
<?php get_template_part('templates/nav'); ?>

<?php// Get Dynamic Content from WordPress
if(have_posts()){
  while(have_posts()){
    the_post();

    /** THis fetches the content */
    the_content();
  }
} ?>

<?php get_template_part('templates/display-footer'); ?>
<?php// HTML Footer Template
get_footer();