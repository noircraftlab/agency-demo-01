# agency-demo-01 — Whitepace SaaS Landing (WordPress build)

White-label proof-of-work by **[Noircraft Lab](https://noircraftlab.com)**.

**Goal:** demonstrate the white-label offer — *"send a Figma file, get a fixed quote in 24h and a pixel-perfect WordPress build."* This repo is the process proof: SPEC → estimate → build → overlay diffs → live demo.

- **Live demo:** https://demo.noircraftlab.com *(after Phase 8)*
- **Scope:** all 11 sections, no cuts. Interactive testimonials slider (vanilla JS + keyboard + ARIA). SVG swoosh underlines.
- **Stack:** WordPress Classic Theme · PHP · SCSS (Dart Sass, 7-1-lite) · vanilla JS · BEM. No page builders, no Bootstrap, no jQuery.

## Design source & license

Design: **Whitepace — SaaS Landing Page V2** by **Al Razi Siam**, licensed **CC BY 4.0**.
Figma source: https://www.figma.com/community/file/1035203688168086460

Changes made in this build: original paid Freepik illustrations were replaced with free/open equivalents (noted in `CHANGELOG.md`); markup, styling, and behaviour are an independent implementation. Attribution is retained per CC BY 4.0.

## Build

```bash
npm install
npm run build        # one-off compile → dist/css/main.css
npm run dev          # watch mode
npm run build:prod   # minified → dist/css/main.min.css
```

Open `src/index.html` in a browser for the static preview (Phases 3–4). WordPress theme port lands in Phase 5.

## Status

| Phase | Scope | Status |
|---|---|---|
| 0 | Design selection | ✅ |
| 1 | SPEC + tokens | ✅ |
| 2 | Repo + SCSS toolchain + static skeleton + LocalWP | 🟢 in progress |
| 3 | Static preview — 11 sections | ⬜ |
| 4 | JS: slider + mobile nav | ⬜ |
| 5 | Port to WP Classic Theme | ⬜ |
| 6 | Responsive (320 / 768 / 1152 / 1440 / 1920) | ⬜ |
| 7 | Pixel-perfect polish + overlay diffs | ⬜ |
| 8 | Deploy demo.noircraftlab.com | ⬜ |

Full scope, tokens, component inventory and Definition of Done: see `SPEC.md`.
