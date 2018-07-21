<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidente;
use App\Equipo;

class IncidenteController extends Controller
{  
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $incidentes = Incidente::all();
        

        return view('incidentes.index')
        ->with('incidentes', $incidentes);
    }

    public function create(Request $request, $id)
    {   
        $equipo = Equipo::find($id);

        return view('incidentes.create')
        ->with('equipo', $equipo);
    }

    public function store(Request $request)
    {
    
       $incidente = new Incidente;
       $incidente->criterio = $request->input('criterio');
       $incidente->accion = $request->input('accion');
       $incidente->refac_usadas = $request->input('refac_usadas');
       $incidente->observaciones = $request->input('observaciones');
       $incidente->report = $request->input('report');
       $incidente->equipo_id = $request->input('equipo_id');
       
      
       $incidente->save();
         //return dd($persona);
        return redirect('/incidentes')->with('message', 'Incidente registrado!');
       
    }

    public function edit($id)
    {
        $incidente = Incidente::find($id);

        return view('incidentes.edit')
        ->with('incidente', $incidente);
    }

    public function update($id, Request $request)
    {
       $incidente = Incidente::find($id);
       $incidente->criterio = $request->input('criterio');
       $incidente->accion = $request->input('accion');
       $incidente->report = $request->input('report');
       $incidente->refac_usadas = $request->input('refac_usadas');
       $incidente->observaciones = $request->input('observaciones');
       $incidente->equipo_id = $request->input('equipo_id');
       $incidente->save();

       return redirect('/incidentes')->with('message', 'Registro actualizado exitosamente!');
    }

   




}
