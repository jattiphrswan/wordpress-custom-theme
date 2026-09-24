<?php
/**
 * Template Name: Search Availability Page
 * Template Post Type: page
 *
 * Replicates Kinsley Resort Hotel Search Availability page
 * matching https://kinsley.bslthemes.com/resort/search-availability/
 *
 * @package Resort_Hotel
 */

get_header();

$theme_uri = get_template_directory_uri();

// Rooms Catalog
$rooms_catalog = [
    'business-class-room' => [
        'title'        => __('Business class room', 'resort-hotel'),
        'price'        => '59',
        'adults'       => '2',
        'size'         => '35ft²',
        'category'     => 'business',
        'image'        => $theme_uri . '/assets/images/room/room-demo-15-950x633.jpg',
        'url'          => home_url('/accommodation/business-class-room/'),
        'description'  => __('Tailored specifically for executive travelers and couples seeking uncompromised luxury and ergonomic workstations.', 'resort-hotel'),
    ],
    'standard-room' => [
        'title'        => __('Standard room', 'resort-hotel'),
        'price'        => '19',
        'adults'       => '2',
        'size'         => '50ft²',
        'category'     => 'standard',
        'image'        => $theme_uri . '/assets/images/room/room-demo-4-950x633.jpg',
        'url'          => home_url('/accommodation/standard-room/'),
        'description'  => __('Spacious and tranquil, our Standard room offers exceptional value with premium linen bedding and garden views.', 'resort-hotel'),
    ],
    'economy-classic-room' => [
        'title'        => __('Economy classic room', 'resort-hotel'),
        'price'        => '27',
        'adults'       => '2',
        'size'         => '26ft²',
        'category'     => 'standard',
        'image'        => $theme_uri . '/assets/images/room/room-demo-1-950x535.jpg',
        'url'          => home_url('/accommodation/standard-room/'),
        'description'  => __('Compact yet delightfully designed with bright interiors, desk setup, and modern comfort amenities.', 'resort-hotel'),
    ],
    'triple-classic-room' => [
        'title'        => __('Triple classic room', 'resort-hotel'),
        'price'        => '79',
        'adults'       => '3',
        'size'         => '42ft²',
        'category'     => 'suite',
        'image'        => $theme_uri . '/assets/images/room/room-demo-7-950x633.jpg',
        'url'          => home_url('/accommodation/triple-classic-room/'),
        'description'  => __('Designed for small families or friend groups, featuring flexible bedding configurations and generous space.', 'resort-hotel'),
    ],
    'royal-class-room' => [
        'title'        => __('Royal class room', 'resort-hotel'),
        'price'        => '119',
        'adults'       => '4',
        'size'         => '68ft²',
        'category'     => 'luxury',
        'image'        => $theme_uri . '/assets/images/room/room-demo-10-950x633.jpg',
        'url'          => home_url('/accommodation/royal-class-room/'),
        'description'  => __('Our crowning jewel accommodation featuring master suite quarters, private plunge pool, and panoramic vistas.', 'resort-hotel'),
    ],
    'deluxe-room' => [
        'title'        => __('Deluxe suite room', 'resort-hotel'),
        'price'        => '89',
        'adults'       => '3',
        'size'         => '48ft²',
        'category'     => 'luxury',
        'image'        => $theme_uri . '/assets/images/room/room-demo-14-950x633.jpg',
        'url'          => home_url('/accommodation/business-class-room/'),
        'description'  => __('Indulge in spacious coastal elegance with handcrafted furnishings, luxury bathroom, and private sun terrace.', 'resort-hotel'),
    ],
];

// Query Parameters
$default_checkin  = isset($_GET['check_in']) ? sanitize_text_field($_GET['check_in']) : date('Y-m-d');
$default_checkout = isset($_GET['check_out']) ? sanitize_text_field($_GET['check_out']) : date('Y-m-d', strtotime('+3 days'));
$default_adults   = isset($_GET['adults']) ? intval($_GET['adults']) : 1;
$default_children = isset($_GET['children']) ? intval($_GET['children']) : 0;
?>

