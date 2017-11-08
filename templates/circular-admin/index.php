<?php
	$pageName = "circular";
	$pageAdmin = true;
	include('../../components/header.php');
?>
<body class="body-circular">

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


		<form>
			<section id="extracting" class="flex extracting">
				<div class="colDiv center">
					<h2 class="title"><input type="text" name="" value="Extracting Full Value of Wood Components"></h2>
					<p>
						<textarea rows="14" >
The life cycle of a paper product is composed of a series of value adding steps, from the extraction of natural resources until the end of the paper product’s life.

In the circular economy, the end of the paper product’s life is reconnected with its production by reusing the already extracted resources which are contained in used products.

Moreover, promoting the use the cascading principle where wood is first used as a raw material to make products, and where recycling is encouraged before the raw material is used to recover energy only when recycling is no longer feasible, is far more economical than burning it immediately for renewable energy.
						</textarea>
					</p>
				</div>
				<div class="colDiv imgRight">
					<img src="img/Grafico.svg">
					<h4 id="countCasc1"><input class="number-s1" type="number" name="" value="1"></h4>
					<h4 id="countCasc2"><input class="number-s1" type="number" name="" value="2.38"></h4>
					<h4 id="countCasc3"><input class="number-s1" type="number" name="" value="1"></h4>
				</div>
			</section>
			<div class="btn-div-green">
				<input class="btn-save-white" type="submit" name="save" value="Save Section">
			</div>
		</form>
		

		<form>
			<section class="worldwide">
				<h2 class="title"><input type="text" name="" value="A worldwide leader IN paper recycling"></h2>
				<div class="flex contWorld">
					<div class="colDiv">
						<h2><input type="text" name="" value="Recovery of european print and paper waste products (CEPI statistics)"></h2>
						<div class="data-chart">

							<h2>Data Chart</h2>
							<label>Potential for further recovery (in %):</label>
							<input type="number" name="" value="6"><br>
							<label>Non-recoverable (in %): </label>
							<input type="number" name="" value="22"><br>
							<label>Recycled (in %): </label>
							<input type="number" name="" value="72">
							
							<h2>Data Chart Recycled</h2>
							<label>Exported (in %):</label>
							<input type="number" name="" value="16"><br>
							<label>Used in Europe (in %): </label>
							<input type="number" name="" value="84">

						</div>
					</div>
					<div class="colDiv txtarea-edit">
						<textarea name="editor1" rows="300">
							<p><b>Paper recycling in Europe reached the record level of 71.5% in 2015,</b> keeping fibres longer in the loop and extending the benefits of their renewable origin. Our industry is now seeking to make another move forward with an enhanced rate of 74% by 2020.</p>
							<p>In some regions, recycling rates reaches 75%, which is likely the practical maximum rate.</p>
							<p>Paper is recycled on average 3,5 times a year in Europe, while over 50% of the raw material for Europe’s paper industry is recycled paper.</p>
							<p>Some paper products cannot be recovered for recycling because they are kept for long periods of time (books) or archived (records); others are destroyed or contaminated when used (e.g. tissue and hygienic paper).</p>
							<p>Paper cannot be recycled indefinitely as fibres get too short and worn out to be useful in creating a new sheet of paper. Hence, virgin fibre grades are needed to continue the cycle. New fibres come from renewable, sustainably-managed forests, continuing the loop.</p>
						</textarea>
						<script>
							CKEDITOR.replace( 'editor1',
							{
				    			language: 'en' 
				    		});
						</script>
					</div>
				</div>
			</section>
			<div class="btn-div-white">
				<input class="btn-save-green" type="submit" name="save" value="Save Section">
			</div>
		</form>

		<footer class="flex">
			<div class="footer-col1" data-anim-type="fade-in-right" data-anim-delay="0">
				<h2>Contact Persons</h2>
				<div class="flex int-ftr">
					<div class="ft-int-col1">
						<p>Industrial Policy Director<br>Bernard Lampard</p>
						<p>Industrial Policy Director<br>Bernard Lampard</p>
					</div>
					<div class="ft-int-col2">
						<p>Statistics Manager<br>Ariane Crèvecouer</p>
						<p>Statistics Manager<br>Ariane Crèvecouer</p>
					</div>
				</div>
			</div>
			<div class="flex footer-col2" data-anim-type="fade-in-left" data-anim-delay="0">
				<h2>2050 ROADMAP</h2>
				<p><a target="_blank" href="https://www.dropbox.com/sh/kava5amd6qxrb7r/AADlUbICEk2OSQofaNrCVLjKa?dl=">Click here</a> to learn more about our 2050 Roadmap to a low- carbon bioeconomy: Investing in Europe for Industry Transformation.</p>
			</div>

			<a class="ancla" href=".bannerForest">
				<img class="footerFlecha" src="<?php echo $ruta; ?>img/public/Boton_Flecha-73.svg">
			</a>
		</footer>

	<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->
	
<?php include('../../components/scripts.php'); ?>


</body>
</html>