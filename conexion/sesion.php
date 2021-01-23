<?php
session_start();
error_reporting(0);

$varsesion = $_SESSION['user'];
$sesionCorreo = $_SESSION['correo'];
$tiposesion = $_SESSION['tipo'];

	if ($_SESSION['tipo'] == 'profesor') {
		
	}
	if (!isset($varsesion)) {
			header('Location: ../index.php');
			die();
		}	
?>