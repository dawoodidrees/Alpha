<?php
  $classes = 'layout-' . get_query_var('layout_index') . ' ';
  if( get_sub_field( 'section_classes' ) ){
    $classes .= get_sub_field( 'section_classes' ) . ' ';
  }
?>
<section <?php ja_section_id(); ?> class="<?php echo $classes; ?>hero page-width">


  <?php if ( get_sub_field( 'media_type') == 'image') : ?>
  <span class="bg-image"
    style="background-image: url(<?php echo ja_get_attachment( get_sub_field('background_image'), 'full' ); ?>)">
    <span class="overlay"></span>
  </span>

  <?php else : ?>
  <video class="bg-video" width="100%" height="100%" autoplay muted>>
    <source src="<?php echo get_sub_field('video'); ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <?php endif; ?>
  <div class="hero__content">
    <?php
      ja_the_field( 'pre_title', '<h4 class="secondary-body-text hero__content-sub-title">', '</h4>', true );
      ja_the_field( 'title', '<h1 class="h1 hero__content-title">', '</h1>', true );

      $link = get_sub_field('button' );
    ?>
    <?php if ( $link ) : ?>
    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
      class="btn btn--primary hero__content-btn light-pulse">
      <?php echo $link['title']; ?>
      <span>
        <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M14.3984 7.14453L9.39844 12.1445C9.21094 12.332 8.96094 12.4258 8.71094 12.4258C8.42969 12.4258 8.17969 12.332 7.99219 12.1445C7.58594 11.7695 7.58594 11.1133 7.99219 10.7383L11.2734 7.42578H1.71094C1.14844 7.42578 0.710938 6.98828 0.710938 6.42578C0.710938 5.89453 1.14844 5.42578 1.71094 5.42578H11.2734L7.99219 2.14453C7.58594 1.76953 7.58594 1.11328 7.99219 0.738281C8.36719 0.332031 9.02344 0.332031 9.39844 0.738281L14.3984 5.73828C14.8047 6.11328 14.8047 6.76953 14.3984 7.14453Z"
            fill="white" />
        </svg>
      </span>
    </a>
    <?php endif; ?>
  </div>
</section>