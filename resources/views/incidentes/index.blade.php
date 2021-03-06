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

    <h2>Historial de mantenimientos</h2>
    <br>
    <br>    
    <div class "table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>área</th>
                    <th>Personal que reporta</th>
                    <th>Turno</th>
                    <th>MP</th>
                    <th>MC</th>
                    <th>Instalación</th>
                    <th>Asesoria</th>
                    <th>Retiro</th>
                    <th>Nombre del equipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Activo fijo</th>
                    <th>N°. serie</th>
                    <th>Problema reportado</th>
                    <th>Problema encontrado</th>
                    <th>Acción tomada</th>
                    <th>Refacciones utilizadas</th>
                    <th>Observaciones</th>
                    <th>Ingeniero de servicio</th>
                    <th>Jefe de Biomédica</th>
                    <th>Acceptación de la orden de servicio</th>
                    <th>Equipo</th> 
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incidentes as $incidente)
                <tr>
                    <td>{{$incidente->fecha}}</td>
                    <td>{{$incidente->area}}</td>
                    <td>{{$incidente->reportado_por}}</td>
                    <td>{{$incidente->turno}}</td>
                    <td>@if($incidente->mp) X @else - @endif</td>
                    <td>@if($incidente->mc) X @else - @endif</td>
                    <td>@if($incidente->instalacion) X @else - @endif</td>
                    <td>@if($incidente->asesoria) X @else - @endif</td>
                    <td>@if($incidente->retiro) X @else - @endif</td>
                    <td>{{$incidente->nombre_equipo}}</td>
                    <td>{{$incidente->marca}}</td>
                    <td>{{$incidente->modelo}}</td>
                    <td>{{$incidente->activo_fijo}}</td>
                    <td>{{$incidente->num_serie}}</td>
                    <td>{{$incidente->problema_reportado}}</td>
                    <td>{{$incidente->probelma_encontrado}}</td>
                    <td>{{$incidente->accion}}</td>
                    <td>{{$incidente->refac_usadas}}</td>
                    <td>{{$incidente->observaciones}}</td>
                    <td>{{$incidente->ingeniero_servicio}}</td>
                    <td>{{$incidente->report}}</td>
                    <td>{{$incidente->aceptacion_de_servicio}}</td>
                    <td>{{$incidente->equipo['nombre']}}</td>
                    <td>  
                    <div>
                    <a href="{{url('/incidentes/editar')}}/{{$incidente->id}}" class="btn btn-sm btn-primary">Editar</a>
                    
                </div>
               
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <div>
            <div class="form-group col-md-12"> 
                <a href="#" class="badge badge-warning"><h1>Matriz de riesgo/Alertas</h2></a>
            </div>
             <br>
             <br>
             <br>
             <div class="table-responsive">
               <table class="table table-bordered">
                 <thead>
                   <tr class="bg-info">
                     <th>ID equipo</th>
                     <th>Nombre Equipo</th>
                     <th>Número de Incidentes</th>
                     <th>Estatus</th>
                   </tr>
                 </thead>
                 <tbody>
                  @forelse($inventario as $item)
                  <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->nombre}}</td>
                    <td>{{$item->count}} </td>
                    @if($item->count >= 2)
                    <td class="bg-danger">Equipo en Riesgo</td>
                    @else
                    <td class="bg-success">Bajo Control</td>
                    @endif
                  </tr>
                  @empty
                  @endforelse
                 </tbody>
               </table>
             </div>
             <br>
             <br>
             <br>
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Probabilidad</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">5</th>
                            <td>Fatal</td>
                            <td>1x cada semana</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Mayor</td>
                            <td>1x cada mes</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Ocasional</td>
                            <td>1x cada semestre</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Remoto</td>
                            <td>1x cada año</td>
                          </tr>    
                          <tr>
                            <th scope="row">1</th>
                            <td>Mayor</td>
                            <td>1x cada 5 años</td>
                          </tr>
                        </tbody>
                      </table>
             <br>
             <br>
             <br>
             <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"></th>
                        <th scope="col">Impacto</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">5</th>
                        <td>Fatal</td>
                        <td>Todo el hospital</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Mayor</td>
                        <td>Área biomédica</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Ocasional</td>
                        <td>Piso</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Remoto</td>
                        <td>Profesional de la salud</td>
                      </tr>    
                      <tr>
                        <th scope="row">1</th>
                        <td>Mayor</td>
                        <td>Toda la secretaria</td>
                      </tr>
                    </tbody>
                  </table>         

    </div>

</div>
@endsection