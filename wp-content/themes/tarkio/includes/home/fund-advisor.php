<section class="home-fund-advisor section">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <div class="text-wrapper">
          <span class="preheader">Fund Advisor</span>
          <h2 class="section-title"><?php the_field('managed_by_title'); ?></h2>
          <p class="section-summary"><?php the_field('managed_by_summary'); ?></p>
        </div>
        <div class="fund-advisor-card">
          <div class="fsc-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fsc-logo.png" alt="Front Street Capital Management Logo">
          </div>
          <p>Receive regular updates and publications from the Tarkio Fund (TARKX).</p>
          <?php gravity_form( 1, false, false, false, '', true ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
