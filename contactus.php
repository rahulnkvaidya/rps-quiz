<?php
/*
Template Name: Contact Us layout
*/
?>
<?php get_header(); ?>
<div class="col-12 m-0 p-0">

    <section class="hero-wrap hero-wrap-2" style="background-image:url('<?php bloginfo('stylesheet_directory') ?>/assets/images/2.jpg'); ">
        <div class="col-12 align-self-center  mx-auto" style="padding-top: 75px; padding-left: 45px;">
            <h1 class="mb-2 bread text-light">Contact Us</h1>
            <span class="text-light"><i class="fa fa-angle-right" aria-hidden="true"></i> <a class="text-light" href="/">Home</a> / </span>
            <span class="text-light">Contact Us</span>
        </div>
    </section>
</div>

<div class="col-sm-12 blog-main">
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
<?php get_footer(); ?>