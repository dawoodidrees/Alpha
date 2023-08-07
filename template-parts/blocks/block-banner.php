<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>banner page-width">
  <?php
    ja_the_field( 'title', '<h1 class="h1">', '</h1>', true );
    ja_the_field( 'description', '<p class="primary-body-text">', '</p>', true );
  ?>

  <div class="banner__bg">
    <?php ja_get_attachment( get_sub_field('background_image'), 'full', '', true ); ?>
  </div>
</section>