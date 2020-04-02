<?php
/**
 * name:      Post meta file
 * @package:  wordpress-shakti-theme
 */

/**
 * Define the metabox and field configurations.
 */
function cmb2_postsample_metaboxes() {
  $prefix = 'au_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'author_details',
		'title'         => __( 'Author Details', 'cmb2' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
  ) );
  // Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Author Name', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'author_name',
		'type'       => 'text',
	) );

	// URL text field
	$cmb->add_field( array(
		'name' => __( 'Author Email', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'author_email',
		'type' => 'text_email',
		
	) );

	// Email text field
	$cmb->add_field( array(
		'name' => __( 'Author Website', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
    'id'   => $prefix . 'author_website',
		'type' => 'text_url',
	) );

	// Add other metaboxes as needed

}
  
  add_action( 'cmb2_admin_init', 'cmb2_postsample_metaboxes' );