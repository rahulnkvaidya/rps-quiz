<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script type="text/javascript">
        $(document).ready(function showDiv(divID) {
                $('#' + divID).show();
            },

            function hideDiv(divID) {
                $('#' + divID).hide();
            });
    </script>
</head>

<body <?php body_class(); ?>>
    <div class="container-flud bg-white">
        <section class="header">
            <div class="col-12 headerbackground">
                <div class="container clear-padding">
                    <div class="col-12 p-2">
                        <div class="col-md-5 col-xs-12 clear-padding navbar-contact">
                            <?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            } else {
                            ?>
                                <div><?php echo get_bloginfo('name') ?></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-7 col-sm-6 clear-padding  hidden-xs">
                            <div class="col-md-12 col-xs-7 clear-padding user-logged">
                                <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("header top")) : ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">

                <div class="col-sm-12 p-0">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
            </div>
        </section>
    </div>
    <div class="container-flud">