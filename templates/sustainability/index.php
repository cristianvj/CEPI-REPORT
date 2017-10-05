<?php
	$pageName = "sustainability";
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
		<section class="flex bannerHome">
			<div class="pleft colBanHome">
				<h1>OUR VISION AND THE 2050 ROADMAP TO A LOW-CARBON BIOECONOMY</h1>
				<p>At CEPI we know that the future is made up of the decisions we take today. The 2050 Roadmap traces the path to guide those decisions and constitutes our sustainability vision.</p>
			</div>
			<div class="colBanHome animate-in" data-anim-type="fade-in-left" style="text-align: center;">
				<a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
					<img src="img/video.jpg">
				</a>
			</div>

		</section>
	
		
		<footer class="flex">
			<div class="footer-col1 animate-in" data-anim-type="fade-in-up">
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
			<div class="flex footer-col2 animate-in" data-anim-type="fade-in-up">
				<h2>2050 ROADMAP</h2>
				<p><a target="_blank" href="https://www.dropbox.com/sh/kava5amd6qxrb7r/AADlUbICEk2OSQofaNrCVLjKa?dl=">Click here</a> to learn more about our 2050 Roadmap to a low- carbon bioeconomy: Investing in Europe for Industry Transformation.</p>
			</div>

			<a class="ancla" href="#bannerSec">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>

	<!-- /Contenido -->

	<?php include('../../components/scripts.php'); ?>	

</body>
</html>