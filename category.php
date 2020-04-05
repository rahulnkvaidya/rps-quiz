<?php
/*
Template Name: Category layout
*/
?>
<?php get_header(); ?>
<div class="row p-3">
    <div class="col-8 p-3">
        <div class="col-12 p-3 shadow">
            <div class="row">
                <?php
                if (have_posts()) {
                    while (have_posts()) : the_post();
                ?>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-0">
                            <div class="card border-primary">
                                <div class="card-header text-white bg-primary h3">
                                    <?php the_title(); ?>
                                </div>
                                <div class="card-body">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                           
                        </div><!-- /.blog-post -->
                <?php
                    endwhile;
                }
                ?>
            </div>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("home page content")) : ?>
            <?php endif; ?>

        </div>
    </div><!-- /.blog-main -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>