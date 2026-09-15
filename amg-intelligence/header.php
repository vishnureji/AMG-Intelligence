<?php
/**
 * The header for our theme
 *
 * @package AMG_Intelligence
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="gradient-band">
	<header class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Site Logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" height="80">
						<?php
					}
					?>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
					aria-controls="mainNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'amg-intelligence' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="mainNav">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => false,
								'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-4 text-center me-lg-4',
								'fallback_cb'    => false,
							)
						);
					} else {
						?>
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-4 text-center me-lg-4">
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'amg-intelligence' ); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/rankings/' ) ); ?>"><?php esc_html_e( 'Rankings', 'amg-intelligence' ); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/briefings/' ) ); ?>"><?php esc_html_e( 'Briefings', 'amg-intelligence' ); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/insights/' ) ); ?>"><?php esc_html_e( 'Insights', 'amg-intelligence' ); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/events/' ) ); ?>"><?php esc_html_e( 'Events', 'amg-intelligence' ); ?></a></li>
							<li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'amg-intelligence' ); ?></a></li>
						</ul>
						<?php
					}
					?>
					<div class="text-center">
						<a href="#subscribe" class="btn btn-dark rounded-0 px-4 py-2"><?php esc_html_e( 'Subscribe', 'amg-intelligence' ); ?></a>
					</div>
				</div>
			</div>
		</nav>
	</header>
