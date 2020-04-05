<?php

function create_news()
{
    register_post_type(
        'news',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('news')
            ),
            'menu_position'  => 2,
            'public' => true,
            'has_archive' => true,
            'featured_image' => 'Featured Image',
            'rewrite' => array('slug' => 'news'),
            'map_meta_cap' => true,
            'show_in_nav_menus' => true,
           //  'supports' => array('title', 'content', 'thumbnail','image' )
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_news');

add_filter( 'manage_realestate_posts_columns', 'smashing_filter_posts_columns' );
function smashing_filter_posts_columns( $columns ) {
  $columns['image'] = __( 'Image' );
  $columns['price'] = __( 'Price', 'smashing' );
  $columns['area'] = __( 'Area', 'smashing' );
  return $columns;
}