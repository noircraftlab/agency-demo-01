/* agency-demo-01 — vanilla JS entry.
   Phase 4 · step 1: Testimonials slider (DOM rotation, fade,
   keyboard ←/→, prefers-reduced-motion) + href="#" jump guard.
   Phase 4 · step 2: Mobile nav (burger toggle, Escape, outside
   click, auto-close on anchor click / desktop resize). */
(() => {
  'use strict';

  /* ---------- Testimonials slider ---------- */
  const initTestimonialsSlider = () => {
    const grid = document.querySelector('.testimonials__grid');
    const navBtns = document.querySelectorAll('.testimonials__nav');
    if (!grid || navBtns.length !== 2) return;

    const [prevBtn, nextBtn] = navBtns;
    const DESKTOP = window.matchMedia('(min-width: 1152px)'); // = $breakpoints lg
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const FADE_MS = 220;
    let busy = false;

    if (!reduceMotion) {
      grid.style.transition = `opacity ${FADE_MS}ms ease`;
    }

    const rotate = (dir) => {
      if (busy) return;
      // <lg the row is a scroll-snap carousel (Phase 6) — DOM rotation
      // would fight the scroll position; arrows are display:none there.
      if (!DESKTOP.matches) return;
      const step = () => {
        if (dir === 'next') {
          grid.appendChild(grid.firstElementChild);   // 1st card → end
        } else {
          grid.insertBefore(grid.lastElementChild, grid.firstElementChild); // last → front
        }
      };

      if (reduceMotion) { step(); return; }

      busy = true;
      grid.style.opacity = '0';
      window.setTimeout(() => {
        step();
        grid.style.opacity = '1';
        window.setTimeout(() => { busy = false; }, FADE_MS);
      }, FADE_MS);
    };

    prevBtn.addEventListener('click', () => rotate('prev'));
    nextBtn.addEventListener('click', () => rotate('next'));

    // Keyboard ←/→ when focus is inside the testimonials section
    const section = grid.closest('.testimonials');
    if (section) {
      section.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft')  { e.preventDefault(); rotate('prev'); }
        if (e.key === 'ArrowRight') { e.preventDefault(); rotate('next'); }
      });
    }
  };

  /* ---------- href="#" jump guard ----------
     Static demo: placeholder links must not scroll to top.
     Matches ONLY the bare "#" — real anchors (#pricing etc.)
     pass through untouched. */
  const initHashGuard = () => {
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href="#"]');
      if (link) e.preventDefault();
    });
  };

  /* ---------- Mobile nav (Phase 4 · step 2) ----------
     Burger toggles .is-open on .site-header; the dropdown panel
     itself is pure CSS (<lg media query in _header.scss).
     Desktop ≥lg: burger is display:none — this code idles. */
  const initMobileNav = () => {
    const header = document.querySelector('.site-header');
    const burger = document.querySelector('.site-header__burger');
    const panel  = document.querySelector('.site-header__right');
    if (!header || !burger || !panel) return;

    const DESKTOP = window.matchMedia('(min-width: 1152px)'); // = $breakpoints lg

    const setOpen = (open) => {
      header.classList.toggle('is-open', open);
      burger.setAttribute('aria-expanded', String(open));
    };

    burger.addEventListener('click', () => {
      setOpen(!header.classList.contains('is-open'));
    });

    // Escape closes and returns focus to the burger
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && header.classList.contains('is-open')) {
        setOpen(false);
        burger.focus();
      }
    });

    // Click outside the header closes the panel
    document.addEventListener('click', (e) => {
      if (header.classList.contains('is-open') && !header.contains(e.target)) {
        setOpen(false);
      }
    });

    // Following an in-page anchor from the panel closes it
    panel.addEventListener('click', (e) => {
      if (e.target.closest('a[href^="#"]')) setOpen(false);
    });

    // Growing past lg resets the state (panel is CSS-hidden anyway)
    DESKTOP.addEventListener('change', (e) => {
      if (e.matches) setOpen(false);
    });
  };

  /* ---------- Carousel dots (Phase 6) ----------
     ≤lg the Pricing / Testimonials rows are CSS scroll-snap
     carousels; dots mirror the nearest-snapped card and jump to
     one on click. Pure progressive enhancement: without JS the
     carousels still scroll and snap. */
  const initCarouselDots = () => {
    const wire = (gridSel, dotsSel) => {
      const grid = document.querySelector(gridSel);
      const dots = document.querySelectorAll(dotsSel);
      if (!grid || !dots.length) return;

      const maxScroll = () => grid.scrollWidth - grid.clientWidth;

      const setActive = (idx) => {
        dots.forEach((d, i) => d.classList.toggle('is-active', i === idx));
      };

      dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
          // Progress-based target: dot i ↔ i/(N−1) of the scroll range.
          // Nearest-center math fails when 2+ cards fit the viewport
          // (the last card's center never reaches the container center).
          grid.scrollTo({
            left: (i / (dots.length - 1)) * maxScroll(),
            behavior: 'smooth',
          });
        });
      });

      let raf = 0;
      const sync = () => {
        raf = 0;
        const range = maxScroll();
        const idx = range <= 0
          ? 0
          : Math.round((grid.scrollLeft / range) * (dots.length - 1));
        setActive(Math.min(dots.length - 1, Math.max(0, idx)));
      };

      grid.addEventListener('scroll', () => {
        if (!raf) raf = window.requestAnimationFrame(sync);
      }, { passive: true });

      sync();
    };

    wire('.pricing__grid', '.pricing__dot');
    wire('.testimonials__grid', '.testimonials__dot');
  };

  document.addEventListener('DOMContentLoaded', () => {
    initTestimonialsSlider();
    initHashGuard();
    initMobileNav();
    initCarouselDots();
  });
})();
