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

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">

    
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">Tecnovigilancia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                    <!--<li>
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Registro</a>
                    </li>-->
                    @else

                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/equipos') }}">Equipos</a>
                    </li>
                    @if(Auth::user()->type_user == 'administrador')
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/calendario') }}">Calendario de actividades Anual</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/incidentes') }}">Reportes de Mantenimientos</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/reportespx') }}">Reportes de Px</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/reportessalud') }}">Reportes por personal de salud</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/reportesfabricante') }}">Reporte fabricante</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/personas') }}">Personal</a>
                    </li>
                    <li>
                        <a class="nav-link js-scroll-trigger" href="{{ url('/glosario') }}">Glosario</a>
                    </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link js-scroll-trigger dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        @yield('content')
    </div>
    <br>
    <br>
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

    <!--Date Picker-->


    <!-- Plugin JavaScript -->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="{{asset('template/js/scrolling-nav.js')}}"></script>

    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable1').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable2').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable3').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm-dd-yyyy'
        });
    </script>


</body>

</html>