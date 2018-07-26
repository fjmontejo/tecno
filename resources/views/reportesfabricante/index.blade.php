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

    <h2>Reportes incidente adverso por fabricante</h2>
    <p>
        <a href="{{url('/reportesfabricante/crear')}}" class="btn btn-outline-primary">Agregar Nuevo</a>
    </p>
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Número de ingreso(COFEPRIS exclusivo)</th>
                    <th>Número de notificación inicial</th>
                    <th>Notificación Inicial</th>
                    <th>Reporte de seguimiento</th>
                    <th>Reporte final </th>
                    <th>Notificación inicial y reporte final</th>
                    <th>Número de reporte interno de la empresa</th>
                    <th>Número de registro sanitario del dispositivo</th>
                    <th>Fecha de notificación al titular del registro sanitario</th>
                    <th>Fecha de notificación</th>
                    <th>Titular del registro sanitario</th>
                    <th>Fabricante</th>
                    <th>Distribuidor</th>
                    <th>Comercializador</th>
                    <th>Nombre o razón social de la empresa</th>
                    <th>RFC </th>
                    <th>Iniciales del notificador</th>
                    <th>Nombre completo de quién dará seguimiento a la notificación</th>
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
                    <th>Fecha del incidente</th>
                    <th>Evento</th>
                    <th>Incidente</th>
                    <th>Incidente adverso</th>
                    <th>Incidente adverso previsto</th>
                    <th>Incidente adverso imprevisto</th>
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
                    <th>Interacciones con otras sustancias</th>
                    <th>Descripción del incidente adverso</th>
                    <th>Muerte</th>
                    <th>Intervención médica</th>
                    <th>Intervención quirúrgica</th>
                    <th>Daño indirecto</th>
                    <th>Daño o muerte fetal</th>
                    <th>Deficiencia permanete de una función corporal</th>
                    <th>Daño permanente de una estructura corporal</th>
                    <th>Hospitalización</th>
                    <th>Otro, especifique</th>
                    <th>Descripción de la consequencia del incidente adverso</th>
                    <th>Marca o denominación distintiva</th>
                    <th>Denominación genérica</th>
                    <th>Modelo, presentación, código número de catálogo</th>
                    <th>Número de serie o lote</th>
                    <th>Versión de software, si aplica</th>
                    <th>Descripción del dispositivo</th>
                    <th>Equipo médico</th>
                    <th>Prótesis, órtesis y ayudas funcionales</th>
                    <th>Agentes de diagnóstico</th>
                    <th>Insumos de uso odontológico</th>
                    <th>Materiales quirúrgicos y de curación</th>
                    <th>Productos higiénicos</th>
                    <th>Otro especifique</th>
                    <th>Clase</th>
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
                    <th>Titular de registro sanitario</th>
                    <th>Fabricante</th>
                    <th>Distribuidor</th>
                    <th>Otro, especifique</th>
                    <th>Acciones preventivas</th>
                    <th>Acciones correctivas</th>
                    <th>Acciones correctivas deseguridad de campo</th>
                    <th>Valor límite de tendencia conforme a buenas prácticas</th>
                    <th>Avances de la investigación</th>
                    <th>Resultados preliminares</th>   
                    <th>Causa raíz del incidente adverso</th>
                    <th>Resultados y conclusiones</th>
                    <th>Otra información de interés</th>
                    <th>Equipo</th> 

                </tr>
            </thead>
            <tbody>
                @foreach($reporte_fabricante as $reporfabricante)
                <tr>
                    <td>{{$reporfabricante->num_ingresocof}}</td>
                    <td>{{$reporfabricante->num_noti}}</td>
                    <td>@if($reporfabricante->noti_ini) X @else - @endif</td>
                    <td>@if($reporfabricante->repor_segui) X @else - @endif</td>
                    <td>@if($reporfabricante->repor_fin)X @else - @endif</td>
                    <td>@if($reporfabricante->notini_repfin) X @else -@endif</td>
                    <td>{{$reporfabricante->num_reporemp }}</td>
                    <td>{{$reporfabricante->num_sanita }}</td>
                    <td>{{$reporfabricante->fecha_avisotitu}}</td>
                    <td>{{$reporfabricante->fecha_noti}}</td>
                    <td>@if($reporfabricante->titu_sanita) X @else - @endif</td>
                    <td>@if($reporfabricante->fabricante_noti) X @else - @endif</td>
                    <td>@if($reporfabricante->distri_noti) X @else - @endif</td>
                    <td>@if($reporfabricante->comer_noti) X @else - @endif</td>
                    <td>{{$reporfabricante->nombre_razoempre}}</td>
                    <td>{{$reporfabricante->rfc}}</td>
                    <td>{{$reporfabricante->iniciales_noti}}</td>
                    <td>{{$reporfabricante->nombre_seguimiento}}</td>
                    <td>{{$reporfabricante->iniciales_ope}}</td>
                    <td>@if($reporfabricante->tecnico) X @else - @endif</td>
                    <td>@if($reporfabricante->enfermera) X @else - @endif</td>
                    <td>@if($reporfabricante->medico) X @else - @endif</td>
                    <td>@if($reporfabricante->paciente) X @else - @endif</td>
                    <td>@if($reporfabricante->familiar) X @else - @endif</td>
                    <td>{{$reporfabricante->otro_ope}}</td>
                    <td>{{$reporfabricante->iniciales_px}}</td>
                    <td>{{$reporfabricante->edad_px}}</td>
                    <td>{{$reporfabricante->peso_px}}</td>
                    <td>{{$reporfabricante->estatura_px}}</td>
                    <td>{{$reporfabricante->genero}}</td>
                    <td>{{$reporfabricante->fecha_incidente}}</td>
                    <td>@if($reporfabricante->evento) X @else - @endif</td>
                    <td>@if($reporfabricante->incidente) X @else - @endif</td>
                    <td>@if($reporfabricante->incidente_adverso) X @else - @endif</td>
                    <td>@if($reporfabricante->inci_previsto) X @else - @endif</td>
                    <td>@if($reporfabricante->inci_imprevisto) X @else - @endif</td>
                    <td>{{$reporfabricante->lugar_estado}}
                    <td>{{$reporfabricante->lugar_muni}}</td>
                    <td>{{$reporfabricante->lugar_locali}}</td>
                    <td>@if($reporfabricante->casa) X @else - @endif</td>
                    <td>@if($reporfabricante->trabajo) X @else - @endif</td>
                    <td>@if($reporfabricante->via_publica) X @else - @endif</td>
                    <td>@if($reporfabricante->ambulancia) X @else - @endif</td>
                    <td>{{$reporfabricante->otro_incidente}}</td>
                    <td>{{$reporfabricante->servicio_pub}}</td>
                    <td>{{$reporfabricante->servicio_priv}}</td>
                    <td>{{$reporfabricante->nombre_institucion}}</td>
                    <td>{{$reporfabricante->domicilio}}</td>
                    <td>{{$reporfabricante->autoridad_si}}</td>
                    <td>{{$reporfabricante->autoridad_no}}</td>
                    <td>{{$reporfabricante->quien}}</td>
                    <td>{{$reporfabricante->num_repor}}</td>
                    <td>@if($reporfabricante->no_prendio) X @else - @endif</td>
                    <td>{{$reporfabricante->toques}}</td>
                    <td>{{$reporfabricante->quemo}}</td>
                    <td>{{$reporfabricante->rompio}}</td>
                    <td>{{$reporfabricante->cayo}}</td>
                    <td>{{$reporfabricante->no_alarma}}</td>
                    <td>{{$reporfabricante->empaque_malo}}</td>
                    <td>{{$reporfabricante->reuso}}</td>
                    <td>{{$reporfabricante->reacondicion}}</td>
                    <td>{{$reporfabricante->error}}</td>
                    <td>{{$reporfabricante->mal_funcionamiento}}</td>
                    <td>{{$reporfabricante->desconexion}}</td>
                    <td>{{$reporfabricante->info_confusa}}</td>
                    <td>{{$reporfabricante->otro_evento}}</td>
                    <td>{{$reporfabricante->uso_diferente}}</td>
                    <td>{{$reporfabricante->luz_inadecua}}</td>
                    <td>{{$reporfabricante->desconocimientofun}}</td>
                    <td>{{$reporfabricante->interaccion_sustancias}}</td>    
                    <td>{{$reporfabricante->descripcion_incidente}}</td>
                    <td>{{$reporfabricante->muerte}}</td>
                    <td>{{$reporfabricante->intervencion_med}}</td>
                    <td>{{$reporfabricante->intervencion_quir}}</td>
                    <td>{{$reporfabricante->daño_indirecto}}</td>
                    <td>{{$reporfabricante->daño_muertefetal}}</td>
                    <td>{{$reporfabricante->deficiencia_permanente}}</td>
                    <td>{{$reporfabricante->daño_permanente}}</td>
                    <td>{{$reporfabricante->hospitalizacion}}</td>
                    <td>{{$reporfabricante->otro_consequen}}</td>
                    <td>{{$reporfabricante->conse_inci_descripcion}}</td>
                    <td>{{$reporfabricante->marcaodenom}}</td>
                    <td>{{$reporfabricante->denominaciongene}}</td>
                    <td>{{$reporfabricante->modelo_presentacion}}</td>
                    <td>{{$reporfabricante->numero_lote}}</td>
                    <td>{{$reporfabricante->version_software}}</td>
                    <td>{{$reporfabricante->descri_dispo}}</td>
                    <td>{{$reporfabricante->equipo_medico}}</td>
                    <td>{{$reporfabricante->protesis}}</td>
                    <td>{{$reporfabricante->agente_diagnos}}</td>
                    <td>{{$reporfabricante->insumo_odonto}}</td>
                    <td>{{$reporfabricante->mate_quiru}}</td>
                    <td>{{$reporfabricante->produc_higienicos}}</td>
                    <td>{{$reporfabricante->otro_tipo}}</td>
                    <td>{{$reporfabricante->clasificacion}}</td>
                    <td>{{$reporfabricante->tratamiento}}</td>
                    <td>{{$reporfabricante->diagnostico}}</td>
                    <td>{{$reporfabricante->monitoreo}}</td>
                    <td>{{$reporfabricante->otro_uso}}</td>
                    <td>{{$reporfabricante->adulto}}</td>
                    <td>{{$reporfabricante->pediatrico}}</td>
                    <td>{{$reporfabricante->neonatal}}</td>
                    <td>{{$reporfabricante->geriatrico}}</td>
                    <td>{{$reporfabricante->desconocido}}</td>
                    <td>{{$reporfabricante->destruido}}</td>
                    <td>{{$reporfabricante->fuera_servicio}}</td>
                    <td>{{$reporfabricante->en_uso}}</td>
                    <td>{{$reporfabricante->otro_situa}}</td>
                    <td>{{$reporfabricante->titu_sanitario}}</td>
                    <td>{{$reporfabricante->fabricante}}</td>
                    <td>{{$reporfabricante->distribuidor}}</td>
                    <td>{{$reporfabricante->otro_devuelto}}</td>
                    <td>{{$reporfabricante->acciones_preven}}</td>
                    <td>{{$reporfabricante->acciones_correc}}</td>
                    <td>{{$reporfabricante->acciones_seguricampo}}</td>
                    <td>{{$reporfabricante->valor_limite}}</td>
                    <td>{{$reporfabricante->avances_investigacion}}</td>
                    <td>{{$reporfabricante->resultados_preliminares}}</td>
                    <td>{{$reporfabricante->causa_raiz}}</td>
                    <td>{{$reporfabricante->resultados_conclusiones}}</td>
                    <td>{{$reporfabricante->info_interes}}</td>
                    <td>{{$reporfabricante->publico_si}}</td>
                    <td>{{$reporfabricante->publico_no}}</td>
                    <td>{{$reporfabricante->equipo['nombre']}}</td>
                    

                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                       
                        </div>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection