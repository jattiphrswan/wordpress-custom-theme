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
});
