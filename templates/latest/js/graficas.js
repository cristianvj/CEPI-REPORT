$(document).ready(function(){

	keyFigures();

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
			    keyFigures();
			});
		}
		if(valor=="5"){
			$(function() { 
			    keyFigures();
			});
		}
		if(valor=="6"){
			$(function() { 
			    keyFigures();
			});
		}
		if(valor=="7"){
			$(function() { 
			    keyFigures();
			});
		}
		if(valor=="8"){
			$(function() { 
			    keyFigures();
			});
		}
	});

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

   function profitability(){
		var myChart = Highcharts.chart('charts-latest', {
		    chart: {
        type: 'column'
    },
    title: {
        text: 'Profitability European pulp & paper industry',
        style: {
            color: '#868589',
            fontFamily: 'Bebas',
            fontWeight: 'bold',
            fontSize: '2.5em'
        }
    },
    subtitle: {
        text: 'CEPI Statistics - Status as of 2015',
        style: {
            fontSize: '1em'
        }
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
});

