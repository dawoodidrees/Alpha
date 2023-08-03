<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alpha
 */

?>
<footer class="footer page-width">
  <div class="footer__logo">
    <div class="footer__logo-image">
      <img loading="lazy" src="<?php asset_path("/images/logo.png", true ); ?>" alt="Footer Logo" />
    </div>
    <?php
      ja_the_field( 'footer_group_footer_col_1_content', '<p class="secondary-body-text footer__logo-desc">', '</p>', false, true );
      ja_the_link( get_field( 'footer_group_footer_col_1_button', 'options'), 'btn btn--primary footer__logo-link light-pulse');
    ?>
    <!-- <a href="#" class="btn btn--primary footer__logo-link light-pulse">Contact</a> -->
  </div>

  <div class="footer__links">
   <?php ja_the_field( 'footer_group_footer_col_2_title', ' <h3 class="h3">', '</h3>', false, true ); ?>
  <?php
    if (has_nav_menu( 'footer-menu' ) ){
      wp_nav_menu(
        array(
          'theme_location' => 'footer-menu',
          'menu_id'        => 'footer-menu',
          'menu_class'     => '',
          'container'      => false
        )
      );
    }
  ?>
  </div>

  <div class="footer__links">
    <?php ja_the_field( 'footer_group_footer_col_3_title', ' <h3 class="h3">', '</h3>', false, true ); ?>
    <ul>
      <?php if( get_field( 'address', 'options' ) ) : ?>
        <li>
          <p class="secondary-body-text"><?php echo get_field( 'address', 'options' ); ?></p>
        </li>
      <?php endif; ?>

      <?php if( get_field( 'phone', 'options' ) ) : ?>
        <li>
          <a class="secondary-body-text" href="tel:<?php echo get_field( 'phone', 'options' ); ?>">
            <?php get_template_part( 'template-parts/svg/footer/icon', 'phone'); ?>
            <?php echo get_field( 'phone', 'options' ); ?>
          </a>
        </li>
      <?php endif; ?>

      <?php if( get_field( 'email', 'options' ) ) : ?>
        <li>
          <a class="secondary-body-text" href="mailto:<?php echo get_field( 'email', 'options' ); ?>">
            <?php get_template_part( 'template-parts/svg/footer/icon', 'email'); ?>
            <?php echo get_field( 'email', 'options' ); ?>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>

  <div class="footer__links">
    <?php ja_the_field( 'footer_group_footer_col_4_title', ' <h3 class="h3">', '</h3>', false, true ); ?>
    <form class="email-signup__content-input" action="#">
      <input type="email" name="email" id="email" placeholder="Enter Your Email" />
      <button class="btn btn--primary">
        <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.2812 5.25781L10.7812 8.75781C10.4531 9.11328 9.87891 9.11328 9.55078 8.75781C9.19531 8.42969 9.19531 7.85547 9.55078 7.52734L11.5469 5.50391H1.42969C0.9375 5.50391 0.554688 5.12109 0.554688 4.62891C0.554688 4.10938 0.9375 3.75391 1.42969 3.75391H11.5469L9.55078 1.75781C9.19531 1.42969 9.19531 0.855469 9.55078 0.527344C9.87891 0.171875 10.4531 0.171875 10.7812 0.527344L14.2812 4.02734C14.6367 4.35547 14.6367 4.92969 14.2812 5.25781Z" fill="white" />
        </svg>
      </button>
    </form>

    <?php if( have_rows( 'social_profiles', 'options' ) ) :?>
      <div class="footer__links-social">
        <?php while( have_rows( 'social_profiles', 'options' ) ) : the_row(); ?>
          <a href="<?php echo get_sub_field( 'url' ); ?>">
            <?php get_template_part( 'template-parts/svg/header/icon', get_sub_field('network') ); ?>
          </a>
        <?php endwhile;?>
      </div>
    <?php endif;?>
  </div>
</footer>
<div class="subfooter page-width">&copy; <?php _e( 'Alpha Omega Digital ' . date("Y") . ' | All Rights Reserved', 'alpha' ); ?></div>




<?php wp_footer(); ?>

</body>

</html>