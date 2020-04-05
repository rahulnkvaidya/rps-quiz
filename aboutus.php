<?php
/*
Template Name: AboutUs layout
*/
?>
<?php get_header(); ?>
<div class="col-12 m-0 p-0">
<?php echo "about page layout"; ?>
    <section class="hero-wrap hero-wrap-2" style="background-image:url('<?php bloginfo('stylesheet_directory') ?>/assets/images/IMG_20190627.jpg'); ">
        <div class="col-12 align-self-center  mx-auto" style="padding-top: 75px; padding-left: 45px;">
            <h1 class="mb-2 bread text-light">About Us</h1>
            <span class="text-light"><i class="fa fa-angle-right" aria-hidden="true"></i> <a class="text-light" href="/">Home</a> / </span>
            <span class="text-light">About Us</span>
        </div>
    </section>
</div>
<div class="row">
    <div class="col-sm-8 blog-main">
        <?php
        if (have_posts()) {
            while (have_posts()) : the_post();
        ?>
                <div class="col-12 shadow  m-2 mt-3 p-4 text-justify">
                    <?php the_content(); ?>
                    <hr>
                </div><!-- /.blog-post -->
        <?php
            endwhile;
        }
        ?>

    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>