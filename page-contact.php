<?php
/**
 * Template Name: Contact Page
 * Description: Replicates the Kinsley Resort Contact Page (https://kinsley.bslthemes.com/resort/contact/)
 *
 * @package Resort_Hotel
 */

get_header(); ?>

<main id="primary" class="site-main knsl-contact-page">

    <!-- Ambient Watercolor Splash Backdrops spanning across the page -->
    <div class="knsl-contact-ambient-pat pat-left" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-contact-ambient-pat pat-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>
    <div class="knsl-contact-ambient-pat pat-bottom-right" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

    <!-- 1. Subheader Hero Banner -->
    <section class="knsl-contact-banner">
        <!-- Floating Starfish & Sparkle Accents (Banner) -->
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-contact-star star-top-center" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-contact-star star-mid-left" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-contact-star star-bottom-right" aria-hidden="true">

        <div class="knsl-contact-banner-content">
            <h1 class="knsl-contact-title">Get in Touch!</h1>
            <div class="knsl-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="knsl-breadcrumbs-sep">&gt;</span>
                <span class="knsl-breadcrumbs-current">Contact</span>
            </div>
        </div>
    </section>

    <!-- 2. Contact Form Island -->
    <section class="knsl-contact-section">
        <div class="knsl-contact-form-island">
            <form class="knsl-contact-form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
                <!-- Row 1: Name and Email -->
                <div class="knsl-form-row-2">
                    <div class="knsl-form-group">
                        <label class="knsl-form-label" for="contactName">Name</label>
                        <input type="text" id="contactName" name="contact_name" class="knsl-form-input" placeholder="Enter your name" required>
                    </div>
                    <div class="knsl-form-group">
                        <label class="knsl-form-label" for="contactEmail">Email</label>
                        <input type="email" id="contactEmail" name="contact_email" class="knsl-form-input" placeholder="Enter your email" required>
                    </div>
                </div>

                <!-- Row 2: Message -->
                <div class="knsl-form-group">
                    <label class="knsl-form-label" for="contactMessage">Message</label>
                    <textarea id="contactMessage" name="contact_message" class="knsl-form-textarea" placeholder="Write a message here" rows="6" required></textarea>
                </div>

                <!-- Row 3: Footer Action Row -->
                <div class="knsl-form-footer">
                    <p class="knsl-form-privacy">
                        <span class="knsl-form-privacy-asterisk">*</span>We promise not to disclose your personal information to third parties.
                    </p>
                    <button type="submit" class="knsl-form-submit-btn">Send</button>
                </div>
            </form>
        </div>

        <!-- Mid-Section Floating Starfish & Sparkles (Between Form and Cards) -->
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" alt="" class="knsl-contact-star star-mid-left-2" aria-hidden="true">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" alt="" class="knsl-contact-star star-mid-center-2" aria-hidden="true">
    </section>

    <!-- 3. Contact Information Cards Grid -->
    <section class="knsl-contact-cards-section">
        <!-- Floating Starfish on the right of cards -->
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-2.png'); ?>" alt="" class="knsl-contact-star star-cards-right" aria-hidden="true">

        <div class="knsl-contact-cards-grid">
            <!-- Card 1: Phone -->
            <div class="knsl-contact-card">
                <div class="knsl-contact-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </div>
                <h3 class="knsl-contact-card-val">
                    <a href="tel:+51174705812">+51 174 705 812</a>
                </h3>
                <p class="knsl-contact-card-sub">Call us anytime. We are available 24/7</p>
            </div>

            <!-- Card 2: Email -->
            <div class="knsl-contact-card">
                <div class="knsl-contact-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <h3 class="knsl-contact-card-val">
                    <a href="mailto:aquarel.hotel@mail.com">aquarel.hotel@mail.com</a>
                </h3>
                <p class="knsl-contact-card-sub">Write to us. We respond quickly</p>
            </div>

            <!-- Card 3: Address -->
            <div class="knsl-contact-card">
                <div class="knsl-contact-card-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                        <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                        <line x1="8" y1="2" x2="8" y2="18"></line>
                        <line x1="16" y1="6" x2="16" y2="22"></line>
                    </svg>
                </div>
                <h3 class="knsl-contact-card-val">71 South Los Carneros Road</h3>
                <p class="knsl-contact-card-sub">We invite you to visit us</p>
            </div>
        </div>
    </section>

    <!-- 4. Interactive Map Section -->
    <section class="knsl-contact-map-section">
        <div class="knsl-contact-map-frame">
            <!-- Google Maps Info Card Overlay (matches Image 2) -->
            <div class="knsl-map-info-card">
                <div class="knsl-map-card-header">
                    <div class="knsl-map-card-text">
                        <h4 class="knsl-map-card-title">Anacapa Hall</h4>
                        <p class="knsl-map-card-desc">Anacapa Hall, Santa Barbara, CA 93117, USA</p>
                    </div>
                </div>
                <div class="knsl-map-card-actions">
                    <a href="https://maps.google.com/?q=Anacapa+Hall,+Santa+Barbara,+CA+93117" target="_blank" rel="noopener noreferrer" class="knsl-map-btn-open">
                        <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                        <span>Open in Maps</span>
                    </a>
                    <a href="https://maps.google.com/?daddr=Anacapa+Hall,+Santa+Barbara,+CA+93117" target="_blank" rel="noopener noreferrer" class="knsl-map-btn-directions" aria-label="Directions">
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Embedded Google Map -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.0044593466184!2d-119.84803972364431!3d34.41384877302257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e93f6696dbf5c3%3A0x6b447781b0ff4ea2!2sAnacapa%20Residence%20Hall!5e0!3m2!1sen!2sus!4v1710000000000!5m2!1sen!2sus"
                loading="lazy" 
                allowfullscreen 
                referrerpolicy="no-referrer-when-downgrade"
                title="Hotel Location Map">
            </iframe>
        </div>
    </section>

</main>

<?php get_footer(); ?>
