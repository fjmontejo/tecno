@extends('layouts.app') @section('content')
<div class="container">
    <h3>ORDEN DE SERVICIO
        <span class="badge badge-info">{{$equipo->nombre}}</span>
    </h3>
    <hr> @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ url('/incidentes/guardar') }}">
        @csrf
        <div class="row col-md-12">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha(*)</label>
                <input type="date" name="fecha" class="form-control" placeholder="Introduce fecha ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Área</label>
                <input type="text" name="area" class="form-control" placeholder="Introduce área "required>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Personal que reporta</label>
                <input type="text" name="reportado_por" class="form-control" placeholder="Quién reporta:">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Turno</label>
                <input type="text" name="turno" class="form-control" placeholder="Turno">
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="mp" type="checkbox" value="1">
                <label class="form-check-label">MP</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="mc" type="checkbox" value="1">
                <label class="form-check-label">MC</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="instalacion" type="checkbox" value="1">
                <label class="form-check-label">Instalación</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="asesoria" type="checkbox" value="1">
                <label class="form-check-label">Asesoria</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="retiro" type="checkbox" value="1">
                <label class="form-check-label">Retiro</label>
            </div>
            <hr>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre del equipo</label>
                <input type="text" name="nombre_equipo" class="form-control" placeholder="Introduce nombre del equipo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Marca (*)</label>
                <input type="text" name="marca" class="form-control" placeholder="Introduce marca del equipo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Introduce modelo del equipo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Activo fijo (*)</label>
                <input type="text" name="activo_fijo" class="form-control" placeholder="Introduce Activo fijo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de serie (*)</label>
                <input type="text" name="num_serie" class="form-control" placeholder="Introduce criterio de reporte " required>
            </div>
            <hr>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Problema reportado</label>
                <input type="text" name="problema_reportado" class="form-control" placeholder="Introduce porblema reportado ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Problema encontrado</label>
                <input type="text" name="probelma_encontrado" class="form-control" placeholder="Introduce probelma encontrado">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Acción tomada</label>
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
            <hr>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Ingeniero de servicio</label>
                <textarea class="form-control" name="ingeniero_servicio" rows="4" cols="50" placeholder="Describe..."></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Jefe de Biomédica</label>
                <input type="text" name="report" value="{{Auth::user()->name}}" class="form-control" placeholder="Quien reportó?" required>
                <input type="hidden" name="equipo_id" value="{{$equipo->id}}">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Aceptación de la orden de servicio</label>
                <textarea class="form-control" name="aceptacion_de_servicio" rows="4" cols="50" placeholder="Firma de acuerdo"></textarea>
            </div>
        </div>
        <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection