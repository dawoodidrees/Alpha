<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>marketing page-width">
  <?php ja_the_field( 'title', '<h2 class="h2-light marketing__title">', '</h2>', true ); ?>
  <!-- <h2 class="h2-light marketing__title">Conversion based marketing</h2> -->

  <?php while ( have_rows('content') ) : the_row(); ?>
    <div class="marketing__row">
      <div class="marketing__row-col">
        <?php ja_the_field( 'col_title_1', '<p class="marketing__row-col-heading inter-body-text">', '</p>', true ); ?>
        <!-- <p class="marketing__row-col-heading inter-body-text">Want to get found online?</p> -->
      </div>
      <div class="marketing__row-col">
        <div class="marketing__row-col-title">
          <?php $link_two = get_sub_field('col_title_2'); ?>
          <p class="inter-body-text"><?php echo $link_two['title']; ?></p>
          <a class="pulse" href="<?php echo $link_two['url']; ?>">></a>
        </div>
        <?php ja_the_field( 'col_content_2', '<p class="inter-body-text">', '</p>', true ); ?>
        <!-- <p class="inter-body-text">Get to page 1 in 6-12 months for your main keywords, so you can spend less on ads.</p> -->
      </div>
      <div class="marketing__row-col">
        <div class="marketing__row-col-title">
          <?php $link_three = get_sub_field('col_title_3'); ?>
          <p class="inter-body-text"><?php echo $link_three['title']; ?></p>
          <a class="pulse" href="<?php echo $link_three['url']; ?>">></a>
        </div>
        <?php ja_the_field( 'col_content_3', '<p class="inter-body-text">', '</p>', true ); ?>
        <!-- <p class="inter-body-text">Boost online sales through structured PPC campaigns, so your business makes money 24/7.</p> -->
      </div>
    </div>
  <?php endwhile; ?>

</section>