<?php
	$pageName = "forest";
	include('../../components/header.php');
?>
<body class="body-forest">

		<header>
			<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
		</header>
		<div class="div-menu">
			<span class="btn-menu" onclick="openNav()">&#9776;</span>
			<?php include('../../components/menu.php'); ?>
		</div>

		<section class="bannerForest">
			<div class="goodPractives animate-in" data-anim-type="fade-in-down">
				<a href="#">Good Practices</a>
				<p><a href="#"><b>Click here</b></a> to download our certification numbers</p>
			</div>
			<div class="txtBanneFors">
				<img onclick="rep();" src="img/btnMusica.svg">
				<h1>The forest<br><span> our call to life</span></h1>
			</div>
			<div class="flex banner-footer">
				<div class="flex angleDown">
					<a class="ancla" href="#forests"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
			<audio preload="auto" id="sonido1">
				<source src="sound/Forest.mp3" type="audio/mp3">
				<source src="sound/Forest.mp3" type="audio/ogg">
			</audio>
		</section>

		<seciton id="forests">
			<h2 class="title">European forests are growing</h2>
			<div class="flex contForest">
				<div class="colDiv flex fullCenter">
					<div class="imgForest">
						<h4 id="count1">44.000</h4>
						<h4 id="count2">1.500</h4>
						<h4 id="count3">2005</h4>
						<h4 id="count4">2006</h4>
					</div>
				</div>
				<div class="colDiv verde">
					<p>Between 2005 and 2015, European forests grew by 44,000 km2 - an area bigger than Switzerland – which amounts to over 1,500 football pitches of forest growth every day!
					<b>Source: FAO data, 2005-2015</b></p>
					 
					<p>European forests today are over 30% larger than in the 1950s.</p>
					 
					<p>In northern Europe, where almost all ancient forests are protected, paper comes from well managed forests where the cycle of planting, growing and logging is carefully controlled.</p>
					 
					<p><b>Responsible forest management is driving Europe’s</b> forest growth. The industry has invested strongly in the use of forest certification schemes such as <b>FSC</b> and <b>PEFC</b> and further voluntary schemes.
					</p>
				</div>
			</div>
		</seciton>

		<section id="seccion3">
			<img class="animate-in" data-anim-type="fade-in-right" src="img/grafica3.gif">
			<div class="flex fullCenter paisaje">
				<img class="parent" src="img/parent.svg">
				<p>Well managed forests provide a natural habitat for wildlife. The European Environment Agency (EEA) has stated that 'Forestry practice in Europe is developing in a way that can be considered good for biodiversity.' All imported pulp to Europe is covered by the EU Timber Regulation which prohibits ports of wood products from illegally harvested timber.</p>
				<img class="parent rotar" src="img/parent.svg">
			</div>
		</section>


		<section id="legally">
			<h2 class="title">Only legally harvested wood from responsibly managed forests</h2>
			<div class="legalCont flex">
				<div class="colDiv">
					<div id="graf1"></div>
					<h3 class="anioTxt cl-verde">99.6%</h3>
					<p class="mxWd">Percentage of wood used by the industry coming from legally harvested forests within the <b>European Union</b></p>
				</div>
				<div class="colDiv">
					<div id="graf2"></div>
					<h3 class="anioTxt cl-verdeC">64.4%</h3>
					<p class="mxWd">Percentage of wood used by the industry coming from from <b>third-party</b> certified, well-managed forests</p>
				</div>
			</div>
		</section>


		<section id="generating">
			<div class="flex contForest">
				<div class="colDiv flex fullCenter animate-in" data-anim-type="fade-in-right">
					<div class="imgForest">
						<h4 id="count6">63%</h4>
					</div>
				</div>
				<div class="colDiv employM">
					<h2>Generating employment in rural areas</h2>
					<p>Forests also have an important economic role beyond providing a renewable resource base as they provide vital income and employment in <b>rural areas</b> and down the forest-based value chain.</p>
				</div>
			</div>
		</section>

		<section id="energy">
			<h2 class="title">A more clever way to use wood than just burning it for energy</h2>
			<div class="flex contForest">
				<div class="colDiv employM">
					<p>Forest biomass should come from legal sources and creating bioenergy from wood should only be considered when the “cascading principle” applies.</p>
 
					<p>This principle promotes the most efficient use of natural resources, optimising value creation and using the material ideally firstly for food, then products and finally for energy.</p>
					 
					<p>To ensure the continuing health and sustainable use of forest raw materials in Europe, solid biomass should only be eligible for subsidies when it is proven to be efficient.</p>
					 
					<p>This cascading principle leads to a situation where every wood fibre is used in average 2,5 times instead of just one, which contributes to resource efficiency and increased value creation for the European society. By-products from the pulp and paper industry are increasingly used in other industries, leading to industrial symbiosis. 
					</p>
				</div>
				<div class="colDiv flex fullCenter">
					<div class="imgForest imgMin animate-in" data-anim-type="fade-in-left">
						<h4 id="count10">1</h4>
						<h4 id="count11">2.38</h4>
						<h4 id="count12">1</h4>
						<h4 class="ttlCascading">Cascading use<br><span>efficient use of natural resources</span></h4>
					</div>
				</div>
			</div>
		</section>

		<section class="latesData">
			<h2>Latest Data</h2>
			<p><a href="#" target="_blank">Click here</a> to see to see our All Latest Data / Want more detailed data? Become a subscriber <a href="http://www.cepi.org/node/13432" target="_blank">here</a></p>
		</section>

		<section id="latest">
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
				<h2>2050 ROADMAP</h2>
				<p><a target="_blank" href="https://www.dropbox.com/sh/kava5amd6qxrb7r/AADlUbICEk2OSQofaNrCVLjKa?dl=">Click here</a> to learn more about our 2050 Roadmap to a low- carbon bioeconomy: Investing in Europe for Industry Transformation.</p>
			</div>

			<a class="ancla" href=".bannerForest">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>

	<!-- /Contenido -->

	<?php include('../../components/scripts.php'); ?>

<script type="text/javascript">
//<![CDATA[
var audio;
function rep(audio){
	audio=document.getElementById('sonido1');
	if (audio.paused == false) {
		audio.pause();
	}else{
		audio.play();
	}
}
//]]>
</script>
</body>
</html>