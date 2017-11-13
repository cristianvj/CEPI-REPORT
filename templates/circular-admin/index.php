<?php
	$pageName = "circular";
	$pageAdmin = true;
	include('../../components/header.php');
	include('../../components/consulta.php');
	$reg = mysql_fetch_array($registro);
?>
<body class="body-circular">
	<form action="<?php echo $ruta; ?>components/update.php" method="POST">
		<header>
			<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
		</header>

		<div class="div-menu">
			<span class="btn-menu" onclick="openNav()">&#9776;</span>
			<?php include('../../components/menu.php'); ?>
		</div>

		<section class="admin">
			<h1>Admin Circular Economy</h1>
		</section>


		<section class="bannerForest">
			<div class="flex banner-footer">
				<div class="flex angleDown">
					<a class="ancla" href="#extracting"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>


		
			<section id="extracting" class="flex extracting">
				<div class="colDiv center">
					<h2 class="title">
						<input type="text" value="<?php echo $reg['scc_extracting_title']; ?>" name="txt_extracting_title">
					</h2>
					<p>
						<textarea rows="20" name="txa_extracting_content">
<?php echo $reg['scc_extracting_content']; ?>
						</textarea>
						<script>
							CKEDITOR.replace( 'txa_extracting_content',
							{
				    			language: 'en' 
				    		});
						</script>
					</p>
				</div>
				<div class="colDiv imgRight">
					<img src="img/Grafico.svg">
					<h4 id="countCasc1">
						<input class="number-s1" type="number" step="any" name="scc_extracting_nro_one" value="<?php echo $reg['scc_extracting_nro_one']; ?>">
					</h4>
					<h4 id="countCasc2">
						<input class="number-s1" type="number" step="any" name="scc_extracting_nro_two" value="<?php echo $reg['scc_extracting_nro_two']; ?>">
					</h4>
					<h4 id="countCasc3">
						<input class="number-s1" type="number" step="any" name="scc_extracting_nro_tree" value="<?php echo $reg['scc_extracting_nro_tree']; ?>">
					</h4>
				</div>
			</section>

			<section class="worldwide">
				<h2 class="title">
					<input type="text" name="scc_worldwide_title" value="<?php echo $reg['scc_worldwide_title']; ?>">
				</h2>
				<div class="flex contWorld">
					<div class="colDiv">
						<h2>
							<input type="text" name="scc_worldwide_subtitle" value="<?php echo $reg['scc_worldwide_subtitle']; ?>">
						</h2>
						<div class="data-chart">

							<h2>Data Chart</h2>
							<label>Potential for further recovery (in %):</label>
							<input type="number" step="any" name="scc_worldwide_chart_one" value="<?php echo $reg['scc_worldwide_chart_one']; ?>"><br>
							<label>Non-recoverable (in %): </label>
							<input type="number" step="any" name="scc_worldwide_chart_two" value="<?php echo $reg['scc_worldwide_chart_two']; ?>"><br>
							<label>Recycled (in %): </label>
							<input type="number" step="any" name="scc_worldwide_chart_tree" value="<?php echo $reg['scc_worldwide_chart_tree']; ?>">
							
							<h2>Data Chart Recycled</h2>
							<label>Exported (in %):</label>
							<input type="number" step="any" name="scc_worldwide_chart_recycled_one" value="<?php echo $reg['scc_worldwide_chart_recycled_one']; ?>"><br>
							<label>Used in Europe (in %): </label>
							<input type="number" step="any" name="scc_worldwide_chart_recycled_two" value="<?php echo $reg['scc_worldwide_chart_recycled_two']; ?>">

						</div>
					</div>
					<div class="colDiv txtarea-edit">
						<textarea name="scc_worldwide_content" rows="300">
<?php echo $reg['scc_worldwide_content']; ?>
						</textarea>
						<script>
							CKEDITOR.replace( 'scc_worldwide_content',
							{
				    			language: 'en' 
				    		});
						</script>
					</div>
				</div>
			</section>

			<section class="fostering">
				<h2 class="title"><input type="text" name="scc_fostering_title" value="<?php echo $reg['scc_fostering_title']; ?>"></h2>
				<textarea rows="10" name="scc_fostering_content">
