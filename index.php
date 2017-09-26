<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CEPI HOME</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/public/base.css">
	<link rel="stylesheet" href="css/home/baseInterna.css">
	<body>
		<header>
			<div class="div-header">
				<div class="div-logo">
					<img src="img/public/logo.svg" alt="">
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
					<img src="img/public/icon.png" alt="">
					Home
				</a>
			</div>
			<div class="div-item" id="item-sustainability">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					Sustainability Vision
				</a>
			</div>
			<div class="div-item" id="item-snapshot">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					Cepi in a Snapshot
				</a>
			</div>
			<div class="div-item" id="item-outlook">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					2050 Outlook
				</a>
			</div>
			<div class="div-item" id="item-policy">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					Policy Blocks
				</a>
			</div>
			<div class="div-item" id="item-forest">
				<a href="#" class="div-item-child">
					<img src="img/public/icon.png" alt="">
					Forest
				</a>
			</div>
			<div class="div-item" id="item-bioeconomy">
				<a href="#" class="div-item-child">
					<img src="img/public/icon.png" alt="">
					Bioeconomy and Innovation
				</a>
			</div>
			<div class="div-item" id="item-circular">
				<a href="#" class="div-item-child">
					<img src="img/public/icon.png" alt="">
					Circular Economy
				</a>
			</div>
			<div class="div-item" id="item-energy">
				<a href="#" class="div-item-child">
					<img src="img/public/icon.png" alt="">
					Energy and Climate
				</a>
			</div>
			<div class="div-item" id="item-enviroment">
				<a href="#" class="div-item-child">
					<img src="img/public/icon.png" alt="">
					Enviroment
				</a>
			</div>
			<div class="div-item" id="item-latest">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					All Latest Data
				</a>
			</div>
			<div class="div-item" id="item-glossary">
				<a href="#">
					<img src="img/public/icon.png" alt="">
					Glossary
				</a>
			</div>
		</div>
		<!-- /Content menu -->

		<div class="container-home">
			<div class="title-home">
				<h1>SUSTAINABILITY <br> REPORT</h1>
			</div>
			<br>
			<div class="img-circle"><!-- Circle CEPI Rotation --></div>
			<div class="div-download">
				<br>
				<p><a href="#">Click to download:</a></p>
				<p>*Summary Infographic</p>
				<p>*PEF/LCA</p>
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

		<script type="text/javascript" src="js/home/chartSetup.js"></script>

	</body>
</html>
