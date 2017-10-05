Highcharts.chart('graficaForest', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    xAxis: {
        categories: ['2010','2050']
    },
    yAxis: {
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} Billion Euro'
            }
        },
        column: {
            stacking: 'normal',
            format: '{point.y:.1f} Billion Euro'
        }
    },
    series: [{
        name: 'Other bio-based products',
        data: [0.5, 4],
        color: '#51a332'
    }, {
        name: 'Established pulp and paper products',
        data: [16, 21],
        color: '#8cc640'
    }]
});

$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'emmisions1990',
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: 'Emissions: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                innerSize: '50%'
            }
        },
        series: [{
            colors: ['#57a133','#56b6cc','#8bc540'],
            data: [
                ['5', 5],
                ['15', 15],
                ['40', 40]
            ]
        }]
    });
});
    
$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'emmisions2015',
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: 'Emissions: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                innerSize: '50%'
            }
        },
        series: [{
            colors: ['#57a133','#56b6cc','#8bc540'],
            data: [
                ['5', 5],
                ['12', 12],
                ['32', 32]
            ]
        }]
    });
});

$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'emmisions2050',
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: 'Emissions: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                innerSize: '50%'
            }
        },
        series: [{
            colors: ['#57a133','#56b6cc','#8bc540'],
            data: [
                ['1', 1],
                ['1', 1],
                ['10', 10]
            ]
        }]
    });
});

$(function () {
        var tickCount = 0,
            chart = Highcharts.chart('emmisions2015_2050', ({

        chart: {
            type: 'column'
        },

        title: {
            text: ''
        },

        xAxis: {
            opposite: true,
            categories: ['Transport', 'Purchased Electricity', 'Direct Emissions']
        },
        yAxis: [{}, {
                opposite: true,
            gridLineWidth: 0,
        }],
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },

        plotOptions: {
            series: {
                borderWidth: 1,
                dataLabels: {
                    enabled: true,
                    rotation: 0,
                    align: 'center',
                    style: {
                        textOutline: false 
                    },
                     borderWidth: 1,
                     formatter: function() {
                       if (this.point.isInside == true) {
                         return '<span style="color: white">' + this.y + '%</span>';
                       } else {
                         return '<span style="color: black">' + this.y + '%</span>';
                       }
                     }
                }
            },
            column: {
                stacking: 'normal',
                format: '{point.x:.1f} Billion Euro'
            }
        },

        series: [{
            name: 'Emerging & Breakthrough',
            data: [null, null, { y: -5, color: '#8cc640'}]
        },{
            name: 'Demand-side Flexibility',
            data: [null, null, { y: -2, color: '#8cc640'}]
        },{
            name: 'Fuel Switch',
            data: [null, null, { y: -8, color: '#8cc640'}]
        },{
            name: 'Energy Efficiency',
            data: [{ y: -4, color: '#51a332'},{ y: -11, color: '#26b6cc'},{ y: -7, color: '#8cc640'}]
        }]
    }));



var tickPositions = [-19, -16, -12, -4],   // Define here positions of labels (position point can't be equal than extreme points of axis)
        extremes = chart.yAxis[0].getExtremes(),
    counter = 0,
    
        createTicks = function(ticks, axisExtremes) {
            var ticksArray = [axisExtremes.min, ...ticks, axisExtremes.max];
        return ticksArray;
        };
        
chart.yAxis[1].setExtremes(extremes.min ,extremes.max);

chart.yAxis[1].update({
        tickPositions: createTicks(tickPositions, extremes),
    labels: {
            formatter: function() {

            if(this.value === extremes.min) {
                    return;
            } else if(counter < tickPositions.length) {
                    return this.chart.series[counter++].name;
            } else if(this.value === extremes.max) {
                    counter = 0
                return;
            }
            },
        style: {
                "color": "#aaa"
        }
    }
    
})

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
        name: 'Emerging  technologies',
        data: [78, 1005, 2503, 5360, 8510, 11935, 15945],
        color: "#26b6cc"
    },{
        name: 'Demand-side Flexibility',
        data: [307, 496, 685, 874, 1063, 1252, 1346],
        color: "#8cc640"
    },{
        name: 'Fuel Switch',
        data: [357, 1011, 1792, 2555, 3153, 3558, 3846],
        color: "#51a332"
    },{
        name: 'Energy Efficiency',
        data: [300, 662, 1087, 1516, 1978, 2458, 2966],
        color: "#005eb8"
    }]
});