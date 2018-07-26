<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporpx;
use App\Equipo;

class ReporpxController extends Controller
{

    public function index(Request $request)
    {
        $reporte_usuarios = Reporpx::all();
        

        return view('reportespx.index')
        ->with('reporte_usuarios', $reporte_usuarios);
    }

    public function create(Request $request, $id)
    {   
        $equipo = Equipo::find($id);
        return view('reportespx.create')
        ->with('equipo', $equipo);
    }

    public function store(Request $request)
    {   

        $validatedData = $request->validate([
            'num_cofe' => 'required|max:255',
            'email' => 'required',
            'num_dispo' => 'required',
        ]);
       //$reppx = $request->all();
       $reppx = new Reporpx;
       $reppx->num_cofe = $request->input('num_cofe');
       $reppx->num_noti = $request->input('num_noti');
       $reppx->lugar_esta = $request->input('lugar_esta');
       $reppx->lugar_muni = $request->input('lugar_muni');
       $reppx->lugar_locali = $request->input('lugar_locali');
       $reppx->fecha = $request->input('fecha');
       $reppx->iniciales_notificador = $request->input('iniciales_notificador');
       $reppx->email = $request->input('email');
       $reppx->presento_incidente_si = $request->input('presento_incidente_si');
       $reppx->presento_incidente_no = $request->input('presento_incidente_no');
       $reppx->parentezco = $request->input('parentezco');
       $reppx->iniciales_px = $request->input('iniciales_px');
       $reppx->edad_px = $request->input('edad_px');
       $reppx->iniciales_px = $request->input('iniciales_px');
       $reppx->peso_px = $request->input('peso_px');
       $reppx->estatura_px = $request->input('estatura_px');
       $reppx->genero = $request->input('genero');
       $reppx->fecha_incidente = $request->input('fecha_incidente');
       $reppx->lugar_estado = $request->input('lugar_estado');
       $reppx->lugar_municipio = $request->input('lugar_municipio');
       $reppx->lugar_localidad = $request->input('lugar_localidad');
       $reppx->casa = $request->input('casa');
       $reppx->trabajo = $request->input('trabajo');
       $reppx->via_publica = $request->input('via_publica');
       $reppx->ambulancia = $request->input('ambulancia');
       $reppx->otro_incidente = $request->input('otro_incidente');
       $reppx->servicio_pub = $request->input('servicio_pub');
       $reppx->servicio_priv = $request->input('servicio_priv');
       $reppx->nombre_institucion = $request->input('nombre_institucion');
       $reppx->domicilio = $request->input('domicilio');
       $reppx->autoridad_si = $request->input('autoridad_si');
       $reppx->autoridad_no = $request->input('autoridad_no');
       $reppx->quien = $request->input('quien');
       $reppx->reporte = $request->input('reporte');
       $reppx->descripcion = $request->input('descripcion');
       $reppx->muerte = $request->input('muerte');
       $reppx->intervencion_med = $request->input('intervencion_med');
       $reppx->intervencion_quir = $request->input('intervencion_quir');
       $reppx->daño_indirecto = $request->input('daño_indirecto');
       $reppx->daño_muertefetal = $request->input('daño_muertefetal');
       $reppx->deficiencia_permanente = $request->input('deficiencia_permanente');
       $reppx->daño_permanente = $request->input('daño_permanente');
       $reppx->hospitalizacion = $request->input('hospitalizacion');
       $reppx->otro_consequen = $request->input('otro_consequen');
       $reppx->nombre_dispo = $request->input('nombre_dispo');
       $reppx->modelo_dispo = $request->input('modelo_dispo');
       $reppx->num_dispo = $request->input('num_dispo');

       $reppx->desconocido = $request->input('desconocido');
       $reppx->destruido = $request->input('destruido');
       $reppx->fuera_servicio = $request->input('fuera_servicio');
       $reppx->en_uso = $request->input('en_uso');
       $reppx->otro_situa = $request->input('otro_situa');
       $reppx->fabricante = $request->input('fabricante');
       $reppx->otro_situa = $request->input('otro_situa');
       $reppx->distribuidor = $request->input('distribuidor');
       $reppx->comercializador = $request->input('comercializador');
       $reppx->otro_devuelto = $request->input('otro_devuelto');
       $reppx->hacer_publico_si = $request->input('hacer_publico_si');
       $reppx->hacer_publico_no = $request->input('hacer_publico_no');
       $reppx->equipo_id = $request->input('equipo_id');
       $reppx->save();

        return redirect('/reportespx')->with('message', 'Equipo guardado exitosamente!');
         //   return dd($equipo);
    }
  
}
