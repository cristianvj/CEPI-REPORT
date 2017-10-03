<?php $ruta = "http://localhost:8080/CEPI-REPORT/" ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0,maximum-scale=1,user-scalable=no">
		<title>CEPI HOME</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href= "<?php echo $ruta ?>css/public/reset.css">
	<link rel="stylesheet" href= "<?php echo $ruta ?>css/public/animations/animations.min.css">
	<link rel="stylesheet" href= "<?php echo $ruta ?>css/public/global.css">
	<link rel="stylesheet" href= "<?php echo $ruta ?>css/public/responsive.css">
	<?php
		if($pageName=="home"){
			echo '<link rel="stylesheet" href="'.$ruta.'css/home/thomas.css">';	
			echo '<link rel="stylesheet" href="'.$ruta.'css/home/responsive.css">';
		}
	?>