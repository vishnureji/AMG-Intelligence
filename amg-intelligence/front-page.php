<?php
/**
 * The template for displaying the home page
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<!-- Hero -->
	<section class="hero-section py-5">
		<div class="container py-4">
			<div class="row align-items-center gy-5">
				<div class="col-lg-6 hero-copy">
					<h1 class="display-4 mb-4"><?php esc_html_e( 'Understand What Happens Next.', 'amg-intelligence' ); ?></h1>
					<p class="hero-lead mb-3"><?php esc_html_e( 'The organisations that outperform are rarely the biggest, fastest or loudest. They are the ones that recognise change before everyone else.', 'amg-intelligence' ); ?></p>
					<p class="hero-sub mb-4"><?php esc_html_e( 'We provide research, rankings, market intelligence and executive insight that help leaders anticipate disruption, identify opportunity and make better decisions — turning information into competitive advantage.', 'amg-intelligence' ); ?></p>
					<div class="d-flex flex-wrap gap-3">
						<a href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>" class="btn btn-accent rounded-0 px-4 py-2"><?php esc_html_e( 'Explore Intelligence', 'amg-intelligence' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/rankings/' ) ); ?>" class="btn btn-outline-dark rounded-0 px-4 py-2"><?php esc_html_e( 'View Reports', 'amg-intelligence' ); ?></a>
					</div>
				</div>
				<div class="col-lg-6 hero-image">
					<div id="hero-lottie" class="hero-lottie"></div>
				</div>
			</div>
		</div>
	</section>
</div><!-- /.gradient-band -->

<!-- Clarity intro -->
<section class="py-5 clarity-intro-section">
	<div class="container py-4">
		<div class="row gy-4">
			<div class="col-lg-6">
				<h2 class="font-serif fw-normal clarity-intro-heading"><?php esc_html_e( 'The world has no shortage of information. What leaders need is clarity.', 'amg-intelligence' ); ?></h2>
			</div>
			<div class="col-lg-6">
				<p class="clarity-intro-text text-muted"><?php esc_html_e( 'Markets shift. Consumer behaviour evolves. Technologies emerge. Competitive landscapes change. AMG Intelligence helps decision-makers understand the forces shaping business, wealth and society — enabling them to act with greater confidence and conviction.', 'amg-intelligence' ); ?></p>
				<p class="clarity-intro-text text-muted mb-0"><?php esc_html_e( 'By combining research, journalism, business intelligence and direct access to influential leaders, we provide insight designed to support better decisions, stronger strategies and sustainable growth.', 'amg-intelligence' ); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Four feature boxes -->
<section class="pb-5 feature-boxes-section">
	<div class="container">
		<div class="row g-0 feature-boxes-row">
			<div class="col-12 col-md-6 col-lg-3 feature-box-col">
				<a href="<?php echo esc_url( home_url( '/rankings/' ) ); ?>" class="feature-box">
					<h3><?php esc_html_e( 'Research & Reports', 'amg-intelligence' ); ?></h3>
					<p><?php esc_html_e( 'Independent analysis of the trends, industries and opportunities shaping future growth.', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3 feature-box-col">
				<a href="<?php echo esc_url( home_url( '/rankings/' ) ); ?>" class="feature-box">
					<h3><?php esc_html_e( 'Rankings & Intelligence Assets', 'amg-intelligence' ); ?></h3>
					<p><?php esc_html_e( 'Proprietary rankings, datasets and benchmarks identifying influence, achievement and emerging leadership.', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3 feature-box-col">
				<a href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>" class="feature-box">
					<h3><?php esc_html_e( 'Intelligence Briefings', 'amg-intelligence' ); ?></h3>
					<p><?php esc_html_e( 'Concise executive analysis of significant developments, market changes and strategic implications.', 'amg-intelligence' ); ?></p>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-3 feature-box-col">
				<a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="feature-box">
					<h3><?php esc_html_e( 'Executive Conversations', 'amg-intelligence' ); ?></h3>
					<p><?php esc_html_e( 'Exclusive interviews with founders, CEOs, investors and influential decision-makers.', 'amg-intelligence' ); ?></p>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Briefings preview -->
<section class="briefings-preview-section py-5">
	<div class="container container-narrow py-4">
		<div class="row g-4">
			<div class="col-lg-6 briefing-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/What Happens Next Thumbnail.png' ); ?>" alt="<?php esc_attr_e( 'What Happens Next? briefing series', 'amg-intelligence' ); ?>">
				<h3 class="font-serif fw-normal"><?php esc_html_e( 'What Happens Next?', 'amg-intelligence' ); ?></h3>
				<p><?php esc_html_e( 'Our flagship briefing series examining the economic, technological and geopolitical forces reshaping business and society. Focused, accessible and actionable — what leaders should be paying attention to now.', 'amg-intelligence' ); ?></p>
				<a href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>" class="link-arrow"><?php esc_html_e( 'Discover What Happens Next →', 'amg-intelligence' ); ?></a>
			</div>
			<div class="col-lg-6 briefing-card">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Asian Trader Intelligence Thumbnail.png' ); ?>" alt="<?php esc_attr_e( 'Asian Trader Intelligence briefing', 'amg-intelligence' ); ?>">
				<h3 class="font-serif fw-normal"><?php esc_html_e( 'Asian Trader Intelligence', 'amg-intelligence' ); ?></h3>
				<p><?php esc_html_e( 'The leading intelligence briefing for Britain\'s convenience retail sector — market analysis, commercial insight and strategic context for retailers navigating a rapidly changing marketplace.', 'amg-intelligence' ); ?></p>
				<a href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>" class="link-arrow"><?php esc_html_e( 'Stay Ahead of the Market →', 'amg-intelligence' ); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Clarity in an Uncertain World -->
<section class="clarity-section py-5">
	<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/AMG Icon.png' ); ?>" alt="" class="watermark-logo" aria-hidden="true">
	<div class="container py-lg-4">
		<div class="row gy-4 align-items-center">
			<div class="col-lg-5 pe-lg-4">
				<p class="clarity-eyebrow mb-1"><?php esc_html_e( 'WHY', 'amg-intelligence' ); ?></p>
				<h2 class="clarity-brand-title"><?php echo wp_kses( __( 'AMG<br>Intelligence', 'amg-intelligence' ), array( 'br' => array() ) ); ?></h2>
				<p class="clarity-tagline"><?php esc_html_e( 'Clarity in an Uncertain World', 'amg-intelligence' ); ?></p>
				<div class="clarity-accent-bar"></div>
			</div>
			<div class="col-lg-7 clarity-right-col">
				<p class="clarity-eyebrow mb-2"><?php esc_html_e( 'MOST ORGANISATIONS TELL YOU WHAT HAPPENED.', 'amg-intelligence' ); ?></p>
				<h3 class="clarity-highlight-title"><?php echo wp_kses( __( 'We help you understand<br>what happens <span class="accent-text">next.</span>', 'amg-intelligence' ), array( 'br' => array(), 'span' => array( 'class' => array() ) ) ); ?></h3>
				<p class="clarity-desc mb-0"><?php esc_html_e( 'By combining research, journalism, business intelligence and direct access to influential leaders, we provide insight designed to support better decisions, stronger strategies and sustainable growth.', 'amg-intelligence' ); ?></p>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
