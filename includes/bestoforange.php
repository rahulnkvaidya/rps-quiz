<?php 
function create_best_of_orange() {
 
 register_post_type( 'best_of_orange',
 // CPT Options
     array(
         'labels' => array(
             'name' => __( 'Best Of Orange' ),
             'singular_name' => __( 'best_of_orange' )
         ),
         'menu_position'  => 1,
         'public' => true,
         'has_archive' => true,
         'rewrite' => array('slug' => 'best_of_orange'),
         'supports' => array('title','category_bo', 'code')
     )
 );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_best_of_orange' );

?>