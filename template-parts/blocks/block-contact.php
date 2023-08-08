<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>contact page-width">
  <div class="contact__details">
    <?php
      ja_the_field( 'pre_title', '<h4 class="h4">', '</h4>', true );
      ja_the_field( 'title', '<h2 class="h2">', '</h2>', true );
    ?>

    <?php  while( have_rows( 'contact_detail' )) : the_row(); ?>
      <div class="services__contact-detail">
        <?php get_template_part( 'template-parts/svg/icon', get_sub_field('type') ); ?>
        <div>
          <?php ja_the_field( 'title', '<h3 class="h3">', '</h3>', true ); ?>
          <div class="secondary-body-text"><?php echo get_sub_field('detail'); ?></div>
        </div>
      </div>
    <?php endwhile; ?>

  </div>
  <div class="contact__form">
    <?php
      if ($form_id = get_sub_field('form')) {
        echo do_shortcode('[wpforms id="' . $form_id . '" title="false" description="false"]');
      }
    ?>
  </div>
  <!-- <form action="" class="contact__form">
    <div class="contact__form-wrapper">
      <label for="name">Name</label>
      <input type="text" name="full_name" id="full_name" placeholder="Jane Doe" required />
    </div>

    <div class="contact__form-wrapper">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="jane@example.com" />
    </div>

    <div class="contact__form-wrapper contact__form-textarea">
      <label for="email">Message</label>
      <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
    </div>

    <div class="contact__form-wrapper contact__form-submit">
      <button class="btn btn--primary light-pulse" type="submit">
        Leave A Comment
        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M13.6875 7.71875L8.6875 12.7188C8.5 12.9062 8.25 13 8 13C7.71875 13 7.46875 12.9062 7.28125 12.7188C6.875 12.3438 6.875 11.6875 7.28125 11.3125L10.5625 8H1C0.4375 8 0 7.5625 0 7C0 6.46875 0.4375 6 1 6H10.5625L7.28125 2.71875C6.875 2.34375 6.875 1.6875 7.28125 1.3125C7.65625 0.90625 8.3125 0.90625 8.6875 1.3125L13.6875 6.3125C14.0938 6.6875 14.0938 7.34375 13.6875 7.71875Z" fill="white" />
        </svg>
      </button>
    </div>
  </form> -->
</section>