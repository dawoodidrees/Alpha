<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>featured-tech page-width">
  <div class="featured-tech__wrapper">
    <?php
      ja_the_field( 'pre_title', '<h3 class="h4 featured-tech__sub-title">', '</h3>', true );
      ja_the_field( 'title', '<h2 class="h2 featured-tech__title">', '</h2>', true );
    ?>
  </div>

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

  <div class="featured-tech__grid">
    <?php while( have_rows( 'cards' ) ) : the_row(); ?>
      <div class="featured-tech__grid-image">
        <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>

        <div class="featured-tech__grid-image-content">
          <?php $title = get_sub_field('title'); ?>
          <h3 class="h3"><?php echo $title['title']; ?></h3>
          <?php ja_the_field( 'excerpt', ' <p class="secondary-body-text featured-tech__grid-image-content-desc">', '</p>', true ); ?>

          <a class="featured-tech__grid-image-content-btn" href="<?php echo $title['url']; ?>">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.9099 1.5V13.6875C17.9099 14.0605 17.7617 14.4181 17.498 14.6819C17.2343 14.9456 16.8766 15.0938 16.5036 15.0938C16.1306 15.0938 15.773 14.9456 15.5092 14.6819C15.2455 14.4181 15.0974 14.0605 15.0974 13.6875V4.89844L2.49853 17.4949C2.23435 17.7591 1.87605 17.9075 1.50244 17.9075C1.12883 17.9075 0.770526 17.7591 0.506346 17.4949C0.242165 17.2307 0.09375 16.8724 0.09375 16.4988C0.09375 16.1252 0.242165 15.7669 0.506346 15.5027L13.1052 2.90625H4.31611C3.94315 2.90625 3.58546 2.75809 3.32174 2.49437C3.05802 2.23065 2.90986 1.87296 2.90986 1.5C2.90986 1.12704 3.05802 0.769354 3.32174 0.505631C3.58546 0.241908 3.94315 0.09375 4.31611 0.09375H16.5036C16.8766 0.09375 17.2343 0.241908 17.498 0.505631C17.7617 0.769354 17.9099 1.12704 17.9099 1.5Z" fill="white" />
            </svg>
          </a>

        </div>

      </div>
    <?php endwhile; ?>
  </div>
</section>