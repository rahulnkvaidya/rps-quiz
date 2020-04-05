<?php
function bootstrapstarter_enqueue_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css');
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');


function tthq_add_custom_fa_css()
{
    wp_enqueue_style('custom-fa', get_template_directory_uri() . '/font-awesome-4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'tthq_add_custom_fa_css');

?>