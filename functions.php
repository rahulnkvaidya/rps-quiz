<?php

// Includes


include( get_theme_file_path( '/includes/css.php'));
include( get_theme_file_path(  '/includes/menu.php'));
// include( get_theme_file_path( '/includes/bestoforange.php'));
// include( get_theme_file_path( '/includes/city.php'));
include( get_theme_file_path( '/includes/sidebar.php'));
include( get_theme_file_path( '/includes/video.php'));
include( get_theme_file_path( '/includes/logo.php'));
// include( get_theme_file_path( '/includes/rj.php'));
include( get_theme_file_path( '/includes/news.php'));
include( get_theme_file_path( '/includes/js.php'));
include( get_theme_file_path( '/includes/theme-customizer.php'));
include( get_theme_file_path( '/includes/customizer/social.php'));

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/////////////////////// assets url
$theme_name_images = get_bloginfo('stylesheet_directory') . '/images';


// Hooks

add_action( 'widgets_init', 'rps_sidebar_right_widgets' );
add_action( 'widgets_init', 'rps_footer_1_widgets' );
add_action( 'widgets_init', 'rps_footer_2_widgets' );
add_action( 'widgets_init', 'rps_footer_3_widgets' );
add_action( 'widgets_init', 'rps_header_top_widgets' );
add_action( 'widgets_init', 'rps_home_page_content' );

add_action('customize_register', 'rps_customizer_register');

////////////// Read more category
function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<a  class="btn btn-info" role="button" href="'. get_permalink($post->ID) . '">Start Quiz</a>.';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );