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
	   		"data": 
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
	   		"data":
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
	   		"data":
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
	   		"data":
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
	   		"data":
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
	   		"data":
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
	   		"data":
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
	   		"data":
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
	   		"data":
	   		{
	   			"a": "5,637",
	   			"b": "5,318",
	   			"c": "2,913",
	   			"d": "3,245",
	   			"e": "3,500",
	   		},	
   		},
   	];



   	alert(dataTable[0].data.a);
   }

   function directManufacturing(){
		var myChart = Highcharts.chart('key-figures', {
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

