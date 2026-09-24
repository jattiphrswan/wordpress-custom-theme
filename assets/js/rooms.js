/**
 * Kinsley Resort Hotel — Rooms & Accommodation Scripts
 * Controls:
 * 1. Category filter tabs on archive/homepage room grid
 * 2. "Our best rooms" 4-card carousel slider
 * 3. Single Room 3-image showcase gallery slider
 * 4. Interactive 2-month availability calendar & reservation picker sync
 */

document.addEventListener('DOMContentLoaded', function () {
    initRoomsFilter();
    initRoomsCarousel();
    initSingleRoomGallery();
    initAvailabilityCalendar();
});

// =========================================================================
// 1. Rooms Category Filtering
// =========================================================================
function initRoomsFilter() {
    const filterButtons = document.querySelectorAll('.knsl-rooms-filter .knsl-filter-btn');
    const roomCards = document.querySelectorAll('.knsl-rooms-grid .knsl-room-card');

    if (!filterButtons.length || !roomCards.length) return;

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            filterButtons.forEach(btn => {
                btn.classList.remove('is-active');
                btn.setAttribute('aria-selected', 'false');
            });

            this.classList.add('is-active');
            this.setAttribute('aria-selected', 'true');

            roomCards.forEach(card => {
                const category = card.getAttribute('data-category');

                if (filterValue === '*' || filterValue === category) {
                    card.classList.remove('is-hidden');
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
}

// =========================================================================
// 2. Rooms Carousel Controller ("Our best rooms" / "We recommend" slider)
// =========================================================================
function initRoomsCarousel() {
    const track = document.getElementById('knslRoomsCarouselTrack');
    const prevBtn = document.getElementById('knslRoomsPrevBtn') || document.getElementById('knslCarouselPrev');
    const nextBtn = document.getElementById('knslRoomsNextBtn') || document.getElementById('knslCarouselNext');
    const currentPageEl = document.getElementById('knslRoomsCurrentPage') || document.getElementById('knslCarouselCurrent');
    const totalPagesEl = document.getElementById('knslRoomsTotalPages') || document.getElementById('knslCarouselTotal');

    if (!track) return;

    const cards = track.querySelectorAll('.knsl-carousel-card');
    if (!cards.length) return;

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

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        if (currentPageEl) currentPageEl.textContent = currentPage;
        if (totalPagesEl) totalPagesEl.textContent = totalPages;

        const cardWidth = cards[0].offsetWidth;
        const gap = 30;
        const maxScroll = Math.max(0, (cards.length - visibleCount) * (cardWidth + gap));
        
        let scrollOffset = (currentPage - 1) * (visibleCount * (cardWidth + gap));
        if (scrollOffset > maxScroll) scrollOffset = maxScroll;

        track.style.transform = `translateX(-${scrollOffset}px)`;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            currentPage = (currentPage >= totalPages) ? 1 : currentPage + 1;
            updateCarousel();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            currentPage = (currentPage <= 1) ? totalPages : currentPage - 1;
            updateCarousel();
        });
    }

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
                currentPage = (currentPage >= totalPages) ? 1 : currentPage + 1;
            } else {
                currentPage = (currentPage <= 1) ? totalPages : currentPage - 1;
            }
            updateCarousel();
        }
    }, { passive: true });

    let resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateCarousel, 100);
    });

    updateCarousel();
}

