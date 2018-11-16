<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;
use App\Reporpx;
use App\Reporsalud;
use App\Reporfabricante;
use App\Incidente;
use DB;
use Carbon\Carbon;
use PDF;

class EquipoController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $equipos = Equipo::all();
        

        return view('equipos.index')
        ->with('equipos', $equipos);
    }

    public function create(Request $request)
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {  
        $validatedData = $request->validate([
            'num_serie' => 'required|max:255',
            'status' => 'required',
            'fijo' => 'required',
        ]); 
       $equipo = new Equipo;
       $equipo->nombre = $request->input('nombre');
       $equipo->num_serie = $request->input('num_serie');
       $equipo->marca = $request->input('marca');
       $equipo->modelo = $request->input('modelo');
       $equipo->area = $request->input('area');
       $equipo->status = $request->input('status');
       $equipo->fijo = $request->input('fijo');
       $equipo->tipo = $request->input('tipo');
       $equipo->save();

        return redirect('/equipos')->with('message', 'Equipo guardado exitosamente!');
         //   return dd($equipo);
    }

    public function edit($id)
    {
        $equipo = Equipo::find($id);

        return view('equipos.edit')
        ->with('equipo', $equipo);
    }

    public function update($id, Request $request)
    {
       $equipo = Equipo::find($id);
       $equipo->nombre = $request->input('nombre');
       $equipo->num_serie = $request->input('num_serie');
       $equipo->marca = $request->input('marca');
       $equipo->modelo = $request->input('modelo');
       $equipo->area = $request->input('area');
       $equipo->status = $request->input('status');
       $equipo->fijo = $request->input('fijo');
       $equipo->tipo = $request->input('tipo'); 
       $equipo->save();

       return redirect('/equipos')->with('message', 'Registro actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $equipo = Equipo::find($id);
        $equipo->delete();

        return redirect('/equipos')->with('message', 'Equipo eliminado exitosamente!');
    }


    public function calendario(){

        return view('calendario.calendario');


    }  
     
    public function incidentes($id)
    {
        $equipo = Equipo::find($id);

        $reporsalud = DB::table('reporte_personalsalud')->where('equipo_id', '=', $id)->get();
        $reporpx = DB::table('reporte_usuarios')->where('equipo_id', '=', $id)->get();
        $reporfabricante = DB::table('reporte_fabricante')->where('equipo_id', '=', $id)->get();
        $orden = DB::table('incidentes')->where('equipo_id', '=', $id)->get();

        return view('equipos.show')
        ->with('equipo', $equipo)
        ->with('reporsalud', $reporsalud) 
        ->with('reporpx', $reporpx)
        ->with('reporfabricante', $reporfabricante)
        ->with('orden', $orden);

    }

    public function descargarReporteSalud($id)
    {
        $reporte = Reporsalud::find($id);
        $pdf= PDF::loadView('pdf.rmedico', compact('reporte'));
        return $pdf->download('personal_salud.pdf');
    }
    
    public function descargarReportePaciente($id)
    {
        /*$reporte = Reporpx::find($id);
        return view('pdf.rpaciente')
        ->with('reporte', $reporte);*/
        $reporte = Reporpx::find($id);
        $pdf = PDF::loadView('pdf.rpaciente', compact('reporte'));
        return $pdf->download('reporte_pacientes.pdf');     
    }
    public function descargarReporteFabricante($id)
    {
        $reporte = Reporfabricante::find($id);
        $pdf = PDF::loadView('pdf.rtitular', compact('reporte'));
        return $pdf->download('reporte_titular.pdf');
    }
    public function descargarOrden($id)
    {
        $orden = Incidente::find($id);
        $pdf = PDF::loadView('pdf.orden', compact('orden'));
        return $pdf->download('orden.pdf');
    }
    
}
