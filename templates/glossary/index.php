<?php
	$pageName = "glossary";
	include('../../components/header.php');
?>
<body class="body-glossary">

	<header>
		<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
	</header>
	<div class="div-menu">
		<span class="btn-menu" onclick="openNav()">&#9776;</span>
		<?php include('../../components/menu.php'); ?>
	</div>	

	<section class="banner">
		<div class="flex contFilt">
			<h2 class="title">GLOSSARY</h2>
			<p>Here is a useful glossary with terminology often used in our industry</p>
			<div class="glosary">
			<div class="search">
				<input type="text" placeholder="">
				<i class="fa fa-search buscar" aria-hidden="true"></i>
			</div>
<ul class="accordion">
	<li>
		<a>AFFORESTATION</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
	<li>
		<a>BIODIVERSITY</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
		<li>
		<a>BIOENERGY</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
	<li>
		<a>BIOGEOGRAPHICAL REGIONS</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
	<li>
		<a>BIOMASS</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
	<li>
		<a>CARBON SINK</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
	<li>
		<a>CASE MATERIALS</a>
		<p>Establishment of forest plantations on land that, until then, was not classified as forest. Implies a transformation from non-forest to forest.</p>
	</li>
</ul> <!-- / accordion -->
  
			</div>
	</section>
	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->
	
	<?php include('../../components/scripts.php'); ?>

</body>
</html>