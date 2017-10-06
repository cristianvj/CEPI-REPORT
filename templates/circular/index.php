<?php
	$pageName = "circular";
	include('../../components/header.php');
?>
<body>

		<header>
			<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
		</header>
		<div class="div-menu">
			<span class="btn-menu" onclick="openNav()">&#9776;</span>
			<?php include('../../components/menu.php'); ?>
		</div>	

		<section class="bannerForest">
			<div class="goodPractives">
				<a href="#">Good Practices</a>
			</div>
			<div class="flex banner-footer">
				<div class="flex angleDown">
					<a class="ancla" href="#extracting"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>

		<section id="extracting" class="flex extracting">
			<div class="colDiv">
				<h2 class="title">Extracting Full Value of Wood Components</h2>
				<p>The life cycle of a paper product is composed of a series of value adding steps, from the extraction of natural resources until the end of the paper product’s life.</p>
				<p>In the circular economy, the end of the paper product’s life is reconnected with its production by reusing the already extracted resources which are contained in used products.</p>
				<p>Moreover, promoting the use the cascading principle where wood is first used as a raw material to make products, and where recycling is encouraged before the raw material is used to recover energy only when recycling is no longer feasible, is far more economical than burning it immediately for renewable energy.</p>
			</div>
			<div class="colDiv imgRight">
				<img src="img/Grafico.svg">
				<h4 id="countCasc1">1</h4>
				<h4 id="countCasc2">2.38</h4>
				<h4 id="countCasc3">1</h4>
			</div>
		</section>


		<section class="worldwide">
			<h2 class="title">A worldwide leader IN paper recycling</h2>
			<div class="flex contWorld">
				<div class="colDiv">
					<h2>Recovery of european print and paper waste products (CEPI statistics)</h2>
					<p class="vwLands">view graph in landscape orientation</p>
					<div id="recoveryGraf"></div>
				</div>
				<div class="colDiv">
					<p><b>Paper recycling in Europe reached the record level of 71.5% in 2015,</b> keeping fibres longer in the loop and extending the benefits of their renewable origin. Our industry is now seeking to make another move forward with an enhanced rate of 74% by 2020.</p>
					<p>In some regions, recycling rates reaches 75%, which is likely the practical maximum rate.</p>
					<p>Paper is recycled on average 3,5 times a year in Europe, while over 50% of the raw material for Europe’s paper industry is recycled paper.</p>
					<p>Some paper products cannot be recovered for recycling because they are kept for long periods of time (books) or archived (records); others are destroyed or contaminated when used (e.g. tissue and hygienic paper).</p>
					<p>Paper cannot be recycled indefinitely as fibres get too short and worn out to be useful in creating a new sheet of paper. Hence, virgin fibre grades are needed to continue the cycle. New fibres come from renewable, sustainably-managed forests, continuing the loop.</p>
				</div>
			</div>
		</section>

		<section class="fostering">
			<h2 class="title">Fostering a European network for industrial symbiosis</h2>
			<p>When different organisations get together in a network to foster eco-innovation and long-term culture change, it is called industrial symbiosis.</p>
			<p>Creating and sharing knowledge through these networks means different parts of the supply chain can share their expertise and together create new solutions for the future which they might not have thought up on their own.</p>
			<p>What all synergies have in common is that they reduce costs and generate new value for the companies involved, as well as creating significant environmental benefits such as reduced landfill and greenhouse gases. In addition, the synergies generated through economic activity have further social benefits with the creation of new businesses and jobs.</p>
			<div class="imgFostering">
				<h3 id="countFost1">45%</h3>
				<h3 id="countFost2">25%</h3>
				<h3 id="countFost3">30%</h3>
				<a href="img/unnamed.png" data-fancybox="images" data-caption="Fostering a European network">
				<img src="img/unnamed.jpg">
				</a>
			</div>
		</section>

		<section class="paper">
			<p>The paper and board production process, especially when carried out with paper for recycling as the raw material, leads to the generation of large amounts of side streams --mainly sludge, rejects and process water.</p>
			<p>The REFFIBRE PROJECT (2014-2016) identified a number of side stream valorisation opportunities, either already on the market or in various stages of development. Find out more <a target="_blank" href="http://reffibre.eu/news/watch-the-video.html">here.</a></p>
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


</body>
</html>