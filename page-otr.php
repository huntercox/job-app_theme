<?php get_template_part('inc/header'); ?>

  <main id="main" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->
m
      </article>
    <?php endwhile; ?>
    <?php endif; ?>

<!-- OTR Benefits -->
    <?php if ( have_rows('otr_benefits') ) : ?>
      <div class="why-otr">
        <?php if ( get_field('otr_heading') ) : ?>
          <h3><?php echo get_field('otr_heading'); ?></h3>
        <?php endif; ?>

        <?php while( have_rows('otr_benefits') ) : the_row();
        // Title
          if ( get_sub_field('benefit_title') ) {
            $title = get_sub_field('benefit_title');
          }
        // Description
          if ( get_sub_field('benefit_description') ) {
            $description = get_sub_field('benefit_description');
          }
        // Icon
          if ( get_sub_field('benefit_icon') ) {
            $icon_id    = get_sub_field('benefit_icon');
            $icon_array = wp_get_attachment_image_src( $icon_id, 'thumbnail');
            $icon_url   = $icon_array[0];
          }
        ?>
          <div class="otr__benefit">
            <h4><?php echo $title; ?></h4>
            <div class="icon">
              <img src="<?php echo $icon_url; ?>" />
            </div>
            <p><?php echo $description; ?></p>
          </div><!-- /.otr__benefit -->

        <?php endwhile; ?>
      </div><!-- /.why-otr -->
    <?php endif; //otr_benefits ?>

<!-- Types of OTR Jobs -->
    <div class="otr__types">

      <div class="otr__tabs">
        <button class="btn active" data-id="solo">Solo</button>
        <button class="btn" data-id="team">Team</button>
      </div><!-- /.otr__tabs -->

      <div class="otr__content">

        <div class="otr__solo is-active" id="solo">
          <?php if ( get_field('solo_content') ) : ?>
            <?php echo get_field('solo_content'); ?>
          <?php endif; ?>
        </div><!-- /.solo -->

        <div class="otr__team" id="team">
          <?php if ( get_field('team_content') ) : ?>
            <?php echo get_field('team_content'); ?>
          <?php endif; ?>
        </div><!-- /.team -->

      </div><!-- /.otr__content -->

    </div><!-- /.otr__types -->

  </main>

<?php get_template_part('inc/footer'); ?>