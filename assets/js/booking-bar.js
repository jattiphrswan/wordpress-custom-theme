/**
 * Kinsley Resort Hotel — Luxury Booking Bar Script
 * Implements:
 * 1. Dual-month hotel datepicker popup with gold header (<Prev, Today, Next>),
 *    side-by-side calendar tables, day range highlighting, Clear and Close actions.
 * 2. Custom select dropdowns for Adults & Children with gold selection highlighting
 *    and animated chevrons.
 */

document.addEventListener('DOMContentLoaded', () => {
    const bookingBar = document.querySelector('.hero-booking-bar');
    if (!bookingBar) return;

    /* ==========================================================================
       1. Custom Select Dropdowns (Adults & Children)
       ========================================================================== */
    const customSelects = bookingBar.querySelectorAll('.knsl-custom-select');

    customSelects.forEach((selectWrap) => {
        const trigger = selectWrap.querySelector('.knsl-select-trigger');
        const displayVal = selectWrap.querySelector('.knsl-select-val');
        const hiddenInput = selectWrap.querySelector('input[type="hidden"]');
        const dropdownMenu = selectWrap.querySelector('.knsl-dropdown-menu');
        const options = selectWrap.querySelectorAll('.knsl-dropdown-item');

        if (!trigger || !dropdownMenu) return;

        // Toggle dropdown
        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            closeDatepicker();
            // Close any other open select
            customSelects.forEach(other => {
                if (other !== selectWrap) other.classList.remove('is-open');
            });
            selectWrap.classList.toggle('is-open');
        });

        // Select an option
        options.forEach((opt) => {
            opt.addEventListener('click', (e) => {
                e.stopPropagation();
                const val = opt.getAttribute('data-value');
                if (displayVal) displayVal.textContent = val;
                if (hiddenInput) hiddenInput.value = val;

                options.forEach(o => o.classList.remove('active'));
                opt.classList.add('active');

                selectWrap.classList.remove('is-open');
            });
        });
    });

    /* ==========================================================================
       2. Dual-Month Luxury Datepicker
       ========================================================================== */
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    const checkinWrap = document.getElementById('checkinWrapper');
    const checkoutWrap = document.getElementById('checkoutWrapper');

    if (!checkinInput || !checkoutInput) return;

    // Create Datepicker Popup DOM
    const datepickerPopup = document.createElement('div');
    datepickerPopup.className = 'knsl-datepicker-popup';
    datepickerPopup.id = 'knslDatepickerPopup';
    datepickerPopup.setAttribute('role', 'dialog');
    datepickerPopup.setAttribute('aria-label', 'Hotel Reservation Calendar');
    bookingBar.appendChild(datepickerPopup);

    const monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June',
        'July', 'August', 'September', 'October', 'November', 'December'
    ];

    let currentTarget = 'checkin'; // 'checkin' or 'checkout'
    let selectedCheckin = null;
    let selectedCheckout = null;

    // Default start view: September 2026 (matching reference screenshot) or current date
    let now = new Date();
    // Default to September 2026 if current year is earlier or set to 2026
    let viewYear = 2026;
    let viewMonth = 8; // September (0-indexed: 8 = Sept)

    function renderCalendar() {
        const nextMonth = (viewMonth + 1) % 12;
        const nextYear = viewMonth === 11 ? viewYear + 1 : viewYear;

        datepickerPopup.innerHTML = `
            <!-- Top Gold Header -->
            <div class="knsl-dp-header">
                <button type="button" class="knsl-dp-btn knsl-dp-prev" id="knslDpPrev" aria-label="Previous Month">&lt;Prev</button>
                <button type="button" class="knsl-dp-btn knsl-dp-today" id="knslDpToday">Today</button>
                <button type="button" class="knsl-dp-btn knsl-dp-next" id="knslDpNext" aria-label="Next Month">Next&gt;</button>
            </div>

            <!-- Dual Month Titles -->
            <div class="knsl-dp-month-titles">
                <div class="knsl-dp-month-title left">
                    <span>${monthNames[viewMonth]} ${viewYear}</span>
                    <svg class="knsl-dp-title-arrow" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                </div>
                <div class="knsl-dp-month-title right">
                    <span>${monthNames[nextMonth]} ${nextYear}</span>
                </div>
            </div>

            <!-- Dual Month Grid -->
            <div class="knsl-dp-months-grid">
                <!-- Left Month -->
                <div class="knsl-dp-month-table">
                    ${generateMonthHtml(viewYear, viewMonth)}
                </div>
                <!-- Right Month -->
                <div class="knsl-dp-month-table">
                    ${generateMonthHtml(nextYear, nextMonth)}
                </div>
            </div>

            <!-- Bottom Actions Bar -->
            <div class="knsl-dp-footer">
                <button type="button" class="knsl-dp-footer-btn knsl-dp-clear" id="knslDpClear">Clear</button>
                <button type="button" class="knsl-dp-footer-btn knsl-dp-close" id="knslDpClose">Close</button>
            </div>
        `;

        attachCalendarEvents();
    }

    function generateMonthHtml(year, month) {
        let html = `
            <div class="knsl-dp-weekdays">
                <span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span><span>Su</span>
            </div>
            <div class="knsl-dp-days">
        `;

        const firstDayIndex = new Date(year, month, 1).getDay();
        // Convert Sunday (0) to 6, Monday (1) to 0
        const leadSpaces = (firstDayIndex === 0 ? 6 : firstDayIndex - 1);
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Empty lead cells
        for (let i = 0; i < leadSpaces; i++) {
            html += `<span class="knsl-dp-day empty"></span>`;
        }

        // Days
        for (let day = 1; day <= daysInMonth; day++) {
            const thisDate = new Date(year, month, day);
            const dateStr = formatDate(thisDate);

            let classes = ['knsl-dp-day'];
            if (isSameDate(thisDate, selectedCheckin)) {
                classes.push('selected', 'selected-checkin');
            } else if (isSameDate(thisDate, selectedCheckout)) {
                classes.push('selected', 'selected-checkout');
            } else if (isDateInRange(thisDate, selectedCheckin, selectedCheckout)) {
                classes.push('in-range');
            }

            html += `<button type="button" class="${classes.join(' ')}" data-date="${dateStr}" aria-label="${dateStr}">${day}</button>`;
        }

        html += `</div>`;
        return html;
    }

    function attachCalendarEvents() {
        // Prev button
        const prevBtn = datepickerPopup.querySelector('#knslDpPrev');
        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                viewMonth--;
                if (viewMonth < 0) {
                    viewMonth = 11;
                    viewYear--;
                }
                renderCalendar();
            });
        }

        // Next button
        const nextBtn = datepickerPopup.querySelector('#knslDpNext');
        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                viewMonth++;
                if (viewMonth > 11) {
                    viewMonth = 0;
                    viewYear++;
                }
                renderCalendar();
            });
        }

        // Today button
        const todayBtn = datepickerPopup.querySelector('#knslDpToday');
        if (todayBtn) {
            todayBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                const today = new Date();
                viewYear = today.getFullYear();
                viewMonth = today.getMonth();
                renderCalendar();
            });
        }

        // Clear button
        const clearBtn = datepickerPopup.querySelector('#knslDpClear');
        if (clearBtn) {
            clearBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                if (currentTarget === 'checkin') {
                    selectedCheckin = null;
                    checkinInput.value = '';
                } else {
                    selectedCheckout = null;
                    checkoutInput.value = '';
                }
                renderCalendar();
            });
        }

        // Close button
        const closeBtn = datepickerPopup.querySelector('#knslDpClose');
        if (closeBtn) {
            closeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                closeDatepicker();
            });
        }

        // Day cell click
        const dayButtons = datepickerPopup.querySelectorAll('.knsl-dp-day:not(.empty)');
        dayButtons.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                const clickedDateStr = btn.getAttribute('data-date');
                const [y, m, d] = clickedDateStr.split('-').map(Number);
                const clickedDate = new Date(y, m - 1, d);

                if (currentTarget === 'checkin') {
                    selectedCheckin = clickedDate;
                    checkinInput.value = clickedDateStr;
                    // If checkout is before checkin or null, suggest checkin + 2 days
                    if (!selectedCheckout || selectedCheckout <= selectedCheckin) {
                        const autoOut = new Date(clickedDate);
                        autoOut.setDate(autoOut.getDate() + 2);
                        selectedCheckout = autoOut;
                        checkoutInput.value = formatDate(autoOut);
                    }
                    // Auto switch to checkout or close
                    currentTarget = 'checkout';
                    renderCalendar();
                } else {
                    if (selectedCheckin && clickedDate < selectedCheckin) {
                        // If clicked earlier than checkin, set as checkin instead
                        selectedCheckin = clickedDate;
                        checkinInput.value = clickedDateStr;
                    } else {
                        selectedCheckout = clickedDate;
                        checkoutInput.value = clickedDateStr;
                        closeDatepicker();
                    }
                    renderCalendar();
                }
            });
        });
    }

    function openDatepicker(field) {
        currentTarget = field;
        customSelects.forEach(s => s.classList.remove('is-open'));

        // Position popup beneath the active date field
        const activeWrapper = field === 'checkin' ? checkinWrap : checkoutWrap;
        if (activeWrapper) {
            const wrapRect = activeWrapper.getBoundingClientRect();
            const barRect = bookingBar.getBoundingClientRect();
            const leftOffset = wrapRect.left - barRect.left;
            datepickerPopup.style.left = `${Math.max(10, Math.min(leftOffset, barRect.width - 580))}px`;
        }

        renderCalendar();
        datepickerPopup.classList.add('is-open');
    }

    function closeDatepicker() {
        datepickerPopup.classList.remove('is-open');
    }

    // Trigger on Check-in click
    if (checkinWrap) {
        checkinWrap.addEventListener('click', (e) => {
            e.stopPropagation();
            if (datepickerPopup.classList.contains('is-open') && currentTarget === 'checkin') {
                closeDatepicker();
            } else {
                openDatepicker('checkin');
            }
        });
    }

    // Trigger on Check-out click
    if (checkoutWrap) {
        checkoutWrap.addEventListener('click', (e) => {
            e.stopPropagation();
            if (datepickerPopup.classList.contains('is-open') && currentTarget === 'checkout') {
                closeDatepicker();
            } else {
                openDatepicker('checkout');
            }
        });
    }

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.knsl-datepicker-popup') && !e.target.closest('.field-date')) {
            closeDatepicker();
        }
        if (!e.target.closest('.knsl-custom-select')) {
            customSelects.forEach(s => s.classList.remove('is-open'));
        }
    });

    // Helpers
    function formatDate(d) {
        const y = d.getFullYear();
        const m = String(d.getMonth() + 1).padStart(2, '0');
        const day = String(d.getDate()).padStart(2, '0');
        return `${y}-${m}-${day}`;
    }

    function isSameDate(d1, d2) {
        if (!d1 || !d2) return false;
        return d1.getFullYear() === d2.getFullYear() &&
               d1.getMonth() === d2.getMonth() &&
               d1.getDate() === d2.getDate();
    }

    function isDateInRange(d, start, end) {
        if (!d || !start || !end) return false;
        return d > start && d < end;
    }
});
