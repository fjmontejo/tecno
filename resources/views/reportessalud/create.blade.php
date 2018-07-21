@extends('layouts.app') @section('content')
<div class="container">
    <h3>Registrar incidente por personal de la salud
        <span class=" badge badge-info">{{$equipo->nombre}}</span>
    </h3>
    <hr>
    <form method="POST" action="{{ url('/reportessalud/guardar') }}" class="form-horizontal">
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INFORMACIÓN DE LA NOTIFICACIÓN</h6>
                </span>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de ingreso(USO EXCLUSIVO DE LA COFEPRIS)</label>
                <input type="text" name="num_ingresocof" class="form-control" placeholder="Introduce número de ingreso ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de reporte</label>
                <input type="text" name="num_noti" class="form-control" placeholder="Introduce número de notificación ">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar de la notificación</label>
                <input type="text" name="lugar_noti" class="form-control" placeholder="Introduce lugar de notificación">
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
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="centro_estat">
                <label class="form-check-label">
                    Centro estatal
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="centro_inst">
                <label class="form-check-label">
                    Centro institucional
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="hospital">
                <label class="form-check-label">
                Hospital
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="consultorio">
                <label class="form-check-label">
                Consultorio
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="laboratorio">
                <label class="form-check-label">
                 Laboratorio
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro, especifique</label>
                <input type="text" name="otro_lug" class="form-control" placeholder="Introduce otra opción">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del notificador</label>
                <input type="text" name="iniciales_noti" class="form-control" placeholder="Introduce iniciales del notificador">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Introduce correo electronico del notificador">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Área de adscripción</label>
                <input type="text" name="area_adscri" class="form-control" placeholder="Introduce área de adscripcion y/o servicio de quien presenta la notificación">
            </div>
            <div class="form-group col-md-12">
                    <span class="badge badge-primary">
                        <h6>¿Presentó el incidente?</h6>
                    </span>
                </div>
            <div class="form-group col-md-4 form-check">
                <input class="form-group " type="checkbox" value="1" name="presento">
                <label class="form-check-label">
                    Sí
                </label>
            </div>
            <div class="form-group col-md-4 form-check">
                    <input class="form-group " type="checkbox" value="2" name="presento">
                    <label class="form-check-label">
                        No
                    </label>
                </div>
            <div class="form-group col-md-12">
                <hr>            
                <span class="badge badge-primary">
                    <h6>Datos DEL OPERADOR DEL DISPOSITIVO</h6>
                </span>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del operador</label>
                <input type="text" name="iniciales_ope" class="form-control" placeholder="Introduce iniciales del operador">
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
                <span class="badge badge-primary">
                    <h6>DATOS DEL PACIENTE</h6>
                </span>
            </div>  
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Iniciales del paciente</label>
                <input type="text" name="iniciales_px_clv" class="form-control" placeholder="Introduce iniciales o clave del paciente">
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
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Resumen de la historia clínica del paciente (Realacionada con el incidente)</label>
                <input type="text" name="resumen_hclinic" class="form-control" placeholder="Introduce resumen de la historia clínica">
            </div>
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
                <input type="text" name="lugar_estado" class="form-control" placeholder="Introduce estado del incidente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar del incidente Municipio</label>
                <input type="text" name="lugar_muni" class="form-control" placeholder="Introduce Municipio del incidente">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Lugar del incidente Localidad</label>
                <input type="text" name="lugar_locali" class="form-control" placeholder="Introduce Localidad del incidente">
            </div>
            <div class="container">
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="casa" type="checkbox"  value="1">
                    <label class="form-check-label" >Casa</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="trabajo" type="checkbox" value="1">
                    <label class="form-check-label" >Trabajo</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="via_publica" type="checkbox"  value="1">
                    <label class="form-check-label" >Vía publica</label>
                </div>
                <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="ambulancia" type="checkbox"  value="1">
                    <label class="form-check-label" >Ambulancia</label>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_incidente" class="form-control" placeholder="Otro, describa:">
            </div>
            <div class="form-group col-md-12">
                    <hr>
                    <span class="badge badge-primary">
                        <h6>EN CASO DE QUE EL INCIDENTE  SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:</h6>
                    </span>
            </div>
            <div class="container">        
            <div class="form-group col-md-12 form-check">
                    <input class="form-check-input" name="servicio" type="checkbox"  value="1">
                    <label class="form-check-label" >Público</label>
                </div>
            <div class="form-group col-md-12 form-check">
                        <input class="form-check-input" name="servicio" type="checkbox"  value="2">
                        <label class="form-check-label" >Privado</label>
            </div>
            </div>    
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Nombre de la institución</label>
                <input type="text" name="nombre_institucion" class="form-control" placeholder="Introduce nombre de la institución">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Domicilio Completo:</label>
                <input type="text" name="domicilio" class="form-control" placeholder="Introduce domicilio completo">
            </div>
            <div class="form-group col-md-12">
                    <span class="badge badge-primary">
                        <h6>¿Reportó a otra autoridad?</h6>
                    </span>
            </div>
            <div class="container">
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="autoridad" value="1">Sí</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="autoridad" value="2">No</label>
                    <br>
            </div>
        </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">¿A quién?</label>
                <input type="text" name="quien" class="form-control" placeholder="Introduce nombre de autoridad">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Número de reporte:</label>
                <input type="text" name="reporte" class="form-control" placeholder="Introduce descripcion delincidente">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>INDIQUE CON "X" EL O LOS EVENTOS QUE SE PRESENTARON DURANTE EL INCIDENTE, QUE NO CORRESPONDEN AL USO NORMAL DEL DISPOSITIVO MÉDICO</h6>
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
                    <input type="checkbox" name="empaque_malo" value="1">EMPAQUE MALTRATADO QUE PUEDE PONER EN DUDA LA ESTERILIDAD DEL DISPOSITIVO MÉDICO, INSTRUMENTAL, PRÓTESIS U ÓRTESIS																						
                </label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="reuso" value="1">REUTILIZACIÓN DE UN DISPOSITIVO DE UN SOLO USO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="reacondicion" value="1">REACONDICIONAMIENTO O REPARACIÓN DE UN DISPOSITIVO DE UN SOLO USO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="error" value="1">INDICA ERROR (RESULTADOS ERRÓNEOS, USUARIO, ETC.)</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="mal_funcionamiento" value="1">NO FUNCIONA COMO SE INDICA EN EL  MANUAL Ó SE BLOQUEO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="desconexion" value="1">DESCONEXIÓN, MALA CONEXIÓN , SEPARACIÓN</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="info_confusa" value="1">INFORMACIÓN DEL ETIQUETADO Ó EMPAQUE INCOMPLETA O CONFUSA</label>
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
                    <input type="checkbox"name="luz_inadecua" value="1">SUMINISTRO ELÉCTRICO (LUZ) INSUFICIENTE O INADECUADA</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="desconocimientofun" value="1">DESCONOCIMIENTO DEL FUNCIONAMIENTO</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="interaccion_sustancias" value="1">INTERACCIONES CON OTRAS SUSTANCIAS O PRODUCTOS</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Descrpción y consecuencia del incidente:</label>
                <input type="text" name="descripcionyconsequencia" class="form-control" placeholder="Introduce descripcion del incidente">
            </div>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                    <h6>CONSECUENCIA DEL INCIDENTE</h6>
                </span>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="muerte" value="1">Muerte</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="intervencion_med" value="1">Interveción médica</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="intervencion_quir" value="1">Interveción quirúrgica</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="daño_indirecto" value="1">Daño indirecto</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="daño_muertefetal" value="1">Daño o muerte fetal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="deficiencia_permanente" value="1">Deficiencia permanente de una función coprporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="daño_permanente" value="1">Daño permanente de una estructura coprporal</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox"name="hospitalizacion" value="1">Hospitalización</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otra</label>
                <input type="text" name="otro_consequen" class="form-control" placeholder="Introduce otra consecuencia">
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
                <label for="exampleInputEmail1">NOMBRE DE FABRICANTE, DISTRIBUIDOR O COMERCIALIZADOR</label>
                <input type="text" name="nombre_fabricante" class="form-control" placeholder="Introduce NOMBRE DE FABRICANTE, DISTRIBUIDOR O COMERCIALIZADOR">
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">NÚMERO DE REGISTRO SANITARIO </label>
                <input type="text" name="numero_sanitario" class="form-control" placeholder="Introduce NÚMERO DE REGISTRO SANITARIO ">
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="tratamiento" value="1">Tratamiento</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
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
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_uso" class="form-control" placeholder="Introduce otra uso">
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
                    <input type="checkbox" name="fabricante" value="1">fabricante</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="distribuidor" value="1">distribuidor</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="comercializador" value="1">comercializador</label>
                <br>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Otro:</label>
                <input type="text" name="otro_devuelto" class="form-control" placeholder="Introduce otra">
            </div>
            <br>
                <br>
                <br>
            <div class="form-group col-md-12">
                <hr>
                <span class="badge badge-primary">
                <h6> CONOCIMIENTO DEL FUNCIONAMIENTO DEL DISPOSITIVO
                   
                </h6>
            </span>
            </div>
            <div class="form-group col-md-12">
                <h9> ¿HA LEÍDO EL INSTRUCTIVO DE USO?						     
                </h9>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="leidoinstruc" value="1">SI</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="leidoinstruc" value="2">NO</label>
                <br>
            </div>
            <div class="form-group col-md-12">
                <h9>¿EL INSTRUCTIVO O MANUAL DESCRIBE CLARAMENTE COMO USAR EL DISPOSITIVO MÉDICO?   															
						     
                </h9>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="uso_claro" value="1">SI</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="uso_claro" value="3">NO</label>
                <br>
            </div>
            <div class="form-group col-md-12">
                <h9>¿HA RECIBIDO CAPACITACIÓN PARA EL USO?								   															
						     
                </h9>
            </div>
            <div class="form-group col-md-4 form-check">
                <label>
                    <input type="checkbox" name="capacitacion" value="1">SI</label>
                <br>
            </div>
            <div class="form-group col-md-4 form-check">
                    <label>
                        <input type="checkbox" name="capacitacion" value="2">NO</label>
                    <br>
                </div>
                <div class="form-group col-md-12">
                    <hr>
                    <span class="badge badge-primary">
                    <h6>LOS DATOS O ANEXOS PUEDEN CONTENER INFORMACIÓN CONFIDENCIAL ¿ESTÁ DE ACUERDO EN HACERLOS PÚBLICOS? </h6>
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
        <br>
        <br>
        <br>
        <div class="row col-md-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
        </div>
    </form>
</div>
@endsection