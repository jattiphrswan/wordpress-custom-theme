/**
 * Kinsley Resort Hotel — Rooms Category Filtering Script
 * Controls interactive filtering for "Our best rooms" grid tabs.
 */

document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.knsl-rooms-filter .knsl-filter-btn');
    const roomCards = document.querySelectorAll('.knsl-rooms-grid .knsl-room-card');

    if (!filterButtons.length || !roomCards.length) {
        return;
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            // Update active states
            filterButtons.forEach(btn => {
                btn.classList.remove('is-active');
                btn.setAttribute('aria-selected', 'false');
            });

            this.classList.add('is-active');
            this.setAttribute('aria-selected', 'true');

            // Filter room cards with smooth transition
            roomCards.forEach(card => {
                const category = card.getAttribute('data-category');

                if (filterValue === '*' || filterValue === category) {
                    card.classList.remove('is-hidden');
                    // Trigger reflow for animation
                    void card.offsetWidth;
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        if (!card.classList.contains('is-active-match')) {
                            card.classList.add('is-hidden');
                        }
                    }, 250);
                }
            });
        });
    });

    // =========================================================================
    // Rooms Carousel Controller ("Our best rooms" slider)
    // =========================================================================
    const track = document.getElementById('knslRoomsCarouselTrack');
    const prevBtn = document.getElementById('knslRoomsPrevBtn');
    const nextBtn = document.getElementById('knslRoomsNextBtn');
    const currentPageEl = document.getElementById('knslRoomsCurrentPage');
    const totalPagesEl = document.getElementById('knslRoomsTotalPages');

    if (!track) {
        return;
    }

    const cards = track.querySelectorAll('.knsl-carousel-card');
    if (!cards.length) {
        return;
    }

    let currentPage = 1;
    let totalPages = 2;

    function getVisibleCount() {
        const width = window.innerWidth;
        if (width > 1200) return 4;
        if (width > 900) return 3;
        if (width > 580) return 2;
        return 1;
    }

    function updateCarousel() {
        const visibleCount = getVisibleCount();
        totalPages = Math.max(1, Math.ceil(cards.length / visibleCount));

        if (currentPage > totalPages) {
            currentPage = totalPages;
        }
        if (currentPage < 1) {
            currentPage = 1;
        }

        if (currentPageEl) currentPageEl.textContent = currentPage;
        if (totalPagesEl) totalPagesEl.textContent = totalPages;

        const cardWidth = cards[0].offsetWidth;
        const gap = 30;
        const maxScroll = Math.max(0, (cards.length - visibleCount) * (cardWidth + gap));
        
        let scrollOffset = (currentPage - 1) * (visibleCount * (cardWidth + gap));
        if (scrollOffset > maxScroll) {
            scrollOffset = maxScroll;
        }

        track.style.transform = `translateX(-${scrollOffset}px)`;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            if (currentPage >= totalPages) {
                currentPage = 1;
            } else {
                currentPage++;
            }
            updateCarousel();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            if (currentPage <= 1) {
                currentPage = totalPages;
            } else {
                currentPage--;
            }
            updateCarousel();
        });
    }

    // Touch Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    track.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                // Swipe Left -> Next
                if (currentPage >= totalPages) {
                    currentPage = 1;
                } else {
                    currentPage++;
                }
            } else {
                // Swipe Right -> Prev
                if (currentPage <= 1) {
                    currentPage = totalPages;
                } else {
                    currentPage--;
                }
            }
            updateCarousel();
        }
    }, { passive: true });

    // Handle Window Resize
    let resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateCarousel, 100);
    });

    // Initial setup
    updateCarousel();
});

