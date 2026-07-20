<?php

defined('ABSPATH') || exit;

/**
 * Load Assets
 */

function greenscape_enqueue_assets(): void
{

    wp_enqueue_style(
        'greenscape-style',
        get_stylesheet_uri(),
        [],
        GREENSCAPE_VERSION
    );

}

add_action(
    'wp_enqueue_scripts',
    'greenscape_enqueue_assets'
);
