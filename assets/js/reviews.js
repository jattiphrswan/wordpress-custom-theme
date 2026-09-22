/**
 * Kinsley Resort Hotel — Customer Voices / Reviews Carousel Script
 * Handles avatar selection, prev/next navigation, smooth content transitions,
 * and autoplay pausing on hover.
 */

document.addEventListener('DOMContentLoaded', () => {
    const reviewsSection = document.getElementById('reviews');
    if (!reviewsSection) return;

    const dataEl = document.getElementById('knslReviewsData');
    let reviews = [];

    if (dataEl) {
        try {
            reviews = JSON.parse(dataEl.textContent.trim());
        } catch (e) {
            console.error('Error parsing reviews data:', e);
        }
    }

    if (!reviews || reviews.length === 0) return;

    const avatarBtns = reviewsSection.querySelectorAll('.knsl-review-avatar-btn');
    const authorEl = document.getElementById('knslReviewAuthor');
    const sourceEl = document.getElementById('knslReviewSource');
    const quoteEl = document.getElementById('knslReviewQuote');
    const contentBox = document.getElementById('knslReviewsContent');
    const prevBtn = document.getElementById('knslReviewPrevBtn');
    const nextBtn = document.getElementById('knslReviewNextBtn');

    let currentIndex = 0;
    let autoplayTimer = null;
    const autoplayDelay = 7000; // 7 seconds

    function showReview(index) {
        currentIndex = (index + reviews.length) % reviews.length;
        const currentData = reviews[currentIndex];

        // Update active avatar
        avatarBtns.forEach((btn, idx) => {
            if (idx === currentIndex) {
                btn.classList.add('active');
                btn.setAttribute('aria-selected', 'true');
            } else {
                btn.classList.remove('active');
                btn.setAttribute('aria-selected', 'false');
            }
        });

        // Smooth transition for content
        if (contentBox) {
            contentBox.classList.add('fading');
            setTimeout(() => {
                if (authorEl) authorEl.textContent = currentData.name;
                if (sourceEl) sourceEl.textContent = currentData.source;
                if (quoteEl) quoteEl.textContent = currentData.quote;
                contentBox.classList.remove('fading');
            }, 180);
        } else {
            if (authorEl) authorEl.textContent = currentData.name;
            if (sourceEl) sourceEl.textContent = currentData.source;
            if (quoteEl) quoteEl.textContent = currentData.quote;
        }
    }

    // Avatar Click Listeners
    avatarBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            const idx = parseInt(btn.getAttribute('data-index'), 10);
            if (!isNaN(idx)) {
                showReview(idx);
                resetAutoplay();
            }
        });
    });

    // Arrow Button Listeners
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            showReview(currentIndex - 1);
            resetAutoplay();
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            showReview(currentIndex + 1);
            resetAutoplay();
        });
    }

    // Autoplay Functionality
    function startAutoplay() {
        if (autoplayTimer) clearInterval(autoplayTimer);
        autoplayTimer = setInterval(() => {
            showReview(currentIndex + 1);
        }, autoplayDelay);
    }

    function stopAutoplay() {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
            autoplayTimer = null;
        }
    }

    function resetAutoplay() {
        stopAutoplay();
        startAutoplay();
    }

    const cardContainer = reviewsSection.querySelector('.knsl-reviews-card');
    if (cardContainer) {
        cardContainer.addEventListener('mouseenter', stopAutoplay);
        cardContainer.addEventListener('mouseleave', startAutoplay);
    }

    // Initial Start
    startAutoplay();
});
