<!DOCTYPE html>
<html lang="en">
<head>
     <?php 
        include "vistas/header.php";
    ?>
<style type="text/css">
    #nav1{
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
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item" id="nav2">
                        <a class="nav-link" href="registro.php#">Registro</a>
                    </li>
                    <li class="nav-item" id="nav3">
                        <a class="nav-link" href="login.php#">Login</a>
                    </li>
                </ul>
            </div>
          </nav>  
    </header>
    <main class="px-5">
    <div class="row">
        <div class="col-md-12">
            <p class="bienvenida">¡Sigue tu futuro con ayuda de engidea!</p>
            <p class="text-center">los objetivos del aula virtual es poderte ayudar con tus estudios sin ningún problema</p>
        </div>
    <div class="cont-bienvenida">
    <div class="col-md-12 round">
    <div class="row">
        <div class="col-md-6 mt-4">
            <span class="text-center"><img src="img/Teaching-amico.svg" height="300"></span>
        </div>     
        <div class="col-md-6" style="margin-top: 5%;">
            <h1 class="text-center">Servicios</h1>
            <p class="text-center">El aula virtual te permite chatear con el profesor y compañeros, como tambien te permite enviar trabajos, tareas u otro tipo de archivos que desees enviar.</p>
            <p class="text-center">Si quieres saber mas sobre la empresa engidea puedes entrar en su pagina web<a href="https://engidea.com.ve"> Engidea</a>.</p>
        </div>
        
    </div> 
    </div>
    </div>       
    </div>
   
</main>
</body>
</html>