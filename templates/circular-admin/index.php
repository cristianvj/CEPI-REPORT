<?php
	$pageName = "circular";
	$pageAdmin = true;
	include('../../components/header.php');
?>
<body class="body-circular">

		<header>
			<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
		</header>
		<section class="admin">
			<h1>Admin Circular Economy</h1>
		</section>
		<form>
			<section id="extracting" class="flex extracting">
				<div class="colDiv">
					<h2 class="title"><input type="text" name="" placeholder="Extracting Full Value of Wood Components"></h2>
					<p><textarea placeholder="Write here"></textarea></p>
				</div>
				<div class="colDiv imgRight">
					<img src="img/Grafico.svg">
					<h4 id="countCasc1"><input type="number" name="" placeholder="1"></h4>
					<h4 id="countCasc2"><input type="number" name="" placeholder="2.38"></h4>
					<h4 id="countCasc3"><input type="number" name="" placeholder="1"></h4>
				</div>
			</section>
		</form>
		<div class="div-menu">
			<span class="btn-menu" onclick="openNav()">&#9776;</span>
			<?php include('../../components/menu.php'); ?>
		</div>
		

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

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->
	
<?php include('../../components/scripts.php'); ?>


</body>
</html>