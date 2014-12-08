<?php
/**
 * Template Name: Contact Page
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ambica
 */

get_header(); ?>
	<?php echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3102.197546614309!2d-94.671705!3d38.965157000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0eb930e7f752f%3A0x1e6c8fbb2d13ce0b!2sAmbica+Foods!5e0!3m2!1sen!2sus!4v1417947770005" width="9000" height="250" frameborder="0" style="border:0"></iframe>'; ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main row twelve columns" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php// get_template_part( 'content', 'page' ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'ycs_ambica' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php edit_post_link( __( 'Edit', 'ycs_ambica' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
