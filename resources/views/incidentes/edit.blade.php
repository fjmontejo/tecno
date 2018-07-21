@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar equipo</h3>
    <hr>
    {!! Form::model($incidente, [ 'method' => 'PUT', 'url' => ['/incidentes/actualizar', $incidente->id], 'class' => 'form-horizontal'
    ]) !!} 
    @csrf
    <div class="row col-md-12">
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Criterio</label>
            <input type="text" name="criterio" value="{{$incidente->criterio}}" class="form-control" placeholder="Introduce criterio ">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Acción tomda</label>
            <input type="text" name="accion" value="{{$incidente->accion}}" class="form-control" placeholder="Introduce acción tomada">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Reportó</label>
            <input type="text" name="report" value="{{$incidente->report}}" class="form-control" placeholder="">
            <input type="hidden" name="equipo_id" value="{{$incidente->equipo_id}}">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Refacciones usadas</label>
            <input type="text" name="refac_usadas" value="{{$incidente->refac_usadas}}" class="form-control" placeholder="Refacciones usadas">
        </div>
       
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Observaciones</label>
            <input type="text" name="observaciones" value="{{$incidente->observaciones}}" class="form-control" placeholder="observaciones">
        </div>
    </div>
    <div class="row col-md-4">
        <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </div>
    {!! Form::close() !!}
</div>
@endsection