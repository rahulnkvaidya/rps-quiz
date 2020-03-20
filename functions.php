<?php
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}
add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', get_template_directory_uri() .'/font-awesome-4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );
register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu',       'My_First_WordPress_Theme'),
    'footer' => __('Footer Menu', 'My_First_WordPress_Theme')
));


// SET NEW LOGO SIZE IN CHILD 
if ( ! function_exists( 'shoreditch_setup' ) ) :
	function shoreditch_setup() {
		// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
	) );
}
endif;

   if ( function_exists('register_sidebar') )
   register_sidebar(array(
     'name' => 'footer 1',
     'before_widget' => '<div class = "widgetizedArea">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="text-light">',
     'after_title' => '</h3>',
   )
 );
 if ( function_exists('register_sidebar') )
 register_sidebar(array(
   'name' => 'footer 2',
   'before_widget' => '<div class = "widgetizedArea">',
   'after_widget' => '</div>',
   'before_title' => '<h3 class="text-light">',
   'after_title' => '</h3>',
 )
);
if ( function_exists('register_sidebar') )
register_sidebar(array(
  'name' => 'footer 3',
  'before_widget' => '<div class = "widgetizedArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="text-light">',
  'after_title' => '</h3>',
)
);
if ( function_exists('register_sidebar') )
register_sidebar(array(
  'name' => 'sidebar right',
  'before_widget' => '<div class = "widgetizedArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="text-light">',
  'after_title' => '</h3>',
)
);
if ( function_exists('register_sidebar') )
register_sidebar(array(
  'name' => 'header top',
  'before_widget' => '<div class = "widgetizedArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="text-light">',
  'after_title' => '</h3>',
)
);
if ( function_exists('register_sidebar') )
register_sidebar(array(
  'name' => 'home page content',
  'before_widget' => '<div class = "widgetizedArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="text-light">',
  'after_title' => '</h3>',
)
);
/////////////////////// assets url
$theme_name_images = get_bloginfo('stylesheet_directory') . '/images'; 
?>