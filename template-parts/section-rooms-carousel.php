<?php
/**
 * Template part for displaying the Rooms Carousel section ("Our best rooms")
 * Replicates Kinsley Resort 4-card carousel slider with navigation arrows and counter.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-rooms-carousel-section" id="rooms-carousel">
    <!-- Ambient Watercolor Splash Backdrop on Right -->
    <div class="knsl-rooms-pat-bg" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <div class="knsl-rooms-carousel-container">
        <!-- Section Header -->
        <div class="knsl-rooms-header">
            <span class="knsl-rooms-badge"><?php echo esc_html(!empty($args['badge']) ? $args['badge'] : __('Rooms', 'resort-hotel')); ?></span>
            <h2 class="knsl-rooms-title"><?php echo esc_html(!empty($args['title']) ? $args['title'] : __('Our best rooms', 'resort-hotel')); ?></h2>
        </div>

        <!-- Carousel Wrapper & Track -->
        <div class="knsl-rooms-carousel-wrapper">
            <div class="knsl-rooms-carousel-track" id="knslRoomsCarouselTrack">

                <!-- Room 1: Economy classic room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Economy classic room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-1-950x535.jpg'); ?>" alt="<?php esc_attr_e('Economy classic room', 'resort-hotel'); ?>">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 26ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Economy classic room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;27</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 2: Triple classic room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Triple classic room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-7-950x633.jpg'); ?>" alt="<?php esc_attr_e('Triple classic room', 'resort-hotel'); ?>">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 3', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 42ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Triple classic room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;79</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 3: Standard room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Standard room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-4-950x633.jpg'); ?>" alt="<?php esc_attr_e('Standard room', 'resort-hotel'); ?>">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 50ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Standard room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;19</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 4: Double room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Double room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-6-950x633.jpg'); ?>" alt="<?php esc_attr_e('Double room', 'resort-hotel'); ?>">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 35ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Double room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;39</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 5: Classic room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Classic room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-10-950x633.jpg'); ?>" alt="<?php esc_attr_e('Classic room', 'resort-hotel'); ?>" loading="lazy">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 3', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 42ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Classic room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;35</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 6: Business class room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Business class room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-14-950x633.jpg'); ?>" alt="<?php esc_attr_e('Business class room', 'resort-hotel'); ?>" loading="lazy">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 35ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Business class room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;59</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 7: Royal class room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Royal class room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-15-950x633.jpg'); ?>" alt="<?php esc_attr_e('Royal class room', 'resort-hotel'); ?>" loading="lazy">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 50ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Royal class room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;119</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Room 8: Superior ocean room -->
                <article class="knsl-carousel-card">
                    <div class="knsl-carousel-card-inner">
                        <div class="knsl-carousel-card-cover">
                            <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" aria-label="<?php esc_attr_e('Superior ocean room', 'resort-hotel'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-13-950x633.jpg'); ?>" alt="<?php esc_attr_e('Superior ocean room', 'resort-hotel'); ?>" loading="lazy">
                            </a>
                        </div>
                        <div class="knsl-carousel-specs">
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                                </svg>
                                <span><?php esc_html_e('Adults: 4', 'resort-hotel'); ?></span>
                            </div>
                            <div class="knsl-carousel-spec-item">
                                <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                    <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                                </svg>
                                <span><?php esc_html_e('Size: 95ft²', 'resort-hotel'); ?></span>
                            </div>
                        </div>
                        <div class="knsl-carousel-card-body">
                            <h3 class="knsl-carousel-card-title">
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>"><?php esc_html_e('Superior ocean room', 'resort-hotel'); ?></a>
                            </h3>
                            <p class="knsl-carousel-card-text">
                                <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit aspernatur...', 'resort-hotel'); ?>
                            </p>
                            <div class="knsl-carousel-card-footer">
                                <div class="knsl-carousel-price">
                                    <span class="knsl-price-val">&euro;19</span>
                                    <span class="knsl-price-lbl"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                                </div>
                                <a href="<?php echo esc_url(home_url('/accommodation/standard-room/')); ?>" class="knsl-carousel-book-btn">
                                    <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                        <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                    </svg>
                                    <span><?php esc_html_e('BOOK', 'resort-hotel'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>

        <!-- Carousel Navigation Controls Bar -->
        <div class="knsl-rooms-carousel-controls">
            <!-- Pagination Counter (e.g. 1 / 2) -->
            <div class="knsl-rooms-carousel-counter">
                <span class="knsl-counter-current" id="knslRoomsCurrentPage">1</span>
                <span class="knsl-counter-sep">/</span>
                <span class="knsl-counter-total" id="knslRoomsTotalPages">2</span>
            </div>

            <!-- Arrow Navigation Buttons -->
            <div class="knsl-rooms-carousel-nav">
                <button type="button" class="knsl-carousel-arrow knsl-arrow-prev" id="knslRoomsPrevBtn" aria-label="<?php esc_attr_e('Previous rooms', 'resort-hotel'); ?>">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </button>
                <button type="button" class="knsl-carousel-arrow knsl-arrow-next" id="knslRoomsNextBtn" aria-label="<?php esc_attr_e('Next rooms', 'resort-hotel'); ?>">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>
