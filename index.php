<?php 
	$pageName = "home";
	include("components/header.php"); 
?>
	<body>
		<header>
			<div class="div-header">
				<div class="div-logo">
					<img src="<?php echo $ruta ?>/img/public/logo.svg" alt="">
				</div>
				<div class="div-menu">
					<span class="btn-menu" onclick="openNav()">&#9776;</span>
				</div>
			</div>
		</header>

		<!-- Content menu -->
		<div id="mySidenav" class="sidenav">

			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			<div class="div-item" id="item-home">
				<a href="#">
					<img id="icon-home" src="img/public/icons-menu/home.png" alt="">
					Home
				</a>
			</div>
			<div class="div-item" id="item-sustainability">
				<a href="#">
					<img id="icon-sustainability" src="img/public/icons-menu/sustainability.png" alt="">
					Sustainability Vision
				</a>
			</div>
			<div class="div-item" id="item-snapshot">
				<a href="#">
					<img id="icon-snapshot" src="img/public/icons-menu/snapshot.png" alt="">
					Cepi in a Snapshot
				</a>
			</div>
			<div class="div-item" id="item-outlook">
				<a href="#">
					<img id="icon-outlook" src="img/public/icons-menu/outlook.png" alt="">
					2050 Outlook
				</a>
			</div>
			<div class="div-item" id="item-policy">
				<a href="#">
					<img id="icon-policy" src="img/public/icons-menu/policy.png" alt="">
					Policy Blocks
				</a>
			</div>
			<div class="div-item" id="item-forest">
				<a href="#" class="div-item-child">
					<img id="icon-forest" src="img/public/icons-menu/forest.png" alt="">
					Forest
				</a>
			</div>
			<div class="div-item" id="item-bioeconomy">
				<a href="#" class="div-item-child">
					<img id="icon-bioeconomy" src="img/public/icons-menu/bioeconomy.png" alt="">
					Bioeconomy and Innovation
				</a>
			</div>
			<div class="div-item" id="item-circular">
				<a href="#" class="div-item-child">
					<img id="icon-circular" src="img/public/icons-menu/circular.png" alt="">
					Circular Economy
				</a>
			</div>
			<div class="div-item" id="item-energy">
				<a href="#" class="div-item-child">
					<img id="icon-energy" src="img/public/icons-menu/energy.png" alt="">
					Energy and Climate
				</a>
			</div>
			<div class="div-item" id="item-enviroment">
				<a href="#" class="div-item-child">
					<img id="icon-enviroment" src="img/public/icons-menu/enviroment.png" alt="">
					Enviroment
				</a>
			</div>
			<div class="div-item" id="item-latest">
				<a href="#">
					<img id="icon-latest" src="img/public/icons-menu/latest.png" alt="">
					All Latest Data
				</a>
			</div>
			<div class="div-item" id="item-glossary">
				<a href="#">
					<img id="icon-glossary" src="img/public/icons-menu/glossary.png" alt="">
					Glossary
				</a>
			</div>
		</div>
		<!-- /Content menu -->

		<div class="container-home">
			<br>
			<div class="title-home">
				<h1>SUSTAINABILITY <br> REPORT</h1>
				<div class="div-download">
					<br>
					<p><a href="#">Click to download:</a></p>
					<p>*Summary Infographic</p>
					<p>*PEF/LCA</p>
				</div>
			</div>
			<br>
			<div class="div-circle">
				<div class="img-circle"><!-- Circle CEPI Rotation --></div>
			</div>
		</div>

		<!-- FAB Button -->
		<nav class="container-fab"  >
			<a href="#" class="buttons-fab btn-download"><i class="fa fa-download"></i></a>
			<a href="#" class="buttons-fab btn-twitter" ><i class="fa fa-twitter"></i></a>
			<a href="#" class="buttons-fab btn-facebook" ><i class="fa fa-facebook-f"></i></a>
			<a class="buttons-fab btn-share" href="#"><i class="fa fa-share-alt"></i></a>
		</nav>
		<!-- FAB Button -->
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo $ruta ?>/js/public/app.js"></script>
		<script type="text/javascript" src="<?php echo $ruta ?>/js/home/chartSetup.js"></script>
	</body>
</html>
