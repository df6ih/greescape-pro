<?php

defined('ABSPATH') || exit;

/**
 * Theme setup
 */

function greenscape_setup(): void
{

    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('editor-styles');

    add_theme_support('align-wide');

    add_theme_support('custom-spacing');

    add_theme_support('custom-line-height');

    add_theme_support('appearance-tools');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_editor_style();

}

add_action(
    'after_setup_theme',
    'greenscape_setup'
);
