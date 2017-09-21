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