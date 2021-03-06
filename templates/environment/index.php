<?php
	$pageName = "environment";
	include('../../components/header.php');
?>
<body class="body-environment">

	<header>
		<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
	</header>
	<div class="div-menu">
		<span class="btn-menu" onclick="openNav()">&#9776;</span>
		<?php include('../../components/menu.php'); ?>
	</div>	

	<!-- Contenido -->
		<!-- Banner -->
		<section class="flex banner" id="bannerSec">
			<div class="ImgFlash"></div>
			<div class="flex banner-footer">
				<div class="flex angleDown">
					<a class="ancla" href="#seccion2"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="googPractive">
				<a href="<?php echo $ruta."templates/practices/index.php"; ?>">Good Practices</a>
			</div>
		</section>
		<!-- /Banner -->
		<!-- Seccion 2 -->
		<section id="seccion2">	
			<p>Sustainability is central to all European paper industry activities and a large proportion of our resources are devoted to ensure that the industry minimises its environmental impacts. For more than a decade, the European paper industry has invested in environmental improvements. By systematically managing the environmental impact of pulp and paper manufacturing, along with that of related activities and the products and services produced, overall environmental performance continually improves. Within the CEPI membership, 89% of production capacity is certified or registered according to the internationally recognised environmental management standards ISO 14001 and EMAS.</p>
		</section>
		<!-- /Seccion 2 -->

		<section class="producing">
			<div class="contProduc">
				<h2 class="title">Producing more with less</h2>
				<p>CEPI figures show that there has been a relative decoupling of economic growth and volume of paper consumption since 2000. The industry’s focus on designing lighter paper, producing ‘more with less’, has contributed greatly to this development. In short, paper of equivalent or even superior quality is now being produced using fewer resources. The continuous reduction of SOx emissions in the last years correlates with the fuel mix change happening in the sector, e.g. the higher shares of natural gas and biomass use. </p>
			</div>
		</section>

		<section class="environment">
			<h2 class="title">92% of water used is returned to the environment cleaner than before</h2>
			<p><b>Water Profile for the Pulp and Paper Industry- CEPI Countries 2015</b><br>Million M3</p>
			<div class="imgEnvironment">
				<h3 id="countEnvir1">3056</h3>
				<h3 id="countEnvir2">50</h3>
				<h3 id="countEnvir3">6</h3>
				<h3 id="countEnvir4">3049</h3>
				<h3 id="countEnvir5">9</h3>
				<h3 id="countEnvir6">11</h3>
				<h3 id="countEnvir7">270</h3>
				<h3 id="countEnvir8">227</h3>
				<h3 id="countEnvir9">4</h3>
				<h3 id="countEnvir10">121</h3>
				<h3 id="countEnvir11">328</h3>
				<img src="img/grafico.svg">
			</div>
			<div class="tablaEdit">
				<p>Total Water Abstracted....................... 3664</p>
				<p>Water in Products................................. 59</p>
				<p>Total Effluents........................................ 3425</p>
				<p>Water in Residues and Products........ 13</p>
				<p>Evaporation.......................................... 285</p>
				<p>Percentage......................................... 7.7%</p>
			</div>
		</section>
		
		<section class="supporting">
			<div class="contSuport">
				<h2 class="title">Supporting safe use of chemicals, minerals and enzymes to improve paper product’s functionalities</h2>
				<p><b>Chemicals</b> are used in the paper industry in different parts of the pulp and paper making process. They can be divided into three main areas: Process Chemicals, Functional Chemicals and Coating Chemicals. These chemicals have different functions and different influence on the sustainability of the paper product.</p>
				<img class="imgEnvir" src="img/Grafico-15.svg">
				<p><b>Minerals</b> used in papermaking include talc, kaolin and bentonite. Paper and board consist predominantly of cellulose fibres, naturally-occurring minerals such as calcium carbonate and natural polymers such as starch. The increasing use of calcium carbonate is especially significant: in 2012 more than half of the non-fibrous material used in the paper industry was calcium carbonate. The increase in use of non-fibrous raw materials has allowed for a more efficient use of fibres and improved functionalities of finished paper products.</p>
			</div>
		</section>

		<section class="latesData">
			<h2>Latest Data</h2>
			<p><a href="<?php echo $ruta ?>templates/latest/index.php">Click here</a> to see to see our All Latest Data / Want more detailed data? Become a subscriber <a href="http://www.cepi.org/node/13432" target="_blank">here</a></p>

			<p class="show-sm message-orientation">View graphs in Landscape Orientation</p>

			<div class="chart-container show-md">
				<div class="grafica" id="grafica1"></div>
				<div class="grafica" id="grafica2"></div>
				<div class="grafica" id="grafica3"></div>
			</div>

		</section>

		<!-- Latest -->
		<section id="latest">
			<br><br>
			<h2 class="title">Latest position papers</h2>
			<div class="flex contForest">
				<div class="colDiv">
					<p><b>17.oct.2016</b><br><br>
					<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</a></p>
				</div>
				<div class="colDiv">
					<p><b>17.oct.2016</b><br><br>
					<a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</a></p>
				</div>
			</div>
		</section>
		<!-- /Latest -->
		
		<footer class="flex">
			<div class="footer-col1" data-anim-type="fade-in-right" data-anim-delay="0">
				<h2>Contact Persons</h2>
				<div class="flex int-ftr">
					<div class="ft-int-col1">
						<p>Industrial Policy Director<br>Bernard Lampard</p>
						<p>Industrial Policy Director<br>Bernard Lampard</p>
					</div>
					<div class="ft-int-col2">
						<p>Statistics Manager<br>Ariane Crèvecouer</p>
						<p>Statistics Manager<br>Ariane Crèvecouer</p>
					</div>
				</div>
			</div>
			<div class="flex footer-col2" data-anim-type="fade-in-left" data-anim-delay="0">
				<h2>Data Quality</h2>
				<p>Ernst & Young issued a limited <a target="_blank" href="http://digibook.digi-work.com/Digibooks.aspx/Get/cepi/1521/2015_Assurance_Statement_for_Webpdf">assurance statement</a> on the data quality rating that CEPI carried out on its core indicators.<br><br>To download the statement and other statistics of our performance please go to <a target="_blank" href="http://www.cepi.org/topics/statistics">www.cepi.org/topics/statistics.</a> You can also request your own paper copy of the statement by sending an email to <a id="ftrEnlace" href="mailto:mail@cepi.org">mail@cepi.org.</a></p>
			</div>

			<a class="ancla" href="#bannerSec">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>

	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->

<?php include('../../components/scripts.php'); ?>	
</body>
</html>