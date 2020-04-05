<!-- Sidebar
============================================= -->
<div class="col-sm-4 p-3">
<div class="col-12 p-3 shadow">
    <?php
      if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Right")) : ?>
     <?php endif;
    ?>
</div>
</div>
<!-- .sidebar end -->