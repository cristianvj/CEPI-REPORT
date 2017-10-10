<?php
	$pageName = "practices";
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

	<section class="banner">
		<div class="flex intCont">
			<h2 class="title">BORREGAARD</h2>
			<p>Borregaard: Leading a way</p>
			<div class="flex imgSlide">
				<img src="img/logos/Interna_1.png">
				<img src="img/logos/Interna_2.png">
				<img src="img/logos/Interna_3.png">
			</div>
			<p>Norwegian company Borregaard is an example of one of the world’s most
			advanced biorefineries. It uses wood to make bio-chemicals, bio-materials and
			biofuel that can replace oil-based products. The Sarpsborg mill in Norway
			makes speciality cellulose which can end up in products in the construction
			and oil industries, foodstuffs, tablets, cosmetics, filters, hygiene products, textiles
			and paints, to name but some.</p>

			<p>But it does much more than that. The wood’s binding agent, the lignin, is used
			in additives for everything from concrete and textile dyes to batteries and
			fishery products. The most important area of use for lignin products is as an
			additive in concrete. In addition to providing advantages in terms of strength
			and quality, the lignin also means that the water and cement content of the
			concrete can be reduced, resulting in a lower energy need and, not least,
			lower CO2 emissions in the production of cement.</p>

			<p>Lignin is also the source of the flavouring agent vanillin, the world's most used
			taste and flavouring agent. Most of the world's vanillin production is based
			upon petrochemical raw materials and Borregaard is the only producer in the
			world to make vanillin from wood at present.</p>

			<p>Then there’s bioethanol, produced from the sugar in the wood. It can be used
			in the pharmaceutical industry, paints, varnishes, car care products, and as fuel
			in buses. The list goes on...</p>

			<a href="<?php echo $ruta."templates/practices/index.php"?>">GO BACK TO GOOD PRACTICES</a>
		</div>
	</section>
	<!-- /Contenido -->
<?php include('../../components/scripts.php'); ?>

</body>
</html>