<?php
global $product, $woocommerce_loop;
/**
 * Customize the $query Object
 *
 * Customize the $query Object to return $products post_type
 * from the "specials taxonomy.
 */
$args = array(
	'post_type' => 'product',
	'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => 'specials'
		)
	)
);
$posts = get_posts( $args );
?>
<!-- The Main Flexslider -->
<div id="main-slider" class="flexslider">
<?php 	if ( isset($posts) ) { 
			echo '<h2>' . __( 'Today\'s Specials', 'ycs_ambica' ) . '</h2>'; ?>
			<ul class="slides">
<?php 			foreach($posts as $post) :
					setup_postdata( $post );
						// Start looping over the posts
						the_title();
						echo '<li>';
							// Display the_content();
							echo '<div>'. the_content() . '</div>';
							// Check for, and display the post_thumbnail();
							if ( has_post_thumbnail() ) : the_post_thumbnail( 'full', array( 'class' => 'alignright' ) ); endif;
							// Display Read More link
							echo '<a href="'. get_the_permalink() .'" class="read-more">'.__( 'Read More', 'ycs_ambica' ).'</a>';
						echo '</li>';
				endforeach; // End looping over the posts
			echo'</ul>';
		} else {
			// no posts found
			echo __( 'Sorry no posts found.', 'ycs_ambica' );
	} // End isset();
	// Restore original Post Data
	wp_reset_postdata(); ?>
</div><!-- #main-slider -->