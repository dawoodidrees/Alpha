<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'alpha'); ?></a>

    <div class="announcement-bar">
      <div class="announcement-bar__contact">
        <?php if( get_field( 'email', 'options' ) ) : ?>
          <div class="announcement-bar__contact-detail">
            <?php get_template_part( 'template-parts/svg/header/icon', 'email'); ?>
            <a href="mailto:<?php echo get_field( 'email', 'options' ); ?>"><?php echo get_field( 'email', 'options' ); ?></a>
          </div>
        <?php endif; ?>
        <?php if( get_field( 'phone', 'options' ) ) : ?>
          <div class="announcement-bar__contact-detail">
            <?php get_template_part( 'template-parts/svg/header/icon', 'phone'); ?>
          <a href="tel:<?php echo get_field( 'phone', 'options' ); ?>"><?php echo get_field( 'phone', 'options' ); ?></a>
          </div>
        <?php endif; ?>
      </div>


      <?php if( have_rows( 'social_profiles', 'options' ) ) :?>
        <div class="announcement-bar__socials">
          <?php while( have_rows( 'social_profiles', 'options' ) ) : the_row(); ?>
            <a href="<?php echo get_sub_field( 'url' ); ?>">
              <?php get_template_part( 'template-parts/svg/header/icon', get_sub_field('network') ); ?>
            </a>
          <?php endwhile;?>
        </div>
      <?php endif; ?>
    </div>

    <header class="navbar page-width">
      <div class="navbar__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img loading="lazy" src="<?php asset_path('/images/logo.png', true );?>" alt="alpha-logo" />
        </a>
      </div>

      <?php
        if (has_nav_menu( 'header-menu' ) ){
          wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'menu_id'        => 'primary-menu',
              'menu_class'     => 'navbar__links',
              'container'      => false
            )
          );
        }
      ?>

      <!-- <div>
        <img loading="lazy" src="images/searchbar.png" alt="Logo" />
      </div> -->
    </header>