// =========================================================================
// 3. Single Room Gallery Slider (3-Visible Image Showcase)
// =========================================================================
function initSingleRoomGallery() {
    const track = document.getElementById('knslRoomGalleryTrack');
    const prevBtn = document.getElementById('knslRoomGalleryPrev');
    const nextBtn = document.getElementById('knslRoomGalleryNext');
    const currentEl = document.getElementById('knslRoomGalleryCurrent');
    const totalEl = document.getElementById('knslRoomGalleryTotal');

    if (!track) return;

    const slides = track.querySelectorAll('.knsl-room-gallery-slide');
    if (!slides.length) return;

    // Start with slide index 1 (or 2 if 5 slides)
    let currentIndex = 1;
    const totalSlides = slides.length;

    if (totalEl) totalEl.textContent = totalSlides;

    function getVisibleSlides() {
        const width = window.innerWidth;
        if (width > 1200) return 3;
        if (width > 768) return 2;
        return 1;
    }

    function updateGallery() {
        const visible = getVisibleSlides();
        const maxIndex = Math.max(1, totalSlides - visible + 1);

        if (currentIndex > maxIndex) currentIndex = maxIndex;
        if (currentIndex < 1) currentIndex = 1;

        if (currentEl) currentEl.textContent = currentIndex;

        const slideWidth = slides[0].offsetWidth;
        const gap = 24;
        const offset = (currentIndex - 1) * (slideWidth + gap);

        track.style.transform = `translateX(-${offset}px)`;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            const visible = getVisibleSlides();
            const maxIndex = Math.max(1, totalSlides - visible + 1);
            currentIndex = (currentIndex >= maxIndex) ? 1 : currentIndex + 1;
            updateGallery();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            const visible = getVisibleSlides();
            const maxIndex = Math.max(1, totalSlides - visible + 1);
            currentIndex = (currentIndex <= 1) ? maxIndex : currentIndex - 1;
            updateGallery();
        });
    }

    // Touch Support for Gallery
    let touchStartX = 0;
    track.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    track.addEventListener('touchend', function (e) {
        const diff = touchStartX - e.changedTouches[0].screenX;
        const visible = getVisibleSlides();
        const maxIndex = Math.max(1, totalSlides - visible + 1);
        if (Math.abs(diff) > 40) {
            if (diff > 0) {
                currentIndex = (currentIndex >= maxIndex) ? 1 : currentIndex + 1;
            } else {
                currentIndex = (currentIndex <= 1) ? maxIndex : currentIndex - 1;
            }
            updateGallery();
        }
    }, { passive: true });

    window.addEventListener('resize', function () {
        updateGallery();
    });

    updateGallery();
}

// =========================================================================
// 4. Availability Calendar & Reservation Picker Sync
// =========================================================================
function initAvailabilityCalendar() {
    const calendarCard = document.getElementById('knslAvailabilityCalendar');
    const checkinInput = document.getElementById('knslCheckinInput');
    const checkoutInput = document.getElementById('knslCheckoutInput');
    const clearBtn = document.getElementById('knslCalClearBtn');

    if (!calendarCard) return;

    let selectedCheckin = null;
    let selectedCheckout = null;

    const availableCells = calendarCard.querySelectorAll('.knsl-cal-table td.is-available');

    availableCells.forEach(cell => {
        cell.addEventListener('click', function () {
            const dateStr = this.getAttribute('data-date');
            if (!dateStr) return;

            if (!selectedCheckin || (selectedCheckin && selectedCheckout)) {
                // First click: select check-in
                selectedCheckin = dateStr;
                selectedCheckout = null;
            } else if (selectedCheckin && !selectedCheckout) {
                // Second click: select check-out if after check-in
                if (new Date(dateStr) > new Date(selectedCheckin)) {
                    selectedCheckout = dateStr;
                } else {
                    selectedCheckin = dateStr;
                    selectedCheckout = null;
                }
            }

            renderCalendarSelection();
            syncFormInputs();
        });
    });

    function renderCalendarSelection() {
        const allCells = calendarCard.querySelectorAll('.knsl-cal-table td');
        allCells.forEach(cell => {
            cell.classList.remove('is-selected', 'is-in-range');
            const d = cell.getAttribute('data-date');
            if (!d) return;

            if (d === selectedCheckin || d === selectedCheckout) {
                cell.classList.add('is-selected');
            } else if (selectedCheckin && selectedCheckout) {
                const cellTime = new Date(d).getTime();
                const inTime = new Date(selectedCheckin).getTime();
                const outTime = new Date(selectedCheckout).getTime();
                if (cellTime > inTime && cellTime < outTime) {
                    cell.classList.add('is-in-range');
                }
            }
        });
    }

    function syncFormInputs() {
        if (checkinInput && selectedCheckin) {
            checkinInput.value = selectedCheckin;
        }
        if (checkoutInput && selectedCheckout) {
            checkoutInput.value = selectedCheckout;
        }
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', function (e) {
            e.preventDefault();
            selectedCheckin = null;
            selectedCheckout = null;
            renderCalendarSelection();
            if (checkinInput) checkinInput.value = '';
            if (checkoutInput) checkoutInput.value = '';
        });
    }
}
