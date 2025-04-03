<?php

function remove_deprecated_hooks()
{
    remove_action('wp_footer', 'the_block_template_skip_link');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'remove_deprecated_hooks');

function infotravail_enqueue_styles()
{
    wp_enqueue_style('infotravail-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'infotravail_enqueue_styles');
