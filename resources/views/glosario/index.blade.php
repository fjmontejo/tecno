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

    <h2>Glosario de Terminología-Tecnovigilancia</h2>
    <br>
    <br>
    <div>
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Termino</th>
                        <th scope="col">Significado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>IS</td>
                        <td>Incidente de seguridad</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>EA</td>
                        <td>Evento adverso</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>EAL</td>
                        <td>Evento adverso leve</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>EAM</td>
                        <td>Evento adverso moderado</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>EAG</td>
                        <td>Evento adverso grave</td>
                        </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td>ETPM</td>
                        <td>Especificación técnica de mantenimiento preventivo</td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td>MP</td>
                        <td>Mantenimiento preventivo</td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td>MC</td>
                        <td>Mantenimiento correctivo</td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td>IMP</td>
                        <td>Inspección de mantenimiento preventivo</td>
                      </tr>  
                      <tr>
                        <th scope="row">10</th>
                        <td>PAM</td>
                        <td>Plan anual de mantenimiento</td>
                      </tr> 
                      <tr>
                        <th scope="row">11</th>
                        <td>DMA</td>
                        <td>Dispositivo médico activo</td>
                      </tr>    
                    </tbody>
                  </table>
    </div>      
    
</div>
@endsection