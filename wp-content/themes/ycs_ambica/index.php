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

get_header(); ?>

	<div id="primary" class="content-area twelve columns">

		<main id="main" class="site-main" role="main">
<<<<<<< HEAD
		
			<?php // The Query
			$the_query = new WP_Query( array('post_type' => 'product', 'post_per_page' => 1 ) ); ?>
			
=======

>>>>>>> 5db3587eea4cfcf84099d084fbc1fa12023a0b44
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php ycs_ambica_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

<<<<<<< HEAD
					<!-- The Main Flexslider -->
					<div id="main-slider" class="flexslider">
					
						<?php // The Loop
						if ( $the_query->have_posts() ) { ?>
						
							<h2>Today's Specials</h2>
							
							<ul class="slides">
							<?php while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<li>';
									echo '<div class="">';
											the_excerpt();
											//echo '<a href="'. get_the_permalink() .'" class="read-more">Read More</a>';
									echo '</div>';
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full', array( 'class' => 'alignright' ) );
									endif;
								echo '</li>';
							} ?>
							</ul>
						<?php } else {
							// no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
					
					  </ul>
					</div><!-- #main-slider -->
					
					<!-- Place somewhere in the <body> of your page -->
					<div id="secondary-slider" class="flexslider">
					  <?php // The Loop
						if ( $the_query->have_posts() ) { ?>
						
							<h2>Featured Items</h2>
							
							<ul class="slides">
							<?php while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<li>';
									if ( has_post_thumbnail() ) :
										echo '<a href="' . get_the_permalink() . '">';
											the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
										echo '</a>';
									endif;
								echo '</li>';
							} ?>
							</ul>
						<?php } else {
							// no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();
						?>
					</div><!-- #secondary-slider -->

=======
					<?php putRevSlider("Todays Specials Slider") ?>

					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'ycs_ambica' ),
							'after'  => '</div>',
						) );
					?>
>>>>>>> 5db3587eea4cfcf84099d084fbc1fa12023a0b44
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php ycs_ambica_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
