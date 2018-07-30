@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar incidente usuario/paciente a equipo
        <span class=" badge badge-info">{{$equipo->nombre}}</span>
    </h3>
    <br>
    <br>
    <br>
    <form method="POST" action="{{ url('/reportespx/guardar') }}" class="form-horizontal">
        @csrf
        <div class="row">
            <hr>
            <div class="form-group col-md-12">
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN DE LA NOTIFICACIÓN</h6>
                </span>
                </span>
                <br>
                <br>    
            </div>
            <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Número de reporte de la cofepris</label>
                    <input type="text" name="num_cofe" class="form-control" placeholder="Introduce número de notificación cofepris " required>
                </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de reporte</label>
                <input type="text" name="num_noti" class="form-control" placeholder="Introduce número de notificación ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar de la notificación (Estado)</label>
                <input type="text" name="lugar_esta" class="form-control" placeholder="Introduce Estado">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar de la notificación(Municipio)</label>
                <input type="text" name="lugar_muni" class="form-control" placeholder="Introduce Municipio">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar de la notificación (Localidad)</label>
                <input type="text" name="lugar_locali" class="form-control" placeholder="Introduce Localidad">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha de notificación</label>
                <input type="date" name="fecha" class="form-control" placeholder="Introduce fecha de notificación">
            </div>
            <div class="form-group col-md-12">
                <hr>
                
                <span class="badge badge-primary">
                    <h6>IDENTIFICACIÓN DEL NOTIFICADOR</h6>
                </span>

            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del notificador</label>
                <input type="text" name="iniciales_notificador" class="form-control" placeholder="Introduce iniciales del notificador">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Introduce correo electronico del notificador" required>
            </div>
            <div class="form-group col-md-12">
                <span class="badge badge-primary">
                    <h6>¿Presentó el incidente?</h6>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="presento_incidente_si">
                <label class="form-check-label">
                    Sí
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="presento_incidente_no">
                <label class="form-check-label">
                    No
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">En caso de ser no,¿Que parentezco tiene con el paciente?</label>
                <input type="text" name="parentezco" class="form-control" placeholder="Introduce parentezco">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN SOBRE EL PACIENTE</h6>
                </span>

            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del paciente</label>
                <input type="text" name="iniciales_px" class="form-control" placeholder="Introduce iniciales del paciente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Edad del paciente</label>
                <input type="text" name="edad_px" class="form-control" placeholder="Introduce edad del paciente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Peso del paciente</label>
                <input type="text" name="peso_px" class="form-control" placeholder="Introduce peso del paciente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Introduce estatura del paciente</label>
                <input type="text" name="estatura_px" class="form-control" placeholder="Introduce estatura del paciente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Género</label>
                <select name="genero" class="form-control">
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                </select>
            </div>
            <br>
            <br>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN SOBRE EL INCIDENTE</h6>
                </span>

            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha del incidente</label>
                <input type="date" name="fecha_incidente" class="form-control" placeholder="Introduce fecha del incidente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar del incidente</label>
                <input type="text" name="lugar_estado" class="form-control" placeholder="Introduce lugar estado">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar del incidente</label>
                <input type="text" name="lugar_municipio" class="form-control" placeholder="Introduce lugar municipio">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar del incidente</label>
                <input type="text" name="lugar_localidad" class="form-control" placeholder="Introduce lugar localidad">
            </div>
            <div class="container">
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="casa" type="checkbox" value="1">
                    <label class="form-check-label">Casa</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="trabajo" type="checkbox" value="1">
                    <label class="form-check-label">Trabajo</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="via_publica" type="checkbox" value="1">
                    <label class="form-check-label">Vía publica</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="ambulancia" type="checkbox" value="1">
                    <label class="form-check-label">Ambulancia</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_incidente" class="form-control" placeholder="Otro, describa:">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>EN CASO DE QUE EL INCIDENTE SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:</h6>
                </span>

            </div>
            <div class="container">
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="servicio_pub" type="checkbox" value="1">
                    <label class="form-check-label">Público</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="servicio_priv" type="checkbox" value="1">
                    <label class="form-check-label">Privado</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre de la institución</label>
                <input type="text" name="nombre_institucion" class="form-control" placeholder="Introduce nombre de la institución">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Domicilio Completo:</label>
                <input type="text" name="domicilio_institucion" class="form-control" placeholder="Introduce domicilio completo">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>¿Reportó a otra autoridad?</h6>
                </span>

            </div>
            <div class="container">
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="autoridad_si" value="1">Sí</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="autoridad_no" value="1">No</label>
                    <br>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">¿A quién?</label>
                <input type="text" name="quien" class="form-control" placeholder="Introduce nombre de autoridad">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Descripción del incidente:</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Introduce descripcion del incidente">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>CONCECUENCIAS DEL INCIDENTE</h6>
                </span>

            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="muerte" value="1">Muerte</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="intervencion_med" value="1">Intervención médica</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="intervencion_quir" value="1">Intervención quirurgica</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="daño_indirecto" value="1">Daño indirecto</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="daño_muertefetal" value="1">Daño o muerte fetal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="deficiencia_permanente" value="1">Deficiencia permanente de una funion corporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="daño_permanente" value="1">Daño permanente de una estructura corporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="hospitalizacion" value="1">Hospitalización</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_consequen" class="form-control" placeholder="Introduce otra consequencia">
            </div>
            
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN DEL DISPOSITIVO MÉDICO</h6>

                    <h7>UBICACIÓN Y/O SITUACIÓN ACTUAL DEL DISPOSITIVO MÉDICO
                    </h7>
                </span>
                <div class="form-group col-md-12">
                    <hr>
                    <span class="badge badge-primary">
                        <h6></h6>
    
                        <h7>Datos del dispositivo médico
                        </h7>
                    </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre del dispositivo médico</label>
                <input type="text" name="nombre_dispo" class="form-control" placeholder="Introduce nombre">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Modelo:</label>
                <input type="text" name="modelo_dispo" class="form-control" placeholder="Introduce modelo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de serie o lote:</label>
                <input type="text" name="num_dispo" class="form-control" placeholder="Introduce número de serie o lote" required>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="desconocido" value="1">Desconocido</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="destruido" value="1">Destruido</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="fuera_servicio" value="1">Fuera de servcio</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="en_uso" value="1">En uso</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_situa" class="form-control" placeholder="Introduce otra situación">
            </div>
            <div class="form-group col-md-12">
                <h7>DEVUELTO A:
                </h7>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="fabricante" value="1">Fabricante</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="distribuidor" value="1">Distribuidor</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="comercializador" value="1">Comercializador</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_devuelto" class="form-control" placeholder="Introduce otra razón">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <h7>LOS DATOS O ANEXOS PUEDEN CONTENER INFORMACIÓN CONFIDENCIAL ¿ESTÁ DE ACUERDO EN HACERLOS PÚBLICOS?
                    <br> MARQUE LA CASILLA SI ESTA DE ACUERDO.
                </h7>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="hacer_publico_si" value="1">SI</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="hacer_publico_no" value="1">NO</label>
                    <input type="hidden" name="equipo_id" value="{{$equipo->id}}">
                <br>
            </div>



        </div>
        <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection