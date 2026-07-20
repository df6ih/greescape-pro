
<?php

if (!defined('ABSPATH')) {
    exit;
}

function greenscape_setup() {

    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('align-wide');

}

add_action('after_setup_theme', 'greenscape_setup');


function greenscape_styles() {

    wp_enqueue_style(
        'greenscape-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

}

add_action('wp_enqueue_scripts', 'greenscape_styles');
