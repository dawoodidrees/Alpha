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

        <div class="navbar__logo navbar__logo-header">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img loading="lazy" src="<?php asset_path('/images/logo.png', true );?>" alt="alpha-logo" />
          </a>
        </div>


        <?php if( get_field( 'email', 'options' ) ) : ?>
        <div class="announcement-bar__contact-detail">
          <?php get_template_part( 'template-parts/svg/header/icon', 'email'); ?>
          <a
            href="mailto:<?php echo get_field( 'email', 'options' ); ?>"><?php echo get_field( 'email', 'options' ); ?></a>
        </div>
        <?php endif; ?>
        <?php if( get_field( 'phone', 'options' ) ) : ?>
        <div class="announcement-bar__contact-detail">
          <?php get_template_part( 'template-parts/svg/header/icon', 'phone'); ?>
          <a
            href="tel:<?php echo get_field( 'phone', 'options' ); ?>"><?php echo get_field( 'phone', 'options' ); ?>
          </a>
        </div>
        <?php endif; ?>
      </div>
      <div class="announement-bar__middle">
        <?php ja_the_link( get_field( 'text' , 'option'), 'middle-link'); ?>
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
        <!-- <a href="<?php echo esc_url(home_url('/')); ?>">
          <img loading="lazy" src="<?php asset_path('/images/logo.png', true );?>" alt="alpha-logo" />
        </a> -->
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

      <div class="navbar__hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon-hamburger" fill="none"
          viewBox="0 0 18 16">
          <path
            d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"
            fill="currentColor">
          </path>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon-close" fill="none"
          viewBox="0 0 18 17">
          <path
            d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
            fill="currentColor">
          </path>
        </svg>
      </div>

    </header>

    <script>
    const hamburger = document.querySelector('.navbar__hamburger');
    const navDrawer = document.querySelector('.navbar__links');
    const iconClose = document.querySelector('.icon-close');
    const iconHamburger = document.querySelector('.icon-hamburger');
    const bodyEl = document.body

    hamburger.addEventListener('click', () => {
      navDrawer.classList.toggle('navbar__links-active');
      const isActive = navDrawer.classList.contains('navbar__links-active');

      if (isActive) bodyEl.classList.add('disable-body')
      else bodyEl.classList.remove('disable-body')

      iconClose.style.display = isActive ? 'block' : 'none';
      iconHamburger.style.display = isActive ? 'none' : 'block';
    });
    </script>