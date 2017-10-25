//Graficas latest

  Highcharts.chart('grafica1', {
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
              'padding': -15
          })
          .add();                
            label.align(Highcharts.extend(label.getBBox(), {
                align: 'center',
                x: 20, // offset
                verticalAlign: 'bottom',
                y: 0 // offset
            }), null, 'spacingBox');
          }
        },
        marginBottom: 90
      },
    title: {
        text: 'Electricity produced through CHP compared to Total on-site Electricity Generation',
        style:{
          fontSize: '2.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1990','1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
    },
    yAxis: {
        title: {
            text: '%'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: '%'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
      series: [{
          name: 'Electricity produced through CHP',
          color: '#8cc640',
          data: [88.22,87.96,87.91,87.84,88.93,89.19,90.70,92.34,90.46,91.41,90.35,92.68,94.21,96.67,93.66,94.40,95.22,94.54,94.23,94.42,95.44,95.25,96.40,96.10,95.98,96.10]
      }]
    });

Highcharts.chart('grafica2', {
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
              'padding': -15
          })
          .add();                
            label.align(Highcharts.extend(label.getBBox(), {
                align: 'center',
                x: 20, // offset
                verticalAlign: 'bottom',
                y: 0 // offset
            }), null, 'spacingBox');
          }
        },
        marginBottom: 90
      },
    title: {
        text: 'Evolution of Energy Consumption',
        style:{
          fontSize: '2.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1990','1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
    },
    yAxis: {
        title: {
            text: 'TJ/kt'
        }
    },
          series: [{
          name: 'Coal',
          color: '#8cc640',
          data: [1.74,1.58,1.44,1.30,1.16,1.04,0.95,0.81,0.75,0.68,0.60,0.52,0.48,0.49,0.54,0.44,0.52,0.48,0.44,0.50,0.50,0.49,0.42,0.45,0.39,0.44]
      },{
          name: 'Gas',
          color: '#6cbd56',
          data: [3.53,3.61,3.79,3.98,3.98,4.19,4.49,4.32,4.23,4.29,4.10,4.46,4.61,4.60,4.56,4.46,4.33,4.36,4.47,4.57,4.61,4.23,4.20,3.96,3.86,3.88]
      },{
          name: 'Fuel Oil',
          color: '#009347',
          data: [1.85,1.80,1.73,1.61,1.65,1.59,1.70,1.43,1.32,1.13,0.92,0.88,0.84,0.77,0.68,0.62,0.60,0.51,0.45,0.44,0.36,0.29,0.26,0.25,0.19,0.19]
      },{
          name: 'Total Biomass Used as Fuel in Mills',
          color: '#6aa242',
          data: [5.83,5.74,5.62,5.83,5.68,5.73,5.66,5.71,5.67,5.72,5.70,5.75,5.87,5.81,5.87,5.80,5.95,6.03,6.07,6.46,6.39,6.41,6.44,6.49,6.34,6.45]
      },{
          name: 'Other Fossil Fuels',
          color: '#51a332',
          data: [0.18,0.14,0.15,0.15,0.14,0.14,0.18,0.20,0.22,0.21,0.19,0.19,0.19,0.20,0.18,0.18,0.21,0.18,0.13,0.13,0.14,0.13,0.11,0.10,0.11,0.10]
      },{
          name: 'Other: waste of waste',
          color: '#26b6cc',
          data: [0.05,0.05,0.06,0.05,0.06,0.05,0.06,0.06,0.06,0.04,0.04,0.05,0.05,0.05,0.05,0.08,0.07,0.08,0.07,0.08,0.08,0.10,0.12,0.14,0.12,0.12]
      },{
          name: 'Net Bought Electricity',
          color: '#2f7cba',
          data: [2.99,2.86,2.77,2.73,2.53,2.60,2.57,2.55,2.45,2.47,2.50,2.42,2.30,2.27,2.11,2.08,2.17,2.10,2.02,1.96,1.91,1.82,1.78,1.73,1.72,1.68]
      }]
    });

Highcharts.chart('grafica3', {
    chart: {
        type: 'pie',
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
        text: 'CEPI Fuels Consumption in 2015',
        style: {
          fontSize: '2.5em',
        },
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45,
            allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
            showInLegend: true
        }
    },
    series: [{
        name: 'Delivered amount',
        colors: ['#8cc640','#6cbd56','#009347','#6aa242','#51a332','#26b6cc'],
        data: [
            ['Biomass', 57.7],
            ['Gas', 34.7],
            ['Coal', 3.9],
            ['Fuel oil', 1.7],
            ['Other Fossil Fuels', 0.9],
            ['Others', 1.1]
        ]
    }]
});
//Graficas elberth
Highcharts.chart('graficaIndustrial', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '12px'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '<b>{point.y:.1f}%</b>'
    },
    series: [{
        name: 'Population',
        data: [
            ['Other<br>manufacturing<br>industries', 5],
            ['Iron and steel', 3],
            ['Non-metallic minerals', 2.4],
            ['Chemicals', 2],
            ['Food processing<br>Beverages & Tabacco', 1.1]
        ],
        color: '#51a332',
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}%', // one decimal
            y: 10
        }
    },{
        name: 'Population',
        data: [
            ['Pulp, paper and print', 0.7]
        ],
        color: '#0fb4cc',
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10
        }
    }]
});