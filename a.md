# Architecture (Shorthand) — Resort Hotel

Target: **[https://kinsley.bslthemes.com/resort/](https://kinsley.bslthemes.com/resort/)**

For full technical specifications, see **[`ARCHITECTURE.md`](file:///ARCHITECTURE.md)**.

## Quick Summary
- **Template Hierarchy:** `front-page.php` ➔ `header.php` + `template-parts/` + `footer.php`.
- **Styling Architecture:** Modular CSS (`header.css`, `hero.css`, `style.css`) with CSS custom properties.
- **Logic:** Vanilla JS (`header.js` for sticky & mobile, `hero-slider.js` for Ken Burns background crossfade).
- **Typography:** *Plus Jakarta Sans* for clean luxury grotesk readability, *Caveat* for signature Kinsley script branding.
- **Color System:** Gold (`#ebb02d`), Cyan (`#14b7ec`), Dark Slate (`#1b2534`), Badge Green (`#3ab879`).
- **Data Models:** Room CPT (`price`, `capacity`, `size`, `bed_type`, `gallery`), Services CPT, Reviews CPT.
