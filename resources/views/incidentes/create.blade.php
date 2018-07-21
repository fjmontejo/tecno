@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar Mantenimientos<span class="badge badge-info">{{$equipo->nombre}}</span></h3>
    <hr>
    <form method="POST" action="{{ url('/incidentes/guardar') }}">
        @csrf
        <div class="row col-md-12">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Criterio de reporte</label>
                <input type="text" name="criterio" class="form-control" placeholder="Introduce criterio de reporte ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Reportó</label>
                <input type="text" name="report" value="{{Auth::user()->name}}" class="form-control" placeholder="Quien reportó?" readonly>
                <input type="hidden" name="equipo_id" value="{{$equipo->id}}">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Accion tomada</label>
                <textarea class="form-control" name="accion" rows="4" cols="50" placeholder="Describe..."></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Refacciones/consumibles utilizados</label>
                <textarea class="form-control" name="refac_usadas" rows="4" cols="50" placeholder="Describe..."></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Observaciones</label>
                <textarea class="form-control" name="observaciones" rows="4" cols="50" placeholder="Describe..."></textarea>
            </div>
            
         </div>
         <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection