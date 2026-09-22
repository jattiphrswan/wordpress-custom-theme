<?php
/**
 * Template part for displaying the Customer Voices / Reviews Section
 * Replicating Kinsley Resort Customer Voices: Hear What They Say!
 * with pat5.png dotted world map background, 7-person team/avatar carousel,
 * cyan quote icon, reviewer name, platform, and prev/next controls.
 *
 * @package Resort_Hotel
 */

$reviews = [
    [
        'name'   => 'Sarah Newman',
        'source' => 'ENVATO MARKET',
        'avatar' => 'face1.jpg',
        'quote'  => 'An unforgettable stay at aquarelle! The beachfront location provided breathtaking views, and the hotel\'s blend of luxury and a relaxed atmosphere was perfect. The attentive staff and excellent amenities, including a refreshing pool and superb dining options, made my experience truly exceptional. aquarelle is a haven for those seeking relaxation with a touch of indulgence. Already looking forward to my next visit to this seaside paradise!'
    ],
    [
        'name'   => 'Emma Trueman',
        'source' => 'ENVATO MARKET',
        'avatar' => 'face2.jpg',
        'quote'  => 'From the moment we arrived, we were welcomed like family. The ocean-view suite was impeccably clean with thoughtful details, and watching the sunset from our balcony was pure magic. The culinary experience at the seaside restaurant surpassed all expectations!'
    ],
    [
        'name'   => 'David Miller',
        'source' => 'BOOKING.COM',
        'avatar' => 'face3.jpg',
        'quote'  => 'A truly five-star experience in Santa Barbara. The wellness spa, pristine cabanas, and private beach access made this the best vacation we have had in years. Highly recommended for couples looking for an intimate coastal getaway.'
    ],
    [
        'name'   => 'Sophia Clark',
        'source' => 'LUXURY TRAVEL BLOG',
        'avatar' => 'face4.jpg',
        'quote'  => 'The architectural beauty and coastal harmony here are unparalleled. Every amenity feels bespoke, from the heated infinity pool overlooking the cliffs to the artisan cocktails served at dusk. We will definitely return next summer!'
    ],
    [
        'name'   => 'Marcus Johnson',
        'source' => 'GOOGLE REVIEWS',
        'avatar' => 'face5.jpg',
        'quote'  => 'Outstanding hospitality and attention to detail. The concierge arranged private sailing and surfing lessons for our family. The beds were exceptionally comfortable and the breakfast buffet was world-class.'
    ],
    [
        'name'   => 'Oliver Bennett',
        'source' => 'TRAVEL & LEISURE',
        'avatar' => 'face6.jpg',
        'quote'  => 'Kinsley Resort is the epitome of relaxed luxury. Peaceful mornings with ocean breezes, refined interior styling, and incredible service from every staff member. An absolute must-visit destination in California.'
    ],
    [
        'name'   => 'Liam Wilson',
        'source' => 'EXPEDIA VERIFIED',
        'avatar' => 'face7.jpg',
        'quote'  => 'Exceeded every expectation. The tranquil gardens, stunning coastal trail walks, and evening fireside wine tastings created memories we will cherish forever. Seamless booking and flawless service throughout.'
    ]
];
?>

<section class="knsl-reviews-section" id="reviews">
    <div class="knsl-reviews-container">
        <!-- Floating Island Card with Rounded Corners -->
        <div class="knsl-reviews-card">
            <!-- Subtle Dotted World Map Background (pat5.png) -->
            <div class="knsl-reviews-map-bg" 
                 aria-hidden="true" 
                 style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat5.png'); ?>');">
            </div>

            <!-- Section Content -->
            <div class="knsl-reviews-inner">
                <!-- Header Badge & Title -->
                <div class="knsl-reviews-header">
                    <div class="knsl-reviews-badge-wrap">
                        <span class="knsl-reviews-badge"><?php esc_html_e('Reviews', 'resort-hotel'); ?></span>
                    </div>
                    <h2 class="knsl-reviews-title">
                        <?php esc_html_e('Customer Voices:', 'resort-hotel'); ?><br>
                        <?php esc_html_e('Hear What They Say!', 'resort-hotel'); ?>
                    </h2>
                </div>

                <!-- 7-Avatar Selector Row -->
                <div class="knsl-reviews-avatars-wrap" role="tablist" aria-label="<?php esc_attr_e('Customer Reviews Avatars', 'resort-hotel'); ?>">
                    <div class="knsl-reviews-avatars">
                        <?php foreach ($reviews as $index => $item) : ?>
                            <button type="button" 
                                    class="knsl-review-avatar-btn <?php echo $index === 0 ? 'active' : ''; ?>" 
                                    data-index="<?php echo esc_attr($index); ?>"
                                    role="tab"
                                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                    aria-label="<?php echo esc_attr($item['name'] . ' review'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team/' . $item['avatar']); ?>" 
                                     alt="<?php echo esc_attr($item['name']); ?>" 
                                     loading="lazy">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Testimonial Slider Stage with Prev/Next Controls -->
                <div class="knsl-reviews-stage">
                    <!-- Left Prev Arrow Button (Mint circle) -->
                    <button type="button" class="knsl-reviews-nav-btn knsl-nav-prev" id="knslReviewPrevBtn" aria-label="<?php esc_attr_e('Previous Review', 'resort-hotel'); ?>">
                        <svg viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"/>
                        </svg>
                    </button>

                    <!-- Active Review Content Box -->
                    <div class="knsl-reviews-content-box" id="knslReviewsContent">
                        <!-- Cyan Quotation Mark Icon -->
                        <div class="knsl-reviews-quote-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>

                        <!-- Reviewer Meta -->
                        <h3 class="knsl-review-author" id="knslReviewAuthor"><?php echo esc_html($reviews[0]['name']); ?></h3>
                        <div class="knsl-review-source" id="knslReviewSource"><?php echo esc_html($reviews[0]['source']); ?></div>

                        <!-- Review Quote Text -->
                        <p class="knsl-review-quote" id="knslReviewQuote"><?php echo esc_html($reviews[0]['quote']); ?></p>
                    </div>

                    <!-- Right Next Arrow Button (Gold circle) -->
                    <button type="button" class="knsl-reviews-nav-btn knsl-nav-next" id="knslReviewNextBtn" aria-label="<?php esc_attr_e('Next Review', 'resort-hotel'); ?>">
                        <svg viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Embedded Reviews Dataset for JavaScript Carousel -->
    <script type="application/json" id="knslReviewsData">
        <?php echo json_encode($reviews); ?>
    </script>
</section>
