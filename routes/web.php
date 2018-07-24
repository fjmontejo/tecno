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
 
Route::get('/pdf', function(){
    $pdf = PDF::loadView('pdf.reporte');
    $pdf->setPaper('A4','letter');
    return $pdf->download('REPORT-INCIDENTES.pdf');
});

Route::get('/test', function(){
    return view('pdf.incidentes_usuario');
});


Route::get('/test2', function(){
    return view('pdf.reporte');
});

Route::get('/test3', function(){
    return view('pdf.rpaciente');
});


Route::get('/test4', function(){
    return view('pdf.rsalud');
});






