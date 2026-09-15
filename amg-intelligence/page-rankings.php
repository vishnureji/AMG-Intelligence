<?php
/**
 * Template Name: Rankings Page
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<!-- Page banner -->
	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 mb-0"><?php esc_html_e( 'Measuring Influence.', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Recognising Achievement.', 'amg-intelligence' ); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<!-- Signature rankings list -->
<section class="py-5 rankings-section">
	<div class="container py-4">
		<p class="text-uppercase small fw-semibold eyebrow-accent mb-3"><?php esc_html_e( 'Signature Rankings', 'amg-intelligence' ); ?></p>
		<hr class="mt-0 mb-0">

		<a href="#" class="ranking-item d-block text-decoration-none position-relative border-bottom py-4">
			<div class="row gx-3 align-items-center">
				<div class="col-auto ranking-number">01</div>
				<div class="col-lg-5 col-md-6 col">
					<h3 class="mb-2"><?php esc_html_e( 'Asian Rich List', 'amg-intelligence' ); ?></h3>
					<p class="mb-0 text-muted"><?php esc_html_e( 'The definitive record of wealth creation and economic influence across the community.', 'amg-intelligence' ); ?></p>
				</div>
				<div class="col-auto ms-auto"><span class="ranking-view"><?php esc_html_e( 'VIEW →', 'amg-intelligence' ); ?></span></div>
			</div>
			<div class="ranking-cover-preview">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Rich List Cover.jpg' ); ?>" alt="<?php esc_attr_e( 'Asian Rich List Cover', 'amg-intelligence' ); ?>" class="ranking-cover-img">
			</div>
		</a>

		<a href="#" class="ranking-item d-block text-decoration-none position-relative border-bottom py-4">
			<div class="row gx-3 align-items-center">
				<div class="col-auto ranking-number">02</div>
				<div class="col-lg-5 col-md-6 col">
					<h3 class="mb-2"><?php esc_html_e( 'Growth Rankings', 'amg-intelligence' ); ?></h3>
					<p class="mb-0 text-muted"><?php esc_html_e( 'The fastest-rising businesses and the forces driving their momentum.', 'amg-intelligence' ); ?></p>
				</div>
				<div class="col-auto ms-auto"><span class="ranking-view"><?php esc_html_e( 'VIEW →', 'amg-intelligence' ); ?></span></div>
			</div>
			<div class="ranking-cover-preview">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Rich List Cover.jpg' ); ?>" alt="<?php esc_attr_e( 'Growth Rankings Cover', 'amg-intelligence' ); ?>" class="ranking-cover-img">
			</div>
		</a>

		<a href="#" class="ranking-item d-block text-decoration-none position-relative border-bottom py-4">
			<div class="row gx-3 align-items-center">
				<div class="col-auto ranking-number">03</div>
				<div class="col-lg-5 col-md-6 col">
					<h3 class="mb-2"><?php esc_html_e( 'Leadership Rankings', 'amg-intelligence' ); ?></h3>
					<p class="mb-0 text-muted"><?php esc_html_e( 'The fastest-rising businesses and the forces driving their momentum.', 'amg-intelligence' ); ?></p>
				</div>
				<div class="col-auto ms-auto"><span class="ranking-view"><?php esc_html_e( 'VIEW →', 'amg-intelligence' ); ?></span></div>
			</div>
			<div class="ranking-cover-preview">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Rich List Cover.jpg' ); ?>" alt="<?php esc_attr_e( 'Leadership Rankings Cover', 'amg-intelligence' ); ?>" class="ranking-cover-img">
			</div>
		</a>

		<a href="#" class="ranking-item d-block text-decoration-none position-relative border-bottom py-4">
			<div class="row gx-3 align-items-center">
				<div class="col-auto ranking-number">04</div>
				<div class="col-lg-5 col-md-6 col">
					<h3 class="mb-2"><?php esc_html_e( 'Future Leaders', 'amg-intelligence' ); ?></h3>
					<p class="mb-0 text-muted"><?php esc_html_e( 'The emerging names set to define the next decade of enterprise.', 'amg-intelligence' ); ?></p>
				</div>
				<div class="col-auto ms-auto"><span class="ranking-view"><?php esc_html_e( 'VIEW →', 'amg-intelligence' ); ?></span></div>
			</div>
			<div class="ranking-cover-preview">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Rich List Cover.jpg' ); ?>" alt="<?php esc_attr_e( 'Future Leaders Cover', 'amg-intelligence' ); ?>" class="ranking-cover-img">
			</div>
		</a>

		<a href="#" class="ranking-item d-block text-decoration-none position-relative border-bottom py-4">
			<div class="row gx-3 align-items-center">
				<div class="col-auto ranking-number">05</div>
				<div class="col-lg-5 col-md-6 col">
					<h3 class="mb-2"><?php esc_html_e( 'Industry Power Lists', 'amg-intelligence' ); ?></h3>
					<p class="mb-0 text-muted"><?php esc_html_e( 'Sector-by-sector recognition of the most influential figures and organisations.', 'amg-intelligence' ); ?></p>
				</div>
				<div class="col-auto ms-auto"><span class="ranking-view"><?php esc_html_e( 'VIEW →', 'amg-intelligence' ); ?></span></div>
			</div>
			<div class="ranking-cover-preview">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Rich List Cover.jpg' ); ?>" alt="<?php esc_attr_e( 'Industry Power Lists Cover', 'amg-intelligence' ); ?>" class="ranking-cover-img">
			</div>
		</a>
	</div>
</section>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
