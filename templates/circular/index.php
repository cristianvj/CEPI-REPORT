<?php
	$pageName = "circular";
	include('../../components/header.php');
	include('../../components/consulta.php');
	$reg = mysql_fetch_array($registro);
?>
<body class="body-circular">

		<header>
			<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
		</header>
		<div class="div-menu">
			<span class="btn-menu" onclick="openNav()">&#9776;</span>
			<?php include('../../components/menu.php'); ?>
		</div>	

		<section class="bannerForest">
			<div class="goodPractives">
				<a href="<?php echo $ruta."templates/practices/index.php"; ?>">Good Practices</a>
			</div>
			<div class="flex banner-footer">
				<div class="flex angleDown">
					<a class="ancla" href="#extracting"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>

		<section id="extracting" class="flex extracting">
			<div class="colDiv">
				<h2 class="title"><?php echo $reg['scc_extracting_title']; ?></h2>
				<p>
					<?php echo $reg['scc_extracting_content']; ?>
				</p>
			</div>
			<div class="colDiv imgRight">
				<img src="img/Grafico.svg">
				<h4 id="countCasc1">
					<?php echo $reg['scc_extracting_nro_one']; ?>
				</h4>
				<h4 id="countCasc2">
					<?php echo $reg['scc_extracting_nro_two']; ?>
				</h4>
				<h4 id="countCasc3">
					<?php echo $reg['scc_extracting_nro_tree']; ?>
				</h4>
			</div>
		</section>


		<section class="worldwide">
			<h2 class="title">
				<?php echo $reg['scc_worldwide_title']; ?>
			</h2>
			<div class="flex contWorld">
				<div class="colDiv">
					<h2>
						<?php echo $reg['scc_worldwide_subtitle']; ?>
					</h2>
					<p class="vwLands">view graph in landscape orientation</p>
					<div id="recoveryGraf"></div>
				</div>
				<div class="colDiv">
					<?php echo $reg['scc_worldwide_content']; ?>
				</div>
			</div>
		</section>

		<section class="fostering">
			<h2 class="title">
				<?php echo $reg['scc_fostering_title']; ?>
			</h2>
			<p>
				<?php echo $reg['scc_fostering_content']; ?>
			</p>
			<div class="imgFostering">
				<h3 id="countFost1">
					<?php echo $reg['scc_fostering_nbr_two']; ?>%
				</h3>
				<h3 id="countFost2">
					<?php echo $reg['scc_fostering_nbr_one']; ?>%
				</h3>
				<h3 id="countFost3">
					<?php echo $reg['scc_fostering_nbr_tree']; ?>%
				</h3>
				<a href="img/unnamed.png" data-fancybox="images" data-caption="Fostering a European network">
				<img src="img/unnamed.jpg">
				</a>
			</div>
		</section>

		<section class="paper">
			<?php echo $reg['scc_fostering_content_two']; ?>
		</section>

		<section class="latesData">
			<h2>Latest Data</h2>
			<?php echo $reg['scc_latest_content']; ?>

			<p class="show-sm message-orientation">View graphs in Landscape Orientation</p>

			<div class="chart-container show-md">
				<div class="grafica" id="grafica1"></div>
				<div class="grafica" id="grafica2"></div>
				<div class="grafica" id="grafica3"></div>
			</div>
		</section>

		<section id="latest">
			<h2 class="title">
				<?php echo $reg['scc_position_title']; ?>
			</h2>
		</br></br>
			<div class="flex contForest">
				<div class="colDiv">
					<?php echo $reg['scc_position_content_one']; ?>
				</div>
				<div class="colDiv">
					<?php echo $reg['scc_position_content_two']; ?>
				</div>
			</div>
		</section>

		<footer class="flex">
			<div class="footer-col1" data-anim-type="fade-in-right" data-anim-delay="0">
				<?php echo $reg['footer_content_one']; ?>
			</div>
			<div class="flex footer-col2" data-anim-type="fade-in-left" data-anim-delay="0">
				<?php echo $reg['footer_content_two']; ?>
			</div>

			<a class="ancla" href=".bannerForest">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>

	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->
	
<?php include('../../components/scripts.php'); ?>

<script type="text/javascript">

	Highcharts.chart('grafica3', {
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
        marginBottom: 90
      },
    title: {
        text: '<?php echo $reg['scc_latest_chart_title']; ?>',
        style: {
          fontSize: '2.5em'
        }
    },
    subtitle: {
        text: '<?php echo $reg['scc_latest_chart_subtitle']; ?>'
    },
    xAxis: {
        categories: ['EU-28+2', 'CEPI Countries', 'North America', 'Total World', 'Asia', 'Latin America', 'Africa']
    },
    yAxis: {
        title: {
            text: ''
        }
    },
    series: [{
        type: 'column',
        color: '#8cc640',
        name: 'Paper & Board Consumption',
        data: [
        	<?php echo $reg['scc_latest_chart_european_one']; ?>,
        	<?php echo $reg['scc_latest_chart_european_two']; ?>,
        	<?php echo $reg['scc_latest_chart_european_tree']; ?>,
        	<?php echo $reg['scc_latest_chart_european_four']; ?>,
        	<?php echo $reg['scc_latest_chart_european_five']; ?>,
        	<?php echo $reg['scc_latest_chart_european_six']; ?>,
        	<?php echo $reg['scc_latest_chart_european_seven']; ?>
        	]
      }]
    });

  

//Graficas elberth
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
  exporting: { enabled: false },
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
      y: <?php echo $reg['scc_worldwide_chart_one']; ?>,
      drilldown: null
    }, {
      name: 'Non-recoverable<br>(e.g. tissue,wallpaper,etc):22%',
      y: <?php echo $reg['scc_worldwide_chart_two']; ?>,
      drilldown: null
    }, {
      name: 'Recycled: 72%<br>Click to Drilldown',
      y: <?php echo $reg['scc_worldwide_chart_tree']; ?>,
      drilldown: 'Recycleds'
    }]
  }],
  drilldown: {
    series: [{
      name: 'Recycleds',
      id: 'Recycleds',
      colors: ['#57a133', '#8bc540'],
      data: [
        ['Exported 16%', <?php echo $reg['scc_worldwide_chart_recycled_one']; ?>],
        ['Used in Europe 84%', <?php echo $reg['scc_worldwide_chart_recycled_two']; ?>,]
      ]
    }]
  }
});
</script>

</body>
</html>