<main id="primary" class="site-main knsl-search-page">

    <!-- Ambient Watercolor Splashes Background -->
    <div class="knsl-search-ambient-pat pat-left" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-search-ambient-pat pat-right" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

    <!-- 1. Header Banner (Title & Breadcrumbs) -->
    <section class="knsl-search-header-container">
        <div class="knsl-search-title-wrap">
            <h1 class="knsl-search-page-title"><?php esc_html_e('Search Availability', 'resort-hotel'); ?></h1>
        </div>
        <div class="knsl-search-breadcrumbs">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('HOME', 'resort-hotel'); ?></a>
            <span class="knsl-sep">&gt;</span>
            <span class="knsl-current"><?php esc_html_e('SEARCH AVAILABILITY', 'resort-hotel'); ?></span>
        </div>
    </section>

    <!-- 2. Main Search Card -->
    <section class="knsl-search-card-container">
        <div class="knsl-search-card">
            <form class="knsl-search-form" id="searchAvailabilityForm" action="<?php echo esc_url(home_url('/search-availability/')); ?>" method="GET">

                <!-- Check-in Date -->
                <div class="knsl-search-field-group">
                    <label for="searchCheckin" class="knsl-search-label"><?php esc_html_e('Check-in', 'resort-hotel'); ?></label>
                    <div class="knsl-search-input-wrap">
                        <input 
                            type="text" 
                            id="searchCheckin" 
                            name="check_in" 
                            class="knsl-search-input" 
                            placeholder="<?php esc_attr_e('Check-in Date', 'resort-hotel'); ?>"
                            value="<?php echo esc_attr($default_checkin); ?>"
                            required
                        >
                        <svg class="knsl-search-icon" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                </div>

                <!-- Check-out Date -->
                <div class="knsl-search-field-group">
                    <label for="searchCheckout" class="knsl-search-label"><?php esc_html_e('Check-out', 'resort-hotel'); ?></label>
                    <div class="knsl-search-input-wrap">
                        <input 
                            type="text" 
                            id="searchCheckout" 
                            name="check_out" 
                            class="knsl-search-input" 
                            placeholder="<?php esc_attr_e('Check-out Date', 'resort-hotel'); ?>"
                            value="<?php echo esc_attr($default_checkout); ?>"
                            required
                        >
                        <svg class="knsl-search-icon" viewBox="0 0 24 24">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                </div>

                <!-- Adults & Children Row -->
                <div class="knsl-search-grid-2">
                    <div class="knsl-search-field-group" style="margin-bottom:0;">
                        <label for="searchAdults" class="knsl-search-label"><?php esc_html_e('Adults', 'resort-hotel'); ?></label>
                        <div class="knsl-search-input-wrap">
                            <select id="searchAdults" name="adults" class="knsl-search-select">
                                <?php for ($i = 1; $i <= 6; $i++) : ?>
                                    <option value="<?php echo $i; ?>" <?php selected($default_adults, $i); ?>><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <svg class="knsl-search-select-arrow" viewBox="0 0 24 24">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>

                    <div class="knsl-search-field-group" style="margin-bottom:0;">
                        <label for="searchChildren" class="knsl-search-label"><?php esc_html_e('Children', 'resort-hotel'); ?></label>
                        <div class="knsl-search-input-wrap">
                            <select id="searchChildren" name="children" class="knsl-search-select">
                                <?php for ($i = 0; $i <= 4; $i++) : ?>
                                    <option value="<?php echo $i; ?>" <?php selected($default_children, $i); ?>><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <svg class="knsl-search-select-arrow" viewBox="0 0 24 24">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Centered Gold Search Button -->
                <div class="knsl-search-action">
                    <button type="submit" class="knsl-search-submit-btn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <span><?php esc_html_e('SEARCH', 'resort-hotel'); ?></span>
                    </button>
                </div>

            </form>
        </div>
    </section>

    <!-- 3. Available Rooms Section -->
    <section class="knsl-search-results-wrap" id="searchResultsSection">
        <div class="knsl-results-header">
            <div>
                <h2 class="knsl-results-heading"><?php esc_html_e('Available Accommodations', 'resort-hotel'); ?></h2>
                <span class="knsl-results-count" id="resultsCount"><?php echo count($rooms_catalog); ?> <?php esc_html_e('Available Rooms', 'resort-hotel'); ?></span>
            </div>
            <div class="knsl-results-filter-pills">
                <button type="button" class="knsl-results-pill-btn is-active" data-filter="all"><?php esc_html_e('All Rooms', 'resort-hotel'); ?></button>
                <button type="button" class="knsl-results-pill-btn" data-filter="business"><?php esc_html_e('Business', 'resort-hotel'); ?></button>
                <button type="button" class="knsl-results-pill-btn" data-filter="standard"><?php esc_html_e('Standard', 'resort-hotel'); ?></button>
                <button type="button" class="knsl-results-pill-btn" data-filter="suite"><?php esc_html_e('Suites', 'resort-hotel'); ?></button>
                <button type="button" class="knsl-results-pill-btn" data-filter="luxury"><?php esc_html_e('Luxury', 'resort-hotel'); ?></button>
            </div>
        </div>

        <div class="knsl-results-grid" id="searchResultsContainer">
            <?php foreach ($rooms_catalog as $slug => $room) : ?>
                <div class="knsl-result-card" 
                     data-slug="<?php echo esc_attr($slug); ?>" 
                     data-adults="<?php echo esc_attr($room['adults']); ?>"
                     data-category="<?php echo esc_attr($room['category']); ?>">
                    <div class="knsl-result-media">
                        <img src="<?php echo esc_url($room['image']); ?>" alt="<?php echo esc_attr($room['title']); ?>" loading="lazy">
                        <div class="knsl-result-price-badge">
                            &euro;<?php echo esc_html($room['price']); ?>
                            <span><?php esc_html_e('/ night', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <div class="knsl-result-body">
                        <h3 class="knsl-result-title">
                            <a href="<?php echo esc_url($room['url']); ?>"><?php echo esc_html($room['title']); ?></a>
                        </h3>
                        <div class="knsl-result-specs">
                            <span class="knsl-result-spec-item">
                                <svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <?php printf(esc_html__('Adults: %d', 'resort-hotel'), $room['adults']); ?>
                            </span>
                            <span class="knsl-result-spec-item">
                                <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><path d="M9 3v18"></path></svg>
                                <?php printf(esc_html__('Size: %s', 'resort-hotel'), $room['size']); ?>
                            </span>
                        </div>
                        <p style="font-size: 13px; line-height: 1.6; color: #5a8695; margin: 0 0 16px 0;">
                            <?php echo esc_html($room['description']); ?>
                        </p>
                        <div class="knsl-result-footer">
                            <a href="<?php echo esc_url($room['url']); ?>" class="knsl-result-link-btn">
                                <?php esc_html_e('VIEW DETAILS', 'resort-hotel'); ?> &rarr;
                            </a>
                            <a href="<?php echo esc_url($room['url']); ?>" class="knsl-result-book-btn">
                                <?php esc_html_e('BOOK NOW', 'resort-hotel'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- No Results Fallback -->
        <div class="knsl-no-results" id="knslNoResults" style="display: none;">
            <svg class="knsl-no-results-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                <line x1="8" y1="11" x2="14" y2="11"></line>
            </svg>
            <h3 class="knsl-no-results-title"><?php esc_html_e('No Accommodations Found', 'resort-hotel'); ?></h3>
            <p class="knsl-no-results-text"><?php esc_html_e('No rooms match your specific guest count or category filter. Try changing your search options.', 'resort-hotel'); ?></p>
            <button type="button" class="knsl-reset-search-btn" id="resetSearchBtn"><?php esc_html_e('Reset Search Filter', 'resort-hotel'); ?></button>
        </div>
    </section>

    <!-- 4. Call to Action Banner -->
    <section class="knsl-cta-section" id="cta" style="margin-top: 90px;">
        <div class="knsl-cta-container">
            <span class="knsl-cta-badge"><?php esc_html_e('CALL TO ACTION', 'resort-hotel'); ?></span>
            <h2 class="knsl-cta-title">
                <?php esc_html_e('Do you have any questions?', 'resort-hotel'); ?><br>
                <?php esc_html_e('We are available 24/7', 'resort-hotel'); ?>
            </h2>
            <div class="knsl-cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="knsl-cta-btn-primary">
                    <svg class="knsl-cta-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <span><?php esc_html_e('GET IN TOUCH', 'resort-hotel'); ?></span>
                </a>
                <a href="tel:+12345678" class="knsl-cta-btn-secondary">
                    <svg class="knsl-cta-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span>+1 234 5678</span>
                </a>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
