<?php
	include '../conexion/conexion.php';
		if(isset($_POST['correo'])){
			$correo = $_POST['correo'];
				$seleccion = "SELECT user,correo FROM usuarios WHERE correo = '$correo'";
				$resultado1 = mysqli_query($conex, $seleccion);	
				$filas = mysqli_num_rows($resultado1);
				if ($filas > 0 ) {
					$seleccion2 = "SELECT fri_email FROM friends WHERE correo = '$correo'";
					
				}
				else{
					//$agregar= "INSERT INTO friends(fri_email, amigos) VALUES ($sesionCorreo', '$correo')";
					//$resultado2 = mysqli_query($conex, $sql);
				}
				//$amigo = $correo.',';
				//$agregar = "INSERT INTO usuarios(friends) VALUES ('$amigo')' WHERE user = '$varsesion'";
				//$resultado2 = mysqli_query($conex, $agregar);
				//if(!isset($correo)) { echo "<p>No existe este usuario</p>";}
       			
       		
       	}

       							
       				
       	//if (isset($varsesion)) {

			//$consulta = "SELECT friends FROM usuarios WHERE user = '$varsesion'";
			//$resultado = mysqli_query($conex, $consulta);
       		//while ($myString = mysqli_fetch_assoc($resultado)) {
       	 		//$amigos = explode(',',$myString['friends']);

       	 		//foreach ($amigos as $conteo) {
       	 			
       	 		//	echo '<div class="mt-3 ml-3"><img  style="height: 40px; width: 50px; border-radius:50%;" //src="../img/unnamed.jpg"><label class="ml-2">'.$conteo.'</label></div>'; 
       	 		//}
       	 	//} 
       	//}	//msqli_free_result($resultado);
?>	