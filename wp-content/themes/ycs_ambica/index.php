<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ambica
 */
get_header();

global $product, $woocommerce_loop; ?>

<div id="primary" class="content-area twelve columns">
	<main id="main" class="site-main" role="main">

		<article id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php ycs_ambica_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

			<div class="entry-content">

				<?php // Display the Main Slider containing $product posts from the "Specials" category.
				get_template_part( 'partials/content', 'flexslider-main' ); ?>

				<?php // Display the Secondary Slider containing $product posts from the "Featured" category.
				get_template_part( 'partials/content', 'flexslider-secondary' ); ?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php ycs_ambica_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			
		</article><!-- #post-## -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
