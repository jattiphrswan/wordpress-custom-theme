<?php
/**
 * Template part for displaying the Call to Action section
 * ("Do you have any questions? We are available 24/7")
 *
 * @package Resort_Hotel
 */
?>

<?php
$cta_badge = !empty($args['badge']) ? $args['badge'] : __('Call to action', 'resort-hotel');
$cta_title_line1 = !empty($args['title_line1']) ? $args['title_line1'] : __('Do you have any questions?', 'resort-hotel');
$cta_title_line2 = !empty($args['title_line2']) ? $args['title_line2'] : __('We are available 24/7', 'resort-hotel');
$cta_btn1_text = !empty($args['btn1_text']) ? $args['btn1_text'] : __('Get in Touch', 'resort-hotel');
$cta_btn1_url = !empty($args['btn1_url']) ? $args['btn1_url'] : home_url('/contact/');
$cta_btn2_text = !empty($args['btn2_text']) ? $args['btn2_text'] : __('Book Now', 'resort-hotel');
$cta_btn2_url = !empty($args['btn2_url']) ? $args['btn2_url'] : '#rooms';
$cta_btn2_type = !empty($args['btn2_type']) ? $args['btn2_type'] : 'arrow';
?>

<section class="knsl-cta-section" id="cta">
    <div class="knsl-cta-container">
        <!-- Floating White Island Card -->
        <div class="knsl-cta-card">
            <!-- Subtitle Badge -->
            <div class="knsl-cta-badge-wrapper">
                <span class="knsl-cta-badge"><?php echo esc_html($cta_badge); ?></span>
            </div>

            <!-- Main Heading -->
            <h2 class="knsl-cta-title">
                <?php echo esc_html($cta_title_line1); ?><br>
                <?php echo esc_html($cta_title_line2); ?>
            </h2>

            <!-- Action Buttons -->
            <div class="knsl-cta-buttons">
                <!-- Button 1: Get in Touch (Gold pill with email icon) -->
                <a href="<?php echo esc_url($cta_btn1_url); ?>" class="knsl-cta-btn-primary">
                    <svg class="knsl-cta-icon" viewBox="0 0 512 512" aria-hidden="true">
                        <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/>
                    </svg>
                    <span><?php echo esc_html($cta_btn1_text); ?></span>
                </a>

                <!-- Button 2: Secondary / Phone / Link -->
                <a href="<?php echo esc_url($cta_btn2_url); ?>" class="knsl-cta-btn-secondary">
                    <?php if ($cta_btn2_type === 'phone') : ?>
                        <svg class="knsl-cta-icon" viewBox="0 0 512 512" aria-hidden="true" style="width: 14px; height: 14px;">
                            <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.3l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"/>
                        </svg>
                    <?php else : ?>
                        <svg class="knsl-cta-icon" viewBox="0 0 448 512" aria-hidden="true">
                            <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>
                        </svg>
                    <?php endif; ?>
                    <span><?php echo esc_html($cta_btn2_text); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>
