<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php require_once "scripts.php" ?>
  <link rel="icon" type="image/png" href="img/home.png">

  <title>Teln</title>
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
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactanos.php">Contactanos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ayuda.php">Ayuda</a>
            </li>
      
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Registrarse</a>
          </li>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!--Slider-->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/ind1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>¿Conoces tu salud mental?</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/ind2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tu salud es muy importante, atiéndete</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/ind3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>La mente también se enferma</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Seccion 1-->
  <section class="container my-5">
    <h1 class="display-4 text-center my-3">¿Conoces tu salud mental?</h1>
    <p class="text-center lead text-info my-3">“La salud mental es un estado de completo bienestar físico, mental y social, y no solamente la ausencia de afecciones o enfermedades”</p>
  </section>

  <section class="container my-5 text-center">
    <div class="row">
      <div class="card-deck">
        <div class="col-md-4">
          <div class="card">
            <img src="img/depresion.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Depresión</h5>
              <p class="card-text text-justify">La depresión es un trastorno emocional que causa un sentimiento de tristeza constante y una pérdida de interés en realizar diferentes actividades. También denominada «trastorno depresivo mayor» o «depresión clínica», afecta los sentimientos, los pensamientos y el comportamiento de una persona, y puede causar una variedad de problemas físicos y emocionales. Es posible que tengas dificultades para realizar las actividades cotidianas y que, a veces, sientas que no vale la pena vivir.
                Más que solo una tristeza pasajera, la depresión no es una debilidad y uno no puede recuperarse de la noche a la mañana de manera sencilla. La depresión puede requerir tratamiento a largo plazo. Pero no te desanimes. </p><br><br>
              <a href="#" class="btn btn-outline-primary">Mas información</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="img/ansiedad.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Ansiedad</h5>
              <p class="card-text text-justify">Sentir ansiedad de modo ocasional es una parte normal de la vida. Sin embargo, las personas con trastornos de ansiedad con frecuencia tienen preocupaciones y miedos intensos, excesivos y persistentes sobre situaciones diarias. Con frecuencia, en los trastornos de ansiedad se dan episodios repetidos de sentimientos repentinos de ansiedad intensa y miedo o terror que alcanzan un máximo en una cuestión de minutos (ataques de pánico). Estos sentimientos son difíciles de controlar, son desproporcionados en comparación con el peligro real y pueden durar un largo tiempo.Existen varios ejemplos de trastorno de ansiedad y puedes tener más de un trastorno de ansiedad.
                Cualquiera sea el tipo de ansiedad que padezcas, un tratamiento puede ayudar.</p><br>
              <a href="#" class="btn btn-outline-primary">Mas información</a>
            </div>
          </div>

        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="img/bipolar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Bipolaridad</h5>
              <p class="card-text text-justify">El trastorno bipolar, antes denominado «depresión maníaca», es una enfermedad mental que causa cambios extremos en el estado de ánimo que comprenden altos emocionales (manía o hipomanía) y bajos emocionales (depresión). Cuando te deprimes, puedes sentirte triste o desesperanzado y perder el interés o el placer en la mayoría de las actividades. Cuando tu estado de ánimo cambia a manía o hipomanía, es posible que te sientas eufórico, lleno de energía o inusualmente irritable. Estos cambios en el estado de ánimo pueden afectar el sueño, la energía, el nivel de actividad, el juicio, el comportamiento y la capacidad de pensar con claridad. Aunque el trastorno bipolar es una afección de por vida, puedes controlar los cambios en el estado de ánimo y otros síntomas siguiendo un plan de tratamiento.</p>
              <a href="#" class="btn btn-outline-primary">Mas información</a>
            </div>
          </div>
        </div>
      </div>
  </section>







  <footer class="container-fluid bg-dark text-white">
    <div class="container">
      <p class="text-center py-2">
        Si tienes algun problema, busca ayuda<br>
        2023, ©Teln Group
      </p>
    </div>


  </footer>
</body>

</html>