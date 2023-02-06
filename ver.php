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
      <a class="navbar-brand">

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



  <section class="container my-5">
    <div class="row">
      <div class="col-md-6">

        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header bg-dark" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  El Batam
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Hospital Psiquiátrico «Dr. Rafael Serrano»
                Km. 7.5 Carretera Puebla-Valsequillo
                Col. El Batam. CP. 72573, Puebla, Pue.
                Tel. 01 222 216 1399, 01 222 216 1540.
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7483534723106!2d-98.18567888255613!3d18.986717900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf4949f87d3d%3A0x8e0f3644d09412c3!2sDepartamento%20de%20Ense%C3%B1anza%20Hospital%20Psiqui%C3%A1trico%20%22Dr.%20Rafael%20Serrano%22!5e0!3m2!1ses!2smx!4v1628650007771!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-dark" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Centro Estatal de Salud Mental
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Carretera puebla, Carr a Valsequillo km 7.5, La Joya,
                72570 Puebla, Pue.
                Tel. +52 222 216 2066.
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30181.710651643738!2d-98.20126186044924!3d18.988241600000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf73e558efe3%3A0x7cf4d6d47ab6d853!2sCentro%20Estatal%20de%20Salud%20Mental!5e0!3m2!1ses!2smx!4v1628698725141!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-dark" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  CENPSIDE - Centro de Psico - medicina del desarrollo
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Huejotzingo #7, La Paz, 72160 Puebla, Pue.
                TEL +52 222 688 7882
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60338.76642116458!2d-98.22275060000001!3d19.0561342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc6e92d517fdb%3A0x661916bd6508a0c0!2sCENPSIDE%20-%20Centro%20de%20Psico%20-%20medicina%20del%20desarrollo!5e0!3m2!1ses!2smx!4v1628699587966!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <img src="img/centro.jpg" class="img-fluid">
        <!--List group-->
        <ul class="list-group">
          <li class="list-group-item active bg-dark border-dark rounded-0" aria-current="true">Centros de salud mental PUEBLA</li>
        </ul>
      </div>
    </div>
  </section>



  <footer class="container-fluid bg-dark text-white">
    <div class="container">
      <p class="text-center py-2">
        Si tienes algun problema, busca ayuda<br>
        2021, ©Telnet Group
      </p>
    </div>


  </footer>





</body>

</html>