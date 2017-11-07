//Graficas latest

$(document).ready(function () {

    // Build the chart
    Highcharts.chart('grafica1', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'CEPI Wood Consumption Origin in 2015',
            style:{
                fontSize: '2.5em'
            }
        },
        subtitle: {
          text: 'CEPI Statistics - Status as of 2015'
        },
        tooltip: { enabled: false },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.1f} %'
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'CEPI Area',
                color: '#8cc640',
                y: 90.845
            }, {
                name: 'Other EU28 Countries',
                color: '#6cbd56',
                y: 6.284,
                sliced: true,
                selected: true
            }, {
                name: 'Other Europe',
                color: '#009347',
                y: 9.068
            }, {
                name: 'Rest of the world',
                color: '#6aa242',
                y: 1.071
            }]
        }]
    });
});

//graficas elberth
$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'graf1',
            type: 'pie'
        },
        title: {
            text: ''
        },
        exporting: { enabled: false },
        tooltip:  
       { enabled: false },
        plotOptions: {
            pie: {
                innerSize: '90%',
                dataLabels: {
                    enabled: false,
                },
            }
        },
        series: [{
            colors: ['#009347','#b3dec8'],
            data: [
                ['', 99.6],
                ['', 0.4]
            ]
        }]
    });
});

$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'graf2',
            type: 'pie'
        },
        title: {
            text: ''
        },
        exporting: { enabled: false },
        tooltip:  
       { enabled: false },
        plotOptions: {
            pie: {
                innerSize: '90%',
                dataLabels: {
                    enabled: false,
                },
            }
        },
        series: [{
            colors: ['#51a332','#cbe3c1'],
            data: [
                ['', 64.4],
                ['', 36.6]
            ]
        }]
    });
});