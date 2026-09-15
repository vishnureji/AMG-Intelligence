<?php
/**
 * The main template file
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 mb-0"><?php single_post_title( '', true ); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<main class="py-5">
	<div class="container py-4">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5 pb-4 border-bottom' ); ?>>
					<h2 class="mb-2"><a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><?php the_title(); ?></a></h2>
					<p class="text-muted small mb-3"><?php echo get_the_date(); ?></p>
					<?php the_excerpt(); ?>
				</article>
				<?php
			endwhile;

			the_posts_navigation();
		else :
			?>
			<p><?php esc_html_e( 'No posts found.', 'amg-intelligence' ); ?></p>
			<?php
		endif;
		?>
	</div>
</main>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
