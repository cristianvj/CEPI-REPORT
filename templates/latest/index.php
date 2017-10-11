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
						<div class="cont_select_center">
						<div class="select_mate" data-mate-select="active" >
							<select name="" onclick="return false;" id="">
								<option value="">Key Figures</option>
								<option value="1">Direct manufacturing cost structure of the European Pulp & Paper Industry</option>
								<option value="2" >Profitability European Pulp & Paper Industry</option>
								<option value="3">Investment / turnover ratio in the Pulp & Paper Industry, CEPI countries</option>
								<option value="4">Labour productivity: comparison between Europe and competing countries</option>
								<option value="5">Evolution of P&B Production by Region</option>
								<option>P&B Consumption per Capita</option>
								<option>CEPI Paper & Board Production by Grade</option>
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
					<!-- /Tab4 -->
					<!-- Tab5 -->
					<div id="energy" class="tab">
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
					<!-- /Tab5 -->
					<!-- Tab6 -->
					<div id="environment" class="tab">
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
					<!-- /Tab6 -->
					<!-- Tab7 -->
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
					<!-- /Tab7 -->

				</div>
				
			</div>
		</div>
		<!-- Resultado Busqueda -->
		<div class="flex contBusqueda">
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
		</div>
		<!-- Resultado Busqueda -->
	</section>
	<!-- /Contenido -->
<?php include('../../components/scripts.php'); ?>
<script type="text/javascript">
	jQuery(document).ready(function() {
	    jQuery('.tabs .tab-links a').on('click', function(e)  {
	        var currentAttrValue = jQuery(this).attr('href');
	        // Show/Hide Tabs
	        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
	        // Change/remove current tab to active
	        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');			 
	        e.preventDefault();
	    });
	});
</script>
</body>
</html>