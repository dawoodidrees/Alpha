<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>email-signup">
  <div class="email-signup__image">
    <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>
  </div>
  <div class="email-signup__content">
    <?php
      ja_the_field( 'title', '<h2 class="h2 email-signup__content-title">', '</h2>', true );
      ja_the_field( 'description', '<p class="primary-body-text email-signup__content-desc">', '</p>', true );
      if ($form_id = get_sub_field('form')) {
        echo do_shortcode('[wpforms id="' . $form_id . '" title="false" description="false"]');
      }
    ?>
  </div>
</section>