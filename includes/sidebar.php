<?php
/// sidebar

function rps_sidebar_right_widgets() {
    register_sidebar([
        'name' => __( 'Sidebar Right', 'RPSRadio' ),
        'id' => 'rps_sidebar_right',
        'before_widget' => '<div class = "widgetizedArea">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="bg-dark text-light h4 p-2">',
        'after_title' => '</h3>',
    ]);
}

function rps_footer_1_widgets() {
    register_sidebar(
[
    'name' => __( 'Footer 1', 'RPSRadio' ),
            'id' => 'rps_footer_1',
            'description' => __('footer 1'),
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>',
]);
}

function rps_footer_2_widgets() {
    register_sidebar(
[
            'name' =>  __( 'Footer 2', 'RPSRadio' ),
            'id' => 'rps_footer_2',
            'description' => __('footer 2'),
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>',
]);
}

function rps_footer_3_widgets() {
    register_sidebar(
[
            'name' =>  __( 'Footer 3', 'RPSRadio' ),
            'id' => 'rps_footer_3',
            'description' => __('footer 3'),
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>',
]);
}

function rps_header_top_widgets() {
    register_sidebar(
[
            'name' =>  __( 'header top', 'RPSRadio' ),
            'id' => 'rps_header_top',
            'description' => __('header top'),
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>',
]);
}
function rps_home_page_content() {
    register_sidebar(
[
            'name' =>  __( 'home page content', 'RPSRadio' ),
            'id' => 'rps_home_page_content',
            'description' => __('home page content'),
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>',
]);
}
     
?>