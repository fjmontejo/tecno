<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plataforma Tecnovigilancia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Tecnovigilancia Plataforma
                </div>
                    
                <div class="links">
                   <p>
                    Tecnovigilancia (vigilancia de la seguridad de los dispositivos médicos), al conjunto de actividades que tienen por objeto la identificación 
                    y evaluación de incidentes adversos producidos por los dispositivos médicos en uso así como la identificación de los factores de riesgo asociados a éstos,
                    con base en la notificación, registro y evaluación sistemática de las notificaciones de incidentes adversos, con el fin de determinar la frecuencia,
                    gravedad e incidencia de los mismos para prevenir su aparición y minimizar sus riesgos. 
                    Idealmente, la información del sistema de tecnovigilancia se comparte entre autoridades
                    competentes y fabricantes/distribuidores, a modo de facilitar las actividades en materia de tecnovigilancia, 
                    así como las acciones preventivas y correctivas de cada caso a nivel nacional e internacional que impacten en el territorio nacional.
                   </p>
                </div>
            </div>
        </div>
    </body>
</html>
