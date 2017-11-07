function showGraf1 () {
    var grafica1 = document.getElementById('grafica1');  
    grafica1.classList.remove('hideBlock'); 
    var grafica2 = document.getElementById('grafica2');  
    grafica2.classList.add('hideBlock'); 
    grafica2.classList.remove('showBlock'); 
    var aGrafica1 = document.getElementById('aGrafica1');  
    aGrafica1.classList.add('btnActive'); 
    var aGrafica2 = document.getElementById('aGrafica2');  
    aGrafica2.classList.remove('btnActive'); 
}

function showGraf2 () {
    var grafica1 = document.getElementById('grafica1');  
    grafica1.classList.add('hideBlock'); 
    var grafica2 = document.getElementById('grafica2');  
    grafica2.classList.add('showBlock'); 
    var aGrafica1 = document.getElementById('aGrafica1');  
    aGrafica1.classList.remove('btnActive'); 
    var aGrafica2 = document.getElementById('aGrafica2');  
    aGrafica2.classList.add('btnActive'); 
}

//Grafica 1
$(function () {
var yAxisLabels = [0,1000000,2000000,3000000,4000000,5000000,6000000,7000000,8000000,9000000];
var categories= ['1990', '2000', '2010', '2020', '2030', '2040', '2050'];
    Highcharts.chart('grafica1', {
        chart: {
            type: 'area',
        },
        title: {
            text: ' '
        },
        xAxis: {
           labels: {
                enabled: true,
                formatter: function () {
                    return categories[this.value];
                }
            },
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
          allowDecimals: false,
          min: '0',
          title: {
            text: 'Y-AXIS'
          },
          tickPositioner: function() {
                    return yAxisLabels;
                },
          labels: {
            formatter: function(){
              return this.value;
            }
          }
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#ffffff',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#ffffff',
                }
            }
        },
           series: [{
            name: 'Africa',
            data: [100000, 100000, 500000, 900000, 900000, 900000, 555268]
        }, {
            name: 'L. America',
            data: [25020, 296350, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'Oceania',
            data: [100000, 296350, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'S-E. Asia',
            data: [25020, 100000, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'Japan',
            data: [25020, 296350, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'China',
            data: [25020, 296350, 100000, 241947, 331402, 443634, 555268]
        }, {
            name: 'Near East',
            data: [25020, 296350, 222809, 100000, 331402, 443634, 555268]
        }, {
            name: 'Asian CIS',
            data: [25020, 100000, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'Russia',
            data: [25020, 296350, 222809, 100000, 331402, 443634, 555268]
        }, {
            name: 'East Europe',
            data: [25020, 296350, 100000, 241947, 331402, 443634, 555268]
        }, {
            name: 'Central Europe',
            data: [25020, 296350, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'W. Europe - Nordic',
            data: [25020, 100000, 222809, 241947, 331402, 443634, 555268]
        }, {
            name: 'Nordic',
            data: [100000, 296350, 222809, 100000, 331402, 443634, 555268]
        }, {
            name: 'N. America',
            data: [25020, 296350, 222809, 241947, 331402, 100000, 555268]
        }]
    });
});

//Grafica 2
$(function () {
    var categories= ['1990', '2000', '2010', '2020', '2030', '2040', '2050'];
    Highcharts.chart('grafica2', {
        chart: {
            type: 'area',
        },
        title: {
            text: ' '
        },
        xAxis: {
           labels: {
                enabled: true,
                formatter: function () {
                    return categories[this.value];
                }
            },
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Percent'
            },
            labels: {
                formatter: function() {
                   return this.value+"%";
                }
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.percentage:.1f}%</b> ({point.y:,.0f} millions)<br/>',
            split: true
        },
        plotOptions: {
            area: {
                stacking: 'percent',
                lineColor: '#ffffff',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#ffffff'
                }
            }
        },
        series: [{
            name: 'Africa',
            data: [502, 635, 809, 947, 1402, 3634, 5268]
        }, {
            name: 'L. America',
            data: [106, 107, 111, 133, 221, 767, 1766]
        }, {
            name: 'Oceania',
            data: [163, 203, 276, 408, 547, 729, 628]
        }, {
            name: 'S-E. Asia',
            data: [18, 31, 54, 156, 339, 818, 1201]
        }, {
            name: 'Japan',
            data: [29, 42, 29, 6, 13, 30, 46]
        }, {
            name: 'China',
            data: [32, 52, 2, 69, 103, 30, 46]
        }, {
            name: 'Near East',
            data: [42, 62, 2, 6, 139, 30, 46]
        }, {
            name: 'Asian CIS',
            data: [52, 27, 2, 69, 13, 130, 46]
        }, {
            name: 'Russia',
            data: [62, 72, 29, 56, 13, 30, 46]
        }, {
            name: 'East Europe',
            data: [72, 82, 72, 69, 13, 30, 46]
        }, {
            name: 'Central Europe',
            data: [82, 92, 29, 96, 13, 30, 46]
        }, {
            name: 'W. Europe - Nordic',
            data: [92, 102, 82, 69, 13, 30, 46]
        }, {
            name: 'Nordic',
            data: [102, 112, 29, 76, 13, 30, 46]
        }, {
            name: 'N. America',
            data: [112, 202, 29, 69, 13, 30, 46]
        }]
    });
});