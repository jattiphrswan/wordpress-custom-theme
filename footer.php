<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #primary and all content after.
 * Replicates Kinsley Resort Hotel island footer with watercolor ambience.
 *
 * @package Resort_Hotel
 */
?>

<footer class="knsl-footer-section" id="colophon">
    <!-- Ambient Watercolor Splash Backdrops -->
    <div class="knsl-footer-pat-left" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>
    <div class="knsl-footer-pat-right" aria-hidden="true" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');"></div>

    <!-- Main Footer Island (Full Width Container) -->
    <div class="knsl-footer-island">
        <div class="knsl-footer-inner">
            <!-- Top Section: Brand, Newsletter, Navigation Links -->
            <div class="knsl-footer-top">
            <!-- Brand & Newsletter Column -->
            <div class="knsl-footer-col-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="knsl-footer-logo" aria-label="Kinsley Resort Hotel">
                    <span class="logo-circle" aria-hidden="true">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 14c2.5-2 4.5-2 7 0s4.5 2 7 0 3.5-1.5 4-1" />
                            <path d="M3 18c2.5-2 4.5-2 7 0s4.5 2 7 0 3.5-1.5 4-1" />
                            <path d="M6 9c2-2.5 3.5-2.5 5.5 0s3.5 2.5 5.5 0" />
                        </svg>
                    </span>
                    <span class="logo-text">Kinsley</span>
                </a>

                <p class="knsl-newsletter-prompt"><?php esc_html_e('Subscribe our newsletter:', 'resort-hotel'); ?></p>

                <form class="knsl-newsletter-form" action="#newsletter" method="post">
                    <input 
                        type="email" 
                        name="email" 
                        class="knsl-newsletter-input" 
                        placeholder="<?php esc_attr_e('Email', 'resort-hotel'); ?>" 
                        required
                        aria-label="<?php esc_attr_e('Email Address', 'resort-hotel'); ?>"
                    >
                    <button type="submit" class="knsl-newsletter-btn" aria-label="<?php esc_attr_e('Subscribe', 'resort-hotel'); ?>">
                        <svg viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Primary Navigation Links Column -->
            <div class="knsl-footer-col-nav">
                <ul class="knsl-footer-menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About Hotel</a></li>
                    <li><a href="<?php echo esc_url(home_url('/rooms/')); ?>">Search Rooms</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                </ul>
            </div>

            <!-- Legal & Information Links Column -->
            <div class="knsl-footer-col-legal">
                <ul class="knsl-footer-legal-menu">
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms-and-conditions/')); ?>">Terms and Conditions</a></li>
                    <li><a href="<?php echo esc_url(home_url('/gallery/')); ?>">Photo Gallery</a></li>
                    <li><a href="<?php echo esc_url(home_url('/restaurant/')); ?>">Restaurant</a></li>
                </ul>
            </div>
        </div>

        <!-- Dashed Divider -->
        <hr class="knsl-footer-divider">

        <!-- Bottom Section: Socials, Copyright, Addresses -->
        <div class="knsl-footer-bottom">
            <!-- Social Media & Copyright Column -->
            <div class="knsl-footer-social-wrap">
                <div class="knsl-footer-socials" role="list">
                    <!-- Facebook -->
                    <a href="https://facebook.com" class="knsl-social-btn" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg viewBox="0 0 320 512" aria-hidden="true">
                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                        </svg>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://x.com" class="knsl-social-btn" target="_blank" rel="noopener noreferrer" aria-label="X Twitter">
                        <svg viewBox="0 0 512 512" aria-hidden="true">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://instagram.com" class="knsl-social-btn" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                        </svg>
                    </a>
                </div>
                <p class="knsl-copyright-text">&copy; Copyright <?php echo date('Y'); ?>. All Rights Reserved.</p>
            </div>

            <!-- Address Column: United States -->
            <div class="knsl-footer-address-col">
                <h5 class="knsl-address-title">United States</h5>
                <p class="knsl-address-text">
                    Anacapa Hall, Santa Barbara,<br>
                    CA 93117, +51 174 705 812
                </p>
            </div>

            <!-- Address Column: Netherlands -->
            <div class="knsl-footer-address-col">
                <h5 class="knsl-address-title">Netherlands</h5>
                <p class="knsl-address-text">
                    De Hondert Margen 3, 2678<br>
                    AC De Lier, +31 174 705 811
                </p>
            </div>
        </div>
        </div>
    </div>

    <!-- Floating Scroll-To-Top Button -->
    <button 
        class="knsl-scroll-top-btn" 
        id="knslScrollTopBtn" 
        aria-label="<?php esc_attr_e('Scroll to top', 'resort-hotel'); ?>"
        onclick="window.scrollTo({top: 0, behavior: 'smooth'});"
    >
        <svg viewBox="0 0 448 512" aria-hidden="true">
            <path d="M34.9 289.9l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.8z"/>
        </svg>
    </button>
</footer>

<?php wp_footer(); ?>

</body>
</html>
