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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Validación de información de reporte de incidentes por Personal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  
  <div class="container">
  <section id="about">
      <div class="container">
          <p>
          <h5>  
           *En esta sección se encuentran los datos relevantes al formato de reporte de incidentes por Personal 
           de la salud para ser validados.
          </h5>
          </p>
        </div>
        <div class="form-group col-md-12">      
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2>Datos a validar</h2>
                <ul class="list-group">
                <li class="list-group-item ">Número de ingreso COFEPRIS: {{$reporte->num_ingresocof}}</li>
                <li class="list-group-item">Número de notificación: {{$reporte->num_noti}}</li>
                <li class="list-group-item">Lugar de la notificación: {{$reporte->lugar_noti}}</li>
                <li class="list-group-item">Fecha: {{$reporte->fecha}}</li>
                <li class="list-group-item">Iniciales del notificador: {{$reporte->iniciales_noti}}</li>
                <li class="list-group-item">E-mail: {{$reporte->email}}</li>
                <li class="list-group-item">Área de adscripción: {{$reporte->area_adscri}}</li>
                <li class="list-group-item">Iniciales del operador: {{$reporte->iniciales_ope}}</li>
                <li class="list-group-item">Iniciales del paciente o clave: {{$reporte->iniciales_px_clv}}</li>
                <li class="list-group-item">Nombre de la institución: {{$reporte->nombre_institucion}}</li>
                <li class="list-group-item">Domicilio: {{$reporte->domicilio}}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  </section>
</div>
<br>
<br>
<br>


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