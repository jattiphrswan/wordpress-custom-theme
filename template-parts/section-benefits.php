<?php
/**
 * Template part for displaying the Benefits section
 * ("Why more than a million visitors chose us")
 *
 * @package Resort_Hotel
 */
?>

<section class="knsl-benefits-section" id="benefits">
    <!-- Ambient Watercolor Splash Backdrop Behind Collage -->
    <div class="knsl-benefits-pat-bg" aria-hidden="true"></div>

    <div class="knsl-benefits-container">
        <!-- Left Column: Heading and Numbered Benefits -->
        <div class="knsl-benefits-content">
            <!-- Subtitle Badge -->
            <div class="knsl-benefits-badge-wrapper">
                <span class="knsl-benefits-badge"><?php esc_html_e('Benefits', 'resort-hotel'); ?></span>
            </div>

            <!-- Section Title -->
            <h2 class="knsl-benefits-title">
                <?php esc_html_e('Why more than a million', 'resort-hotel'); ?><br>
                <?php esc_html_e('visitors chose us', 'resort-hotel'); ?>
            </h2>

            <!-- Numbered Benefit Items -->
            <div class="knsl-benefits-list">
                <!-- Item 01 -->
                <div class="knsl-benefit-item">
                    <div class="knsl-benefit-header">
                        <span class="knsl-benefit-number">01.</span>
                        <h4 class="knsl-benefit-heading"><?php esc_html_e('Ocean Oasis', 'resort-hotel'); ?></h4>
                    </div>
                    <p class="knsl-benefit-description">
                        <?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'resort-hotel'); ?>
                    </p>
                </div>

                <!-- Item 02 -->
                <div class="knsl-benefit-item">
                    <div class="knsl-benefit-header">
                        <span class="knsl-benefit-number">02.</span>
                        <h4 class="knsl-benefit-heading"><?php esc_html_e('Beach Haven', 'resort-hotel'); ?></h4>
                    </div>
                    <p class="knsl-benefit-description">
                        <?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'resort-hotel'); ?>
                    </p>
                </div>

                <!-- Item 03 -->
                <div class="knsl-benefit-item">
                    <div class="knsl-benefit-header">
                        <span class="knsl-benefit-number">03.</span>
                        <h4 class="knsl-benefit-heading"><?php esc_html_e('Sunset Bliss', 'resort-hotel'); ?></h4>
                    </div>
                    <p class="knsl-benefit-description">
                        <?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'resort-hotel'); ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Column: Circular Photo Collage & Nautical Accents -->
        <div class="knsl-benefits-media">
            <div class="mil-illustration-1">
                <!-- Circle 1: Surfers on beach -->
                <div class="mil-circle mil-1">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv1-950x1425.jpg'); ?>" 
                         alt="<?php esc_attr_e('Surfers carrying board', 'resort-hotel'); ?>" 
                         loading="lazy">
                </div>

                <!-- Circle 2: Family in ocean surf (Largest Circle) -->
                <div class="mil-circle mil-2">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv2-950x1267.jpg'); ?>" 
                         alt="<?php esc_attr_e('Family enjoying the ocean surf', 'resort-hotel'); ?>" 
                         loading="lazy">
                </div>

                <!-- Circle 3: Beach dining under palms -->
                <div class="mil-circle mil-3">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv3-950x1273.jpg'); ?>" 
                         alt="<?php esc_attr_e('Beachfront dining under palms', 'resort-hotel'); ?>" 
                         loading="lazy">
                </div>

                <!-- Circle 4: Friends relaxing in pool with rings -->
                <div class="mil-circle mil-4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/ser/serv4-950x1238.jpg'); ?>" 
                         alt="<?php esc_attr_e('Relaxing in pool with float rings', 'resort-hotel'); ?>" 
                         loading="lazy">
                </div>

                <!-- Decorative Figures: Nautical Starfish & Compass Rose -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-1.png'); ?>" 
                     alt="" 
                     class="mil-figure mil-1" 
                     aria-hidden="true" 
                     loading="lazy">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-2.png'); ?>" 
                     alt="" 
                     class="mil-figure mil-2" 
                     aria-hidden="true" 
                     loading="lazy">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/pat-3.png'); ?>" 
                     alt="" 
                     class="mil-figure mil-3" 
                     aria-hidden="true" 
                     loading="lazy">
            </div>
        </div>
    </div>
</section>
