<?php

function realty_css()
{
    $assets_path = get_template_directory() . '/assets/css';

    $files = scandir($assets_path);

    foreach ($files as $file) {

        if ($file === '.' || $file === '..') {
            continue;
        }

        $handle = 'style-' . sanitize_title(basename($file, '.css'));

        wp_enqueue_style($handle, get_theme_file_uri('/assets/css/' . $file));
    }
}
add_action('wp_enqueue_scripts', 'realty_css');

function cloudcentsph_scripts()
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

    wp_add_inline_script('custom', 'var url = "' . home_url() . '";');
}
add_action('wp_enqueue_scripts', 'cloudcentsph_scripts');
