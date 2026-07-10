# SPEC — Whitepace Landing Page V2 → Pixel-Perfect WordPress Theme

**Project:** `agency-demo-01`
**Type:** Figma-to-WordPress conversion (agency workflow demonstration)
**Executor:** Noircraft Lab — noircraftlab.com
**Date:** 2026-07-08 · **Status:** Approved

---

## 1. Source

| | |
|---|---|
| Design | [Whitepace — SaaS Landing Page](https://www.figma.com/community/file/1156860863353724933) by Al Razi Siam |
| License | CC BY 4.0 (author credited here and in README; commercial use permitted) |
| Page implemented | **Landing Page V2**, desktop 1440px reference frame |
| Responsive source | Breakpoint V2 page: 320 / 768 / 1152 / 1440 / 1920 px frames |
| Note | Several stock illustrations in the original are Freepik-licensed and are replaced with free-license equivalents (documented in README). All layout, spacing and typography follow the source file exactly. |

## 2. Scope — 11 sections, single page

1. Header (sticky nav: 4 items with dropdown carets, Login, CTA)
2. Hero (H1, lead, CTA, illustration, background swoosh)
3. Project Management (text left / image right)
4. Work Together (image left / text right, circular collage)
5. Customise It to Your Needs (text left / illustration right)
6. Pricing (3 cards; center card emphasized, dark bg)
7. Your Work, Everywhere You Are (centered text + CTA)
8. 100% Your Data (text left / icon-diagram right)
9. Our Sponsors (heading + 4 logos: Apple, Microsoft, Slack, Google)
10. Work with Your Favorite Apps (icon collage left / text right)
11. Testimonials (3 cards + **interactive slider**, prev/next arrows) + Footer (4 columns, language selector, legal links, social icons)

Decorative hand-drawn underlines ("swoosh") under section headings are **in scope** — exported as SVG, positioned per design.

## 3. Design tokens (extracted from Figma published styles)

### 3.1 Color — Primary (blue)

| Token | Hex |
|---|---|
| primary-50 | #DCEBFE |
| primary-100 | #C4DEFD |
| primary-200 | #A7CDFC |
| primary-300 | #8ABDFB |
| primary-400 | #6CACFA |
| **primary-500** | **#4F9CF9** |
| primary-600 | #4282CF |
| primary-700 | #3568A6 |
| primary-800 | #284E7D |
| primary-900 | #1A3453 |
| primary-1000 | #101F32 |

### 3.2 Color — Secondary (navy)

| Token | Hex |
|---|---|
| secondary-50 | #CDD7E3 |
| secondary-100 | #ABBDD0 |
| secondary-200 | #819BB9 |
| secondary-300 | #587AA2 |
| secondary-400 | #2E598A |
| **secondary-500** | **#043873** |
| secondary-600 | #032F60 |
| secondary-700 | #03254D |
| secondary-800 | #021C3A |
| secondary-900 | #011326 |
| secondary-1000 | #010B17 |

Accent colors (yellow CTA family) are not published as styles in the source file — extracted per-node during build and added to `_tokens.scss` with source node references.

### 3.3 Typography — Inter (Google Fonts)

| Style | Weight | Size | Line height | Tracking |
|---|---|---|---|---|
| H1 | Bold | 72 | auto | −2% |
| H2 | Bold | 64 | auto | −2% |
| H3 | Bold | 54 | auto | −2% |
| H4 | Bold | 36 | auto | −2% |
| H5 | Bold | 28 | 36 | −2% |
| P1 Semibold | Semi Bold | 24 | 36 | 0 |
| P1 Regular | Regular | 24 | 32 | −2% |
| P2 Bold | Bold | 18 | auto | −2% |
| P2 Medium | Medium | 18 | 23 | −2% |
| P2 Regular | Regular | 18 | 30 | −2% |
| P3 Medium | Medium | 16 | auto | −2% |
| P3 Regular | Regular | 16 | 20 | −2% |

### 3.4 Layout

- Container: 1376px content width, 32px side padding (desktop 1440)
- Breakpoints: **320, 768, 1152, 1440, 1920** (per Breakpoint V2 frames)
- Section vertical rhythm: 140px top padding (recurring)

## 4. Components inventory

| Component | Variants / notes |
|---|---|
| Button | primary (blue), accent (yellow), ghost/login; with/without arrow icon 14×14 |
| Nav item | label + caret; dropdown markup (static) |
| Price card | default / emphasized (dark, taller); heading, price, lead, bullet list with icons, CTA |
| Bullet point | check icon 18×18 + text |
| Testimonial card | avatar 70px, quote, name, role, 5-star row; first card colored variant |
| Slider controls | circular arrow buttons 75px |
| Section heading | H2 + swoosh SVG + lead paragraph |
| Footer column | title + link list |
| Logo | SVG icon 37×29 + wordmark |

## 5. Behaviors (vanilla JS, no libraries)

1. **Testimonial slider** — prev/next, translate-based, keyboard accessible (arrow keys, focus management), `aria-live` announcements, loops
2. **Mobile navigation** — burger toggle ≤768, focus trap, `aria-expanded`
3. Smooth scroll for anchor links; sticky header

## 6. Technical requirements

- WordPress Classic Theme: PHP 8.3 compatible, `front-page.php` + `template-parts/`, escaped output, i18n-ready strings
- **SCSS** (Dart Sass), 7-1-lite architecture: `abstracts/` (tokens, mixins), `base/`, `components/`, `sections/`; compiled + minified to `style.css` asset
- Vanilla JS (ES6+), no jQuery/Bootstrap/Elementor
- BEM naming
- Images: WebP + fallback, lazy loading below the fold, explicit width/height
- Git history: meaningful commits per stage (HTML preview → WP port → pixel-perfect → responsive)

## 7. Definition of Done

- [ ] Overlay diff vs Figma at 1440: visual deviation ≤ 2px on structural elements
- [ ] All 5 breakpoints match corresponding Figma frames
- [ ] Slider + mobile nav pass keyboard-only test
- [ ] W3C HTML validation: 0 errors
- [ ] Lighthouse (desktop): Performance ≥ 90, Accessibility ≥ 95
- [ ] Theme activates cleanly on fresh WP install, no console errors
- [ ] Live demo deployed: demo.noircraftlab.com
- [ ] README with Figma source credit, overlay diffs, process notes

## 8. Effort estimate (fixed-quote basis)

| Stage | Hours |
|---|---|
| 1. Design analysis + SPEC | 1.5 |
| 2. Project setup (repo, SCSS toolchain, LocalWP) | 1.0 |
| 3. HTML/SCSS static preview — 11 sections | 6.0–7.0 |
| 4. JS behaviors (slider, mobile nav) | 1.5 |
| 5. WordPress theme port | 2.5–3.0 |
| 6. Responsive pass (5 breakpoints) | 2.0–2.5 |
| 7. Pixel-perfect polish + overlay diffs | 1.5–2.0 |
| 8. Deploy + README | 1.0 |
| **Total** | **17.0–19.5 h** |

> In a live white-label engagement this estimate converts to a fixed quote within 24h of receiving the Figma file. Quote = hours × studio rate; revisions to match source design are included (pixel-perfect is the deliverable, not an extra).

## 9. Out of scope

- CMS-editable content for every string (demo keeps section data in template parts / `functions.php` arrays)
- Working dropdown menus content, form backends, multi-page routing
- The original file's V1 page and prototype animations
