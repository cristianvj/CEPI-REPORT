<?php
	$pageName = "practices";
	include('../../components/header.php');
?>
<body class="body-practices">

	<header>
		<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
	</header>
	<div class="div-menu">
		<span class="btn-menu" onclick="openNav()">&#9776;</span>
		<?php include('../../components/menu.php'); ?>
	</div>	

	<section class="banner">
		<div class="flex contFilt">
			<h2 class="title">Good Practices</h2>
			<p>Type:</p>
			<!-- Filtro -->
			<div class="cont_select_center">
			<div class="select_mate" data-mate-select="active" >
				<select name="" onclick="return false;" id="">
					<option value="">All</option>
					<option value="1">Forest</option>
					<option value="2" >Bioeconomy and Innovation</option>
					<option value="3">Circular Economy</option>
					<option value="4">Energy and Climate</option>
					<option value="5">Enviroment</option>
				</select>
				<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
				    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
				    <path d="M0-.75h24v24H0z" fill="none"/>
				</svg></span>
				<div class="cont_list_select_mate">
				  <ul class="cont_select_int">  </ul> 
				</div>
			  </div>
			</div>
			<!-- /Filtro -->
		</div>
		<!-- Resultado Busqueda -->
		<div class="flex contBusqueda">
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
			<a href="interna.php">
				<div class="itemEmpresa">
					<img src="img/logos/1.png">
					<h2>Borregaard</h2>
					<p>Borregaard: Leading the way</p>
				</div>
			</a>
		</div>
		<!-- Resultado Busqueda -->
	</section>
	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->

	<?php include('../../components/scripts.php'); ?>
</body>
</html>