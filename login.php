<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once('conexion/validacion.php');
    ?>
     <?php 
        include "vistas/header.php";
    ?>
<style type="text/css">
    #nav3{
        background: #41C7EF;
    }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-home px-4">
            <a class="navbar-brand ml-4" href="#">
                <img src="img/engidea.png" width="250" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler p-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-menu navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-center mr-4" id="navbarNav">
                <ul class="navbar-nav nav-home mx-4">
                    <li class="nav-item" id="nav1">
                        <a class="nav-link" href="index.php#">Inicio</a>
                    </li>
                    <li class="nav-item" id="nav2">
                        <a class="nav-link" href="registro.php#">Registro</a>
                    </li>
                    <li class="nav-item" id="nav3">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
          </nav>  
    </header>
    <main>
        <section >
            <div class="container bg-white">
                <div class="row  align-items-center pt-5">
                    <div class="col-md-12 d-md-none text-center title">
                            <h2>LOGIN</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="img-home text-center">
                            <img src="img/Teacher-bro.svg" height="400">
                        </div>
                    </div>
                    <div class="login-content col-md-8 text-center">
                        <div class="col-sm-12 d-md-block d-sm-none text-center title my-5">
                            <h2>LOGIN</h2>
                        </div>
                        <form action="login.php" method="POST">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-8 mb-4">
                                    <input type="email" class="form-control" name="correo" placeholder="Ingresa un correo " required>
                                    <i class="icon-mail"></i>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-8 mb-4">
                                    <input type="password" class="form-control" name="pass" placeholder="Ingresa una contraseña " pattern="{8,30}" required>
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                            <div class="form-row justify-content-center mt-4">
                                <div class="col-md-6">
                                    <button class="btn btn-primary  btn-block mb-3" type="submit">Ingresar</button>
                                </div>
                            </div>
                            
                        </form>
                        <p  class="lead">
                            <span >¿Aun no tienes cuenta?</span><a href="login.php#"> Registrate aquí</a>
                        </p>
                    </div> 
                </div>
            </div>
        </section>
    </main> 
</body>
</html>
