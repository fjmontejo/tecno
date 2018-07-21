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

    <h2>Personal registrado</h2>
    <p>
        <a href="{{url('/personas/crear')}}" class="btn btn-outline-primary">Agregar Nuevo</a>
    </p>
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Acción</th>

                    
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellidos}}</td>
                    <td>{{$persona->edad}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        @if(Auth::user()->type_user == 'administrador')    
                        <a href="{{url('/personas/editar')}}/{{$persona->id}}" class=" btn-sm btn btn-primary">Editar</a>
                        <a href="{{url('/personas/eliminar')}}/{{$persona->id}}" class="btn btn-sm btn btn-danger">Eliminar</a>
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