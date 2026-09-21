<?php
/**
 * Template part for displaying the Services section ("Discover the touch of nature")
 * Replicating Kinsley Resort Hotel services layout with staggered cards and watercolor patterns.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-services-section" id="services">
    <!-- Background Watercolor Patterns -->
    <div class="knsl-pat-bg-splash" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>
    
    <!-- Floating Starfish Illustrations -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-pat-star star-top-left" aria-hidden="true">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-2.png'); ?>" alt="" class="knsl-pat-star star-bottom-right" aria-hidden="true">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-pat-star star-mid-right" aria-hidden="true">

    <div class="knsl-services-island">
        <div class="knsl-services-inner">
            <!-- Section Header -->
            <div class="knsl-services-header">
            <span class="knsl-subtitle-badge">Services</span>
            <h2 class="knsl-section-title">Discover the touch of nature</h2>
        </div>

        <!-- 4-Column Staggered Service Cards Grid -->
        <div class="knsl-services-grid">
            <!-- Card 1: Surfing -->
            <div class="knsl-service-col">
                <div class="knsl-ath-card">
                    <div class="knsl-cover-frame">
                        <a href="<?php echo esc_url(home_url('/services/surfing/')); ?>" class="knsl-card-link" aria-label="Surfing Service">
                            <img 
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv1-950x1425.jpg'); ?>" 
                                alt="Surfing" 
                                loading="lazy"
                            >
                        </a>
                        <div class="knsl-badge">
                            <span class="mphb-price">Free</span>
                        </div>
                    </div>
                    <div class="knsl-card-description">
                        <a href="<?php echo esc_url(home_url('/services/surfing/')); ?>" class="knsl-card-btn-link">
                            <h3 class="knsl-card-title">Surfing</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Beach Vacation (Offset Down) -->
            <div class="knsl-service-col knsl-stagger-down">
                <div class="knsl-ath-card">
                    <div class="knsl-cover-frame">
                        <a href="<?php echo esc_url(home_url('/services/beach-vacation/')); ?>" class="knsl-card-link" aria-label="Beach Vacation Service">
                            <img 
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv2-950x1267.jpg'); ?>" 
                                alt="Beach Vacation" 
                                loading="lazy"
                            >
                        </a>
                        <div class="knsl-badge knsl-badge-left">
                            <span class="mphb-price">&euro;9.99</span> / Per Day / Per Accommodation
                        </div>
                    </div>
                    <div class="knsl-card-description">
                        <a href="<?php echo esc_url(home_url('/services/beach-vacation/')); ?>" class="knsl-card-btn-link">
                            <h3 class="knsl-card-title">Beach Vacation</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Beach Restaurant -->
            <div class="knsl-service-col">
                <div class="knsl-ath-card">
                    <div class="knsl-cover-frame">
                        <a href="<?php echo esc_url(home_url('/services/beach-restaurant/')); ?>" class="knsl-card-link" aria-label="Beach Restaurant Service">
                            <img 
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv3-950x1273.jpg'); ?>" 
                                alt="Beach Restaurant" 
                                loading="lazy"
                            >
                        </a>
                        <div class="knsl-badge">
                            <span class="mphb-price">Free</span>
                        </div>
                    </div>
                    <div class="knsl-card-description">
                        <a href="<?php echo esc_url(home_url('/services/beach-restaurant/')); ?>" class="knsl-card-btn-link">
                            <h3 class="knsl-card-title">Beach Restaurant</h3>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4: Swimming Pools (Offset Down) -->
            <div class="knsl-service-col knsl-stagger-down">
                <div class="knsl-ath-card">
                    <div class="knsl-cover-frame">
                        <a href="<?php echo esc_url(home_url('/services/swimming-pools/')); ?>" class="knsl-card-link" aria-label="Swimming Pools Service">
                            <img 
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv4-950x1238.jpg'); ?>" 
                                alt="Swimming Pools" 
                                loading="lazy"
                            >
                        </a>
                        <div class="knsl-badge">
                            <span class="mphb-price">&euro;10</span> / Per Instance / Per Guest
                        </div>
                    </div>
                    <div class="knsl-card-description">
                        <a href="<?php echo esc_url(home_url('/services/swimming-pools/')); ?>" class="knsl-card-btn-link">
                            <h3 class="knsl-card-title">Swimming Pools</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Summary & CTA Action Bar -->
        <div class="knsl-services-bottom-bar">
            <p class="knsl-services-bottom-text">
                At Kinsley&#8217;s resort hotel in Goleta city, we are proud to offer a wide range of services designed to make your stay unforgettable. Your Comfort and Well-being Are Our Priority.
            </p>
            <div class="knsl-services-bottom-action">
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="knsl-btn-gold">
                    <span>Learn More</span>
                </a>
            </div>
        </div>
        </div>
    </div>
</section>
