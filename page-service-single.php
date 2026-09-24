<?php
/**
 * Template Name: Service Single Page
 * Description: Replicates Kinsley Resort Single Service page (Surfing, Swimming Pools, Beach Restaurant, etc.)
 *
 * @package Resort_Hotel
 */

get_header();

// 1. Comprehensive Services Catalog
$services_catalog = [
    'surfing' => [
        'title'        => __('Surfing', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/serv1-950x1425.jpg',
        'badge'        => __('Free', 'resort-hotel'),
        'description'  => [
            __("At our hotel we are offering our accommodations choices, including guest room, swimming pools, and beach vacation, situated and adjacent to these services are a grocery store, swimming pool and restaurant with diverse attractions. Our hotel offers surfing lessons and equipment rentals, allowing guests of all levels to enjoy the thrill of riding the waves.", 'resort-hotel'),
            __("Experience comfort and style in our well-appointed rooms and suites, designed for your every stay. Enjoy a variety of culinary delights at our on-site restaurant, catering to all taste buds and preferences. Our hotel is situated right on the beach, offering stunning ocean views and immediate access to the sandy shores.", 'resort-hotel'),
            __("Our reception team is available 24/7 to answer your questions, make reservations and ensure your stay is seamless. So everyone who have a high level of guest satisfaction, demonstrating our commitment to service excellence.", 'resort-hotel'),
        ],
        'features'     => [
            [
                'title' => __('Beachfront Location', 'resort-hotel'),
                'icon'  => 'location',
            ],
            [
                'title' => __('Luxury Accommodations', 'resort-hotel'),
                'icon'  => 'bed',
            ],
            [
                'title' => __('On-Site Dining', 'resort-hotel'),
                'icon'  => 'dining',
            ],
            [
                'title' => __('Recreational Facilities', 'resort-hotel'),
                'icon'  => 'activity',
            ],
            [
                'title' => __('Spa and Wellness', 'resort-hotel'),
                'icon'  => 'spa',
            ],
            [
                'title' => __('Surfing Lessons', 'resort-hotel'),
                'icon'  => 'surfing',
            ],
        ],
        'faqs'         => [
            [
                'q' => __('What skill levels are the surfing lessons suitable for?', 'resort-hotel'),
                'a' => __('Our surfing lessons are tailored for all experience levels, from absolute beginners catching their first wave to intermediate surfers looking to refine their technique. Certified professional instructors provide personalized guidance in small groups.', 'resort-hotel'),
            ],
            [
                'q' => __('Is surfing equipment included in the lesson?', 'resort-hotel'),
                'a' => __('Yes! High-quality surfboards, rash guards, wetsuits, and safety gear are all included with every booked lesson. Equipment is also available for independent rental throughout your stay.', 'resort-hotel'),
            ],
            [
                'q' => __('What is the best time of day for surfing lessons?', 'resort-hotel'),
                'a' => __('Morning sessions typically offer the cleanest wave conditions and gentle offshore winds. We schedule sessions around tide and swell forecasts to ensure optimal conditions.', 'resort-hotel'),
            ],
            [
                'q' => __('Do I need to make a reservation in advance?', 'resort-hotel'),
                'a' => __('We strongly recommend booking at least 24 hours in advance to guarantee instructor availability and optimal tidal timing for your session.', 'resort-hotel'),
            ],
        ],
    ],
    'swimming-pools' => [
        'title'        => __('Swimming Pools', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/serv4-950x1238.jpg',
        'badge'        => __('€30 / Per Instance', 'resort-hotel'),
        'description'  => [
            __("Dive into absolute relaxation at our pristine resort swimming pools. Designed with crystal-clear waters, heated infinity edges, and panoramic ocean vistas, our pools offer an exquisite oasis under the sun.", 'resort-hotel'),
            __("Unwind on plush poolside cabanas with complimentary towel service, refreshing tropical cocktails, and light bites served straight from the pool bar. Dedicated family areas and quiet adult-only zones cater to every desire.", 'resort-hotel'),
            __("Lifeguards and poolside concierges ensure a safe and pampered experience throughout the day and evening sunset swim sessions.", 'resort-hotel'),
        ],
        'features'     => [
            ['title' => __('Heated Infinity Pool', 'resort-hotel'), 'icon' => 'activity'],
            ['title' => __('Poolside Cabana Service', 'resort-hotel'), 'icon' => 'bed'],
            ['title' => __('Cocktail Pool Bar', 'resort-hotel'), 'icon' => 'dining'],
            ['title' => __('Adults & Family Zones', 'resort-hotel'), 'icon' => 'location'],
            ['title' => __('Spa Hydrotherapy', 'resort-hotel'), 'icon' => 'spa'],
            ['title' => __('Sunset Evening Sessions', 'resort-hotel'), 'icon' => 'surfing'],
        ],
        'faqs'         => [
            [
                'q' => __('What are the swimming pool opening hours?', 'resort-hotel'),
                'a' => __('The resort pools are open daily from 7:00 AM until 10:00 PM. Evening swim sessions feature ambient underwater lighting and poolside music.', 'resort-hotel'),
            ],
            [
                'q' => __('Are cabanas available for reservation?', 'resort-hotel'),
                'a' => __('Yes, private poolside cabanas can be reserved via the concierge desk or online booking with optional champagne and fresh fruit amenities.', 'resort-hotel'),
            ],
        ],
    ],
    'beach-restaurant' => [
        'title'        => __('Beach Restaurant', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/serv3-950x1273.jpg',
        'badge'        => __('Free Entry', 'resort-hotel'),
        'description'  => [
            __("Savor exquisite culinary creations with the soft sea breeze and the sound of waves lapping against the shore. Our beachfront restaurant blends locally caught seafood with artisanal Mediterranean flavors.", 'resort-hotel'),
            __("Open for sunrise breakfast, leisurely beach lunches, and romantic candlelit dinners under the stars. Pair every dish with award-winning vintages curated by our master sommelier.", 'resort-hotel'),
            __("Private beachfront tables and custom event catering are available upon request to celebrate your most memorable milestones.", 'resort-hotel'),
        ],
        'features'     => [
            ['title' => __('Oceanfront Terrace', 'resort-hotel'), 'icon' => 'location'],
            ['title' => __('Fresh Catch of the Day', 'resort-hotel'), 'icon' => 'dining'],
            ['title' => __('Curated Wine Cellar', 'resort-hotel'), 'icon' => 'activity'],
            ['title' => __('Private Sunset Dinners', 'resort-hotel'), 'icon' => 'bed'],
            ['title' => __('Live Acoustic Sessions', 'resort-hotel'), 'icon' => 'spa'],
            ['title' => __('Seasonal Farm-to-Table', 'resort-hotel'), 'icon' => 'surfing'],
        ],
        'faqs'         => [
            [
                'q' => __('Do I need a reservation for dinner?', 'resort-hotel'),
                'a' => __('While walk-ins are welcome for lunch, reservations are highly recommended for dinner, particularly for beachfront sunset seating.', 'resort-hotel'),
            ],
            [
                'q' => __('Are vegetarian and vegan options available?', 'resort-hotel'),
                'a' => __('Yes, our executive chef prepares comprehensive plant-based and gluten-free menus crafted with fresh organic produce.', 'resort-hotel'),
            ],
        ],
    ],
    'beach-vacation' => [
        'title'        => __('Beach Vacation', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/serv2-950x1267.jpg',
        'badge'        => __('€9.99 / Per Day', 'resort-hotel'),
        'description'  => [
            __("Embrace the quintessential coastal escape with our tailored beach vacation packages. Direct access to golden sands, private loungers, and warm ocean breezes make each moment effortlessly restful.", 'resort-hotel'),
            __("Enjoy paddleboarding, beach volleyball, romantic sunset strolls, and beachfront bonfire evenings with roasted marshmallows and chilled drinks.", 'resort-hotel'),
            __("Our dedicated beach staff handles sunbeds, umbrellas, and refreshingly cold coconut drinks while you simply unwind.", 'resort-hotel'),
        ],
        'features'     => [
            ['title' => __('Private Beach Access', 'resort-hotel'), 'icon' => 'location'],
            ['title' => __('Complimentary Loungers', 'resort-hotel'), 'icon' => 'bed'],
            ['title' => __('Beachside Beverage Bar', 'resort-hotel'), 'icon' => 'dining'],
            ['title' => __('Water Sports Equipment', 'resort-hotel'), 'icon' => 'activity'],
            ['title' => __('Sunset Bonfire Events', 'resort-hotel'), 'icon' => 'spa'],
            ['title' => __('Daily Beach Yoga', 'resort-hotel'), 'icon' => 'surfing'],
        ],
        'faqs'         => [
            [
                'q' => __('Is beach equipment provided?', 'resort-hotel'),
                'a' => __('Yes, umbrellas, beach towels, plush loungers, and paddleboards are provided to all resort guests.', 'resort-hotel'),
            ],
        ],
    ],
    'spa-salon' => [
        'title'        => __('Spa Salon', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/service-5-950x1489.jpg',
        'badge'        => __('Free Access', 'resort-hotel'),
        'description'  => [
            __("Rejuvenate body, mind, and spirit at our full-service holistic wellness spa. Indulge in therapeutic ocean mineral massages, aromatherapy, and restorative botanical facial rituals.", 'resort-hotel'),
            __("Our thermal suite features steam rooms, Finnish saunas, herbal plunge pools, and tranquility relaxation lounges designed to melt away all tension.", 'resort-hotel'),
            __("Consult with our wellness experts for personalized therapy plans and natural skincare treatments.", 'resort-hotel'),
        ],
        'features'     => [
            ['title' => __('Aromatherapy Massages', 'resort-hotel'), 'icon' => 'spa'],
            ['title' => __('Thermal Steam & Sauna', 'resort-hotel'), 'icon' => 'bed'],
            ['title' => __('Organic Skincare Rituals', 'resort-hotel'), 'icon' => 'activity'],
            ['title' => __('Hydrotherapy Baths', 'resort-hotel'), 'icon' => 'location'],
            ['title' => __('Herbal Teas & Elixirs', 'resort-hotel'), 'icon' => 'dining'],
            ['title' => __('Private Treatment Suites', 'resort-hotel'), 'icon' => 'surfing'],
        ],
        'faqs'         => [
            [
                'q' => __('How far in advance should I book spa treatments?', 'resort-hotel'),
                'a' => __('We recommend booking appointments at least 24-48 hours in advance to ensure your preferred time slot and therapist.', 'resort-hotel'),
            ],
        ],
    ],
    'gym' => [
        'title'        => __('Gym', 'resort-hotel'),
        'image'        => get_template_directory_uri() . '/assets/images/ser/service-6-950x1473.jpg',
        'badge'        => __('Free Access', 'resort-hotel'),
        'description'  => [
            __("Maintain your vitality with our state-of-the-art fitness center overlooking lush tropical gardens and coastal panoramas. Equipped with premium Technogym cardio machines, free weights, and functional strength zones.", 'resort-hotel'),
            __("Join daily group classes including HIIT, morning mobility, Pilates, and sunset ocean yoga led by certified instructors.", 'resort-hotel'),
            __("Personal training sessions, heart-rate monitors, and chilled towel amenities are available around the clock.", 'resort-hotel'),
        ],
        'features'     => [
            ['title' => __('24/7 Access for Guests', 'resort-hotel'), 'icon' => 'activity'],
            ['title' => __('Technogym Cardio Suite', 'resort-hotel'), 'icon' => 'surfing'],
            ['title' => __('Free Weights & Kettlebells', 'resort-hotel'), 'icon' => 'bed'],
            ['title' => __('Pilates & Yoga Studio', 'resort-hotel'), 'icon' => 'spa'],
            ['title' => __('Personal Training Staff', 'resort-hotel'), 'icon' => 'location'],
            ['title' => __('Chilled Towels & Nutrition', 'resort-hotel'), 'icon' => 'dining'],
        ],
        'faqs'         => [
            [
                'q' => __('Is the gym open 24 hours?', 'resort-hotel'),
                'a' => __('Yes, the fitness center is accessible 24/7 using your room key card.', 'resort-hotel'),
            ],
        ],
    ],
];

// 2. Identify Current Service
$service_key = 'surfing';
if (isset($_GET['service']) && array_key_exists(sanitize_key($_GET['service']), $services_catalog)) {
    $service_key = sanitize_key($_GET['service']);
} elseif (is_singular('service')) {
    $post_slug = get_post_field('post_name', get_the_ID());
    if (array_key_exists($post_slug, $services_catalog)) {
        $service_key = $post_slug;
    }
}

$current = $services_catalog[$service_key];

// If viewed as single post with custom post content/thumbnail
if (is_singular('service')) {
    if (get_the_title()) {
        $current['title'] = get_the_title();
    }
    if (has_post_thumbnail()) {
        $current['image'] = get_the_post_thumbnail_url(get_the_ID(), 'full');
    }
}
?>

<main id="primary" class="site-main knsl-single-service-page">

    <!-- Ambient Watercolor Splash Backdrops spanning across the page -->
    <div class="knsl-services-ambient-pat pat-left" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-services-ambient-pat pat-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-services-ambient-pat pat-bottom-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

    <!-- Floating Starfish Accents -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-services-star star-top-center" aria-hidden="true">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-services-star star-mid-left" aria-hidden="true">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-services-star star-bottom-right" aria-hidden="true">

    <!-- 1. Subheader Hero / Breadcrumb Bar ("Surfing" | HOME > SERVICES > SURFING) -->
    <section class="knsl-single-service-banner">
        <div class="knsl-single-banner-inner">
            <h1 class="knsl-single-service-title"><?php echo esc_html($current['title']); ?></h1>
            <div class="knsl-single-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'resort-hotel'); ?></a>
                <span class="knsl-breadcrumbs-sep">&gt;</span>
                <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'resort-hotel'); ?></a>
                <span class="knsl-breadcrumbs-sep">&gt;</span>
                <span class="knsl-breadcrumbs-current"><?php echo esc_html(strtoupper($current['title'])); ?></span>
            </div>
        </div>
    </section>

    <!-- 2. Main Two-Column Service Content Island -->
    <section class="knsl-single-service-section">
        <div class="knsl-single-service-container">
            <div class="knsl-single-service-layout">

                <!-- Left Column: Featured Image, Description, Key features & FAQ -->
                <div class="knsl-single-main-col">

                    <!-- Featured Hero Image -->
                    <div class="knsl-single-featured-wrap">
                        <img 
                            src="<?php echo esc_url($current['image']); ?>" 
                            alt="<?php echo esc_attr($current['title']); ?>" 
                            class="knsl-single-featured-img"
                        >
                    </div>

                    <!-- Description of the service -->
                    <div class="knsl-single-desc-block">
                        <h2 class="knsl-single-heading"><?php esc_html_e('Description of the service', 'resort-hotel'); ?></h2>
                        <?php if (is_singular('service') && get_the_content()) : ?>
                            <div class="knsl-single-text">
                                <?php the_content(); ?>
                            </div>
                        <?php else : ?>
                            <?php foreach ($current['description'] as $p) : ?>
                                <p class="knsl-single-text"><?php echo esc_html($p); ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Key features 6-Item Grid -->
                    <div class="knsl-single-features-block">
                        <h2 class="knsl-single-heading"><?php esc_html_e('Key features', 'resort-hotel'); ?></h2>
                        <div class="knsl-single-features-grid">
                            <?php foreach ($current['features'] as $feat) : ?>
                                <div class="knsl-single-feature-card">
                                    <div class="knsl-single-feature-icon" aria-hidden="true">
                                        <?php if ($feat['icon'] === 'location') : ?>
                                            <!-- Beachfront Location Pin -->
                                            <svg viewBox="0 0 24 24"><path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <?php elseif ($feat['icon'] === 'bed') : ?>
                                            <!-- Luxury Bed -->
                                            <svg viewBox="0 0 24 24"><path d="M2 19h20M2 15h20M2 11h20M6 11V7a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v4"/><rect x="5" y="7" width="4" height="4" rx="1"/></svg>
                                        <?php elseif ($feat['icon'] === 'dining') : ?>
                                            <!-- On-Site Dining Cloche/Plate -->
                                            <svg viewBox="0 0 24 24"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                                        <?php elseif ($feat['icon'] === 'activity') : ?>
                                            <!-- Recreational Leaf/Activity -->
                                            <svg viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                                        <?php elseif ($feat['icon'] === 'spa') : ?>
                                            <!-- Spa & Wellness Lotus -->
                                            <svg viewBox="0 0 24 24"><path d="M12 3c-1.5 3-4 6-4 9a4 4 0 0 0 8 0c0-3-2.5-6-4-9Z"/><path d="M4 14c2.5-.5 5 1 6.5 3-1.5 2-4 2.5-6.5 1-2.5-1.5-2.5-3.5 0-4Z"/><path d="M20 14c-2.5-.5-5 1-6.5 3 1.5 2 4 2.5 6.5 1 2.5-1.5 2.5-3.5 0-4Z"/></svg>
                                        <?php else : ?>
                                            <!-- Surfing / Lifebuoy Ring -->
                                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><path d="m4.93 4.93 4.24 4.24M14.83 14.83l4.24 4.24M14.83 9.17l4.24-4.24M4.93 19.07l4.24-4.24"/></svg>
                                        <?php endif; ?>
                                    </div>
                                    <span class="knsl-single-feature-label"><?php echo esc_html($feat['title']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="knsl-single-faq-block">
                        <h2 class="knsl-single-heading"><?php esc_html_e('FAQ', 'resort-hotel'); ?></h2>
                        <div class="knsl-single-faq">
                            <?php foreach ($current['faqs'] as $idx => $faq) : ?>
                                <div class="knsl-faq-item <?php echo $idx === 0 ? 'is-active' : ''; ?>">
                                    <button type="button" class="knsl-faq-header" aria-expanded="<?php echo $idx === 0 ? 'true' : 'false'; ?>">
                                        <span class="knsl-faq-title"><?php echo esc_html($faq['q']); ?></span>
                                        <span class="knsl-faq-toggle-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="knsl-faq-body">
                                        <p class="knsl-faq-content"><?php echo esc_html($faq['a']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Sidebar ("Other services") -->
                <aside class="knsl-single-sidebar-col">
                    <div class="knsl-sidebar-widget">
                        <h3 class="knsl-sidebar-title"><?php esc_html_e('Other services', 'resort-hotel'); ?></h3>
                        <div class="knsl-other-services-list">
                            <?php 
                            $count = 0;
                            foreach ($services_catalog as $slug => $service) : 
                                if ($slug === $service_key) continue;
                                if ($count >= 4) break;
                                $count++;
                                $single_link = add_query_arg('service', $slug, home_url('/service-single/'));
                            ?>
                                <a href="<?php echo esc_url($single_link); ?>" class="knsl-other-service-card">
                                    <img 
                                        src="<?php echo esc_url($service['image']); ?>" 
                                        alt="<?php echo esc_attr($service['title']); ?>" 
                                        class="knsl-other-service-thumb"
                                        loading="lazy"
                                    >
                                    <h4 class="knsl-other-service-title"><?php echo esc_html($service['title']); ?></h4>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    <!-- 3. Call to Action Banner ("Do you have any questions? We are available 24/7") -->
    <?php 
    get_template_part('template-parts/section', 'cta', [
        'badge'        => __('NEED TO TALK TO US', 'resort-hotel'),
        'title_line1'  => __('Do you have any questions?', 'resort-hotel'),
        'title_line2'  => __('We are available 24/7', 'resort-hotel'),
        'btn1_text'    => __('GET IN TOUCH', 'resort-hotel'),
        'btn1_url'     => home_url('/contact/'),
        'btn2_text'    => '+1 234 5678',
        'btn2_url'     => 'tel:+12345678',
        'btn2_type'    => 'phone',
    ]); 
    ?>

    <!-- 4. Rooms Carousel Section ("DISCOVER" / "We recommend") -->
    <?php 
    get_template_part('template-parts/section', 'rooms-carousel', [
        'badge' => __('DISCOVER', 'resort-hotel'),
        'title' => __('We recommend', 'resort-hotel'),
    ]); 
    ?>

</main>

<?php get_footer(); ?>
