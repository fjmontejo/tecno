<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rpaciente</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        td {
            padding: 6px 5px;
            font-size: 15px;
        }

        .tabla1 {
            border: 1.3px solid black;
        }
    </style>
</head>

<body>
    <div>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <td style="width:20%; align:left;">
                        {{--
                        <img src="{{asset('images/salud_1.png')}}" style="width:70%;"> --}}
                    </td>
                    <td style="width:60%;">
                        <h2 style="text-align:center; font-size:10px;">Comisión Federal para la Protección contra Riesgos Sanitarios</h2>
                    </td>
                    <td style="width:20%; align:rigth;">
                        {{--
                        <img src="{{asset('images/cofepris_1.png')}}" style="width:70%;"> --}}
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3">
                        <h1 style="font-size:13px; text-align:center;">
                            NOTIFICACIÓN DE INCIDENTES DE DISPOSITIVOS MÉDICOS POR PROFESIONAL DE LA SALUD
                        </h1>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="width:50%;">
        <table style="width:100%;">
            <thead>
                <tr>
                    <td style="border: 1px solid black; font-size:5px; text-align:center; font-weight: bold;">
                        No. DE INGRESO (USO EXCLUSIVO DE LA COFEPRIS)
                    </td>
                    <td style="border: 1px solid black; font-size:5px; text-align:center; font-weight: bold;">
                        No. DE NOTIFICACION INICIAL
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid black; font-size:7px;">{{$reporte->num_ingresocof}}</td>
                    <td style="border: 1px solid black; font-size:7px;">{{$reporte->num_noti}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td style="font-size:8px; text-align:justify; font-weight: bold;">
                    ANTES DE CONTESTAR ESTE FORMATO LEA CUIDADOSAMENTE EL INSTRUCTIVO Y SU GUÍA. ESCRIBIR CON LETRA DE MOLDE LEGIBLE, O A MÁQUINA
                    O EN COMPUTADORA. SI ES NECESARIO PUEDE ANEXAR HOJAS PARA LA INFORMACIÓN REQUERIDA.
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td style="font-size:8px; text-align:justify;">
                    CONFORME A LO ESTABLECIDO EN LA NOM-240-SSA1-2012, SE DEBERA ENVIAR LA NOTIFICACIÓN INICIAL A LA DIRECCIÓN EJECUTIVA DE FARMACOPEA
                    Y FARMACOVIGILANCIA (DEFFV), EN LOS PERIODOS ESTABLECIDOS:
                    <strong style="font-weight:bold;">EN CASO DE AMENAZA GRAVE PARA LA SALUD PÚBLICA, DEBE HACERSE DENTRO DE LOS DOS PRIMEROS DÍAS HÁBILES;
                        EN CASO DE MUERTE O UN DETERIORO GRAVE EN EL ESTADO DE SALUD DEL USUARIO, EN UN PERÍODO NO MAYOR
                        DE DIEZ DÍAS HÁBILES NATURALES. LOS DEMÁS INCIDENTES , EN UN PLAZO NO MAYOR DE TREINTA DÍAS NATURALES
                        A PARTIR DE SU CONFIRMACIÓN.</strong>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table style="width:100%;">
            <tr>
                <th style="width:5%;" class="tabla1">
                    <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">1</span>
                </th>
                <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                    INFORMACIÓN DE LA NOTIFICACIÓN
                </th>
            </tr>
            <tr>
                <table style="width:100%;">
                    <tr>
                        <th rowspan="2" style="width:60%; font-size:8px; text-align:justify;" class="tabla1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam soluta odit nulla totam ab molestias blanditiis nihil dicta
                            quisquam, debitis, in doloremque nisi eligendi, tempora neque tenetur cupiditate. Consequatur,
                            praesentium!
                        </th>
                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                            LUGAR DE LA NOTIFICACIÓN
                        </th>
                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                            FECHA DE LA NOTIFICACIÓN
                        </th>
                    </tr>
                    <tr>
                        <td class="tabla1">
                            <P style="font-size:4px; text-align:left; font-weight: bold;">
                                ESTADO O MUNICIPIO:
                            </P>
                            <P style="font-size:6px; text-align:right;">
                                {{$reporte->lugar_noti}}
                            </P>
                        </td>
                        <td class="tabla1" style="text-align:center;">
                            {{ $reporte->fecha }}
                        </td>
                    </tr>
                    <tr>
                        <table style="width:100%;">
                            <tr>
                                <th style="width:5%;" class="tabla1">
                                    <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">2</span>
                                </th>
                                <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                    IDENTIFICACIÓN DEL NOTIFICADOR
                                </th>
                            </tr>
                            <tr>
                                <table style="width:100%;">
                                    <tr>
                                        <th class="tabla1" style="width:100%;" colspan="4">
                                            <p style="font-size:7px;">
                                                CENTRO ESTATAL [@if($reporte->centro_estat) X @else- @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                CENTRO INSTITUCIONAL [@if($reporte->centro_inst) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                HOSPITAL [@if($reporte->hospital) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                CONSULTORIO [@if($reporte->consultorio) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                LABORATORIO[@if($reporte->laboratorio) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </p>
                                            <p style="font-size:10px;">
                                                OTRO ESPECIFIQUE: {{$reporte->otro_lug}}
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            INICIALES DE LA PERSONA QUE REALIZA LA NOTIFICACIÓN (INICIAR POR APELLIDO PATERNO)
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            CORREO ELECTRÓNICO (CONTACTO)
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            ÁREA DE ADSCRIPCIÓN Y/O SERVICIO DE QUIEN PRESENTA LA NOTIFICACIÓN
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            ¿USTED PRESENTÓ EL INCIDENTE?
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="tabla1" style="font-size: 14px; text-align:center;">
                                            {{$reporte->iniciales_noti}}
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                            {{$reporte->email}}
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                            {{$reporte->area_adscri}}
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                            @if($reporte->presento)X @else - @endif
                                        </td>
                                        <tr>
                                            <table style="width:100%;">
                                                <tr>
                                                    <th style="width:5%;" class="tabla1">
                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">3</span>
                                                    </th>
                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                        DATOS DEL OPERADOR DEL DISPOSITIVO MÉDICO DURANTE EL INCIDENTE
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center; width:30%;">
                                                                INICIALES (INICIAR POR APELLIDO PATERNO) ó CLAVE DEL PACIENTE:
                                                            </th>
                                                            <th colspan="4" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center; width:70%;">
                                                                IDENTIFICACIÓN DEL OPERADOR DEL DISPOSITIVO MEDICO
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td class="tabla1" style="font-size: 14px; text-align:center;">
                                                                {{$reporte->iniciales_ope}}
                                                            </td>
                                                            <td class="tabla1" colspan="4">
                                                                <p style="font-size:7px;">
                                                                    TÉCNICO [@if($reporte->tecnico)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    ENFERMERA [@if($reporte->enfermera)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    MÉDICO [@if($reporte->medico)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    PACIENTE [@if($reporte->paciente)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    FAMILIAR[@if($reporte->familiar)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </p>
                                                                <p style="font-size:10px;">
                                                                    OTRO ESPECIFIQUE: {{$reporte->otro_ope}}
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <th style="width:5%;" class="tabla1">
                                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">4</span>
                                                                    </th>
                                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                        INFORMACIÓN DEL PACIENTE
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <table style="width:100%;">
                                                                        <tr>
                                                                            <th class="tabla1" style="width:20%; font-size:7px; background-color:darkgray; text-align:center;">
                                                                                INICIALES (INICIAR POR APELLIDO PATERNO) O CLAVE DEL PACIENTE
                                                                            </th>
                                                                            <th class="tabla1" style="width:20%; font-size:7px; background-color:darkgray; text-align:center;">
                                                                                EDAD (años)
                                                                            </th>
                                                                            <th class="tabla1" style="width:20%; font-size:7px; background-color:darkgray; text-align:center;">
                                                                                PESO (kg)
                                                                            </th>
                                                                            <th class="tabla1" style="width:20%; font-size:7px; background-color:darkgray; text-align:center;">
                                                                                ESTATURA (m)
                                                                            </th>
                                                                            <th class="tabla1" style="width:20%; font-size:7px; background-color:darkgray; text-align:center;">
                                                                                GÉNERO
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" style="text-align:center;">
                                                                                {{$reporte->iniciales_px_clv}}
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                {{$reporte->edad_px}}
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                {{$reporte->peso_px}}
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                {{$reporte->estatura_px}}
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                <P style="font-size:7px; text-align:left; font-weight: bold;">
                                                                                    {{$reporte->genero}}
                                                                                </P>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" colspan="5" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                RESUMEN DE LA HISTORIA CLÍNICA DEL PACIENTE (RELACIONADA CON EL INCIDENTE) 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="5" class="tabla1">
                                                                                <p>
                                                                                    {{$reporte->resumen_hclinic}}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <table style="width:100%;">
                                                                                <tr>
                                                                                    <th style="width:5%;" class="tabla1">
                                                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">5</span>
                                                                                    </th>
                                                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                        INFORMACIÓN SOBRE EL INCIDENTE
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <table style="width:100%;">
                                                                                        <tr>
                                                                                            <table style="width:100%">
                                                                                                <tr>
                                                                                                    <th class="tabla1" style="width:30%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        FECHA DEL INCIDENTE
                                                                                                    </th>
                                                                                                    <th colspan="3" class="tabla1" style="width:70%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        LUGAR DONDE SE PRESENTO EL INCIDENTE
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                        {{$reporte->fecha_incidente}}
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                        ESTADO: {{$reporte->lugar_estado}}
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                        MUNICIPIO O DELEGACIÓN: {{$reporte->lugar_muni}}
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                        LOCALIDAD: {{$reporte->lugar_locali}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4" style="width:100%;">
                                                                                                        <p style="font-size:7px;">
                                                                                                            CASA [@if($reporte->casa)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            TRABAJO [@if($reporte->trabajo)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            VÍA PÚBLICA [@if($reporte->via_publica)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            AMBULANCIA [@if($reporte->ambulancia)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO:[{{$reporte->otro_incidente}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <P style="font-size:10px;">
                                                                                                            EN CASO DE QUE EL INCIDENTE SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:
                                                                                                        </P>
                                                                                                        <p style="font-size:7px;">
                                                                                                            PRIVADO [@if($reporte->servicio)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            PUBLICO [@if($reporte->servicio)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:10px;">
                                                                                                            NOMBRE DE LA INSTITUCIÓN:@if($reporte->nombre_institucion) @else N/A @endif
                                                                                                        </p>
                                                                                                        <p style="font-size:10px;">
                                                                                                            DOMICILIO COMPLETO: @if($reporte->domicilio) @else N/A @endif
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" style="width: 30%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        ¿HA REPORTADO ESTE INCIDENTE A OTRA AUTORIDAD?
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="width: 30%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        ¿A QUIÉN? 
                                                                                                    </td>
                                                                                                    <td class="tabla1" colspan="2" style="width: 40%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        NUMERO DE REPORTE 
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1">
                                                                                                        @if($reporte->autoridad) SI @else NO @endif
                                                                                                    </td>
                                                                                                    <td class="tabla1">
                                                                                                        @if($reporte->quien)@else N/A @endif
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1">
                                                                                                        @if($reporte->reporte) @else N/A @endif
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        INDIQUE CON "X" EL O LOS EVENTOS QUE SE PRESENTARON DURANTE EL INCIDENTE, QUE NO CORRESPONDEN AL USO NORMAL DEL DISPOSITIVO
                                                                                                        MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            NO PRENDIÓ [@if($reporte->no_prendio)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DIO “TOQUES”
                                                                                                            [@if($reporte->toques)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE QUEMÓ [@if($reporte->quemo)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE ROMPIÓ O QUEBRÓ
                                                                                                            [@if($reporte->rompio)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE CAYÓ O GOLPEÓ:[@if($reporte->cayo)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            NO SONÓ LA ALARMA
                                                                                                            CONFORME A LO
                                                                                                            PROGRAMADO O
                                                                                                            ESPECIFICADO
                                                                                                            POR EL FABRICANTE
                                                                                                            [@if($reporte->no_alarma) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            EMPAQUE MALTRATADO
                                                                                                            QUE PUEDE PONER
                                                                                                            EN DUDA LA ESTERILIDAD
                                                                                                            DEL DISPOSITIVO
                                                                                                            MÉDICO, INSTRUMENTAL,
                                                                                                            PRÓTESIS U ÓRTESIS
                                                                                                            [@if($reporte->empaque_malo)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            REUTILIZACIÓN
                                                                                                            DE UN DISPOSITIVO
                                                                                                            DE UN SOLO USO
                                                                                                            [@if($reporte->reuso) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            REACONDICIONAMIENTO
                                                                                                            O REPARACIÓN
                                                                                                            DE UN DISPOSITIVO
                                                                                                            DE UN SOLO USO
                                                                                                            [@if($reporte->reacondicion) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INDICA ERROR
                                                                                                            (RESULTADOS ERRÓNEOS,
                                                                                                            USUARIO, ETC.)
                                                                                                            [@if($reporte->error) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            NO FUNCIONA COMO SE INDICA EN EL MANUAL Ó SE BLOQUEO [] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DIO “TOQUES”
                                                                                                            [@if($reporte->mal_funcionamiento)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESCONEXIÓN,
                                                                                                            MALA CONEXIÓN
                                                                                                            , SEPARACIÓN
                                                                                                            [@if($reporte->desconexion)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INFORMACIÓN DEL
                                                                                                            ETIQUETADO Ó
                                                                                                            EMPAQUE INCOMPLETA
                                                                                                            O CONFUSA [@if($reporte->info_confusa)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTROS, ESPECIFIQUE
                                                                                                            [@if($reporte->otro_evento)X @else N/A @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            USO DIFERENTE
                                                                                                            AL INDICADO POR
                                                                                                            EL FABRICANTE,
                                                                                                            ESPECIFIQUE COMO
                                                                                                            [@if($reporte->uso_diferente)X @else N/A @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SUMINISTRO ELÉCTRICO
                                                                                                            (LUZ) INSUFICIENTE
                                                                                                            O INADECUADO
                                                                                                            @if($reporte->luz_inadecua)X @else - @endif[] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESCONOCIMIENTO
                                                                                                            DEL FUNCIONAMIENTO
                                                                                                            [@if($reporte->desconocimientofun)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERACCIONES
                                                                                                            CON OTRAS SUSTANCIAS
                                                                                                            O PRODUCTOS [@if($reporte->interaccion_sustancias)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        DESCRIPCIÓN Y CONSECUENCIA DEL INCIDENTE
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        @if($reporte->descripcionyconsecuencia) @else N/A @endif
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        CONSECUENCIA DEL INCIDENTE
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            MUERTE [@if($reporte->muerte)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERVENCIÓN
                                                                                                            MÉDICA [@if($reporte->intervencion_med)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERVENCIÓN
                                                                                                            QUIRÚRGICA [@if($reporte->intervencion_quir)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO INDIRECTO
                                                                                                            [@if($reporte->daño_indirecto)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO O MUERTE
                                                                                                            FETAL [@if($reporte->daño_murtefetal)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            DEFICIENCIA PERMANENTE DE UNA FUNCIÓN CORPORAL [@if($reporte->deficiencia_permanente)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO PERMANENTE
                                                                                                            A UNA ESTRUCTURA
                                                                                                            CORPORAL [@if($reporte->daño_permanente)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            HOSPITALIZACIÓN
                                                                                                            [@if($reporte->hospitalizacion)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE
                                                                                                            [@if($reporte->otro_consequen) @else N/A @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="width:3%;" class="tabla1">
                                                                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">6</span>
                                                                                                    </td>
                                                                                                    <td colspan="3" style="width:97%; font-size: 10px; background-color:darkgray; text-align:left; font-weight:bold;" class="tabla1">
                                                                                                        IDENTIFICACIÓN DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        DATOS DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="2" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        MARCA O DENOMINACIÓN DISTINTIVA
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        DENOMINACIÓN GENÉRICA
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="2" class="tabla1">
                                                                                                        {{$reporte->marcaodenom}}
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1">
                                                                                                        {{$reporte->denominaciongene}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        MODELO, PRESENTACIÓN, CÓDIGO O NÚMERO DE CATÁLOGO
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        NÚMERO DE SERIE O LOTE
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        NOMBRE DE FABRICANTE, DISTRIBUIDOR O COMERCIALIZADOR
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1">
                                                                                                        {{$reporte->modelo_presentacion}}
                                                                                                    </td>
                                                                                                    <td class="tabla1">
                                                                                                        {{$reporte->numero_lote}}
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1">
                                                                                                        {{$reporte->nombre_fabricante}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        NÚMERO DE REGISTRO SANITARIO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="text-align:center;">
                                                                                                        {{$reporte->numero_sanitario}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        USO DEL DISPOSITIVO MÉDICO EN:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            TRATAMIENTO [@if($reporte->tratamiento) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DIAGNÓSTICO [@if($reporte->diagnostico) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            MONITOREO [@if($reporte->monitoreo) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE
                                                                                                            [@if($reporte->otro_uso)  @else N/A @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        DISPOSITIVO MÉDICO DISEÑADO PARA USARSE EN PACIENTE:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            ADULTO [@if($reporte->adulto) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            PEDIÁTRICO [@if($reporte->pediatrico) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            NEONATAL [@if($reporte->nenonatal) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            GERIÁTRICO [@if($reporte->geriatrico) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        UBICACIÓN Y/O SITUACIÓN ACTUAL DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            DESCONOCIDO [@if($reporte->desconocido) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESTRUIDO [@if($reporte->destruido) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            FUERA DE OPERACIÓN
                                                                                                            O SERVICIO [@if($reporte->fuera_servicio) X  @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            EN USO [@if($reporte->en_uso) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE
                                                                                                            [@if($reporte->otra_situa) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:9px;">
                                                                                                            DEVUELTO A:
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            FABRICANTE [@if($reporte->fabricante) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DISTRIBUIDOR
                                                                                                            [@if($reporte->distribuidor) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            COMERCIALIZADOR
                                                                                                            [@if($reporte->comercializador) X  @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE
                                                                                                            [{{$reporte->otro_devuelto}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        CONOCIMIENTO DEL FUNCIONAMIENTO DEL DISPOSITIVO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:9px;">
                                                                                                            ¿HA LEÍDO EL INSTRUCTIVO DE USO?
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            @if($reporte->leidoinstruc)  SI @else NO @endif
                                                                                                        </p>
                                                                                                        <p style="font-size:9px;">
                                                                                                            ¿EL INSTRUCTIVO O MANUAL DESCRIBE CLARAMENTE COMO USAR EL DISPOSITIVO MÉDICO?
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            @if($reporte->uso_claro) SI  @else No @endif
                                                                                                        </p>
                                                                                                        <p style="font-size:9px;">
                                                                                                            ¿HA RECIBIDO CAPACITACIÓN PARA EL USO?
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            @if($reporte->capacitacion) X @else X @endif
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="text-align:justify; font-weiht:bold;">
                                                                                                        <hr>
                                                                                                        DECLARO BAJO PROTESTA DECIR VERDAD QUE CUMPLO CON LOS REQUISITOS Y NORMATIVIDAD APLICABLE, SIN QUE ME EXIMAN DE QUE LA AUTORIDAD
                                                                                                        SANITARIA VERIFIQUE
                                                                                                        SU CUMPLIMIENTO,
                                                                                                        ESTO SIN PERJUICIO
                                                                                                        DE LAS SANCIONES
                                                                                                        EN QUE PUEDO INCURRIR
                                                                                                        POR FALSEDAD DE DECLARACIONES
                                                                                                        DADAS A UNA AUTORIDAD.
                                                                                                        <hr>
                                                                                                        <p style="font-weight:bold;">
                                                                                                            LOS DATOS O ANEXOS PUEDEN CONTENER INFORMACIÓN CONFIDENCIAL ¿ESTÁ DE ACUERDO EN HACERLOS PÚBLICOS?
                                                                                                        </p>
                                                                                                        <p style="font-size:14px;">
                                                                                                            @if($reporte->publico) SI @else NO @endif
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </tr>
                                                                                    </table>
                                                                                </tr>
                                                                            </table>
                                                                        </tr>
                                                                    </table>
                                                                </tr>
                                                            </table>
                                                        </tr>
                                                    </table>
                                                </tr>
                                            </table>
                                        </tr>
                                    </tr>
                                </table>
                            </tr>
                        </table>
                    </tr>
                </table>
            </tr>
        </table>
    </div>
</body>

</html>