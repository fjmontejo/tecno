@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar Equipo</h3>
    <hr>
    <form method="POST" action="{{ url('/equipos/guardar') }}">
        @csrf
        <div class="row col-md-12">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre de equipo</label>
                <input type="text" name="nombre" class="form-control" placeholder="Introduce nombre de equipo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1"># Serie</label>
                <input type="text" name="num_serie" class="form-control" placeholder="Introduce numero de serie">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Marca</label>
                <input type="text" name="marca" class="form-control" placeholder="Introduce la marca">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Introduce  el modelo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Area</label>
                <input type="text" name="area"  class="form-control" placeholder="Introduce el area del hospital">
            </div> 
            
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Estatus</label>
                <select name="status" class="form-control">
                    <option value="1">ACTIVO</option>
                    <option value="0">INACTIVO</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1"># fijo</label>
                <input type="text" name="fijo" class="form-control" placeholder="Introduce número fijo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Equipo clase:</label>
                <input type="text" name="tipo" class="form-control" placeholder="Introduce la clase del equipo">
            </div>
        </div>
        <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection