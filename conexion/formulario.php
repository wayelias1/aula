<?php
include("conexion.php");
	if(isset($_POST['user'])){
		$usuario= $_POST['user'];
		$correo= $_POST['correo'];
		$pass= $_POST['pass'];
		$tipo = $_POST['rol'];

		//print_r($_POST);
		//die();

		if(empty($usuario) || empty($correo) || empty($pass))
  			{
  				header("Location: ../registro.php");
  				echo '<span>error el campo esta vacio </span>';
  				die();
  			} 	
  		if (isset($_POST['correo'])) {
  			$correos = array('@gmail.com','@hotmail.com','@yahoo.com','@outlook.es');
  			$leer = substr($_POST['correo'], strrpos($_POST['correo'], '@'));
  			if (in_array($leer, $correos)){
				$sql= "INSERT INTO usuarios(user, correo, pass, tipo) VALUES ('$usuario', '$correo', '$pass','$tipo')";
				$resultador = mysqli_query($conex, $sql);

				if($resultador){
     	 			header("Location: ../login.php");
     	   	 			echo "<div><p>¡Te registraste con exito!</p></div>";
				} 
				else{
					//printf("errormesage: %s\n", mysqli_error($conex));
					header("Location: ../registro.php");
    				echo "<span>Error en el registro</span>";
    				die();
				}
			}
			else{
				header("Location: ../registro.php");
				echo "<span>Hay errores en los campos</span>";
				die();
			}
			mysqli_close($conex);	
		}
	}		
?>	