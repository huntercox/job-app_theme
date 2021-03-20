<footer class="footer">
  <?php
    if (is_page(55) || is_page(9) || is_page(14)) {
      // OTR = 55, About = 9, Home = 14
      get_template_part('inc/callout');
    }

  ?>
  <div class="footer__inner">
    <div class="contact-info">

    <!-- Facebook -->
      <?php if ( get_field('facebook_page', 'option') ) :
          $facebook = get_field('facebook_page', 'option'); ?>
            <a class="contact-info__facebook" href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>
      <?php endif; ?>

    <!-- Phone -->
      <?php if ( get_field('phone_number', 'option') ) :
          $phone = get_field('phone_number', 'option'); ?>
            <p class="contact-info__phone"><i class="fas fa-phone-square-alt"></i> <?php echo $phone; ?></p>
      <?php endif; ?>

    <!-- Email -->
      <?php if ( get_field('email_address', 'option') ) :
          $email = get_field('email_address', 'option'); ?>
          <p class="contact-info__email">
              <i class="fas fa-paper-plane"></i>
            <a class="contact-info__email" href="mailto:<?php echo esc_url($email); ?>"><?php echo $email; ?></a>
          </p>
      <?php endif; ?>
    </div><!-- /.contact-info -->

    <div class="footer__bottom">
      <p><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
    </div><!-- /.bottom-footer -->

  </div><!-- /.inner-footer -->
</footer>

</div>
<!-- END: Grid-Layout -->

</body>
</html>