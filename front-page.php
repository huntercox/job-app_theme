<?php get_template_part('inc/header'); ?>

  <main id="main" role="main">
  <!-- Hero Image -->
    <?php
      if ( get_field('home_hero_image') ) :
        $attachment_id = get_field('home_hero_image');
        $size = "hero";
        $src  = wp_get_attachment_image_src( $attachment_id, $size );
        $url  = $src[0];
      ?>
        <div class="home__hero" style="background-image: url('<?php echo $url; ?>');">
          <div class="hero__overlay">
            <?php if ( get_field('home_hero_overlay_content') ) : ?>
              <div class="hero__overlay-content">
                <?php echo get_field('home_hero_overlay_content'); ?>
              </div><!-- /.hero__overlay-content -->
            <?php endif; ?>

            <?php
              if ( get_field('home_hero_callout_button') ) :

              $link = get_field('home_hero_callout_button');
              $url  = $link['url'];
              $text = $link['title'];
              echo '<a href="'.$url.'" class="hero__overlay-callout">'.$text.'</a>';
            ?>

            <?php endif; ?>

          </div><!-- /.hero__overlay -->
        </div><!-- /.home__hero -->
    <?php
      endif; ?>
  <!-- Intro section -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article">
        <div class="inner-content">
          <?php the_content(); ?>
        </div><!-- /.inner-content -->
      </article>
    <?php endwhile; endif; ?>

</main>

<?php get_template_part('inc/footer'); ?>