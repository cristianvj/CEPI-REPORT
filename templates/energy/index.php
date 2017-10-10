<?php
	$pageName = "energy";
	include('../../components/header.php');
?>
<body class="body-energy">

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
					<a class="ancla" href="#industry"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>

		<section id="industry" class="industrial">
			<h2 class="title">One of the lowest industrial emitters of greenhouse gasses</h2>
			<h5>Emissions for the pulp, paper and print sector are declining over time</h5>
			<div id="graficaIndustrial"></div>
			<span>Sources: EEA report, 2017 - Annual European Union Greenhouse gas inventory 1990 - 2015 and inventory report 2017, submission to UNFCCC According to the EEA, in 2015 manufacturing industries in Europe  accounted for 14% of global greenhouse emissions </span>
			<p>The relatively low GHG emissions are notably the consequence of the shift from mechanical to chemical pulp processes driven by market and products evolution, but also of the growing use of less carbon intensive or even carbon neutral sources of energy, like bioenergy, and of investments into state-of-the-art production technologies.
			</p>
			<p>The sector is increasingly energy self-sufficient by using residues and its own process by-products to generate renewable energy in its Combined Heat and Power (CHP) installations and biomass boilers.</p>
		</section>

		<section class="flex progress">
			<div class="colDiv">
				<h2 class="title">SIGNIFICANT PROGRESS HAS BEEN MADE IN THE LAST YEARS</h2>
				<p>Over the past five years, industry has already achieved a reduction of its total (direct and indirect) greenhouse gas emissions by 46% per tonne produced from 1990 to 2016. </p>
			</div>
			<div class="colDiv countCo">
				<h3 id="countCo1">-46%</h3>
				<h3 id="countCo2">2016</h3>
				<h3 id="countCo3">1990</h3>
				<img src="img/Grafico.svg">
			</div>
		</section>

		<section class="flex pulping">
			<h2 class="title">New des pulping technology!</h2>
			<p>An industry consortium is currently working on developing a radically new, sustainable and techno-economically feasible pulping technology for wood based on deep eutectic solvents (DES), a new class of natural solvent which have the unique ability to dissolve wood components at low temperature and atmospheric pressure.</p>
			<p>The technological breakthrough expected through the development of such new DES pulping technology could reduce process energy intensity by at least 40% and investment costs by 50% compared to traditional chemical pulping technology.</p>
			<p>Read more about PROVIDES and DES <a target="blank" href="http://www.providespaper.eu/about/">here.</a></p>
		</section>

		<section class="biggest">
			<p>The European pulp and paper industry is the <span>biggest single industrial user</span> and producer of <span>Renewable energy in the EU</span> today.</p><br><br>
			<p><span>58%</span> of the industry’s total primary annual energy consumption is <span>biomass based.</span></p>

		</section>

		<section class="implementing">
			<h2 class="title">Implementing the paris climate agreement</h2>
			<p>The Paris Agreement to maintain climate change well below 2°C will increase global pressure towards reducing carbon emissions.</p>
			<p>This is why the European paper industry wants to confirm our vision of decarbonising by 80%, while creating 50% more added value, by 2050.</p>
			<p class="panVerde"><a target="_blank" href="https://www.dropbox.com/sh/kava5amd6qxrb7r/AADlUbICEk2OSQofaNrCVLjKa?dl=0">Click here</a> to learn more about our 2050 Roadmap to a low-carbon bioeconomy: Investing in Europe for Industry Transformation.</p>
		</section>

		<section class="future">
			<h2 class="title">Facing the Future: An active role to mitigate climate change and play a big part in the bioeconomy in a resource efficient manner</h2>

			<div class="flex countFuter">
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_1.svg">
						<div class="desFut">
							<p>New production technologies can lead to </p>
							<h2>-7 Millon tonnes CO<span>2</span> by 2050</h2>
						</div>
					</div>
					<h2>Energy Efficiency</h2>
					<p>Process improvements and investments in state-of-the-art technologies (Best available technologies) are expected to continue in the sector, driven both by competitiveness and productivity reasons. The transition to industry 4.0 will also deliver efficiency gains.</p>
				</div>
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_2.svg">
						<div class="desFut">
							<p>Low-to no-carbon energy sources to deliver</p>
							<h2>-8 Millon tonnes CO<span>2</span></h2>
						</div>
					</div>
					<h2>Fuel switch</h2>
					<p>Driven by economic, environmental and political reasons, the industry is in the process of switching from carbon-intensive energy to lower greenhouse gas emitting ones, in particular renewable energy.</p>
				</div>
			</div>
			<div class="flex countFuter">
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_3.svg">
						<div class="desFut">
							<p>Levaraging on-site cogeneration assets</p>
							<h2>-2 Millon tonnes CO<span>2</span></h2>
						</div>
					</div>
					<h2>Demand-side flexibility</h2>
					<p>Having the possibility to adapt our electricity consumption (Demand-side flexibility) offers a range of advantages, such as reduced consumption costs, enhanced generation adequacy and greater accommodation of intermittent renewable energy sources. Provided relevant market and regulatory arrangements are in place, a lot of potential can be realised.</p>
				</div>
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_4.svg">
						<div class="desFut">
							<p>Innovative and disruptive solutions</p>
							<h2>-5 Millon tonnes CO<span>2</span></h2>
						</div>
					</div>
					<h2>Emerging/breakthrough technologies</h2>
					<p>In addition to some of the breakthrough concepts identified in the Two Team Project such as the “Deep Eutectic Solvents” technology now under development, other innovative and disruptive solutions could complement the emission reduction effort by some 5 million tonnes of CO2.</p>
				</div>
			</div>
			<div class="flex countFuter">
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_5.svg">
						<div class="desFut">
							<p>Over the coming 35 years</p>
							<h2>-11 Millon tonnes CO<span>2</span></h2>
						</div>
					</div>
					<h2>Indirect emissions</h2>
					<p>As the European power production will accelerate its decarbonisation, the forest fibre and paper industry’s indirect emissions from purchased electricity will decrease by <b>11 million tonnes over the coming 35 years.</b></p>
				</div>
				<div class="colDiv pdT">
					<div class="flex intFut">
						<img src="img/Icono_6.svg">
						<div class="desFut">
							<p>Transport efficiency and alternative transport fuels</p>
							<h2>-4 Millon tonnes CO<span>2</span></h2>
						</div>
					</div>
					<h2>Transport</h2>
					<p>Emissions reduction will come from the combination of improving transport efficiency and of using alternative transport fuels, like biogas, advanced biofuels, electricity or even fuel cells. This should lead to reducing the sector’s transport footprint by 4 million tonnes of CO2 emissions. </p>
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

</body>
</html>