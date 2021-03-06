<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personas','PersonaController@index');

Route::get('/personas/crear', 'PersonaController@create');

Route::post('/personas/guardar', 'PersonaController@store');

Route::get('/personas/editar/{id}', 'PersonaController@edit');

Route::put('/personas/actualizar/{id}', 'PersonaController@update');

Route::get('/personas/eliminar/{id}', 'PersonaController@destroy');



Route::get('/equipos','EquipoController@index');

Route::get('/equipos/crear', 'EquipoController@create');

Route::post('/equipos/guardar', 'EquipoController@store');

Route::get('/equipos/editar/{id}', 'EquipoController@edit');

Route::put('/equipos/actualizar/{id}', 'EquipoController@update');

Route::get('/equipos/eliminar/{id}', 'EquipoController@destroy');

Route::get('/equipos/incidentes/{id}', 'EquipoController@incidentes');

Route::get('/descargar/reportesalud/{id}', 'EquipoController@descargarReporteSalud');

Route::get('/descargar/reportespaciente/{id}', 'EquipoController@descargarReportePaciente');

Route::get('/descargar/reportesfabricante/{id}', 'EquipoController@descargarReporteFabricante');

Route::get('/descargar/ordenservicio/{id}', 'EquipoController@descargarOrden');

Route::get('/calendario', 'EquipoController@calendario'); 

Route::get('/glosario', 'EquipoController@glosario');






Route::get('/incidentes','IncidenteController@index');

Route::get('/incidentes/crear/{id}', 'IncidenteController@create');

Route::post('/incidentes/guardar', 'IncidenteController@store');

Route::get('/incidentes/editar/{id}', 'IncidenteController@edit');

Route::put('/incidentes/actualizar/{id}', 'IncidenteController@update');





Route::get('/reportespx','ReporpxController@index');

Route::get('/reportespx/crear/{id}', 'ReporpxController@create');

Route::post('/reportespx/guardar', 'ReporpxController@store');


Route::get('/reportessalud','ReporsaludController@index');

Route::get('/reportessalud/crear/{id}', 'ReporsaludController@create');

Route::post('/reportessalud/guardar', 'ReporsaludController@store');



Route::get('/reportesfabricante','ReporfabricanteController@index');

Route::get('/reportesfabricante/crear/{id}', 'ReporfabricanteController@create');

Route::post('/reportesfabricante/guardar', 'ReporfabricanteController@store');
 
Route::get('/qr-code', function () 
{
    return view('qr');      
}); 

Route::get('qr-personal/{id}', function($id){
    $reporte = App\Reporpx::find($id);

    return view('qr.verificacion4')
        ->with('reporte', $reporte);
});

Route::get('qr-fabricante/{id}', function($id){
    $reporte = App\Reporpx::find($id);

    return view('qr.verificacion3')
        ->with('reporte', $reporte);
});

Route::get('qr-pacientes/{id}', function($id){
    $reporte = App\Reporpx::find($id);

    return view('qr.verificacion2')
        ->with('reporte', $reporte);
});

Route::get('qr-servicios/{id}', function($id){
    $orden = App\Incidente::find($id);

    return view('qr.verificacion')
        ->with('orden', $orden);
});






