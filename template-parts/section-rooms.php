<?php
/**
 * Template part for displaying the Rooms & Accommodations section ("Our best rooms")
 * Replicating Kinsley Resort luxury room showcase grid with interactive category filtering.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-rooms-section" id="rooms">
    <!-- Ambient Watercolor Splash Backdrop on Right -->
    <div class="knsl-rooms-pat-bg" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <div class="knsl-rooms-inner">
        <!-- Section Header -->
        <div class="knsl-rooms-header">
            <span class="knsl-rooms-badge"><?php esc_html_e('Rooms', 'resort-hotel'); ?></span>
            <h2 class="knsl-rooms-title"><?php esc_html_e('Our best rooms', 'resort-hotel'); ?></h2>

            <!-- Filter Buttons -->
            <div class="knsl-rooms-filter" role="tablist" aria-label="Room categories filter">
                <button type="button" class="knsl-filter-btn is-active" data-filter="*" role="tab" aria-selected="true">
                    <?php esc_html_e('All Rooms', 'resort-hotel'); ?>
                </button>
                <button type="button" class="knsl-filter-btn" data-filter="economy" role="tab" aria-selected="false">
                    <?php esc_html_e('Economy', 'resort-hotel'); ?>
                </button>
                <button type="button" class="knsl-filter-btn" data-filter="luxe" role="tab" aria-selected="false">
                    <?php esc_html_e('Luxe', 'resort-hotel'); ?>
                </button>
                <button type="button" class="knsl-filter-btn" data-filter="standard" role="tab" aria-selected="false">
                    <?php esc_html_e('Standard', 'resort-hotel'); ?>
                </button>
            </div>
        </div>

        <!-- Rooms Grid -->
        <div class="knsl-rooms-grid">
            <!-- Room 1: Deluxe room (Luxe) -->
            <article class="knsl-room-card" data-category="luxe">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Deluxe room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-1-950x535.jpg'); ?>" alt="<?php esc_attr_e('Deluxe room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 4', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 95m²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Deluxe room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Single BOOK Button on Left -->
                        <div class="knsl-room-footer knsl-footer-left-btn">
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 2: Standard room (Economy) -->
            <article class="knsl-room-card" data-category="economy">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Standard room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-4-950x633.jpg'); ?>" alt="<?php esc_attr_e('Standard room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 50ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Standard room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;19</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 3: Double room (Economy) -->
            <article class="knsl-room-card" data-category="economy">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Double room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-6-950x633.jpg'); ?>" alt="<?php esc_attr_e('Double room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 35ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Double room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;39</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 4: Classic room (Standard) -->
            <article class="knsl-room-card" data-category="standard">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Classic room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-10-950x633.jpg'); ?>" alt="<?php esc_attr_e('Classic room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 3', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 42ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Classic room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;35</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 5: Triple classic room (Standard) -->
            <article class="knsl-room-card" data-category="standard">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Triple classic room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-7-950x633.jpg'); ?>" alt="<?php esc_attr_e('Triple classic room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 3', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 42ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Triple classic room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;79</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 6: Business class room (Luxe) -->
            <article class="knsl-room-card" data-category="luxe">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Business class room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-14-950x633.jpg'); ?>" alt="<?php esc_attr_e('Business class room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 35ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Business class room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;59</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 7: Royal class room (Luxe) -->
            <article class="knsl-room-card" data-category="luxe">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Royal class room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-15-950x633.jpg'); ?>" alt="<?php esc_attr_e('Royal class room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 50ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Royal class room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;119</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 8: Superior ocean room (Standard) -->
            <article class="knsl-room-card" data-category="standard">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Superior ocean room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-13-950x633.jpg'); ?>" alt="<?php esc_attr_e('Superior ocean room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 4', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 95ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Superior ocean room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;19</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Room 9: Economy classic room (Economy) -->
            <article class="knsl-room-card" data-category="economy">
                <div class="knsl-room-card-inner">
                    <div class="knsl-room-cover">
                        <a href="#booking" aria-label="<?php esc_attr_e('Economy classic room details', 'resort-hotel'); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/room/room-demo-3-950x633.jpg'); ?>" alt="<?php esc_attr_e('Economy classic room', 'resort-hotel'); ?>" loading="lazy">
                        </a>
                    </div>
                    <!-- Specs Strip -->
                    <div class="knsl-room-specs">
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M5.25,0 C3.522,0 2.1,1.355 2.1,3 L2.1,10.188 C0.885,10.605 0,11.706 0,13 L0,21 L5.25,21 L5.25,19 L15.75,19 L15.75,21 L21,21 L21,13 C21,11.706 20.115,10.605 18.9,10.188 L18.9,3 C18.9,1.355 17.478,0 15.75,0 L5.25,0 Z M5.25,2 L15.75,2 C16.332,2 16.8,2.445 16.8,3 L16.8,10 L14.7,10 L14.7,9 C14.7,7.355 13.278,6 11.55,6 L9.45,6 C7.722,6 6.3,7.355 6.3,9 L6.3,10 L4.2,10 L4.2,3 C4.2,2.445 4.668,2 5.25,2 Z M9.45,8 L11.55,8 C12.132,8 12.6,8.445 12.6,9 L12.6,10 L8.4,10 L8.4,9 C8.4,8.445 8.868,8 9.45,8 Z M3.15,12 L17.85,12 C18.432,12 18.9,12.445 18.9,13 L18.9,19 L17.85,19 L17.85,17 L3.15,17 L3.15,19 L2.1,19 L2.1,13 C2.1,12.445 2.568,12 3.15,12 Z"/>
                            </svg>
                            <span><?php esc_html_e('Adults: 2', 'resort-hotel'); ?></span>
                        </div>
                        <div class="knsl-room-spec-item">
                            <svg class="knsl-spec-icon" viewBox="0 0 21 21" aria-hidden="true">
                                <path d="M4.375,0 C1.969,0 0,1.969 0,4.375 L0,16.625 C0,19.031 1.969,21 4.375,21 L16.625,21 C19.031,21 21,19.031 21,16.625 L21,4.375 C21,1.969 19.031,0 16.625,0 L4.375,0 Z M4.375,1.75 L16.625,1.75 C18.086,1.75 19.25,2.914 19.25,4.375 L19.25,16.625 C19.25,18.086 18.086,19.25 16.625,19.25 L4.375,19.25 C2.914,19.25 1.75,18.086 1.75,16.625 L1.75,4.375 C1.75,2.914 2.914,1.75 4.375,1.75 Z M7.875,5.25 C6.436,5.25 5.25,6.436 5.25,7.875 L5.25,13.125 C5.25,14.564 6.436,15.75 7.875,15.75 L13.125,15.75 C14.564,15.75 15.75,14.564 15.75,13.125 L15.75,7.875 C15.75,6.436 14.564,5.25 13.125,5.25 L7.875,5.25 Z M7.875,7 L13.125,7 C13.618,7 14,7.382 14,7.875 L14,13.125 C14,13.618 13.618,14 13.125,14 L7.875,14 C7.382,14 7,13.618 7,13.125 L7,7.875 C7,7.382 7.382,7 7.875,7 Z"/>
                            </svg>
                            <span><?php esc_html_e('Size: 20ft²', 'resort-hotel'); ?></span>
                        </div>
                    </div>
                    <!-- Body Content -->
                    <div class="knsl-room-body">
                        <h3 class="knsl-room-card-title">
                            <a href="#booking"><?php esc_html_e('Economy classic room', 'resort-hotel'); ?></a>
                        </h3>
                        <p class="knsl-room-card-text">
                            <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Optio veniam quibusdam fugit...', 'resort-hotel'); ?>
                        </p>
                        <div class="knsl-room-divider"></div>
                        <!-- Footer: Price on Left, BOOK Button on Right -->
                        <div class="knsl-room-footer">
                            <div class="knsl-room-price">
                                <span class="knsl-price-amount">&euro;27</span>
                                <span class="knsl-price-period"><?php esc_html_e('per night', 'resort-hotel'); ?></span>
                            </div>
                            <a href="#booking" class="knsl-book-btn">
                                <svg class="knsl-book-icon" viewBox="0 0 18 23" aria-hidden="true">
                                    <path d="M0,0 L0,23 L1.594,21.813 L9,16.25 L16.406,21.813 L18,23 L18,0 L0,0 Z M2,2 L16,2 L16,19 L9.594,14.188 L9,13.75 L8.406,14.188 L2,19 L2,2 Z"/>
                                </svg>
                                <span><?php esc_html_e('Book', 'resort-hotel'); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Bottom Row: Description & View All Button -->
        <div class="knsl-rooms-bottom-bar">
            <p class="knsl-rooms-bottom-text">
                <?php esc_html_e('Our rooms are spaces carefully designed to provide you with comfort and luxury. Each of our rooms is designed to provide you with maximum comfort and style during your stay.', 'resort-hotel'); ?>
            </p>
            <div class="knsl-rooms-bottom-action">
                <a href="#accommodations" class="knsl-view-all-btn">
                    <span><?php esc_html_e('View All', 'resort-hotel'); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
