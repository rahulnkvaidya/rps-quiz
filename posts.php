<?php
/*
Template Name: post layout
*/
?>
<?php get_header(); ?>
<div class="col-sm-8 blog-main">
<?php echo 'posts layout'; ?>
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="col-12">
                <h1 class="jumbotron p-4 mt-3">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            </div><!-- /.blog-post -->
    <?php
        endwhile;
    }
    ?>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><?php next_posts_link('Previous'); ?></li>
            <li class="page-item"><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>


</div><!-- /.blog-main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
