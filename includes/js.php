<?php
function bootstrapstarter_enqueue_scripts() {

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
