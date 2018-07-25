<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidente;
use App\Equipo;
use PDF;
use DB;


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
        $validatedData = $request->validate([
            'activo_fijo' => 'required|max:255',
            'num_serie' => 'required',
            'marca' => 'required',
        ]);
       
       $incidente = new Incidente;
       $incidente->fecha = $request->input('fecha');
       $incidente->area = $request->input('area');
       $incidente->reportado_por = $request->input('reportado_por');
       $incidente->turno = $request->input('turno');
       $incidente->mp = $request->input('mp');
       $incidente->mc = $request->input('mc');
       $incidente->instalacion = $request->input('instalacion');
       $incidente->asesoria = $request->input('asesoria');
       $incidente->retiro = $request->input('retiro');
       $incidente->nombre_equipo = $request->input('nombre_equipo');
       $incidente->marca = $request->input('marca');
       $incidente->modelo = $request->input('modelo');
       $incidente->activo_fijo = $request->input('activo_fijo');
       $incidente->num_serie = $request->input('num_serie');
       $incidente->problema_reportado = $request->input('problema_reportado');
       $incidente->probelma_encontrado = $request->input('probelma_encontrado');
       $incidente->accion = $request->input('accion');
       $incidente->refac_usadas = $request->input('refac_usadas');
       $incidente->observaciones = $request->input('observaciones');
       $incidente->ingeniero_servicio = $request->input('ingeniero_servicio');
       $incidente->report = $request->input('report');
       $incidente->aceptacion_de_servicio = $request->input('aceptacion_de_servicio');
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

    public function ordenes($id)
    {
        $equipo = Equipo::find($id);

        $orden = DB::table('incidentes')->where('equipo_id', '=', $id)->get();

        return view('incidentes.show')
        ->with('incidente', $equipo)
        ->with('orden', $orden);
    }

    public function descargarOrden($id)
    {
        $orden = Incidente::find($id);
        $pdf = PDF::loadView('pdf.rorden', compact('orden'));
        return $pdf->download('orden.pdf');
    }

}
