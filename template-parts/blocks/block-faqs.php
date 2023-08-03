<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section  <?php ja_section_id(); ?> class="<?php echo $classes; ?>faq page-width">
  <?php ja_the_field( 'title', ' <h2 class="h2 faq__title">', '</h2>', true ); ?>

  <?php while ( have_rows( 'faqs') ) : the_row(); ?>
    <div class="faq__accordion">
      <div class="faq__accordion-wrapper">
        <div class="faq__accordion-chevron">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.625 6.86328C7.25 7.26953 6.59375 7.26953 6.21875 6.86328L1.21875 1.86328C1.03125 1.67578 0.9375 1.42578 0.9375 1.17578C0.9375 0.894531 1.03125 0.644531 1.21875 0.457031C1.59375 0.0507812 2.25 0.0507812 2.625 0.457031L6.9375 4.73828L11.2188 0.457031C11.5938 0.0507812 12.25 0.0507812 12.625 0.457031C13.0312 0.832031 13.0312 1.48828 12.625 1.86328L7.625 6.86328ZM7.625 12.8633C7.25 13.2695 6.59375 13.2695 6.21875 12.8633L1.21875 7.86328C1.03125 7.67578 0.9375 7.42578 0.9375 7.17578C0.9375 6.89453 1.03125 6.64453 1.21875 6.45703C1.59375 6.05078 2.25 6.05078 2.625 6.45703L6.9375 10.7383L11.2187 6.45703C11.5937 6.05078 12.25 6.05078 12.625 6.45703C13.0312 6.83203 13.0312 7.48828 12.625 7.86328L7.625 12.8633Z" fill="#F35162" />
          </svg>
        </div>
        <?php ja_the_field( 'question', '<h3 class="h3">', '</h3>', true ); ?>
      </div>

      <?php ja_the_field( 'answer', ' <p class="primary-body-text faq__accordion-desc">', '</p>', true ); ?>
    </div>
  <?php endwhile; ?>

</section>