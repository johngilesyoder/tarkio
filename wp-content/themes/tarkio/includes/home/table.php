<?php
  // vars
  $one_year = get_field('1_year_performance_data');
  $five_year = get_field('5_year_performance_data');
  $since_inception = get_field('since_inception_performance_data');
?>

<div class="table-responsive">
  <table class="table table-dark table-bordered table-performance">
    <caption>
      <span>* Return does not include reinvestment of dividends</span>
      <span>** Annualized Return</span>
    </caption>
    <thead>
      <tr>
        <th scope="col">1 Year Performance <small><?php echo $one_year['1_year_performance_date']; ?></small></th>
        <th scope="col">Total Return %</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tarkio Fund</td>
        <td><?php echo $one_year['1_year_tarkio_return_percentage']; ?>%</td>
      </tr>
      <tr>
        <td>S&P 500*</td>
        <td><?php echo $one_year['1_year_s&p_percentage']; ?>%</td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th scope="col">5 Year Performance <small><?php echo $five_year['5_year_performance_date']; ?></small></th>
        <th scope="col">Total Return %</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tarkio Fund</td>
        <td><?php echo $five_year['5_year_tarkio_return_percentage']; ?>%</td>
      </tr>
      <tr>
        <td>S&P 500*</td>
        <td><?php echo $five_year['5_year_s&p_percentage']; ?>%</td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th scope="col">Since Inception <small><?php echo $since_inception['since_inception_performance_date']; ?></small></th>
        <th scope="col">Total Return %</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tarkio Fund</td>
        <td><?php echo $since_inception['since_inception_tarkio_return_percentage']; ?>%</td>
      </tr>
      <tr>
        <td>S&P 500*</td>
        <td><?php echo $since_inception['since_inception_s&p_percentage']; ?>%</td>
      </tr>
    </tbody>
  </table>
</div>
