<?php
/*
Template Name: Programme layout
*/
?>
<?php get_header(); ?>
<div class="col-sm-12 blog-main">

    <section class="hero-wrap hero-wrap-2" style="background-image:url('<?php bloginfo('stylesheet_directory') ?>/assets/images/bg_6.jpg'); ">
        <div class="col-12 align-self-center  mx-auto" style="padding-top: 75px; padding-left: 45px;">
            <h1 class="mb-2 bread text-light">Programmes</h1>
            <span class="text-light"><a class="text-light" href="/">Home</a> / </span>
            <span class="text-light">Programmes</span>
        </div>
    </section>
    <div class="col-12 p-4">
        <p>Each day for is thoroughly planned and carefully designed in order to cater for your child’s stage of development in each phase that is Pre-Nursery, Nursery, Lower Kg and Upper Kg .Each day brings new excitements and surprises to look forward to and fill their mind with sweet school memories</p>
    </div>
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="col-12 border border-gray">
                <?php the_content(); ?>
                <hr>
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
<?php get_footer(); ?>