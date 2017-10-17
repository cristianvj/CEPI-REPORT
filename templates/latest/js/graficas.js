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
			    keyFigures();
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

   	//alert(dataTable.length);
   }

   function directManufacturing(){
		var myChart = Highcharts.chart('charts-latest', {
		    chart: {
		        type: 'bar'
		    },
		    title: {
		        text: 'Fruit Consumption'
		    },
		    xAxis: {
		        categories: ['Apples', 'Bananas', 'Oranges']
		    },
		    yAxis: {
		        title: {
		            text: 'Fruit eaten'
		        }
		    },
		    series: [{
		        name: 'Jane',
		        data: [1, 0, 4]
		    }, {
		        name: 'John',
		        data: [5, 7, 3]
		    }]
		});
	}
});

