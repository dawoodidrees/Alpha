
<div class="blog page-width">
  <div class="blog__article">
  <?php
		if ( is_singular() ) {
      the_title( '<h2 class="h2">', '</h2>' );
    } else {
			the_title( '<h2 class="h2 "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }
    // $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    // $time_string = sprintf(
		// 	$time_string,
		// 	esc_attr( get_the_date( DATE_W3C ) ),
		// 	esc_html( get_the_date() ),
		// 	esc_attr( get_the_modified_date( DATE_W3C ) ),
		// 	esc_html( get_the_modified_date() )
		// );
    // $posted_on = sprintf( esc_html_x( 'Posted on %s', 'post date', 'alpha' ),$time_string );
    //   echo '<p class="posted-on">' . $posted_on . '</p>';

    the_excerpt();
    ?>
  </div>

</div>
