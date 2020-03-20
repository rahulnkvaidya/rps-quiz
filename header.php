<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-flud p-2 bg-white">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("header top")) : ?>
        <?php endif; ?>
        <section class="header">
            <div class="row">
                <div class="col-sm-6 p-2">
                    <?php

                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }

                    ?>
                </div>
                <div class="col-sm-6 pt-4">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
            </div>
        </section>
    </div>
    <div class="row border border-gray m-2 p-2">