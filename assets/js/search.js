/**
 * Kinsley Resort Hotel - Search Availability Logic
 */
document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('searchAvailabilityForm');
    const checkinInput = document.getElementById('searchCheckin');
    const checkoutInput = document.getElementById('searchCheckout');
    const adultsSelect = document.getElementById('searchAdults');
    const childrenSelect = document.getElementById('searchChildren');
    const resultsContainer = document.getElementById('searchResultsContainer');
    const resultsCount = document.getElementById('resultsCount');
    const filterPills = document.querySelectorAll('.knsl-results-pill-btn');
    const resetBtn = document.getElementById('resetSearchBtn');

    // Parse URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const paramCheckin = urlParams.get('check_in') || urlParams.get('checkin') || urlParams.get('mphb_check_in_date');
    const paramCheckout = urlParams.get('check_out') || urlParams.get('checkout') || urlParams.get('mphb_check_out_date');
    const paramAdults = urlParams.get('adults') || urlParams.get('mphb_adults');
    const paramChildren = urlParams.get('children') || urlParams.get('mphb_children');

    if (paramCheckin && checkinInput) {
        checkinInput.value = paramCheckin;
    }
    if (paramCheckout && checkoutInput) {
        checkoutInput.value = paramCheckout;
    }
    if (paramAdults && adultsSelect) {
        adultsSelect.value = paramAdults;
    }
    if (paramChildren && childrenSelect) {
        childrenSelect.value = paramChildren;
    }

    // Date sanity check
    if (checkinInput && checkoutInput) {
        checkinInput.addEventListener('change', function () {
            if (checkinInput.value && checkoutInput.value && checkinInput.value >= checkoutInput.value) {
                // Automatically set checkout 3 days after checkin
                const checkinDate = new Date(checkinInput.value);
                checkinDate.setDate(checkinDate.getDate() + 3);
                checkoutInput.value = checkinDate.toISOString().split('T')[0];
            }
        });
    }

    // Room Filtering Logic
    function filterRooms() {
        if (!resultsContainer) return;

        const adults = parseInt(adultsSelect ? adultsSelect.value : '1', 10) || 1;
        const children = parseInt(childrenSelect ? childrenSelect.value : '0', 10) || 0;
        const totalGuests = adults + children;

        const activePill = document.querySelector('.knsl-results-pill-btn.is-active');
        const activeCategory = activePill ? activePill.dataset.filter : 'all';

        const cards = resultsContainer.querySelectorAll('.knsl-result-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const cardAdults = parseInt(card.dataset.adults || '2', 10);
            const cardCategory = card.dataset.category || 'all';

            const matchesGuests = cardAdults >= adults;
            const matchesCategory = activeCategory === 'all' || cardCategory === activeCategory;

            if (matchesGuests && matchesCategory) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update count text
        if (resultsCount) {
            resultsCount.textContent = `${visibleCount} Available Room${visibleCount === 1 ? '' : 's'}`;
        }

        // Toggle Empty State
        const emptyState = document.getElementById('knslNoResults');
        if (emptyState) {
            emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    // Form submission
    if (searchForm) {
        searchForm.addEventListener('submit', function (e) {
            e.preventDefault();
            filterRooms();
            
            // Smoothly scroll to results if on mobile/desktop
            if (resultsContainer) {
                resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    // Filter pills
    filterPills.forEach(pill => {
        pill.addEventListener('click', function () {
            filterPills.forEach(p => p.classList.remove('is-active'));
            this.classList.add('is-active');
            filterRooms();
        });
    });

    // Reset button
    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            if (adultsSelect) adultsSelect.value = '1';
            if (childrenSelect) childrenSelect.value = '0';
            filterPills.forEach(p => p.classList.remove('is-active'));
            const allPill = document.querySelector('.knsl-results-pill-btn[data-filter="all"]');
            if (allPill) allPill.classList.add('is-active');
            filterRooms();
        });
    }

    // Run initial filter on load
    filterRooms();
});
