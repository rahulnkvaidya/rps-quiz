</div><!-- /.row -->


<footer class="page-footer font-small text-light bg-dark pt-4">
    <div class="container">
        <div class="row mb-1">
            <div class="col-md-6 col-lg-4">
                <div class="block-23 mb-3">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1")) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2")) : ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-lg-4">
                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3")) : ?>
                <?php endif; ?>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved | Powered by - <a href="https://www.rpsrobosoft.com">RPS Robosoft Technologies v1.3</a>
                </p>
            </div>
        </div>
    </div>
</footer>

</div><!-- /.container -->
<?php wp_footer(); ?>
</body>

</html>