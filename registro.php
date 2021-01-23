<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "vistas/header.php";
    ?>
    <style type="text/css">
    #nav2{
        background: #41C7EF;
    }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-home px-4">
            <a class="navbar-brand ml-4" href="#">
                <img src="img/engidea.png" width="250" class="img-fluid" alt="logo">
            </a>
            <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-menu navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-center mr-4" id="navbarNav">
                <ul class="navbar-nav mx-4">
                    <li class="nav-item" id="nav1">
                        <a class="nav-link" href="index.php#">Inicio</a>
                    </li>
                    <li class="nav-item" id="nav2">
                        <a class="nav-link" href="#">Registro</a>
                    </li>
                    <li class="nav-item" id="nav3">
                        <a class="nav-link" href="login.php#">Login</a>
                    </li>
                </ul>
            </div>
          </nav>  
    </header>
    <main>
        <section >
            <div class="container bg-white">
                <div class="row align-items-center pt-5">
                    <div class="col-md-12 d-md-none text-center title">
                        <h2>REGISTRO</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="img-home text-center">
                            <img src="img/Teaching-amico.svg" height="400">
                        </div>
                    </div>
                    <div class="login-content col-md-8 text-center ">
                        <div class="col-sm-12 d-md-block d-sm-none text-center title my-5">
                            <h2>REGISTRO</h2>
                        </div>
                        <form action="conexion/formulario.php" method="POST">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-8 mb-4">
                                    <input type="text" class="form-control" name="user" placeholder="Ingresa un nombre"  pattern="[a-z]{5,30}" required>
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-8 mb-4">
                                    <input type="email" class="form-control" name="correo" placeholder="Ingresa un correo" required>
                                    <i class="icon-mail"></i>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-8 mb-4">
                                    <input type="password" class="form-control" name="pass" placeholder="Ingresa una contraseña " pattern="{8,30}" required>
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                            <div  class="form-row justify-content-center ">
                                <label for="tipoUser" class="mr-3">Soy... </label>
                                <div id="tipoUser">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rol" id="profesor" value="profesor">
                                        <label class="form-check-label text-secondary" for="profesor">Profesor</label>
                                    </div>
                                    <span>o</span>
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="radio" name="rol" id="alumno" value="alumno" checked>
                                        <label class="form-check-label text-secondary" for="alumno"> Alumno</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-center mt-4">
                                <div class="col-md-6">
                                    <button class="btn btn-primary  btn-block mb-3" type="submit">registrarme</button>
                                </div>
                            </div>
                        </form>
                        <p class="lead">
                            <span >¿Ya tienes una cuenta?</span><a href="login.php"> Ingresa aquí</a>
                        </p>
                    </div> 
                </div>
            </div>
        </section>
    </main>
</body>
</html>