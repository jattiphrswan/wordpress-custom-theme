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
        '1.0.6'
    );

    // Features stylesheet
    wp_enqueue_style(
        'resort-hotel-features',
        get_template_directory_uri() . '/assets/css/features.css',
        ['resort-hotel-style'],
        '1.0.4'
    );

    // About stylesheet
    wp_enqueue_style(
        'resort-hotel-about',
        get_template_directory_uri() . '/assets/css/about.css',
        ['resort-hotel-style'],
        '1.0.0'
    );

    // Rooms stylesheet
    wp_enqueue_style(
        'resort-hotel-rooms',
        get_template_directory_uri() . '/assets/css/rooms.css',
        ['resort-hotel-style'],
        '1.0.6'
    );

    // Call to Action stylesheet
    wp_enqueue_style(
        'resort-hotel-cta',
        get_template_directory_uri() . '/assets/css/cta.css',
        ['resort-hotel-style'],
        '1.0.6'
    );

    // Benefits stylesheet
    wp_enqueue_style(
        'resort-hotel-benefits',
        get_template_directory_uri() . '/assets/css/benefits.css',
        ['resort-hotel-style'],
        '1.0.6'
    );

    // Customer Voices & Reviews stylesheet
    wp_enqueue_style(
        'resort-hotel-reviews',
        get_template_directory_uri() . '/assets/css/reviews.css',
        ['resort-hotel-style'],
        '1.0.0'
    );

    // Blog stylesheet
    wp_enqueue_style(
        'resort-hotel-blog',
        get_template_directory_uri() . '/assets/css/blog.css',
        ['resort-hotel-style'],
        '1.0.0'
    );

    // Footer stylesheet
    wp_enqueue_style(
        'resort-hotel-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        ['resort-hotel-style'],
        '1.0.6'
    );

    // Contact stylesheet
    wp_enqueue_style(
        'resort-hotel-contact',
        get_template_directory_uri() . '/assets/css/contact.css',
        ['resort-hotel-style'],
        '1.0.0'
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
        '1.0.6',
        true
    );

    // Customer Reviews Carousel JS
    wp_enqueue_script(
        'resort-hotel-reviews-script',
        get_template_directory_uri() . '/assets/js/reviews.js',
        [],
        '1.0.0',
        true
    );

    // Hero Booking Bar Datepicker & Custom Select JS
    wp_enqueue_script(
        'resort-hotel-booking-bar',
        get_template_directory_uri() . '/assets/js/booking-bar.js',
        [],
        '1.0.0',
        true
    );

    // Services JS (FAQ Accordion & Service Interactions)
    wp_enqueue_script(
        'resort-hotel-services-script',
        get_template_directory_uri() . '/assets/js/services.js',
        [],
        '1.0.6',
        true
    );
}
add_action('wp_enqueue_scripts', 'resort_hotel_scripts');

/**
 * Register Custom Post Types (Service)
 */
function resort_hotel_register_post_types() {
    register_post_type('service', [
        'labels' => [
            'name'               => __('Services', 'resort-hotel'),
            'singular_name'      => __('Service', 'resort-hotel'),
            'menu_name'          => __('Services', 'resort-hotel'),
            'name_admin_bar'     => __('Service', 'resort-hotel'),
            'add_new'            => __('Add New', 'resort-hotel'),
            'add_new_item'       => __('Add New Service', 'resort-hotel'),
            'new_item'           => __('New Service', 'resort-hotel'),
            'edit_item'          => __('Edit Service', 'resort-hotel'),
            'view_item'          => __('View Service', 'resort-hotel'),
            'all_items'          => __('All Services', 'resort-hotel'),
            'search_items'       => __('Search Services', 'resort-hotel'),
            'not_found'          => __('No services found.', 'resort-hotel'),
            'not_found_in_trash' => __('No services found in Trash.', 'resort-hotel'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'service'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-palmtree',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
    ]);
}
add_action('init', 'resort_hotel_register_post_types');

