 <?php

 require ("App\Modelo\Computador.php");

?>
 <!doctype html>
 <html lang= "en">
 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Computadores</title>

     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

 </head>

 <body>

<div class= "container">
    <div class="row">
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img src="Imagenes/pc.img" class="d-block w-70%" alt="...">
         </div>
         <div class="carousel-item">
             <img src="Imagenes/pc1.img" class="d-block w-70%" alt="...">
         </div>
         <div class="carousel-item">
             <img src="Imagenes/pc.img" class="d-block w-" alt="...">
         </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
     </a>
 </div>


 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
     <div class="container">
         <a class="navbar-brand" href="#">Sena2019</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item active">

                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Persona</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Carros</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Computadores</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <!-- Page Content -->
 <div class="container">
     <div class="row">
         <div class="col-lg-12 text-center">
             <h1 class="mt-5">Sena</h1>
             <p class="lead"></p>
             <ul class="list-unstyled">
                 <li>


                     <div class="card" style="width: 18rem;">
                         <div class="card-header">
                             Computador 1
                         </div>
                         <?php
                            $Computador=new \App\Modelo\Computador("Marca","asd","asd","sda");
                            $Computador->MostrarDatos();
                            
                         ?>
                         </ul>
                     </div>


                 </li>

             </ul>
         </div>
     </div>
 </div>



 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
 </body>
 </html>
    <?php


    echo "<br/>";

    ?>
    </p>










