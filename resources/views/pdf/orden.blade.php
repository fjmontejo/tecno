<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>ORDEN DE SERVICIO</title>
    <link rel="stylesheet" type="text/css" href="orden.css" >
  </head>
  
  <body>
        <table width="100%" border="1" cellspacing="8" cellpadding="4">
            <tr>
                <td bgcolor=gray>
                    <br>

                </td>
            </tr>
            </table>
        <table width="100%" border="1" cellspacing="8" cellpadding="4">
            <tr>
                <td>
                    <div>
                            <img src="escudo.jpg" width="200" height="100"/>
                        
                                   
                              
                                    
                            <img src="sec.png" width="200" height=100 style="float:right"/>
                    </div>
                    <center>
                            <font style="font-family: times, serif; font-size:14pt; font-style:italic" size="4">
                                    SECRETARIA DE SALUD<BR>
                                        HOSPITAL REGIONAL<BR>
                                            "DR RAFAEL PASCACIO GAMBOA"<br><br>
                                    DEPARTAMENTO DE INGENIERÌA BIOMÈDICA
        
                                </font>
                    </center>
                   
                    
                </td>
            </tr>
            <tr>
                <td bgcolor="#00BFFF">
                 <center>
                     ORDEN DE SERVICIO
                  </center>
                </td>
            </tr>
            <TR>
                <TD bgcolor="#CCCCCC">
                    <center>
                        DATOS DE QUIEN REPORTA Y GENERALES DEL AREA
                    </center>

                </TD>
            </TR>
            </table>
            <table  width="100%" border="1" cellspacing="8" cellpadding="4">
                <tr>
                    <td>
                        <CENTER>
                            AREA <hr><br>
                            <!--aqui pones la respuesta-->
                            {{$orden->area}}

                        </CENTER>
                    </td>
                    <TD>
                        <CENTER>
                            PERSONAL QUE REPORTA<hr><br>
                            <!--aqui pones la respuesta-->
                            {{$orden->reportado_por}}
                        </CENTER>
                    </TD>
                    <td>
                        <center>
                            TURNO<hr><br>
                            <!--aqui pones la respuesta-->
                            {{$orden->turno}}
                        </center>
                    </td>
                    <td>
                        <center>
                            FECHA<hr><br>
                            <!--aqui pones la respuesta-->
                           {{$orden->fecha}}

                        </center>
                    </td>
                </tr>

            </table>
        <table width="100%" border="1" cellspacing="8" cellpadding="4">
            <tr>
                <td bgcolor="#CCCCCC">
                    <center>
                        TIPO DE SERVICIO
                    </center>
                </td>
            </tr>
            <TR>
                <TD>
                    <CENTER><BR>
                         <!--DENTRO DE LOS CORCHETES PONES LO REFERENTE HA-->
                            MP  [@if($orden->mp) X @else - @endif] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            MC [@if($orden->mc) X @else - @endif]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                            ASESORIA [@if($orden->asesoria) X @else - @endif]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                            INSTALACIÒN [@if($orden->instalacion) X @else - @endif]&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                             RETIRO[@if($orden->retiro) X @else - @endif]

<BR>
                    </CENTER>
                    
                </TD>
            </TR>
            <tr>
                    <td bgcolor="#CCCCCC">
                        <center>
                            DATOS DEL EQUIPO MEDICO
                        </center>
                    </td>
                </tr>
           
        </table>
    <table width="100%" border="1" cellspacing="8" cellpadding="4">
            
        <tr>
            <td>
                EQUIPO<HR>
                    {{$orden->nombre_equipo}}
            </td>
            <td>
                    MARCA<HR>
                        {{$orden->marca}}
         </td>
         <td>
                MODELO<HR>
                    {{$orden->modelo}}
        </td>
        <td>
                NUM SERIE<HR>
                    {{$orden->num_serie}}
            </td>
            <td>
                    ACTIVO FIJO<HR>
                        {{$orden->activo_fijo}}
                </td>
        </tr>

    </table>
    <table width="100%" border="1" cellspacing="8" cellpadding="4">
            <tr>
                    <td bgcolor="#CCCCCC">
                        <center>
                            PROBLEMA REPORTADO Y ACCIONES TOMADAS
                        </center>
                    </td>
                </tr>
                  <tr>
            <td>
                PROBLEMA REPORTADO /RAZON DE SERVICIO<HR><BR>
                    <!--RESPUESTA-->
                    {{$orden->problema_reportado}}
           <BR> <BR><BR></td>
        </tr>
        <tr>
                <td>
                    PROBLEMA ENCONTRADO<HR><BR>
                        <!--RESPUESTA-->
                        {{$orden->probelma_encontrado}}
               <BR> <BR><BR></td>
            </tr>
            <tr>
                    <td>
                       ACCIONES TOMADAS<HR><BR>
                            <!--RESPUESTA-->
                            {{$orden->accion}}
                   <BR> <BR><BR></td>
                </tr>
                <tr>
                        <td>
                            REFACCIONES UTILIZADAS<HR><BR>
                                <!--RESPUESTA-->
                                {{$orden->refac_usadas}}
                       <BR> <BR><BR></td>
                    </tr>
                    <tr>
                            <td>
                                OBSERVACIONES<HR><BR>
                                    <!--RESPUESTA-->
                                    {{$orden->observaciones}}
                           <BR> <BR><BR></td>
                       <BR> </tr>
                        <tr>
                                <td bgcolor="#00BFFF">
                                 <center>
                                    <BR>
                                  </center>
                                </td>
                            </tr>
        <TR>
            <TD>
                <BR><br>
                    <hr>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                  <b>INGENIERO QUE REALIZO EL SERVICIO  {{$orden->ingeniero_servicio}}</b> 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
                   <b>JEFE DE DEPARTAMENTO DE BIOMEDICA  {{$orden->report}}</b> 
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
                   <b>ACEPTACION DE LA ORDEN DE SERVICIO  {{$orden->aceptacion_de_servicio}}</b> 
        </TD>
        </TR>
    <tr>
        <td bgcolor=gray>
            <br>

        </td>
    </tr>
    </table>
               
</html>