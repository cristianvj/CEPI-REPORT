$(document).ready(function(){
	keyFigures();

  //change botons
  $( "#li-about" ).click(function() {
    keyFigures();
  });
  $( "#li-wood" ).click(function() {
    woodConsuption();
  });
  $( "#li-raw" ).click(function() {
    rawMaterials();
  });
  $( "#li-paper" ).click(function() {
    recyclingRate();
  });
  $( "#li-energy" ).click(function() {
    totalEnergyConsumption();
  });
  $( "#li-environment" ).click(function() {
    keyFigures();
  });
  $( "#li-social" ).click(function() {
    keyFigures();
  });
  //end change botons

  //change buton about
   $('#chart-about').change(function(){
	    var valor = $(this).val();
		if(valor=="1"){
			$(function() { 
			    keyFigures();
			});
		}
		if(valor=="2"){
			$(function() { 
			    directManufacturing();
			});
		}
		if(valor=="3"){
			$(function() { 
			    profitability();
			});
		}
		if(valor=="4"){
			$(function() { 
			    investment();
			});
		}
		if(valor=="5"){
			$(function() { 
			    labourProductivity();
			});
		}
		if(valor=="6"){
			$(function() { 
			    evolutionPB();
			});
		}
		if(valor=="7"){
			$(function() { 
			    consuptionCapita();
			});
		}
		if(valor=="8"){
			$(function() { 
			    boardProduction();
			});
		}
	});
  //end change buton about

  //change buton wood
  $('#chart-wood').change(function(){
      var valor = $(this).val();
    if(valor=="1"){
      $(function() { 
        woodConsuption();
      });
    }
    if(valor=="2"){
      $(function() { 
        tradeFlows();
        //keyFigures();
      });
    }
  });
  //end change buton wood

  //change buton raw
  $('#chart-raw').change(function(){
      var valor = $(this).val();
    if(valor=="1"){
      $(function() { 
        rawMaterials();
      });
    }
    if(valor=="2"){
      $(function() { 
        nonFibrous();
        //keyFigures();
      });
    }
  });
  //end change buton raw

  //change buton paper
  $('#chart-paper').change(function(){
      var valor = $(this).val();
    if(valor=="1"){
      $(function() { 
        recyclingRate();
      });
    }
    if(valor=="2"){
      $(function() { 
        europeanRecycling();
        //keyFigures();
      });
    }
  });
  //end change buton paper

  //change buton energy
  $('#chart-energy').change(function(){
      var valor = $(this).val();
    if(valor=="1"){
      $(function() { 
        totalEnergyConsumption();
      });
    }
    if(valor=="2"){
      $(function() { 
        specificElectricityConsumption();
        //keyFigures();
      });
    }
    if(valor=="3"){
      $(function() { 
        electricityThroughCHP();
        //keyFigures();
      });
    }
    if(valor=="4"){
      $(function() { 
        evolutionEnergyConsumption();
        //keyFigures();
      });
    }
    if(valor=="5"){
      $(function() { 
        europeanRecycling();
        //keyFigures();
      });
    }
  });
  //end change buton energy

   //Functions charts

   function keyFigures(){
   	
   	var dataTable = [
   		{
   			"name":"Turnover (Million €)", 
	   		"items": 
	   		{
   				"a": "79,388",
   				"b": "74,537",
   				"c": "75,790",
   				"d": "78,437",
   				"e": "80,241",
	   		}
   		},
   		{
   			"name":"P&B Production (000 tonnes)",
	   		"items":
	   		{
	   			"a": "90,823",
	   			"b": "98,259",
	   			"c": "95,065",
	   			"d": "91,019",
	   			"e": "90,872",
	   		},	
   		},	
   		{
   			"name":"Market Pulp (000 tonnes)",
	   		"items":
	   		{
	   			"a": "11,423",
	   			"b": "13,142",
	   			"c": "12,706",
	   			"d": "13,174",
	   			"e": "13,087",
	   		},	
   		},
   		{
   			"name":"Share of global production",
	   		"items":
	   		{
	   			"a": "27.7%",
	   			"b": "26.8%",
	   			"c": "24.1%",
	   			"d": "22.4%",
	   			"e": "22.3%",
	   		},	
   		},
   		{
   			"name":"Companies",
	   		"items":
	   		{
	   			"a": "929",
	   			"b": "831",
	   			"c": "674",
	   			"d": "628",
	   			"e": "633",
	   		},	
   		},
   		{
   			"name":"Mills",
	   		"items":
	   		{
	   			"a": "1,309",
	   			"b": "1,224",
	   			"c": "992",
	   			"d": "919",
	   			"e": "917",
	   		},	
   		},
   		{
   			"name":"Employment",
	   		"items":
	   		{
	   			"a": "279,987",
	   			"b": "246,785",
	   			"c": "194,894",
	   			"d": "181,084",
	   			"e": "178,212",
	   		},	
   		},
   		{
   			"name":"Added Value (Million €)",
	   		"items":
	   		{
	   			"a": "24,494",
	   			"b": "18,154",
	   			"c": "16,560",
	   			"d": "16,684",
	   			"e": "16,500",
	   		},	
   		},
   		{
   			"name":"Investments (Million €)",
	   		"items":
	   		{
	   			"a": "5,637",
	   			"b": "5,318",
	   			"c": "2,913",
	   			"d": "3,245",
	   			"e": "3,500",
	   		},	
   		},
   	];

   	$("#charts-latest").html("<div id='title-table'></div> <div id='div-table'></div>");
   	var titleTable = "<h2>Key Figures</h2><h3>CEPI Statistics - Status as of 2015</h3>"
   	$("#title-table").html(titleTable);
   	$("#div-table").html("<table id='table-key'></table>");
   	var texto = "<tr class='tbody'>";
   	texto = texto+"<th> </th>";
   	texto = texto+"<th> 2000 </th>";
   	texto = texto+"<th> 2005 </th>";
   	texto = texto+"<th> 2010 </th>";
   	texto = texto+"<th> 2014 </th>";
   	texto = texto+"<th> 2015 </th>";
   	texto = texto+"</tr>";
   	
   	for (var i = 1; i < dataTable.length; i ++) {
   		texto = texto+"<tr>";
   		texto += "<td class='td-title'>"+dataTable[i].name+"</td>";
   		texto += "<td class='td-data'>"+dataTable[i].items.a+"</td>";
   		texto += "<td class='td-data'>"+dataTable[i].items.b+"</td>";
   		texto += "<td class='td-data'>"+dataTable[i].items.c+"</td>";
   		texto += "<td class='td-data'>"+dataTable[i].items.d+"</td>";
   		texto += "<td class='td-data'>"+dataTable[i].items.e+"</td>";
   		texto = texto+"</tr>";
   	}

   	$("#table-key").html(texto);

   }

   function directManufacturing(){
   	
   	var dataManofacturing = [
   		{
			"consumable": "Capital Cost",
			"etn": "47.8",
			"mey": "5,629.4",
			"porc": "9.3%"	   		
   		},
   		{
			"consumable": "Maintenance",
			"etn": "40.1",
			"mey": "4,723.5",
			"porc": "7.8%"	   		
   		},
   		{
			"consumable": "Labour",
			"etn": "52.1",
			"mey": "6,130.6",
			"porc": "10.2%"	   		
   		},
   		{
			"consumable": "Electricity",
			"etn": "20.8",
			"mey": "2,446.5",
			"porc": "4.1%"	   		
   		},
   		{
			"consumable": "Fuels",
			"etn": "45.4",
			"mey": "5,337.7",
			"porc": "8.9%"	   		
   		},
   		{
			"consumable": "Chemicals",
			"etn": "67.2",
			"mey": "7,909.8",
			"porc": "13.1%"	   		
   		},
   		{
			"consumable": "Market Pulp",
			"etn": "110.9",
			"mey": "13,047.7",
			"porc": "21.7%"	   		
   		},
   		{
			"consumable": "Recovered Paper",
			"etn": "61.6",
			"mey": "7,248.7",
			"porc": "12.0%"	   		
   		},
   		{
			"consumable": "Wood",
			"etn": "66.1",
			"mey": "7,776.8",
			"porc": "12.9%"	   		
   		},
   		{
			"consumable": "Sum",
			"etn": "512.1",
			"mey": "60,250.7",
			"porc": "100.0%"	   		
   		},
   	];

   	$("#charts-latest").html("<div id='title-table'></div> <div id='div-table'></div>");
   	var titleTable = "<h2>Direct manufacturing cost structure of the European pulp & paper industry in 2015</h2><h3>CEPI Statistics - Status as of 2015</h3>"
   	$("#title-table").html(titleTable);
   	$("#div-table").html("<table id='table-key'></table>");
   	var texto = "<tr class='tbody'>";
   	texto = texto+"<th> Consumable </th>";
   	texto = texto+"<th> €/Tn </th>";
   	texto = texto+"<th> M€/Y </th>";
   	texto = texto+"<th> % </th>";
   	texto = texto+"</tr>";
   	
   	for (var i = 0; i < dataManofacturing.length; i ++) {
   		texto = texto+"<tr" 
   		if(i == dataManofacturing.length-1){ 
   			texto += " class='sum'";
   		}
   		texto += ">";
   		texto += "<td class='td-data'>"+dataManofacturing[i].consumable+"</td>";
   		texto += "<td class='td-data'>"+dataManofacturing[i].etn+"</td>";
   		texto += "<td class='td-data'>"+dataManofacturing[i].mey+"</td>";
   		texto += "<td class='td-data'>"+dataManofacturing[i].porc+"</td>";
   		texto = texto+"</tr>";
   	}

   	$("#table-key").html(texto);

   }

   function profitability (){
		var myChart = Highcharts.chart('charts-latest', {
		    chart: {
        type: 'column',
        events: {
            load: function () {
                var label = this.renderer.label("TEuropean pulp & paper industry: "+
                  "EU15 + Norway+Switzerland, with around two thirds of the European"+
                  " pulp and paper capacities represented </br>ROCE: Return on Capital"+
                  " Employed </br>EBITDA: Earnings Before Interest, Taxes, Depreciation"+
                  " and Amortization = sales - operating expenses")
                .css({
                    width: '600px',
                    fontSize: '1em',
                    color: '#868589'
                })
                .attr({
                    'stroke': 'silver',
                    'stroke-width': 0,
                    'r': 2,
                    'padding': 5
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
        marginBottom: 120
    },
    title: {
        text: 'Profitability European pulp & paper industry',
        style: {
            fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: [
            '1996',
            '2001',
            '2006',
            '2007',
            '2008',
            '2009',
            '2010',
            '2011',
            '2012',
            '2013',
            '2014',
            '2015'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'In %'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        y: -55
    },
    series: [{
        name: 'ROCE',
        color:'#009347',
        data: [8.4,10.7,4.3,4.6,1.5,1.2,8.0,5.3,3.2,5.7,7.9,10.6]

    }, {
        name: 'EBITDA',
        color:'#8CC640',
        data: [13.5,17.6,12.3,13.9,10.3,10.0,13.2,12.1,11.4,10.8,12.7,14.5]

    }]
		});
	}

  function investment(){
    $('#charts-latest').highcharts({   
      chart: {
        type: 'column',
        events: {
          load: function () {
                var label = this.renderer.label("* Estimated Capital Expenditures")
                .css({
                    width: '600px',
                    fontSize: '1em',
                    color: '#868589'
                })
                .attr({
                    'stroke': 'silver',
                    'stroke-width': 0,
                    'r': 2,
                    'padding': 5
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
        marginBottom: 130
      },
      title: {
        text: 'Investment* / Turnover Ratio in the Pulp & Paper Industry - CEPI',
        style: {
            fontSize: '3.5em'
        }
      },
      subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
      },
      xAxis: {
        categories: [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015]
      }, 
      yAxis: {
        min: 0,
        title: {
            text: 'In %'
        }
      },  
      legend: {
        align: 'center',
        verticalAlign: 'bottom',
        y: -55
      },
      series: [{
        name: 'Investment/Turnover',
        color:'#8CC640',
        data: [7.1, 8.8, 6.5, 6.6, 7.2, 7.1, 6.5, 6.5, 6.0, 5.2, 3.8, 4.0, 3.9, 4.4, 4.1, 4.4]
      }],
      credits: {
        enabled: false
      }
    });
  }

  function labourProductivity(){

    Highcharts.chart('charts-latest', {
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
              'padding': 5
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
        text: 'Labour Productivity: Comparision between Europe and Competing Countries',
        style: {
            fontSize: '3.5em'
        }
      },
      subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
      },
      yAxis: {
        title: {
            text: 'Finished metric tonnes / man hour'
        }
      },
      xAxis: {
        categories: [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015]
      }, 
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
      },
      plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
      },
      series: [{
          color: '#8cc640',
          name: 'Europe',
          data: [0.40,0.41,0.41,0.41,0.42,0.44,0.46,0.48,0.50,0.53,0.56,0.55,0.57]
      },{
        color: '#005eb8',
        name: 'USA',
        data: [0.33,0.33,0.34,0.35,0.37,0.38,0.39,0.42,0.45,0.45,0.46,0.47,0.45]
      }, {
        color: '#6cbd56',
        name: 'Canada',
        data: [0.31,0.32,0.32,0.33,0.34,0.35,0.36,0.36,0.41,0.43,0.44,0.44,0.48]
      }, {
        color: '#2f7cba',
        name: 'Japan',
        data: [0.41,0.41,0.41,0.47,0.48,0.51,0.58,0.61,0.70,0.71,0.71,0.71,0.67]
      }, {
        color: '#009347',
        name: 'Brazil',
        data: [0.23,0.23,0.24,0.25,0.28,0.29,0.30,0.32,0.37,0.37,0.36,0.34,0.32]
      }, {
        color: '#26b6cc',
        name: 'Indonesia',
        data: [0.21,0.20,0.21,0.22,0.22,0.26,0.27,0.27,0.38,0.39,0.38,0.39,0.37]
      }, {
        color: '#6aa242',
        name: 'China',
        data: [0.20,0.20,0.20,0.20,0.20,0.25,0.24,0.32,0.41,0.42,0.46,0.44,0.44]
      }, {
        color: '#51a332',
        name: 'Russia',
        data: [0.12,0.13,0.12,0.13,0.13,0.13,0.14,0.14,0.14,0.16,0.15,0.15,0.15]
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

  }


  function evolutionPB(){

    Highcharts.chart('charts-latest', {
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
                    'padding': 5
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
        text: 'Labour Productivity: Comparision between Europe and Competing Countries',
        style: {
            fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    yAxis: {
        title: {
            text: 'Finished metric tonnes / man hour'
        }
    },
    xAxis: {
        categories: [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015]
      }, 
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        color: '#8cc640',
        name: 'Total Europe',
        data: [101.296,99.475,102.835,105.865,110.991,111.745,115.420,116.426,112.347,101.376,109.342,108.137,106.969,106.153,106.205,106.506]
    }, {
        color: '#005eb851a332',
        name: 'CEPI Countries',
        data: [90.823,88.393,91.352,93.529,97.998,98.259,101.584,102.132,97.863,87.744,95.065,93.557,92.251,91.268,91.019,90.872]
    }, {
        color: '#6cbd56',
        name: 'Other Europe',
        data: [10.473,11.081,11.484,12.336,12.993,13.486,13.835,14.294,14.484,13.631,14.277,14.580,14.718,14.885,15.186,15.634]
    }, {
        color: '#2f7cba',
        name: 'North America',
        data: [106.823,100.577,101.744,100.633,104.363,102.427,102.119,100.950,95.707,84.585,88.667,87.184,85.094,84.911,84.269,82.992]
    }, {
        color: '#009347',
        name: 'Asia',
        data: [97.412,98.212,103.436,110.124,119.114,127.030,137.910,148.751,154.716,157.063,167.169,174.788,177.799,182.003,186.103,188.125]
    }, {
        color: '#26b6cc',
        name: 'Latin America',
        data: [14.894,15.161,15.753,16.299,17.465,17.886,18.501,19.162,19.538,19.659,20.400,20.791,21.047,21.231,21.291,21.577]
    }, {
        color: '#6aa242',
        name: 'Africa',
        data: [3.253,3.419,3.584,3.642,3.920,4.002,4.123,4.398,4.603,3.946,4.336,4.183,4.423,4.513,4.525,4.634]
    }, {
        color: '#005eb8',
        name: 'Oceania',
        data: [3.518,3.584,3.874,3.904,4.021,4.044,3.939,3.989,4.001,3.891,4.093,4.084,4.008,3.736,3.727,3.762]
    }, {
        color: '#87868a',
        name: 'World',
        data: [327.197,320.427,331.225,340.467,359.874,367.133,382.012,393.676,390.912,370.520,394.007,399.167,399.339,402.546,406.119,407.59]
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

  }

  function consuptionCapita(){

    Highcharts.chart('charts-latest', {
    chart: {
        type: 'column',
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
        marginBottom: 110
    },
    title: {
        text: 'Paper & Board Consumption per Capita',
        style:{
          fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: [
            'Unites States', 'Japan', 'CEPI countries', 'Hong-Kong', 'South Africa', 'Brazil', 'China', 'Russia', 'India'],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '2000',
        color: '#8cc640',
        data: [328.9,253.1,182.3,0,39.5,39.8,29.7,22.7,5.1]

    }, {
        name: '2005',
        color: '#005eb8',
        data: [303.5,248.3,188.3,154.9,47.8,40.1,45.7,37.4,7.1]

    }, {
        name: '2010',
        color: '#2f7cba',
        data: [240.5,218.8,174.4,147.6,49,49.5,68.7,46.8,9.2]

    }, {
        name: '201426b6cc',
        color: '#26b6cc',
        data: [224,215.1,163.5,123.5,42.6,49.1,77,46.6,9.8]

    }, {
        name: '2015',
        color: '#6aa242',
        data: [220.6,210.8,163.7,114.7,44,45.7,78.4,44.3,10]

    }]
});

  }

  function boardProduction(){
    Highcharts.chart('charts-latest', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'CEPI Paper & Board Production by Grade in 2015',
        style: {
          fontSize: '3em'
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
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Newsprint',
            y: 7.019
        }, {
            name: 'Uncoated Mechanical',
            color: '#87868a',
            y: 5.503,
            sliced: true,
            selected: true
        }, {
            name: 'Coated Mechanical',
            color: '#8cc640',
            y: 6.789
        }, {
            name: 'Uncoated Woodfree',
            color: '#005eb8',
            y: 8.934
        }, {
            name: 'Coated Woodfree',
            color: '#aeadb3',
            y: 7.020
        }, {
            name: 'Sanitary and Household',
            color: '#2f7cba',
            y: 7.153
        }, {
            name: 'Case Materials',
            color: '#6cbd56',
            y: 27.059 
        }, {
            name: 'Carton Board',
            color: '#009347',
            y: 8.710
        }, {
            name: 'Wrappings',
            color: '#26b6cc',
            y: 4.071
        }, {
            name: 'Other Paper & Board for Packaging',
            color: '#6aa242',
            y: 4.733
        }, {
            name: 'Other Paper & Board',
            color: '#51a332',
            y: 3.881
        }]
    }]
});
  }

  function woodConsuption(){
    Highcharts.chart('charts-latest', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'CEPI Wood Consumption Origin in 2015',
        style: {
          fontSize: '3em'
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
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'CEPI Area',
            color:'#8cc640',
            y: 90.845
        },{
            name: 'Other EU28 Countries',
            color: '#6cbd56',
            y: 6.284
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
  }

  function tradeFlows(){

    $("#charts-latest").html("<div id='title-table'></div> <div id='div-table'></div>");
    var titleTable = "<h2>CEPI Trade Flows of Wood in 2015</h2>"
    $("#title-table").html(titleTable);
    $("#div-table").html("<div id='map-wood'></div");

  }

  function rawMaterials(){
    Highcharts.chart('charts-latest', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'CEPI Raw Materials Consumption',
        style:{
          fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Millon Tones'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'Millon Tones'
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
        name: 'Woodpulp',
        color: '#8cc640',
        data: [37.162,36.212,37.488,40.046,41.139,39.060,42.538,43.332,43.796,45.619,44.603,45.265,46.335,47.960,46.861,48.671,48.920,46.167,39.833,43.533,43.188,41.682,40.911,40.649,40.755]
      }, {
          name: 'Pulp Other than Wood',
          color: '#6cbd56',
          data: [0.653,0.647,0.598,0.579,0.600,0.563,0.546,0.588,0.698,0.758,0.590,0.610,0.713,0.564,0.631,0.737,0.757,0.438,0.419,0.316,0.398,0.377,0.288,0.321,0.333]
      }, {
          name: 'Paper for Recycling',
          color: '#009347',
          data: [25.360,26.353,27.137,30.125,31.511,32.672,34.873,36.731,38.373,40.922,41.396,42.519,43.371,45.341,46.745,48.620,49.401,48.114,44.507,48.122,47.316,46.709,47.534,47.635,47.710]
      }, {
          name: 'Non-Fibrous Materials',
          color: '#51a332',
          data: [9.504,9.718,10.246,11.879,12.203,12.267,13.546,13.832,14.163,15.545,14.520,15.101,16.523,16.056,16.496,16.909,17.189,16.577,14.271,16.163,16.042,15.610,15.434,15.503,14.887]
      }]
    });
  }

  function nonFibrous(){
    Highcharts.chart('charts-latest', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'CEPI Non-Fibrous Materials Consumption',
        style:{
          fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015'],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: '`000 Tones'
        },
        labels: {
            formatter: function () {
                return this.value / 1000;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: '`000 Tones'
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
          name: 'Clays Total',
          color: '#8cc640',
          data: [3842,3787,3720,3953,4065,3932,4376,4653,4486,4716,4431,4363,4496,4337,4323,4277,4148,3839,3238,3825,3828,3600,3399,3186,3095]
      }, {
          name: 'Calcium Carbonate Total',
          color: '#6cbd56',
          data: [4349,4445,4685,5429,5580,5607,6188,6314,6466,7247,6739,7238,8166,8255,8662,8649,9075,8976,7776,8903,8881,8827,8842,9197,8703]
      }, {
          name: 'Starches Total (native and modified)',
          color: '#009347',
          data: [989,1088,1277,1509,1430,1512,1538,1570,1430,1551,1401,1587,1563,1472,1535,1606,1637,1543,1394,1593,1560,1549,1589,1524,1528]
      }, {
          name: 'Other Non-Fibrous Materials',
          color: '#51a332',
          data: [324,398,563,988,1128,1217,1443,1296,1781,2031,1949,1913,2298,1992,1976,2377,2329,2219,1863,1842,1773,1634,1603,1595,1562]
      }]
    });
  }

  function recyclingRate(){

    Highcharts.chart('charts-latest', {
    title: {
        text: 'European Recycling Rate of Paper for Recycling',
        style: {
          fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015']
    },
    labels: {
        items: [{
            html: 'Total fruit consumption',
            style: {
                left: '50px',
                top: '18px',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        color: '#8cc640',
        name: 'Paper & Board Consumption',
        data: [64.801,65.576,65.863,70.939,70.937,71.124,76.629,79.788,82.228,86.826,83.878,84.895,86.673,88.918,89.903,91.916,93.165,90.209,80.996,84.873,83.496,81.280,80.161,81.288,82.484]
    }, {
        type: 'column',
        color: '#6cbd56',
        name: 'Recycling inside Europe',
        data: [26.641,27.781,28.611,31.823,33.359,34.597,36.960,38.906,40.544,43.174,43.658,44.800,45.730,47.641,49.011,50.731,51.504,50.184,46.149,49.800,49.108,48.420,49.287,49.511,49.583]
    }, {
        type: 'column',
        color: '#009347',
        name: 'Recycling Outside Europe',
        data: [-0.512,-1.038,-0.598,-0.662,-0.319,0.358,0.725,1.109,2.339,1.779,2.347,2.436,3.029,4.655,6.587,7.306,8.535,9.853,12.058,8.371,9.406,9.446,8.319,8.561,9.384]
    }, {
        name: 'Recycling Rate',
        color: '#2f7cba',
        data: [40.3,40.8,42.5,43.9,46.6,49.1,49.2,50.2,52.2,51.8,54.8,55.6,56.3,58.8,61.8,63.1,64.4,66.6,71.9,68.5,70.1,71.2,71.9,71.4,71.5],
        marker: {
            lineWidth: 1,
            lineColor: '#2f7cba'
        }
      }]
    });

  }


  function europeanRecycling(){

    Highcharts.chart('charts-latest', {
    title: {
        text: 'European Recycling Rate in the World',
        style: {
          fontSize: '3.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015'
    },
    xAxis: {
        categories: ['EU-28+2', 'CEPI Countries', 'North America', 'Total World', 'Asia', 'Latin America', 'Africa']
    },
    series: [{
        type: 'column',
        color: '#8cc640',
        name: 'Paper & Board Consumption',
        data: [71.5,71.3,67.3,58.6,53.1,45.9,35.1]
      }]
    });

  }

  function totalEnergyConsumption(){
    Highcharts.chart('charts-latest', {
    chart: {
        type: ''
    },
    title: {
        text: 'Total Specific Energy Consumption',
        style:{
          fontSize: '3.5em'
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
    tooltip: {
        split: true,
        valueSuffix: 'TJ/kt'
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
          name: 'Total Specific Primary Energy Consumption of which',
          color: '#8cc640',
          data: [16.17,15.78,15.56,15.66,15.21,15.35,15.61,15.07,14.69,14.55,14.07,14.26,14.34,14.18,14.00,13.65,13.85,13.73,13.63,14.14,14.00,13.47,13.33,13.12,12.73,12.87]
      }, {
          name: 'Specific Fuels Consumption',
          color: '#6cbd56',
          data: [13.18,12.92,12.79,12.93,12.67,12.75,13.04,12.52,12.24,12.08,11.56,11.85,12.05,11.91,11.90,11.57,11.69,11.63,11.62,12.18,12.08,11.64,11.55,11.39,11.01,11.19]
      }, {
          name: 'Specific Net Bought Electricity',
          color: '#009347',
          data: [2.99,2.86,2.77,2.73,2.53,2.60,2.57,2.55,2.45,2.47,2.50,2.42,2.30,2.27,2.11,2.08,2.17,2.10,2.02,1.96,1.91,1.82,1.78,1.73,1.72,1.68]
      }]
    });
  }

  function specificElectricityConsumption(){

    Highcharts.chart('charts-latest', {
    chart: {
        type: ''
    },
    title: {
        text: 'Specific Electricity Consumption',
        style:{
          fontSize: '3.5em'
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
            text: 'MWh/kt'
        }
    },
    tooltip: {
        split: true,
        valueSuffix: 'MWh/kt'
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
          name: 'Specific Electricity Consumption',
          color: '#8cc640',
          data: [1.25,1.20,1.19,1.20,1.14,1.16,1.17,1.15,1.14,1.13,1.12,1.13,1.11,1.09,1.06,1.04,1.07,1.05,1.04,1.06,1.07,1.03,1.01,0.99,0.98,0.98]
      }]
    });

  }


  function electricityThroughCHP(){

    Highcharts.chart('charts-latest', {
    chart: {
        type: ''
    },
    title: {
        text: 'Electricity produced through CHP compared to Total on-site Electricity Generation',
        style:{
          fontSize: '3.5em'
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

  }

  function evolutionEnergyConsumption(){

    Highcharts.chart('charts-latest', {
    chart: {
        type: ''
    },
    title: {
        text: 'Evolution of Energy Consumption',
        style:{
          fontSize: '3.5em'
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

  }

});

