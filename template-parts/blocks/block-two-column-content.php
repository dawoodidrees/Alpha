<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if (get_sub_field('section_classes')) {
    $classes .= get_sub_field('section_classes') . ' ';
  }
?>

<?php if( get_sub_field( 'list_type') == 'simple' ) : ?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>text-w-image page-width">
  <div class="featured-work__content">
    <?php
      ja_the_field('pre_title', '<h3 class="h4 featured-work__content-sub-title">', '</h3>', true);
      ja_the_field('title', '<h2 class="h2 featured-work__content-title">', '</h2>', true);
      ja_the_field('description', '<p class="primary-body-text featured-work__content-desc">', '</p>', true);
    ?>
    <div class="text-w-image__checkbox-wrapper">
      <div class="text-w-image__checkbox-image">
        <?php ja_get_attachment(get_sub_field('simple_list_image'), 'full', '', true); ?>
      </div>
      <div class="featured-work__checkboxes">
        <?php while (have_rows('simple_list')) : the_row(); ?>
          <div class="featured-work__checkboxes-checkbox">
            <div class="featured-work__checkboxes-checkbox-wrapper">
              <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.15781 8.04931C3.07218 8.04942 2.98739 8.03135 2.90829 7.99616C2.82919 7.96097 2.75734 7.90934 2.69689 7.84425L0.193574 5.15681C0.132474 5.09196 0.0839187 5.01479 0.0506987 4.92973C0.0174787 4.84466 0.00024983 4.75339 2.69695e-06 4.66115C-0.000244436 4.56892 0.0164951 4.47754 0.0492587 4.39227C0.0820224 4.30701 0.130163 4.22954 0.190914 4.16431C0.251665 4.09909 0.323826 4.0474 0.403248 4.01223C0.482671 3.97705 0.567788 3.95907 0.653704 3.95933C0.73962 3.95959 0.82464 3.97809 0.903876 4.01375C0.983112 4.0494 1.055 4.10153 1.11541 4.16712L3.15781 6.35973L8.01677 1.14339C8.1391 1.0126 8.30478 0.939255 8.47743 0.939454C8.65008 0.939652 8.81561 1.01337 8.93769 1.14444C9.05976 1.27551 9.12842 1.45322 9.12859 1.63857C9.12877 1.82392 9.06044 2.00178 8.9386 2.1331L3.61873 7.8443C3.55827 7.90939 3.48643 7.961 3.40733 7.99619C3.32822 8.03137 3.24343 8.04942 3.15781 8.04931Z" fill="white"></path>
              </svg>
            </div>
            <?php ja_the_field('list_text', '<p class="secondary-body-text">', '</p>', true ); ?>
            <!-- <p class="secondary-body-text">Conversion focused</p> -->
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <div class="text-w-image__image">
    <?php ja_get_attachment(get_sub_field('image'), 'full', '', true); ?>

    <div class="text-w-image__image-content">
      <div class="text-w-image__image-content-title">
        <a href="#">
          <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.2806 8.73171L10.8825 11.0087L12.9674 9.93398L15.0522 11.0087L14.6542 8.73171L16.341 7.12049L14.0103 6.78805L12.9637 4.71777L11.9209 6.78805L9.59375 7.12049L11.2806 8.73171Z" fill="white" />
            <path d="M21.2536 1.97828C21.2566 1.6516 21.2566 1.33039 21.2536 1.01464V0H4.61942V1.01464C4.61942 1.33039 4.61942 1.6516 4.61942 1.97828H0.00342786V2.99292C-0.0567399 5.39691 0.6766 7.75377 2.0901 9.69922C3.2354 11.1502 4.58856 12.4242 6.10586 13.48C6.84431 14.0046 7.53799 14.5895 8.17978 15.2288C9.21971 16.5973 10.4865 17.7774 11.925 18.7181V20.3931H11.4177C10.2076 20.3943 9.04736 20.8753 8.19143 21.7307C7.3355 22.5862 6.85374 23.7461 6.85181 24.9562V25.9709H19.0257V24.9562C19.0245 23.7456 18.5431 22.585 17.6871 21.729C16.831 20.873 15.6704 20.3915 14.4598 20.3903H13.9525V18.7181C15.3885 17.7791 16.6533 16.6014 17.6923 15.236C18.3454 14.5883 19.0523 13.9972 19.8054 13.4691C21.337 12.4174 22.7054 11.1459 23.8667 9.69558C25.2952 7.75773 26.0383 5.39965 25.9788 2.99292V1.97828H21.2536ZM2.07643 4.00757H4.68044C4.75366 6.09651 5.08279 8.16859 5.66047 10.1774C5.71057 10.3423 5.7634 10.5062 5.81713 10.6683C4.75966 9.88418 3.87979 8.88546 3.23515 7.7376C2.59051 6.58975 2.19565 5.31865 2.07643 4.00757ZM14.4635 22.4214C14.9568 22.422 15.4394 22.5662 15.8522 22.8365C16.2649 23.1068 16.5901 23.4914 16.7878 23.9434H9.09241C9.29019 23.4914 9.61532 23.1068 10.0281 22.8365C10.4409 22.5662 10.9234 22.422 11.4168 22.4214H14.4635ZM16.1849 13.8835C15.9932 14.0909 15.8164 14.3116 15.6557 14.5438C14.8661 15.4706 13.951 16.2827 12.9369 16.9566C11.9234 16.2837 11.0087 15.4729 10.2191 14.5475C10.0561 14.3121 9.87685 14.0884 9.68261 13.878C7.15238 10.4279 6.70791 6.10243 6.65235 2.02929H19.2215C19.1696 6.11063 18.7242 10.4352 16.1822 13.8835H16.1849ZM20.0413 10.7148C20.1014 10.5372 20.1588 10.3587 20.2143 10.1774C20.793 8.16871 21.123 6.09663 21.1971 4.00757H23.9022C23.7738 5.33612 23.3629 6.62188 22.697 7.77865C22.0311 8.93543 21.1256 9.93651 20.0413 10.7148Z" fill="white" />
          </svg>
        </a>
        <h2 class="h2">10+</h2>
      </div>
      <p class="h3">Years Of Experiences</p>
    </div>
  </div>
</section>

<?php else :?>

<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>quality">
  <div class="quality__image">
  <?php ja_get_attachment(get_sub_field('image'), 'full', '', true); ?>
  </div>
  <div class="quality__content">
    <?php
      ja_the_field('pre_title', '<h4 class="h4">', '</h4>', true);
      ja_the_field('title', ' <h2 class="h2">', '</h2>', true);
      ja_the_field('description', ' <p class="primary-body-text quality__content-desc">', '</p>', true);
    ?>

    <?php while ( have_rows('icons_list') ) : the_row();?>
      <div class="quality__content-tab">
        <div class="quality__content-tab-image">
          <?php ja_get_attachment(get_sub_field('icon'), 'full', '', true ); ?>
        </div>
        <div>
          <?php
            ja_the_field('title', '<h3 class="h3">', '</h3>', true);
            ja_the_field('description', '<p class="primary-body-text">', '</hp>', true);
          ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php endif; ?>