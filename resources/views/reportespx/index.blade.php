@extends('layouts.app') @section('content')

<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <h2>Reportes incidente adverso por paciente/usuario</h2>
    <p>
        <a href="{{url('/reportespx/crear')}}" class="btn btn-outline-primary">Agregar Nuevo</a>
    </p>
    <div class "table-responsive">
        <table class="table" id="myTable3">
            <thead>
                <tr>
                    <th>Número de notificación cofepris</th>                    
                    <th>Número de notificación</th>
                    <th>Lugar de notificación(Estado)</th>
                    <th>Lugar de notificación(Municipio)</th>
                    <th>Fecha de notificación(Localidad)</th>
                    <th>Iniciales del notificador</th>
                    <th>e-mail</th>
                    <th>Presentó incidente?</th>
                    <th>Parentezco</th>
                    <th>Iniciales del paciente</th>
                    <th>Edad del paciente</th>
                    <th>Peso del paciente</th>
                    <th>Estatura del paciente</th>
                    <th>Género</th>
                    <th>Fecha del incidente</th>
                    <th>Lugar Estado</th>
                    <th>Lugar Municipio</th>
                    <th>Lugar Localidad</th>
                    <th>Casa</th>
                    <th>Trabajo</th>
                    <th>Vía pública</th>
                    <th>Ambulancia</th>
                    <th>Otro</th>
                    <th>EN CASO DE QUE EL INCIDENTE  SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:</td>																															
                    <th>Servicio Público</th>
                    <th>Servicio Privado</th>
                    <th>Nombre de la Institución</th>
                    <th>Domicilio completo</th>
                    <th>Autoridad si</th>
                    <th>Autoridad no</th>
                    <th>¿A quien?</th> 
                    <th>Número de reporte</th>    
                    <th>Descripcion y consequencia del incidente</th> 
                    <th>Muerte</th>
                    <th>Intervención médica</th>
                    <th>Servicio quirúrgica</th>
                    <th>Daño indirecto</th>
                    <th>Daño muerte fetal</th>
                    <th>Deficiencia permanente</th>
                    <th>Daño permanente</th>
                    <th>Hospitalización</th>
                    <th>Otra consecuencia</th>
                    <th>NOmbre del dispositivo</th>
                    <th>Modelo</th>
                    <th>Número de serie o lote</th>
                    <th>Desconocido</th>
                    <th>Destruido</th>
                    <th>Fuera de servicio</th>
                    <th>En uso</th>
                    <th>Otro, especifique:</th>
                    <th>Fabricante</th>
                    <th>Distribuidor</th>
                    <th>Comercializador</th>
                    <th>otro, especifique:</th>    
                    <th>Hacer públicos los datos si</th>
                    <th>Hacer públicos los datos no</th>
                    <th>Equipo</th>
                                                            

                    
                </tr>
            </thead>
            <tbody>
                @foreach($reporte_usuarios as $reppx)
                <tr>
                    <td>{{$reppx->num_cofe}}</td>
                    <td>{{$reppx->num_noti}}</td>
                    <td>{{$reppx->lugar_esta}}</td>
                    <td>{{$reppx->lugar_muni}}</td>
                    <td>{{$reppx->lugar_locali}}</td>
                    <td>{{$reppx->fecha}}</td>
                    <td>{{$reppx->iniciales_notificador}}</td>
                    <td>{{$reppx->email}}</td>
                    <td>{{$reppx->presento_incidente_si }}</td>
                    <td>{{$reppx->presento_incidente_no }}</td>
                    <td>{{$reppx->parentezco}}</td>
                    <td>{{$reppx->iniciales_px}}</td>
                    <td>{{$reppx->edad_px}}</td>
                    <td>{{$reppx->peso_px}}</td>
                    <td>{{$reppx->estatura_px}}</td>
                    <td>{{$reppx->genero}}</td>
                    <td>{{$reppx->fecha_incidente}}</td>
                    <td>{{$reppx->lugar_estado}}</td>
                    <td>{{$reppx->lugar_municipio}}</td>
                    <td>{{$reppx->lugar_localidad}}</td>
                    <td>{{$reppx->casa}}</td>
                    <td>{{$reppx->trabajo}}</td>
                    <td>{{$reppx->via_publica}}</td>
                    <td>{{$reppx->ambulancia}}</td>
                    <td>{{$reppx->otro_incidente}}</td>
                    <td>{{$reppx->servicio_pub}}</td>
                    <td>{{$reppx->servicio_priv}}</td>
                    <td>{{$reppx->nombre_institucion}}</td>
                    <td>{{$reppx->domicilio}}</td>
                    <td>{{$reppx->autoridad_si}}</td>
                    <td>{{$reppx->autoridad_no}}</td>
                    <td>{{$reppx->quien}}</td>
                    <td>{{$reppx->reporte}}</td>
                    <td>{{$reppx->descripcion}}</td>
                    <td>{{$reppx->muerte}}</td>
                    <td>{{$reppx->intervencion_med}}</td>
                    <td>{{$reppx->intervencion_quir}}</td>
                    <td>{{$reppx->daño_indirecto}}</td>
                    <td>{{$reppx->daño_muertefetal}}</td>
                    <td>{{$reppx->deficiencia_permanente}}</td>
                    <td>{{$reppx->daño_permanente}}</td>
                    <td>{{$reppx->hospitalizacion}}
                    <td>{{$reppx->nombre_dispo}}</td>
                    <td>{{$reppx->modelo_dispo}}</td>
                    <td>{{$reppx->num_dispo}}</td>
                    <td>{{$reppx->otro_consequen}}</td>
                    <td>{{$reppx->desconocido}}</td>
                    <td>{{$reppx->destruido}}</td>
                    <td>{{$reppx->fuera_servicio}}</td>
                    <td>{{$reppx->en_uso}}</td>
                    <td>{{$reppx->otro_situa}}
                    <td>{{$reppx->fabricante}}</td>
                    <td>{{$reppx->distribuidor}}</td>
                    <td>{{$reppx->comercializador}}</td>
                    <td>{{$reppx->otro_devuelto}}</td>
                    <td>{{$reppx->hacer_publico_si}}</td>
                    <td>{{$reppx->hacer_publico_no}}</td>
                    <td>{{$reppx->equipo['nombre']}}</td>

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                       
                        </div>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection