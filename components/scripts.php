<!-- Jquery -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

<!-- AnimacionJs -->
<script src="<?php echo $ruta; ?>/js/public/jquery.fancybox.min.js"></script>
<script src="<?php echo $ruta; ?>/js/public/animations/appear.min.js" type="text/javascript"></script>
<script src="<?php echo $ruta; ?>/js/public/animations/animations.min.js" type="text/javascript"></script>

<!-- Page -->
<?php
	if ($pageName=="home") {
		?>
		<script type="text/javascript" src="<?php echo $ruta ?>js/home/chartSetup.js"></script>
		<?php
	}else{ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="<?php echo $ruta; ?>templates/<?php echo $pageName; ?>/js/countUp.min.js"></script>
		<!-- Graficas -->
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/drilldown.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="<?php echo $ruta; ?>templates/<?php echo $pageName; ?>/js/chartSetup.js"></script>
		<script src="<?php echo $ruta; ?>templates/<?php echo $pageName; ?>/js/graficas.js"></script>
		<script src="<?php echo $ruta; ?>templates/<?php echo $pageName; ?>/js/tab.js"></script>
		<script src="<?php echo $ruta; ?>templates/<?php echo $pageName; ?>/js/glosary.js"></script>
	<?php
	} 
	?>
<script type="text/javascript" src="<?php echo $ruta ?>js/public/app.js"></script>