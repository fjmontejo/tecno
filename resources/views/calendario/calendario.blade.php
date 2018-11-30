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

    <html lang="es-ES">
      <head>
        <meta charset="utf-8">
        <title>CALENDARIO</title>
        <link rel="stylesheet" type="text/css" href="orden.css" >
      </head>
      
      <body>
            <table width="100%" border="1" cellspacing="8" cellpadding="4">
                    <tr>
                        <td>
                             <!--  <div>
                                  <img src="escudo.JPG" width="200" height="100"/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="salud.PNG" width="200" height="100"/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <img src="hospi.jfif" width="150" height="100"/>
                           
                                    <img src="SS-538x218.PNG" width="200" height=100 style="float:right"/>
                            </div>  -->
                        </td>
                    </tr>
            </table>
            <br><br>
            <center>
                <h4><b>HOSPITAL REGIONAL "DR RAFAEL PASCACIO GAMBOA"</b></h4>
                <h4>DEPARTAMENTO DE INGENIERIA BIOMEDICA</h4>
                <H4>CALENDARIZACIÒN DE ACTIVIDADES DE ACTIVIDADES</H4>
            </center>
    <br><br>
    <table  width="100%" border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td bgcolor="#FFFFFF">
    <br> ACT / MES
            </td>
            <td bgcolor="#CCCCCC">
    <br> ENERO
            </td>
              <td bgcolor="#CCCCCC">
    <br>FEBRERO
            </td>
            <td bgcolor="#CCCCCC">
                    <br>MARZO
         </td>
         <td bgcolor="#CCCCCC">
                <br>ABRIL
            </td>
            <td bgcolor="#CCCCCC">
                    <br>MAYO
            </td>
            <td bgcolor="#CCCCCC">
                    <br>JUNIO
            </td>
            <td bgcolor="#CCCCCC">
                    <br>JULIO
            </td>
            <td bgcolor="#CCCCCC">
                    <br>AGOSTO
            </td>
            <td bgcolor="#CCCCCC">
                    <br>SEPTIEMBRE
            </td>
            <td bgcolor="#CCCCCC">
                    <br>OCTUBRE
            </td>
            <td bgcolor="#CCCCCC">
                    <br>NOVIEMB
            </td>
            <td bgcolor="#CCCCCC">
                    <br>DICIEMB
            </td>
        </tr>
        <TR >
            <td bgcolor="#FFFF00">
               <font size="3"><b>RUTINA</b></font> 
            </td>
                <td bgcolor="#FFFF00">
                        <br> <font size="2">
                            inventario<br>
                            plan de accion<br>
                            etiquetas<br>
                            area de trabajo
                        </font>
               </td>
                <td bgcolor="#FFFF00">
                        <br><font size="2">
                                QX uneme<br>
                                neonatos<br>
                                tococirugia<br>
                                imageneologia<BR>
                                Laboratorio<BR>
                                consultorio,urg<br>
                                gineco,2do piso<br>
                                obstetricia y ucio
                            </font>
                </td>
                                <td bgcolor="#FFFF00">
                                    <br><font size="2">
                                            QX uneme<br>
                                            neonatos<br>
                                            tococirugia<br>
                                            imageneologia<BR>
                                            Laboratorio<BR>
                                            consultorio,urg<br>
                                            gineco,2do piso<br>
                                            obstetricia y ucio
                                        </font>
                             </td>
                             <td bgcolor="#FFFF00">
                                    <br><font size="2">
                                            QX uneme<br>
                                            neonatos<br>
                                            tococirugia<br>
                                            imageneologia<BR>
                                            Laboratorio<BR>
                                            consultorio,urg<br>
                                            gineco,2do piso<br>
                                            obstetricia y ucio
                                        </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
                                <td bgcolor="#FFFF00">
                                        <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                imageneologia<BR>
                                                Laboratorio<BR>
                                                consultorio,urg<br>
                                                gineco,2do piso<br>
                                                obstetricia y ucio
                                            </font>
                                </td>
        </TR>
        <TR >
                <td bgcolor="#009900">
                   <font size="3"><b>M-P</b></font> 
                </td>
                    <td >
                            <br> <font size="2">
                                
                            </font>
                   </td>
                    <td bgcolor="#009900">
                            <br><font size="2">
                                    
                                    neonatos<br>
                                    urg. Gineco<br>
                                   
                                </font>
                    </td>
                                    <td bgcolor="#009900">
                                        <br><font size="2">
                                    
                                                tococirugia<br>
                                                ucio<br>
                                                
                                            </font>
                                 </td>
                                 <td bgcolor="#009900">
                                        <br><font size="2">
                                                
                                                Laboratorio<BR>
                                                consultorio<br>
                                                urg. Gineco<br>
                                                
                                            </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                    QX uneme<br>
                                                    
                                                    imageneologia<BR>
                                                    
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                  
                                                    neonatos<br>
                                                    tococirugia<br>
                                                     ucio
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                QX uneme<br>
                                                neonatos<br>
                                                tococirugia<br>
                                                ucio
    
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                   
                                                    Laboratorio<BR>
                                                    consultorio<br>
                                                    urg. Gineco
                                                  
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                    QX uneme<br>
                                                    urg. Gineco
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                  
                                                    neonatos<br>
                                                    tococirugia<br>
                                                    ucio
                                                </font>
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                    
                                                    Laboratorio<BR>
                                                    consultorio,urg<br>
                                                    
                                    </td>
                                    <td bgcolor="#009900">
                                            <br><font size="2">
                                                    QX uneme<br>
                                                    neonatos<br>
                                                    tococirugia<br>
                                                    imageneologia<BR>
                                                    Laboratorio<BR>
                                                    consultorio,urg<br>
                                                    gineco,2do piso<br>
                                                    obstetricia y ucio
                                                </font>
                                    </td>
            </TR>
            <TR >
                    <td bgcolor="#FFCC99">
                       <font size="3"><b>M-C</b></font> 
                    </td>
                        <td >
                                <br> <font size="2">
                                    
                                </font>
                       </td>
                        <td bgcolor="#FFCC99">
                                <br><font size="2">
                                        
                                        neonatos<br>
                                        urg. Gineco<br>
                                       
                                    </font>
                        </td>
                                        <td bgcolor="#FFCC99">
                                            <br><font size="2">
                                        
                                                    tococirugia<br>
                                                    ucio<br>
                                                    
                                                </font>
                                     </td>
                                     <td bgcolor="#FFCC99">
                                            <br><font size="2">
                                                    
                                                    Laboratorio<BR>
                                                    consultorio<br>
                                                    urg. Gineco<br>
                                                    
                                                </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                        QX uneme<br>
                                                        
                                                        imageneologia<BR>
                                                        
                                                    </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                      
                                                        neonatos<br>
                                                        tococirugia<br>
                                                         ucio
                                                    </font>
                                        </td>
                                        <td >
                                                <br><font size="2">
                                                   
        
                                                    </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                       
                                                        Laboratorio<BR>
                                                        consultorio<br>
                                                        urg. Gineco
                                                      
                                                    </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                        QX uneme<br>
                                                        urg. Gineco
                                                    </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                      
                                                        neonatos<br>
                                                        tococirugia<br>
                                                        ucio
                                                    </font>
                                        </td>
                                        <td bgcolor="#FFCC99">
                                                <br><font size="2">
                                                        
                                                        Laboratorio<BR>
                                                        consultorio,urg<br>
                                                        
                                        </td>
                                        <td >
                                                <br><font size="2">
                                                        
                                                    </font>
                                        </td>
                </TR>
                <TR >
                        <td bgcolor="#87CEFA">
                           <font size="3"><b>CAPACITACION</b></font> 
                        </td>
                            <td >
                                    <br> <font size="2">
                                        
                                    </font>
                           </td>
                            <td bgcolor="#87CEFA">
                                    <br><font size="2">
                                            
                                            neonatos<br>
                                            urg. Gineco<br>
                                           
                                        </font>
                            </td>
                                            <td bgcolor="#87CEFA">
                                                <br><font size="2">
                                            
                                                        tococirugia<br>
                                                        ucio<br>
                                                        
                                                    </font>
                                         </td>
                                         <td bgcolor="#87CEFA">
                                                <br><font size="2">
                                                        
                                                        Laboratorio<BR>
                                                        consultorio<br>
                                                        urg. Gineco<br>
                                                        
                                                    </font>
                                            </td>
                                            <td >
                                                    <br><font size="2">
                                                         
                                                            
                                                        </font>
                                            </td>
                                            <td>
                                                    <br><font size="2">
                                                          
                                                            
                                                        </font>
                                            </td>
                                            <td >
                                                    <br><font size="2">
                                                       
            
                                                        </font>
                                            </td>
                                            <td bgcolor="#87CEFA">
                                                    <br><font size="2">
                                                           
                                                            Laboratorio<BR>
                                                            consultorio<br>
                                                            urg. Gineco
                                                          
                                                        </font>
                                            </td>
                                            <td >
                                                    <br><font size="2">
                                                           
                                                        </font>
                                            </td>
                                            <td bgcolor=>
                                                    <br><font size="2">
                                                          
                                                            
                                                        </font>
                                            </td>
                                            <td bgcolor="#87CEFA">
                                                    <br><font size="2">
                                                            
                                                            Laboratorio<BR>
                                                            consultorio,urg<br>
                                                            
                                            </td>
                                            <td >
                                                    <br><font size="2">
                                                            
                                                        </font>
                                            </td>
                    </TR>
                    <TR >
                            <td bgcolor="#D2691E">
                               <font size="3"><b>CAPACITACION<BR>
                            DIB</b></font> 
                            </td>
                                <td >
                                        <br> <font size="2">
                                            
                                        </font>
                               </td>
                                <td >
                                        <br><font size="2">
                                                
                                                
                                            </font>
                                </td>
                                                <td>
                                                    <br><font size="2">
                                                
                                                           
                                                            
                                                        </font>
                                             </td>
                                             <td >
                                                    <br><font size="2">
                                                        
                                                        </font>
                                                </td>
                                                <td bgcolor="#D2691E">
                                                        <br><font size="2">
                                                             
                                                               ING BIOMEDICA 
                                                            </font>
                                                </td>
                                                <td>
                                                        <br><font size="2">
                                                              
                                                                
                                                            </font>
                                                </td>
                                                <td >
                                                        <br><font size="2">
                                                           
                
                                                            </font>
                                                </td>
                                                <td bgcolor="#D2691E">
                                                        <br><font size="2">
                                                             
                                                               ING BIOMEDICA 
                                                            </font>
                                                </td>
                                                <td >
                                                        <br><font size="2">
                                                               
                                                            </font>
                                                </td>
                                                <td bgcolor=>
                                                        <br><font size="2">
                                                              
                                                                
                                                            </font>
                                                </td>
                                                <td >
                                                        <br><font size="2">
                                                                
                                                                
                                                                
                                                </td>
                                                <td bgcolor="#D2691E">
                                                        <br><font size="2">
                                                             
                                                               ING BIOMEDICA 
                                                            </font>
                                                </td>
                        </TR>
    </table>
        <br><br><br>
        <table width="100%" border="1" cellspacing="8" cellpadding="4">
            <tr>
                <td>
                    <hr>
                    <CENTER>
                            <h3>NOTAS</h3>
                    </CENTER>
                   
                    <ul>
    
                            
                            
                            <li type="disc">Las acividades programadas pueden variar por situaciones adversas naturales.</li>
                            <li type="disc">Lo mantenimiento correctivos prescritos en el calendario son referentes a los preventivos 
                                pensando que durante el mantenimiento preventivo suceda algo adverso que necesite correcion .</li>
    
                                <li type="disc">los mantenimientos correctivos que se requieran de inprevisto se tomaran en las horas 
                                    libre o de otras actividades dependiendo de la seriedad del suceso, quedando almacenadas las evidencias de estos
                                    sucesos en ordenes de servicio  .</li>
                                    <li type="disc">Las capacitaciones programadas pueden variar dependiendo la exigencia del personal
                                        (ya sea por personal nuevo o falta de conocimientos) .</li>
                            </ul>
                </td>
            </tr>
        </table>  
        <br><br>
        <hr>
      </body>
    </html>

</div>
@endsection
