<?php
/**
 * Template part for displaying the Travel Blog section ("Latest blog publications")
 * Replicating Kinsley Resort Hotel 3-column blog card grid, author/date meta bars,
 * post excerpts, dotted dividers, and bottom travel tips summary with VIEW ALL button.
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-blog-section" id="blog">
    <!-- Ambient Watercolor Splash Backdrop on Top-Right -->
    <div class="knsl-blog-pat-bg" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <div class="knsl-blog-inner">
        <!-- Section Header -->
        <div class="knsl-blog-header">
            <span class="knsl-blog-badge"><?php esc_html_e('Our Blog', 'resort-hotel'); ?></span>
            <h2 class="knsl-blog-title"><?php esc_html_e('Latest blog publications', 'resort-hotel'); ?></h2>
        </div>

        <!-- 3-Column Blog Cards Grid -->
        <div class="knsl-blog-grid">
            <!-- Article 1: Ultimate Guide -->
            <article class="knsl-blog-card">
                <div class="knsl-blog-cover-wrap">
                    <a href="<?php echo esc_url(home_url('/blog/the-ultimate-guide-to-traveling/')); ?>" class="knsl-blog-cover-link" aria-label="<?php esc_attr_e('The ultimate guide to traveling when you have no money', 'resort-hotel'); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/loaction/about-1-950x633.jpg'); ?>" 
                             alt="<?php esc_attr_e('The ultimate guide to traveling', 'resort-hotel'); ?>" 
                             loading="lazy">
                    </a>
                    <!-- Meta Bar: Author & Date -->
                    <div class="knsl-blog-meta-bar">
                        <span class="knsl-meta-item knsl-meta-author">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            <span>Hana Evans</span>
                        </span>
                        <span class="knsl-meta-item knsl-meta-date">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none" d="M12 6v6l4 2"/>
                            </svg>
                            <span>December 21, 2021</span>
                        </span>
                    </div>
                </div>

                <div class="knsl-blog-card-body">
                    <h3 class="knsl-blog-card-title">
                        <a href="<?php echo esc_url(home_url('/blog/the-ultimate-guide-to-traveling/')); ?>">
                            <?php esc_html_e('The ultimate guide to traveling when you have no money', 'resort-hotel'); ?>
                        </a>
                    </h3>
                    <p class="knsl-blog-card-excerpt">
                        <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Commodi soluta minima nemo,...', 'resort-hotel'); ?>
                    </p>
                    <hr class="knsl-blog-divider">
                    <a href="<?php echo esc_url(home_url('/blog/the-ultimate-guide-to-traveling/')); ?>" class="knsl-blog-read-more">
                        <span><?php esc_html_e('Read More', 'resort-hotel'); ?></span>
                        <svg class="knsl-blog-arrow-icon" viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 2: Explore Cultural Wealth -->
            <article class="knsl-blog-card">
                <div class="knsl-blog-cover-wrap">
                    <a href="<?php echo esc_url(home_url('/blog/explore-cultural-wealth/')); ?>" class="knsl-blog-cover-link" aria-label="<?php esc_attr_e('Explore the cultural wealth: temples, palaces and more', 'resort-hotel'); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/loaction/blog-1-950x633.jpg'); ?>" 
                             alt="<?php esc_attr_e('Explore the cultural wealth', 'resort-hotel'); ?>" 
                             loading="lazy">
                    </a>
                    <!-- Meta Bar: Author & Date -->
                    <div class="knsl-blog-meta-bar">
                        <span class="knsl-meta-item knsl-meta-author">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            <span>Hana Evans</span>
                        </span>
                        <span class="knsl-meta-item knsl-meta-date">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none" d="M12 6v6l4 2"/>
                            </svg>
                            <span>December 21, 2021</span>
                        </span>
                    </div>
                </div>

                <div class="knsl-blog-card-body">
                    <h3 class="knsl-blog-card-title">
                        <a href="<?php echo esc_url(home_url('/blog/explore-cultural-wealth/')); ?>">
                            <?php esc_html_e('Explore the cultural wealth: temples, palaces and more', 'resort-hotel'); ?>
                        </a>
                    </h3>
                    <p class="knsl-blog-card-excerpt">
                        <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Commodi soluta minima nemo,...', 'resort-hotel'); ?>
                    </p>
                    <hr class="knsl-blog-divider">
                    <a href="<?php echo esc_url(home_url('/blog/explore-cultural-wealth/')); ?>" class="knsl-blog-read-more">
                        <span><?php esc_html_e('Read More', 'resort-hotel'); ?></span>
                        <svg class="knsl-blog-arrow-icon" viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 3: 10 Easy Steps -->
            <article class="knsl-blog-card">
                <div class="knsl-blog-cover-wrap">
                    <a href="<?php echo esc_url(home_url('/blog/10-easy-steps-for-next-vacation/')); ?>" class="knsl-blog-cover-link" aria-label="<?php esc_attr_e('10 easy steps and tips for planning your next vacation', 'resort-hotel'); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/loaction/about-8-3-950x585.jpg'); ?>" 
                             alt="<?php esc_attr_e('10 easy steps and tips for planning your next vacation', 'resort-hotel'); ?>" 
                             loading="lazy">
                    </a>
                    <!-- Meta Bar: Author & Date -->
                    <div class="knsl-blog-meta-bar">
                        <span class="knsl-meta-item knsl-meta-author">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            <span>Hana Evans</span>
                        </span>
                        <span class="knsl-meta-item knsl-meta-date">
                            <svg class="knsl-meta-icon" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" fill="none" d="M12 6v6l4 2"/>
                            </svg>
                            <span>December 21, 2021</span>
                        </span>
                    </div>
                </div>

                <div class="knsl-blog-card-body">
                    <h3 class="knsl-blog-card-title">
                        <a href="<?php echo esc_url(home_url('/blog/10-easy-steps-for-next-vacation/')); ?>">
                            <?php esc_html_e('10 easy steps and tips for planning your next vacation', 'resort-hotel'); ?>
                        </a>
                    </h3>
                    <p class="knsl-blog-card-excerpt">
                        <?php esc_html_e('Image for cattle earth. May one Which life divide sea. Commodi soluta minima nemo,...', 'resort-hotel'); ?>
                    </p>
                    <hr class="knsl-blog-divider">
                    <a href="<?php echo esc_url(home_url('/blog/10-easy-steps-for-next-vacation/')); ?>" class="knsl-blog-read-more">
                        <span><?php esc_html_e('Read More', 'resort-hotel'); ?></span>
                        <svg class="knsl-blog-arrow-icon" viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- Bottom Summary & View All CTA Action Bar -->
        <div class="knsl-blog-bottom-bar">
            <p class="knsl-blog-bottom-text">
                <?php esc_html_e('Welcome to our Travel Tips, your source of essential information to plan and fully enjoy your experience, palaces and other cultural in Goleta city, California.', 'resort-hotel'); ?>
            </p>
            <div class="knsl-blog-bottom-action">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="knsl-blog-btn-gold">
                    <span><?php esc_html_e('View All', 'resort-hotel'); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
