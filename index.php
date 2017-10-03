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

		<?php include('components/menu.php'); ?>

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
		
		<?php include('components/scripts.php') ?>
	</body>
</html>
