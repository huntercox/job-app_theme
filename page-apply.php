<?php
// ACF Form heading
// acf_form_head();

get_template_part('inc/header'); ?>

  <main id="main" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->

      </article>
    <?php endwhile; ?>
    <?php endif; ?>

    <div class="inner">
      <?php get_template_part('inc/form/form'); ?>
    </div><!-- /.inner -->

  </main>

  <?php get_template_part('inc/footer'); ?>