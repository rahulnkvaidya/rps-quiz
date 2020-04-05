<?php
/*
Template Name: Contact Us layout
*/
?>
<?php get_header(); ?>
<div class="container-flud pt-3 bg-dark">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.601802932471!2d79.0819394142463!3d21.08856049111159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf1700cde20f%3A0x66184d3db37e2837!2sRadio%20Orange!5e0!3m2!1sen!2sin!4v1584779547725!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="false" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="row" style="background:black;">
    <div class="container clear-padding bg-light">
        <div class="col-md-12">
            <h3 style="background:#F60; color:#fff; line-height:1.5em; text-indent:15px;">Locations</h3>
            <div class="row">
                <div class="col-md-4  pt-4">
                    <i class="fa fa-map-marker text-warning"></i>
                    <strong>Corporate Office Nagpur</strong><br>
                    <br>
                    <span class="text-warning"><strong>Phone :</strong></span> 0712 - 6688929<br>
                    <!--<span class="text-warning"><strong>Email :</strong></span><br>
                    <span class="text-warning"><strong>Fax :</strong></span><br>-->
                </div>


                <?php
                $args = array(
                    'post_type' => 'city',
                    'post_status' => 'publish',
                    'posts_per_page' => 20,
                );
                $arr_posts = new WP_Query($args);

                if ($arr_posts->have_posts()) :

                    while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                ?>

                        <div class="col-md-4 pt-4">
                            <i class="fa fa-map-marker text-warning"></i>
                            <strong> Radio Orange <?php the_field('city') ?></strong><br>
                            <?php the_field('address') ?><br>
                            <span class="text-warning"><strong>Phone :</strong></span> <?php the_field('phone') ?><br>
                            <?php if (!empty(get_field('email'))) {
                            ?>
                                <span class="text-warning"><strong>Email :</strong></span> <?php the_field('email') ?><br>
                            <?php
                            }
                            ?>
                            <?php if (!empty(get_field('fax'))) {
                            ?>
                                <span class="text-warning"><strong>Fax :</strong></span> <?php the_field('fax') ?><br>
                            <?php
                            }
                            ?>

                        </div>


                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>

        <div class="col-md-12 contact-form mt-4">
            <h3 style="background:#F60; color:#fff; line-height:1.5em; text-indent:15px;">Drop Us a Message</h3>
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
    </div>
</div>
<?php get_footer(); ?>