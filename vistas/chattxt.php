<?php include '../conexion/sesion.php';?>
<!DOCTYPE html>
<html>
<head>
	 <?php 
        include "headerchat.php";
    ?>
   	<script type="text/javascript" src="../js/chat.js">
   	</script>
   	<style type="text/css">
    	#navid2{
    		background: #41C7EF;
    	}
    </style>
</head>
<body onload="ajax();">
	<?php 
        include "navchat.php";
    ?><script type="text/javascript">
    	$(document).ready(function(){
   			var objDiv = document.getElementById("chat");
    		objDiv.scrollTop = objDiv.scrollHeight;
   		});
    </script>
    <div class="contenedor">
    	<div id="caja-chat">
    		<div id="chat"><?php include '../conexion/chat.php';?></div>
    		<div class="form-chat">
    			<form method="POST" action="chattxt.php">
					<div class="boxchat" style=" bottom: 0; position: absolute; width: 100%;">
						<div class="" style="">
							<input class="collapse" type="text" name="nombre" value=<?php echo $varsesion; ?>>
							<input type="text" name="mensaje" placeholder='"Enter" para enviar...' style="width: 93%;height: 23px; bottom:0; margin-top:3px;margin-left: 3px;" autocomplete="off">
							<?php //<i class="icon-attach boton" style="position: absolute;right: 4%;"></i>?>
							<button class="icon-ok boton" type="submit" style="position: absolute;right: 5px;padding: 0;border: 0;background: rgba(0,0,		0,0);"></button>
						</div>
					</div>
				</form>
    		</div>
    	</div>
    	
		<?php
			if (empty($_POST['mensaje'])) {
				die();
			}
			if (isset($_POST['mensaje'])) {
				$nombre = $_POST['nombre'];
				$mensaje = $_POST['mensaje'];
				$consultaD = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje') ";
				$ejecutador = mysqli_query($conex,$consultaD);
			}
		?>
	</div>
</body>
</html>