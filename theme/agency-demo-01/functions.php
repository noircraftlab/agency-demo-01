<?php
/**
 * Agency Demo 01 — Whitepace · theme bootstrap.
 *
 * Phase 5 · step 1: setup + asset pipeline. All front-end assets are
 * BUILD ARTIFACTS synced from the repository root:
 *   src/scss  → assets/css/main.css   (npm run build:wp)
 *   src/js    → assets/js/main.js     (npm run sync:wp)
 *   /assets/img → assets/img          (npm run sync:wp)
 * Author PHP here; author styles/JS/images at the repo root only.
 *
 * Prefix: agdemo_ (distinct from noircraftlab $nc_ / noiroast $nr_).
 *
 * @package agency-demo-01
 */

defined( 'ABSPATH' ) || exit;

const AGDEMO_VERSION = '1.0.0';

/**
 * Theme supports.
 */
function agdemo_setup(): void {
	// Let WP render <title> (required for clean theme check).
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'script', 'style', 'search-form' ) );
}
add_action( 'after_setup_theme', 'agdemo_setup' );

/**
 * Cache-busting version for a theme asset: filemtime when the file
 * exists (dev loop friendly), theme version otherwise.
 */
function agdemo_asset_version( string $relative_path ): string {
	$abs = get_theme_file_path( $relative_path );
	return file_exists( $abs ) ? (string) filemtime( $abs ) : AGDEMO_VERSION;
}

/**
 * Front-end assets.
 */
function agdemo_assets(): void {
	// Google Fonts — mirrors the static build <link> exactly:
	// Inter 400–800 · DM Sans 500 (header nav, per source) ·
	// Montserrat 500 (Customise CTA, per source).
	wp_enqueue_style(
		'agdemo-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=DM+Sans:wght@500&family=Montserrat:wght@500&display=swap',
		array(),
		null // Google versions the URL itself.
	);

	wp_enqueue_style(
		'agdemo-main',
		get_theme_file_uri( 'assets/css/main.css' ),
		array( 'agdemo-fonts' ),
		agdemo_asset_version( 'assets/css/main.css' )
	);

	// Vanilla JS: testimonials slider, hash-guard, mobile nav.
	// Deferred in footer — matches the static build's <script defer>.
	wp_enqueue_script(
		'agdemo-main',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		agdemo_asset_version( 'assets/js/main.js' ),
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'agdemo_assets' );

/**
 * Preconnect hints for Google Fonts (mirrors the static <link rel=preconnect>).
 *
 * @param array<int, array<string, string>|string> $urls          Resource URLs.
 * @param string                                   $relation_type Relation type.
 * @return array<int, array<string, string>|string>
 */
function agdemo_resource_hints( array $urls, string $relation_type ): array {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'agdemo_resource_hints', 10, 2 );

/**
 * Favicon, shipped with the theme.
 *
 * The demo installs and runs with zero configuration, so the icon lives in
 * the theme rather than in the database: Customize → Site Identity writes to
 * options, which no clone of this repository inherits. If a site does set a
 * Site Icon in WordPress, that one wins and this bows out.
 *
 * SVG first (scales to any density), 32px PNG as the fallback. No
 * apple-touch-icon: `rel="apple-touch-icon"` is not a conforming link type
 * and would cost the W3C 0-error result for a home-screen case a desktop
 * demo does not have.
 */
function agdemo_favicon(): void {
	if ( has_site_icon() ) {
		return;
	}

	printf(
		'<link rel="icon" href="%s" type="image/svg+xml">' . "\n",
		esc_url( get_theme_file_uri( 'assets/img/favicon.svg' ) )
	);
	printf(
		'<link rel="icon" href="%s" sizes="32x32" type="image/png">' . "\n",
		esc_url( get_theme_file_uri( 'assets/img/favicon-32.png' ) )
	);
}
add_action( 'wp_head', 'agdemo_favicon', 2 );

/**
 * Front-end slimming — pixel parity + Lighthouse (charter DoD:
 * desktop Perf ≥90). The landing renders no Gutenberg blocks, so the
 * block/global styles WP injects are dead weight and a parity risk.
 */
function agdemo_dequeue_extras(): void {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'agdemo_dequeue_extras', 20 );

// Emoji detector script/styles — not used by the demo.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
