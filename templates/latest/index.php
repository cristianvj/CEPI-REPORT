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
					<li class="active"><a href="#about">About our Industry/Paper & Board</a></li>
					<li><a href="#wood">Wood</a></li>
					<li><a href="#raw">Raw Materials</a></li>
					<li><a href="#paper">Paper for Recycling</a></li>
					<li><a href="#energy">Energy</a></li>
					<li><a href="#environment">Environment</a></li>
					<li><a href="#social">Social Affairs</a></li>
				</ul>
				<!-- /Botones -->
				<div class="tab-content flex contBusqueda">
					<!-- Tab1 -->
					<div id="about" class="tab active">
						
							<select id="charts" name="charts" class="charts">
								<option value="key-figures">Key Figures</option>
								<option value="1">Direct manufacturing cost structure of the European Pulp & Paper Industry</option>
								<option value="2" >Profitability European Pulp & Paper Industry</option>
								<option value="3">Investment / turnover ratio in the Pulp & Paper Industry, CEPI countries</option>
								<option value="4">Labour productivity: comparison between Europe and competing countries</option>
								<option value="5">Evolution of P&B Production by Region</option>
								<option>P&B Consumption per Capita</option>
								<option>CEPI Paper & Board Production by Grade</option>
							</select>
						
					</div>
					<!-- /Tab1 -->
					<!-- Tab2 -->
					<div id="wood" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">CEPI Wood Consumption Origin</option>
								<option value="1">CEPI Trade Flows of Wood</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab2 -->
					<!-- Tab3 -->
					<div id="raw" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">CEPI Raw Materials Consumption</option>
								<option value="1">CEPI Non-Fibrous Materials Consumption</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab3 -->
					<!-- Tab4 -->
					<div id="paper" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">European Recycling Rate of Paper for Recycling</option>
								<option value="1">European Recycling Rate in the World</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab4 -->
					<!-- Tab5 -->
					<div id="energy" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">Total Specific Energy Consumption</option>
								<option value="1">Specific Electricity Consumption</option>
								<option>Electricity produced through CHP compared to Total on-site Electricity Generation</option>
								<option>Evolution of Energy Consumption</option>
								<option>Biomass Utilisation - Fuel Consumption</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab5 -->
					<!-- Tab6 -->
					<div id="environment" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">Evolution of Environmental Impacts of the CEPI Pulp and Paper Industry</option>
								<option value="1">Water Profile (Sankey Diagram)</option>
								<option>Biomass Utilisation - Fuel Consumption</option>
								<option>Specific Air Emissions</option>
								<option>Specific Amount of Residues Landfilled</option>
								<option>Water Emissions</option>
								<option>Residues by Destination in 2015</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab6 -->
					<!-- Tab7 -->
					<div id="social" class="tab">
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">Accident Rate</option>
							</select>
							<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
							    <path d="M0-.75h24v24H0z" fill="none"/>
							</svg></span>
							<div class="cont_list_select_mate">
							  <ul class="cont_select_int">  </ul> 
							</div>
						  </div>
						</div>
					</div>
					<!-- /Tab7 -->

				</div>				
			</div> <!-- /Cierra tabs del select  -->
			<!-- Charts -->
		<div id="key-figures" style="width:90%; height:400px; margin: 0em 5% 5em 5%"></div>
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