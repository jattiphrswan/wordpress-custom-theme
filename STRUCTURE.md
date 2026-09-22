# File & Directory Structure — Resort Hotel

This file documents the complete file and folder structure of the **Resort Hotel (Kinsley Replica)** WordPress theme.

---

## 🌳 Theme Directory Blueprint

```
Custom WordPress theme/
├── style.css                 # Theme metadata header & global base styles
├── functions.php             # Theme setup, nav menus, scripts/styles enqueue
├── index.php                 # Fallback WordPress blog/archive template
├── header.php                # Site header, HTML head, floating navigation bar
├── footer.php                # Site footer, copyright, scripts loader
├── front-page.php            # Homepage template (Hero slideshow, booking bar, content)
├── preview-header.html       # Standalone HTML preview for browser testing
│
├── README.md                 # Complete project documentation & setup
├── PLAN.md                   # Roadmap to build all remaining Kinsley sections
├── p.md                      # Plan shorthand reference
├── ARCHITECTURE.md           # Technical architecture, tokens & data model
├── a.md                      # Architecture shorthand reference
├── STRUCTURE.md              # Theme tree, files & asset inventory
├── strctre.md                # Structure shorthand reference
├── read.md                   # Quick reference readme
│
├── assets/
│   ├── css/
│   │   ├── header.css        # Island navbar, sticky collapse (0.4s ease-in-out)
│   │   ├── hero.css          # Ken Burns slideshow, booking bar, pagination
│   │   ├── services.css      # Services 4-column staggered cards
│   │   ├── features.css      # 6-card feature grid with icons
│   │   ├── about.css         # About Us traveler visual, watercolor splash & CTAs
│   │   ├── rooms.css         # Room showcase grid & filter pills
│   │   ├── cta.css           # Call to action 24/7 inquiry island
│   │   ├── benefits.css      # Benefits numbered list & circular collage
│   │   └── footer.css        # Island footer & newsletter subscribe
│   │
│   ├── js/
│   │   ├── header.js         # Sticky scroll listener & mobile drawer toggle
│   │   └── hero-slider.js    # 2-Slide background crossfade & autoplay logic
│   │
│   └── images/
│       ├── hero-i-1-1.jpg    # Slide 1: Hotel facade & palm trees (1920x772)
│       ├── hero-i-2-1.jpg    # Slide 2: Ocean infinity pool & lounge (1920x860)
│       ├── about-01-950x1178.png # About section featured image
│       ├── pat-1.png         # Decorative starfish accent 1
│       ├── pat-3.png         # Decorative star accent 2
│       ├── pat4.png          # Coastal background texture
│       │
│       ├── room/             # Accommodation demo photos
│       │   ├── room-demo-1-950x535.jpg
│       │   ├── room-demo-4-950x633.jpg
│       │   ├── room-demo-6-950x633.jpg
│       │   ├── room-demo-7-950x633.jpg
│       │   ├── room-demo-10-950x633.jpg
│       │   └── room-demo-14-950x633.jpg
│       │
│       ├── ser/              # Resort services & amenities demo photos
│       │   ├── serv1-950x1425.jpg (Surfing)
│       │   ├── serv2-950x1267.jpg (Beach Cabana)
│       │   ├── serv3-950x1273.jpg (Luxury Spa)
│       │   └── serv4-950x1238.jpg (Pool Lounge)
│       │
│       └── loaction/         # Location & blog demo photos
│           ├── about-1-950x633.jpg
│           ├── about-8-3-950x585.jpg
│           └── blog-1-950x633.jpg
│
└── template-parts/           # Reusable template components
    ├── section-services.php  # Services staggered 4-card grid & pricing
    ├── section-features.php  # 6-card features with icons
    ├── section-about.php     # About Us traveler visual, watercolor splash & CTAs
    ├── section-rooms.php     # Rooms showcase with filter tabs
    ├── section-cta.php       # Call to action 24/7 inquiry box
    └── section-benefits.php  # Why visitors chose us numbered items & collage
```

---

## 📄 File Purposes & Responsibilities

| File | Purpose |
| :--- | :--- |
| `functions.php` | Hooks `after_setup_theme` (title-tag, thumbnails, custom-logo, html5, nav menus) and `wp_enqueue_scripts` (fonts, CSS, JS). |
| `header.php` | Generates doctype, `<head>`, `wp_head()`, `<body>`, `wp_body_open()`, and the floating `.site-navbar`. |
| `front-page.php` | Main homepage orchestrator rendering the hero slideshow, booking form, and content blocks. |
| `footer.php` | Closes `<main>`, renders `<footer>`, invokes `wp_footer()`, and closes `</body></html>`. |
| `index.php` | The required default fallback template for archives and standard posts. |
| `assets/css/header.css` | Handles floating island styling, sticky top transition, and Book Now button collapse animation. |
| `assets/css/hero.css` | Handles Ken Burns background parallax, crossfade animation, and booking form layout. |
| `assets/js/header.js` | Toggles `.is-sticky` class on scroll (>40px) and controls mobile navigation toggle. |
| `assets/js/hero-slider.js` | Cycles slides 1 & 2 every 4.5s with interactive dot navigation. |
