<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $ruta ?>js/public/app.js"></script>

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
	}else if($pageName=="snapshot"){ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="<?php echo $ruta; ?>templates/snapshot/js/countUp.min.js"></script>
		<script src="<?php echo $ruta; ?>templates/snapshot/js/chartSetup.js"></script>
	<?php
	} 
	?>
	
<script src="<?php echo $ruta; ?>/js/public/app.js"></script>