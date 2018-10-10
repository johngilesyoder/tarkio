<div class="chart-header">
  <h3 class="chart-title">Tarkio Fund Hypothetical Growth of $10,000 (5 Year Period)</h3>
  <div id="legendTwo" class="legend"></div>
</div>

<div class="chart-wrapper">
  <canvas id="chartTwo" width="400" height="400"></canvas>
  <script>
    var ctx = document.getElementById("chartTwo").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Oct '13", "Mar '14", "Aug '14", "Jan '15", "Jun '15", "Nov '15", "Apr '16", "Sep '16", "Feb '17", "Jul '17", "Dec '17", "May '18", "Oct '18"],
        datasets: [
          {
            label: 'Tarkio',
            data: [10000, 10100, 10250, 10500, 10600, 10500, 10400, 10200, 10250, 10500, 10750, 11200, 11500],
            backgroundColor: 'rgba(196,141,59, 0.2)',
            borderColor: 'rgba(196,141,59,1)',
            borderWidth: 3
          },
          {
            label: 'S&P 500',
            data: [10000, 10000, 10400, 10450, 10500, 10200, 10000, 10500, 10550, 10500, 11000, 11250, 11250],
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
              stepSize: 500,
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
