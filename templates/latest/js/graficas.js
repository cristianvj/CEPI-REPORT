$(document).ready(function(){
	function chart1(){
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
	chart1();
   $('#charts').change(function(){
	    var valor = $(this).val();
		if(valor=="key-figures"){
			$(function() { 
			    chart1();
			});
		}
		if(valor=="1"){
			$(function() { 
			    var myChart2 = Highcharts.chart('key-figures', {
			        chart: {
			            type: 'bar'
			        },
			        title: {
			            text: 'ee'
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
		if(valor=="2"){
			$(function() { 
			    var myChart2 = Highcharts.chart('key-figures', {
			        chart: {
			            type: 'bar'
			        },
			        title: {
			            text: 'chart 2'
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

