<section class="home-fund-overview section">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <div class="fund-overview-card">
          <div class="text-wrapper">
            <h2 class="section-title">Fund Overview</h2>
            <p><?php the_field('overview_summary'); ?></p>
          </div>
          <div class="metrics">
            <div class="metric">
              <div>
                <span class="metric-value">TARKX</span>
                <span class="metric-label">NASDAQ Symbol</span>
              </div>
            </div>
            <div class="metric">
              <div>
                <span class="metric-value">
                  <span class="value-group">
                    <span class="value-main"><?php the_field('annual_fee_percentage'); ?>%</span>
                    <small>
                      of assets under<br>
                      management
                    </small>
                  </span>
                </span>
                <span class="metric-label">Annual Fee</span>
              </div>
            </div>
            <div class="metric">
              <div>
                <span class="metric-value">
                  <span class="value-group">
                    <span class="value-main">$<?php the_field('non-ira_investment'); ?></span>
                    <small>non-IRA</small>
                  </span>
                  <span class="value-group">
                    <span class="value-main">$<?php the_field('ira_investment'); ?></span>
                    <small>IRA</small>
                  </span>
                </span>
                <span class="metric-label">Minimum initial investment</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
