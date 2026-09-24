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
        '1.0.8'
    );

    // Search Availability stylesheet
    wp_enqueue_style(
        'resort-hotel-search',
        get_template_directory_uri() . '/assets/css/search.css',
        ['resort-hotel-style'],
        '1.0.0'
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

    // Rooms Filter & Single Room JS
    wp_enqueue_script(
        'resort-hotel-rooms-script',
        get_template_directory_uri() . '/assets/js/rooms.js',
        [],
        '1.0.8',
        true
    );

    // Search Availability JS
    wp_enqueue_script(
        'resort-hotel-search-script',
        get_template_directory_uri() . '/assets/js/search.js',
        [],
        '1.0.0',
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

    // Register Room / Accommodation Custom Post Type
    register_post_type('room', [
        'labels' => [
            'name'               => __('Rooms', 'resort-hotel'),
            'singular_name'      => __('Room', 'resort-hotel'),
            'menu_name'          => __('Rooms', 'resort-hotel'),
            'name_admin_bar'     => __('Room', 'resort-hotel'),
            'add_new'            => __('Add New', 'resort-hotel'),
            'add_new_item'       => __('Add New Room', 'resort-hotel'),
            'new_item'           => __('New Room', 'resort-hotel'),
            'edit_item'          => __('Edit Room', 'resort-hotel'),
            'view_item'          => __('View Room', 'resort-hotel'),
            'all_items'          => __('All Rooms', 'resort-hotel'),
            'search_items'       => __('Search Rooms', 'resort-hotel'),
            'not_found'          => __('No rooms found.', 'resort-hotel'),
            'not_found_in_trash' => __('No rooms found in Trash.', 'resort-hotel'),
        ],
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'accommodation'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-building',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'       => true,
    ]);
}
add_action('init', 'resort_hotel_register_post_types');

/**
 * Single Service Page Route & Template Redirect
 * Ensures /service-single/ and /service-single/<slug>/ always load page-service-single.php without 404
 */
function resort_hotel_handle_service_single_route() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = trim(parse_url($request_uri, PHP_URL_PATH), '/');
    $home_path = trim(parse_url(home_url(), PHP_URL_PATH), '/');

    if (!empty($home_path) && strpos($path, $home_path) === 0) {
        $path = trim(substr($path, strlen($home_path)), '/');
    }

    $is_match = false;
    $service_slug = '';

    // Match /service-single or /service-single/<slug>
    if ($path === 'service-single' || strpos($path, 'service-single/') === 0) {
        $is_match = true;
        if (strpos($path, 'service-single/') === 0) {
            $parts = explode('/', $path);
            $service_slug = isset($parts[1]) ? sanitize_key($parts[1]) : '';
        }
    } 
    // Also match /services/<slug> or /service/<slug> if not a resolved post
    elseif (preg_match('#^(?:services|service)/([^/]+)/?$#', $path, $matches)) {
        $catalog = ['surfing', 'swimming-pools', 'beach-restaurant', 'beach-vacation', 'spa-salon', 'gym'];
        if (in_array(sanitize_key($matches[1]), $catalog, true)) {
            $is_match = true;
            $service_slug = sanitize_key($matches[1]);
        }
    }

    if ($is_match) {
        if (!empty($service_slug) && empty($_GET['service'])) {
            $_GET['service'] = $service_slug;
        }

        global $wp_query;
        if (isset($wp_query)) {
            $wp_query->is_404 = false;
            $wp_query->is_page = true;
        }
        status_header(200);

        $template = locate_template(['page-service-single.php', 'single-service.php']);
        if ($template) {
            include $template;
            exit;
        }
    }
}
add_action('template_redirect', 'resort_hotel_handle_service_single_route', 1);

function resort_hotel_service_single_rewrites() {
    add_rewrite_rule('^service-single/?$', 'index.php?pagename=service-single', 'top');
    add_rewrite_rule('^service-single/([^/]+)/?$', 'index.php?pagename=service-single&service=$matches[1]', 'top');
}
add_action('init', 'resort_hotel_service_single_rewrites');

function resort_hotel_query_vars($vars) {
    $vars[] = 'service';
    $vars[] = 'room';
    return $vars;
}
add_filter('query_vars', 'resort_hotel_query_vars');

function resort_hotel_service_template_include($template) {
    if (get_query_var('pagename') === 'service-single' || is_page('service-single')) {
        $single_template = locate_template(['page-service-single.php', 'single-service.php']);
        if (!empty($single_template)) {
            return $single_template;
        }
    }
    return $template;
}
add_filter('template_include', 'resort_hotel_service_template_include');

/**
 * Single Room & Accommodation Route & Template Redirect
 * Ensures /accommodation/<slug>/, /room/<slug>/, and /accommodation/ always load page-room-single.php without 404
 */
function resort_hotel_handle_accommodation_single_route() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = trim(parse_url($request_uri, PHP_URL_PATH), '/');
    $home_path = trim(parse_url(home_url(), PHP_URL_PATH), '/');

    if (!empty($home_path) && strpos($path, $home_path) === 0) {
        $path = trim(substr($path, strlen($home_path)), '/');
    }

    $is_match = false;
    $room_slug = 'business-class-room';

    // Match /accommodation, /accommodation/<slug>, /room/<slug>, /room-single, etc.
    if ($path === 'accommodation' || strpos($path, 'accommodation/') === 0) {
        $is_match = true;
        if (strpos($path, 'accommodation/') === 0) {
            $parts = explode('/', $path);
            if (!empty($parts[1])) {
                $room_slug = sanitize_key($parts[1]);
            }
        }
    } elseif ($path === 'room-single' || strpos($path, 'room-single/') === 0) {
        $is_match = true;
        if (strpos($path, 'room-single/') === 0) {
            $parts = explode('/', $path);
            if (!empty($parts[1])) {
                $room_slug = sanitize_key($parts[1]);
            }
        }
    } elseif (preg_match('#^(?:rooms|room)/([^/]+)/?$#', $path, $matches)) {
        $catalog = ['business-class-room', 'standard-room', 'economy-classic-room', 'triple-classic-room', 'royal-class-room', 'superior-ocean-room', 'double-room', 'classic-room'];
        if (in_array(sanitize_key($matches[1]), $catalog, true)) {
            $is_match = true;
            $room_slug = sanitize_key($matches[1]);
        }
    }

    if ($is_match) {
        if (!empty($room_slug) && empty($_GET['room'])) {
            $_GET['room'] = $room_slug;
        }

        global $wp_query;
        if (isset($wp_query)) {
            $wp_query->is_404 = false;
            $wp_query->is_page = true;
        }
        status_header(200);

        $template = locate_template(['page-room-single.php', 'single-room.php', 'single-accommodation.php']);
        if ($template) {
            include $template;
            exit;
        }
    }
}
add_action('template_redirect', 'resort_hotel_handle_accommodation_single_route', 1);

function resort_hotel_accommodation_rewrites() {
    add_rewrite_rule('^accommodation/?$', 'index.php?pagename=room-single', 'top');
    add_rewrite_rule('^accommodation/([^/]+)/?$', 'index.php?pagename=room-single&room=$matches[1]', 'top');
    add_rewrite_rule('^room-single/?$', 'index.php?pagename=room-single', 'top');
    add_rewrite_rule('^room-single/([^/]+)/?$', 'index.php?pagename=room-single&room=$matches[1]', 'top');
}
add_action('init', 'resort_hotel_accommodation_rewrites');




