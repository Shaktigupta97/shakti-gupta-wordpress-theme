<?php
/**
 * Template Name:   Home Page 
 * @package:        wordpress-shakti-theme
 */
$user_info = get_userdata(1);
$user_name = $user_info->display_name;
$user_email = $user_info->user_email;
$first_name = $user_info->first_name;
$last_name = $user_info->last_name;
 
// HTML Header Template
get_header();?>

<!-- User check function -->
<?php
if ( is_user_logged_in() ) {
  echo $user_name .", ". $last_name .",". $user_email;
} else {
    echo 'You are not logged in.';
}
?>

<!-- Navigation -->
<?php get_template_part('templates/nav'); ?>

<!-- Content Body -->
<div class="container">
  <div class="row">
    <div class="col-12 pt-5 pb-4">

      <?php // Get Dynamic Content from WordPress
      get_the_content();
      if(have_posts()){
            while(have_posts()){
                the_post();
      
                /** This fetches the content */
                $content = get_the_content();
      
                $text = get_post_meta( get_the_ID(), 'yourprefix_text', true );
           }
      } ?>

    </div>
  </div>
</div>

<table>
<tr>
<td>first name</td>
<td><?php echo $first_name; ?></td>
</tr>
<tr>
<td>last name</td>
<td><?php echo $last_name; ?></td>
</tr>
<tr>
<td>user name</td>
<td><?php echo $user_name; ?></td>
</tr>
<tr>
<td>email</td>
<td><?php echo $user_email; ?></td>
</tr>
</table>

<div>
<p><?php echo  $content; ?></p>
<p><?php echo esc_html( $text ); ?></p>
</div>

<?php get_template_part('templates/display-footer'); ?>
<?php// HTML Footer Template
get_footer();