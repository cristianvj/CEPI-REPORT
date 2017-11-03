<!-- Content menu -->
<div id="mySidenav" class="sidenav">

	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

	<?php if(isset($pageAdmin)){?>
	<div class="div-item" id="item-bioeconomy">
		<a href="<?php echo $ruta ?>" style="color:#51a332">
			 Log Out
		</a>
	</div>
	<?php } ?>
	<div class="div-item" id="item-home">
		<a href="<?php echo $ruta; if(isset($pageAdmin)){echo 'templates/home-admin';}?>">
			<img  id="icon-home" src="<?php echo $ruta ?>img/public/icons-menu/home.png" alt="">
			Home
		</a>
	</div>
	<div class="div-item" id="item-sustainability">
		<a href="<?php echo $ruta ?>templates/sustainability/index.php">
			<img id="icon-sustainability" src="<?php echo $ruta ?>img/public/icons-menu/sustainability.png" alt="">
			Sustainability Vision
		</a>
	</div>
	<div class="div-item" id="item-snapshot">
		<a href="<?php echo $ruta ?>templates/snapshot<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-snapshot" src="<?php echo $ruta ?>img/public/icons-menu/snapshot.png" alt="">
			Cepi in a Snapshot
		</a>
	</div>
	<div class="div-item" id="item-outlook">
		<a href="<?php echo $ruta ?>templates/outlook<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-outlook" src="<?php echo $ruta ?>img/public/icons-menu/outlook.png" alt="">
			2050 Outlook
		</a>
	</div>
	<div class="div-item" id="item-policy">
		<a href="<?php echo $ruta ?>templates/forest<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-policy" src="<?php echo $ruta ?>img/public/icons-menu/policy.png" alt="">
			Policy Blocks
		</a>
	</div>
	<div class="div-item" id="item-forest">
		<a href="<?php echo $ruta ?>templates/forest<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php" class="div-item-child">
			<img id="icon-forest" src="<?php echo $ruta ?>img/public/icons-menu/forest.png" alt="">
			Forest
		</a>
	</div>
	<div class="div-item" id="item-bioeconomy">
		<a href="<?php echo $ruta ?>templates/bioeconomy<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php" class="div-item-child">
			<img id="icon-bioeconomy" src="<?php echo $ruta ?>img/public/icons-menu/bioeconomy.png" alt="">
			Bioeconomy and Innovation
		</a>
	</div>
	<div class="div-item" id="item-circular">
		<a href="<?php echo $ruta ?>templates/circular<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php" class="div-item-child">
			<img id="icon-circular" src="<?php echo $ruta ?>img/public/icons-menu/circular.png" alt="">
			Circular Economy
		</a>
	</div>
	<div class="div-item" id="item-energy">
		<a href="<?php echo $ruta ?>templates/energy<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php" class="div-item-child">
			<img id="icon-energy" src="<?php echo $ruta ?>img/public/icons-menu/energy.png" alt="">
			Energy and Climate
		</a>
	</div>
	<div class="div-item" id="item-enviroment">
		<a href="<?php echo $ruta ?>templates/environment<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php" class="div-item-child">
			<img id="icon-enviroment" src="<?php echo $ruta ?>img/public/icons-menu/enviroment.png" alt="">
			Environment
		</a>
	</div>
	<div class="div-item" id="item-latest">
		<a href="<?php echo $ruta ?>templates/latest<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-latest" src="<?php echo $ruta ?>img/public/icons-menu/latest.png" alt="">
			All Latest Data
		</a>
	</div>
	<div class="div-item" id="item-practices">
		<a href="<?php echo $ruta ?>templates/practices<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-practices" src="<?php echo $ruta ?>img/public/icons-menu/practices.png" alt="">
			Good Practices
		</a>
	</div>
	<div class="div-item" id="item-glossary">
		<a href="<?php echo $ruta ?>templates/glossary<?php if(isset($pageAdmin)){echo '-admin';}?>/index.php">
			<img id="icon-glossary" src="<?php echo $ruta ?>img/public/icons-menu/glossary.png" alt="">
			Glossary
		</a>
	</div>
</div>
<!-- /Content menu -->