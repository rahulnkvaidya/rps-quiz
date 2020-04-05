<?php

function create_rj_profile() {
register_post_type( 'rj_profile',
// CPT Options
    array(
        'labels' => array(
            'name' => __( 'Rj Profile' ),
            'singular_name' => __( 'rj_profile' )
        ),
        'menu_position'  => 2,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'rj_profile'),
        'supports' => array('title', 'name', 'image', 'mobile', 'city', 'date_of_birth', 'sun_sign', 'hobbies', 'profile', 'facebook', 'twitter' )
    )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_rj_profile' );

function create_rj_programe() {
    register_post_type( 'rj_programe',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Rj Programe' ),
                'singular_name' => __( 'rj_programe' )
            ),
            'menu_position'  => 2,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'rj_programe'),
            'supports' => array('title', 'name', 'rj_name', 'time', 'city', 'day', 'description', 'show_theme', 'byorder' ),
            'description' => "Create RJ Programmes and Add / Edit / Delete all releted options are available here"
        )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_rj_programe' );