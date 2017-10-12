$(function() { 
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
});
$(document).ready(function(){
   $('#charts').change(function(){
	    var valor = $(this).val();
		if(valor=="key-figures"){
			$(function() { 
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
			});
		}
		if(valor=="1"){
			$(function() { 
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
			});
		}
	});
});

