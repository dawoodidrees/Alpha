<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>contact-bar">
  <div class="contact-bar__contact">
    <div class="contact-bar__contact-image">
     <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>
    </div>
    <div class="contact-bar__contact-details">
      <?php
        ja_the_field( 'title', '<p class="inter-body-text">', '</p>', true );
        ja_the_field( 'phone', '<h3 class="h3">', '</h3>', true );
      ?>
    </div>
  </div>
  <div class="contact-bar__socials">
  <?php ja_the_field( 'social_title', '<h3 class="contact-bar__socials-title">', '</h3>', true ); ?>

  <?php if( have_rows( 'social_profiles', 'options' ) ) :?>
    <div class="contact-bar__socials-social">
      <?php while( have_rows( 'social_profiles', 'options' ) ) : the_row(); ?>
        <a href="<?php echo get_sub_field( 'url' ); ?>">
          <?php get_template_part( 'template-parts/svg/header/icon', get_sub_field('network') ); ?>
        </a>
      <?php endwhile;?>
    </div>
    <?php endif;?>
  </div>
</section>