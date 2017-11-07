//Grafica 5

Highcharts.chart('grafica5', {
    chart:{
      events: {
        load: function () {
          var label = this.renderer.label("Source: RISI")
          .css({
              width: '600px',
              fontSize: '1em',
              color: '#868589'
          })
          .attr({
              'stroke': 'silver',
              'stroke-width': 0,
              'r': 2,
              'padding': 10
          })
          .add();                
            label.align(Highcharts.extend(label.getBBox(), {
                align: 'center',
                x: 20, // offset
                verticalAlign: 'bottom',
                y: 25 // offset
            }), null, 'spacingBox');
          }
        },
        marginBottom: 90
      },
      title: {
        text: 'Decoupled Growth Levels and Environmental Impact',
        style: {
            fontSize: '2.5em'
        }
      },
      subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
      },
      yAxis: {
        title: {
            text: ''
        }
      },  
      xAxis: {
        categories: ['90','91','92','93','94','95','96','97','98','99','00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15']
      },
      series: [{
          color: '#8cc640',
          name: 'Production of Market Pulp and Paper',
          data: [1.00,1.03,1.06,1.08,1.17,1.19,1.17,1.27,1.30,1.34,1.41,1.38,1.42,1.50,1.56,1.57,1.63,1.63,1.57,1.40,1.52,1.50,1.48,1.47,1.46,1.46]
      },{
        color: '#6cbd56',
        name: 'Total Primary Energy Consumption',
        data: [1.00,0.98,0.96,0.97,0.94,0.95,0.97,0.93,0.91,0.90,0.87,0.88,0.89,0.88,0.87,0.84,0.86,0.85,0.84,0.87,0.87,0.83,0.82,0.81,0.79,0.80]
      }, {
        color: '#009347',
        name: 'Biomass Utilisation',
        data: [1.00,0.98,0.96,1.00,0.98,0.99,0.98,0.98,0.98,0.99,0.97,0.98,1.00,0.99,0.98,0.96,0.98,0.99,1.00,1.05,1.03,1.03,1.05,1.05,1.01,1.04]
      }, {
        color: '#6aa242',
        name: 'Electricity consumption',
        data: [1.00,0.96,0.95,0.96,0.92,0.93,0.94,0.92,0.92,0.90,0.90,0.90,0.89,0.87,0.85,0.83,0.86,0.84,0.84,0.85,0.86,0.83,0.81,0.80,0.79,0.79]
      }, {
        color: '#51a332',
        name: 'CO2',
        data: [1.00,0.95,0.94,0.91,0.89,0.88,0.91,0.83,0.81,0.79,0.75,0.75,0.74,0.73,0.68,0.68,0.65,0.63,0.63,0.64,0.62,0.60,0.58,0.57,0.54,0.54]
      }, {
        color: '#26b6cc',
        name: 'NOX',
        data: [1.00,1.00,0.96,0.94,0.89,0.85,0.84,0.79,0.74,0.73,0.69,0.70,0.71,0.71,0.69,0.64,0.66,0.63,0.63,0.66,0.65,0.65,0.60,0.61,0.56,0.56]
      }, {
        color: '#2f7cba',
        name: 'Water intake',
        data: [1.00,0.93,0.89,0.83,0.77,0.75,0.73,0.68,0.65,0.64,0.60,0.62,0.61,0.61,0.63,0.55,0.55,0.56,0.55,0.58,0.54,0.55,0.56,0.54,0.54,0.54]
      }, {
        color: '#005eb8',
        name: 'COD',
        data: [1.00,0.88,0.73,0.63,0.55,0.53,0.48,0.44,0.40,0.35,0.34,0.33,0.31,0.30,0.28,0.25,0.25,0.24,0.23,0.24,0.24,0.23,0.23,0.22,0.21,0.21]
      }, {
        color: '#aeadb3',
        name: 'SO2',
        data: [1.00,0.82,0.74,0.63,0.55,0.49,0.46,0.40,0.34,0.29,0.25,0.25,0.24,0.21,0.19,0.20,0.21,0.19,0.17,0.17,0.15,0.13,0.11,0.12,0.09,0.10]
      }, {
        color: '#87868a',
        name: 'BOD',
        data: [1.00,0.88,0.74,0.66,0.55,0.54,0.46,0.44,0.40,0.36,0.32,0.31,0.30,0.27,0.24,0.20,0.19,0.18,0.17,0.17,0.17,0.17,0.16,0.16,0.15,0.14]
      }, {
        color: '#878686',
        name: 'AOX ',
        data: [1.00,0.75,0.47,0.29,0.20,0.16,0.12,0.11,0.10,0.09,0.08,0.08,0.08,0.08,0.06,0.05,0.06,0.05,0.05,0.05,0.05,0.05,0.05,0.04,0.04,0.04]
      }],
      responsive: {
        rules: [{
            condition: {
              maxWidth: 500
            },
            chartOptions: {
              legend: {
                  layout: 'horizontal',
                  align: 'center',
                  verticalAlign: 'bottom'
              }
            }
        }]
      }

    });


//grafica 6

Highcharts.chart('grafica6', {
    title: {
        text: 'CEPI Total Paper and Board Production and Consumption',
        style: {
            fontSize: '2.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    yAxis: {
        title: {
            text: 'Millon Tonness'
        }
    },
    xAxis: {
        categories: ['91', '93', '95', '97', '99', '01', '03', '05', '07', '09', '11', '13', '15']
    },
    series: [{
        color: '#8cc640',
        name: 'Paper & Board Production',
        data: [65,69,76,81,86,89,93,99,102,88,94,91,90]
    },{
        color: '#009347',
        name: 'Paper & Board Consumption',
        data: [60,62,67,72,79,81,83,86,89,77,80,76,77]
    }]
});

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
                var stack_label = this.axis.series[tons_index].options.tons+ '  MT';
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
        tons : 49.6
    }, {
        name: 'b',
        data: [0, 29.9],
        tons : 28,
        borderWidth: 2,
        borderColor: '#005eb8'
    }, {
        name: 'c',
        data: [0, 0, 14.4],
        tons : 4.7,
        borderWidth: 2,
        borderColor: '#005eb8'
    }, {
        name: 'd',
        data: [0, 0, 0, 4.7],
        tons : 4.2,
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
        format: '({point.y:.1f} MT)%'
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
                    format: '{point.y:.1f}% (MT)'
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
                    format: '{point.y:.1f}% (MT)'
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



