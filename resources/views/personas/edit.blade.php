@extends('layouts.app') @section('content')
<div class="container">
    <h3>Actualizar persona</h3>
    <hr>
    {!! Form::model($persona, [ 'method' => 'PUT', 'url' => ['/personas/actualizar', $persona->id], 'class' => 'form-horizontal'
    ]) !!} 
    @csrf
    <div class="row col-md-12">
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="nombre" value="{{$persona->nombre}}" class="form-control" placeholder="Introduce nombre ">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Apellidos</label>
            <input type="text" name="apellidos" value="{{$persona->apellidos}}" class="form-control" placeholder="Introduce apellidos">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Edad</label>
            <input type="text" name="edad" value="{{$persona->edad}}" class="form-control" placeholder="Introduce edad">
        </div>

    </div>
    <div class="row col-md-4">
        <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </div>
    {!! Form::close() !!}
</div>
@endsection