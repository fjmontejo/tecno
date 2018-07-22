@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar equipo</h3>
    <hr> {!! Form::model($incidente, [ 'method' => 'PUT', 'url' => ['/incidentes/actualizar', $incidente->id], 'class' => 'form-horizontal'
    ]) !!} @csrf
    <div class="row col-md-12">
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Fecha</label>
            <input type="date" name="fecha" value="{{$incidente->fecha}}" class="form-control" placeholder="Introduce fecha ">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Área</label>
            <input type="text" name="area" value="{{$incidente->area}}" class="form-control" placeholder="Introduce área ">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Personal que reporta</label>
            <input type="text" name="reportado_por" value="{{$incidente->reportado_por}}" class="form-control" placeholder="Reportadó por:">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Turno</label>
            <input type="text" name="turno" value="{{$incidente->turno}}" class="form-control" placeholder="Turno">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">MP</label>
            <input type="checkbox" name="mp" value="{{$incidente->mp}}" class="form-control" placeholder="MP">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">MC</label>
            <input type="checkbox" name="mc" value="{{$incidente->mc}}" class="form-control" placeholder="MC">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Instalación</label>
            <input type="checkbox" name="instalacion" value="{{$incidente->instalacion}}" class="form-control" placeholder="Instalación">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Asesoria</label>
            <input type="checkbox" name="asesoria" value="{{$incidente->asesoria}}" class="form-control" placeholder="Asesoria">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Retiro</label>
            <input type="checkbox" name="asesoria" value="{{$incidente->retiro}}" class="form-control" placeholder="Retiro">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nombre del equipo</label>
            <input type="text" name="nombre_equipo" value="{{$incidente->nombre_equipo}}" class="form-control" placeholder="Nombre del equipo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Marca</label>
            <input type="text" name="marca" value="{{$incidente->marca}}" class="form-control" placeholder="Marca del equipo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Modelo</label>
            <input type="text" name="modelo" value="{{$incidente->modelo}}" class="form-control" placeholder="Modelo del equipo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Activo fijo</label>
            <input type="text" name="activo_fijo" value="{{$incidente->activo_fijo}}" class="form-control" placeholder="Activo fijo">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Número de serie</label>
            <input type="text" name="num_serie" value="{{$incidente->num_serie}}" class="form-control" placeholder="N° serie">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Problema reportado</label>
            <input type="text" name="problema_reportado" value="{{$incidente->problema_reportado}}" class="form-control" placeholder="Problema reportado">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Problema encontrado</label>
            <input type="text" name="probelma_encontrado" value="{{$incidente->probelma_encontrado}}" class="form-control" placeholder="Problema encontrado">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Acción tomada</label>
            <input type="text" name="accion" value="{{$incidente->accion}}" class="form-control" placeholder="Introduce acción tomada">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Refacciones usadas</label>
            <input type="text" name="refac_usadas" value="{{$incidente->refac_usadas}}" class="form-control" placeholder="Refacciones usadas">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Observaciones</label>
            <input type="text" name="observaciones" value="{{$incidente->observaciones}}" class="form-control" placeholder="observaciones">
        </div>
        <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Ingeniero de servicio</label>
                <input type="text" name="ingeniero_servicio" value="{{$incidente->ingeniero_servicio}}" class="form-control" placeholder="Ingeniero de servicio">
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Reportó</label>
            <input type="text" name="report" value="{{$incidente->report}}" class="form-control" placeholder="">
            <input type="hidden" name="equipo_id" value="{{$incidente->equipo_id}}">
        </div>
        <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Aceptación de la orden de servicio</label>
                <input type="text" name="aceptacion_de_servicio" value="{{$incidente->aceptacion_de_servicio}}" class="form-control" placeholder="Aceptación de servicio">
        </div>
    </div>
    <div class="row col-md-4">
        <input type="submit" class="btn btn-primary btn-lg" value="Actualizar">
    </div>
    {!! Form::close() !!}
</div>
@endsection