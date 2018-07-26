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
    <h2>Inventario de Equipos</h2>
    <p>
        @if(Auth::user()->type_user == 'inventario')
        <a href="{{url('/equipos/crear')}}" class="btn btn-outline-primary">Agregar Nuevo</a>
        @endif
    </p>
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número serie</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Área</th>
                    <th>Estatus</th>
                    <th>Activo fijo</th>
                    <th>Clase</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td>{{$equipo->nombre}}</td>
                    <td>{{$equipo->num_serie}}</td>
                    <td>{{$equipo->marca}}</td>
                    <td>{{$equipo->modelo}}</td>
                    <td>{{$equipo->area}}</td>
                    <td>
                        @if($equipo->status)
                        <button class="btn btn-sm btn-success">Activo</button>
                        @else
                        <button class="btn btn-sm btn-warning">Inactivo</button>
                        @endif
                    </td>                   
                    <td>{{$equipo->fijo}}</td>
                    <td>{{$equipo->tipo}}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                         @if(Auth::user()->type_user == 'inventario')
                        <a href="{{url('/equipos/editar')}}/{{$equipo->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{url('/equipos/eliminar')}}/{{$equipo->id}}" class="btn btn-sm btn-danger">Eliminar</a>
                        @endif
                        @if(Auth::user()->type_user == 'ing_servicio' || 'administrador')
                        <a href="{{url('/incidentes/crear')}}/{{$equipo->id}}" class="btn btn-sm btn-warning">Reportar</a>
                        <a href="{{url('/reportespx/crear')}}/{{$equipo->id}}" class="btn btn-sm btn-success">Reporte PX</a>
                        <a href="{{url('/reportessalud/crear')}}/{{$equipo->id}}" class="btn btn-sm btn-danger">Reporte Personalsalud</a>
                        <a href="{{url('/reportesfabricante/crear')}}/{{$equipo->id}}" class="btn btn-sm btn-info">Reportes fabricante</a>
                        @endif
                        @if(Auth::user()->type_user == 'administrador')
                        <a href="{{url('/equipos/incidentes')}}/{{$equipo->id}}" class="btn btn-sm btn-dark">Ver incidentes</a>
                        @endif
                     </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection