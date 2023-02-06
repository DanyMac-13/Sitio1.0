<?php

require_once "config.php";
require_once "conexion.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php require_once "scripts.php" ?>
  <link rel="icon" type="image/png" href="img/home.png">

  <title>Home</title>
</head>

<body>
  <!--Navbar-->
  <div class="container-fluid bg-dark fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" >
        TELN
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-2">
          <li class="nav-item active">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="ingresar.php">ingresar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cierreSesion.php">Cerrar sesión</a>
          </li>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!--Jumbotron-->
  <section class="container-fluid">
    <div class="jumbotron text-center">
      <h1 class="display-4">Centros de salud mental</h1>
      <p class="lead">Con el fin de ayudarte a mejorar tu salud mental, te brindamos informaciòn sobre la enfermedades mentales màs comunes, tambien buscamos algunos centros de salud mental del Estado de Puebla para ti. Consultalos en el bloque de abajo. </p>
      <hr class="my-4">
      <p>Da clic en ingresar para obtener mas información</p><br>
      <p><a href="formulario.php"> ingresar</a></p>
    </div>
  </section>


<nav class="navbar ">
  <form class="form-inline" action="buscar_estado.php" method="get" >
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busqueda" id="bussqueda" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Estado</button>
  </form>
</nav>

<br><br>

  <table border="2" align="center">
    <tr align="center">
      <td width="300">Num.</td>
      <td width="400">Estado</td>
      <td width="300">Centros de ayuda</td>
    </tr>

    <?php

    $sql = "SELECT * from estados";
    $result = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {

    ?>
      <tr align="center">
        <td><?php echo $mostrar['idEstado'] ?></td>
        <td><?php echo $mostrar['nombreEs'] ?></td>
        <td><a href="ver.php" class="btn btn-outline-success">Ver</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>