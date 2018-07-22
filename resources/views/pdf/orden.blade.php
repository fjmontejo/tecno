<!DOCTYPE html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>ORDEN DE SERVICIO</title>
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
    <link rel="stylesheet" type="text/css" href="orden.css" >
  </head>
  
  <body>
      <div>
          <img src="escudo.jpg" alt="Smiley face" width="200" height=150 style="float:left">
          <img src="sec.png" alt="Smiley face" width="300" height=150 style="float:right">
        </div>
    
    <center><h1>SECRETARÍA DE SALUD </h1>
    <h2> HOSPITAL REGIONAL</h2>
    <h2>" DR RAFAEL PASCACIO GAMBOA"</h2>
  </center>
<hr>
<hr>

<center><p> 
  
    <font size="5" color="#2F4F4F"> ORDEN DE SERVICIO </font>
   </p></center>
   <HR>
<BR>

   <right><p> 
     FECHA = <span border-width= "10px 1px"style="order-image: initial; border: 1px solid black;" size ="35">{{$orden->fecha}}</span>
      
    
     <BR>
      <BR><BR>

     ÁREA :  <span style="order-image: initial; border: 1px solid black;">{{$orden->area}}</span>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     PERSONAL QUE REPORTA   <span style="order-image: initial; border: 1px solid black;">{{$orden->reportado_por}}</span>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     TURNO   <span style="order-image: initial; border: 1px solid black;">{{$orden->turno}}</span>
   </p>
   <BR>
   <CENTER><h3>TIPO DE SERVICIO</h3></CENTER>
   <HR>
   <BR>
<table width="100%" border="1" cellspacing="5" cellpadding="10">
  <tr>
      
      <td  >
        
          MP  <span style="order-image: initial; border: 1px solid black;">{{true-false}}</span>
          
              
      </td>
      
  
      <td>
           MC  <span style="order-image: initial; border: 1px solid black;">{{true-false}}</span>
      </td>
      <td>
          INSTALACIÓN <span style="order-image: initial; border: 1px solid black;">{{true-false}}</span>
      </td>
      <td>
          ASESORIA <span style="order-image: initial; border: 1px solid black;">{{true-false}}</span>
      </td>
      <td>
          RETIRO <span style="order-image: initial; border: 1px solid black;">{{true-false}}</span>
      </td>
          
    </tr> 
  
  
</table>
<CENTER><h3>DATOS DEL EQUIPO</h3></CENTER>
<HR>
<BR>
  <div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      EQUIPO   <span style="order-image: initial; border: 1px solid black;">hola</span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      MARCA  <span style="order-image: initial; border: 1px solid black;">hola</span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      MODELO   <span style="order-image: initial; border: 1px solid black;">hola</span>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <BR><BR><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
       ACTIVO FIJO  <span style="order-image: initial; border: 1px solid black;">hola</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       Nº SERIE  <span style="order-image: initial; border: 1px solid black;">hola</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
  
  </div>
        
  <BR><BR>
    <HR>
<BR>

  PROBLEMA REPORTADO / RAZÓN DEL SERVICIO
  <br><br>
<table width="100%"  align="center" border="0" cellspacing="10" cellpadding="10">
<tr>
<td>
<fieldset width="100%" height = "350" >
hola
</fieldset>
</td>
</tr>
</table>

  PROBLEMA ENCONTRADO / CONDICIÓN ENCONTRADA
  <table width="100%"  align="center" border="0" cellspacing="10" cellpadding="10">
<tr>
<td>
<fieldset width="100%" height = "350" >
hola
</fieldset>
</td>
</tr>
</table>
  ACCIONES TOMADAS
  <table width="100%"  align="center" border="0" cellspacing="10" cellpadding="10">
<tr>
<td>
<fieldset width="100%" height = "350" >
hola
</fieldset>
</td>
</tr>
</table>   
REFACCIONES UTILIZADAS  
<table width="100%"  align="center" border="0" cellspacing="10" cellpadding="10">
<tr>
<td>
<fieldset width="100">
hola
</fieldset>
</td>
</tr>
</table>
OBSERVACIONES 
<table width="100%"  align="center" border="0" cellspacing="10" cellpadding="10">
<tr>
<td>
<fieldset width="100">
hola
</fieldset>
</td>
</tr>
</table>


<br><br><br>
<BR>
  <br><BR><BR>
    <hr>
    
    <p> <span style="order-image: initial; border: 1px solid black;">hola</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <span style="order-image: initial; border: 1px solid black;">hola</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="order-image: initial; border: 1px solid black;">hola</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        </p>
    
<p>INGENIERO DE SERVICIO(NOMBRE Y FIRMA) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  JEFE DE BIOMEDICA(NOMBRE Y FIRMA)
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;
  ACEPTACIÓN DE LA ORRDEN DE SERVICIO </p>

  </body>
</html>