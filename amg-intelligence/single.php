<?php
/**
 * The template for displaying all single posts
 *
 * @package AMG_Intelligence
 */

get_header();
?>

	<section class="page-banner py-5">
		<div class="container py-4 text-center">
			<h1 class="display-5 mb-0"><?php the_title(); ?></h1>
		</div>
	</section>
</div><!-- /.gradient-band -->

<main class="py-5">
	<div class="container container-narrow py-4">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
			<?php
		endwhile;
		?>
	</div>
</main>

<?php
get_template_part( 'template-parts/cta-band' );
get_footer();
