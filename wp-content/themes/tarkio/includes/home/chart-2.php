<div class="chart-header">
  <h3 class="chart-title">Tarkio Fund Hypothetical Growth of $10,000 (5 Year Period)</h3>
  <div id="legendTwo" class="legend"></div>
</div>

<div class="chart-wrapper chart-2">
  <canvas id="chartTwo" width="400" height="400"></canvas>
  <script>
    var ctx = document.getElementById("chartTwo").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          <?php while( have_rows('five_year_growth') ): the_row(); ?>
            <?php $date = get_sub_field('date'); ?>
            "<?php echo $date; ?>",
          <?php endwhile; ?>
        ],
        datasets: [
          {
            label: 'Tarkio',
            data: [
              <?php while( have_rows('five_year_growth') ): the_row(); ?>
                <?php $tarkio_value = get_sub_field('tarkio_value'); ?>
                <?php echo $tarkio_value; ?>,
              <?php endwhile; ?>
            ],
            backgroundColor: 'rgba(196,141,59, 0.2)',
            borderColor: 'rgba(196,141,59,1)',
            borderWidth: 3
          },
          {
            label: 'S&P 500',
            data: [
              <?php while( have_rows('five_year_growth') ): the_row(); ?>
                <?php $sp_value = get_sub_field('s&p_value'); ?>
                <?php echo $sp_value; ?>,
              <?php endwhile; ?>
            ],
            backgroundColor: 'rgba(196,69,0, 0.2)',
            borderColor: 'rgba(196,69,0,1)',
            borderWidth: 3
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            gridLines: {
              color: "rgba(255,255,255,.15)",
              zeroLineColor: "rgba(255,255,255,1)",
              zeroLineWidth: 2,
            },
            ticks: {
              //suggestedMin:7000,
              //suggestedMax: 15000,
              stepSize: 1000,
              fontColor: 'rgba(255,255,255,.7)',
              // Include a dollar sign in the ticks
              callback: function(value, index, values) {
                return '$' + value;
              }
            }
          }],
          xAxes: [{
            gridLines: {
              color: "rgba(255,255,255,.03)",
              zeroLineColor: "rgba(255,255,255,1)",
              zeroLineWidth: 10,
            },
            ticks: {
              fontColor: 'rgba(255,255,255,.7)'
            }
          }],
        },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          for (var i = 0; i < chart.data.datasets.length; i++) {
            text.push('<li><span style="background-color:' +
              chart.data.datasets[i].borderColor +
              '"></span>');
            if (chart.data.datasets[i].label) {
              text.push(chart.data.datasets[i].label);
            }
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join('');
        },
        defaultFontFamily: Chart.defaults.global.defaultFontFamily = "'BentonSans'"
      }
    });
    document.getElementById('legendTwo').innerHTML = myChart.generateLegend();
  </script>
</div>
