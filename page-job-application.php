<?php
// ACF Form heading
acf_form_head();

get_template_part('inc/header'); ?>

  <main id="main" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class=="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->

      </article>
    <?php endwhile; ?>
    <?php endif; ?>

    <h3>ACF Form</h3>
    <?php
      acf_form(array(
        'post_id'		=> 'new_post',
        'post_title'	=> false,
        'post_content'	=> false,
        'field_groups' => array(
          46
        ),
        'new_post'		=> array(
          'post_type'		=> 'job',
          'post_status'	=> 'publish'
        )
      ));
    ?>
  </main>

  <?php get_template_part('inc/footer'); ?>