<?php
/**
 * Template Name: Events Page
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<!-- Page banner -->
	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 mb-0"><?php esc_html_e( 'Where Insight Meets Opportunity', 'amg-intelligence' ); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<!-- Why attend -->
<section class="py-5">
	<div class="container py-4">
		<p class="why-attend-eyebrow text-uppercase mb-3"><span class="eyebrow-accent"><?php esc_html_e( 'Why Attend', 'amg-intelligence' ); ?></span> <span class="eyebrow-dark"><?php esc_html_e( '— Where Insight Meets Opportunity', 'amg-intelligence' ); ?></span></p>
		<hr class="mt-0 mb-5">

		<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 g-4 text-center why-attend-grid">
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Strategic Insight.svg' ); ?>" alt="<?php esc_attr_e( 'Strategic Insight', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Strategic', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Insight', 'amg-intelligence' ); ?></p>
			</div>
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Influential Networks.svg' ); ?>" alt="<?php esc_attr_e( 'Influential Networks', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Influential', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Networks', 'amg-intelligence' ); ?></p>
			</div>
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Expert Speakers.svg' ); ?>" alt="<?php esc_attr_e( 'Expert Speakers', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Expert', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Speakers', 'amg-intelligence' ); ?></p>
			</div>
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Market Intelligence.svg' ); ?>" alt="<?php esc_attr_e( 'Market Intelligence', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Market', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Intelligence', 'amg-intelligence' ); ?></p>
			</div>
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Commercial Opportunities.svg' ); ?>" alt="<?php esc_attr_e( 'Commercial Opportunities', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Commercial', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Opportunities', 'amg-intelligence' ); ?></p>
			</div>
			<div class="col">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Leadership Perspectives.svg' ); ?>" alt="<?php esc_attr_e( 'Leadership Perspectives', 'amg-intelligence' ); ?>" class="why-attend-icon mb-3">
				<p class="why-attend-label mb-0"><?php esc_html_e( 'Leadership', 'amg-intelligence' ); ?><br><?php esc_html_e( 'Perspectives', 'amg-intelligence' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Formats banner -->
<section class="py-4">
	<div class="container">
		<div class="formats-banner">
			<div class="row align-items-center gy-4 p-4 p-lg-5">
				<div class="col-lg-7">
					<p class="eyebrow-accent text-uppercase small fw-bold mb-2"><?php esc_html_e( 'Formats', 'amg-intelligence' ); ?></p>
					<h2 class="formats-title text-white mb-0"><?php esc_html_e( 'Executive forums, leadership dinners, rankings celebrations and industry conferences.', 'amg-intelligence' ); ?></h2>
				</div>
				<div class="col-lg-5">
					<p class="formats-desc mb-0"><?php esc_html_e( 'Access to influential people, valuable ideas and meaningful connections — where insight meets opportunity.', 'amg-intelligence' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Enterprise enquiry -->
<section class="py-5 enquiry-section">
	<div class="container py-5">
		<div class="row gy-5">
			<div class="col-lg-4">
				<p class="text-uppercase small fw-bold eyebrow-accent mb-3"><?php esc_html_e( 'Enterprise Enquiry', 'amg-intelligence' ); ?></p>
				<h2 class="enquiry-title mb-3"><?php esc_html_e( 'Request a Consultation', 'amg-intelligence' ); ?></h2>
				<p class="enquiry-desc mb-0"><?php esc_html_e( 'Tell us what you\'re trying to understand. A member of our intelligence team will be in touch to scope the right engagement.', 'amg-intelligence' ); ?></p>
			</div>

			<div class="col-lg-8">
				<form class="enquiry-form-panel" action="#" method="post">
					<div class="row g-0 enquiry-row">
						<div class="col-md-6 enquiry-field border-end-md">
							<label class="enquiry-label" for="fullName"><?php esc_html_e( 'Full Name', 'amg-intelligence' ); ?></label>
							<input type="text" id="fullName" name="fullName" class="form-control enquiry-input" placeholder="<?php esc_attr_e( 'Full Name', 'amg-intelligence' ); ?>" required>
						</div>
						<div class="col-md-6 enquiry-field">
							<label class="enquiry-label" for="jobTitle"><?php esc_html_e( 'Job Title', 'amg-intelligence' ); ?></label>
							<input type="text" id="jobTitle" name="jobTitle" class="form-control enquiry-input" placeholder="<?php esc_attr_e( 'Job Title', 'amg-intelligence' ); ?>" required>
						</div>
					</div>

					<div class="row g-0 enquiry-row">
						<div class="col-md-6 enquiry-field border-end-md">
							<label class="enquiry-label" for="organisation"><?php esc_html_e( 'Organisation', 'amg-intelligence' ); ?></label>
							<input type="text" id="organisation" name="organisation" class="form-control enquiry-input" placeholder="<?php esc_attr_e( 'Organisation', 'amg-intelligence' ); ?>" required>
						</div>
						<div class="col-md-6 enquiry-field">
							<label class="enquiry-label" for="businessEmail"><?php esc_html_e( 'Business Email', 'amg-intelligence' ); ?></label>
							<input type="email" id="businessEmail" name="businessEmail" class="form-control enquiry-input" placeholder="<?php esc_attr_e( 'Business Email', 'amg-intelligence' ); ?>" required>
						</div>
					</div>

					<div class="row g-0 enquiry-row">
						<div class="col-12 enquiry-field">
							<label class="enquiry-label" for="telephone"><?php esc_html_e( 'Telephone', 'amg-intelligence' ); ?></label>
							<input type="tel" id="telephone" name="telephone" class="form-control enquiry-input" placeholder="<?php esc_attr_e( 'Telephone', 'amg-intelligence' ); ?>">
						</div>
					</div>

					<div class="row g-0 enquiry-row">
						<div class="col-12 enquiry-field">
							<label class="enquiry-label d-block mb-3"><?php esc_html_e( 'Company Size', 'amg-intelligence' ); ?></label>
							<div class="d-flex flex-wrap gap-2">
								<input type="radio" class="btn-check" name="companySize" id="size1" value="1-50">
								<label class="pill-option" for="size1"><?php esc_html_e( '1–50 Employees', 'amg-intelligence' ); ?></label>
								<input type="radio" class="btn-check" name="companySize" id="size2" value="51-250">
								<label class="pill-option" for="size2"><?php esc_html_e( '51–250 Employees', 'amg-intelligence' ); ?></label>
								<input type="radio" class="btn-check" name="companySize" id="size3" value="251-1000">
								<label class="pill-option" for="size3"><?php esc_html_e( '251–1000 Employees', 'amg-intelligence' ); ?></label>
								<input type="radio" class="btn-check" name="companySize" id="size4" value="1000+">
								<label class="pill-option" for="size4"><?php esc_html_e( '1000+ Employees', 'amg-intelligence' ); ?></label>
							</div>
						</div>
					</div>

					<div class="row g-0 enquiry-row">
						<div class="col-12 enquiry-field">
							<label class="enquiry-label d-block mb-3"><?php esc_html_e( 'Areas of Interest', 'amg-intelligence' ); ?></label>
							<div class="d-flex flex-wrap gap-2">
								<input type="checkbox" class="btn-check" name="interest[]" id="interest1" value="Research Reports">
								<label class="pill-option" for="interest1"><?php esc_html_e( 'Research Reports', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest2" value="Industry Intelligence">
								<label class="pill-option" for="interest2"><?php esc_html_e( 'Industry Intelligence', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest3" value="Enterprise Licence">
								<label class="pill-option" for="interest3"><?php esc_html_e( 'Enterprise Licence', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest4" value="Custom Research">
								<label class="pill-option" for="interest4"><?php esc_html_e( 'Custom Research', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest5" value="Strategic Briefings">
								<label class="pill-option" for="interest5"><?php esc_html_e( 'Strategic Briefings', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest6" value="Rankings Data">
								<label class="pill-option" for="interest6"><?php esc_html_e( 'Rankings Data', 'amg-intelligence' ); ?></label>
								<input type="checkbox" class="btn-check" name="interest[]" id="interest7" value="Events & Networking">
								<label class="pill-option" for="interest7"><?php esc_html_e( 'Events & Networking', 'amg-intelligence' ); ?></label>
							</div>
						</div>
					</div>

					<div class="row g-0 enquiry-row">
						<div class="col-12 enquiry-field">
							<label class="enquiry-label" for="requirements"><?php esc_html_e( 'Tell Us About Your Requirements', 'amg-intelligence' ); ?></label>
							<textarea id="requirements" name="requirements" class="form-control enquiry-input" rows="3" placeholder="<?php esc_attr_e( 'Tell us about your requirements...', 'amg-intelligence' ); ?>"></textarea>
						</div>
					</div>

					<div class="row g-0 enquiry-row is-last">
						<div class="col-12 enquiry-field">
							<label class="enquiry-label d-block mb-3"><?php esc_html_e( 'Preferred Timeframe', 'amg-intelligence' ); ?></label>
							<div class="d-flex flex-wrap gap-2">
								<input type="radio" class="btn-check" name="responseTime" id="time1" value="Within 24 Hours">
								<label class="pill-option" for="time1"><?php esc_html_e( 'Within 24 Hours', 'amg-intelligence' ); ?></label>
								<input type="radio" class="btn-check" name="responseTime" id="time2" value="Within 7 Days">
								<label class="pill-option" for="time2"><?php esc_html_e( 'Within 7 Days', 'amg-intelligence' ); ?></label>
								<input type="radio" class="btn-check" name="responseTime" id="time3" value="This Month">
								<label class="pill-option" for="time3"><?php esc_html_e( 'This Month', 'amg-intelligence' ); ?></label>
							</div>
						</div>
					</div>
				</form>

				<button type="submit" class="btn btn-enquiry-submit mt-4"><?php esc_html_e( 'Submit Enquiry', 'amg-intelligence' ); ?></button>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
