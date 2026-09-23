<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Resort_Hotel
 */

get_header(); ?>

<main id="primary" class="site-main knsl-404-page" style="min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 160px 20px 80px; background: #f1f9fa;">
    <div class="knsl-404-content" style="max-width: 600px; margin: 0 auto;">
        <h1 style="font-size: clamp(64px, 8vw, 120px); font-weight: 800; color: #204f5e; margin: 0; line-height: 1;">404</h1>
        <h2 style="font-size: 28px; font-weight: 700; color: #204f5e; margin: 16px 0 12px;"><?php esc_html_e('Page Not Found', 'resort-hotel'); ?></h2>
        <p style="color: #5a8695; font-size: 16px; margin-bottom: 30px;"><?php esc_html_e("The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.", 'resort-hotel'); ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: inline-block; background-color: #ecb934; color: #ffffff; padding: 14px 36px; border-radius: 9999px; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 0.1em; text-decoration: none; box-shadow: 0 8px 20px rgba(236, 185, 52, 0.35);">
            <?php esc_html_e('Return to Home', 'resort-hotel'); ?>
        </a>
    </div>
</main>

<?php get_footer(); ?>
