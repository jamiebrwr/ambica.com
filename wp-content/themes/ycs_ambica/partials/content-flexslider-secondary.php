<?php
global $product, $woocommerce_loop;
/**
 * Customize the $query Object
 *
 * Customize the $query Object to return $products post_type
 * from the "features" taxonomy.
 */
$args = array(
	'post_type' => 'product',
	'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => 'featured'
		)
	)
);
$posts = get_posts( $args );
?>
<!-- Secondary Slider -->
<div id="secondary-slider" class="flexslider">
	<?php // The Loop
	if ( isset($posts) ) {
		echo '<h2>' . __( 'Featured Items', 'ycs_ambica' ) . '</h2>'; ?>
		<ul class="slides">
			<?php foreach($posts as $post) :
			setup_postdata( $post );
			$product_id = $post->ID;
			echo '<li>';
				if ( has_post_thumbnail() ) :
					echo '<div class="flex-image"><a href="' . get_the_permalink() . '">';
						the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
					echo '</a></div>';
				endif; ?>
				<div class="product-metadata clear">
					<?php the_title('<h6><strong>','</strong></h6>');
					echo '<div class="product-metadata-inner">';
						// Echo out the $price
						echo $product->get_price_html($price) . '<sup>EA</sup><br />';
						// Echo out the Add to cart link
						echo '<a href="/checkout/?add-to-cart='.$product_id.'" class="button add_to_cart_button product_type_simple">Add to Cart</a>';
					echo '</div>',
				'</div>',
			'</li>';
			endforeach;
		echo '</ul>';
	} else {
		// no posts found
		echo __( 'Sorry no posts found.', 'ycs_ambica' );
	}
	// Restore original Post Data
	wp_reset_postdata(); ?>
</div><!-- #secondary-slider -->