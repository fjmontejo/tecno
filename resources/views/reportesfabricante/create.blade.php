@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar incidente por personal de la salud
        <span class=" badge badge-info">{{$equipo->nombre}}</span>
    </h3>
    <hr>
    <form method="POST" action="{{ url('/reportesfabricante/guardar') }}" class="form-horizontal">
        @csrf
        <div class="row">

            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de ingreso(USO EXCLUSIVO DE LA COFEPRIS)</label>
                <input type="text" name="num_ingresocof" class="form-control" placeholder="Introduce número de ingreso ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de notificación inicial</label>
                <input type="text" name="num_noti" class="form-control" placeholder="Introduce número de ingreso ">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN DE LA NOTIFICACIÓN</h6>
                </span>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="noti_ini">
                <label class="form-check-label">
                    Notificación inicial
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="repor_segui">
                <label class="form-check-label">
                    Reporte de seguimiento
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="notini_repfin">
                <label class="form-check-label">
                    Notificación inicial y Reporte final
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de reporte interno de la empresa</label>
                <input type="text" name="num_reporemp" class="form-control" placeholder="Introduce número de reporte">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de registro sanitario del equipo</label>
                <input type="text" name="num_sanita" class="form-control" placeholder="Introduce lugar de notificación">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha aviso al titular del registro</label>
                <input type="date" name="fecha_avisotitu" class="form-control" placeholder="Introduce fecha de notificación">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha de la notificación</label>
                <input type="date" name="fecha_noti" class="form-control" placeholder="Introduce fecha de notificación">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>IDENTIFICACIÓN DEL NOTIFICADOR</h6>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="titu_sanita">
                <label class="form-check-label">
                    Titular del registro sanitario
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="fabricante_noti">
                <label class="form-check-label">
                    Fabricante
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="distri_noti">
                <label class="form-check-label">
                    Distribuidor
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="comer_noti">
                <label class="form-check-label">
                    Comercializador
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre o razón social de la empresa</label>
                <input type="text" name="nombre_razoempre" class="form-control" placeholder="Introduce otra opción">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">RFC</label>
                <input type="text" name="rfc" class="form-control" placeholder="Introduce iniciales del notificador">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">iniciales de la persona que realiza la notificación</label>
                <input type="email" name="iniciales_noti" class="form-control" placeholder="Introduce correo electronico del notificador">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre de la persona que dará seguimiento a la notificación</label>
                <input type="text" name="nombre_seguimiento" class="form-control" placeholder="Introduce área de adscripcion y/o servicio de quien presenta la notificación">
            </div>
            <div class="form-group col-md-12">
                <span class="badge badge-primary">
                    <h6>Datos del operador del dispositivo médico durante el incidente o incidente adverso</h6>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales</label>
                <input type="text" name="iniciales_ope" class="form-control" placeholder="Introduce área de adscripcion y/o servicio de quien presenta la notificación">
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="tecnico">
                <label class="form-check-label">
                    Técnico
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="enfermera">
                <label class="form-check-label">
                    Enfermera
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="medico">
                <label class="form-check-label">
                    Médico
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="paciente">
                <label class="form-check-label">
                    Paciente
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="familiar">
                <label class="form-check-label">
                    Familiar
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro, especifique</label>
                <input type="text" name="otro_ope" class="form-control" placeholder="Introduce otra opción">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>Identificación del paciente</h6>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del paciente</label>
                <input type="text" name="iniciales_px" class="form-control" placeholder="Introduce iniciales o clave del paciente">
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
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>Información sobre el incidente o incidente adverso</h6>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Fecha del incidente</label>
                <input type="date" name="fecha_incidente" class="form-control" placeholder="Introduce fecha del incidente">
            </div>
            <div class="container">
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="evento" type="checkbox" value="1">
                    <label class="form-check-label">Evento</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="incidente" type="checkbox" value="1">
                    <label class="form-check-label">Incidente</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="incidente_adverso" type="checkbox" value="1">
                    <label class="form-check-label">Incidente adverso</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="inci_previsto" type="checkbox" value="1">
                    <label class="form-check-label">Incidente previsto</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="inci_imprevisto" type="checkbox" value="1">
                    <label class="form-check-label">Incidente imprevisto</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar estado</label>
                <input type="text" name="lugar_estado" class="form-control" placeholder="Estado">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar municipio</label>
                <input type="text" name="lugar_muni" class="form-control" placeholder="Municipio">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar localidad</label>
                <input type="text" name="lugar_locali" class="form-control" placeholder="localidad">
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="casa" type="checkbox" value="1">
                <label class="form-check-label">Casa</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="servicio" type="checkbox" value="1">
                <label class="form-check-label">Público</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="trabajo" type="checkbox" value="1">
                <label class="form-check-label">Trabajo</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="via_publica" type="checkbox" value="1">
                <label class="form-check-label">Vía pública</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="ambulancia" type="checkbox" value="1">
                <label class="form-check-label">Ambulancia</label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro, describa</label>
                <input type="text" name="otro_incidente" class="form-control" placeholder="Otro">
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="servicio" type="checkbox" value="1">
                <label class="form-check-label">Público</label>
            </div>
            <div class="form-group col-md-12 form-check">
                <input class="form-check-input" name="servicio" type="checkbox" value="2">
                <label class="form-check-label">Privado</label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre de la institución</label>
                <input type="text" name="nombre_institucion" class="form-control" placeholder="Nombre completo">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Domicilio</label>
                <input type="text" name="domicilio" class="form-control" placeholder="Domicilio">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>EN CASO DE QUE EL INCIDENTE SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:</h6>
                </span>
            </div>
            <div class="container">
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="autoridad" type="checkbox" value="1">
                    <label class="form-check-label">Si</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="autoridad" type="checkbox" value="2">
                    <label class="form-check-label">No</label>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">¿A quien?</label>
                    <input type="text" name="quien" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Número de reporte</label>
                    <input type="text" name="num_repor" class="form-control" placeholder="Número de reporte">
                </div>
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INDIQUE CON "X" EL O LOS EVENTOS QUE SE PRESENTARON DURANTE EL INCIDENTE, QUE NO CORRESPONDEN AL USO
                        NORMAL DEL DISPOSITIVO MÉDICO</h6>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="no_prendio" value="1">NO PRENDIÓ</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="toques" value="1">DIO "TOQUES"</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="quemo" value="1">SE QUEMÓ</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="rompio" value="1">SE ROMPIÓ O QUEBRÓ</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="cayo" value="1">SE CAYÓ Ó GOLPEÓ</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="no_alarma" value="1">NO SONÓ LA ALARMA CONFORME A LO PROGRAMADO O ESPECIFICADO POR EL FABRICANTE
                </label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="empaque_malo" value="1">EMPAQUE MALTRATADO QUE PUEDE PONER EN DUDA LA ESTERILIDAD DEL DISPOSITIVO MÉDICO, INSTRUMENTAL, PRÓTESIS
                    U ÓRTESIS
                </label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="reuso" value="1">REUTILIZACIÓN DE UN DISPOSITIVO DE UN SOLO USO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="reacondicion" value="1">REACONDICIONAMIENTO O REPARACIÓN DE UN DISPOSITIVO DE UN SOLO USO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="error" value="1">INDICA ERROR (RESULTADOS ERRÓNEOS, USUARIO, ETC.)</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="mal_funcionamiento" value="1">NO FUNCIONA COMO SE INDICA EN EL MANUAL Ó SE BLOQUEO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="desconexion" value="1">DESCONEXIÓN, MALA CONEXIÓN , SEPARACIÓN</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="info_confusa" value="1">INFORMACIÓN DEL ETIQUETADO Ó EMPAQUE INCOMPLETA O CONFUSA</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_evento" class="form-control" placeholder="Introduce otra EVENTO">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">USO DIFERENTE:</label>
                <input type="text" name="uso_diferente" class="form-control" placeholder="Introduce otra EVENTO">
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="luz_inadecua" value="1">SUMINISTRO ELÉCTRICO (LUZ) INSUFICIENTE O INADECUADA</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="desconocimientofun" value="1">DESCONOCIMIENTO DEL FUNCIONAMIENTO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="interaccion_sustancias" value="1">INTERACCIONES CON OTRAS SUSTANCIAS O PRODUCTOS</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Descrpción del incidente:</label>
                <input type="text" name="descripcion_incidente" class="form-control" placeholder="Introduce descripcion del incidente">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>CONSECUENCIA DEL INCIDENTE</h6>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="muerte" value="1">Muerte</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="intervencion_med" value="1">Interveción médica</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="intervencion_quir" value="1">Interveción quirúrgica</label>
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
                    <input type="checkbox" name="deficiencia_permanente" value="1">Deficiencia permanente de una función coprporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="daño_permanente" value="1">Daño permanente de una estructura coprporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="hospitalizacion" value="1">Hospitalización</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otra</label>
                <input type="text" name="otro_consequen" class="form-control" placeholder="Introduce otra consecuencia">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Consecuencia incidente</label>
                <input type="text" name="conse_inci_descripcion" class="form-control" placeholder="Introduce consecuencia">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>IDENTIFICACIÓN DEL DISPOSITIVO MÉDICO</h6>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Marca o denomonación distintiva</label>
                <input type="text" name="marcaodenom" class="form-control" placeholder="Introduce marca o denominación">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Denomonación genérica</label>
                <input type="text" name="denominaciongene" class="form-control" placeholder="Introduce marca o denominación">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">MODELO, PRESENTACIÓN, CÓDIGO O NÚMERO DE CATÁLOGO</label>
                <input type="text" name="modelo_presentacion" class="form-control" placeholder="Introduce marca o denominación">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">NÚMERO DE SERIE O LOTE</label>
                <input type="text" name="numero_lote" class="form-control" placeholder="Introduce NÚMERO DE SERIE O LOTE">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Versión de software, si aplica</label>
                <input type="text" name="version_software" class="form-control" placeholder="Introduce NOMBRE DE FABRICANTE, DISTRIBUIDOR O COMERCIALIZADOR">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Descripción del dispositivo </label>
                <input type="text" name="descri_dispo" class="form-control" placeholder="Introduce NÚMERO DE REGISTRO SANITARIO ">
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="equipo_medico" value="1">Equipo médico</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="protesis" value="1">Prótesis</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="insumo_odonto" value="1">Insumos de uso de odontologico</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="mate_quiru" value="1">Material quirurgico</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="produc_higienicos" value="1">Productos higiénicos</label>
                <br>
            </div>
            
            <div class="form-group col-md-4 form-check">
                <label for="exampleInputEmail1">Otro(especifique)</label>
                <input type="text" name="otro_tipo" class="form-control" placeholder="Introduce otro uso">
                <input type="hidden" name="equipo_id" value="{{$equipo->id}}">
            </div>
            
            <div class="form-group col-md-4 form-check">
                <label for="exampleInputEmail1">Género</label>
                <select name="clasificacion" class="form-control">
                    <option value="clase1">clase 1</option>
                    <option value="clase2">clase 2</option>
                    <option value="clase3">clase 3</option>
                </select>
            </div>    
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="tratamiento" value="1">Tratamiento</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check  ">
                    <label>
                        <input type="checkbox" name="diagnostico" value="1">Diagnostico</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="monitoreo" value="1">Monitoreo</label>
                    <br>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Otro(especifique)</label>
                    <input type="text" name="otro_uso" class="form-control" placeholder="Introduce otro uso">
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="adulto" value="1">Adulto</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="pediatrico" value="1">Pediatrico</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="neonatal" value="1">Neonatal</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="geriatrico" value="1">Geriatrico</label>
                    <br>
                </div>
            </div>
                <div class="form-group col-md-12">
                    <hr>

                    <span class="badge badge-primary">
                        <h6>UBICACIÓN Y/O SITUACIÓN ACTUAL DEL DISPOSITIVO MÉDICO
                        </h6>
                    </span>
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
                        <input type="checkbox" name="fuera_servicio" value="1">Fuera de servicio</label>
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
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="titu_sanitario" value="1">Titular sanitario</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="fabricante" value="1">fabricante</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="distribuidor" value="1">distribuidor</label>
                    <br>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Otro:</label>
                    <input type="text" name="otro_devuelto" class="form-control" placeholder="Introduce otra">
                </div>
                <div class="form-group col-md-12">
                    <hr>
                    <span class="badge badge-primary">
                    <h5>Seguimiento y cierre de la notificación
                    </h5>
                </span>
                </div>
            </div>
            
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Acciones preventivas:</label>
                    <input type="text" name="acciones_preven" class="form-control" placeholder="Introduce acciones preventivas">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Acciones correctivas:</label>
                    <input type="text" name="acciones_correc" class="form-control" placeholder="Introduce acciones correctivas">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Acciones de seguridad de campo</label>
                    <input type="text" name="acciones_seguricampo" class="form-control" placeholder="Introduce acciones tomadas">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Valor limite:</label>
                    <input type="text" name="valor_limite" class="form-control" placeholder="Introduce valor limite">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Avances de la investigación:</label>
                    <input type="text" name="avances_investigacion" class="form-control" placeholder="Avances de la investigación">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Resultados preliminares:</label>
                    <input type="text" name="resultados_preliminares" class="form-control" placeholder="Introduce acciones preventivas">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Resultados y conclusiones:</label>
                    <input type="text" name="resultados_conclusiones" class="form-control" placeholder="Introduce resultados y conclusiones">
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Otra información de interes</label>
                    <input type="text" name="info_interes" class="form-control" placeholder="Introduce información">
                </div>
            </div>
        </div>
                <div class="form-group col-md-12">
                    <hr>
                    <span class="badge badge-primary">
                        <h6>LOS DATOS O ANEXOS PUEDEN CONTENER INFORMACIÓN CONFIDENCIAL ¿ESTÁ DE ACUERDO EN HACERLOS PÚBLICOS?
                            </h6>
                    </span>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="publico" value="1">SI</label>
                    <br>
                </div>
                <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="publico" value="2">NO</label>
                    <input type="hidden" name="equipo_id" value="{{$equipo->id}}">
                    <br>
                </div>
            </div>


            </div> 
                <br>
                <br>  
                <br>
            <div class="container">    
            <div class="row col-md-4">
                <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
            </div>
        </div>
    </form>
</div>
    @endsection