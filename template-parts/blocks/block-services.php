<section class="services page-width">
  <div class="show_on_mobile">
    <img src="<?php asset_path('/images/hamburger.svg', true ); ?>" alt="hamburger" />
  </div>

  <div class="services__tabs-wrapper">
    <?php ja_the_field( 'title', '<h3 class="h3 services__title">', '</h3>', true ); ?>

    <div class="services__tabs">
      <?php while ( have_rows( 'tabs' ) ): the_row(); ?>
        <div class="services__tabs-tab <?php echo get_row_index()==1 ? 'active-tab' : ''; ?>" data-tab="tab<?php echo get_row_index(); ?>">
          <?php echo get_sub_field( 'tab_title' );?>
          <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.59375 13C1.3125 13 1.0625 12.9062 0.875 12.7188C0.46875 12.3438 0.46875 11.6875 0.875 11.3125L5.15625 7L0.875 2.71875C0.46875 2.34375 0.46875 1.6875 0.875 1.3125C1.25 0.90625 1.90625 0.90625 2.28125 1.3125L7.28125 6.3125C7.6875 6.6875 7.6875 7.34375 7.28125 7.71875L2.28125 12.7188C2.09375 12.9062 1.84375 13 1.59375 13Z" fill="#67687A" />
          </svg>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="services__contact">
      <?php ja_the_field( 'contact_title', '<h3 class="h3 services__contact-title">', '</h3>', true); ?>
      <?php  while( have_rows( 'contact_detail' )) : the_row(); ?>
      <div class="services__contact-detail">
        <?php get_template_part( 'template-parts/svg/icon', get_sub_field('type') ); ?>
        <div>
          <?php ja_the_field( 'title', '<h3 class="h3">', '</h3>', true ); ?>
          <div class="secondary-body-text"><?php echo get_sub_field('detail'); ?></div>
        </div>
      </div>
    <?php endwhile; ?>
      <!-- <div class="services__contact-detail">
        <div>
          <svg width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.48438 22.2344C5.25 19.4414 0.265625 12.7812 0.265625 9C0.265625 4.44531 3.91797 0.75 8.51562 0.75C13.0703 0.75 16.7656 4.44531 16.7656 9C16.7656 12.7812 11.7383 19.4414 9.50391 22.2344C8.98828 22.8789 8 22.8789 7.48438 22.2344ZM8.51562 11.75C10.0195 11.75 11.2656 10.5469 11.2656 9C11.2656 7.49609 10.0195 6.25 8.51562 6.25C6.96875 6.25 5.76562 7.49609 5.76562 9C5.76562 10.5469 6.96875 11.75 8.51562 11.75Z" fill="#F35162" />
          </svg>
        </div>
        <div>
          <h3 class="h3">Location</h3>
          <p class="secondary-body-text">Dhaka 102, utl 1216, road 45 house of street</p>
        </div>
      </div>

      <div class="services__contact-detail">
        <div>
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.2227 17.3789L21.1914 21.7188C21.0625 22.3633 20.5469 22.793 19.9023 22.793C9.07422 22.75 0.265625 13.9414 0.265625 3.11328C0.265625 2.46875 0.652344 1.95312 1.29688 1.82422L5.63672 0.792969C6.23828 0.664062 6.88281 1.00781 7.14062 1.56641L9.16016 6.25C9.375 6.80859 9.24609 7.45312 8.77344 7.79688L6.45312 9.6875C7.91406 12.6523 10.3203 15.0586 13.3281 16.5195L15.2188 14.1992C15.5625 13.7695 16.207 13.5977 16.7656 13.8125L21.4492 15.832C22.0078 16.1328 22.3516 16.7773 22.2227 17.3789Z" fill="#F35162" />
          </svg>
        </div>
        <div>
          <h3 class="h3">Call Us</h3>
          <p class="secondary-body-text">0000 - 000 - 000 00</p>
          <p class="secondary-body-text">1234 - 000 - 000</p>
        </div>
      </div>

      <div class="services__contact-detail">
        <div>
          <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.2031 0.5C21.3203 0.5 22.2656 1.44531 22.2656 2.5625C22.2656 3.25 21.9219 3.85156 21.4062 4.23828L12.082 11.2422C11.5664 11.6289 10.9219 11.6289 10.4062 11.2422L1.08203 4.23828C0.566406 3.85156 0.265625 3.25 0.265625 2.5625C0.265625 1.44531 1.16797 0.5 2.32812 0.5H20.2031ZM9.58984 12.3594C10.5781 13.0898 11.9102 13.0898 12.8984 12.3594L22.2656 5.3125V14.25C22.2656 15.7969 21.0195 17 19.5156 17H3.01562C1.46875 17 0.265625 15.7969 0.265625 14.25V5.3125L9.58984 12.3594Z" fill="#F35162" />
          </svg>
        </div>
        <div>
          <h3 class="h3">Email</h3>
          <p class="secondary-body-text">debra.holt@example.com</p>
          <p class="secondary-body-text">felicia.reid@example.com</p>
        </div>
      </div> -->
    </div>

    <div class="services__brochure">
      <?php
        ja_the_field( 'brochure_title', '<h3 class="h3 services__brochure-title">', '</h3>', true );
        ja_the_field( 'brochure_description', '<p class="secondary-body-text">', '</p>', true );
      ?>
      <!-- <h3 class="h3 services__brochure-title">Brochures</h3> -->
      <!-- <p class="secondary-body-text">Aliquam eros justo, posuere loborti viverra laoreet matti viverra ullamcorper posuere lobortis viverra laoreet eros justo, posuere</p> -->
      <?php
        $link = get_sub_field('download_link');
        if ( $link ) :
      ?>
        <a class="services__brochure-link" href="<?php echo $link['url']; ?>" download>
          <?php echo $link['title']; ?>
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3533_37062)">
              <path d="M29.1613 40C29.0518 40.0001 28.9434 39.9786 28.8423 39.9367C28.7411 39.8949 28.6492 39.8335 28.5718 39.7561C28.4945 39.6786 28.4331 39.5867 28.3913 39.4856C28.3495 39.3844 28.328 39.276 28.3281 39.1666C28.328 39.0571 28.3495 38.9487 28.3913 38.8476C28.4331 38.7465 28.4945 38.6546 28.5719 38.5772C28.6493 38.4998 28.7412 38.4385 28.8423 38.3966C28.9434 38.3548 29.0518 38.3333 29.1613 38.3334C29.829 38.3334 30.4573 38.0725 30.9288 37.6007C31.4007 37.1292 31.6613 36.5009 31.6613 35.8334V4.16656C31.6613 3.25352 31.9539 2.38406 32.4938 1.66656H7.49469C6.82789 1.66656 6.19984 1.92656 5.72648 2.3993C5.25562 2.87172 4.99469 3.5 4.99469 4.16656V31.6666C4.99469 32.1273 4.62148 32.5 4.16125 32.5C3.70133 32.5 3.32812 32.1273 3.32812 31.6666V4.16656C3.32812 3.05508 3.76148 2.00836 4.54789 1.22008C5.33711 0.433359 6.38297 0 7.49469 0H35.8281C36.2889 0 36.6613 0.373203 36.6613 0.833438C36.6613 1.29336 36.2889 1.66656 35.8281 1.66656C35.1604 1.66656 34.533 1.92656 34.0596 2.3993C33.5888 2.87078 33.3281 3.49914 33.3281 4.16656V35.8334C33.3281 36.9458 32.8938 37.9926 32.1071 38.7793C31.3205 39.5657 30.2739 40 29.1613 40Z" fill="white" />
              <path d="M29.1666 40H4.16656C1.86922 40 0 38.1308 0 35.8334V35C0 34.5392 0.373203 34.1666 0.833438 34.1666H25.8334C26.2942 34.1666 26.6666 34.5392 26.6666 35V35.8334C26.6666 37.2116 27.7884 38.3334 29.1666 38.3334C29.276 38.3333 29.3844 38.3548 29.4856 38.3966C29.5867 38.4384 29.6786 38.4998 29.7561 38.5772C29.8335 38.6545 29.8949 38.7464 29.9367 38.8476C29.9786 38.9487 30.0001 39.0571 30 39.1666C30.0001 39.276 29.9786 39.3844 29.9367 39.4856C29.8949 39.5868 29.8335 39.6787 29.7561 39.7561C29.6787 39.8335 29.5868 39.8949 29.4856 39.9367C29.3844 39.9786 29.276 40.0001 29.1666 40ZM1.66656 35.8334C1.66656 37.2116 2.78844 38.3334 4.16656 38.3334H25.835C25.2921 37.6131 24.999 36.7354 25 35.8334H1.66656ZM39.1666 5.83344H35.8334C35.3727 5.83344 35 5.45992 35 5C35 4.54008 35.3727 4.16656 35.8334 4.16656H38.3334C38.3334 2.78844 37.2116 1.66656 35.8334 1.66656C35.3727 1.66656 35 1.29336 35 0.833438C35 0.373281 35.3727 0 35.8334 0C38.1308 0 40 1.86922 40 4.16656V5C40 5.45992 39.6273 5.83344 39.1666 5.83344ZM14.1666 12.5C12.3282 12.5 10.8334 11.0049 10.8334 9.16656V7.5C10.8334 5.66164 12.3282 4.16656 14.1666 4.16656C16.0049 4.16656 17.5 5.66164 17.5 7.5V9.16656C17.5 11.0049 16.0049 12.5 14.1666 12.5ZM14.1666 5.83344C13.2473 5.83344 12.5 6.58078 12.5 7.5V9.16656C12.5 10.0858 13.2473 10.8334 14.1666 10.8334C15.0858 10.8334 15.8334 10.0858 15.8334 9.16656V7.5C15.8334 6.58078 15.0858 5.83344 14.1666 5.83344ZM20 20.8334C19.5401 20.8334 19.1666 20.4599 19.1666 20V18.3334C19.1666 17.6657 18.9066 17.0383 18.4341 16.5659C17.9627 16.0934 17.3343 15.8334 16.6666 15.8334H11.6666C10.9991 15.8334 10.3717 16.0934 9.8993 16.5659C9.42664 17.0383 9.16656 17.6657 9.16656 18.3334V19.1666H16.6666C17.1267 19.1666 17.5 19.5401 17.5 20C17.5 20.4599 17.1268 20.8334 16.6666 20.8334H8.33344C7.87328 20.8334 7.5 20.4599 7.5 20V18.3334C7.5 17.2217 7.93336 16.1749 8.72008 15.3876C9.50836 14.5999 10.5551 14.1666 11.6666 14.1666H16.6666C17.7802 14.1666 18.8257 14.6009 19.6134 15.3876C20.4001 16.1749 20.8334 17.2216 20.8334 18.3334V20C20.8334 20.4599 20.4599 20.8334 20 20.8334ZM7.5 30.8334H9.16656V32.5H7.5V30.8334ZM10.8334 25.8334H12.5V32.5H10.8334V25.8334ZM14.1666 27.5H15.8334V32.5H14.1666V27.5ZM17.5 24.1666H19.1666V32.5H17.5V24.1666ZM20.8334 29.1666H22.5V32.5H20.8334V29.1666ZM24.1666 25H25.8334V32.5H24.1666V25ZM27.5 23.3334H29.1666V32.5H27.5V23.3334ZM27.5 4.16656H29.1666V5.83344H27.5V4.16656ZM24.1666 4.16656H25.8334V5.83344H24.1666V4.16656ZM20.8334 4.16656H22.5V5.83344H20.8334V4.16656ZM20.8334 7.5H29.1666V9.16656H20.8334V7.5ZM20.8334 10.8334H25.8334V12.5H20.8334V10.8334Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_3533_37062">
                <rect width="40" height="40" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
      <?php endif; ?>
    </div>
  </div>

  <div class="services__content">
    <?php while ( have_rows( 'tabs' ) ): the_row(); ?>

      <div class="services__tab-content" data-tab="tab<?php echo get_row_index(); ?>">
      <?php while ( have_rows( 'tab_content' ) ): the_row(); ?>

        <?php if (get_row_layout() == 'tab_content_image') :?>
          <div class="services__tab-content-image">
            <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>
          </div>
        <?php elseif (get_row_layout() == 'tab_content_content') :
          echo get_sub_field('content');
        ?>

        <?php elseif (get_row_layout() == 'tab_content_two_column_content') :?>
          <div class="services__tab-content-list">
            <div class="services__tab-content-list__content">
              <?php echo get_sub_field( 'content' );?>
            </div>

            <div class="services__tab-content-list__image">
              <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>
            </div>
          </div>

        <?php elseif (get_row_layout() == 'tab_content_icon_box') :?>
        <div class="services__tab-content-featured">
          <?php while ( have_rows('icon_box') ) : the_row(); ?>
            <div class="services__tab-content-featured__detail">
              <div>
                <?php ja_get_attachment( get_sub_field('icon'), 'full', '', true ); ?>
              </div>
              <div>
                <?php
                  ja_the_field( 'title', '<h3 class="h3">', '</h3>', true );
                  ja_the_field( 'description', '<p class="secondary-body-text">', '</p>', true );
                ?>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <?php endif;?>
      <?php endwhile; ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>