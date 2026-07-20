<?php
/**
 * Front page — the Whitepace landing, all 11 sections (SPEC §2).
 *
 * Verbatim port of the static build (src/index.html, Phases 3–4):
 * markup, classes and text — incl. entity-level line-break control
 * (&nbsp;) — are kept 1:1 for pixel parity; only image src attrs are
 * converted to get_theme_file_uri(). WordPress uses front-page.php
 * for the site front automatically — no Settings → Reading changes
 * needed for clean activation.
 *
 * Decision (Phase 5 step 2): section copy stays as static markup,
 * NOT gettext-wrapped. Rationale: (a) the i18n pattern is already
 * demonstrated in header.php / footer.php + Text Domain plumbing;
 * (b) wrapping ~460 lines of wrap-critical text risks whitespace
 * drift against the pixel-perfect static reference for zero demo
 * value. Flagged in the session log.
 *
 * @package agency-demo-01
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>
  <!-- ===================================================== -->
  <!-- 1 · Hero · node 5:37140                               -->
  <!-- ===================================================== -->
  <section class="hero">
    <!-- Decor · swoosh · node 5:37141 (1988.85×433.11, centered on frame) -->
    <img class="hero__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="1989" height="433" loading="lazy">

    <div class="container hero__inner">

      <div class="hero__content">
        <div class="hero__text">
          <h1 class="hero__title">Get More Done with whitepace</h1>
          <p class="hero__subtitle">Project management software that enables your teams to collaborate, plan, analyze and manage everyday tasks</p>
        </div>
        <a class="btn btn--primary btn--pad-hero" href="#">
          Try Whitepace free
          <svg class="btn__icon" viewBox="0 0 10 10" fill="none" aria-hidden="true">
            <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>

      <div class="hero__media">
        <!-- Source node 5:37218 is a Freepik raster absent from the CC BY 4.0
             community file — replaced with unDraw "Scrum Board" per charter §3.2
             (recolored to #4F9CF9); documented in README. -->
        <img class="hero__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/hero-illustration.svg' ) ); ?>" alt="Whitepace project management dashboard illustration" width="685" height="456">
      </div>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- 2+3 · Work Management · node 5:38267                  -->
  <!--       (Project Management + Work Together rows)       -->
  <!-- ===================================================== -->
  <section class="work-management" id="products">
    <div class="container work-management__inner">

      <!-- 2 · Project Management · node 5:38268 -->
      <div class="work-management__row">
        <div class="work-management__headline">
          <div class="work-management__text">
            <!-- Decor · swoosh underline · node 5:38271 (515.92×38.02) -->
            <img class="work-management__swoosh work-management__swoosh--pm" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pm-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="516" height="38" loading="lazy">
            <h2 class="work-management__title">Project <span class="work-management__mark work-management__mark--pm">Management<img class="work-management__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pm-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="516" height="38" loading="lazy"></span></h2>
            <p class="work-management__copy">Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.</p>
          </div>
          <a class="btn btn--primary btn--pad-section" href="#">
            Get Started
            <!-- arrow icon · Group 214, 14×14 -->
            <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
              <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
        <div class="work-management__media">
          <!-- Source node 5:38308 is a flat #C4DEFD placeholder (Freepik raster
               absent from the CC BY 4.0 file) — replaced with unDraw "Task list"
               recolored to #4F9CF9 per charter §3.2; documented in README. -->
          <img class="work-management__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pm-illustration.svg' ) ); ?>" alt="Project management notes and tasks illustration" width="719" height="448" loading="lazy">
        </div>
      </div>

      <!-- 3 · Work Together · node 5:38525 -->
      <div class="work-management__row work-management__row--together">
        <!-- Avatars composition · node 5:38526 (583×542.76, vector art, CC BY 4.0) -->
        <img class="work-management__graphic" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/wt-graphic.svg' ) ); ?>" alt="" aria-hidden="true" width="583" height="543" loading="lazy">
        <div class="work-management__headline">
          <div class="work-management__text">
            <!-- Decor · concentric circles · node 5:39796 (569.54×440.35, blend multiply) -->
            <img class="work-management__decor" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/wt-circles.svg' ) ); ?>" alt="" aria-hidden="true" width="570" height="440" loading="lazy">
            <!-- Decor · swoosh underline · node 5:39820 (334.11×25.55) -->
            <img class="work-management__swoosh work-management__swoosh--together" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/wt-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="334" height="26" loading="lazy">
            <h2 class="work-management__title">Work <span class="work-management__mark work-management__mark--together">together<img class="work-management__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/wt-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="334" height="26" loading="lazy"></span></h2>
            <p class="work-management__copy">With whitepace, share your notes with your colleagues and collaborate on them. You can also publish a note to the internet and share the URL with others.</p>
          </div>
          <a class="btn btn--primary btn--pad-section" href="#">
            Try it now
            <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
              <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ===================================================== -->
  <!-- 4 · Customise · node 5:37351                          -->
  <!-- ===================================================== -->
  <section class="customise" id="solutions">
    <div class="container customise__inner">

      <div class="customise__headline">
        <div class="customise__text">
          <!-- Decor · swoosh underline · node 5:37354 (418.26×31.47) -->
          <img class="customise__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/customise-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="418" height="31" loading="lazy">
          <h2 class="customise__title">Customise it to <span class="customise__mark">your needs<img class="customise__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/customise-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="418" height="31" loading="lazy"></span></h2>
          <p class="customise__copy">Customise the app with plugins, custom themes and multiple text editors (Rich Text or Markdown). Or create your own scripts and plugins using the Extension API.</p>
        </div>
        <a class="btn btn--primary btn--pad-section btn--face-montserrat" href="#">
          Let&rsquo;s Go
          <!-- arrow icon · Group 214, 14×14 -->
          <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
            <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>

      <div class="customise__media">
        <!-- Source node 107:53693 is a flat #C4DEFD placeholder (Freepik raster
             absent from the CC BY 4.0 file) — replaced with an unDraw illustration
             recolored to #4F9CF9 per charter §3.2; documented in README. -->
        <img class="customise__img" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/customise-illustration.svg' ) ); ?>" alt="App customisation with plugins and themes illustration" width="686" height="479" loading="lazy">
      </div>

    </div>
  </section>

  <!-- NOTE: bullet strings keep the source's TRAILING SPACES verbatim.
       The one after "…Calendar account" is layout-significant: Figma counts
       it (314.6px > the 312.33px text box) and wraps "account" to line 2.
       Browsers hang trailing spaces instead, so it is glued to the word as
       &nbsp; to reproduce the wrap. Do NOT let a formatter strip it. -->
  <!-- ===================================================== -->
  <!-- 5 · Pricing · node 5:37564                            -->
  <!-- ===================================================== -->
  <section class="pricing" id="pricing">
    <div class="container pricing__inner">

      <div class="pricing__heading">
        <!-- Decor · swoosh highlight · node 5:37566 (334.73×30.11, under "Your Plan") -->
        <img class="pricing__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="335" height="30" loading="lazy">
        <h2 class="pricing__title">Choose <span class="pricing__mark">Your Plan<img class="pricing__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="335" height="30" loading="lazy"></span></h2>
        <p class="pricing__subtitle">Whether you want to get organized, keep your personal life on track, or boost workplace productivity, Evernote has the right plan for you.</p>
      </div>

      <div class="pricing__grid">

        <!-- Card · Free · node 5:37598 -->
        <article class="pricing__card">
          <div class="pricing__card-head">
            <h3 class="pricing__card-name">Free</h3>
            <p class="pricing__card-price">$0</p>
            <p class="pricing__card-tagline">Capture ideas and find them quickly</p>
          </div>
          <ul class="pricing__features">
            <li class="pricing__feature">
              <!-- check-circle icon · node 5:37605 -->
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Sync unlimited devices</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">10 GB monthly uploads </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">200 MB max. note size </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Customize Home dashboard and access extra widgets</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Connect primary Google Calendar account&nbsp;</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Add due dates, reminders, and notifications to your tasks  </p>
            </li>
          </ul>
          <a class="btn btn--outline-accent btn--pad-card" href="#">Get Started</a>
        </article>

        <!-- Card · Personal (featured) · node 5:37636 -->
        <article class="pricing__card pricing__card--featured">
          <div class="pricing__card-head">
            <h3 class="pricing__card-name">Personal</h3>
            <p class="pricing__card-price">$11.99</p>
            <p class="pricing__card-tagline">Keep home and family on track</p>
          </div>
          <ul class="pricing__features">
            <li class="pricing__feature">
              <!-- check-circle icon (blue) · node 5:37643 -->
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Sync unlimited devices</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">10 GB monthly uploads </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">200 MB max. note size </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Customize Home dashboard and access extra widgets</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Connect primary Google Calendar account&nbsp;</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-blue.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Add due dates, reminders, and notifications to your tasks&nbsp;&nbsp;</p>
            </li>
          </ul>
          <a class="btn btn--primary btn--pad-card" href="#">Get Started</a>
        </article>

        <!-- Card · Organization · node 5:37674 -->
        <article class="pricing__card">
          <div class="pricing__card-head">
            <h3 class="pricing__card-name">Organization</h3>
            <p class="pricing__card-price">$49.99</p>
            <p class="pricing__card-tagline">Capture ideas and find them quickly</p>
          </div>
          <ul class="pricing__features">
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Sync unlimited devices</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">10 GB monthly uploads </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">200 MB max. note size </p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Customize Home dashboard and access extra widgets</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Connect primary Google Calendar account&nbsp;</p>
            </li>
            <li class="pricing__feature">
              <img class="pricing__feature-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/pricing-check-dark.svg' ) ); ?>" alt="" aria-hidden="true" width="18" height="18" loading="lazy">
              <p class="pricing__feature-text">Add due dates, reminders, and notifications to your tasks  </p>
            </li>
          </ul>
          <a class="btn btn--outline-accent btn--pad-card" href="#">Get Started</a>
        </article>

      </div>


      <div class="pricing__dots">
        <button class="pricing__dot" type="button" aria-label="Pricing plan 1"></button>
        <button class="pricing__dot" type="button" aria-label="Pricing plan 2"></button>
        <button class="pricing__dot" type="button" aria-label="Pricing plan 3"></button>
      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION · Your Work · node 5:37712  (1440×574 · py 140 / px 32)
       Dark band #043873, white text. Blue swoosh under "you are"
       (node 5:37715). Spiral decor at the left edge = Btn-try
       BACKGROUND (node 5:37747) offset far outside the button,
       clipped by the section — exported as one cropped SVG.
       ============================================================ -->
  <section class="your-work">
    <div class="container your-work__inner">
      <img class="your-work__decor" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-work-spiral.svg' ) ); ?>" alt="" aria-hidden="true" width="262" height="837" loading="lazy">
      <div class="your-work__text-block">
        <img class="your-work__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-work-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="315" height="24" loading="lazy">
        <h2 class="your-work__title">Your work, everywhere <span class="your-work__mark">you are<img class="your-work__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-work-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="315" height="24" loading="lazy"></span></h2>
        <p class="your-work__subtitle">Access your notes from your computer, phone or tablet by synchronising with various services, including whitepace, Dropbox and OneDrive. The app is available on Windows, macOS, Linux, Android and iOS. A terminal app is also available!</p>
      </div>
      <a class="btn btn--primary btn--pad-section" href="#">
        Try Taskey
        <!-- arrow icon · Group 214, 14×14 -->
        <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
          <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </section>


  <!-- ============================================================
       SECTION · Your Data · node 5:37777  (1440×661 · py 140 / px 32)
       Left: text block + "Read more" CTA (all left-aligned), yellow
       swoosh under "your data" (node 5:37780). Right: security
       diagram (node 5:37817) exported as one SVG — dashed arc,
       5 white cards (key / database / shield / padlock / logo),
       dots. Columns touch: 695 + 681 = 1376.
       ============================================================ -->
  <section class="your-data">
    <div class="container your-data__inner">
      <div class="your-data__text">
        <div class="your-data__text-block">
          <img class="your-data__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-data-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="352" height="37" loading="lazy">
          <h2 class="your-data__title">100% <span class="your-data__mark">your data<img class="your-data__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-data-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="352" height="37" loading="lazy"></span></h2>
          <p class="your-data__copy">The app is open source and your notes are saved to an open format, so you'll always have access to them. Uses End-To-End Encryption (E2EE) to secure your notes and ensure no-one but yourself can access them.</p>
        </div>
        <a class="btn btn--primary btn--pad-section" href="#">
          Read more
          <!-- arrow icon · Group 214, 14×14 -->
          <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
            <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <div class="your-data__media">
        <img class="your-data__graphic" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/your-data-graphic.svg' ) ); ?>" alt="" width="752" height="400" loading="lazy">
      </div>
    </div>
  </section>


  <!-- ============================================================
       SECTION · Our Sponsors · node 5:37876  (1440×538 · py 140)
       Centered H2 with yellow swoosh under "sponsors"
       (node 5:37877). Logo row justify-between: Apple / Microsoft /
       Slack / Google — vectors exported from the CC BY source.
       ============================================================ -->
  <section class="sponsors">
    <div class="container sponsors__inner">
      <div class="sponsors__heading">
        <img class="sponsors__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsors-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="339" height="43" loading="lazy">
        <h2 class="sponsors__title">Our <span class="sponsors__mark">sponsors<img class="sponsors__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsors-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="339" height="43" loading="lazy"></span></h2>
      </div>
      <div class="sponsors__row">
        <img class="sponsors__logo--apple" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsor-apple.svg' ) ); ?>" alt="Apple" width="56" height="68" loading="lazy">
        <img class="sponsors__logo--microsoft" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsor-microsoft.svg' ) ); ?>" alt="Microsoft" width="287" height="62" loading="lazy">
        <img class="sponsors__logo--slack" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsor-slack.svg' ) ); ?>" alt="Slack" width="280" height="71" loading="lazy">
        <img class="sponsors__logo--google" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/sponsor-google.svg' ) ); ?>" alt="Google" width="211" height="70" loading="lazy">
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION · Apps · node 5:37936  (1440×750.8 · py 140 · navy)
       Full-width wave-lines decor (node 5:37937, opacity 30%,
       bleeds ±45px past the 1440 frame — section clips overflow).
       Left: integration cluster artwork (node 5:38004) — dashed
       orbits + Gmail/Slack/Dropbox/Outlook/Drive/Calendar badges
       + central whitepace mark, exported as ONE svg.
       ============================================================ -->
  <section class="apps" id="resources">
    <img class="apps__waves apps__waves--wide" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/apps-waves.svg' ) ); ?>" alt="" aria-hidden="true" width="1440" height="701" loading="lazy">
    <img class="apps__waves apps__waves--1152" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/apps-waves-1152.svg' ) ); ?>" alt="" aria-hidden="true" width="1152" height="701" loading="lazy">
    <div class="container apps__inner">
      <div class="apps__media">
        <img class="apps__cluster" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/apps-cluster.svg' ) ); ?>" alt="" width="582" height="471" loading="lazy">
      </div>
      <div class="apps__content">
        <div class="apps__text-block">
          <h2 class="apps__title">Work with Your Favorite Apps Using whitepace</h2>
          <p class="apps__copy">Whitepace teams up with your favorite software. Integrate with over 1000+ apps with&nbsp;Zapier to have all the tools you need for your project success.</p>
        </div>
        <a class="btn btn--primary btn--pad-section" href="#">
          Read more
          <!-- arrow icon · Group 214, 14×14 -->
          <svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
            <path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ============================================================
       SECTION · Testimonials · node 5:38091  (1440×1042 · py 140)
       H2 centered + yellow swoosh under "trusted" (node 5:38092).
       3 review cards (node 5:38122): white+shadow / 2× primary
       blue. Slider arrows (node 36:26319) static in Phase 3 —
       behaviour wired in Phase 4. Parked off-canvas arrow
       leftovers (5:38165 / 5:38169) intentionally skipped.
       ============================================================ -->
  <section class="testimonials">
    <div class="container testimonials__inner">
      <div class="testimonials__heading">
        <h2 class="testimonials__title">See what our <span class="testimonials__mark">trusted<img class="testimonials__mark-swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="257" height="50" loading="lazy"></span> users Say</h2>
        <img class="testimonials__swoosh" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-swoosh.svg' ) ); ?>" alt="" aria-hidden="true" width="257" height="50" loading="lazy">
      </div>
      <div class="testimonials__grid">
      <article class="testimonials__card">
        <div class="testimonials__comment">
          <img class="testimonials__avatar" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-avatar-1.png' ) ); ?>" alt="Jessie Owner" width="70" height="70" loading="lazy">
          <p class="testimonials__quote">“If you haven’t tried whitepace yet, you need to give it a shot for your next event. It’s so easy and intuitive to get a new event setup and if you need any help their customer service is seriously amazing.”</p>
        </div>
        <div class="testimonials__meta">
          <div class="testimonials__person">
            <p class="testimonials__name">Jessie Owner</p>
            <p class="testimonials__role">Founder, XYZ Company</p>
          </div>
          <div class="testimonials__stars" role="img" aria-label="Rated 5 out of 5 stars">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
          </div>
        </div>
      </article>
      <article class="testimonials__card testimonials__card--accent">
        <div class="testimonials__comment">
          <img class="testimonials__avatar" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-avatar-2.png' ) ); ?>" alt="Jessie Owner" width="70" height="70" loading="lazy">
          <p class="testimonials__quote">“If you haven’t tried whitepace yet, you need to give it a shot for your next event. It’s so easy and intuitive to get a new event setup and if you need any help their customer service is seriously amazing.”</p>
        </div>
        <div class="testimonials__meta">
          <div class="testimonials__person">
            <p class="testimonials__name">Jessie Owner</p>
            <p class="testimonials__role">Founder, XYZ Company</p>
          </div>
          <div class="testimonials__stars" role="img" aria-label="Rated 5 out of 5 stars">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
          </div>
        </div>
      </article>
      <article class="testimonials__card testimonials__card--accent">
        <div class="testimonials__comment">
          <img class="testimonials__avatar" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-avatar-3.png' ) ); ?>" alt="Jessie Owner" width="70" height="70" loading="lazy">
          <p class="testimonials__quote">“If you haven’t tried whitepace yet, you need to give it a shot for your next event. It’s so easy and intuitive to get a new event setup and if you need any help their customer service is seriously amazing.”</p>
        </div>
        <div class="testimonials__meta">
          <div class="testimonials__person">
            <p class="testimonials__name">Jessie Owner</p>
            <p class="testimonials__role">Founder, XYZ Company</p>
          </div>
          <div class="testimonials__stars" role="img" aria-label="Rated 5 out of 5 stars">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-star.svg' ) ); ?>" alt="" width="15" height="15" loading="lazy">
          </div>
        </div>
      </article>
      </div>
      <div class="testimonials__dots">
        <button class="testimonials__dot" type="button" aria-label="Testimonial 1"></button>
        <button class="testimonials__dot" type="button" aria-label="Testimonial 2"></button>
        <button class="testimonials__dot" type="button" aria-label="Testimonial 3"></button>
      </div>

      <div class="testimonials__slider">
        <button class="testimonials__nav" type="button" aria-label="Previous testimonials">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-arrow-left.svg' ) ); ?>" alt="" width="145" height="145" loading="lazy">
        </button>
        <button class="testimonials__nav" type="button" aria-label="Next testimonials">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/testimonial-arrow-right.svg' ) ); ?>" alt="" width="145" height="145" loading="lazy">
        </button>
      </div>
    </div>
  </section>

  <!-- Phase 3 complete: all 11 sections built (SPEC §2)      -->
</main>

<?php
get_footer();
