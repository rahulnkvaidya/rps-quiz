<?php
/*
Template Name: Home Page layout
*/
?>
<?php get_header(); ?>
<div class="row">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="blog-post">
                <?php the_content(); ?>
                <?php the_post(); ?>
            </div><!-- /.blog-post -->
    <?php
        endwhile;
    }
    ?>
    <div class="col-12">
        <div class="card text-white bg-dark align-items-center">
            <h2 class="h2 text-light p-3">Latest News and Events</h2>
        </div>
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'events',
        'posts_per_page' => 5,
    );
    $arr_posts = new WP_Query($args);

    if ($arr_posts->have_posts()) :

        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <header class="entry-header">
                    <h2 class="h3 entry-title text-white bg-primary mt-2 text-center"><?php the_title(); ?></h1>
                </header>
                <div class="text-white bg-primary p-3 text-justify">
                    <?php the_content(); ?>
                </div>
            </article>
    <?php
        endwhile;
    endif;
    ?>
    </div>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("home page content")) : ?>
    <?php endif; ?>


</div><!-- /.blog-main -->
<?php get_footer(); ?>