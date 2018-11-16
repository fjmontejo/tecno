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
                         <img src="{{asset('img/logo_salud.PNG')}}" style="width:70%;"> 
                    </td>
                    <td style="width:60%;">
                        <h2 style="text-align:center; font-size:10px;">Comisión Federal para la Protección contra Riesgos Sanitarios</h2>
                    </td>
                    <td style="width:20%; align:rigth;">
                         <img src="{{asset('img/logo_cofepris.PNG')}}" style="width:70%;"> 
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3">
                        <h1 style="font-size:13px; text-align:center;">
                            NOTIFICACIÓN DE INCIDENTES DE DISPOSITIVOS MÉDICOS POR EL PACIENTE O USUARIO
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
                    <td style="border: 1px solid black; font-size:7px;">{{$reporte->num_cofe}} </td>
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
                                    {{$reporte->lugar_estado}}
                            </P>
                        </td>
                        <td class="tabla1" style="text-align:center;">
                            {{$reporte->fecha}}
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
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            INICIALES DE LA PERSONA QUE REALIZA LA NOTIFICACIÓN (INICIAR POR APELLIDO PATERNO)
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            CORREO ELECTRÓNICO (CONTACTO)
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            ¿USTED PRESENTO EL INCIDENTE?
                                        </th>
                                        <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                            EN CASO DE SER NO, INDIQUE EL PARENTESCO CON EL PACIENTE
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="tabla1" style="font-size: 14px; text-align:center;">
                                            {{$reporte->iniciales_notificador}}
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                            {{$reporte->email}}
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                             @if($reporte->presento_incidente_si) X @else-@endif
                                        </td>
                                        <td class="tabla1" style="font-size: 8px; text-align:center;">
                                             {{$reporte->parentezco}}
                                        </td>
                                        <tr>
                                            <table style="width:100%;">
                                                <tr>
                                                    <th style="width:5%;" class="tabla1">
                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">3</span>
                                                    </th>
                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                        IDENTIFICACIÓN DEL PACIENTE
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                INICIALES (INICIAR POR APELLIDO PATERNO) ó CLAVE DEL PACIENTE:
                                                            </th>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                EDAD (años)
                                                            </th>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                PESO (kg)
                                                            </th>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                ESTATURA (m)
                                                            </th>
                                                            <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                GÉNERO
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td class="tabla1" style="font-size: 14px; text-align:center;">
                                                                {{$reporte->iniciales_px}}
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
                                                                 {{$reporte->genero }} 
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <th style="width:5%;" class="tabla1">
                                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">4</span>
                                                                    </th>
                                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                        INFORMACIÓN SOBRE EL INCIDENTE
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <table style="width:100%;">
                                                                        <tr>
                                                                            <th class="tabla1" style="width:20%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                FECHA DEL INCIDENTE
                                                                            </th>
                                                                            <th colspan="3" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                LUGAR DONDE SE PRESENTO EL INCIDENTE
                                                                            </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" style="text-align:center;">
                                                                                 {{$reporte->fecha_incidente}}
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                <P style="font-size:4px; text-align:left; font-weight: bold;">
                                                                                    ESTADO: 
                                                                                </P>
                                                                                <P style="font-size:6px; text-align:right;">
                                                                                     {{$reporte->lugar_estado}}
                                                                                </P>
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                <P style="font-size:4px; text-align:left; font-weight: bold;">
                                                                                    MUNICIPIO O DELEGACIÓN:
                                                                                </P>
                                                                                <P style="font-size:6px; text-align:right;">
                                                                                     {{$reporte->lugar_municipio}}
                                                                                </P>
                                                                            </td>
                                                                            <td class="tabla1">
                                                                                <P style="font-size:4px; text-align:left; font-weight: bold;">
                                                                                    LOCALIDAD:
                                                                                </P>
                                                                                <P style="font-size:6px; text-align:right;">
                                                                                     {{$reporte->lugar_localidad}}
                                                                                </P>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="4" class="tabla1">
                                                                                <p style="font-size:7px;">
                                                                                    [@if($reporte->casa) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                     [@if($reporte->trabajo) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    [@if($reporte->via_publica) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                     [@if($reporte->ambulancia) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    [{{$reporte->otro_incidente}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                </p>
                                                                                <p style="font-size:10px;">
                                                                                    EN CASO DE QUE EL INCIDENTE SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:
                                                                                </p>
                                                                                <p style="font-size:7px;">
                                                                                    [@if($reporte->servicio_priv) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                     [@if($reporte->servicio_pub) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                </p>
                                                                                <p style="font-size:8px;">
                                                                                    NOMBRE DE LA INSTITUCIÓN: {{$reporte->nombre_institucion}}
                                                                                </p>
                                                                                <p style="font-size:8px;">
                                                                                    DOMICILIO COMPLETO: {{$reporte->domicilio}}
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" style="width:20%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                ¿HA REPORTADO ESTE INCIDENTE A OTRA AUTORIDAD?
                                                                            </td>
                                                                            <td class="tabla1" style="width:20%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                ¿A QUIÉN?
                                                                            </td>
                                                                            <td colspan="2" class="tabla1" style="width:20%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                NUMERO DE REPORTE
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" style="width:20%; font-size: 9px; text-align:center;">
                                                                                <p>
                                                                                    SI [@if($reporte->autoridad_si) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    NO [@if($reporte->autoridad_no) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                </p>
                                                                            </td>
                                                                            <td class="tabla1" style="width:20%; font-size: 9px; text-align:center;">
                                                                                 {{$reporte->quien}}
                                                                            </td>
                                                                            <td colspan="2" class="tabla1" style="width:20%; font-size: 9px; text-align:center;">
                                                                                {{$reporte->reporte}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" colspan="4" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                DESCRIPCIÓN DEL INCIDENTE
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" colspan="4" style="width:100%; font-size: 9px; text-align:justify;">
                                                                                 {{$reporte->descripcion}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" colspan="4" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                CONSECUENCIA DEL INCIDENTE
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="tabla1" colspan="4" style="width:100%; font-size: 9px; text-align:justify;">
                                                                                <p>
                                                                                    MUERTE [@if($reporte->muerte) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    INTERVENCIÓN MÉDICA [;@if($reporte->intervencion_med) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    INTERVENCIÓN QUIRÚRGICA [@if($reporte->intervencion_quir) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    DAÑO INDIRECTO [@if($reporte->daño_indirecto) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    DAÑO O MUERTE FETAL[@if($reporte->daño_muertefetal) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                </p>
                                                                                <p>
                                                                                    DEFICIENCIA PERMANENTE DE UNA FUNCIÓN CORPORAL [@if($reporte->deficiencia_permanente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    DAÑO PERMANENTE A UNA ESTRUCTURA CORPORAL
                                                                                    [@if($reporte->daño_permanente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    HOSPITALIZACIÓN [@if($reporte->hospitalizacion) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                    OTRO, ESPECIFIQUE: [{{$reporte->otro_consequen}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                                        IDENTIFICACIÓN DEL DISPOSITIVO MÉDICO
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <table style="width:100%;">
                                                                                        <tr>
                                                                                            <th class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                DATOS DEL DISPOSITIVO MÉDICO
                                                                                            </th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <table style="width:100%">
                                                                                                <tr>
                                                                                                    <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        NOMBRE O MARCA DEL DISPOSITIVO
                                                                                                    </th>
                                                                                                    <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        MODELO, PRESENTACIÓN, CÓDIGO O NÚMERO DE CATÁLOGO
                                                                                                    </th>
                                                                                                    <th class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        NÚMERO DE SERIE O LOTE
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                         {{$reporte->nombre_dispo}}
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                         {{$reporte->modelo_dispo}}
                                                                                                    </td>
                                                                                                    <td class="tabla1" style="font-size:8px;">
                                                                                                         {{$reporte->num_dispo}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="3" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        UBICACIÓN Y/O SITUACIÓN ACTUAL DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="3" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            DESCONOCIDO [@if($reporte->desconocido)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESTRUIDO [@if($reporte->destruido)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            FUERA DE OPERACIÓN O SERVICIO [@if($reporte->fuera_servicio)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            EN USO [@if($reporte->en_uso)X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE:[{{$reporte->otro_situa}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:10px;">
                                                                                                            DEVUELTO A: 
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            FABRICANTE [@if($reporte->fabricante)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DISTRIBUIDOR [@if($reporte->distribuidor)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            COMERCIALIZADOR [@if($reporte->comercializador)X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE: [{{$reporte->otro_devuelto}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="3" style="font-size:9px;">
                                                                                                        LOS DATOS O ANEXOS PUEDEN CONTENER INFORMACIÓN CONFIDENCIAL ¿ESTÁ DE ACUERDO EN HACERLOS PÚBLICOS? SI [@if($reporte->hacer_publico_si)X @else - @endif] NO[@if($reporte->hacer_publico_no)X @else - @endif]
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