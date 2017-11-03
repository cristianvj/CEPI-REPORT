<?php 
	$pageName = "login";
	$pageAdmin = true;
	include("../../components/header.php"); 
?>
	<body class="body-login">
		<header>
			<div class="div-header">
				<div class="div-logo">
					<img src="<?php echo $ruta ?>/img/public/logo.svg" alt="">
				</div>
			</div>
		</header>

		<?php include('../../components/menu.php'); ?>

		<div class="container">
			<br>
			<div class="title-home">
				<h1>Log In</h1>
				<br>
				<div class="div-form">
					<form class="form-login" action="<?php echo$ruta?>templates/circular-admin/index.php" method="POST">
						<div class="div-input">
							<label>User Name:</label><br><br>
							<input class="input" type="text" name="user">
						</div>
						<div class="div-input">
							<label>Password:</label><br><br>
							<input class="input" type="password" name="pw">
						</div>
						<input class="button-login" type="submit" name="btn-login" value="Log In">
					</form>
				</div>
			</div>
			<br>
			<div class="div-circle">
				<div class="img-circle"><!-- Circle CEPI Rotation --></div>
			</div>
		</div>
		
		<?php include('../../components/scripts.php') ?>
	</body>
</html>
