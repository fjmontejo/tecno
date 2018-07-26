<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporsalud;
use App\Equipo;

class ReporsaludController extends Controller
{
    public function index(Request $request)
    {
        $reporte_personalsalud = Reporsalud::all();
        

        return view('reportessalud.index')
        ->with('reporte_personalsalud', $reporte_personalsalud);
    }

    public function create(Request $request, $id)
    {   
        $equipo = Equipo::find($id);
        return view('reportessalud.create')
        ->with('equipo', $equipo);
    }

    public function store(Request $request)
    {   


        $validatedData = $request->validate([
            'num_ingresocof' => 'required|max:255',
            'email' => 'required',
            'reporte' => 'required',
        ]);
       //$reppx = $request->all();
       $reporsalud = new Reporsalud;
       $reporsalud->num_ingresocof = $request->input('num_ingresocof');
       $reporsalud->num_noti = $request->input('num_noti');
       $reporsalud->lugar_noti = $request->input('lugar_noti');
       $reporsalud->fecha = $request->input('fecha');
       $reporsalud->centro_estat = $request->input('centro_estat');
       $reporsalud->centro_inst = $request->input('centro_inst');
       $reporsalud->hospital = $request->input('hospital');
       $reporsalud->consultorio = $request->input('consultorio');
       $reporsalud->laboratorio = $request->input('laboratorio');
       $reporsalud->otro_lug = $request->input('otro_lug');
       $reporsalud->iniciales_noti = $request->input('iniciales_noti');
       $reporsalud->email = $request->input('email');
       $reporsalud->area_adscri = $request->input('area_adscri');
       $reporsalud->presento = $request->input('presento');
       $reporsalud->fecha_incidente = $request->input('fecha_incidente');
       $reporsalud->iniciales_ope = $request->input('iniciales_ope');
       $reporsalud->tecnico = $request->input('tecnico');
       $reporsalud->enfermera = $request->input('enfermera');
       $reporsalud->medico = $request->input('medico');
       $reporsalud->paciente = $request->input('paciente');
       $reporsalud->familiar = $request->input('familiar');
       $reporsalud->otro_ope = $request->input('otro_ope');
       $reporsalud->iniciales_px_clv = $request->input('iniciales_px_clv');
       $reporsalud->edad_px = $request->input('edad_px');
       $reporsalud->peso_px = $request->input('peso_px');
       $reporsalud->estatura_px = $request->input('estatura_px');
       $reporsalud->genero = $request->input('genero');
       $reporsalud->resumen_hclinic = $request->input('resumen_hclinic');
       $reporsalud->fecha_incidente = $request->input('fecha_incidente');
       $reporsalud->lugar_estado = $request->input('lugar_estado');
       $reporsalud->lugar_muni = $request->input('lugar_muni');
       $reporsalud->lugar_locali = $request->input('lugar_locali');
       $reporsalud->casa = $request->input('casa');
       $reporsalud->trabajo = $request->input('trabajo');
       $reporsalud->via_publica = $request->input('via_publica');
       $reporsalud->ambulancia = $request->input('ambulancia');
       $reporsalud->otro_incidente = $request->input('otro_incidente');
       $reporsalud->servicio = $request->input('servicio');
       $reporsalud->nombre_institucion = $request->input('nombre_institucion');
       $reporsalud->domicilio = $request->input('domicilio');
       $reporsalud->autoridad = $request->input('autoridad');
       $reporsalud->quien = $request->input('quien');
       $reporsalud->reporte = $request->input('reporte');
       $reporsalud->no_prendio = $request->input('no_prendio');
       $reporsalud->toques = $request->input('toques');
       $reporsalud->quemo = $request->input('quemo');
       $reporsalud->rompio = $request->input('rompio');
       $reporsalud->cayo = $request->input('cayo');
       $reporsalud->no_alarma = $request->input('no_alarma');
       $reporsalud->empaque_malo = $request->input('empaque_malo');
       $reporsalud->reuso = $request->input('reuso');
       $reporsalud->reacondicion = $request->input('reacondicion');
       $reporsalud->error = $request->input('error');
       $reporsalud->mal_funcionamiento = $request->input('mal_funcionamiento');
       $reporsalud->desconexion = $request->input('desconexion');
       $reporsalud->info_confusa = $request->input('info_confusa');
       $reporsalud->otro_evento = $request->input('otro_evento');
       $reporsalud->uso_diferente = $request->input('uso_diferente');
       $reporsalud->luz_inadecua = $request->input('luz_inadecua');
       $reporsalud->desconocimientofun = $request->input('desconocimientofun');
       $reporsalud->interaccion_sustancias = $request->input('interaccion_sustancias');
       $reporsalud->descripcionyconsequencia = $request->input('descripcionyconsequencia');
       $reporsalud->muerte = $request->input('muerte');
       $reporsalud->intervencion_med = $request->input('intervencion_med');
       $reporsalud->intervencion_quir = $request->input('intervencion_quir');
       $reporsalud->daño_indirecto = $request->input('daño_indirecto');
       $reporsalud->daño_muertefetal = $request->input('daño_muertefetal');
       $reporsalud->deficiencia_permanente = $request->input('deficiencia_permanente');
       $reporsalud->daño_permanente = $request->input('daño_permanente');
       $reporsalud->hospitalizacion = $request->input('hospitalizacion');
       $reporsalud->otro_consequen = $request->input('otro_consequen');
       $reporsalud->marcaodenom = $request->input('marcaodenom');
       $reporsalud->denominaciongene = $request->input('denominaciongene');
       $reporsalud->modelo_presentacion = $request->input('modelo_presentacion');
       $reporsalud->numero_lote = $request->input('numero_lote');
       $reporsalud->nombre_fabricante = $request->input('nombre_fabricante');
       $reporsalud->numero_sanitario = $request->input('numero_sanitario');
       $reporsalud->tratamiento = $request->input('tratamiento');
       $reporsalud->diagnostico = $request->input('diagnostico');
       $reporsalud->monitoreo = $request->input('monitoreo');
       $reporsalud->otro_uso = $request->input('otro_uso');
       $reporsalud->adulto = $request->input('adulto');
       $reporsalud->pediatrico = $request->input('pediatrico');
       $reporsalud->neonatal = $request->input('neonatal');
       $reporsalud->geriatrico = $request->input('geriatrico');
       $reporsalud->desconocido = $request->input('desconocido');
       $reporsalud->destruido = $request->input('destruido');
       $reporsalud->fuera_servicio = $request->input('fuera_servicio');
       $reporsalud->en_uso = $request->input('en_uso');
       $reporsalud->otro_situa = $request->input('otro_situa');
       $reporsalud->fabricante = $request->input('fabricante');
       $reporsalud->distribuidor = $request->input('distribuidor');
       $reporsalud->comercializador = $request->input('comercializador');
       $reporsalud->otro_devuelto = $request->input('otro_devuelto');
       $reporsalud->leidoinstruc = $request->input('leidoinstruc');
       $reporsalud->uso_claro= $request->input('uso_claro');
       $reporsalud->capacitacion = $request->input('capacitacion');
       $reporsalud->publico = $request->input('publico');
       $reporsalud->equipo_id = $request->input('equipo_id');
      
       $reporsalud->save();

         return redirect('/reportessalud')->with('message', 'Equipo guardado exitosamente!');
          //return "bien";
    }
}
