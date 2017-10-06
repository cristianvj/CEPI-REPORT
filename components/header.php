<?php $ruta = "http://localhost/CEPI-REPORT/"; ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<!-- Global Styles -->
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=0,maximum-scale=1,user-scalable=no">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href= "<?php echo $ruta; ?>css/public/reset.css">
	<link rel="stylesheet" href= "<?php echo $ruta; ?>css/public/animations/animations.min.css">
	<link rel="stylesheet" href= "<?php echo $ruta; ?>css/public/global.css">
	<link rel="stylesheet" href= "<?php echo $ruta; ?>css/public/responsive.css">
	<link rel="stylesheet" href="<?php echo $ruta; ?>css/public/jquery.fancybox.min.css" />
	<!-- Iconos -->
	<link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<!-- HTML5 SHIV -->
	<!--[if lt IE 9]>
	  <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!-- Page -->
	<?php
		
		if($pageName == "home"){
			echo '
				<link rel="stylesheet" href="'.$ruta.'css/'.$pageName.'/thomas.css">
				';	
			echo '
				<link rel="stylesheet" href="'.$ruta.'css/'.$pageName.'/responsive.css">
				';
		}else{
			echo '
				<link rel="stylesheet" href="'.$ruta.'templates/'.$pageName.'/css/slide.css">
				';
			echo '
				<link rel="stylesheet" href="'.$ruta.'templates/'.$pageName.'/css/tab.css">
				';
			echo '
				<link rel="stylesheet" href="'.$ruta.'templates/'.$pageName.'/css/thomas.css">
				';	
			echo '
				<link rel="stylesheet" href="'.$ruta.'templates/'.$pageName.'/css/responsive.css">
				';
		}
		
	?>

<script src="<?php echo $ruta; ?>js/public/modernizr.js"></script>
	<title>Digital CEPI</title>
</head>