<!-- The Main Flexslider -->
<div id="main-slider" class="flexslider">

	<?php // The Loop
	if ( $the_query->have_posts() ) { ?>
	
		<h2>Today's Specials</h2>
		
		<ul class="slides">
		<?php while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<li>';
				echo '<div class"alignleft">';
					the_content();
				echo '</div>';
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full', array( 'class' => 'alignleft' ) );
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