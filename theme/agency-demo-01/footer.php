<?php
/**
 * Footer template — ports the static build's .site-footer
 * (src/index.html, Phase 3–4) 1:1; script moves to wp_footer().
 *
 * @package agency-demo-01
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- ============================================================
     SECTION · Footer · node 5:38172  (1440×474 · navy ·
     pt 140 / pb 32). Divider #2E4E73 = $color-secondary-400 —
     CSS ::after, no asset. Logo icon: white variant (node 5:38177;
     the header version is blue).
     ============================================================ -->
<footer class="site-footer">
	<div class="container site-footer__inner">

		<div class="site-footer__info">
			<div class="site-footer__brand">
				<a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Whitepace — home', 'agency-demo-01' ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-icon-white.svg' ) ); ?>" alt="" width="37" height="29">
					<span class="site-footer__logo-text"><?php esc_html_e( 'whitepace', 'agency-demo-01' ); ?></span>
				</a>
				<p class="site-footer__tagline"><?php esc_html_e( 'whitepace was created for the new ways we live and work. We make a better workspace around the world', 'agency-demo-01' ); ?></p>
			</div>

			<nav class="site-footer__col" aria-label="<?php esc_attr_e( 'Product', 'agency-demo-01' ); ?>">
				<p class="site-footer__col-title"><?php esc_html_e( 'Product', 'agency-demo-01' ); ?></p>
				<a class="site-footer__link site-footer__link--active" href="#"><?php esc_html_e( 'Overview', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#pricing"><?php esc_html_e( 'Pricing', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Customer stories', 'agency-demo-01' ); ?></a>
			</nav>

			<nav class="site-footer__col site-footer__col--g16" aria-label="<?php esc_attr_e( 'Resources', 'agency-demo-01' ); ?>">
				<p class="site-footer__col-title"><?php esc_html_e( 'Resources', 'agency-demo-01' ); ?></p>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Blog', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Guides & tutorials', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Help center', 'agency-demo-01' ); ?></a>
			</nav>

			<nav class="site-footer__col site-footer__col--g16" aria-label="<?php esc_attr_e( 'Company', 'agency-demo-01' ); ?>">
				<p class="site-footer__col-title"><?php esc_html_e( 'Company', 'agency-demo-01' ); ?></p>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'About us', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Careers', 'agency-demo-01' ); ?></a>
				<a class="site-footer__link" href="#"><?php esc_html_e( 'Media kit', 'agency-demo-01' ); ?></a>
			</nav>

			<div class="site-footer__cta">
				<p class="site-footer__cta-title"><?php esc_html_e( 'Try It Today', 'agency-demo-01' ); ?></p>
				<p class="site-footer__cta-copy"><?php esc_html_e( 'Get started for free. Add your whole team as your needs grow.', 'agency-demo-01' ); ?></p>
				<a class="btn btn--primary btn--pad-section btn--face-p3" href="#">
					<?php esc_html_e( 'Start today', 'agency-demo-01' ); ?>
					<!-- arrow icon · Group 214, 14×14 -->
					<svg class="btn__icon btn__icon--md" viewBox="0 0 10 10" fill="none" aria-hidden="true">
						<path d="M1 5H9M9 5L5.5 1.5M9 5L5.5 8.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>
		</div>

		<div class="site-footer__bottom">
			<div class="site-footer__legal">
				<button class="site-footer__lang" type="button">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/footer-globe.svg' ) ); ?>" alt="" width="19" height="19">
					<?php esc_html_e( 'English', 'agency-demo-01' ); ?>
					<!-- chevron · vector 5:38218 (12×6), inline per header pattern -->
					<svg class="site-footer__lang-chevron" viewBox="0 0 12 6" fill="none" aria-hidden="true">
						<path d="M1 0.5L6 5L11 0.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
				<a class="site-footer__legal-link" href="#"><?php esc_html_e( 'Terms & privacy', 'agency-demo-01' ); ?></a>
				<a class="site-footer__legal-link" href="#"><?php esc_html_e( 'Security', 'agency-demo-01' ); ?></a>
				<a class="site-footer__legal-link" href="#"><?php esc_html_e( 'Status', 'agency-demo-01' ); ?></a>
				<p class="site-footer__copyright"><?php esc_html_e( '©2021 Whitepace LLC.', 'agency-demo-01' ); ?></p>
			</div>
			<div class="site-footer__social">
				<a class="site-footer__social-link" href="#" aria-label="<?php esc_attr_e( 'Facebook', 'agency-demo-01' ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/footer-facebook.svg' ) ); ?>" alt="" width="9" height="17">
				</a>
				<a class="site-footer__social-link" href="#" aria-label="<?php esc_attr_e( 'Twitter', 'agency-demo-01' ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/footer-twitter.svg' ) ); ?>" alt="" width="17" height="14">
				</a>
				<a class="site-footer__social-link" href="#" aria-label="<?php esc_attr_e( 'LinkedIn', 'agency-demo-01' ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/footer-linkedin.svg' ) ); ?>" alt="" width="15" height="15">
				</a>
			</div>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
