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
    <h2>
        Historial de Incidentes del equipo {{$equipo->nombre}}
    </h2>
    <hr>
    <h4>Reportes del personal de salud</h4>
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Número de ingreso(COFEPRIS exclusivo)</th>
                    <th>Número de notificación inicial</th>
                    <th>Lugar de notificación</th>
                    <th>Fecha de notificación</th>
                    <th>Centro estatal</th>
                    <th>Centro institucional ...xx</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reporsalud as $reporsalud)
                <tr>
                    <td>{{$reporsalud->num_ingresocof}}</td>
                    <td>{{$reporsalud->num_noti}}</td>
                    <td>{{$reporsalud->lugar_noti}}</td>
                    <td>{{$reporsalud->fecha}}</td>
                    <td>
                        @if($reporsalud->centro_estat) X @else - @endif
                    </td>
                    <td> @if($reporsalud->centro_inst) X @else - @endif
                    </td>
                    <td>
                    <a href="{{url('/descargar/reportesalud')}}/{{$reporsalud->id}}" class="btn btn-success">
                            <i class="fa fa-file-pdf"></i> Descargar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h4>Reportes de pacientes</h4>
    <div class "table-responsive">
        <table class="table" id="myTable1">
            <thead>
                <tr>
                    <th>Número de notificación inicial</th>
                    <th>Lugar de notificación(Estado)</th>
                    <th>Fecha de notificación</th>
                    <th>Iniciales del notificador</th>
                    <th>E-mail</th>
                    <th>¿Presentó incidente? ...</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reporpx as $reporpx)
                <tr>
                    <td>{{$reporpx->num_noti}}</td>
                    <td>{{$reporpx->lugar_estado}}</td>
                    <td>{{$reporpx->fecha}}</td>
                    <td>{{$reporpx->iniciales_notificador}}</td>
                    <td>{{$reporpx->email}}</td>
                    <td>@if($reporpx->presento_incidente_si) X @else - @endif</td>
                    
                    <td>
                            
                            <a href="{{url('/descargar/reportespaciente')}}/{{$reporpx->id}}" class="btn btn-success">
                                <i class="fa fa-file-pdf"></i> Descargar</a>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h4>Reportes del personal por fabricante</h4>
    <div class "table-responsive">
        <table class="table" id="myTable2">
            <thead>
                <tr>
                    <th>Número de ingreso(COFEPRIS exclusivo)</th>
                    <th>Número de notificación inicial</th>
                    <th>Notificación Inicial</th>
                    <th>Reporte de seguimiento</th>
                    <th>Reporte final </th>
                    <th>Notificación inicial y reporte final ...</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reporfabricante as $reporfabricante)
                <tr>
                    <td>{{$reporfabricante->num_ingresocof}}</td>
                    <td>{{$reporfabricante->num_noti}}</td>
                    <td>{{$reporfabricante->noti_ini}}</td>
                    <td>{{$reporfabricante->repor_segui}}</td>
                    <td>{{$reporfabricante->repor_fin}}</td>
                    <td>{{$reporfabricante->notini_repfin}}</td>
                    <td>
                        <a href="{{url('/descargar/reportesfabricante')}}/{{$reporfabricante->id}}" class="btn btn-success">
                            <i class="fa fa-file-pdf"></i> Descargar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <h2>
            ORDENES DE SERVICIO
        </h2>
        <hr>
        <h4>Ordenes de servicio</h4>
        <div class "table-responsive">
            <table class="table" id="myTable4">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Área</th>
                        <th>Personal que reporta</th>
                        <th>Turno</th>
                        <th>MP</th>
                        <th>MC</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orden as $orden)
                    <tr>
                        <td>{{$orden->fecha}}</td>
                        <td>{{$orden->area}}</td>
                        <td>{{$orden->reportado_por}}</td>
                        <td>{{$orden->turno}}</td>
                        <td>
                            @if($orden->mp) X @else - @endif
                        </td>
                        <td> @if($orden->mc) X @else - @endif
                        </td>
                        <td>
                            <a href="{{url('/descargar/ordenservicio')}}/{{$orden->id}}" class="btn btn-success">
                                <i class="fa fa-file-pdf"></i> Descargar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection