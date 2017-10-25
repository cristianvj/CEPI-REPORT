<?php 
	$pageName = "home";
	include("components/header.php"); 
?>
	<body class="body-home">
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
					<p><a style="color: #bdbdbd" href="https://www.dropbox.com/s/6yn5gfjlqalrm58/AF_Infografia_A_Thriving_Industry.pdf?dl=0" target="_blank">*Summary Infographic</a></p>
					<p><a style="color: #bdbdbd" href="">*PEF/LCA</a></p>
				</div>
			</div>
			<br>
			<div class="div-circle">
				<div class="img-circle"><!-- Circle CEPI Rotation --></div>
			</div>
		</div>

		<!-- FAB Button -->
		<?php include('components/fab-button.php') ?>
		<!-- FAB Button -->
		
		<?php include('components/scripts.php') ?>
	</body>
</html>
