<?php

function resort_hotel_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);
}

add_action('after_setup_theme', 'resort_hotel_setup');
