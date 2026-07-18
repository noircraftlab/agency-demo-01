/* agency-demo-01 — vanilla JS entry.
   Phase 4 · step 1: Testimonials slider (DOM rotation, fade,
   keyboard ←/→, prefers-reduced-motion) + href="#" jump guard.
   Mobile nav — next Phase 4 step. */
(() => {
  'use strict';

  /* ---------- Testimonials slider ---------- */
  const initTestimonialsSlider = () => {
    const grid = document.querySelector('.testimonials__grid');
    const navBtns = document.querySelectorAll('.testimonials__nav');
    if (!grid || navBtns.length !== 2) return;

    const [prevBtn, nextBtn] = navBtns;
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const FADE_MS = 220;
    let busy = false;

    if (!reduceMotion) {
      grid.style.transition = `opacity ${FADE_MS}ms ease`;
    }

    const rotate = (dir) => {
      if (busy) return;
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
     Static demo: placeholder links must not scroll to top. */
  const initHashGuard = () => {
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href="#"]');
      if (link) e.preventDefault();
    });
  };

  document.addEventListener('DOMContentLoaded', () => {
    initTestimonialsSlider();
    initHashGuard();
  });
})();
