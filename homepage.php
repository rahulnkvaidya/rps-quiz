<?php
/*
Template Name: Home Page layout
*/
?>
<?php get_header(); ?>
<div class="row p-3">
<div class="col-8 p-3">
   <div class="col-12 p-3 shadow">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="blog-post m-0">
                <h1 class="jumbotron p-4">
                    <?php  the_title(); ?>
                </h1>
                <?php  the_content(); ?>
            </div><!-- /.blog-post -->
    <?php
        endwhile;
    }
    ?>

    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("home page content")) : ?>
    <?php endif; ?>

	</div>
</div><!-- /.blog-main -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>