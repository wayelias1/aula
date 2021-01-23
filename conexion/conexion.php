<?php
	$user="id14819884_root"; //id14698536_root;
	$pass="XNqEY\F~Griv3Eu8"; //Z}Oi0^Bs_1m0$/v0;
	$server="localhost";
	$db="id14819884_appdata"; //id14698536_appdata;
	$conex=mysqli_connect($server, $user, $pass, $db) or die ("Error al conectar a la base de datos.".mysqli_error());
	mysqli_select_db($conex, $db);
?>