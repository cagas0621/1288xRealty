<?php

function realty_css()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('classy', get_template_directory_uri() . '/assets/css/classy-nav.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('jquery', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
    wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
}
add_action('wp_enqueue_scripts', 'realty_css');

function realty_scripts()
{
    wp_enqueue_script(
        'bootstrapbundle',
        get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/assets/js/popper.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery-migrate',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'bootstrap',
        get_template_directory_uri() . '/assets/js/plugins.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_waypoints',
        get_template_directory_uri() . '/assets/js/classy-nav.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_stellar',
        get_template_directory_uri() . '/assets/js/jquery-ui.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'jquery_carousel',
        get_template_directory_uri() . '/assets/js/active.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_register_script(
        'custom',
        get_template_directory_uri() . '/assets/js/custom.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_add_inline_script('custom', 'var template_url = "' . get_template_directory_uri() . '";');

    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'realty_scripts');
