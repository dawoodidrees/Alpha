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
    <?php
    ja_the_field( 'footer_group_footer_col_4_title', ' <h3 class="h3">', '</h3>', false, true );
      if ($form_id = get_field( 'footer_group_footer_col_4_form', 'options' )) {
          echo do_shortcode('[wpforms id="' . $form_id . '" title="false" description="false"]');
        }
    ?>

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