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
                            NOTIFICACIÓN DE INCIDENTES O INCIDENTES ADVERSOS DE DISPOSITIVOS MÉDICOS POR EL TITULAR DEL REGISTRO SANITARIO, FABRICANTE,
                            DISTRIBUIDOR O COMERCIALIZADOR
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
                    CONFORME A LO ESTABLECIDO EN LA NOM-240-SSA1-2012, SE DEBERÁ ENVIAR LA NOTIFICACIÓN INICIAL A LA DIRECCIÓN EJECUTIVA DE FARMACOPEA
                    Y FARMACOVIGILANCIA (DEFFV),EN LOS PERIODOS ESTABLECIDOS:
                    <strong style="font-weight:bold;">: EN CASO DE AMENAZA GRAVE PARA LA SALUD PÚBLICA, DEBE HACERSE DENTRO DE LOS DOS PRIMEROS DÍAS HÁBILES;
                        EN CASO DE MUERTE O UN DETERIORO GRAVE EN EL ESTADO DE SALUD DEL USUARIO, EN UN PERÍODO NO MAYOR
                        DE DIEZ DÍAS HÁBILES NATURALES. LOS DEMÁS INCIDENTES ADVERSOS, EN UN PLAZO NO MAYOR DE TREINTA DÍAS
                        NATURALES A PARTIR DE SU CONFIRMACIÓN. EL PLAZO MÁXIMO PARA PRESENTAR EL REPORTE DE SEGUIMIENTO Y/O
                        FINAL, SERA DE SEIS MESES A PARTIR DE LA FECHA DE NOTIFICACIÓN INICIAL.</strong>
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
                        <td class="tabla1" colspan="4">
                            <p style="font-size:7px;">
                                NOTIFICACIÓN INICIAL [{{$reporte->noti_ini}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                REPORTE DE SEGUIMIENTO [{{$reporte->repor_segui}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                REPORTE FINAL [{{$reporte->repor_fin}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                CONOTIFICACIÓN INICIAL Y REPORTE FINAL [{{$reporte->notini_repfin}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 7px; background-color:darkgray; text-align:left;" class="tabla1">
                            NÚMERO DE REPORTE INTERNO DE LA EMPRESA
                        </td>
                        <td style="font-size: 7px; background-color:darkgray; text-align:left;" class="tabla1">
                            NÚMERO DE REGISTRO SANITARIO DEL DISPOSITIVO MEDICO
                        </td>
                        <td style="font-size: 7px; background-color:darkgray; text-align:left;" class="tabla1">
                            FECHA DE AVISO AL TITULAR DEL REGISTRO SANITARIO
                        </td>
                        <td style="font-size: 7px; background-color:darkgray; text-align:left;" class="tabla1">
                            FECHA DE LA NOTIFICACIÓN
                        </td>
                    </tr>
                    <tr>
                        <td class="tabla1">
                            {{$reporte->num_reporemp}}
                        </td>
                        <td class="tabla1">
                            {{$reporte->num_sanita}}
                        </td>
                        <td class="tabla1">
                            {{$reporte->fecha_aviso_titu}}
                        </td>
                        <td class="tabla1">
                            {{$reporte->fecha_noti}}
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
                                        <td class="tabla1" colspan="4">
                                            <p style="font-size:7px;">
                                                TITULAR DEL REGISTRO SANITARIO [@if($reporte->titu_sanita) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                FABRICANTE [@if($reporte->fabricante_noti) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                DISTRIBUIDOR [@if($reporte->distri_noti) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                COMERCIALIZADOR [@if($reporte->comer_noti) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:left;">
                                            NOMBRE O RAZÓN SOCIAL DE LA EMPRESA
                                        </th>
                                        <th colspan="2" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:left;">
                                            R.F.C.
                                        </th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="tabla1" style="font-size: 14px; text-align:center;">
                                        {{$reporte->nombre_razoempre}}
                                        </td>
                                        <td colspan="2" class="tabla1" style="font-size: 8px; text-align:center;">
                                            {{$reporte->rfc}}
                                        </td>
                                        <tr>
                                            <th colspan="2" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:left;">
                                                INICIALES DE LA PERSONA QUE REALIZA LA NOTIFICACIÓN (INICIAR POR APELLIDO PATERNO)
                                            </th>
                                            <th colspan="2" class="tabla1" style="font-size: 7px; background-color:darkgray; text-align:left;">
                                                NOMBRE COMPLETO DE QUIEN DARÁ SEGUIMIENTO A LA NOTIFICACIÓN
                                            </th>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="tabla1" style="font-size: 14px; text-align:center;">
                                                {{$reporte->iniciales_noti}}
                                            </td>
                                            <td colspan="2" class="tabla1" style="font-size: 8px; text-align:center;">
                                                {{$reporte->nombre_seguimiento}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <table style="width:100%;">
                                                <tr>
                                                    <th style="width:5%;" class="tabla1">
                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">3</span>
                                                    </th>
                                                    <th style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                        DATOS DEL OPERADOR DEL DISPÓSITIVO MÉDICO DURANTE EL INCIDENTE O INCIDENTE ADVERSO
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
                                                                    TÉCNICO [@if($reporte->tecnico) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    ENFERMERA [@if($reporte->enfermera) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    MÉDICO [@if($reporte->medico) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    PACIENTE [@if($reporte->paciente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    FAMILIAR[@if($reporte->familiar) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                        IDENTIFICACIÓN DEL PACIENTE
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
                                                                                {{$reporte->iniciales_ope}}
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
                                                                                                <tr style="width:20%;">
                                                                                                    <td class="tabla1" style="width:10%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        FECHA DEL INCIDENTE
                                                                                                    </td>
                                                                                                    <td rowspan="2" class="tabla1" style="width:10%;" colspan="3">
                                                                                                        <p style="font-size:9px;">
                                                                                                            EVENTO [@if($reporte->evento) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INCIDENTE [@if($reporte->incidente) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INCIDENTE ADVERSO
                                                                                                            [@if($reporte->incidente_adverso) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INCIDENTE ADVERSO
                                                                                                            PREVISTO [@if($reporte->incidente_previsto) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INCIDENTE ADVERSO
                                                                                                            IMPREVISTO:[@if($reporte->inci_imprevisto) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" style="width:10%; font-size:8px;">
                                                                                                        {{$reporte->fecha_inicidente}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4" style="width:10%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        LUGAR DONDE SE PRESENTO EL INCIDENTE O INCIDENTE ADVERSO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1">
                                                                                                        <p style="font-size:7px;">ESTADO:{{$reporte->lugar_estado}} </p>
                                                                                                    </td>
                                                                                                    <td class="tabla1">
                                                                                                        <p style="font-size:7px;">MUNICIPIO O DELEGACIÓN: {{$reporte->lugar_muni}}</p>
                                                                                                    </td>
                                                                                                    <td class="tabla1" colspan="2">
                                                                                                        <p style="font-size:7px;">LOCALIDAD: {{$reporte->lugar_locali}}</p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4" style="width:100%;">
                                                                                                        <p style="font-size:7px;">
                                                                                                            CASA [@if($reporte->casa) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            TRABAJO [@if($reporte->trabajo) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            VÍA PÚBLICA [@if($reporte->via_publica) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            AMBULANCIA [@if($reporte->ambulancia) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO:[@if($reporte->otro_incidente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <P style="font-size:10px;">
                                                                                                            EN CASO DE QUE EL INCIDENTE ADVERSO SE HAYA PRESENTADO EN UN SERVICIO DE ATENCIÓN A LA SALUD, ESPECIFIQUE:
                                                                                                        </P>
                                                                                                        <p style="font-size:7px;">
                                                                                                            PRIVADO [@if($reporte->servicio_pub) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            PUBLICO [@if($reporte->servicio_priv) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:10px;">
                                                                                                            NOMBRE DE LA INSTITUCIÓN: {{$reporte->nombre_institucion}}
                                                                                                        </p>
                                                                                                        <p style="font-size:10px;">
                                                                                                            DOMICILIO COMPLETO: {{$reporte->domicilio}}
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
                                                                                                        SI [@if($reporte->autoridad_si) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        NO[@if($reporte->autoridad_no) X @else - @endif]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                    </td>
                                                                                                    <td class="tabla1">
                                                                                                        {{$reporte->quien}}
                                                                                                    </td>
                                                                                                    <td colspan="2" class="tabla1">
                                                                                                        {{$reporte->num_repor}}
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
                                                                                                            NO PRENDIÓ [@if($reporte->no_prendio) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DIO “TOQUES”
                                                                                                            [@if($reporte->toques) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE QUEMÓ [@if($reporte->quemo) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE ROMPIÓ O QUEBRÓ
                                                                                                            [@if($reporte->rompio) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SE CAYÓ O GOLPEÓ:[@if($reporte->cayo) X @else - @endif]
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
                                                                                                            [@if($reporte->empaque_malo) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                                                                                            NO FUNCIONA COMO SE INDICA EN EL MANUAL Ó SE BLOQUEO [@if($reporte->mal_funcionamiento) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESCONEXIÓN,
                                                                                                            MALA CONEXIÓN
                                                                                                            , SEPARACIÓN
                                                                                                            [@if($reporte->desconexion) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INFORMACIÓN DEL
                                                                                                            ETIQUETADO Ó
                                                                                                            EMPAQUE INCOMPLETA
                                                                                                            O CONFUSA [@if($reporte->info_confusa) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTROS, ESPECIFIQUE
                                                                                                            [ {{$reporte->otro_evento}} ] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            USO DIFERENTE
                                                                                                            AL INDICADO POR
                                                                                                            EL FABRICANTE,
                                                                                                            ESPECIFIQUE COMO
                                                                                                            [@if($reporte->usodiferente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            SUMINISTRO ELÉCTRICO
                                                                                                            (LUZ) INSUFICIENTE
                                                                                                            O INADECUADO
                                                                                                            [@if($reporte->luz_inadecua) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESCONOCIMIENTO
                                                                                                            DEL FUNCIONAMIENTO
                                                                                                            [@if($reporte->desconocimientofun) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERACCIONES
                                                                                                            CON OTRAS SUSTANCIAS
                                                                                                            O PRODUCTOS [@if($reporte->interaccion_sustancias) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        DESCRIPCIÓN DEL INCIDENTE O INCIDENTE ADVERSO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                       {{$reporte->descripcion_incidente}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        CONSECUENCIA DEL INCIDENTE O INCIDENTE ADVERSO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            MUERTE [@if($reporte->muerte) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERVENCIÓN
                                                                                                            MÉDICA [@if($reporte->intervencion_med) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            INTERVENCIÓN
                                                                                                            QUIRÚRGICA [@if($reporte->intervencion_quir) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO INDIRECTO
                                                                                                            [@if($reporte->daño_indirecto) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO O MUERTE
                                                                                                            FETAL [@if($reporte->daño_murtefetal) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            DEFICIENCIA PERMANENTE DE UNA FUNCIÓN CORPORAL [@if($reporte->deficiencia_permanente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DAÑO PERMANENTE
                                                                                                            A UNA ESTRUCTURA
                                                                                                            CORPORAL [@if($reporte->daño_permanente) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            HOSPITALIZACIÓN
                                                                                                            [@if($reporte->hospitalizacion) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE
                                                                                                            [{{$reporte->otro_consequen}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        SI LO CONSIDERA NECESARIO DESCRIBA LA CONSECUENCIA DEL INCIDENTE O INCIDENTE ADVERSO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                       {{$reporte->conse_inci_descripcion}}
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
                                                                                                        {{$reporte->marcadenom}}
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
                                                                                                        VERSIÓN SOFTWARE (SI APLICA)
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
                                                                                                        {{$reporte->version_software}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        BREVE DESCRIPCIÓN DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->descri_dispo}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:left;">
                                                                                                        TIPO DE DISPOSITIVO MÉDICO ( ART. 262 LGS)
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        <p style="font-size:7px;">
                                                                                                            EQUIPO MÉDICO (MONITOR DE SIGNOS VITALES, BOMBAS DE INFUSIÓN, DESFIBRILADORES, ULTRASONIDOS, INSTRUMENTAL QUIRÚRGICO, ETC.)
                                                                                                            [@if($reporte->equipo_medico) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> PRÓTESIS, ÓRTESIS
                                                                                                            Y AYUDAS FUNCIONALES
                                                                                                            (MARCAPASOS,
                                                                                                            AUXILIARES AUDITIVOS,
                                                                                                            TORNILLOS PARA
                                                                                                            CIRUGÍA ÓSEA,
                                                                                                            ELECTRODOS IMPLANTABLES,
                                                                                                            PRÓTESIS MAMARIAS,
                                                                                                            ETC.) [@if($reporte->protesis) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> AGENTES DE DIAGNÓSTICO
                                                                                                            (MEDIOS DE CULTIVO
                                                                                                            Y DE CONTRASTE,
                                                                                                            ANTÍGENOS, CALIBRADORES,
                                                                                                            REACTIVOS, ANTICUERPOS,
                                                                                                            ETC.) [@if($reporte->agente_diagnos) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> INSUMOS DE USO
                                                                                                            ODONTOLÓGICO
                                                                                                            (BRACKETS, MATERIAL
                                                                                                            PARA TOMA DE
                                                                                                            IMPRESIONES,
                                                                                                            AGUJAS DENTALES,
                                                                                                            CEMENTO, PASTA
                                                                                                            ADHESIVA PARA
                                                                                                            DENTADURAS ,
                                                                                                            ETC.) [@if($reporte->insumo_odonto) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> MATERIALES QUIRÚRGICOS
                                                                                                            Y DE CURACIÓN
                                                                                                            (SOLUCIONES ANTISÉPTICAS,
                                                                                                            CATÉTERES, JERINGAS,
                                                                                                            SUTURAS QUIRÚRGICAS,
                                                                                                            ETC.) [@if($reporte->mate_quiru) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> PRODUCTOS HIGIÉNICOS
                                                                                                            (ENJUAGUE BUCAL,
                                                                                                            CONDONES, TAMPONES,
                                                                                                            PASTA DENTRÍFICA,
                                                                                                            LUBRICANTES OCULARES,
                                                                                                            SOLUCIÓN PARA
                                                                                                            LENTES DE CONTACTO,
                                                                                                            ETC [@if($reporte->produc_higienicos) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            <br> OTRO (ESPECIFIQUE)
                                                                                                            [{{$reporte->otro_tipo}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        CLASIFICACIÓN DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4">
                                                                                                        <p style="font-size:7px;">
                                                                                                            {{$reporte->clasificacion}}  
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        USO DEL DISPOSITIVO MÉDICO EN:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4">
                                                                                                        <p style="font-size:7px;">
                                                                                                            TRATAMIENTO [@if($reporte->tratamiento) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DIAGNÓSTICO [@if($reporte->diagnostico) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            MONITOREO [@if ($reporte->monitoreo) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE:
                                                                                                            [{{$reporte->otro_uso}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        DISPOSITIVO MÉDICO DISEÑADO PARA USARSE EN PACIENTE:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4">
                                                                                                        <p style="font-size:7px;">
                                                                                                            ADULTO [@if ($reporte->adulto) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            PEDIÁTRICO [@if ($reporte->pediatrico) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            NEONATAL [@if ($reporte->neonatal) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            GERIÁTRICO [@if ($reporte->geriatrico) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1" style="width:100%; font-size: 7px; background-color:darkgray; text-align:center;">
                                                                                                        UBICACIÓN Y/O SITUACIÓN ACTUAL DEL DISPOSITIVO MÉDICO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class="tabla1" colspan="4">
                                                                                                        <p style="font-size:7px;">
                                                                                                            DESCONOCIDO [@if ($reporte->desconocido) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DESTRUIDO [@if ($reporte->destruido) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            FUERA DE OPERACIÓN
                                                                                                            O SERVICIO [@if ($reporte->fuera_servicio) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            EN USO [@if ($reporte->en_uso) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE:
                                                                                                            [{{$reporte->otro_situa}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                        <p style="font-size:9px;">
                                                                                                            DEVUELTO A:
                                                                                                        </p>
                                                                                                        <p style="font-size:7px;">
                                                                                                            DETITULAR DEL REGISTRO SANITARIO [@if ($reporte->titu_sanitario) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            FABRICANTE [@if ($reporte->fabricante) X @else - @endif]
                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            DISTRIBUIDOR
                                                                                                            [@if ($reporte->distribuidor) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            OTRO, ESPECIFIQUE:
                                                                                                            [{{$reporte->otro_devuelto}}] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td style="width:5%;" class="tabla1">
                                                                                                        <span style="border: 2px solid darkgray; border-radius: 25px; background-color:darkgray;">7</span>
                                                                                                    </td>
                                                                                                    <td colspan="3" style="width:95%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        SEGUIMIENTO Y CIERRE DE LA NOTIFICACIÓN
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        ACCIONES PREVENTIVAS
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->acciones_preven}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        ACCIONES CORRECTIVAS
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->acciones_correc}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        ACCIONES CORRECTIVAS DE SEGURIDAD DE CAMPO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->acciones_seguricampo}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        VALOR LÍMTE DE TENDENCIA CONFORME A BUENAS PRÁCTICAS DE FABRICACIÓN
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->valor_limite}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 12px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        EN CASO DE SER REPORTE DE SEGUIMIENTO ESPECIFIQUE ADEMÁS:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        AVANCE(S) DE LA INVESTIGACIÓN DE LA CAUSA-RAÍZ DEL INCIDENTE ADVERSO
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->avances_investigacion}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        RESULTADOS PRELIMINARES
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->resultados_preliminares}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 12px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        EN CASO DE SER REPORTE FINAL ESPECIFIQUE ADEMÁS:
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        CAUSA RAÍZ DEL INCIDENTES ADVERSO (EVALUACIÓN DE RIESGO)
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->causa_raiz}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 10px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        RESULTADOS Y CONCLUSIONES
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->resultados_conclusiones}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="width:100%; font-size: 12px; background-color:darkgray; text-align:left;" class="tabla1">
                                                                                                        OTRA INFORMACIÓN QUE CONSIDERE DE INTERÉS
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" class="tabla1">
                                                                                                        {{$reporte->info_interes}}
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td colspan="4" style="text-align:justify; font-weiht:bold;">
                                                                                                        <hr> DECLARO BAJO PROTESTA
                                                                                                        DECIR VERDAD QUE
                                                                                                        CUMPLO CON LOS REQUISITOS
                                                                                                        Y NORMATIVIDAD APLICABLE,
                                                                                                        SIN QUE ME EXIMAN
                                                                                                        DE QUE LA AUTORIDAD
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
                                                                                                            SI [@if($reporte->publico_si) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                            NO [@if($reporte->publico_no) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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