<?php
/**
 * Template Name: Services Page
 * Description: Replicates Kinsley Resort Hotel "Our Services" page with 6 service cards.
 *
 * @package Resort_Hotel
 */

get_header(); ?>

<main id="primary" class="site-main knsl-services-page">

    <!-- Ambient Watercolor Splash Backdrops spanning across the page -->
    <div class="knsl-services-ambient-pat pat-left" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-services-ambient-pat pat-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-services-ambient-pat pat-bottom-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

    <!-- 1. Subheader Hero Banner ("Our Services") -->
    <section class="knsl-services-banner">
        <!-- Floating Starfish Accents -->
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-services-star star-top-center" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-services-star star-mid-left" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-services-star star-bottom-right" aria-hidden="true">

        <div class="knsl-services-banner-content">
            <h1 class="knsl-services-title"><?php esc_html_e('Our Services', 'resort-hotel'); ?></h1>
            <div class="knsl-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'resort-hotel'); ?></a>
                <span class="knsl-breadcrumbs-sep">&gt;</span>
                <span class="knsl-breadcrumbs-current"><?php esc_html_e('Services', 'resort-hotel'); ?></span>
            </div>
        </div>
    </section>

    <!-- 2. Services 6-Card Grid Island -->
    <section class="knsl-services-page-section">
        <div class="knsl-services-page-island">
            <div class="knsl-services-page-inner">

                <div class="knsl-services-grid-3col">
                    <!-- Card 1: Surfing -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Surfing Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv1-950x1425.jpg'); ?>" 
                                        alt="Surfing" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">Free</span>
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Surfing', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Beach Vacation -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Beach Vacation Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv2-950x1267.jpg'); ?>" 
                                        alt="Beach Vacation" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">&euro;9.99</span> / Per Day / Per Accommodation
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Beach Vacation', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Beach Restaurant -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Beach Restaurant Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv3-950x1273.jpg'); ?>" 
                                        alt="Beach Restaurant" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">Free</span>
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Beach Restaurant', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Swimming Pools -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Swimming Pools Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv4-950x1238.jpg'); ?>" 
                                        alt="Swimming Pools" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">&euro;30</span> / Per Instance / Per Guest
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Swimming Pools', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5: Spa Salon -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Spa Salon Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/service-5-950x1489.jpg'); ?>" 
                                        alt="Spa Salon" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">Free</span>
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Spa Salon', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6: Gym -->
                    <div class="knsl-service-card-item">
                        <div class="knsl-ath-card">
                            <div class="knsl-cover-frame">
                                <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-link" aria-label="Gym Service">
                                    <img 
                                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/service-6-950x1473.jpg'); ?>" 
                                        alt="Gym" 
                                        loading="lazy"
                                    >
                                </a>
                                <div class="knsl-badge">
                                    <span class="mphb-price">Free</span>
                                </div>
                                <div class="knsl-card-description">
                                    <a href="<?php echo esc_url(home_url('/service-single/')); ?>" class="knsl-card-btn-link">
                                        <h3 class="knsl-card-title"><?php esc_html_e('Gym', 'resort-hotel'); ?></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Summary & Contact Action Bar -->
                <div class="knsl-services-bottom-bar">
                    <p class="knsl-services-bottom-text">
                        <?php esc_html_e("At Kinsley's resort hotel in Goleta city, we are proud to offer a wide range of services designed to make your stay unforgettable. Your Comfort and Well-being Are Our Priority.", 'resort-hotel'); ?>
                    </p>
                    <div class="knsl-services-bottom-action">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="knsl-btn-gold">
                            <span><?php esc_html_e('Contact Us', 'resort-hotel'); ?></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
