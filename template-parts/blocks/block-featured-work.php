<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>featured-work page-width">
  <div class="featured-work__image">
    <?php ja_get_attachment( get_sub_field('image'), 'full', 'featured-work__image-img', true);?>
    <!-- <img loading="lazy" class="featured-work__image-img" src="./images/prodcutive-image.png" alt="prodcutive-image" /> -->
    <img loading="lazy" class="featured-work__image-bg" src="<?php asset_path( "/images/bg-vector.png", true ); ?>" alt="bg-vector" />
  </div>

  <div class="featured-work__content">
    <?php
      ja_the_field( 'pre_title', '<h3 class="h4 featured-work__content-sub-title">', '</h3>', true );
      ja_the_field( 'title', '<h2 class="h2 featured-work__content-title">', '</h2>', true );
      ja_the_field( 'description', '<p class="primary-body-text featured-work__content-desc">', '</p>', true );
    ?>

    <div class="featured-work__checkboxes">
      <?php  while ( have_rows( 'list_items' ) ) : the_row();?>
        <div class="featured-work__checkboxes-checkbox">
          <div class="featured-work__checkboxes-checkbox-wrapper">
            <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.15781 8.04931C3.07218 8.04942 2.98739 8.03135 2.90829 7.99616C2.82919 7.96097 2.75734 7.90934 2.69689 7.84425L0.193574 5.15681C0.132474 5.09196 0.0839187 5.01479 0.0506987 4.92973C0.0174787 4.84466 0.00024983 4.75339 2.69695e-06 4.66115C-0.000244436 4.56892 0.0164951 4.47754 0.0492587 4.39227C0.0820224 4.30701 0.130163 4.22954 0.190914 4.16431C0.251665 4.09909 0.323826 4.0474 0.403248 4.01223C0.482671 3.97705 0.567788 3.95907 0.653704 3.95933C0.73962 3.95959 0.82464 3.97809 0.903876 4.01375C0.983112 4.0494 1.055 4.10153 1.11541 4.16712L3.15781 6.35973L8.01677 1.14339C8.1391 1.0126 8.30478 0.939255 8.47743 0.939454C8.65008 0.939652 8.81561 1.01337 8.93769 1.14444C9.05976 1.27551 9.12842 1.45322 9.12859 1.63857C9.12877 1.82392 9.06044 2.00178 8.9386 2.1331L3.61873 7.8443C3.55827 7.90939 3.48643 7.961 3.40733 7.99619C3.32822 8.03137 3.24343 8.04942 3.15781 8.04931Z" fill="white" />
            </svg>
          </div>
          <?php ja_the_field( 'list_text', '<p class="secondary-body-text">', '</p>', true ); ?>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>