<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if (get_sub_field('section_classes')) {
    $classes .= get_sub_field('section_classes') . ' ';
  }
?>

<section class="team page-width">
  <div class="team__title-wrapper">
    <?php
      ja_the_field('pre_title', '<h4 class="h4 team__sub-title">', '</h4>', true);
      ja_the_field('title', '<h2 class="h2 team__title">', '</h2>', true);
    ?>
  </div>

  <div class="team__cards">
    <?php while( have_rows( 'team_members' ) ) : the_row(); ?>
      <div class="team__cards-card">
        <div class="team__cards-card__image">
        <?php ja_get_attachment( get_sub_field('image'), 'full', '', true ); ?>
          <div class="team__cards-card__image-social">
          <?php while( have_rows( 'social_networks' ) ) : the_row(); ?>
            <a href="<?php echo get_sub_field( 'social_url' ); ?>">
              <?php get_template_part( 'template-parts/svg/team/icon', get_sub_field( 'social_network') ); ?>
            </a>
          <?php endwhile; ?>
          </div>
        </div>
        <?php
          ja_the_field('byline', '<p class="secondary-body-text">', '</P>', true);
          ja_the_field('name', '<h3 class="h3">', '</h3>', true);
        ?>
      </div>
    <?php endwhile; ?>

  </div>
</section>