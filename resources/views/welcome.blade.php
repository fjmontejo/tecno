<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Plataforma Tecnovigilancia</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('template/css/scrolling-nav.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Tecnovigilancia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Equipo de trabajo</a>
          </li>
          @if (Route::has('login')) @auth
          <a href="{{ url('/home') }}" class="nav-link js-scroll-trigger">Home</a>
          @else
          <a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Iniciar Sesión</a>
          <!--<a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Registro</a>-->
          @endauth @endif
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Bienvenido a Tecnovigilancia</h1>
      <p class="lead"> Sistema de tecnovigilancia Hospital Dr Rafael Pascacio Gamboa </p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Acerca de tecnovigilancia</h2>
          <p class="lead" style="text-align: justify">Tecnovigilancia (vigilancia de la seguridad de los dispositivos médicos), es el conjunto de actividades que tienen
            por objeto la identificación y evaluación de incidentes adversos producidos por los dispositivos médicos en uso
            así como la identificación de los factores de riesgo asociados a éstos, con base en la notificación, registro
            y evaluación sistemática de las notificaciones de incidentes adversos, con el fin de determinar la frecuencia,
            gravedad e incidencia de los mismos para prevenir su aparición y minimizar sus riesgos. Idealmente, la información
            del sistema de tecnovigilancia se comparte entre autoridades competentes y fabricantes/distribuidores, a modo
            de facilitar las actividades en materia de tecnovigilancia, así como las acciones preventivas y correctivas de
            cada caso a nivel nacional e internacional que impacten en el territorio nacional.
            <p class="lead" style="text-align: justify">
            <p class="text-primary">Equipos médicos Clase I:</p>
               Dispositivos conocidos en la práctica médica, cuya seguridad y eficacia están comprobadas y que generalmente
              no permanecen en el organismo. 
              <br><p class="text-primary">Equipos médicos Clase II:</p>Dispositivos conocidos en la práctica médica y que pueden tener variaciones
              en el material con el que están elaborados o en su concentración y gradualmente se introducen al organismo.
              Permaneciendo menos de 30 días.

              <br><p class="text-primary">Equipos médicos Clase III:</p> Dispositivos nuevos o recientemente aceptados en la práctica médica, o bien que se introducen al
              organismo y permanecen en éste por más de treinta días. 
              </p>



          </p>

        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Servicios</h2>
          <p class="lead">
            <li> Manejo de invetario de equipos medicos
              <li> Mejor control de incidentes adversos
                <li> Mejora eficiente del control de reportes
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Equipo de trabajo</h2>
          <p class="lead">Francisco Javier Montejo Hernández</p>
          <p class="lead">Edgar Giovanny Pérez Hernández</p>
          <p class="lead">Aplicaciones de Telemedicina |8°A</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Tecnovigilancia 2018</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{asset('template/js/scrolling-nav.js')}}"></script>

</body>

</html>