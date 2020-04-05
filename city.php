<?php
/*
Template Name: city layout
*/
?>
<?php get_header(); ?>

<?php $city = $_GET['location'];
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
//  echo $city;
$args = array(
    'posts_per_page' => 10,
    'post_type' => 'city',
    'paged'     => $paged,
    'city' => $city
);
$arr_posts = new WP_Query($args);
?>
<div class="row">

    <div class="mis-stage">
        <ol class="mis-slider">
            <?php


            //   var_dump($arr_posts);
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
            ?>


                    <?php
                    $rjs = get_posts(array(
                        'post_type' => 'rj_profile',
                        'meta_query' => array(
                            array(
                                'key' => 'city', // name of custom field
                                'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                                'compare' => 'LIKE'
                            )
                        )
                    ));
                    //   var_dump($rjs)
                    ?>
                    <?php if ($rjs) : ?>

                        <?php foreach ($rjs as $rj) : ?>
                            <?php
                            //   echo get_field('post_objects');
                            $photo = get_field('image', $rj->ID);
                            ?>
                            <li class="mis-slide">
                                <?php
                                $image = get_field('image');
                                if (!empty($photo)) : ?>
                                    <img src="<?php echo $photo['url']; ?>" alt="Radio Orange" />
                                <?php endif; ?>
                                <?php the_field('post_title', $rj->ID); ?>
                                <?php // whitish_lite_blog_post_format($post_format, $rj->ID); 
                                ?>
                                <figcaption><strong><?php the_field('name', $rj->ID); ?></strong></figcaption> <small class="text-warning"><strong><?php the_field('name', $rj->ID); ?></strong></small>
                            </li>
                        <?php endforeach; ?>

                    <?php endif; ?>

                <?php
                endwhile;
                ?>
            <?php
            endif;
            ?>
        </ol>
    </div>

</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding-bottom:90px;">
                <div class="row hidden-xs">
                    <div class="col-md-4 program-h4">
                        <h4>Program Name</h4>
                    </div>
                    <div class="col-md-4 program-h4">
                        <h4>Program Time</h4>
                    </div>
                    <div class="col-md-4 program-h4">
                        <h4>Program Day</h4>
                    </div>
                </div>
                <?php
                $argsprog = array(

                    'post_type' => array('rj_programe'),
                    'meta_query' => array(
                        array(
                            'key' => 'city', // name of custom field
                            'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                            'compare' => 'LIKE'
                        )
                    )
                );
                $arr_prog = new WP_Query($argsprog);
                //    print_r($arr_prog);
                if ($arr_prog->have_posts()) :
                    while ($arr_prog->have_posts()) :
                        $arr_prog->the_post();
                        $rowid = get_the_ID();
                        //  echo $rowid;
                ?>
                        <div class="row">
                            <div class="col-md-4 div-cell-orange" onmouseover="showDiv('programDet<?php echo $rowid; ?>')" onmouseout="hideDiv('programDet<?php echo $rowid; ?>')">
                                <p><?php the_field('program_name'); ?> </p>
                                <?php
                                $time = get_field('time');
                                $day = get_field('day');
                                $argsprog_name = array(
                                    'post_type' => 'rj_profile',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'program', // name of custom field
                                            'value' => $rowid, // matches exactly "123", not just 123. This prevents a match for "1234"
                                            'compare' => 'LIKE'
                                        )
                                    )
                                );
                                $arr_prog_rj = new WP_Query($argsprog_name);
                                //  print_r($arr_prog);
                                while ($arr_prog_rj->have_posts()) :
                                    $arr_prog_rj->the_post();
                                    // get_template_part('partials/rj/city_rj');
                                ?>

                                    <?php $photo = get_field('image'); ?>
                                    <div id="programDet<?php echo $rowid ?>" class="program_hover hidden-xs" onmouseover="showDiv('programDet<?php echo $rowid ?>')" onmouseout="hideDiv('programDet<?php echo $rowid ?>')">
                                        <span class="side_arrow"></span>
                                        <div class="prog_hover_txt">
                                            <div class="col-md-6">
                                                <h5 class="txtcap"><strong><?php the_title(); ?> </strong></h5>
                                                <span><?php the_field('time'); ?> </span>
                                                <h6><strong>Your Host : RJ <?php the_title();   ?></strong></h6>
                                                <p></p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="<?php echo $photo['url']; ?>" class="img-responsive img-thumbnail" draggable="false" alt="Radio Orange - ">
                                            </div>
                                        </div>
                                        <div class="close_program" onClick="hideDiv('programDet<?php echo $rowid ?>')"><img src="<?php echo $photo['url']; ?>"></div>
                                        <div class="clear"></div>
                                    </div>


                                <?php endwhile;
                                wp_reset_postdata();
                                ?>

                            </div>
                            <div class="col-md-4 div-cell">
                                <p><?php echo $time
                                    ?></p>
                            </div>
                            <div class="col-md-4 div-cell">
                                <p><?php echo $day
                                    ?></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php
                endif;
                wp_reset_query();
                ?>
            </div>

            <div class="col-md-4">
                <div>
                    <div class="thumbnail_1">
                        <div class="heading">
                            <div class="caption">
                                <div class="wrap"><i class="fa fa-video-camera" aria-hidden="true"></i></div>
                                <h4><?php //  the_field('city') 
                                    ?> Video </h4>
                            </div>
                        </div>
                    </div>
                    <div>
                        <object width="100%" height="auto" data="http://www.youtube.com/v/{{$video->url}}" type="application/x-shockwave-flash">
                            <param name="src" value="http://www.youtube.com/v/{{$video->url}}" />
                        </object>
                    </div>
                </div>

                <div>
                    <div class="thumbnail_1">
                        <div class="heading">
                            <div class="caption">
                                <div class="wrap"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                <h4><?php // the_field('city') 
                                    ?> Images </h4>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div id="myCarousel" class="carousel slide">
                            <ol class="carousel-indicators">
                            </ol>
                            <div class="carousel-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>

