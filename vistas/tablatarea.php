<?php include '../conexion/sesion.php';?>
<!DOCTYPE html>
<html>
<head>
	<?php 
        include "headerchat.php";
    ?>
    <style type="text/css">
    	#navid1{
    		background: #41C7EF;
    	}
    </style>
</head>
<body>
<?php 
        include "navchat.php";
    ?>
 	<div class="materia"><div class="mfondo"><h1 style="color: white;margin-left: 20px;padding-top: 15px">Materia</h1><br><p style="margin-left:20px;color: white;">Salon</p></div></div>
 	<div class="notific">
 		<div class="publicador collapsed" type="button" data-toggle="collapse" data-target="#compartir" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><img src="../img/unnamed.jpg" style="width: 55px;height: 50px;border-radius: 50%;">Comenta y/o comparte algo...</div>
 		<div id="compartir" class="collapse">	
 		<form action="#" method="POST" enctype="multipart/form-data">
 			<input type="text" name="pmensaje" style="width: 97%;height: 60px;margin-top: 20px;">
 			<input type="file" name="archivo">
 			<button name="submit" type="submit"><i>enviar</i></button>
 		</form>
 		</div>
 	</div>
 	<div>
 		<?php
 		include '../conexion/conexion.php';
	if (isset($_POST['submit'])) {
		if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
			//creamos las variables para subir a la db
			$formatos = array('.jpg','.png','.docx','.pdf','.xlsx','.pptx');
			$ruta = "../archivos/";
			$nombreArchivo = trim($_FILES['archivo']['name']);//eliminamos espacios en blanco
		//	$nombreArchivo = preg_replace(" ","",$nombreArchivo);//sustituye una expresion regular
			$upload = $ruta.$nombreArchivo;
			$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
			if (in_array($ext, $formatos)) {
				if (move_uploaded_file($_FILES['archivo']['tmp_name'], $upload)) {//se mueve el archivo

					$nombre = $varsesion;
					$mensaje = $_POST['pmensaje'];
					$query = "INSERT INTO tablatarea(usuario,mensaje,archivo) VALUES ('$nombre', '$mensaje', '$nombreArchivo')";
					mysqli_query($conex,$query) or die (mysqli_error());
				//echo"<div class='notific'><div>
 				//	<img src='../img/unnamed.jpg' style='width: 60px;height: 50px;border-radius: 50%;'>$nombre</div>
 				//	<p>$mensaje</p>
				//	<i class='icon-doc'><a href='../archivos/$nombreArchivo'>$nombreArchivo</a></i>
 				//</div>";
					echo "El archivo se ha subido con exito";
				}
			}else{
				echo "Ese tipo de archivo no esta permitido.";
			}
		}
	}
		if ($dir = opendir("../archivos")) {
			while ($archivo = readdir($dir)) {
			if ($archivo != '.' && $archivo !='..') {

			$seleccion = "SELECT * FROM tablatarea";
			$resultado = mysqli_query($conex, $seleccion);
			$filas = mysqli_num_rows($resultado);	
			while ($filasx = mysqli_fetch_assoc($resultado)) {
				$archivo = $filasx['archivo'];
				$mensaje = $filasx['mensaje'];
				$nombre = $filasx['usuario'];	
			if ($filas>0) {
				echo "<div class='notific'><div>
 					<img src='../img/unnamed.jpg' style='width: 55px;height: 50px;border-radius: 50%;'>$nombre</div>
 					<p>$mensaje</p>
					<i class=' icon-file-word'></i><a href='$archivo'>$archivo</a>
 				</div>";
			}
			}
			}
			}
		}	
 	?>			
 	</div>
 	<script src="../js/main.js"></script>
</body>
</html>