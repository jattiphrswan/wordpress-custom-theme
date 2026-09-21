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

    register_nav_menus([
        'primary' => __('Primary Menu', 'resort-hotel')
    ]);
}
add_action('after_setup_theme', 'resort_hotel_setup');

function resort_hotel_scripts() {
    // Google Fonts: Plus Jakarta Sans & Caveat
    wp_enqueue_style(
        'resort-hotel-fonts',
        'https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    // Theme main stylesheet
    wp_enqueue_style(
        'resort-hotel-style',
        get_stylesheet_uri(),
        [],
        '1.0.3'
    );

    // Header stylesheet
    wp_enqueue_style(
        'resort-hotel-header',
        get_template_directory_uri() . '/assets/css/header.css',
        ['resort-hotel-style'],
        '1.0.3'
    );

    // Hero stylesheet
    wp_enqueue_style(
        'resort-hotel-hero',
        get_template_directory_uri() . '/assets/css/hero.css',
        ['resort-hotel-style'],
        '1.0.3'
    );

    // Services stylesheet
    wp_enqueue_style(
        'resort-hotel-services',
        get_template_directory_uri() . '/assets/css/services.css',
        ['resort-hotel-style'],
        '1.0.3'
    );

    // Features stylesheet
    wp_enqueue_style(
        'resort-hotel-features',
        get_template_directory_uri() . '/assets/css/features.css',
        ['resort-hotel-style'],
        '1.0.3'
    );

    // Rooms stylesheet
    wp_enqueue_style(
        'resort-hotel-rooms',
        get_template_directory_uri() . '/assets/css/rooms.css',
        ['resort-hotel-style'],
        '1.0.4'
    );

    // Footer stylesheet
    wp_enqueue_style(
        'resort-hotel-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        ['resort-hotel-style'],
        '1.0.4'
    );

    // Header JS
    wp_enqueue_script(
        'resort-hotel-header-script',
        get_template_directory_uri() . '/assets/js/header.js',
        [],
        '1.0.4',
        true
    );

    // Hero Slider JS
    wp_enqueue_script(
        'resort-hotel-hero-slider',
        get_template_directory_uri() . '/assets/js/hero-slider.js',
        [],
        '1.0.4',
        true
    );

    // Rooms Filter JS
    wp_enqueue_script(
        'resort-hotel-rooms-script',
        get_template_directory_uri() . '/assets/js/rooms.js',
        [],
        '1.0.4',
        true
    );
}
add_action('wp_enqueue_scripts', 'resort_hotel_scripts');
