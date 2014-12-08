<?php;
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
global $product, $woocommerce_loop;
get_header(); ?>

	<div id="primary" class="content-area twelve columns">

		<main id="main" class="site-main" role="main">
			<?php // The Query
				 $args = array(
							'post_type' => 'product',
							'tax_query' => array(
									'taxonomy' => 'product_cat',
									'field'    => 'id',
									'terms'    => 37,
							),
						);
			$the_query = new WP_Query( $args ); ?>

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

					<!-- The Main Flexslider -->
					<div id="main-slider" class="flexslider">

						<?php // The Loop
						if ( $the_query->have_posts() ) { ?>

							<h2>Today's Specials</h2>

							<ul class="slides">
							<?php while ( $the_query->have_posts() ) {
								$the_query->the_post();

								echo '<li>';
									echo '<div>';
											the_excerpt();
									echo '</div>';
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full', array( 'class' => 'alignright' ) );
									endif;
									echo '<a href="'. get_the_permalink() .'" class="read-more">Read More</a>';
								echo '</li>';
							} ?>
							</ul>
						<?php } else {
							// no posts found
						}
						/* Restore original Post Data */
						wp_reset_query();
						?>

					  </ul>
					</div><!-- #main-slider -->

					<!-- Place somewhere in the <body> of your page -->
					<div id="secondary-slider" class="flexslider">
					  <?php $args = array(
							'post_type' => 'product',
							'tax_query' => array(
									'taxonomy' => 'product_cat',
									'field'    => 'tag_ID',
									'terms'    => 37,
							),
						);
						$the_query = new WP_Query($args);
						// The Loop
						if ( $the_query->have_posts() ) {
							$price = $product->get_price_html($price); ?>

							<h2>Featured Items</h2>

							<ul class="slides">
							<?php while ( $the_query->have_posts() ) {
								$the_query->the_post();
								echo '<li>';
									if ( has_post_thumbnail() ) :
										echo '<div class="flex-image"><a href="' . get_the_permalink() . '">';
											the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
										echo '</a></div>';
									endif; ?>
									<div class="product-metadata clear">
										<?php the_title('<h6><strong>','</strong></h6>');
										//echo '<span>' . $product_tagline = get_post_meta($post->ID, 'product_tagline', true) . '</span>';
										echo '<div class="product-metadata-inner">';
											// Echo out the $price
											echo $price . '<sup>EA</sup><br />';
											// Echo out the Add to cart link
											echo apply_filters( 'woocommerce_loop_add_to_cart_link',
												sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
													esc_url( $product->add_to_cart_url() ),
													esc_attr( $product->id ),
													esc_attr( $product->get_sku() ),
													esc_attr( isset( $quantity ) ? $quantity : 1 ),
													$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
													esc_attr( $product->product_type ),
													esc_html( $product->add_to_cart_text() )
												),
											$product );
										echo '</div>';
									echo '</div>';
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

				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php ycs_ambica_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php// get_sidebar(); ?>
<?php get_footer(); ?>
