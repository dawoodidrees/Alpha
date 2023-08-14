<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alpha
 */

?>
<section id="post-<?php the_ID(); ?>" <?php post_class(['banner', 'page-width']); ?>>
  <?php
		if ( is_singular() ) :
			the_title( '<h1 class="h1">', '</h1>' );
		else :
			the_title( '<h1 class="h1 "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
    ?>
  <p class="primary-body-text"><?php echo get_the_excerpt();?>
  </p>
  <div class="banner__bg">
    <?php alpha_post_thumbnail(); ?>
  </div>
</section>
<div class="blog page-width">
  <div class="blog__article">
  <?php
		if ( is_singular() ) {
      the_title( '<h2 class="h2">', '</h2>' );
    } else {
			the_title( '<h2 class="h2 "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    $time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);
    $posted_on = sprintf( esc_html_x( 'Posted on %s', 'post date', 'alpha' ),$time_string );
      echo '<p class="posted-on">' . $posted_on . '</p>';

    the_content(); ?>
  </div>
  <?php get_sidebar(); ?>

</div>
