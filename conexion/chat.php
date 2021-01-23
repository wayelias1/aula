<?php
	include 'conexion.php';
	$consultar = "SELECT * FROM chat ORDER BY fecha ASC LIMIT 300";
	$ejecutar = mysqli_query($conex,$consultar);
	while ($fila = mysqli_fetch_assoc($ejecutar)):
?>	
	<div id="datos-chat" style="margin-left: 1%;list-style: none;">
		<img src="../img/unnamed.jpg" style="width: 55px;height: 50px;position: absolute;border-radius: 50%;">
		<div style="border: 1px solid gray; border-radius: 15px;margin-top: 1%;margin-left: 60px; width: 30%; ">
		<span style="color: blue; font-size: 10px;margin: 0;margin-left: 4px;"><?php echo $fila['nombre']; ?></span><br>
		<span style="color: black; margin: 0;margin-left: 4px;"><?php echo $fila['mensaje']; ?></span><br>
		<span style="font-size: 10px; color: gray; right: 0; margin: 0;margin-left: 4px;"><?php echo $fila['fecha']; ?></span>
	</div>
	</div>
<?php endwhile; ?> 