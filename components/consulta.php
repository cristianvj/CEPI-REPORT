<?php 
	include("conexion.php");

	$con = mysql_connect($host, $user, $pw) or die ("problemas con server");
	mysql_select_db($db, $con) or die ("Problemas con bd");

	$registro = mysql_query("SELECT * FROM tb_circular") or die("Problemas en consulta".mysql_error());
?>