//Graficas latest

Highcharts.chart('grafica1', {
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
        text: 'Residues by Destination in 2015',
        style: {
          fontSize: '2.5em'
        }
    },
    tooltip: { enabled: false },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
               enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Residues to Landfills',
            color:'#8cc640',
            y: 7
        },{
            name: 'Residues Incinerated with Energy Recovery',
            color: '#6cbd56',
            y: 58
        }, {
            name: ' Residues Used on Land',
            color: '#009347',
            y: 13,
        }, {
            name: ' Residues Used in Other Industries and in the Process',
            color: '#6aa242',
            y: 22,
            sliced: true,
            selected: true
        }]
      }]
    });

Highcharts.chart('grafica3', {
    chart: {
        type: '',
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
        text: 'Air Emissions',
        style:{
          fontSize: '2.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
    },
    yAxis: {
        title: {
            text: 'kt/kt of product'
        }
    },
          series: [{
          name: 'Production of Paper and Market Pulp',
          color: '#8cc640',
          data: [100.0,102.6,104.7,113.5,115.2,113.2,122.9,126.2,130.0,137.1,133.9,138.2,145.5,151.9,152.3,158.1,158.5,152.3,136.3,147.4,145.7,144.0,142.8,142.1,141.6]
      },{
          name: 'Direct CO2 Emissions',
          color: '#6cbd56',
          data: [100.0,101.0,100.3,106.3,106.2,108.7,107.7,108.1,107.6,107.4,105.9,108.2,111.9,108.7,110.4,110.1,106.6,102.6,92.6,97.3,93.9,89.8,86.8,81.9,81.8]
      },{
          name: 'SO2 Emissions',
          color: '#6aa242',
          data: [100.0,92.5,80.2,76.4,69.6,64.2,60.4,52.0,46.0,41.8,40.2,40.2,37.6,35.2,36.5,39.7,37.7,32.1,27.6,27.3,23.0,19.2,21.5,16.5,16.5]
      },{
          name: 'NOx Emissions',
          color: '#009347',
          data: [100.0,98.4,98.5,101.0,97.7,95.4,96.6,93.5,95.3,94.4,94.2,97.7,103.3,104.4,96.9,104.7,100.5,95.5,89.3,95.7,94.2,86.9,87.4,78.9,79.2]
      },{
          name: 'Dust Emissions (PM10)',
          color: '#51a332',
          data: [100.0,90.0,80.1,77.0,72.7,55.5,49.3,41.2,37.0,33.5,32.6,30.5,24.2,25.7,21.7,23.0,19.8,16.3,13.9,14.7,12.7,12.6,12.0,11.1,11.7]
      }]
    });

Highcharts.chart('grafica2', {
    chart: {
        type: '',
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
        text: 'Water Emissions',
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
            text: 'kg/t of product'
        }
    },
          series: [{
          name: 'COD',
          color: '#8cc640',
          data: [76.70,85.52,65.96,74.17,57.45,61.86,60.68,52.96,40.70,38.30,31.97,33.95,29.73,27.96,25.80,20.26,18.93,17.48,17.73,16.72,16.33,15.32,14.46,13.43,11.75,10.89]
      },{
          name: 'BOD',
          color: '#8cc640',
          data: [76.70,85.52,65.96,74.17,57.45,61.86,60.68,52.96,40.70,38.30,31.97,33.95,29.73,27.96,25.80,20.26,18.93,17.48,17.73,16.72,16.33,15.32,14.46,13.43,11.75,10.89]
      },{
          name: 'AOX',
          color: '#8cc640',
          data: [76.70,85.52,65.96,74.17,57.45,61.86,60.68,52.96,40.70,38.30,31.97,33.95,29.73,27.96,25.80,20.26,18.93,17.48,17.73,16.72,16.33,15.32,14.46,13.43,11.75,10.89]
      }]
    });

//Graficas elberth
Highcharts.chart('graficaForest', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['2010', '2050']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || '#87868a'
            }
        }
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        y: 20,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: 'Other bio-based products',
        data: [1, 4],
        color: '#51a332'
    }, {
        name: 'Established pulp and paper products',
        data: [15.5, 21],
        color: '#8cc640'
    }]
});



Highcharts.chart('emmisions1990', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '60 million tonnes CO2',
         style: {
            color: "#c5c5c5"
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Direct Emissions',
            y: 40,
            color: '#8cc640'
        }, {
            name: 'Purchased Electricity',
            y: 15,
            sliced: true,
            selected: true,
            color: '#26b6cc'
        }, {
            name: 'Transport',
            y: 5,
            color: '#51a332'
        }]
    }]
});

Highcharts.chart('emmisions2015', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '49 million tonnes CO2',
        style: {
            color: "#c5c5c5"
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Direct Emissions',
            y: 40,
            color: '#8cc640'
        }, {
            name: 'Purchased Electricity',
            y: 15,
            sliced: true,
            selected: true,
            color: '#26b6cc'
        }, {
            name: 'Transport',
            y: 5,
            color: '#51a332'
        }]
    }]
});

Highcharts.chart('emmisions2050', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '12 million tonnes CO2',
        style: {
            color: "#c5c5c5"
        }
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Direct Emissions',
            y: 40,
            color: '#8cc640'
        }, {
            name: 'Purchased Electricity',
            y: 15,
            sliced: true,
            selected: true,
            color: '#26b6cc'
        }, {
            name: 'Transport',
            y: 5,
            color: '#51a332'
        }]
    }]
});

Highcharts.chart('emmisions2015_2050', {
      chart: {
        type: 'column'
    },

    title: {
        text: '2015-2050 pathways for decarbonisation',
        style: {
            color: "#c5c5c5"
        }
    },

    xAxis: {
        categories: ['Transport', 'Purchased Electricity', 'Direct Emissions']
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
        }
    },

    plotOptions: {
        column: {
            stacking: 'normal'
        }
    },

    series: [{
        name: 'Energy Efficiency',
        data: [0, 0, 7],
        color: "#51a332"
    }, {
        name: 'Fuel Switch',
        data: [0, 0, 8],
        color: "#26b6cc"
    }, {
        name: 'Demand-side Flexibility',
        data: [0, 0, 2],
        color: "#8cc640"
    }, {
        name: 'Emerging & Breakthrough',
        data: [4, 11, 5],
        color: "#005eb8"
    }]
});


Highcharts.chart('cumulativeInvestiments', {
      chart: {
        type: 'column'
    },

    title: {
        text: ''
    },

    xAxis: {
        categories: ['2020', '2025', '2030', '2035', '2040', '2045', '2050']
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
        }
    },

    plotOptions: {
        column: {
            stacking: 'normal'
        }
    },

    series: [{
        name: 'Energy Efficiency',
        data: [0, 0, 7, 4, 0, 7, 4],
        color: "#51a332"
    }, {
        name: 'Fuel Switch',
        data: [0, 0, 8, 4, 0, 7, 4],
        color: "#26b6cc"
    }, {
        name: 'Demand-side Flexibility',
        data: [0, 0, 2, 4, 10, 7, 4],
        color: "#8cc640"
    }, {
        name: 'Emerging & Breakthrough',
        data: [4, 11, 5, 4, 0, 7, 4],
        color: "#005eb8"
    }]
});