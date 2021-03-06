<?php
  $phone = get_field('advisor_phone_number', 'option');
  $phone_unformatted = preg_replace('/\D+/', '', $phone);
?>

      <footer class="site-footer" role="contentinfo">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="footer-column footer-message">
                <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/fsc-logo-white.png" alt="Front Street Capital Management, Inc.">
                <small><?php the_field('disclaimer', 'option'); ?></small>
                <div class="privacy">
                  Read our <a href="/privacy-policy/">Privacy Policy</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-column footer-office">
                <h4>Our Offices</h4>
                <address>
                  <?php the_field('advisor_address', 'option'); ?>
                </address>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-column footer-contact">
                <h4>Contact</h4>
                <a class="contact-link" href="tel:<?php echo $phone_unformatted; ?>"><?php echo $phone; ?></a><br>
                <a class="contact-link" href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-column footer-newsletter">
                <h4>Newsletter</h4>
                <?php the_field('mailing_list_form', 'option'); ?>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- Account Access -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/account-access'); ?>

		<?php wp_footer(); ?>

	</body>
</html>
