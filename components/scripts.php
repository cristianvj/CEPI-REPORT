<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo $ruta ?>js/public/app.js"></script>
<?php
	if ($pageName=="home") {
		?>
		<script type="text/javascript" src="<?php echo $ruta ?>js/home/chartSetup.js"></script>
		<?php
	}
?>