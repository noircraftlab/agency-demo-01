<?php
/**
 * Header template — ports the static build's <head> + .site-header
 * (src/index.html, Phase 3–4) 1:1. Markup/classes unchanged for
 * pixel parity; fonts/CSS/JS move to wp_head() (see functions.php).
 *
 * Decision (Phase 5 step 1): nav stays STATIC markup — no
 * wp_nav_menu(). This is a fixed single-page landing demo; a menu
 * screen would add CMS surface without serving the proof-of-work.
 *
 * @package agency-demo-01
 */

defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===================================================== -->
<!-- Header · node 5:38234                                 -->
<!-- ===================================================== -->
<header class="site-header">
	<div class="container site-header__inner">

		<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Whitepace — home', 'agency-demo-01' ); ?>">
			<img class="site-header__logo-icon" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-icon.svg' ) ); ?>" alt="" width="37" height="29">
			<span class="site-header__logo-text"><?php esc_html_e( 'whitepace', 'agency-demo-01' ); ?></span>
		</a>

		<!-- Burger (Phase 4) — hidden ≥lg via CSS; mechanics in main.js -->
		<button class="site-header__burger" type="button"
				aria-expanded="false" aria-controls="header-panel"
				aria-label="<?php esc_attr_e( 'Open menu', 'agency-demo-01' ); ?>">
			<svg class="site-header__burger-icon" viewBox="0 0 24 18" fill="none" aria-hidden="true">
				<path d="M1 1H23M1 9H23M1 17H23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
			</svg>
		</button>

		<div class="site-header__right" id="header-panel">
			<nav class="site-header__nav" aria-label="<?php esc_attr_e( 'Main', 'agency-demo-01' ); ?>">
				<a class="site-header__nav-link" href="#products">
					<?php esc_html_e( 'Products', 'agency-demo-01' ); ?>
					<svg class="site-header__nav-chevron" viewBox="0 0 9 4" fill="none" aria-hidden="true">
						<path d="M0.5 0.5L4.5 3.5L8.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<a class="site-header__nav-link" href="#solutions">
					<?php esc_html_e( 'Solutions', 'agency-demo-01' ); ?>
					<svg class="site-header__nav-chevron" viewBox="0 0 9 4" fill="none" aria-hidden="true">
						<path d="M0.5 0.5L4.5 3.5L8.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<a class="site-header__nav-link" href="#resources">
					<?php esc_html_e( 'Resources', 'agency-demo-01' ); ?>
					<svg class="site-header__nav-chevron" viewBox="0 0 9 4" fill="none" aria-hidden="true">
						<path d="M0.5 0.5L4.5 3.5L8.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<a class="site-header__nav-link" href="#pricing">
					<?php esc_html_e( 'Pricing', 'agency-demo-01' ); ?>
					<svg class="site-header__nav-chevron" viewBox="0 0 9 4" fill="none" aria-hidden="true">
						<path d="M0.5 0.5L4.5 3.5L8.5 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</nav>

			<div class="site-header__actions">
				<a class="btn btn--accent btn--pad-login" href="#"><?php esc_html_e( 'Login', 'agency-demo-01' ); ?></a>
				<a class="btn btn--primary btn--pad-nav" href="#">
					<?php esc_html_e( 'Try Whitepace free', 'agency-demo-01' ); ?>
					<!-- arrow icon = Group 212, 10×10 -->
					<svg class="btn__icon" viewBox="0 0 10 10" fill="none" aria-hidden="true">
						<path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>
		</div>

	</div>
</header>
