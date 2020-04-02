<?php
/**
 * Template Name:   Home Page 
 * @package:        wordpress-shakti-theme
 */
$user_info = get_userdata(1);
$author_name = $user_info->display_name;
$author_email = $user_info->user_email;
$author_website = $user_info->user_url;
 
// HTML Header Template
get_header();?>
<title><?php echo get_the_title(); ?></title>

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
                $content = get_the_content();
                $author = get_post_meta( get_the_ID(), $prefix."author_name", true );
           }
      } ?>
    </div>
  </div>
</div>
<p><?php echo  $content; ?></p>
<table>
<tr>
<td>Name</td>
<td><?php echo $author_name; ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $author_email; ?></td>
</tr>
<tr>
<td>Website</td>
<td><?php echo $author_website; ?></td>
</tr>
</table>

<div>

<p><?php var_dump($text); ?></p>
</div>

<?php get_template_part('templates/display-footer'); ?>
<?php// HTML Footer Template
get_footer();