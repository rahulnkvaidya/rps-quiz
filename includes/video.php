<?php
function create_videos() {
 
    register_post_type( 'video_youtube',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'video_youtube' )
            ),
            'menu_icon' => 'dashicons-images-alt2',
            'menu_position'       => 0,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'video_youtube'),
           'supports' => array('title','youtube_id')
        )
    );
  }
  // Hooking up our function to theme setup
  add_action( 'init', 'create_videos' );
  
?>