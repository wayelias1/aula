<?php
	include 'conexion.php';
		
			//echo"<div class='notific'><div>
 			//		<img src='../img/unnamed.jpg'><p>".$nombre."</p></div>
 			//		<p>$mensaje</p>
			//		<a src='../archivos/".$nombreArchivo."'></a>
 			//	</div>";
		
//	if ($dir = opendir($directorio)) {
// 			while ($archivo = readdir($dir)) {
// 				if ($archivo != '.' && $archivo !='..') {
// 					$mostrar = "SELECT nombre,mensaje,archivo FROM tablatarea";
// 					$muestraArchivo = mysqli_query($conex, $mostrar);
// 					$filas = mysqli_num_rows($muestraArchivo);
// 					while($filasx = mysqli_fetch_assoc($muestraArchivo)) {
// 						$filasx['nombre'] = $nombre;
//						$filasx['mensaje'] = $mensaje;
//						$filasx['archivo'] = $marchivo;
// 					}
// 						if($filas > 0 && $archivo = $marchivo){
//						$contArchivos++;
 //						echo "Archivo: <b>".$archivo."</b><br>";
 //						echo "<div class='notific'><div>
 //						<img src='../img/unnamed.jpg'><p>".$nombre."</p></div>
 //						<p>$mensaje</p>
// 						<a src='../archivos/".$archivo."'></a>
// 						</div>";
// 						}
// 				}	
// 			}
// 			//echo "Total de archivos: <b>$contArchivos</b>";
// 		}
?>