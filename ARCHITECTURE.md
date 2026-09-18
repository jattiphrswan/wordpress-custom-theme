# Theme Architecture & Technical Specification

This document details the architectural blueprint of the **Resort Hotel (Kinsley Replica)** WordPress theme.

---

## 1. WordPress Template Hierarchy

```
[Request URL]
     │
     ├── Front Page (/) ──────────────► front-page.php (Hero, About, Rooms, Services, Reviews)
     ├── Blog Page (/blog) ───────────► index.php or home.php
     ├── Single Post (/blog/post-name) ─► single.php
     ├── Room Single (/rooms/deluxe) ──► single-room.php
     ├── Room Archive (/rooms) ────────► archive-room.php
     ├── Page (/about, /contact) ─────► page.php
     └── 404 Error ───────────────────► 404.php
```

---

## 2. Design System Tokens & Global CSS

```css
:root {
  /* Brand Accents */
  --primary-gold: #ebb02d;
  --primary-gold-hover: #dc9f1b;
  --cyan-brand: #14b7ec;
  --cyan-brand-hover: #0da3d4;
  --badge-green: #3ab879;
  
  /* Typography Colors */
  --text-dark: #1b2534;
  --text-body: #4b5563;
  --text-muted: #6c757d;
  --text-light: #ffffff;
  
  /* Surfaces & Backgrounds */
  --bg-body: #ffffff;
  --bg-card: #ffffff;
  --bg-soft-cyan: #eef8f9;
  --bg-soft-gold: #fef9ee;
  
  /* Shadows */
  --shadow-navbar: 0 14px 40px rgba(0, 0, 0, 0.08), 0 2px 6px rgba(0, 0, 0, 0.03);
  --shadow-card: 0 16px 45px rgba(22, 45, 75, 0.08);
  --shadow-button: 0 4px 14px rgba(235, 176, 45, 0.35);

  /* Fonts */
  --font-body: 'Plus Jakarta Sans', system-ui, sans-serif;
  --font-brand: 'Caveat', cursive, sans-serif;
}
```

---

## 3. Modular Asset Architecture

```
assets/
├── css/
│   ├── header.css      # Floating island navbar, mobile drawer, sticky states
│   ├── hero.css        # Slideshow crossfade, Ken Burns effect, booking bar
│   ├── about.css       # (Planned) Story section, image collage
│   ├── rooms.css       # (Planned) Accommodations grid & filter tabs
│   └── footer.css      # (Planned) Multi-column footer & widgets
├── js/
│   ├── header.js       # Sticky scroll detection, mobile navigation toggle
│   ├── hero-slider.js  # Autoplay background crossfade, pagination dots
│   └── booking.js      # (Planned) Booking form validation & date sync
└── images/
    ├── hero-i-1-1.jpg  # Slide 1 (Hotel Building)
    ├── hero-i-2-1.jpg  # Slide 2 (Infinity Pool)
    ├── room/           # 6 Room demo images
    ├── ser/            # 4 Service demo images
    └── loaction/       # Location & blog demo images
```

---

## 4. JavaScript Execution Strategy

1. **Vanilla JavaScript:** Zero heavy dependencies (no jQuery required on the frontend, no bloated libraries).
2. **Event Listeners:** Efficient passive scroll listeners (`{ passive: true }`) for silky 60fps scrolling.
3. **State Management:** CSS class toggling (`.is-sticky`, `.active`, `.is-open`) drives smooth GPU-accelerated CSS animations.

---

## 5. Custom Post Types & Data Structure (Roadmap)

### CPT: `room` (`mphb_room_type` compatible)
- **Fields:**
  - `price_per_night` (number)
  - `max_guests` (number)
  - `room_size` (sq meters)
  - `bed_type` (string: King, Queen, Twin)
  - `room_gallery` (image array)
  - `amenities_list` (taxonomy / array)

### CPT: `service`
- **Fields:**
  - `service_icon` (SVG / class)
  - `service_duration` (string)
  - `service_price` (string)

---

## 6. WordPress Standards & Security
- All URLs output via `esc_url()`.
- All text strings sanitized with `esc_html__()` and `_e()`.
- All form inputs validated and sanitized before query execution.
- Strict adherence to WordPress Theme Review Guidelines.
