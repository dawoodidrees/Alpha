<?php
$classes = 'layout-' . get_query_var('layout_index') . ' ';
if (get_sub_field('section_classes')) {
  $classes .= get_sub_field('section_classes') . ' ';
}
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>slideshow page-width">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php while ( have_rows( 'icons' ) ) : the_row();?>
        <div class="swiper-slide slideshow__slide">
          <?php ja_get_attachment( get_sub_field('icon'), 'full', '', true ); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>