<?php
function create_city() {
 
    register_post_type( 'city',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'city' ),
                'singular_name' => __( 'city' )
            ),
            'menu_position'       => 1,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'city'),
            'supports' => array('title','address', 'phone', 'email', 'fax')
        )
    );
  }
  // Hooking up our function to theme setup
  add_action( 'init', 'create_city' );
