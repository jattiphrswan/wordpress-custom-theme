/**
 * Header interactions: Mobile menu toggle, sticky header, and button collapse
 */
document.addEventListener('DOMContentLoaded', function() {
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.site-navigation');
  const headerWrapper = document.querySelector('.site-header-wrapper');

  // Mobile navigation toggle
  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', function() {
      const expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      navMenu.classList.toggle('is-open');
    });
  }

  // Sticky header on scroll
  function handleStickyHeader() {
    if (!headerWrapper) return;
    if (window.scrollY > 40) {
      headerWrapper.classList.add('is-sticky');
    } else {
      headerWrapper.classList.remove('is-sticky');
    }
  }

  window.addEventListener('scroll', handleStickyHeader, { passive: true });
  handleStickyHeader();
});
