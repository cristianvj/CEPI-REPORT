$(function() {
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: 'graf1',
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip:  
       { enabled: false },
        plotOptions: {
            pie: {
                innerSize: '90%'
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
        tooltip:  
       { enabled: false },
        plotOptions: {
            pie: {
                innerSize: '90%'
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