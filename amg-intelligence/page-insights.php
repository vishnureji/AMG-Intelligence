<?php
/**
 * Template Name: Insights Page
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<!-- Page banner -->
	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 fw-bold mb-0"><?php esc_html_e( 'Analysis Beyond the News', 'amg-intelligence' ); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<!-- Insights grid -->
<section class="py-5">
	<div class="container py-4">
		<p class="text-uppercase small fw-semibold eyebrow-accent mb-3"><?php esc_html_e( 'Signature Rankings', 'amg-intelligence' ); ?></p>
		<hr class="mt-0 mb-4">

		<div class="row g-0 insights-grid">
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Wealth & Investment', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'Where capital moves when certainty disappears', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Analysis · 8 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Technology', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'The quiet reshaping of enterprise by applied AI', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Analysis · 11 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Leadership', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'What separates leaders who anticipate from those who react', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Perspective · 6 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Retail & Consumer', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'The new economics of Britain\'s convenience sector', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Analysis · 9 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Business & Growth', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'Reading the signals behind emerging industries', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Analysis · 7 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<a href="#" class="insight-card h-100 d-flex flex-column text-decoration-none">
					<p class="insight-category mb-3"><?php esc_html_e( 'Influence', 'amg-intelligence' ); ?></p>
					<h3 class="insight-title mb-4"><?php esc_html_e( 'How reputation compounds into market advantage', 'amg-intelligence' ); ?></h3>
					<hr class="insight-divider mt-auto mb-3">
					<p class="insight-meta mb-0"><?php esc_html_e( 'Perspective · 5 min', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-lg-6 d-none d-lg-block insight-filler"></div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
