<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>featured-blog page-width">
  <?php
    ja_the_field( 'title', '<h2 class="h2 featured-blog__title">', '</h2>', true );
    ja_the_field( 'post_title', '<h4 class="h4 featured-blog__sub-title">', '</h4>', true );
  ?>
  <!-- <h2 class="h2 featured-blog__title">the latest and greatest in web and marketing.</h2>
  <h4 class="h4 featured-blog__sub-title">The Blog</h4> -->

  <?php
    $link = get_sub_field('button');

    if( $link ) :
  ?>

  <a href="<?php echo $link['url']; ?>" class="btn btn--primary featured-blog__btn light-pulse">
    <?php echo $link['title']; ?>
    <span>
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.8125 6.10938C11.8125 6.60156 11.4023 7.01172 10.9375 7.01172H7V10.9492C7 11.4141 6.58984 11.7969 6.125 11.7969C5.63281 11.7969 5.25 11.4141 5.25 10.9492V7.01172H1.3125C0.820312 7.01172 0.4375 6.60156 0.4375 6.10938C0.4375 5.64453 0.820312 5.26172 1.3125 5.26172H5.25V1.32422C5.25 0.832031 5.63281 0.421875 6.125 0.421875C6.58984 0.421875 7 0.832031 7 1.32422V5.26172H10.9375C11.4023 5.23438 11.8125 5.64453 11.8125 6.10938Z" fill="white" />
      </svg>
    </span>
    </a>
  <?php endif; ?>

  <div class="featured-blog__blog">
    <?php while( have_rows( 'posts' ) ) : the_row(); ?>

      <?php $post_id = get_sub_field('select_post'); ?>
        <div class="featured-blog__blog-card">
          <div class="featured-blog__blog-card-image">
            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ) ?>" alt="<?php echo get_the_title( $post_id ); ?>" />
          </div>
          <div class="featured-blog__blog-card-hr"></div>
          <h3 class="h3 featured-blog__blog-card-title"><?php echo get_the_title( $post_id ); ?></h3>
          <p class="secondary-body-text featured-blog__blog-card-desc"><?php echo get_the_excerpt( $post_id ); ?></p>
          <a class="featured-blog__blog-card-link" href="<?php echo get_permalink( $post_id ); ?>"><?php _e( 'Read More', 'alpha'); ?></a>
        </div>
    <?php endwhile; ?>
  </div>
</section>