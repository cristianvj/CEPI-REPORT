<?php
	$pageName = "latest";
	include('../../components/header.php');
?>
<body class="body-latest">

	<header>
		<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
	</header>
	<div class="div-menu">
		<span class="btn-menu" onclick="openNav()">&#9776;</span>
		<?php include('../../components/menu.php'); ?>
	</div>	

	<section class="banner">
		<div class="flex contFilt">
			<p class="right">Download GRI Excel data <a href="">here</a></p>
			<h2 class="title">ALL LATEST DATA</h2>
			<p>Want more detailed data? Become a subscriber <a href="">here</a></p>
			<div class="tabs">
				<!-- Botones -->
				<ul class="flex contBusqueda tab-links">
					<li id="li-about" class="active"><a href="#about">About our Industry/Paper & Board</a></li>
					<li id="li-wood"><a href="#wood">Wood</a></li>
					<li id="li-raw"><a href="#raw">Raw Materials</a></li>
					<li id="li-paper"><a href="#paper">Paper for Recycling</a></li>
					<li id="li-energy"><a href="#energy">Energy</a></li>
					<li id="li-environment"><a href="#environment">Environment</a></li>
					<li id="li-social"><a href="#social">Social Affairs</a></li>
				</ul>
				<!-- /Botones -->
				<div class="tab-content flex contBusqueda">

					<!-- Tab1 -->
					<div id="about" class="tab active">						
							<div class="caja">
								<select id="chart-about" name="chart-about" class="charts">
								<option value="1">Key Figures</option>
								<option value="2">Direct manufacturing cost structure of the European Pulp & Paper Industry</option>
								<option value="3" >Profitability European Pulp & Paper Industry</option>
								<option value="4">Investment / turnover ratio in the Pulp & Paper Industry, CEPI countries</option>
								<option value="5">Labour productivity: comparison between Europe and competing countries</option>
								<option value="6">Evolution of P&B Production by Region</option>
								<option value="7">P&B Consumption per Capita</option>
								<option value="8">CEPI Paper & Board Production by Grade</option>
							</select>
							</div>						
					</div>
					<!-- /Tab1 -->

					<!-- Tab2 -->
					<div id="wood" class="tab">
						<div class="caja" >
							<select id="chart-wood" name="chart-wood" class="charts">
								<option value="1">CEPI Wood Consumption Origin</option>
								<option value="2">CEPI Trade Flows of Wood</option>
							</select>
						</div>
					</div>
					<!-- /Tab2 -->

					<!-- Tab3 -->
					<div id="raw" class="tab">
						<div class="caja">						
							<select id="chart-raw" name="chart-raw" class="charts">
								<option value="1">CEPI Raw Materials Consumption</option>
								<option value="2">CEPI Non-Fibrous Materials Consumption</option>
							</select>							
						</div>
					</div>
					<!-- /Tab3 -->

					<!-- Tab4 -->
					<div id="paper" class="tab">
						<div class="caja">
							<select id="chart-paper" name="chart-paper" class="charts">
								<option value="1">European Recycling Rate of Paper for Recycling</option>
								<option value="2">European Recycling Rate in the World</option>
							</select>
						</div>
					</div>
					<!-- /Tab4 -->

					<!-- Tab5 -->
					<div id="energy" class="tab">
						<div class="caja">
							<select id="chart-energy" name="chart-energy" class="charts">
								<option value="1">Total Specific Energy Consumption</option>
								<option value="2">Specific Electricity Consumption</option>
								<option>Electricity produced through CHP compared to Total on-site Electricity Generation</option>
								<option>Evolution of Energy Consumption</option>
								<option>Biomass Utilisation - Fuel Consumption</option>
							</select>
						</div>
					</div>
					<!-- /Tab5 -->
					<!-- Tab6 -->
					<div id="environment" class="tab">
						<div class="caja">
							<select id="chart-environment" name="chart-environment" class="charts">
								<option value="1">Evolution of Environmental Impacts of the CEPI Pulp and Paper Industry</option>
								<option value="2">Water Profile (Sankey Diagram)</option>
								<option value="3">Biomass Utilisation - Fuel Consumption</option>
								<option value="4">Specific Air Emissions</option>
								<option value="5">Specific Amount of Residues Landfilled</option>
								<option value="6">Water Emissions</option>
								<option value="7">Residues by Destination in 2015</option>
							</select>
						</div>
					</div>
					<!-- /Tab6 -->
					<!-- Tab7 -->
					<div id="social" class="tab">
						<div class="caja">
							<select id="chart-social" name="chart-social" class="charts">
								<option value="1"> Accident Rate </option>
							</select>
						</div>
					</div>
					<!-- /Tab7 -->

				</div>				
			</div> <!-- /Cierra tabs del select  -->
			<!-- Charts -->


		<div id="charts-latest"></div>
		<!-- /Charts -->
		</div>
		

	</section>
	<!-- /Contenido -->

	<footer class="flex">
		<div class="footer-col1 footer-latest">
			<h2>OUR ACCOUNTABILITY</h2>
			<br>
			<br>
				<p>Ernst & Young issued a limited assurance statement on the data quality rating that CEPI carried out on its core indicators in the statistics report.</p>
				<br>
				<p><a href="">Click here</a>  to download the statement or request your own paper copy by sending an email to mail@cepi.org</p>
		</div>
	</footer>

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->

	<?php include('../../components/scripts.php'); ?>

<script type="text/javascript">
	$(document).ready(function() {
	    $('.tabs .tab-links a').on('click', function(e)  {
	        var currentAttrValue = $(this).attr('href');
	        // Show/Hide Tabs
	        $('.tabs ' + currentAttrValue).show().siblings().hide();
	        // Change/remove current tab to active
	        $(this).parent('li').addClass('active').siblings().removeClass('active');			 
	        e.preventDefault();
	    });
	});
</script>
</body>
</html>