<?php
/**
 * The template for displaying all pages
 *
 * @package Resort_Hotel
 */

get_header(); ?>

<main id="primary" class="site-main knsl-page-default">
    <div class="knsl-page-container" style="max-width: 1200px; margin: 140px auto 80px; padding: 0 20px;">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="margin-bottom: 30px;">
                    <h1 class="entry-title" style="font-size: clamp(32px, 4vw, 48px); font-weight: 800; color: #204f5e;"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content" style="color: #486572; font-size: 16px; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
