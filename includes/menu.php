<?php

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu', 'My_First_WordPress_Theme'),
    'footer' => __('Footer Menu', 'My_First_WordPress_Theme')
));

?>