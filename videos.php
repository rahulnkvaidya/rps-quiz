<?php
/*
Template Name: videos layout
*/
?>
<?php get_header(); ?>

<div class="col-sm-12 pt-3 blog-main shadow"  style="background-image:url('<?php bloginfo('stylesheet_directory') ?>/images/bg-small.jpg'); background-repeat: round; ">
    <?php
    $args = array(
        'post_type' => 'video_youtube',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );
    $arr_posts = new WP_Query($args);
    if ($arr_posts->have_posts()) :
        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
            $last_youtube = get_field('youtube_id');
            $permalink = isset($_GET['youtube']) ? $_GET['youtube'] : $last_youtube;
    ?>
            <div class="col-md-12">
                <iframe style="border:4px solid #f9621c;" width="100%" height="520" src="https://www.youtube.com/embed/<?php echo $permalink ?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
    <?php
        endwhile;
    endif;
    ?>
    <div class="row">

        <?php
        $args = array(
            'post_type' => 'video_youtube',
            'post_status' => 'publish',
            'posts_per_page' => 9,
        );
        $arr_posts = new WP_Query($args);

        if ($arr_posts->have_posts()) :

            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
        ?>


                <div class="col-lg-4" style="margin-bottom:10px;">
                    <div class="cuadro_intro_hover">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/images/youtubeLogo.jpg" class="img-fluid" alt="Radio Orange" draggable="false">
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 style="font-size:18px; border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php the_title(); ?></h3>
                                <p>Click to Play Video</p>

                                <a href="?youtube=<?php the_field('youtube_id') ?>"><span class="fa fa-play-circle-o fa-4x text-warning"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            endwhile;
        endif;
        ?>

    </div><!-- /.blog-main -->
    <?php get_footer(); ?>