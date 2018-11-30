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
                        <a href="{{url('/descargar/incidentes')}}/{{$orden->id}}" class="btn btn-success">
                            <i class="fa fa-file-pdf"></i> Descargar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection