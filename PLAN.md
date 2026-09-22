# Development Plan & Roadmap — Kinsley Resort Theme Replica

Target Reference: **[https://kinsley.bslthemes.com/resort/](https://kinsley.bslthemes.com/resort/)**

This plan outlines the staged implementation to build the full luxury Resort Hotel theme matching the Kinsley live demo.

---

## 🧭 Milestone Overview

```
[✓] NODE 1 — WordPress Theme Core & Junction Setup
[✓] NODE 2 — Floating Island Header & Sticky Collapse
[✓] NODE 3 — 2-Slide Hero Slideshow & Booking Bar
[✓] NODE 4 — "About Us" Resort Story & Philosophy ("Our goal and philosophy")
[✓] NODE 5 — Rooms & Accommodations Showcase Grid & CTA Island
[✓] NODE 6 — Resort Services & Amenities Grid ("Discover the touch of nature")
[ ] NODE 7 — Full-Width Parallax Video Banner
[ ] NODE 8 — Restaurant & Dining Menu Showcase
[✓] NODE 9 — Guest Reviews / Testimonials Carousel ("Customer Voices: Hear What They Say!")
[✓] NODE 10 — Location & Blog Articles Section ("Latest blog publications")
[✓] NODE 11 — Multi-Column Luxury Footer
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

### [✓] NODE 4: About Us Section ("Our goal and philosophy")
- **Visuals:** Cut-out traveler visual (`assets/images/about-01-950x1178.png`), ambient watercolor splash (`assets/images/pat4.png`), and floating nautical starfish (`assets/images/pat-1.png`, `assets/images/pat-3.png`).
- **Text:**
  - Badge: `ABOUT US` in rounded mint pill.
  - Heading: *"Our goal and philosophy"*
  - Two story paragraphs describing Kinsley Hotel Goleta coastal experience.
- **CTAs:**
  - Primary: Golden pill button `GET IN TOUCH` with mail SVG icon.
  - Secondary: Link `BOOK NOW` with right arrow icon.

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

### [✓] NODE 9: Customer Voices & Reviews Section ("Hear What They Say!")
- White floating island card with `border-radius: 24px` and dotted world map pattern (`assets/images/pat5.png`).
- Centered header with `REVIEWS` mint pill badge and `Customer Voices: Hear What They Say!` heading.
- 7-avatar selector row using photos from `assets/images/team/` (`face1.jpg` to `face7.jpg`).
- Prominent golden ring and glow on active reviewer avatar (`Sarah Newman` default).
- Cyan quotation mark icon SVG (`#14b7ec`), reviewer name, source platform (`ENVATO MARKET`, `TRIPADVISOR`, etc.), and quote text.
- Left mint navigation button (`#knslReviewPrevBtn`) and right gold navigation button (`#knslReviewNextBtn`).
- Interactive JS carousel (`assets/js/reviews.js`) supporting direct avatar clicking, prev/next arrows, smooth crossfade, and autoplay with pause on hover.

### [✓] NODE 10: Travel Blog Section ("Latest blog publications")
- 3-column article card grid with image hover zoom and elevation:
  - Card 1: `about-1-950x633.jpg` — "The ultimate guide to traveling when you have no money"
  - Card 2: `blog-1-950x633.jpg` — "Explore the cultural wealth: temples, palaces and more"
  - Card 3: `about-8-3-950x585.jpg` — "10 easy steps and tips for planning your next vacation"
- Author & Date meta pill bar (`Hana Evans`, `December 21, 2021`) with custom SVG icons.
- Excerpt typography, dotted divider line, and `READ MORE →` link with hover transition.
- Top-right ambient watercolor splash backdrop (`assets/images/pat4.png`).
- Bottom travel tips summary text on left, and golden pill `VIEW ALL` button on right.

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
