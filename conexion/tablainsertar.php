<?php
	include 'conexion.php';
	if (isset($_POST['submit'])) {
		if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
			//creamos las variables para subir a la db
			$formatos = array('.jpg','.png','.docx','.pdf','.xlsx','.pptx');
			$ruta = "../archivos/";
			$nombreArchivo = trim($_FILES['archivo']['name']);//eliminamos espacios en blanco
			$nombreArchivo = ereg_replace(" ","",$nombreArchivo);//sustituye una expresion regular
			$upload = $ruta. $nombreArchivo;
			$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
			if (in_array($ext, $formatos)) {
			if (move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) {//se mueve el archivo

				echo"<div class='notific'><div>
 					<img src='../img/unnamed.jpg'><p>".$nombre."</p></div>
 					<p>$mensaje</p>
					<a src='../archivos/".$nombreArchivo."'></a>
 				</div>";

				$nombre = $varsesion;
				$mensaje = $_POST['pmensaje'];
				$query = "INSERT INTO tablatarea(usuario,mensaje,archivo) VALUES ('$nombre', '$mensaje', '".$nombreArchivo."')";
				mysqli_query($query) or die (mysqli_error());
				echo "El archivo se ha subido con exito";
			}}
		}
	}


//	if (isset($sesionCorreo)) {
//		$formatos = array('.jpg','.png','.docx','.pdf','.xlsx','.pptx');
// 		$directorio = '../archivos/';
// 		$contArchivos = 0;
 		//$pmensaje = $_POST['pmensaje'];
 		//	if (empty($_POST['pmensaje'])) {
 		//		$_POST['pmensaje'] = ' ';
 		//	}
// 			if (isset($_POST['submit'])) {
// 				$nombreArchivo = $_FILES['archivo']['name'];
// 				$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
// 				$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
// 				if (in_array($ext, $formatos)) {
// 					if (move_uploaded_file($nombreTmpArchivo, "../archivos/".$nombreArchivo)) {
// 						$pmensaje = $_POST['pmensaje'];
// 						$insertarBd = "INSERT INTO tablatarea(usuario,mensaje,archivo) VALUES($sesionCorreo,$pmensaje,$nombreArchivo)";
// 						$resultadotabla = mysqli_query($conex, $insertarBd);
// 						echo "Archivo guardado";
// 					}
// 					else {
// 						echo "ocurrio un error.";
// 					}
// 				}else {
// 					echo "Ese tipo de archivo no esta permitido.";
// 				}
// 			}
// 	}
// 	else{
// 		echo "error";
// 	}
?>