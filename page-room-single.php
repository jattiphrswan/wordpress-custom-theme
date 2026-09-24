<?php
/**
 * Template Name: Single Room Page
 * Template Post Type: page, post, room, mphb_room_type
 *
 * Replicates Kinsley Resort Hotel Accommodation Detail page
 * matching https://kinsley.bslthemes.com/resort/accommodation/business-class-room/
 *
 * @package Resort_Hotel
 */

get_header();

// =========================================================================
// 1. Rooms Catalog
// =========================================================================
$theme_uri = get_template_directory_uri();

$rooms_catalog = [
    'business-class-room' => [
        'title'        => __('Business class room', 'resort-hotel'),
        'price'        => '59',
        'adults'       => '2',
        'size'         => '35ft²',
        'description'  => [
            __("Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur ratione rerum necessitatibus ipsa eligendi? Laudantium beatae aut earum ab doloribus tempore veritatis repellat natus illo, veniam quibusdam fugit aspernatur cumque harum quos esse libero nesciunt, molestiae saepe, possimus a suscipit! Minima aspernatur quod maxime quis facere facilis magnam, animi, quia id nihil reiciendis laboriosam, suscipit explicabo amet quasi recusandae at.", 'resort-hotel'),
            __("Experience supreme comfort and contemporary sophistication in our Business class suites. Tailored specifically for executive travelers and couples seeking uncompromised luxury, each room boasts dedicated ergonomic workstations, ultra-high-speed fiber Wi-Fi, and panoramic coastal balconies.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-15-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-14-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-4-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-10-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-1-950x535.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('All Inclusive', 'resort-hotel'), 'icon' => 'plate'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Private Pool', 'resort-hotel'), 'icon' => 'pool'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'standard-room' => [
        'title'        => __('Standard room', 'resort-hotel'),
        'price'        => '19',
        'adults'       => '2',
        'size'         => '50ft²',
        'description'  => [
            __("Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur ratione rerum necessitatibus ipsa eligendi? Laudantium beatae aut earum ab doloribus tempore veritatis repellat natus illo.", 'resort-hotel'),
            __("Spacious and tranquil, our Standard room offers exceptional value with premium linen bedding, private bathroom, smart flat-screen TV, and pleasant resort garden views.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-4-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-6-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-1-950x535.jpg',
            $theme_uri . '/assets/images/room/room-demo-14-950x633.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'economy-classic-room' => [
        'title'        => __('Economy classic room', 'resort-hotel'),
        'price'        => '27',
        'adults'       => '2',
        'size'         => '26ft²',
        'description'  => [
            __("Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur ratione rerum necessitatibus ipsa eligendi? Laudantium beatae aut earum ab doloribus.", 'resort-hotel'),
            __("Ideal for solo adventurers and weekend getaways, compact yet delightfully designed with bright interiors, desk setup, and modern comfort amenities.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-1-950x535.jpg',
            $theme_uri . '/assets/images/room/room-demo-7-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-4-950x633.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'triple-classic-room' => [
        'title'        => __('Triple classic room', 'resort-hotel'),
        'price'        => '79',
        'adults'       => '3',
        'size'         => '42ft²',
        'description'  => [
            __("Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur ratione rerum necessitatibus ipsa eligendi.", 'resort-hotel'),
            __("Designed for small families or friend groups, featuring flexible bedding configurations, generous seating space, and easy access to all resort amenities.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-7-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-3-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-14-950x633.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('All Inclusive', 'resort-hotel'), 'icon' => 'plate'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'royal-class-room' => [
        'title'        => __('Royal class room', 'resort-hotel'),
        'price'        => '119',
        'adults'       => '4',
        'size'         => '68ft²',
        'description'  => [
            __("Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur ratione rerum necessitatibus ipsa eligendi? Experience presidential luxury.", 'resort-hotel'),
            __("Our pinnacle suite with grand stone fireplace, sprawling dual-lounge layout, private plunge pool, and personalized concierge services.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-15-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-13-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-10-950x633.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('All Inclusive', 'resort-hotel'), 'icon' => 'plate'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Private Pool', 'resort-hotel'), 'icon' => 'pool'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'superior-ocean-room' => [
        'title'        => __('Superior ocean room', 'resort-hotel'),
        'price'        => '99',
        'adults'       => '2',
        'size'         => '45ft²',
        'description'  => [
            __("Bask in sweeping panoramic ocean vistas from your private sun deck. Contemporary seaside luxury with floor-to-ceiling windows and artisanal decor.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-13-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-6-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-14-950x633.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Private Pool', 'resort-hotel'), 'icon' => 'pool'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
    'double-room' => [
        'title'        => __('Double room', 'resort-hotel'),
        'price'        => '39',
        'adults'       => '2',
        'size'         => '35ft²',
        'description'  => [
            __("Warm and inviting, our Double Room is the perfect coastal haven for couples, featuring plush queen bedding, organic toiletries, and serene garden outlooks.", 'resort-hotel'),
        ],
        'gallery'      => [
            $theme_uri . '/assets/images/room/room-demo-6-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-4-950x633.jpg',
            $theme_uri . '/assets/images/room/room-demo-1-950x535.jpg',
        ],
        'amenities'    => [
            ['title' => __('Air-Conditioned', 'resort-hotel'), 'icon' => 'ac'],
            ['title' => __('Free Wi-Fi', 'resort-hotel'), 'icon' => 'wifi'],
            ['title' => __('Smart TV', 'resort-hotel'), 'icon' => 'tv'],
            ['title' => __('Under Protection', 'resort-hotel'), 'icon' => 'security'],
        ],
    ],
];

// =========================================================================
// 2. Identify Current Room
// =========================================================================
$room_key = 'business-class-room';

if (isset($_GET['room']) && array_key_exists(sanitize_key($_GET['room']), $rooms_catalog)) {
    $room_key = sanitize_key($_GET['room']);
} elseif (get_query_var('room') && array_key_exists(sanitize_key(get_query_var('room')), $rooms_catalog)) {
    $room_key = sanitize_key(get_query_var('room'));
} elseif (is_singular(['room', 'mphb_room_type'])) {
    $post_slug = get_post_field('post_name', get_the_ID());
    if (array_key_exists($post_slug, $rooms_catalog)) {
        $room_key = $post_slug;
    }
} else {
    $path = trim(parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH), '/');
    $parts = explode('/', $path);
    $last_slug = sanitize_key(end($parts));
    if (array_key_exists($last_slug, $rooms_catalog)) {
        $room_key = $last_slug;
    }
}

$current = $rooms_catalog[$room_key];

if (is_singular(['room', 'mphb_room_type'])) {
    if (get_the_title()) {
        $current['title'] = get_the_title();
    }
    if (has_post_thumbnail()) {
        array_unshift($current['gallery'], get_the_post_thumbnail_url(get_the_ID(), 'full'));
    }
}
?>

<main id="primary" class="site-main knsl-single-room-page">

    <!-- Ambient Watercolor Splash Backdrops -->
    <div class="knsl-room-ambient-pat pat-left" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-room-ambient-pat pat-right" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-room-ambient-pat pat-bottom-right" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

    <!-- Floating Starfish Accents -->
    <img src="<?php echo esc_url($theme_uri . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-room-star star-top-center" aria-hidden="true">
    <img src="<?php echo esc_url($theme_uri . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-room-star star-mid-left" aria-hidden="true">
    <img src="<?php echo esc_url($theme_uri . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-room-star star-bottom-right" aria-hidden="true">

    <!-- 1. Subheader Hero & Breadcrumbs ("Business class room" | HOME > RESORT > BUSINESS CLASS ROOM) -->
    <section class="knsl-room-banner">
        <div class="knsl-room-banner-inner">
            <h1 class="knsl-room-single-title"><?php echo esc_html($current['title']); ?></h1>
            <div class="knsl-room-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'resort-hotel'); ?></a>
                <span class="knsl-room-breadcrumbs-sep">&gt;</span>
                <a href="<?php echo esc_url(home_url('/#rooms')); ?>"><?php esc_html_e('Resort', 'resort-hotel'); ?></a>
                <span class="knsl-room-breadcrumbs-sep">&gt;</span>
                <span class="knsl-room-breadcrumbs-current"><?php echo esc_html($current['title']); ?></span>
            </div>
        </div>
    </section>

    <!-- 2. Room Gallery Showcase Slider (3 visible images, curved corners) -->
    <section class="knsl-room-gallery-section" aria-label="<?php esc_attr_e('Room photo gallery', 'resort-hotel'); ?>">
        <div class="knsl-room-gallery-container">
            <div class="knsl-room-gallery-viewport">
                <div class="knsl-room-gallery-track" id="knslRoomGalleryTrack">
                    <?php foreach ($current['gallery'] as $idx => $img_url) : ?>
                        <div class="knsl-room-gallery-slide" data-index="<?php echo esc_attr($idx + 1); ?>">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($current['title'] . ' - Photo ' . ($idx + 1)); ?>" loading="<?php echo $idx < 3 ? 'eager' : 'lazy'; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Gallery Controls: Counter on left, Prev/Next on right -->
            <div class="knsl-room-gallery-controls">
                <div class="knsl-room-gallery-counter">
                    <span id="knslRoomGalleryCurrent">2</span>
                    <span class="knsl-counter-sep">/</span>
                    <span id="knslRoomGalleryTotal"><?php echo esc_html(count($current['gallery'])); ?></span>
                </div>

                <div class="knsl-room-gallery-nav">
                    <button type="button" class="knsl-room-gallery-btn" id="knslRoomGalleryPrev" aria-label="<?php esc_attr_e('Previous room photos', 'resort-hotel'); ?>">
                        <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    <button type="button" class="knsl-room-gallery-btn" id="knslRoomGalleryNext" aria-label="<?php esc_attr_e('Next room photos', 'resort-hotel'); ?>">
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Main Content & Sidebar Layout (2-Column) -->
    <div class="knsl-room-detail-container">
        <div class="knsl-room-detail-grid">

            <!-- Left Column: Details, Amenities, Location, Around, Calendar, Review -->
            <div class="knsl-room-content-col">

                <!-- 3.1 Description of the room -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('Description of the room', 'resort-hotel'); ?></h3>
                    <?php foreach ($current['description'] as $p) : ?>
                        <p class="knsl-room-desc-text"><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </section>

                <!-- 3.2 Amenity (3x2 Grid) -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('Amenity', 'resort-hotel'); ?></h3>
                    <div class="knsl-room-amenities-grid">
                        <?php foreach ($current['amenities'] as $amenity) : ?>
                            <div class="knsl-room-amenity-card">
                                <div class="knsl-room-amenity-icon">
                                    <?php if ($amenity['icon'] === 'ac') : ?>
                                        <svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="12" rx="2"></rect><line x1="6" y1="12" x2="6" y2="12"></line><line x1="10" y1="12" x2="10" y2="12"></line><line x1="14" y1="12" x2="14" y2="12"></line><line x1="18" y1="12" x2="18" y2="12"></line><path d="M6 19l2-3"></path><path d="M12 19v-3"></path><path d="M18 19l-2-3"></path></svg>
                                    <?php elseif ($amenity['icon'] === 'plate') : ?>
                                        <svg viewBox="0 0 24 24"><path d="M12 4a8 8 0 0 0-8 8h16a8 8 0 0 0-8-8z"></path><path d="M2 16h20"></path><path d="M12 2v2"></path></svg>
                                    <?php elseif ($amenity['icon'] === 'wifi') : ?>
                                        <svg viewBox="0 0 24 24"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                                    <?php elseif ($amenity['icon'] === 'pool') : ?>
                                        <svg viewBox="0 0 24 24"><path d="M2 20c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path><path d="M2 16c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"></path><path d="M7 4v8"></path><path d="M17 4v8"></path><path d="M7 8h10"></path></svg>
                                    <?php elseif ($amenity['icon'] === 'tv') : ?>
                                        <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg>
                                    <?php else : ?>
                                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    <?php endif; ?>
                                </div>
                                <span class="knsl-room-amenity-label"><?php echo esc_html($amenity['title']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <!-- 3.3 Location -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('Location', 'resort-hotel'); ?></h3>
                    <div class="knsl-room-map-card">
                        <!-- OpenStreetMap Leaflet Embed with Custom Styling -->
                        <iframe 
                            title="<?php esc_attr_e('Resort Location Map', 'resort-hotel'); ?>"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=-73.988%2C40.745%2C-73.978%2C40.752&amp;layer=mapnik" 
                            loading="lazy">
                        </iframe>
                        <div class="knsl-map-overlay-pin">
                            <div class="knsl-map-pin-pulse"></div>
                            <div class="knsl-map-pin-icon">
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path></svg>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 3.4 Around The Hotel (Gym & Beach Restaurant) -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('Around The Hotel', 'resort-hotel'); ?></h3>
                    <div class="knsl-room-around-grid">
                        <!-- Card 1: Gym -->
                        <a href="<?php echo esc_url(add_query_arg('service', 'gym', home_url('/service-single/'))); ?>" class="knsl-room-around-card">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/ser/service-6-950x1473.jpg'); ?>" alt="<?php esc_attr_e('Gym', 'resort-hotel'); ?>">
                            <span class="knsl-room-around-badge"><?php esc_html_e('Gym', 'resort-hotel'); ?></span>
                        </a>

                        <!-- Card 2: Beach Restaurant -->
                        <a href="<?php echo esc_url(add_query_arg('service', 'beach-restaurant', home_url('/service-single/'))); ?>" class="knsl-room-around-card">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/ser/serv3-950x1273.jpg'); ?>" alt="<?php esc_attr_e('Beach Restaurant', 'resort-hotel'); ?>">
                            <span class="knsl-room-around-badge"><?php esc_html_e('Beach Restaurant', 'resort-hotel'); ?></span>
                        </a>
                    </div>
                </section>

                <!-- 3.5 Availability Calendar -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('Availability Calendar', 'resort-hotel'); ?></h3>
                    <div class="knsl-room-calendar-card" id="knslAvailabilityCalendar">
                        <div class="knsl-calendar-toolbar">
                            <button type="button" class="knsl-cal-btn">&lt;Prev</button>
                            <span class="knsl-cal-today"><?php esc_html_e('Today', 'resort-hotel'); ?></span>
                            <button type="button" class="knsl-cal-btn">Next&gt;</button>
                        </div>

                        <div class="knsl-calendar-months-grid">
                            <!-- Month 1: September 2026 -->
                            <div class="knsl-calendar-month-pane">
                                <div class="knsl-month-title">September 2026</div>
                                <table class="knsl-cal-table">
                                    <thead>
                                        <tr>
                                            <th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"><span>1</span></td>
                                            <td class="is-disabled"><span>2</span></td>
                                            <td class="is-disabled"><span>3</span></td>
                                            <td class="is-disabled"><span>4</span></td>
                                            <td class="is-disabled"><span>5</span></td>
                                            <td class="is-disabled"><span>6</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-disabled"><span>7</span></td>
                                            <td class="is-disabled"><span>8</span></td>
                                            <td class="is-disabled"><span>9</span></td>
                                            <td class="is-disabled"><span>10</span></td>
                                            <td class="is-disabled"><span>11</span></td>
                                            <td class="is-disabled"><span>12</span></td>
                                            <td class="is-disabled"><span>13</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-disabled"><span>14</span></td>
                                            <td class="is-disabled"><span>15</span></td>
                                            <td class="is-disabled"><span>16</span></td>
                                            <td class="is-disabled"><span>17</span></td>
                                            <td class="is-disabled"><span>18</span></td>
                                            <td class="is-disabled"><span>19</span></td>
                                            <td class="is-disabled"><span>20</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-disabled"><span>21</span></td>
                                            <td class="is-disabled"><span>22</span></td>
                                            <td class="is-disabled"><span>23</span></td>
                                            <td class="is-available is-selected" data-date="2026-09-24"><span>24</span></td>
                                            <td class="is-available is-in-range" data-date="2026-09-25"><span>25</span></td>
                                            <td class="is-available is-in-range" data-date="2026-09-26"><span>26</span></td>
                                            <td class="is-available is-selected" data-date="2026-09-27"><span>27</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-available" data-date="2026-09-28"><span>28</span></td>
                                            <td class="is-available" data-date="2026-09-29"><span>29</span></td>
                                            <td class="is-available" data-date="2026-09-30"><span>30</span></td>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Month 2: October 2026 -->
                            <div class="knsl-calendar-month-pane">
                                <div class="knsl-month-title">October 2026</div>
                                <table class="knsl-cal-table">
                                    <thead>
                                        <tr>
                                            <th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"></td>
                                            <td class="is-disabled"></td>
                                            <td class="is-available" data-date="2026-10-01"><span>1</span></td>
                                            <td class="is-available" data-date="2026-10-02"><span>2</span></td>
                                            <td class="is-available" data-date="2026-10-03"><span>3</span></td>
                                            <td class="is-available" data-date="2026-10-04"><span>4</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-available" data-date="2026-10-05"><span>5</span></td>
                                            <td class="is-available" data-date="2026-10-06"><span>6</span></td>
                                            <td class="is-available" data-date="2026-10-07"><span>7</span></td>
                                            <td class="is-available" data-date="2026-10-08"><span>8</span></td>
                                            <td class="is-available" data-date="2026-10-09"><span>9</span></td>
                                            <td class="is-available" data-date="2026-10-10"><span>10</span></td>
                                            <td class="is-available" data-date="2026-10-11"><span>11</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-available" data-date="2026-10-12"><span>12</span></td>
                                            <td class="is-available" data-date="2026-10-13"><span>13</span></td>
                                            <td class="is-available" data-date="2026-10-14"><span>14</span></td>
                                            <td class="is-available" data-date="2026-10-15"><span>15</span></td>
                                            <td class="is-available" data-date="2026-10-16"><span>16</span></td>
                                            <td class="is-available" data-date="2026-10-17"><span>17</span></td>
                                            <td class="is-available" data-date="2026-10-18"><span>18</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-available" data-date="2026-10-19"><span>19</span></td>
                                            <td class="is-available" data-date="2026-10-20"><span>20</span></td>
                                            <td class="is-available" data-date="2026-10-21"><span>21</span></td>
                                            <td class="is-available" data-date="2026-10-22"><span>22</span></td>
                                            <td class="is-available" data-date="2026-10-23"><span>23</span></td>
                                            <td class="is-available" data-date="2026-10-24"><span>24</span></td>
                                            <td class="is-available" data-date="2026-10-25"><span>25</span></td>
                                        </tr>
                                        <tr>
                                            <td class="is-available" data-date="2026-10-26"><span>26</span></td>
                                            <td class="is-available" data-date="2026-10-27"><span>27</span></td>
                                            <td class="is-available" data-date="2026-10-28"><span>28</span></td>
                                            <td class="is-available" data-date="2026-10-29"><span>29</span></td>
                                            <td class="is-available" data-date="2026-10-30"><span>30</span></td>
                                            <td class="is-available" data-date="2026-10-31"><span>31</span></td>
                                            <td class="is-disabled"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="knsl-calendar-footer">
                            <span><?php esc_html_e('Select dates', 'resort-hotel'); ?></span>
                            <button type="button" class="knsl-cal-clear-btn" id="knslCalClearBtn"><?php esc_html_e('Clear', 'resort-hotel'); ?></button>
                        </div>
                    </div>
                </section>

                <!-- 3.6 FAQ / Write a review form -->
                <section class="knsl-room-block">
                    <h3 class="knsl-room-block-title"><?php esc_html_e('FAQ', 'resort-hotel'); ?></h3>
                    <h4 class="knsl-room-review-sub"><?php esc_html_e('Write a review', 'resort-hotel'); ?></h4>

                    <form action="#" method="post" class="knsl-room-review-form" onsubmit="event.preventDefault(); alert('Thank you! Your review has been submitted.');">
                        <div class="knsl-review-form-group">
                            <textarea class="knsl-review-textarea" placeholder="<?php esc_attr_e('Review', 'resort-hotel'); ?>" required></textarea>
                        </div>

                        <div class="knsl-review-form-group">
                            <input type="text" class="knsl-review-input" placeholder="<?php esc_attr_e('Name', 'resort-hotel'); ?>" required>
                        </div>

                        <div class="knsl-review-form-group">
                            <input type="email" class="knsl-review-input" placeholder="<?php esc_attr_e('Email', 'resort-hotel'); ?>" required>
                        </div>

                        <label class="knsl-review-checkbox-label">
                            <input type="checkbox" name="save_info" value="1">
                            <span><?php esc_html_e('Save my name, email, and website in this browser for the next time I comment.', 'resort-hotel'); ?></span>
                        </label>

                        <button type="submit" class="knsl-review-submit-btn"><?php esc_html_e('SUBMIT', 'resort-hotel'); ?></button>
                    </form>
                </section>

            </div>

            <!-- Right Column: Sticky Sidebar (Prices, Specs, Booking) -->
            <aside class="knsl-room-sidebar-col">
                <div class="knsl-room-sidebar-sticky">

                    <!-- Widget 1: Price Card -->
                    <div class="knsl-room-price-widget">
                        <div class="knsl-price-widget-label"><?php esc_html_e('Prices start at:', 'resort-hotel'); ?></div>
                        <div class="knsl-price-widget-amount">
                            <span class="knsl-room-price-val">&euro;<?php echo esc_html($current['price']); ?></span>
                            <span class="knsl-room-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                        </div>
                    </div>

                    <!-- Widget 2: Specs Pill (Adults & Size) -->
                    <div class="knsl-room-specs-widget">
                        <div class="knsl-room-spec-entry">
                            <svg viewBox="0 0 24 24"><path d="M2 4v16M2 8h20M2 17h20M22 4v16"></path><circle cx="7" cy="12" r="2"></circle></svg>
                            <span><?php printf(esc_html__('Adults: %s', 'resort-hotel'), esc_html($current['adults'])); ?></span>
                        </div>
                        <div class="knsl-room-spec-entry">
                            <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><path d="M9 3v18"></path></svg>
                            <span><?php printf(esc_html__('Size: %s', 'resort-hotel'), esc_html($current['size'])); ?></span>
                        </div>
                    </div>

                    <!-- Widget 3: Check-in / Check-out Reservation Widget -->
                    <div class="knsl-room-booking-widget">
                        <form action="#" method="get" onsubmit="event.preventDefault(); alert('Redirecting to checkout for ' + '<?php echo esc_js($current['title']); ?>');">
                            <div class="knsl-booking-input-group">
                                <label for="knslCheckinInput" class="knsl-booking-label"><?php esc_html_e('Check-in Date', 'resort-hotel'); ?></label>
                                <div class="knsl-booking-input-wrapper">
                                    <input type="text" id="knslCheckinInput" class="knsl-booking-input" placeholder="<?php esc_attr_e('Check-in Date', 'resort-hotel'); ?>" value="2026-09-24" readonly>
                                    <svg class="knsl-booking-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </div>
                            </div>

                            <div class="knsl-booking-input-group">
                                <label for="knslCheckoutInput" class="knsl-booking-label"><?php esc_html_e('Check-out Date', 'resort-hotel'); ?></label>
                                <div class="knsl-booking-input-wrapper">
                                    <input type="text" id="knslCheckoutInput" class="knsl-booking-input" placeholder="<?php esc_attr_e('Check-out Date', 'resort-hotel'); ?>" value="2026-09-27" readonly>
                                    <svg class="knsl-booking-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                </div>
                            </div>

                            <button type="submit" class="knsl-booking-submit-btn">
                                <?php esc_html_e('CHECK AVAILABILITY', 'resort-hotel'); ?>
                            </button>
                        </form>
                    </div>

                </div>
            </aside>

        </div>
    </div>

    <!-- 4. Call to Action Banner ("Do you have any questions? We are available 24/7") -->
    <?php 
    get_template_part('template-parts/section', 'cta', [
        'badge'        => __('CALL TO ACTION', 'resort-hotel'),
        'title_line1'  => __('Do you have any questions?', 'resort-hotel'),
        'title_line2'  => __('We are available 24/7', 'resort-hotel'),
        'btn1_text'    => __('GET IN TOUCH', 'resort-hotel'),
        'btn1_url'     => home_url('/contact/'),
        'btn2_text'    => '+1 234 5678',
        'btn2_url'     => 'tel:+12345678',
        'btn2_type'    => 'phone',
    ]); 
    ?>

    <!-- 5. Similar Rooms Carousel Section ("SIMILAR ROOMS" / "We recommend") -->
    <?php 
    get_template_part('template-parts/section', 'rooms-carousel', [
        'badge' => __('SIMILAR ROOMS', 'resort-hotel'),
        'title' => __('We recommend', 'resort-hotel'),
    ]); 
    ?>

</main>

<?php get_footer(); ?>
