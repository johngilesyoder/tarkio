<section class="home-section-performance section">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <div class="section-header">
          <h2 class="section-title">TARKX Performance</h2>

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="tab">
              <a class="active" id="one-year-tab" data-toggle="tab" href="#one-year" role="tab">1 Year</a>
            </li>
            <li class="tab">
              <a id="five-year-tab" data-toggle="tab" href="#five-year" role="tab">5 Year</a>
            </li>
            <li class="tab">
              <a id="inception-tab" data-toggle="tab" href="#inception" role="tab">Since Inception</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">

          <!-- Chart 1 -->
          <!-- =================================== -->
          <div class="tab-pane fade show active" id="one-year" role="tabpanel" aria-labelledby="home-tab">
            <?php get_template_part( 'includes/home/chart-1' ); ?>
          </div>

          <!-- Chart 2 -->
          <!-- =================================== -->
          <div class="tab-pane fade" id="five-year" role="tabpanel" aria-labelledby="profile-tab">
            <?php get_template_part( 'includes/home/chart-2' ); ?>
          </div>

          <!-- Chart 3 -->
          <!-- =================================== -->
          <div class="tab-pane fade" id="inception" role="tabpanel" aria-labelledby="contact-tab">
            <?php get_template_part( 'includes/home/chart-3' ); ?>
          </div>
        </div>

        <!-- Table -->
        <!-- =================================== -->
        <?php get_template_part( 'includes/home/table' ); ?>

      </div>
    </div>
  </div>
</section>
