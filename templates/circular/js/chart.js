Highcharts.setOptions({
  lang: {
    drillUpText: '<< Back'
  }
});

Highcharts.chart('recoveryGraf', {
  chart: {
    type: 'pie'
  },
  title: {
    text: ''
  },
  plotOptions: {
    series: {
      dataLabels: {
        enabled: true,
        format: '{point.name}'
      }
    }
  },
  tooltip: { enabled: false },
  series: [{
    name: 'Brands',
    colorByPoint: true,
    colors: ['#005eb8', '#56b6cc', '#8bc540'],
    data: [{
      name: 'Potential for further recovery:6%',
      y: 6,
      drilldown: null
    }, {
      name: 'Non-recoverable<br>(e.g. tissue,wallpaper,etc):22%',
      y: 22,
      drilldown: null
    }, {
      name: 'Recycled: 72%<br>Click to Drilldown',
      y: 72,
      drilldown: 'Recycleds'
    }]
  }],
  drilldown: {
    series: [{
      name: 'Recycleds',
      id: 'Recycleds',
      colors: ['#57a133', '#8bc540'],
      data: [
        ['Exported 16%', 16],
        ['Used in Europe 84%', 84]
      ]
    }]
  }
});