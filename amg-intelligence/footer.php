<?php
/**
 * The template for displaying the footer
 *
 * @package AMG_Intelligence
 */
?>
<!-- Footer: identical on every page -->
<footer class="footer-section pt-5 pb-4">
	<div class="container">
		<div class="row gy-4">
			<div class="col-lg-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Site Logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" height="80" class="mb-3">
				</a>
				<p class="text-muted small mb-3"><?php esc_html_e( 'Better decisions begin with better intelligence. Join leaders, entrepreneurs and investors staying ahead of change.', 'amg-intelligence' ); ?></p>
				<form id="subscribe-form" class="d-flex footer-subscribe" action="#" method="post">
					<input type="email" class="form-control rounded-0" placeholder="<?php esc_attr_e( 'Work email', 'amg-intelligence' ); ?>" aria-label="<?php esc_attr_e( 'Work email', 'amg-intelligence' ); ?>" required>
					<button class="btn btn-dark rounded-0 flex-shrink-0" type="submit"><?php esc_html_e( 'Subscribe', 'amg-intelligence' ); ?></button>
				</form>
			</div>
			<div class="col-6 col-lg-2 offset-lg-2">
				<h6 class="text-uppercase small fw-bold mb-3"><?php esc_html_e( 'Intelligence', 'amg-intelligence' ); ?></h6>
				<?php
				if ( has_nav_menu( 'footer_intel' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_intel',
							'container'      => false,
							'menu_class'     => 'list-unstyled footer-links',
						)
					);
				} else {
					?>
					<ul class="list-unstyled footer-links">
						<li><a href="<?php echo esc_url( home_url( '/rankings/' ) ); ?>"><?php esc_html_e( 'Rankings', 'amg-intelligence' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>"><?php esc_html_e( 'Briefings', 'amg-intelligence' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>"><?php esc_html_e( 'Insights', 'amg-intelligence' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>"><?php esc_html_e( 'Events', 'amg-intelligence' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'amg-intelligence' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</div>
			<div class="col-6 col-lg-2">
				<h6 class="text-uppercase small fw-bold mb-3"><?php esc_html_e( 'Company', 'amg-intelligence' ); ?></h6>
				<?php
				if ( has_nav_menu( 'footer_company' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_company',
							'container'      => false,
							'menu_class'     => 'list-unstyled footer-links',
						)
					);
				} else {
					?>
					<ul class="list-unstyled footer-links">
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'amg-intelligence' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/events/' ) ); ?>"><?php esc_html_e( 'Enterprise Access', 'amg-intelligence' ); ?></a></li>
						<li><a href="#contact"><?php esc_html_e( 'Contact', 'amg-intelligence' ); ?></a></li>
						<li><a href="#careers"><?php esc_html_e( 'Careers', 'amg-intelligence' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</div>
			<div class="col-6 col-lg-2">
				<h6 class="text-uppercase small fw-bold mb-3"><?php esc_html_e( 'Legal', 'amg-intelligence' ); ?></h6>
				<?php
				if ( has_nav_menu( 'footer_legal' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer_legal',
							'container'      => false,
							'menu_class'     => 'list-unstyled footer-links',
						)
					);
				} else {
					?>
					<ul class="list-unstyled footer-links">
						<li><a href="#privacy"><?php esc_html_e( 'Privacy', 'amg-intelligence' ); ?></a></li>
						<li><a href="#terms"><?php esc_html_e( 'Terms', 'amg-intelligence' ); ?></a></li>
						<li><a href="#cookies"><?php esc_html_e( 'Cookies', 'amg-intelligence' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</div>
		</div>
		<hr class="mt-4 mb-3">
		<div class="d-flex flex-column flex-md-row justify-content-between small text-muted gap-2">
			<span>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> — <?php esc_html_e( 'Asian Media Group', 'amg-intelligence' ); ?></span>
			<span><?php esc_html_e( 'London · Understand What Happens Next', 'amg-intelligence' ); ?></span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
