<div class="chart-header">
  <h3 class="chart-title">Tarkio Fund Hypothetical Growth of $10,000 (1 Year Period)</h3>
  <div id="legendOne" class="legend"></div>
</div>

<div class="chart-wrapper">
  <canvas id="chartOne" width="400" height="400"></canvas>
  <script>
    var ctx = document.getElementById("chartOne").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Oct '17", "Nov '17", "Dec '17", "Jan '18", "Feb '18", "Mar '18", "Apr '18", "May '18", "Jun '18", "Jul '18", "Aug '18", "Sep '18"],
        datasets: [
          {
            label: 'Tarkio',
            data: [10000, 10100, 10250, 10500, 10600, 9550, 9250, 9260, 9800, 9900, 10150, 10900],
            backgroundColor: 'rgba(196,141,59, 0.2)',
            borderColor: 'rgba(196,141,59,1)',
            borderWidth: 3
          },
          {
            label: 'S&P 500',
            data: [10000, 10000, 10400, 10450, 10500, 10200, 10000, 10500, 10550, 10500, 11000, 11250],
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
    document.getElementById('legendOne').innerHTML = myChart.generateLegend();
  </script>
</div>
