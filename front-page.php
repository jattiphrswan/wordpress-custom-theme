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
                        <div class="booking-input-wrapper field-date">
                            <input type="text" id="checkin" name="checkin" class="booking-input" placeholder="Check-in Date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
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
                        <div class="booking-input-wrapper field-date">
                            <input type="text" id="checkout" name="checkout" class="booking-input" placeholder="Check-out Date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'">
                            <svg class="booking-field-icon" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                    </div>

                    <!-- Adults Field -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="adults">Adults</label>
                        <div class="booking-input-wrapper field-count">
                            <select id="adults" name="adults" class="booking-input booking-select">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4+</option>
                            </select>
                            <svg class="booking-field-icon" viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Children Field -->
                    <div class="booking-field-group">
                        <label class="booking-label" for="children">Children</label>
                        <div class="booking-input-wrapper field-count">
                            <select id="children" name="children" class="booking-input booking-select">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3+</option>
                            </select>
                            <svg class="booking-field-icon" viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
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

    <!-- Rooms & Accommodations Section -->
    <?php get_template_part('template-parts/section-rooms'); ?>
</main>

<?php get_footer(); ?>
