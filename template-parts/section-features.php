<?php
/**
 * Template part for displaying the Features section ("Features that will make your vacation unforgettable")
 * Replicating Kinsley Resort Hotel 6-card feature grid with icons and ambient watercolor patterns.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-features-section" id="features">
    <!-- Ambient Watercolor Splash Backdrop on Right -->
    <div class="knsl-features-pat-bg" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <div class="knsl-features-inner">
        <!-- Section Header -->
        <div class="knsl-features-header">
            <span class="knsl-features-subtitle-badge"><?php esc_html_e('Features', 'resort-hotel'); ?></span>
            <h2 class="knsl-features-title"><?php esc_html_e('Features that will make your vacation unforgettable', 'resort-hotel'); ?></h2>
        </div>

        <!-- 6-Card Features Grid -->
        <div class="knsl-features-grid">
            <!-- Card 1: Beachfront Location -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 288 512">
                        <path d="M112 316.94v156.69l22.02 33.02c4.75 7.12 15.22 7.12 19.97 0L176 473.63V316.94c-10.39 1.92-21.06 3.06-32 3.06s-21.61-1.14-32-3.06zM144 0C64.47 0 0 64.47 0 144s64.47 144 144 144 144-64.47 144-144S223.53 0 144 0zm0 76c-37.5 0-68 30.5-68 68 0 6.62-5.38 12-12 12s-12-5.38-12-12c0-50.73 41.28-92 92-92 6.62 0 12 5.38 12 12s-5.38 12-12 12z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('Beachfront Location', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Our hotel is situated right on the beach, offering stunning ocean views and immediate access to the sandy shores.', 'resort-hotel'); ?></p>
            </div>

            <!-- Card 2: Luxury Accommodations -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 640 512">
                        <path d="M176 256c44.11 0 80-35.89 80-80s-35.89-80-80-80-80 35.89-80 80 35.89 80 80 80zm352-128H304c-8.84 0-16 7.16-16 16v144H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v352c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-48h512v48c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V240c0-61.86-50.14-112-112-112z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('Luxury Accommodations', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Experience comfort and style in our well-appointed rooms and suites, designed for a relaxing stay.', 'resort-hotel'); ?></p>
            </div>

            <!-- Card 3: On-Site Dining -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 512 512">
                        <path d="M464 256H48a48 48 0 0 0 0 96h416a48 48 0 0 0 0-96zm16 128H32a16 16 0 0 0-16 16v16a64 64 0 0 0 64 64h352a64 64 0 0 0 64-64v-16a16 16 0 0 0-16-16zM58.64 224h394.72c34.57 0 54.62-43.9 34.82-75.88C448 83.2 359.55 32.1 256 32c-103.54.1-192 51.2-232.18 116.11C4 180.09 24.07 224 58.64 224zM384 112a16 16 0 1 1-16 16 16 16 0 0 1 16-16zM256 80a16 16 0 1 1-16 16 16 16 0 0 1 16-16zm-128 32a16 16 0 1 1-16 16 16 16 0 0 1 16-16z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('On-Site Dining', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Enjoy a variety of culinary delights at our on-site restaurants, catering to different tastes and preferences.', 'resort-hotel'); ?></p>
            </div>

            <!-- Card 4: Recreational Facilities -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 576 512">
                        <path d="M546.2 9.7c-5.6-12.5-21.6-13-28.3-1.2C486.9 62.4 431.4 96 368 96h-80C182 96 96 182 96 288c0 7 .8 13.7 1.5 20.5C161.3 262.8 253.4 224 384 224c8.8 0 16 7.2 16 16s-7.2 16-16 16C132.6 256 26 410.1 2.4 468c-6.6 16.3 1.2 34.9 17.5 41.6 16.4 6.8 35-1.1 41.8-17.3 1.5-3.6 20.9-47.9 71.9-90.6 32.4 43.9 94 85.8 174.9 77.2C465.5 467.5 576 326.7 576 154.3c0-50.2-10.8-102.2-29.8-144.6z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('Recreational Facilities', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Our hotel offers a range of recreational activities, including water sports, swimming pools, and fitness centers.', 'resort-hotel'); ?></p>
            </div>

            <!-- Card 5: Spa and Wellness -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 576 512">
                        <path d="M568.25 192c-29.04.13-135.01 6.16-213.84 83-33.12 29.63-53.36 63.3-66.41 94.86-13.05-31.56-33.29-65.23-66.41-94.86-78.83-76.84-184.8-82.87-213.84-83-4.41-.02-7.79 3.4-7.75 7.82.23 27.92 7.14 126.14 88.77 199.3C172.79 480.94 256 480 288 480s115.19.95 199.23-80.88c81.64-73.17 88.54-171.38 88.77-199.3.04-4.42-3.34-7.84-7.75-7.82zM287.98 302.6c12.82-18.85 27.6-35.78 44.4-49.88 44.41-37.28 97.43-57.19 146.42-63.5-12.21 44.75-38.64 88.24-81.82 124.7-27.18 22.95-58.44 38.38-90.87 47.16-5.83-18.25-11.83-37.95-18.13-58.48zm-41.97 58.48c-32.43-8.78-63.69-24.21-90.87-47.16-43.18-36.46-69.61-79.95-81.82-124.7 48.99 6.31 102.01 26.22 146.42 63.5 16.8 14.1 31.58 31.03 44.4 49.88-6.3 20.53-12.3 40.23-18.13 58.48z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('Spa and Wellness', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Unwind and rejuvenate at our spa, where you can indulge in massages and treatments for ultimate relaxation.', 'resort-hotel'); ?></p>
            </div>

            <!-- Card 6: Surfing Lessons -->
            <div class="knsl-feature-card">
                <div class="knsl-feature-icon-box" aria-hidden="true">
                    <svg viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm173.696 119.559l-63.399 63.399c-10.987-18.559-26.67-34.252-45.255-45.255l63.399-63.399a218.396 218.396 0 0 1 45.255 45.255zM256 352c-53.019 0-96-42.981-96-96s42.981-96 96-96 96 42.981 96 96-42.981 96-96 96zM127.559 82.304l63.399 63.399c-18.559 10.987-34.252 26.67-45.255 45.255l-63.399-63.399a218.372 218.372 0 0 1 45.255-45.255zM82.304 384.441l63.399-63.399c10.987 18.559 26.67 34.252 45.255 45.255l-63.399 63.399a218.396 218.396 0 0 1-45.255-45.255zm302.137 45.255l-63.399-63.399c18.559-10.987 34.252-26.67 45.255-45.255l63.399 63.399a218.403 218.403 0 0 1-45.255 45.255z"/>
                    </svg>
                </div>
                <h3 class="knsl-feature-card-title"><?php esc_html_e('Surfing Lessons', 'resort-hotel'); ?></h3>
                <p class="knsl-feature-card-text"><?php esc_html_e('Our hotel offers surfing lessons and equipment rentals, allowing guests of all levels to enjoy the thrill of riding the waves.', 'resort-hotel'); ?></p>
            </div>
        </div>
    </div>
</section>
