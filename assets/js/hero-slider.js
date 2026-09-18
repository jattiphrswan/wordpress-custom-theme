/**
 * Hero Background Slideshow with Parallax / Fade Animation
 * Compatible with Kinsley Resort Hero Slider (hero-i-1-1.jpg & hero-i-2-1.jpg)
 */
document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.hero-slide');
  const dots = document.querySelectorAll('.hero-dot');
  if (!slides || slides.length < 2) return;

  let currentIndex = 0;
  let autoplayTimer = null;
  const slideDuration = 4500; // Time per slide in ms

  function goToSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
    currentIndex = index;
  }

  function nextSlide() {
    const nextIndex = (currentIndex + 1) % slides.length;
    goToSlide(nextIndex);
  }

  function startAutoplay() {
    stopAutoplay();
    autoplayTimer = setInterval(nextSlide, slideDuration);
  }

  function stopAutoplay() {
    if (autoplayTimer) {
      clearInterval(autoplayTimer);
      autoplayTimer = null;
    }
  }

  // Clickable Pagination Dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
      goToSlide(index);
      startAutoplay();
    });
  });

  // Start automatic transition loop
  startAutoplay();
});
