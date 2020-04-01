<?php
/**
 * name:      User meta file
 * @package:  wordpress-shakti-theme
 */

function user_profile_extra_fields(){
  $prefix = 'ex_';

  $cmb = new_cmb2_box(array(
      'id' => 'metabox',
      'title' => __('Custom User Fields', 'cmb2'),
      'object_types' => array( 'user' ),
      'show_names' => true
  ));

  // Gender
  $cmb->add_field(array(
    'name' => __('Gender', 'cmb2'),
    'desc' => __('Select the gender', 'cmb2'),
    'id' => $prefix . 'gender',
    'type' => 'radio',
    'options' => array(
    'male' => __('Male', 'cmb2'),
    'female' => __('Female', 'cmb2')
    )
  ));

  // Date Of Birth
  $cmb->add_field( array(
    'name' => 'Date of Birth',
    'desc' => __('Select Date of Birth', 'cmb2'),
    'id'   => $prefix . 'dob',
    'type' => 'text_date',
  ) );

  // Phone
  $cmb->add_field(array(
    'name' => __('Phone Number', 'cmb2'),
    'desc' => __('Enter Phone Number', 'cmb2'),
    'id' => $prefix . 'phone_number',
    'type' => 'text'
  ));

  // Address
  $cmb->add_field(array(
    'name' => __('Address', 'cmb2'),
    'desc' => __('Enter Address', 'cmb2'),
    'id' => $prefix . 'address',
    'type' => 'text'
  ));

  // City
  $cmb->add_field(array(
    'name' => __('City', 'cmb2'),
    'desc' => __('Enter City Name', 'cmb2'),
    'id' => $prefix . 'city',
    'type' => 'text'
  ));

  // State
  $cmb->add_field(array(
      'name' => __('State', 'cmb2'),
      'desc' => __('Enter State Name', 'cmb2'),
      'id' => $prefix . 'state',
      'type' => 'text'
  ));

  // Country
  $cmb->add_field(array(
      'name' => __('Country', 'cmb2'),
      'desc' => __('Enter Country Name', 'cmb2'),
      'id' => $prefix . 'country',
      'type' => 'text'
  ));

  // PinCode - Zip
  $cmb->add_field(array(
    'name' => __('Pin Code', 'cmb2'),
    'desc' => __('Enter Pin Code', 'cmb2'),
    'id' => $prefix . 'zip',
    'type' => 'text'
  ));
}
add_action('cmb2_admin_init', 'user_profile_extra_fields');
