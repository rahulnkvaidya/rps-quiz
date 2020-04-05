<?php

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  
  // // SET NEW LOGO SIZE IN CHILD 
  // if ( ! function_exists( 'shoreditch_setup' ) ) :
  // 	function shoreditch_setup() {
  // 		// Enable support for custom logo.
  // 	add_theme_support( 'custom-logo', array(
  // 		'height'      => 100,
  // 		'width'       => 400,
  // 		'flex-height' => true,
  // 	) );
  // }
  // endif;
  ?>