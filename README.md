# Resort Hotel — Custom WordPress Theme (Kinsley Replica)

A modern, high-performance custom WordPress theme built from scratch to match the luxury aesthetic and interactive experience of the **[Kinsley Resort & Hotel Theme](https://kinsley.bslthemes.com/resort/)**.

---

## 🌟 Live Demo Reference
- **Inspiration & Target Design:** [Kinsley Resort Demo](https://kinsley.bslthemes.com/resort/)
- **Local Development URL:** `http://localhost:10004`
- **WordPress Admin:** `http://localhost:10004/wp-admin`

---

## 🚀 Features Implemented

### 1. Floating Island Header (`header.php` & `assets/css/header.css`)
- **Desktop Island Bar:** Floats with a 38px top margin over hero visuals.
- **Brand Identity:** Cyan wave circle mark + calligraphic *"Kinsley"* typography.
- **Navigation:** Main links with down-chevrons and custom golden active indicator (`#ebb02d`).
- **Smooth Sticky Mode:**
  - Zero top margin when scrolled (`padding-top: 0`).
  - Top corners flatten seamlessly (`border-radius: 0 0 18px 18px`).
  - *"BOOK NOW"* pill button collapses into a compact circular icon button using `-webkit-transition: 0.4s ease-in-out`.
  - Center navigation and logo remain completely stationary without layout shift.
  - Full compatibility with WordPress Admin Bar (`body.admin-bar`).

### 2. 2-Slide Hero Slideshow (`front-page.php` & `assets/css/hero.css`)
- **Slide 1:** Modern luxury hotel building facade with palm trees (`assets/images/hero-i-1-1.jpg`).
- **Slide 2:** Oceanfront infinity pool with lounge chairs and parasols (`assets/images/hero-i-2-1.jpg`).
- **Ken Burns Animation:** Smooth 1.4s crossfade + gentle 6s parallax zoom (`scale(1.045)`).
- **Autoplay Loop:** Automatically transitions every 4.5 seconds with interactive pagination dots.
- **Badge & Headline:** *"WELCOME FRIEND"* rounded pill and bold *"Life while traveling is a pure dream."* typography.

### 3. Integrated Booking Bar
- **Single-Row Desktop Card:** Check-in date picker, Check-out date picker, Adults selector, Children selector, and circular cyan search action button.
- **Responsive Sizing:** Stacks cleanly on tablets and mobile viewports.

---

## 📁 Repository Documentation Index

| File | Description |
| :--- | :--- |
| **[`README.md`](file:///README.md)** | Overview, features, local setup, and repository guide |
| **[`PLAN.md`](file:///PLAN.md)** / **[`p.md`](file:///p.md)** | Step-by-step roadmap to build all remaining Kinsley sections |
| **[`ARCHITECTURE.md`](file:///ARCHITECTURE.md)** / **[`a.md`](file:///a.md)** | Design system, template hierarchy, hooks, and data models |
| **[`STRUCTURE.md`](file:///STRUCTURE.md)** | Directory tree, file breakdown, and asset mapping |

---

## 🛠️ Local Development Setup

### Requirements
- **LocalWP** (configured with port `10004`)
- **PHP** 8.1+
- **MySQL** 8.0+ / MariaDB 10.11+
- **WordPress** 6.5+

### Installation via Windows Junction
```powershell
# In LocalWP themes directory
cd "C:\Users\SkyFish\Local Sites\resort-hotel\app\public\wp-content\themes"

# Create Junction link to this project
New-Item -ItemType Junction -Path "resort-hotel" -Target "C:\Users\SkyFish\OneDrive\project\Custom WordPress theme"
```

### Activate Theme
```powershell
wp theme activate resort-hotel --path="C:\Users\SkyFish\Local Sites\resort-hotel\app\public"
```

---

## 🎨 Color Palette & Typography
- **Primary Gold:** `#ebb02d` (Hover: `#dc9f1b`)
- **Cyan Accent:** `#14b7ec` (Hover: `#0da3d4`)
- **Dark Slate Text:** `#1b2534`
- **Muted Nav:** `#4b5563`
- **Cart Badge Green:** `#3ab879`
- **Fonts:** *Plus Jakarta Sans* (Body/Headings) & *Caveat* (Brand Logo)

---

## 📄 License
Custom Theme built for Resort & Luxury Hospitality Projects.
