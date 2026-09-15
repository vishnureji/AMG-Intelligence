<?php
/**
 * Template Name: Briefings Page
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<!-- Page banner -->
	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 fw-bold mb-0"><?php esc_html_e( 'Fast Intelligence for Busy Leaders', 'amg-intelligence' ); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<!-- Flagship briefing series -->
<section class="py-5">
	<div class="container container-narrow py-4">
		<div class="row g-4">
			<div class="col-lg-6 briefing-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/What Happens Next Thumbnail.png' ); ?>" alt="<?php esc_attr_e( 'What Happens Next? briefing series', 'amg-intelligence' ); ?>">
				<h3 class="font-serif fw-normal mb-2"><?php esc_html_e( 'What Happens Next?', 'amg-intelligence' ); ?></h3>
				<p><?php esc_html_e( 'Our flagship briefing series examining the economic, technological and geopolitical forces reshaping business and society. Focused, accessible and actionable — what leaders should be paying attention to now.', 'amg-intelligence' ); ?></p>
				<a href="#" class="link-arrow"><?php esc_html_e( 'Discover What Happens Next →', 'amg-intelligence' ); ?></a>
			</div>
			<div class="col-lg-6 briefing-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Trader Intelligence Thumbnail.png' ); ?>" alt="<?php esc_attr_e( 'Asian Trader Intelligence briefing', 'amg-intelligence' ); ?>">
				<h3 class="font-serif fw-normal mb-2"><?php esc_html_e( 'Asian Trader Intelligence', 'amg-intelligence' ); ?></h3>
				<p><?php esc_html_e( 'The leading intelligence briefing for Britain\'s convenience retail sector — market analysis, commercial insight and strategic context for retailers navigating a rapidly changing marketplace.', 'amg-intelligence' ); ?></p>
				<a href="#" class="link-arrow"><?php esc_html_e( 'Stay Ahead of the Market →', 'amg-intelligence' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Engagement tiers -->
<section class="pb-5 tiers-section">
	<div class="container">
		<p class="text-uppercase small fw-semibold eyebrow-accent mb-3"><?php esc_html_e( 'Engagement Tiers', 'amg-intelligence' ); ?></p>
		<hr class="mt-0 mb-4">

		<div class="row g-0 tiers-row">
			<div class="col-12 col-md-6 col-lg-3 tier-col">
				<div class="tier-card h-100 d-flex flex-column">
					<p class="tier-label mb-2"><?php esc_html_e( '01 — Single User', 'amg-intelligence' ); ?></p>
					<h3 class="tier-title mb-2"><?php esc_html_e( 'Premium Intelligence Report', 'amg-intelligence' ); ?></h3>
					<p class="tier-price mb-0"><?php esc_html_e( 'From', 'amg-intelligence' ); ?> <strong>£2,500</strong></p>
					<p class="tier-vat mb-3"><?php esc_html_e( '+ VAT', 'amg-intelligence' ); ?></p>
					<p class="tier-audience"><?php esc_html_e( 'For executives, investors and advisers requiring focused strategic insight.', 'amg-intelligence' ); ?></p>
					<hr>
					<ul class="tier-features list-unstyled flex-grow-1">
						<li><?php esc_html_e( 'Executive summary', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Trend analysis', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Strategic implications', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Market outlook', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Actionable recommendations', 'amg-intelligence' ); ?></li>
					</ul>
					<a href="#" class="btn btn-outline-dark rounded-0 w-100 py-2 mt-3"><?php esc_html_e( 'Request Report →', 'amg-intelligence' ); ?></a>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3 tier-col">
				<div class="tier-card is-muted h-100 d-flex flex-column">
					<p class="tier-label mb-2"><?php esc_html_e( '02 — Team Licence · Up to 10', 'amg-intelligence' ); ?></p>
					<h3 class="tier-title mb-2"><?php esc_html_e( 'Industry Intelligence Report', 'amg-intelligence' ); ?></h3>
					<p class="tier-price mb-0"><?php esc_html_e( 'From', 'amg-intelligence' ); ?> <strong>£5,000</strong></p>
					<p class="tier-vat mb-3"><?php esc_html_e( '+ VAT', 'amg-intelligence' ); ?></p>
					<p class="tier-audience"><?php esc_html_e( 'For strategy teams, investors and industry leaders requiring deeper market understanding.', 'amg-intelligence' ); ?></p>
					<hr>
					<ul class="tier-features list-unstyled flex-grow-1">
						<li><?php esc_html_e( 'Sector deep dive', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Market sizing and trends', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Opportunity mapping', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Competitive landscape analysis', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Strategic recommendations', 'amg-intelligence' ); ?></li>
					</ul>
					<a href="#" class="btn btn-outline-dark rounded-0 w-100 py-2 mt-3"><?php esc_html_e( 'Request Report →', 'amg-intelligence' ); ?></a>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3 tier-col">
				<div class="tier-card is-dark h-100 d-flex flex-column">
					<p class="tier-label mb-2"><?php esc_html_e( '03 — Organisation-Wide', 'amg-intelligence' ); ?></p>
					<h3 class="tier-title mb-2"><?php esc_html_e( 'Enterprise Intelligence Licence', 'amg-intelligence' ); ?></h3>
					<p class="tier-price mb-0"><?php esc_html_e( 'From', 'amg-intelligence' ); ?> <strong>£10,000</strong></p>
					<p class="tier-vat mb-3"><?php esc_html_e( '+ VAT / Annum', 'amg-intelligence' ); ?></p>
					<p class="tier-audience"><?php esc_html_e( 'For organisations requiring ongoing access to intelligence and research.', 'amg-intelligence' ); ?></p>
					<hr>
					<ul class="tier-features list-unstyled flex-grow-1">
						<li><?php esc_html_e( 'Multi-user access', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Report library access', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Quarterly intelligence briefings', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Research updates', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Priority access to new publications', 'amg-intelligence' ); ?></li>
					</ul>
					<a href="#" class="btn btn-accent rounded-0 w-100 py-2 mt-3"><?php esc_html_e( 'Enquire About Access →', 'amg-intelligence' ); ?></a>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3 tier-col">
				<div class="tier-card h-100 d-flex flex-column">
					<p class="tier-label mb-2"><?php esc_html_e( '04 — Exclusive Client Use', 'amg-intelligence' ); ?></p>
					<h3 class="tier-title mb-2"><?php esc_html_e( 'Custom Research Project', 'amg-intelligence' ); ?></h3>
					<p class="tier-price mb-0"><?php esc_html_e( 'From', 'amg-intelligence' ); ?> <strong>£15,000</strong></p>
					<p class="tier-vat mb-3"><?php esc_html_e( '+ VAT', 'amg-intelligence' ); ?></p>
					<p class="tier-audience"><?php esc_html_e( 'For organisations with specific strategic questions or intelligence requirements.', 'amg-intelligence' ); ?></p>
					<hr>
					<ul class="tier-features list-unstyled flex-grow-1">
						<li><?php esc_html_e( 'Bespoke research design', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Analyst support', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Custom reporting', 'amg-intelligence' ); ?></li>
						<li><?php esc_html_e( 'Executive presentation', 'amg-intelligence' ); ?></li>
					</ul>
					<a href="#" class="btn btn-outline-dark rounded-0 w-100 py-2 mt-3"><?php esc_html_e( 'Start a Project →', 'amg-intelligence' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
