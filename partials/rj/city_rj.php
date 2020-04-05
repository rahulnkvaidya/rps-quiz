<?php $photo = get_field('image'); ?>
<div id="programDet<?php the_ID(); ?>" class="program_hover hidden-xs" onmouseover="showDiv('programDet<?php  the_ID(); ?>')" onmouseout="hideDiv('programDet<?php  the_ID(); ?>')">
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
    <div class="close_program" onClick="hideDiv('programDet<?php  the_ID(); ?>')"><img src="<?php echo $photo['url']; ?>"></div>
    <div class="clear"></div>
</div>