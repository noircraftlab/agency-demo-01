<?php
/**
 * Fallback template. The landing itself ships as front-page.php in
 * Phase 5 · step 2 — until then this renders header + footer with a
 * minimal loop, which is exactly what the activation smoke-test needs.
 *
 * @package agency-demo-01
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main>
	<section class="hero">
		<div class="container hero__inner">
			<div class="hero__content">
				<div class="hero__text">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h1 class="hero__title"><?php the_title(); ?></h1>
							<div class="hero__subtitle"><?php the_content(); ?></div>
						<?php endwhile; ?>
					<?php else : ?>
						<h1 class="hero__title"><?php esc_html_e( 'Theme active', 'agency-demo-01' ); ?></h1>
						<p class="hero__subtitle"><?php esc_html_e( 'Landing sections arrive with front-page.php (Phase 5, step 2).', 'agency-demo-01' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
