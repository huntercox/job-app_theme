<div class="callout">

  <?php if ( get_field('callout_heading', 'option') ) : ?>
    <h2><?php echo get_field('callout_heading', 'option'); ?></h2>
  <?php endif; ?>

  <?php if ( get_field('callout_text', 'option') ) : ?>
    <p><?php echo get_field('callout_text', 'option'); ?></p>
  <?php endif; ?>

  <?php
    if ( get_field('callout_link', 'option') ) :
      $link = get_field('callout_link', 'option');
      $link_url = $link['url'];
      $link_title = $link['title'];
  ?>
    <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
  <?php endif; ?>

</div><!-- /.callout -->