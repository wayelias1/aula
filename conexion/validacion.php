<?php
include("conexion.php");
	if(isset($_POST['correo'])){	
	$correo = $_POST['correo'];
	$password = $_POST['pass'];

	if(empty($password)||empty($correo))
  			{
  				echo '<p>error el campo esta vacio</p>';
  				die();
  			} 

	$consulta = "SELECT user,correo,pass,tipo FROM usuarios WHERE correo = '$correo' AND pass = '$password'";
	$resultado = mysqli_query($conex, $consulta);	
	$filas = mysqli_num_rows($resultado);

	session_start();
	while ($filasx = mysqli_fetch_assoc($resultado)) {
		$_SESSION['user'] = $filasx['user'];
		$_SESSION['tipo'] = $filasx['tipo'];
	}
	// el print_r imprime el resultado que da una variable
	//print_r($resultado);
	//print_r($consulta);
	//print_r($filasx);
	//die();

	if($filas > 0 ) {
		$_SESSION['correo'] = $correo;
		//session_start();
        header("Location: vistas/tablatarea.php");
        die();
}
	else{
		echo "<label>El correo y/o contraseña son incorrectos</label>";
	}
}
?>