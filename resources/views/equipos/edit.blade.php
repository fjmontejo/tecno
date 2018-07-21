@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar equipo</h3>
    <hr>
    {!! Form::model($equipo, [ 'method' => 'PUT', 'url' => ['/equipos/actualizar', $equipo->id], 'class' => 'form-horizontal'
    ]) !!} 
    @csrf
    <div class="row col-md-12">
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="nombre" value="{{$equipo->nombre}}" class="form-control" placeholder="Introduce nombre ">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1"># serie</label>
            <input type="text" name="num_serie" value="{{$equipo->num_serie}}" class="form-control" placeholder="Introduce numeros de serie">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Marca</label>
            <input type="text" name="marca" value="{{$equipo->marca}}" class="form-control" placeholder="marca">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Modelo</label>
            <input type="text" name="modelo" value="{{$equipo->modelo}}" class="form-control" placeholder="modelo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Area</label>
            <input type="text" name="area" value="{{$equipo->area}}" class="form-control" placeholder="area">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Estatus</label>
            <input type="text" name="status" value="{{$equipo->status}}" class="form-control" placeholder="status">
            <select name="status" class="form-control">
                    <option value="1">ACTIVO</option>
                    <option value="0">INACTIVO</option>
                </select>
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1"># fijo</label>
            <input type="text" name="fijo" value="{{$equipo->fijo}}" class="form-control" placeholder="fijo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1"> Clase</label>
            <input type="text" name="tipo" value="{{$equipo->tipo}}" class="form-control" placeholder="tipo">
        </div>

    </div>
    <div class="row col-md-4">
        <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </div>
    {!! Form::close() !!}
</div>
@endsection