# Development Plan & Roadmap — Kinsley Resort Theme Replica

Target Reference: **[https://kinsley.bslthemes.com/resort/](https://kinsley.bslthemes.com/resort/)**

This plan outlines the staged implementation to build the full luxury Resort Hotel theme matching the Kinsley live demo.

---

## 🧭 Milestone Overview

```
[✓] NODE 1 — WordPress Theme Core & Junction Setup
[✓] NODE 2 — Floating Island Header & Sticky Collapse
[✓] NODE 3 — 2-Slide Hero Slideshow & Booking Bar
[ ] NODE 4 — "About Us" Resort Story & Image Collage
[ ] NODE 5 — Rooms & Accommodations Showcase Grid
[ ] NODE 6 — Resort Services & Amenities Grid
[ ] NODE 7 — Full-Width Parallax Video Banner
[ ] NODE 8 — Restaurant & Dining Menu Showcase
[ ] NODE 9 — Guest Reviews / Testimonials Carousel
[ ] NODE 10 — Location & Blog Articles Section
[ ] NODE 11 — Multi-Column Luxury Footer
[ ] NODE 12 — Custom Post Types & Booking Integration
```

---

## 📋 Detailed Node Execution Breakdown

### [✓] NODE 1: Core Theme Setup
- Basic theme files: `style.css`, `functions.php`, `index.php`, `header.php`, `footer.php`, `front-page.php`.
- Folder structure: `assets/css`, `assets/js`, `assets/images`, `template-parts`.
- Symlink/Junction to LocalWP `wp-content/themes/resort-hotel`.
- Port `10004` verification & database activation.

### [✓] NODE 2: Floating Header & Sticky Navigation
- White rounded floating card (`border-radius: 18px; margin: 38px auto;`).
- Cyan wave icon + "Kinsley" calligraphic brand typography.
- Main menu items: Home, About, Rooms, Blog, Contact, Shop.
- Golden active underline on Home item (`#ebb02d`).
- Sticky behavior:
  - Header sits flush at top (`padding: 0 40px`).
  - Top border radius flattens to `0 0 18px 18px`.
  - "BOOK NOW" pill collapses into a circular icon button with `-webkit-transition: 0.4s ease-in-out`.
  - Center navigation stays 100% stationary.
  - WordPress admin bar offset (`top: 32px`).

### [✓] NODE 3: 2-Slide Hero Slideshow & Booking Bar
- Slide 1: Hotel facade & palms (`assets/images/hero-i-1-1.jpg`).
- Slide 2: Oceanfront infinity pool & lounge chairs (`assets/images/hero-i-2-1.jpg`).
- 1.4s smooth crossfade + 6s Ken Burns zoom animation.
- "WELCOME FRIEND" rounded pill badge.
- "Life while traveling is a pure dream." heading.
- Single-row desktop booking bar (Check-in, Check-out, Adults, Children, Search).
- Autoplay every 4.5s with clickable pagination dots.

---

### [ ] NODE 4: About Us Section
- **Visuals:** Image collage using `assets/images/about-01-950x1178.png` and `assets/images/loaction/about-1-950x633.jpg`.
- **Text:**
  - Badge: `ABOUT US`
  - Heading: *"Relax in our Resort & Hotel"*
  - Description copy, luxury bullet points, and Founder signature graphic.
- **Floating Badge:** "5 Stars Luxury Experience" / Year established badge.

### [ ] NODE 5: Rooms & Accommodations Grid
- Category filter tabs: `All Rooms`, `Deluxe`, `Ocean Suite`, `Penthouse`.
- Room Cards using assets from `assets/images/room/`:
  - `room-demo-1-950x535.jpg` — Deluxe Sea View
  - `room-demo-4-950x633.jpg` — Royal Presidential Suite
  - `room-demo-6-950x633.jpg` — Garden Bungalow
  - `room-demo-7-950x633.jpg` — Panoramic Penthouse
  - `room-demo-10-950x633.jpg` — Family Oceanfront
  - `room-demo-14-950x633.jpg` — Sunset Private Villa
- Specs on each card: Guests (2-4), Size (55m²), Beds, Price (`$240 / night`), "Book Room" CTA.

### [ ] NODE 6: Resort Services & Amenities
- 4-column feature grid using assets in `assets/images/ser/`:
  - `serv1-950x1425.jpg` — Surfing & Coastal Adventures
  - `serv2-950x1267.jpg` — Private Beach Cabanas
  - `serv3-950x1273.jpg` — Luxury Spa & Wellness
  - `serv4-950x1238.jpg` — Infinity Poolside Lounge
- Clean card layout with overlay hover effects and service details.

### [ ] NODE 7: Video Tour & Parallax Banner
- Full-bleed cinematic video tour section with custom play button popup.
- Luxury quote: *"The purest form of relaxation surrounded by azure waters."*

### [ ] NODE 8: Restaurant & Dining Showcase
- Chef's curated menu layout:
  - Starters, Main Courses, Coastal Seafood, Desserts.
  - Dish name, ingredients description, price, and dietary tags.

### [ ] NODE 9: Guest Testimonials Carousel
- Client reviews slider with 5-star rating stars, quotation mark icon, avatar, guest name, and stay location.

### [ ] NODE 10: Travel Blog & News Section
- 3-column blog card grid using `assets/images/loaction/blog-1-950x633.jpg`.
- Date badge, title, author, reading time, and "Read More" link.

### [ ] NODE 11: Multi-Column Luxury Footer
- Column 1: Kinsley brand logo, brief description, social icons (Instagram, Facebook, Twitter, TripAdvisor).
- Column 2: Quick Links (About, Accommodations, Dining, Wellness).
- Column 3: Room Types (Deluxe, Suites, Villas, Penthouses).
- Column 4: Newsletter Subscription input + "Subscribe" button.
- Bottom Bar: Copyright notice & privacy terms.

### [ ] NODE 12: Booking System & Dynamic Data
- Custom Post Type: `room` / `accommodation`.
- Custom Meta Fields: Price, capacity, square footage, bed type, gallery.
- Reservation search form hooked to query results.
