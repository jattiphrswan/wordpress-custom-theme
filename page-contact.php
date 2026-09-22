<?php
/**
 * Template Name: Contact Page
 * Description: Replicates the Kinsley Resort Contact Page (https://kinsley.bslthemes.com/resort/contact/)
 *
 * @package Resort_Hotel
 */

get_header(); ?>

<main id="primary" class="site-main knsl-contact-page">

    <!-- 1. Subheader Hero Banner -->
    <section class="knsl-contact-banner">
        <!-- Ambient Watercolor Splash Backdrop -->
        <div class="knsl-contact-banner-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat4.png'); ?>');" aria-hidden="true"></div>

        <!-- Floating Starfish Accents -->
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
    </section>

    <!-- 3. Contact Information Cards Grid -->
    <section class="knsl-contact-cards-section">
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
            <iframe 
                src="https://maps.google.com/maps?q=Anacapa%20Residence%20Hall,%20Santa%20Barbara,%20CA&t=&z=15&ie=UTF8&iwloc=&output=embed"
                loading="lazy" 
                allowfullscreen 
                referrerpolicy="no-referrer-when-downgrade"
                title="Hotel Location Map">
            </iframe>
        </div>
    </section>

</main>

<?php get_footer(); ?>
