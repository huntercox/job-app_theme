<?php get_template_part('inc/header'); ?>

  <main id="main" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->

        <section class="featured-careers">
          <h3>Current Careers:</h3>
          <?php
            $args = array(
              'posts_per_page' => -1,
              'post_type'   => 'career'
            );
            $posts = get_posts( $args );

            if ( $posts ) :
              echo '<ul class="careers-list">';

              foreach ($posts as $career) :
                setup_postdata( $career );
                ?>
                <li class="career">
                  <h4 class="career__title"><a href="<?php echo the_permalink($career); ?>"><?php echo get_the_title($career) ?></a></h4>
                  <div class="career__content">
                    <?php echo the_content(); ?>
                  </div>
                </li><!-- /.career -->
                <?php
                wp_reset_postdata();
              endforeach;

              echo '</ul><!-- /.careers-list -->';
            endif;
          ?>
        </section><!-- /.careers-list -->

      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <p>There is nothing on this page.</p>
    <?php endif; ?>
  </main>

  <?php get_template_part('inc/footer'); ?>