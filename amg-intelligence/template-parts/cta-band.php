<?php
/**
 * Template part for displaying the shared CTA band
 *
 * @package AMG_Intelligence
 */
?>
<!-- CTA band: identical on every page except about.html, which uses its
     own "Our Ambition" band in this same slot instead. -->
<section class="cta-band text-center text-white py-5" id="subscribe">
	<div class="container py-4">
		<p class="text-uppercase small fw-semibold mb-3 cta-eyebrow"><?php esc_html_e( 'Better Decisions Begin with Better Intelligence', 'amg-intelligence' ); ?></p>
		<h2 class="display-5 fw-normal mb-4 cta-title"><?php esc_html_e( 'Gain the Advantage of Foresight.', 'amg-intelligence' ); ?></h2>
		<p class="mb-4 cta-sub">
			<?php esc_html_e( 'Understand change earlier.', 'amg-intelligence' ); ?><br>
			<?php esc_html_e( 'Make better decisions.', 'amg-intelligence' ); ?><br>
			<?php esc_html_e( 'Stay ahead of the market.', 'amg-intelligence' ); ?>
		</p>
		<a href="#subscribe-form" class="btn btn-dark rounded-0 px-4 py-2"><?php esc_html_e( 'Subscribe to AMG Intelligence', 'amg-intelligence' ); ?></a>
	</div>
</section>
