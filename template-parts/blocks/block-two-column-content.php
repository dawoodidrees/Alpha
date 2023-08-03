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
    ?>
    <form class="email-signup__content-input" action="#">
      <input type="email" name="email" id="email" placeholder="Enter Your Email" />
      <button class="btn btn--primary light-pulse">Submit</button>
    </form>
  </div>
</section>