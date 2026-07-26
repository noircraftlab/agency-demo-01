# Changelog

All notable changes to this project are documented here.
Format based on [Keep a Changelog](https://keepachangelog.com/).

## [1.0.0] — 2026-07-26
### Added
- **Phase 8 — deployment.** Live demo at https://demo.noircraftlab.com: clean WordPress 7.0.2 install on PHP 8.3, theme installed from zip, **zero plugins active**.
- `screenshot.png` (1200×900) for the WordPress theme browser.
- README rewritten for release: design attribution, illustration substitution table, fidelity techniques, known deviations from source, build and install instructions, Definition of Done.

### Fixed
- Four per-breakpoint decor assets (`apps-waves-1152.svg`, `apps-waves-1920.svg`, `customise-swoosh-1920.svg`, `your-work-spiral-1920.png`) existed only in the build-output folder and were therefore never committed. A fresh clone would have served 404s at 1152–1439px and ≥1920px. Moved into tracked source at `assets/img/`.

## [0.6.0] — 2026-07-25
### Added
- **Phase 7, slice 2 — 1920px pixel-perfect**, all 11 sections.
- `≥1920` container band: 1480px content, centred by auto margin (scrollbar-stable).
- Per-frame decor re-exports for the 1920 frame: Customise swoosh (narrowed to a single word), Your Work spiral (flattened to PNG, opacity in CSS), Apps waves (full 1920 width).

### Changed
- Footer info row at ≥1920 uses a fixed 305.25px column step rather than `space-between`, matching the frame.
- Work Management copy pins one line break with a scoped `nowrap` span at ≥1920.

### Notes
- Five sections (Header, Pricing, Your Data, Sponsors, Testimonials) required no code at 1920 — flex-fill columns and centre-anchored swooshes follow the wider container on their own.

## [0.5.0] — 2026-07-20
### Added
- **Phase 7, slice 1 — 1152px pixel-perfect**, all 11 sections, interpolated across the 1152–1439 band so nothing jumps at 1440.
- Per-frame Apps waves crop for the 1152 frame.

### Changed
- `font-optical-sizing: none` scoped to `≥1152px` — Figma renders Inter at the `opsz` axis default while browsers map `opsz` to font-size, diverging line breaks.

## [0.4.0] — 2026-07-19
### Added
- **Phase 6 — responsive** across all five breakpoint frames (320 / 768 / 1152 / 1440 / 1920).
- Scroll-snap carousels for Pricing and Testimonials on narrow viewports (vanilla CSS + JS dots, no library).
- Word-anchor mechanism for swoosh underlines: the underlined word wraps in a span carrying its own swoosh in em geometry, so the mark follows its word through any line break at any width.

### Fixed
- Swoosh underlines drifted or vanished between breakpoint widths — coordinates had been pixel-anchored to wrap positions at exactly 320px and 768px. Replaced by the word-anchor mechanism above.

## [0.3.0] — 2026-07-18
### Added
- **Phase 4 — interaction.** Testimonials slider (vanilla JS, keyboard, ARIA), mobile burger navigation with Escape and click-outside handling, anchor navigation, hover states.
- **Phase 5 — WordPress Classic Theme.** `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`, `front-page.php` with all 11 sections; `agdemo_` prefix, enqueue pipeline, `build:wp` / `dev:wp` / `sync:wp` scripts.

## [0.2.0] — 2026-07-17
### Added
- **Phase 3 — static preview, all 11 sections** (Header, Hero, Project Management, Work Together, Customise, Pricing, Your Work, Your Data, Sponsors, Apps, Testimonials + Footer).
- 35+ hand-cleaned SVG/PNG assets exported from the source file.
- Three unDraw illustrations replacing the flat placeholder rectangles the CC BY source carries in place of licensed Freepik artwork (see README).

### Fixed
- `text-wrap: balance` and `text-wrap: pretty` removed from the reset — both impose non-greedy line breaking and diverge from the design's wraps.
- Swoosh decorations sat above their headings instead of behind them; z-order corrected.
- Figma SVG exports carried stray background rects (an export-scope setting on the source page). Every export is now opened and stripped before use, with rects inside `defs`/`clipPath` preserved.

## [0.1.0] — 2026-07-09
### Added
- Repository scaffold: static-first project structure (`src/` + `dist/`).
- Dart Sass toolchain (7-1-lite architecture) with `dev` / `build` / `build:prod` scripts.
- Design tokens from Figma measurement: colour bases, Inter type family, 1376px grid, 140px section rhythm, 5 breakpoints.
- `SPEC.md` in repo root (scope, component inventory, Definition of Done, fixed-quote basis).
- README with CC BY 4.0 attribution to the Whitepace SaaS Landing V2 source.

### Notes
- Original paid Freepik illustrations will be replaced with free/open equivalents in later phases (tracked here on swap).
