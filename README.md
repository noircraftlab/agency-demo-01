# agency-demo-01 — Whitepace SaaS Landing (WordPress build)

White-label proof-of-work by **[Noircraft Lab](https://noircraftlab.com)** · Roman Miroshnychenko.

**What this is:** a third-party Figma design rebuilt as a custom WordPress Classic Theme — no page builder, no framework, no plugins. It exists to demonstrate one specific offer to agencies: *send a Figma file, get a fixed quote in 24 hours and a pixel-perfect WordPress build.*

**Live demo:** https://demo.noircraftlab.com

The repo is deliberately a record of process, not just output: `SPEC.md` holds the measurement and the estimate basis written **before** the build; `CHANGELOG.md` tracks what shipped in each phase.

---

## Design source & licence

Design: **Whitepace — SaaS Landing Page V2** by **Al Razi Siam**, licensed **CC BY 4.0**.
Figma community file: https://www.figma.com/community/file/1035203688168086460

Attribution is retained per CC BY 4.0. Markup, styling, responsive behaviour and JavaScript are an independent implementation — nothing was exported or auto-generated from the design file.

### Illustration substitutions

Three image blocks in the community file are flat `#C4DEFD` rectangles rather than artwork. This is not a broken copy: the original illustrations are licensed Freepik assets, which the author cannot redistribute inside a CC BY file.

Those three placeholders were filled with open [unDraw](https://undraw.co) illustrations, recoloured to the design's primary `#4F9CF9`:

| File | Section |
|---|---|
| `hero-illustration.svg` | Hero — unDraw *Scrum Board* |
| `pm-illustration.svg` | Project Management |
| `customise-illustration.svg` | Customise |

Everything else — swoosh underlines, sponsor marks, the Work Together vector composition, the Your Data chart, testimonial avatars — is exported from the CC BY source and cleaned by hand (Figma exports carry stray background rects; each was opened, stripped, and re-rendered against its target background before use).

---

## Stack

- WordPress **Classic Theme** · PHP 8.3+
- **SCSS** (Dart Sass, 7-1-lite architecture) · BEM
- **Vanilla JS** (ES6+)

Deliberately absent: Elementor and other page builders, Bootstrap, jQuery, CSS/JS libraries, parent themes, build frameworks beyond Sass.

**The live demo runs on a clean WordPress install with zero plugins active.** The theme carries no dependencies of its own.

---

## Scope

All **11 sections**, none cut or simplified:

Header · Hero · Project Management · Work Together · Customise · Pricing · Your Work · Your Data · Sponsors · Apps · Testimonials + Footer

- **Testimonials slider** — vanilla JS, keyboard operable, ARIA-annotated
- **Mobile navigation** — burger panel, Escape and click-outside to close
- **Swoosh underlines** — SVG, word-anchored so they track their word through any line break

---

## Responsive & fidelity

Five breakpoint frames from the source file: **320 · 768 · 1152 · 1440 · 1920**.

1440 is the reference frame. 1152 and 1920 received dedicated pixel-perfect passes; 320 and 768 are covered by the responsive layer.

Three techniques worth naming, since they are the difference between "close" and "matches":

**Line-wrap pre-measurement.** Figma and the browser disagree about where text breaks. Before writing CSS for any tight text box, wraps were measured with `fontTools` against the Inter variable font at the exact optical size and weight of the frame. Where clearance fell below 5px, a non-breaking space or scoped `nowrap` pins the break rather than leaving it to chance.

**Optical sizing.** Figma renders Inter at the `opsz` axis default (14); browsers map `opsz` to font-size, which shifts line breaks. `font-optical-sizing: none` is scoped to `≥1152px` to match the desktop frames without disturbing the mobile passes.

**Per-frame decor.** Several decorative elements are not the same artwork scaled — the 1920 frame crops them differently. Those were re-exported per frame (`*-1920`, `*-1152`) and swapped by media query, rather than stretched.

### Known deviations from source

Documented rather than silently corrected.

The first three are inconsistencies in the source design itself. They were reproduced verbatim — the brief was to match the design, not to improve it:

- **Header navigation** is set in DM Sans while the rest of the design uses Inter (source nodes `5:38247`–`5:38256`).
- **Customise CTA** is set in Montserrat (source node `5:37386`).
- **Footer column gaps** are 15px in one column and 16px in the other two.

The build therefore loads three type families rather than one, deliberately.

One genuine tolerance:

- Decorative swoosh placement sits within ~2px of the frame at some intermediate widths. Swooshes are anchored to the word they underline rather than to fixed coordinates, so they follow their word through any line break; the trade-off is a small drift between the measured frames.

---

## Repository layout

```
├── assets/img/          source images (SVG/PNG) — tracked
├── src/
│   ├── index.html       static preview (phases 3–4)
│   └── scss/            7-1-lite: abstracts, base, components, sections
├── theme/
│   └── agency-demo-01/  WordPress theme — PHP templates tracked,
│                        assets/ is build output and gitignored
├── SPEC.md              measurement, tokens, component inventory, DoD
└── CHANGELOG.md
```

---

## Build

```bash
npm install

npm run build      # compile SCSS → dist/css/main.css
npm run dev        # watch mode (static preview)

npm run build:wp   # compile + sync assets → theme/agency-demo-01/
npm run dev:wp     # watch mode (WordPress theme)
```

Open `src/index.html` for the static preview, or point a local WordPress install at the theme.

Note: `build`/`dev` write to `dist/`, `build:wp`/`dev:wp` write into the theme. Run the one matching what you are looking at — they do not update each other.

## Installing the theme

1. `npm install && npm run build:wp`
2. Zip the folder `theme/agency-demo-01`
3. WordPress admin → **Appearance → Themes → Add New Theme → Upload Theme**
4. Activate. No plugins required, no configuration needed — the front page renders from `front-page.php`.

On Windows, build the zip through File Explorer (**Send to → Compressed folder**) rather than PowerShell's `Compress-Archive`, which writes backslash path separators that WordPress rejects.

---

## Definition of Done

| Check | Status |
|---|---|
| All 11 sections, no cuts | ✅ |
| Overlay diffs ≤2px on structural elements | ✅ |
| Matches all five breakpoint frames | ✅ |
| Slider + navigation keyboard-operable | ✅ |
| Clean activation on fresh WordPress, zero plugins | ✅ |
| Live demo | ✅ |
| W3C validation | ✅ **0 errors** (3 warnings — testimonial cards use `<article>` without a heading; a deliberate semantic choice, see note below) |
| Lighthouse desktop — Performance ≥90 / Accessibility ≥95 | ✅ **Performance 99 · Accessibility 96** (Best Practices 100) |

Measured 26 Jul 2026 against the live demo. Lighthouse: emulated desktop, Chromium 150 / Lighthouse 13.3.0, incognito, single page session — FCP 0.5s · LCP 0.9s · **TBT 0ms** · CLS 0.008.

The three W3C warnings are `<article class="testimonials__card">` elements carrying a quote and an attribution rather than a heading. Swapping them for `<blockquote>` would clear the warnings; `<article>` was kept because each card is a self-contained, independently distributable unit, which is what the element is for. Noted here rather than quietly changed.

---

## Credits

- **Design:** Al Razi Siam — *Whitepace SaaS Landing Page V2*, CC BY 4.0
- **Illustrations (substitutions):** [unDraw](https://undraw.co)
- **Build:** Roman Miroshnychenko — [Noircraft Lab](https://noircraftlab.com)

## Licence

The design is © Al Razi Siam under CC BY 4.0 and remains so.

The code in this repository is © Noircraft Lab, published as portfolio and demonstration work. If you would like to reuse any of it, get in touch: hello@noircraftlab.com