<?php echo $reg['scc_fostering_content']; ?>
				</textarea>
				<script>
							CKEDITOR.replace( 'scc_fostering_content',
							{
				    			language: 'en' 
				    		});
						</script>
				<div class="imgFostering">
					<h3 id="countFost1"><input type="number" step="any" name="scc_fostering_nbr_two" value="<?php echo $reg['scc_fostering_nbr_two']; ?>">%</h3>
					<h3 id="countFost2"><input type="number" step="any" name="scc_fostering_nbr_one" value="<?php echo $reg['scc_fostering_nbr_one']; ?>">%</h3>
					<h3 id="countFost3"><input type="number" step="any" name="scc_fostering_nbr_tree" value="<?php echo $reg['scc_fostering_nbr_tree']; ?>">%</h3>
					<a href="img/unnamed.png" data-fancybox="images" data-caption="Fostering a European network">
					<img src="img/unnamed.jpg">
					</a>
				</div>
			</section>

			<section class="paper">
				<textarea name="scc_fostering_content_two">
					<?php echo $reg['scc_fostering_content_two']; ?>
				</textarea>
				<script type="text/javascript">
					CKEDITOR.replace( 'scc_fostering_content_two',
							{
				    			language: 'en' 
				    		});
				</script>
			</section>

			<section class="latesData">
				<h2>Latest Data</h2>
				<textarea name="scc_latest_content" rows="10">
					<?php echo $reg['scc_latest_content']; ?>
				</textarea>
				<script type="text/javascript">
					CKEDITOR.replace( 'scc_latest_content',
						{
			    			language: 'en' 
			    		});
				</script>
				<div class="chart-container">
					<div class="grafica">
						<h2>Data Chart</h2>
						<h2><input type="" name="scc_latest_chart_title" value="<?php echo $reg['scc_latest_chart_title']; ?>"></h2>
						<p><input type="" name="scc_latest_chart_subtitle" value="<?php echo $reg['scc_latest_chart_subtitle']; ?>"></p>
						<label>EU-28+2 (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_one" value="<?php echo $reg['scc_latest_chart_european_one']; ?>"><br><br>
						<label>CEPI Countries (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_two" value="<?php echo $reg['scc_latest_chart_european_two']; ?>"><br><br>
						<label>North America (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_tree" value="<?php echo $reg['scc_latest_chart_european_tree']; ?>"><br><br>
						<label>Total World (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_four" value="<?php echo $reg['scc_latest_chart_european_four']; ?>"><br><br>
						<label>Asia (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_five" value="<?php echo $reg['scc_latest_chart_european_five']; ?>"><br><br>
						<label>Latin America (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_six" value="<?php echo $reg['scc_latest_chart_european_six']; ?>"><br><br>
						<label>Africa (in %):</label>
						<input type="number" step="any" name="scc_latest_chart_european_seven" value="<?php echo $reg['scc_latest_chart_european_seven']; ?>"><br><br>
					</div>
				</div>
			</section>


		<section id="latest">
			<h2 class="title"><input type="" name="scc_position_title" value="<?php echo $reg['scc_position_title']; ?>"></h2>
		</br></br>
			<div class="flex contForest">
				<div class="colDiv textarea">
					<textarea name="scc_position_content_one">
						<?php echo $reg['scc_position_content_one']; ?>
					</textarea>
				</div>
				<div class="colDiv textarea">
					<textarea name="scc_position_content_two">
						<?php echo $reg['scc_position_content_two']; ?>
					</textarea>
				</div>
			</div>
			<script type="text/javascript">
				CKEDITOR.replace( 'scc_position_content_one',
					{
		    			language: 'en' 
		    		});
				CKEDITOR.replace( 'scc_position_content_two',
					{
		    			language: 'en' 
		    		});
			</script>
		</section>

		<footer class="flex">
			<div class="footer-col1" data-anim-type="fade-in-right" data-anim-delay="0">
				<textarea name="footer_content_one">
<?php echo $reg['footer_content_one']; ?>
				</textarea>
			</div>
			<div class="flex footer-col2" data-anim-type="fade-in-left" data-anim-delay="0">
				<textarea name="footer_content_two">
<?php echo $reg['footer_content_two']; ?>
				</textarea>
			</div>
			<script type="text/javascript">
				CKEDITOR.replace( 'footer_content_one',
					{
		    			language: 'en' 
		    		});
				CKEDITOR.replace( 'footer_content_two',
					{
		    			language: 'en' 
		    		});
			</script>
			<a class="ancla" href=".bannerForest">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>
		<div class="btn-div-green">
			<input class="btn-save-white" type="submit" value="Save Section">
		</div>
	</form>

	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->
	
<?php include('../../components/scripts.php'); ?>


</body>
</html>