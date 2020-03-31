<?php
/**
 * Template Name:   Home Page 
 * @package:        wordpress-shakti-theme
 */

// HTML Header Template
get_header();?>

<!-- Navigation -->
<?php get_template_part('templates/nav'); ?>

<!-- Content Body -->
<div class="container">
  <div class="row">
    <div class="col-12 pt-5 pb-4">

      <?php // Get Dynamic Content from WordPress
      if(have_posts()){
        while(have_posts()){
          the_post();

          /** This fetches the content */
          the_content();
        }
      } ?>

    </div>
  </div>
</div>

<?php get_template_part('templates/display-footer'); ?>
<?php// HTML Footer Template
get_footer();