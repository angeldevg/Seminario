<!doctype html>
<html lang="es">
  <head>
    <title>Agregar Producto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--CSS -->
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/productos.css">

 
 
  </head>
  <body>

  <?php

    session_start();

    $nom = $_SESSION["usuario"];

    if(!isset($_SESSION["usuario"])){
      echo header("Location: http://localhost/seminario/View/login.html");
    }


  ?>
    <header>

      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
          <div class="row">
  
            <div class="col-sm-3">
            
              <form class="form-inline" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="<?php  echo"@" . $nom; ?>" readonly>
                </div>
              </form>
              
            </div>
  
       <div class="col-sm-7">
  
              
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item ">
              <a class="nav-link " href="index.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Ofertas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#contact">Soporte</a>
            </li>
            
            <li class="nav-item">
              <a href=""></a>
            </li>
  
            <li class="nav-item">
              <a href=""></a>
            </li>
     
          </ul>

          <div class="col-xl-2">

          <form action="../Model/Dao/CerrarSesion.php">
               <input type="submit" class="btn btn-success" value="Cerrar Sesion" />
               </form>

          </div>

        </div>


  
            </div>
  
          </div>
  
        </div>
      </nav>
  
    </header>


    <h1>hola mundo</h1>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>