<header>
	<img class="img-fluid ml-3" src="../img/engidea.png" alt="logo" style="height: 60px">
	<div class="mr-3 collapse" style="top: 10px; right:0; position:absolute;"><i class="icon-search pb-1 mb-1"></i><input class="busca" type="text" name="buscador"></div>
	<nav class="pt-2">
		<ul class="nav">
			<li class="nav-item info">
				<i class="nav-link icon-comment"></i>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="navid1" href="tablatarea.php">Trabajos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="navid2" href="chattxt.php" >Chat</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="navid3" href="chatopc.php">Videollamada</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-dark font-weight-bold"><?php echo "¡Hola ".$varsesion."!";?></a>
			</li>
			<li class="d-inline-flex movil-layout">
				<ul class="nav" id="nav-movil">
					<li class="nav-item"><button class="navbar-toggler nav-item" type="button" data-toggle="collapse" data-target="#perfil-user" aria-expanded="false" style="color: white;">Mi perfil</button>
					</li>
					<li class="nav-item"><a class="nav-link" href="../conexion/signout.php" >Cerrar sesión</a></li>
				</ul>
				<button id="open-m" class="" ><i class="icon-menu"></i></button>
				<button id="close-m" class=""><i class="font-weight-bold">X</i></button>
			</li>     
		</ul>
	</nav>
	<div class="p-0 collapse" id="perfil-user" style="list-style: none; background: #41C7EF; width: 20%;position: absolute; right: 0;">
	<li class="nav-item p-0" style="text-align: center;">-Foto:
		<br><img src="../img/unnamed.jpg" style="width: 55px;height: 50px;border-radius: 50%;">
		</li>
		<li class="nav-item p-0" style="text-align: center;">-Profesion:<br><?php echo $tiposesion; ?></li>
		<li class="nav-item p-0" style="text-align: center;">-Nombre:<br><?php echo $varsesion;?></li>
	</div>  
</header>
