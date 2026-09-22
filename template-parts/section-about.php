<?php
/**
 * Template part for displaying the About section ("Our goal and philosophy")
 * Replicating Kinsley Resort Hotel About layout with traveler visual,
 * ambient watercolor background, nautical starfish accents, and dual CTAs.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-about-section" id="about">
    <!-- Ambient Watercolor Splash Backdrop Behind Traveler -->
    <div class="knsl-about-pat-bg" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <!-- Floating Nautical Starfish / Stars -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" 
         alt="" 
         class="knsl-about-star star-left" 
         aria-hidden="true" 
         loading="lazy">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" 
         alt="" 
         class="knsl-about-star star-center" 
         aria-hidden="true" 
         loading="lazy">

    <div class="knsl-about-container">
        <!-- Left Media Column: Traveler Sitting on Suitcase -->
        <div class="knsl-about-media">
            <div class="knsl-about-image-wrap">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-01-950x1178.png'); ?>" 
                     alt="<?php esc_attr_e('Traveler relaxing at Kinsley Hotel', 'resort-hotel'); ?>" 
                     class="knsl-about-person-img"
                     loading="lazy">
            </div>
        </div>

        <!-- Right Content Column: Story, Philosophy & Actions -->
        <div class="knsl-about-content">
            <!-- Pill Subtitle Badge -->
            <div class="knsl-about-badge-wrap">
                <span class="knsl-about-badge"><?php esc_html_e('About Us', 'resort-hotel'); ?></span>
            </div>

            <!-- Main Heading -->
            <h2 class="knsl-about-title"><?php esc_html_e('Our goal and philosophy', 'resort-hotel'); ?></h2>

            <!-- Story Body Paragraphs -->
            <div class="knsl-about-text-group">
                <p class="knsl-about-text">
                    <?php esc_html_e('At Kinsley Hotel in Goleta, we not only invite you to enjoy the natural beauty and exciting activities of this coastal region, we also offer a unique experience.', 'resort-hotel'); ?>
                </p>
                <p class="knsl-about-text">
                    <?php esc_html_e('Located in the heart of Goleta in the exciting state of California, our hotel is more than a place to stay. Enjoy stunning views of the city skyline or the ocean from your private balcony. Our friendly staff provide exceptional services making you feel at home during your stay. Book now and make your next vacation unforgettable at our hotel.', 'resort-hotel'); ?>
                </p>
            </div>

            <!-- Dual Action Buttons -->
            <div class="knsl-about-actions">
                <!-- Primary CTA: Get in Touch -->
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="knsl-about-btn-gold">
                    <svg class="knsl-about-btn-icon" viewBox="0 0 512 512" aria-hidden="true">
                        <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/>
                    </svg>
                    <span><?php esc_html_e('Get in Touch', 'resort-hotel'); ?></span>
                </a>

                <!-- Secondary CTA: Book Now with Arrow -->
                <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="knsl-about-btn-link">
                    <svg class="knsl-about-link-icon" viewBox="0 0 448 512" aria-hidden="true">
                        <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                    </svg>
                    <span><?php esc_html_e('Book Now', 'resort-hotel'); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
