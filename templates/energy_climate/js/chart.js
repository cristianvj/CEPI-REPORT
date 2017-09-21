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