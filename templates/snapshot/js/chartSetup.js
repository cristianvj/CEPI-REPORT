//Grafica 1
var tons_index = 0;
Highcharts.chart('grafica1', {
    chart: {
        type: 'bar'
    },
    colors: [
        '#005eb8','#fff','#fff','#fff'
    ],
    title: {
        text: ''
    },
    xAxis: {
        categories: ['PACKAGING PAPERS<br>AND BOARDS', 'CASE MATERIALS', 'OTHER PACKAGING & PAPER','WRAPPINGS']
    },
    yAxis: {
        min: 0,
        max: 100,
        title: {
          text: null,
        },
        labels: {
          enabled: false,
        },
        stackLabels: {
            enabled: true,
            style: {
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            },
            formatter: function () {
                var stack_label = this.axis.series[tons_index].options.tons+ '  Million tones';
                tons_index++;
                return stack_label;
            }
        }
    },
    legend: {
      enabled: false
    },
    tooltip: {
        enabled: false
    },
    plotOptions: {
        bar: {
            stacking: 'normal',
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                formatter: function () {
                  if (this.y > 0) {
                    return this.y+ ' %';
                  }
                }
            }
        }
    },
    series: [{
        name: 'a',
        data: [49],
        tons : 120
    }, {
        name: 'b',
        data: [0, 29.9],
        tons : 68,
        borderWidth: 2,
        borderColor: '#005eb8'
    }, {
        name: 'c',
        data: [0, 0, 14.4],
        tons : 9.2,
        borderWidth: 2,
        borderColor: '#005eb8'
    }, {
        name: 'd',
        data: [0, 0, 0,4.7],
        tons : 3,
        borderWidth: 2,
        borderColor: '#005eb8'
    }]
});


//Grafica 2
Highcharts.chart('grafica2', {
  chart: {
    type: 'column',
    inverted: true,
    plotBackgroundColor: null,
    plotBorderWidth: 0,
    plotShadow: false
  },
  title: {
    text: ' '
  },
  xAxis: {
    type: 'category',
    labels: {
      useHTML: true
    }
  },
  yAxis: {
    min: 0,
    max: 100,
    title: {
      text: null,
    },
    labels: {
      enabled: false,
    }
  },
  legend: {
    enabled: false
  },
  tooltip: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '({point.y:.1f} Million tones)%'
      }
    }
  },
  responsive: {
    rules: [{
      condition: {
        maxWidth: 500
      },
      chartOptions: {
        chart: {
          inverted: false
        },
        legend: {
          align: 'center',
          verticalAlign: 'bottom',
          layout: 'horizontal'
        }
      }
    }]
  },
  series: [{
    name: 'Production',
    colorByPoint: true,
    data: [{
        name: 'NEWSPRINT, PRINTING<br>AND WRITING PAPER',
        y: 38.8,
        color: '#8cc640'
    }, {
        name: 'COATED PAPER',
        y: 15.2,
        color: '#fff',
        borderWidth : 2,
        borderColor : '#8cc640'
    }, {
        name: 'UNCOATED PAPER',
        y: 15.8,
        color: '#fff',
        borderWidth : 2,
        borderColor : '#8cc640'
    },{
        name: 'NEWSPRINT',
        y: 7.8,
        color: '#fff',
        borderWidth : 2,
        borderColor : '#8cc640'
    }]
}]
});




//Grafica 3
$(function () {
    Highcharts.chart('grafica3', {
        chart: {
            type: 'bar',
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            height: 120,
            plotShadow: false
        },
        title: {
            text: ' '
        },
        xAxis: {
            type: 'category',
            labels: {
              useHTML: true
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: null,
            },
            labels: {
                    enabled: false,
            }
        },
        legend: {
            enabled: false
        },
        tooltip: { 
            enabled: false 
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}% (Million tonnes)'
                }
            }
        },
        responsive: {
            rules: [{
              condition: {
                maxWidth: 500
              },
              chartOptions: {
                chart: {
                  inverted: false
                },
                legend: {
                  align: 'center',
                  verticalAlign: 'bottom',
                  layout: 'horizontal'
                }
              }
            }]
        },
        series: [{
            name: 'Production',
            colorByPoint: true,
            data: [{
                name: 'HYGIENE PAPER',
                y: 7.8,
                color: '#26b6cc',
            }]
        }]
    });
});

//Grafica 4

$(function () {
    Highcharts.chart('grafica4', {
        chart: {
            type: 'bar',
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            height: 120,
            plotShadow: false
        },
        title: {
            text: ' '
        },
        xAxis: {
            type: 'category',
            labels: {
              useHTML: true
            }
        },
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: null,
            },
            labels: {
                    enabled: false,
            }
        },
        legend: {
            enabled: false
        },
        tooltip: { 
            enabled: false 
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}% (Million tonnes)'
                }
            }
        },
        responsive: {
            rules: [{
              condition: {
                maxWidth: 500
              },
              chartOptions: {
                chart: {
                  inverted: false
                },
                legend: {
                  align: 'center',
                  verticalAlign: 'bottom',
                  layout: 'horizontal'
                }
              }
            }]
        },
        series: [{
            name: 'Production',
            colorByPoint: true,
            data: [{
                name: 'OTHER PAPER<br>AND BOARD',
                y: 4.4,
                color: '#51a332',
            }]
        }]
    });
});
