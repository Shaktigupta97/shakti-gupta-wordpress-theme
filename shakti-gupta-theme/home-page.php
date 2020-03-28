<?php
/**
 * Template Name:   Home Page 
 * @package:        wordpress-shakti-theme
 */

// HTML Header Template
get_header();

// Get Dynamic Content from WordPress
if(have_posts()){
  while(have_posts()){
    the_post();

    /** THis fetches the content */
    the_content();
  }
}

// HTML Footer Template
get_footer();