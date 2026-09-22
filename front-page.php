<?php get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Banner Section with 2-Slide Background Animation -->
    <section class="hero-banner-section">
        <!-- Background Slideshow -->
        <div class="hero-slideshow" aria-hidden="true">
            <div class="hero-slide active">
                <div class="hero-slide-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-i-1-1.jpg'); ?>');"></div>
            </div>
            <div class="hero-slide">
                <div class="hero-slide-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-i-2-1.jpg'); ?>');"></div>
            </div>
        </div>

        <div class="hero-banner-container">
            <div class="hero-left-content">
                <!-- Welcome Friend Badge -->
                <span class="hero-badge">Welcome Friend</span>

                <!-- Main Heading -->
                <h1 class="hero-title">
                    Life while traveling<br>is a pure dream.
                </h1>

                <!-- Floating Booking Bar -->
                <form class="hero-booking-bar" action="#search" method="get">
                    <!-- Check-in Field -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="checkin">Check-in</label>
                        <div class="booking-input-wrapper field-date" id="checkinWrapper">
                            <input type="text" id="checkin" name="checkin" class="booking-input" placeholder="Check-in Date" readonly>
                            <svg class="booking-field-icon" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                    </div>

                    <!-- Check-out Field -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="checkout">Check-out</label>
                        <div class="booking-input-wrapper field-date" id="checkoutWrapper">
                            <input type="text" id="checkout" name="checkout" class="booking-input" placeholder="Check-out Date" readonly>
                            <svg class="booking-field-icon" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                    </div>

                    <!-- Adults Field (Custom Select) -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="adultsInput">Adults</label>
                        <div class="booking-input-wrapper field-count knsl-custom-select" id="adultsSelect">
                            <input type="hidden" id="adultsInput" name="adults" value="1">
                            <div class="knsl-select-trigger" role="button" aria-haspopup="listbox" aria-expanded="false" tabindex="0">
                                <span class="knsl-select-val">1</span>
                                <svg class="knsl-select-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                            </div>
                            <div class="knsl-dropdown-menu" role="listbox">
                                <div class="knsl-dropdown-item active" data-value="1" role="option" aria-selected="true">1</div>
                                <div class="knsl-dropdown-item" data-value="2" role="option" aria-selected="false">2</div>
                                <div class="knsl-dropdown-item" data-value="3" role="option" aria-selected="false">3</div>
                                <div class="knsl-dropdown-item" data-value="4" role="option" aria-selected="false">4</div>
                                <div class="knsl-dropdown-item" data-value="4+" role="option" aria-selected="false">4+</div>
                            </div>
                        </div>
                    </div>

                    <!-- Children Field (Custom Select) -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="childrenInput">Children</label>
                        <div class="booking-input-wrapper field-count knsl-custom-select" id="childrenSelect">
                            <input type="hidden" id="childrenInput" name="children" value="0">
                            <div class="knsl-select-trigger" role="button" aria-haspopup="listbox" aria-expanded="false" tabindex="0">
                                <span class="knsl-select-val">0</span>
                                <svg class="knsl-select-chevron" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                            </div>
                            <div class="knsl-dropdown-menu" role="listbox">
                                <div class="knsl-dropdown-item active" data-value="0" role="option" aria-selected="true">0</div>
                                <div class="knsl-dropdown-item" data-value="1" role="option" aria-selected="false">1</div>
                                <div class="knsl-dropdown-item" data-value="2" role="option" aria-selected="false">2</div>
                                <div class="knsl-dropdown-item" data-value="3" role="option" aria-selected="false">3</div>
                                <div class="knsl-dropdown-item" data-value="4" role="option" aria-selected="false">4</div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="booking-submit-btn" aria-label="Search Rooms">
                        <svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Slide Indicators -->
        <div class="hero-slider-pagination" aria-label="Hero Slides">
            <button class="hero-dot active" aria-label="Slide 1"></button>
            <button class="hero-dot" aria-label="Slide 2"></button>
        </div>

        <!-- Soft Bottom Curve Transition -->
        <div class="hero-bottom-curve"></div>
    </section>

    <!-- Services & Touch of Nature Section -->
    <?php get_template_part('template-parts/section-services'); ?>

    <!-- Features Section -->
    <?php get_template_part('template-parts/section-features'); ?>

    <!-- About Section ("Our goal and philosophy") -->
    <?php get_template_part('template-parts/section-about'); ?>

    <!-- Rooms & Accommodations Section -->
    <?php get_template_part('template-parts/section-rooms'); ?>

    

    <!-- Benefits Section ("Why more than a million visitors chose us") -->
    <?php get_template_part('template-parts/section-benefits'); ?>

    <!-- Customer Voices & Reviews Section ("Hear What They Say!") -->
    <?php get_template_part('template-parts/section-reviews'); ?>

    <!-- Travel Blog Section ("Latest blog publications") -->
    <?php get_template_part('template-parts/section-blog'); ?>

    <!-- Call to Action Section -->
    <?php get_template_part('template-parts/section-cta'); ?>
</main>

<?php get_footer(); ?>
