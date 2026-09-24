/**
 * Kinsley Resort Hotel — Services & FAQ Accordion Interactive Script
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. FAQ Accordion Interaction
    const faqItems = document.querySelectorAll('.knsl-faq-item');

    faqItems.forEach(function (item) {
        const header = item.querySelector('.knsl-faq-header');
        if (!header) return;

        header.addEventListener('click', function () {
            const isActive = item.classList.contains('is-active');

            // Close all items in the same FAQ container
            const parent = item.closest('.knsl-single-faq');
            if (parent) {
                parent.querySelectorAll('.knsl-faq-item').forEach(function (sibling) {
                    sibling.classList.remove('is-active');
                    const btn = sibling.querySelector('.knsl-faq-header');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });
            }

            // Toggle current item
            if (!isActive) {
                item.classList.add('is-active');
                header.setAttribute('aria-expanded', 'true');
            } else {
                header.setAttribute('aria-expanded', 'false');
            }
        });
    });
});
