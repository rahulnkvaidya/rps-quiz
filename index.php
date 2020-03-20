<?php get_header(); ?>
<div class="col-sm-8">
<?php the_content(); ?>
    <?php
    
    if (have_posts()) {
        while (have_posts()) : the_post();
    ?>
            <div class="col-sm-12 m-2 p-2 mt-4 border shadow-sm bg-white rounded">
                <h1 class="jumbotron p-4">
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            </div>
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
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>