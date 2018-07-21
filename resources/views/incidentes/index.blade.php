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

    <h2>Historial de mantenimientos</h2>
    <br>
    <br>    
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Criterio de reporte</th>
                    <th>Acción tomada</th>
                    <th>Refacciones utilizadas</th>
                    <th>Observaciones</th>
                    <th>Reporto</th>
                    <th>Equipo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incidentes as $incidente)
                <tr>
                    <td>{{$incidente->criterio}}</td>
                    <td>{{$incidente->accion}}</td>
                    <td>{{$incidente->refac_usadas}}</td>
                    <td>{{$incidente->observaciones}}</td>
                    <td>{{$incidente->report}}</td>
                    <td>{{$incidente->equipo['nombre']}}</td>
                    <td>  
                    <div>
                    <a href="{{url('/incidentes/editar')}}/{{$incidente->id}}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection