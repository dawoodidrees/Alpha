<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section  <?php ja_section_id(); ?> class="<?php echo $classes; ?>contact__map">
  <?php echo get_sub_field('map_iframe'); ?>
</section>