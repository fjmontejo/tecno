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

    <h2>Reportes incidente adverso por personal de salud</h2>
    <p>
       <!-- <a href="{{url('/reportessalud/crear')}}" class="btn btn-outline-primary">Agregar Nuevo</a>-->
    </p>
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Número de ingreso(COFEPRIS exclusivo)</th>
                    <th>Número de notificación inicial</th>
                    <th>Lugar de notificación</th>
                    <th>Fecha de notificación</th>
                    <th>Centro estatal</th>
                    <th>Centro institucional</th>
                    <th>Hospital</th>
                    <th>Consultorio</th>
                    <th>Laboratorio</th>
                    <th>Otro especifique:</th>
                    <th>Iniciales del notificador</th>
                    <th>Email</th>
                    <th>Área de adscripción?</th>
                    <th>¿Presentó el incidente?</th>
                    <th>Iniciales del operador</th>
                    <th>Técnico</th>
                    <th>Enfermera</th>
                    <th>Médico</th>
                    <th>Paciente</th>
                    <th>Familiar</th>
                    <th>Otro especifique:</th>
                    <th>Iniciales del paciente</th>
                    <th>Edad del paciente</th>
                    <th>Peso del paciente</th>
                    <th>Estatura del paciente</th>
                    <th>Género</th>
                    <th>Resumen de la historia clinica del paciente</th>
                    <th>Fecha del incidente</th>
                    <th>Estado</th>
                    <th>Municipio</th>
                    <th>Localidad</th>
                    <th>Casa</th>
                    <th>Trabajo</th>
                    <th>Vía pública</th>
                    <th>Ambulancia</th>
                    <th>Otro, especifique</th>
                    <th>Especifique en que tipo de centro de atención fue</th>
                    <th>Nombre de la institución</th>
                    <th>Domicilio de la institución</th>
                    <th>¿Ha reportado a otra autoridad?</th>
                    <th>¿A quien?</th>
                    <th>Número de reporte</th>
                    <th>No prendió</th>
                    <th>Dio "toques"</th>
                    <th>Se quemó</th>
                    <th>Se rompió o quebró</th>
                    <th>Se , separacióncayó o golpeó</th>
                    <th>No sonó la alarma conforme a lo programado</th>
                    <th>Empaque maltratado pone en duda la esterilidad del dispositivo</th>
                    <th>Reutilización de un dispositivo de un soló uso</th>
                    <th>Reacondicionamiento o reparación de un dispositivo de un solo uso</th>
                    <th>Indica error(resultados erroneos,usuario, etc)</th>
                    <th>No funciona como indica el manual de usuario</th>
                    <th>Desconexión, mala conexión, separación</th>
                    <th>Información del etiquetado o empaque incompleta o confusa</th>
                    <th>Otro, especifique</th>
                    <th>Uso diferente al indicado por el fabricante</th>
                    <th>Suministro électrico(luz) insuficiente</th>
                    <th>Desconocimiento del funcionamiento</th>
                    <th>Interacciones con otras sustancias o productos</th>
                    <th>Descripción y consequencia del incidente</th>
                    <th>Muerte</th>
                    <th>Intervención médica</th>
                    <th>Intervención quirúrgica</th>
                    <th>Daño indirecto</th>
                    <th>Daño o muerte fetal</th>
                    <th>Deficiencia permanete de una función corporal</th>
                    <th>Daño permanente de una estructura corporal</th>
                    <th>Hospitalización</th>
                    <th>Otro, especifique</th>
                    <th>Marca o denominación distintiva</th>
                    <th>Denominación genérica</th>
                    <th>Modelo, presentación, códigoo número de catálogo</th>
                    <th>Número de serie o lote</th>
                    <th>Nombre de fabricante o distribuidor</th>
                    <th>Número de registro saniatario</th>
                    <th>Tratamiento</th>
                    <th>Diagnóstico</th>
                    <th>Monitoreo</th>
                    <th>Otro, especifique</th>
                    <th>Adulto</th>
                    <th>Pediátrico</th>
                    <th>Neonatal</th>
                    <th>Geriátrico</th>
                    <th>Desconocido</th>
                    <th>Destruido</th>
                    <th>Fuera de servicio</th>
                    <th>En uso</th>
                    <th>Otro, especifique:</th>
                    <th>Fabricante</th>
                    <th>Distribuidor</th>
                    <th>Comercializador</th>
                    <th>otro, especifique:</th>
                    <th>¿Ha leido instructivo de uso?</th>
                    <th>¿Uso claro del dispositivo?</th>
                    <th>Recibio capacitación?</th>
                    <th>¿Hacer público?/th>
                    <th>Equipo</th>    
                </tr>
            </thead>
            <tbody>
                @foreach($reporte_personalsalud as $reporsalud)
                <tr>
                    <td>{{$reporsalud->num_ingresocof}}</td>
                    <td>{{$reporsalud->num_noti}}</td>
                    <td>{{$reporsalud->lugar_noti}}</td>
                    <td>{{$reporsalud->fecha}}</td>
                    <td>{{$reporsalud->centro_estat}}</td>
                    <td>{{$reporsalud->centro_inst}}</td>
                    <td>{{$reporsalud->hospital }}</td>
                    <td>{{$reporsalud->consultorio }}</td>
                    <td>{{$reporsalud->laboratorio}}</td>
                    <td>{{$reporsalud->otro_lug}}</td>
                    <td>{{$reporsalud->iniciales_noti}}</td>
                    <td>{{$reporsalud->email}}</td>
                    <td>{{$reporsalud->area_adscri}}</td>
                    <td>{{$reporsalud->presento}}</td>
                    <td>{{$reporsalud->iniciales_ope}}</td>
                    <td>{{$reporsalud->tecnico}}</td>
                    <td>{{$reporsalud->enfermera}}</td>
                    <td>{{$reporsalud->medico}}</td>
                    <td>{{$reporsalud->paciente}}</td>
                    <td>{{$reporsalud->familiar}}</td>
                    <td>{{$reporsalud->otro_ope}}</td>
                    <td>{{$reporsalud->iniciales_px_clv}}</td>
                    <td>{{$reporsalud->edad_px}}</td>
                    <td>{{$reporsalud->peso_px}}</td>
                    <td>{{$reporsalud->estatura_px}}</td>
                    <td>{{$reporsalud->genero}}</td>
                    <td>{{$reporsalud->resumen_hclinic}}</td>
                    <td>{{$reporsalud->fecha_incidente}}</td>
                    <td>{{$reporsalud->lugar_estado}}</td>
                    <td>{{$reporsalud->lugar_muni}}</td>
                    <td>{{$reporsalud->lugar_locali}}</td>
                    <td>{{$reporsalud->casa}}</td>
                    <td>{{$reporsalud->trabajo}}</td>
                    <td>{{$reporsalud->via_publica}}</td>
                    <td>{{$reporsalud->ambulancia}}</td>
                    <td>{{$reporsalud->otro_incidente}}</td>
                    <td>{{$reporsalud->servicio}}
                    <td>{{$reporsalud->nombre_institucion}}</td>
                    <td>{{$reporsalud->domicilio}}</td>
                    <td>{{$reporsalud->autoridad}}</td>
                    <td>{{$reporsalud->quien}}
                    <td>{{$reporsalud->reporte}}</td>
                    <td>{{$reporsalud->no_prendio}}</td>
                    <td>{{$reporsalud->toques}}</td>
                    <td>{{$reporsalud->quemo}}</td>
                    <td>{{$reporsalud->rompio}}</td>
                    <td>{{$reporsalud->cayo}}</td>
                    <td>{{$reporsalud->no_alarma}}</td>
                    <td>{{$reporsalud->empaque_malo}}</td>
                    <td>{{$reporsalud->reuso}}</td>
                    <td>{{$reporsalud->reacondicion}}</td>
                    <td>{{$reporsalud->error}}</td>
                    <td>{{$reporsalud->mal_funcionamiento}}</td>
                    <td>{{$reporsalud->desconexion}}</td>
                    <td>{{$reporsalud->info_confusa}}</td>
                    <td>{{$reporsalud->otro_evento}}</td>
                    <td>{{$reporsalud->uso_diferente}}</td>
                    <td>{{$reporsalud->luz_inadecua}}</td>
                    <td>{{$reporsalud->desconocimientofun}}</td>
                    <td>{{$reporsalud->interaccion_sustancias}}</td>
                    <td>{{$reporsalud->descripcionyconsequencia}}</td>
                    <td>{{$reporsalud->muerte}}</td>
                    <td>{{$reporsalud->intervencion_med}}</td>
                    <td>{{$reporsalud->intervencion_quir}}</td>
                    <td>{{$reporsalud->daño_indirecto}}</td>
                    <td>{{$reporsalud->daño_muertefetal}}</td>
                    <td>{{$reporsalud->deficiencia_permanente}}</td>
                    <td>{{$reporsalud->daño_permanente}}</td>
                    <td>{{$reporsalud->hospitalizacion}}</td>    
                    <td>{{$reporsalud->otro_consequen}}</td>
                    <td>{{$reporsalud->marcaodenom}}</td>
                    <td>{{$reporsalud->denominaciongene}}</td>
                    <td>{{$reporsalud->modelo_presentacion}}</td>
                    <td>{{$reporsalud->numero_lote}}</td>
                    <td>{{$reporsalud->nombre_fabricante}}</td>
                    <td>{{$reporsalud->numero_sanitario}}</td>
                    <td>{{$reporsalud->tratamiento}}</td>
                    <td>{{$reporsalud->diagnostico}}</td>
                    <td>{{$reporsalud->monitoreo}}</td>
                    <td>{{$reporsalud->otro_uso}}</td>
                    <td>{{$reporsalud->adulto}}</td>
                    <td>{{$reporsalud->pediatrico}}</td>
                    <td>{{$reporsalud->neonatal}}</td>
                    <td>{{$reporsalud->geriatrico}}</td>
                    <td>{{$reporsalud->desconocido}}</td>
                    <td>{{$reporsalud->destruido}}</td>
                    <td>{{$reporsalud->fuera_servicio}}</td>
                    <td>{{$reporsalud->en_uso}}</td>
                    <td>{{$reporsalud->otro_situa}}</td>
                    <td>{{$reporsalud->fabricante}}</td>
                    <td>{{$reporsalud->distribuidor}}</td>
                    <td>{{$reporsalud->comercializador}}</td>
                    <td>{{$reporsalud->otro_devuelto}}</td>
                    <td>{{$reporsalud->leidoinstruc}}</td>
                    <td>{{$reporsalud->uso_claro}}</td>
                    <td>{{$reporsalud->capacitacion}}</td>
                    <td>{{$reporsalud->publico}}</td>
                    <td>{{$reporsalud->equipo['nombre']}}</td>
                    

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                        @if(Auth::user()->type_user == 'administrador')    
                        <a href="{{url('/reportessalud/editar')}}/{{$reporsalud->id}}" class=" btn-sm btn btn-primary">Editar</a>
                        <a href="{{url('/reportessalud/eliminar')}}/{{$reporsalud->id}}" class="btn btn-sm btn btn-danger">Eliminar</a>
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