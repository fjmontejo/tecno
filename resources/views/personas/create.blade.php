@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar persona</h3>
    <hr>
    <form method="POST" action="{{ url('/personas/guardar') }}">
        @csrf
        <div class="row col-md-12">
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Introduce nombre ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Introduce apellidos">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Edad</label>
                <input type="text" name="edad" class="form-control" placeholder="Introduce edad">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Correo Electrónico (*)</label>
                <input type="email" name="email" class="form-control" placeholder="Introduce correo" required>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Contraseña de Acceso (*)</label>
                <input type="password" name="password" class="form-control" placeholder="Introduce contraseña" required>
            </div> 
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Tipo de Usuario (*)</label>
               <select name="type_user" class="form-control" required>
                <option value="administrador">Administrador</option>
                <option value="ing_servicio">Ingeniero de servicio</option>
                <option value="inventario">Jefe de Inventario</option>
               </select>
            </div>   
        </div>
        <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection